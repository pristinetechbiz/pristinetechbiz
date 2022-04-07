<?php require_once('lib/db.php');


$user_id = $_SESSION["user_id"];
$acc_number = $_SESSION['acc_number'];
$user = $_SESSION['user_phone'];

?>


<!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Start new investment</h5>
                                        </div>
                                        <div class="card-block">
                                            
                                            
                                           
                                            <!--Form starts here-->
                                <form class='horizontal'class='user' method="POST" action="">
                                    <div class="row"> 
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Amount</label>
                                                            <input type="text" name='amount' class="form-control numbersvalidate" id="exampleInputEmail1" aria-describedby="coyHelp" placeholder="Enter payment amount">
                                                        </div>
                                                        
                                                        
                                                        
                                      
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Plan</label>
                                                            <select name='plan' class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp" >
                                                                <option value='Daily'>Daily</option>
                                                                <option value='Weekly'>Weekly</option>
                                                                <option value='Monthly'>Monthly</option>
                                                                <option value='Annualy'>Annualy</option>
                                                            </select>
                                                        </div>
                                                        
                                                        
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="row"> 
                                                        
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleFormControlTextarea1">Duration</label>
                                                            <input type="number" name='duration' class="form-control numbersvalidate" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Duration">
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleFormControlTextarea1">Purpose</label>
                                                            <input type="text" name='purpose' class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" placeholder="Enter purpose of savings">
                                                        </div>
                                    </div>
                                  
                                  
                                  
                                  
                                  <div class="row"> 
                                                        
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleFormControlTextarea1">Start date</label>
                                                            <input type="date" name='startdate' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Start date">
                                                        </div>
                                    
                                    
                                    
                                    					<div class="form-group col-md-6">
                                                            <label for="exampleFormControlTextarea1">End date</label>
                                                            <input type="date" name='enddate' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter End date">
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
                                             $amount = $_POST['amount'];
                                             $duration = $_POST['duration'];
                                             $plan = $_POST['plan'];
                                             $purpose = $_POST['purpose'];
                                             $startdate = $_POST['startdate'];
                                             $enddate = $_POST['enddate'];
                                             $today = date("Y-m-d");
                                             $trans_ref = mt_rand();
                                             
                                           if($plan == 'Daily'){
                                            mysqli_query($con,"INSERT INTO contributions(trans_ref,client_id,amount,duration,plan,purpose,start_date,end_date,verify) VALUES('$trans_ref','$user','$amount','$duration','$plan','$purpose','$startdate','$enddate',1)");
                                            mysqli_query($con,"INSERT INTO daily_contrib(trans_ref,client_id,amount_due) VALUES('$trans_ref','$user','$amount')");
                                            mysqli_query($con,"INSERT INTO payments(trans_ref,client_id,plan,amount_due) VALUES('$trans_ref','$user','$plan','$amount')");
                                            echo '<script type="text/javascript">';
                         
                                            echo 'setTimeout(function () { swal("Success!","Contribution created succesfully!","success");';
                                                                                                     
                                            echo '}, 1000);</script>';
                                           }
                                          
                                          
                                          
                                          
                                          
                                           if($plan == 'Weekly'){
                                            mysqli_query($con,"INSERT INTO contributions(trans_ref,client_id,amount,duration,plan,purpose,start_date,end_date,verify) VALUES('$trans_ref','$user','$amount','$duration','$plan','$purpose','$startdate','$enddate',1)");
                                            mysqli_query($con,"INSERT INTO weekly_contrib(trans_ref,client_id,amount_due) VALUES('$trans_ref','$user','$amount')");
                                            mysqli_query($con,"INSERT INTO payments(trans_ref,client_id,plan,amount_due,verify) VALUES('$trans_ref','$user','$plan','$amount',1)");
                                            echo '<script type="text/javascript">';
                         
                                            echo 'setTimeout(function () { swal("Success!","Contribution created succesfully!","success");';
                                                                                                     
                                            echo '}, 1000);</script>';
                                           }
                                          
                                          
                                          
                                          
                                          if($plan == 'Monthly'){
                                            mysqli_query($con,"INSERT INTO contributions(trans_ref,client_id,amount,duration,plan,purpose,start_date,end_date,verify) VALUES('$trans_ref','$user','$amount','$duration','$plan','$purpose','$startdate','$enddate',1)");
                                            mysqli_query($con,"INSERT INTO monthly_contrib(trans_ref,client_id,amount_due) VALUES('$trans_ref','$user','$amount')");
                                            mysqli_query($con,"INSERT INTO payments(trans_ref,client_id,plan,amount_due,verify) VALUES('$trans_ref','$user','$plan','$amount',1)");
                                            echo '<script type="text/javascript">';
                         
                                            echo 'setTimeout(function () { swal("Success!","Contribution created succesfully!","success");';
                                                                                                     
                                            echo '}, 1000);</script>';
                                           }
                                          
                                          
                                          
                                          
                                          
                                          if($plan == 'Annualy'){
                                            mysqli_query($con,"INSERT INTO contributions(trans_ref,client_id,amount,duration,plan,purpose,start_date,end_date,verify) VALUES('$trans_ref','$user','$amount','$duration','$plan','$purpose','$startdate','$enddate',1)");
                                            mysqli_query($con,"INSERT INTO yearly_contrib(trans_ref,client_id,amount_due) VALUES('$trans_ref','$user','$amount')");
                                            mysqli_query($con,"INSERT INTO payments(trans_ref,client_id,plan,amount_due,verify) VALUES('$trans_ref','$user','$plan','$amount',1)");
                                            echo '<script type="text/javascript">';
                         
                                            echo 'setTimeout(function () { swal("Success!","Contribution created succesfully!","success");';
                                                                                                     
                                            echo '}, 1000);</script>';
                                           }
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                          
                                        } //isset if ends here
                                    ?>
                                <!-- Validation-->
                                            
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->