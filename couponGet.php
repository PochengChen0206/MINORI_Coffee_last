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

            </div>
        </div>
        <!-- rightSide page -->
        <div class="right-side">
            <div class="right-side-content">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon  每一頁都要放不更動-->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out  每一頁都要放不更動-->
                    <?php require_once 'tpl/signout-login.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="container couponGet d-flex flex-column justify-content-center pc-bg-logo">
                    <h2 class="pc-page-title text-center">MINORI</h2>
                    <div class="container couponGet-content text-center">
                        <div class="couponGet-img">
                            <img src="./img/coffee-beans-icon.png" style="width: 15%;" alt="">
                        </div>
                        <h4 class="" style="color:#95720C; width:100%">個人資料登錄完成</h4>
                        <h5 class="" style="color:white;">獲得20%OFF優惠券</h5>
                        <div class="pc-ticket-img">
                            <span>折扣<h5 class="ml-2" style="color:#95720C; margin:0;">20%OFF</h5></span>
                            <p style="color: #fff;">所有商品使用</p>
                        </div>
                    </div>
                    <div class="mt-2 text-center">
                        <a type="button" class="btn btn-outline-warning px-5" href="#">開始購物</a>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>