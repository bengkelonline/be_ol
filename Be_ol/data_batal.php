<?php 
include("config.php");
	$id = $_GET['id'];
	$status_proses = "Batal";
	$sql = mysqli_query($connect, "UPDATE tb_transaksi SET status_proses = '$status_proses'  WHERE kode_transaksi = '$id'");

	if ($sql) {
		# code...
		echo "<script>
		window.location.href='riwayat.php';
	</script>";
	}else{
		echo "gagal";
	}
?>