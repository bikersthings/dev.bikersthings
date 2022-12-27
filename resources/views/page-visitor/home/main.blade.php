@extends('layout-visitor.main')

@section('content')
<section id="banner">
    <div class="" >
        <div class="owl-carousel carousel-banner">
            <div class="item">
                <a href="">
                    <img src="{{asset('assets/img/banner/ban1.png')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{asset('assets/img/banner/ban2.png')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{asset('assets/img/banner/ban3.png')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{asset('assets/img/banner/ban4.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<section id="ice-box">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper head-section" style="">
                            <div>
                                <b>Ice Box</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel carousel-ice-box">
                            <div class="item">
                                <x-ice-box.avail/>
                            </div>
                            <div class="item">
                                <x-ice-box.unavail/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                
            </div>
        </div>
    </div>
</section>

<section id="brands">
    <div class="container">
        <div class="owl-carousel carousel-brands">
            <div class="item">
                <a href="">
                    <img src="{{asset('assets/img/logo-brand/Arai.png')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{asset('assets/img/logo-brand/Shoei.png')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{asset('assets/img/logo-brand/Taichi.png')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="">
                    <img src="{{asset('assets/img/logo-brand/KYT.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

{{-- <section id="seller">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper head-section" style="">
                            <div>
                                Verified <b>Seller</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel carousel-seller"> 
                            <div class="item">
                                <a href="/toko-detail">
                                    <div class="card card-item">
                                        <div class="card-img">
                                            <img src="{{asset('assets/img/thumbnail/thumb2.png')}}">
                                        </div>
                                        <div class="card-body">
                                            <div class="card-logo">
                                                <img src="{{asset('assets/img/logo/tab-icon.png')}}" alt="">
                                            </div>
                                            <p class="card-nama-toko">RC b19 Store <img src="{{asset('assets/img/badge/verif.png')}}" alt=""></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section id="wts-wtb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" >
                <section id="wts-item">
                    <div class="row">
                        <div class="col-12">
                            <div class="wrapper head-section" style="">
                                <div>
                                    <b>WTS</b> (Want To Sell)
                                </div>
                                <div>
                                    Lihat Semua <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel carousel-wts">
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
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section id="wtb-item">
                    <div class="row">
                        <div class="col-12">
                            <div class="wrapper head-section" style="">
                                <div>
                                    <b>WTB</b> (Want To Buy)
                                </div>
                                <div>
                                    Lihat Semua <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel carousel-wts">
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
                    </div>
                </section>
            </div>
        </div>
    </div>
</section> --}}

<section id="all-item">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper head-section" style="">
                    <div>
                        Semua Item di <b>BIKERSTHINGS</b>
                    </div>
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($alldata as $item)
            <div class="col-lg-2 col-6">
                <a href="/item-detail">
                    <div class="card card-item">
                        <div class="card-img">
                            <img src="https://panel.bikersthings.com/storage/images/item/{{ $item->thumbnail_item }}">
                            <div class="card-status">
                                WTB
                            </div>
                            <div class="card-badges">
                                <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-title">{{$item->item_name}}</p>
                            <p class="card-price">{{$item->harga}}</p>
                            <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-gradient" style="">Muat Lebih Banyak</button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('.carousel-ice-box, .carousel-seller').owlCarousel({
            loop:true,
            dots:false,
            margin:20,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            responsive:{
                600:{
                    items:5
                },
                0:{
                    items:2
                }
            }
        });
        $('.carousel-brands').owlCarousel({
            loop:true,
            dots:false,
            margin:50,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            responsive:{
                600:{
                    items:9
                },
                0:{
                    items:2
                }
            }
        });
        $('.carousel-wts').owlCarousel({
            loop:true,
            dots:false,
            margin:20,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            responsive:{
                600:{
                    items:4
                },
                0:{
                    items:2
                }
            }
        });
        $('.carousel-banner').owlCarousel({
            autoplay:true,
            center: true,
            loop:true,
            dots:false,
            responsive:{
                600:{
                    items:1,
                    stagePadding: 300,
                    margin:20,
                },
                0:{
                    items:1,
                    stagePadding: 12,
                    margin:5,
                }
            }
        });

    })
</script>
@endsection