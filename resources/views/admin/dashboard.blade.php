@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tablero'])
    <div class="container-fluid py-4">

            <div class="card container">
                @if(session('success'))
                    <div class="p-4 mb-4 rounded" id="notification-success" style="background-color: green; color:white;">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-4 text-center">
                            <img src="/img/logo.png" style="width: 300px;" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row p-6 justify-content-center">
                <div class="col-md-3 card m-3 p-3">
                    <a class="d-flex" href="{{ route('productos.index') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-box text-dark opacity-10" style="font-size: 20px !important;"></i>
                        </div>
                        <span class="ms-1 mt-1" style="font-size: 20px !important;">Productos</span>
                    </a>
                </div>

                <div class="col-md-3 card m-3 p-3">
                    <a class="d-flex" href="{{ route('noticias.index') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-newspaper text-dark opacity-10" style="font-size: 20px !important;"></i>
                        </div>
                        <span class="ms-1 mt-1" style="font-size: 20px !important;">Noticias</span>
                    </a>
                </div>

                <div class="col-md-3 card m-3 p-3">
                    <a class="d-flex" href="{{ route('banner.index') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-image text-dark opacity-10" style="font-size: 20px !important;"></i>
                        </div>
                        <span class="ms-1 mt-1" style="font-size: 20px !important;">Banner</span>
                    </a>
                </div>


            </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>

<script>
$(document).ready(function() {
    var notificationSuccess = $('#notification-success'); // Seleccionar el div usando jQuery

    setTimeout(function() {
        notificationSuccess.fadeOut(1000); // Desvanecer el div en 1 segundo (1000 milisegundos)
    }, 3000);
});
</script>
@endpush
