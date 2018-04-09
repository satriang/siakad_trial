<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
include("koneksi.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$sma = $_POST['sma'];

$sql = "INSERT INTO `mahasiswa`(`nim`, `nama`, `jurusan`, `alamat`, `sma_asal`) VALUES ('{$nim}','{$nama}','{$jurusan}','{$alamat}','{$sma}')" ;
//echo "$sql";

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil disimpan";
}else{
	echo "Data Gagal Disimpan : ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>