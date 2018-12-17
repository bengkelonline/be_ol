<?php 
	include("config.php");
	$id = $_GET['id'];
	$sql = mysqli_query($connect, "DELETE FROM info WHERE id_info = '$id'");

	if ($sql) {
		# code...
		echo "<script>
		alert('Data Berhasil dihapus');
		window.location.href='info.php';
	</script>";
	}else{
		echo "gagal";
	}
?>