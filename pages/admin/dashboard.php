<!-- [ Main Content ] start -->
<div class="row">
    <!--[ daily sales section ] start-->
    <div class="col-md-6 col-xl-4">
        <div class="card daily-sales">
            <div class="card-block">
                <h6 class="mb-4">Active investments</h6>
                <div class="row d-flex align-items-center">
                    <div class="col-9">
                        <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                        <?php
                            $active = $db->sum("contributions", "verify",[
                                'status' => NULL
                            ]);

                            if ($active > 1) {
                                echo "$active";
                            }else{
                                echo "0";
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
    <div class="col-md-6 col-xl-4">
        <div class="card Monthly-sales">
            <div class="card-block">
                <h6 class="mb-4">Completed Investments</h6>
                <div class="row d-flex align-items-center">
                    <div class="col-9">
                        <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                        
                        <?php
                            $completed = $db->sum("contributions", "verify",[
                                'status' => 'completed'
                            ]);
                            if ($completed > 1) {
                                echo "$completed";
                            }else{
                                echo "0";
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
    <div class="col-md-12 col-xl-4">
        <div class="card yearly-sales">
            <div class="card-block">
                <h6 class="mb-4">Pending payments</h6>
                <div class="row d-flex align-items-center">
                    <div class="col-9">
                        <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                        
                        <?php
                            $pending = $db->sum("payments", "verify",[
                                'payconfirm_id' => NULL
                            ]);
                            if ($pending > 1) {
                                echo "$pending";
                            }else{
                                echo "0";
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

                            $recent = $db->select("payments", "*",[
                                'payconfirm_id' => "1"
                            ]);

                            ?>
                            

                            <?php foreach ($recent as $key => $value):?>
                                <tr class='unread'>
                                 <td><img class='rounded-circle' style='width:40px;' src='../../assets/images/user/avatar-2.jpg' alt='activity-user'></td>
                                 <td>
                                     <h6 class='mb-1'># <?= $value['trans_ref']?></h6>
                                     <p class='m-0'><?= $value['plan']?></p>
                                 </td>
                                 <td>
                                     <h6 class='text-muted'><i class='fas fa-circle text-c-red f-10 m-r-15'></i><?= $value['pay_date']?></h6>
                                 </td>
                                 <td><a href='' class='label theme-bg2 text-white f-12'><?= $value['amount_due']?></a></td>
                                 <td><a href='' class='label theme-bg text-white f-12'>paid</a></td>
                             </tr>
                            <?php endforeach?>
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
                        $allInvestment = $db->sum("contributions", "verify");
                        if ($allInvestment > 1) {
                            echo "$allInvestment";
                        }else{
                            echo "0";
                        }
                    ?>
                    <sub class="text-muted f-14">Investments count</sub></h2>
                <h6 class="text-muted mt-4 mb-0">Total number of investments thus far</h6>
                <i class="fab fa-angellist text-c-purple f-50"></i>
            </div>
        </div>
        
    </div>

</div>
<!-- [ Main Content ] end -->
                        