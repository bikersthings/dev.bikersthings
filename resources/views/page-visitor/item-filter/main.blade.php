@extends('layout-visitor.main')

@section('content')
    
    <section id="filter-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <section id="filter-item">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button filter-head" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Filter
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="filter-title">
                                                    Spesifikasi
                                                </div>
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select id="kategori" class="js-states form-control">
                                                        <option>Kategori 1</option>
                                                        <option>Kategori 2</option>
                                                        <option>Kategori 3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Brand</label>
                                                    <select id="brand" class="js-states form-control">
                                                        <option>Brand 1</option>
                                                        <option>Brand 2</option>
                                                        <option>Brand 3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tipe</label>
                                                    <select id="tipe" class="js-states form-control">
                                                        <option>Tipe 1</option>
                                                        <option>Tipe 2</option>
                                                        <option>Tipe 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="card-body">
                                                <div class="filter-title">
                                                    Harga
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">Rp</div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Harga Minimum">
                                                    </div>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">Rp</div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Harga Maksimum">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="card-body">
                                                <div class="filter-title">
                                                    Kondisi
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                    Baru
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                    Second
                                                    </label>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="card-body">
                                                <button class="btn btn-gradient" style="width: 100%">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="filter-head">
                            Filter
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="filter-title">
                                    Spesifikasi
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select id="kategori" class="js-states form-control">
                                        <option>Kategori 1</option>
                                        <option>Kategori 2</option>
                                        <option>Kategori 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select id="brand" class="js-states form-control">
                                        <option>Brand 1</option>
                                        <option>Brand 2</option>
                                        <option>Brand 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tipe</label>
                                    <select id="tipe" class="js-states form-control">
                                        <option>Tipe 1</option>
                                        <option>Tipe 2</option>
                                        <option>Tipe 3</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="filter-title">
                                    Harga
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Harga Minimum">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Harga Maksimum">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="filter-title">
                                    Kondisi
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                    Baru
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                    Second
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <button class="btn btn-gradient" style="width: 100%">Filter</button>
                            </div>
                        </div> --}}
                    </section>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="filter-head">
                        Tags : <span><div>Helm</div><div>AGV</div><div>K-3sv</div></span>
                    </div>
                    <section id="all-item" class="m-0">
                        
                        <div class="row">
                            <div class="col-lg-3 col-6">
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
                            <div class="col-lg-3 col-6">
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
                            <div class="col-lg-3 col-6">
                                <a href="/item-detail">
                                    <div class="card card-item">
                                        <div class="card-img">
                                            <img src="{{asset('assets/img/thumbnail/thumb3.png')}}">
                                            {{-- <div class="card-status">
                                                WTB
                                            </div> --}}
                                            <div class="card-badges">
                                                {{-- <img src="{{asset('assets/img/badge/verif.png')}}" alt=""> --}}
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
                            <div class="col-lg-3 col-6">
                                <a href="/item-detail">
                                    <div class="card card-item">
                                        <div class="card-img">
                                            <img src="{{asset('assets/img/thumbnail/thumb2.png')}}">
                                            {{-- <div class="card-status">
                                                WTB
                                            </div> --}}
                                            <div class="card-badges">
                                                <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                                {{-- <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt=""> --}}
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
                            <div class="col-lg-3 col-6">
                                <a href="/item-detail">
                                    <div class="card card-item">
                                        <div class="card-img">
                                            <img src="{{asset('assets/img/thumbnail/thumb1.png')}}">
                                            <div class="card-status">
                                                WTB
                                            </div>
                                            <div class="card-badges">
                                                <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                                {{-- <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt=""> --}}
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
                            <div class="col-lg-3 col-6">
                                <a href="/item-detail">
                                    <div class="card card-item">
                                        <div class="card-img">
                                            <img src="{{asset('assets/img/thumbnail/thumb3.png')}}">
                                            <div class="card-status">
                                                WTB
                                            </div>
                                            <div class="card-badges">
                                                <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                                {{-- <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt=""> --}}
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
                            <div class="col-lg-3 col-6">
                                <a href="/item-detail">
                                    <div class="card card-item">
                                        <div class="card-img">
                                            <img src="{{asset('assets/img/thumbnail/thumb1.png')}}">
                                            <div class="card-status">
                                                JASA
                                            </div>
                                            <div class="card-badges">
                                                <img src="{{asset('assets/img/badge/verif.png')}}" alt="">
                                                {{-- <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt=""> --}}
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
                            <div class="col-lg-3 col-6">
                                <a href="/item-detail">
                                    <div class="card card-item">
                                        <div class="card-img">
                                            <img src="{{asset('assets/img/thumbnail/thumb4.png')}}">
                                            {{-- <div class="card-status">
                                                WTB
                                            </div> --}}
                                            <div class="card-badges">
                                                {{-- <img src="{{asset('assets/img/badge/verif.png')}}" alt=""> --}}
                                                {{-- <img src="{{asset('assets/img/badge/boost-gold.png')}}" alt=""> --}}
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
                        <div class="row">
                            <div class="col-12 text-center">
                                <button class="btn btn-gradient" style="">Muat Lebih Banyak</button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
<script>
    $("#kategori").select2({
        placeholder: "Pilih Kategori",
        allowClear: true
    });
    $("#brand").select2({
        placeholder: "Pilih Brand",
        allowClear: true
    });
    $("#tipe").select2({
        placeholder: "Pilih Tipe",
        allowClear: true
    });
</script>
@endsection