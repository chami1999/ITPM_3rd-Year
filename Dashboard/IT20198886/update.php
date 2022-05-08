<?php
include_once("dbconnect.php");
if(isset($_POST['btn4']))
{
  $user_id = $_POST['user_id'];
      $name = $_POST['name'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $vaccine_type = $_POST['vaccinetype'];
      $dose = $_POST['dose'];
      $vaccination_date = $_POST['vaccination_date'];

      if($con->connect_error){
        die('connection faild :'.$con->connect_error);
    }else{
        $sql = "UPDATE vaccination_details SET ='$user_id', vaccine_type='$vaccine_type', quantity='$quantity',
         store_date='$store_date', expire_date='$expire_date' 
        WHERE id='$id'";

        $rs = mysqli_query($con, $sql);
        if($rs){
            echo '<script>alert("Updated")</script>
             <script>location.replace("Update_Vaccine_Details.php");</script>
            ';
        }

        $con->close();
  
}
}
?>