<?php 
$conn = mysqli_connect("localhost", "root", "", "uts1-05-221.mik.b.005");
$result =mysqli_query ($conn, "SELECT*FROM data"); 
$sql = mysqli_query($conn, "SELECT * FROM data WHERE id = $id");

if ($sql) {
	$row = mysqli_fetch_assoc($sql); 
} else {
	echo "Data Tidak Ditemukan";
}

 ?>
<!DOCTYPE html>
<html lang="en">
<body>
<h3>Ubah data</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>
					<label for="no">No Registrasi</label>
				</td>
				<td>
					<input type="text" id="no" name="no" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="nama">Nama Lengkap</label>
				</td>
				<td><input type="text" id="nama" name="nama" required></td>
			</tr>
			<tr>
				<td><label for="jurusan">Jurusan</label></td>
				<td><input type="text" id="jurusan" name="jurusan" required></td>
			</tr>
			<tr>
				<td><label for="jk">Jenis kelamin</label></td>
				<td><select name="jenis_kelamin" id="jk">
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="alamat">Alamat</label></td>
				<td><textarea name="alamat" id="" cols="30" rows="3" id="alamat"></textarea></td>
			</tr>
			<tr>
				<td><label for="telp">Nomor_Telpon</label></td>
				<td><input type="text" id="telp" name="telp" required></td>
			</tr>
			<tr>
				<td><label for="email">E-mail</label></td>
				<td><input type="email" id="email" name="email" required></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit">Simpan</button></td>
			</tr>
			
		</table>
	</form>
</body>
</html>

<?php 
if (isset($_POST['update'])) {
	$no = $_POST['no'];
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];

$sql = "INSERT into data VALUES ('', '$no', '$nama', '$jurusan', '$jenis_kelamin', '$alamat', '$telp', '$email')";

	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "Data Berhasil Disimpan!";
		header('Location: uts-data.php');
	} else {
		echo "Data Gagal Disimpan!";
	}

}

 ?>

