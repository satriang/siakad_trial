<?php
	session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
?>
<h1>Silahkan Masukkan Data Mahasiswa</h1>

<div class="table-responsive">  
<table class="table">
<form action="input_proses.php" method="post">
	<tr>
		<td>Nim</td>
		<td><input type="text" name="nim" /></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" /></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td><select name="jurusan">
			<option value="TEKNIK INFORMATIKA"> TEKNIK INFORMATIKA </option>
			<option value="SISTEM INFORMASI"> SISTEM INFORMASI </option>
			<option value="KOMPUTERISASI AKUNTANSI"> KOMPUTERISASI AKUNTANSI </option>
			<option value="TEKNIK KOMPUTER"> TEKNIK KOMPUTER </option>
			<option value="MANAGEMEN INFORMATIKA"> MANAGEMEN INFORMATIKA </option>
		</select></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat">Tuliskan Alamat Anda</textarea> </td>
	</tr>
	<tr>
		<td>SMA ASAL</td>
		<td><input type="text" name="sma" /></td>
	</tr>
	<tr>
		<td style="text-align: center;"><input type="submit" value="Simpan"/></td>
		<td style="text-align: center;"><input type="reset" value="Batal"/></td>
	</tr>
</form>
</table>
</div>
<?php
include("menubawah.php") ;
?>
