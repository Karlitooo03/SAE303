<?php
//require_once "exec.php";
require_once "poo_models.php";
require_once "poo_repository.php";

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

// Afficher le tableau des adhérents
    $colonnesAdherents = ['civilite', 'prenom', 'nom', 'datedenaissance', 'mail', 'adresse', 'situation', 'charge', 'tel', 'mdp', 'codepostal', 'ville'];
    afficherTable('adherents', $colonnesAdherents);


?>