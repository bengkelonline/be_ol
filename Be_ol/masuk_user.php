<?php
	ob_start();
	session_start();
	if(isset($_SESSION['tb_user_email'])) header("location:../dashboard_user.php");
	include "config.php";
	
	/* PROSES Login */
	if(isset($_POST['login'])){
		$email	  = $_POST['email'];
		$password = $_POST['pass'];
		$sql_login= mysqli_query($connect,"SELECT * FROM tb_user WHERE email='$email' AND password='$password'");
	
		if(mysqli_num_rows($sql_login)>0){
			$row_user = mysqli_fetch_array($sql_login);
			$_SESSION['tb_user_id_user'] = $row_user['id_user'];
			$_SESSION['tb_user_email']= $row_user['email'];
			header("location: ../dashboard_user.php");
		}
		else{
			header("location: login.php?login-gagal");
			}		
	}	
?>

<?php
mysqli_close($connect);
ob_end_flush();
?>