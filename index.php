<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/phpmailer/src/Exception.php';
require 'vendor/PHPMailer/phpmailer/src/PHPMailer.php';
require 'vendor/PHPMailer/phpmailer/src/SMTP.php';

require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isMail();                                            // Set mailer to use SMTP
    //$mail->Host       = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    //$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   // $mail->Username   = 'user@example.com';                     // SMTP username
    //mail->Password   = 'secret';                               // SMTP password
    //$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    //$mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('r.mill@ntlworld.com', 'Mailer');
    $mail->addAddress('robertm@kdmediapublishing.com', 'Robert Mill');     // Add a recipient
    $mail->addAddress('robertm@kdmediapublishing.com');               // Name is optional
    $mail->addReplyTo('r.mill@ntlworld.comm', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
   //// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}