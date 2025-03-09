@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')

<!-- Page Wrapper -->
<div class="col-sm-9 col-xs-12 content pl-0">
<style>

.loader {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;
    font-size: 24px;
}

.dashboard {
    padding: 20px;
}

.card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin: 10px;
    padding: 20px;
    display: inline-block;
    width: calc(50% - 40px);
}

.fade-in {
    animation: fadeIn 0.5s ease-in;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.notification {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    display: none;
}

@keyframes slideIn {
    from {
        transform: translateY(100%);
    }
    to {
        transform: translateY(0);
    }
}

</style>

    <div class="container">
        <div class="loader" id="loader" style="color: fuchsia">Loading...</div>
        <div class="dashboard" id="dashboard" style="display: none;">
            <div class="card fade-in">
                <canvas id="chart1"></canvas>
            </div>
            <div class="card fade-in">
                <canvas id="chart2"></canvas>
            </div>
            <div class="notification fade-in" id="notification">Data Berhasil Di Muat!</div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="script.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const loader = document.getElementById('loader');
                const dashboard = document.getElementById('dashboard');
                const notification = document.getElementById('notification');

                // Tampilkan loader saat data dimuat
                loader.style.display = 'flex';

                // Simulasi loading data
                setTimeout(() => {
                    loader.style.display = 'none';
                    dashboard.style.display = 'block';

                    // Tampilkan notifikasi
                    notification.style.display = 'block';
                    notification.classList.add('fade-in');
                    setTimeout(() => {
                        notification.style.display = 'none';
                    }, 3000); // Menghilang setelah 3 detik

                    // Inisialisasi grafik
                    initializeCharts();
                }, 2000); // Simulasi loading selama 2 detik
            });

            function initializeCharts() {
                const ctx1 = document.getElementById('chart1').getContext('2d');
                const ctx2 = document.getElementById('chart2').getContext('2d');

                new Chart(ctx1, {
                    type: 'bar',
                    data: {
                        labels: ['2015', '2016', '2017', '2018', '2019', '2024'],
                        datasets: [{
                            label: 'Pelatihan Sertifikasi Pekerja',
                            data: [41, 43, 54, 76, 82, 30],
                            backgroundColor: 'rgba(135, 206, 250, 1)',
                            borderColor: 'rgba(135, 206, 250, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                    }
                });

                new Chart(ctx2, {
                    type: 'line',
                    data: {
                        labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
                        datasets: [{
                            label: 'Data Kecelakaan Kerja',
                            data: [110285, 101367, 123040, 173415, 182835, 221740, 234270, 265334, 300098],
                            fill: false,
                            borderColor: 'rgba(0, 0, 0, 1)',
                            tension: 0.1
                        }]
                    },
                    options: {
                        responsive: true,
                    }
                });
            }
        </script>


    </div>


    </div>
</div>

@include('backend.00_dashboard.part.menufooter')

</div>

@include('backend.00_dashboard.part.footer')
