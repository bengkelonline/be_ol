<?php
include "config.php";
$sq = mysqli_fetch_array(mysqli_query($connect, "select * from harga_sevice where km='$_GET[km]'"));
$tampil = array('harga_service'   	=>  $sq['harga'],);
              		// 'jenis_kelamin'  	=>  $pegawai['jenis_kelamin'],
              		// 'alamat'    		=>  $pegawai['alamat'],);
 echo json_encode($tampil);
 ?>
