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

        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid">
                <a class="navbar-brand fs-4 fw-medium text-info" href="#">
                    <img src="img/logo.jpg" alt="Logo" class="d-inline-block img-fluid" style="max-height: 50px;">
                    <span> TDR Consulting Sarl</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation" ">
                    <span class=" navbar-toggler-icon"> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav fw-medium ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="bi bi-house-fill"></i> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tapcolor" href="apropos.php"><i class="bi bi-people-fill"></i> A Propos
                                De Nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php"><i class="bi bi-card-text"></i> Nos Services</a>
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


    <!-- About Section -->
    <section class="about-section bg-light">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 about-text">
                    <h3>TDR Consulting Sarl, solution efficace et efficiente à vos besoins stratégiques et opérationnels
                    </h3>
                    <p>Le Cabinet « TDR Consulting Sarl » est un bureau d’études puluridiscilipnaires dont les activités sont orientées principalement dans les domaines suivants : statistique, cartographie-SIG, informatique, économie, management des projets, environnement, intermédiation des affaires et formation continue. Nous disposons d’atouts considérables dans notre champ d’action permettant de concevoir des solutions personnalisées, performantes adaptées aux besoins des clients.
                    </p>
                    <p>Pour chaque mission, TDR Consulting Sarl met en place une équipe projet placée sous la supervision de l’Administrateur Général. La cohésion entre les membres de l’équipe soutenue par notre savoir-faire, notre forte expérience permet de travailler dans un climat d’échange permanent à l’effet d’un meilleur rendement ;
                    </p>
                </div>

                <div class="col-lg-6 about-image">
                    <img src="img/background.jpeg" alt="About-img">
                </div>
                <p class="mt-2">De plus, la forte prise en compte de l’approche genre, ainsi que notre bilinguisme contribuent grandement à la satisfaction de nos clients <br>
                    Nos experts diplômés des grandes écoles nationales et internationales disposent d’une solide expérience dans les secteurs public, privé et social.
                </p>

                <h3 class=" mt-4">NOS AVANTAGES STRATEGIQUES</h3>
                <p class="mt-2">Le Cabinet TDR Consulting Sarl présente de nombreux avantages qui font de lui un prestataire de choix :</p>
                <ul>
                    <li class="fw-medium">Agir à proximité de nos cibles:</li>
                    <p>la proximité est une condition indispensable à la compréhension des besoins de nos cibles afin de mieux orienter nos actions;</p>
                    <li class="fw-medium">Proposer des services personnalisés à la cible:</li>
                    <p>nous développons des solutions spécifiques en tenant compte des besoins et attentes du client;</p>
                    <li class="fw-medium">Notre flexibilité: </li>
                    <p>nous nous plions à vos désirs soient-ils pour le travail les week-ends, les jours fériés. </p>
                    <li class="fw-medium">La sécurité de vos données: </li>
                    <p>la confidentialité des données est un point d’honneur au sein de notre entreprise. A cet effet, nous avons mis sur pieds de nombreuses procédures de sécurité;</p>
                    <li class="fw-medium">Être attentif aux résultats de nos actions : </li>
                    <p>le suivi et l’évaluation de nos actions sont des gages de performance au Cabinet TDR Consulting Sarl;</p>
                    <li class="fw-medium">Faire le pari de la confiance :</li>
                    <p>nous faisons confiance à nos équipes et à nos partenaires ;</p>
                    <li class="fw-medium">Notre représentation Territoriale:</li>
                    <p>Nous disposions au Cameroun et dans 9 Pays africains une équipe d’experts régulièrement recyclés par nos soins.
                    </p>

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