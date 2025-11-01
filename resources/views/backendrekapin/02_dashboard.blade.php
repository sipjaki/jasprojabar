@include('frontend.00_fiturmenu.01_header')
@include('frontend.00_fiturmenu.07_style')
<body>

    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div class="tg-header__top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="tg-header__top-info">
                            <ul class="list-wrap">
<li style="overflow:hidden; white-space:nowrap; box-sizing:border-box;">
    {{-- <i class="flaticon-placeholder"></i> --}}
    <span style="
        display:inline-block;
        padding-left:100%;
        animation: runText 15s linear infinite;
    ">
        Hai {{ auth()->user()->name }}! Yuk, catat dan kelola keuanganmu bareng Rekapinaja biar makin tenang!
    </span>
    <style>
        @keyframes runText {
            0%   { transform: translate(0, 0); }
            100% { transform: translate(-100%, 0); }
        }
    </style>
</li>

                                {{-- <li><i class="flaticon-envelope"></i><a href="mailto:info@gmail.com">info@gmail.com</a></li> --}}
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="col-lg-5">
                        <div class="tg-header__top-right">
                            <ul class="list-wrap">
                                <li><i class="flaticon-telephone"></i><a href="tel:0123456789">+123 4884 4889</a></li>
                                <li>
                                    <div class="tg-header__top-social">
                                        <ul class="list-wrap">
                                            <li><a href="https://www.facebook.com/" target="_blank"><img src="assets/img/icons/facebook.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://x.com/home" target="_blank"><img src="assets/img/icons/twitter.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><img src="assets/img/icons/instagram.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://www.pinterest.com/" target="_blank"><img src="assets/img/icons/pinterest.svg" alt="" class="injectable"></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div id="header-fixed-height"></div>
        @include('frontend.00_fiturmenu.04_menunavigasi')
        <div class="offCanvas__overly"></div>
        <!-- offCanvas-menu-end -->



<!-- main-area -->
<main class="main-area fix" style="min-height: calc(100vh - 200px); display: flex; flex-direction: column; justify-content: flex-start;">
<div class="cart__area section-py-130" style="flex-grow: 1; padding: 40px 20px; background: #f8f9fa;">
    <div class="container">
        <div class="row g-4">

            <!-- Summary Cards -->
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card p-4 shadow-sm rounded bg-white text-center">
                    <h3 class="mb-2">$25,000</h3>
                    <span class="text-muted">Total Pendapatan</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card p-4 shadow-sm rounded bg-white text-center">
                    <h3 class="mb-2">$10,500</h3>
                    <span class="text-muted">Total Pengeluaran</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card p-4 shadow-sm rounded bg-white text-center">
                    <h3 class="mb-2">$14,500</h3>
                    <span class="text-muted">Saldo Bersih</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card p-4 shadow-sm rounded bg-white text-center">
                    <h3 class="mb-2">120</h3>
                    <span class="text-muted">Transaksi Hari Ini</span>
                </div>
            </div>

            <!-- Grafik Pendapatan vs Pengeluaran -->
            <div class="col-lg-6">
                <div class="dashboard-card p-4 shadow-sm rounded bg-white">
                    <h5 class="mb-3">Pendapatan vs Pengeluaran</h5>
                    <canvas id="lineChart" style="height: 250px;"></canvas>
                </div>
            </div>

            <!-- Grafik Kategori Pengeluaran -->
            <div class="col-lg-6">
                <div class="dashboard-card p-4 shadow-sm rounded bg-white">
                    <h5 class="mb-3">Kategori Pengeluaran</h5>
                    <canvas id="barChart" style="height: 250px;"></canvas>
                </div>
            </div>

            <!-- Tabel Transaksi Terbaru -->
            <div class="col-12">
                <div class="dashboard-card p-4 shadow-sm rounded bg-white">
                    <h5 class="mb-4">Transaksi Terbaru</h5>
                    <div class="table-responsive">
                        <table class="table table-striped align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                    <th>Jumlah</th>
                                    <th>Jenis</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01/11/2025</td>
                                    <td>Penjualan Produk A</td>
                                    <td>Pendapatan</td>
                                    <td>$500</td>
                                    <td>Pendapatan</td>
                                </tr>
                                <tr>
                                    <td>01/11/2025</td>
                                    <td>Gaji Karyawan</td>
                                    <td>Pengeluaran</td>
                                    <td>$300</td>
                                    <td>Pengeluaran</td>
                                </tr>
                                <tr>
                                    <td>31/10/2025</td>
                                    <td>Pembelian Bahan</td>
                                    <td>Pengeluaran</td>
                                    <td>$200</td>
                                    <td>Pengeluaran</td>
                                </tr>
                                <tr>
                                    <td>30/10/2025</td>
                                    <td>Jasa Konsultasi</td>
                                    <td>Pendapatan</td>
                                    <td>$1,000</td>
                                    <td>Pendapatan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Style tambahan untuk card -->
<style>
.dashboard-card {
    transition: transform 0.3s, box-shadow 0.3s;
}
.dashboard-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}
</style>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // ----- Data Line Chart -----
    const lineLabels = ["01/11","02/11","03/11","04/11","05/11"];
    const pendapatanData = [500,700,400,800,600];
    const pengeluaranData = [300,400,200,500,300];

    const ctxLine = document.getElementById('lineChart').getContext('2d');
    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: lineLabels,
            datasets: [
                {
                    label: 'Pendapatan',
                    data: pendapatanData,
                    borderColor: '#4CAF50',
                    backgroundColor: ctxLine.createLinearGradient(0,0,0,250),
                    tension: 0.4,
                    fill: true,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                },
                {
                    label: 'Pengeluaran',
                    data: pengeluaranData,
                    borderColor: '#F44336',
                    backgroundColor: ctxLine.createLinearGradient(0,0,0,250),
                    tension: 0.4,
                    fill: true,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                tooltip: { mode: 'index', intersect: false }
            },
            interaction: { mode: 'nearest', axis: 'x', intersect: false },
            scales: {
                y: { beginAtZero: true, ticks: { stepSize: 100 } }
            }
        }
    });

    // ----- Data Bar Chart -----
    const barLabels = ["Gaji","Bahan","Operasional","Lain-lain"];
    const barData = [300,200,150,100];

    const ctxBar = document.getElementById('barChart').getContext('2d');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: barLabels,
            datasets: [{
                label: 'Pengeluaran',
                data: barData,
                backgroundColor: [
                    '#2196F3',
                    '#FF9800',
                    '#9C27B0',
                    '#00BCD4'
                ],
                borderRadius: 6
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                tooltip: { mode: 'index' }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
});
</script>

</main>
    <!-- main-area-end -->


    <!-- footer-area-end -->

@include('frontend.00_fiturmenu.03_footer')


