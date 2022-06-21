@extends('layout-stisla.main')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Item</h1>
            </div>
            <div class="section-body">
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
                                            <th>Owner</th>
                                            <th>Tipe Posting</th>
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Tipe</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td class="align-middle ">
                                                1
                                            </td>
                                            <td class="align-middle ">
                                                @tebe19_
                                            </td>
                                            <td class="align-middle">
                                                WTS
                                            </td>
                                            <td class="">
                                                <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="" style="width: 150px; border-radius: 10px">
                                                <br>
                                                <div class="badge badge-primary mt-2">Nama Item</div>
                                                <br>
                                                <div class="mt-1"><b>[Kategori] - [Brand] - [Tipe]</b></div>
                                            </td>
                                            <td class="align-middle" style="color: red">
                                                <b>Rp [90.000.000]</b>
                                            </td>
                                            <td class="align-middle text-justify">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> <br>
                                                <ol>
                                                    <li>
                                                        Commodi veritatis 
                                                    </li>
                                                    <li>
                                                        epudiandae maxime i
                                                    </li>
                                                    <li>
                                                        ipsa perferendis 
                                                    </li>
                                                </ol>
                                                tempora aperiam iste sit porro voluptatum explicabo minima 
                                            </td>
                                            <td class="align-middle">
                                                [Tipe]
                                            </td>
                                            <td class="align-middle">
                                                <div class="badge badge-dark">Reguler</div> <br>
                                                <div class="badge badge-warning">On Hold</div> <br>
                                                <div class="badge badge-primary">Boosted!</div>
                                            </td>
                                            <td class="align-middle ">
                                                <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                                <button class="btn btn-danger" id="swalDelete"><i class="fas fa-trash"></i></button>
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
                    { "sortable": false, "targets": [8] }
                ]
            });

        });
        
    </script>
    <script>
        $("#swalBoost").click(function() {
            swal({
                title: 'Boost item?',
                text: 'Boost! voucher akan terpakai, dan status item akan menjadi Boosted!',
                icon: 'info',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal({
                        text: 'Status item menjadi Boosted!',
                        icon: 'success',
                    });
                } else {
                    swal({
                        text: 'Status item masih reguler',
                        icon: 'warning',
                    });
                }
            });
        });

        $("#swalDelete").click(function() {
            swal({
                title: 'Hapus item?',
                text: 'Item akan terhapus dan menghilang dari daftar pencarian BIKERSTHINGS',
                icon: 'info',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal({
                        text: 'Item berhasil dihapus!',
                        icon: 'success',
                    });
                } else {
                    swal({
                        text: 'Item masih ada',
                        icon: 'warning',
                    });
                }
            });
        });
    </script>
    
@endsection