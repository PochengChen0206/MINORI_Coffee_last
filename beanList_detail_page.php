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
        <?php
        if (isset($_GET['prod_id'])) {
            $sql = "SELECT * FROM `products` WHERE `id` = {$_GET['prod_id']}";
            $stmt = $pdo->query($sql);
            if ($stmt->rowCount() > 0) {
                $obj = $stmt->fetch();
                // echo "<pre>";
                // print_r($obj);
                // echo "</pre>";
        ?>
                <!-- leftSide page -->
                <div class="left-side">
                    <!-- ================================================= 新頁面加入 -->
                    <div class="left-side-push100">
                        <div class="hc-left-side-bg" style="background: url(<?= $obj['prod_image'] ?>) no-repeat; background-size: cover;">
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
                                    <a href="javascript:;" class="hc-page-title-menu">
                                        <span>首頁</span>
                                    </a>
                                    <span>/</span>
                                    <a href="javascript:;" class="hc-page-title-menu">
                                        <span>豆單</span>
                                    </a>
                                    <span>/</span>
                                    <a href="javascript:;" class="hc-page-title-menu">
                                        <span><?= $obj['prod_name'] ?></span>
                                    </a>
                                </div>
                                <!-- bean products -->
                                <div class="hc-coffee-products-content">
                                    <div class="hc-coffee-products-content-container">
                                        <div class="hc-main-title-control d-flex justify-content-between">
                                            <!-- title -->
                                            <div class="hc-main-title-en d-flex mb-4">COFFEE</div>
                                        </div>
                                        <!-- products content -->
                                        <div class="hc-products-detail-grp">
                                            <div class="hc-products-detail-control">
                                                <div class="hc-products-name">
                                                    <h3 class="hc-name"><?= $obj['prod_name'] ?></h3>
                                                </div>
                                                <h4 class="hc-products-price">NT$<?= $obj['prod_price'] ?></h4>
                                                <div class="hc-products-list-grp hc-flavor d-flex">
                                                    <div class="hc-products-list-secondTitle">
                                                        <h5>風味</h5>
                                                    </div>
                                                    <p><?= $obj['prod_description'] ?></p>
                                                </div>
                                                <div class="hc-products-content hc-products-bottomLine">
                                                    <div class="hc-products-content-title">
                                                        <h5>咖啡豆分類</h5>
                                                    </div>
                                                    <div class="hc-products-list-grp d-flex">
                                                        <div class="hc-products-list-secondTitle">
                                                            <h5>烘培</h5>
                                                        </div>
                                                        <div class="hc-process-control d-flex">
                                                            <p>淺培</p>
                                                            <div class="hc-process d-flex align-items-center">
                                                                <div class="hc-process-box hc-process-active"></div>
                                                                <div class="hc-process-box hc-process-active"></div>
                                                                <div class="hc-process-box hc-process-active"></div>
                                                                <div class="hc-process-box"></div>
                                                                <div class="hc-process-box"></div>
                                                            </div>
                                                            <p>中深培</p>
                                                        </div>
                                                    </div>
                                                    <div class="hc-products-list-grp d-flex">
                                                        <div class="hc-products-list-secondTitle">
                                                            <h5>酸度</h5>
                                                        </div>
                                                        <div class="hc-process-control d-flex">
                                                            <p>不酸</p>
                                                            <div class="hc-process d-flex align-items-center">
                                                                <div class="hc-process-box hc-process-active"></div>
                                                                <div class="hc-process-box hc-process-active"></div>
                                                                <div class="hc-process-box"></div>
                                                                <div class="hc-process-box"></div>
                                                                <div class="hc-process-box"></div>
                                                            </div>
                                                            <p>明亮酸</p>
                                                        </div>
                                                    </div>
                                                    <div class="hc-products-list-grp d-flex">
                                                        <div class="hc-products-list-secondTitle">
                                                            <h5>產地</h5>
                                                        </div>
                                                        <p><?= $obj['prod_area'] ?></p>
                                                    </div>
                                                    <div class="hc-products-list-grp d-flex">
                                                        <div class="hc-products-list-secondTitle">
                                                            <h5>處理法</h5>
                                                        </div>
                                                        <p><?= $obj['prod_process'] ?></p>
                                                    </div>
                                                    <!-- process btn -->
                                                    <div class="hc-btn-grp">
                                                        <div class="hc-products-list-grp hc-process-part2-grp d-flex">
                                                            <div class="hc-products-list-secondTitle">
                                                                <h5>重量</h5>
                                                            </div>
                                                            <?php
                                                            $sql = "SELECT `id`, `coffee_size`  FROM`prod_weight` WHERE `prod_id` = {$_GET['prod_id']}";
                                                            $arr2 = $pdo->query($sql)->fetchAll();
                                                            foreach ($arr2 as $obj2) {
                                                            ?>
                                                                <div class="hc-process-control d-flex">
                                                                    <button class="hc-process-btn"><?= $obj2['coffee_size'] ?></button>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="hc-products-list-grp hc-process-part2-grp d-flex">
                                                            <div class="hc-products-list-secondTitle">
                                                                <h5>磨豆</h5>
                                                            </div>
                                                            <?php
                                                            $sql = "SELECT `id`, `coffee_grind`  FROM`prod_grind` WHERE `prod_id` = {$_GET['prod_id']}";
                                                            $arr3 = $pdo->query($sql)->fetchAll();
                                                            foreach ($arr3 as $obj3) {
                                                            ?>
                                                                <div class="hc-process-control d-flex">
                                                                    <button class="hc-process-btn"><?= $obj3['coffee_grind'] ?></button>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
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
                                                                <a type="button" class="btn btn-outline-warning px-4" href='signupPage.php' id="pc-asapBuy">立即購買</a>
                                                                <a type="button" class="btn btn-outline-warning px-4 ml-2" href='signupPage.php' id="pc-joiningg">加入購物車</a>
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
                                                            <img src="./img/product_bean_001.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="hc-card-content-container">
                                                        <div class="hc-card-content-title">
                                                            <h5>耶加雪菲 晨之莓</h5>
                                                        </div>
                                                        <div class="hc-card-content-price">
                                                            <span>NT$199 ~ NT$1,599</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product card 2 -->
                                            <div class="hc-pds-card-control col-lg-4 col-md-6">
                                                <div class="hc-pds-card">
                                                    <div class="hc-pds-img">
                                                        <a href="javascript:;">
                                                            <img src="./img/product_bean_002.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="hc-card-content-container">
                                                        <div class="hc-card-content-title">
                                                            <h5>耶加雪菲 晨之莓</h5>
                                                        </div>
                                                        <div class="hc-card-content-price">
                                                            <span>NT$199 ~ NT$1,599</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product card 3 -->
                                            <div class="hc-pds-card-control col-lg-4 col-md-6">
                                                <div class="hc-pds-card">
                                                    <div class="hc-pds-img">
                                                        <a href="javascript:;">
                                                            <img src="./img/product_bean_003.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="hc-card-content-container">
                                                        <div class="hc-card-content-title">
                                                            <h5>耶加雪菲 晨之莓</h5>
                                                        </div>
                                                        <div class="hc-card-content-price">
                                                            <span>NT$199 ~ NT$1,599</span>
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

            <?php
            }
        }
            ?>
            <?php require_once 'tpl/foot.inc.php' ?>