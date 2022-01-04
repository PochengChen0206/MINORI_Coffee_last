<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php
//如果這個階段沒有購物車，就將頁面轉回商品確認頁
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0 ) {
    header("location: shoppingCart_page.php");
    exit();
}
?>

<?php
//如果購物車與、商品索引與數量同時存在，則修改指定索引的商品數量
if(isset($_POST['qty'])) {
    foreach($_POST['qty'] as $index => $value){
        $_SESSION['cart'][$index]['prod_qty'] = $_POST['qty'][$index];
    }
}

?>

<?php require_once 'tpl/head.inc.php' ?>

<!-- 檢查是否成功印出 -->
<!-- <?php
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?> -->

<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <div class="left-side-bg" style="background: url(./img/coffee-class_05.jpg) no-repeat; background-size: cover;">
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
                                <div class="hc-process-list">購物車</div>
                                <div class="hc-process-list hc-process-active">填寫資料</div>
                                <div class="hc-process-list">訂單完成</div>
                            </div>
                        </div>
                        <!-- table form -->
                        <form name="myForm" method="post" action="shoppingCart_finish_page.php">
                            <div class="hc-content-form">
                                <!-- order list  -->
                                <table class="hc-table">
                                    <thead>
                                        <tr class="hc-table-title">
                                            <th colspan="2">
                                                <h5>訂單明細</h5>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody class="hc-table-lists hc-tbody-credit" id="hc-credit">
                                        <!-- <tr>
                                            <td>訂單編號:</td>
                                            <td>61052</td>
                                        </tr> -->
                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                            foreach ($_SESSION['cart'] as $key => $obj) {
                                        ?>
                                                <tr>
                                                    <td><?= $obj['prod_name'] ?></td>
                                                    <td class="hc-hidden-xs"><?= $obj['prod_size'] ?></td>
                                                    <td class="hc-hidden-xs"><?= $obj['prod_grind'] ?></td>
                                                    <td class="hc-hidden-xs">數量<?= $obj['prod_qty'] ?></td>
                                                    <td class="hc-hidden-xs">NT$<?= $obj['prod_price'] * $obj['prod_qty'] ?></td>
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
                                                <div class="form-check form-check-inline hc-check-move">
                                                    <input class="form-check-input" type="checkbox" id="member_info">
                                                    <label class="form-check-label">填入會員資料</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="hc-table-lists hc-tbody-credit hc-table-size" id="hc-credit">
                                        <tr>
                                            <td>收件人姓名:</td>
                                            <td>
                                                <div class="col-sm-12 p-0">
                                                    <input type="text" class="form-control" name="recipient_name" id="r-name">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>
                                                <div class="col-sm-12 p-0">
                                                    <input type="email" class="form-control" name="recipient_email" id="r-email">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>電話:</td>
                                            <td>
                                                <div class="col-sm-12 p-0">
                                                    <input type="text" class="form-control" name="recipient_phone_number" id="r-phnum">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>地址:</td>
                                            <td>
                                                <div class="col-sm-12 p-0">
                                                    <input type="text" class="form-control" name="recipient_address" id="r-address">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>備註:</td>
                                            <td>
                                                <div class="col-sm-12 p-0">
                                                    <textarea type="text" class="form-control" name="recipient_comments" rows="5"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- invoice Information -->
                                <table class="hc-table">
                                    <thead>
                                        <tr class="hc-table-title hc-control-table">
                                            <th colspan="2">
                                                <h5>發票明細</h5>
                                                <div class="form-check form-check-inline hc-check-move-first">
                                                    <input class="form-check-input" type="radio" id="member_info" name="invoice_type" value="電子發票" checked>
                                                    <label class="form-check-label">電子發票</label>
                                                </div>
                                                <div class="form-check form-check-inline hc-check-move">
                                                    <input class="form-check-input" type="radio" id="member_info" name="invoice_type" value="發票證明聯">
                                                    <label class="form-check-label">發票證明聯</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="hc-table-lists hc-tbody-credit hc-table-size" id="hc-credit">
                                        <!-- <tr class="d-flex">
                                            <td class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="invoice_carrier" value="隨包裹" checked>
                                                <label class="form-check-label">隨包裹</label>
                                            </td>
                                            <td class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="invoice_carrier" value="電子條碼載具">
                                                <label class="form-check-label">電子條碼載具</label>
                                            </td>
                                        </tr> -->
                                        <tr>
                                            <td><label for="colFormLabel">載具編號:</label>
                                            </td>
                                            <td>
                                                <div class="col-sm-12 p-0">
                                                    <input type="text" class="form-control" name="invoice_carrier_number" placeholder="(發票隨包裹不必填寫)">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- coupon  Information -->
                                <table class="hc-table">
                                    <thead>
                                        <tr class="hc-table-title hc-control-table">
                                            <th colspan="2">
                                                <h5>優惠選擇</h5>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="hc-table-lists hc-tbody-credit hc-table-size" id="hc-credit">
                                        <tr>
                                            <td><label for="colFormLabel">優惠代碼:</label>
                                            </td>
                                            <td>
                                                <div class="col-sm-12 p-0">
                                                    <input type="text" class="form-control" name="coupon_code" placeholder="(請輸入優惠代碼)">
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <!-- credit card  -->
                                <table class="hc-table">
                                    <thead>
                                        <tr class="hc-table-title">
                                            <th colspan="2">
                                                <!-- ---------- 圖案 -->
                                                <h5>信用卡</h5>
                                                <!-- ---------- -->
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="hc-table-lists hc-tbody-credit" id="hc-credit">
                                        <tr>
                                            <!-- ---------- 表單 -->
                                            <td>
                                                <!-- 套件 -->
                                                <div class="col-12 hc-card-control">
                                                    <div class="cc">
                                                        <h2 class="hc-card-title"><img src="./img/Visa_small.svg" alt="" style="width: 100px;"></h2>
                                                        <div class="number">
                                                            <input type="text" class="card_border hc-card_border" maxlength="4" placeholder="1234" name="card_number_1">
                                                            <input type="text" class="card_border hc-card_border" maxlength="4" placeholder="1234" name="card_number_2">
                                                            <input type="text" class="card_border hc-card_border" maxlength="4" placeholder="1234" name="card_number_3">
                                                            <input type="text" class="card_border hc-card_border" maxlength="4" placeholder="1234" name="card_number_4">
                                                            <span class="instructions hc-card_span">信用卡卡號</span>
                                                        </div>
                                                        <div class="date">
                                                            <span class="instructions valid">到期年限</span>
                                                            <input type="text" class="card_border" maxlength="5" placeholder="00/00" name="card_valid_date">
                                                            <span class="instructions valid">CCV</span>
                                                            <input type="text" class="card_border" maxlength="3" placeholder="123" name="card_ccv">
                                                        </div>
                                                        <div class="name">
                                                            <input class="full-name card_border" type="text" maxlength="" placeholder="(請輸入姓名)" name="card_holder">
                                                            <span class="instructions">持卡人姓名</span>
                                                        </div>

                                                    </div>

                                                </div>

                                            </td>
                                            <!-- ---------- -->
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- send button -->
                            <div class="hc-hc-shopping-btn-grp d-flex justify-content-between">
                                <div class="hc-payment">
                                    <a href="shoppingCart_page.php" type="button" class="btn btn-outline-warning px-5">回購物車</a>
                                </div>
                                <div class="hc-payment">
                                    <!-- <a href="javascript:;" type="button" class="btn btn-outline-warning px-5">確認結帳</a> -->
                                    <button type="submit" class="btn btn-outline-warning px-5">確認結帳</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ================================================= -->
            </div>
            <?php require_once 'tpl/foot.inc.php' ?>