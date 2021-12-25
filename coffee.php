<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php require_once 'tpl/head.inc.php' ?>
<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <div class="left-side-bg" style="position: fixed; width: inherit; height: 100%; background:url(./img/beans_l_031.jpg) no-repeat; background-size:cover;">
                <!-- ======================================================================================= add content -->
                <div class="pc-coffee-left d-flex  justify-content-around">
                    <div class="pc-coffee-item px-4" style="border-bottom: 1px solid #95720C;">
                        <a href="#" id="beanslist" style="color: #95720C;">
                            豆單
                        </a>
                    </div>
                    <div class="pc-coffee-item px-4">
                        <a a href="#">
                            嚴選商品
                        </a>
                    </div>
                    <div class="pc-coffee-item px-4">
                        <a href="#">
                            熱銷排行
                        </a>
                    </div>
                    <div class="pc-coffee-item px-4">
                        <a href="#">
                            咖啡器材
                        </a>
                    </div>
                </div>
                <div class="coffee-categories container">
                    <div class="pc-coffee-list d-flex justify-content-around">
                        <ul>
                            <h4>以酸度分類</h4>
                            <a href="">
                                <li></li>
                            </a>
                            <a href="">
                                <li></li>
                            </a>
                            <a href="">
                                <li></li>
                            </a>
                            <a href="">
                                <li></li>
                            </a>
                        </ul>
                        <ul>
                            <h4>以洲別分類</h4>
                            <a href="">
                                <li></li>
                            </a>
                            <a href="">
                                <li></li>
                            </a>
                            <a href="">
                                <li></li>
                            </a>
                        </ul>
                    </div>
                    <div class="pc-coffee-list d-flex">

                    </div>

                </div>
            </div>
        </div>
        <!-- rightSide page -->
        <div class="right-side">
            <div class="right-side-content">
                <!-- right header -->
                <div class="right-side-header">
                    <!-- main icon -->
                    <?php require_once 'tpl/mainicon.inc.php' ?>
                    <!-- sign out -->
                    <?php require_once 'tpl/signout.inc.php' ?>
                </div>
                <!-- ================================================= 新頁面加入 -->

                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>