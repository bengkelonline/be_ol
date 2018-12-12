<?php
include "config.php";
$sql = mysqli_fetch_array(mysqli_query($connect, "select * from tb_oli where nama_oli='$_GET[oli]'"));
$tampil = array('harga'   	=>  $sql['harga'],);
              		// 'jenis_kelamin'  	=>  $pegawai['jenis_kelamin'],
              		// 'alamat'    		=>  $pegawai['alamat'],);
 echo json_encode($tampil);
 ?>
