<?php
if (isset($_POST['email']) && $_POST['email']) {
    // memasukan file koneksi ke database
  include 'config.php';

    // menyimpan variable yang dikirim Form
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $password = $_POST['password'];
        // cek nilai variable
    
    if (empty($email)) {
        header('location: http://localhost/Be_ol/login/ubah%20sandi.php' .base64_encode('email tidak boleh kosong'));
    }
    
    if (empty($pass)) {
        header('location: http://localhost/Be_ol/login/ubah%20sandi.php' .base64_encode('Password tidak boleh kosong'));   
    }
    // validasi apakah pass dengan password sama
    if ($pass != $password) { // jika tidak sama
        header('location: http://localhost/Be_ol/login/ubah%20sandi.php' .base64_encode('Password harus sama'));
    } 
    // encryption dengan md5
    $pass = ($pass);
    // $level = 'member'; // default, 
    // SQL Insert
    
    $sql ="UPDATE `be_ol`.`tb_user` SET `password` = '" . ($_POST["password"]). "' WHERE email='$email'";
   $insert = $connect->query($sql);
    // jika gagal
    if (! $insert) {
        echo "<script>alert('".$dbconnect->error."'); window.location.href = 'http://localhost/Be_ol/login/ubah%20sandi.php';</script>";
    } else {
        echo "<script>alert('Sandi berhasil diubah'); window.location.href = './login.php';</script>";
    }
}
?>