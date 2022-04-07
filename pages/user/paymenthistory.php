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
                                            <h5>Payment History</h5>
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
                                                            <th>Amount Paid</th>
                                                            <th>Payment Date</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from payments WHERE client_id = '$user' AND payconfirm_id > 0 ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $trans_ref = $row['trans_ref'];
                                                                                              $plan = $row['plan'];
                                                                                              $amount = $row['amount_due'];
                                                                                              $payment_date = $row['pay_date'];
                                                                                              $status = $row['status'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$trans_ref</td>
                                                                                        <td>$plan</td>
                                                                                        <td>$amount</td>
                                                                                        <td>$payment_date</td>
                                                                                        <td><btn class='btn btn-default'>PAID</btn>
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
                            