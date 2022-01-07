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
                <div class="hc-left-side-bg" style="background: url(./img/coffee-class_05.jpg) no-repeat; background-size: cover;">
                    <!-- ======================================================================================= add content -->
                    <!-- head -->
                    <div class="hc-top-menus">
                        <div class="hc-top-menu-container-pushTop">
                            <div class="hc-top-menu-control">
                                <!-- menu 1 -->
                                <div class="hc-top-menu">
                                    <a href="#">
                                        企業包班
                                    </a>
                                </div>
                                <!-- menu 2 -->
                                <div class="hc-top-menu">
                                    <a href="javascript:;">
                                        團體課程
                                    </a>
                                </div>
                                <!-- menu 3 -->
                                <div class="hc-top-menu">
                                    <a class="hc-top-menu-active" href="#">
                                        個人課程
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hc-left-side-content">
                        <div class="yc-left-info">
                            <h3 class="yc-left-side-title">熱愛精進咖啡知識的您絕不能錯過！</h3>
                            <p class="yc-left-side-text">minori開設各種咖啡相關課程</p>
                            <p class="yc-left-side-text">入門課程 : 簡易咖啡入門、拉花，到學習烘焙咖啡豆技巧與認識烘焙曲線圖，理解烘焙過程中的化學反應與物理變化。</p>
                            <p class="yc-left-side-text">進階課程 : 聞香瓶訓練與杯測分析，讓您喝懂咖啡，也在烘焙世界裡更游刃有餘。</p>
                            <p class="yc-left-side-text">豐富多樣的課程供您選擇，點選右邊資訊欄了解更多。</p>
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
            <div class="hc-coffee-products">
                <!-- box -->
                <div class="hc-box-title" style="background: url(./img/bg-gold.jpg);">
                </div>
                <!-- coffee products -->
                <div class="hc-coffee-products-container hc-shopping-bg">
                    <!-- page title -->
                    <div class="hc-page-title">
                        <a href="javascript:;" class="hc-page-title-menu">
                            <span>首頁 / 個人課程</span>
                        </a>
                        <span>/</span>
                        <a href="javascript:;" class="hc-page-title-menu">
                            <span>入門課程</span>
                        </a>
                    </div>
                    <div class="container">
                        <div class="yc-card mb-3 " style="max-width: 740px;">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <img src="./img/coffee-class.jpg" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="yc-card-body">
                                        <h5 class="yc-card-title">手沖咖啡學｜搞懂原理，成為咖啡職人</h5>
                                        <p class="yc-card-text">讓講究的手沖咖啡儀式融入你我的生活中

                                            手沖咖啡，是一個充滿藝術的科學，從咖啡豆挑選(淺、中、深焙)、水溫、磨豆、沖煮手法，即使是同一款豆子，不同沖煮，就會因為些微的因子改變，呈現出迥然不同的味道。
                                        </p>
                                        <p class="card-text"><small class="text-muted">NT$1,599</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="yc-card mb-3" style="max-width: 740px;">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <img src="./img/coffee-class.jpg" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="yc-card-body">
                                        <h5 class="yc-card-title">咖啡豆烘焙｜實務課程</h5>
                                        <p class="yc-card-text">
                                            根據人類飲食文明的經驗法則，烹調食物的原則，不外就是為了易消化、好吸收以及創造美味口感，咖啡烘焙也是如此。不當的烘焙，使人無法吸收，也將美味破壞殆盡，適當的烘焙，不但不會引起身體的不適，還能將營養成分以迷人的風味樣貌呈現。
                                        </p>
                                        <p class="yc-card-text"><small class="text-muted">NT$1,599</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="yc-left-side-title">
                            進階課程
                        </div>
                        <div class="yc-card mb-3" style="max-width: 740px;">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <img src="./img/coffee-class.jpg" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="yc-card-body">
                                        <h5 class="yc-card-title">手沖咖啡技法精華班</h5>
                                        <p class="yc-card-text">有多久沒有靜下心來，好好為自己沖一杯咖啡？
                                            燒一壺水，研磨咖啡。溫過壺，細細地沖落。有如和自己約會，聞著咖啡的香氣，享受一杯咖啡的時光。
                                            在所有的咖啡沖煮方式裡，手沖咖啡有著他自己最獨特的魅力。</p>
                                        <p class="yc-card-text"><small class="text-muted">NT$1,599</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="yc-card mb-3" style="max-width: 740px;">
                            <div class="row no-gutters">
                                <div class="yc-classimg col-md-6">
                                    <img src="./img/coffee-class.jpg" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="yc-card-body">
                                        <h5 class="yc-card-title">感官品鑑｜實務課程</h5>
                                        <p class="yc-card-text">你曾在喝下一口咖啡時，感到喜悅嗎? 那份喜悅可能來自記憶中的某段連結。
                                            感官是一項很神奇的能力，讓我們分辨好壞，或是享受樂趣。
                                            感官除了自我記憶連結外，也可作為溝通的橋樑，不論是購買、介紹還是分享，都適合建立起良好的感官能力。</p>
                                        <p class="yc-card-text"><small class="text-muted">NT$1,599</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require_once 'tpl/pageNumber.inc.php' ?>
            </div>
            <!-- ================================================= -->
        </div>
        <!-- footer -->
        <?php require_once 'tpl/foot.inc.php' ?>