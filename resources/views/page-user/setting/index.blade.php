@extends('layout-stisla.main')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Setting Profile</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card card-form card-primary">
                            <div class="card-body">
                                <div class="form-title">Foto Profile</div>
                                <div class="form-sub-title">300px X 300px</div>
                                <img src="{{asset('assets/img/placeholder/Utama.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card card-form card-primary">
                            <div class="card-body">
                                <div class="form-title">Big Banner</div>
                                <div class="form-sub-title">1000px X 250px</div>
                                <img src="{{asset('assets/img/placeholder/banner.png')}}" alt="">
                            </div>
                        </div>           
                    </div>
                    <div class="col-12">
                        <div class="card card-form card-primary">
                            <div class="card-body">
                                <div class="form-title mb-4">Data Profile</div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Akun</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama Toko</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-form card-primary">
                            <div class="card-body">
                                <div class="form-title">Contact dan Sosial Media</div>
                                <div class="form-sub-title">Kontak yang digunakan untuk menghubungi kamu</div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group mb-0">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text"><i class="fab fa-whatsapp-square"></i></div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="WhatsApp Aktif">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-0">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text"><i class="fab fa-line"></i></div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-0">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-0">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                  <div class="input-group-text"><i class="fab fa-telegram-plane"></i></div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="username">
                                            </div>
                                        </div>
                                    </div>
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