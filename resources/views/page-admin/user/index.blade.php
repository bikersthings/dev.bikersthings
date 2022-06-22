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
                                            <th>Nama</th>
                                            <th>Instagram</th>
                                            <th>Grade</th>
                                            <th>Verifikasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td class="align-middle text-center">
                                                1
                                            </td>
                                            <td class="text-center">
                                                Tubagus Kresna Bayu
                                            </td>
                                            <td class="align-middle text-center">
                                                @tebe19_
                                            </td>
                                            <td class="align-middle">
                                                Bronze
                                            </td>
                                            <td class="align-middle">
                                                <i class="text-success fas fa-power-off"></i> yyyy/mm/dd
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
    @include('page-admin.user.modal')
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