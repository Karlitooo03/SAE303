<?php

require_once("poo_models.php");

class Repository extends Model
{

	function __construct(string $table)
	{
		parent::__construct($table);
	}

	public function requete(string $sql)
	{

		//Cas des requêtes simples
		return $this->db->query($sql);
	}

	public function findAll()
	{
		$query = $this->requete('SELECT * FROM ' . $this->table);
		return $query->fetchAll();
	}

	/*public function find(int $id)
	{
		// Exécuter la requête
		return $this->requete("SELECT * FROM {$this->table} WHERE id = $id")->fetch();
	}*/

	public function findBy(array $criteres)
	{
		$champs = [];
		$valeurs = [];

		//Boucler pour "éclater le tableau"
		foreach ($criteres as $champ => $valeur) {
			$champs[] = "$champ = ?";
			$valeurs[] = $valeur;
		}

		//Transformer le tableau en chaîne de caractères séparée par des AND
		$liste_champs = implode(' AND ', $champs);

		// Exécuter la requête
		return $this->requete("SELECT * FROM {$this->table} WHERE $liste_champs", $valeurs)->fetchAll();
	}



	public function insertData($champs, $valeurs)
	{

		$sql = "INSERT INTO " . $this->table . '(' . $champs . ')' . " VALUES (" . $valeurs . ")";

		//echo $sql;

		$this->db->prepare($sql);

		$this->db->exec($sql);
	}

	public function updateData($mail, $champs, $valeurs)
{
    $setExpressions = [];
    foreach ($champs as $index => $champ) {
        $setExpressions[] = "$champ = :$champ";
    }

    $sql = "UPDATE " . $this->table . " SET " . implode(", ", $setExpressions) . " WHERE id = :id";

    $requete = $this->db->prepare($sql);

    // Ajoutez les valeurs à la requête
    foreach ($champs as $index => $champ) {
        $requete->bindValue(":$champ", $valeurs[$index]);
    }
    $requete->bindValue(":mail", $mail);

    // Exécutez la requête
    $requete->execute();
}



	public function delete(int $id)
	{
		return $this->requete("DELETE FROM {$this->table} WHERE id = ?", [$id]);
	}
}
