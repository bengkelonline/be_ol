<?php
require_once ("classes/class.phpmailer.php");
$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = 'tls'; 
$mail->Host = "smtp.gmail.com"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->SMTPAuth = true;
$mail->Username = "bengkelonline1@gmail.com"; //user email
$mail->Password = "bengkelonline12345"; //password email 
$mail->SetFrom("bengkelonline1@gmail.com","Nama pengirim"); //set email pengirim
$mail->Subject = "Testing"; //subyek email
$mail->AddAddress("yusrilfahmi09@gmail.com","nama email tujuan");  //tujuan email
$mail->MsgHTML("Testing...");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";
?>