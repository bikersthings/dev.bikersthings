@extends('stisla-layout.main')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create Item</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-form">
                            <div class="card-body">
                                <div class="form-title">Saya Ingin</div>
                                <div class="form-sub-title">WTS untuk item dijual, dan WTB untuk item dibeli/dicari.</div>
                                <div class="radio-form">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="wts" value="option1" checked="">
                                        <label class="form-check-label" for="wts">
                                            WTS (Menjual Barang)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="wtb" value="option2">
                                        <label class="form-check-label" for="wtb">
                                            WTB (Membeli/Mencari Barang)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="jasa" value="option3">
                                        <label class="form-check-label" for="jasa">
                                            Jasa (Menjual Jasa)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-form">
                            <div class="card-body">
                                <div class="form-title">Nama Item</div>
                                <div class="form-sub-title">Nama Item harus terdiri dari Merek dan Tipe.</div>
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="AGV (Merk) + Pista GP Misano 2015 (Tipe)   /   KYT (Merk) + Kyoto (Tipe)   /   SENA (Merk) + 50r (Tipe)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')

@endsection