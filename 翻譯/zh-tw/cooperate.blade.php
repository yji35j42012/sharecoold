<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Shareco-合作方式">
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
    <title>SHARECO-合作方式</title>
</head>

<body>
    <div class="wrap">
        @yield('header')
        <section class="banner _bg" style="background-image: url('../images/cooperate/banner.png');">
            <div class="banner_txt">
                <h1 data-aos="fade-up" data-aos-easing="ease-in-sine">合作方式</h1>
            </div>
        </section>
        <section class="cooperate">
            <div class="container">
                <div class="cooperate_txt fz26pxto16" data-aos="fade-up" data-aos-easing="ease-in-sine">
                    歡迎你與 SHARECO 合作，請備妥「聯繫資訊、網站/粉專網頁、實體店名與
                    地址」等資料，以 e-mail 方式聯繫我們，將有專人於 3 天內與您聯繫。
                </div>
                <a class="border_btn" href="{{ route('contact') }}" data-aos="fade-up" data-aos-easing="ease-in-sine">其他聯繫方式</a>
            </div>
        </section>
        <footer id="footer" class="footer">
            @include('layout.footer')
        </footer>
    </div>


    <script src="../js/module.js"></script>
    <script src="../js/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
