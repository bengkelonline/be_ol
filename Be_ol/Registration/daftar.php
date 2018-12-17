<?php
	// session_start();
	include("../config.php");

	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$tgl_lahir = date('Y-m-d', strtotime($tgl_lahir));
	$no_telfon = $_POST['no_telfon'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$tanya = $_POST['pertanyaan'];
	$jawab = $_POST['jawaban'];

	if (isset($_POST['submit'])) {
		# code...
		$t = mysqli_query($connect, "SELECT email FROM tb_user WHERE email = '$email'");
		$ketemu = mysqli_num_rows($t);
		if ($ketemu==0) {
			# code...
			echo "<script>alert('Email sudah terdaftar')</script>";
			echo "<script>window.location.href='registrasi.php'</script>";
		}else{
			$sql = "INSERT INTO tb_user (nama,jenis_kelamin,tgl_lahir,no_telfon,alamat,email,password,pertanyaan,jawaban) VALUES ('$nama','$jenis_kelamin','$tgl_lahir','$no_telfon','$alamat','$email','$password','$tanya','$jawab')";
			$query = mysqli_query($connect, $sql);
			if($query){
			echo "<script>
	            window.location.href='../login/login.php';
	        </script>";
		}
	}


		// $verif = mysqli_fetch_array($t);
		// if ($email != $verif['email']) {
		// 	# code...
		// 	$sql = "INSERT INTO tb_user (nama,jenis_kelamin,tgl_lahir,no_telfon,alamat,email,password,pertanyaan,jawaban) VALUES ('$nama','$jenis_kelamin','$tgl_lahir','$no_telfon','$alamat','$email','$password','$tanya','$jawab')";
		// 	$query = mysqli_query($connect, $sql);
		// 	if($query){
		// 	echo "<script>
	 //            window.location.href='../login/login.php';
	 //        </script>";
		// 	}else{
		// 		echo "<script>alert('Tambah data gagal')</script>";
		// 	}
		// }else{
		// 	echo "<script>alert('Email sudah terdaftar')</script>";
		// 	echo "<script>window.location.href='registrasi.php'</script>";
		// 	// while (echo $verif['email']) {
		// 	// 	# code...
		// 	// }
		// }
	}
	// }else{
	// 	die("akses dilarang....");
	// }
?>