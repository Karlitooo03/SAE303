<?php
session_start();
//require_once "exec.php";
require_once "poo_models.php";
require_once "poo_repository.php";
?>
<?php
/*echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>';
*/
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
    //afficherTable('adherents', $colonnesAdherents);


?>
<!DOCTYPE html>
<html lang="en">







<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <link href="" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>



<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo"><svg id="Calque_1" class="img-fluid" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 598.45 292.25">
          <defs>
            <style>
              .cls-1 {
                fill: none;
                stroke: #1d1e1d;
                stroke-miterlimit: 10;
                stroke-width: 7px;
              }

              .cls-2 {
                font-size: 106px;
                fill: #1d1e1d;
                font-family: Helvetica;
              }
            </style>
          </defs>
          <path class="cls-1" d="M437.72,135.78,428.53,163c-8.23,11.1-12.6-5-16-10.35l-20.54-32.86a4.37,4.37,0,0,1,3.57-7.07l54.45,3a24.3,24.3,0,0,0,8.21-1l20-5.85a8.43,8.43,0,0,1,10.5,6L504.18,172c15.65,68.89,21,9.84,21.27-3l1.7-83.23a18.45,18.45,0,0,1,6.93-14.06l49.56-39.31c23.46-18.61,7.22-40-19.58-22.22L515.41,42.23A26.52,26.52,0,0,1,499,43.51l-85.08-20.6c-12.75-3.09-68.28-14.07-8.32,21.43L456,73.43A5.65,5.65,0,0,1,457.33,82l-12.15,13.9c-67.79,53-180.27,124.06-332.27,150A701.69,701.69,0,0,1,0,255.84" /><text class="cls-2" transform="translate(34.96 242.29) rotate(-5.68)">A</text><text class="cls-2" transform="translate(110.13 234.52) rotate(-12.79)">C</text><text class="cls-2" transform="translate(188.56 216.15) rotate(-18.92)">F</text><text class="cls-2" transform="matrix(0.91, -0.41, 0.41, 0.91, 252.89, 193.78)">2</text><text class="cls-2" transform="matrix(0.87, -0.49, 0.49, 0.87, 309.45, 168.19)">L</text>
        </svg></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="tarifs.html">Tarifs</a></li>
          <li><a class="nav-link scrollto" href="galerie.html">Galerie</a></li>
          <li><a class="nav-link scrollto" href="contact.html">Contact</a></li>
          <li class="dropdown" id="accountDropdown">
            <a class="nav-link scrollto" id="dropdownToggle">Compte <i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu" id="dropdownMenu">
              <li><a href="connexion.html" id="reservationLink">Connexion</a></li>
              <li><a href="inscription.html" id="inscriptionLink">Inscription</a></li>

              <li><a href="reservation.html" id="reservationLink">Réservation</a></li>
              <li><a href="compte.php" id="profileLink">Modifier mon profil</a></li>
              <li><a href="index.php" id="logoutLink">Déconnexion</a></li>



            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
  <body>
    <div>
    <?php afficherTable('adherents', $colonnesAdherents); ?>
    </div>
  </body>
            </body>
            </html>