<?php require_once('db.php');

// if(empty($_SESSION["user_id"])){
//    header("Location: https://ecoopsmultipurpose.com/dashboard/");
// }
var_dump($_SESSION);

$user_id = $_SESSION["user_id"];
$acc_number = $_SESSION['acc_number'];
$user = $_SESSION['user_phone'];

if(!empty($_GET["accept_id"])) {

                                      $acceptid = $_GET["accept_id"];
                                      
                                      $sqlaccept = mysqli_query($con,"UPDATE users SET status ='1' , plan = 'single' WHERE id = $acceptid ");

        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ecoops - Dashboard</title>
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
    <meta name="description" content="Ecoops" />
    <meta name="keywords" content="Ecoops"/>
    <meta name="author" content="Ecoops"/>

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
                    <span class="b-title">Ecoops</span>
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
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Investments</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="newinvest.php" class="">Start new investment</a></li>
                            <li class=""><a href="activeinvest.php" class="">All active investments</a></li>
                            <li class=""><a href="closedinvest.php" class="">Closed investments</a></li>


                            <!--<li class=""><a href="icon-feather.php" class="">Feather<span class="pcoded-badge label label-danger">NEW</span></a></li>-->
                        </ul>
                    </li>
                  
                  
                  <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Transaction History</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="paymenthistory.php" class="">Payment History</a></li>
                            <li class=""><a href="withdrawalhistory.php" class="">Withdrawal History</a></li>


                            <!--<li class=""><a href="icon-feather.php" class="">Feather<span class="pcoded-badge label label-danger">NEW</span></a></li>-->
                        </ul>
                    </li>
                    
                    
                    
                    
                    
                    
                    
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Profile</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="profile.php" class="">Profile details</a></li>
                            <li class=""><a href="passwordupdate.php" class="">Change my password</a></li>


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
                   <span class="b-title">Ecoops</span>
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
                        <!--<li><a class="dropdown-item" href="javascript:">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Something else here</a></li>-->
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
                                            <p><strong><?php echo $_SESSION['user_firstname'];?></strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
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
                                <span><?php echo $_SESSION['user_firstname'];?></span>
                                <a href="logout.php" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
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
                              <!--[ daily sales section ] start-->
                                <div class="col-md-3 col-xl-3">
                                    <div class="card daily-sales">
                                        <div class="card-block" data-toggle="tooltip" data-placement="top" title="You can only request withdrawal if your balance is upto NGN5000">
                                            <h6 class="mb-4">Account Balance</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-12">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                                                    <?php
                                                    
                                                            
                                                    $sqlbal = mysqli_query($con,"SELECT SUM(book_balance) from contributions WHERE client_id = '$user' ");        
                                                    while($row=mysqli_fetch_array($sqlbal)){
                                                    $book_bal = $row['SUM(book_balance)'];
                                                        }
                                                      
                                                    $withdrawal = mysqli_query($con,"SELECT SUM(amount), SUM(withdrawal_charge) from withdrawal WHERE client_id = '$user' AND confirm_withdrawal = '1' ");        
                                                    while($row=mysqli_fetch_array($withdrawal)){
                                                    $withdrawal_amount = $row['SUM(amount)'];
                                                    $withdrawal_charge = $row['SUM(withdrawal_charge)'];
                                                        }
                                                      
                                                      $acc_balance = $book_bal - ($withdrawal_amount + $withdrawal_charge);
                                                      if($acc_balance > 0){echo" NGN $acc_balance";}
                                                            else echo"NGN 0";
                                                        
                                                    ?>
                                                    
                                                    
                                                    
                                                    
                                                    </h3>
                                                </div>

                                                <div class="col-12 text-center">
                                                  <?php
                                                  if($acc_balance >= 5000){
                                                    echo"
                                                  <a role='button' class='btn btn-success' href='' target='_blank'>Request Withdrawal</a>
                                                  ";}
                                                  else if($acc_balance < 5000){
                                                    echo"
                                                  <a role='button' class='btn btn-success disabled' href='' target='_blank' aria-disabled='true' >Request Withdrawal</a>
                                                  ";}
                                                  ?>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ daily sales section ] end-->
                              
                              
                              
                              
                              
                              
                              
                              
                                <!--[ daily sales section ] start-->
                                <div class="col-md-3 col-xl-3">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Active investments</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                                                    <?php
                                                    
                                                            
                                                    $sqlactive = mysqli_query($con,"SELECT SUM(verify) from contributions WHERE client_id = '$user' AND status is NULL ");        
                                                    while($row=mysqli_fetch_array($sqlactive)){
                                                    $activeInvest = $row['SUM(verify)'];
                                                            if($activeInvest > 0){echo"$activeInvest";}
                                                            else echo"0";
                                                    
                                                        }
                                                        
                                                    ?>
                                                    
                                                    
                                                    
                                                    
                                                    </h3>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">...</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ daily sales section ] end-->
                                <!--[ Monthly  sales section ] starts-->
                                <div class="col-md-3 col-xl-3">
                                    <div class="card Monthly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Completed Investments</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                                                    
                                                    <?php
                                                    
                                                    
                                                    
                                                    $sqlcheck = mysqli_query($con,"SELECT SUM(verify) from contributions WHERE client_id = '$user' AND status = 'completed' ");        
                                                    while($row=mysqli_fetch_array($sqlcheck)){
                                                    $completeInvest = $row['SUM(verify)'];
                                                            if($completeInvest > 0){echo"$completeInvest";}
                                                            else echo"0";
                                                    
                                                        }  
                                                    ?>
                                                    </h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">...</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ Monthly  sales section ] end-->
                                <!--[ year  sales section ] starts-->
                                <div class="col-md-3 col-xl-3">
                                    <div class="card yearly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Pending payments</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                                                    
                                                    <?php
                                                    
                                                  
                                                      
                                                      $sqlpend = mysqli_query($con,"SELECT SUM(verify) from payments WHERE client_id = '$user' AND payconfirm_id is NULL ");        
                                                    while($row=mysqli_fetch_array($sqlpend)){
                                                    $pending = $row['SUM(verify)'];
                                                            if($pending > 0){echo"$pending";}
                                                            else echo"0";
                                                    
                                                        }  
                                                    ?>
                                                    
                                                    </h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">...</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ year  sales section ] end-->
                                <!--[ Recent Users ] start-->
                                <div class="col-xl-8 col-md-6">
                                    <div class="card Recent-Users">
                                        <div class="card-header">
                                            <h5>Most Recent payments</h5>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <?php
                                                        
                                                        $sql = mysqli_query($con," SELECT * FROM payments WHERE client_id = '$user' AND payconfirm_id = '1' LIMIT 0, 5");
                                                              while($row=mysqli_fetch_array($sql)){
                                                                  $id = $row['id'];
                                                                  $trans_ref = $row['trans_ref'];
                                                                  $plan = $row['plan'];
                                                                  $amount = $row['amount_due'];
                                                                  $date = $row['confirm_date'];
                                                                  $status = 'PAID';
                                                                  
                                                                  
                                                                  
                                                                  echo"
                                                        <tr class='unread'>
                                                            <td><img class='rounded-circle' style='width:40px;' src='assets/images/user/avatar-2.jpg' alt='activity-user'></td>
                                                            <td>
                                                                <h6 class='mb-1'># $trans_ref</h6>
                                                                <p class='m-0'>$plan</p>
                                                            </td>
                                                            <td>
                                                                <h6 class='text-muted'><i class='fas fa-circle text-c-red f-10 m-r-15'></i>$date</h6>
                                                            </td>
                                                            <td><a href='' class='label theme-bg2 text-white f-12'>$amount</a></td>
                                                            <td><a href='' class='label theme-bg text-white f-12'>$status</a></td>
                                                        </tr>
                                                        ";}
                                                        
                                                        ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ Recent Users ] end-->

                                <!-- [ statistics year chart ] start -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card card-event">
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col">
                                                    <h5 class="m-0">All Investments</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="label theme-bg2 text-white f-14 f-w-400 float-right">...</label>
                                                </div>
                                            </div>
                                            <h2 class="mt-3 f-w-300">
                                                <?php
                                                    
                                                    $sqlcheck2 = mysqli_query($con,"SELECT SUM(verify) from contributions WHERE client_id = '$user' ");        
                                                    while($row=mysqli_fetch_array($sqlcheck2)){
                                                    $Invest = $row['SUM(verify)'];
                                                            if($Invest > 0){echo"$Invest";}
                                                            else echo"0";
                                                    
                                                        }  
                                                    ?>
                                                <sub class="text-muted f-14">Investments count</sub></h2>
                                            <h6 class="text-muted mt-4 mb-0">Total number of investments thus far</h6>
                                            <i class="fab fa-angellist text-c-purple f-50"></i>
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