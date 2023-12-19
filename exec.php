<?php
/*
require_once "poo_repository.php";
require_once "poo_models.php";

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>';

//afficher le tableau des adhérents
echo ' <h1 class="text-center py-4"> Liste des adhérents </h1>';
try {
	$modele = new Model("adherents");

	$tab1 = new Repository($modele->getTable());

	$sql = "Select * from " . $modele->getTable() . ";";
	$resultat = $tab1->requete($sql);
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$mail = $_POST["mail"];
	$datedenaissance = $_POST["datedenaissance"];
	$mdp = $_POST["mdp"];
	$adresse = $_POST["adresse"];
	$situation = $_POST["situation"];
	$charge = $_POST["charge"];
	$tel = $_POST["tel"];
	$champs = "nom, prenom, mail, datedenaissance, mdp, adresse, situation, charge, tel";
	$valeurs = "'" . $nom . "','" . $prenom . "','" . $mail . "','" . $datedenaissance . "','" . $mdp . "','" . $adresse . '","' . $situation . "','" . $charge . "','" . $tel . "'";

	$tab1->insertData($champs, $valeurs);

	echo '<table class="table table-striped ">';
	echo '<tr>';
	echo '<th scope="col"> Civilité</th>';
	echo '<th scope="col"> Prénom</th>';
	echo '<th scope="col"> Nom</th>';
	echo '<th scope="col"> Date de naissance</th>';
	echo '<th scope="col"> Adresse e-mail</th>';
	echo '<th scope="col"> adresse</th>';
	echo '<th scope="col"> Situation familiale</th>';
	echo '<th scope="col"> Nombre de personne à charge</th>';
	echo '<th scope="col"> Numéro de téléphone</th>';
	echo '</tr>';

	foreach ($resultat as $ligne) {
		echo '<tr>';
		echo '<td>';
		echo $ligne['civilité'];
		echo '</td>';
		echo '<td>';
		echo $ligne['prenom'];
		echo '</td>';
		echo '<td>';
		echo $ligne['nom'];
		echo '</td>';
		echo '<td>';
		echo $ligne['datedenaissance'];
		echo '</td>';
		echo '<td>';
		echo $ligne['mail'];
		echo '</td>';
		echo '<td>';
		echo $ligne['adresse'];
		echo '</td>';
		echo '<td>';
		echo $ligne['situation'];
		echo '</td>';
		echo '<td>';
		echo $ligne['charge'];
		echo '</td>';
		echo '<td>';
		echo $ligne['tel'];
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';
} catch (PDOException $e) {
	die($e->getMessage());
}


//afficher le tableau des reservations


echo ' <h1 class="text-center py-4"> Liste des réservations </h1>';

try {
	$modele = new Model("reservations");

	$tab2 = new Repository($modele->getTable());

	$sql = "Select * from " . $modele->getTable() . ";";

	$resultat = $tab2->requete($sql);
	echo '<table class="table table-striped ">';
	echo '<tr>';
	echo '<th scope="col"> Prénom</th>';
	echo '<th scope="col"> Nom</th>';
	echo '<th scope="col"> Date de naissance</th>';
	echo '<th scope="col"> Adresse e-mail</th>';
	echo '<th scope="col"> Pilote</th>';
	echo '<th scope="col"> Activité</th>';
	echo '<th scope="col"> Avion</th>';
	echo '<th scope="col"> Numéro de téléphone</th>';
	echo '</tr>';

	foreach ($resultat as $ligne) {

		echo '<tr>';
		echo '<td>';
		echo $ligne['prenom'];
		echo '</td>';
		echo '<td>';
		echo $ligne['nom'];
		echo '</td>';
		echo '<td>';
		echo $ligne['date'];
		echo '</td>';
		echo '<td>';
		echo $ligne['mail'];
		echo '</td>';
		echo '<td>';
		echo $ligne['pilote'];
		echo '</td>';
		echo '<td>';
		echo $ligne['activité'];
		echo '</td>';
		echo '<td>';
		echo $ligne['avion'];
		echo '</td>';
		echo '<td>';
		echo $ligne['tel'];
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';
} catch (PDOException $e) {
	die($e->getMessage());
}

//afficher le tableau des pilotes

echo ' <h1 class="text-center py-4"> Liste des pilotes </h1>';
try {
	$modele = new Model("pilotes");

	$tab3 = new Repository($modele->getTable());

	$sql = "Select * from " . $modele->getTable() . ";";

	$resultat = $tab3->requete($sql);
	echo '<table class="table table-striped ">';

	
	echo '<tr>';
	echo '<th scope="col"> <?= "tg "  ?></th>';
	echo '<th scope="col"> Nom</th>';
	echo '<th scope="col"> Numéro de téléphone</th>';
	echo '<th scope="col"> Diplome </th>';
	echo '<th scope="col"> Adresse e-mail</th>';
	echo '</tr>';

	foreach ($resultat as $ligne) {

		echo '<tr>';
		echo '<td>';
		echo $ligne['prenom'];
		echo '</td>';
		echo '<td>';
		echo $ligne['nom'];
		echo '</td>';
		echo '<td>';
		echo $ligne['tel'];
		echo '</td>';
		echo '<td>';
		echo $ligne['diplome'];
		echo '</td>';
		echo '<td>';
		echo $ligne['mail'];
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';
} catch (PDOException $e) {
	die($e->getMessage());
}

//afficher le tableaux des avions
echo ' <h1 class="text-center py-4"> Liste des avions </h1>';
try {
	$modele = new Model("avions");

	$tab3 = new Repository($modele->getTable());

	$sql = "Select * from " . $modele->getTable() . ";";
	echo '<table class="table table-striped ">';

	
	echo '<tr>';
	echo '<th scope="col"> Id</th>';
	echo '<th scope="col"> Nom</th>';
	echo '</tr>';

	$resultat = $tab3->requete($sql);

	foreach ($resultat as $ligne) {

		echo '<tr>';
		echo '<td>';
		echo $ligne['id'];
		echo '</td>';
		echo '<td>';
		echo $ligne['nom'];
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';
} catch (PDOException $e) {
	die($e->getMessage());
}
*/<?php
require_once "poo_repository.php";
require_once "poo_models.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des adhérents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    function afficherTable(insertData($champs, $valeurs))
    {
        try {
            $table = new Repository($champs->getTable());
            $sql = "SELECT * FROM " . $champs->getTable();
            $resultat = $table->requete($sql);

            echo '<h1 class="text-center py-4"> Liste des ' . $champ->getTable() . '</h1>';
            echo '<table class="table table-striped">';
            echo '<tr>';
            foreach ($valeurs as $champ) {
                echo '<th scope="col">' . $champ . '</th>';
            }
            echo '</tr>';

            foreach ($resultat as $ligne) {
                echo '<tr>';
                foreach ($valeurs as $champ) {
                    echo '<td>' . $ligne[$champ] . '</td>';
                }
                echo '</tr>';
            }

            echo '</table>';
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    afficherTable(new Model("adherents"), ['prenom', 'nom', 'datedenaissance', 'mail', 'adresse', 'situation', 'charge', 'tel']);
    afficherTable(new Model("reservations"), ['prenom', 'nom', 'date', 'mail', 'pilote', 'activité', 'avion', 'tel']);
    afficherTable(new Model("pilotes"), ['prenom', 'nom', 'tel', 'diplome', 'mail']);
    afficherTable(new Model("avions"), ['id', 'nom']);
    ?>
</body>
</html>