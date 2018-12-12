<?php
	// session_start();
	// $_SESSION["tb_user_id_user"];
	// $_SESSION["tb_user_email"];

	// unset($_SESSION["tb_user_id_user"]);
	// unset($_SESSION["tb_user_email"]);

	// session_unset();
	// session_destroy();

	// echo "logout";
	// header("location : admin.php");
	// header("location :admin.php");
 
session_start();
session_destroy();
header("location:index.php");

?>