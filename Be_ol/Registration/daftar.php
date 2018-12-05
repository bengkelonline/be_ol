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

	if (isset($_POST['submit'])) {
		# code...
		$sql = "INSERT INTO tb_user (nama,jenis_kelamin,tgl_lahir,no_telfon,alamat,email,password) VALUES ('$nama','$jenis_kelamin','$tgl_lahir','$no_telfon','$alamat','$email','$password')";
		$query = mysqli_query($connect, $sql);
		if($query){
		echo "<script>
            window.location.href='../login/login.php';
        </script>";
		}else{
			echo "tambah data gagal";
		}
	}
	// }else{
	// 	die("akses dilarang....");
	// }
?>