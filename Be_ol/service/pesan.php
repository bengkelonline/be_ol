<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wizard-v1</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/raleway-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="page-content" style="background-image: url('images/bengkel.jpg')">
		<div class="wizard-v1-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-number">Step 1</span>
			            	<span class="step-text">Account Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="model">Model</label>
										<select name="model" id="model" class="form-control">
											<option value="" disabled selected>--pilih--</option>
											<option value="Matic">Matic</option>
											<option value="Sport">Sport</option>
											<option value="Bebek">Bebek</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="kendaraan">Nama Kendaraan</label>
										<input type="kendaraan" placeholder="Nama Kendaraan.." class="form-control" id="kendaraan" name="kendaraan" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<label for="tahun">Tahun</label>
										<select name="tahun" id="tahun" class="form-control">
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
									<div class="form-holder">
										<label for="no_polisi">No Polisi</label>
										<input type="text" placeholder="No Polisi" class="form-control" id="no_polisi" name="no_polisi" required>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-number">Step 2</span>
			            	<span class="step-text">Payment Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder form-holder-3">
										<label for="alamat">Alamat Lengkap</label>
										<input type="text" name="alamat" class="alamat" id="alamat" placeholder="Alamat Lengkap dan Petunjuk...">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-3">
										<label for="no_telfon">No Telepon</label>
										<input type="number" name="no_telfon" class="no_telfon" id="no_telfon" placeholder="nomor yang bisa di hubungi ex: 085xxxx">
									</div>
								</div>
								<div class="form-row form-row-2">
									<div class="form-holder">
										<label for="km">KM</label>
										<select name="km" id="km" class="form-control">
											<option value="" disabled selected>Service KM</option>
											<option value="1.000">1.000</option>
											<option value="2.000">2.000</option>
											<option value="4.000">4.000</option>
											<option value="8.000">8.000</option>
											<option value="12.000">12.000</option>
											<option value="16.000">16.000</option>
										</select>
									</div>
									<div class="form-holder">
										<label for="oli">Oli</label>
										<select name="oli" id="oli" class="form-control">
											<option value="" disabled selected>--pilih--</option>
										<?php 
											include("../config.php");
											$sql = mysqli_query($connect, "Select * from tb_oli");
											while ($tampil = mysqli_fetch_array($sql)) { ?>
											<option value="<?php echo $tampil ['nama_oli']?>"><?php echo $tampil['nama_oli']; ?></option>
										<?php 
											}
										?>
										</select>
									</div>
									<!-- <div class="form-holder">
										<label class="btn btn-secondary">
										    <input type="radio" name="options" id="option2" autocomplete="off"> Radio
										</label>
									</div> -->
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-number">Step 3</span>
			            	<span class="step-text">Confirm Your Details</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Comfirm Details</h3>
								<div class="form-row table-responsive">
									<table class="table" style="width: 600px; overflow-x: hidden;">
										<tbody>
											<tr class="space-row">
												<th>Model :</th>
												<td id="model-val"></td>
											</tr>
											<tr class="space-row">
												<th>Nama Kendaraan :</th>
												<td id="kendaraan-val"></td>
											</tr>
											<tr class="space-row">
												<th>Tahun:</th>
												<td id="tahun-val"></td>
											</tr>
											<tr class="space-row">
												<th>No Polisi:</th>
												<td id="no_polisi-val"></td>
											</tr>
											<tr class="space-row">
												<th>Alamat:</th>
												<td id="alamat-val"></td>
											</tr>
											<tr class="space-row">
												<th>No Telepon:</th>
												<td id="no_telfon-val"></td>
											</tr>
											<tr class="space-row">
												<th>KM:</th>
												<td id="km-val"></td>
											</tr>
											<tr class="space-row">
												<th>Oli:</th>
												<td id="oli-val"></td>

											</tr>
										</tbody>
									</table>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
</body>
</html>