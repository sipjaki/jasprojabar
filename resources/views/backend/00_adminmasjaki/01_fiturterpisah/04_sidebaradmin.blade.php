
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

document.addEventListener("DOMContentLoaded", function () {
    // Ambil semua elemen sidebar-item yang memiliki submenu
    const sidebarItemsWithSub = document.querySelectorAll('.sidebar-item.has-sub');

    // Loop untuk menambahkan event listener pada setiap item
    sidebarItemsWithSub.forEach(item => {
        const submenu = item.querySelector('.submenu'); // Ambil submenu terkait

        // Tambahkan event listener klik pada link menu
        item.querySelector('.sidebar-link').addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah aksi default (navigasi)

            // Jika submenu sudah terbuka, tutup submenu
            if (submenu.classList.contains('show')) {
                submenu.classList.remove('show');
            } else {
                // Tutup semua submenu lainnya
                document.querySelectorAll('.submenu.show').forEach(sub => sub.classList.remove('show'));

                // Buka submenu yang diklik
                submenu.classList.add('show');
            }
        });
    });
});

</script>

<script src="/assets/adminmasjaki/static/js/initTheme.js"></script>
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
        <li class="sidebar-title">DASHBOARD</li>

        <li
            class="sidebar-item active ">
            <a href="/" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>ADMINISTRATOR</span>
            </a>

        </li>

        <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-stack"></i>
                    <span>KELEMBAGAAN</span>
                </a>
                <ul class="submenu">
                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Struktur Organisasi DPUPR</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Profil Jakon DPUPR</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Tupoksi Jakon DPUPR</a>
                    </li>
                </ul>
            </li>
            <!-- Menu lainnya -->
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-collection-fill"></i>
                <span>PERATURAN</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Standar Biaya Umum</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Undang-undang</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Peraturan Pemerintah</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Peraturan Presiden</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Peraturan Menteri</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Keputusan Menteri</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Surat Edaran Menteri</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Surat Referensi</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Peraturan Daerah</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Peraturan Gubernur</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Peraturan Walikota/Bupati</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Surat Keputusan</a>

                </li>

            </ul>


        </li>



        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>BERITA JAKON</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Berita Jakon</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Artikel Jakon</a>

                </li>

            </ul>


        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>DATA JAKON</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">BUJK Konstruksi</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">BUJK Konsultasi Konstruksi</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Asosiasi Konstruksi</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">TKK PU</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">All Data TKK</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Profil Paket Pekerjaan</a>

                </li>

            </ul>


        </li>



        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>PEMBINAAN</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Agenda Pelatihan</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Daftar Peserta Tenaga Kerja Konstruksi</a>

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
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Tertib Jasa Konstruksi</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Pengawasan BUJK</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Kecelakaan Kerja</a>

                </li>

            </ul>


        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>AHSP</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Standar Biaya Material </a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Standar Biaya Upah Tenaga Kerja</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Standar Biaya Peralatan</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">HSP Konstruksi Umum</a>

                </li>

            </ul>


        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>RANTAI PASOK</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Asuransi Konstruksi </a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Supplier Bahan Bangunan</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Peralatan Konstruksi</a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">Toko Bangunan</a>

                </li>

            </ul>


        </li>


        <li class="sidebar-title">DINAS PUPR</li>


        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>BAHAN PERSENTASE</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">MATERI 1 </a>

                </li>

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">MATERI 2 </a>

                </li>


            </ul>


        </li>

        <li class="sidebar-title">PESERTA TKK</li>


        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>DATA DIRI</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">DATA DIRI 1 </a>

                </li>

            </ul>


        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>DAFTAR PELATIHAN</span>
            </a>

        </li>

        <li class="sidebar-title">ASURANSI KONSTRUKSI</li>


        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>DATA DIRI</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">DATA DIRI 1 </a>

                </li>

            </ul>


        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>ETALASE BAHAN MATERIAL</span>
            </a>

        </li>

        <li class="sidebar-title">SUPPLIER BANGUNAN</li>


        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>DATA DIRI</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">DATA DIRI 1 </a>

                </li>

            </ul>


        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>ETALASE BAHAN MATERIAL</span>
            </a>

        </li>



        <li class="sidebar-title">SUPPLIER PERALATAN</li>


        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>DATA DIRI</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">DATA DIRI 1 </a>

                </li>

            </ul>


        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>ETALASE BAHAN PERALATAN</span>
            </a>

        </li>

        <li class="sidebar-title">TOKO BANGUNAN</li>


        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>DATA DIRI</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">DATA DIRI 1 </a>

                </li>

            </ul>


        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>ETALASE BAHAN BANGUNAN</span>
            </a>

        </li>

        <li class="sidebar-title">PENGATURAN MENU</li>


        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>BERITA</span>
            </a>
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>STATUS JAKON</span>
            </a>
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>TKK PEKERJA</span>
            </a>
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>PENGWASAN</span>
            </a>
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>HARGA</span>
            </a>
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>KONSTRUKSI</span>
            </a>
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>STATUS ADMIN</span>
            </a>

            {{-- <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="/404" class="submenu-link" style="color: white; font-size:16px;">DATA DIRI 1 </a>

                </li>

            </ul> --}}


        </li>

        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>ETALASE BAHAN BANGUNAN</span>
            </a>

        </li>

    </ul>
</div>
</div>
    </div>
