<?php 
	include("config.php");
	$kode = $_POST['kode_transaksi'];

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
				move_uploaded_file($file_tmp, 'file/'.$nama);
				$query = mysqli_query($connect,"UPDATE tb_transaksi SET bukti_pembayaran = '$nama' WHERE kode_transaksi = '$kode'");
				if ($query) {
					# code...
					echo "
					<script>
						window.location.href='riwayat.php';
						alert('FILE BERHASIL DI UPLOAD');
					</script>";
				}else{
					echo "
					<script>
						window.location.href='riwayat.php';
						alert('FILE GAGAL DI UPLOAD');
					</script>";
				}
			}else{
				echo "
				<script>
					window.location.href='riwayat.php';
					alert('UKURAN FILE TERLALU BESAR');
				</script>";
			}
		}else{
			echo "
			<script>
				window.location.href='riwayat.php';
				alert('EKSTENSI FILE YANG DIUPLOAD TIDAK DI PERBOLEHKAN');
			</script>";
		}
	}

?>