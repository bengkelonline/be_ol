<?php 
	include("config.php");
	$id = $_GET['id'];
	$sql = mysqli_query($connect, "DELETE FROM tb_oli WHERE id_oli = '$id'");

	if ($sql) {
		# code...
		echo "<script>
		window.location.href='data_barang.php';
	</script>";
	}else{
		echo "gagal";
	}
?>