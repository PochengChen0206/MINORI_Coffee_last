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
                <div class="hc-left-side-bg" style="background: url(./img/beans_s_034.jpg) no-repeat; background-size: cover;">
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
                                <!-- menu 1 -->
                                <!-- <div class="hc-top-menu">
                                    <a class="hc-top-menu-active" href="javascript:;">
                                        豆單
                                    </a>
                                </div> -->
                                <!-- menu 2 -->
                                <!-- <div class="hc-top-menu">
                                    <a href="javascript:;">
                                        嚴選商品
                                    </a>
                                </div> -->
                                <!-- menu 3 -->
                                <!-- <div class="hc-top-menu">
                                    <a href="javascript:;">
                                        熱銷排行
                                    </a>
                                </div> -->
                                <!-- menu 4 -->
                                <!-- <div class="hc-top-menu">
                                    <a href="javascript:;">
                                        咖啡器材
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- 左側頁面內容 -->
                    <div class="hc-left-side-content">
                        <div class="hc-left-side-container">
                            <?php if (isset($_GET['cat_id'])) { ?>
                                <div class="hc-bean-menu">
                                    <!-- menu list -->
                                    <?php $sql = "SELECT `id`, `cat_name` FROM `categories`WHERE`parent_id`= {$_GET['cat_id']}";
                                    $arr1 = $pdo->query($sql);
                                    foreach ($arr1 as $obj1) {
                                    ?>
                                        <div class="list list-drop hc-bean-menu-drop">
                                        <?= $obj1['cat_name'] ?>
                                            
                                            <ul class="list-drop-menu" style="display: block;">
                                            <!-- B  -->
                                                <?php $sql = "SELECT `id`, `cat_name`
                                                          FROM `categories`
                                                          WHERE `parent_id` = {$obj1['id']}";
                                                $arr2 = $pdo->query($sql);
                                                foreach ($arr2 as $obj2) {
                                                ?>
                                                <!-- B child -->
                                                    <li class="second-list">
                                                        <a href="beanList_page.php?cat_id=<?= $_GET['cat_id'] ?>$sub_cat_id=?<?= $obj2['id'] ?>"><?= $obj2['id'] ?></a>
                                                    </li>
                                                <?php
                                                }
                                                ?>
                                                <!-- <li class="second-list">酸</li>
                                                <li class="second-list">柔和酸</li>
                                                <li class="second-list">不酸</li> -->
                                            </ul>
                                        </div>
                                    <?php } ?>
                                    <!-- <div class="list list-drop hc-bean-menu-drop">
                                        <div class="first-list">
                                            <a class="hc-bean-menu-list" href="javascript:;">以洲別分類</a>
                                        </div>
                                        <ul class="list-drop-menu" style="display: block;">
                                            <li class="second-list">中南美洲</li>
                                            <li class="second-list">非洲</li>
                                            <li class="second-list">亞洲</li>
                                        </ul>
                                    </div>
                                    <div class="list list-drop hc-bean-menu-drop">
                                        <div class="first-list">
                                            <a class="hc-bean-menu-list" href="javascript:;">以處理法分類</a>
                                        </div>
                                        <ul class="list-drop-menu" style="display: block;">
                                            <li class="second-list">日曬</li>
                                            <li class="second-list">水洗</li>
                                            <li class="second-list">蜜處理</li>
                                            <li class="second-list">特殊</li>
                                        </ul>
                                    </div>
                                    <div class="list list-drop hc-bean-menu-drop">
                                        <div class="first-list">
                                            <a class="hc-bean-menu-list" href="javascript:;">以烘培度分類</a>
                                        </div>
                                        <ul class="list-drop-menu" style="display: block;">
                                            <li class="second-list">淺焙</li>
                                            <li class="second-list">中淺焙</li>
                                            <li class="second-list">中焙</li>
                                            <li class="second-list">中深焙</li>
                                        </ul>
                                    </div> -->
                                </div>
                            <?php } ?>
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
                                <span>所有商品</span>
                            </a>
                            <span>/</span>
                            <a href="javascript:;" class="hc-page-title-menu">
                                <span>豆單</span>
                            </a>
                        </div>
                        <!-- bean products -->
                        <div class="hc-coffee-products-content">
                            <div class="hc-coffee-products-content-container">
                                <div class="hc-main-title-control d-flex justify-content-between">
                                    <!-- title -->
                                    <div class="hc-main-title-en d-flex mb-4">COFFEE</div>
                                    <!-- filter -->
                                    <div class="hc-main-filter-control">
                                        <div class="hc-main-filter d-flex">
                                            <h6>商品排序</h6>
                                            <div class="icon list-icon hc-filter-icon"><i class="fas fa-chevron-down"></i></div>
                                        </div>
                                        <ul class="hc-drop-lists">
                                            <li class="hc-drop-list">價格 高-低</li>
                                            <li class="hc-drop-list">價格 低-高</li>
                                            <li class="hc-drop-list">日期 新-舊</li>
                                            <li class="hc-drop-list">日期 舊-新</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- products content -->
                                <div class="hc-products-grp">
                                    <!-- product grp 1 -->
                                    <div class="hc-products-grp-control">
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
                                        <!-- product card 4 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/beans_s_001.jpg" alt="">
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
                                        <!-- product card 5 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/beans_s_002.jpg" alt="">
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
                                        <!-- product card 6 -->
                                        <div class="hc-pds-card-control col-lg-4 col-md-6">
                                            <div class="hc-pds-card">
                                                <div class="hc-pds-img">
                                                    <a href="javascript:;">
                                                        <img src="./img/beans_s_004.jpg" alt="">
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
                    <!-- page number -->
                    <div class="hc-page-number">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <!-- 第1頁 -->
                                <li class="page-item">
                                    <a class="page-link" href="javascript:;">
                                        <i class="fas fa-backward"></i>
                                    </a>
                                </li>
                                <!-- 上一頁 -->
                                <li class="page-item">
                                    <a class="page-link" href="javascript:;">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                <!-- 中間頁 -->
                                <li class="page-item">
                                    <a class="page-link page-link-active" href="javascript:;">
                                        1
                                    </a>
                                </li>
                                <!-- 下一頁 -->
                                <li class="page-item">
                                    <a class="page-link" href="javascript:;">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                                <!-- 最後1頁 -->
                                <li class="page-item">
                                    <a class="page-link" href="javascript:;">
                                        <i class="fas fa-forward"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- ================================================= -->
            </div>
            <?php require_once 'tpl/foot.inc.php' ?>