@extends('layout-stisla.main')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Wish List</h1>
            </div>
            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="dataTable">
                                        <thead class="text-center">
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Produk</th>
                                                <th>Harga</th>
                                                <th>Kontak</th>
                                                <th>Toko</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td class="align-middle">
                                                    1
                                                </td>
                                                <td class="align-middle">
                                                    <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="" style="width: 150px; border-radius: 10px">
                                                    <br>
                                                    <div class="badge badge-primary mt-2">Nama Barang</div>
                                                    <div class="mt-1"><b>[Kategori] - [Brand] - [Tipe]</b></div>
                                                </td>
                                                <td class="align-middle">
                                                    Rp [90.000.000]
                                                </td>
                                                <td class="align-middle wishlist-sosmed">
                                                    <div class="wrapper">
                                                        {{-- <a href="#" class="badge badge-info">Info</a> --}}
                                                        <a href="" class="badge badge-primary"><i class="fab fa-whatsapp"></i> 0813-1234-1234</a> <br>
                                                        <a href="" class="badge badge-primary"><i class="fab fa-line"></i> Line</a> <br>
                                                        <a href="" class="badge badge-primary"><i class="fab fa-instagram"></i> Instagram</a> <br>
                                                        <a href="" class="badge badge-primary"><i class="fab fa-telegram-plane"></i> Telegram</a>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <img src="{{asset('assets/img/logo/tab-icon.png')}}" alt="" style="width: 40px"> [B19 Store]
                                                </td>
                                                <td class="align-middle">
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-heart-broken"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-primary">
                            <div class="card-body text-center">
                                <H5>Total Harga : Rp [90.000.000]</H5>
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

    $(document).ready(function(){
    
        $("#dataTable").dataTable({
            "columnDefs": [
                { "sortable": false, "targets": [5] }
            ]
        });

    });
    
</script>
@endsection