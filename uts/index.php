<?php 
include "config/koneksi.php";
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
			<td><?php echo $row['no_trlpon'];?></td>
			<td><?php echo $row['e_mail'];?></td>
			<td><a href="edit.php?id=<?= $row['id'] ?>"><button>Edit</button></a> | <a href="hapus.php?id=<?= $row['id'] ?>"><button>Hapus</button></a></td>
			
		</tr>
		<?php endforeach ?>
	</TABLE>
</body>
</html>