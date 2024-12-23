@extends('layouts.site')

@section('title', 'Seja bem ' . $cidade->name)

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ Storage::url($cidade->photo) }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title" style="color:{{ $cidade->color }} !important">{{ $cidade->name }}</h1>
            </div>
        </div>
    </div>
    <!--==============================
                                            tour Area
                                            ==============================-->
    <section class="space">

        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area style3">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="#atrativos"><img src="{{ asset('assets/img/theme-img/map.svg') }}"
                                            alt="">Atrativos</a>
                                    <span>(1)</span>
                                </li>

                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-xxl-9 col-lg-8">
                    <div class="page-single">
                        @if ($cidade->video)
                            <div class="service-img">
                                <iframe width="100%" height="500" src="{{ $cidade->video }}" frameborder="0"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        @endif
                        <div class="page-content d-block">
                            <div class="page-meta mt-50 mb-45">
                                {{-- <a class="page-tag" href="tour.html">Featured</a>
                                <span class="ratting"><i class="fa-sharp fa-solid fa-star"></i><span>4.8</span></span> --}}
                            </div>
                            <h2 class="box-title">{{ $cidade->title }}</h2>
                            <div class="blog-text mb-30">
                                {!! $cidade->description !!}

                            </div>
                        </div>
                        <div class="destination-gallery-wrapper">
                            <h3 class="page-title mt-30 mb-30">Galeria</h3>
                            <div class="row gy-4 gallery-row filter-active">
                                @foreach ($cidade->galeria as $galeria)
                                    <div class="col-xxl-auto filter-item">
                                        <div class="gallery-box style3">
                                            <div class="gallery-img global-img">
                                                <img src="{{ Storage::url($galeria) }}" alt="fotos de {{ $cidade->name }}"
                                                    style=" height: 250px;" class="img-fluid">
                                                <a href="{{ Storage::url($galeria) }}" class="icon-btn popup-image"><i
                                                        class="fal fa-magnifying-glass-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mt-5">
                            <h2 class="box-title">{{ $cidade->title_adiconal }}</h2>
                            <div class="blog-text mb-30"> {!! $cidade->description_adicional !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="position-relative overflow-hidden space">

            <div class="container mt-5">
                <div class="row gy-4 gx-4 mb-3">
                    <h2 class="box-title" id="atrativos">Atrativos</h2>
                    @foreach ($cidade->ServicePages as $paginas)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="destination-item th-ani">
                                <div class="destination-item_img global-img">
                                    <img src="{{ Storage::url($paginas->foto_principal) }}" alt="{{ $paginas->title }}"
                                        class="img-fluid" style="height:250px">
                                </div>
                                <div class="destination-content">
                                    <h6>
                                        <a href="{{ route('service.page', $paginas->slug) }}">
                                            {{ $paginas->title }}
                                        </a>
                                    </h6>
                                    <a href="{{ route('service.page', $paginas->slug) }}"
                                        class="th-btn style4 th-icon">Conheça</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="17%" data-right="9%">
                <img src="{{ asset('assets/img/shape/shape_1.png') }}" alt="shape">
            </div>
            <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="8%" data-right="8%">
                <img src="{{ asset('assets/img/shape/shape_2.png') }}" alt="shape">
            </div>
            <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="15%" data-right="4%">
                <img src="{{ asset('assets/img/shape/shape_3.png') }}" alt="shape">
            </div>
        </section>
        <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="35%" data-right="12%">
            <img src="{{ asset('assets/img/shape/shape_1.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="31%" data-right="8%">
            <img src="{{ asset('assets/img/shape/shape_2.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="33%" data-right="5%">
            <img src="{{ asset('assets/img/shape/shape_3.png') }}" alt="shape">
        </div>
    </section>
@endsection
