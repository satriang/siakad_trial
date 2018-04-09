<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
include("koneksi.php");

$id_dosen = $_GET['id_dosen'] ;

$sql = "DELETE FROM `dosen` WHERE`id_dosen`='{$id_dosen}'" ;

$ekseskusi_id = mysqli_query($koneksi, $sql);

//var_dump($hasil);
if($ekseskusi_id){
	echo "Data berhasil Di Hapus";
}else{
	echo "Data Gagal Di Hapus : ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>