<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
include("koneksi.php");

$user = $_POST['user'];
$password = md5($_POST['password']);
$level = $_POST['level'];


$sql = "INSERT INTO `user`(`user_name`, `password`, `level`) VALUES ('{$user}','{$password}','{$level}')" ;
//echo "$sql";

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil disimpan";
}else{
	echo "Data Gagal Disimpan : ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>