<?php require_once('db.php');

//if(empty($_SESSION["user_id"])){
  //  header("Location: https://ecoopsmultipurpose.com/dashboard/");
//}

$user_id = $_SESSION["user_id"];
$user = $_SESSION['user_phone'];
$user_email = $_SESSION['user_email'];



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
                    
                   	<li>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                      	<br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
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
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Profile Update</h5>
                                        </div>
                                      
                                      
                                      
                                        <div class="card-block">
                                          
                                          <form class='horizontal' method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
                                            
                                           		 <div class="row"> 
                                                       
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Bank Name</label>
                                                            <select name='bankname' class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED>
                                                                <option selected>Choose</option>
                                                                      <option value="access">Access Bank</option>
                                                                      <option value="citibank">Citibank</option>
                                                                      <option value="diamond(Access)">Diamond(Access) Bank</option>
                                                                      <option value="ecobank">Ecobank</option>
                                                                      <option value="fidelity">Fidelity Bank</option>
                                                                      <option value="firstbank">First Bank</option>
                                                                      <option value="fcmb">First City Monument Bank (FCMB)</option>
                                                                      <option value="gtb">Guaranty Trust Bank (GTB)</option>
                                                                      <option value="heritage">Heritage Bank</option>
                                                                      <option value="keystone">Keystone Bank</option>
                                                                      <option value="polaris">Polaris Bank</option>
                                                                      <option value="providus">Providus Bank</option>
                                                                      <option value="stanbic">Stanbic IBTC Bank</option>
                                                                      <option value="standard Chartered">Standard Chartered Bank</option>
                                                                      <option value="sterling">Sterling Bank</option>
                                                                      <option value="suntrust">Suntrust Bank</option>
                                                                      <option value="union">Union Bank</option>
                                                                      <option value="uba">United Bank for Africa (UBA)</option>
                                                                      <option value="unity">Unity Bank</option>
                                                                      <option value="wema">Wema Bank</option>
                                                                      <option value="zenith">Zenith Bank</option>
                                                            </select>
                                                        </div>
                                                   
                                                   
                                                   
                                                   
                                                   		<div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Account Name:</label>
                                                            <input type="text" name='account_name' placeholder="Enter your Account Name" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                        
                                                        
                                    			</div><!-- row ends here-->
                                            
                                            
                                            
                                            
                                            
                                              <div class="row"> 
                                                       
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Account Number:</label>
                                                            <input type="text" name='account_number' placeholder="Enter your Account Number" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                   
                                                   
                                                   
                                                   
                                                   		<div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Address:</label>
                                                            <input type="text" name='address' placeholder="Enter your Address" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                        
                                                        
                                    			</div><!-- row ends here-->
                                            
                                            
                                           
                                            
                                            
                                            
                                            
                                              <div class="row"> 
                                                       
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">L.G.A:</label>
                                                            <input type="text" name='lga' placeholder="Enter your L.G.A" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                   
                                                   
                                                   
                                                   
                                                   		<div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">State of Residence:</label>
                                                            <input type="text" name='stateofresidence' placeholder="Enter your State of residence" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                        
                                                        
                                    			</div><!-- row ends here-->
                                            
                                            
                                            
                                            
                                            	<div class="row">
                                                  
                                                  		<div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Date of birth:</label>
                                                            <input type="text" name='dob' placeholder="Enter your date of birth" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                  
                                                  
                                                  
                                                       
                                                               <div class="form-group col-md-6 form-control">
                                                                 <label for="exampleInputEmail1">Upload profile picture: </label>
                                                                <div class="picture-container">
                                                                    <div class="picture">
                                                                        <img src="default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                                                        <input type="file" id="wizard-picture" name="ufile" required="required" data-rule-required="true" data-msg-required="Please upload proof of payment" title="Select to upload a file!">
                                                                        <span class="error1" style="display: none;">
                                                                          <i class="error-log fa fa-exclamation-triangle"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                               </div>
                                                        
                                            	</div>
                                            
                                            
                                            
                                            	 <div class="row"> 
                                                       
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Next of kin:</label>
                                                            <input type="text" name='nok' placeholder="Enter your Next of kin" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                   
                                                   
                                                   
                                                   
                                                   		<div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Relationship with next of Kin:</label>
                                                            <input type="text" name='rnok' placeholder="Enter the kind of relationship you have with your next of Kin" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                        
                                                        
                                    			</div><!-- row ends here-->
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="row"> 
                                                       
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Next of kin phone number:</label>
                                                            <input type="text" name='nok_phone' placeholder="Enter Next of kin phone number" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                   
                                                   
                                                   
                                                   
                                                   		<div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Next of kin address:</label>
                                                            <input type="text" name='nok_add' placeholder="Enter next of kin address" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                        
                                                        
                                    			</div><!-- row ends here-->
                                            
                                            
                                            
                                            
                                            
                                            <br/>
                                            
                                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                          </form>
                                          
                                 			
                                          <?php
                                          	if (isset($_POST['submit'])){
                                              $user_id = $_SESSION['user_id'];
                                              $user = $_SESSION['user_phone'];
                                              $user_email = $_SESSION['user_email'];
                                              $bankname = $_POST['bankname'];
                                              $account_name = $_POST['account_name'];
                                              $account_number = $_POST['account_number'];
                                              $address = $_POST['address'];
                                              $lga = $_POST['lga'];
                                              $stateofresidence = $_POST['stateofresidence'];
                                              $dob = $_POST['dob'];
                                              $nok = $_POST['nok'];
                                              $rnok = $_POST['rnok'];
                                              $nok_phone = $_POST['nok_phone'];
                                              $nok_add = $_POST['nok_add'];
                                              
                                              
                                              	 
                                                      $imgFile = $_FILES['ufile']['name'];
                                                      $tmp_dir = $_FILES['ufile']['tmp_name'];
                                                      $imgSize = $_FILES['ufile']['size'];

                                                      $upload_dir = 'profilepic/'; // upload directory

                                                       $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

                                                       // valid image extensions
                                                       $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extensions

                                                       // rename uploading image
                                                       $userprofile = rand(1000,1000000).".".$imgExt;
                                                       if($imgSize < 5000000)    {
                                                             move_uploaded_file($tmp_dir,$upload_dir.$userprofile);
                                                            }
                                              
													mysqli_query($con, " UPDATE users SET dob = '$dob', user_address = '$address', sof_residence = '$stateofresidence', lga = '$lga', nok = '$nok', relationship = '$rnok', nok_phone = '$nok_phone', nok_address = '$nok_add', acc_name = '$account_name', acc_number = '$account_number', acc_bankname = '$bankname', picture = '$userprofile' WHERE user_id = '$user_id' ");
                                            			
                                              
                                              			 $subject = 'Welcome to ECOOPS-FINANCIAL';
                                                                    $from = 'info@ecoops-financial.com <ECOOPS-FINANCIAL>';
                                                                    
                                                                     
                                                                    // To send HTML mail, the Content-type header must be set
                                                                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                                                                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                                                     
                                                                    // Create email headers
                                                                    $headers .= 'From: '.$from."\r\n".
                                                                        'Reply-To: '.$from."\r\n" .
                                                                        'X-Mailer: PHP/' . phpversion();
                                                                     
                                                                    // Compose a simple HTML email message
                                                                    $message = "
                                                                    
                                                                    			<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'><head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
  <meta name='viewport' content='initial-scale=1.0'>
  <meta name='format-detection' content='telephone=no'>
  <title>ECOOPS-FINANCIAL</title>
  
  <style type='text/css'>
    body{ margin: 0; padding: 0; }
    img{ border: 0px; display: block; }

    .socialLinks{ font-size: 6px; }
    .socialLinks a{
      display: inline-block;
    }

    .long-text p{ margin: 1em 0px; }
    .long-text p:last-child{ margin-bottom: 0px; }
    .long-text p:first-child{ margin-top: 0px; }
  </style>
  <style type='text/css'>
    /* yahoo, hotmail */
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{ line-height: 100%; }
    .yshortcuts a{ border-bottom: none !important; }
    .vb-outer{ min-width: 0 !important; }
    .RMsgBdy, .ExternalClass{
      width: 100%;
      background-color: #3f3f3f;
      background-color: #3f3f3f}

    /* outlook/office365 add buttons outside not-linked images and safari have 2px margin */
    [o365] button{ margin: 0 !important; }

    /* outlook */
    table{ mso-table-rspace: 0pt; mso-table-lspace: 0pt; }
    #outlook a{ padding: 0; }
    img{ outline: none; text-decoration: none; border: none; -ms-interpolation-mode: bicubic; }
    a img{ border: none; }

    @media screen and (max-width: 600px) {
      table.vb-container, table.vb-row{
        width: 95% !important;
      }

      .mobile-hide{ display: none !important; }
      .mobile-textcenter{ text-align: center !important; }

      .mobile-full{ 
        width: 100% !important;
        max-width: none !important;
      }
    }
    /* previously used also screen and (max-device-width: 600px) but Yahoo Mail doesn't support multiple queries */
  </style>
  <style type='text/css'>
    
    #ko_textBlock_5 .links-color a, #ko_textBlock_5 .links-color a:link, #ko_textBlock_5 .links-color a:visited, #ko_textBlock_5 .links-color a:hover{
      color: #3f3f3f;
      color: #3f3f3f;
      text-decoration: underline
    }
    
    #ko_sideArticleBlock_3 .links-color a, #ko_sideArticleBlock_3 .links-color a:link, #ko_sideArticleBlock_3 .links-color a:visited, #ko_sideArticleBlock_3 .links-color a:hover{
      color: #3f3f3f;
      color: #3f3f3f;
      text-decoration: underline
    }
    
    #ko_socialBlock_6 .links-color a, #ko_socialBlock_6 .links-color a:link, #ko_socialBlock_6 .links-color a:visited, #ko_socialBlock_6 .links-color a:hover{
      color: #cccccc;
      color: #cccccc;
      text-decoration: underline
    }
    
    #ko_footerBlock_2 .links-color a, #ko_footerBlock_2 .links-color a:link, #ko_footerBlock_2 .links-color a:visited, #ko_footerBlock_2 .links-color a:hover{
      color: #cccccc;
      color: #cccccc;
      text-decoration: underline
    }
    </style>
  
