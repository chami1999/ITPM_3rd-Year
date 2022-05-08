<?php
include_once("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mega Able bootstrap admin template by codedthemes </title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/IT20198886.css">

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
                                            <h5 class="m-b-10">Assign For Vaccination </h5>
                                            <p class="m-b-0">You can assign vaccine details for users</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Assign Vaccine </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Add Vaccine</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="card">
                                                    <div class="card-header">
                                                        <h5>Assign Details</h5>
                                                        <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                    </div>
                                                    <?php
                                                    $user_id = $_GET['user_id'];
                                                $sql="SELECT * FROM user_details where user_id='$user_id'";
                                                $result = $conn->query($sql);
                                                while ($row1 = $result->fetch_assoc()) {
                                                    $name = $row1["user_name"];
                                                    $age = $row1["age"];
                                                    $gender = $row1["gender"];
                                                
                                                ?>
                                                <?php
                                                }
                                                
                                                ?>
                            <div class="card-block">
                                                        <form class="form-material" action="insert.php" method="post">
                                                            <div class="form-group form-default">
                                                                <input type=hidden name="user_id" value="<?php echo  $user_id;?>">
                                                                <input type="text" name="name" class="form-control" required="" value="<?php echo  $name;?>">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Name</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="age" class="form-control" required="" value="<?php echo  $age;?>">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Age (exa@gmail.com)</label>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text" name="gender" class="form-control" required=""value="<?php echo  $gender;?>">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Gender</label>
                                                            
                                                            </div>
                                                            <?php
                                            
                                                            ?>
                                                            <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Vaccine Type</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="vaccinetype" class="form-control" required>
                                                                        <option value="opt1" ></option>
                                                                            <option value="Moderna">Moderna</option>
                                                                            <option value="Pfizer">Pfizer</option>
                                                                            <option value="Sinopharm">Sinopharm</option>
                                                                            <option value="Sputnic">Sputnic</option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
  
                                                            <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Dose</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="dose" class="form-control">
                                                                            <option value="opt1"></option>
                                                                            <option value="1st Dose">1st Dose</option>
                                                                            <option value="2nd Dose">2nd Dose</option>
                                                                            <option value="Booster">Booster</option>
                                                                            <
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="form-group row">
                                                                  <label class="col-sm-2 col-form-label" >Date</label>
                                                                  <div class="col-sm-10">
            <!-- <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/> -->
                                                                 <input type="date" class="form-control datepicker" id="vaccination_date"  name="vaccination_date"required="">
                                                                  </div>
                                                                </div>
                                                                <script>
    function successmsg() {

        var date = document.getElementById("vaccination_date").value;
        var varDate = new Date(date); //dd-mm-YYYY
        var today = new Date();

        if (date == "") {
            alert("Successfully Vaccination Details Added.");
            return true;
        } else {


            if (varDate >= today) {
                alert("Successfully Vaccination Details Added.");
                return true;
            } else {
                alert("Something going to wrong.");
                return false;

            }
        }

    }
</script>
                                                         
                                                            <div class="table-responsive">
                                                    <table class="table1"  align="right" >
                                                        <tr>
                                                            <td  width:"50px"><input type="submit" class="btn4" name="btn4" value="Confirm"></td>
                                                            <td> 
                                                                          <input type="submit" class="btn4" value="Clear"></td>
                                                    </tr>
                                                    </table>
                                                   </div>
                                                     </form>

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
