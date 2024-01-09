@extends('layout-visitor.main')

@section('content')

    <section id="detail-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-3">
                    <section id="detail-item-foto">
                        <div class="card">
                            <div class="card-header" style="margin-bottom: 12px">
                                <div class="owl-carousel carousel-product-top">
                                    <div class="item" data-hash="pic-1">
                                        <a>
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb1.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item" data-hash="pic-2">
                                        <a>
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb2.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item" data-hash="pic-3">
                                        <a>
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb3.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item" data-hash="pic-4">
                                        <a>
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb4.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item" data-hash="pic-5">
                                        <a>
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb5.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item" data-hash="pic-6">
                                        <a>
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb3.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item" data-hash="pic-7">
                                        <a>
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb1.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item" data-hash="pic-8">
                                        <a>
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb4.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="owl-carousel carousel-product-bottom">
                                    <div class="item">
                                        <a href="#pic-1">
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb1.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#pic-2">
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb2.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#pic-3">
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb3.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#pic-4">
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb4.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#pic-5">
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb5.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#pic-6">
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb3.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#pic-7">
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb1.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#pic-8">
                                            <div class="card card-item">
                                                <img src="{{asset('assets/img/thumbnail/thumb4.png')}}" class="card-img-top">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-8 col-12">
                    <section id="detail-item-info">
                        <div class="item-title">
                            {{$itemDetail['data']['item']['item_name']}}
                        </div>
                        <div class="item-price" value="{{$itemDetail['data']['item']['item_price']}}">
                            Rp. {{$itemDetail['data']['item']['item_price_thousand']}}
                        </div>
                        <hr>
                        <div class="item-description">
                            {{$itemDetail['data']['item']['item_deskripsi']}}
                        </div>
                        <hr>
                        <div class="item-seller">
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <a href="/toko-detail">
                                        <div class="item-seller-nama" style="">
                                            <img src="{{asset('assets/img/logo/tab-icon.png')}}" alt="" style="">
                                            <b style="">{{$itemDetail['data']['user']['user_name']}}</b>
                                            {!! ($itemDetail['data']['user']['is_verified']==true) ? 
                                                '<img src="assets/img/badge/verif.png" alt="">' 
                                                : 
                                                '' 
                                            !!}
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="item-seller-lokasi">
                                        <i class="fas fa-map-marker-alt mr-1"></i> {{$itemDetail['data']['user']['province_name']}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="seller-sosmed">
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <button class="btn btn-sosmed"><img src="{{asset('assets/img/sosmed/sosmed-wa.png')}}" alt=""> Whats App</button>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <button class="btn btn-sosmed"><img src="{{asset('assets/img/sosmed/sosmed-line.png')}}" alt=""> Line</button>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <button class="btn btn-sosmed"><img src="{{asset('assets/img/sosmed/sosmed-ig.png')}}" alt=""> Instagram</button>
                                </div>
                                <div class="col-lg-3 col-6">
                                    <button class="btn btn-sosmed"><img src="{{asset('assets/img/sosmed/sosmed-tele.png')}}" alt=""> Telegram</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section id="suggest-toko">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper head-section" style="">
                        <div>
                            Item lainnya di <b>RC b19 Store</b>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="owl-carousel carousel-suggest">
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb5.png')}}">
                                <div class="card-status">
                                    WTB
                                </div>
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb4.png')}}">
                                <div class="card-status">
                                    JASA
                                </div>
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb3.png')}}">
                                {{-- <div class="card-status">
                                    WTB
                                </div> --}}
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb2.png')}}">
                                {{-- <div class="card-status">
                                    WTB
                                </div> --}}
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb1.png')}}">
                                <div class="card-status">
                                    WTB
                                </div>
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb3.png')}}">
                                {{-- <div class="card-status">
                                    WTB
                                </div> --}}
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb5.png')}}">
                                <div class="card-status">
                                    WTB
                                </div>
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb2.png')}}">
                                {{-- <div class="card-status">
                                    WTB
                                </div> --}}
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="suggest-serupa">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper head-section" style="">
                        <div>
                            Item lainnya yang mirip
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="owl-carousel carousel-suggest">
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb2.png')}}">
                                {{-- <div class="card-status">
                                    WTB
                                </div> --}}
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb5.png')}}">
                                <div class="card-status">
                                    JASA
                                </div>
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb3.png')}}">
                                {{-- <div class="card-status">
                                    WTB
                                </div> --}}
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb5.png')}}">
                                <div class="card-status">
                                    WTB
                                </div>
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb4.png')}}">
                                {{-- <div class="card-status">
                                    WTB
                                </div> --}}
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb3.png')}}">
                                {{-- <div class="card-status">
                                    WTB
                                </div> --}}
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb2.png')}}">
                                <div class="card-status">
                                    WTB
                                </div>
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/item-detail">
                        <div class="card card-item">
                            <div class="card-img">
                                <img src="{{asset('assets/img/thumbnail/thumb1.png')}}">
                                {{-- <div class="card-status">
                                    WTB
                                </div> --}}
                                <div class="card-badges">
                                    <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                    <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">AGV Pista GPRR</p>
                                <p class="card-price">Rp. 90.000.000</p>
                                <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('.carousel-product-top').owlCarousel({
                dots:false,
                margin:10,
                items:1,
                URLhashListener: true,
                autoplayHoverPause: true,
                startPosition: 'URLHash',
            });
            $('.carousel-product-bottom').owlCarousel({
                dots:false,
                margin:12,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                items:6
            });
            $('.carousel-suggest').owlCarousel({
            loop:true,
            dots:false,
            margin:20,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            responsive:{
                990:{
                    items:6
                },
                300:{
                    items:3
                },
                0:{
                    items:2
                }
            }
        });
        })
    </script>
@endsection