</head>
<!--[if !(gte mso 16)]-->
<body style='margin: 0; padding: 0; background-color: #3f3f3f; color: #ffffff;' vlink='#cccccc' text='#ffffff' bgcolor='#3f3f3f' alink='#cccccc'><!--<![endif]--><center>

  

  <table role='presentation' class='vb-outer' style='background-color: #bfbfbf;' id='ko_sideArticleBlock_3' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#bfbfbf'>
      <tbody><tr><td class='vb-outer' style='padding-left: 9px; padding-right: 9px; font-size: 0;' valign='top' align='center'>
      <!--[if (gte mso 9)|(lte ie 8)]><table role='presentation' align='center' border='0' cellspacing='0' cellpadding='0' width='570'><tr><td align='center' valign='top'><![endif]--><!--
      --><div style='margin: 0 auto; max-width: 570px; -mru-width: 0px;'><table role='presentation' class='vb-row' style='border-collapse: separate; width: 100%; background-color: #ffffff; mso-cellspacing: 9px; border-spacing: 9px; max-width: 570px; -mru-width: 0px;' width='570' cellspacing='9' cellpadding='0' border='0' bgcolor='#ffffff'>
        
        <tbody><tr>
      <td style='font-size: 0;' valign='top' align='center'><div style='width: 100%; max-width: 552px; -mru-width: 0px;'><!--[if (gte mso 9)|(lte ie 8)]><table role='presentation' align='center' border='0' cellspacing='0' cellpadding='0' width='552'><tr><![endif]--><!--
        --><!--
          --><!--[if (gte mso 9)|(lte ie 8)]><td align='left' valign='top' width='184'><![endif]--><!--
      --><div class='mobile-full' style='display: inline-block; vertical-align: top; width: 100%; max-width: 184px; -mru-width: 0px; min-width: calc(33.333333333333336%); max-width: calc(100%); width: calc(304704px - 55200%);'><!--
        --><table role='presentation' class='vb-content' style='border-collapse: separate; width: 100%; mso-cellspacing: 9px; border-spacing: 9px; -yandex-p: calc(2px - 3%);' width='184' cellspacing='9' cellpadding='0' border='0' align='left'>
          
            <tbody><tr><td class='links-color' width='100%' valign='top' align='center'><!--[if (lte ie 8)]><div style='display: inline-block; width: 166px; -mru-width: 0px;'><![endif]--><a target='_new' href='https://ecoops-financial.com/' style='color: #3f3f3f; color: #3f3f3f; text-decoration: underline;'><img style='border: 0px; display: block; vertical-align: top; height: auto; margin: 0 auto; color: #3f3f3f; font-size: 13px; font-family: Arial, Helvetica, sans-serif; width: 100%; max-width: 166px; height: auto;' src='https://mosaico.io/srv/f-p7pvigl/img?src=https%3A%2F%2Fmosaico.io%2Ffiles%2Fp7pvigl%2Fecoops%2520logo.jpeg&amp;method=resize&amp;params=166%2Cnull' width='166' vspace='0' hspace='0' border='0' align='middle'></a><!--[if (lte ie 8)]></div><![endif]--></td></tr>
          
        </tbody></table><!--
      --></div><!--[if (gte mso 9)|(lte ie 8)]></td><![endif]--><!--
          --><!--[if (gte mso 9)|(lte ie 8)]><td align='left' valign='top' width='368'><![endif]--><!--
      --><div class='mobile-full' style='display: inline-block; vertical-align: top; width: 100%; max-width: 368px; -mru-width: 0px; min-width: calc(66.66666666666667%); max-width: calc(100%); width: calc(304704px - 55200%);'><!--
        --><table role='presentation' class='vb-content' style='border-collapse: separate; width: 100%; mso-cellspacing: 9px; border-spacing: 9px; -yandex-p: calc(2px - 3%);' width='368' cellspacing='9' cellpadding='0' border='0' align='left'>
          
            <tbody><tr>
      <td style='font-weight: normal; color: #3f3f3f; font-size: 18px; font-family: Arial, Helvetica, sans-serif; text-align: left;' width='100%' valign='top' align='left'><span style='font-weight: normal;'>Welcome to ECOOPS</span></td>
    </tr>
            <tr><td class='long-text links-color' style='font-weight: normal; color: #3f3f3f; font-size: 13px; font-family: Arial, Helvetica, sans-serif; text-align: left; line-height: normal;' width='100%' valign='top' align='left'><p style='margin: 1em 0px; margin-bottom: 0px; margin-top: 0px;'>Ecoops is a fast growing Financial service firm, driven by the desire to ensure that individuals within the micro space of the society attain it's financial goal through effective Savings and Investments culture. While taking into cognizance the financial aspirations of HNIs and other's.</p></td></tr>
            <tr>
      <td valign='top' align='left'><table role='presentation' style='border-spacing: 0; mso-padding-alt: 6px 6px 6px 6px; padding-top: 4px;' cellspacing='0' cellpadding='6' border='0' align='left'><tbody><tr>
        <td style='text-align: center; font-weight: normal; padding: 6px; padding-left: 18px; padding-right: 18px; background-color: #0070c0; color: #ffffff; font-size: 13px; font-family: Arial, Helvetica, sans-serif; border-radius: 4px;' width='auto' valign='middle' bgcolor='#0070c0' align='left'><a style='text-decoration: none; font-weight: normal; color: #ffffff; font-size: 13px; font-family: Arial, Helvetica, sans-serif;' target='_new' href='https://ecoops-financial.com/dashboard/'>Access your account</a></td>
      </tr></tbody></table></td>
    </tr>
          
        </tbody></table><!--
      --></div><!--[if (gte mso 9)|(lte ie 8)]></td><![endif]--><!--
          --><!--
        --><!--
      --><!--[if (gte mso 9)|(lte ie 8)]></tr></table><![endif]--></div></td>
    </tr>
      
      </tbody></table></div><!--
    --><!--[if (gte mso 9)|(lte ie 8)]></td></tr></table><![endif]-->
    </td></tr>
    </tbody></table><table role='presentation' class='vb-outer' style='background-color: #bfbfbf;' id='ko_titleBlock_4' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#bfbfbf'>
      <tbody><tr><td class='vb-outer' style='padding-left: 9px; padding-right: 9px; font-size: 0;' valign='top' align='center'>
      <!--[if (gte mso 9)|(lte ie 8)]><table role='presentation' align='center' border='0' cellspacing='0' cellpadding='0' width='570'><tr><td align='center' valign='top'><![endif]--><!--
      --><div style='margin: 0 auto; max-width: 570px; -mru-width: 0px;'><table role='presentation' class='vb-row' style='border-collapse: separate; width: 100%; background-color: #ffffff; mso-cellspacing: 0px; border-spacing: 0px; max-width: 570px; -mru-width: 0px;' width='570' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff'>
        
        <tbody><tr>
      <td style='font-size: 0; padding: 0 9px;' valign='top' align='center'><div style='vertical-align: top; width: 100%; max-width: 552px; -mru-width: 0px;'><!--
        --><table role='presentation' class='vb-content' style='border-collapse: separate; width: 100%; mso-cellspacing: 9px; border-spacing: 9px;' width='552' cellspacing='9' cellpadding='0' border='0'>
          
          <tbody><tr>
      <td style='font-weight: normal; color: #3f3f3f; font-size: 18px; font-family: Arial, Helvetica, sans-serif; text-align: center;' width='100%' valign='top' align='center'><span style='font-weight: normal;'>Our Services</span></td>
    </tr>
        
        </tbody></table></div></td>
    </tr>
      
      </tbody></table></div><!--
    --><!--[if (gte mso 9)|(lte ie 8)]></td></tr></table><![endif]-->
    </td></tr>
    </tbody></table><table role='presentation' class='vb-outer' style='background-color: #bfbfbf;' id='ko_textBlock_5' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#bfbfbf'>
      <tbody><tr><td class='vb-outer' style='padding-left: 9px; padding-right: 9px; font-size: 0;' valign='top' align='center'>
      <!--[if (gte mso 9)|(lte ie 8)]><table role='presentation' align='center' border='0' cellspacing='0' cellpadding='0' width='570'><tr><td align='center' valign='top'><![endif]--><!--
      --><div style='margin: 0 auto; max-width: 570px; -mru-width: 0px;'><table role='presentation' class='vb-container' style='border-collapse: separate; width: 100%; background-color: #ffffff; mso-cellspacing: 18px; border-spacing: 18px; max-width: 570px; -mru-width: 0px;' width='570' cellspacing='18' cellpadding='0' border='0' bgcolor='#ffffff'>
        
        <tbody><tr><td class='long-text links-color' style='font-weight: normal; color: #3f3f3f; font-size: 13px; font-family: Arial, Helvetica, sans-serif; text-align: left; line-height: normal;' width='100%' valign='top' align='left'><p style='margin: 1em 0px; margin-top: 0px;'>1. Thrift Collection</p>
