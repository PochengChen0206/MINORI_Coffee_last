<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php
//如果這個階段沒有購物車，或沒有登入帳號，就將頁面轉回商品確認頁
if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0 || !isset($_SESSION['email']) ) {
    header("location: shoppingCart_page.php");
    exit();
}
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

<?php require_once 'tpl/make_order.php' ?>

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
                                                        訂單已經建立，系統將發送確認信件至您的信箱。</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>訂單編號: <a href="javascript:;">CB04061254</a> </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="hc-order-img">
                                                    <img src="./img/product_bean_003.jpg" alt="">
                                                </div>
                                                <div class="hc-order-content d-flex align-items-center">
                                                    <ul>
                                                        <li><span>耶加雪菲 晨之莓</span></li>
                                                        <li>
                                                            <span>NT 1200</span>
                                                            <div><span class="hc-num-red">1</span>件</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            NT 1200
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>總計:</td>
                                        <td colspan="2">
                                            <div class="hc-total">
                                                <div>NT<h3>1200</h3>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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
                                                <!-- <input type="text" class="form-control hc-input-code"
                                                        name="recipient_name"> -->
                                                Alex Chen
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>
                                            <div class="col-sm-12 p-0">
                                                <!-- <input type="email" class="form-control hc-input-code"
                                                        name="recipient_email"> -->
                                                alexC@gmail.com
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>電話:</td>
                                        <td>
                                            <div class="col-sm-12 p-0">
                                                <!-- <input type="text" class="form-control hc-input-code"
                                                        name="recipient_phone_number"> -->
                                                0900-123456
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>地址:</td>
                                        <td>
                                            <div class="col-sm-12 p-0">
                                                <!-- <input type="text" class="form-control hc-input-code"
                                                        name="recipient_address"> -->
                                                106台北市大安區復興南路一段390號2樓
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

                    </div>
                </div>
                <!-- ================================================= -->
            </div>
            <?php require_once 'tpl/foot.inc.php' ?>