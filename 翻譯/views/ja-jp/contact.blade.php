<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Shareco-お問い合わせ">
    <meta name="keywords" content="Shareco">
    <meta name="image" property="og:image" content="../images/shareco_seo.jpg">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Sans+TC:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Sans+TC:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/aos.css">
	<title>SHARECO-お問い合わせ</title>
</head>

<body>
    <div class="wrap">
        @yield('header')
        <section class="banner _bg _contact" style="background-image: url('../images/contact/banner.png');">
            <div class="banner_txt">
                <h1 data-aos="fade-up">お問い合わせ</h1>
				<div class="banner_txt_rule fz26pxto16" data-aos="fade-up" data-aos-delay="100">
					SHARECOに関するより詳しい情報や業務提携に関するお問い合わせは、以下の情報をご参照のうえ、ご連絡ください。できる限り迅速に、担当者よりご連絡致します。
				</div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <ul class="contact_group">
                    <li class="contact_item">
                        <div class="contact_item_title">カスタマーサービスセンター</div>
                        <div class="contact_item_detail">
                            <span>+886-906-153688</span>
                            <span class="contact_item_mail" name="mailHandler" data-mail="コピーされました">info@shareco.me</span>
                        </div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_item_title">国内販売代理店</div>
                        <div class="contact_item_detail">
                            <span class="contact_item_mail" name="mailHandler"
                                data-mail="コピーされました">danny＠super-landing.com</span>
                        </div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_item_title">海外販売代理店</div>
                        <div class="contact_item_detail">
                            <span class="contact_item_mail" name="mailHandler"
                                data-mail="コピーされました">ann.yu@speeding-rocket.com</span>
                        </div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_item_title">広報・PRに関するお問い合わせ</div>
                        <div class="contact_item_detail">
                            <span class="contact_item_mail" name="mailHandler"
                                data-mail="コピーされました">emma.lin@speeding-rocket.com</span>
                        </div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_item_title">その他の業務提携</div>
                        <div class="contact_item_detail">
                            <span class="contact_item_mail" name="mailHandler"
                                data-mail="コピーされました">danny＠super-landing.com</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <footer id="footer" class="footer">
            @include('layout.footer')
        </footer>
    </div>


    <script src="../js/module.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/contact.js"></script>


    <script>
        AOS.init();
    </script>
</body>

</html>
