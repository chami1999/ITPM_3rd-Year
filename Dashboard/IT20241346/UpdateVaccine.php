<?php 
      $id = $_POST['id'];
      $company_name = $_POST['company_name'];
      $vaccine_type = $_POST['vaccine_type'];
      $quantity = $_POST['quantity'];
      $store_date = date('Y-m-d', strtotime($_POST['store_date']));
      $expire_date = date('Y-m-d', strtotime($_POST['expire_date']));
    
     //connect DB
     $con = mysqli_connect("localhost","root","","blueline_vaccine");

     if($con->connect_error){
         die('connection faild :'.$con->connect_error);
     }else{
         $sql = "UPDATE stock SET company_name='$company_name', vaccine_type='$vaccine_type', quantity='$quantity',
          store_date='$store_date', expire_date='$expire_date' 
         WHERE id='$id'";
 
         $rs = mysqli_query($con, $sql);
         if($rs){
             echo '<script>alert("Updated")</script>
              <script>location.replace("Vaccine_Details.php");</script>
             ';
         }
 
         $con->close();
     }
?>