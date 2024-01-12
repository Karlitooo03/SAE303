<?php

require_once "poo_repository.php";
require_once "poo_models.php";



echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>';

try {
  // Insérer des données dans la table des reservations
  $modele = new Model('reservations');
  $tab2 = new Repository($modele->getTable());

  $mail = $_POST["mail"];
  $date = $_POST["date"];

  $activite = $_POST["activite"];
  // Assurez-vous que la clé "charge" existe



  $champs = "mail, date, activite";
  $valeurs = "'$mail', '$date', '$activite'";

  $tab2->insertData($champs, $valeurs);

  //Il redirige vers page.php
  header('Location:index.php');
} catch (PDOException $e) {
  die($e->getMessage());
}
