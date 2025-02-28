<style>
    /* Import font Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

/* Wrapper untuk tabel */
.table-wrapper {
overflow-x: auto;
max-width: 100%;
padding: 10px;
}

/* Style dasar tabel */
.fl-table {
width: 100%;
border-collapse: collapse;
font-family: 'Poppins', sans-serif; /* Font modern pemerintah */
font-size: 14px;
background: #fff; /* Tetap netral */
box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
border-radius: 8px;
overflow: hidden;
}

/* Header styling */
.fl-table thead {
background: #FFD100;
text-transform: uppercase;
font-weight: 600;
letter-spacing: 0.5px;
color: black;
}

.fl-table th,
.fl-table td {
padding: 12px 15px;
text-align: left;
border-bottom: 1px solid #ddd;
}

/* Hover effect */
.fl-table tbody tr:hover {
background: rgba(0, 0, 0, 0.05);
}

/* Responsive styling */
@media (max-width: 768px) {
.fl-table thead {
display: none; /* Sembunyikan header di tampilan kecil */
}

.fl-table tr {
display: block;
margin-bottom: 10px;
border: 1px solid #ddd;
border-radius: 5px;
overflow: hidden;
}

.fl-table td {
display: block;
text-align: right;
font-size: 14px;
border-bottom: 1px solid #eee;
position: relative;
padding-left: 50%;
}

.fl-table td::before {
content: attr(data-label);
position: absolute;
left: 10px;
width: 45%;
font-weight: 600;
text-align: left;
}
}

/* Style untuk ikon view */
.view-icon {
color: #4CAF50;
cursor: pointer;
font-size: 18px;
}

