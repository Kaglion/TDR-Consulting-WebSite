<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Propos - TDR Consulting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="apropos.css">
    <link rel="icon" href="img/logo.jpg" type="image/x-icon">


</head>

<body>
    <div class="header">
        <div class="top-bar">
            <span class="fw-medium">Bienvenue aux services de consultation du TDR Sarl</span>
            <div class="top-bar-icons">
                <a href="mailto:cabinet.tdr.consulting@gmail.com"><i class="bi bi-envelope-at-fill"></i></a>
                <a href="https://www.facebook.com/share/wyy9BJZTiQ34b3Mn/?mibextid=qi2Omg"><i
                        class="bi bi-facebook"></i> </a>
                <a href="https://www.linkedin.com/company/tdr-consuling-sarl/"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid">
                <img src="img/logo.jpg" alt="logo" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="bi bi-house-fill"></i> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tapcolor" href="apropos.php"><i class="bi bi-people-fill"></i> A Propos
                                De Nous</a>
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


    <!-- About Section -->
    <section class="about-section bg-light">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 about-text">
                    <h2 class="text-secondary">À propos de nous</h2>
                    <p>Chez TDR Consulting SARL, nous sommes une équipe de consultants passionnés et expérimentés dédiés
                        à aider les entreprises de toutes tailles à atteindre leurs objectifs. Nous combinons notre
                        connaissance approfondie de l'industrie avec des stratégies innovantes pour fournir des
                        solutions sur mesure qui stimulent la croissance et le succès.</p>
                    <p>Notre structure SARL (Société à Responsabilité Limitée) garantit la transparence et la
                        responsabilité, vous donnant ainsi la tranquillité d'esprit de travailler avec un partenaire
                        fiable. Nous sommes engagés à bâtir des relations solides avec nos clients, en prenant le temps
                        de comprendre leurs besoins et défis uniques</p>
                    <p>Que vous soyez une startup cherchant des conseils ou une entreprise établie cherchant à porter
                        vos opérations au niveau supérieur, TDR Consulting SARL a l'expertise et les ressources pour
                        vous aider à atteindre vos aspirations.</p>

                </div>

                <div class="col-lg-6 about-image">
                    <img src="img/background.jpeg" alt="About-img">
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="text-secondary">Nos buts</h2>
                    <p>Nous visons à;</p>
                    <ul>
                        <li>Fournir des services de conseil de premier ordre.</li>
                        <li>Générer une croissance mesurable pour les clients.</li>
                        <li>Favoriser les relations clients à long terme.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h2 class="text-secondary">Notre mission</h2>
                    <p>Notre mission est de donner aux entreprises les informations et les stratégies nécessaires pour
                        atteindre leur plein potentiel.</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="text-secondary">Expérience</h2>
                    <p>Avec plus de 10 ans d’expérience dans le secteur du conseil, notre équipe a fait ses preuves
                        de succès.</p>
                </div>
                <div class="col-lg-6">
                    <h2 class="text-secondary">Nos objectifs</h2>
                    <p>Notre objectif est de fournir :</p>
                    <ul>
                        <li>Des solutions personnalisées pour chaque client.</li>
                        <li>Informations et stratégies exploitables.</li>
                        <li>Soutien et développement continus.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 TDR Consulting Sarl. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>

</body>

</html>