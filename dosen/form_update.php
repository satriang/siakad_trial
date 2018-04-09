<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
include("koneksi.php");

$id_dosen = $_GET['id_dosen'] ;

$sql = "SELECT * FROM `dosen` WHERE `id_dosen`='{$id_dosen}'" ;

$ekseskusi_id = mysqli_query($koneksi, $sql);

$hasil = mysqli_fetch_assoc($ekseskusi_id);
//var_dump($hasil);
?>
<h1>Ubah Data Dosen</h1>

<div class="table-responsive">  
<table class="table">
<form action="update_proses.php" method="post">
	<tr>
		<td>Id Dosen</td>
		<td><input type="text" name="id" value="<?php echo $hasil['id_dosen'] ?>" readonly="readonly"/></td>
	</tr>
	<tr>
		<td>Nama Dosen</td>
		<td><input type="text" name="nama" value="<?php echo $hasil['nama_dosen'] ?>" /></td>
	</tr>
	<tr>
		<td>Mata Kuliah</td>
		<td><input type="text" name="matkul" value="<?php echo $hasil['matakuliah'] ?>"/></td>
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