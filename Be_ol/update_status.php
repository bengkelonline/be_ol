<?php 
	include("config.php");
	$status = $_POST['status'];
	$kode = $_POST['kode_transaksi'];
	$query = mysqli_query($connect, "UPDATE tb_transaksi SET status = '$status' WHERE kode_transaksi = '$kode'");
	if ($query) {
		# code...
		echo "
		<script>
			window.location.href='laporan_harian.php';
		</script>";
	}else{
		echo "gagal";
	}
?>