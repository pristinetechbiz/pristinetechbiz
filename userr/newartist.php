<?php require_once('db.php');

if(empty($_SESSION["username"])){
    header("Location: https://sagnommusic.com/h/auth.php");
}


if(!empty($_GET["accept_id"])) {

                                      $acceptid = $_GET["accept_id"];
                                      
                                      $sqlaccept = mysqli_query($con,"UPDATE users SET status ='1' , plan = 'single' WHERE id = $acceptid ");

        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sagnom Music - Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Sagnom Music" />
    <meta name="keywords" content="Sagnom Music"/>
    <meta name="author" content="Sagnom Music"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" />

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.php" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">Sagnom Music</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Interface</label>
                    </li>
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Artists</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="newartist.php" class="">Add new</a></li>
                            <li class=""><a href="activelist.php" class="">Active lists</a></li>
                            <li class=""><a href="deletedlist.php" class="">Deleted Lists</a></li>


                            <!--<li class=""><a href="icon-feather.php" class="">Feather<span class="pcoded-badge label label-danger">NEW</span></a></li>-->
                        </ul>
                    </li>
                    
                    
                    
                    
                    
                    
                    
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">System Admin</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="newuser.php" class="">Add New Admin</a></li>
                            <li class=""><a href="activeusers.php" class="">Active Admin Accounts</a></li>


                            <!--<li class=""><a href="icon-feather.php" class="">Feather<span class="pcoded-badge label label-danger">NEW</span></a></li>-->
                        </ul>
                    </li>
                    
                    
                   
                    <li data-username="Menu" class="nav-item"><a href="logout.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Logout</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.php" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Sagnom Music</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="javascript:" class="m-r-10">mark as read</a>
                                    <a href="javascript:">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong><?php echo $_SESSION['username'];?></strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                            <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span><?php echo $_SESSION['username'];?></span>
                                <a href="logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="logout.php" class="dropdown-item"><i class="feather icon-lock"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                     <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add new Artist</h5>
                                        </div>
                                        <div class="card-block">
                                            
                                            
                                           
                                            <!--Form starts here-->
                                <form class='horizontal'class='user' method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                    <div class="row"> 
                                            <div class="form-group col-md-6">
                                                       <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" name="username" class="form-control" placeholder="Enter Artist Name"/>
                                                        <small id="coyHelp" class="form-text text-muted">Provide artist Name</small>
                                                            
                                             </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                            <div class="form-group col-md-6">
                                                       <label for="exampleInputEmail1">Password</label>
                                                        <input type="password" name="password_reg" class="form-control" placeholder="Enter Password"/>
                                                        <small id="coyHelp" class="form-text text-muted">Provide artist password</small>
                                                            
                                             </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="row"> 
                                            <div class="form-group col-md-6">
                                                       <label for="exampleInputEmail1">Artist Email</label>
                                                        <input type="password" name="email_reg" class="form-control" placeholder="Enter Artist Email"/>
                                                        <small id="coyHelp" class="form-text text-muted">Provide Artist Email</small>
                                                            
                                             </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                            <div class="form-group col-md-6">
                                                       <label for="exampleInputEmail1">Artist Phone Number</label>
                                                        <input type="number" name="userphone" class="form-control" placeholder="Enter Artist Phone Number"/>
                                                        <small id="coyHelp" class="form-text text-muted">Provide Artist Phone Number</small>
                                                            
                                             </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                     <div class="row"> 
                                            <div class="form-group col-md-6">
                                                       <label for="exampleInputEmail1">Artist Bank Name</label>
                                                        <input type="text" name="bankname" class="form-control" placeholder="Enter Artist Bank Name"/>
                                                        <small id="coyHelp" class="form-text text-muted">Provide Artist Bank Name</small>
                                                            
                                             </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                            <div class="form-group col-md-6">
                                                       <label for="exampleInputEmail1">Artist Bank Account Number</label>
                                                        <input type="text" name="accountnum" class="form-control" placeholder="Enter Artist Account Number"/>
                                                        <small id="coyHelp" class="form-text text-muted">Provide Artist Account Number</small>
                                                            
                                             </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="row"> 
                                            <div class="form-group col-md-6">
                                                       <label for="exampleInputEmail1">Select subscription plan</label>
                                                        <select name="plan" class="form-control">
                                                            <option value="single">Single</option>
                                                            <option value="album">Album</option>
                                                        </select>
                                                        <small id="coyHelp" class="form-text text-muted">Provide Artist Plan</small>
                                                            
                                             </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                            
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <button class='btn btn-primary btn-user btn-block' name='submit' type='submit'>
                                      Submit <i class="fas fa-check fa-sm fa-fw mr-2 text-gray-400"></i>
                                    </button>
                                    
                                </form>
                                <!--Form ends here-->
                                
                                
                                <!-- Validation-->
                                    <?php
                                        if (isset($_POST['submit'])){
                                            $username = $_POST['username'];
                                             $password = $_POST['password_reg'];
                                             $user_email = $_POST['email_reg'];
                                             $userphone = $_POST['userphone'];
                                             $bankname = $_POST['bankname'];
                                             $accountnum = $_POST['accountnum'];
                                             $plan = $_POST['plan'];
                                             $status = 1;
                                             $today = date("Y-m-d");
                                            
                                                if(!empty($accountnum)){
                                                     $sql = mysqli_query($con,"INSERT INTO users(username,password,email,userphone,bankname,accountnum,reg_date,status,plan,role) VALUES('$username','$password','$user_email','$userphone','$bankname','$accountnum','$today','$status','$plan','user') ");
                                                     echo '<script type="text/javascript">';
                 
                                                     echo 'setTimeout(function () { swal("Success!","Artist account is created successfully!","success");';
                                                                                             
                                                     echo '}, 1000);</script>';
                                                     
                                                     header("Location:newartist.php");
                                                 }
                                        }
                                    ?>
                                <!-- Validation-->
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
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
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    

</body>
</html>