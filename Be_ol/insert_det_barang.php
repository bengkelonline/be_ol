<?php
	include("config.php");

	$stok = $_POST['stok'];
	$id = $_POST['oli'];
	// $tanggal = $_POST['tanggal'];
	$id_admin = $_POST['id_adm'];

	$query = mysqli_query($connect, "INSERT INTO tb_dtl_oli (id_oli,id_admin,tanggal,stok) VALUES ('$id','$id_admin',now(),'$stok') ");
	$sql = mysqli_query($connect, "UPDATE tb_oli SET jml_stok = (SELECT jml_stok FROM (SELECT * FROM tb_oli) AS oli WHERE id_oli = '$id') + '$stok' WHERE id_oli = '$id' ");
		echo "<script>
			window.location.href='data_barang.php';
		</script>";
?>