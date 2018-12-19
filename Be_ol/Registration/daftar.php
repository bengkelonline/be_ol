<?php
	// session_start();
	include("../config.php");

	$nama_user = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	// $tgl_lahir = $_POST['tgl_lahir'];
	$date1 = strtr($_POST['tgl_lahir'], '/', '-');
	$tgl_lahir = date('Y-m-d', strtotime($date1));
	$no_telfon = $_POST['no_telfon'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$tanya = $_POST['pertanyaan'];
	$jawab = $_POST['jawaban'];

		$ekstensi_diperbolehkan = array('png','jpg');
		$nama = $_FILES['file']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

	if (isset($_POST['submit'])) {
		# code...
		$t = mysqli_query($connect, "SELECT email FROM tb_user WHERE email = '$email'");
		$ketemu = mysqli_num_rows($t);
		if ($ketemu>0) {
			# code...
			echo "<script>alert('Email sudah terdaftar')</script>";
			echo "<script>window.location.href='registrasi.php'</script>";
		}else{
			if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
			# code...
			if ($ukuran<10044070) {
				# code...
				move_uploaded_file($file_tmp, '../foto/'.$nama);
				$query = mysqli_query($connect,"INSERT INTO tb_user (nama,jenis_kelamin,tgl_lahir,no_telfon,alamat,email,password,gambar,pertanyaan,jawaban) VALUES ('$nama_user','$jenis_kelamin','$tgl_lahir','$no_telfon','$alamat','$email','$password','$nama','$tanya','$jawab')");
				if ($query) {
					# code...
					echo "<script>alert('Registrasi Berhasil !!!')</script>";
					echo "<script>
	             			window.location.href='../login/login.php';
	         			</script>";
				}else{
					echo "
					<script>
						alert('FILE GAGAL DI UPLOAD');
						window.location.href='daftar.php';
					</script>";
				}
			}else{
				echo "
				<script>
					alert('UKURAN FILE TERLALU BESAR');
					window.location.href='daftar.php';
				</script>";
			}
		}else{
			echo "
			<script>
				alert('EKSTENSI FILE YANG DIUPLOAD TIDAK DI PERBOLEHKAN');
				window.location.href='daftar.php';
			</script>";
			}
		}
	}
?>