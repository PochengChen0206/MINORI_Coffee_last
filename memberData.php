<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php require_once 'tpl/head.inc.php' ?>
<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <div class="left-side-bg" style="background: url(./img/main_left.jpg) no-repeat; background-size: cover;">
                <!-- ======================================================================================= add content -->
                <div class="pc-memberCenter-item d-flex  justify-content-around">
                    <div class="pc-item px-4" style="border-bottom: 1px solid #95720C;">
                        <a href="#" id="my_data" style="color: #95720C;">
                            個人資料
                        </a>
                    </div>
                    <div class="pc-item px-4">
                        <a a href="orders.php" id="products_order">
                            訂單查詢
                        </a>
                    </div>
                    <div class="pc-item px-4">
                        <a href="#" id="my_coupon">
                            優惠券
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- rightSide page -->
        <div class="right-side">
            <div class="right-side-content">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out -->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="pc-memberCenter d-flex flex-column justify-content-center pc-bg-logo">
                    <div class="pc-memberCenter-content container">
                        <h2 class="pc-page-title text-center">個人資料</h2>
                        <form class="row g-3" id="myForm">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label" style="color: #95720C;">姓名</label>
                                <input type="text" class="form-control" id="name" value="<?= $_SESSION['name'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label" style="color: #95720C;">生日</label>
                                <input type="text" class="form-control" id="birthdate" value="<?= $_SESSION['birthdate'] ?>">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="inputEmail4" class="form-label" style="color: #95720C;">手機號碼</label>
                                <input type="text" class="form-control" id="phone_number" value="<?= $_SESSION['phone_number'] ?>">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputAddress" class="form-label" style="color: #95720C;">通訊地址</label>
                                <input type="text" class="form-control" id="address" value="<?= $_SESSION['address'] ?>">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="inputEmail4" class="form-label" style="color: #95720C;">Email(設定為帳號)</label>
                                <input type="email" class="form-control" id="email" value="<?= $_SESSION['email'] ?>">
                            </div>
                            <div class="col-12 mt-3 text-right">
                                <button type="submit" class="btn btn-outline-warning px-4" id="btn-renew">儲存</button>
                                <!-- id不能用跟其他btn一樣 -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>