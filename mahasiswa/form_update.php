<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
include("koneksi.php");

$id_mahasiswa = $_GET['id_mahasiswa'] ;

$sql = "SELECT * FROM `mahasiswa` WHERE `id_mahasiswa`='{$id_mahasiswa}'" ;

$ekseskusi_id = mysqli_query($koneksi, $sql);

$hasil = mysqli_fetch_assoc($ekseskusi_id);
//var_dump($hasil);
?>
<h1>Ubah Data Mahasiswa</h1>

<div class="table-responsive">  
<table class="table">
<form action="update_proses.php" method="post">
	<tr>
		<td>Id Mahasiswa</td>
		<td><input type="text" name="id" value="<?php echo $hasil['id_mahasiswa'] ?>" readonly="readonly"/></td>
	</tr>
	<tr>
		<td>Nim</td>
		<td><input type="text" name="nim" value="<?php echo $hasil['nim'] ?>" readonly="readonly"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $hasil['nama'] ?>"/></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td><select name="jurusan">
			<option value="TEKNIK INFORMATIKA" 
			<?php
				if($hasil['jurusan']=="TEKNIK INFORMATIKA"){
					echo " selected='selected' " ;
				}
			?>
			> TEKNIK INFORMATIKA </option>
			<option value="SISTEM INFORMASI" 
			<?php
				if($hasil['jurusan']=="SISTEM INFORMASI"){
					echo " selected='selected' " ;
				}
			?>
			> SISTEM INFORMASI </option>
			<option value="KOMPUTERISASI AKUNTANSI" 
			<?php
				if($hasil['jurusan']=="KOMPUTERISASI AKUNTANSI"){
					echo " selected='selected' " ;
				}
			?>
			> KOMPUTERISASI AKUNTANSI </option>
			<option value="TEKNIK KOMPUTER" 
			<?php
				if($hasil['jurusan']=="TEKNIK KOMPUTER"){
					echo " selected='selected' " ;
				}
			?>
			> TEKNIK KOMPUTER </option>
			<option value="MANAGEMEN INFORMATIKA" 
			<?php
				if($hasil['jurusan']=="MANAGEMEN INFORMATIKA"){
					echo " selected='selected' " ;
				}
			?>
			> MANAGEMEN INFORMATIKA </option>
		</select></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"><?php echo $hasil['alamat'] ?></textarea> </td>
	</tr>
	<tr>
		<td>SMA ASAL</td>
		<td><input type="text" name="sma" value="<?php echo $hasil['sma_asal'] ?>" /></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
			<input type="submit" value="Simpan"/>
			<input type="reset" value="Batal"/>
		</td>
	</tr>
</form>
</table>
</div>
<?php
include("menubawah.php") ;
?>
