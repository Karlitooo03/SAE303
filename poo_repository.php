<?php

require_once ("poo_models.php");

class Repository extends Model {
	/*
	function __construct(string $table) { 
		parent::__construct($table);
	}
	
	public function requete(string $sql) {
		
        //Cas des requêtes simples
        return $this->db->query($sql);
    }	

	public function findAll() {
		$query = $this->requete('SELECT * FROM '.$this->table);
		return $query->fetchAll();
	}
	
	public function find(int $id) {
    // Exécuter la requête
    return $this->requete("SELECT * FROM {$this->table} WHERE id = $id")->fetch();
	}
	
	public function findBy(array $criteres) {
		$champs = [];
		$valeurs = [];

		//Boucler pour "éclater le tableau"
		foreach($criteres as $champ => $valeur){
			$champs[] = "$champ = ?";
			$valeurs[]= $valeur;
		}

		//Transformer le tableau en chaîne de caractères séparée par des AND
		$liste_champs = implode(' AND ', $champs);

		// Exécuter la requête
		return $this->requete("SELECT * FROM {$this->table} WHERE $liste_champs", $valeurs)->fetchAll();
	}
	
		//Insertion
	public function insertData($champs,$valeurs) {

		$sql = "INSERT INTO ".$this->table. '('. $champs.')'." VALUES (".$valeurs.")";
		
		echo $sql;
		
		$statt = $this->db->prepare($sql);

		$this->db->exec($sql);	
	
	}
	//jui
	public function delete(int $id){
		return $this->requete("DELETE FROM {$this->table} WHERE id = ?", [$id]);
}*/

public function insertData($nom, $mail)
{
	try {
		$stmt = $this->conn->prepare("INSERT INTO utilisateurs (nom, email) VALUES (:nom, :mail)");
		$stmt->bindParam(':nom', $nom);
		$stmt->bindParam(':email', $mail);
		$stmt->execute();
		echo "Données insérées avec succès.";
	} catch (PDOException $e) {
		echo "Erreur lors de l'insertion des données : " . $e->getMessage();
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["nom"];
		$email = $_POST["email"];
	
		$db = new database();
		$db->insertData($nom, $mail);
	}
}
}