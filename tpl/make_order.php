<?php
// 總額與優惠後總額
$total = 0;
$total_m = 0;

foreach ($_SESSION['cart'] as $key => $obj) {
    $total += $obj['prod_price'] * $obj['prod_qty'];
};

/**
 * 先讓 總額 跟 優惠後總額一樣，
 * 之後看看是否使用優惠代碼，來決定實際的優惠後總額
 */
$total_m = $total;

//檢查印出
// echo $total_m;

//判斷優惠代碼是否存在，有的話則計算優惠後總額
if ($_SESSION['form']['coupon_code'] != '') {
    $sqlCoupon = "SELECT * FROM `coupon` WHERE `code` = '{$_SESSION['form']['coupon_code']}' AND `isUsed` = 0";
    $stmt = $pdo->query($sqlCoupon);
    if ($stmt->rowCount() > 0) {
        //取得優惠資訊
        $obj = $stmt->fetch();

        //計算優惠後總額
        $total_m = ceil($total * $obj['percentage']);

        //將優惠券設定為已使用
        $sqlUpdate = "UPDATE`coupon` SET`isUsed` = 1 WHERE `code` = '{$_SESSION['form']['coupon_code']}' ";
        $pdo->query($sqlUpdate);
    }
}
// echo $total;
// echo "<br>";
// echo $total_m;

//信用卡資訊
$card_number = $_POST['card_number_1'] . $_POST['card_number_2'] . $_POST['card_number_3'] . $_POST['card_number_4'];
$card_valid_date = $_POST['card_valid_date'];
$card_ccv = $_POST['card_ccv'];
$card_holder = $_POST['card_holder'];

// 建立訂單
$sql = "INSERT INTO `orders`( 
    `email`, `recipient_email`, `recipient_name`, `recipient_phone_number`, `recipient_address`, `recipient_comments`, `invoice_type`, `invoice_carrier`, `invoice_carrier_number`, `coupon_code`, `card_number`, `card_valid_date`, `card_ccv`, `card_holder`, `total`, `total_m`) 
    VALUES (
    '{$_SESSION['email']}','{$_SESSION['form']['recipient_email']}','{$_SESSION['form']['recipient_name']}','{$_SESSION['form']['recipient_phone_number']}','{$_SESSION['form']['recipient_address']}','{$_SESSION['form']['recipient_comments']}','{$_SESSION['form']['invoice_type']}','{$_SESSION['form']['invoice_carrier']}','{$_SESSION['form']['invoice_carrier_number']}','{$_SESSION['form']['coupon_code']}','{$card_number}','{$card_valid_date}','{$card_ccv}','{$card_holder}',{$total},{$total_m}
    )";
$stmt = $pdo->query($sql);

/**
 * 若訂單成立，則取得新增資料的 ID (Auto Increment)
 * 透過 ID 來建立訂單資料表的訂單編號 (order_id)
 */
if ($stmt->rowCount() > 0) {
    //取得新增資料時的自動編號
    $lastInsertId = $pdo->lastInsertId();

    //建立訂單編號 %05d補滿5位數的0
    $order_id = date("Ymd") . sprintf("%05d", $lastInsertId);

    //將訂單編號更新回 orders 資料表
    $sqlUpdate = "UPDATE`orders`SET `order_id` = '{$order_id}' WHERE `id` = {$lastInsertId}";
    $pdo->query($sqlUpdate);

    //處理商品明細資訊
    foreach ($_SESSION['cart'] as $key => $obj) {
        //計算小計
        $subtotal = $obj['prod_price'] * $obj['prod_qty'];

        //新增商品明細
        $sqlDetail = "INSERT INTO`orders_detail`(`order_id`, `prod_id`, `prod_name`, `prod_price`, `prod_size`, `prod_grind`, `prod_qty`, `prod_subtotal`)VALUE(
            '{$order_id}', {$obj['prod_id']}, '{$obj['prod_name']}', {$obj['prod_price']},
            '{$obj['prod_size']}', '{$obj['prod_grind']}', {$obj['prod_qty']}, {$subtotal}
        ) ";
        $pdo->query($sqlDetail);
    }

    //刪除購物車 和 表單資訊
    unset($_SESSION['cart'], $_SESSION['form']);
}
