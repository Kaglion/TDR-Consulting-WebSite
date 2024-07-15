<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDR Consulting Sarl</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="img/logo.jpg" type="image/x-icon">

</head>

<body>
    <!-- Header section -->
    <div class="header fixed-top">
        <!-- Top bar -->
        <div class="top-bar">
            <span class="fw-medium">Bienvenue aux services de consultation du TDR Sarl</span>

            <div class="top-bar-icons">
                <a href="mailto:cabinet.tdr.consulting@gmail.com"><i class="bi bi-envelope-at-fill"></i></a>
                <a href="https://www.facebook.com/share/wyy9BJZTiQ34b3Mn/?mibextid=qi2Omg"><i
                        class="bi bi-facebook"></i> </a>
                <a href="https://www.linkedin.com/company/tdr-consuling-sarl/"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        <!-- nav bar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="img/logo.jpg" alt="" class="logo">
                <button class="navbar-toggler color-lght" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fw-medium">
                        <li class="nav-item">
                            <a class="nav-link tapcolor" href="#home"><i class="bi bi-house-fill "></i> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apropos.php"><i class="bi bi-people-fill"></i> A Propos De
                                Nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php"><i class="bi bi-card-text"></i> Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php"><i class="bi bi-journal-bookmark-fill"></i> Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactform.php"><i class="bi bi-telephone-fill"></i>
                                Contactez-Nous</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <!-- HOME -->

    <section class="home" id="home">
        <div class="container">
            <div class="text slide-in-left">
                <h1 class="fs-1 text-wrap">Réservez votre <span>consultation</span></h1>
                <p>Nous sommes une agence de conseil spécialisée dans l’optimisation <br>des stratégies d’entreprise.
                    Notre expertise vous guide vers le succès.<br>
                </p>
            </div>
            <div class="button slide-in-Top ">
                <a href="services.php" class="btn1">Nos services</a>
                <a href="apropos.php" class="btn2 btn-primary">Notre compagnie</a>
            </div>
        </div>
    </section>

    <!-- contact section button linked to contact page -->

    <section class="contact-link">
        <div class="consultation-form">
            <h2 class="text-secondary">Votre projet, Notre challenge</h2>
            <p>Cliquez ici et soumettez vos coordonnées et nous vous contacterons sous peu.</p>
            <a href="contactform.php" class="btn btn-primary">Contactez-Nous</a>
        </div>
    </section>

    <!--Services Section -->

    <section class="services" id="services">
        <div class="container">
            <div class="subtitle my-2 text-secondary">Nos services</div>

            <div class="row">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6 services-card service-item">
                    <div class="card h-100">
                        <img src="img/service1.jpg" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Etudes statistiques et socioéconomiques</h5>
                            <p class="card-text">Notre agence se spécialise dans les études statistiques et marketing,
                                utilisant des logiciels spécifiques pour guider votre succès</p>
                            <a href="services.php" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6 my-2 services-card service-item">
                    <div class="card h-100">
                        <img src="img/service2.jpg" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Ingénierie économique et financière</h5>
                            <p class="card-text">Notre agence se concentre sur la maturation des projets, de
                                l’élaboration des business plans à l’exécution et au suivi-évaluation.</p>
                            <a href="services.php" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6 my-2 services-card service-item">
                    <div class="card h-100">
                        <img src="img/service3.jpg" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Ingénierie informatique</h5>
                            <p class="card-text">Notre service se concentre sur le développement de sites web, de
                                logiciels personnalisés et sur les systèmes d’information géographique et la
                                cartographie.</p>
                            <a href="services.php" class="btn btn-primary">En savoir plus</a>
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
                    <h1>10</h1>
                    <p>Années d'expériences</p>
                </div>

                <div class="text-box fs-6">
                    <h1>200+</h1>
                    <p>Clients satisfaits</p>
                </div>

                <div class="text-box fs-6">
                    <h1>100%</h1>
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
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo1.png" alt="Logo1">
                                </div>
                            </div>
                            <P class="fw-bold">Le Fonds de Développement des filières Cacao et Café </P>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo2.png" alt="Logo2">
                                </div>
                            </div>
                            <p class="fw-bold">Ministere De la Justice</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo3.png" alt="Logo3">
                                </div>
                            </div>
                            <p class="fw-bold">Centre d'Etudes et de Recherche pour le Développement </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo4.png" alt="Logo4">
                                </div>
                            </div>
                            <p class="fw-bold">Centre International de Référence <br> "Chantal Biya"</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo5.png" alt="Logo5">
                                </div>
                            </div>
                            <p class="fw-bold">Ministere de L’elevage des Peches et des Industries Animales</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo6.png" alt="logo6">
                                </div>
                            </div>
                            <p class="fw-bold">Ministère de l'Agriculture et du Développement Rural</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo7.png" alt="logo7">
                                </div>
                            </div>
                            <p class="fw-bold">CSC</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo8.png" alt="Logo8">
                                </div>
                            </div>
                            <p class="fw-bold">Ministère de la Planification économique et du Développement régional</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo9.png" alt="logo9">
                                </div>
                            </div>
                            <p class="fw-bold">Agence de Promotion des Petites et Moyennes Entreprises</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo10.png" alt="Logo10">
                                </div>
                            </div>
                            <p class="fw-bold">Le Bureau National de l'Etat Civil </p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo11.png" alt="Logo11">
                                </div>
                            </div>
                            <p class="fw-bold">Action Contre La Faim</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo12.png" alt="logo12">
                                </div>
                            </div>
                            <p class="fw-bold">Ministere de L'Education de base</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo13.png" alt="Logo13">
                                </div>
                            </div>
                            <p class="fw-bold">Registre National des Lieux Historiques</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo14.png" alt="Logo14">
                                </div>
                            </div>
                            <p class="fw-bold">Valorisation des PME du Secteur Agricole et Agro-Alimentaire</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo15.png" alt="Logo15">
                                </div>
                            </div>
                            <p class="fw-bold">MEATUR, La Securité Fonciere</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo16.png" alt="Logo16">
                                </div>
                            </div>
                            <p class="fw-bold">Comité international de la Croix-Rouge</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo17.png" alt="Logo17">
                                </div>
                            </div>
                            <p class="fw-bold">German Cooperation Deutsche Zusammenarbeit. Implemented by Giz</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo18.png" alt="Logo18">
                                </div>
                            </div>
                            <p class="fw-bold">Le Bon Guide</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo19.png" alt="Logo19">
                                </div>
                            </div>
                            <p class="fw-bold">American Psychological Association </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo20.png" alt="Logo20">
                                </div>
                            </div>
                            <p class="fw-bold">RO3D</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo21.png" alt="logo21">
                                </div>
                            </div>
                            <p class="fw-bold">Conseil National des Chargeurs du Cameroon</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><img src="img/partners/logo22.png" alt="Logo 22">
                                </div>
                            </div>
                            <p class="fw-bold">Kmadur</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <div class="partner-logo">
                                <div class="swiper-slide partner-logo"><span class="fw-bold fs-1"
                                        style="color: green;">AFSUR</span>
                                </div>
                            </div>
                            <p class="fw-bold">AFSUR</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <section class="footer" id="footer">
        <div class="footer-row">
            <div class="footer-col">
                <h4>TDR CONSULTING SARL</h4>
                <ul class="links">
                    <li>Nous sommes engagés à fournir un<br> service exceptionnel et à dépasser <br> vos attentes.
                        Contactez-nous aujourd'hui <br> pour planifier une consultation gratuite<br> et discuter de la
                        façon dont nous pouvons <br>aider votre entreprise à prospérer.</li>
                </ul>
            </div>

            <div class="footer-col uptiimum">
                <div class="d-flex">
                    <img src="img/uptiimum.png" class="rounded-circle" alt="uptiimum">
                    <h2 class="my-4 text-white">UPTIIMUM ERP</h2>
                </div>
                <ul class="links">
                    <li><a href="https://uptiimum.tech/#home">LOGICIEL DE GESTION HOSPITALIERE</a></li>
                    <li><a href="https://uptiimum.tech/#home">Uptiimum Erp, offre une solution efficace de gestion de
                            toutes les activités de votre établissement de santé.</a></li>
                    <li class="text-end"><a href="https://uptiimum.tech/#home"><button type="button"
                                class="btn btn-info">En savoir plus</button></a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contactez-Nous</h4>
                <ul class="links">
                    <li>Siège, Yaoundé, Carrefour Biyem-Assi, immeuble afriland first bank.</li>
                    <li>Telephone: +237 650 39 28 76 <br> - 656 23 37 27.</li>
                    <li><a href="mailto:cabinet.tdr.consulting@gmail.com">Email: cabinet.tdr.consulting@gmail.com</a>
                    </li>
                </ul>
                <div class="icons">
                    <a href="https://www.facebook.com/share/wyy9BJZTiQ34b3Mn/?mibextid=qi2Omg"><i
                            class="fa-brands fa-facebook-f icon"></i></a>
                    <a href="mailto:cabinet.tdr.consulting@gmail.com"><i
                            class="fa-sharp fa-solid fa-envelope icon"></i></a>
                    <a href="https://www.linkedin.com/company/tdr-consuling-sarl/"><i
                            class="fa-brands fa-linkedin icon"></i></a>
                    <a href="https://wa.me/+237671307052/"><i class="fa-brands fa-whatsapp icon"></i></a>
                </div>
            </div>
        </div>
        <a href="#home"><button type="button" class="btn btn-outline-info" id="fixedElement"><i
                    class="bi bi-arrow-up"></i></button></a>
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