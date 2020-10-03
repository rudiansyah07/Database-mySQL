<?php 
$conn = mysqli_connect("localhost", "root", "", "db_mahasiswa");

$id = $_GET['id'];
 $sql = "DELETE FROM mahasiswa WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('location: mahasiswa.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

 ?>