<?php 
include "config/koneksi.php";
$result =mysqli_query ($conn, "SELECT*FROM jurusan"); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="add-jurusan.php">Add_Data</a>
	<TABLE border="1" cellpandding="7" cellspacing="0">
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