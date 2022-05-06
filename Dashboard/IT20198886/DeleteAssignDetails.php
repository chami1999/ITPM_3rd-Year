<?php
include_once("dbconnect.php");
$sql = "DELETE FROM vaccination_details WHERE user_id='" . $_GET["user_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: ViewAssignDetails.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>