<?php
set_include_path('/var/www/vhosts/tieshoenderdos.nl/httpdocs/');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'form.tieshoenderdos@gmail.com';                     //SMTP username
    $mail->Password   = 'Dyt_W*6Z9yo0K`PIH"dy';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('form.tieshoenderdos@gmail.com', 'Mailer');
    $mail->addAddress('tieshoenderdos@gmail.com', 'Ties Hoenderdos');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Je hebt een nieuw bericht van ' . $_POST["name"] . ' (' .  $_POST["email"] . ')' . ' gekregen van de form op je website.';
    $mail->Body    = $_POST["description"];
    $mail->AltBody = $_POST["description"];

    $mail->send();
    readfile("verzonden.html");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>