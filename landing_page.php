<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>

<?php require_once 'tpl/head.inc.php' ?>

<!-- main page -->
<div class="container-fluid main-page">
    <div class="row">
        <!-- leftSide page -->
        <div class="left-side">
            <div class="left-side-bg">
                <!-- ======================================================================================= add content -->
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
                <div class="hc-landing-page">
                    <div class="landing-page-content" style="background: url(./img/bg-dark.png) repeat;">
                        <div class="hc-first-page" style="background: url(./img/main_right.jpg) no-repeat; background-size: cover;">
                        </div>
                        <div class="hc-first-page-bottom d-flex justify-content-center align-items-center">
                            <div class="hc-first-page-bottom-control">
                                実りある
                            </div>
                        </div>
                        <!-- main-page -->
                        <div class="hc-main-page">
                            <div class="hc-main-container">
                                <!-- about -->
                                <div class="hc-main-about">
                                    <div class="hc-about-container hc-about-bg">
                                        <!-- title -->
                                        <div class="hc-main-title-control d-flex flex-row-reverse">
                                            <div class="hc-main-title d-flex">
                                                <div class="hc-more"> <span>more</span>
                                                    <div class="hc-line-control d-flex align-items-center">
                                                        <div class="hc-line"></div>
                                                        <div class="hc-more-icon"><a href="javascript:;">
                                                                <i class="fas fa-angle-right"></i>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="hc-text"><a href="javascript:;">
                                                        <h4>關於我們</h4>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="hc-main-title-en d-flex flex-row-reverse mb-4">ABOUT US</div>
                                        <!-- main content -->
                                        <div class="hc-about-content d-flex flex-row-reverse mb-4">
                                            <div class="hc-about-content-control">
                                                <div class="hc-about-content-title">
                                                    <h5>淬鍊過後的美好，讓生活更豐富充實</h5>
                                                </div>
                                                <div class="hc-about-content-p">
                                                    <p> Minori源自日文実りある，実り(みのり)有充實、豐富的意思，希望透過每一杯咖啡的傳遞，啟發並滋潤人們的心靈，把全世界最好咖啡分享給你們。
                                                    </p>
                                                    <p> 1998年四位愛好咖啡的同好共同創立於台灣，嚴選咖啡風味與品質把關，提供不同產區的精品咖啡豆，讓對咖啡挑嘴的您，可以一次滿足您的需求。
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hc-about-lists d-flex">
                                            <div class="hc-about-list">
                                                <div class="hc-about-list-img">
                                                    <img src="./img/insist_1.jpg" alt="">
                                                </div>
                                                <span>烘豆師精選配方咖啡豆</span>
                                            </div>
                                            <div class="hc-about-list">
                                                <div class="hc-about-list-img"><img src="./img/insist_2.jpg" alt="">
                                                </div>
                                                <span>天然無污染的新鮮食材</span>
                                            </div>
                                            <div class="hc-about-list">
                                                <div class="hc-about-list-img" style="background-size: cover;"><img src="./img/insist_3.jpg" alt="">
                                                </div>
                                                <span>在家就能品嘗嚴選咖啡</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- news -->
                                <div class="hc-main-news">
                                    <div class="hc-news-container">
                                        <!-- title -->
                                        <div class="hc-main-title-control d-flex flex-row-reverse">
                                            <div class="hc-main-title d-flex">

                                                <div class="hc-text"><a href="javascript:;">
                                                        <h4>最新消息</h4>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="hc-main-title-en d-flex flex-row-reverse mb-4">NEWS</div>
                                        <!-- box -->
                                        <div class="hc-box-title" style="background: url(./img/bg-gold.jpg);">
                                        </div>
                                        <!-- cards -->
                                        <div class="hc-news-cards d-flex justify-content-center align-item-center">
                                            <!-- card 01 -->
                                            <div class="hc-card">
                                                <div class="hc-card-control d-flex flex-column">
                                                    <div class="hc-child-card1 hc-child-card hc-first-card hc-news-bg-01">
                                                        <a href="javascript:;"><span>咖啡專欄</span> </a>
                                                    </div>
                                                    <div class="hc-child-card2 hc-child-card hc-news-bg-02">
                                                        <a href="javascript:;"><span>試飲包</span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card 02 -->
                                            <div class="hc-card hc-mid-card">
                                                <div class="hc-card-control d-flex flex-column">
                                                    <div class="hc-child-card2 hc-child-card hc-first-card hc-news-bg-03">
                                                        <a href="javascript:;"><span>新品上市</span> </a>
                                                    </div>
                                                    <div class="hc-child-card1 hc-child-card hc-news-bg-04">
                                                        <a href="javascript:;"><span>最新課程</span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card 03 -->
                                            <div class="hc-card">
                                                <div class="hc-card-control d-flex flex-column">
                                                    <div class="hc-child-card1 hc-child-card hc-first-card hc-news-bg-05">
                                                        <a href="javascript:;"><span>優惠活動</span> </a>
                                                    </div>
                                                    <div class="hc-child-card2 hc-child-card hc-news-bg-06">
                                                        <a href="javascript:;"><span>熱銷商品</span> </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- products 1-->
                                <div class="hc-main-products">
                                    <div class="hc-products-container">
                                        <!-- title -->
                                        <div class="hc-main-title-control d-flex flex-row-reverse">
                                            <div class="hc-main-title d-flex">
                                                <div class="hc-more"> <span>more</span>
                                                    <div class="hc-line-control d-flex align-items-center">
                                                        <div class="hc-line"></div>
                                                        <div class="hc-more-icon"><a href="javascript:;">
                                                                <i class="fas fa-angle-right"></i>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="hc-text"><a href="javascript:;">
                                                        <h4>嚴選商品</h4>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="hc-main-title-en d-flex flex-row-reverse mb-4">COFFEE</div>
                                        <!-- box -->
                                        <div class="hc-box-title" style="background: url(./img/bg-gold.jpg);">
                                        </div>
                                        <!-- product card -->
                                        <div class="hc-products-cards">
                                            <div class="hc-pds-card-control d-flex">
                                                <!-- card 1 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card">
                                                        <div class="hc-pds-img">
                                                            <img src="./img/beans_s_002.jpg" alt="">
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

                                                <!-- card 2 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card hc-pds-card-mid">
                                                        <div class="hc-pds-img">
                                                            <img src="./img/beans_s_004.jpg" alt="">
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
                                                <!-- card 3 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card">
                                                        <div class="hc-pds-img">
                                                            <img src="./img/beans_s_013.jpg" alt="">
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
                                <!-- products 2-->
                                <div class="hc-main-products">
                                    <div class="hc-products-container">
                                        <!-- title -->
                                        <div class="hc-main-title-control d-flex flex-row-reverse">
                                            <div class="hc-main-title d-flex">
                                                <div class="hc-more"> <span>more</span>
                                                    <div class="hc-line-control d-flex align-items-center">
                                                        <div class="hc-line"></div>
                                                        <div class="hc-more-icon"><a href="javascript:;">
                                                                <i class="fas fa-angle-right"></i>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="hc-text"><a href="javascript:;">
                                                        <h4>熱銷排行</h4>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="hc-main-title-en d-flex flex-row-reverse mb-4">COFFEE</div>

                                        <!-- product card -->
                                        <div class="hc-products-cards">
                                            <div class="hc-pds-card-control d-flex">
                                                <!-- card 1 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card">
                                                        <div class="hc-pds-img">
                                                            <img src="./img/beans_s_005.jpg" alt="">
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
                                                <!-- card 2 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card hc-pds-card-mid">
                                                        <div class="hc-pds-img">
                                                            <img src="./img/beans_s_034.jpg" alt="">
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
                                                <!-- card 3 -->
                                                <div class="hc-pds">
                                                    <div class="hc-pds-card">
                                                        <div class="hc-pds-img">
                                                            <img src="./img/beans_s_009.jpg" alt="">
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
                                <!-- course -->
                                <div class="hc-main-courses">
                                    <div class="hc-courses-container">
                                        <!-- title -->
                                        <div class="hc-main-title-control d-flex flex-row-reverse">
                                            <div class="hc-main-title d-flex">
                                                <div class="hc-more"> <span>more</span>
                                                    <div class="hc-line-control d-flex align-items-center">
                                                        <div class="hc-line"></div>
                                                        <div class="hc-more-icon"><a href="javascript:;">
                                                                <i class="fas fa-angle-right"></i>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="hc-text"><a href="javascript:;">
                                                        <h4>課程資訊</h4>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="hc-main-title-en d-flex flex-row-reverse mb-4">COURSE</div>
                                        <!-- box -->
                                        <div class="hc-box-title" style="background: url(./img/bg-gold.jpg);">
                                        </div>
                                        <!-- carousel -->
                                        <div class="hc-carousel">
                                            <div class="hc-carousel-container">
                                                <!-- ============================ slide-->
                                                <div class="splide">
                                                    <div class="splide__track">
                                                        <ul class="splide__list">
                                                            <!-- list 01 -->
                                                            <li class="splide__slide hc-slide">
                                                                <div class="hc-slide-control">
                                                                    <div class="hc-slide-img">
                                                                        <img src="./img/course_001.jpg" alt="">
                                                                    </div>
                                                                    <div class="hc-slide-content">
                                                                        <div class="slide-container">
                                                                            <div class="slide-content-top-num">
                                                                                <span>01</span>
                                                                                <div class="line-sp"></div>
                                                                                <span>03</span>
                                                                            </div>
                                                                            <div class="slide-content-card">
                                                                                <h5>個人課程</h5>
                                                                                <p>拉花、咖啡入門、手沖入門，愛鑽研咖啡知識的您，歡迎來與我們交流。
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- list 02 -->
                                                            <li class="splide__slide hc-slide">
                                                                <div class="hc-slide-control">
                                                                    <div class="hc-slide-img">
                                                                        <img src="./img/course_002.jpg" alt="">
                                                                    </div>
                                                                    <div class="hc-slide-content">
                                                                        <div class="slide-container">
                                                                            <div class="slide-content-top-num">
                                                                                <span>02</span>
                                                                                <div class="line-sp"></div>
                                                                                <span>03</span>
                                                                            </div>
                                                                            <div class="slide-content-card">
                                                                                <h5>團體課程</h5>
                                                                                <p>10人以上即可團體報名，優惠更多，快和三五好友一同參與！
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- list 03 -->
                                                            <li class="splide__slide hc-slide">
                                                                <div class="hc-slide-control">
                                                                    <div class="hc-slide-img">
                                                                        <img src="./img/course_003.jpg" alt="">
                                                                    </div>
                                                                    <div class="hc-slide-content">
                                                                        <div class="slide-container">
                                                                            <div class="slide-content-top-num">
                                                                                <span>03</span>
                                                                                <div class="line-sp"></div>
                                                                                <span>03</span>
                                                                            </div>
                                                                            <div class="slide-content-card">
                                                                                <h5>企業包班</h5>
                                                                                <p>企業福利首選，提升企業凝聚力的最佳選擇!
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- ============================ -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ================================================= -->

                <?php require_once 'tpl/foot.inc.php' ?>