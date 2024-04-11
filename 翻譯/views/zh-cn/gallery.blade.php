<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Shareco-Gallery">
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
    <title>SHARECO-Gallery</title>
</head>

<body>
    <div class="wrap _gallery">
        @yield('header')
        <section class="gallery">
            @php
                $galId = 0;
            @endphp
            @foreach ($galleries as $idx => $gallery)
                <div class="gallery_first">
                    <h1>{{ $gallery->title }}</h1>
                    <p class="gallery_txt">
                        {{ $gallery->brief }}
                    </p>
                    <div id="video_box{{ $idx + 1 }}" class="gallery_video"
                        @if (empty($gallery->video_path)) style="display:none;" @endif>
                        <div class="gallery_video_box">
                            <div id="player{{ $idx + 1 }}"></div>
                            <button id="videoHandler{{ $idx + 1 }}" class="gallery_video_sound _quiet"></button>
                        </div>
                    </div>
                    <h4 data-aos="fade-up">{{ $gallery->tier2_title }}</h4>
                    <p class="gallery_txt line" data-aos="fade-up" data-aos-delay="50">
                        {{ $gallery->tier2_brief }}
                    </p>
                </div>

                <div class="gallery_sec">
                    <div class="gallery_swiper">
                        <button id="swiper{{ $idx + 1 }}_prev" class="gallery_swiper_btn _prev"></button>
                        <div class="gallery_swiper_box">
                            <ul id="swiper{{ $idx + 1 }}_group" class="gallery_swiper_group">
                                @foreach ($gallery->files as $file)
                                    @if ($file->tier == 2)
                                        @php
                                            $image = json_decode($file->path);
                                            $galId += 1;
                                        @endphp
                                        <li class="gallery_swiper_item" name="swiperHandler"
                                            data-galId="{{ $galId }}">
                                            <img src="{{ $image[0]->response->url }}" alt="{{ $file->name }}">
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <button id="swiper{{ $idx + 1 }}_next" class="gallery_swiper_btn _next"></button>
                        <ul id="swiper{{ $idx + 1 }}_dots" class="dots">
                            <!-- <li class="dots_item on"></li>
                                <li class="dots_item"></li> -->
                        </ul>
                    </div>

                    <!-- aos-animate -->

                    <ul class="gallery_photo" data-aos="">
                        @foreach ($gallery->files as $file)
                            @if ($file->tier == 3)
                                @php
                                    $image = json_decode($file->path);
                                @endphp
                                <li class="gallery_photo_item">
                                    <img src="{{ $image[0]->response->url }}" alt="{{ $file->name }}">
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endforeach
            {{-- <div class="gallery_first">
                <h1>SHARECO × 24HRS × LIFESTYLE</h1>
                <p class="gallery_txt">Odors have a power of persuasion stronger
                    than that of words, appearances or
                    will.SHARECO, <span>using the most direct odor tomake you feel the fine atmosphere.</span></p>
                <div id="video_box1" class="gallery_video">
                    <div class="gallery_video_box">
                        <div id="player1"></div>
                        <button id="videoHandler1" class="gallery_video_sound _quiet"></button>
                    </div>
                </div>
                <h4 data-aos="fade-up">I breath of opulence</h4>
                <p class="gallery_txt line" data-aos="fade-up" data-aos-delay="50">Odors have a power of persuasion
                    stronger than that of words,
                    appearances or
                    will.SHARECO, <span>using the most direct odor tomake you feel the fine atmosphere.</span></p>
            </div>

            <div class="gallery_sec">
                <div class="gallery_swiper">
                    <button id="swiper1_prev" class="gallery_swiper_btn _prev"></button>
                    <div class="gallery_swiper_box">
                        <ul id="swiper1_group" class="gallery_swiper_group">
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="1">
                                <img src="../images/gallery/perfume_photot_1.jpg" alt="SHARECO 裸麝香">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="2">
                                <img src="../images/gallery/perfume_photot_2.jpg" alt="SHARECO 麝掠香">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="3">
                                <img src="../images/gallery/perfume_photot_3.jpg" alt="SHARECO 迷幻灵魂">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="4">
                                <img src="../images/gallery/perfume_photot_4.png" alt="SHARECO 焚香草">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="5">
                                <img src="../images/gallery/perfume_photot_5.jpg" alt="SHARECO 黑水香树">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="6">
                                <img src="../images/gallery/perfume_photot_6.png" alt="SHARECO 捕蝇草">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="7">
                                <img src="../images/gallery/perfume_photot_7.jpg" alt="SHARECO 琥珀檀香">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="8">
                                <img src="../images/gallery/perfume_photot_8.png" alt="SHARECO 清醒梦">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="9">
                                <img src="../images/gallery/perfume_photot_9.png" alt="SHARECO 维吉尼亚麝香">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="10">
                                <img src="../images/gallery/perfume_photot_10.png" alt="SHARECO 大麻麝香">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="11">
                                <img src="../images/gallery/perfume_photot_11.png" alt=" SHARECO 琥珀莱姆">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="12">
                                <img src="../images/gallery/perfume_photot_12.png" alt=" SHARECO 奇迹罂粟">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="13">
                                <img src="../images/gallery/perfume_photot_13.png" alt=" SHARECO 能量麝香">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="14">
                                <img src="../images/gallery/perfume_photot_14.png" alt=" SHARECO 皇家橡树">
                            </li>
                        </ul>
                    </div>
                    <button id="swiper1_next" class="gallery_swiper_btn _next"></button>
                    <ul id="swiper1_dots" class="dots">
                        <!-- <li class="dots_item on"></li>
      <li class="dots_item"></li> -->
                    </ul>
                </div>

                <!-- aos-animate -->

                <ul class="gallery_photo" data-aos="">
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_1.png" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_2.png" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_3.png" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_4.png" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_5.png" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_6.png" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_7.png" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_8.png" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_9.png" alt="SHARECO">
                    </li>
                </ul>
            </div>

            <div class="gallery_third">
                <h1 data-aos="fade-up">BATHING</h1>
                <p data-aos="fade-up" data-aos-delay="50" class="gallery_txt">Odors have a power of persuasion
                    stronger
                    than that of words,
                    appearances or
                    will.SHARECO, <span>using the most direct odor tomake you feel the fine atmosphere.</span></p>
                <div id="video_box2" class="gallery_video">
                    <div class="gallery_video_box">
                        <div id="player2"></div>
                        <button id="videoHandler2" class="gallery_video_sound _quiet"></button>
                    </div>
                </div>
                <h4 data-aos="fade-up">Bathing</h4>
                <p class="gallery_txt line" data-aos="fade-up" data-aos-delay="50">Odors have a power of persuasion
                    stronger than that of words, appearances or
                    will.SHARECO, <span>using the most direct odor tomake you feel the fine atmosphere.</span></p>
            </div>

            <div class="gallery_forth">
                <div class="gallery_swiper">
                    <button id="swiper2_prev" class="gallery_swiper_btn _prev"></button>
                    <div class="gallery_swiper_box">
                        <ul id="swiper2_group" class="gallery_swiper_group">
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="15">
                                <img src="../images/gallery/bathing_photo_1.png" alt="SHARECO 雪松麝香 沐浴胶">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="16">
                                <img src="../images/gallery/bathing_photo_2.png" alt="SHARECO 菸草香 沐浴胶">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="17">
                                <img src="../images/gallery/bathing_photo_3.png" alt="SHARECO 木曜森林 沐浴胶">
                            </li>
                            <li class="gallery_swiper_item" name="swiperHandler" data-galId="18">
                                <img src="../images/gallery/bathing_photo_4.png" alt="SHARECO 大麻士革 洗发胶">
                            </li>
                        </ul>
                    </div>
                    <button id="swiper2_next" class="gallery_swiper_btn _next"></button>
                    <ul id="swiper2_dots" class="dots">
                        <!-- <li class="dots_item on"></li>
       <li class="dots_item"></li> -->
                    </ul>
                </div>
                <ul class="gallery_photo" data-aos="">
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_10.jpg" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_11.jpg" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_12.jpg" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_13.jpg" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_14.png" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_15.jpg" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_16.jpg" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_17.jpg" alt="SHARECO">
                    </li>
                    <li class="gallery_photo_item">
                        <img src="../images/gallery/photot_18.jpg" alt="SHARECO">
                    </li>
                </ul>
            </div> --}}
        </section>
        <footer id="footer" class="footer">
            @include('layout.footer')
        </footer>

        <div id="alert" class="alert">
            <div id="alert_lightBox" class="alert_lightBox">
                <button id="alert_close" class="alert_close"></button>
                <ul class="alert_lightBox_head">
                    <li id="show_photo" class="alert_lightBox_logo">
                        <img id="gal_photo" src="../images/gallery/perfume_name_photot_1.png" alt="SHARECO">
                    </li>
                    <li id="gal_year" class="alert_lightBox_year fz26pxto16"></li>
                    <li id="gal_name" class="alert_lightBox_name fz26pxto16"></li>
                    <li id="gal_detail" class="alert_lightBox_detail fz14to12"></li>
                </ul>
                <div id="gal_picOutside" class="alert_lightBox_pic">
                    <img id="gal_pic" src="" alt="SHARECO">
                </div>
                <div id="gal_txt" class="alert_lightBox_txt">
                    Odors have a power of persuasion stronger than that of words, appearances or will.SHARECO, <br>
                    <span>using the most direct odor tomake you feel the fine atmosphere.</span>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/module.js"></script>
    {{-- <script src="{{ asset('/js/gallery.js') }}"></script> --}}
    <script type="text/javascript">
        var header = document.querySelector("#header");
        var headerH = header.offsetHeight
        var scrollTop = window.pageYOffset;
        var windowH = window.innerHeight;



        var tag = document.createElement("script");
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName("script")[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        @foreach ($galleries as $k => $v)
            var video_box{{ $k + 1 }} = document.querySelector("#video_box{{ $k + 1 }}");
            var v{{ $k + 1 }}T = video_box{{ $k + 1 }}.offsetTop
            var v{{ $k + 1 }}H = video_box{{ $k + 1 }}.offsetHeight
            var v{{ $k + 1 }}Max = v{{ $k + 1 }}T + v{{ $k + 1 }}H - headerH + windowH

            var player{{ $k + 1 }};
        @endforeach

        function onYouTubeIframeAPIReady() {
            @foreach ($galleries as $k => $v)
                player{{ $k + 1 }} = new YT.Player("player{{ $k + 1 }}", {
                    width: "100%",
                    height: "100%",
                    videoId: "{{ $v->video_path }}",
                    playerVars: {
                        playlist: "{{ $v->video_path }}",
                        autoplay: {{ $k == 0 ? 1 : 0 }},
                        loop: 1,
                        controls: 0,
                        playsinline: 1,
                        rel: 0,
                        autohide: 1, // Hide video controls when playing
                    },
                    events: {
                        onReady: onPlayerReady{{ $k > 0 ? $k + 1 : '' }}
                    }
                });
            @endforeach
        }

        @foreach ($galleries as $k => $v)
            function onPlayerReady{{ $k > 0 ? $k + 1 : '' }}(event) {
                event.target.setVolume(0);
                event.target.setLoop(true);

                if (screen == 'ph') {
                    event.target.mute();
                }

                if (scrollTop + windowH > v{{ $k + 1 }}T && scrollTop + windowH < v{{ $k + 1 }}Max) {
                    event.target.playVideo();
                }
            }

            var videoHandler{{ $k + 1 }} = document.querySelector("#videoHandler{{ $k + 1 }}");

            videoHandler{{ $k + 1 }}.onclick = function() {
                if (videoHandler{{ $k + 1 }}.classList.contains("_quiet")) {
                    videoHandler{{ $k + 1 }}.classList.remove("_quiet");
                    videoHandler{{ $k + 1 }}.classList.add("_voiced");
                    player{{ $k + 1 }}.setVolume(100);
                } else {
                    videoHandler{{ $k + 1 }}.classList.remove("_voiced");
                    videoHandler{{ $k + 1 }}.classList.add("_quiet");
                    player{{ $k + 1 }}.setVolume(0);
                }
            };
        @endforeach

        window.addEventListener("scroll", (event) => {
            scrollTop = window.pageYOffset;
            windowH = window.innerHeight;
            if (screen == 'ph') {
                @foreach ($galleries as $k => $v)
                    v{{ $k + 1 }}T = video_box{{ $k + 1 }}.offsetTop
                    v{{ $k + 1 }}H = video_box{{ $k + 1 }}.offsetHeight
                    v{{ $k + 1 }}Max = v{{ $k + 1 }}T + v{{ $k + 1 }}H - headerH + windowH
                @endforeach
            }
            videoHandler(scrollTop + windowH)
        });

        function videoHandler(num) {
            @foreach ($galleries as $k => $v)
                if (num > v{{ $k + 1 }}T && num < v{{ $k + 1 }}Max) {
                    player{{ $k + 1 }}.playVideo();
                } else if (num > v{{ $k + 1 }}Max && player{{ $k + 1 }}) {
                    player{{ $k + 1 }}.pauseVideo();
                }
            @endforeach
            // if (num > v2T && num < v2Max && player2) {
            //     player2.playVideo();
            // } else if (num > v2Max || num < v2T && player2) {
            //     player2.pauseVideo();
            // }
        }

        @foreach ($galleries as $k => $v)
            @php
                if (count($v->files_tier2) == 0) {
                    continue;
                }
            @endphp
            var swiper{{ $k + 1 }}_prev = document.querySelector("#swiper{{ $k + 1 }}_prev");
            var swiper{{ $k + 1 }}_next = document.querySelector("#swiper{{ $k + 1 }}_next");
            var swiper{{ $k + 1 }}_group = document.querySelector("#swiper{{ $k + 1 }}_group");
            var swiper{{ $k + 1 }}_dots = document.querySelector("#swiper{{ $k + 1 }}_dots");
            var swiper{{ $k + 1 }}_dots_item = null;
            var swiper{{ $k + 1 }}_item = document.querySelectorAll(
                "#swiper{{ $k + 1 }}_group .gallery_swiper_item"
            );
            var swiper{{ $k + 1 }}_count = 0;
            var swiper{{ $k + 1 }}_max =
                screen == "pc" ?
                Math.ceil(swiper{{ $k + 1 }}_item.length / 4) :
                Math.ceil(swiper{{ $k + 1 }}_item.length / 2);

            var swiper{{ $k + 1 }}_moveNum = 0;

            function swiper{{ $k + 1 }}MoveHandler(e) {
                swiper{{ $k + 1 }}_group.style =
                    `transform: translateX(${swiper{{ $k + 1 }}_moveNum}%);transition-duration: 0.3s;opacity:1;`;
            }

            swiper{{ $k + 1 }}_prev.onclick = function() {
                if (swiper{{ $k + 1 }}_count == 0) {
                    swiper{{ $k + 1 }}_count = swiper{{ $k + 1 }}_max - 1;
                } else {
                    swiper{{ $k + 1 }}_count--;
                }
                swiper{{ $k + 1 }}_moveNum = -100 * swiper{{ $k + 1 }}_count;
                swiper{{ $k + 1 }}MoveHandler();
                dotsSwiper{{ $k + 1 }}Handler();
            };

            swiper{{ $k + 1 }}_next.onclick = function() {
                if (swiper{{ $k + 1 }}_count + 1 >= swiper{{ $k + 1 }}_max) {
                    swiper{{ $k + 1 }}_count = 0;
                } else {
                    swiper{{ $k + 1 }}_count++;
                }
                swiper{{ $k + 1 }}_moveNum = -100 * swiper{{ $k + 1 }}_count;
                swiper{{ $k + 1 }}MoveHandler();
                dotsSwiper{{ $k + 1 }}Handler();
            };

            function allDots{{ $k + 1 }}RemoveSwiper{{ $k + 1 }}() {
                for (let i = 0; i < swiper{{ $k + 1 }}_dots_item.length; i++) {
                    const element = swiper{{ $k + 1 }}_dots_item[i];
                    element.classList.remove("on");
                }
            }

            function dotsSwiper{{ $k + 1 }}Handler() {
                allDots{{ $k + 1 }}RemoveSwiper{{ $k + 1 }}();
                swiper{{ $k + 1 }}_dots_item[swiper{{ $k + 1 }}_count].classList.add("on");
            }

            function pushDots{{ $k + 1 }}() {
                swiper{{ $k + 1 }}_dots.innerHTML = "";
                for (let i = 0; i < swiper{{ $k + 1 }}_max; i++) {
                    const liDot = document.createElement("li");
                    liDot.setAttribute("class", "dots_item");
                    swiper{{ $k + 1 }}_dots.append(liDot);
                }
                swiper{{ $k + 1 }}_dots_item = document.querySelectorAll("#swiper{{ $k + 1 }}_dots > li");
                dotsSwiper{{ $k + 1 }}Handler();
                dotSwiper{{ $k + 1 }}Item();
            }

            function dotSwiper{{ $k + 1 }}Item() {
                for (let i = 0; i < swiper{{ $k + 1 }}_dots_item.length; i++) {
                    const element = swiper{{ $k + 1 }}_dots_item[i];
                    element.onclick = function() {
                        swiper{{ $k + 1 }}_count = i;
                        swiper{{ $k + 1 }}_moveNum = -100 * swiper{{ $k + 1 }}_count;
                        swiper{{ $k + 1 }}MoveHandler();
                        dotsSwiper{{ $k + 1 }}Handler();
                    };
                }
            }
            pushDots{{ $k + 1 }}();
        @endforeach

        window.onresize = function() {
            if (window.innerWidth <= 1024 && screen == "pc") {
                screen = "ph";
                @foreach ($galleries as $k => $v)
                    swiper{{ $k + 1 }}_max = Math.ceil(swiper{{ $k + 1 }}_item.length / 2);
                    pushDots{{ $k + 1 }}();
                @endforeach
            } else if (screen == "ph" && window.innerWidth > 1024) {
                screen = "pc";
                @foreach ($galleries as $k => $v)
                    swiper{{ $k + 1 }}_max = Math.ceil(swiper{{ $k + 1 }}_item.length / 4);
                    swiper{{ $k + 1 }}_count = 0;
                    swiper{{ $k + 1 }}_moveNum = -100 * swiper{{ $k + 1 }}_count;
                    swiper{{ $k + 1 }}MoveHandler();
                    pushDots{{ $k + 1 }}();
                @endforeach
            }
        };

        var swiperHandler = document.querySelectorAll("[name='swiperHandler']");
        var gal_year = document.querySelector("#gal_year");
        var gal_name = document.querySelector("#gal_name");
        var gal_detail = document.querySelector("#gal_detail");
        var gal_photo = document.querySelector("#gal_photo");
        var gal_pic = document.querySelector("#gal_pic");
        var gal_txt = document.querySelector("#gal_txt");
        var show_photo = document.querySelector("#show_photo");
        var gal_picOutside = document.querySelector("#gal_picOutside");

        for (let i = 0; i < swiperHandler.length; i++) {
            const element = swiperHandler[i];
            element.onclick = function() {
                if (alert) {
                    setAlert(element.getAttribute("data-galId"));
                    alert.classList.add("show");
                    setTimeout(() => {
                        alert.classList.add("on");
                    }, 10);
                } else {
                    return;
                }
                var galId = element.getAttribute("data-galId");
            };
        }

        var galData = [
            @php $idx=0; @endphp
            @foreach ($galleries as $gal)
                @foreach ($gal->files as $file)
                    @php
                        if ($file->tier != 2) {
                            continue;
                        }
                        $galPhoto = json_decode($file->extend_logo);
                        $galPic = json_decode($file->extend_image);
                        $galPicPh = json_decode($file->extend_mobile_image);
                        $idx += 1;
                    @endphp {
                        galId: {{ $idx }},
                        setMaxW: false,
                        galName: "{{ $file->name }}",
                        galPhoto: "{{ $galPhoto[0]->response->url }}",
                        galPic: "{{ $galPic[0]->response->url }}",
                        galPicPh: "{{ $galPicPh[0]->response->url }}",
                        galYear: "{{ $file->year }}",
                        galDetail: "{{ $file->text_1 }}",
                        galTxt: "{{ $file->text_2 }}",
                        picPosition: "center"
                    },
                @endforeach
            @endforeach
        ];

        function setAlert(id) {
            gal_year.innerHTML = "";
            gal_name.innerHTML = "";
            gal_detail.innerHTML = "";
            gal_txt.innerHTML = "";
            gal_photo.setAttribute("src", "");
            gal_pic.setAttribute("class", "");
            for (let i = 0; i < galData.length; i++) {
                if (galData[i].galId == id) {
                    gal_year.innerHTML = galData[i].galYear;
                    gal_name.innerHTML = galData[i].galName;
                    gal_detail.innerHTML = galData[i].galDetail;
                    gal_txt.innerHTML = galData[i].galTxt;
                    if (galData[i].setMaxW) {
                        gal_pic.setAttribute("class", "galMax");
                    }
                    if (galData[i].galPhoto == "") {
                        show_photo.style.display = "none";
                    } else {
                        gal_photo.setAttribute(
                            "src",
                            galData[i].galPhoto
                        );
                    }
                    // background-image:url(../images/gallery/" +
                    // galData[i].galPic + ");background-position: " + galData[i].picPosition + "center

                    gal_picOutside.setAttribute(
                        "style",
                        `
				background-image:url(${galData[i].galPicPh});

				`
                        // background-position: ${galData[i].picPosition} center;
                    );
                    gal_pic.setAttribute(
                        "src",
                        galData[i].galPic
                    );
                }
            }
        }
    </script>
    <script src="../js/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
