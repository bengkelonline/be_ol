<?php
  include("config.php");
  ob_start();
  session_start();
  if (!isset($_SESSION['tb_user_email'])) {
    # code...
    header("location : Login/login.php");
  }
?>
<?php 
    include("config.php");
    $sql = mysqli_query($connect, "SELECT * FROM tb_oli");

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
    <title>Dashboard</title>

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
                        <a class="logo" href="dashboard_user.php">
                            <img src="images/Beol1.png" />
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
                            <a href="dashboard_user.php">
                                <i class=""></i>Home</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class=""></i>Service</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="form_service.php">
                                        <i class=""></i>Service Berkala</a>
                                </li>
                                <li>
                                    <a href="riwayat.php">
                                        <i class=""></i>Riwayat Service</a>
                                </li>
                            </ul>  
                        </li>
                        <li>
                            <a href="dashboard_user.php #about-us">
                                <i class=""></i>About Us</a>
                        </li>
                        <li>
                            <a href="dashboard_user.php #team">
                                <i class=""></i>Info Oli dan Sparepart</a>
                        </li>
                        <li>
                            <a href="dashboard_user.php #team">
                                <i class=""></i>Help</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="dashboard_user.php">
                    <img src="images/Beol1.png" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="dashboard_user.php">
                                <i class=""></i>Home</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class=""></i>Service</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="form_service.php">
                                        <i class=""></i>Service Berkala</a>
                                </li>
                                <li>
                                    <a href="riwayat.php">
                                        <i class=""></i>Riwayat Service</a>
                                </li>
                            </ul>  
                        </li>
                        <li>
                            <a href="dashboard_user.php #about-us">
                                <i class=""></i>About Us</a>
                        </li>
                        <li>
                            <a href="dashboard_user.php #team">
                                <i class=""></i>Info Oli dan Sparepart</a>
                        </li>
                        <li>
                            <a href="dashboard_user.php #team">
                                <i class=""></i>Help</a>
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
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu"></div>
                                    <div class="noti__item js-item-menu"></div>
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <?php 
                                            $wer = mysqli_query($connect, "select * from tb_user where id_user = '$_SESSION[tb_user_id_user]'");
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
                                                            echo $_SESSION['tb_user_email'];
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
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Service</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="insert_transaksi.php" method="post" enctype="multipart/form-data" class="form-horizontal" name="service">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <p class="form-control-static"><?php
                                                            echo $w['nama'];
                                                        ?></p>
                                                </div>
                                                <div class="col-12 col-md-1">
                                                        <input type="hidden" name="id_user" id="id_user" value="<?php echo $w['id_user'];?>">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"><?php
                                                            echo $w['alamat'];
                                                        ?></p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="model" class=" form-control-label">Model</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select name="model" id="model" class="form-control-sm form-control" required="required">
                                                        <option value="" disabled selected>--pilih--</option>
                                                        <option value="Matic">Matic</option>
                                                        <option value="Sport">Sport</option>
                                                        <option value="Bebek">Bebek</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="nama_kendaraan" class=" form-control-label">Nama Kendaraan</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" id="nama_kendaraan" name="nama_kendaraan" placeholder="Nama Kendaraan..." class="form-control" required="required">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="tahun" class=" form-control-label">Tahun</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select name="tahun" id="tahun" class="form-control-sm form-control" required="required">
                                                        <option value="" disabled selected>--Tahun--</option>
                                                        <option value="1999">1999</option>
                                                        <option value="2000">2000</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="no_polisi" class=" form-control-label">No. Polisi</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" id="no_polisi" name="no_polisi" placeholder="No. Polisi.." class="form-control" required="required">
                                                    <!-- <small class="help-block form-text">Please enter your email</small> -->
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="km" class=" form-control-label">Km</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select onchange="cek_database1()" onfocus="startCalc()" onblur="stopCalc()" name="km" id="km" class="form-control-sm form-control" required="required">
                                                        <option value="" disabled selected>--pilih--</option>
                                                    <?php 
                                                        include("config.php");
                                                        $st = mysqli_query($connect, "SELECT * FROM harga_sevice ORDER BY km ASC");
                                                        while ($strong = mysqli_fetch_array($st)) {
                                                    ?>
                                                        <option value="<?php echo $strong['km'] ?>"><?php echo $strong['km']; ?></option>

                                                    <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label for="harga" class="form-control-label"> Harga Rp.</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" name="harga_service" id="harga_service" value="<?php echo $strong['harga'] ?>" onfocus="startCalc()" onblur="stopCalc()" disabled="disabled" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="oli" class=" form-control-label">Oli</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select onchange="cek_database()" onfocus="startCalc()" onblur="stopCalc()" name="oli" id="oli" class="form-control-sm form-control" required="required">
                                                        <option value="" disabled selected>--pilih--</option>
                                                        <?php 
                                                            while ($tampil = mysqli_fetch_array($sql)) { 
                                                                $selected = "";
                                                                if(isset($_GET['nama_oli'])){
                                                                    $selected = ($_GET['nama_oli']==$tampil['nama_oli']) ? "selected" : "";
                                                                }
                                                                ?>
                                                            <option value="<?php echo $tampil ['nama_oli']?>" <?php echo $selected ?>><?php echo $tampil['nama_oli'];echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;("; echo $tampil['kategori'];echo ")"; ?></option>
                                                        <?php 
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label for="harga_oli" class="form-control-label"> Harga Rp.</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" name="harga" id="harga" onfocus="startCalc()" onblur="stopCalc()" disabled="disabled" class="form-control">
                                                </div>
                                                <div class="col-12 col-md-1">
                                                    <input type="hidden" name="id_oli" id="id_oli" class="form-control">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-6">
                                                    <!-- <input type="text" name="transmision" id="transmision" class="form-control"> -->
                                                </div>
                                                <div class="col-12 col-md-2">
                                                    <label for="total" class="form-control-label"> Total Rp.</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <!-- <input type="text" name="total" id="total" class="form-control" disabled="disabled"> -->
                                                    <input type="text" name="total_harga" id="total_harga" disabled="disabled" class="form-control">
                                                    <input type="hidden" name="total" id="total" class="form-control">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-3">
                                                    <label for="jenis_pembayaran">Jenis Pembayaran</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select name="jenis_pembayaran" id="jenis_pembayaran" class="form-control-sm form-control" required="required">
                                                        <option value="" disabled selected>--pilih--</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Transfer">Transfer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <button type="submit" class="btn btn-primary btn-md">
                                            <i class="fa fa-upload"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-md">
                                            <i class="fa fa-times"></i> Reset
                                        </button>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer">
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-12">                         
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
    function startCalc(){
        interval=setInterval("calc()",1)
    }function calc(){
        one=document.service.harga.value;
        two=document.service.harga_service.value;
        document.service.total_harga.value=(one*1)+(two*1);
        document.service.total.value=(one*1)+(two*1);
    }function stopCalc(){
        clearInterval(interval)
    }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
    function cek_database(){
        var nama_oli = $("#oli").val();
        $.ajax({
            url: 'ajax_cek.php',
            data:"oli="+nama_oli ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#harga').val(obj.harga);
            $('#id_oli').val(obj.id_oli);
        });
    }
    </script>
    <script type="text/javascript">
    function cek_database1(){
        var km = $("#km").val();
        $.ajax({
            url: 'ajax_cek1.php',
            data:"km="+km ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#harga_service').val(obj.harga_service);
        });
    }
    </script>
    <script type="text/javascript">
    function cek_database2(){
        var nama_oli = $("#check").val();
        $.ajax({
            url: 'ajax_cek2.php',
            data:"nama_oli="+nama_oli ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#transmision').val(obj.transmision);
        });
    }
    </script>
</body>

</html>
<!-- end document-->
<?php
    mysqli_close($connect);
    ob_end_flush();
?>