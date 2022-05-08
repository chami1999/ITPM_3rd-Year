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
$page = "vaccine-details";
require_once './includes/profile-header.php';
include './db/connection.php';

$uname =  $_SESSION['user']; 
$sql = "SELECT * FROM user_registrstion WHERE username='$uname'";
$res= mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    $fullName = $row['name'];
    $vaccine_status = $row['vaccine_status'];

}
?>

<div class="container d-flex justify-content-center align-items-center">
         <div class="cardd py-4">

            <div class="d-flex justify-content-center align-items-center">
              <div class="round-image">
                <img src="./assets/user.PNG" class="rounded-circle" width="97">
              </div>
            </div>

            <div class="text-center">

              <h4 class="mt-3"><?php echo $fullName ?></h4>
              <span>Vaccine Status : <?php echo $vaccine_status ?></span>


              

              
            </div>
           
         </div>
          </div>


          <?php
require_once './includes/footer.php'
?>
