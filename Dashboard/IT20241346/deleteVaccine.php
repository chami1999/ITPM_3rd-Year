<?php

$id = $_POST['id'];

$conn = mysqli_connect("localhost","root","","blueline_vaccine");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM stock WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Vaccine Details Deleted")</script>
  <script>location.replace("Delete_Vaccine_Details.php");</script>
  ';
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>