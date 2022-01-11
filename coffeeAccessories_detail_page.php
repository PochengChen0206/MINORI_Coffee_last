<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php
$sql = "SELECT `id`, `cat_name`  FROM`categories` WHERE `parent_id` = 0";
$arr = $pdo->query($sql)->fetchAll();
?>

<?php require_once 'tpl/head.inc.php' ?>

<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <!-- ================================================= 新頁面加入 -->
            <div class="left-side-push100">
                <div class="hc-left-side-bg" style="background: url(./img/coffeeAccessories_bg.jpg) no-repeat; background-size: cover;">
                    <!-- ======================================================================================= add content -->
                    <!-- head -->
                    <div class="hc-top-menus">
                        <div class="hc-top-menu-container-pushTop">
                            <div class="hc-top-menu-control">
                                <div class="hc-top-menu">
                                    <a class="hc-top-menu" href="beanList_page.php?cat_id=<?= $arr[0]['id'] ?>"><?= $arr[0]['cat_name'] ?></a>
                                </div>

                                <div class="hc-top-menu">
                                    <a class="hc-top-menu" href="beanList_page.php?cat_id=<?= $arr[1]['id'] ?>"><?= $arr[1]['cat_name'] ?></a>
                                </div>

                                <div class="hc-top-menu">
                                    <a class="hc-top-menu" href="beanList_page.php?cat_id=<?= $arr[2]['id'] ?>"><?= $arr[2]['cat_name'] ?></a>
                                </div>

                                <div class="hc-top-menu">
                                    <a class="hc-top-menu" href="coffeeAccessories_page.php?cat_id=<?= $arr[3]['id'] ?>"><?= $arr[3]['cat_name'] ?></a>
                                </div>
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
                <div class="hc-bean-products">
                    <!-- box -->
                    <div class="hc-box-title" style="background: url(./img/bg-gold.jpg);">
                    </div>
                    <!-- bean products -->
                    <div class="hc-bean-products-container hc-shopping-bg">
                        <!-- page title -->
                        <div class="hc-page-title">
                            <a href="landing_page.php" class="hc-page-title-menu">
                                <span>首頁</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>咖啡器材</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>日本Kalita手沖壺</span>
                            </a>
                        </div>
                        <!-- bean products -->
                        <div class="hc-coffee-products-content">
                            <div class="hc-coffee-products-content-container">
                                <div class="hc-main-title-control d-flex justify-content-between">
                                    <!-- title -->
                                    <div class="hc-main-title-en d-flex mb-4">DRIPPER</div>
                                </div>
                                <!-- products content -->
                                <div class="hc-products-detail-grp">
                                    <div class="hc-products-detail-control">
                                        <div class="hc-products-detail-img" style="width: 300px; margin-bottom: 24px;">
                                            <img src="./img/product_coffeeMaker_002.jpg" alt="">
                                        </div>

                                        <div class="hc-products-name">
                                            <h3 class="hc-name">日本Kalita手沖壺(SSW 1000)</h3>
                                        </div>
                                        <h4 class="hc-products-price">NT$2,999</h4>
                                        <div class="hc-products-list-grp hc-flavor d-flex">
                                            <div class="hc-products-list-secondTitle">
                                                <h5>特色</h5>
                                            </div>
                                            <p>耐熱，保溫，可用洗烘碗機清洗</p>
                                        </div>
                                        <div class="hc-products-content hc-products-bottomLine">
                                            <div class="hc-products-content-title">
                                                <h5>關於產品</h5>
                                            </div>
                                            <div class="hc-products-list-grp d-flex">
                                                <div class="hc-products-list-secondTitle">
                                                    <h5>產地</h5>
                                                </div>
                                                <p>日本</p>
                                            </div>
                                            <div class="hc-products-list-grp d-flex">
                                                <div class="hc-products-list-secondTitle">
                                                    <h5>尺寸</h5>
                                                </div>
                                                <p>202 x 130 x180 (mm)</p>
                                            </div>

                                            <div class="hc-products-list-grp d-flex">
                                                <div class="hc-products-list-secondTitle">
                                                    <h5>容量</h5>
                                                </div>
                                                <p>約1,000ml </p>
                                            </div>
                                            <div class="hc-products-list-grp d-flex">
                                                <div class="hc-products-list-secondTitle">
                                                    <h5>材質</h5>
                                                </div>
                                                <p>不鏽鋼製</p>
                                            </div>
                                            <div class="hc-products-list-grp d-flex">
                                                <div class="hc-products-list-secondTitle">
                                                    <h5>電壓</h5>
                                                </div>
                                                <p>100V</p>
                                            </div>
                                            <!-- process btn -->
                                            <div class="hc-btn-grp">
                                                <div class="hc-products-list-grp hc-process-part2-grp d-flex">
                                                    <div class="hc-products-list-secondTitle">
                                                        <h5>重量</h5>
                                                    </div>
                                                    <div class="hc-process-control d-flex">
                                                        <p>630g</p>
                                                    </div>
                                                </div>

                                                <div class="hc-products-list-grp hc-process-part2-grp d-flex">
                                                    <div class="hc-products-list-secondTitle">
                                                        <h5>數量</h5>
                                                    </div>
                                                    <div class="hc-process-control">
                                                        <button class="hc-num-btn hc-plus"><i class="fas fa-plus"></i></button>
                                                        <div class="hc-input-num">
                                                            <input type="text" class="form-control text-center" id="inputNumber" placeholder="1">
                                                        </div>
                                                        <button class="hc-num-btn hc-minus"><i class="fas fa-minus"></i></button>
                                                    </div>
                                                </div>

                                                <div class="hc-products-list-grp hc-process-part2-grp d-flex hc-buy">
                                                    <div class="hc-products-list-secondTitle">
                                                        <h5>結帳</h5>
                                                    </div>
                                                    <div class="hc-process-control">
                                                        <button class="hc-shoping-btn hc-shoping-push-btn">直接購買</button>
                                                        <button class="hc-shoping-btn"><i class="fas fa-shopping-bag"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- relate products -->
                        <div class="hc-products-relate">
                            <div class="hc-products-relate-title">
                                <h5>相關商品</h5>
                            </div>
                            <!-- products -->
                            <div class="hc-products-grp">
                                <!-- product grp -->
                                <div class="hc-products-grp2-control">
                                    <!-- product card 1 -->
                                    <div class="hc-pds-card-control col-lg-4 col-md-6">
                                        <div class="hc-pds-card">
                                            <div class="hc-pds-img">
                                                <a href="javascript:;">
                                                    <img src="./img/product_coffeeMaker_001.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hc-card-content-container">
                                                <div class="hc-card-content-title">
                                                    <h5>日本Kalita手沖壺(SSW 1000)</h5>
                                                </div>
                                                <div class="hc-card-content-price">
                                                    <span>NT$1,600</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product card 2 -->
                                    <div class="hc-pds-card-control col-lg-4 col-md-6">
                                        <div class="hc-pds-card">
                                            <div class="hc-pds-img">
                                                <a href="javascript:;">
                                                    <img src="./img/product_coffeeMaker_002.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hc-card-content-container">
                                                <div class="hc-card-content-title">
                                                    <h5>日本Kalita手沖壺(SSW 1000)</h5>
                                                </div>
                                                <div class="hc-card-content-price">
                                                    <span>NT$1,600</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product card 3 -->
                                    <div class="hc-pds-card-control col-lg-4 col-md-6">
                                        <div class="hc-pds-card">
                                            <div class="hc-pds-img">
                                                <a href="javascript:;">
                                                    <img src="./img/product_coffeeMaker_003.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hc-card-content-container">
                                                <div class="hc-card-content-title">
                                                    <h5>日本Kalita手沖壺(SSW 1000)</h5>
                                                </div>
                                                <div class="hc-card-content-price">
                                                    <span>NT$1,600</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ================================================= -->
            </div>
            <?php require_once 'tpl/foot.inc.php' ?>