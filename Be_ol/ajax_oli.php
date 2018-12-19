<?php
include "config.php";
if (isset($_POST['ktg'])){
	$kategori = $_POST['ktg'];
	$res = mysqli_query("SELECT * FROM tb_oli WHERE kategori='$kategori'");
	while($row = mysqli_fetch_assoc($res)){
		echo "<option value='". $row['nama_oli']. "'>";
		echo $row['nama_oli']. " ". $row['kategori'];
		echo "</option>";
	}

}
mysql_close();
?>