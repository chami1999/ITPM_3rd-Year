<?php
include_once ("dbconnect.php");
?>



<!DOCTYPE html>
<html lang="en">



<head>


    <title>Add Vaccine Details </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- morris chart -->
    <link rel="stylesheet" type="text/css" href="assets/css/morris.js/css/morris.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

    <style>
    .a {
  color: black;
  font-family: Cursive;
  font-size: 200%;
}

.p{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: blue;
    font-size: 300%;
}
</style>


</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            
            <?php
            include('Components/TopNavBar.php');
            ?>
            

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php
                    include('Components/SideNavBar.php');
                    ?>

                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Add Vaccine Details</h5>
                                            <p class="m-b-0"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Navigation</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Home</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <br><br><br>
                                    <center>              
                               
                                 <div class="container">
                                         <div class="row col-md-6 col-md-offset-3">
                                             <div class="panel panel-primary">
                                                    <div class="panel-heading text-center">
                                                            <h1 class="p"> Add Vaccine Details</h1>
                                        </div>

                                        
                                    <div class="panel-body" >

                                     
                                        <form action="insert_vaccine.php" method="POST">
                                            <div  class="form-group">
                                                <label for="CompanyName" class="a">Company Name </label>
                                                <input type="text" class="form-control" id="CompanyName" name="company_name"    />
                                            </div>

                                            <div  class="form-group">
                                                <label for="VaccineType" class="a">Vaccine Type </label>
                                                <div>
                                                <lable for="Sinopharm" class="radio-inline" >  <input type="radio" name="vaccine_type" value="Sinopharm"   id="Sinopharm" class="a">Sinopharm  </lable>
                                                <lable for="Pfizer" class="radio-inline" >  <input type="radio" name="vaccine_type"  value="Pfizer"    id="Pfizer">Pfizer </lable>
                                                <lable for="Moderna" class="radio-inline" >  <input type="radio" name="vaccine_type" value="Moderna"    id="Moderna">Moderna  </lable>
                                                <lable for="Sputnik'" class="radio-inline" >  <input type="radio" name="vaccine_type"  value="Sputnik"    id="Sputnik'">Sputnik  </lable>
                                                </div>
                                            </div>

                                            <div  class="form-group">
                                                <label for="Quantity" class="a">Quantity </label>
                                                
                                                <input type="text" class="form-control" id="Quantity"  name="quantity" 
                                                 placeholder="Enter 5 digits Quantity"
                                                
                                                name="idNumber" pattern="{0-4}{5}"/>
                                              
                                            </div>


                                            

                                            <div  class="form-group">
                                                <label for="StoreDate" class="a">Store Date </label>
                                                <input type="date" class="form-control" id="StoreDate"    name="store_date"  />
                                            </div>

                                            <div  class="form-group">
                                                <label for="ExpireDate" class="a">Expire Date </label>
                                                <input type="date"  max="2022.10.17" min="2021.10.17" class="form-control" id="ExpireDate"   name="expire_date"  />
                                            </div>
                                            
                                            <input type="submit"  class="btn btn-primary"  name="submit">

                                        </form>
                                      



                                       



                                    </div>
                                    
                                    <div class="panel-footer text-right">
                                        <small>&copy; Vaccine </small>
                                    </div>
                                  
                                 </div>

                             </div>
                          </div>



                        </center>     

                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>

                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- Morris Chart js -->
<script src="assets/js/raphael/raphael.min.js"></script>
<script src="assets/js/morris.js/morris.js"></script>
<!-- Custom js -->
<script src="assets/js/morris-custom-chart.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>










</body>

</html>
