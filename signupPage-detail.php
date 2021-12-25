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
                <div class=" signupPage d-flex flex-column justify-content-center pc-bg-logo">
                    <div class="signupPage-content container">
                        <h2 class="pc-page-title text-center">個人資料</h2>
                        <form class="row g-3" id="myForm">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label" style="color: #95720C;">姓名</label>
                                <input type="text" class="form-control" id="name" value="<?= $_SESSION['name'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label" style="color: #95720C;">生日</label>
                                <input type="text" class="form-control" id="birthdate" placeholder="請填寫您的生日">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="inputEmail4" class="form-label" style="color: #95720C;">手機號碼</label>
                                <input type="text" class="form-control" id="phone_number" placeholder="請填寫您的手機號碼">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputAddress" class="form-label" style="color: #95720C;">通訊地址</label>
                                <input type="text" class="form-control" id="address" placeholder="請填寫您的通訊地址">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="inputEmail4" class="form-label" style="color: #95720C;">Email(設定為帳號)</label>
                                <input type="email" class="form-control" id="email" value="<?= $_SESSION['email'] ?>">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputPassword4" class="form-label" style="color: #95720C;">密碼</label>
                                <input type="password" class="form-control" id="pwd" placeholder="請輸入您的密碼">
                            </div>
                            <div class="col-12 mt-3 text-right">
                                <a type="button" class="btn btn-outline-warning px-5" href='couponGet.php' id="btn_setting">登錄</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>