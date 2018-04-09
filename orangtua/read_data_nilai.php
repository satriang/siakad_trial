<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
include("koneksi.php");

$sql = "SELECT * FROM `nilai` WHERE 1" ;

$eksekusi = mysqli_query($koneksi, $sql);

//echo "$eksekusi";


// var_dump($row);

?>

<h1>Data Nilai</h1>

<div class="table-responsive">  
<table class="table">
    <thead>
		<tr>
			<th>No</th>
			<th>Id Nilai</th>
			<th>Nama Matakuliah </th>
			<th>Nilai</th>
		</tr>
	</thead>
	<tbody>
		<tr>	
			<?php
			$no = 1;
				foreach ($eksekusi as $row) {
			?>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['id_nilai'] ?></td>
			<td><?php echo $row['nama_matakuliah'] ?></td>
			<td><?php echo $row['nilai'] ?></td>
		</tr>
	</tbody>
	<?php
		$no++;
	}
	?>	
</table>
</div>
<?php
include("menubawah.php") ;
?>