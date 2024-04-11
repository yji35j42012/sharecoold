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
    <title>SHARECO-Collaborations</title>
</head>

<body>
    <div class="wrap">
        @yield('header')
        <section class="banner _bg" style="background-image: url('../images/cooperate/banner.png');">
            <div class="banner_txt">
                <h1 data-aos="fade-up" data-aos-easing="ease-in-sine">Collaborations</h1>
            </div>
        </section>
        <section class="cooperate">
            <div class="container">
                <div class="cooperate_txt fz26pxto16" data-aos="fade-up" data-aos-easing="ease-in-sine">
                    We welcome collaborations! Please provide us with relevant information such as: contact details,
                    website/social media page link, store front name and address, etc. Email us these details and we’ll
                    get back to you within three business days!
                </div>
                <a class="border_btn" href="{{ route('contact') }}" data-aos="fade-up" data-aos-easing="ease-in-sine">Other Contact Methods</a>
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
