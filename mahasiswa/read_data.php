<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
include("koneksi.php");

$sql = "SELECT * FROM `mahasiswa` WHERE 1" ;

$eksekusi = mysqli_query($koneksi, $sql);

//echo "$eksekusi";


// var_dump($row);

?>

<h1>Data Mahasiswa</h1>
<div class="table-responsive">  
<table class="table">
    <thead>
		<tr>
			<th>No</th>
			<th>Id Mahasiswa</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Asal Sekolah</th>
			<th>Operasi</th>
		</tr>
	</thead>
	<tbody>
		<tr>	
			<?php
			$no = 1;
				foreach ($eksekusi as $row) {
			?>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['id_mahasiswa'] ?></td>
			<td><?php echo $row['nim'] ?></td>
			<td><?php echo $row['nama'] ?></td>
			<td><?php echo $row['jurusan'] ?></td>
			<td><?php echo $row['alamat'] ?></td>
			<td><?php echo $row['sma_asal'] ?></td>
			<td>
					<a href="form_update.php?id_mahasiswa=<?php echo $row['id_mahasiswa'] ?>"> Update </a> |
					<a href="hapus.php?id_mahasiswa=<?php echo $row['id_mahasiswa'] ?>"> Delete </a> 
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