<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php require_once 'tpl/head.inc.php' ?>
<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <div class="left-side-bg" style="background: url(./img/main_left.jpg) no-repeat; background-size: cover; background-position: center">
                <!-- ======================================================================================= add content -->

            </div>
        </div>
        <!-- rightSide page -->
        <div class="right-side">
            <div class="right-side-content">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out-->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->
                <div class="signupPage d-flex flex-column justify-content-center pc-bg-logo">
                    <div class="signupPage-content container ">
                        <h2 class="pc-page-title text-center">MINORI</h2>
                        <form class="row g-3" id="myForm">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label" style="color: #95720C;">姓名</label>
                                <input type="text" class="form-control" id="name" placeholder="請填寫您的姓名">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="inputEmail4" class="form-label" style="color: #95720C;">Email(設定為帳號)</label>
                                <input type="email" class="form-control" id="email" placeholder="請填寫您的Email">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputPassword4" class="form-label" style="color: #95720C;">密碼</label>
                                <input type="password" class="form-control" id="pwd" placeholder="請填寫您的密碼">
                            </div>
                            <div class="col-12 mt-3 text-right">
                                <button type="submit" class="btn btn-outline-warning px-5" id="btn_register">註冊</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>