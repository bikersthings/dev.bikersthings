@extends('stisla-layout.main')

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
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chartKeuangan" height="100"></canvas>
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