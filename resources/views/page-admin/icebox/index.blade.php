@extends('layout-stisla.main')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Ice Box</h1>
                <div class="section-header-breadcrumb">
                    <div class="badge badge-primary">Ice Coupon : [10.000]</div>
                </div>
            </div>
            <div class="section-body">
                <a href="" class="btn btn-primary mb-4">Tambah Ice Box</a>
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
                                                <th>Ice Box</th>
                                                <th>Deskripsi</th>
                                                <th>@ Ice Coupon</th>
                                                <th>Expired</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td class="align-middle text-center">
                                                    1
                                                </td>
                                                <td class="text-center">
                                                    <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="" style="width: 100px; border-radius: 10px">
                                                    <br>
                                                    <a href="">
                                                        <div class="badge badge-primary mt-2">[Nama Ice Box]</div>
                                                    </a>
                                                </td>
                                                <td class="align-middle text-center">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, reiciendis?
                                                </td>
                                                <td class="align-middle">
                                                    250
                                                </td>
                                                <td class="align-middle">
                                                    50 / 100 Participant <br>
                                                    <div class="progress my-3">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                                    </div>
                                                    <div class="badge badge-success">Ative : [yyyy:mm:dd]</div>
                                                    
                                                </td>
                                                <td class="align-middle ">
                                                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search"></i></button>
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
                { "sortable": false, "targets": [0] }
            ]
        });

    });
    
</script>
@endsection