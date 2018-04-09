<?php
	session_start();
	session_destroy();
	
	echo "Sudah Logout" ;
	header("refresh:5;../login.php");
?>