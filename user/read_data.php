<?php
session_start();
	if(!isset($_SESSION['user_name'])){
		header("Location: ../login.php") ;
	}
	include("menu.php") ;
include("koneksi.php");

$sql = "SELECT * FROM `user` WHERE 1" ;

$eksekusi = mysqli_query($koneksi, $sql);

//echo "$eksekusi";


// var_dump($row);

?>

<h1>Data User</h1>

<div class="table-responsive">  
<table class="table">
    <thead>
		<tr>
			<th>No</th>
			<th>Id User</th>
			<th>User Name</th>
			<th>Paasword</th>
			<th>Level</th>
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
			<td><?php echo $row['id_user'] ?></td>
			<td><?php echo $row['user_name'] ?></td>
			<td><?php echo $row['password'] ?></td>
			<td><?php echo $row['level'] ?></td>
			<td>
					<a href="form_update.php?id_user=<?php echo $row['id_user'] ?>"> Update </a> |
					<a href="hapus.php?id_user=<?php echo $row['id_user'] ?>"> Delete </a> 
			</td>
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