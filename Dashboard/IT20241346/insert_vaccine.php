<?php
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
        $sql = "INSERT INTO stock(id,company_name,vaccine_type,quantity,store_date,expire_date) VALUES ('0','$company_name','$vaccine_type',
        '$quantity','$store_date','$expire_date')";

        $rs = mysqli_query($con, $sql);
        if($rs){
            echo '<script>alert("Data Inserted")</script>
             <script>location.replace("Vaccine_Details.php");</script>
            ';
            
        }

        $con->close();
    }
?>