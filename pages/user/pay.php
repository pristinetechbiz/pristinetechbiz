<?php require_once('lib/db.php');


$user_id = $_SESSION["user_id"];
$acc_number = $_SESSION['acc_number'];
$user = $_SESSION['user_phone'];



if (!empty($_GET["payment_id"])) {

    $_SESSION['payment_id'] = $_GET["payment_id"];
}
$payment_id = $_SESSION['payment_id'];

?>


<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Make Payment</h5>
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php



                                $sn = 0;
                                $sql = mysqli_query($con, " SELECT * from payments WHERE client_id = '$user' AND id = '$payment_id' ");
                                while ($row = mysqli_fetch_array($sql)) {
                                    $payment_id = $row['id'];
                                    $trans_ref = $row['trans_ref'];
                                    $plan = $row['plan'];
                                    $amount_due = $row['amount_due'];
                                    $payconfirm_id = $row['payconfirm_id'];

                                    $sn += 1;

                                    echo "   
                                                                                    <tr>
                                                                                        <th scope='row'>$sn</th>
                                                                                        <td>$trans_ref</td>
                                                                                        <td>$plan</td>
                                                                                        <td>$amount_due</td>
                                                                                    </tr>
                                                                                         ";
                                }


                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Table ends here-->



                <h5>Payment Details</h5>
                <p>Bank Name: United Bank of Africa(U.B.A)</p>
                <p>Account Number: 1023506937</p>
                <p>Account Name: ECOOPS Financial Services Ltd</p>

                <hr />
                <br />

                <h5>Retire Payment here</h5>
                <form class='horizontal' method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Transaction Type</label>
                            <select name='trans_type' class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp">
                                <option value='USSD'>USSD</option>
                                <option value='INTERNET BANKING'>INTERNET BANKING</option>
                                <option value='MOBILE APP'>MOBILE APP</option>
                                <option value='BANK TELLER'>BANK TELLER</option>
                                <option value='Card Payment to Staff(Account Manager)'>Card Payment to Staff(Account Manager)</option>
                            </select>
                        </div>




                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Bank Name</label>
                            <select name='bankname' class="form-control" id="exampleInputEmail1" aria-describedby="coyHelp">
                                <option selected>Choose</option>
                                <option value="access">Access Bank</option>
                                <option value="citibank">Citibank</option>
                                <option value="diamond(Access)">Diamond(Access) Bank</option>
                                <option value="ecobank">Ecobank</option>
                                <option value="fidelity">Fidelity Bank</option>
                                <option value="firstbank">First Bank</option>
                                <option value="fcmb">First City Monument Bank (FCMB)</option>
                                <option value="gtb">Guaranty Trust Bank (GTB)</option>
                                <option value="heritage">Heritage Bank</option>
                                <option value="keystone">Keystone Bank</option>
                                <option value="polaris">Polaris Bank</option>
                                <option value="providus">Providus Bank</option>
                                <option value="stanbic">Stanbic IBTC Bank</option>
                                <option value="standard Chartered">Standard Chartered Bank</option>
                                <option value="sterling">Sterling Bank</option>
                                <option value="suntrust">Suntrust Bank</option>
                                <option value="union">Union Bank</option>
                                <option value="uba">United Bank for Africa (UBA)</option>
                                <option value="unity">Unity Bank</option>
                                <option value="wema">Wema Bank</option>
                                <option value="zenith">Zenith Bank</option>
                            </select>
                        </div>


                    </div>









                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Upload proof of payment: </label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group col-md-6 form-control">
                                <div class="picture-container">
                                    <div class="picture">
                                        <img src="default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                        <input type="file" id="wizard-picture" name="ufile" required="required" data-rule-required="true" data-msg-required="Please upload proof of payment" title="Select to upload a file!">
                                        <span class="error1" style="display: none;">
                                            <i class="error-log fa fa-exclamation-triangle"></i>
                                        </span>
                                    </div>
                                    <h6>Upload Picture</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />

                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </form>


                <?php
                if (isset($_POST['submit'])) {

                    $trans_type = $_POST['trans_type'];
                    $bankname = $_POST['bankname'];
                    $set_id = generateRandomString(20);
                    $payment_id = $_SESSION['payment_id'];
                    $dd = date('yy-m-d');


                    $imgFile = $_FILES['ufile'];
                    $tmp_dir = $_FILES['ufile']['tmp_name'];
                    //   $imgSize = $_FILES['ufile']['size'];

                    try {
                        $upload = $cloudinary->uploadApi()->upload($tmp_dir);

                        $i = json_encode($upload);
                        $public_id = json_decode($i)->public_id;
                        $url = json_decode($i)->url;
                        print_r($set_id);


                        $payQuery = $db->update(
                            "payments",
                            [
                                "payment_ref" => $url,
                                "bank_name" => $bankname,
                                "transaction_type" => $trans_type,
                                "pay_id" => generateRandomString(20),
                                "pay_date" => $dd
                            ],
                            ["id" => $payment_id]
                        );

                        if ($payQuery) {
                            echo '<script type="text/javascript">';

                            echo 'setTimeout(function () { swal("Success!","Payment remitted succesfully!, Admin would confirm your payment","success");';

                            echo '}, 1000);</script>';
                        } else {
                            echo "<script>swal('Error','Payment has not been successfully updated','error');</script>";
                            echo "<script>window.location.href='payments.php';</script>";
                        }
                    } catch (\Throwable $th) {

                        // print_r($th);
                        echo '<script type="text/javascript">';

                        echo 'setTimeout(function () { swal("Error!","Payment remitted unsuccessful!, try again some other time","error");';

                        echo '}, 1000);</script>';
                    }




                    //   $upload_dir = 'paymentreference/'; // upload directory

                    //    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

                    //    // valid image extensions
                    //    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extensions

                    //    // rename uploading image
                    //    $paymentproof = rand(1000,1000000).".".$imgExt;
                    //    if($imgSize < 5000000)    {
                    //          move_uploaded_file($tmp_dir,$upload_dir.$imgFile);
                    //         }

                    //  mysqli_query($con,"UPDATE payments SET payment_ref ='$paymentproof', bank_name = '$bankname', transaction_type = '$trans_type' , pay_id = '$set_id' , pay_date = '$dd' WHERE  id = '$payment_id' ");


                    // echo '<script type="text/javascript">';

                    // echo 'setTimeout(function () { swal("Success!","Payment remitted succesfully!, Admin would confirm your payment","success");';

                    // echo '}, 1000);</script>';
                }
                ?>


            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->