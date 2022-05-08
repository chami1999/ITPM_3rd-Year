<?php
    $careDate = date('Y-m-d', strtotime($_POST['careDate']));
    $num = $_POST['num'];
    $studentName = $_POST['studentName'];   
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $birthDate = date('Y-m-d', strtotime($_POST['birthDate']));
    $age = $_POST['age'];
    $fatherName = $_POST['fatherName'];
    $fatherOccupation = $_POST['fatherOccupation'];
    $fatherOrganization = $_POST['fatherOrganization'];
    $fatherOfficeNumber = $_POST['fatherOfficeNumber'];
    $fatherMobile = $_POST['fatherMobile'];
    $fatherEmail = $_POST['fatherEmail'];
    $motherName = $_POST['motherName'];
    $motherOccupation = $_POST['motherOccupation'];
    $motherOrganization = $_POST['motherOrganization'];
    $motherOffice = $_POST['motherOffice'];
    $motherMobile = $_POST['motherMobile'];
    $motherEmail = $_POST['motherEmail'];
    $nameEmg = $_POST['nameEmg'];
    $relationship = $_POST['relationship'];
    $landNumber = $_POST['landNumber'];
    $mobileNumber = $_POST['mobileNumber'];
    $authName = $_POST['authName'];
    $authAdd = $_POST['authAdd'];
    $authNumber = $_POST['authNumber'];
    $allergy = $_POST['allergy'];
    $allergyMention = $_POST['allergyMention'];

    //Create DB Connection
    $con = mysqli_connect('sql211.epizy.com','epiz_30870825','Q6FSFOavoEQqMrd','epiz_30870825_student');

    if($con->connect_error){
        die('connection faild :'.$con->connect_error);
    }else{
        $sql = "INSERT INTO addstudent(
            id,careDate,num,studentName,nationality,gender,address,birthDate,age,fatherName,fatherOccupation,fatherOrganization,fatherOfficeNumber,fatherMobile,fatherEmail,
             motherName,motherOccupation,motherOrganization,motherOffice,motherMobile,motherEmail,nameEmg,relationship,landNumber,mobileNumber,authName,authAdd,authNumber,allergy,allergyMention) 
             VALUES ('0','$careDate',
        '$num','$studentName',
        '$nationality','$gender','$address','$birthDate','$age',
        '$fatherName','$fatherOccupation','$fatherOrganization',
        '$fatherOfficeNumber','$fatherMobile','$fatherEmail','$motherName',
        '$motherOccupation','$motherOrganization','$motherOffice','$motherMobile','$motherEmail',
        '$nameEmg','$relationship','$landNumber','$mobileNumber','$authName','$authAdd','$authNumber','$allergy',
        '$allergyMention')";

        $rs = mysqli_query($con, $sql);
        if($rs){
            echo '<script>alert("Registered")</script>
            <script>location.replace("HTML/addNewMember.php");</script>
            ';
        }

        $con->close();
    }
    
?>