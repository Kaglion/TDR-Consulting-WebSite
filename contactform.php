<?php
session_start();
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    <?php if (isset($_SESSION['message'])): ?>
        var alertType = "<?php echo $_SESSION['alert_type']; ?>";
        var message = "<?php echo $_SESSION['message']; ?>";
        
        if (alertType === 'success') {
            alert("Success: " + message);
        } else {
            alert("Error: " + message);
        }
        
        <?php
        // Clear session messages
        unset($_SESSION['message']);
        unset($_SESSION['alert_type']);
        ?>
    <?php endif; ?>
});
</script>

  <div class="header">
    <div class="top-bar">
      <span class="fw-medium">Welcome to TDR Consulting Services</span>
      <!-- Top bar -->
      <div class="top-bar-icons">
        <a href="mailto:cabinet.tdr.consulting@gmail.com"><i class="bi bi-envelope-at-fill"></i></a>
        <a href="https://www.facebook.com/share/wyy9BJZTiQ34b3Mn/?mibextid=qi2Omg"><i class="bi bi-facebook"></i> </a>
        <a href="https://www.linkedin.com/company/tdr-consuling-sarl/"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <!-- nav bar -->
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
              <a class="nav-link " href="index.html"><i class="bi bi-house-fill"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html"><i class="bi bi-people-fill"></i> About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html"><i class="bi bi-card-text"></i> Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html"><i class="bi bi-journal-bookmark-fill"></i> Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tapcolor" href="#"><i class="bi bi-telephone-fill"></i> Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </div>

  <div class="container">
    <h3 class="text-secondary my-2">Our Location</h3>

    <div id="map" style="width: 100%; height: 400px;"></div>

    <div class="container bg-white ">
      <h1 class="contact-title p-2 text-secondary">Contact Us</h1>
      <div class="row p-4">
        <!-- Contact Information -->
        <div class="col-lg-6 mb-4">
          <h4 class="text-secondary">Our Contact Information</h4>
          <p><strong><i class="bi bi-geo-alt-fill"></i> Address:</strong> Headquarters, Yaoundé, Carrefour Biyem-Assi, Afriland First Bank Building</p>
          <p><strong><i class="bi bi-telephone-fill"></i> Phone:</strong> +237 650 39 28 76 - 656 23 37 27.</p>
          <p><strong><i class="bi bi-envelope-at-fill"></i> Email:</strong> cabinet.tdr.consulting@gmail.com</p>
          <h4 class="text-secondary">Working Hours</h4>
          <p>Monday - Friday: 8am - 6pm</p>
          <p>Saturday: 9am - 2pm</p>
          <p>Sunday: Closed</p>
        </div>
        <!-- Contact Form -->
        <div class="col-lg-6 mb-4">
          <form id="contactform" method="post" action="contact_tdr/send_email.php" role="form">
          <div class="controls">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Name *</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your Name *" required="required" data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_phone">Phone</label>
                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                       <div class="col-md-12">
                         <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                         </div>
                         <br>
                       </div>
                       <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send" value="Send message">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-muted">
                            <strong>*</strong> These fields are required. Contact form template by
                        </div>
                    </div>
                </div>
          </form>
        </div>
      </div>
    </div>

    <footer class="footer mt-5">
      <p>&copy; 2024 TDR Consulting Sarl. All rights reserved.</p>
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
