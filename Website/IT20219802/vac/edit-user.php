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
require_once './includes/profile-header.php';
include './db/connection.php';
$id = $_GET['id'];
$sql1 = "SELECT * FROM user_registrstion WHERE id=$id";
$res1 = mysqli_query($conn, $sql1);
while ($row = mysqli_fetch_assoc($res1)) {
    $fullName = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $age = $row['age'];
    $gender = $row['gender'];
    $vaccine_status = $row['vaccine_status'];
    $registration_date = $row['registration_date'];
    $username = $row['username'];
    $password = $row['password'];

}
?>


<div class="main">
    <div class="card">
        <div class="card-body" style="height: 600px;">
            <div class="form-align-d" style= "padding: 20px;">
                <form id="update-form" name="register-form" method="post" action="">
                    <input class="input-form" type="text"  name="name" value="<?php echo $fullName ?>"><br><br>
                    <div class="row">
                        <dev class="col-md-6">
                            <input class="input-form2" type="email"  name="email" value="<?php echo $email ?>"><br><br>
                            <input class="input-form2" type="text"   name="age" value="<?php echo $age ?>"><br><br>
                            <select class="form-select form-select-lg mb-4 input-form2" aria-label=".form-select-sm example" name="vaccine_status">
                            <option <?php if ($vaccine_status == "Yes") {
                                                    echo "selected";
                                                } ?>>Yes</option>
                                        <option <?php if ($vaccine_status == "No") {
                                                    echo "selected";
                                                } ?>>No</option>
                            </select>
                            <input class="input-form2" type="text"  name="username" value="<?php echo $username ?>" readonly><br><br>
                        </dev>
                        <dev class="col-md-6">
                            <input class="input-form2" type="tel" name="phone" value="<?php echo $phone ?>"><br><br>
                            <select class="form-select form-select-lg mb-4 input-form2" aria-label=".form-select-sm example" name="gender" >
                            <option <?php if ($gender == "Male") {
                                                    echo "selected";
                                                } ?>>Male</option>
                                        <option <?php if ($gender == "Female") {
                                                    echo "selected";
                                                } ?>>Female</option>
                            </select>
                            <input class="input-form2" type="text" placeholder="Registration date" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" name="date" value="<?php echo $registration_date ?>"><br><br>
                            <input class="input-form2" type="password" name="password" value="<?php echo $password ?>"><br><br>

                        </dev>
                        <input class="submit-form" type="submit" name="user-update" value="Update">
                    </div>
                    
                    <br><br>
                    <div class="alert alert-danger" role="alert" id="error1" style="display: none;">
                        This username already exist!
                    </div>
                    <div class="alert alert-success" role="alert" id="success1" style="display: none ;">
                        User updated successfully!
                    </div>
                </form>
            </div>
    </div>
    </div>
</div>

<?php

if (isset($_POST['user-update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $v_stst = $_POST['vaccine_status'];
    $uname = $_POST['username'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $reg_date = $_POST['date'];
    $pword = $_POST['password'];


    $sql3 = "UPDATE user_registrstion SET name='$name', email='$email', phone='$phone', age='$age', gender='$gender', vaccine_status='$v_stst', registration_date='$reg_date', username='$uname', password='$pword', role='user' WHERE id='$id'";
    mysqli_query($conn, $sql3) or die(mysqli_error($conn));
?>
    <script type="text/javascript">
        document.getElementById("error1").style.display = "none";
        document.getElementById("success1").style.display = "block";
        setTimeout(function() {
            window.location = "user.php";
        }, 3000);
    </script>

<?php
}
?>
    
<?php
require_once './includes/footer.php'
?>