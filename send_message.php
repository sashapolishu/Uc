<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'libs/PHPMailer/Exception.php';
require 'libs/PHPMailer/PHPMailer.php';
require 'libs/PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$messageBody = '<h1>PUBG | New Message</h1>';
foreach($_POST as $key => $value) {
    $messageBody .= '<h2> ' . $key . ': ' . $value . ' </h2>';
}

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'pubgsender04@gmail.com'; // SMTP User | Email Address
    $mail->Password   = 'xbsaqkrbfllefrfp'; // SMTP User | OAuth2 App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->charSet = 'UTF-8';
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('pubgsender04@gmail.com', 'PUBG Sender'); // From User E-Mail Info
    $mail->addAddress('sasha.polishu0@gmail.com', 'Nikolay Korzhikov');  // To User E-Mail Info

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'PUBG | New message'; // Message Subject
    $mail->Body    = $messageBody; // Message Body

    $mail->send();
    echo json_encode('Message has been sent');
} catch (Exception $e) {
    echo json_encode("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
}

?>