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
background: #ffd100;
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
font-size: 18px;
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
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgekembali:hover {
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
        {{-- <section class="service-two-section" style="background-image: url('/assets/00_dokmasjaki/03_datajakon/banner1.jpg');">
        <div class="container"
                style="
                background: #FFD100;
                max-width: 95%;
                margin: 30px auto;
                padding: 20px;
                height: auto;
                border-radius: 20px;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                position: relative;
                z-index: 10;">
            <div class="row row-gutter-y-40">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="service-two-card">
                        <div class="service-two-imgbox">
                             --}}
                             <section class="donate-section" style="background-image: url(/assets/00_dokmasjaki/03_datajakon/bannerbetter.jpg);">
                                <div class="container" style="
                                background: white;
                                max-width: 90%;
                                margin: 30px auto;
                                padding: 20px;
                                height: auto;
                                border-radius: 20px;
                                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                                position: relative;
                                z-index: 10;">
                                    <div class="row row-gutter-30">

                                        <div class="col-xxl-12 col-lg-12">
                                            <div class="donate-box-inner">


                                                {{-- TABLE DATA  --}}

                        </head>

                        <section class="document-section" style="margin-top: -100px;">
                            <div class="container" style="max-width: 95%">
                              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                  {{-- <img src="/assets/icon/logopupr.png" class="img-fluid" alt="img-25" width="50" style="margin-right: 20px;" loading="lazy"> --}}

                                  {{-- <br><p style="font-size: 16px; color:black;">Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora</p> --}}
                                  <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">
                                      <!-- Tombol di kiri -->
                                      <a href="#" style="background: white;">
                                          <button class="badgekembali" style="border: none; font-size: 12px; cursor: pointer;">
                                            <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                            <i class="fas fa-edit mr-2" style="margin-right: 10px; color:#ffd100;"></i> <span style="text-transform: uppercase; color:black; font-size:20px;">{{$title}}</span>
                                        </button>
                                    </a>

                                    <!-- Tombol dan kolom pencarian di kanan -->
                                    <div style="display: flex; align-items: center;">
{{--
                                        <div style="position: relative; display: inline-block; margin-right:10px;">
                                            <input type="search" placeholder="Pencarian...." style="border: 1px solid #ccc; padding: 5px 10px; font-size: 14px; border-radius: 5px; width: 200px;">
                                            <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                        </div> --}}

                                        {{-- <a href="/datajakon/bujk" style="background: white;">
                                            <button class="badgekembali" style="border: none; font-size: 12px; cursor: pointer; margin-right: 10px;">
                                                <i class="fas fa-arrow-circle-left mr-2" style="margin-right: 20px; color:red;"></i><span style="color: black; font-size:20px;">KEMBALI</span>
                                            </button>
                                        </a> --}}

                                    </div>
                                </div>

                                </ul>
                            </div>
                        </section>


                        <body>

                            <div class="table-wrapper" style="margin-top:-130px; position: relative;">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; align-items: center;">
                                    <div class="pagination-info-box" style="margin-right:300px; padding: 10px; border: 1px solid black; background-color: #f9f9f9; border-radius: 5px;">
                                        <div class="pagination-info" style="color: black; font-weight: 500; font-size:20px;">
                                            Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
                                        </div>
                                    </div>
                                    <div>
                                        <label for="entries" style="margin-right: 5px; font-weight: bold;">Show:</label>
                                        <select id="entries" onchange="updateEntries()" style="padding: 5px; border: 1px solid black; background-color: white;">
                                            {{-- <option value="10">10</option> --}}
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="75">75</option>
                                            <option value="100">100</option>
                                            <option value="150">150</option>
                                            <option value="200">200</option>
                                        </select>
                                    </div>

                                    <div style="position: relative; display: inline-block; margin-right:10px;">
                                        <input type="search" id="searchInput" placeholder="Cari Pekerjaan...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                                        <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                    </div>
                                </div>

                                <table class="fl-table" id="sortableTable" style="margin-top: 15px; width: 100%; border-collapse: collapse;">
                                        <thead>
                                            <tr>
                                                <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px;"> No <span class="sort-icon">⇅</span></th>
                                                <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:150px;"> Kode AHSP <span class="sort-icon">⇅</span></th>
                                                <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:150px;"> HSP Divisi <span class="sort-icon">⇅</span></th>
                                                <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:150px;"> Paket  <span class="sort-icon">⇅</span></th>
                                                <th onclick="sortTable(4)" style="cursor:pointer; text-align:center; width:250px;"> Item Pekerjaan <span class="sort-icon">⇅</span></th>
                                                <th onclick="sortTable(7)" style="cursor:pointer; text-align:center; width:600px;"> Jenis Pekerjaan <span class="sort-icon">⇅</span></th>
                                                <th onclick="sortTable(6)" style="cursor:pointer; text-align:center; width:80px;"> Rp. <span class="sort-icon">⇅</span></th>
                                                <th onclick="sortTable(8)" style="cursor:pointer; text-align:center; width:200px;"> Harga Satuan <span class="sort-icon">⇅</span></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody">
                                            @php $start = ($data->currentPage() - 1) * $data->perPage() + 1; @endphp
                                            @foreach ($data as $item)
                                            <tr>
                                                <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                                                <td style="text-align: left;">
                                                    {{ optional($item->hspdivisi)->id }}.
                                                    {{ optional($item->hsppaket4)->id }}.
                                                    {{ optional($item->hspkodepekerjaan3)->kodepekerjaan }}.
                                                    {{$item->kode}}
                                                    {{-- {{ optional($item->kode->id) }} --}}
                                                </td>
                                                <td style="text-align: center;">{{$item->hspdivisi->hspdivisi}}</td>
                                                <td style="text-align: center;">{{$item->hsppaket4->hsppaket4}}</td>
                                                <td style="text-align: center;">{{$item->hspkodepekerjaan4->namapekerjaan}}</td>
                                                <td style="cursor: pointer; color: blue; text-decoration: underline;" onclick="showModal('{{ $item->jenispekerjaan }}')">{{$item->jenispekerjaan}}</td>
                                                <td style="text-align: center;">Rp.</td>
                                                <td style="text-align: right;">{{ number_format((float) $item->hargasatuan, 0, ',', '.') }},-</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <!-- Modal -->
                                    <div id="modalCard" class="modal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                                        <div class="modal-content" style="background-color: white; margin: 5% auto; padding: 20px; border-radius: 8px; width: 80%; text-align: left; position: relative;">
                                            <span class="close" onclick="closeModal()" style="cursor: pointer; position: absolute; top: 10px; right: 15px; font-size: 20px; font-weight: bold;">&times;</span>
                                            <h2 id="modalTitle">Analisa Harga Satuan Pekerjaan</h2>

                                            <table class="table table-bordered table-striped">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Uraian</th>
                                                        <th>Kode</th>
                                                        <th>Satuan</th>
                                                        <th>Koefisien</th>
                                                        <th>Harga Satuan (Rp)</th>
                                                        <th>Jumlah Harga (Rp)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>A</td>
                                                        <td>Tenaga Kerja</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    {{-- @foreach ($data as $item) --}}

                                                    {{-- <tr>
                                                        <td></td>
                                                        <td>{{$item->subhargadiv1->uraian}}</td>
                                                        <td>{{$item->subhargadiv1->kode}}</td>
                                                        <td>{{$item->subhargadiv1->satuan}}</td>
                                                        <td>{{$item->subhargadiv1->koefisien}}</td>
                                                        <td style="text-align: right;">{{ number_format((float) $item->hargasatuan, 0, ',', '.') }},-</td>
                                                        <td style="text-align: right;">{{ number_format((float) $item->jumlahharga, 0, ',', '.') }},-</td>
                                                    </tr> --}}
                                                        <tr><td></td><td>Tukang Kayu</td><td>L.02</td><td>OH</td><td>0.200</td><td>106.000</td><td>21.200</td></tr>
                                                        <tr><td></td><td>Tukang batu/tembok</td><td>L.02</td><td>OH</td><td>0.200</td><td>106.000</td><td>21.200</td></tr>
                                                        <tr><td></td><td>Kepala Tukang</td><td>L.03</td><td>OH</td><td>0.040</td><td>122.000</td><td>4.880</td></tr>
                                                        <tr><td></td><td>Mandor</td><td>L.04</td><td>OH</td><td>0.013</td><td>133.000</td><td>1.729</td></tr>
                                                        <tr><td colspan="6" class="text-end"><strong>Jumlah Harga Tenaga Kerja</strong></td><td><strong>106.609</strong></td></tr>
                                                        <tr><td>B</td><td>Bahan</td><td></td><td></td><td></td><td></td><td></td></tr>
                                                        <tr><td></td><td>Kaso 5/7 kayu kelas II (Perancah)</td><td></td><td>m3</td><td>0.039</td><td>1.976.000</td><td>76.471,20</td></tr>
                                                        <tr><td></td><td>Papan Kayu ukuran 2/20 cm</td><td></td><td>m3</td><td>0.040</td><td>1.976.000</td><td>78.249,60</td></tr>
                                                        <tr><td></td><td>Paku 5 inci</td><td></td><td>kg</td><td>0.587</td><td>16.400</td><td>9.630,08</td></tr>
                                                        <tr><td></td><td>Semen Portland</td><td></td><td>kg</td><td>26.406</td><td>1.450</td><td>38.288,70</td></tr>
                                                        <tr><td></td><td>Pasir Beton</td><td></td><td>kg</td><td>61.560</td><td>221</td><td>13.604,76</td></tr>
                                                        <tr><td></td><td>Kerikil (Maks 30mm)</td><td></td><td>kg</td><td>83.349</td><td>244</td><td>20.337,16</td></tr>
                                                        <tr><td></td><td>Air</td><td></td><td>liter</td><td>17.415</td><td>50</td><td>870,75</td></tr>
                                                        <tr><td></td><td>Residu</td><td></td><td>liter</td><td>0.400</td><td>5.400</td><td>2.160,00</td></tr>
                                                        <tr><td colspan="6" class="text-end"><strong>Jumlah Harga Bahan</strong></td><td><strong>239.612,25</strong></td></tr>
                                                        <tr><td>C</td><td>Peralatan</td><td></td><td></td><td></td><td></td><td></td></tr>
                                                        <tr><td colspan="6" class="text-end"><strong>Jumlah Harga Alat</strong></td><td></td></tr>
                                                        <tr><td>D</td><td colspan="5" class="text-end">Jumlah Harga Tenaga Kerja, Bahan dan Peralatan (A+B+C)</td><td>346.221,25</td></tr>
                                                        <tr><td>E</td><td colspan="5" class="text-end">Biaya Umum dan Keuntungan (10%)</td><td>34.622,12</td></tr>
                                                        <tr><td>F</td><td colspan="5" class="text-end"><strong>Harga Satuan Pekerjaan (D+E)</strong></td><td><strong>380.843,37</strong></td></tr>
                                                        {{-- @endforeach --}}
                                                    </tbody>
                                                </table>

                                                <button onclick="closeModal()" style="margin-top: 20px; padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 5px; cursor: pointer;">Tutup</button>
                                        </div>
                                    </div>

                                    <script>
                                        function showModal(jenisPekerjaan) {
                                            document.getElementById('modalTitle').innerText = jenisPekerjaan;
                                            document.getElementById('modalCard').style.display = 'block';
                                        }

                                        function closeModal() {
                                            document.getElementById('modalCard').style.display = 'none';
                                        }
                                    </script>


                                <div class="pagination-container" style="margin-top: 50px; display: flex; flex-direction: column; align-items: center;">
                                    <ul class="pagination-paginate" style="display: flex; padding-left: 0; list-style: none; margin-top: 10px;">
                                        <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
                                            <a class="page-link" href="{{ $data->previousPageUrl() }}">
                                                <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>Previous
                                            </a>
                                        </li>
                                        <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                                            <a class="page-link" href="{{ $data->nextPageUrl() }}">
                                                Next <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <style>
                                .sort-icon {
                                    font-size: 16px;
                                    color: gray;
                                    margin-left: 5px;
                                }
                                th {
                                    padding: 10px;
                                    border-bottom: 2px solid black;
                                }
                                th:hover {
                                    background-color: #f2f2f2;
                                }
                            </style>

                            <script>
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);
                                window.location.href = url.toString();
                            }
