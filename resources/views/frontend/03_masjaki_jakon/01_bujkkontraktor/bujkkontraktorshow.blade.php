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
	<section class="department-details-section">
		<div class="container">
			<div class="row">

                <h3><i class="fas fa-building mr-2" style="margin-right: 10px;"></i>Informasi : {{$data->namalengkap}}</h3>


                {{-- ------------------------------------------------------------------------------------------ --}}
                <div class="col-lg-12">

                    <div class="department-details-imgbox">
                        {{-- <iframe src="{{ asset('storage/' . $data->peraturan) }}" width="100%" height="750" style="border: none;"></iframe> --}}
                        <a href="assets/pdf/sample.pdf" target="_blank"></a>
                    </div><!-- department-details-imgbox -->

                    <div class="department-details-content-box">
						{{-- <h4 class="department-details-title" style="font-size: 20px;">{{ $data->judul}}</h4> --}}
					</div><!-- department-details-content-box -->
                    <div class="document-details-inner">

						<div class="document-details">
							<div class="document-details-list">
								<div class="document-details-icon">
                                    <i class="fa fa-hard-hat"></i> <!-- Ikon helm konstruksi -->
                                </div><!-- document-details-icon -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-phone"> :</i> Telepon</h5>
                                    <p>{{$data->no_telepon}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-envelope"> :</i> Email</h5>
                                    <p>{{$data->email}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-id-card"> :</i> Nomor Induk Berusaha</h5>
                                    <p>{{$data->nib}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-user-tie"> :</i> Penanggung Jawab Umum</h5>
                                    <p>{{$data->pju}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-certificate"> :</i> No Akte</h5>
                                    <p>{{$data->no_akte}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-calendar"> :</i> Tanggal</h5>
                                    <p>{{$data->tanggal}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-user-secret"> :</i> Notaris</h5>
                                    <p>{{$data->nama_notaris}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-pencil-alt"> :</i> No Pengesahan</h5>
                                    <p>{{$data->no_pengesahan}}</p>
                                </div><!-- document-box-content -->

							</div><!-- document-box-list -->
						</div><!-- document-details -->

                        <div class="document-details">
							<div class="document-details-list">
                                <div class="document-details-icon">
                                    <i class="flaticon-list">Sub Klasifikasi Layanan</i> <!-- Ikon daftar layanan -->
                                </div><!-- document-details-icon -->

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
    background: #f8f8f8;
    text-transform: uppercase;
    font-weight: 600;
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

<body>
<div class="table-wrapper">
<table class="fl-table">
    <thead>
        <tr>
            {{-- <th style="text-align:center" >No</th> --}}
            <th style="text-align:center">Nama Pengurus</th>
            <th style="text-align:center" >Sub Klasifikasi Layanan</th>
            <th style="text-align:center" >Kode</th>
            <th style="text-align:center" >Kualifikasi</th>
            <th style="text-align:center" >Penerbit</th>
            <th style="text-align:center" >Tanggal Terbit</th>
            <th style="text-align:center" >Masa Berlaku</th>
            <th style="text-align:center" >Nama PSJK</th>
            <th style="text-align:center" >Sub Kualifikasi Badan Usaha</th>
             </tr>
    </thead>
    <tbody>
{{--
        @php
        $start = ($data->currentPage() - 1) * $data->perPage() + 1;
            @endphp --}}

        @foreach ($subData as $item )
        <tr>
            {{-- <td>{{ $loop->iteration + $start - 1 }}</td> --}}
            <td>{{$item->nama_pengurus}}</td>
            <td>{{$item->sub_klasifikasi_layanan}}</td>
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
							<div class="document-details-button">
								<a href="assets/inc/sample.pdf" title="download"><i class="fa-solid fa-arrow-down"></i></a>
							</div><!-- document-details-button -->
						</div><!-- document-details -->
					</div><!-- document-details-inner -->


                </div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- department-details-section -->
</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
