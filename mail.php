<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require './PHPMailer-6.1.7/src/Exception.php';
require './PHPMailer-6.1.7/src/PHPMailer.php';
require './PHPMailer-6.1.7/src/SMTP.php';
$mail = new PHPMailer(true);
try {
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp-relay.sendinblue.com';
$mail->SMTPAuth = true;
$mail->Username = 'jean-sebastien.metayer@orange.fr';
$mail->Password = 'dwHDAGtq8NmC0BYx';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->setFrom('john_doe@gmail.com', 'John Doe');
$mail->addAddress($_POST["email"]);
$mail->isHTML(true);
$mail->Name = $_POST["name"]
$mail->Subject = $_POST["subject"];
$mail->Body = $_POST["message"];
$mail->AltBody = 'Mail au format texte';
$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>