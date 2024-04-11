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
              	<div id="story_title1" class="story_title">Our Story</div>
				<div id="story_txt1" class="story_txt">
					SHARECO aims to preserve everyone’s most precious memories in the form of a perfume. In every man’s heart, there is a woman who taught you how to grow up. You had spent time together, breathed the same air, and you felt happy to just exist in the same space. Maybe you have forgotten exactly what she looked like, but those memories are the deepest, most beautiful memories of your youth.
				</div>
				<div id="story_pic1" class="story_pic">
					<img src="../images/story/photo_1.jpg" alt="SHARECO Our Story">
					<img src="../images/story/photo_2.jpg" alt="SHARECO Our Story">
				</div>
            </div>
            <div id="story_box2" class="story_box _bg2" style="--bgop2:0">
                <div id="story_txt2" class="story_txt">
                    The creation of the SHARECO brand was a vision to preserve both that emotion and that experience. We chose to use perfumes, because the sense of smell is one of our first senses to develop as a baby, and scents can trigger the memories and desires of our minds. Perfumes are the medium with which we chose to express that emotion. What we are really doing, is to showcase that ‘unique attraction’ in the form of perfumes.
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
