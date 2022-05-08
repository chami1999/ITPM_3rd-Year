<?php
session_start();
if(!isset($_SESSION["user"])){
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<?php
$page = "account-details";
require_once './includes/profile-header.php';
include './db/connection.php';

$uname =  $_SESSION['user']; 
$sql = "SELECT * FROM user_registrstion WHERE username='$uname'";
$res= mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    $fullName = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $age = $row['age'];
    $gender = $row['gender'];
    $vaccine_status = $row['vaccine_status'];

}

?>
<div class="container">
        <div class="row">
            <div class="col-12 p-0">
            </div>
            <div class="column">
                <div class="row">
                    <div class="col-12 bg-white p-0 px-3 py-3 mb-3">
                        <div class="d-flex flex-column align-items-center">
                            <img class="photo"
                                src="./assets/user.PNG"
                                alt="">
                            <p class="fw-bold h4 mt-3"><?php echo $fullName ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="row">
                    <div class="col-12 bg-white px-3 mb-3 pb-3">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Email</p>
                            <p class="py-2 text-muted"><?php echo $email ?></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Age</p>
                            <p class="py-2 text-muted"><?php echo $age ?></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Gender</p>
                            <p class="py-2 text-muted"><?php echo $gender ?></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="py-2">Phone</p>
                            <p class="py-2 text-muted"><?php echo $phone ?></p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="py-2">Vaccination Status</p>
                            <p class="py-2 text-muted"> <?php echo $vaccine_status ?></p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <?php
require_once './includes/footer.php'
?>
