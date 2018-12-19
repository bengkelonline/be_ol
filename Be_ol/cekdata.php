<?php
include "config.php";
$sql = mysqli_fetch_array(mysqli_query($connect, "select * from tb_oli where kategori='$_GET[model]'"));
$tampil = array('nama_oli'   	=>  $sql['nama_oli']);
              		// 'harga'  	=>  $sql['id_oli']);
              		// 'alamat'    		=>  $pegawai['alamat'],);
 echo json_encode($tampil);
 ?>
