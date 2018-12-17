<?php
  include("config.php");
  ob_start();
  session_start();
  if (!isset($_SESSION['tb_user_email'])) {
    # code...
    header("location : Login/login.php");
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
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
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
                                    <a href="">
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
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
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
                                    <a href="">
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
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Service</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" name="service">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"><?php
                                                            echo $w['nama'];
                                                        ?></p>
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
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="model" class=" form-control-label">Model</label>
                                                </div>
                                                <div class="col-12 col-md-9">
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
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nama_kendaraan" name="nama_kendaraan" placeholder="Nama Kendaraan..." class="form-control" required="required">
                                                    <small class="form-text text-muted">This is a help text</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="tahun" class=" form-control-label">Tahun</label>
                                                </div>
                                                <div class="col-12 col-md-9">
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
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="no_polisi" name="no_polisi" placeholder="No. Polisi.." class="form-control" required="required">
                                                    <!-- <small class="help-block form-text">Please enter your email</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="km" class=" form-control-label">Km</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input onchange="cek_database1()" type="text" name="km" id="km" class="form-control">
                                                    <select onchange="cek_database1()" onfocus="startCalc()" onblur="stopCalc()" name="km" id="km1" class="form-control-sm form-control" required="required">
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
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="oli" class=" form-control-label">Oli</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select onchange="cek_database()" onfocus="startCalc()" onblur="stopCalc()" name="oli" id="oli" class="form-control-sm form-control" required="required">
                                                        <option value="" disabled selected>--pilih--</option>
                                                        <?php 
                                                            include("config.php");
                                                            $sql = mysqli_query($connect, "SELECT * FROM tb_oli");
                                                            while ($tampil = mysqli_fetch_array($sql)) { 
                                                                $selected = "";
                                                                if(isset($_GET['nama_oli'])){
                                                                    $selected = ($_GET['nama_oli']==$tampil['nama_oli']) ? "selected" : "";
                                                                }
                                                                ?>
                                                            <option value="<?php echo $tampil ['nama_oli']?>" <?php echo $selected ?>><?php echo $tampil['nama_oli']; ?></option>
                                                        <?php 
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    
                                                </div>
                                                <div class="col col-md-9">
                                                    <?php 
                                                        // $transmisi =mysqli_query($connect, "SELECT * FROM tb_oli WHERE nama_oli = 'AHM Transmisi'");
                                                        // $trans = mysqli_fetch_array($transmisi)
                                                    ?>
                                                    <input onclick="cek_database2()" type="checkbox" name="check" value="<?php ?>" class="form-check-input">Oli Transmisi (Matic)
                                                     <div class="form-check">
                                                        <label class="switch switch-3d switch-primary mr-3">
                                                        <input type="checkbox" id="check" name="check" value="<?php  ?>" onchange="cek_database2()" class="switch-input" >
                                                        <span class="switch-label"></span>
                                                        <span class="switch-handle"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="file-input" class="form-control-file">
                                                </div>
                                            </div> -->
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Informasi</strong> Pembayaran
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" name="bayar">
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Username</p>
                                                </div>
                                            </div> -->
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label class="form-control-label">Model</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" name="model1" id="pModel" disabled="disabled" class="form-control">
                                                    <!-- <span id="pModel"></span> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label class="form-control-label">Kendaraan</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" name="nama1" id="pNama" disabled="disabled" class="form-control">
                                                    <!-- <span id="pNama"></span> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label class="form-control-label">No. Polisi</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" name="nopol1" id="pNopol" disabled="disabled" class="form-control">
                                                    <!-- <span id="pNopol"></span> -->
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label class="form-control-label">Harga</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" name="harga_service" id="harga_service" disabled="disabled" class="form-control" onfocus="startCalc()" onblur="stopCalc()">
                                                    <!-- <span id="pOli"></span> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label class="form-control-label">Oli</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" name="harga" id="harga" disabled="disabled" class="form-control" onfocus="startCalc()" onblur="stopCalc()">
                                                    <!-- <span id="pOli"></span> -->
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <label class="form-control-label">Total</label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <input type="text" name="total" id="total" disabled="disabled" class="form-control" >
                                                    <!-- <span id="pOli"></span> -->
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
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
        one=document.getElementById("#harga").value;
        two=document.getElementById("#harga_service").value;
        document.bayar.total.value=(one*1)+(two*1)
    }function stopCalc(){
        clearInterval(interval)
    }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#model").change(function(){
                var thisVal = $(this).val()
                $("#pModel").val(thisVal);
            })
            $("#nama_kendaraan").change(function(){
                var thisVal = $(this).val()
                $("#pNama").val(thisVal)
            })
            $("#no_polisi").change(function(){
                var thisVal = $(this).val()
                $("#pNopol").val(thisVal)
            })        
            // $("#oli").change(function(){
            //     var thisVal = $(this).val()
            //     window.location = "?nama_oli="+thisVal
            //     // $("pOli").html(thisVal)
            // })        
        })
    </script>
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
        var check = $("#check").val();
        $.ajax({
            url: 'ajax_cek2.php',
            data:"check="+check ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#total').val(obj.total);
        });
    }
    </script>
    <script type="text/javascript">
        function sum() {
          var txtFirstNumberValue = document.getElementById('#harga').value;
          var txtSecondNumberValue = document.getElementById('#harga_service').value;
          var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
          if (!isNaN(result)) {
             document.getElementById('#total').value = result;
             // $('#total').val(total)
          }
    }
    </script>
</body>

</html>
<!-- end document-->
<?php
    mysqli_close($connect);
    ob_end_flush();
?>