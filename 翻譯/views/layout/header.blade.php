@extends('zh-tw.' . $page)

@section('header')
    <header id="header" class="header" @if ($page == 'home') style="display: none;" @endif>
        <h1 class="logo">
            <a href="{{ route('home') }}"><img src="../images/logo.svg" alt="SHARECO"></a>
        </h1>
        <ul class="nav">
            <li class="nav_item fz18to16" name="nav_item">
                <span class="nav_item_title">關於 SHARECO</span>
                <ul class="nav_sec">
                    <li class="nav_sec_item">
                        <a class="nav_sec_link" href="{{ route('story') }}">
                            <span>品牌故事</span>
                        </a>
                    </li>
                    <li class="nav_sec_item">
                        <a class="nav_sec_link" href="{{ route('spokesman') }}">
                            <span>品牌代言人</span>
                        </a>
                    </li>
                    <li class="nav_sec_item">
                        <a class="nav_sec_link" href="{{ route('gallery') }}">
                            <span>Gallery</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav_item fz18to16" name="nav_item">
                <span class="nav_item_title">產品列表</span>
                <ul class="nav_sec">
                    @foreach ($productSeries as $key => $productSeries)
                        <li class="nav_sec_item">
                            <a class="nav_sec_link" href="{{ route('product', ['id' => $productSeries->id]) }}">
                                <span>{{ $productSeries->name }}</span>
                            </a>
                        </li>
                    @endforeach
                    {{-- <li class="nav_sec_item">
                        <a class="nav_sec_link" href="{{ route('product_parfums') }}">
                            <span>PARFUMS 香精香水</span>
                        </a>
                    </li>
                    <li class="nav_sec_item">
                        <a class="nav_sec_link" href="{{ route('product_venus') }}">
                            <span>VENUS FLYTRAP 捕蠅草擴香</span>
                        </a>
                    </li>
                    <li class="nav_sec_item">
                        <a class="nav_sec_link" href="{{ route('product_shower') }}">
                            <span>BATHING 洗沐系列</span>
                        </a>
                    </li> --}}
                </ul>
            </li>

            <li class="nav_item fz18to16" name="nav_item">
                <span class="nav_item_title">銷售據點</span>
                <ul class="nav_sec">
                    <li class="nav_sec_item">
                        <a class="nav_sec_link" href="{{ route('store') }}">
                            <span>銷售據點</span>
                        </a>
                    </li>
                    <li class="nav_sec_item">
                        <a class="nav_sec_link" href="{{ route('cooperate') }}">
                            <span>全球經銷合作</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav_item show_ph fz18to16" name="nav_item">
                <a class="nav_item_title" href="{{ route('contact') }}">
                    <span>聯絡我們</span>
                </a>
            </li>
        </ul>
        <div id="lang" class="lang">
            <i class="lang_btn"></i>
            <!-- 打開在class 加上 on -->
            <ul id="lang_group" class="lang_group">
                <li data-lang="zh-tw" class="on" onclick="changeLang('zh-tw')">繁中</li>
                <li data-lang="zh-cn" onclick="changeLang('zh-cn')">简中</li>
                <li data-lang="en-us" onclick="changeLang('en-us')">EN</li>
                <li data-lang="ja-jp" onclick="changeLang('ja-jp')">日本語</li>
            </ul>
        </div>
        <button id="nav_btn" class="nav_btn">
            <span class="nav_btn_line"></span>
        </button>
    </header>
    <script type="text/javascript">
        const changeLang = (lang) => {
            console.log(lang);
            location.href = `{{ route('language') }}?language=${lang}`;
        }
    </script>
@stop