<p style='margin: 1em 0px;'>2. Savings and Investments</p>
<p style='margin: 1em 0px; margin-bottom: 0px;'>3. Financial Advisory</p></td></tr>
      
      </tbody></table></div><!--
    --><!--[if (gte mso 9)|(lte ie 8)]></td></tr></table><![endif]-->
    </td></tr>
    </tbody></table><table role='presentation' class='vb-outer' style='background-color: #3f3f3f;' id='ko_socialBlock_6' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#3f3f3f'>
      <tbody><tr><td class='vb-outer' style='padding-left: 9px; padding-right: 9px; font-size: 0;' valign='top' align='center'>
      <!--[if (gte mso 9)|(lte ie 8)]><table role='presentation' align='center' border='0' cellspacing='0' cellpadding='0' width='570'><tr><td align='center' valign='top'><![endif]--><!--
      --><div style='margin: 0 auto; max-width: 570px; -mru-width: 0px;'><table role='presentation' style='border-collapse: separate; width: 100%; mso-cellspacing: 9px; border-spacing: 9px; max-width: 570px; -mru-width: 0px;' class='vb-row' width='570' cellspacing='9' cellpadding='0' border='0'>
        
        <tbody><tr>
      <td style='font-size: 0;' valign='top' align='center'><div style='width: 100%; max-width: 552px; -mru-width: 0px;'><!--[if (gte mso 9)|(lte ie 8)]><table role='presentation' align='center' border='0' cellspacing='0' cellpadding='0' width='552'><tr><![endif]--><!--
        --><!--
          --><!--[if (gte mso 9)|(lte ie 8)]><td align='left' valign='top' width='276'><![endif]--><!--
      --><div class='mobile-full' style='display: inline-block; vertical-align: top; width: 100%; max-width: 276px; -mru-width: 0px; min-width: calc(50%); max-width: calc(100%); width: calc(304704px - 55200%);'><!--
        --><table role='presentation' class='vb-content' style='border-collapse: separate; width: 100%; mso-cellspacing: 9px; border-spacing: 9px; -yandex-p: calc(2px - 3%);' width='276' cellspacing='9' cellpadding='0' border='0' align='left'>
          
            <tbody><tr><td class='long-text links-color' style='font-weight: normal; color: #ffffff; font-size: 13px; font-family: Arial, Helvetica, sans-serif; text-align: left;' width='100%' valign='top' align='left'><p style='margin: 1em 0px; margin-bottom: 0px; margin-top: 0px;'>info@ecoops-financial.com |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +234 806 252 7077 | +234 803 786 1805</p></td></tr>
          
        </tbody></table><!--
      --></div><!--[if (gte mso 9)|(lte ie 8)]></td><![endif]--><!--
          --><!--[if (gte mso 9)|(lte ie 8)]><td align='left' valign='top' width='276'><![endif]--><!--
      --><div class='mobile-full' style='display: inline-block; vertical-align: top; width: 100%; max-width: 276px; -mru-width: 0px; min-width: calc(50%); max-width: calc(100%); width: calc(304704px - 55200%);'><!--
        --><table role='presentation' class='vb-content' style='border-collapse: separate; width: 100%; mso-cellspacing: 9px; border-spacing: 9px; -yandex-p: calc(2px - 3%);' width='276' cellspacing='9' cellpadding='0' border='0' align='left'>
          
            <tbody><tr><td style='font-size: 6px; font-weight: normal; text-align: right;' class='links-color socialLinks mobile-textcenter' width='100%' valign='top' align='right'>
              
                &nbsp;<a style='display: inline-block; color: #cccccc; color: #cccccc; text-decoration: underline; background: url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7), #3b5998; border-radius: 50px;' target='_new' href='#'><img style='border: 0px; display: inline-block; vertical-align: top; padding-bottom: 0px;' src='https://mosaico.io/templates/versafix-1/img/icons/fb-colors-96.png' alt='Facebook' width='32' height='32' border='0'></a>
              
                &nbsp;<a style='display: inline-block; color: #cccccc; color: #cccccc; text-decoration: underline; background: url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7), #4099FF; border-radius: 50px;' target='_new' href='#'><img style='border: 0px; display: inline-block; vertical-align: top; padding-bottom: 0px;' src='https://mosaico.io/templates/versafix-1/img/icons/tw-colors-96.png' alt='Twitter' width='32' height='32' border='0'></a>
              
                
              
                &nbsp;<a style='display: inline-block; color: #cccccc; color: #cccccc; text-decoration: underline; background: url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7), #606060; border-radius: 50px;' target='_new' href='https://ecoops-financial.com/'><img style='border: 0px; display: inline-block; vertical-align: top; padding-bottom: 0px;' src='https://mosaico.io/templates/versafix-1/img/icons/web-colors-96.png' alt='Web' width='32' height='32' border='0'></a>
              
                
              
            
              
            </td></tr>
            
          
        </tbody></table><!--
      --></div><!--[if (gte mso 9)|(lte ie 8)]></td><![endif]--><!--
        --><!--
      --><!--[if (gte mso 9)|(lte ie 8)]></tr></table><![endif]--></div></td>
    </tr>
      
      </tbody></table></div><!--
    --><!--[if (gte mso 9)|(lte ie 8)]></td></tr></table><![endif]-->
    </td></tr>
    </tbody></table>

  

    
</center><!--[if !(gte mso 16)]--></body><!--<![endif]--></html>
                                                                    
                                                                    
                                                                    ";
                                                                     
                                                                    // Sending email
                                                                    mail($user_email, $subject, $message, $headers);
                                                                       
                                                     
                                              		 echo '<script type="text/javascript">';
                         
                                            		 echo 'setTimeout(function () { swal("Success!","Profile updated succesfully!","success");';
                                                                                                     
                                            		 echo '}, 1000);</script>';
                                              
                                              		 header('Refresh: 5; index.php');
                                            }
                                          ?>
                                            
                                            
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
    
<script>
    $('.numbersvalidate').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');
});
</script>
</body>
</html>