<?php session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - TDR Consulting</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="contactform.css">
  <link rel="icon" href="img/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>


</head>

<body>

   <div class="header">
    
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg  ">
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
              <a class="nav-link " href="index.php"><i class="bi bi-house-fill"></i> Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="apropos.php"><i class="bi bi-people-fill"></i> A Propos De Nous</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php"><i class="bi bi-card-text"></i>Nos Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php"><i class="bi bi-journal-bookmark-fill"></i> Actualite</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tapcolor" href="#"><i class="bi bi-telephone-fill"></i> Contactez-Nous</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </div>

  <div class="container">
    <h3 class="text-secondary my-2">Notre emplacement</h3>

    <div id="map" style="width: 100%; height: 400px;"></div>

    <div class="container bg-white ">
      <h1 class="contact-title p-2">Contactez-Nous</h1>
      <div class="row p-4">
        <!-- Contact Information -->
        <div class="col-lg-6 mb-4">
          <h4 class="text-black">Nos Coordonnées</h4>
          <p><strong><i class="bi bi-geo-alt-fill"></i> Adresse:</strong> Siège, Yaoundé, Carrefour Biyem-Assi, Immeuble
            Afriland first bank</p>
          <p><strong><i class="bi bi-telephone-fill"></i> Téléphone:</strong> +237 650 39 28 76 - 656 23 37 27.</p>
          <p><strong><i class="bi bi-envelope-at-fill"></i> Email:</strong> cabinet.tdr.consulting@gmail.com</p>
          <h4 class="text-black">Heures de travail</h4>
          <p>Lundi - vendredi : 8h - 18h</p>
          <p>Samedi : 9h - 14h</p>
          <p>Dimanche : Fermé</p>
        </div>
        <!-- Contact Form -->
        <div class="col-lg-6 mb-4">
        <form action="contact_tdr/send_email.php" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control" name="name" id="name" placeholder="Nom*" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Numéro Whatsapp">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet*" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Besoin*" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100" id="send">Envoyer</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer bg-dark text-white text-center py-3">
    <div class="container">
      <p>&copy; 2024 TDR Consulting Sarl. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap Bundle JS -->

  <script>
    var map = L.map('map').setView([3.8495252, 11.4831218], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([3.8495252, 11.4831218]).addTo(map)
      .bindPopup('TDR Consulting <br> Sarl/IFCE.')
      .openPopup();
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

</body>

</html>