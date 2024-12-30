<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Carbinet TDR Consulting Sarl</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="img/logo.jpg" type="image/x-icon">

    <div id="fb-root"></div>
  <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v21.0&appId=4891195140923719"></script>

</head>

<body>

    <!-- pop up modal -->

    <div class="popup-modal" id="popupModal">
        <div class="d-flex m-2">
            <img src="img/uptiimum.png" class="rounded-circle" alt="uptiimum">
            <h2 class="my-4 text-white">UPTIIMUM ERP</h2>
            <span class="close-btn" id="closePopup">&times;</span>
        </div>
        <ul class="text-light m-2">
            <li>LOGICIEL DE GESTION HOSPITALIERE</li>
            <li>Uptiimum Erp, offre une solution efficace de gestion de toutes les activités de votre établissement de santé.</li>
            <li class="text-end">
                <a href="https://uptiimum.tech/#home">
                    <button type="button" class="btn btn-info">En savoir plus</button>
                </a>
            </li>
        </ul>
    </div>

    <!-- Header section -->
    <div class="header fixed-top">

        <!-- nav bar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand fs-4 fw-medium text-info" href="#">
                    <img src="img/logo.jpg" alt="Logo" class="d-inline-block img-fluid" style="max-height: 50px;">
                    <span> TDR Consulting Sarl</span>
                </a>
                <button class="navbar-toggler color-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fw-medium ms-auto">
                        <li class="nav-item">
                            <a class="nav-link tapcolor text-nowrap" href="#home"><i class="bi bi-house-fill"></i> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apropos.php"><i class="bi bi-people-fill"></i> A Propos De Nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php"><i class="bi bi-card-text"></i> Nos Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php"><i class="bi bi-journal-bookmark-fill"></i> Actualite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactform.php"><i class="bi bi-telephone-fill"></i> Contactez-Nous</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>


    <!-- HOME -->

    <section class="home" id="home">
        <div class="container home-content" style="margin-top:25%;">
            <div class="home-text text-white slide-in-left">
                <h1>Domaines d'intervention</h1>
                <p>Notre entreprise est spécialisée dans les domaines suivants:</p>
            </div>
            
            <div class="home-cards d-flex mt-2 slide-in-Top">
                <div class="card  border-info  mb-3">
                    <ul class="list-group list-group-flush text-bg-info">
                        <li class="list-group-item fw-bold text-bg-info">Etudes statistiques et socioéconomiques</li>
                        <li class="list-group-item fw-bold  text-bg-info">Ingénierie informatique et cartographie-SIG</li>
                        <li class="list-group-item fw-bold text-bg-info">Ingénierie économique et financière
                        </li>
                        <li class="list-group-item fw-bold text-bg-info">Management des projets et intermédiation d’affaires</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section button linked to contact page -->

    <section class="contact-link">
        <div class="consultation-form">
            <h2 class="text-dark">Cabinet TDR Consulting Sarl</h2>
            <h5>Votre projet, notre challenge!</h5>
            <p>Contactez-nous dès maintenant!</p>
            <a href="contactform.php" class="btn btn-primary">Contactez-Nous</a>
        </div>
    </section>

    <!--Services Section -->
