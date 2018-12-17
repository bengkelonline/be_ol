<?php
	session_start();
	include ("../config.php"); 
	$email = $_POST['email'];
	$tanya = $_POST['pertanyaan'];
	$jawab = $_POST['jawaban'];
	$_SESSION['email_terakhir'] = $email;
	$_SESSION['tanya_terakhir'] = $tanya;
	$_SESSION['jawab_terakhir'] = $jawab;

	$query = mysqli_query($connect, "SELECT * FROM tb_user WHERE email = '$email'");
	$row = mysqli_fetch_array($query);

	if ($email == $row['email'] && $tanya == $row['pertanyaan'] && $jawab == $row['jawaban']) {
		# code...
		echo "<script>window.location.href='ubahsandi.php'</script>";
	}else {
		# code...
		echo "<script>alert('Jawaban yang anda masukkan tidak sesuai')</script>";
		echo "<script>window.location.href='lupa_password.php'</script>";
	}
?>