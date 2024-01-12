
<?php

require_once "poo_repository.php";
require_once "poo_models.php";



echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>';

try {



    // Insérer des données dans la table des adhérents
    $modele = new Model('adherents');
    $tab1 = new Repository($modele->getTable());

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $datedenaissance = $_POST["datedenaissance"];
    $mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT);
    $adresse = $_POST["adresse"];
    $situation = $_POST["situation"];
    $charge = isset($_POST["charge"]) ? $_POST["charge"] : ''; // Assurez-vous que la clé "charge" existe
    $tel = $_POST["tel"];
    $civilite = $_POST["civilite"];
    $codepostal = $_POST["codepostal"];
    $ville = $_POST["ville"];

    $champs = "civilite, nom, prenom, mail, datedenaissance, mdp, adresse, situation, charge, tel, codepostal, ville";
    $valeurs = "'$civilite','$nom', '$prenom', '$mail', '$datedenaissance', '$mdp', '$adresse', '$situation', '$charge', '$tel','$codepostal','$ville'";

    $tab1->insertData($champs, $valeurs);

/
    //Il redirige vers page.php
    header('Location:index.php');
    //Il arrête le script et n'exécute pas le code qui pourrais se trouver en dessous
    exit;
    // Afficher le tableau des adhérents
    $colonnesAdherents = ['civilite', 'prenom', 'nom', 'datedenaissance', 'mail', 'adresse', 'situation', 'charge', 'tel', 'mdp', 'codepostal', 'ville'];
    afficherTable('adherents', $colonnesAdherents);

   /* // Afficher le tableau des réservations
    $colonnesReservations = ['prenom', 'nom', 'date', 'mail', 'pilote', 'activité', 'avion', 'tel'];
    afficherTable('reservations', $colonnesReservations);

   /* // Afficher le tableau des pilotes
    $colonnesPilotes = ['prenom', 'nom', 'tel', 'diplome', 'mail'];
    afficherTable('pilotes', $colonnesPilotes);

    // Afficher le tableau des avions
    $colonnesAvions = ['id', 'nom'];
    afficherTable('avions', $colonnesAvions);
    */
    
} catch (PDOException $e) {
    die($e->getMessage());
}




//Il arrête le script et n'exécute pas le code qui pourrais se trouver en dessous
//die();



echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>';

function afficherTable($table, $colonnes)
{
    try {
        $modele = new Model($table);
        $repository = new Repository($modele->getTable());

        $sql = "SELECT * FROM " . $modele->getTable() . ";";
        $resultat = $repository->requete($sql);

        echo '<h1 class="text-center py-4"> Liste des ' . $table . '</h1>';
        echo '<table class="table table-striped">';
        echo '<tr>';
        foreach ($colonnes as $colonne) {
            echo '<th scope="col">' . $colonne . '</th>';
        }
        echo '</tr>';

        foreach ($resultat as $ligne) {
            echo '<tr>';
            foreach ($colonnes as $colonne) {
                echo '<td>' . $ligne[$colonne] . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}



?>