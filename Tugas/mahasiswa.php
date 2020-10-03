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
			<TH>ID</TH>
			<TH>Nim</TH>
			<TH>Nama</TH>
			<TH>Jenis_kelamin</TH>
			<TH>Jurusan_Id</TH>
			<TH>Alamat</TH>
			<TH>Nomor_telpon</TH>
			<TH>Email</TH>
			<TH>Aksi</TH>
		</tr>
		<?php foreach ($result as $row): ?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['nim'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><?php if ($row['jenis_kelamin'] == "L") {
						echo "Laki-Laki";
					} else {
						echo "Perempuan";
					}?>	
			</td>
			<td><?php echo $row['jurusan_id'];?></td>
			<td><?php echo $row['alamat'];?></td>
			<td><?php echo $row['nomor_telpon'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><a href="edit.php?id=<?= $row['id'] ?>"><button>Edit</button></a> | <a href="hapus.php?id=<?= $row['id'] ?>"><button>Hapus</button></a></td>
			
		</tr>
	<?php endforeach ?>
	</TABLE>
</body>
</html>