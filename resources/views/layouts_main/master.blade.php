<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="{{ $seoInfo->description ?? '' }}" />
    <meta name="keywords" content="{{ $seoInfo->keywords ?? '' }}" />
    <meta property="og:locale" content="zh_TW" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $seoInfo->og_title ?? '' }}" />
    <meta property="og:description" content="{{ $seoInfo->og_discription ?? '' }}" />
    <meta property="og:image" content="{{ asset('assets/images/fimgs/fbimg.jpg') }}" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:site_name" content="{{ $seoInfo->og_site_name ?? '' }}" />
    <title>{{ $seoInfo->title ?? '' }}</title>
    <meta name="title" content="{{ $seoInfo->title ?? '' }}" />
    <link rel="canonical" href="{{ url()->full() }}" />

    <!-- Favicon -->
    <link href="{{ asset('assets/images/fimgs/favicon.ico') }}" rel="icon">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}?v={{ time() }}">

    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}?v={{ time() }}">

    @stack('third_party_stylesheets')
    @stack('page_css')

    {!! $seoInfo->ga_header ?? '' !!}

</head>

<body>
    {!! $seoInfo->ga_body ?? '' !!}
    <div class="site-wrap">

        @include('layouts_main.header')

        @include('layouts_main.hero')




        <div class="main-section" id="{{ Request::routeIs('index') ? 'main-section' : 'main'}}">

            @yield('content')

        </div>

        @include('layouts_main.footer')


    </div>

    <a href="#" class="rounded-circle back-to-top">
        <img src="{{asset('assets/images/00-hp/top.png')}}" class="img-fluid" style="width: 50px;" alt="">
    </a>

    <div class="d-none d-md-block social-links-btn social-style">
        <a href="https://line.me/R/ti/p/@xyn0189f" target="_blank" class="d-none d-md-block"><img src="{{asset('assets/images/00-hp/left_line.png')}}"
                class="img-fluid left-line-img" width="32" alt=""></a>
        <div class="social-line mx-auto my-22"></div>
        <a href="https://ig.me/m/regent_1994" target="_blank" class="d-none d-md-block">
            <img src="{{asset('assets/images/00-hp/left_ig.png')}}" class="img-fluid left-ig-img" width="32" alt=""></a>
        <div class="social-line mx-auto my-22"></div>
        <a href="https://www.facebook.com/messages/t/191982250846810?locale=zh_TW" target="_blank" class="d-none d-md-block"><img src="{{asset('assets/images/00-hp/left_mes.png')}}"
                class="img-fluid left-msg-img" width="32" alt=""></a>
    </div>


    <div class="d-flex d-md-none w-100 position-fixed bottom-0 left-0 social-links-btn-mobile">
        <div class="row justify-content-center align-content-center text-center px-0 py-2 m-0 w-100">
            <div class="col-3 s-line-btn align-self-center flex-column">
                <a href="https://line.me/R/ti/p/@xyn0189f" target="_blank">
                    <img src="{{asset('assets/images/mobile/mo_line.png')}}" class="img-fluid" width="32" alt=""><br> 加入好友
                </a>
            </div>
            <div class="col-3 s-phone-btn align-self-center flex-column">
                <a href="tel:03-8321000" target="_blank">
                    <img src="{{asset('assets/images/mobile/mo_phone.png')}}" class="img-fluid" width="32" alt=""><br> 來電預約
                </a>
            </div>
            <div class="col-3 s-location-btn align-self-center flex-column">
                <a href="https://www.facebook.com/messages/t/191982250846810?locale=zh_TW" target="_blank">
                    <img src="{{asset('assets/images/mobile/mo_mes.png')}}" class="img-fluid" width="32" alt=""><br> 線上諮詢
                </a>
            </div>
            <div class="col-3 s-location-btn align-self-center flex-column">
                <a href="https://ig.me/m/regent_1994" target="_blank">
                    <img src="{{asset('assets/images/mobile/mo_ig.png')}}" class="img-fluid" width="32" alt=""><br> 語音通話
                </a>
            </div>
        </div>
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}?v={{time()}}"></script>

    <script src="{{asset('assets/js/custom.js')}}?v={{time()}}"></script>

    @stack('third_party_scripts')
    @stack('page_scripts')

    <script>
        $(document).ready(function () {
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".heroSwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            centeredSlides: true,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
        });
    </script>

</body>

</html>
