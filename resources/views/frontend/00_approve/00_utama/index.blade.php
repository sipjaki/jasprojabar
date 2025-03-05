@include('frontend.00_approve.01_cssterpisah.header')

<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

<div class="page-wrapper">
	<section class="main-slider">

		<div class="main-slider-swiper owl-carousel owl-theme">
			<div class="item">
				<div class="item-slider-bg"  style="background-image: url(assets/00_dokmasjaki/01_beranda/jakon4.jpeg)"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-content">
								<div class="slider-tagline">Selamat Datang ! di </div>
								<h4 class="section-title">Sistem Informasi <br> Pembina Jasa Konstruksi DPUPR Kabupaten Blora</h4>
								{{-- <a href="index-2.html" class="btn btn-primary">Discover More</a> --}}
							</div><!-- slider-content -->
						</div><!-- col-md-12 -->
					</div><!-- row -->
				</div><!-- container -->
			</div><!--item-->
			<div class="item">
				<div class="item-slider-bg"  style="background-image: url(assets/00_dokmasjaki/03_datajakon/petaindonesiabaru.png)"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-content">
								{{-- <div class="slider-tagline">City Goverment Online Services</div> --}}
								<h1 class="section-title">Sasarengan mBangun Blora Unggul dan <br>Berdaya Saing</h1>
								{{-- <a href="index-2.html" class="btn btn-primary">Discover More</a> --}}
							</div><!-- slider-content -->
						</div><!-- col-md-12 -->
					</div><!-- row -->
				</div><!-- container -->
			</div><!--item-->
			<div class="item">
				<div class="item-slider-bg"  style="background-image: url(assets/00_dokmasjaki/01_beranda/masjaki2.png)"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-content">
								{{-- <div class="slider-tagline">City Goverment Online Services</div> --}}
								<h1 class="section-title">Blora Mustika<br>Cacana Jaya Kerta Bhumi</h1>
								{{-- <a href="index-2.html" class="btn btn-primary">Discover More</a> --}}
							</div><!-- slider-content -->
						</div><!-- col-md-12 -->
					</div><!-- row -->
				</div><!-- container -->
			</div><!--item-->
		</div><!-- main-slider-swiper -->

	</section><!--main-slider-->







    <section class="client-section">
        <h5 class="client-text" style="font-weight: 800; color:black;" >Dokumentasi Video Kami</h5>
        <div class="container">
            <div class="client-carousel owl-carousel owl-theme">
                <div class="item">
                    <video class="img-fluid" controls>
                        <source src="/assets/00_dokmasjaki/00_video/video1.mp4" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div><!--item-->
                <div class="item">
                    <video class="img-fluid" controls>
                        <source src="/assets/00_dokmasjaki/00_video/video2.mp4" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div><!--item-->
                <div class="item">
                    <video class="img-fluid" controls>
                        <source src="/assets/00_dokmasjaki/00_video/video3.mp4" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div><!--item-->
                <div class="item">
                    <video class="img-fluid" controls>
                        <source src="/assets/00_dokmasjaki/00_video/video4.mp4" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div><!--item-->
            </div><!--client-carousel owl-carousel owl-theme-->
        </div><!--container-->
    </section><!--client-section-->


    {{-- REKOMENDASI BERITA HIGHLIGHT --}}
    {{-- <section class="event-section">
		<div class="container">
			<div class="event-section-inner">
				<div class="row">
					<div class="col-lg-6">
						<div class="section-title-box">
							<div class="section-tagline">LATEST EVENTS</div>
							<h2 class="section-title">Explore Upcoming City Event Schedule</h2>
						</div><!-- section-title-box -->
					</div><!--col-lg-6-->
					<div class="col-lg-6">
						<div class="event-content-box">
							<div class="section-text">
								<p>Aliquam viverra arcu. Donec aliquet blandit enim feugiat.
									Suspendisse id quam sed eros tincidunt luctus sit amet eu nibh egestas tempus turpis.</p>
							</div><!-- section-text -->
						</div><!--event-content-box-->
					</div><!-- col-lg-6 -->
				</div><!-- row -->
				<div class="row row-gutter-y-40">
					<div class="col-xl-5">
						<div class="event-subscribe-card">
							<div class="event-details-card-title">
								<div class="event-icon">
									<i class="flaticon-envelope"></i>
								</div><!-- event-icon -->
								<h5>Subscribe</h5>
								<p>Get latest news & events details</p>
							</div><!-- event-details-card-title -->
							<div class="event-details-card-content">
								<form  action="assets/inc/sendemail.php" class="contact-form" method="post">
									<div class="form-group">
										<input type="email" id="Email" class="input-text" placeholder="Email address" name="email" required>
									</div><!-- form-group -->
									<button class="btn btn-primary w-100">Subscribe</button><!-- button -->
									<p>Never share your email with others.</p>
								</form><!-- form -->
							</div><!-- event-details-card-content -->
						</div><!-- event-subscribe-card -->
					</div><!-- col-xl-5 -->
					<div class="col-xl-7">
						<div class="event-card">
							<div class="event-card-image">
								<div class="event-card-image-inner">
									<a href="event-details.html"><img src="assets/image/event/event-2.jpg" class="img-fluid" alt="img-20"></a>
									<div class="event-card-meta">
										<div class="event-meta-number">
											<span>28</span>
										</div><!-- event-meta-number -->
										<div class="event-meta-date">
											<span>October 2022</span>
										</div><!-- event-meta-date -->
									</div><!-- event-card-meta -->
								</div><!-- event-card-image-inner -->
							</div><!--event-card-image-->
							<div class="event-card-content">
								<div class="event-card-info">
									<ul class="list-unstyled">
										<li>
											<i class="fa-solid fa-clock"></i>
											<span>08:00am - 05:00pm</span>
										</li><!-- li -->
										<li>
											<i class="fa-sharp fa-solid fa-location-pin"></i>
											<span>New Hyde Park, NY 11040</span>
										</li><!-- li -->
									</ul><!-- list-unstyled -->
								</div><!--event-card-info-->
								<div class="event-card-title">
									<h4><a href="event-details.html">Organizing 2022 city photography new contest</a></h4>
								</div><!-- event-card-title -->
							</div><!--"event-card-content-->
						</div><!--event-card-->
						<div class="event-card">
							<div class="event-card-image">
								<div class="event-card-image-inner">
									<a href="event-details.html"><img src="/assets/approve/image/event/event-3.jpg" class="img-fluid" alt="img-21"></a>
									<div class="event-card-meta">
										<div class="event-meta-number">
											<span>28</span>
										</div><!-- event-meta-number -->
										<div class="event-meta-date">
											<span>October 2022</span>
										</div><!-- event-meta-date -->
									</div><!-- event-card-meta -->
								</div><!-- event-card-image-inner -->
							</div><!-- event-card-image -->
							<div class="event-card-content">
								<div class="event-card-info">
									<ul class="list-unstyled">
										<li>
											<i class="fa-solid fa-clock"></i>
											<span>08:00am - 05:00pm</span>
										</li><!-- li -->
										<li>
											<i class="fa-sharp fa-solid fa-location-pin"></i>
											<span>New Hyde Park, NY 11040</span>
										</li><!-- li -->
									</ul><!-- list-unstyled -->
								</div><!--event-card-info-->
								<div class="event-card-title">
									<h4><a href="event-details.html">Organizing 2022 city photography new contest</a></h4>
								</div><!-- event-card-title -->
							</div><!--event-card-content-->
						</div><!--event-card-->
					</div><!-- col-xl-7 -->
				</div><!-- row -->
			</div><!--event-section-inner-->
		</div><!--container-->
	</section><!--event-section--> --}}
{{--
	<section class="cta-five-section">
		<div class="container">
			<div class="cta-five-card">
				<div class="cta-five-card-icon">
					<i class="flaticon-file"></i>
				</div><!-- cta-five-card-icon -->
				<div class="cta-five-content">
					<h4>Download Persyaratan Pelatihan, Bimbingan Teknis, dan Workshop</h4>
					<p>
                        Brosur ini berisi persyaratan untuk pelatihan, bimbingan teknis, dan workshop yang ditujukan untuk meningkatkan kompetensi tenaga ahli dalam bidang konstruksi, sebagai bagian dari upaya pengembangan sistem informasi pembina jasa konstruksi. </p>
				</div><!-- cta-five-content -->
				<div class="cta-five-button">
					<a href="#" class="btn btn-primary">Download Files</a>
				</div><!-- cta-five-button -->
				<div class="cta-five-img">
					<i class="flaticon-file"></i>
				</div><!-- cta-five-img -->
			</div><!--cta-five-card-->
		</div><!-- container -->
	</section><!--cta-five-section--> --}}

    <section class="blog-section">
		<div class="container">
			<div class="blog-box">
				<div class="section-title-box text-center">
					<div class="section-tagline">DIRECT FROM THE BLOG POSTS</div>
					<h2 class="section-title">Checkout Latest News <br>and Articles</h2>
				</div><!-- section-title-box -->
			</div><!--blog-box-->
			<div class="row row-gutter-y-155">
				<div class="col-lg-4">
					<div class="blog-card">
						<div class="blog-card-image">
							<img src="/assets/approve/image/blog/blog-1.jpg" class="img-fluid" alt="img-22">
							<a href="news-details.html"></a>
						</div><!-- blog-card-image -->
						<div class="blog-card-date">
							<a href="news-details.html">28SEP</a>
						</div><!-- blog-card-date -->
						<div class="blog-card-content">
							<div class="blog-card-meta">
								<span class="author">
									by<a href="news-details.html">Admin</a>
								</span><!-- author -->
								<span class="comment">
									<a href="news-details.html">02 Comments</a>
								</span><!-- comment -->
							</div><!-- blog-card-meta -->
							<h4><a href="news-details.html">Supporting local business to bounce back</a></h4>
							<p>Tellus amet vel nisi, vel felis morbi sit et. Risus, pulvinar ultricie</p>
						</div><!-- blog-card-content -->
					</div><!-- blog-card -->
				</div><!-- col-lg-4 -->
				<div class="col-lg-4">
					<div class="blog-card">
						<div class="blog-card-image">
							<img src="/assets/approve/image/blog/blog-2.jpg" class="img-fluid" alt="img-23">
							<a href="news-details.html"></a>
						</div><!-- blog-card-image -->
						<div class="blog-card-date">
							<a href="news-details.html">28SEP</a>
						</div><!-- blog-card-date -->
						<div class="blog-card-content">
							<div class="blog-card-meta">
								<span class="author">
									by<a href="news-details.html">Admin</a>
								</span><!-- author -->
								<span class="comment">
									<a href="news-details.html">02 Comments</a>
								</span><!-- comment -->
							</div><!-- blog-card-meta -->
							<h4><a href="news-details.html">Resilience for TownGov Green Project</a></h4>
							<p>Tellus amet vel nisi, vel felis morbi sit et. Risus, pulvinar ultricie</p>
						</div><!-- blog-card-content -->
					</div><!-- blog-card -->
				</div><!-- col-lg-4 -->
				<div class="col-lg-4">
					<div class="blog-card">
						<div class="blog-card-image">
							<img src="/assets/approve/image/blog/blog-3.jpg" class="img-fluid" alt="img-24">
							<a href="news-details.html"></a>
						</div><!-- blog-card-image -->
						<div class="blog-card-date">
							<a href="news-details.html">28SEP</a>
						</div><!-- blog-card-date -->
						<div class="blog-card-content">
							<div class="blog-card-meta">
								<span class="author">
									by<a href="news-details.html">Admin</a>
								</span><!-- author -->
								<span class="comment">
									<a href="news-details.html">02 Comments</a>
								</span><!-- comment -->
							</div><!-- blog-card-meta -->
							<h4><a href="news-details.html">Save soil and save world project in 2022</a></h4>
							<p>Tellus amet vel nisi, vel felis morbi sit et. Risus, pulvinar ultricie</p>
						</div><!-- blog-card-content -->
					</div><!-- blog-card -->
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- blog-section -->

    <section class="cta-two-section">
		<div class="container">
			<div class="cta-two-section-inner">
				<div class="row">
					<div class="col-xl-5">
						<div class="cta-two-title">
							<div class="cta-two-card-icon">
								<i class="flaticon-envelope-2"></i>
							</div><!-- cta-two-card-icon -->
							<div class="cta-two-card-content">
								{{-- <p>Stay Connected</p> --}}
								<h3 style="font-size: 25px;">Kritik dan Saran </h3>
							</div><!-- cta-two-card-content -->
						</div><!--cta-two-title-->
					</div><!--col-xl-5-->
					<div class="col-xl-7">
						<form action="assets/inc/sendemail.php" class="cta-two-form" method="post">
							<div class="cta-two-form-group">
								<input type="email" id="email" class="input-text" placeholder="Email address" name="email" required>
							</div><!-- cta-two-card-form -->
							<button class="btn btn-primary">Form Saran</button>
						</form><!-- cta-two-form -->
					</div><!-- col-xl-7-->
				</div><!-- row -->
			</div><!-- cta-two-section-inner -->
		</div><!-- container -->
	</section><!--cta-two-section-->
</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
