<?php
session_start();
require 'vendor/autoload.php'; // Path to PHPMailer's autoload.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth   = true;
            $mail->Username   = 'tsamofrancis283@gmail.com'; // SMTP username
            $mail->Password   = 'ooop swpz oipb fvuy'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('tsamofrancis283@gmail.com'); // Add a recipient

            // Content
            $mail->isHTML(false);
            $mail->Subject = "Nouveau message de contact: $subject";
            $mail->Body    = "Vous avez reçu un nouveau message de contact.\n\n".
                            "Nom: $name\n".
                            "Email: $email\n".
                            "Téléphone: $phone\n".
                            "Sujet: $subject\n".
                            "Message:\n$message";

            $mail->send();
            $_SESSION['message'] = "Votre message a été envoyé avec succès.";
            $_SESSION['alert_type'] = "success";
        } catch (Exception $e) {
            $_SESSION['message'] = "Il y a eu une erreur lors de l'envoi de votre message. Veuillez réessayer.";
            $_SESSION['alert_type'] = "error";
            error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    } else {
        $_SESSION['message'] = "Veuillez remplir tous les champs obligatoires.";
        $_SESSION['alert_type'] = "error";
    }

    header('Location: ../contactform.php');
    exit();
} else {
    header('Location: ../contactform.php');
    exit();
}
?>
