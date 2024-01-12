<?php
session_start();

require_once "poo_repository.php";
require_once "poo_models.php";
/*
if (!isset($_SESSION['mail'])) {
    header('Location: index.php');
    exit;
} 

else {
    $newValue = $champs;
    $toUpdate = $valeurs;
    // Appel de la méthode updateData
    if ($_POST['tel'] && $_POST['mail']  && $_POST['nom']  && $_POST['prenom']  && $_POST['ville']  && $_POST['codepostal']  && $_POST['charge']  && $_POST['situation']  ){
        $repository->updateData("mail", $newValue, $toUpdate);

    }
   
    // Vous pouvez également ajouter une vérification pour voir si la mise à jour a réussi
    // Exemple de vérification
    $updatedUser = $repository->findBy($_SESSION['mail']);
}

if ($updatedUser) {
    echo "Mise à jour réussie. ";
} else {
    echo "Échec de la mise à jour.";
}

var_dump($_SESSION['mail']) ;
*/
$mail = $_SESSION['mail'];
$nom = $_SESSION['nom'];
$tel = $_SESSION['tel'];
$prenom = $_SESSION['prenom'];
$datedenaissance = $_SESSION['datedenaissance'];
$adresse = $_SESSION['adresse'];
$ville = $_SESSION['ville'];
$codepostal = $_SESSION['codepostal'];
$charge = $_SESSION['charge'];
$situation = $_SESSION['situation'];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
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
    <link href="assets/css/compte.css" rel="stylesheet">
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
                        <a href="connexion.html" class="nav-link scrollto" id="dropdownToggle">Compte <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu" id="dropdownMenu">
                        <li><a href="connexion.html" id="reservationLink">Connexion</a></li>
              <li><a href="inscription.html" id="inscriptionLink">Inscription</a></li>
                            <li><a href="#" id="reservationLink">Réservation</a></li>
                            <li><a href="compte.html" id="profileLink">Modifier mon profil</a></li>
                            <li><a href="#" id="logoutLink">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>


    <main id="main">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="ressources/images/b.jpg"><span class="font-weight-bold">PRENOM</span><span class="text-black-50">exemple@exemple.com</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Paramètre du compte</h4>
                        </div>
                        <form action="" method="SESSION">

                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Prénom</label> <input type="text" class="form-control" placeholder="Prénom" value="<?php echo htmlspecialchars($prenom); ?>" ></div>

                                <div class="col-md-6"><label class="labels">NOM</label><input type="text" class="form-control" name="nom" value="<?php echo htmlspecialchars($nom); ?>"  ></div>

                                <div class="col-md-6"><label class="labels">Date de naissance</label><input type="date" name="datedenaissance" class="form-control" value="<?php echo htmlspecialchars($datedenaissance); ?>" ></div>

                                <div class="col-md-6"><label class="labels">Sexe</label><br><input type="radio" id="homme" name="civilite" value="Monsieur"  /><label for="homme" id="h">Homme</label><input type="radio" id="femme" name="civilite" value="Madame" /><label for="Femme" id="f">Femme</label></div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">N° Téléphone</label>
                                    <input type="text" name="tel" class="form-control"  value="<?php echo htmlspecialchars($tel); ?>">
                                </div>

                                <div class="col-md-12"><label class="labels">Adresse</label><input type="text" name="adresse" class="form-control" value="<?php echo htmlspecialchars($adresse); ?>"></div>

                                <div class="col-md-12"><label class="labels">Code Postal</label><input type="text" class="form-control" name="codepostal"  value="<?php echo htmlspecialchars($codepostal); ?>"></div>

                                <div class="col-md-12"><label class="labels">Ville</label><input type="text" class="form-control" name="ville"  value="<?php echo htmlspecialchars($ville); ?>"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels" for="situation">Situation familiale :</label>
                                    <select name="situation"  id="situation-select" value="<?php echo htmlspecialchars($situation); ?> >
                                        <option value="">--Choisissez une option--</option>
                                        <option value="Célibataire">Célibataire</option>
                                        <option value="Divorcé(e)">Divorcé(e)</option>
                                        <option value="Veuf(ve)">Veuf(ve)</option>
                                        <option value="Marié(e)">Marié(e)</option>
                                        <option value="Pacsé">Pacsé(e)</option>
                                    </select>
                                </div>
                                <div class="col-md-6"><label class="labels" for="charge">Nombre de personnes à charge
                                        :</label>
                                    <select name="charge" id="personne-select" value="<?php echo htmlspecialchars($charge); ?>>
                                        <option value=">--Choisissez une option--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Modifier</span>
                        </div><br>
                        <div class="col-md-12"><label class="labels">Email</label><input type="maild" name="mail" class="form-control" placeholder="Votre mail" value="<?php echo htmlspecialchars($mail); ?>"></div><br>
                        <div class="col-md-12"><label class="labels">Mot de passe</label><input type="password" name="mdp" class="form-control" placeholder="Entrez votre mot de passe" value=""></div>
                        <div class="col-md-12"><label class="labels">Confirmation du mot de passe</label><input type="password" class="form-control" placeholder="Confirmation du mot de passe" value=""></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Enregistrer</button></div>
                </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </main>

    <div class="container footer-bg">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">© 2023 ACF2L, Inc</p>
            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Accueil</a></li>
                <li class="nav-item"><a href="compte.html" class="nav-link px-2 text-body-secondary">Compte</a></li>
                <li class="nav-item"><a href="tarifs.html" class="nav-link px-2 text-body-secondary">Tarifs</a></li>
                <li class="nav-item"><a href="galerie.html" class="nav-link px-2 text-body-secondary">Galerie</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link px-2 text-body-secondary">Contact</a></li>
            </ul>
        </footer>
    </div>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>