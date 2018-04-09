<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
include("koneksi.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$sma = $_POST['sma'];
$id = $_POST['id'];

$sql = "UPDATE `mahasiswa` SET `nim`='{$nim}',`nama`='{$nama}',`jurusan`='{$jurusan}',`alamat`='{$alamat}', `sma_asal`='{$sma}' WHERE `id_mahasiswa`='{$id}'" ;
//echo "$sql";

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil Diubah";
}else{
	echo "Data Gagal Diubah: ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>