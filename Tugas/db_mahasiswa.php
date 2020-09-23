<?php 
$conn = mysqli_connect("localhost", "root", "", "db_mahasiswa");
$result =mysqli_query ($conn, "SELECT*FROM mahasiswa"); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>Data Mahasiswa</h3>
	<a href="add-mahasiswa.php">Add_Data</a>
	<TABLE border="1" cellpandding="7" cellspacing="0">
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<TD>Jenis_kelamin</TD>
			<td>Jurusan</td>
			<td>Alamat</td>
			<td>Nomor_telpon</td>
			<td>Email</td>
		</tr>
		<?php foreach ($result as $row): ?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['jenis_kelamin'];?></td>
			<td><?php echo $row['jurusan'];?></td>
			<td><?php echo $row['alamat'];?></td>
			<td><?php echo $row['nomor_telpon'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><button>Edit</button> | <button>Hapus</button></td>
			
		</tr>
	<?php endforeach ?>
	</TABLE>
</body>
</html>