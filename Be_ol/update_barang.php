<?php
	include("config.php");

	$nama = $_POST['nama_barang'];
	$harga = $_POST['harga_barang'];
	$kategori = $_POST['kategori_barang'];

	$id = $_POST['id_oli'];
	// $id_admin = $_POST['']
	$sql = mysqli_query($connect, "UPDATE tb_oli SET nama_oli = '$nama', harga = '$harga', kategori = '$kategori' WHERE id_oli = '$id'");
	if ($sql) {
		# code...
		echo "<script>
			window.location.href='data_barang.php';
		</script>";	
	}
?>