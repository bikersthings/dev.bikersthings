@extends('layout-visitor.main')

@section('content')
<section id="banner">
    <div class="" >
        <div class="owl-carousel carousel-banner">
            <div class="item">
                <img src="{{asset('assets/img/banner/ban1.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('assets/img/banner/ban2.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('assets/img/banner/ban3.png')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('assets/img/banner/ban4.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section id="wts-item">
    <div class="container">
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
    </div>
    <div class="container">
        <div class="owl-carousel carousel-wts">
            <div class="item">
                <a href="/item-detail">
                    <div class="card card-item">
                        <img src="{{asset('assets/img/thumbnail/thumb4.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb2.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb3.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb5.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb4.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb3.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb2.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb1.png')}}" class="card-img-top">
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

{{-- <div class="container">
    <hr style="height: 10px; background: linear-gradient(90.02deg, #04465F 0%, #189BB4 100%);">
</div> --}}

<section id="wtb-item">
    <div class="container">
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
    </div>
    <div class="container">
        <div class="owl-carousel carousel-wts">
            <div class="item">
                <a href="/item-detail">
                    <div class="card card-item">
                        <img src="{{asset('assets/img/thumbnail/thumb1.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb2.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb3.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb4.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb5.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb3.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb1.png')}}" class="card-img-top">
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
                        <img src="{{asset('assets/img/thumbnail/thumb4.png')}}" class="card-img-top">
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

{{-- <div class="container">
    <hr style="height: 10px; background: linear-gradient(90.02deg, #04465F 0%, #189BB4 100%);">
</div> --}}

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
            <div class="col-lg-2 col-6">
                <a href="/item-detail">
                    <div class="card card-item">
                        <div class="card-img">
                            <img src="{{asset('assets/img/thumbnail/thumb5.png')}}">
                        </div>
                        <div class="card-body">
                            <p class="card-title">AGV Pista GPRR</p>
                            <p class="card-price">Rp. 90.000.000</p>
                            <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="/item-detail">
                    <div class="card card-item">
                        <img src="{{asset('assets/img/thumbnail/thumb4.png')}}" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">AGV Pista GPRR</p>
                            <p class="card-price">Rp. 90.000.000</p>
                            <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="/item-detail">
                    <div class="card card-item">
                        <img src="{{asset('assets/img/thumbnail/thumb3.png')}}" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">AGV Pista GPRR</p>
                            <p class="card-price">Rp. 90.000.000</p>
                            <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="/item-detail">
                    <div class="card card-item">
                        <img src="{{asset('assets/img/thumbnail/thumb2.png')}}" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">AGV Pista GPRR</p>
                            <p class="card-price">Rp. 90.000.000</p>
                            <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="/item-detail">
                    <div class="card card-item">
                        <img src="{{asset('assets/img/thumbnail/thumb1.png')}}" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">AGV Pista GPRR</p>
                            <p class="card-price">Rp. 90.000.000</p>
                            <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="/item-detail">
                    <div class="card card-item">
                        <img src="{{asset('assets/img/thumbnail/thumb2.png')}}" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">AGV Pista GPRR</p>
                            <p class="card-price">Rp. 90.000.000</p>
                            <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="/item-detail">
                    <div class="card card-item">
                        <img src="{{asset('assets/img/thumbnail/thumb5.png')}}" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">AGV Pista GPRR</p>
                            <p class="card-price">Rp. 90.000.000</p>
                            <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-6">
                <a href="/item-detail">
                    <div class="card card-item">
                        <img src="{{asset('assets/img/thumbnail/thumb4.png')}}" class="card-img-top">
                        <div class="card-body">
                            <p class="card-title">AGV Pista GPRR</p>
                            <p class="card-price">Rp. 90.000.000</p>
                            <p class="card-location"><i class="fas fa-map-marker-alt"></i> Gandaria City</p>
                        </div>
                    </div>
                </a>
            </div>
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
        $('.carousel-wts').owlCarousel({
            loop:true,
            dots:false,
            margin:20,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            responsive:{
                600:{
                    items:6
                },
                0:{
                    items:2
                }
            }
        });
        $('.carousel-banner').owlCarousel({
            center: true,
            loop:true,
            stagePadding: 300,
            dots:false,
            responsive:{
                600:{
                    items:1,
                    stagePadding: 300,
                    margin:20,
                },
                0:{
                    items:1,
                    stagePadding: 0,
                    margin:20,
                }
            }
        });

    })
</script>
@endsection