<?php require_once('db.php');

if(empty($_SESSION["username"])){
    header("Location: https://sagnommusic.com/h/auth.php");
}


if(!empty($_GET["delete_id"])) {

                                      $deleteid = $_GET["delete_id"];
                                      
                                            $status_use = '0';
                                            $plan_use = '';
                                            
                                            
                                            mysqli_query($con,"UPDATE users SET status = '$status_use' AND plan = '$plan_use' WHERE id = '$deleteid' ");
                                            echo '<script type="text/javascript">';
                         
                                            echo 'setTimeout(function () { swal("Trashed","Artist have been deactivated succesfully!","success");';
                                                                                                     
                                            echo '}, 1000);</script>';
                                            header('Refresh: 5; activelist.php');
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
                                            <h5>Active list of Artists</h5>
                                        </div>
                                        
                                        
                                        <div class="form-group col-md-6">
                                                <form method="POST" action="activelist.php">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlSelect1"><b>FILTER BY PLAN</b></label>
                                                                            <select name="plan" class="form-control" id="exampleFormControlSelect1">
                                                                                <option select='selected'>Select Plan</option>
                                                                                <option value='single'>Singles</option>
                                                                                <option value='Album'>Album</option>
                                                                            </select>
                                                                        </div>
                                                                    
                                                            
                                             </div>
                                             
                                             <div class="col-md-3 form-group">
                                                 <button type='submit' class='btn btn-success' name='sbmt1'>Apply Filter</button>
                                             </div>
                                                </form>
                                                <!-- ////////////////// Form ends here ////////////////////// -->
                                                
                                                
                                                <div class="col-md-12 align-right">
                                                  <h5>
                                                  <b>plan:</b> <?php
                                                         if(!empty($_POST['plan'])) {
                                                             echo  $_POST['plan'] ;
                                                         } 
                                                         
                                                         else{echo "ALL";}
                                                      ?>
                                                  </h5>
                                                </div>
                                        <hr/>
                                        <div class="card-block">
                                            
                                           <!--table starts here--> 
                                          <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Artist Name</th>
                                                            <th>Phone number</th>
                                                            <th>Email Address</th>
                                                            <th>Bank Name</th>
                                                            <th>Account Number</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        
                                                        if(isset($_POST['sbmt1'])){
                                                            
                                                            
                                                            if($_POST['plan'] == 'single'){
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from users WHERE plan ='single' AND status = '1' AND role = 'user' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $id = $row['id'];
                                                                                              $user_name = $row['username'];
                                                                                              $accountnum = $row['accountnum'];
                                                                                              $u_email = $row['email'];
                                                                                              $u_phone = $row['userphone'];
                                                                                              $bankname = $row['bankname'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$user_name</td>
                                                                                        <td>$u_phone</td>
                                                                                        <td>$u_email</td>
                                                                                        <td>$bankname </td>
                                                                                        <td>$accountnum</td>
                                                                                        <td>
                                                                                         <a href='entries.php?ref_id=$id' class='btn btn-success'>Artist Entries</a>
                                                                                         <a href='artistmailer.php?ref_id=$id' class='btn btn-warning'>Send Artist Email</a>
                                                                                         <a href='?delete_id=$id' class='btn btn-danger'>Deactivate Artist</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                         "; }
                        									        
                        									        
                                                                   }
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                                                                 if($_POST['plan'] == 'album'){
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from users WHERE plan ='album' AND status ='1' AND role = 'user' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $id = $row['id'];
                                                                                              $user_name = $row['username'];
                                                                                              $accountnum = $row['accountnum'];
                                                                                              $u_email = $row['email'];
                                                                                              $u_phone = $row['userphone'];
                                                                                              $bankname = $row['bankname'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$user_name</td>
                                                                                        <td>$u_phone</td>
                                                                                        <td>$u_email</td>
                                                                                        <td>$bankname </td>
                                                                                        <td>$accountnum</td>
                                                                                        <td>
                                                                                         <a href='entries.php?ref_id=$id' class='btn btn-success'>Artist Entries</a>
                                                                                         <a href='artistmailer.php?ref_id=$id' class='btn btn-warning'>Send Artist Email</a>
                                                                                         <a href='?delete_id=$id' class='btn btn-danger'>Deactivate Artist</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                         "; }
                        									        
                        									        
                                                                   }
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                        									        
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                        									} // End of Submit
                        									
                        									
                        									
                        									
                        									
                        									
                        									
                        									
                        							else if(!isset($_POST['sbmt1']) ){
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from users WHERE status ='1' AND role = 'user' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $id = $row['id'];
                                                                                              $user_name = $row['username'];
                                                                                              $accountnum = $row['accountnum'];
                                                                                              $u_email = $row['email'];
                                                                                              $u_phone = $row['userphone'];
                                                                                              $bankname = $row['bankname'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$user_name</td>
                                                                                        <td>$u_phone</td>
                                                                                        <td>$u_email</td>
                                                                                        <td>$bankname </td>
                                                                                        <td>$accountnum</td>
                                                                                        <td>
                                                                                         <a href='entries.php?ref_id=$id' class='btn btn-success'>Artist Entries</a>
                                                                                         <a href='artistmailer.php?ref_id=$id' class='btn btn-warning'>Send Artist Email</a>
                                                                                         <a href='?delete_id=$id' class='btn btn-danger'>Deactivate Artist</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                         "; }
                        									        
                        									        
                                                                   }
                                                                   
                                                                 ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--Table ends here-->
                                            
                                            
                                
                                            
                                            
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