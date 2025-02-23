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
    <section class="service-two-section">
        <div class="container">
            <div class="row row-gutter-y-40">

                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="service-two-card">
                        <div class="service-two-imgbox">

                            <section class="donate-section">
                                <div class="container" style="margin-top: -100px;">
                                    <div class="row row-gutter-30">

                                        <div class="col-xxl-12 col-lg-12">
                                            <div class="donate-box-inner">


                                                {{-- TABLE DATA  --}}
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
                            background: #fdba00;
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
                        </style>
                        </head>

                        <section class="document-section" style="margin-top: -100px;">
                            <div class="container" >
                              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <a href="/datajakon/datapaketpekerjaanblora">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Menu Data Badan Usaha Konstruksi dan Konsultan</button>
                                </li>
                                </a>
                                </ul>
                            </div>
                        </section>


                        <body>
                        <div class="table-wrapper" style="margin-top:-130px;">
                        <table class="fl-table">
                            <thead>
                                <tr>
                                    <th style="text-align:center"> No</th>
                                    <th style="text-align:center">Jenis Pekerjaan</th>
                                    <th style="text-align:center" >Nama Pekerjaan</th>
                                    <th style="text-align:center" >Pelaksanaan</th>
                                    <th style="text-align:center" >Penyedia</th>
                                    <th style="text-align:center" >NIB</th>
                                    <th style="text-align:center" >Nilai Kontrak</th>
                                    <th style="text-align:center" >Sumber Dana</th>
                                    <th style="text-align:center" >Jenis Kontrak</th>
                                    <th style="text-align:center" >Karakteristik Kontrak</th>
                                    <th style="text-align:center" >Mulai</th>
                                    <th style="text-align:center" >Selesai</th>
                                    <th style="text-align:center" >View</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $start = ($data->currentPage() - 1) * $data->perPage() + 1;
                                    @endphp

                                @foreach ($data as $item )
                                <tr>
                                    <td>{{ $loop->iteration + $start - 1 }}</td>
                                    <td>{{$item->jenispekerjaan}}</td>
                                    <td>{{$item->namapekerjaan}}</td>
                                    <td>{{$item->tahunpelaksanaan}}</td>
                                    <td>{{$item->cvptpenyedia}}</td>
                                    <td>{{$item->nib}}</td>
                                    {{-- <td>{{$item->nilaikontrak}}</td> --}}
                                    <td>Rp {{ number_format($item->nilaikontrak, 2, ',', '.') }}</td>
                                    <td>{{$item->sumberdana}}</td>
                                    <td>{{$item->jeniskontrak}}</td>
                                    <td>{{$item->karakteristikkontrak}}</td>
                                    <td>{{$item->bulanmulai}}</td>
                                    <td>{{$item->bulanselesai}}</td>
                                    <td>{{$item->dinas}}</td>
                                    <td style="text-align: center">
                                        <a href="/datajakon/paketpekerjaantender/{{$item->jenispekerjaan}}">
                                            <i class="fas fa-eye view-icon" onclick="alert('View clicked!')"></i>
                                        </a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        </div>
                                            </div><!-- donate-box-inner -->
                                        </div><!-- col-xl-8 col-lg-12 -->
                                    </div><!-- row -->
                                </div><!-- container -->
                                @include('frontend.00_approve.01_cssterpisah.paginator')
                            </section><!-- donate-section -->



                        </div><!-- service-two-imgbox -->
                    </div><!--service-two-card-->
                </div><!--col-12 col-lg-4 col-xl-4-->

            </div><!-- row -->
        </div><!-- container -->
    </section><!-- service-two-section -->





</div><!--page-wrapper-->
@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
