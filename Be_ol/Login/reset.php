<?php 
	include ("../config.php");

	$email = $_POST['email'];
	$password = $_POST['pass'];

	$query = mysqli_query($connect, "UPDATE tb_user SET password = '$password' WHERE email = '$email'");

	if ($query) {
		# code...
		echo "<script>alert('Password berhasil direset')</script>";
		echo "<script>window.location.href='../login/login.php'</script>";
	}else{
		echo "<script>alert('Password gagal direset')</script>";
		echo "<script>window.location.href='lupa_password.php'</script>";
	}
?>