<?php require_once('lib/db.php');

//if(empty($_SESSION["user_id"])){
  //  header("Location: https://ecoopsmultipurpose.com/dashboard/");
//}

$user_id = $_SESSION["user_id"];
$acc_number = $_SESSION['acc_number'];
$user = $_SESSION['user_phone'];

?>


                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Profile</h5>
                                        </div>
                                      
                                      
                                      
                                        <div class="card-block">
                                            
                                           <?php
                                          
                                          
                                          	$sqlprofile = mysqli_query($con,"SELECT * from users WHERE user_id = '$user_id' ");        
                                                    while($row=mysqli_fetch_array($sqlprofile)){
                                                    $profile_picture = $row['picture'];
                                                      $sname = $row['surname'];
                                                      $fname = $row['firstname'];
                                                      $u_phone = $row['phone'];
                                                      $u_email = $row['email'];
                                                      $sof_residence = $row['sof_residence'];
                                                      $acc_number = $row['acc_number'];
                                                      $acc_bankname = $row['acc_bankname'];
                                                        }
                                          		echo"
                                 				<div class='row'>
                                                  	<div class='col-md-6'>
                                                      <img src='profilepic/$profile_picture' width='250' height='250' style='border-radius: 360px;'>
                                                  	</div>
                                                  
                                                  
                                                  	<div class='col-md-6'>
                                                      <h4>$fname , $sname</h4>
                                                      <br/>
                                                      <br/>
                                                      <h6>
                                                        <b>Phone :</b> $u_phone
                                                      	<br/>
                                                        <br/>
                                                        <b>State :</b> $sof_residence
                                                        <br/>
                                                        <br/>
                                                        <b>Bank :</b> $acc_bankname
                                                        <br/>
                                                        <br/>
                                                        <b>Account Number :</b> $acc_number
                                                        <br/>
                                                        <br/>
                                                        <b>Email :</b> $u_email
                                                      </h6>
                                                  	</div>
                                          		</div>
                                              ";
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        