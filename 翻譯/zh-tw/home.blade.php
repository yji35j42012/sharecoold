<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Shareco">
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
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}">
    <title>SHARECO</title>
</head>

<body>
    <div id="wrap" class="wrap _home">

        @yield('header')

        <div id="home" class="home">
            <div class="home_bg room"></div>
            <div id="tree_scene" class="home_tree room">
                <img data-depth="0.5" src="../images/home/treel.png" alt="SHARECO">
            </div>
            <div id="lion_scene" class="home_lion room">
                <img data-depth="0.5" src="../images/home/lion.png" alt="SHARECO">
            </div>
            <div id="straw_scene" class="home_straw room">
                <img data-depth="2.5" id="straw_img1" src="../images/home/straw.png" alt="SHARECO">
            </div>
            <div id="grass_scene" class="home_grass room">
                <img data-depth="0.5" src="../images/home/grass.png" alt="SHARECO">
            </div>
            <div id="plant_scene" class="home_plant room">
                <img data-depth="0.5" src="../images/home/plant.png" alt="SHARECO">
            </div>
            <div id="bird_scene" class="home_bird room">
                <img data-depth="4" src="../images/home/bird.png" alt="SHARECO">
            </div>
            <div id="flyl_scene" class="home_flyl room">
                <img data-depth="3" src="../images/home/flyl.png" alt="SHARECO">
            </div>
            <div id="flyr_scene" class="home_flyr room">
                <img data-depth="0.5" src="../images/home/flyr.png" alt="SHARECO">
            </div>
            <div class="home_logo room">
                <img src="../images/home/logo.svg" alt="SHARECO">
            </div>
            <div class="home_linear room"></div>
            <div id="txt_scene" class="home_txt room">
                <span data-depth="0.2" class="home_txt_box">
                    <div class="home_txt_title">
                        Desire · Addiction
                    </div>
                    <div class="home_txt_since">since 2016</div>
                    <button id="home_btn" class="home_txt_btn">Enter</button>
                </span>
            </div>
        </div>
        <div id="home_second" class="home_video">
            <div class="home_video_box">
                <div id="player"></div>
                <button id="home_video1Handler1" class="home_video_sound _quiet"></button>
            </div>
        </div>
        <div id="home_third" class="home_third">
            <div class="home_third_box">
                <div class="home_third_liner"></div>
                <div class="home_third_txt">我們都經歷過成長過程中的 struggle</div>
                <div class="home_third_txt _right">我們都質疑過自己在這個世界的位置</div>
            </div>
        </div>
        <div id="home_forth" class="home_forth">
            <div class="home_forth_box">
                <div class="home_forth_txt">
                    面對內在與外在的衝突 <br>
                    友情、親情、愛情、壓抑、自我認同問題<br>
                    SHARECO 想透過香氣與服飾 保存心中那段<br>
                    對任何事物都超有感覺的青春歲月
                </div>
            </div>
        </div>
        <div id="home_fifth" class="home_fifth">
            <div class="home_fifth_box1">
                <div class="home_fifth_bg1">
                    <img class="pc" src="../images/home/fifth_grass_top.png" alt="">
                    <img class="pc" src="../images/home/fifth_grass_down.png" alt="">
                    <img class="ph _p2" src="../images/home/m_open_2_grass_up.png" alt="">
                    <img class="ph _p1" src="../images/home/m_open_2_grass_down.png" alt="">

                </div>
                <div class="home_fifth_animal" data-txt="Attraction is not a choice">
                    <img src="../images/home/fifth_bird.png" alt="">
                    <img src="../images/home/fifth_bee1.png" alt="">
                    <img src="../images/home/fifth_bee2.png" alt="">
                    <img src="../images/home/fifth_bee1.png" alt="">
                </div>
            </div>
            <div class="home_fifth_bg2"></div>
            <div class="home_fifth_box2">
                <video id="fifth_video" class="pc" width="100%" height="100%" muted loop autoplay
                    src="../images/home/smoke_video.mp4"></video>
                <span class="home_fifth_ph ph">
                    <video id="fifth_video_m" width="100%" height="100%" muted loop autoplay
                        src="../images/home/mobile_smoke_video.mp4"></video>
                </span>
                <span id="fifth_video_lin" class="home_fifth_lin" style="display: none"></span>
                <img class="" src="../images/home/fifth_background_3.png" alt="">
                <div class="home_fifth_txt">
                    黑暗面，也是自我組成的一部分 <br>
                    這部分有多壓抑、就有多渴望展現出來
                </div>
                <div class="home_fifth_bee pc">
                    <img src="../images/home/flyl.png" alt="">
                </div>
            </div>
        </div>
        <div id="home_six" class="home_six">
            <div class="home_six_box">
                <div class="home_six_bg">
                    <span>
                        <img class="pc" src="../images/home/six_background1.png" alt="">
                        <img class="ph" src="../images/home/six_background1_ph.jpeg" alt="">
                    </span>
                    <span><img src="../images/home/six_background2.png" alt=""></span>
                </div>
                <div class="home_six_txt">
                    <span>
                        對那些能夠激發我們黑暗面的人 <br>
                        會有一種讓人沈迷的吸引力 <br>
                        這種人格特質散發的 “味道” 就是 SHARECO
                    </span>
                </div>
            </div>
        </div>
        <div id="home_seven" class="home_seven">
            <div class="home_seven_box">
                <div class="home_seven_bg"></div>
                <div class="home_seven_txt">
                    <a class="border_btn _back" href="./story.html">品牌故事</a>
                </div>
                <footer class="footer">
                    <div class="footer_box">
                        <ul class="footer_nav">
                            <li class="footer_nav_item fz14to12">品牌故事</li>
                            <li class="footer_nav_item fz14to12"><a class="footer_nav_title"
                                    href="contact.html">聯絡我們</a></li>
                            <li class="footer_nav_item fz14to12"><a class="footer_nav_title"
                                    href="rule.html">商標及應用準則</a></li>
                            <li class="footer_nav_item fz14to12"><a class="footer_nav_title"
                                    href="usually.html">常用連結</a></li>
                            <li class="footer_nav_item fz14to12"><a class="footer_nav_title"
                                    href="privacy.html">隱私權與政策</a></li>
                        </ul>
                        <ul class="footer_link">
                            <li class="footer_link_icon _fb">
                                <a href="https://www.facebook.com/Share.co.tw" target="_blank"></a>
                            </li>
                            <li class="footer_link_icon _ig">
                                <a href="https://www.instagram.com/share.co.design/" target="_blank"></a>
                            </li>
                        </ul>
                        <p class="copyRight">Copyright © 2023 SHARECO | All Rights Reserved</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/pallax.js') }}"></script>
    <script src="{{ asset('/js/module.js') }}"></script>
    <script src="{{ asset('/js/home.js') }}"></script>
</body>

</html>
