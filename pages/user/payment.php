<?php require_once('lib/db.php');

$user_id = $_SESSION["user_id"];
$acc_number = $_SESSION['acc_number'];
$user = $_SESSION['user_phone'];



			if(!empty($_GET["pay_id"])) {

                                      $_SESSION['pay_id'] = $_GET["pay_id"];
                
        		}
$pay_ref = $_SESSION['pay_id'];

?>


<!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Pending Payments</h5>
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
                                                            <th>Amount Due(=N=)</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        
                                                            
                                                            
                        									        $sn = 0;
                                                    									  $sql = mysqli_query($con," SELECT * from payments WHERE client_id = '$user' AND trans_ref = '$pay_ref' ");
                                                                                          while($row=mysqli_fetch_array($sql)){
                                                                                              $payment_id = $row['id'];
                                                                                              $trans_ref = $row['trans_ref'];
                                                                                              $plan = $row['plan'];
                                                                                              $amount_due = $row['amount_due'];
                                                                                              $payconfirm_id = $row['payconfirm_id'];
                                                                                              
                                                                                              $sn += 1;
                                                                                       
                                                                                       echo"   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$trans_ref</td>
                                                                                        <td>$plan</td>
                                                                                        <td>$amount_due</td>
                                                                                        <td>";
                                                                                        if($payconfirm_id == 1){echo "PAID";}
                                                                                        else{
                                                                                         echo" <a href='pay?payment_id=$payment_id' class='btn btn-danger'>Pay Now</a>";
                                                                                         }
                                                                                  echo" </td>
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