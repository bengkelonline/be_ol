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
    $wer = mysqli_query($connect, "select * from tb_user where id_user = '$_SESSION[tb_user_id_user]'");
    $w = mysqli_fetch_assoc($wer);
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
    <title>Dashboard 2</title>

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
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme1.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <!-- <img src="images/Beol1.png" alt="Cool Admin" /> -->
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="foto/<?php echo $w['gambar'] ?>" />
                    </div>
                    <h4 class="name"><?php echo $w['nama'] ?></h4>
                    <a href="logout.php">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="dashboard_user.php">
                                <i class="zmdi zmdi-home"></i>Home</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-account"></i>Profil</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="profil.php">
                                        <i class="zmdi zmdi-account"></i>Profil</a>
                                </li>
                                <li>
                                    <a href="edit_profil.php">
                                        <i class="zmdi zmdi-settings"></i>Edit Profil</a>
                                </li>
                            </ul>  
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <!-- <img src="images/Beol1.png" alt="CoolAdmin" /> -->
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu"></div>
                                <div class="header-button-item has-noti js-item-menu"></div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                   <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="profil.php">
                                                <i class="zmdi zmdi-account"></i>Profil</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="edit_profil.php">
                                                <i class="zmdi zmdi-settings"></i>Edit Profil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <!-- <img src="images/icon/logo-white.png" alt="Cool Admin" /> -->
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="<?php echo $w['gambar'] ?>" alt="John Doe" />
                        </div>
                        <h4 class="name"><?php echo $w['nama'] ?></h4>
                        <a href="logout.php">Sign Out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="dashboard_user.php">
                                <i class="fas fa-home"></i>Home</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class=""></i>Profil</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="profil.php">
                                        <i class="zmdi zmdi-account"></i>Profil</a>
                                </li>
                                <li>
                                    <a href="edit_profil.php">
                                        <i class="zmdi zmdi-settings"></i>Edit Profil</a>
                                </li>
                            </ul>  
                        </li>
                    </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="dashboard_user.php">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Edit Profile</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Profile</strong>
                        <small>User</small>
                    </div>
                    <div class="card-body card-block">
                        <form action="update_profil.php" method="post">
                        <div class="row form-group">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="Nama" class=" form-control-label">Nama</label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" id="nama" name="nama" value="<?php echo $w['nama'] ?>" class="form-control" >
                                </div>
                            </div>
                        </div>
                            <div class="row form-group">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="alamat" class=" form-control-label">Alamat</label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" id="alamat" name="alamat" value="<?php echo $w['alamat'] ?>" class="form-control" >
                                    <!-- <textarea id="alamat"> </textarea> -->
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="no_telfon" class=" form-control-label">No Telepon</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="number" id="no_telfon" name="no_telfon" value="<?php echo $w['no_telfon'] ?>" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="tanggal_lahir" class=" form-control-label">Tanggal Lahir</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $w['tgl_lahir'] ?>" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="jenis_kelamin" class=" form-control-label">Jenis Kelamin</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select name="jenis_kelamin" class="form-control-sm form-control" required="required">
                                        <option>Laki - laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                        <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-3">
                                <input type="submit" name="submit" class="btn btn-primary btn-md">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
            <!-- END STATISTIC-->

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- RECENT REPORT 2-->
                                 
                                <!-- END RECENT REPORT 2             -->
                            </div>
                            <div class="col-xl-4">
                                <!-- TASK PROGRESS-->
                                
                                <!-- END TASK PROGRESS-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- USER DATA-->
                                
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-xl-6">
                                <!-- MAP DATA-->
                                
                                <!-- END MAP DATA-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php
    mysqli_close($connect);
    ob_end_flush();
?>