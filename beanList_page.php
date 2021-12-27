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
                <div class="hc-left-side-bg" style="background: url(./img/beans_s_034.jpg) no-repeat; background-size: cover;">
                    <!-- ======================================================================================= add content -->
                    <!-- head -->
                    <div class="hc-top-menus">
                        <div class="hc-top-menu-container-pushTop">
                            <div class="hc-top-menu-control">
                                <!-- menu 1 -->
                                <div class="hc-top-menu">
                                    <a class="hc-top-menu-active" href="javascript:;">
                                        豆單
                                    </a>
                                </div>
                                <!-- menu 2 -->
                                <div class="hc-top-menu">
                                    <a href="javascript:;">
                                        嚴選商品
                                    </a>
                                </div>
                                <!-- menu 3 -->
                                <div class="hc-top-menu">
                                    <a href="javascript:;">
                                        熱銷排行
                                    </a>
                                </div>
                                <!-- menu 4 -->
                                <div class="hc-top-menu">
                                    <a href="javascript:;">
                                        咖啡器材
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
                                <div class="list list-drop hc-bean-menu-drop">
                                    <div class="first-list">
                                        <a class="hc-bean-menu-list" href="javascript:;">以酸度分類</a>
                                    </div>
                                    <ul class="list-drop-menu" style="display: block;">
                                        <li class="second-list">明亮酸</li>
                                        <li class="second-list">酸</li>
                                        <li class="second-list">柔和酸</li>
                                        <li class="second-list">不酸</li>
                                    </ul>

                                </div>
                                <div class="list list-drop hc-bean-menu-drop">
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
                <!-- ================================================= -->
            </div>

            <?php require_once 'tpl/foot.inc.php' ?>