<?php
	// session_start();
	include("config.php");

	$nama_user = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	// $tgl_lahir = $_POST['tgl_lahir'];
	$date1 = strtr($_POST['tanggal_lahir'], '/', '-');
	$tgl_lahir = date('Y-m-d', strtotime($date1));
	$no_telfon = $_POST['no_telfon'];
	$alamat = $_POST['alamat'];
	if (isset($_POST['submit'])) {
		$query = mysqli_query($connect,"UPDATE tb_user SET nama = '$nama_user',jenis_kelamin = '$jenis_kelamin',tgl_lahir = '$tgl_lahir',no_telfon = '$no_telfon',alamat ='$alamat'");
		if ($query) {
			# code...
			echo "<script>alert('Edit Profil Berhasil !!!')</script>";
			echo "<script>
         			window.location.href='profil.php';
     			</script>";
		}else{
			echo "
			<script>
				alert('Edit Profil Gagal');
				window.location.href='edit_profil.php';
			</script>";
		}
	}
?>