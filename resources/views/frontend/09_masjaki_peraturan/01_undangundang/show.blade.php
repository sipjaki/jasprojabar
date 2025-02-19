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
				<h3>{{ $title }}</h3>
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
								<li><a href="services.html"><i class="fa-solid fa-arrow-left-long"></i>Kembali</a></li>
								<li><a href="services.html">All Document<i class="fa-solid fa-arrow-right-long"></i></a></li>
								<li><a href="services.html">Policing and Crime<i class="fa-solid fa-arrow-right-long"></i></a></li>
								<li><a href="services.html">Agriculture and Food<i class="fa-solid fa-arrow-right-long"></i></a></li>
								<li><a href="services.html">Housing and Land<i class="fa-solid fa-arrow-right-long"></i></a></li>
								<li><a href="services.html">Art and Culture<i class="fa-solid fa-arrow-right-long"></i></a></li>
								<li><a href="services.html">Roads & Transport<i class="fa-solid fa-arrow-right-long"></i></a></li>
							</ul><!-- ul -->
						</div><!-- sidebar-widget-list-inner -->
						<div class="sidebar-widget sidebar-widget-card">
							<div class="sidebar-widget-card-icon">
								<i class="flaticon-question"></i>
							</div><!-- sidebar-widget-card-icon -->
							<div class="sidebar-widget-card-content">
								<h3><a href="contact.html">Get Any Help?</a></h3>
								<p>There are many variations of passages of lorem ipsum is simply free text available in the marke.</p>
							</div><!-- sidebar-widget-card-content -->
						</div><!-- sidebar-widget sidebar-widget-card -->
					</div><!--sidebar-->
				</div><!--col-12 col-lg-4 col-xl-4-->
				<div class="col-lg-8">
					<div class="department-details-imgbox">
						<img src="assets/image/gallery/about-7.jpg" alt="img-159">
						<a href="#"></a>
					</div><!-- department-details-imgbox -->
					<div class="department-details-content-box">
						<h4 class="department-details-title">Birth & Date Registration</h4>
						<p>There are many variations of passages of lorem ipsum is simply free text available in the market, but the majority time you put aside to be in our office. Lorem ipsum dolor sit amet, consectetLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div><!-- department-details-content-box -->
					<div class="department-details-box">
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur iste natus error sit voluptatem accusantium totam rem aperiam, eaque ipsa quae.</p>
						<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur iste natus error sit voluptatem accusantium totam rem aperiam, eaque ipsa quae.</p>
						<p>Thomas Edison may have been behind the invention of the electric light bulb, but he did not work alone. Edison worked alongside partners, both financial and commercial, to get his inventions off the ground. It was installed globally, an annual market growth of 22 percent. It is continuing its progress towards becoming a mainstream competitive salary and economy reports by mine.</p>
					</div><!-- department-details-box -->
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
