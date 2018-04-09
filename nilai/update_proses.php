<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
include("koneksi.php");

$id = $_POST['id'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];

$sql = "UPDATE `nilai` SET `nama_matakuliah`='{$matkul}',`nilai`='{$nilai}' WHERE `id_nilai`='{$id}'" ;
//echo "$sql";

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil Diubah";
}else{
	echo "Data Gagal Diubah: ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>