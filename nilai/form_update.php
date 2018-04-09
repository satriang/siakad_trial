<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
include("koneksi.php");

$id_nilai = $_GET['id_nilai'] ;

$sql = "SELECT * FROM `nilai` WHERE `id_nilai`='{$id_nilai}'" ;

$ekseskusi_id = mysqli_query($koneksi, $sql);

$hasil = mysqli_fetch_assoc($ekseskusi_id);
//var_dump($hasil);
?>
<h1>Ubah Data Nilai</h1>

<div class="table-responsive">  
<table class="table">
<form action="update_proses.php" method="post">
	<tr>
		<td>Id Nilai</td>
		<td><input type="text" name="id" value="<?php echo $hasil['id_nilai'] ?>" readonly="readonly"/></td>
	</tr>
	<tr>
		<td>Nama Matakuliah</td>
		<td><input type="text" name="matkul" value="<?php echo $hasil['nama_matakuliah'] ?>" /></td>
	</tr>
	<tr>
		<td>Nilai</td>
		<td><input type="text" name="nilai" value="<?php echo $hasil['nilai'] ?>"/></td>
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