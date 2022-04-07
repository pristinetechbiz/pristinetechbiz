<?php require_once('lib/db.php');

$user_id = $_SESSION["user_id"];
$acc_number = $_SESSION['acc_number'];
$user = $_SESSION['user_phone'];

if(!empty($_GET["accept_id"])) {

                                      $acceptid = $_GET["accept_id"];
                                      
                                      $sqlaccept = mysqli_query($con,"UPDATE users SET status ='1' , plan = 'single' WHERE id = $acceptid ");

        }

   $contributions = $db->select("contributions", "*", ["client_id" => $user]);
   var_dump($user_id);
?>

<!-- [ Main Content ] start -->
                            <div class="row">
                              <!--[ daily sales section ] start-->
                                <div class="col-md-3 col-xl-3">
                                    <div class="card daily-sales">
                                        <div class="card-block" data-toggle="tooltip" data-placement="top" title="You can only request withdrawal if your balance is upto NGN5000">
                                            <h6 class="mb-4">Account Balance</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-12">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                                                    <?php
                                                    
                                                            
                                                    $sqlbal = mysqli_query($con,"SELECT SUM(book_balance) from contributions WHERE client_id = '$user' ");        
                                                    while($row=mysqli_fetch_array($sqlbal)){
                                                    $book_bal = $row['SUM(book_balance)'];
                                                        }
                                                      
                                                    $withdrawal = mysqli_query($con,"SELECT SUM(amount), SUM(withdrawal_charge) from withdrawal WHERE client_id = '$user' AND confirm_withdrawal = '1' ");        
                                                    while($row=mysqli_fetch_array($withdrawal)){
                                                    $withdrawal_amount = $row['SUM(amount)'];
                                                    $withdrawal_charge = $row['SUM(withdrawal_charge)'];
                                                        }
                                                      
                                                      $acc_balance = $book_bal - ($withdrawal_amount + $withdrawal_charge);
                                                      if($acc_balance > 0){echo" NGN $acc_balance";}
                                                            else echo"NGN 0";
                                                        
                                                    ?>
                                                    
                                                    
                                                    
                                                    
                                                    </h3>
                                                </div>

                                                <div class="col-12 text-center">
                                                  <?php
                                                  if($acc_balance >= 1000){
                                                    echo"
                                                  <button type='button' role='button' class='btn btn-success' data-toggle='modal' data-target='#exampleModal'>Request Withdrawal</button>
                                                  ";}
                                                  else if($acc_balance < 1000){
                                                    echo"
                                                  <a role='button' class='btn btn-success disabled' href='' target='_blank' aria-disabled='true' >Request Withdrawal</a>
                                                  ";}
                                                  ?>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ daily sales section ] end-->
                              
                              
                              
                              
                              
                              
                              
                              
                                <!--[ daily sales section ] start-->
                                <div class="col-md-3 col-xl-3">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Active investments</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                                                    <?php
                                                    
                                                            
                                                    $sqlactive = mysqli_query($con,"SELECT SUM(verify) from contributions WHERE client_id = '$user' AND status is NULL ");        
                                                    while($row=mysqli_fetch_array($sqlactive)){
                                                    $activeInvest = $row['SUM(verify)'];
                                                            if($activeInvest > 0){echo"$activeInvest";}
                                                            else echo"0";
                                                    
                                                        }
                                                        
                                                    ?>
                                                    
                                                    
                                                    
                                                    
                                                    </h3>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">...</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ daily sales section ] end-->
                                <!--[ Monthly  sales section ] starts-->
                                <div class="col-md-3 col-xl-3">
                                    <div class="card Monthly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Completed Investments</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                                                    
                                                    <?php
                                                    
                                                    
                                                    
                                                    $sqlcheck = mysqli_query($con,"SELECT SUM(verify) from contributions WHERE client_id = '$user' AND status = 'completed' ");        
                                                    while($row=mysqli_fetch_array($sqlcheck)){
                                                    $completeInvest = $row['SUM(verify)'];
                                                            if($completeInvest > 0){echo"$completeInvest";}
                                                            else echo"0";
                                                    
                                                        }  
                                                    ?>
                                                    </h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">...</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme2" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ Monthly  sales section ] end-->
                                <!--[ year  sales section ] starts-->
                                <div class="col-md-3 col-xl-3">
                                    <div class="card yearly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Pending payments</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                                                    
                                                    <?php
                                                    
                                                  
                                                      
                                                      $sqlpend = mysqli_query($con,"SELECT SUM(verify) from payments WHERE client_id = '$user' AND payconfirm_id is NULL ");        
                                                    while($row=mysqli_fetch_array($sqlpend)){
                                                    $pending = $row['SUM(verify)'];
                                                            if($pending > 0){echo"$pending";}
                                                            else echo"0";
                                                    
                                                        }  
                                                    ?>
                                                    
                                                    </h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">...</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar progress-c-theme" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ year  sales section ] end-->
                                <!--[ Recent Users ] start-->
                                <div class="col-xl-8 col-md-6">
                                    <div class="card Recent-Users">
                                        <div class="card-header">
                                            <h5>Most Recent payments</h5>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <?php
                                                        
                                                        $sql = mysqli_query($con," SELECT * FROM payments WHERE client_id = '$user' AND payconfirm_id = '1' LIMIT 0, 5");
                                                              while($row=mysqli_fetch_array($sql)){
                                                                  $id = $row['id'];
                                                                  $trans_ref = $row['trans_ref'];
                                                                  $plan = $row['plan'];
                                                                  $amount = $row['amount_due'];
                                                                  $date = $row['confirm_date'];
                                                                  $status = 'PAID';
                                                                  
                                                                  
                                                                  
                                                                  echo"
                                                        <tr class='unread'>
                                                            <td><img class='rounded-circle' style='width:40px;' src='assets/images/user/avatar-2.jpg' alt='activity-user'></td>
                                                            <td>
                                                                <h6 class='mb-1'># $trans_ref</h6>
                                                                <p class='m-0'>$plan</p>
                                                            </td>
                                                            <td>
                                                                <h6 class='text-muted'><i class='fas fa-circle text-c-red f-10 m-r-15'></i>$date</h6>
                                                            </td>
                                                            <td><a href='' class='label theme-bg2 text-white f-12'>$amount</a></td>
                                                            <td><a href='' class='label theme-bg text-white f-12'>$status</a></td>
                                                        </tr>
                                                        ";}
                                                        
                                                        ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ Recent Users ] end-->

                                <!-- [ statistics year chart ] start -->
                                <div class="col-xl-4 col-md-6">
                                    <div class="card card-event">
                                        <div class="card-block">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col">
                                                    <h5 class="m-0">All Investments</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="label theme-bg2 text-white f-14 f-w-400 float-right">...</label>
                                                </div>
                                            </div>
                                            <h2 class="mt-3 f-w-300">
                                                <?php
                                                    
                                                    $sqlcheck2 = mysqli_query($con,"SELECT SUM(verify) from contributions WHERE client_id = '$user' ");        
                                                    while($row=mysqli_fetch_array($sqlcheck2)){
                                                    $Invest = $row['SUM(verify)'];
                                                            if($Invest > 0){echo"$Invest";}
                                                            else echo"0";
                                                    
                                                        }  
                                                    ?>
                                                <sub class="text-muted f-14">Investments count</sub></h2>
                                            <h6 class="text-muted mt-4 mb-0">Total number of investments thus far</h6>
                                            <i class="fab fa-angellist text-c-purple f-50"></i>
                                        </div>
                                    </div>
                                   
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Request Withdrawal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="withdrawal" id="withdrawalForm">

                                        
                                        <div class="modal-body">
                                        <span id='withdrawalError' style="display:none; color:red; text-align:center"></span>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Amount <span class="text-danger">*</span></label>
                                            <input type="number" name="amount" id="amount" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">How much would you like to withdraw.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="ref">Which contribution do you want to withdraw from <span class="text-danger">*</span></label>  
                                            <select class="form-control" name="trans_ref" id="ref">
                                                <?php foreach ($contributions as $contribution)  :?>
                                                    <option value="<?= $contribution['trans_ref'] ?>"><?= $contribution['plan']. '- Balance: '?><?= isset($contribution['available_balance']) ? $contribution['available_balance'] : 0 ?><?=' naira available'?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Request</button>
                                        </div>
                                        </div>
                                    </form>
                                    
                                </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->