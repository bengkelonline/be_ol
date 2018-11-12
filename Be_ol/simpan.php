<?php
	// if(isset($_POST['input'])){
		include 'config.php';

	$id_user		=$_POST['id_user'];
	$nama			=$_POST['nama'];
	$jenis_kelamin	=$_POST['jenis_kelamin'];
	$no_telfon		=$_POST['no_telfon'];
	$alamat			=$_POST['alamat'];
	$email			=$_POST['email'];
	$password		=$_POST['password'];
	
$query = mysqli_query($koneksi,"INSERT INTO tb_user VALUES ('$id_user','$nama','$jenis_kelamin','$no_telfon','$alamat','$email','$password')");

		if($query){
			echo'Pendaftaran berhasil! Klik kembali untuk masuk ke beranda.<br>';
			echo'<a href="register.php">kembali </a>';
		}else{
			echo 'Gagal memasukan data! Pastikan data yang anda tuliskan benar, atau pastikan username tidak sama dengan milik orang lain.';
			echo'<a href="register.php">kembali</a>';
		}
// }
?>