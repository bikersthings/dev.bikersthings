@extends('stisla-layout.main')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Item</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="card card-item">
                            <div class="card-body">
                                <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="">
                            </div>
                            <div class="card-footer">
                                <div class="nama-item">[Nama Item]</div>
                                <div class="harga-item my-1 text-right">Rp [20.000.000]</div>
                                <div class="lokasi-item"><i class="fas fa-map-marker-alt"></i> [Lokasi yang dia pilih]</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="card card-item">
                            <div class="card-body">
                                <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="">
                            </div>
                            <div class="card-footer">
                                <div class="nama-item">[Nama Item]</div>
                                <div class="harga-item my-1 text-right">Rp [20.000.000]</div>
                                <div class="lokasi-item"><i class="fas fa-map-marker-alt"></i> [Lokasi yang dia pilih]</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="card card-item">
                            <div class="card-body">
                                <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="">
                            </div>
                            <div class="card-footer">
                                <div class="nama-item">[Nama Item]</div>
                                <div class="harga-item my-1 text-right">Rp [20.000.000]</div>
                                <div class="lokasi-item"><i class="fas fa-map-marker-alt"></i> [Lokasi yang dia pilih]</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection