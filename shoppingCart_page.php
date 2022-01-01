<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php require_once 'tpl/head.inc.php' ?>
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
                                <div class="hc-process-list hc-process-active">購物車</div>
                                <div class="hc-process-list">填寫資料</div>
                                <div class="hc-process-list">訂單完成</div>
                            </div>
                        </div>
                        <!-- table form -->
                        <form name="myForm" method="post" action="shoppingCart_fillIn_page.php">
                            <div class="hc-content-form">
                                <!-- bought -->
                                <table class="hc-table">
                                    <thead>
                                        <!-- 表單切換 -->
                                        <tr class="hc-table-title">
                                            <th>
                                                <h5>項目</h5>
                                            </th>
                                            <th class="hc-hidden-xs">
                                                <h5>重量</h5>
                                            </th>
                                            <th class="hc-hidden-xs">
                                                <h5>磨豆</h5>
                                            </th>
                                            <th class="hc-hidden-xs">
                                                <h5>數量</h5>
                                            </th>
                                            <th class="hc-hidden-xs">
                                                <h5>價格</h5>
                                            </th>
                                            <th class="hc-show-xs">
                                                <h5>細項</h5>
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="hc-table-lists" id="hc-lists">
                                        <?php
                                        //購物車商品數量、小計、總計
                                        $count = 0;
                                        $total = 0;

                                        //判斷購物車是否存在
                                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                            // 更新商品數量
                                            $count = count($_SESSION['cart']);
                                            foreach ($_SESSION['cart'] as $key => $obj) {
                                                // 計算小計
                                                $total += $obj['prod_price'] * $obj['prod_qty'];
                                        ?>
                                                <!-- 表單切換 -->
                                                <tr>
                                                    <td><?= $obj['prod_name'] ?></td>
                                                    <td class="hc-hidden-xs"><?= $obj['prod_size'] ?></td>
                                                    <td class="hc-hidden-xs"><?= $obj['prod_grind'] ?></td>
                                                    <td class="hc-hidden-xs">
                                                        <!-- 將購物車中的商品索引，透過 form 帶到下一頁去 -->
                                                        <input type="hidden" name="index[]" value="<?= $key ?>">

                                                        <button class="btn_minus" type="button" data-index="<?= $key ?>" data-prod-price="<?= $obj['prod_price'] ?>"><i class="fas fa-minus"></i>
                                                        </button>
                                                        <input type="text" class="form-control qty" name="qty[]" placeholder="" data-index="<?= $key ?>" data-prod-price="<?= $obj['prod_price'] ?>" value="<?= $obj['prod_qty'] ?>">
                                                        <!-- <span><?= $obj['prod_qty'] ?></span> -->
                                                        <button class="btn_plus" type="button" data-index="<?= $key ?>" data-prod-price="<?= $obj['prod_price'] ?>"><i class="fas fa-plus"></i>
                                                        </button>
                                                    </td>
                                                    <td class="hc-hidden-xs">
                                                        <span data-index="<?= $key ?>">
                                                            NT$<?= $obj['prod_price'] * $obj['prod_qty'] ?>
                                                        </span>
                                                    </td>
                                                    <td class="hc-show-xs">
                                                        <div class="hc-show-item"><?= $obj['prod_size'] ?></div>
                                                        <div class="hc-show-item"><?= $obj['prod_grind'] ?></div>
                                                        <div class="hc-show-item">
                                                            <input type="hidden" name="index[]" value="<?= $key ?>">
                                                            <button><i class="fas fa-minus"></i></button>
                                                            <span><?= $obj['prod_qty'] ?></span>
                                                            <button><i class="fas fa-plus"></i></button>
                                                        </div>
                                                        <div class="hc-show-item"><?= $obj['prod_price'] ?></div>
                                                    </td>
                                                    <td class="hc-td-trash">
                                                        <a href="javascript:;" class="hc-trash delete" data-index="<?= $key ?>"><i class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <!-- credit card  -->
                                <table class="hc-table">
                                    <thead>
                                        <tr class="hc-table-title">
                                            <th colspan="2">
                                                <h5>訂單明細</h5>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="hc-table-lists hc-tbody-credit" id="hc-credit">
                                        <tr>
                                            <td>商品總計:</td>
                                            <td>NT$<span id="total"><?= $total ?></span></td>
                                        </tr> 
                                        <tr>
                                            <td>運送方式:</td>
                                            <td>宅配</td>
                                        </tr>
                                        <tr>
                                            <td>運費:</td>
                                            <td>NT$120</td>
                                        </tr>
                                        <tr>
                                            <td>折價卷代碼:</td>
                                            <td><input type="text" class="hc-input-code" name="coupon_code" id="coupon_code">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>結帳金額:</td>
                                            <td>
                                                <div class="hc-total">NT$1120</div>
                                                <div>消費滿1300元免運費</div>
                                                <div>差100元可免運</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- send button -->
                            <div class="hc-shopping-btn hc-payment">
                                <a href="javascript:;" type="button" class="btn btn-outline-warning px-5">結帳</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ================================================= -->
            </div>
            <?php require_once 'tpl/foot.inc.php' ?>