<?php session_start(); ?>

<!DOCTYPE php>
<php lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Cabinet TDR Consulting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="services.css">
    <link rel="icon" href="img/logo.jpg" type="image/x-icon">


</head>

<body>

    <div class="header">

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand fs-4 fw-medium text-info" href="#">
                    <img src="img/logo.jpg" alt="Logo" class="d-inline-block img-fluid" style="max-height: 50px;">
                    <span> TDR Consulting Sarl</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fw-medium ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="bi bi-house-fill"></i> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apropos.php"><i class="bi bi-people-fill"></i> A Propos De
                                Nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tapcolor" href="services.php"><i class="bi bi-card-text"></i>
                               Nos Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php"><i class="bi bi-journal-bookmark-fill"></i> Actualite</a>
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

    <!-- Services Section -->
    <section class="services-section bg-light ">
        <div class="container border-bottom">
            <div class="row text-center mb-5">
                <div class="col">
                    <h1 class="text-secondary">Nos Services</h1>
                    <p>Le Cabinet « TDR Consulting Sarl » offre aux organisations une gamme de services
                        adaptés, efficaces et économiques.</p>
                </div>
            </div>
            <div class="row">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6 services-card service-item">
                    <div class="card h-100">
                        <img src="img/service1.jpg" class="card-img-top" alt="Service1">
                        <div class="card-body">
                            <h5 class="card-title">Etudes statistiques et socioéconomiques</h5>
                            <p class="card-text">Notre agence se spécialise dans les études statistiques et marketing,
                                utilisant des logiciels spécifiques pour guider votre succès</p>
                            <a href="#card-one" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6 services-card service-item">
                    <div class="card h-100">
                        <img src="img/service2.jpg" class="card-img-top" alt="Service2">
                        <div class="card-body">
                            <h5 class="card-title">Ingénierie économique et financière</h5>
                            <p class="card-text">Notre agence se concentre sur la maturation des projets, de
                                l’élaboration des business plans à l’exécution et au suivi-évaluation.</p>
                            <a href="#card-two" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6 services-card service-item">
                    <div class="card h-100">
                        <img src="img/service3.jpg" class="card-img-top" alt="Service3">
                        <div class="card-body">
                            <h5 class="card-title">Ingénierie informatique</h5>
                            <p class="card-text">Notre service se concentre sur le développement de sites web, de
                                logiciels personnalisés et sur les systèmes d’information géographique et la
                                cartographie.</p>
                            <a href="#card-three" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6 services-card service-item">
                    <div class="card h-100">
                        <img src="img/service4.jpg" class="card-img-top" alt="Service4">
                        <div class="card-body">
                            <h5 class="card-title">Ingénierie et management des projets</h5>
                            <p class="card-text">Ce module enseigne les bases de la création de manuels de procédures et
                                d'exécution de projets, essentielles pour la gestion et la planification des activités
                                d'une entreprise.</p>
                            <a href="#card-four" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6 services-card service-item">
                    <div class="card h-100">
                        <img src="img/service5.jpg" class="card-img-top" alt="Service5">
                        <div class="card-body">
                            <h5 class="card-title">Etudes et audits d'impact environnemental et social</h5>
                            <p class="card-text">
                                Nous offrons des services d'études et d'audits d'impact environnemental et social,
                                essentiels pour évaluer et minimiser les effets de vos projets sur l'environnement et
                                les communautés locales.</p>
                            <a href="#card-four" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6 services-card service-item">
                    <div class="card h-100">
                        <img src="img/service6.jpg" class="card-img-top" alt="Service6">
                        <div class="card-body">
                            <h5 class="card-title">Formation Continue/Appui conseil</h5>
                            <p class="card-text">Nous proposons des services de formation continue et d'appui-conseil,
                                conçus pour renforcer les compétences et accompagner les entreprises dans l'optimisation
                                de leurs performances et de leur développement.</p>
                            <a href="#card-four" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><span class="border-bottom"></span>

    <!-- Details section -->
    <section class="Details" id="Details">
        <div class="container">
            <div class="row text-center my-2">
                <div class="col">
                    <h1 class="text-secondary">Plus de détails sur nos services</h1>
                </div>
            </div>

            <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end my-2">

                <div class="card-one-details" id="card-one">
                    <h3 class="title">Etudes statistiques et socioéconomiques</h3>
                    <p class="lh-sm">Accompagnement des organisations à la conception des notes méthodologiques de
