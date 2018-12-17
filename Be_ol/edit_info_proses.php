<?php 
	include("config.php");
	$barang = $_POST['nama'];
	$kategori = $_POST['kategori'];
	$deskripsi = $_POST['deskripsi'];
	$id = $_POST['id_info'];

	if (isset($_POST['tambah'])) {
		# code...
		$ekstensi_diperbolehkan = array('png','jpg');
		$nama = $_FILES['file']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
			# code...
			if ($ukuran<10044070) {
				# code...
				move_uploaded_file($file_tmp, 'info/'.$nama);
				$query = mysqli_query($connect,"UPDATE info SET nama = '$barang',kategori = '$kategori',deskripsi = '$deskripsi',gambar = '$nama' WHERE id_info = '$id'");
				if ($query) {
					# code...
					echo "<script>
					window.location.href='info.php';
					alert('FILE BERHASIL DI UPLOAD');
					</script>";
				}else{
					echo "<script>
					window.location.href='info.php';
					alert('FILE GAGAL DI UPLOAD');
					</script>";
				}
			}else{
				echo "<script>
				window.location.href='info.php';
					alert('UKURAN FILE TERLALU BESAR');
					</script>";
			}
		}else{
			echo "<script>

					alert('EKSTENSI FILE YANG DIUPLOAD TIDAK DI PERBOLEHKAN');
					</script>";
		}
	}
?>