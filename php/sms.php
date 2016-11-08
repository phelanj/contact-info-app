<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$address = $_POST['sms'];
$provider = $_POST['carrier'];


if ($provider == "1") {
	$address .= "@vtext.com";
}

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hereismycontactinfo1@gmail.com';                 // SMTP username
$mail->Password = '&jswePJqc0ZG';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('hereismycontactinfo1@gmail.com', 'Jack');
$mail->addAddress($address);     // Add a recipient
/* $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com'); */

//$mail->addAttachment('jackphelan.vcf');         // Add attachments
/* $mail->addAttachment('images.jpg');    // Optional name */ 
$mail->isHTML(false);                                  // Set email format to HTML

$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>