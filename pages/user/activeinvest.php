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
                                            <h5>Active investments</h5>
                                        </div>
                                      
                                      
                                      
                                      
                                      
                                       <div class="form-group col-md-6">
                                                <form method="POST" action="activeinvest">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlSelect1"><b>FILTER BY PLAN</b></label>
                                                                            <select name="plan" class="form-control" id="exampleFormControlSelect1">
                                                                                <option select='selected'>Select Plan</option>
                                                                                <option value='All'>All</option>
                                                                                <option value='Daily'>Daily</option>
                                                                                <option value='Weekly'>Weekly</option>
                                                                                <option value='Monthly'>Monthly</option>
                                                                                <option value='Annualy'>Annualy</option>
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
                                                            <th>Transaction Reference</th>
                                                            <th>Plan</th>
                                                            <th>Amount</th>
                                                            <th>Duration</th>
                                                            <th>Start Date</th>
                                                            <th>End Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        
                                                        if(isset($_POST['sbmt1'])){
                                                            
                                                            if($_POST['plan'] == 'All'){
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from contributions WHERE client_id = '$user' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $trans_ref = $row['trans_ref'];
                                                                                              $plan = $row['plan'];
                                                                                              $amount = $row['amount'];
                                                                                              $duration = $row['duration'];
                                                                                              $start_date = $row['start_date'];
                                                                                              $end_date = $row['end_date'];
                                                                                              $status = $row['status'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$trans_ref</td>
                                                                                        <td>$plan</td>
                                                                                        <td>$amount</td>
                                                                                        <td>$duration</td>
                                                                                        <td>$start_date </td>
                                                                                        <td>$end_date</td>
                                                                                        <td>";
                                                                                        if($status == 'completed'){echo "Closed";}
                                                                                        else{
                                                                                         echo" <a href='payment?pay_id=$trans_ref' class='btn btn-danger'>Make payment</a>";
                                                                                         }
                                                                                  echo" </td>
                                                                                    </tr>
                                                                                         "; }
                        									        
                        									        
                                                                   }
                                                            
                                                            if($_POST['plan'] == 'Daily'){
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from contributions WHERE client_id = '$user' AND plan ='Daily' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $trans_ref = $row['trans_ref'];
                                                                                              $plan = $row['plan'];
                                                                                              $amount = $row['amount'];
                                                                                              $duration = $row['duration'];
                                                                                              $start_date = $row['start_date'];
                                                                                              $end_date = $row['end_date'];
                                                                                              $status = $row['status'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$trans_ref</td>
                                                                                        <td>$plan</td>
                                                                                        <td>$amount</td>
                                                                                        <td>$duration</td>
                                                                                        <td>$start_date </td>
                                                                                        <td>$end_date</td>
                                                                                        <td>";
                                                                                        if($status == 'completed'){echo "Closed";}
                                                                                        else{
                                                                                         echo" <a href='payment?pay_id=$trans_ref' class='btn btn-danger'>Make payment</a>";
                                                                                         }
                                                                                  echo" </td>
                                                                                    </tr>
                                                                                         "; }
                        									        
                        									        
                                                                   }
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                                                                 if($_POST['plan'] == 'Weekly'){
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from contributions WHERE client_id = '$user' AND plan ='Weekly' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $trans_ref = $row['trans_ref'];
                                                                                              $plan = $row['plan'];
                                                                                              $amount = $row['amount'];
                                                                                              $duration = $row['duration'];
                                                                                              $start_date = $row['start_date'];
                                                                                              $end_date = $row['end_date'];
                                                                                              $status = $row['status'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$trans_ref</td>
                                                                                        <td>$plan</td>
                                                                                        <td>$amount</td>
                                                                                        <td>$duration</td>
                                                                                        <td>$start_date </td>
                                                                                        <td>$end_date</td>
                                                                                        <td>";
                                                                                        if($status == 'completed'){echo "Closed";}
                                                                                        else{
                                                                                         echo" <a href='payment?pay_id=$trans_ref' class='btn btn-danger'>Make payment</a>";
                                                                                         }
                                                                                  echo" </td>
                                                                                    </tr>
                                                                                         "; }
                        									        
                        									        
                                                                   }
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          if($_POST['plan'] == 'Monthly'){
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from contributions WHERE client_id = '$user' AND plan ='Monthly' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $trans_ref = $row['trans_ref'];
                                                                                              $plan = $row['plan'];
                                                                                              $amount = $row['amount'];
                                                                                              $duration = $row['duration'];
                                                                                              $start_date = $row['start_date'];
                                                                                              $end_date = $row['end_date'];
                                                                                              $status = $row['status'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$trans_ref</td>
                                                                                        <td>$plan</td>
                                                                                        <td>$amount</td>
                                                                                        <td>$duration</td>
                                                                                        <td>$start_date </td>
                                                                                        <td>$end_date</td>
                                                                                        <td>";
                                                                                        if($status == 'completed'){echo "Closed";}
                                                                                        else{
                                                                                         echo" <a href='payment?pay_id=$trans_ref' class='btn btn-danger'>Make payment</a>";
                                                                                         }
                                                                                  echo" </td>
                                                                                    </tr>
                                                                                         "; }
                        									        
                        									        
                                                                   }
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          if($_POST['plan'] == 'Annualy'){
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from contributions WHERE client_id = '$user' AND plan ='Annualy' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $trans_ref = $row['trans_ref'];
                                                                                              $plan = $row['plan'];
                                                                                              $amount = $row['amount'];
                                                                                              $duration = $row['duration'];
                                                                                              $start_date = $row['start_date'];
                                                                                              $end_date = $row['end_date'];
                                                                                              $status = $row['status'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$trans_ref</td>
                                                                                        <td>$plan</td>
                                                                                        <td>$amount</td>
                                                                                        <td>$duration</td>
                                                                                        <td>$start_date </td>
                                                                                        <td>$end_date</td>
                                                                                        <td>";
                                                                                        if($status == 'completed'){echo "Closed";}
                                                                                        else{
                                                                                         echo" <a href='payment?pay_id=$trans_ref' class='btn btn-danger'>Make payment</a>";
                                                                                         }
                                                                                  echo" </td>
                                                                                    </tr>
                                                                                         "; }
                        									        
                        									        
                                                                   }
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                        									        
                                                                   
                                                                   
                                                                   
                                                                   
                                                                   
                        									} // End of Submit
                        									
                        									
                        									
                        									
                        									
                        									
                        									
                        									
                        							else if(!isset($_POST['sbmt1']) ){
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from contributions WHERE client_id = '$user' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $trans_ref = $row['trans_ref'];
                                                                                              $plan = $row['plan'];
                                                                                              $amount = $row['amount'];
                                                                                              $duration = $row['duration'];
                                                                                              $start_date = $row['start_date'];
                                                                                              $end_date = $row['end_date'];
                                                                                              $status = $row['status'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$trans_ref</td>
                                                                                        <td>$plan</td>
                                                                                        <td>$amount</td>
                                                                                        <td>$duration</td>
                                                                                        <td>$start_date </td>
                                                                                        <td>$end_date</td>
                                                                                        <td>";
                                                                                        if($status == 'completed'){echo "Closed";}
                                                                                        else{
                                                                                         echo" <a href='payment?pay_id=$trans_ref' class='btn btn-danger'>Make payment</a>";
                                                                                         }
                                                                                  echo" </td>
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