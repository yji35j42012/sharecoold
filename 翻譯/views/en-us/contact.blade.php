<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Shareco-聯絡我們">
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
	<title>SHARECO-Contact Us</title>
</head>

<body>
    <div class="wrap">
        @yield('header')
        <section class="banner _bg _contact" style="background-image: url('../images/contact/banner.png');">
            <div class="banner_txt">
				<h1 data-aos="fade-up">Contact Us</h1>
                <div class="banner_txt_rule fz26pxto16" data-aos="fade-up" data-aos-delay="100">如果你喜歡
                    If you are a fan of SHARECO and our vision, have any questions or would like to receive more
					information as well as offer collaborations, please contact us using one of the following methods.
					We will get back to you as soon as possible.
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <ul class="contact_group">
                    <li class="contact_item">
                        <div class="contact_item_title">Customer Service</div>
                        <div class="contact_item_detail">
                            <span>+886-906-153688</span>
                            <span class="contact_item_mail" name="mailHandler" data-mail="Copied">info@shareco.me</span>
                        </div>
                    </li>
                    <li class="contact_item">
						<div class="contact_item_title">Domestic Distribution</div>
                        <div class="contact_item_detail">
                            <span class="contact_item_mail" name="mailHandler"
                                data-mail="Copied">danny＠super-landing.com</span>
                        </div>
                    </li>
                    <li class="contact_item">
						<div class="contact_item_title">International Distribution</div>
                        <div class="contact_item_detail">
                            <span class="contact_item_mail" name="mailHandler"
                                data-mail="Copied">ann.yu@speeding-rocket.com</span>
                        </div>
                    </li>
                    <li class="contact_item">
						<div class="contact_item_title">Press and Public Relations</div>
                        <div class="contact_item_detail">
                            <span class="contact_item_mail" name="mailHandler"
                                data-mail="Copied">emma.lin@speeding-rocket.com</span>
                        </div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_item_title">Other Collaborations</div>
                        <div class="contact_item_detail">
                            <span class="contact_item_mail" name="mailHandler"
                                data-mail="Copied">danny＠super-landing.com</span>
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
