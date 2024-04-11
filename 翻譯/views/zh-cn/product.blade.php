<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Shareco-PARFUMS">
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
    <title>SHARECO-PARFUMS</title>
</head>

<body>
    <div class="wrap">
        @yield('header')
        @php
            $bannerImage = json_decode($series->banner_image);
        @endphp
        <div class="banner" style="background-image:url('{{ $bannerImage[0]->response->url }}')">
            <img src="{{ property_exists($bannerImage[0], 'response') ? $bannerImage[0]->response->url : '' }}"
                alt="SHARECO parfums banner">
        </div>
        <div class="product _parfums">
            <div class="product_txt fz26pxto16" data-aos="fade-up" name="aos" data-aos-easing="ease-in-sine">
                {!! $series->brief !!}
            </div>

            @foreach ($series->seriesTiers as $tier)
                <h1 data-aos="fade-up" name="aos" data-aos-easing="ease-in-sine">{{ $tier->name }}</h1>
                <ul class="product_group">
                    @foreach ($tier->products as $product)
                        <li class="product_item" data-aos="fade-up" name="aos" data-aos-easing="ease-in-sine">
                            <div class="product_item_head">
                                <h3 class="product_item_name" data-en="{{ $product->name_en }}">{{ $product->name }}
                                </h3>
                                @php
                                    $showTag = '';
                                    foreach (json_decode($product->tags) as $idx => $tag) {
                                        if ($idx == 0) {
                                            $showTag = $tag;
                                        } else {
                                            $showTag .= ' / ' . $tag;
                                        }
                                    }
                                @endphp
                                <div class="product_item_ml _no fz14to12" data-no="{{ $product->short_tag }}"
                                    data-txt="{{ $showTag }}"></div>
                            </div>
                            <div class="product_item_pic">
                                @php
                                    $image = json_decode($product->image);
                                @endphp
                                <img src="{{ property_exists($image[0], 'response') ? $image[0]->response->url : '' }}"
                                    alt="{{ $product->name }}">
                            </div>
                            <ul class="product_item_detail">
                                <li>
                                    {!! str_replace("\n", '<br>', $product->description) !!}
                                </li>
                                <li>
                                    {!! str_replace("\n", '<br>', $product->brief) !!}
                                </li>
                            </ul>
                        </li>
                    @endforeach
                </ul>
                @php
                    $commentImage = json_decode($tier->comment_image);
                @endphp
                @if (!is_null($commentImage) && count($commentImage) > 0 && !is_null($tier->comment))
                    <div class="product_pic">
                        <img src="{{ property_exists($commentImage[0], 'response') ? $commentImage[0]->response->url : '' }}"
                            alt="{{ $tier->comment }}">
                        <div class="product_pic_txt">
                            {!! $tier->comment !!}
                        </div>
                    </div>
                @endif
            @endforeach


        </div>
        <footer class="footer">
            <div class="footer_box">
                <ul class="footer_nav">
                    <li class="footer_nav_item fz14to12">品牌故事</li>
                    <li class="footer_nav_item fz14to12"><a class="footer_nav_title" href="contact.html">联络我们</a></li>

                    <li class="footer_nav_item fz14to12"><a class="footer_nav_title" href="rule.html">商标及应用准则</a></li>
                    <li class="footer_nav_item fz14to12"><a class="footer_nav_title" href="usually.html">常用连结</a></li>
                    <li class="footer_nav_item fz14to12"><a class="footer_nav_title" href="privacy.html">隐私权与政策</a></li>
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

    <script src="../js/module.js"></script>
    <script src="../js/product.js"></script>
</body>

</html>
