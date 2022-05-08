<?php
include_once("dbconnect.php");
if(isset($_POST['btn4']))
{
      $user_id=$_POST['user_id'];
      $name = $_POST['name'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $vaccine_type = $_POST['vaccine_type'];
      $dose = $_POST['dose'];
      $vaccination_date = $_POST['vaccination_date'];

      $sql = "UPDATE vaccination_details SET name='$name', age='$age', gender='$gender', vaccine_type='$vaccine_type', dose='$dose', vaccination_date='$vaccination_date' WHERE user_id='$user_id'";

     
    
if(mysqli_query($conn, $sql)){
   
    header("Location: ViewAssignDetails.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


  
}
?>