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
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="sidebar">
						<div class="sidebar-widget-list-inner">
							<ul>

                                @include('frontend.00_approve.01_cssterpisah.peraturanjasakonstruksi')

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
                        {{-- <iframe src="{{ asset('storage/' . $data->peraturan) }}" width="100%" height="750" style="border: none;"></iframe> --}}
                        <a href="assets/pdf/sample.pdf" target="_blank"></a>
                    </div><!-- department-details-imgbox -->

                    <div class="department-details-content-box">
						{{-- <h4 class="department-details-title" style="font-size: 20px;">{{ $data->judul}}</h4> --}}
					</div><!-- department-details-content-box -->
                    <div class="document-details-inner">
						<h3>Download Documents</h3>
						<div class="document-details">
							<div class="document-details-list">
								<div class="document-details-icon">
									<i class="flaticon-pdf"></i>
								</div><!-- document-details-icon -->
								<div class="document-details-content">
									<h5><a href="department-details.html">Birthdate Certificate</a></h5>
									<p>Pdf (194kb)</p>
								</div><!-- document-details-content -->
							</div><!-- document-details-list -->
							<div class="document-details-button">
								<a href="assets/inc/sample.pdf" title="download"><i class="fa-solid fa-arrow-down"></i></a>
							</div><!-- document-details-button -->
						</div><!-- document-details -->
						<div class="document-details">
							<div class="document-details-list">
								<div class="document-details-icon">
									<i class="flaticon-pdf"></i>
								</div><!-- document-details-icon -->
								<div class="document-details-content">
									<h5><a href="department-details.html">Birthdate modification verification</a></h5>
									<p>Pdf (194kb)</p>
								</div><!-- document-box-content -->
							</div><!-- document-box-list -->
							<div class="document-details-button">
								<a href="assets/inc/sample.pdf" title="download"><i class="fa-solid fa-arrow-down"></i></a>
							</div><!-- document-details-button -->
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
