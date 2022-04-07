<?php

if (isset($_GET['user_id'])) {

    $user = $db->get('users','*',[
        'user_id'=> $_GET['user_id']
    ]);

}

$confirmed_withdrawal = $db->count('withdrawal', [
    'client_id' => $user['phone'],
    'confirm_withdrawal' => true
]);

$pending_withdrawal = $db->count('withdrawal', [
    'client_id' => $user['phone'],
    'confirm_withdrawal' => false
]);

$confirmed_payment = $db->sum('payments', 'amount_due', [
    'client_id' => $user['phone'],
    'verify' => true
]);

$pending_payment = $db->sum('payments', 'amount_due', [
    'client_id' => $user['phone'],
    'verify' => false
]);

$monthly = $db->count('monthly_contrib', [
    'client_id' => $user['phone']
]);

$weekly = $db->count('weekly_contrib', [
    'client_id' => $user['phone']
]);

$yearly = $db->count('yearly_contrib', [
    'client_id' => $user['phone']
]);

$daily = $db->count('daily_contrib', [
    'client_id' => $user['phone']
]);





?>

<!-- [ Main Content ] start -->
<div class="row">
    <!-- [ user info section ] start -->
    <div class="col-md-12 col-xl-12">
        <div class="card project-task">
            <div class="card-block">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <h5 class="m-0"><i class="far fa-edit m-r-10"></i><?= $user['firstname']?> <?= $user['surname']?> Information</h5>
                    </div>
                    <div class="col-auto">
                        <label onclick="window.print()" class="label theme-bg text-white f-14 f-w-400 float-right">Print</label>
                    </div>
                </div>
            </div>
            <div class="list-group">
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>First Name</h4>
                        <h4><?= $user['firstname']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Last Name</h4>
                        <h4><?= $user['surname']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Middle Name</h4>
                        <h4><?= $user['middlename']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Email</h4>
                        <h4><?= $user['email']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Phone</h4>
                        <h4><?= $user['phone']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Date of birth</h4>
                        <h4><?= $user['dob']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Address</h4>
                        <h4><?= $user['user_address']?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ user info section ] end -->
    <!-- [ user info section ] start -->
    <div class="col-md-12 col-xl-12">
        <div class="card project-task">
            <div class="card-block">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <h5 class="m-0"><i class="far fa-edit m-r-10"></i><?= $user['firstname']?> <?= $user['surname']?> Bank Details</h5>
                    </div>
                </div>
            </div>
            <div class="list-group">
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Account Name</h4>
                        <h4><?= $user['acc_name']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Account Number</h4>
                        <h4><?= $user['acc_number']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Bank Name</h4>
                        <h4><?= $user['acc_bankname']?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ user info section ] end -->
    <!-- [ user info section ] start -->
    <div class="col-md-12 col-xl-12">
        <div class="card project-task">
            <div class="card-block">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <h5 class="m-0"><i class="far fa-edit m-r-10"></i><?= $user['firstname']?> <?= $user['surname']?> Next of kin</h5>
                    </div>
                </div>
            </div>
            <div class="list-group">
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Full Name</h4>
                        <h4><?= $user['nok']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Relationship</h4>
                        <h4><?= $user['relationship']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Phone</h4>
                        <h4><?= $user['nok_phone']?></h4>
                    </div>
                </div>
                <div class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h4>Adddress</h4>
                        <h4><?= $user['nok_address']?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ user info section ] end -->
    <!-- [ project-task section ] start -->
    <div class="col-md-6 col-xl-4">
        <div class="card project-task">
            <div class="card-block">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <h5 class="m-0"><i class="far fa-edit m-r-10"></i>Withdrawals</h5>
                    </div>
                    <div class="col-auto">
                        <label class="label theme-bg text-white f-14 f-w-400 float-right"><?= $confirmed_withdrawal + $pending_withdrawal > 0 ?  $confirmed_withdrawal / ($confirmed_withdrawal + $pending_withdrawal) * 100 : 0 ?>% Approved</label>
                    </div>
                </div>
                <h6 class="text-muted mt-4 mb-3">Approval : <?= $confirmed_withdrawal?>/<?= $pending_withdrawal?></h6>
                <div class="progress">
                    <div class="progress-bar progress-c-theme" role="progressbar" style="width:60%;height:6px;"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h6 class="mt-3 mb-0 text-center text-muted">Total Request : <?= $confirmed_withdrawal + $pending_withdrawal?></h6>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-block">
                <h5 class="mb-4">Pending Payment</h5>
                <h3 class="mb-4"><?= $pending_payment ? $pending_payment : 0?></h3>
                <span class="text-muted d-block">Top selling items statistic by last month</span>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xl-4">
        <div class="card card-event">
            <div class="card-block">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <h5 class="m-0">Confirmed Payment</h5>
                    </div>
                    <div class="col-auto">
                        <label class="label theme-bg2 text-white f-14 f-w-400 float-right"><?= (isset($confirmed_payment) ? $confirmed_payment : 0) / ($confirmed_payment ?? 0 + $pending_payment ?? 0) * 100?>%</label>
                    </div>
                </div>
                <h2 class="mt-2 "><?=$confirmed_payment?></h2>
                <h6 class="text-muted mt-3 mb-0">You can participate in event </h6>
                <i class="fab fa-angellist text-c-purple f-50"></i>
            </div>
        </div>
    </div>
    <!-- [ project-task section ] end -->


    <!-- [ overdue-task section ] start -->
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-block border-bottom">
                <h5 class="m-0">Yearly Contribution</h5>
            </div>
            <div class="card-block">
                <div class="row  align-items-center">
                    <div class="col-8">
                        <h2 class=" m-0"><?= $yearly?></h2>
                    </div>
                    <div class="col-4 text-right">
                        <h5 class="text-c-green f-w-400"><?= $yearly/($yearly+$weekly+$monthly+$daily)*100?>%</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-block border-bottom">
                <h5 class="m-0">Monthly Contribution</h5>
            </div>
            <div class="card-block">
                <div class="row  align-items-center">
                    <div class="col-8">
                        <h2 class=" m-0"><?= $monthly?></h2>
                    </div>
                    <div class="col-4 text-right">
                        <h5 class="text-c-green f-w-400"><?= $monthly/($yearly+$weekly+$monthly+$daily)*100?>%</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-block border-bottom">
                <h5 class="m-0">Weekly Contribution</h5>
            </div>
            <div class="card-block">
                <div class="row  align-items-center">
                    <div class="col-8">
                        <h2 class=" m-0"><?= $weekly?></h2>
                    </div>
                    <div class="col-4 text-right">
                        <h5 class="text-c-green f-w-400"><?= $weekly/($yearly+$weekly+$monthly+$daily)*100?>%</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-block border-bottom">
                <h5 class="m-0">Daily Contribution</h5>
            </div>
            <div class="card-block">
                <div class="row  align-items-center">
                    <div class="col-8">
                        <h2 class=" m-0"><?= $daily?></h2>
                    </div>
                    <div class="col-4 text-right">
                        <h5 class="text-c-green f-w-400"><?= $daily/($yearly+$weekly+$monthly+$daily)*100?>%</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ overdue-task section ] end -->

    <!-- [ user Project list ] start -->
    <div class="col-md-12">
        <div class="card user-list">
            <div class="card-header">
                <h5>All Payment</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i>
                                        maximize</span><span style="display:none"><i class="feather icon-minimize"></i>
                                        Restore</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                            class="feather icon-minus"></i> collapse</span><span style="display:none"><i
                                            class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i>
                                    reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i>
                                    remove</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="card-block pb-0">
                <div class="table-responsive">
                    <table class="table table-hover">
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
                            <?php $sql = $db->select("payments", "*", ['client_id' => $user['phone']]);?> 
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
                                                    <img style="width:100%" src="/assets/images/payments/<?=$row['payment_ref']?>" alt="">
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
        </div>
    </div>
    <!-- [ user Project list ] end -->
</div>
<!-- [ Main Content ] end -->