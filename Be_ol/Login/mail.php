<?php

	// $to = $_POST['email'];
	// $subject = "Bengkel Online";
	// $txt = "http://localhost/be_ol/login/ubah%20sandi.php";
	// $headers = 'From: yusrilfahmi832@gmail.com' . "\r\n" . 
	// 			'X-Mailer : PHP/' . phpversion();

	// mail($to, $subject, $txt, $headers);
?>

<?php
/**
 * This example shows making an SMTP connection with authentication.
 */
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require '../vendor/autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'bengkelonline1@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'bengkelonline12345';
//Set who the message is to be sent from
$mail->setFrom('bengkelonline1@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('bengkelonline1@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('whoto@example.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
function save_mail($mail){
	$path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
	$imapStream = imap_open($path, $mail->Username, $mail->Password);
	$result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
	imap_close($imapStream);
	return $result;
}
?>
}