.view-icon:hover {
color: #45a049;
}


            .badgekembali {
                background: linear-gradient(to right, white, green);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                border: 3px solid black; /* Garis luar yang lebih tebal dan lebih jelas */
                display: inline-block;
                font-size: 12px;
                text-align: center;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s, border-color 0.3s; /* Tambahkan transisi untuk border */
            }
            .badgekembali:hover {
                background-color: white;
                color: black;
                background: white;
            }

            .badgepupr {
                background: linear-gradient(to right, white, #FFD100);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                border: 3px solid black; /* Garis luar yang lebih tebal dan lebih jelas */
                display: inline-block;
                font-size: 12px;
                text-align: center;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s, border-color 0.3s; /* Tambahkan transisi untuk border */
            }
            .badgepupr:hover {
                background-color: white;
                color: black;
                background: white;
            }

            .badgemenu {
                background: linear-gradient(to right, #FFD100, green);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                border: 3px solid black; /* Garis luar yang lebih tebal dan lebih jelas */
                display: inline-block;
                font-size: 12px;
                text-align: center;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s, border-color 0.3s; /* Tambahkan transisi untuk border */
            }
            .badgemenu:hover {
                background-color: white;
                color: black;
                background: white;
            }
</style>

{{-- ================================ --}}

@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">

	<section class="page-banner">
		<div class="container">
			<div class="page-banner-title">
				<h3 style="color: black; font-size:30px;">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->

    {{-- <section class="service-two-section" > --}}
        <section class="service-two-section" style="background-image: url('/assets/00_dokmasjaki/03_datajakon/banner1.jpg');">
        <div class="container" style="background: #FFD100; border-radius:20px;">
            <div class="row row-gutter-y-40">

                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="service-two-card">
                        <div class="service-two-imgbox">

                            <section class="donate-section" style="background: linear-gradient(to bottom, green, #FFD100, white);">
                                <div class="container" style="margin-top: -100px;">
                                    <div class="row row-gutter-30">

                                        <div class="col-xxl-12 col-lg-12">
                                            <div class="donate-box-inner">


                                                {{-- TABLE DATA  --}}

                        </head>

                        <section class="document-section" style="margin-top: -100px;">
                            <div class="container" >
                              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                  {{-- <img src="/assets/icon/logopupr.png" class="img-fluid" alt="img-25" width="50" style="margin-right: 20px;" loading="lazy"> --}}

                                  {{-- <br><p style="font-size: 16px; color:black;">Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora</p> --}}
                                  <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">
                                      <!-- Tombol di kiri -->
                                      <a href="#" style="background: white;">
                                          <button class="badgekembali" style="border: none; font-size: 12px; cursor: pointer;">
                                            <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                            <i class="fas fa-list mr-2" style="margin-right: 10px;"></i> <span style="text-transform: uppercase; font-weight:800; color:black">{{$title}}</span>
                                        </button>
                                    </a>

                                    <!-- Tombol dan kolom pencarian di kanan -->
                                    <div style="display: flex; align-items: center;">

{{--
                                        <a href="/tertibjakonpemanfaatan/pu" style="background: white;">
                                            <button class="badgemenu" style="border: none; font-size: 12px; cursor: pointer; margin-right: 10px;">
                                                <i class="fas fa-edit mr-2" style="margin-right: 15px;"></i><span style="color: black; font-weight:bold">PU</span>
                                            </button>
                                        </a>

                                        <a href="/tertibjakonpemanfaatan/nonpu" style="background: white;">
                                            <button class="badgemenu" style="border: none; font-size: 12px; cursor: pointer; margin-right: 10px;">
                                                <i class="fas fa-edit mr-2" style="margin-right: 15px;"></i><span style="color: black; font-weight:bold">Non-PU</span>
                                            </button>
                                        </a>

                                        <a href="/tertibjakonpemanfaatan/swasta" style="background: white;">
                                            <button class="badgemenu" style="border: none; font-size: 12px; cursor: pointer; margin-right: 10px;">
                                                <i class="fas fa-edit mr-2" style="margin-right: 15px;"></i><span style="color: black; font-weight:bold">Swasta</span>
                                            </button>
                                        </a>
 --}}

                                        {{-- <a href="/tertibjasakonstruksi" style="background: white;">
                                            <button class="badgekembali" style="border: none; font-size: 12px; cursor: pointer; margin-right: 10px;">
                                                <i class="fas fa-arrow-circle-left mr-2" style="margin-right: 15px;"></i><span style="color: black; font-weight:bold">KEMBALI</span>
                                            </button>
                                        </a> --}}

                                        <div style="position: relative; display: inline-block; margin-right:10px;">
                                            <input type="search" placeholder="Pencarian...." style="border: 1px solid #ccc; padding: 5px 10px; font-size: 14px; border-radius: 5px; width: 200px;">
                                            <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                        </div>

                                    </div>
                                </div>

                                </ul>
                            </div>
                        </section>

                        <section class="document-section" style="margin-top: -215px; margin-bottom:35px;" >

                        <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">
                            <!-- Tombol di kiri -->
                            <a href="#" style="background: white;">
                                <button class="badgepupr" style="border: none; font-size: 12px; cursor: pointer;">
                                    <img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                    <i style="color: black" class="fas fa-building mr-2" style="margin-right: 10px;"></i> <span style="text-transform: uppercase; font-weight:800; color:black">HSP Konstruksi UMUM</span>
                                </button>
                            </a>
                            <body>

                            </section>


                            <div class="container mt-4">
                                <div class="table-wrapper" style="margin-top:-130px; margin-bottom:150px;">
                                    <table class="fl-table table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center"> No</th>
                                                <th style="text-align:center"> Kode</th>
                                                <th style="text-align:center"> Uraian Pekerjaan</th>
                                                <th style="text-align:center"> Satuan</th>
                                                <th style="text-align:center"> Harga Satuan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="clickable" data-no="1" data-kode="U.1.1.2 (c)" data-uraian="Pembuatan 1 m’ pagar sementara dari seng gelombang rangka kayu tinggi 2 meter" data-satuan="m1" data-koefisien="1" data-hargasatuan="228160" data-jumlahharga="228160">
                                                <td style="text-align: center;">1</td>
                                                <td>U.1.1.2 (c)</td>
                                                <td class="text-primary" style="cursor: pointer;">Pembuatan 1 m’ pagar sementara dari seng gelombang rangka kayu tinggi 2 meter</td>
                                                <td>m1</td>
                                                <td>Rp. 228.160,00</td>
                                            </tr>
                                            <tr class="clickable" data-no="2" data-kode="U.1.1.3 (c)" data-uraian="Pembuatan 1 m’ pagar sementara dari kawat duri tinggi 2 meter" data-satuan="m1" data-koefisien="1" data-hargasatuan="234454" data-jumlahharga="234454">
                                                <td style="text-align: center;">2</td>
                                                <td>U.1.1.3 (c)</td>
                                                <td class="text-primary" style="cursor: pointer;">Pembuatan 1 m’ pagar sementara dari kawat duri tinggi 2 meter</td>
                                                <td>m1</td>
                                                <td>Rp. 234.454,00</td>
                                            </tr>
                                            <tr class="clickable" data-no="3" data-kode="U.1.2.1.d (a)" data-uraian="Pasangan 1 m’ Bouwplank" data-satuan="m1" data-koefisien="1" data-hargasatuan="51419" data-jumlahharga="51419">
                                                <td style="text-align: center;">3</td>
                                                <td>U.1.2.1.d (a)</td>
                                                <td class="text-primary" style="cursor: pointer;">Pasangan 1 m’ Bouwplank</td>
                                                <td>m1</td>
                                                <td>Rp. 51.419,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                    </div><!-- donate-box-inner -->
                                        </div><!-- col-xl-8 col-lg-12 -->
                                    </div><!-- row -->
                                </div><!-- container -->
                                {{-- @include('frontend.00_approve.01_cssterpisah.paginator') --}}
                            </section><!-- donate-section -->



                        </div><!-- service-two-imgbox -->
                    </div><!--service-two-card-->
                </div><!--col-12 col-lg-4 col-xl-4-->

            </div><!-- row -->
        </div><!-- container -->
    </section><!-- service-two-section -->


<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Detail Uraian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian</th>
                            <th>Kode</th>
                            <th>Satuan</th>
                            <th>Koefisien</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="modal-no"></td>
                            <td id="modal-uraian"></td>
                            <td id="modal-kode"></td>
                            <td id="modal-satuan"></td>
                            <td id="modal-koefisien"></td>
                            <td id="modal-hargasatuan"></td>
                            <td id="modal-jumlahharga"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tableRows = document.querySelectorAll(".clickable");

        tableRows.forEach(row => {
            row.addEventListener("click", function () {
                document.getElementById("modal-no").innerText = this.dataset.no;
                document.getElementById("modal-uraian").innerText = this.dataset.uraian;
                document.getElementById("modal-kode").innerText = this.dataset.kode;
                document.getElementById("modal-satuan").innerText = this.dataset.satuan;
                document.getElementById("modal-koefisien").innerText = this.dataset.koefisien;
                document.getElementById("modal-hargasatuan").innerText = "Rp " + new Intl.NumberFormat("id-ID").format(this.dataset.hargasatuan);
                document.getElementById("modal-jumlahharga").innerText = "Rp " + new Intl.NumberFormat("id-ID").format(this.dataset.jumlahharga);

                new bootstrap.Modal(document.getElementById("detailModal")).show();
            });
        });
    });
</script>



</div><!--page-wrapper-->
@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
