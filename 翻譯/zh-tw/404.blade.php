<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Shareco-404">
    <meta name="keywords" content="Shareco">
    <meta name="image" property="og:image" content="../images/shareco_seo.jpg">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Sans+TC:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <title>SHARECO-404</title>
</head>

<body>
    <div class="wrap">
        <header id="header" class="header">
            <h1 class="logo">
                <a href="home.html"><img src="../images/logo.svg" alt="SHARECO"></a>
            </h1>
            <ul class="nav">
                <li class="nav_item fz18to16" name="nav_item">
                    <span class="nav_item_title">關於 SHARECO</span>
                    <ul class="nav_sec">
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="story.html">
                                <span>品牌故事</span>
                            </a>
                        </li>
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="spokesman.html">
                                <span>品牌代言人</span>
                            </a>
                        </li>
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="gallery.html">
                                <span>Gallery</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item fz18to16" name="nav_item">
                    <span class="nav_item_title">產品列表</span>
                    <ul class="nav_sec">
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="product_parfums.html">
                                <span>PARFUMS 香精香水</span>
                            </a>
                        </li>
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="product_venus.html">
                                <span>VENUS FLYTRAP 捕蠅草擴香</span>
                            </a>
                        </li>
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="product_shower.html">
                                <span>BATHING 洗沐系列</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav_item fz18to16" name="nav_item">
                    <span class="nav_item_title">銷售據點</span>
                    <ul class="nav_sec">
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="store.html">
                                <span>銷售據點</span>
                            </a>
                        </li>
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="cooperate.html">
                                <span>全球經銷合作</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item show_ph fz18to16" name="nav_item">
                    <a class="nav_item_title" href="contact.html">
                        <span>聯絡我們</span>
                    </a>
                </li>
            </ul>
            <div id="lang" class="lang">
                <i class="lang_btn"></i>
                <!-- 打開在class 加上 on -->
                <ul id="lang_group" class="lang_group">
                    <li data-lang="zh-tw" class="on">繁中</li>
                    <li data-lang="zh-cn">简中</li>
                    <li data-lang="en-us">EN</li>
                    <li data-lang="ja-jp">日本語</li>
                </ul>
            </div>
            <button id="nav_btn" class="nav_btn">
                <span class="nav_btn_line"></span>
            </button>
        </header>
        <div class="error">
            <h1>
                Oops！你想找的頁面好像迷路了 <br>
                資訊人員正在努力尋找它
            </h1>
            <a href="./home.html" class="border_btn _back">回到首頁</a>
        </div>
        @include('layout.footer')
    </div>

    <script src="../js/module.js"></script>
    <script src="../js/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
