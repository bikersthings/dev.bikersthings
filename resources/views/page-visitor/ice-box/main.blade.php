@extends('layout-visitor.main')

@section('content')
    <section id="toko-banner">
        <div class="container">
            <img src="assets/img/banner/ban2.png" alt="" style="width: 100%">
        </div>
    </section>
    <section id="ice-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <x-ice-box.avail/>
                </div>
                <div class="col-lg-2">
                    <x-ice-box.unavail/>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection