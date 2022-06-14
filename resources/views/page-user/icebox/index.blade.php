@extends('stisla-layout.main')

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
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Ice Box</th>
                                        <th>Ice Coupon</th>
                                        <th>Tanggal Redeem</th>
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