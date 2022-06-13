@extends('stisla-layout.main')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Setting Profile</h1>
            </div>
            <div class="section-body">
                <h2 class="section-title">Setting Profile</h2>
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
                    <div class="col-12">
                        <div class="card card-form">
                            <div class="card-body">
                                <div class="form-title">Harga Item</div>
                                <div class="form-sub-title">Harga Jual atau Budget Pembelian</div>
                                <div class="form-group mb-0">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="number" class="form-control" placeholder="90.000.000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-form">
                            <div class="card-body">
                                <div class="form-title">Foto Item</div>
                                <div class="form-sub-title">Rekomendasi foto 500 x 500 px</div>
                                <div class="row">
                                    <div class="col-lg-2 col-6">
                                        <img src="{{asset('assets/img/placeholder/Utama.png')}}" alt="">
                                    </div>
                                    <div class="col-lg-2 col-6">
                                        <img src="{{asset('assets/img/placeholder/Depan.png')}}" alt="">
                                    </div>
                                    <div class="col-lg-2 col-6">
                                        <img src="{{asset('assets/img/placeholder/Kanan.png')}}" alt="">
                                    </div>
                                    <div class="col-lg-2 col-6">
                                        <img src="{{asset('assets/img/placeholder/Belakang.png')}}" alt="">
                                    </div>
                                    <div class="col-lg-2 col-6">
                                        <img src="{{asset('assets/img/placeholder/Kiri.png')}}" alt="">
                                    </div>
                                    <div class="col-lg-2 col-6">
                                        <img src="{{asset('assets/img/placeholder/Detail.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-form">
                            <div class="card-body">
                                <div class="form-title">Detail Item</div>
                                <div class="form-sub-title">Detail kondisi, ukuran, dan kelengkapan</div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" style="height: 200px"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control select2">
                                                <option>Kategori 1</option>
                                                <option>Kategori 2</option>
                                                <option>Kategori 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <select class="form-control select2">
                                                <option>Brand 1</option>
                                                <option>Brand 2</option>
                                                <option>Brand 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Tipe</label>
                                            <select class="form-control select2">
                                                <option>Tipe 1</option>
                                                <option>Tipe 2</option>
                                                <option>Tipe 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
<script>
    if(jQuery().summernote) {
        $(".summernote").summernote({
            dialogsInBody: true,
            minHeight: 250,
        });
        $(".summernote-simple").summernote({
            dialogsInBody: true,
            minHeight: 150,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['para', ['paragraph']]
            ]
        });
    }
</script>
@endsection