''
    <section class="services" id="services">
        <div class="container">
            <div class="subtitle my-2 text-black">Nos services</div>

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- <a href="services.php" class="text-decoration-none"> -->
                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem;">
                            <img src="img/service1.jpg" class="card-img-top d-block" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Etudes statistiques et socioéconomiques</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Appui à la réalisation des études statistiques
                                </li>
                                <li class="list-group-item">Collecte, traitement et analyse qualitatives et quantitatives des données

                                </li>
                                <li class="list-group-item">Études marketing
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- </a> -->

                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem;">
                            <img src="img/service2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ingénierie économique et financière
                                </h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Analyse économique, élaboration des articles scientifiques
                                </li>
                                <li class="list-group-item">Elaboration des stratégies de développement des organisations
                                </li>
                                <li class="list-group-item">Appui à la mise en place du budget programme et la gestion des cadres de performance

                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem;">
                            <img src="img/service3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ingénierie informatique et cartographie-SIG
                                </h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Développement de logiciels spécifiques</li>
                                <li class="list-group-item">Installation et administration de réseaux
                                </li>
                                <li class="list-group-item">Développement, hébergement et maintenance des site web
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem;">
                            <img src="img/service4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Management des projets et intermédiation d’affaires
                                </h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Maturation des projets
                                </li>
                                <li class="list-group-item">Elaboration des manuels de procédures
                                </li>
                                <li class="list-group-item">Elaboration des manuels d’exécution et de suivi-évaluation des projets</li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>

    <!-- acheivement count section -->
    <section class="achievement my-4">
        <div class="container">
            <div class="banner">
                <!-- Text Section -->
                <div class="text-section">
                    <h2>Êtes-vous un <span>leader de l'innovation?</span> </h2>
                    <p>Nos recherches montrent que les grands leaders favorisent l’innovation pour générer une
                        croissance des revenus supérieure à celle de leurs pairs.</p>
                </div>

                <!-- Statistic Boxes -->
                <div class="text-box fs-6">
                    <h1 id="count">10</h1>
                    <p>Années d'expériences</p>
                </div>

                <div class="text-box fs-6">
                    <h1 id="count">200+</h1>
                    <p>Clients satisfaits</p>
                </div>

                <div class="text-box fs-6">
                    <h1 id="count">99,8%</h1>
                    <p>Taux de satisfaction des clients</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner section -->
    <section class="partners" id="partners">
        <div class="heading text-center">
            <h1 class="fs-4 my-2">Ils nous font confiance!</h1>
        </div>
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo1.png" class="image-logo" alt="Logo1">
                                </div>
                            </div>
                            <P class="fw-bold">Le Fonds de Développement des filières Cacao et Café </P>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo2.png" class="image-logo" alt="Logo2">
                                </div>
                            </div>
                            <p class="fw-bold">Ministere De la Justice</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo3.png" class="image-logo" alt="Logo3">
                                </div>
                            </div>
                            <p class="fw-bold">Centre d'Etudes et de Recherche pour le Développement </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo4.png" class="image-logo" alt="Logo4">
                                </div>
                            </div>
                            <p class="fw-bold">Centre International de Référence <br> "Chantal Biya"</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo5.png" class="image-logo" alt="Logo5">
                                </div>
                            </div>
                            <p class="fw-bold">Ministere de L’elevage des Peches et des Industries Animales</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo6.png" class="image-logo" alt="logo6">
                                </div>
                            </div>
                            <p class="fw-bold">Ministère de l'Agriculture et du Développement Rural</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo7.png" class="image-logo" alt="logo7">
                                </div>
                            </div>
                            <p class="fw-bold">CSC</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo8.png" class="image-logo" alt="Logo8">
                                </div>
                            </div>
                            <p class="fw-bold">Ministère de l'Economie, de la Planification et de l'Aménagement du Territoire    </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo9.png" class="image-logo" alt="logo9">
                                </div>
                            </div>
                            <p class="fw-bold">Agence de Promotion des Petites et Moyennes Entreprises</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo10.png" class="image-logo" alt="Logo10">
                                </div>
                            </div>
                            <p class="fw-bold">Le Bureau National de l'Etat Civil </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo11.png" class="image-logo" alt="Logo11">
                                </div>
                            </div>
                            <p class="fw-bold">Action Contre La Faim</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo12.png" class="image-logo" alt="logo12">
                                </div>
                            </div>
                            <p class="fw-bold">Ministere de L'Education de base</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide "><img src="img/partners/logo13.png" class="image-logo" alt="Logo13">
                                </div>
                            </div>
                            <p class="fw-bold">Registre National des Lieux Historiques</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo14.png" class="image-logo" alt="Logo14">
                                </div>
                            </div>
                            <p class="fw-bold">Valorisation des PME du Secteur Agricole et Agro-Alimentaire</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide "><img src="img/partners/logo15.png" class="image-logo" alt="Logo15">
                                </div>
                            </div>
                            <p class="fw-bold">MEATUR, La Securité Fonciere</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide "><img src="img/partners/logo16.png" class="image-logo" alt="Logo16">
                                </div>
                            </div>
                            <p class="fw-bold">Comité international de la Croix-Rouge</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide "><img src="img/partners/logo17.png" class="image-logo" alt="Logo17">
                                </div>
                            </div>
                            <p class="fw-bold">German Cooperation Deutsche Zusammenarbeit. Implemented by Giz</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide "><img src="img/partners/logo18.png" class="image-logo" alt="Logo18">
                                </div>
                            </div>
                            <p class="fw-bold">Le Bon Guide</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide "><img src="img/partners/logo19.png" class="image-logo" alt="Logo19">
                                </div>
                            </div>
                            <p class="fw-bold">Action pour la Paix et le Développement</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide "><img src="img/partners/logo20.png" class="image-logo" alt="Logo20">
                                </div> 
                            </div>
                            <p class="fw-bold">RO3D</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo21.png" class="image-logo" alt="logo21">
                                </div>
                            </div>
                            <p class="fw-bold">Conseil National des Chargeurs du Cameroon</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><img src="img/partners/logo22.png" class="image-logo" alt="Logo 22">
                                </div>
                            </div>
                            <p class="fw-bold">Kmadur</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide"><span class="fw-bold fs-1" style="color: green;">AFSUR</span>
                                </div>
                            </div>
                            <p class="fw-bold">AFSUR</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>




        <link rel="stylesheet" href="styles/activity.css">

