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
                                            <h5>Withdrawal History</h5>
                                        </div>
                                      
                                      
                                      
                                        <div class="card-block">
                                            
                                            <!--table starts here--> 
                                          <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Withdrawal Reference</th>
                                                            <th>Amount Withdrawn</th>
                                                            <th>Withdrawal Date</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            $withs = $db->select('withdrawal', '*', ['client_id' => $user_id]);                                        
                                                        ?>

                                                        <?php foreach($withs as $with): ?>
                                                        <tr>
                                                            <td scope='row'><?php 1; ?></td>
                                                            <td><?php echo $with['trans_ref']; ?></td>
                                                            <td><?php echo $with['amount']; ?></td>
                                                            <td><?php echo $with['withdrawal_date']; ?></td>
                                                            <td><?php echo $with['confirm_withdrawal'] !== null ? 'PAID' : 'Awaiting approval'; ?></td>
                                                        </tr>
                                                        <?php endforeach; ?>
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
                        