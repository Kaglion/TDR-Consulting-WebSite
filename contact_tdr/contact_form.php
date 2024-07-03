<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
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
</head>
<body>
   <div class="container">
      <div class="row">
        <div class="col-xl-8 offset-xl-2 py-5">
            <form id="contact-form" method="post" action="send_email.php" role="form">
                <div class="messages"></div>
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

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="js/contact.js"></script>
</body>
</html>
