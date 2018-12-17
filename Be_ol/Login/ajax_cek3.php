<?php
include "../config.php";
$sq = mysqli_fetch_array(mysqli_query($connect, "select * from tb_user where email='$_GET[email]'"));
$tampil = array('pertanyaan'   	=>  $sq['pertanyaan'],);
              		// 'jenis_kelamin'  	=>  $pegawai['jenis_kelamin'],
              		// 'alamat'    		=>  $pegawai['alamat'],);
 echo json_encode($tampil);
 ?>
