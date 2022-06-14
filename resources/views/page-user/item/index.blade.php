@extends('stisla-layout.main')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Item</h1>
            </div>
            <div class="section-body">
                {{-- <div class="row">
                    <div class="col-lg-2 col-6">
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
                </div> --}}
                <a href="{{('/user/item/create')}}" class="btn btn-primary mb-4">Tambah Item</a>
                <div class="row">
                    <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTable">
                                <thead class="text-center">
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Kategori</th>
                                        <th>Brand</th>
                                        <th>Tipe</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td class="align-middle text-center">
                                            1
                                        </td>
                                        <td class="text-center">
                                            <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="" style="width: 150px; border-radius: 10px">
                                            <br>
                                            <div class="badge badge-primary mt-2">Nama Item</div>
                                        </td>
                                        <td class="align-middle">
                                            Rp [90.000.000]
                                        </td>
                                        <td class="align-middle">
                                            [Kategori]
                                        </td>
                                        <td class="align-middle">
                                            [Brand]
                                        </td>
                                        <td class="align-middle">
                                            [Tipe]
                                        </td>
                                        <td class="align-middle">
                                            <div class="badge badge-dark">Reguler</div> <br>
                                            <div class="badge badge-warning">On Hold</div> <br>
                                            <div class="badge badge-primary">Boosted!</div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-success"><i class="fas fa-rocket"></i></button>
                                            <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-center">
                                            1
                                        </td>
                                        <td class="text-center">
                                            <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="" style="width: 150px; border-radius: 10px">
                                            <br>
                                            <div class="badge badge-primary mt-2">Nama Item</div>
                                        </td>
                                        <td class="align-middle">
                                            Rp [90.000.000]
                                        </td>
                                        <td class="align-middle">
                                            [Kategori]
                                        </td>
                                        <td class="align-middle">
                                            [Brand]
                                        </td>
                                        <td class="align-middle">
                                            [Tipe]
                                        </td>
                                        <td class="align-middle">
                                            <div class="badge badge-dark">Reguler</div> <br>
                                            <div class="badge badge-warning">On Hold</div> <br>
                                            <div class="badge badge-primary">Boosted!</div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-success"><i class="fas fa-rocket"></i></button>
                                            <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-center">
                                            1
                                        </td>
                                        <td>
                                            <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="" style="width: 150px; border-radius: 10px">
                                            <br>
                                            <div class="badge badge-primary mt-2">Nama Item</div>
                                        </td>
                                        <td class="align-middle">
                                            Rp [90.000.000]
                                        </td>
                                        <td class="align-middle">
                                            [Kategori]
                                        </td>
                                        <td class="align-middle">
                                            [Brand]
                                        </td>
                                        <td class="align-middle">
                                            [Tipe]
                                        </td>
                                        <td class="align-middle">
                                            <div class="badge badge-dark">Reguler</div> <br>
                                            <div class="badge badge-warning">On Hold</div> <br>
                                            <div class="badge badge-primary">Boosted!</div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-success"><i class="fas fa-rocket"></i></button>
                                            <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
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
    <script>

        $(document).ready(function(){
        
            $("#dataTable").dataTable({
                "columnDefs": [
                    { "sortable": false, "targets": [7] }
                ]
            });

        });
        
    </script>
@endsection