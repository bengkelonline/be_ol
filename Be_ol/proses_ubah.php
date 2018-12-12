<?php
// Load file koneksi.php
include "config.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id_info = $_GET['id_info'];

// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

// Cek apakah user ingin mengubah fotonya atau tidak

 // Jika user menceklis checkbox yang ada di form ubah, lakukan : <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
  // Ambil data foto yang dipilih dari form
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $gambarbaru = date('dmYHis').$gambar;
  
  // Set path folder tempat menyimpan fotonya
  $path = "images/".$gambarbaru;

  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM info WHERE id_info='".$id_info."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("images/".$data['gambar'])) // Jika foto ada
      unlink("images/".$data['gambar']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE info SET nama='".$nama."', kategori='".$kategori."', deskripsi='".$deskripsi."', gambar='".$gambarbaru."' WHERE id_info='".$id_info."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: testing_info.php"); // Redirect ke halaman index.php
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

?>