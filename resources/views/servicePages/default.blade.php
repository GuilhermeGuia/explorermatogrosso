@extends('layouts.site')
@section('title', $slug)
@section('content')

    <div class="breadcumb-wrapper " data-bg-src="{{ Storage::url($service->foto_principal) }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $service->title }}</h1>
            </div>
        </div>
    </div>
    <div class="bg-smoke p-5" >
        <div class="container">
            <div class="row" >
                <div class="col-lg-6"
                    >
                    <div>
                        <div class="title-area">
                            <span class="sub-title style1">Atrativo</span>
                            <h2 class="sec-title">{{ $service->title_conteudo }}</h2>
                        </div>
                        <div >
                            {!! $service->conteudo !!}
                        </div>

                        {{-- <div class="choose-about wow fadeInUp">
                            <div class="choose-about_icon">
                                <img src="{{ asset('assets/img/icon/choose_1_1.svg') }}" alt="image">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Top-notch Security</h3>
                                <p class="choose-about_text">Tourm is driven by a set of core values and principles that
                                    place
                                    unwavering focus on our commitment.</p>
                            </div>
                        </div>
                        <div class="choose-about wow fadeInUp">
                            <div class="choose-about_icon">
                                <img src="{{ asset('assets/img/icon/choose_1_2.svg') }}" alt="image">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Budget Efficiency</h3>
                                <p class="choose-about_text">Tourm is driven by a set of core values and principles that
                                    place
                                    unwavering focus on our commitment.</p>
                            </div>
                        </div>
                        <div class="choose-about wow fadeInUp">
                            <div class="choose-about_icon">
                                <img src="{{ asset('assets/img/icon/choose_1_3.svg') }}" alt="image">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Global Pathway</h3>
                                <p class="choose-about_text">Tourm is driven by a set of core values and principles that
                                    place
                                    unwavering focus on our commitment.</p>
                            </div>
                        </div> --}}

                    </div>

                    <div class="form-btn mb-20 col-12" style="margin-top: auto;">
                        <button class="th-btn btn-fw th-radius2">Enviar Mensagem</button>
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="slider-area tour-slider1">
                        <div class="swiper th-slider mb-4" id="tourSlider4"
                            data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-slider-img">
                                        <img src="{{ Storage::url($service->fotos_slider[0]) }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper th-slider tour-thumb-slider"
                            data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                @for ($i = 1; $i < count($service->fotos_slider); $i++)
                                    <div class="swiper-slide">
                                        <div class="tour-slider-img">
                                            <img src="{{ Storage::url($service->fotos_slider[$i]) }}" alt="Image">
                                        </div>
                                    </div>
                                @endfor


                            </div>
                        </div>
                    </div>
                    <div class="location-map">
                        <h3 class="page-title mt-45 mb-30">Localização</h3>
                        <div class="contact-map">
                            {!! $service->maps !!}
                            <div class="contact-icon">
                                <img src="{{ asset('assets/img/icon/location-dot3.svg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <button data-slider-prev="#tourSlider4" class="slider-arrow style3 slider-prev"><img
                        src="{{ asset('assets/img/icon/hero-arrow-left.svg') }}" alt=""></button>
                <button data-slider-next="#tourSlider4" class="slider-arrow style3 slider-next"><img
                        src="{{ asset('assets/img/icon/hero-arrow-right.svg') }}" alt=""></button>
            </div>


        </div>
    </div>
    </div>
    <div class="shape-mockup d-none d-xxl-block" data-top="5%" data-right="0%">
        <img src="{{ asset('assets/img/shape/shape_19.png') }}" alt="">
    </div>
    <div class="shape-mockup d-none d-xxl-block" data-bottom="0%" data-left="0%"><img
            src="{{ asset('assets/img/shape/shape_20.png') }} " alt="">
    </div>
    </div>




@endsection
