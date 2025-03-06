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
                                    <span class="input-icon"><i class="fas fa-user" style="color: black; margin-right:10px;"></i>Nama Lengkap</span>
                                    <input type="text" id="namalengkap" class="input-text" placeholder="Isi Data" name="namalengkap" aria-required="true">
                                </div>
                            </div>

                            <!-- Nomor Telepon -->
                            <div class="col-12 col-lg-6">
                                <div class="input-group">
                                    <span class="input-icon"><i class="fas fa-phone" style="color: black; margin-right:10px;"></i></span>
                                    <input type="text" id="notelepon" class="input-text" placeholder="Nomor Telepon" name="notelepon" aria-required="true">
                                </div>
                            </div>

                            <!-- Pekerjaan -->
                            <div class="col-12 col-lg-6">
                                <div class="input-group">
                                    <span class="input-icon"><i class="fas fa-briefcase" style="color: black; margin-right:10px;"></i></span>
                                    <input type="text" id="pekerjaan" class="input-text" placeholder="Pekerjaan" name="pekerjaan" aria-required="true">
                                </div>
                            </div>

                            <!-- Keterangan -->
                            <div class="col-12 col-lg-12">
                                <div class="input-group">
                                    <span class="input-icon"><i class="fas fa-comment" style="color: black; margin-right:10px;"></i></span>
                                    <textarea name="keterangan" id="keterangan" placeholder="Tuliskan Kritik atau Saran" class="input-text" aria-required="true"></textarea>
                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="col-12 col-lg-12 text-center" style="color: black; margin-right:10px;">
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
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12083.735079362054!2d-74.01702461732008!3d40.785470167558394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258131938b8d5%3A0xe39c30a8afef2d96!2sWest%20New%20York%2C%20NJ%2007093%2C%20USA!5e0!3m2!1sen!2sin!4v1668832966742!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
