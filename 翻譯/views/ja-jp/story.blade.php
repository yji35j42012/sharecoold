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
				<div id="story_title1" class="story_title">ブランドストーリー</div>
				<div id="story_txt1" class="story_txt">
					SHARECOは、香水を通じて、心の中にある最も美しい思い出を呼び覚まします。
					多くの男性の心の中には、あなたの成長を手助けしてくれた大切な女性がいます。彼女と同じ空間、同じ空気を共にするだけで、幸せな気持ちになれました。顔は忘れてしまったけれど、ともに過ごした日々は最も印象深く、美しい思い出として心に残っています。
				</div>
				<div id="story_pic1" class="story_pic">
					<img src="../images/story/photo_1.jpg" alt="SHARECO 品牌故事">
					<img src="../images/story/photo_2.jpg" alt="SHARECO 品牌故事">
				</div>
			</div>
			<div id="story_box2" class="story_box _bg2" style="--bgop2:0">
				<div id="story_txt2" class="story_txt">
					SHARECOは、そんな「感情と経験」を大切にしたい。そして、共有したいという思いから創られました。
					私たちが香水を選んだ理由は「嗅覚が人間の五感の中で、最も原始的で、本能的な感覚」だからです。脳の記憶と欲望に関係する部分を刺激することができます。
					香水は、この感情を伝えるための媒体。
					私たちがしていることは、あなたの持つ「本来の魅力」を香水の形で表現することです。
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
