@extends('layouts.site')

@section('title', 'Seja bem vindo')


@section('content')


    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider-1" id="heroSlide1"
            data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
            <div class="swiper-wrapper">

                @for ($i = 0; $i < 3; $i++)
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="th-hero-bg" data-bg-src="{{ Storage::url($carrosel->{'photo_' . $i}) }}" style="height: 800px;">
                            </div>
                            <div class="container">
                                <div class="hero-style1">
                                    <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s"
                                        style="color: {{ $carrosel->{'color_' . $i} }} !important">
                                        {{ $carrosel->{'chapeu_' . $i} }}
                                    </span>
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s"
                                        style="color: {{ $carrosel->{'color_' . $i} }} !important">
                                        {{ $carrosel->{'title_' . $i} }}

                                    </h1>

                                </div>
                            </div>
                        </div>
                    </div>
                @endfor


            </div>
            <div class="th-swiper-custom">
                <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img
                        src="assets/img/icon/right-arrow.svg" alt=""></button>
                <div class="slider-pagination"></div>
                <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><img
                        src="assets/img/icon/left-arrow.svg" alt=""></button>
            </div>

        </div>
    </div>

    <div class="booking-sec">
        <div class="container">
            <form action="mail.php" method="POST" class="booking-form ajax-contact">
                <div class="input-wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon">
                                <i class="fa-light fa-route"></i>
                            </div>
                            <div class="search-input">
                                <label>Destination</label>
                                <select name="subject" id="subject" class="form-select nice-select">
                                    <option value="Select Destination" selected disabled>Select Destination</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Dubai">Dubai</option>
                                    <option value="England">England</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="Saudi Arab">Saudi Arab</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Scandinavia">Scandinavia</option>
                                    <option value="Western Europe">Western Europe</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option class="Italy">Italy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon">
                                <i class="fa-regular fa-person-hiking"></i>
                            </div>
                            <div class="search-input">
                                <label>Type</label>
                                <select class=" nice-select" name="Adventure" id="Adventure">
                                    <option value="Adventure" selected disabled>Adventure</option>
                                    <option value="Beach">Beach</option>
                                    <option value="Group Tour">Group Tour</option>
                                    <option value="Couple Tour">Couple Tour</option>
                                    <option value="Family Tour">Family Tour</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon">
                                <i class="fa-light fa-clock"></i>
                            </div>
                            <div class="search-input">
                                <label>Duration</label>
                                <select class="form-select nice-select" name="Duration" id="Duration">
                                    <option value="Normal" selected disabled>Duration</option>
                                    <option value="1">1 days</option>
                                    <option value="2">2 days</option>
                                    <option value="3">3 days</option>
                                    <option value="4">4 days</option>
                                    <option value="5">5 days</option>
                                    <option value="6">6 days</option>
                                    <option value="7">7 days</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon">
                                <i class="fa-light fa-map-location-dot"></i>
                            </div>
                            <div class="search-input">
                                <label>Tour Category</label>
                                <select name="subject" id="category" class="form-select nice-select">
                                    <option value="Normal" selected disabled>Luxury</option>
                                    <option value="1">Delux</option>
                                    <option value="2">Economy</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-btn col-md-12 col-lg-auto">
                            <button class="th-btn"><img src="assets/img/icon/search.svg" alt="">Search</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </div>
            </form>
        </div>
    </div>

    <section class="category-area bg-top-center" data-bg-src="#">
        <div class="container th-container">
            <div class="title-area text-center">
                <h2 class="sec-title">Categorias</h2>
            </div>
            <div class="swiper categorySlider" id="categorySlide">
                <div class="swiper-wrapper">
                    @foreach ($categorias as $categoria)
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="{{ Storage::url($categoria->photo) }}" alt="Image">
                                </div>
                                <h3 class="box-title">
                                    <a href="{{ $categoria->url }}">
                                        {{ $categoria->name }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <div class="destination-area position-relative overflow-hidden ">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title">Cidades</h2>

            </div>
            <div class="swiper th-slider destination-slider slider-drag-wrap" id="aboutSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
                <div class="swiper-wrapper">


                    @foreach ($cidades as $cidade)
                        <div class="swiper-slide">
                            <div class="destination-box gsap-cursor">
                                <div class="destination-img">
                                    <img src="{{ Storage::url($cidade->photo) }}" alt="destination image">
                                    <div class="destination-content">
                                        <div class="media-left">
                                            <h4 class="box-title">
                                                <a href="destination-details.html">{{ $cidade->name }}</a>
                                            </h4>
                                        </div>
                                        <div class="">
                                            <a href="{{ $cidade->url }}l" class="th-btn style2 th-icon">Click Aqui</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>


    <div class="about-area position-relative overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1">
                            {{-- <img src="assets/img/normal/about_1_1.jpg" alt="About"> --}}
                            <img src="{{ Storage::url($inscricao[0]->photo1) }}" alt="About">

                        </div>
                        <div class="img2">
                            <img src="{{ Storage::url($inscricao[0]->photo2) }}" alt="About">
                        </div>
                        <div class="img3">
                            <img src="{{ Storage::url($inscricao[0]->photo3) }}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4 ms-xl-2">
                        <div class="title-area mb-20 pe-xl-5 me-xl-5">
                            <span class="sub-title style1 ">Se Inscreva</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">
                                Conheça nossos pacotes
                            </h2>

                            <p class="sec-text mb-30">
                                Se inscreva
                            </p>
                        </div>
                        <div class="about-item-wrap">
                            <div class="about-item">
                                <div class="about-item_img">
                                    <img src="{{ Storage::url($inscricao[0]->icone1) }}" alt="">
                                </div>
                                <div class="about-item_centent">
                                    <h5 class="box-title"> {{ $inscricao[0]->label1 }}</h5>
                                    <p class="about-item_text"> {{ $inscricao[0]->texto1 }}</p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-item_img">
                                    <img src="{{ Storage::url($inscricao[0]->icone2) }}" alt="">
                                </div>
                                <div class="about-item_centent">
                                    <h5 class="box-title"> {{ $inscricao[0]->label2 }}</h5>
                                    <p class="about-item_text">
                                        {{ $inscricao[0]->texto2 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-35"><a href="#" class="th-btn style3 th-icon">Faça inscrição</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="2%">
            <img src="assets/img/shape/shape_1.png" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="3%">
            <img src="assets/img/shape/shape_2.png" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="8%">
            <img src="assets/img/shape/shape_3.png" alt="shape">
        </div>

        <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="0%" data-right="8%">
            <img src="{{ Storage::url($inscricao[0]->photo4) }}" alt="shape" style="height: 100%">
        </div>
        <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="45%" data-right="2%">
            <i class="fa-sharp fa-solid fa-star"></i><span>5.0</span>
        </div>
        <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="22%"><img
                src="assets/img/icon/emoji.png" alt="">
        </div>
    </div>

    <section class="position-relative overflow-hidden space" id="destination-sec"
        data-bg-src="assets/img/bg/line-pattern3.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title-area text-center">
                        <h2 class="sec-title">{{ $blog[0]->title }}</h2>
                        <p class="sec-text">{{ $blog[0]->description }}</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i < 11; $i++)
                            @if ($blog[0]->{'photo' . $i})
                                <div class="swiper-slide">
                                    <div class="destination-item th-ani">
                                        <div class="destination-item_img global-img">
                                            <img src="{{ Storage::url($blog[0]->{'photo' . $i}) }}" alt="image">
                                        </div>
                                        <div class="destination-content">
                                            <h3 class="box-title">
                                                <a href="{{ $blog[0]->{'url' . $i} }}">

                                                    {{ $blog[0]->{'name' . $i} }}
                                                </a>
                                            </h3>

                                            <a href=""{{ $blog[0]->{'url' . $i} }}"
                                                class="th-btn style4 th-icon">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative overflow-hidden space">



        <div class="gallery-area ">
            <div class="container th-container">
                <div class="title-area text-center">
                    <span class="sub-title">{{$galeria[0]->titulo}}</span>
                    <h2 class="sec-title">{{$galeria[0]->subtitulo}}</h2>
                </div>
                <div class="row gy-10 gx-10 justify-content-center align-items-center">
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="{{ Storage::url($galeria[0]->photo1) }}" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i></div>
                                    <img src="{{ Storage::url($galeria[0]->photo1) }}" alt="gallery image">
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="{{ Storage::url($galeria[0]->photo2) }}"" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                    <img src="{{ Storage::url($galeria[0]->photo2) }}"" alt="gallery image">
                                </a>
                            </div>
                        </div>
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="{{ Storage::url($galeria[0]->photo3) }}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                    <img src="{{ Storage::url($galeria[0]->photo3) }}" alt="gallery image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="{{ Storage::url($galeria[0]->photo4) }}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                    <img src="{{ Storage::url($galeria[0]->photo4) }}" alt="gallery image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="{{ Storage::url($galeria[0]->photo5) }}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                    <img src="{{ Storage::url($galeria[0]->photo5) }}" alt="gallery image">
                                </a>
                            </div>
                        </div>
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="{{ Storage::url($galeria[0]->photo6) }}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                    <img src="{{ Storage::url($galeria[0]->photo6) }}" alt="gallery image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="{{ Storage::url($galeria[0]->photo7) }}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                    <img src="{{ Storage::url($galeria[0]->photo7) }}" alt="gallery image">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="shape-mockup  d-none d-xl-block" data-top="-25%" data-left="0%">
                <img src="assets/img/shape/line.png" alt="shape">
            </div>
            <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="3%">
                <img class="gmovingX" src="assets/img/shape/shape_4.png" alt="shape">
            </div>
        </div>
    </section>
@endsection
