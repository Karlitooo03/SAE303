<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

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
      <a href="index.html" class="logo"><img src="ressources/images/logo303.svg" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="tarifs.html">Tarifs</a></li>
          <li><a class="nav-link scrollto" href="galerie.html">Galerie</a></li>
          <li><a class="nav-link scrollto" href="contact.html">Contact</a></li>
          <li class="dropdown" id="accountDropdown">
            <a href="connexion.html" class="nav-link scrollto" id="dropdownToggle">Compte <i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu" id="dropdownMenu">
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

  <div class="wrapper">
    <div class="title-box">
      <i class="bx bx-cookie"></i>
      <h3>Cookies</h3>
    </div>
    <div class="info">
      <p>
        Ce site web utilise des cookies pour vous aider à avoir une expérience de navigation supérieure et plus
        pertinente sur le site web.
        <a href="#"> Plus d'info...</a>
      </p>
    </div>
    <div class="buttons">
      <button class="button" id="acceptBtn">Accepter</button>
      <button class="button">Refuser</button>
    </div>
  </div>

  <section id="hero" class="d-flex align-items-center">
    <img id="bg-image-hero" src="ressources/images/b-rbg.png" alt="" srcset="">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>EMBARQUEZ A BORD DE L'UN DE NOS ULM</h1>
        </div>
      </div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="rond1"></div>
            <h4 class="title"><a href="">Formation de pilotes et d'instructeur</a></h4>
            <p class="description">Vous avez toujours rêvé de voler ? Devenez pilotes ou instructeur à votre tour grâce
              à nos formations. Nous mettons à votre disposition des professeur qualifiée qui seront vous formez sur les
              bases, ainsi que tous le matériel nécessaires à votre formation.</p>

          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="rond2"></div>
            <h4 class="title"><a href="">Baptèmes de l'air</a></h4>
            <p class="description">Améliorez votre expérience avec nos leçons de conduite d'ULM. Nos locaux sont équipés
              de salles dédiées aux cours et des ULM de qualité à votre disposition. Que vous soyez débutant ou
              conduteur confirmé, nos cours adaptés à tous les niveaux vous permettront de développer vos talents
              d'aeronautique.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="rond3"></div>
            <h4 class="title"><a href="">Restauration rapide</a></h4>
            <p class="description">Nous vous proposons une expérience culinaire de qualité pour agrémenter votre séjour.
              Nos installations comprennent une salle de restauration équipée, offrant des repas délicieux pour
              satisfaire les appétits de nos membres. Découvrez une variété de plats soigneusement préparés avec des
              ingrédients de choix.</p>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- API météo -->
  <?php
  $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=Frotey-lès-Lure&appid=7fdb48df5993f3acec244d1c2652170d";

  $response = file_get_contents($apiUrl);

  if ($response === false) {
    die('Erreur lors de la requête vers l\'API.');
  }

  // Convertir  JSON 
  $data = json_decode($response, true);

  // Afficher les données 
  echo  $data['name'] . '<br>';


  //Convertir en celcius
  $celcius =  number_format($data['main']['temp'] - 273.15, 0);
  echo 'Température: ' . $celcius . ' °C<br>';
  //echo 'Description: ' . $data['weather'][0]['description'] . '<br>';

  // Afficher l'image qui correspond au temps
  $iconCode = $data['weather'][0]['icon'];
  $apiIcon = "http://openweathermap.org/img/wn/" . $iconCode . "@2x.png";
  echo '<img src="' . $apiIcon . '" alt="Image icon temps"><br>';
  ?>

  <main id="main">
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Nos Activités</h2>
          <p>L’aéro-club est une Association Loi 1901, agréée Jeunesse et Sports , adhérente à la FFULM ( Fédération
            Française d’ULM).
            Association enregistrée n°04674 - - Agrément n° AS70986858 Le siège social demeure 62, Avenue de la
            République, 70200 Lure</p>
        </div>
        <div class="row content">
          <div class="col-lg-6">
            <p>
              L'association assure les prestations complémentaires suivantes :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Maintenance des ULM moteur, structure…</li>
              <li><i class="ri-check-double-line"></i> Montage des ULM et de tout instrument de navigation : Compas,
                radio, transpondeur…</li>
              <li><i class="ri-check-double-line"></i> Un service de restauration rapide.</li>


            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <ul>
              <li><i class="ri-check-double-line"></i>Un hébergement en proposant trois studios et six chambres pour les
                élèves stagiaires.</li>
              <li><i class="ri-check-double-line"></i>Location d’emplacement ULM dans des hangars pour les particuliers.
              </li>
            </ul>
            <a href="#" class="btn-learn-more">En savoir plus</a>
          </div>
        </div>
      </div>
    </section>




    <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
              <p>Lorem Ipsum</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
              <p>Lorem Ipsum</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
              <p>Lorem Ipsum</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
              <p>Lorem Ipsum</p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section id="about-video" class="about-video">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
            <img src="ressources/images/b.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Catégories d'ULM</h3>
            <p class="fst-italic">
              Il existe 6 classes d’ULM :
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Le Paramoteur</li>
              <li><i class="bx bx-check-double"></i> Le Pendulaire</li>
              <li><i class="bx bx-check-double"></i> Le Multiaxes</li>
              <li><i class="bx bx-check-double"></i> L'autogire ultraléger</li>
              <li><i class="bx bx-check-double"></i> L'aérostat ultraléger</li>
              <li><i class="bx bx-check-double"></i> L'hélicoptère ultraléger</li>
            </ul>
            <p>
              L'association possède 3 types d'appareil.
            </p>
          </div>
        </div>
      </div>
    </section>



    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
          </div>
        </div>
      </div>
    </section>




    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Avis</h2>
          <p>Les avis de ceux qui nous ont déjà visité</p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Je suis très satisfait de vos services je vous remercie pour l'accueil qui est IN.CRO.YABLE! Je vous
                  remercierais jamais assez pour ce que vous avez fait pour moi! A REFAIRE!


                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="ressources/images/team-1.PNG" class="testimonial-img" alt="">
                <h3>EMMANUEL Latour</h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Bonjour dans un premier temps je tiens à remercier le personnel qui à toujours été bienveillant ! Les
                  services que vous proposer sont de haute qualité, je ne suis pas du tout déçu. Merci pour tout, bonne
                  journée et bon courage pour la suite !
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="ressources/images/team-1.PNG" class="testimonial-img" alt="">
                <h3>Ali Moloton</h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  C'était vraiment bien merci.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="ressources/images/team-1.PNG" class="testimonial-img" alt="">
                <h3>Maxime Dupont</h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Je suis très satisfait de vos services je vous remercie pour l'accueil qui est IN.CRO.YABLE! Je vous
                  remercierais jamais assez pour ce que vous avez fait pour moi! A REFAIRE!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="ressources/images/team-1.PNG" class="testimonial-img" alt="">
                <h3>EMMANUEL Latour</h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Bonjour dans un premier temps je tiens à remercier le personnel qui à toujours été bienveillant ! Les
                  services que vous proposer sont de haute qualité, je ne suis pas du tout déçu. Merci pour tout, bonne
                  journée et bon courage pour la suite !
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="ressources/images/team-1.PNG" class="testimonial-img" alt="">
                <h3>Ali Moloton</h3>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>



    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Les évènements à venir</h2>
          <p>Plus d'informations sur le site de la fédération</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox">
              <h4><a href="">13 Novembre 2024</a></h4>
              <img class="img-evenement" src="ressources/images/event-1.png" alt="" srcset="">
              <p>Journée Sécurité des vols - Grand Est Serrouville, France De 9h00 à 14h00</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox">
              <h4><a href="">8 et 9 Mars 2024</a></h4>
              <img class="img-evenement" src="ressources/images/event-5.jpg" alt="" srcset="">
              <p>1er Rassemblement ULM de femmes pilotes Saint-Martin de Castillon De 9h00 à 18h00</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox">
              <h4><a href="">1er au 3 Juin 2024</a></h4>
              <img class="img-evenement" src="ressources/images/event-3.jpg" alt="" srcset="">
              <p>France Air Expo 2024 Aéroport de Lyon-Bron - Bron, France De 9h00 à 14h00</p>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
  </main>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">© 2023 ACF2L, Inc</p>
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Accueil</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Compte</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Tarifs</a></li>
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