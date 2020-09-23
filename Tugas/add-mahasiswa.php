<?php 
$conn = mysqli_connect("localhost", "root", "", "db_mahasiswa");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<label for="mah">Mahasiswa</label>
		<input type="text" id="mah" name="mahasiswa">
		<br>
		<button type="submit" name="submit">Simpan</button>
	</form>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$mahasiswa = $_POST['mahasiswa'];

	$result = "INSERT INTO mahasiswa (nama, jenis_kelamin, jurusan,alamat, nomor_telpon, email, create_at, update_at) VALUES ('$mahasiswa','', '', '', '', '', '', '')";
	$sql = mysql_query($conn, $result);

	if ($sql) {
		echo "Data Berhasil Disimpan!";
	} else {
		echo "Data Gagal Dismpan!";
	}
	
}

 ?>
