<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Shareco-提携企業・協業パートナー募集">
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
    <title>SHARECO-提携企業・協業パートナー募集</title>
</head>

<body>
    <div class="wrap">
        @yield('header')
        <section class="banner _bg" style="background-image: url('../images/cooperate/banner.png');">
            <div class="banner_txt">
                <h1 data-aos="fade-up" data-aos-easing="ease-in-sine">提携企業・協業パートナー募集</h1>
            </div>
        </section>
        <section class="cooperate">
            <div class="container">
                <div class="cooperate_txt fz26pxto16" data-aos="fade-up" data-aos-easing="ease-in-sine">
                SHARECOでは、日本の皆様により良いサービスを提供するため、業務提携していただける企業様・個人様を募集しております。興味がある方は、お問い合わせ内容、ウェブサイトや公式SNSのリンク、実店舗名と住所などの情報を、メールでご送付ください。3日以内に担当者からご連絡致します。
                </div>
                <a class="border_btn" href="{{ route('contact') }}" data-aos="fade-up" data-aos-easing="ease-in-sine">その他連絡事項</a>
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
