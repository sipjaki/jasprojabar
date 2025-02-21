@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

<div class="page-wrapper">
	<section class="page-banner" style="background-image: url('/assets/approve/image/bg/page-banner.png')">
		<div class="container">
			<div class="page-breadcrumbs">
				<ul class="list-unstyled">
					{{-- <li><a href="index.html">Home</a></li> --}}
					{{-- <li>Document-details</li> --}}
				</ul><!-- list-unstyled -->
			</div><!-- page-breadcrumbs -->
			<div class="page-banner-title">
				<h3 style="color: black;">{{ $title }}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->

    <section class="donate-section">
		<div class="container">


			<div class="row row-gutter-30">
				<div class="col-lg-12">
                    <div class="col-lg-12" style="display: flex; justify-content: left; padding:20px">
                        <button class="btn"
                                style="background-color: #000080;
                                       color: white;
                                       display: flex;
                                       align-items: center;
                                       border: none;
                                       border-radius:10px;
                                       transition: all 0.3s ease;
                                       cursor: pointer;"
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
                                onmouseout="this.style.backgroundColor='#000080'; this.style.color='white'; this.querySelector('i').style.color='white';">
                            <i class="fas fa-arrow-left" style="margin-right: 10px; color: white;"></i>Kembali
                        </button>
                    </div><!-- col-lg-12 -->
				</div><!-- col-lg-12 -->
				<div class="col-xxl-12 col-lg-12">
					<div class="donate-box-inner" style="margin-top: -20px;">


					<div class="col-lg-12">
                        <button class="btn btn-primary">Informasi BUJK Kontraktor : {{$data->namalengkap}}</button>
                    </div><!-- col-lg-12 -->

						<form action="#" class="contact-form donation" method="post">
							<div class="row row-gutter-10">
                                <div class="col-lg-6">
                                    <h6><i class="fas fa-user mr-2" style="margin-right: 5px;"></i>Nama Pemilik </h6>
                                    <input type="text" id="fname" class="input-text" placeholder="{{$data->namalengkap}}" name="fname" aria-required="true" readonly>
                                </div><!-- col-lg-6 -->

                                <div class="col-lg-3">
                                    <h6><i class="fas fa-phone-alt mr-2" style="margin-right: 5px;"></i>No Telepon</h6>
                                    <input type="text" id="fname" class="input-text" placeholder="{{$data->no_telepon}}" name="fname" aria-required="true" readonly>
                                </div><!-- col-lg-3 -->

                                <div class="col-lg-3">
                                    <h6><i class="fas fa-id-card mr-2" style="margin-right: 5px;"></i>Nomor Induk Berusaha</h6>
                                    <input type="text" id="fname" class="input-text" placeholder="{{$data->nib}}" name="fname" aria-required="true" readonly>
                                </div><!-- col-lg-3 -->

                                <div class="col-lg-12">
                                    <h6><i class="fas fa-map-marker-alt mr-2" style="margin-right: 5px;"></i>Alamat</h6>
                                    <input type="text" id="fname" class="input-text" placeholder="{{$data->alamat}}" name="fname" aria-required="true" readonly>
                                </div><!-- col-lg-12 -->

                                <div class="col-lg-6">
                                    <h6><i class="fas fa-envelope mr-2" style="margin-right: 5px;"></i>Email</h6>
                                    <input type="text" id="fname" class="input-text" placeholder="{{$data->email}}" name="fname" aria-required="true" readonly>
                                </div><!-- col-lg-6 -->

                                <div class="col-lg-6">
                                    <h6><i class="fas fa-user-tie mr-2" style="margin-right: 5px;"></i>Penanggung Jawab Umum</h6>
                                    <input type="text" id="fname" class="input-text" placeholder="{{$data->pju}}" name="fname" aria-required="true" readonly>
                                </div><!-- col-lg-6 -->

                                <div class="col-lg-6">
                                    <h6><i class="fas fa-file-alt mr-2" style="margin-right: 5px;"></i>No Akte</h6>
                                    <input type="text" id="fname" class="input-text" placeholder="{{$data->no_akte}}" name="fname" aria-required="true" readonly>
                                </div><!-- col-lg-6 -->

                                <div class="col-lg-6">
                                    <h6><i class="fas fa-calendar mr-2" style="margin-right: 5px;"></i>Tanggal</h6>
                                    <input type="text" id="fname" class="input-text" placeholder="{{$data->tanggal}}" name="fname" aria-required="true" readonly>
                                </div><!-- col-lg-6 -->

                                <div class="col-lg-6">
                                    <h6><i class="fas fa-pencil-alt mr-2" style="margin-right: 5px;"></i>Notaris</h6>
                                    <input type="text" id="fname" class="input-text" placeholder="{{$data->nama_notaris}}" name="fname" aria-required="true" readonly>
                                </div><!-- col-lg-6 -->

                                <div class="col-lg-6">
                                    <h6><i class="fas fa-check-circle mr-2" style="margin-right: 5px;"></i>No Pengesahan</h6>
                                    <input type="text" id="fname" class="input-text" placeholder="{{$data->no_pengesahan}}" name="fname" aria-required="true" readonly>
                                </div><!-- col-lg-6 -->
                                                            </div><!-- row row-gutter-10 -->
						</form><!-- contact-form -->
					</div><!-- donate-box-inner -->
				</div><!-- col-xl-8 col-lg-12 -->

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- donate-section -->


	<section class="department-details-section" style="margin-top: -200px;">
		<div class="container">
			<div class="row">
                {{-- ------------------------------------------------------------------------------------------ --}}
                <div class="col-lg-12">

                    <style>

                        .centered-button {
                            text-align: center;
                            margin-top: 50px; /* Adjusts vertical position */
                        }

                        .green-button {
                            background-color: #28a745; /* Light green background */
                            color: white; /* White text */
                            padding: 10px 20px; /* Adds padding around the text */
                            font-size: 14px; /* Smaller text size */
                            border: none;
                            border-radius: 5px; /* Rounded corners */
                            display: inline-flex;
                            align-items: center; /* Centers the text and icon vertically */
                            cursor: pointer;
                        }

                        .green-button i {
                            font-size: 16px; /* Icon size */
                        }

                        .green-button:hover {
                            background-color: #218838; /* Darker green on hover */
                        }

                    </style>

                        <div class="document-details">
							<div class="document-details-list">
                                <div class="centered-button">
                                    <button class="green-button" style="margin-bottom:10px; text-transform:uppercase">
                                        <i class="fas fa-file mr-2" style="margin-right:5px;"></i> SUB KLASIFIKASI LAYANAN : {{$data->namalengkap}}
                                    </button>

                                </div>


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
                                            background: #ffd000;
                                            text-transform: uppercase;
                                            font-weight: 800;
                                            letter-spacing: 0.5px;
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
                                                border: 1px solid #000000;
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

                    <body>
                    <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                {{-- <th style="text-align:center" >No</th> --}}
                                <th style="text-align:center" style="color: black" >No</th>
                                <th style="text-align:center" style="color: black">Nama Pengurus</th>
                                <th style="text-align:center" style="color: black" >Sub Klasifikasi Layanan</th>
                                <th style="text-align:center" style="color: black" >Kode</th>
                                <th style="text-align:center" style="color: black" >Kualifikasi</th>
                                <th style="text-align:center" style="color: black">Penerbit</th>
                                <th style="text-align:center" style="color: black">Tanggal Terbit</th>
                                <th style="text-align:center" style="color: black">Masa Berlaku</th>
                                <th style="text-align:center" style="color: black">Nama PSJK</th>
                                <th style="text-align:center" style="color: black">Sub Kualifikasi Badan Usaha</th>
                                </tr>
                        </thead>
                        <tbody>

                        {{-- @php
                            // Pastikan $data tidak null atau tidak terdefinisi
                            $start = ($data && $data->currentPage()) ? ($data->currentPage() - 1) * $data->perPage() + 1 : 1;
                        @endphp --}}

                        @foreach ($subData as $item)
                        <tr>
                            <td>{{ $loop->iteration + $start - 1 }}</td>
                            <td>{{$item->nama_pengurus}}</td>
                            <td>{{$item->sub_klasifikasi_layanan}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->kualifikasi}}</td>
                            <td>{{$item->penerbit}}</td>
                            <td>{{$item->tanggal_terbit}}</td>
                            <td>{{$item->masa_berlaku}}</td>
                            <td>{{$item->nama_psjk}}</td>
                            <td>{{$item->sub_kualifikasi_bu}}</td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                    </div>
                                                </div><!-- document-details-list -->

                                            </div><!-- document-details -->
                                        </div><!-- document-details-inner -->


                                    </div><!-- col-lg-8 -->
                                </div><!-- row -->
                            </div><!-- container -->
                        </div><!--page-wrapper-->
                    </div><!--page-wrapper-->
                </div><!--page-wrapper-->
            </div><!--page-wrapper-->
        </div><!--page-wrapper-->
    </section><!-- department-details-section -->


                    @include('frontend.00_approve.01_cssterpisah.footer1')
                    @include('frontend.00_approve.01_cssterpisah.footer')
