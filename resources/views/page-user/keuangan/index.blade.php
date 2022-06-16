@extends('layout-stisla.main')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Laporan Keuangan</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-body">
                                <canvas id="chartKeuangan" height="75"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Pembelian</h4>
                                </div>
                                <div class="card-body">
                                    Rp [90.000.000]
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Penjualan</h4>
                                </div>
                                <div class="card-body">
                                    Rp [90.000.000]
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Pengeluaran Boost!</h4>
                                </div>
                                <div class="card-body">
                                    Rp [90.000.000]
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
                                            <th>No Invoice</th>
                                            <th>Tujuan</th>
                                            <th>Item</th>
                                            <th>Nominal</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td class="align-middle">
                                                1
                                            </td>
                                            <td class="align-middle">
                                                INV/yyyymmdd/BST/123456789
                                            </td>
                                            <td class="align-middle">
                                                Boosting Item
                                            </td>
                                            <td class="align-middle">
                                                <img src="{{asset('assets/img/thumbnail/item.png')}}" alt="" style="width: 150px; border-radius: 10px"><br>
                                                <div class="badge badge-primary mt-2">Nama Barang</div>
                                                <div class="mt-1"><b>[Kategori] - [Brand] - [Tipe]</b></div>
                                            </td>
                                            <td class="align-middle">
                                                Rp [90.000.000]
                                            </td>
                                            <td class="align-middle">
                                                yyyy/mm/dd
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

    <script>
        var ctx = document.getElementById("chartKeuangan").getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                label: 'Google',
                data: [290, 358, 220, 402, 690, 510, 688],
                borderWidth: 2,
                backgroundColor: 'transparent',
                borderColor: 'rgba(254,86,83,.7)',
                borderWidth: 2.5,
                pointBackgroundColor: 'transparent',
                pointBorderColor: 'transparent',
                pointRadius: 4
            },
            {
                label: 'Facebook',
                data: [450, 258, 390, 162, 440, 570, 438],
                borderWidth: 2,
                backgroundColor: 'transparent',
                borderColor: 'rgba(63,82,227,.8)',
                borderWidth: 0,
                pointBackgroundColor: 'transparent',
                pointBorderColor: 'transparent',
                pointRadius: 4
            },
            ]
        },
        options: {
            legend: {
            display: false
            },
            scales: {
            yAxes: [{
                gridLines: {
                drawBorder: false,
                color: '#f2f2f2',
                },
                ticks: {
                beginAtZero: true,
                stepSize: 200
                }
            }],
            xAxes: [{
                gridLines: {
                display: false
                }
            }]
            },
        }
        });
    </script>
@endsection