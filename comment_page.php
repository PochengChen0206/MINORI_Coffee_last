<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINORI coffee</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="./lib/awesome.all.min.css">
    <!-- bootstrap@4.6 -->
    <link rel="stylesheet" href="./lib/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./css/index.css">
    <!-- comment css -->
    <link rel="stylesheet" href="./css/comment_page.css">
    <!-- star css -->
    <link rel="stylesheet" href="./css/star_style.css">
</head>

<body>
    <!-- header -->
    <header class="header">
        <!-- head-ly-top -->
        <div class="header-layerTop">
            <div class="header-container">
                <!-- icon top -->
                <div class="header-top-icon">
                    <div class="logo-img top-icon" style="width: 50px;">
                        <a href="landing_page.php">
                            <img src="./img/logo-m.png" alt="" style="width:100%;">
                        </a>
                    </div>
                    <div class="logo-btn top-icon" style="width: 50px; height: 50px;">
                        <!-- hamburger effect-->
                        <div class="hamburger-menu">
                            <input type="checkbox" id="menu-btn-check" style="display: none;" class="humburger">
                            <label for="menu-btn-check" class="menu-btn "><span></span></label>
                        </div>
                    </div>
                </div>
                <!-- icon bottom -->
                <div class="header-bottom-icon">
                    <div class="logo-img bottom-icon link-icon">
                        <a href="javascript:;"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="logo-img bottom-icon link-icon">
                        <a href="javascript:;"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="logo-img bottom-icon link-icon">
                        <a href="javascript:;"><i class="fab fa-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- head-ly-bottom -->
        <div class="header-layerBottom menu">
            <div class="menu_container">
                <!-- list -->
                <div class="list">
                    <a class="list-title" href="about_page.php">關於我們</a>
                </div>
                <div class="list">
                    <a href="javascript:;">最新消息</a>
                </div>
                <?php if (!isset($_SESSION['name'])) { ?>
                    <div class="list">
                        <a href="loginSignup.php" id="memberCenter">會員中心</a>
                    </div>
                <?php } else { ?>
                    <div class="list">
                        <a href="memberData.php" id="memberCenter">會員中心</a>
                    </div>
                <?php } ?>
                <div class="list">
                    <a class="list-title" href="javascript:;">咖啡地圖</a>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">所有商品</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1'>豆單</a>
                        </li>
                        <li class="second-list">
                            <a href='featured.php'>嚴選商品</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>熱銷排行</a>
                        </li>
                        <li class="second-list">
                            <a href='coffeeAccessories_page.php'>咖啡器材</a>
                        </li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">課程資訊</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='beanList_page.php'>企業包班</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>團體課程</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>個人課程</a>
                        </li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">常見問題</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='beanList_page.php'>購物流程</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>退換貨</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>課程募資</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header-m -->
    <header class="header-m">
        <!-- head-m-ly-top -->
        <div class="header-m-layerTop">
            <div class="header-m-container">
                <div class="header-m-control d-flex align-items-center">
                    <!-- hamburger effect-->
                    <div class="hamburger-m-menu">
                        <input type="checkbox" id="menu-btn-check" class="humburger-m">
                        <label for="menu-btn-check" class="menu-m-btn"><span></span></label>
                    </div>
                    <!-- logo -->
                    <div class="logo-img " style="width: 50px;">
                        <a href="landing_page.php"><img src="./img/logo-m.png" alt="" style="width:100%;"></a>
                    </div>
                    <!-- user -->
                    <div class="main-icon"><button class="icon-btn user-m-btn"><i class="fas fa-user"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- head-m-ly-bottom -->
        <div class="header-m-layerBottom menu-m">
            <div class="menu_m_container">
                <!-- main icon -->
                <div class="main-m-icons d-flex mb-4 pb-2">
                    <div class="main-icon"><i class="fas fa-gift"></i></div>
                    <div class="main-icon shopping-card">
                        <div class="nums">1</div> <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="main-icon search">
                        <!-- input -->
                        <input type="text" class="input search-m-input" placeholder="Search...">
                        <!-- button -->
                        <button class="icon-btn search-m-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- list -->
                <div class="list">
                    <a class="list-title" href="javascript:;">關於我們</a>
                </div>
                <div class="list">
                    <a href="javascript:;">最新消息</a>
                </div>
                <?php if (!isset($_SESSION['name'])) { ?>
                    <div class="list">
                        <a href="loginSignup.php" id="memberCenter">會員中心</a>
                    </div>
                <?php } else { ?>
                    <div class="list">
                        <a href="memberData.php" id="memberCenter">會員中心</a>
                    </div>
                <?php } ?>
                <div class="list">
                    <a class="list-title" href="javascript:;">咖啡地圖</a>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">所有商品</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='http://localhost/MINORI_Coffee_last/beanList_page.php?cat_id=1'>豆單</a>
                        </li>
                        <li class="second-list">
                            <a href='featured.php'>嚴選商品</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>熱銷排行</a>
                        </li>
                        <li class="second-list">
                            <a href='coffeeAccessories_page'>咖啡器材</a>
                        </li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">課程資訊</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='beanList_page.php'>企業包班</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>團體課程</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>個人課程</a>
                        </li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">常見問題</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">
                            <a href='beanList_page.php'>購物流程</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>退換貨</a>
                        </li>
                        <li class="second-list">
                            <a href='beanList_page.php'>課程募資</a>
                        </li>
                    </ul>
                </div>
                <!-- link -->
                <div class="link-icons d-flex">
                    <div class="logo-img link-icon link-m">
                        <a href="javascript:;"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="logo-img link-icon link-m">
                        <a href="javascript:;"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="logo-img link-icon link-m">
                        <a href="javascript:;"><i class="fab fa-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- head-m-sign out -->
        <div class="signOut-menu-m">
            <div class="signOut-menu-container">
                <?php if (isset($_SESSION['name'])) { ?>
                    <div class="pc-user signOut-list">
                        <a href="javascript:;">
                            <?= $_SESSION['name'] ?></a>
                    </div>
                <?php } ?>
                <?php if (!isset($_SESSION['name'])) { ?>
                    <div class="signOut-list">
                        <a href='loginSignup.php'>登入/註冊</a>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION['name'])) { ?>
                    <div class="signOut signOut-list">
                        <a href="#" id="logout">登出</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </header>
    <!-- main page -->
    <div class="container-fluid main-page">
        <div class="row">
            <!-- leftSide page -->
            <div class="left-side">
                <!-- ================================================= 新頁面加入 -->
                <div class="left-side-push100">
                    <div class="hc-left-side-bg" style="background: url(./img/products_comment.jpg) no-repeat; background-size: cover; background-position: center">
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
                                        <a class="hc-top-menu-active" href="order_tracking_page.php">
                                            訂單查詢
                                        </a>
                                    </div>
                                    <!-- menu 3 -->
                                    <div class="hc-top-menu">
                                        <a href="coupons_page.php">
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
                                    <span>首頁</span>
                                </a>
                                <span>/</span>
                                <a href="order_tracking_page.php" class="hc-page-title-menu">
                                    <span>訂單查詢</span>
                                </a>
                                <span>/</span>
                                <a href="javascript:;" class="hc-page-title-menu">
                                    <span>商品評價</span>
                                </a>
                            </div>
                            <!-- coupons products -->
                            <div class="hc-coupons-products-content">
                                <div class="hc-coupons-products-content-container">
                                    <div class="hc-main-title-control d-flex justify-content-between">
                                        <!-- title -->
                                        <div class="hc-main-title-en d-flex mb-4">COMMENT</div>
                                        <!-- filter -->
                                    </div>
                                    <!-- products content -->
                                    <div class="hc-products-grp">
                                        <div class="hc-comments-title-control d-flex justify-content-center">
                                            <h4 class="hc-comments-title">商品評價</h4>
                                        </div>
                                        <!-- product grp 1 -->
                                        <div class="hc-comments d-flex align-items-center flex-column">
                                            <!-- card -->
                                            <?php
                                            if (isset($_GET['order_id'])) {
                                                $sql = "SELECT `orders_detail`.`prod_name`,  `products`.`prod_thumbnail`, `email` 
                                                    FROM `orders_detail`
                                                    INNER JOIN `products`
                                                    ON `orders_detail`.`prod_id` = `products`.`id`
                                                    INNER JOIN `orders`
                                                    ON `orders_detail`.`order_id` = `orders`.`order_id`
                                                    WHERE `orders_detail`.`order_id`= '{$_GET['order_id']}'";
                                                $stmt = $pdo->query($sql);
                                                if ($stmt->rowCount() > 0) {
                                                    foreach ($stmt->fetchAll() as $obj) {
                                            ?>
                                                        <div class="hc-comment-card">
                                                            <div class="hc-comment-card-control">
                                                                <a class="hc-comment-card-link" href="javascript:;">
                                                                    <div class="hc-comment-img">
                                                                        <img src="<?= $obj['prod_thumbnail'] ?>" alt="">
                                                                    </div>
                                                                    <div class="hc-comment-content ">
                                                                        <h5 class="hc-comment-conten-title"><?= $obj['prod_name'] ?></h5>
                                                                        <div class="d-flex">
                                                                            <h6>評價</h6>
                                                                            <div class="hc-star-icon">
                                                                                <!-- =================================== star -->
                                                                                <!-- <ul class="d-flex">
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                    </ul> -->
                                                                                <div class="star-widget d-flex">
                                                                                    <div class="star-grp">
                                                                                        <input class="input" type="radio" name="rate" id="rate-5">
                                                                                        <label for="rate-5" class="fas fa-star hc-star"></label>
                                                                                    </div>

                                                                                    <div class="star-grp">
                                                                                        <input class="input" type="radio" name="rate" id="rate-4">
                                                                                        <label for="rate-4" class="fas fa-star hc-star"></label>
                                                                                    </div>

                                                                                    <div class="star-grp">
                                                                                        <input class="input" type="radio" name="rate" id="rate-3">
                                                                                        <label for="rate-3" class="fas fa-star hc-star"></label>
                                                                                    </div>
                                                                                    <div class="star-grp">
                                                                                        <input class="input" type="radio" name="rate" id="rate-2">
                                                                                        <label for="rate-2" class="fas fa-star hc-star"></label>
                                                                                    </div>
                                                                                    <div class="star-grp">
                                                                                        <input class="input" type="radio" name="rate" id="rate-1">
                                                                                        <label for="rate-1" class="fas fa-star hc-star"></label>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- =================================== -->
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <h6>內容</h6>
                                                                            <textarea class="hc-textarea" id="exampleFormControlTextarea1" placeholder="請分享您對於本商品的評價"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                            <!-- card 2-->
                                            <!-- <div class="hc-comment-card">
                                                <div class="hc-comment-card-control">
                                                    <a class="hc-comment-card-link" href="javascript:;">
                                                        <div class="hc-comment-img">
                                                            <img src="./img/product_coffeeMaker_002.jpg" alt="">
                                                        </div>
                                                        <div class="hc-comment-content ">
                                                            <h5 class="hc-comment-conten-title">水洗 蒲隆地 加賀處理廠（半磅起）</h5>
                                                            <div class="d-flex">
                                                                <h6>評價</h6>
                                                                <div class="hc-star-icon">
                                                                    <ul class="d-flex">
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h6>內容</h6>
                                                                <textarea class="hc-textarea" id="exampleFormControlTextarea1" placeholder="請分享您對於本商品的評價"></textarea>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- show more -->
                                        <div class="hc-showMore">
                                            <button class="hc-showMore-btn">Show
                                                More
                                            </button>
                                            <div class="hc-icon-down"><i class="fas fa-chevron-down"></i></div>
                                        </div>
                                        <!-- button -->
                                        <div class="hc-coupons-button">
                                            <a type="button" class="btn btn-outline-warning px-5 send-btn" href="javascript:;">送出</a>
                                        </div>
                                    </div>
                                    <!-- products content -->
                                    <div class="hc-products-grp hc-course-comment">
                                        <div class="hc-comments-title-control d-flex justify-content-center">
                                            <h4 class="hc-comments-title">課程回饋</h4>
                                        </div>
                                        <!-- product grp 1 -->
                                        <div class="hc-comments d-flex align-items-center flex-column">
                                            <!-- card -->
                                            <div class="hc-comment-card">
                                                <div class="hc-comment-card-control">
                                                    <a class="hc-comment-card-link" href="javascript:;">
                                                        <div class="hc-comment-img">
                                                            <img src="./img/course_001.jpg" alt="">
                                                        </div>
                                                        <div class="hc-comment-content ">
                                                            <h5 class="hc-comment-conten-title">手沖咖啡學｜搞懂原理，成為咖啡職人</h5>
                                                            <div class="d-flex">
                                                                <h6>評價</h6>
                                                                <div class="hc-star-icon">
                                                                    <ul class="d-flex">
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h6>內容</h6>
                                                                <textarea class="hc-textarea" id="exampleFormControlTextarea1" placeholder="請分享您對於本商品的評價"></textarea>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- card 2-->
                                            <div class="hc-comment-card">
                                                <div class="hc-comment-card-control">
                                                    <a class="hc-comment-card-link" href="javascript:;">
                                                        <div class="hc-comment-img">
                                                            <img src="./img/course_001.jpg" alt="">
                                                        </div>
                                                        <div class="hc-comment-content ">
                                                            <h5 class="hc-comment-conten-title">手沖咖啡學｜搞懂原理，成為咖啡職人</h5>
                                                            <div class="d-flex">
                                                                <h6>評價</h6>
                                                                <div class="hc-star-icon">
                                                                    <ul class="d-flex">
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star hc-star-active"></i>
                                                                        </li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h6>內容</h6>
                                                                <textarea class="hc-textarea" id="exampleFormControlTextarea1" placeholder="請分享您對於本商品的評價"></textarea>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- show more -->
                                        <div class="hc-showMore">
                                            <button class="hc-showMore-btn">Show
                                                More
                                            </button>
                                            <div class="hc-icon-down"><i class="fas fa-chevron-down"></i></div>
                                        </div>
                                        <!-- button -->
                                        <div class="hc-coupons-button">
                                            <a type="button" class="btn btn-outline-warning px-5" href="javascript:;">送出</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- page number -->
                    </div>
                    <!-- ================================================= -->
                </div>
                <!-- footer -->
                <div class="footer" style="background: url(./img/footer_bg.jpg) no-repeat; background-size: cover;">
                    <div class="footer_container">
                        <div div class="col-lg-12 footer-content">
                            <div class="footer-logo" style="width:20%">
                                <a href=""><img src="./img/logo.png" alt="" style="width: 100%;"></a>
                            </div>
                            <ul class="text-center d-flex flex-column ">
                                <li class="link_list">
                                    <a href="javascript:;">關於我們</a>
                                </li>
                                <li class="link_list">
                                    <a href="javascript:;">最新消息</a>
                                </li>
                                <li class="link_list">
                                    <a href="javascript:;">會員中心</a>
                                </li>
                                <li class="link_list">
                                    <a href="javascript:;">常見問題</a>
                                </li>
                            </ul>
                            <ul class="text-center d-flex flex-column ">
                                <li class="link_list">
                                    <a href="javascript:;">所有商品</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">豆單</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">嚴選商品</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">熱銷排行</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">咖啡器材</a>
                                </li>
                            </ul>
                            <ul class="text-center d-flex flex-column ">
                                <li class="link_list">
                                    <a href="javascript:;">課程資訊</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">企業包班</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">團體課程</a>
                                </li>
                                <li class="link_list" style="font-size:12px;">
                                    <a href="javascript:;">個人課程</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-bottom" style="font-size:10px;">
                            <p>版權所有 © minori. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
                <!-- footer-m -->
                <footer class="footer-m" style="background: url(./img/footer_bg.jpg) no-repeat;">
                    <div class="footer-m-content">
                        <div class="col-md-6 col-12 footer-img pt-5 pb-5">
                            <div class="img-container" style="width: 25%; margin: 0 auto;">
                                <a href=""><img src="./img/logo.png" alt="" style="width: 100%;"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 d-flex text-center pb-5">
                            <div class="col">
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">關於我們</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">最新消息</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">會員中心</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">常見問題</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">所有商品</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 12px;">豆單</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 12px;">嚴選商品</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 12px;">熱銷排行</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 12px;">咖啡器材</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">課程資訊</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 12px;">企業包班</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 12px;">團體課程</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white" style="font-size: 12px;">個人課程</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-m-bottom d-flex justify-content-center" style="color: #fff; font-size: 12px;">
                        <p>版權所有 © minori. All Rights Reserved.</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!--//////////////////////////////////////// script -->
    <!-- fontawesome -->
    <script src="./lib/awesome.all.min.js"></script>
    <!-- jQ -->
    <script src="./lib/jquery-3.6.0.min.js"></script>
    <!-- bootstrap@4.6 -->
    <script src="./lib/bootstrap.bundle.min.js"></script>
    <!-- js -->
    <script src="./js/index.js"></script>
    <script src="./js/login-and-signup.js"></script>
    <!-- star js -->
    <script src="./js/star.js"></script>
</body>

</html>