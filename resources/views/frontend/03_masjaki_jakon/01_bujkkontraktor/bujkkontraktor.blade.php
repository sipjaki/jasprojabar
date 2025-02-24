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


            .badgekembali {
                background: linear-gradient(to right, navy, black);
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

                        </head>

                        <section class="document-section" style="margin-top: -100px;">
                            <div class="container" >
                              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <a href="//datajakon/bujk" style="background: white;">
                                        <button class="badgekembali" style="border: none; font-size:12px; cursor:pointer;">
                                            <i class="fas fa-arrow-circle-left mr-2"></i> MENU UTAMA BUJK KOSNTRUKSI DAN KONSULTASI KONSTRUKSI
                                        </button>
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
                                    <th style="text-align:center"> Nama Pemilik</th>
                                    <th style="text-align:center" >Alamat</th>
                                    {{-- <th style="text-align:center" >No Telepon</th> --}}
                                    <th style="text-align:center" >Email</th>
                                    {{-- <th style="text-align:center" >NIB</th> --}}
                                    <th style="text-align:center" >PJU</th>
                                    {{-- <th style="text-align:center" >Akte</th> --}}
                                    <th style="text-align:center" >Tanggal</th>
                                    {{-- <th style="text-align:center" >Notaris</th> --}}
                                    {{-- <th style="text-align:center" >Pengesahan</th> --}}
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
                                    <td>{{$item->namalengkap}}</td>
                                    <td>{{$item->alamat}}</td>
                                    {{-- <td>{{$item->no_telepon}}</td> --}}
                                    <td>{{$item->email}}</td>
                                    {{-- <td>{{$item->nib}}</td> --}}
                                    <td>{{$item->pju}}</td>
                                    {{-- <td>{{$item->no_akte}}</td> --}}
                                    {{-- <td>{{$item->tanggal}}</td> --}}
                                    <td>{{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('D MMMM YYYY') }}</td>
                                    {{-- <td>{{$item->nama_notaris}}</td> --}}
                                    {{-- <td>{{$item->no_pengesahan}}</td> --}}
                                    <td style="text-align: center">
                                        <a href="/datajakon/bujkkontraktor/{{$item->namalengkap}}">
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
