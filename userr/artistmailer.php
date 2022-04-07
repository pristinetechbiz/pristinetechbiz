<?php require_once('db.php');

if(empty($_SESSION["username"])){
    header("Location: https://sagnommusic.com/h/auth.php");
}


if(!empty($_GET["ref_id"])) {

                                      $_SESSION['ref_id'] = $_GET["ref_id"];
                                        
                                      
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
                                            <h5>Artists Mailer</h5>
                                        </div>
                                    <!-- //////////////////// Mailer form starts here -->
                                    <?php 
                                    $ref_id = $_SESSION['ref_id'] ;
                                    $sql = mysqli_query($con," SELECT * from users WHERE id = '$ref_id' AND role = 'user' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $id = $row['id'];
                                                                                              $user_name = $row['username'];
                                                                                              $accountnum = $row['accountnum'];
                                                                                              $u_email = $row['email'];
                                                                                         $name_use = ucfirst($user_name);
                                    echo"
                                    <p>Send mail to $name_use , with bank account number: $accountnum .</p>
                                        
                                      
                                    <form class='horizontal' class='user' method='POST' action='artistmailer.php' style='margin-left:5%'>
                                                <div class='row'> 
                                                            <div class='form-group col-md-9'>
                                                                <label for='exampleInputEmail1'>Message Title</label>
                                                                <input type='text' name='messagetitle' class='form-control numbersvalidate' id='exampleInputEmail1' aria-describedby='coyHelp' placeholder='Title of message to client'>
                                                                <small id='coyHelp' class='form-text text-muted'>Provide Message title</small>    
                                                
                                                                
                                                            </div>
                                                            
                                                        
                                                        
                                                        
                                                        
                                                            <div class='form-group col-md-9'>
                                                               <label for='exampleFormControlTextarea1'>Message Description</label>
                                                               <textarea name='messagedesc' class='form-control' id='exampleFormControlTextarea1' rows='6'></textarea>
                                                             </div>
                                                </div>
                                    
                                    
                                    
                                    
                                    <button class='btn btn-primary btn-user btn-block col-md-9' name='submit' type='submit'>
                                      Submit <i class='fas fa-check fa-sm fa-fw mr-2 text-gray-400'></i>
                                    </button>
                                    
                                </form>
                                ";
                                                if(isset($_POST['submit'])){                                          
                                                    if(!empty($_POST['messagetitle']) && !empty($_POST['messagedesc'])){
                                                        
                                                        
                                                       
                                                        $subject = $_POST['messagetitle'];
                                                        $message_pre = $_POST['messagedesc'];
                                                        $from = 'Sagnom Music <noreply@sagnommusic.com>';
                                                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                                                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                                        $headers .= 'From: '.$from."\r\n". 'Reply-To: '.$from."\r\n" .'X-Mailer: PHP/' . phpversion();
                                                        
                                                        $message = "
                                                        
                                                        <!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta name='viewport' content='initial-scale=1.0'>
    <meta name='format-detection' content='telephone=no'>
    <title>Sagnom Music</title>

    <style type='text/css'>
        body {
            margin: 0;
            padding: 0;
        }
        
        img {
            border: 0px;
            display: block;
        }
        
        .socialLinks {
            font-size: 6px;
        }
        
        .socialLinks a {
            display: inline-block;
        }
        
        .long-text p {
            margin: 1em 0px;
        }
        
        .long-text p:last-child {
            margin-bottom: 0px;
        }
        
        .long-text p:first-child {
            margin-top: 0px;
        }
    </style>
    <style type='text/css'>
        /* yahoo, hotmail */
        
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }
        
        .yshortcuts a {
            border-bottom: none !important;
        }
        
        .vb-outer {
            min-width: 0 !important;
        }
        
        .RMsgBdy,
        .ExternalClass {
            width: 100%;
            background-color: #3f3f3f;
            background-color: #3f3f3f
        }
        /* outlook/office365 add buttons outside not-linked images and safari have 2px margin */
        
        [o365] button {
            margin: 0 !important;
        }
        /* outlook */
        
        table {
            mso-table-rspace: 0pt;
            mso-table-lspace: 0pt;
        }
        
        #outlook a {
            padding: 0;
        }
        
        img {
            outline: none;
            text-decoration: none;
            border: none;
            -ms-interpolation-mode: bicubic;
        }
        
        a img {
            border: none;
        }
        
        @media screen and (max-width: 600px) {
            table.vb-container,
            table.vb-row {
                width: 95% !important;
            }
            .mobile-hide {
                display: none !important;
            }
            .mobile-textcenter {
                text-align: center !important;
            }
            .mobile-full {
                width: 100% !important;
                max-width: none !important;
            }
        }
        /* previously used also screen and (max-device-width: 600px) but Yahoo Mail doesn't support multiple queries */
    </style>
    <style type='text/css'>
        #ko_singleArticleBlock_4 .links-color a,
        #ko_singleArticleBlock_4 .links-color a:link,
        #ko_singleArticleBlock_4 .links-color a:visited,
        #ko_singleArticleBlock_4 .links-color a:hover {
            color: #3f3f3f;
            color: #3f3f3f;
            text-decoration: underline
        }
        
        #ko_footerBlock_2 .links-color a,
        #ko_footerBlock_2 .links-color a:link,
        #ko_footerBlock_2 .links-color a:visited,
        #ko_footerBlock_2 .links-color a:hover {
            color: #cccccc;
            color: #cccccc;
            text-decoration: underline
        }
    </style>

