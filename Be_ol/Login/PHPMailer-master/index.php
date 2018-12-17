<?php
include "PHPMailerAutoload.php";
include "class.phpmailer.php";
$mail = new PHPMailer;
$mail->IsSMTP(true);
// $mail->SMTPSecure = ‘tls’;
$mail->Host = "tls://smtp.gmail.com:465"; //hostname masing-masing provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "bengkelonline1@gmail.com"; //user email
$mail->Password = "bengkelonline12345"; //password email
$mail->SetFrom("bengkelonline1@gmail.com","Nama pengirim yang muncul"); //set email pengirim
$mail->Subject = "Pemberitahuan Email dari Website"; //subyek email
$mail->AddAddress("yusrifahmi09@gmail.com","Nama penerima yang muncul"); //tujuan email
$mail->MsgHTML("Testing…");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";
?>