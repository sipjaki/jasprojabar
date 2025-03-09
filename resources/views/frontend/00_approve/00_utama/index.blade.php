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

    <style>
        .pricing-section {
            padding: 20px;
            text-align: center;
        }
        .pricing-title {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .pricing-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }
        .pricing-card {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 220px;
        }
        .pricing-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .pricing-card h4 {
            font-size: 16px;
            margin-top: 10px;
        }
        .pricing-card a {
            text-decoration: none;
            color: #007bff;
        }
        .pricing-card a:hover {
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .pricing-title {
                font-size: 24px;
            }
            .pricing-card {
                max-width: 180px;
                padding: 10px;
            }
            .pricing-card h4 {
                font-size: 14px;
            }
        }
    </style>

    <section class="pricing-section">
        <h2 class="pricing-title">Analisa Harga Satuan Pekerjaan Kab Blora 2025</h2>
        <div class="pricing-container">
            <div class="pricing-card">
                <img src="/assets/00_dokmasjaki/03_datajakon/analisisharga.png" alt="AHSP Konstruksi Umum">
                <h4><a href="/hspkonstruksiumum">AHSP Konstruksi Umum</a></h4>
            </div>
            <div class="pricing-card">
                <img src="/assets/00_dokmasjaki/03_datajakon/analisisharga.png" alt="Satuan Harga Dasar">
                <h4><a href="/satuanhargamaterial">Satuan Harga Dasar</a></h4>
            </div>
            <div class="pricing-card">
                <img src="/assets/00_dokmasjaki/03_datajakon/analisisharga.png" alt="SHST Kab Blora 2025">
                <h4><a href="/shstblora">SHST Kab Blora Tahun 2025</a></h4>
            </div>
        </div>
    </section>


    {{-- =================================== --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .news-container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .news-content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .news-main {
            flex: 1;
            min-width: 300px;
        }
        .news-sidebar {
            width: 100%;
            max-width: 350px;
        }
        .news-image img {
            width: 100%;
            border-radius: 8px;
        }
        .news-title {
            font-size: 24px;
            margin-top: 10px;
        }
        .news-text {
            text-align: justify;
        }
        .sidebar-search input {
            width: 80%;
            padding: 8px;
            margin-right: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .sidebar-search button {
            padding: 8px;
            border: none;
            background: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 4px;
        }
        .recent-news img {
            width: 100px;
            height: auto;
            border-radius: 4px;
        }
        .recent-news-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }
        @media (max-width: 768px) {
            .news-content {
                flex-direction: column;
            }
            .news-sidebar {
                max-width: 100%;
            }
        }
    </style>

	{{-- <section class="news-details-section" style="background-image: url(assets/00_dokmasjaki/03_datajakon/bannerbetter.jpg);"> --}}
        <section class="news-container">
            <div class="news-content">
                <div class="news-main">
                    @foreach ($data->skip(0)->take(1) as $item)
                    <div class="news-image">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="img-193">
                        <p class="news-date">{{$item->tanggal}}</p>
                    </div>
                    <h4 class="news-title">{{$item->judulberita}}</h4>
                    <p class="news-text">{{$item->keterangan}}</p>
                    @endforeach
                </div>

                <div class="news-sidebar">
                    <div class="sidebar-search">
                        <input type="text" placeholder="Cari Berita">
                        <button type="submit">Cari</button>
                    </div>
                    <h4>Daftar Berita</h4>
                    @foreach ($data->skip(1)->take(7) as $item)
                    <div class="recent-news-item">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="Gambar Berita">
                        <div>
                            <h5>{{$item->judulberita}}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


    <section class="event-three-section" style="margin-top:-200px;">
		<div class="event-section-outer">
			<div class="container">
				<div class="row row-gutter-y-30">

                    @foreach ($dataartikel->take(4) as $item)


{{-- ----------------------------------------------------------------------- --}}
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="event-card">
                        <div class="event-card-image">
                            <div class="event-card-image-inner">
                                <a href="#"><img src="/assets/00_dokmasjaki/03_datajakon/hsp1.jpg" class="img-fluid" alt="img-164" width="200px;"></a>
                                <div class="event-card-meta">
                                    <div class="event-meta-number">
                                        <a href="/404">
                                            <span><i class="fas fa-download"></i></span>
                                        </a>
										</div><!-- event-meta-number -->
										<div class="event-meta-date">
                                            <span>Maret 2025</span>
										</div><!-- event-meta-date -->
									</div><!-- event-card-meta -->
								</div><!-- event-card-image-inner -->
							</div><!--event-card-image-->
							<div class="event-card-content">
                                <div class="event-card-title">
                                    <h4><a href="#">{{$item->judul}}</a></h4>
								</div><!-- event-card-title -->
							</div><!--event-card-content-->
						</div><!--event-card-->
					</div><!--col-12 col-lg-6 col-xl-6-->
{{-- ----------------------------------------------------------------------- --}}

@endforeach

				</div><!-- row -->
			</div><!-- container -->
		</div><!-- event-section-outer -->
	</section><!--event-three-section-->


    <section class="client-section" style="background: #2ECC71">
        <h5 class="client-text" style="font-weight: 800; color:black; font-size:18px; text-transform:capitalize; font-size:12px;" >Dokumentasi Video</h5>
        <div class="container">
            <div class="client-carousel owl-carousel owl-theme">
                <div class="item">
                    <video class="img-fluid" controls>
                        <source src="/assets/00_dokmasjaki/00_video/video1.mp4" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div><!--item-->
                {{-- <div class="item">
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
                </div><!--item--> --}}
                <div class="item">
                    <video class="img-fluid" controls>
                        <source src="/assets/00_dokmasjaki/00_video/video4.mp4" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div><!--item-->
                <div class="item">
                    <video class="img-fluid" controls>
                        <source src="/assets/00_dokmasjaki/00_video/video5.mp4" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div><!--item-->
                <div class="item">
                    <video class="img-fluid" controls>
                        <source src="/assets/00_dokmasjaki/00_video/video6.mp4" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div><!--item-->
                <div class="item">
                    <video class="img-fluid" controls>
                        <source src="/assets/00_dokmasjaki/00_video/video7.mp4" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div><!--item-->
            </div><!--client-carousel owl-carousel owl-theme-->
        </div><!--container-->
    </section><!--client-section-->


    {{-- REKOMENDASI BERITA HIGHLIGHT --}}

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

<br><br>

<section class="cta-two-section">
    <div class="container">
        <div class="cta-two-section-inner">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <div class="cta-two-title d-flex align-items-center">
                        <div class="cta-two-card-content">
                            <h3 class="cta-title">Klik Kami </h3>
                        </div>
                        <a href="/kritikdansaran">
                            <div class="cta-two-card-icon" style="transition: color 0.3s ease, transform 0.3s ease;">
                                <i class="flaticon-envelope-2" style="color: inherit;"></i>
                            </div>
                        </a>

                        <style>
                            a:hover .cta-two-card-icon {
                                color: #ffd100;
                                transform: scale(1.1);
                            }
                        </style>
                        <div class="cta-two-card-content">
                            <h3 class="cta-title">Untuk Kritik dan Saran</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 text-end">
                    <a href="form-kritik-saran.html" class="btn btn-primary btn-lg" role="button" aria-label="Buka Form Kritik dan Saran">
                        Form Saran
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
