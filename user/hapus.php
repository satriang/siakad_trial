<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
include("koneksi.php");

$id_user = $_GET['id_user'] ;

$sql = "DELETE FROM `user` WHERE`id_user`='{$id_user}'" ;

$ekseskusi_id = mysqli_query($koneksi, $sql);

//var_dump($hasil);
if($ekseskusi_id){
	echo "Data berhasil Di Hapus";
}else{
	echo "Data Gagal Di Hapus : ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>