mise en œuvre des opérations de collecte et de gestion des données ainsi que les outils
de collecte associés.</p>
                    <h5>Appui à la réalisation des études statistiques</h5>
                    <ul>
                        <li class="lh-sm">
                            Elaboration des méthodologie d’enquêtes et outils de collecte:
                            Accompagnement des organisations à la conception des notes méthodologiques de
                            mise en œuvre des opérations de collecte et de gestion des données ainsi que les outils
                            de collecte associés.
                        </li>
                        <li class="lh-sm">
                            Traitement et analyse qualitatives et quantitatives des données
                            Utilisation les méthodes statistiques et logiciels pour optimiser les opérations de
                            traitement des données liées l’activité portuaire et maritime et la production des
                            différents rapports.

                        </li>
                        <li class="lh-sm">
                            Traitement et analyse qualitatives et quantitatives des données
                            Utilisation les méthodes statistiques et logiciels pour optimiser les opérations de
                            traitement des données liées l’activité portuaire et maritime et la production des
                            différents rapports.

                        </li>
                        <li class="lh-sm">
                            Modélisation des phénomènes
                            Permet de déterminer les relations de causes a effet et faire des prévisions

                        </li>
                        <li class="lh-sm">
                            Gestion des bases de données et Big data
                        </li>
                    </ul>
                </div>
            </div>

            <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end my-2">
                <div class="card-one-details" id="card-two">
                    <h3 class="title">Ingénierie économique et financière</h3>
                    <p class="lh-sm">La cible ici est d’acquérir les notions de maturation des projets (élaboration des
                        business plans, études et montages des projets d’investissement), d’élaboration des manuels de
                        procédures et d’exécution et de suivi-évaluation des projets.</p>
                    <h5>Elaboration des stratégies de développement des organisations</h5>
                    <ul>
                        <li class="lh-sm">
                            Plan stratégique
                        </li>
                        <li class="lh-sm">
                            Plan de développement des unités optionnelles.
                        </li>
                    </ul>
                    <h5>Appui à la gestion du cadre de performance</h5>
                    <ul>
                        <li class="lh-sm">
                            Elaboration du cadre stratégique de performance;
                        </li>
                        <li class="lh-sm">
                            Elaboration indicateurs de performance des activités et projets;
                        </li>
                        <li class="lh-sm">
                            Appui à l’élaboration de Projet Annuel de Performance
                        </li>
                        <li class="lh-sm">
                            Appui à l’élaboration du Rapport Annuel de Performance;
                        </li>
                    </ul>
                    <p class="lh-sm">
                        Elaboration d’un bulletin + note de conjoncture
                        Prévisions macroéconomiques et analyse de la structure financière
                        Analyse de la structure financière et du porte feuilles des investissements
                        Audit de la performance

                    </p>

                </div>
            </div>

            <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end my-2">
                <div class="card-one-details" id="card-three">
                    <h3 class="title">Ingénierie et management des projets </h3>
                    <p class="lh-sm">S’acquérir des notions fondamentales sur la maturation, l’élaboration des manuels
                        de
                        procédures et d’exécution des projets est le but de ce module. Ces notions permettent aux
                        entreprises de gérer, organiser, diriger et planifier leurs différentes activités.</p>
                    <h5>Maturation des projets</h5>
                    <ul>
                        <li class="lh-sm">
                            Élaboration des business plans ;
                        </li>
                        <li class="lh-sm">
                            Élaboration des business plans ;
                        </li>
                        <li class="lh-sm">
                            Elaboration des plans de management des risques de projets
                        </li>
                    </ul>
                    <h5>Elaboration des plans de management des risques de projets</h5>
                    <ul>
                        <li class="lh-sm">
                            Elaboration des procédures et système d’information des gestion
                        </li>
                        <li class="lh-sm">
                            Élaboration des manuels spécifiques
                        </li>
                    </ul>
                    <p class="fw-medium">
                        Elaboration des manuels d’exécution de projet;
                    </p>
                    <p class="fw-medium">
                        Elaboration des manuels de suivi-évaluation des projets ;
                    </p>
                    <p class="fw-medium">
                        Réalisation des études et audits environnementaux et sociaux.
                    </p>
                </div>
            </div>

            <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end my-2">
                <div class="card-one-details" id="card-four">
                    <h3 class="title">Ingénierie informatique
                    </h3>
                    <p class="lh-sm">L’acquisition des notions en développement de site web, de logiciels informatiques
                        et
                        personnalisés ainsi que des notions en système d’information géographique et cartographie
                        constitue
                        la mission de ce service.</p>
                    <h5>Développement de logiciels informatiques spécifiques</h5>
                    <p class="lh-sm">
                        Gestion de la trésorerie; Gestion commerciale; Gestion comptable;
                    </p>
                    <p class="lh-sm">
                        Gestion de la Paie et RH; Gestion budgétaire: préparation-exécution-suivi et
                        contrôle;
                    </p>
                    <p class="lh-sm">
                        Gestion du courrier; Gestion des unités de formation; Gestion hospitalière;
                    </p>
                    <p class="lh-sm">
                        Gestion de la pharmacie; Gestion du laboratoire; Gestion du laboratoire.
                    </p>
                    <p class="fw-medium">
                        Développement logiciels personnalisés de gestion
                    </p>
                    <p class="fw-medium">
                        Installation et administration de réseaux
                    </p>
                    <p class="fw-medium">
                        Développement, hébergement et maintenance des site web
                    </p>
                    <p class="fw-medium">
                        Système d’information géographique et cartographie
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 TDR Consulting Sarl. All rights reserved.</p>
        </div>
    </footer>

    <!-- Script links -->
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</php>