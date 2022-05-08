<?php
include_once("dbconnect.php");
if(isset($_POST['btn4']))
{
   
  $id = $_POST['user_id'];
      $name = $_POST['name'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $vaccine_type = $_POST['vaccinetype'];
      $dose = $_POST['dose'];
      $vaccination_date = $_POST['vaccination_date'];

    

      
// Attempt insert query execution
$sql = "insert into vaccination_details(user_id,name,age,gender,vaccine_type,dose,vaccination_date) VALUES ('$id','$name','$age',' $gender','$vaccine_type',' $dose','$vaccination_date ')";
if(mysqli_query($conn, $sql)){
   
    header("Location: ViewAssignDetails.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


  
}


?>