<div class=" section-home activities-section">


  <h2>Nos activités récentes</h2>
  <div id="activities-container" class="activities-container">

    <!-- <section class="facebook-section">
      <div class="container">
          <h2>Suivez-nous sur Facebook</h2>
          <iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/cerdgroup27&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
              width="100%" 
              height="100%" 
              style="border:none;overflow:hidden" 
              scrolling="no" 
              frameborder="0" 
              allowfullscreen="true"></iframe>
      </div>
  </section> -->

    <div class="fb-page activity-card" data-href="https://www.facebook.com/tdrconsultingsarl" data-tabs="timeline" data-width="500"
      data-height="710" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
      data-show-facepile="true">
    </div>


    <div class="fb-post activity-card" data-href="https://www.facebook.com/tdrconsultingsarl/posts/pfbid0RtTnJZ7VD4MZBn5k5UmqLurkFFf8FbeNuX4n9Pszjmk2ThFd3vjFc8ar4QAwoGYal" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/tdrconsultingsarl/posts/1271297920862575" class="fb-xfbml-parse-ignore"><p>𝐀𝐕𝐈𝐒 𝐃𝐄 𝐑𝐄𝐂𝐑𝐔𝐓𝐄𝐌𝐄𝐍𝐓 𝐃𝐄 𝟓𝟎 𝐂𝐎𝐌𝐌𝐄𝐑𝐂𝐈𝐀𝐔𝐗 

TDR Consulting Sarl-Cabinet d’Etudes-Conseil lance un avis de recrutement de 50...</p>Publiée par <a href="https://www.facebook.com/tdrconsultingsarl">TDR Consulting Sarl</a> sur&nbsp;<a href="https://www.facebook.com/tdrconsultingsarl/posts/1271297920862575">Dimanche 21 juillet 2024</a></blockquote></div>

 

<div class="fb-post activity-card" data-href="https://www.facebook.com/tdrconsultingsarl/posts/pfbid02mdCdxThs77E1jUSQLXtKot9D4snAbYUHjLW9nHUBbX5izfkm1WCUSp8FgRko65NGl" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/tdrconsultingsarl/posts/1185407546118280" class="fb-xfbml-parse-ignore"><p>𝙎𝙏𝘼𝙏𝙄𝙎𝙏𝙄𝙌𝙐𝙀 : 𝘼𝙑𝘼𝙉𝙏𝘼𝙂𝙀𝙎 𝙀𝙏 𝘿É𝘽𝙊𝙐𝘾𝙃É𝙎
𝙇𝙖 𝙨𝙩𝙖𝙩𝙞𝙨𝙩𝙞𝙦𝙪𝙚 est une discipline en pleine expansion et à fort potentiel...</p>Publiée par <a href="https://www.facebook.com/tdrconsultingsarl">TDR Consulting Sarl</a> sur&nbsp;<a href="https://www.facebook.com/tdrconsultingsarl/posts/1185407546118280">Mardi 19 mars 2024</a></blockquote></div>


  </div>

</div>
    </section>

    <!-- Footer Section -->
    <section class="footer" id="footer">
        <div class="footer-row">

            <div class="footer-col uptiimum">
                <div class="d-flex">
                    <img src="img/uptiimum.png" class="rounded-circle" alt="uptiimum">
                    <h4 class="my-4 text-white">UPTIIMUM ERP</h4>
                </div>
                <ul class="links">
                    <li><a href="https://uptiimum.tech/#home">LOGICIEL DE GESTION HOSPITALIERE</a></li>
                    <li><a href="https://uptiimum.tech/#home">Uptiimum Erp, offre une solution efficace de gestion de
                            toutes les activités de votre établissement de santé.</a></li>
                    <li class="text-end"><a href="https://uptiimum.tech/#home"><button type="button" class="btn btn-info">En savoir plus</button></a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>CABINET TDR CONSULTING SARL</h4>
                <ul class="links">
                    <li>Nous sommes engagés à fournir un<br> service exceptionnel et à dépasser <br> vos attentes.
                        Contactez-nous aujourd'hui <br> pour planifier une consultation gratuite<br> et discuter de la
                        façon dont nous pouvons <br>aider votre entreprise à prospérer.</li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>CONTACTEZ-NOUS</h4>
                <ul class="links">
                    <li>Siège, Yaoundé, Carrefour Biyem-Assi, immeuble afriland first bank.</li>
                    <li>Telephone: +237 650 39 28 76 <br> - 656 23 37 27.</li>
                    <li><a href="mailto:cabinet.tdr.consulting@gmail.com">Email: cabinet.tdr.consulting@gmail.com</a>
                    </li>
                </ul>
                <div class="icons">
                    <a href="https://www.facebook.com/share/wyy9BJZTiQ34b3Mn/?mibextid=qi2Omg"><i class="fa-brands fa-facebook-f icon"></i></a>
                    <a href="mailto:cabinet.tdr.consulting@gmail.com"><i class="fa-sharp fa-solid fa-envelope icon"></i></a>
                    <a href="https://www.linkedin.com/company/tdr-consuling-sarl/"><i class="fa-brands fa-linkedin icon"></i></a>
                    <a href="https://wa.me/+237671307052/"><i class="fa-brands fa-whatsapp icon"></i></a>
                </div>
            </div>
        </div>
        <a href="#home"><button type="button" class="btn btn-outline-info" id="fixedElement"><i class="bi bi-arrow-up"></i></button></a>
        <div class="card-footer text-muted">
            <p>2024 &copy; TDR Consulting SARL. Made with <i class="fas fa-heart" style="color: red;"></i> by TDR Dev
                Team.</p>
        </div>
    </section>

    <!-- script files and links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
    <script src="js/all.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>