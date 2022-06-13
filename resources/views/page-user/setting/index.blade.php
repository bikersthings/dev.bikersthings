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
                    <div class="col-lg-4">
                        <div class="card card-form">
                            <div class="card-body">
                                <div class="form-title mb-4">Foto Profile</div>
                                <div class="radio-form">
                                    <img src="assets/img/placeholder/Utama.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-form">
                            <div class="card-body">
                                <div class="form-title mb-4">Data Profile</div>
                                <div class="form-group">
                                    <label>Nama Akun</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-form">
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