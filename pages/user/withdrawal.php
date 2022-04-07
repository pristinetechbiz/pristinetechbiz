<?php
header('Content-Type: application/json');
$user_id = $_SESSION["user_id"];

if(isset($_POST['amount'])) {
    $amount = $_POST['amount'];
    $ref = $_POST['trans_ref'];
    $withdrawal_charge = $amount * 0.05;

    $tran = $db->select(
        'contributions', 
        ['available_balance'], 
        ['trans_ref' => $ref]
    );

    if($amount > $tran[0]['available_balance']) {
        echo json_encode([
            'success' => false,
            'message' => 'Amount exceeds limit'
        ]);

        http_response_code(400);

        return;
    }


   $withdrawal = $db->insert("withdrawal", [
        "client_id" => $user_id,
        "amount" => $amount,
        "withdrawal_charge" => $withdrawal_charge,
        "withdrawal_date" => date("Y-m-d"),
        "trans_ref" => $ref,
    ]);

    if ($withdrawal) {
        echo json_encode([
            'success' => true,
            'message' => 'withdrawal sent to admin'
        ]);
        http_response_code(200);
       
    }else{
        echo json_encode([
            'success' => false,
            'message' => 'withdrawal failed'
        ]);

        http_response_code(400);
    }



    
}