<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php require_once 'tpl/head.inc.php' ?>
<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <!-- ================================================= 新頁面加入 -->
            <div class="left-side-push100">
                <div class="hc-left-side-bg" style="background: url(./img/news_003.jpg) no-repeat; background-size: cover; background-position: center">
                    <!-- ======================================================================================= add content -->
                    <!-- head -->
                    <div class="hc-top-menus">
                        <div class="hc-top-menu-container-pushTop">
                            <div class="hc-top-menu-control">
                                <!-- menu 1 -->
                                <div class="hc-top-menu">
                                    <a href="memberData.php">
                                        個人資料
                                    </a>
                                </div>
                                <!-- menu 2 -->
                                <div class="hc-top-menu">
                                    <a href="order_tracking_page.php">
                                        訂單查詢
                                    </a>
                                </div>
                                <!-- menu 3 -->
                                <div class="hc-top-menu">
                                    <a class="hc-top-menu-active" href="#">
                                        優惠卷
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- 左側頁面內容 -->
                    <div class="hc-left-side-content">
                        <div class="hc-left-side-container">
                            <div class="hc-bean-menu">
                                <!-- menu list -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================================================= -->
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
                <div class="hc-coupons-products">
                    <!-- box -->
                    <div class="hc-coupon-box-title" style="background: url(./img/bg-gold.jpg);">
                    </div>
                    <!-- coupons products -->
                    <div class="hc-coupons-products-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>會員中心</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>優惠卷</span>
                            </a>
                        </div>
                        <!-- coupons products -->
                        <div class="hc-coupons-products-content">
                            <div class="hc-coupons-products-content-container">
                                <div class="hc-main-title-control d-flex justify-content-between">
                                    <!-- title -->
                                    <div class="hc-main-title-en d-flex mb-4">COUPONS</div>
                                    <!-- filter -->
                                </div>
                                <!-- products content -->
                                <div class="hc-products-grp">
                                    <!-- product grp 1 -->
                                    <div class="hc-coupons d-flex align-items-center flex-column">
                                        <!-- ticket card 動態生成 -->
                                        <!-- <div class="hc-coupon-list">
                                                <div class="hc-coupon-ticket">
                                                    <div class="hc-coupon-ticket-bg">
                                                        <h5 class="hc-ticket-title">折扣 NT$<span>100</span>
                                                        </h5>
                                                        <p>給所有商品使用</p>
                                                    </div>
                                                </div>
                                                <div class="hc-coupon-content">
                                                    <p>使用期限</p>
                                                    <div>111年12月31日</div>
                                                    <button class="hc-coupon-btn">領取</button>
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                                <!-- show more -->
                                <div class="hc-showMore">
                                    <button class="hc-showMore-btn">Show
                                        More
                                    </button>
                                    <div class="hc-icon-down"><i class="fas fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div>
                        <!-- button -->
                        <div class="hc-coupons-button">
                            <a type="button" class="btn btn-outline-warning px-5" href="javascript:;">繼續購物</a>
                        </div>
                    </div>

                    <!-- page number -->
                </div>
                <!-- ================================================= -->
            </div>
            <?php require_once 'tpl/foot.inc.php' ?>