<?php 
$conn = mysqli_connect("localhost", "root", "", "db_mahasiswa");
$result = mysqli_query($conn, "SELECT * FROM jurusan")
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
		<input type="text" id="nim" name="nim" required>
		<br><br>

		<label for="nama">Nama</label>
		<input type="text" id="nama" name="nama" required>
		<br><br>

		<label for="jk">Jenis kelamin</label>
		<select name="jenis_kelamin" id="jk">
		<option value="L">Laki-Laki</option>
		<option value="P">Perempuan</option>
		</select><br><br>

		<label for="jur">Jurusan</label>
		<select name="jurusan" id="jur">
			<?php foreach ($result as $row): ?>
				<option value="<?php echo $row["nama"]; ?>"><?php echo $row["nama"]; ?></option>
			<?php endforeach ?>
		</select><br><br>

		<label for="alamat">Alamat</label>
		<textarea name="alamat" id="" cols="30" rows="3" id="alamat"></textarea>
		<br><br>

		<label for="telp">Nomor_Telpon</label>
		<input type="text" id="telp" name="telp" required>
		<br><br>

		<label for="email">E-mail</label>
		<input type="email" id="email" name="email" required>
		<br><br>
		<button type="submit" name="submit">Simpan</button>
	</form>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];

$sql = "INSERT into mahasiswa VALUES ('','$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat', '$telp', '$email', '', '')";

	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "Data Berhasil Disimpan!";
		header('Location: mahasiswa.php');
	} else {
		echo "Data Gagal Disimpan!";
	}

}

 ?>




