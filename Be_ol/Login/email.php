<?php
 include('class.phpmailer.php');
 include('class.smtp.php');


$nama_penerima="Yusril";
$email_penerima=$_POST['email'];
$subjek="abcd";
$pesan="12345";

$mail = new PHPMailer();

$mail->Host     = "ssl://smtp.gmail.com"; 
$mail->Mailer   = "smtp";
$mail->SMTPAuth = true; 
 
 $mail->Username = "bengkelonline1@gmail.com";
 $mail->Password = "bengkelonline12345";
 $webmaster_email = "bengkelonline1@gmail.com";
 $email = $email_penerima;
 $name = $nama_penerima;
 $mail->From= $webmaster_email;
 $mail->FromName="Kemal Pahlevi";
 $mail->AddAddress($email, $name);
 
 $mail->AddReplyTo($webmaster_email, "Nama Pengirim");
 $mail->WordWrap = 50;
 
 $mail->IsHTML(true);
 $mail->Subject = $subjek;
 $mail->Body = $pesan;
 
 $mail->AltBody = "YOOO E-Mail Gw UDAH SIAP BRO";
 if(!$mail->Send()) {
  echo "mail error" . $mail->ErrorInfo;
 } else {
  echo "email berhasil di kirim";
 }
 
 
?>