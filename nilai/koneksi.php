<?php
$host = "localhost";
$user = "root";
$pass = "";
$database  ="siakad";

$koneksi = mysqli_connect($host,$user,$pass,$database);

if(!$koneksi){
	die("Koneksi Gagal : " . mysqli_connect_error());
}
/*else{
	echo "koneksi berhasil";
}*/
?>