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
    $message = htmlspecialchars($_POST['message']);
    
    try {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        
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
        $mail->Body = "<html><body>";
        $mail->Body .= "<h2>Contact Form Submission</h2>";
        $mail->Body .= "<p><strong>Name:</strong> $name</p>";
        $mail->Body .= "<p><strong>Email:</strong> $email</p>";
        $mail->Body .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";
        $mail->Body .= "</body></html>";

        // Send email
        $mail->send();
        $_SESSION['message'] = "Thank you for contacting us, $name. We will get back to you soon.";
        $_SESSION['alert_type'] = 'success';
        
    } catch (Exception $e) {
        $_SESSION['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        $_SESSION['alert_type'] = 'error';
    }
    
    header('Location: contact_form.php');
    exit();
}
?>
