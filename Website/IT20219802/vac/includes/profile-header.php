
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- <link href="css/style.css"  type="text/css" rel="stylesheet" /> -->
    <link href="css/profile.css"  type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <title>Blueline Vaccine</title>
  </head>
      
  <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>

        <div class="header_img"> 
        <button type="button"  class="btn btnbtnbtnbtn" ><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['user']; ?></button> &nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-injection nav_logo-icon'></i> <span class="nav_logo-name">Blueline Vaccine</span> </a>
                <div class="nav_list"> 
                <a href="dashboard.php" class="nav_link <?php if($page == 'dashboard') {echo 'active';} ?>"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-candles nav_icon'></i> <span class="nav_name">Vaccine Stock</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-plus-circle nav_icon'></i> <span class="nav_name">Assign Vaccine</span> </a>
                <a href="staff.php" class="<?php if($page == 'staff') {echo 'active';} ?> nav_link"> <i class='bx bx-user-pin nav_icon'></i> <span class="nav_name">Staff</span> </a>
                <a href="user.php" class="<?php if($page == 'user') {echo 'active';} ?> nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">User</span> </a> 
                <a href="" class="nav_link"> <i class='bx bx-dots-horizontal nav_icon'></i> <span class="nav_name">My Account</span> </a>
                <a href="account-details.php" class="<?php if($page == 'account-details') {echo 'active';} ?> nav_link"> <i class='bx bx-user-circle nav_icon'></i> <span class="nav_name">Account Details</span> </a> 
                <a href="vaccine-details.php" class="<?php if($page == 'vaccine-details') {echo 'active';} ?> nav_link"> <i class='bx bx-calendar-plus nav_icon'></i> <span class="nav_name">Vaccine Details</span> </a> 
             
            </div>
            </div> 
            <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>


<?php
if(isset($_GET['logout-submit'])) {
    session_destroy();
    unset($_SESSION['user']);
    ?>
    <script type="text/javascript">
      window.location="index.php";
    </script>
    <?php
}
?>
<div class="container">


<script>

document.addEventListener("DOMContentLoaded", function(event) {

   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)

   // Validate that all variables exist
   if(toggle && nav && bodypd && headerpd){
   toggle.addEventListener('click', ()=>{
   // show navbar
   nav.classList.toggle('show')
   // change icon
   toggle.classList.toggle('bx-x')
   // add padding to body
   bodypd.classList.toggle('body-pd')
   // add padding to header
   headerpd.classList.toggle('body-pd')
   })
   }
   }

   showNavbar('header-toggle','nav-bar','body-pd','header')

   /*===== LINK ACTIVE =====*/
   const linkColor = document.querySelectorAll('.nav_link')

   function colorLink(){
   if(linkColor){
   linkColor.forEach(l=> l.classList.remove('active'))
   this.classList.add('active')
   }
   }
   linkColor.forEach(l=> l.addEventListener('click', colorLink))

    // Your code to run since DOM is loaded and ready
   });
</script>

