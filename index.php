<?php 
$conn = mysqli_connect("localhost", "root", "", "db_mahasiswa");
$result =mysqli_query ($conn, "SELECT*FROM jrusan"); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<TABLE>
		<tr>
			<td>ID</td>
			<td>Nama Jurusan<td>
		</tr>
		<?php foreach ($result as $row): ?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><button>Edit</button> | <button>Hapus</button></td>
		</tr>
	<?php endforeach ?>
	</TABLE>
</body>
</html>