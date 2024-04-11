<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Shareco-Story">
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
    <title>SHARECO-Story</title>
</head>

<body>
    <div class="wrap">
        @yield('header')
        <section id="story" class="story">
            <div id="story_emptyBox" class="story_emptyBox"></div>
            <!--  style="--tr:-55px" -->
            <div id="story_box1" class="story_box _bg1" style="--bgop1:1">
                <div id="story_title1" class="story_title">品牌故事</div>
                <div id="story_txt1" class="story_txt">
                    SHARECO 用香水保存每个人心中最美好的记忆
                    每个男人心中都有一位教会你长大的女孩，跟她处在同一个空间、呼吸一样的空气，就能让你感受到开心的感觉，你可能已经忘了她的样子，但那段经历是你心中最深刻、美好的记忆。
                </div>
                <div id="story_pic1" class="story_pic">
                    <img src="../images/story/photo_1.jpg" alt="SHARECO 品牌故事">
                    <img src="../images/story/photo_2.jpg" alt="SHARECO 品牌故事">
                </div>
            </div>
            <div id="story_box2" class="story_box _bg2" style="--bgop2:0">
                <div id="story_txt2" class="story_txt">
                    创造 SHARECO 这个品牌，是想保存与分享「那段情绪与经历」，我们选择香水，是因为「嗅觉是人类最古老的感官」，能触发脑部关于记忆和欲望的区块， 香水是我们传达这种情绪的载体，我们真正在做的事情是：
                    把那个「独特的吸引力」用香水的形式表现出来。
                </div>
                <div id="story_pic2" class="story_pic2">
                    <img src="../images/story/photo_3.jpg" alt="SHARECO 品牌故事">
                </div>
            </div>
        </section>
        <footer id="footer" class="footer">
            @include('layout.footer')
        </footer>
    </div>


    <script src="../js/module.js"></script>
    {{-- <script src="../js/story.js"></script> --}}
</body>

</html>
