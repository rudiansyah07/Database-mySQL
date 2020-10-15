<?php 
$conn = mysqli_connect("localhost", "root", "", "db_data");
$result =mysqli_query ($conn, "SELECT*FROM transaksi"); 
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
		<table>
			<tr>
				<td>
					<label for="id">ID Nasabah</label>
				</td>
				<td>
					<input type="text" id="id" name="id" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="nama">Nama Nasabah</label>
				</td>
				<td><input type="text" id="nama" name="nama" required></td>
			</tr>
			<tr>
				<td><label for="norek">No Rekening</label></td>
				<td><input type="text" id="norek" name="norek" required></td>
			</tr>

			<tr>
				<td><label for="no">No Transaksi</label></td>
				<td><input type="no" id="no" name="no" required></td>
			</tr>
			<tr>
				<td><label for="telp">Jenis Transaksi</label></td>
				<td><input type="text" id="telp" name="telp" required></td>
			</tr>
			<tr>
				<td><label for="tanggal">Tanggal</label></td>
				<td><input type="date" id="tanggal" name="tanggal" required></td>
			</tr>
			<tr>
			<tr>
				<td><label for="jumlah">Jumlah</label></td>
				<td><input type="text" id="jumlah" name="jumlah" required></td>
			</tr>
				<td></td>
				<td><button type="submit" name="submit">Simpan</button></td>
			</tr>
			
		</table>
	</form>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$norek = $_POST['norek'];
	$no = $_POST['no'];
	$jenis = $_POST['jenis'];
	$tanggal = $_POST['tanggal'];
	$jumlah = $_POST['jumlah'];

$sql = "INSERT into data VALUES ('', '$nama', '$norek', '$no', '$jenis', '$tanggal', '$jumlah', '', '')";

	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "Data Berhasil Disimpan!";
		header('Location: uts-data.php');
	} else {
		echo "Data Gagal Disimpan!";
	}

}

 ?>
