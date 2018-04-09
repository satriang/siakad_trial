<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
include("koneksi.php");

$nama = $_POST['nama'];
$matkul = $_POST['matkul'];


$sql = "INSERT INTO `dosen`(`nama_dosen`, `matakuliah`) VALUES ('{$nama}','{$matkul}')" ;
//echo "$sql";

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil disimpan";
}else{
	echo "Data Gagal Disimpan : ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>