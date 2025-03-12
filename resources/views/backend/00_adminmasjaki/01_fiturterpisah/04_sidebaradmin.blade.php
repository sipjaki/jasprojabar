


<script src="assets/adminmasjaki/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="#">
                    <img src="./assets/icon/logokabupatenblora.png" alt="Logo" width="100%" style="max-width: 50px; height: auto;">
                    <img src="./assets/icon/pupr.png" alt="Logo" width="100%" style="max-width: 50px; height: auto;">
                </a>
                </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--system-uicons" width="20" height="20"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                            opacity=".3"></path>
                        <g transform="translate(-210 -1)">
                            <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                            <circle cx="220.5" cy="11.5" r="4"></circle>
                            <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                        </g>
                    </g>
                </svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                    <label class="form-check-label"></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                    role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                    </path>
                </svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>

    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">MENU ADMINISTRATOR</li>

                <li class="sidebar-item">
                    <a href="/" class="sidebar-link" target="_blank">
                        <i class="bi bi-grid-fill"></i>
                        <span style="font-size: 15px;">DASHBOARD WEB</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/dashboard" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span style="font-size: 15px;">ADMINISTRATOR</span>
                    </a>
                </li>

                <style>
                    /* Style untuk menu aktif */
.sidebar-item.active {
    background-color: #00820d;
    color: white;
}

/* Style dasar untuk sidebar-item */
.sidebar-item {
    padding: 2px;
    border-radius: 15px;
    cursor: pointer;
}

/* Style untuk sidebar-link agar bisa terlihat saat hover */
.sidebar-link {
    text-decoration: none;
    color: inherit; /* Mengambil warna default dari parent */
}

                </style>

                <script>
// Menunggu DOM selesai dimuat
document.addEventListener("DOMContentLoaded", function() {
    // Ambil semua elemen sidebar-item
    const sidebarItems = document.querySelectorAll('.sidebar-item');

    // Loop untuk menambahkan event listener klik pada setiap item
    sidebarItems.forEach(item => {
        item.addEventListener('click', function () {
            // Hapus kelas 'active' dari semua sidebar-item
            sidebarItems.forEach(i => i.classList.remove('active'));

            // Tambahkan kelas 'active' ke item yang diklik
            item.classList.add('active');
        });
    });
});

                </script>


            <li class="sidebar-title">MASTER DATA MAS JAKI</li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-hexagon-fill"></i>
                    <span>KELEMBAGAAN</span>
                </a>

                <ul class="submenu ">

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Struktur Organisasi DPUPR </a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Profil Jakon DPUPR </a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Tupoksi Jakon DPUPR </a>
                    </li>

                </ul>


            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    {{-- <i class="bi bi-hexagon-fill"></i> --}}
                    <span>PERATURAN</span>
                </a>

                <ul class="submenu ">

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Standar Biaya Umum</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Undang-undang</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Peraturan Pemerintah </a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Peraturan Presiden </a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Peraturan Menteri</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Keputusan Menteri</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Surat Edaran Menteri</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Surat Referensi</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Peraturan Daerah</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Peraturan Daerah</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Peraturan Gubernur</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Peraturan WaliKota/Bupati</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Surat Keputusan</a>
                    </li>

                </ul>


            </li>


            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-hexagon-fill"></i>
                    <span>BERITA</span>
                </a>

                <ul class="submenu ">

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Berita Jakon </a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Artikel Jakon</a>
                    </li>

                </ul>


            </li>



            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-hexagon-fill"></i>
                    <span>DATA JAKON</span>
                </a>

                <ul class="submenu ">

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Bujk Konstruksi </a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Bujk Konsultasi Konstruksi</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Asosiasi Konstruksi</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Tenaga Kerja Konstruksi PU</a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Daftar Kerja Konstruksi </a>
                    </li>

                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:17px;">Profil Paket Pekerjaan </a>
                    </li>

                </ul>


            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    <span>PEMBINAAN</span>
                </a>

                <ul class="submenu ">

                    <li class="submenu-item  ">
                        <a href="/404" class="submenu-link">AGENDA PELATIHAN</a>

                    </li>

                </ul>


            </li>



            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>PENGAWASAN</span>
                </a>
                <ul class="submenu ">

                    <li class="submenu-item  ">
                        <a href="table-datatable.html" class="submenu-link">Datatable</a>

                    </li>

                    <li class="submenu-item  ">
                        <a href="table-datatable-jquery.html" class="submenu-link">Datatable (jQuery)</a>

                    </li>

                </ul>


            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pentagon-fill"></i>
                    <span>AHSP</span>
                </a>

                <ul class="submenu ">

                    <li class="submenu-item  ">
                        <a href="ui-widgets-chatbox.html" class="submenu-link">Chatbox</a>

                    </li>

                    <li class="submenu-item  ">
                        <a href="ui-widgets-pricing.html" class="submenu-link">Pricing</a>

                    </li>

                    <li class="submenu-item  ">
                        <a href="ui-widgets-todolist.html" class="submenu-link">To-do List</a>

                    </li>

                </ul>


            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-egg-fill"></i>
                    <span>RANTAI PASOK</span>
                </a>

                <ul class="submenu ">

                    <li class="submenu-item  ">
                        <a href="ui-icons-bootstrap-icons.html" class="submenu-link">Bootstrap Icons </a>

                    </li>

                    <li class="submenu-item  ">
                        <a href="ui-icons-fontawesome.html" class="submenu-link">Fontawesome</a>

                    </li>

                    <li class="submenu-item  ">
                        <a href="ui-icons-dripicons.html" class="submenu-link">Dripicons</a>

                    </li>

                </ul>


            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-bar-chart-fill"></i>
                    <span>Charts</span>
                </a>

                <ul class="submenu ">

                    <li class="submenu-item  ">
                        <a href="ui-chart-chartjs.html" class="submenu-link">ChartJS</a>

                    </li>

                    <li class="submenu-item  ">
                        <a href="ui-chart-apexcharts.html" class="submenu-link">Apexcharts</a>

                    </li>

                </ul>


            </li>

            <li
                class="sidebar-item  ">
                <a href="ui-file-uploader.html" class='sidebar-link'>
                    <i class="bi bi-cloud-arrow-up-fill"></i>
                    <span>File Uploader</span>
                </a>


            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-map-fill"></i>
                    <span>Maps</span>
                </a>

                <ul class="submenu ">

                    <li class="submenu-item  ">
                        <a href="ui-map-google-map.html" class="submenu-link">Google Map</a>

                    </li>

                    <li class="submenu-item  ">
                        <a href="ui-map-jsvectormap.html" class="submenu-link">JS Vector Map</a>

                    </li>

                </ul>


            </li>
        </ul>
    </div>
</div>
        </div>
