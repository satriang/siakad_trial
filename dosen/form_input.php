<?php
	session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
?>
<h1>Silahkan Masukkan Data Dosen</h1>

<div class="table-responsive">  
<table class="table">
<form action="input_proses.php" method="post">
	<tr>
		<td>Nama Dosen</td>
		<td><input type="text" name="nama" /></td>
	</tr>
	<tr>
		<td>Mata Kuliah</td>
		<td><input type="text" name="matkul" /></td>
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