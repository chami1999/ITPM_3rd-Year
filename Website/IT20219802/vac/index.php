<?php
session_start();
$title =  'Index';
require_once './includes/index-header.php';
include './db/connection.php';
?>


<div class="row">
    <div class="col-md-6"> 
<div class="main">
		<div class="card">
			<div class="card-title">
				<h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> User <span id="action_title">Login</span></h3>
			</div>
			<div class="card-body">
				<div class="card-body-top">
					<button id="login" class="btn" name="login" onclick="login()">Already Registered</button>
					<button id="register" class="btn" name="register" onclick="register()">New User</button>
					<div id="pointer-btn"></div>
				</div>
				<div class="card-body-login">
					<form id="login-form" name="login-form" method="post" action="">
						<input class="input-form" type="text" placeholder="Enter username" required name="username"><br><br>
						<input class="input-form" type="password" placeholder="Enter password" required name="password"><br><br><br>
						<input class="submit-form" type="submit" name="user-login" value="Login">
                        <br><br>
                        <div class="alert alert-danger" role="alert" id="error" style="display: none;">
                            Invalid username or password!
                        </div>
                        <div class="alert alert-success" role="alert" id="success" style="display: none ;">
                            User Loged In successfully!
                        </div>
					</form>
					<form id="register-form" name="register-form" method="post" action="">
                        <input class="input-form" type="text" placeholder="Enter your full name" required name="name"><br><br>
                        <div class="row">
                            <dev class="col-md-6">
                            <input class="input-form2" type="email" placeholder="Enter email" required name="email"><br><br>
                            <input class="input-form2" type="text" placeholder="Enter age" required name="age"><br><br>
                            <select class="form-select form-select-lg mb-4 input-form2" aria-label=".form-select-sm example" name="vacc_stat">
                            <option selected>Vaccine Status</option>
                                <option>Yes</option>
                                 <option>No</option>
                            </select>
                        <input class="input-form2" type="text" placeholder="Enter username" required name="username"><br><br>
                            </dev>
                            <dev class="col-md-6">
                            <input class="input-form2" type="tel" placeholder="Enter phone" required name="phone"><br><br>
                            <select class="form-select form-select-lg mb-4 input-form2" aria-label=".form-select-sm example" name="gender">
                            <option selected>Gender</option>
                                <option>Male</option>
                                 <option>Female</option>
                            </select>
                                 <input class="input-form2" type="text" placeholder="Registration date" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" name="date"><br><br>
						<input class="input-form2" type="password" placeholder="Enter password" required name="password"><br><br>

                            </dev>
                        </div>
						<input class="submit-form" type="submit" name="user-register" value="Register">
                        <br><br>
                        <div class="alert alert-danger" role="alert" id="error1" style="display: none;">
                            This username already exist!
                        </div>
                        <div class="alert alert-success" role="alert" id="success1" style="display: none;">
                            User added successfully!
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
    </div>

   
    <div class="col-md-6">
    <img class="img-thumbnail" src="./assets/cover.jpg"  alt="blueline vaccine" style="display:inline-block; height: 100%; vertical-align: middle;">
    </div>
    </div>

    <?php
if(isset($_POST["user-login"])) {

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $count2 = 0;
    $res2 = mysqli_query($conn, "SELECT * FROM `user_registrstion` WHERE username='$username' && password ='$password' ");
    $count2 = mysqli_num_rows($res2);

    if($count2 > 0) {
        $_SESSION["user"]=$username;
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display="block";
            setTimeout(function() {
                window.location="dashboard.php";
        }, 2000);
        </script>
        <?php
    }else {
        ?>
        <script type="text/javascript">
                document.getElementById("error").style.display="block";
                setTimeout(function() {
            window.location.href = window.location.href;
        }, 2000);
            </script>
        <?php
    }
}
    ?>
<?php
    if(isset($_POST["user-register"])) {

        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $phone  = mysqli_real_escape_string($conn, $_POST["phone"]);
        $age = mysqli_real_escape_string($conn, $_POST["age"]);
        $date = mysqli_real_escape_string($conn, $_POST["date"]);
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        
        $count1 = 0;
        $res1 = mysqli_query($conn, "SELECT * FROM `user_registrstion` WHERE username='$username'");
        $count1 = mysqli_num_rows($res1);

        if($count1 > 0) {
            ?>
            <script type="text/javascript">
                document.getElementById("success1").style.display="none";
                document.getElementById("error1").style.display="block";
                setTimeout(function() {
        }, 3000);
            </script>
            <?php
        }else {
            mysqli_query($conn, "INSERT INTO user_registrstion VALUES (NULL,'$name','$email','$phone','$age','$_POST[gender]','$_POST[vacc_stat]','$date','$username','$password','user')");
            $_SESSION["user"]=$username;
            ?>
            <script type="text/javascript">
                document.getElementById("success1").style.display="block";
                setTimeout(function() {
            window.location = "dashboard.php";
        }, 0);
        </script>
            <?php
        }
    }
    ?>

	<script>
		var x = document.getElementById("login-form");
		var y = document.getElementById("register-form");
		var z = document.getElementById("pointer-btn");
		var l = document.getElementById("login");
		var r = document.getElementById("register");
		var ac = document.getElementById("action_title");

		function register(){
			x.style.left = "-450px";
			y.style.left = "5px";
			z.style.left = "230px";
			l.style.color = "#848484";
			r.style.color = "#1b355c";
			ac.textContent = "Register";
		}

		function login(){
			x.style.left = "25px";
			y.style.left = "450px";
			z.style.left = "29px";
			l.style.color = "#1b355c";
			r.style.color = "#848484";
			ac.textContent = "Login";
		}		
	</script>


<?php
require_once './includes/footer.php'
?>