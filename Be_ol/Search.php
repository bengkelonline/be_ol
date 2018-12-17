<?php
  include("config.php");
  ob_start();
  session_start();
  if (!isset($_SESSION['tb_admin_username'])) {
    # code...
    header("location : Login/login_admin.php");
  }
?>
<?php 
    include("config.php");
  $query = mysqli_query($connect,"SELECT tb_transaksi.kode_transaksi, tb_user.nama,tb_user.alamat,tb_user.no_telfon,tb_oli.nama_oli,tb_oli.kategori,tb_oli.harga,tb_transaksi.model,tb_transaksi.nama_kendaraan,tb_transaksi.tahun,tb_transaksi.no_polisi,harga_sevice.km,harga_sevice.deskripsi,harga_sevice.harga,tb_transaksi.tgl_transaksi,tb_transaksi.total_harga,tb_transaksi.status_proses,tb_transaksi.jenis_pembayaran,tb_transaksi.status,tb_transaksi.bukti_pembayaran FROM tb_transaksi,tb_user,tb_oli,harga_sevice WHERE tb_user.id_user = tb_transaksi.id_user && tb_oli.id_oli = tb_transaksi.id_oli && harga_sevice.km = tb_transaksi.km ORDER BY kode_transaksi ASC");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="admin.php">
                            <img src="images/Beol1.png" alt="Cool Admin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active">
                            <a href="admin.php">
                                <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="data_user.php">
                                <i class="fas  fa-users"></i>Data User</a>
                        </li>
                        <li>
                            <a href="info.php">
                                <i class="fas  fa-info"></i>Info Oli dan Sparepart</a>
                        </li>
                        <li>
                            <a href="data_harga_service.php">
                                <i class="fas  fa-dollar"></i>Data Harga Service</a>
                        </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-file-text"></i>Laporan</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="laporan_harian.php">
                                            <i class="fas fa-file-text"></i>Laporan Harian</a>
                                    </li>
                                    <li>
                                        <a href="laporan_bulanan.php">
                                            <i class="fas fa-file-text"></i>Laporan Bulanan</a>
                                    </li>
                                    <li>
                                        <a href="search.php">
                                            <i class="fas fa-search"></i>Cari No Polisi</a>
                                    </li>
                                </ul>  
                            </li>
                        <li>
                            <a href="data_barang.php">
                                <i class="fas fa-list-alt"></i>Data Barang</a>
                        </li>
                        <li>
                            <a href="data_hasil.php">
                                <i class="fas fa-chart-bar"></i>Data Hasil</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="admin.php">
                    <img src="images/Beol1.png" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="admin.php">
                                <i class="fas fa-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="data_user.php">
                                <i class="fas  fa-users"></i>Data User</a>
                        </li>
                        <li>
                            <a href="info.php">
                                <i class="fas  fa-info"></i>Info Oli dan Sparepart</a>
                        </li>
                        <li>
                            <a href="data_harga_service.php">
                                <i class="fas  fa-dollar"></i>Data Harga Service</a>
                        </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-file-text"></i>Laporan</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="laporan_harian.php">
                                            <i class="fas fa-file-text"></i>Laporan Harian</a>
                                    </li>
                                    <li>
                                        <a href="laporan_bulanan.php">
                                            <i class="fas fa-file-text"></i>Laporan Bulanan</a>
                                    </li>
                                    <li>
                                        <a href="search.php">
                                            <i class="fas fa-search"></i>Cari No Polisi</a>
                                    </li>
                                </ul>  
                            </li>
                        <li>
                            <a href="data_barang.php">
                                <i class="fas fa-list-alt"></i>Data Barang</a>
                        </li>
                        <li>
                            <a href="data_hasil.php">
                                <i class="fas fa-chart-bar"></i>Data Hasil</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <?php 
                                            $wer = mysqli_query($connect, "select * from tb_admin where id_admin = '$_SESSION[tb_admin_id_admin]'");
                                            $w = mysqli_fetch_assoc($wer);
                                         ?>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $w['nama']?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php
                                                            echo $w['nama'];
                                                        ?></a>
                                                    </h5>
                                                    <span class="email">
                                                        <?php
                                                            echo $_SESSION['tb_admin_username'];
                                                        ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="fas fa-search"></i>Cari No Polisi</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                                <input class="au-input au-input--xl" type="text" id="search_isi" placeholder="Search for datas &amp; reports... " />
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID Transaksi</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>No.Telepon</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kategori</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Tipe Kendaraan</th>
                                                    <th>Nama Kendaraan</th>
                                                    <th>Tahun</th>
                                                    <th>No.Polisi</th>
                                                    <th>Km</th>
                                                    <th>Harga Service</th>
                                                    <th>Tanggal Transaksi</th>
                                                    <th>Total Harga</th>
                                                    <th>Status Proses</th>
                                                    <th>Status Pembayaran</th>
                                                    <th>Bukti Pembayaran</th>
                                                </tr>
                                            </thead>
                                            <tbody id="view_no_polisi">
                                                <?php
                                                    while ($user = mysqli_fetch_array($query)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $user['kode_transaksi'] ?></td>
                                                    <td><?php echo $user['nama'] ?></td>
                                                    <td><?php echo $user['alamat'] ?></td>
                                                    <td><?php echo $user['no_telfon'] ?></td>
                                                    <td><?php echo $user['nama_oli'] ?></td>
                                                    <td><?php echo $user['kategori'] ?></td>
                                                    <td><?php echo "Rp. "; echo $user['harga'] ?></td>
                                                    <td><?php echo $user['model'] ?></td>
                                                    <td><?php echo $user['nama_kendaraan'] ?></td>
                                                    <td><?php echo $user['tahun'] ?></td>
                                                    <td><?php echo $user['no_polisi'] ?></td>
                                                    <td><?php echo $user['km'] ?></td>
                                                    <td><?php echo "Rp. "; echo $user['harga'] ?></td>
                                                    <td><?php echo $user['tgl_transaksi'] ?></td>
                                                    <td><?php echo "Rp. "; echo $user['total_harga'] ?></td>
                                                    <td><?php echo $user['status_proses'] ?></td>
                                                    <td><?php echo $user['jenis_pembayaran'] ?></td>
                                                    <td><?php echo $user['status'] ?></td>
                                                    <td><?php echo $user['bukti_pembayaran'] ?></td>
                                                </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>
                            
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $("#search_isi").on("keyup",function() {
                var value=$(this).val().toLowerCase();

                $("#view_no_polisi tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)   
            });
        });

    });
    </script>

</body>

</html>
<!-- end document-->
<?php
mysqli_close($connect);
ob_end_flush();
?>