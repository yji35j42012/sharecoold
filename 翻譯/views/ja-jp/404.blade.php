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
                    <span class="nav_item_title">SHARECOについて</span>
                    <ul class="nav_sec">
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="story.html">
                                <span>ブランドストーリー</span>
                            </a>
                        </li>
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="spokesman.html">
                                <span>SHARECOアンバサダー</span>
                            </a>
                        </li>
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="gallery.html">
                                <span>ギャラリー</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item fz18to16" name="nav_item">
                    <span class="nav_item_title">商品一覧</span>
                    <ul class="nav_sec">
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="product_parfums.html">
                                <span>PARFUMS フレグランス</span>
                            </a>
                        </li>
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="product_venus.html">
                                <span>VENUS FLYTRAP ヴィーナスフライトラップリードディフューザ</span>
                            </a>
                        </li>
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="product_shower.html">
                                <span>Bathing バス＆ボディケアシリーズお</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav_item fz18to16" name="nav_item">
                    <span class="nav_item_title">販売拠点</span>
                    <ul class="nav_sec">
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="store.html">
                                <span>販売拠点</span>
                            </a>
                        </li>
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="cooperate.html">
                                <span>グローバル拠点情報</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item show_ph fz18to16" name="nav_item">
                    <a class="nav_item_title" href="contact.html">
                        <span>お問い合わせ</span>
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
                お探しのページは見つかりませんでした。 <br>
                現在、担当者が対応中です。
            </h1>
            <a href="./home.html" class="border_btn _back">ホームに戻る</a>
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
