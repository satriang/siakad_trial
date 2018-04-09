<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
include("koneksi.php");

$id_user = $_GET['id_user'] ;

$sql = "SELECT * FROM `user` WHERE `id_user`='{$id_user}'" ;

$ekseskusi_id = mysqli_query($koneksi, $sql);

$hasil = mysqli_fetch_assoc($ekseskusi_id);
//var_dump($hasil);
?>
<h1>Ubah Data User</h1>

<div class="table-responsive">  
<table class="table">
<form action="update_proses.php" method="post">
	<tr>
		<td>Id Mahasiswa</td>
		<td><input type="text" name="id" value="<?php echo $hasil['id_user'] ?>" readonly="readonly"/></td>
	</tr>
	<tr>
		<td>User Name</td>
		<td><input type="text" name="user" value="<?php echo $hasil['user_name'] ?>" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password" value="<?php echo $hasil['password'] ?>"/></td>
	</tr>
	<tr>
		<td>level</td>
		<td><select name="level">
			<option value="mahasiswa" 
			<?php
				if($hasil['level']=="mahasiswa"){
					echo " selected='selected' " ;
				}
			?>
			> Mahasiswa </option>
			<option value="dosen" 
			<?php
				if($hasil['level']=="dosen"){
					echo " selected='selected' " ;
				}
			?>
			> Dosen </option>
			<option value="orangtua" 
			<?php
				if($hasil['level']=="orangtua"){
					echo " selected='selected' " ;
				}
			?>
			> Orang Tua </option>
		</select></td>
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