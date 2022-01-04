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
                        <?php require_once 'tpl/signout.inc.php' ?>
                    </div>
                    <!-- ================================================= 新頁面加入 -->
                    <div class="container signupPage d-flex flex-column justify-content-center align-items-center pc-bg-logo">
                        <h2 class="pc-page-title text-center">註冊完成</p>
                        <h3 class="pc-page-title text-center">歡迎加入MINORI</h3>
                        <div class="signupPage-content">
                            <div class="mt-3 d-flex flex-column align-items-center justify-content-center">
                                <a type="button" class="btn btn-outline-warning px-5" href='signupPage-detail.php'>填寫完整資料拿優惠券</a>
                            </div>
                            <div class="mt-3 d-flex flex-column align-items-center justify-content-center">
                                <a type="button" class="btn btn-outline-warning px-5" href= 'http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1'>先逛逛所有商品</a>
                            </div>
                        </div>
                    </div>
                    <!-- ================================================= -->

<?php require_once 'tpl/foot.inc.php' ?>