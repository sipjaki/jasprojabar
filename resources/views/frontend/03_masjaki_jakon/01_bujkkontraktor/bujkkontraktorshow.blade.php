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

                <div class="col-lg-12">

                    <div class="department-details-imgbox">
                        {{-- <iframe src="{{ asset('storage/' . $data->peraturan) }}" width="100%" height="750" style="border: none;"></iframe> --}}
                        <a href="assets/pdf/sample.pdf" target="_blank"></a>
                    </div><!-- department-details-imgbox -->

                    <div class="department-details-content-box">
						{{-- <h4 class="department-details-title" style="font-size: 20px;">{{ $data->judul}}</h4> --}}
					</div><!-- department-details-content-box -->
                    <div class="document-details-inner">
						<h3><i class="fas fa-building mr-2" style="margin-right: 10px;"></i>{{$data->namalengkap}}</h3>

						<div class="document-details">
							<div class="document-details-list">
								<div class="document-details-icon">
									<i class="flaticon-pdf"></i>
								</div><!-- document-details-icon -->
                                <div class="document-details-content">
                                    <h5><i class="fa fa-phone"></i> Telepon</h5>
                                    <p>{{$data->no_telepon}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-envelope"></i> Email</h5>
                                    <p>{{$data->email}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-id-card"></i> Nomor Induk Berusaha</h5>
                                    <p>{{$data->nib}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-user-tie"></i> Penanggung Jawab Umum</h5>
                                    <p>{{$data->pju}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-certificate"></i> No Akte</h5>
                                    <p>{{$data->no_akte}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-calendar"></i> Tanggal</h5>
                                    <p>{{$data->tanggal}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-user-secret"></i> Notaris</h5>
                                    <p>{{$data->nama_notaris}}</p>
                                </div><!-- document-box-content -->

                                <div class="document-details-content">
                                    <h5><i class="fa fa-pencil-alt"></i> No Pengesahan</h5>
                                    <p>{{$data->nama_notaris}}</p>
                                </div><!-- document-box-content -->

							</div><!-- document-box-list -->
						</div><!-- document-details -->

                        <div class="document-details">
							<div class="document-details-list">
								<div class="document-details-icon">
									<i class="flaticon-pdf"></i>
								</div><!-- document-details-icon -->
								<div class="document-details-content">
									<h5><a href="department-details.html">Death Certificate</a></h5>
									<p>Jpg (103kb)</p>
								</div><!-- document-details-content -->
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
