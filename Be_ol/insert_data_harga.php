<?php
    include("config.php");

    $km = $_POST['km'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    if (isset($_POST['tambah'])) {
    	# code...
    	$insert = mysqli_query($connect, "INSERT INTO harga_sevice (km,harga,deskripsi) VALUES('$km','$harga','$deskripsi')");
    	echo "<script>
            window.location.href='data_harga_service.php';
        </script>";
    }   
?>