<?php
include "config.php";
$sql = mysqli_fetch_array(mysqli_query($connect, "select * from tb_oli where nama_oli='$_GET[oli]'"));
$tampil = array('harga'   	=>  $sql['harga'],
              		'id_oli'  	=>  $sql['id_oli']);
              		// 'alamat'    		=>  $pegawai['alamat'],);
 echo json_encode($tampil);
 ?>
