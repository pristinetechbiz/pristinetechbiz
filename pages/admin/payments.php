fn vcx
e
<?php 
if (isset($_GET['payverify']) && isset($_GET['c']) && isset($_GET['pay'])) {
    echo $_GET['payverify'];

    $db->update("payments",["amount_due" => 0, "pay_date" => date("Y-m-d"), "verify" => true], ["trans_ref" => $_GET['c']]);

}
?>
   <!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Payments</h5>
            </div>
            <div class="card-block">
                
                <!--table starts here--> 
                <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Client ID</th>
                                <th>Client Name</th>
                                <th>Transaction Reference</th>
                                <th>Plan</th>
                                <th>Amount Due(=N=)</th>
                                <th>Transaction Type</th>
                                <th>Proof of payment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = $db->select("payments", "*");?> 
                            <?php foreach($sql as $key=>$row): ?>
                                <?php 
                                    $id = $row['id'];
                                    $trans_ref = $row['trans_ref'];
                                    $amount_due  = $row['amount_due'];

                                    $user = $db->select("users", "*", ["phone" => $row['client_id']]);
                                    $firstname = $user[0]['firstname'];
                                    $surname = $user[0]['surname'];
                                ?>
                                <tr>
                                    <th scope='row'><?= $key + 1; ?></th>
                                    <td><?= $row['client_id'];?></td>
                                    <td><?= $firstname.' '.$surname;?></td>
                                    <td><?= $row['trans_ref'];?></td>
                                    <td><?= $row['plan'];?></td>
                                    <td><?= $row['amount_due'];?></td>
                                    <td><?= $row['transaction_type'];?></td>
                                    <td><btn class='btn btn-warning' data-bs-toggle="modal" data-bs-target="#exampleModal<?= $key + 1; ?>">view proof</btn></td>
                                    <?= $row['verify'] == false  ? "<td><a role='button' href='?payverify=$id&c=$trans_ref&pay=$amount_due' class='btn btn-info'>Approve</a></td>" : "<td><btn class='btn btn-success'>Paid</btn></td>"?>
                                </tr>
                                <div class="modal fade" id="exampleModal<?= $key + 1; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="" method="POST">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Proof for transaction: <?= $row['trans_ref']; ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php if ($row['payment_ref']):?>
                                                        <img style="width:100%" src="<?=$row['payment_ref']?>" alt="">
                                                    <?php else: ?>
                                                        <img style="width:100%" src="/assets/images/empty.png" alt="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit"  class="btn btn-primary text-light"><a class="text-light" href="/assets/images/payments/<?=$row['payment_ref']?>" download>Download</button>
                                                </div>
                                                </form>
                                            </div>
                                        
                                    </div>
                                </div>
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