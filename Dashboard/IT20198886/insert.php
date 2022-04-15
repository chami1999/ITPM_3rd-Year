<?php
include_once("dbconnect.php");
?>


<?php

// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
$vaccine_type = mysqli_real_escape_string($conn, $_REQUEST['vaccine_type']);
$dose = mysqli_real_escape_string($conn, $_REQUEST['dose']);
$vaccination_date = mysqli_real_escape_string($conn, $_REQUEST['vaccintion_date']);


function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}





// Attempt insert query execution
$sql = "INSERT INTO vaccination_details (Name,Age,Gender,VaccineType,Dose,Date) VALUES ('$name', '$age', '$gender', '$vaccine_type', '$dose', '$vaccination_date')";
if(mysqli_query($conn, $sql)){
    phpAlert("Vaccine details added successfully");
    header("Location: ./ViewAssignDetails.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>