<?php 
	include("../config.php");
	$email = $_POST['email'];
	$query = mysqli_query($connect, "SELECT * FROM tb_user WHERE email = '$email'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main0.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form action="ceksandi.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Forgot Password
					</span>
					<?php 
							while ($sql = mysqli_fetch_array($query)) {
								# code...
					?>
					<div class="wrap-input100 validate-input">
						<input type="hidden" name="email" id="email" value="<?php echo $sql['email'] ?>">
						<input type="hidden" name="pertanyaan" id="pertanyaan" value="<?php echo $sql['pertanyaan'] ?>">
						<input class="input100" type="text" name="pertanyaan" id="pertanyaan" value="<?php echo $sql['pertanyaan']; ?>" placeholder="Pertanyaan" disabled="disabled">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-question" aria-hidden="true"></i>
						</span>
					</div>
				<?php } ?>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="jawaban" id="jawaban" placeholder="Jawaban">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<input type="submit" name="" class="login100-form-btn">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>