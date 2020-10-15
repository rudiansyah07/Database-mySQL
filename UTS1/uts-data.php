<?php 
$conn = mysqli_connect("localhost", "root", "", "uts1-05-221.mik.b.005");
$result =mysqli_query ($conn, "SELECT*FROM data"); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class= "container">
			<div class= "row">
				<div class= "col-12">
							<div class="row mt-2">
								<div class="col-6"><h3>Data Pendaftaran</h3></div>
								<div class="col-6"><a href="add-datauts.php" class="btn btn-sm btn-primary float-right">Tambah_Data</a></div>
							</div>
							<TABLE class="table table-bordered table-sm">
								<thead>
										<tr>
											<TH class="text-center">Id</TH>
											<TH class="text-center">No Registrasi</TH>
											<TH class="text-center">Nama Lengkap</TH>
											<TH class="text-center">Jurusan</TH>
											<TH class="text-center">Jenis Kelamin</TH>
											<TH class="text-center">Alamat</TH>
											<TH class="text-center">No Telepon</TH>
											<TH class="text-center">E-Mail</TH>
											<th class="text-center">Aksi</th>
										</tr>
								</thead>
								<tbody>	
									<?php $no = 1; ?>
									<?php foreach ($result as $row): ?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $row['no_registrasi'];?></td>
										<td><?= $row['nama_lengkap'];?></td>
										<td><?= $row['jurusan'];?></td>
										<td><?= $row['jenis_kelamin'];?></td>
										<td><?= $row['alamat'];?></td>
										<td><?= $row['no_telpon'];?></td>
										<td><?= $row['e_mail'];?></td>
										<td>
											<a href="" class="btn btn-info btn-sm">Detail</a> |
											<a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a> |
											<a href="Hapus.php?id=<?= $row['id'] ?>"  class="btn btn-danger btn-sm">Hapus</a>
										</td>	
									</tr>
									<?php endforeach ?>
								</tbody>	
							</TABLE>
				</div>
			</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>