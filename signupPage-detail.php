<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signupPage</title>
    <!-- bootstrap@4.6 -->
    <link rel="stylesheet" href="./lib/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="./lib/awesome.all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login-and-signup.css">
    <!--jquery UI-->
    <link rel="stylesheet" href="./lib/jquery-ui.css">
</head>

<body>
    <!-- jQ -->
    <script src="./lib/jquery-3.6.0.min.js"></script>
    <!-- header -->
    <header class="header">
        <!-- head-ly-top -->
        <div class="header-layerTop">
            <div class="header-container">
                <!-- icon top -->
                <div class="header-top-icon">
                    <div class="logo-img top-icon" style="width: 50px;">
                        <a href="javascript:;">
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
                    <a class="list-title" href="javascript:;">關於我們</a>
                </div>
                <div class="list">
                    <a href="javascript:;">最新消息</a>
                </div>
                <div class="list">
                    <a href="javascript:;">會員中心</a>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">所有商品</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">豆單</li>
                        <li class="second-list">嚴選商品</li>
                        <li class="second-list">熱銷排行</li>
                        <li class="second-list">咖啡器材</li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">課程資訊</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">企業包班</li>
                        <li class="second-list">團體課程</li>
                        <li class="second-list">個人課程</li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">常見問題</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">購物流程</li>
                        <li class="second-list">退換貨</li>
                        <li class="second-list">課程募資</li>
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
                        <a href="javascript:;"><img src="./img/logo-m.png" alt="" style="width:100%;"></a>
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
                <div class="list">
                    <a href="javascript:;">會員中心</a>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">所有商品</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">豆單</li>
                        <li class="second-list">嚴選商品</li>
                        <li class="second-list">熱銷排行</li>
                        <li class="second-list">咖啡器材</li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">課程資訊</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">企業包班</li>
                        <li class="second-list">團體課程</li>
                        <li class="second-list">個人課程</li>
                    </ul>
                </div>
                <div class="list list-drop">
                    <div class="first-list">
                        <a href="javascript:;">常見問題</a>
                        <div class="icon list-icon"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    <ul class="list-drop-menu">
                        <li class="second-list">購物流程</li>
                        <li class="second-list">退換貨</li>
                        <li class="second-list">課程募資</li>
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
                <div class="user signOut-list">
                    <p>用戶 <a href="javascript:;">User</a></p>
                </div>
                <div class="signOut-list">
                    <div class="signOut-second-list">
                        <a href="javascript:;">登入/註冊</a>
                    </div>
                </div>
                <div class="signOut signOut-list">
                    <a href="javascript:;">登出</a>
                </div>
            </div>
        </div>
    </header>
    <!-- main page -->
    <div class="container-fluid main-page">
        <div class="row">
            <!-- leftSide page -->
            <div class="left-side">
                <div class="left-side-bg" style="background: url(./img/main_left.jpg) no-repeat; background-size: cover;">
                    <!-- ======================================================================================= add content -->

                </div>
            </div>
            <!-- rightSide page -->
            <div class="right-side">
                <div class="right-side-content">
                    <!-- right header -->
                    <div class="right-side-header">
                        <!-- main icon  每一頁都要放不更動-->
                        <div class="r-side-header-container main-icons">
                            <div class="main-icon"><button class="icon-btn user-btn"><i class="fas fa-user"></i></button></div>
                            <div class="main-icon shopping-card">
                                <div class="nums" id="count_products">
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        echo count($_SESSION['cart']);
                                    } else {
                                        echo 0;
                                    }
                                    ?></div>
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div class="main-icon"><i class="fas fa-gift"></i></div>
                            <div class="main-icon search" method="get" action="search.php">
                                <!-- input -->
                                <input type="text" class="input search-input" placeholder="Search..." name="keyword">
                                <!-- button -->
                                <button class="icon-btn search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <!-- sign out  每一頁都要放不更動-->
                        <div class="signOut-menu dropdown-menu-sw">
                            <div class="signOut-menu-container">
                                <!-- 要登入才會顯現會員名稱 -->
                                <?php if (isset($_SESSION['name'])) { ?>
                                    <div class="pc-user signOut-list">
                                        <a href="javascript:;">
                                            <?= $_SESSION['name'] ?></a>
                                    </div>
                                <?php } ?>
                                <div class="signOut-list">
                                    <div class="signOut-second-list">
                                        <a href="javascript:;">登入/註冊</a>
                                    </div>
                                </div>
                                <?php if (isset($_SESSION['name'])) { ?>
                                    <div class="signOut signOut-list">
                                        <a href="#" id="logout">登出</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- ================================================= 新頁面加入 -->
                    <div class=" signupPage d-flex flex-column justify-content-center">
                        <div class="signupPage-content container">
                            <h2 class="signupPage-title text-center">個人資料</h2>
                            <form class="row g-3" id="myForm">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label" style="color: #95720C;">姓名</label>
                                    <input type="text" class="form-control" id="name" placeholder="請填寫您的姓名">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label" style="color: #95720C;">生日</label>
                                    <input type="text" class="form-control" id="birthdate" placeholder="請填寫您的生日">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="inputEmail4" class="form-label" style="color: #95720C;">手機號碼</label>
                                    <input type="text" class="form-control" id="phonenum" placeholder="請填寫您的手機號碼">
                                </div>
                                <div class="col-12 mt-2">
                                    <label for="inputAddress" class="form-label" style="color: #95720C;">通訊地址</label>
                                    <input type="text" class="form-control" id="address" placeholder="請填寫您的通訊地址">
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
                                    <button type="submit" class="btn btn-outline-warning px-5" id="btn_register">儲存</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ================================================= -->

                    <!-- footer -->
                    <div class="footer" style="background: url(./img/footer_bg.jpg) no-repeat;">
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
        <!-- jquery UI-->
        <script src="./lib/jquery-ui.min.js"></script>
        <!-- fontawesome -->
        <script src="./lib/awesome.all.min.js"></script>
        <!-- bootstrap@4.6 -->
        <script src="./lib/bootstrap.min.js"></script>
        <!-- js -->
        <script src="./js/index.js"></script>


</body>

</html>