<?php
	include("config.php");

	$id_user = $_POST['id_user'];
	$model = $_POST['model'];
	$kendaraan = $_POST['nama_kendaraan'];
	$tahun = $_POST['tahun'];
	$nopol = $_POST['no_polisi'];
	$km = $_POST['km'];
	$oli = $_POST['id_oli'];
	$total = $_POST['total'];
	$proses = "Proses";
	$status = "Belum Lunas";
	$jumlah = 1;
	$query_stok = mysqli_query($connect,"SELECT * FROM tb_oli WHERE id_oli = '$oli'");
	$stok=mysqli_fetch_array($query_stok);
	if ($stok['jml_stok'] <= 0) {
		echo "
			<script>
				alert('STOK OLI HABIS');
				window.location.href='form_service.php';
			</script>";
	}else{
		$query = mysqli_query($connect, "INSERT INTO tb_transaksi (id_user,id_oli,model,nama_kendaraan,tahun,no_polisi,km,tgl_transaksi,total_harga,status_proses,status) VALUES('$id_user','$oli','$model','$kendaraan','$tahun','$nopol','$km',now(),'$total','$proses','$status')");
		$sql = mysqli_query($connect, "UPDATE tb_oli SET jml_stok = (SELECT jml_stok FROM (SELECT * FROM tb_oli) AS barang WHERE id_oli = '$oli')- '$jumlah' WHERE id_oli = '$oli'");
		// if ($query && $sql) {
			# code...
		if ($sql) {
			# code...
		
		echo "<script>
				window.location.href='form_service.php';
			</script>";
		}else {
			# code...
			echo "gagal";
		}
	}
?>