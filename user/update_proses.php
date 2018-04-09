<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
include("koneksi.php");

$user = $_POST['user'];
$password = md5($_POST['password']);
$id = $_POST['id'];
$level = $_POST['level'];

$sql = "UPDATE `user` SET `user_name`='{$user}',`password`='{$password}',`level`='{$level}' WHERE `id_user`='{$id}'" ;
//echo "$sql";

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil Diubah";
}else{
	echo "Data Gagal Diubah: ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>