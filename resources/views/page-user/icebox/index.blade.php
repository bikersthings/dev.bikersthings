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
                    <div class="col-lg-2 col-6">
                        <div class="card card-item-ib">
                            <div class="card-body">
                                <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="">
                            </div>
                            <div class="card-footer">
                                <div class="nama-ib">[Nama Ice Box]</div>
                                <div class="progress progress-ib my-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                </div>
                                <div class="progress-num my-2">
                                    75/100
                                </div>
                                <button class="btn btn-primary">REDEEM</button>
                                <div class="harga-ib">
                                    50 Ice Coupon
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            <th>Ice Coupon</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
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
                                                <div class="badge badge-primary mt-2">[Nama Ice Box]</div>
                                            </td>
                                            <td class="align-middle">
                                                250
                                            </td>
                                            <td class="align-middle">
                                                hh:mm:ss - yyyy/mm/dd
                                            </td>
                                            <td class="align-middle">
                                                Redeem Ice Box
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                2
                                            </td>
                                            <td class="text-center">
                                                -
                                            </td>
                                            <td class="align-middle">
                                                500
                                            </td>
                                            <td class="align-middle">
                                                hh:mm:ss - yyyy/mm/dd
                                            </td>
                                            <td class="align-middle">
                                                Boost! Voucher Gift
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle text-center">
                                                3
                                            </td>
                                            <td class="text-center">
                                                -
                                            </td>
                                            <td class="align-middle">
                                                1500
                                            </td>
                                            <td class="align-middle">
                                                hh:mm:ss - yyyy/mm/dd
                                            </td>
                                            <td class="align-middle">
                                                BIKERSTHINGS
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