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
                        <?php require_once 'tpl/beanList_detail.inc.php' ?>
                        <!-- ================================================= -->
                    </div>
            <?php
            }
        }
            ?>
            <?php require_once 'tpl/foot.inc.php' ?>