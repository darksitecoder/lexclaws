<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Server settings
   

    // Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('contact.lexclaws@gmail.com'); // Where the mail should be sent

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Message';
    $mail->Body    = "
        <h3>New Enquiry Message</h3>
        <p><strong>Name:</strong> {$_POST['name']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Phone:</strong> {$_POST['phone']}</p>
        <p><strong>Message:</strong><br>{$_POST['message']}</p>
    ";

    $mail->send();
    echo 'OK'; // For AJAX success check
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
