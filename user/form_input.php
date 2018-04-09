<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
?>
<h1>Silahkan Masukkan Data User</h1>

<table border="1">
<form action="input_proses.php" method="post">
	<tr>
		<td>User Name</td>
		<td><input type="text" name="user" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" /></td>
	</tr>
	<tr>
		<td>Level</td>
		<td><select name="level">
			<option value="mahasiswa"> Mahasiswa </option>
			<option value="dosen"> Dosen </option>
			<option value="orangtua"> Orang Tua </option>
			<option value="administrator"> Administrator </option>
			<option value="akademik"> akademik </option>
		</select></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;"><input type="submit" value="Simpan"/><input type="reset" value="Batal"/></td>
	</tr>
</form>
</table>
</div>
<?php
include("menubawah.php") ;
?>