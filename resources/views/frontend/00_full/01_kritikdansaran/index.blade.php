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
	<section class="contact-section">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
                    <form action="/kritikdansaran" class="contact-form contact-form-validated" method="post">
                        <div class="row row-gutter-10">
                            <!-- Nama Lengkap -->
                            <div class="col-12 col-lg-6">
                                <div class="input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-user"></i> <span class="label-text">Nama Lengkap</span>
                                    </span>
                                    <input type="text" id="namalengkap" class="input-text" placeholder="Isi Data ..." name="namalengkap" aria-required="true">
                                </div>
                            </div>

                            <!-- Nomor Telepon -->
                            <div class="col-12 col-lg-6">
                                <div class="input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-phone"></i> <span class="label-text">Nomor Telepon</span>
                                    </span>
                                    <input type="text" id="notelepon" class="input-text" placeholder="Nomor WhatsApp ..." name="notelepon" aria-required="true">
                                </div>
                            </div>

                            <!-- Pekerjaan -->
                            <div class="col-12 col-lg-6">
                                <div class="input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-briefcase"></i> <span class="label-text">Pekerjaan</span>
                                    </span>
                                    <input type="text" id="pekerjaan" class="input-text" placeholder="Isi Data ...." name="pekerjaan" aria-required="true">
                                </div>
                            </div>

                            <!-- Keterangan -->
                            <div class="col-12 col-lg-12">
                                <div class="input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-comment"></i> <span class="label-text">Kritik dan Saran</span>
                                    </span>
                                    <textarea name="keterangan" id="keterangan" placeholder="Tuliskan Kritik atau Saran Anda ... " class="input-text" aria-required="true"></textarea>
                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="col-12 col-lg-12 text-center">
                                <button class="btn btn-primary">Kirim Kritik & Saran</button>
                            </div>
                        </div>
                    </form>

				</div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- contact-section -->
	<div class="contact-gmap-section">
		<div class="container">
			<div class="responsive-map">
				<iframe src="https://www.google.com/maps/place/Dinas+Pekerjaan+Umum+dan+Penataan+Ruang+(DPUPR)+Kabupaten+Blora/@-6.977182,111.4085298,17z/data=!3m1!4b1!4m6!3m5!1s0x2e77411bc797c1ed:0x5ddba5997190e35c!8m2!3d-6.977182!4d111.4111047!16s%2Fg%2F11b6dpfgz4?entry=ttu&g_ep=EgoyMDI1MDMwMy4wIKXMDSoJLDEwMjExNDU1SAFQAw%3D%3D"></iframe>
			</div><!-- responsive-map -->
		</div><!-- container -->
	</div><!-- contact-gmap-section -->
	<div class="cta-four-section">
		<div class="container">
			<div class="cta-four-inner">
				<div class="row row-gutter-y-20 ">
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="cta-four-content">
							<i class="flaticon-help"></i>
							<div class="cta-four-content-box">
								<span>Have Question?</span>
								<p>Free +92 (8800) 6802</p>
							</div><!-- cta-four-content-box -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-lg-6 col-xl-3 -->
					<div class="col-12 col-md-6 col-lg-6 col-xl-3">
						<div class="cta-four-content">
							<i class="flaticon-envelope-3"></i>
							<div class="cta-four-content-box">
								<span>Write Email</span>
								<p>needhelp@company.com</p>
							</div><!-- cta-four-content-box -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-md-6 col-lg-6 col-xl-3 -->
					<div class="col-12 col-lg-6 col-xl-4">
						<div class="cta-four-content">
							<i class="flaticon-location-pin"></i>
							<div class="cta-four-content-box">
								<span>Visit Office</span>
								<p>30 Broklyn Golden Street. USA</p>
							</div><!-- cta-four-content-box -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-lg-6 col-xl-4 -->
					<div class="col-12 col-lg-6 col-xl-2">
						<div class="cta-four-content">
							<div class="cta-four-widget-socials">
								<a href="#"><i class="fa-brands fa-twitter"></i></a>
								<a href="#"><i class="fa-brands fa-facebook"></i></a>
								<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
								<a href="#"><i class="fa-brands fa-instagram"></i></a>
							</div><!-- cta-four-widget-socials -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-lg-6 col-xl-2 -->
				</div><!-- row -->
			</div><!-- cta-four-inner -->
		</div><!-- container -->
	</div><!-- cta-four-section -->
</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
