<?php
if (isset($_POST['idu'])){
	$id = $_POST['idu'];

	include("config.php");

	$sql= "SELECT * FROM  tb_oli WHERE id_oli = '$id'";
	$res =mysql_query($sql);

	while ($row=mysql_fetch_assoc($res)){
		$nama_oli = $row['nama_oli'];

		echo "<input type='hidden' name='id_oli_awal' value=".$row['id_oli']."><br>";
		echo "<input type='text' class='form-control' name='id_oli_awal' value=".$row['id_oli']."><br>";
		echo "<input type='text' class='form-control' name='nama_oli' value='$nama_oli'><br>";
		echo "<input type='text' class='form-control' name='harga' value=".$row['harga']."><br>";
		echo "<input type='text' class='form-control' name='kategori' value=".$row['kategori']."><br>";
	}
		mysql_close();
	}
?>