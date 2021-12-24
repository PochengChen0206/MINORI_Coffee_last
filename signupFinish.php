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
                    <div class="container signupPage d-flex flex-column justify-content-center pc-bg-logo">
                        <h2 class="pc-page-title text-center">註冊完成，歡迎加入MINORI</h2>
                        <div class="signupPage-content d-flex flex-column justify-content-center align-items-center">
                            <div class="mt-3">
                                <a type="button" class="btn btn-outline-warning px-5" href='signupPage-detail.php'>填寫完整資料拿優惠券</a>
                            </div>
                            <div class="mt-3">
                                <a type="button" class="btn btn-outline-warning px-5" href="#">先逛逛所有商品</a>
                            </div>
                        </div>
                    </div>
                    <!-- ================================================= -->

<?php require_once 'tpl/foot.inc.php' ?>