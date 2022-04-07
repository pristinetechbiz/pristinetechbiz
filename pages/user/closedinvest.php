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
                                            <h5>Closed investments</h5>
                                        </div>
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
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
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from contributions WHERE client_id = '$user' AND status ='completed' ");
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
                                                                                        <td><btn  class='btn btn-default'>Closed</btn>
                                                                                         </td>
                                                                                    </tr>
                                                                                         "; }
                        									        
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