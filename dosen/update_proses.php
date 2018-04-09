<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
include("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];

$sql = "UPDATE `dosen` SET `nama_dosen`='{$nama}',`matakuliah`='{$matkul}' WHERE `id_dosen`='{$id}'" ;
//echo "$sql";

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil Diubah";
}else{
	echo "Data Gagal Diubah: ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>