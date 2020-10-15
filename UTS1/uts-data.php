<?php 
$conn = mysqli_connect("localhost", "root", "", "uts1-05-221.mik.b.005");
$result =mysqli_query ($conn, "SELECT*FROM data"); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<a href="add-datauts.php">Tambah_Data</a>
	<br><br>
	<TABLE border="1" cellpandding="7" cellspacing="0">
		<tr>
			<TH>Id</TH>
			<TH>No Registrasi</TH>
			<TH>Nama Lengkap</TH>
			<TH>Jurusan</TH>
			<TH>Jenis Kelamin</TH>
			<TH>Alamat</TH>
			<TH>No Telepon</TH>
			<TH>E-Mail</TH>
			<th>Aksi</th>
		</tr>
		<?php foreach ($result as $row): ?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['no_registrasi'];?></td>
			<td><?php echo $row['nama_lengkap'];?></td>
			<td><?php echo $row['jurusan'];?></td>
			<td><?php echo $row['jenis_kelamin'];?></td>
			<td><?php echo $row['alamat'];?></td>
			<td><?php echo $row['no_telpon'];?></td>
			<td><?php echo $row['e_mail'];?></td>
			<td><a href="edit.php?id=<?= $row['id'] ?>"><button>Edit</button></a> | <a href="Hapus.php?id=<?= $row['id'] ?>"><button>Hapus</button></a></td>
			
		</tr>
		<?php endforeach ?>
	</TABLE>
</body>
</html>