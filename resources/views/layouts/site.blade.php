<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="Tourm">
    <meta name="description" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="keywords" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Montez&display=swap"
        rel="stylesheet">

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">

    <!-- Swiper css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <?php
    $menu = [
        'Home' => 'index',
        //'Cidades' => 'citie',
        // 'Turistimo' => 'turismo',
    ];
    ?>

    <div class="magic-cursor relative z-10">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>

    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="#"><img src="{{ asset('assets/img/logo2.svg') }}" alt="Tourm"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    @foreach ($menu as $key => $value)
                        <li>
                            <a href="{{ route($value) }}">{{ $key }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
 Header Area
==============================-->
    <header class="th-header header-layout1">
        
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="#"><img src="{{ asset('assets/img/logo.svg') }}"
                                        alt="Tourm"></a>
                            </div>
                        </div>
                        <div class="col-auto me-xl-auto">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul>

                                    @foreach ($menu as $key => $value)
                                        <li>
                                            <a href="{{ route($value) }}">{{ $key }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-xl-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <a href="#" class="th-btn style3 th-icon">Inscreva-se</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-bg" data-mask-src="{{ asset('assets/img/logo_bg_mask.png') }}"></div>
            </div>
        </div>
    </header>

    @yield('content')


    <div class="brand-area overflow-hidden space-bottom">
        <div class="container th-container">
            <div class="swiper th-slider brandSlider1" id="brandSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper">

                    @foreach ($patrocinios as $patrocinio)
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <a href="{{ $patrocinio->url }}">
                                    <img class="original" src="{{ Storage::url($patrocinio->photo) }}"
                                        alt="{{ $patrocinio->name }}">
                                    <img class="gray" src="{{ Storage::url($patrocinio->photo) }}"
                                        alt="{{ $patrocinio->name }}">
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>


    <footer class="footer-wrapper footer-layout1">
        <div class="widget-area">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo3.svg') }}"
                                            alt="Tourm"></a>
                                </div>
                                <p class="about-text">{{ $footer[0]->descritivo }}</p>
                                <div class="th-social">
                                    @if ($footer[0]->facebook)
                                        <a href="{{ $footer[0]->facebook }}">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    @endif
                            

                                    @if ($footer[0]->telefone)
                                        <a
                                            href="https://api.whatsapp.com/send?1=pt_BR&phone={{ preg_replace('/\D/', '', $footer[0]->telefone) }}">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    @endif

                                    @if ($footer[0]->instagram)
                                        <a href="{{ $footer[0]->instagram }}"><i class="fab fa-instagram"></i></a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Links uteis</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">

                                    <li><a href="#">Home</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contato</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/phone.svg') }}" alt="img">
                                    </div>
                                    <div class="details">
                                    @if ($footer[0]->telefone)
                                        <p><a href="tel:{{ $footer[0]->telefone }}" class="info-box_link">{{ $footer[0]->telefone }}</a></p>
                                        
                                    @endif
                                    
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/envelope.svg') }}" alt="img">
                                    </div>
                                    <div class="details">
                                       @if ($footer[0]->email)
                                        <p><a href="mailto:{{ $footer[0]->email }}"
                                                class="info-box_link">{{ $footer[0]->email }}</a></p>
                                        @endif
                                     
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/location-dot.svg') }}"
                                            alt="img">
                                    </div>
                                    @if ($footer[0]->endereco)
                                        <div class="details">
                                            <p>{{ $footer[0]->endereco }}</p>
                                        </div>
                                        
                                    @endif
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </footer>

    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- imagesloaded -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- gsap -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>

    <!-- circle-progress -->
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>

    <script src="{{ asset('assets/js/matter.min.js') }}"></script>
    <script src="{{ asset('assets/js/matterjs-custom.js') }}"></script>

    <!-- nice select -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
