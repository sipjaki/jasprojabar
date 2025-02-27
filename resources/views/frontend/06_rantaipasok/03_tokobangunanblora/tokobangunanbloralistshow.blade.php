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
				<h3 style="color: black; font-size:30px;">{{ $title }}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->
	<section class="department-details-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="sidebar">
						<div class="sidebar-widget-list-inner">
							<ul>

                                {{-- @include('frontend.00_approve.01_cssterpisah.peraturanjasakonstruksi') --}}
                                <li><a href="javascript:history.back()"><i class="fa-solid fa-arrow-left-long"></i> Kembali Ke Data Toko Bangunan</a></li>
                                <li><a href="#"><i class="fa-solid fa-store"></i> Nama : {{$data->namatokobangunan}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-map-marker-alt"></i> Kecamatan : {{$data->kecamatanblora->kecamatanblora}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-user"></i> Pemilik : {{$data->pemilik}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-location-arrow"></i> Alamat : {{$data->alamat}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-phone"></i> No Telepon : {{$data->notelepon}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-envelope"></i> Email : {{$data->email}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-cogs"></i> Jenis Toko : {{$data->jenisprodukbangunan}}</a></li>

                            </ul><!-- ul -->
						</div><!-- sidebar-widget-list-inner -->
						<div class="sidebar-widget sidebar-widget-card">
							<div class="sidebar-widget-card-icon">
								<i class="flaticon-question"></i>
							</div><!-- sidebar-widget-card-icon -->
							<div class="sidebar-widget-card-content">
                                <h3><a href="https://wa.me/6281321455855" target="_blank">Butuh Bantuan? Klik </a></h3>
								<p>
                                    Kami siap membantu! Klik di atas  untuk terhubung langsung dengan tim kami.</p>
							</div><!-- sidebar-widget-card-content -->
						</div><!-- sidebar-widget sidebar-widget-card -->
					</div><!--sidebar-->
				</div><!--col-12 col-lg-4 col-xl-4-->
				<div class="col-lg-8">

                    <div class="department-details-imgbox">
                        <iframe src="{{ asset('storage/' . $data->fototokobangunan) }}" width="100%" height="750" style="border: none;"></iframe>
                        {{-- <a href="assets/pdf/sample.pdf" target="_blank"></a> --}}
                    </div><!-- department-details-imgbox -->

                    <div class="department-details-content-box">
						<h4 class="department-details-title">{{ $data->namatokobangunan}}</h4>
					</div><!-- department-details-content-box -->
                    <div class="department-details-content-box">
						<h6 class="department-details-title">{{ $data->keterangan}}</h6>
					</div><!-- department-details-content-box -->

                </div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- department-details-section -->

    <section class="department-details-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12 col-xl-12">

				</div><!--col-12 col-lg-4 col-xl-4-->
				<div class="col-lg-12">
                    <table border="1" cellpadding="5" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="background-color: #d1f7d1;">No</th>
                                <th style="background-color: #d1f7d1;">Bahan Material</th>
                                <th style="background-color: #d1f7d1;">Satuan</th>
                                <th style="background-color: #d1f7d1;">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Pasir</td>
                                <td>Meter Kubik</td>
                                <td>Rp 100.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Batu Bata</td>
                                <td>Ribu</td>
                                <td>Rp 1.500</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Semen</td>
                                <td>Karung</td>
                                <td>Rp 75.000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Gipsum</td>
                                <td>Plester</td>
                                <td>Rp 50.000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Keramik</td>
                                <td>Per Dus</td>
                                <td>Rp 450.000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Cat Dinding</td>
                                <td>Kaleng</td>
                                <td>Rp 120.000</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Paku</td>
                                <td>Kilogram</td>
                                <td>Rp 30.000</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Tripleks</td>
                                <td>Lembar</td>
                                <td>Rp 150.000</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Atap Zincalume</td>
                                <td>Meter</td>
                                <td>Rp 200.000</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Kayu</td>
                                <td>Meter</td>
                                <td>Rp 75.000</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Plafon PVC</td>
                                <td>Meter Persegi</td>
                                <td>Rp 100.000</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Wiremesh</td>
                                <td>Roll</td>
                                <td>Rp 250.000</td>
                            </tr>
                        </tbody>
                    </table>

                </div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- department-details-section -->
</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
