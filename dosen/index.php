<?php
	session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
?>
<h1> SELAMAT DATANG </h1>
NAMA : <?php echo $_SESSION['user_name'] ?> <br/>
Hak Akses : <?php echo $_SESSION['level'] ?>

<?php
include("menubawah.php") ;
?>
