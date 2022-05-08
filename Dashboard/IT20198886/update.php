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

      $sql = "UPDATE vaccination_details SET    name= '$name', age='$age', gender='$gender',
      vaccinetype='$vaccine_type', dose='$dose' ,vaccination_date='$vaccination_date'
     WHERE user_id='$id'";

    
if(mysqli_query($conn, $sql)){
   
    header("Location: ViewAssignDetails.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


  
}
?>