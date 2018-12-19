<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration</h2>
                    <form method="POST" action="daftar.php" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama</label>
                                    <input class="input--style-4" type="text" name="nama" placeholder="Nama" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="jenis_kelamin">Jenis Kelamin</label>
                                   <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="jenis_kelamin" required="required">
                                            <option disabled="disabled" selected="selected">--pilih--</option>
                                            <option>Laki - laki</option>
                                            <option>Perempuan</option>
                                            <!-- <option>Subject 3</option> -->
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal Lahir</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="datepicker" name="tgl_lahir" placeholder="Tanggal Lahir" required="required">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">No. Telepon</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="number" name="no_telfon" placeholder="No.Telepon" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Alamat</label>
                                    <input class="input--style-4" type="text" name="alamat" placeholder="Alamat" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pertanyaan Verifikasi</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="pertanyaan" required="required">
                                            <option disabled="disabled" selected="selected">--pilih--</option>
                                            <option>Siapakah nama ibu anda ?</option>
                                            <option>Apa club sepakbola favorit anda ?</option>
                                            <option>Siapakah nama pacar anda ?</option>
                                            <option>Apa film kesukaan anda ?</option>
                                            <option>Siapakah nama ibu guru favorit anda ?</option>
                                            <option>Anda berapa bersaudara ?</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Jawaban</label>
                                    <input class="input--style-4" type="text" name="jawaban" placeholder="Jawaban" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="Password" name="pass" placeholder="Password" title="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required">
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="label">Upload Foto</label>
                            <input type="file" name="file" id="file" required="required">
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->