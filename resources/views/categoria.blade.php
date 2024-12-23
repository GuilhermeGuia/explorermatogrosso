@extends('layouts.site')

@section('title', 'Categoria ')

@section('content')
    <section class="space">
        <div class="container">
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4">
                        <div class="search-form-area">
                            <form class="search-form">
                                <input type="text" placeholder="Search" value="{{ $busca->nome }}">
                                <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab-grid" role="tabpanel"
                            aria-labelledby="tab-tour-grid">
                            <div class="row gy-24 gx-24">

                                @foreach ($result as $r)
                    
                                    <div class="col-md-6">
                                        <div class="tour-box th-ani">
                                            <div class="tour-box_img global-img">
                                                <img src="{{ Storage::url($r->foto_principal) }}" alt="image"
                                                    style="height: 150px; max-height: 150px;">
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title"><a
                                                        href="{{ route('service.page', $r->slug) }}">{{ $r->title }}</a>
                                                </h3>
                                                {{-- <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:85%">Rated
                                                    <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                    Rating)</span></div>
                                            <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                Rating)</a>
                                        </div> --}}
                                                <h4 class="tour-box_price">
                                                    {{ $r->description_adicional }}
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-map"></i>{{ $r->cidade->name }}</span>
                                                    <a href="{{ route('service.page', $r->slug) }}"
                                                        class="th-btn style4">Detalhar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="th-pagination text-center mt-60">
                            <ul>
                                @if ($result->hasPages())
                                    @foreach ($result->links()->elements as $element)
                                        @if (is_array($element))
                                            @foreach ($element as $page => $url)
                                                <li class="{{ $page == $result->currentPage() ? 'active' : '' }}">
                                                    <a href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categorias</h3>
                            <ul>
                                @foreach ($categorias as $categoria)
                                    <li>
                                        <a href="{{ route('categoria', ['slug' => $categoria->slug]) }}"><img
                                                src="" alt="">{{ $categoria->nome }}</a>
                                        <span>{{ $categoria->service_pages_count }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>



                    </aside>
                </div>

            </div>

        </div>
        <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="7%" data-right="8%">
            <img src="{{ asset('assets/img/shape/shape_1.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="1%" data-right="7%">
            <img src="{{ asset('assets/img/shape/shape_2.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="2%" data-right="4%">
            <img src="{{ asset('assets/img/shape/shape_3.png') }}" alt="shape">
        </div>
    </section>
@endsection
