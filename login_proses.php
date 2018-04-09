<?php
	session_start() ;
	include("koneksi.php") ;
	$user = $_POST['user'] ;
	$pasword = md5($_POST['pasword']) ;
	
	$sql = "SELECT * FROM `user` WHERE `user_name`='{$user}' AND `password`='{$pasword}'" ;
	
	$eksekusi = mysqli_query($koneksi,$sql) ;
	
	$hasil = mysqli_fetch_assoc($eksekusi) ;
	
	$jumlah = count($hasil) ;
	
	if($jumlah <= 0){
		echo "User dan Password Salah";
	}else{
		$_SESSION["user_name"] = $hasil["user_name"] ;
		$_SESSION["level"] = $hasil["level"] ;
		//echo $_SESSION["level"];
		if($_SESSION["level"] == "dosen"){
			header("Location: ./dosen");
		}elseif($_SESSION["level"] == "mahasiswa"){
			header("Location: ./mahasiswa");
		}elseif($_SESSION["level"] == "administrator"){
			header("Location: ./user");
		}elseif($_SESSION["level"] == "akademik"){
			header("Location: ./nilai");
		}elseif($_SESSION["level"] == "orangtua"){
			header("Location: ./orangtua");
		}else{
			echo "Maaf Anda Tidak Bisa Masuk Sistem";
			header("refresh:5; login.php");
		}
	}
	
?>