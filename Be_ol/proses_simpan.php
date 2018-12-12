<?php
// Load file koneksi.php
include "config.php";

// Ambil Data yang Dikirim dari Form
$nama 	= $_POST['nama'];
$kategori 		= $_POST['kategori'];
$deskripsi 	= $_POST['deskripsi'];
$gambar 		= $_FILES['gambar']['name'];
$tmp 		= $_FILES['gambar']['tmp_name'];
  
// Rename nama gambarnya dengan menambahkan tanggal dan jam upload
$gambarbaru = date('dmYHis').$gambar;

// Set path folder tempat menyimpan gambarnya
$path = "images/".$gambarbaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO `info` (`nama`, `kategori`, `deskripsi`, `gambar`) VALUES ('".$nama."', '".$kategori."', '".$deskripsi."', '".$gambarbaru."');";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: testing_info.php"); // Redirect ke halaman index.php  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='testing_info.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='testing_info.php'>Kembali Ke Form</a>";
}