<?php
// Load file koneksi.php
include "config.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$id_info = $_GET['id_info'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM info WHERE id_info='".$id_info."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file gambarnya ada di folder images
if(is_file("images/".$data['gambar'])) // Jika gambar ada
  unlink("images/".$data['gambar']); // Hapus gambar yang telah diupload dari folder images

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM info WHERE id_info='".$id_info."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: testing_info.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='info.php'>Kembali</a>";
}
?>