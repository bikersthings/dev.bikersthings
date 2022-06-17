@extends('layout-visitor.main')

@section('content')
    <section id="toko-banner">
        <div class="container">
            <img src="assets/img/banner/ban1.png" alt="" style="width: 100%">
        </div>
    </section>
    <section id="toko-info" class="mb-3">
        <div class="container text-center">
            <div class="item-seller-nama" style="display: flex; justify-content: center; align-items: center">
                <img src="{{asset('assets/img/logo/tab-icon.png')}}" alt="" style="height: 50px">
                <b style="font-size: 24px; margin: 0px 20px">RC b19 Store</b>
                <i class="fas fa-certificate"></i>
            </div>
        </div>
    </section>
    <section id="toko-sosmed">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-6">
                <button class="btn btn-sosmed"><img src="{{asset('assets/img/sosmed/sosmed-wa.png')}}" alt=""> Whats App</button>
            </div>
            <div class="col-lg-2 col-6">
                <button class="btn btn-sosmed"><img src="{{asset('assets/img/sosmed/sosmed-line.png')}}" alt=""> Line</button>
            </div>
            <div class="col-lg-2 col-6">
                <button class="btn btn-sosmed"><img src="{{asset('assets/img/sosmed/sosmed-ig.png')}}" alt=""> Instagram</button>
            </div>
            <div class="col-lg-2 col-6">
                <button class="btn btn-sosmed"><img src="{{asset('assets/img/sosmed/sosmed-tele.png')}}" alt=""> Telegram</button>
            </div>
        </div>
    </section>
    <section id="all-item">
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
    
@endsection