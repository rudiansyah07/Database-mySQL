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
					<h4>FORM PENDAFTARAN</h4>
					<hr>
					<form action="act-pendaftaran.php" method="POST">
						<div class="form-group">
							<label for="reg">No Registrasi</label>
							<input type="text" id="reg" class="form-control" name="no_registrasi">
						</div>
						<div class="form-group">
							<label for="nm">Nama Lengkap</label>
							<input type="text" id="nm" class="form-control" name="nama_lengkap">
						</div>
						<div class="form-group">
							<label for="jur">Jurusan</label>
							<select class="form-control" id="jur" name="jurusan">
							<option disabled="true" selected="true">Pilih Jurusan</option>
							<option value="mik">Manajemen Informatika & Komputer</option>
							<option value="adp">administrasi Perkantoran</option>
							<option value="akp">Akuntansi Perkantoran</option>
							<option value="its">IT Suport</option>
							</select>
						</div>
						<div class="form-group">
							<label for="jk">Jenis Kelamin</label>
							<select class="form-control" id="jk" name="jenis_kelamin">
							<option disabled="true" selected="true">Pilih jenis kelamin</option>
							<option value="L">Laki-Laki</option>
							<option value="P">Perempuan</option>
							</select>
						</div>
							<div class="form-group">
							<label for="almt">Alamat</label>
							<textarea class="form-control" name="alamat" id="almt"></textarea>
						</div>
							<div class="form-group">
							<label for="tlp">No Telepon</label>
							<input type="number" id="telp" class="form-control" name="telepon">
						</div>
							<div class="form-group">
							<label for="reg">E-Mail</label>
							<input type="email" id="email" class="form-control" name="email">
						</div>
						<div class="form-group float-right">
							<a href="uts-data.php" class="btn btn-secondary btn-md">Kembali</a>
							<a type="submit" name="submit" href="" class="btn btn-primary btn-md">Simpan</a>
						</div>
								
									
					</form>
						
				</div>
			</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>




