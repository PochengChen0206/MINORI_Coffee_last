<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php
//如果這個階段沒有購物車，或沒有登入帳號，就將頁面轉回商品確認頁
// if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0 || !isset($_SESSION['email']) ) {
//     header("location: shoppingCart_page.php");
//     exit();
// }
?>

<?php
//將表單資訊寫入session ，之後建立訂單時，一起變成訂單資訊
$_SESSION['form'] = [];
$_SESSION['form']['recipient_email'] = $_POST['recipient_email'];
$_SESSION['form']['recipient_name'] = $_POST['recipient_name'];
$_SESSION['form']['recipient_phone_number'] = $_POST['recipient_phone_number'];
$_SESSION['form']['recipient_address'] = $_POST['recipient_address'];
$_SESSION['form']['recipient_comments'] = $_POST['recipient_comments'];
$_SESSION['form']['invoice_type'] = $_POST['invoice_type'];
$_SESSION['form']['invoice_carrier'] = $_POST['invoice_carrier'];
$_SESSION['form']['invoice_carrier_number'] = $_POST['invoice_carrier_number'];
$_SESSION['form']['coupon_code'] = $_POST['coupon_code'];
?>

<?php require_once 'tpl/head.inc.php' ?>

<!-- 檢查是否成功印出 -->
<!-- <?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?> -->

<?php
# 總額 與優惠後總額
$total = 0;
$total_m = 0;

#計算總價
foreach ($_SESSION['cart'] as $key => $obj) {
    $total += $obj['prod_price'] * $obj['prod_qty'];
}

/**
 * 先讓 總額 跟 優惠後總額一樣，
 * 之後看看是否使用優惠代碼，來決定實際的優惠後總額
 */
$total_m = $total;

// echo $total;

//判斷優惠代碼是否存在，有的話則計算優惠後總額
if ($_SESSION['form']['coupon_code'] != '') {
    $sqlCoupon = "SELECT * FROM `coupon` WHERE `code` = '{$_SESSION['form']['coupon_code']}' AND `isUsed` = 0";
    $stmt = $pdo->query($sqlCoupon);
    if ($stmt->rowCount() > 0) {
        //取得優惠資訊
        $obj = $stmt->fetch();

        //計算優惠後總額
        $total_m = ceil($total * $obj['percentage']); //ceil無條件進位

        //將優惠券設定為已使用
        $sqlUpdate = "UPDATE`coupon` SET `isUsed` = 1 WHERE `code` = '{$_SESSION['form']['coupon_code']}'";
        $pdo->query($sqlUpdate);
    }
}

//確認輸出
// echo $total;
// echo "<br>";
// echo $total_m;

//信用卡資訊
$card_number = sha1($_POST['card_number_1'] . $_POST['card_number_2'] . $_POST['card_number_3'] . $_POST['card_number_4']);
$card_valid_date = sha1($_POST['card_valid_date']);
$card_ccv = sha1($_POST['card_ccv']);
$card_holder = sha1($_POST['card_holder']);

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
}
?>

<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <div class="left-side-bg" style="background: url(./img/shoppingCart_1.jpg) no-repeat; background-size: cover; background-position: center">
                <!-- ======================================================================================= add content -->
                <div class="container">

                </div>
            </div>
        </div>
        <!-- rightSide page -->
        <div class="right-side">
            <div class="right-side-content" style="background: url(./img/bg-dark.png) repeat;">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out -->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="hc-shopping-cart">
                    <div class="hc-shopping-cart-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>首頁</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>購物車</span>
                            </a>
                        </div>
                        <!-- process -->
                        <div class="hc-process d-flex">
                            <div class="hc-process-container d-flex justify-content-between hc-process-bg">
                                <div class="hc-process-list">商品確認</div>
                                <div class="hc-process-list">填寫資料</div>
                                <div class="hc-process-list hc-process-active">訂單完成</div>
                            </div>
                        </div>
                        <!-- table form -->
                        <div class="hc-content-form">
                            <!-- order list  -->
                            <table class="hc-table">
                                <thead>
                                    <tr class="hc-table-title">
                                        <th colspan="3">
                                            <h5>訂單完成</h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="hc-table-lists hc-tbody-orderDone" id="">
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex flex-column">
                                                <div class="d-flex justify-content-center mb-3"><img src="./img/finish_check.svg" alt="" style="width: 50px;">
                                                </div>
                                                <div>
                                                    <p style="color: rgb(252, 80, 80); text-align: center;">
                                                        訂單已經建立，系統將發送訂單信件至您的信箱。</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>訂單編號:</td>
                                        <td><?= $order_id ?></td>
                                    </tr>
                                    <tr>
                                        <td>結帳金額:</td>
                                        <td>
                                            <?php
                                            // 存取上一頁的總計
                                            $amountTotal = $_SESSION['amountTotal']; ?>
                                            <div class="hc-total">NT$<span id="amountTotal"><?= $amountTotal ?></span></div>
                                        </td>
                                    </tr>
                            </table>
                            <table class="hc-table">
                                <thead>
                                    <tr class="hc-table-title">
                                        <th colspan="5">
                                            <h5>訂單明細</h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="hc-table-lists hc-tbody-credit" id="hc-credit">
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $key => $obj) {
                                    ?>
                                            <tr>
                                                <td><?= $obj['prod_name'] ?></td>
                                                <td class="hc-hidden-xs"><?= $obj['prod_size'] ?></td>
                                                <td class="hc-hidden-xs"><?= $obj['prod_grind'] ?></td>
                                                <td class="hc-hidden-xs">數量<?= $obj['prod_qty'] ?></td>
                                                <td class="hc-hidden-xs">NT$<?= $obj['prod_price'] * $obj['prod_qty'] * $obj['prod_times'] ?></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- Recipient Information  -->
                            <table class="hc-table">
                                <thead>
                                    <tr class="hc-table-title hc-control-table">
                                        <th colspan="2">
                                            <h5>收件人資訊</h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="hc-table-lists hc-tbody-credit hc-table-size" id="hc-credit">
                                    <tr>
                                        <td>收件人姓名:</td>
                                        <td>
                                            <div class="col-sm-12 p-0">
                                                <?= $_SESSION['form']['recipient_name'] ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>
                                            <div class="col-sm-12 p-0">
                                                <?= $_SESSION['form']['recipient_email'] ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>電話:</td>
                                        <td>
                                            <div class="col-sm-12 p-0">
                                                <?= $_SESSION['form']['recipient_phone_number'] ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>地址:</td>
                                        <td>
                                            <div class="col-sm-12 p-0">
                                                <?= $_SESSION['form']['recipient_address'] ?>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- send button -->
                        <div class="hc-hc-shopping-btn-grp d-flex justify-content-between">
                            <div class="hc-payment">
                                <a href="shoppingCart_fillIn_page.php" type="button" class="btn btn-outline-warning px-5">查看訂單</a>
                            </div>
                            <div class="hc-payment">
                                <a href="http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1" type="button" class="btn btn-outline-warning px-5">繼續逛商品</a>
                            </div>
                        </div>
                        <?php
                        
                        //刪除購物車 和 表單資訊
                        unset($_SESSION['cart'], $_SESSION['form']);
                        ?>
                    </div>
                </div>
                <!-- ================================================= -->
            </div>
            <?php require_once 'tpl/foot.inc.php' ?>