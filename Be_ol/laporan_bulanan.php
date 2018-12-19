<?php
  include("config.php");
  ob_start();
  session_start();
  if (!isset($_SESSION['tb_admin_username'])) {
    # code...
    header("location : Login/login_admin.php");
  }
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
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Laporan Bulanan</h3>
                                        <form method="get">
                                            <div class="row form-group">
                                                <div class="filters m-b-45">
                                                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                                        <select class="js-select2" name="bulan" required="required">
                                                            
                                                            <option value="01">Januari</option>
                                                            <option value="02">Februari</option>
                                                            <option value="03">Maret</option>
                                                            <option value="04">April</option>
                                                            <option value="05">Mei</option>
                                                            <option value="06">Juni</option>
                                                            <option value="07">Juli</option>
                                                            <option value="08">Agustus</option>
                                                            <option value="09">September</option>
                                                            <option value="10">Oktober</option>
                                                            <option value="11">November</option>
                                                            <option value="12">Desember</option>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                    <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                                        <select class="js-select2 au-select-dark" name="tahun" required="required">
                                                            
                                                            <?php 
                                                            $qry=mysqli_query($connect, "SELECT tgl_transaksi FROM tb_transaksi GROUP BY year(tgl_transaksi)");
                                                                while($t=mysqli_Fetch_array($qry)){
                                                                $data = explode('-',$t['tgl_transaksi']);
                                                                $tahun = $data[0];
                                                                echo "<option value='$tahun'>$tahun</option>";

                                                                }
                                                                echo ""
                                                                ?>
                                                        </select>
                                                        <div class="dropDownSelect2"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">     
                                                    <button class="au-btn-filter" name="filter">
                                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                                </div>
                                                <form method="POST" action="print.php">
                                                    <div class="col-12 col-md-3">
                                                        <button onclick="print_d()" class="btn btn-link btn-md" name="print" >
                                                            <i class="zmdi zmdi-print"></i> Print</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </form>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No.Telepon</th>
                                                <th>Nama Barang</th>
                                                <th>Kategori</th>
                                                <th>Harga Satuan</th>
                                                <th>Tipe Kendaraan</th>
                                                <th>Nama Kendaraan</th>
                                                <th>No.Polisi</th>
                                                <th>Km</th>
                                                <th>Harga Service</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Total Harga</th>
                                                <th>Status Proses</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Status Pembayaran</th>
                                                <th>Bukti Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                if (isset($_GET['filter'])) {
                                                $bulan = $_GET['bulan'];
                                                $tahun = $_GET['tahun'];
                                                    # code...
                                                    $query = mysqli_query($connect, "SELECT tb_transaksi.kode_transaksi, tb_user.nama,tb_user.alamat,tb_user.no_telfon,tb_oli.nama_oli,tb_oli.kategori,tb_oli.harga,tb_transaksi.model,tb_transaksi.nama_kendaraan,tb_transaksi.no_polisi,harga_sevice.km,harga_sevice.deskripsi,harga_sevice.harga,tb_transaksi.tgl_transaksi,tb_transaksi.total_harga,tb_transaksi.status_proses,tb_transaksi.jenis_pembayaran,tb_transaksi.status,tb_transaksi.bukti_pembayaran FROM tb_transaksi,tb_user,tb_oli,harga_sevice WHERE tb_user.id_user = tb_transaksi.id_user && tb_oli.id_oli = tb_transaksi.id_oli && harga_sevice.km = tb_transaksi.km && month(tb_transaksi.tgl_transaksi)='$bulan' and year(tb_transaksi.tgl_transaksi) = '$tahun' ORDER BY kode_transaksi ASC");
                                                    $_SESSION['bulan_terakhir'] = $bulan;
                                                    $_SESSION['tahun_terakhir'] = $tahun;
                                                }else{
                                                    $query = mysqli_query($connect, "SELECT tb_transaksi.kode_transaksi, tb_user.nama,tb_user.alamat,tb_user.no_telfon,tb_oli.nama_oli,tb_oli.kategori,tb_oli.harga,tb_transaksi.model,tb_transaksi.nama_kendaraan,tb_transaksi.no_polisi,harga_sevice.km,harga_sevice.deskripsi,harga_sevice.harga,tb_transaksi.tgl_transaksi,tb_transaksi.total_harga,tb_transaksi.status_proses,tb_transaksi.jenis_pembayaran,tb_transaksi.status,tb_transaksi.bukti_pembayaran FROM tb_transaksi,tb_user,tb_oli,harga_sevice WHERE tb_user.id_user = tb_transaksi.id_user && tb_oli.id_oli = tb_transaksi.id_oli && harga_sevice.km = tb_transaksi.km ORDER BY kode_transaksi ASC");
                                                }
                                            ?>
                                            <?php 
                                                $no = 1;
                                                while ($sql = mysqli_fetch_array($query)) {
                                             ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $sql['nama'] ?></td>
                                                <td><?php echo $sql['alamat'] ?></td>
                                                <td><?php echo $sql['no_telfon'] ?></td>
                                                <td><?php echo $sql['nama_oli'] ?></td>
                                                <td><?php echo $sql['kategori'] ?></td>
                                                <td><?php echo "Rp. "; echo $sql['harga'] ?></td>
                                                <td><?php echo $sql['model'] ?></td>
                                                <td><?php echo $sql['nama_kendaraan'] ?></td>
                                                <td><?php echo $sql['no_polisi'] ?></td>
                                                <td><?php echo $sql['km'] ?></td>
                                                <td><?php echo "Rp. "; echo $sql['harga'] ?></td>
                                                <td><?php echo $sql['tgl_transaksi'] ?></td>
                                                <td><?php echo "Rp. "; echo $sql['total_harga'] ?></td>
                                                <td><?php echo $sql['status_proses'] ?></td>
                                                <td><?php echo $sql['jenis_pembayaran'] ?></td>
                                                <td><?php echo $sql['status'] ?></td>
                                                <td><?php echo $sql['bukti_pembayaran'] ?></td>
                                            </tr><?php $no++; 
                                        } ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
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
    <script>
        function print_d(){
            // var tanggal = $(#tanggal).val();
            window.open("print_bulanan.php","_blank");
        }
    </script>
</body>

</html>
<!-- end document-->
<?php
mysqli_close($connect);
ob_end_flush();
?>