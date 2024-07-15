<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Require Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $subject = htmlspecialchars($_POST['subject']);
    
    try {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        // Enable SMTP debugging (set to 0 in production)
        $mail->SMTPDebug = 0; // Set to 2 for detailed output
        
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tsamofrancis283@gmail.com'; // Your Gmail address
        $mail->Password = 'ooop swpz oipb fvuy'; // Your Gmail application-specific password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        
        // Recipients
        $mail->setFrom('tsamofrancis283@gmail.com', 'Mailer'); // Sender's email and name
        $mail->addAddress('tsamofrancis283@gmail.com', 'Recipient'); // Recipient's email and name

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = "Contact Form Submission from $name";
        $mail->Body = "
        <html>
        <body>
            <h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
        </body>
        </html>";

        // Plain text version of the email
        $mail->AltBody = "
        Contact Form Submission
        
        Name: $name
        Phone: $phone
        Email: $email
        Subject: $subject
        Message: $message";

        // Send email
        $mail->send();
        $_SESSION['message'] = "Thank you for contacting us, $name. We will get back to you soon.";
        $_SESSION['alert_type'] = 'success';
        
    } catch (Exception $e) {
        $_SESSION['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        $_SESSION['alert_type'] = 'error';
    }
    
    header('Location: contactform.php');
    exit();
}
?>