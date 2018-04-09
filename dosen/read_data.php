<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
include("koneksi.php");

$sql = "SELECT * FROM `dosen` WHERE 1" ;

$eksekusi = mysqli_query($koneksi, $sql);

//echo "$eksekusi";


// var_dump($row);

?>

<h1>Data Dosen</h1>

<div class="table-responsive">  
<table class="table">
    <thead>
		<tr>
			<th>No</th>
			<th>Id Dosen</th>
			<th>Nama Dosen</th>
			<th>Mata Kuliah</th>
			<th>Operasi</th>
		</tr>
	</thead>
	</tbody>
		<tr>	
			<?php
			$no = 1;
				foreach ($eksekusi as $row) {
			?>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['id_dosen'] ?></td>
			<td><?php echo $row['nama_dosen'] ?></td>
			<td><?php echo $row['matakuliah'] ?></td>
			<td>
					<a href="form_update.php?id_dosen=<?php echo $row['id_dosen'] ?>"> Update </a> |
					<a href="hapus.php?id_dosen=<?php echo $row['id_dosen'] ?>"> Delete </a> 
			</td>
		</tr>
	<?php
		$no++;
	}
	?>
	</tbody>	
</table>
</div>
<?php
include("menubawah.php") ;
?>