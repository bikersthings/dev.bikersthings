@extends('layout-visitor.main')

@section('content')
<section id="banner">
    <div class="" >
        <div class="owl-carousel carousel-banner">
            <div class="item">
                <a href="">
                    <img src="{{asset('assets/img/banner/ban5.jpg')}}" alt="" style="border-radius: 10px">
                </a>
            </div>
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
                            <div>
                                <a href="" style="color: white">
                                    Lihat Lainnya <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel carousel-ice-box">
                            {{-- <div class="item">
                                <x-ice-box.unavail/>
                            </div> --}}
                            @foreach ($iceboxes['data'] as $ib)
                            <div class="item">
                                <div class="card card-item-ib">
                                    <div class="card-body">
                                        <img src="{{$ib['ib_thumbnail']}}" alt="" style="{{ $ib['is_expired']==true ? 'filter: grayscale(100%);' : 'no' }}">
                                    </div>
                                    <div class="card-footer">
                                        <div class="nama-ib">{{$ib['ib_name']}}</div>
                                        <div class="progress progress-ib my-2" style="position: relative; background-color: #8ec0ce">
                                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$ib['ib_participants']['ib_participant_percentage']}}%; text-align: center"></div>
                                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color:white">
                                                {{$ib['ib_participants']['ib_participant_left']}} Left
                                            </div>
                                        </div>
                                        {!! ($ib['is_expired']==true) ? 
                                            '<button class="btn btn-gradient" disabled>FINISHED</button>' 
                                            : 
                                            '<button class="btn btn-gradient">REDEEM</button>' 
                                        !!}
                                        <div class="harga-ib">
                                            {{$ib['ib_price_ice_coupon_thousand']}} Ice Coupon
                                        </div>
                                        <div class="exp-ib">
                                            Exp : {{$ib['ib_exp_date']}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                
            </div>
        </div>
    </div>
</section>

<section id="new-comer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" id="new-comer-wts">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper head-section" style="">
                            <div>
                                <b>WTS</b> (Want To Sell)
                            </div>
                            <div>
                                <a href="" style="color: white">
                                    Lihat Lainnya <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel carousel-new-comer">
                    @foreach ($filteredItemWTS as $item)
                    <div class="item">
                        <a href="/item-detail">
                            <div class="card card-item">
                                <div class="card-img">
                                    <img src="{{$item['item_photo'][0]}}">
                                    @switch($item['item_type'][0]['item_type_id'])
                                        @case(0)
                                            @break
                                        @case(1)
                                            <div class="card-status">{{$item['item_type'][0]['item_type_name']}}</div>
                                            @break
                                        @case(2)
                                            <div class="card-status">{{$item['item_type'][0]['item_type_name']}}</div>
                                            @break
                                    @endswitch
                                    <div class="card-badges">
                                        
                                        {!! ($item['user'][0]['user_status'][0]['user_status_id']==1) ? 
                                            '<img src="assets/img/badge/verif.png" alt="">' 
                                            : 
                                            '' 
                                        !!}
                                        
                                        {!! ($item['item_status'][0]['item_status_id']==1) ? 
                                            '<img src="assets/img/badge/boost-gold.png" alt="">' 
                                            : 
                                            '' 
                                        !!}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title">{{$item['item_name']}}</p>
                                    <p class="card-price" value="{{$item['item_price']}}">Rp {{$item['item_price_pointed']}}</p>
                                    <p class="card-location"><i class="fas fa-map-marker-alt"></i>{{$item['user'][0]['city_name']}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6" id="new-comer-wtb">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper head-section" style="">
                            <div>
                                <b>WTB</b> (Want To Buy)
                            </div>
                            <div>
                                <a href="" style="color: white">
                                    Lihat Lainnya <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel carousel-new-comer">
                    @foreach ($filteredItemWTB as $item)
                    <div class="item">
                        <a href="/item-detail">
                            <div class="card card-item">
                                <div class="card-img">
                                    <img src="{{$item['item_photo'][0]}}">
                                    @switch($item['item_type'][0]['item_type_id'])
                                        @case(0)
                                            @break
                                        @case(1)
                                            <div class="card-status">{{$item['item_type'][0]['item_type_name']}}</div>
                                            @break
                                        @case(2)
                                            <div class="card-status">{{$item['item_type'][0]['item_type_name']}}</div>
                                            @break
                                    @endswitch
                                    <div class="card-badges">
                                        
                                        {!! ($item['user'][0]['user_status'][0]['user_status_id']==1) ? 
                                            '<img src="assets/img/badge/verif.png" alt="">' 
                                            : 
                                            '' 
                                        !!}
                                        
                                        {!! ($item['item_status'][0]['item_status_id']==1) ? 
                                            '<img src="assets/img/badge/boost-gold.png" alt="">' 
                                            : 
                                            '' 
                                        !!}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title">{{$item['item_name']}}</p>
                                    <p class="card-price" value="{{$item['item_price']}}">Rp {{$item['item_price_pointed']}}</p>
                                    <p class="card-location"><i class="fas fa-map-marker-alt"></i>{{$item['user'][0]['city_name']}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
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
            @foreach ($brands as $brand)
            <div class="item">
                <a href="">
                    <img src="{{$brand['fields']['item_brand_img'][0]['url']}}" alt="">
                </a>
            </div>
            @endforeach 
        </div>
    </div>
</section>

<section id="kategori">
    <div class="container">
        <div class="owl-carousel carousel-kategori">
            @foreach ($categories as $category)
            <div class="item">
                <a href="">
                    <div class="card" style="text-align: center; font-weight: bold">
                        <div class="card-body" style="">
                            <img class="mr-2" src="{{$category['fields']['item_category_img'][0]['url']}}" alt=""> {{$category['fields']['item_category_name']}}
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
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
            @foreach ($items['data'] as $item)
            <div class="col-lg-2 col-6">
                <a href="/item-detail">
                    <div class="card card-item">
                        <div class="card-img">
                            <img src="{{$item['item_photo'][0]}}">
                            @switch($item['item_type'][0]['item_type_id'])
                                @case(0)
                                    @break
                                @case(1)
                                    <div class="card-status">{{$item['item_type'][0]['item_type_name']}}</div>
                                    @break
                                @case(2)
                                    <div class="card-status">{{$item['item_type'][0]['item_type_name']}}</div>
                                    @break
                            @endswitch
                            <div class="card-badges">
                                
                                {!! ($item['user'][0]['user_status'][0]['user_status_id']==1) ? 
                                    '<img src="assets/img/badge/verif.png" alt="">' 
                                    : 
                                    '' 
                                !!}
                                
                                {!! ($item['item_status'][0]['item_status_id']==1) ? 
                                    '<img src="assets/img/badge/boost-gold.png" alt="">' 
                                    : 
                                    '' 
                                !!}
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-title">{{$item['item_name']}}</p>
                            <p class="card-price" value="{{$item['item_price']}}">Rp {{$item['item_price_pointed']}}</p>
                            <p class="card-location"><i class="fas fa-map-marker-alt"></i>{{$item['user'][0]['city_name']}}</p>
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
        
        $('.carousel-ice-box').owlCarousel({
            loop:true,
            dots:false,
            margin:20,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            
            responsive:{
                992:{
                    items:5
                },
                600:{
                    items:3
                },
                0:{
                    items:2
                }
            }
        });
        
        $('.carousel-new-comer').owlCarousel({
            // stagePadding: 10,
            loop:true,
            dots:false,
            margin:18,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            responsive:{
                600:{
                    items:3
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
                992:{
                    items:9
                },
                769:{
                    items:5
                },
                600:{
                    items:3
                },
                0:{
                    items:2
                }
            }
        });
        
        $('.carousel-kategori').owlCarousel({
            loop:true,
            dots:false,
            margin:24,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            responsive:{
                992:{
                    items:9
                },
                769:{
                    items:5
                },
                600:{
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