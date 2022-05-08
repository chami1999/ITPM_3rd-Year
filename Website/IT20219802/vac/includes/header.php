
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="css/style.css"  type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Blueline Vaccine</title>
  </head>
  <body>
      
      <nav class="navbar navbar-expand-lg py-3 navbar-light bg-light justify-content-center">
  <div class="container">
    <a class="navbar-brand" href="#" style="font-size: 26px; font-weight:700;">Blueline Vaccine</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto navbar-center" style="--bs-scroll-height: 100px;">
      <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../logout.php">Vaccine</a>
        </li>
      </ul>
      <form class="d-flex">
      <button type="button"  class="btn" ><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_SESSION['user']; ?></button> &nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" name="logout-submit" class="btn btn-outline-success"><i class="fa fa-sign-out"></i>&nbsp; Logout</button>

      </form>
    </div>
  </div>
</nav>
    


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