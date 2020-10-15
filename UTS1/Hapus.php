<?php 
$conn = mysqli_connect("localhost", "root", "", "uts1-05-221.mik.b.005");
$id = $_GET['id'];
$sql = "DELETE FROM data WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('location: uts-data.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

 ?>