</head>
<!--[if !(gte mso 16)]-->

<body style='margin: 0; padding: 0; background-color: #3f3f3f; color: #919191;' vlink='#cccccc' text='#919191' bgcolor='#3f3f3f' alink='#cccccc'>
    <!--<![endif]-->
    <center>



        <table role='presentation' class='vb-outer' style='background-color: #bfbfbf;' id='ko_titleBlock_5' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#bfbfbf'>
            <tbody>
                <tr>
                    <td class='vb-outer' style='padding-left: 9px; padding-right: 9px; font-size: 0;' valign='top' align='center'>
                        <!--[if (gte mso 9)|(lte ie 8)]><table role='presentation' align='center' border='0' cellspacing='0' cellpadding='0' width='570'><tr><td align='center' valign='top'><![endif]-->
                        <!--
      -->
                        <div style='margin: 0 auto; max-width: 570px; -mru-width: 0px;'>
                            <table role='presentation' class='vb-row' style='border-collapse: separate; width: 100%; background-color: #ffffff; mso-cellspacing: 0px; border-spacing: 0px; max-width: 570px; -mru-width: 0px;' width='570' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff'>

                                <tbody>
                                    <tr>
                                        <td style='font-size: 0; padding: 0 9px;' valign='top' align='center'>
                                            <div style='vertical-align: top; width: 100%; max-width: 552px; -mru-width: 0px;'>
                                                <!--
        -->
                                                <table role='presentation' class='vb-content' style='border-collapse: separate; width: 100%; mso-cellspacing: 9px; border-spacing: 9px;' width='552' cellspacing='9' cellpadding='0' border='0'>

                                                    <tbody>
                                                        <tr>
                                                            <td style='font-weight: normal; color: #1f497d; font-size: 22px; font-family: Verdana, Geneva, sans-serif; text-align: center;' width='100%' valign='top' align='center'><span style='font-weight: normal;'><strong>Sagnom Music</strong></span></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!--
    -->
                        <!--[if (gte mso 9)|(lte ie 8)]></td></tr></table><![endif]-->
                    </td>
                </tr>
            </tbody>
        </table>
        <table role='presentation' class='vb-outer' style='background-color: #bfbfbf;' id='ko_singleArticleBlock_4' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#bfbfbf'>
            <tbody>
                <tr>
                    <td class='vb-outer' style='padding-left: 9px; padding-right: 9px; font-size: 0;' valign='top' align='center'>
                        <!--[if (gte mso 9)|(lte ie 8)]><table role='presentation' align='center' border='0' cellspacing='0' cellpadding='0' width='570'><tr><td align='center' valign='top'><![endif]-->
                        <!--
      -->
                        <div style='margin: 0 auto; max-width: 570px; -mru-width: 0px;'>
                            <table role='presentation' class='vb-row' style='border-collapse: separate; width: 100%; background-color: #ffffff; mso-cellspacing: 9px; border-spacing: 9px; max-width: 570px; -mru-width: 0px;' width='570' cellspacing='9' cellpadding='0' border='0' bgcolor='#ffffff'>

                                <tbody>
                                    <tr>
                                        <td style='font-size: 0;' valign='top' align='center'>
                                            <div style='vertical-align: top; width: 100%; max-width: 552px; -mru-width: 0px;'>
                                                <!--
        -->
                                                <table role='presentation' class='vb-content' style='border-collapse: separate; width: 100%; mso-cellspacing: 9px; border-spacing: 9px;' width='552' cellspacing='9' cellpadding='0' border='0'>

                                                    <tbody>
                                                        <tr>
                                                            <td class='links-color' style='padding-bottom: 9px;' width='100%' valign='top' align='center'>
                                                                <!--[if (lte ie 8)]><div style='display: inline-block; width: 534px; -mru-width: 0px;'><![endif]-->
                                                                <a target='_new' href='https://sagnommusic.com/h/auth.php' style='color: #3f3f3f; color: #3f3f3f; text-decoration: underline;'><img style='border: 0px; display: block; vertical-align: top; height: auto; margin: 0 auto; color: #3f3f3f; font-size: 13px; font-family: Verdana, Geneva, sans-serif; width: 100%; max-width: 534px; height: auto;'
                                                                        src='https://mosaico.io/srv/f-nmlm1cn/img?src=https%3A%2F%2Fmosaico.io%2Ffiles%2Fnmlm1cn%2F1.jpg&amp;method=resize&amp;params=534%2Cnull' width='534' vspace='0' hspace='0' border='0'
                                                                        align='middle'></a>
                                                                <!--[if (lte ie 8)]></div><![endif]-->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style='font-weight: normal; color: #3f3f3f; font-size: 18px; font-family: Verdana, Geneva, sans-serif; text-align: left;' width='100%' valign='top' align='left'><span style='font-weight: normal;'><strong>$subject</strong></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class='long-text links-color' style='font-weight: normal; color: #3f3f3f; font-size: 13px; font-family: Verdana, Geneva, sans-serif; text-align: left; line-height: normal;' width='100%' valign='top' align='left'>
                                                                <p style='margin: 1em 0px; margin-bottom: 0px; margin-top: 0px; text-align : justify;'>$message_pre</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td valign='top' align='left'>
                                                                <table role='presentation' style='border-spacing: 0; mso-padding-alt: 6px 6px 6px 6px; padding-top: 4px;' cellspacing='0' cellpadding='6' border='0' align='left'>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style='text-align: center; font-weight: normal; padding: 6px; padding-left: 18px; padding-right: 18px; background-color: #1f497d; color: #ffffff; font-size: 13px; font-family: Arial, Helvetica, sans-serif; border-radius: 4px;' width='auto' valign='middle'
                                                                                bgcolor='#1f497d' align='left'><a style='text-decoration: none; font-weight: normal; color: #ffffff; font-size: 13px; font-family: Arial, Helvetica, sans-serif;' target='_new' href='https://sagnommusic.com/h/auth.php'>Login to Sagnom music</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!--
    -->
                        <!--[if (gte mso 9)|(lte ie 8)]></td></tr></table><![endif]-->
                    </td>
                </tr>
            </tbody>
        </table>



    </center>
    <!--[if !(gte mso 16)]-->
</body>
<!--<![endif]-->

</html>
                                                        
                                                        ";
                                                                   if( mail($u_email,$subject,$message,$headers))
                                                                    {
                                                                    echo '<script type="text/javascript">';
                                                 
                                                                    echo 'setTimeout(function () { swal("Mail Sent","Your mail is sent succesfully!","success");';
                                                                                                                             
                                                                    echo '}, 1000);</script>';
                                                                    header('Refresh: 5; artistmailer.php');
                                                                    }
                                                                    else{
                                                                        echo '<script type="text/javascript">';
                                                 
                                                                    echo 'setTimeout(function () { swal("Failure","Try again!","danger");';
                                                                                                                             
                                                                    echo '}, 1000);</script>';}
                                                    }
                                                }
                                                                                          
                                                                                              
                                                                                          }//end of while loop
                                ?>
                                            
                            <!--Form ends here-->
                                        

                                                
                                        <!-- /////////////////// Mailer form ends here -->
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