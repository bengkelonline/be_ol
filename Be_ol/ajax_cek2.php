<?php
include "config.php";
$s = mysqli_fetch_array(mysqli_query($connect, "select * from tb_oli where nama_oli='AHM Transmisi'"));
$tampil = array('transmisi'   	=>  $s['harga'],);
              		// 'jenis_kelamin'  	=>  $pegawai['jenis_kelamin'],
              		// 'alamat'    		=>  $pegawai['alamat'],);
 echo json_encode($tampil);
 ?>
