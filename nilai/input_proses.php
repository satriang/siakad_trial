<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
include("koneksi.php");

$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];


$sql = "INSERT INTO `nilai`(`nama_matakuliah`, `nilai`) VALUES ('{$matkul}','{$nilai}')" ;
//echo "$sql";

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil disimpan";
}else{
	echo "Data Gagal Disimpan : ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>