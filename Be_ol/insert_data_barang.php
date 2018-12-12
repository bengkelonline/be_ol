<?php
    include("config.php");

    $nama_oli = $_POST['nama_oli'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    if (isset($_POST['tambah'])) {
    	# code...
    	$insert = mysqli_query($connect, "INSERT INTO tb_oli (nama_oli,harga,kategori) VALUES('$nama_oli','$harga','$kategori')");
    	echo "<script>
            window.location.href='data_barang.php';
        </script>";
    }
?>