//                             function filterByYear() {
//     let selectedYear = document.getElementById("yearFilter").value;

//     fetch(`/datajakon/bujkkontraktor?year=${selectedYear}`)
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error(`HTTP error! Status: ${response.status}`);
//             }
//             return response.text();
//         })
//         .then(html => {
//             let parser = new DOMParser();
//             let doc = parser.parseFromString(html, "text/html");
//             let newTableBody = doc.querySelector("#tableBody");
//             let currentTableBody = document.querySelector("#tableBody");

//             if (newTableBody && currentTableBody) {
//                 currentTableBody.innerHTML = newTableBody.innerHTML;
//             } else {
//                 console.error("Element #tableBody not found in response or current document.");
//             }
//         })
//         .catch(error => console.error("Error fetching filtered results:", error));
// }


                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/hspdivisi4?search=${input}`)
                                .then(response => response.text())
                                .then(html => {
                                    let parser = new DOMParser();
                                    let doc = parser.parseFromString(html, "text/html");
                                    let newTableBody = doc.querySelector("#tableBody").innerHTML;
                                    document.querySelector("#tableBody").innerHTML = newTableBody;
                                })
                                .catch(error => console.error("Error fetching search results:", error));
                        }

                                </script>



                        </div><!-- donate-box-inner -->
                                        </div><!-- col-xl-8 col-lg-12 -->
                                    </div><!-- row -->
                                </div><!-- container -->
                                {{-- @include('frontend.00_approve.01_cssterpisah.paginator') --}}
                            </section><!-- donate-section -->



                        {{-- </div><!-- service-two-imgbox -->
                    </div><!--service-two-card-->
                </div><!--col-12 col-lg-4 col-xl-4-->

            </div><!-- row -->
        </div><!-- container -->
    </section><!-- service-two-section --> --}}





</div><!--page-wrapper-->
@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
