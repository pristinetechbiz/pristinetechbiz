<?php 

//if(empty($_SESSION["user_id"])){
  //  header("Location: https://ecoopsmultipurpose.com/dashboard/");
//}

require_once('lib/db.php');

$user_id = $_SESSION["user_id"];
$user = $_SESSION['user_phone'];
$user_email = $_SESSION['user_email'];

$profile = $db->get('users', '*', array('user_id' => $user_id));




?>


  <!-- [ Main Content ] start -->
  <div>
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
                                          
                                          <form class='horizontal' method="POST" enctype="multipart/form-data">
                                            
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
                                                            <input type="text" value="<?= $profile['acc_name']?>" name='account_name' placeholder="Enter your Account Name" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                        
                                                        
                                    			</div><!-- row ends here-->
                                            
                                            
                                            
                                            
                                            
                                              <div class="row"> 
                                                       
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Account Number:</label>
                                                            <input type="text" value="<?= $profile['acc_number']?>" name='account_number' placeholder="Enter your Account Number" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                   
                                                   
                                                   
                                                   
                                                   		<div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Address:</label>
                                                            <input type="text" value="<?= $profile['acc_number']?>" name='address' placeholder="Enter your Address" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
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
                                                            <input type="date" name='dob' placeholder="Enter your date of birth" class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" REQUIRED/>
                                                        </div>
                                                  
                                                  
                                                  
                                                       
                                                               <!-- <div class="form-group col-md-6 form-control">
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
                                                               </div> -->
                                                        
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
                                              
                                              
                                              	 
                                                      // $imgFile = $_FILES['ufile']['name'];
                                                      // $tmp_dir = $_FILES['ufile']['tmp_name'];
                                                      // $imgSize = $_FILES['ufile']['size'];

                                                      // $upload_dir = 'profilepic/'; // upload directory

                                                      //  $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

                                                      //  // valid image extensions
                                                      //  $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extensions

                                                      //  // rename uploading image
                                                      //  $userprofile = rand(1000,1000000).".".$imgExt;
                                                      //  if($imgSize < 5000000)    {
                                                      //        move_uploaded_file($tmp_dir,$upload_dir.$userprofile);
                                                      //       }
                                              
													mysqli_query($con, " UPDATE users SET dob = '$dob', user_address = '$address', sof_residence = '$stateofresidence', lga = '$lga', nok = '$nok', relationship = '$rnok', nok_phone = '$nok_phone', nok_address = '$nok_add', acc_name = '$account_name', acc_number = '$account_number', acc_bankname = '$bankname' WHERE user_id = '$user_id' ");
                                            			
                                              
                                                            var_dump($user_id);
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
                                              
                                              		 header('Refresh: 5; user/dashboard');
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