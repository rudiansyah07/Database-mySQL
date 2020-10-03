<?php 
$conn = mysqli_connect("localhost", "root", "", "db_mahasiswa");
$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");

if ($sql) {
	$row = mysqli_fetch_assoc($sql); 
} else {
	echo "Data Tidak Ditemukan";
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Input Mahasiswa</title>
</head>
<body>
	<h3>Tambah data</h3>
	<form action="" method="POST">

		<label for="nim">NIM</label>
		<input type="text" id="nim" name="nim" required value="<?= $row['nim']; ?>">
		<br><br>

		<label for="nama">Nama</label>
		<input type="text" id="nama" name="nama" required value="<?= $row['nama']; ?>">>
		<br><br>

		<label for="jk">Jenis kelamin</label>
		<select name="jenis_kelamin" id="jk">
		<option value="L">Laki-Laki</option>
		<option value="P">Perempuan</option>
		</select><br><br>

		<label for="jur">Jurusan</label>
		<select name="jurusan" id="jur">
			<?php foreach ($result as $row): ?>
				<option value="<?php echo $row["nama"]; ?>"><?php echo $row["nama"]; ?>"></option>
			<?php endforeach ?>
		</select><br><br>

		<label for="alamat">Alamat</label>
		<textarea name="alamat" id="" cols="30" rows="3" id="alamat"></textarea>
		<br><br>

		<label for="telp">Nomor_Telpon</label>
		<input type="text" id="telp" name="telp" required value="<?= $row['telp']; ?>">>
		<br><br>

		<label for="email">E-mail</label>
		<input type="email" id="email" name="email" required value="<?= $row['email']; ?>">>
		<br><br>
		<button type="submit" name="submit">Simpan</button>
	</form>
</body>
</html>