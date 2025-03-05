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

	<section class="news-details-section" style="background-image: url(assets/00_dokmasjaki/03_datajakon/bannerbetter.jpg);">
		<div class="container"
        style="
        background: white;
        max-width: 95%;
        margin: 30px auto;
        padding: 20px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 10;"
        >
			<div class="row">
				<div class="col-lg-8">
					<div class="news-details-box-image">
						<div class="news-details-box-image-inner">
							<img src="/assets/00_dokmasjaki/01_berita/berita1.JPG" class="img-fluid" alt="img-193">
							<a href="news-details.html" class="news-details-box-date">MARET 2025</a>
						</div><!-- news-details-box-image-inner -->
					</div><!-- news-details-box-image -->

					{{-- <div class="news-details-meta-box">
						<div class="news-details-meta-box-inner">
							<span class="author">
								by<a href="news-details.html">Admin</a>
							</span><!-- author -->
							<span class="comment">
								<a href="news-details.html">02 Comments</a>
							</span><!-- comment -->
						</div><!-- news-details-meta-box-inner -->
					</div><!-- news-details-meta-box --> --}}
<br><br>
                    <div class="news-details-content-box" style="margin-left: 25px;">
						<h4>Pelatihan dan Uji Kompetensi SKK Jenjang 4 bagi Tenaga Kerja Konstruksi di Kabupaten Blora</h4>

                        <p>
                            Blora, Dinas Pekerjaan Umum dan Penataan Ruang (DPUPR) Kabupaten Blora menggelar Pelatihan dan Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 bagi tenaga kerja konstruksi. Kegiatan ini bertujuan untuk meningkatkan kualitas dan profesionalisme tenaga kerja konstruksi sesuai dengan standar nasional yang berlaku.
                            Pelatihan dan uji kompetensi ini berlangsung di [lokasi kegiatan] dan diikuti oleh puluhan peserta yang berasal dari berbagai sektor konstruksi. Para peserta mendapatkan pembekalan teori serta praktik langsung yang dipandu oleh instruktur berpengalaman dan asesor kompetensi bersertifikat.
                        </p>

                        <p>
                            Kepala Dinas PUPR Kabupaten Blora, Nidzamudin Al-Hudda, ST dalam sambutannya menyampaikan bahwa sertifikasi kompetensi kerja ini merupakan langkah penting dalam meningkatkan daya saing tenaga kerja konstruksi di Blora. “Kami berharap dengan adanya pelatihan dan sertifikasi ini, tenaga kerja konstruksi dapat bekerja lebih profesional dan kompeten sesuai dengan standar yang telah ditetapkan,” ujarnya.
                            Selain itu, kegiatan ini juga sejalan dengan regulasi pemerintah yang mengharuskan setiap tenaga kerja konstruksi memiliki sertifikat kompetensi sesuai dengan Undang-Undang Jasa Konstruksi. Dengan adanya SKK, tenaga kerja konstruksi akan lebih mudah mendapatkan peluang kerja di berbagai proyek, baik yang dikelola oleh pemerintah maupun sektor swasta.
                        </p>


                    </div><!-- /.news-details-content-box -->



                    {{-- <div class="news-details-comment-form">
						<h3>Leave a Comment</h3>
						<form class="contact-form contact-form-validated" action="assets/inc/sendemail.php" method="post">
							<div class="row row-gutter-10">
								<div class="col-12 col-lg-6">
									<input type="text" class="input-text" placeholder="Your name" name="name" aria-required="true">
								</div><!-- col-12 col-lg-6 -->
								<div class="col-12 col-lg-6">
									<input type="email"  class="input-text" placeholder="Email address" name="email" aria-required="true">
								</div><!-- col-12 col-lg-6 -->
								<div class="col-12 col-lg-12">
									<textarea name="message" placeholder="Write a message" class="input-text " aria-required="true"></textarea>
								</div><!-- col-12 col-lg-12 -->
								<div class="col-12 col-lg-12">
									<button class="btn btn-primary">Submit Comment</button>
								</div><!-- col-12 col-lg-12 -->
							</div><!-- row -->
						</form><!-- contact-form -->
					</div><!-- news-details-comment-form --> --}}


                </div><!-- col-lg-8 -->
				<div class="col-lg-4">
					<div class="sidebar">
						<div class="sidebar-form-content">
							<div class="sidebar__item sidebar__item--search">
								<form action="#" class="sidebar__search">
									<label for="search" class="sr-only">Cari Berita</label><!-- sr-only -->
									<input type="text" placeholder="Cari Berita">
									<button type="submit" aria-label="search submit" class="thm-btn">
										<i class="flaticon-search-interface-symbol"></i>
									</button><!-- thm-btn -->
								</form><!-- sidebar__search -->
							</div><!-- sidebar__item -->
						</div><!-- sidebar-form-content -->
						<div class="sidebar-widget sidebar-widget-recent-post">
							<h4>Daftar Berita</h4>

                            @foreach ($data as $item )

                            <div class="sidebar-recent-post">
								<div class="sidebar-recent-post-img">
                                    <img src="{{ asset('storage' . {{$item->foto}}) }}" alt="Gambar Pelatihan SKK Blora" width="200px" loading="lazy">
								</div><!-- sidebar-recent-post-img -->
								<div class="sidebar-recent-post-content">
                                    <div class="sidebar-meta">
                                        <div class="sidebar-meta-item">
                                            <div class="sidebar-meta-icon">
												<span class="author">
													by<a href="news-details.html">Mas Zaki</a>
												</span><!-- author -->
											</div><!-- sidebar-meta-icon -->
										</div><!-- sidebar-meta-item -->
										<div class="sidebar-post-title">
											<h5><a href="#">Meningkatkan Kualitas Tenaga Kerja: Pelatihan dan Uji Kompetensi SKK Digelar di Blora</a></h5>
										</div><!-- sidebar-post-title -->
									</div><!-- sidebar-meta -->
								</div><!-- sidebar-recent-post-content -->
							</div><!-- sidebar-recent-post -->


                            @endforeach


                        </div><!-- sidebar-widget sidebar-widget-recent-post -->

                        {{-- <div class="sidebar-widget sidebar-widget-recent-category">
							<div class="sidebar-widget-recent-category-box">
								<h4 class="section-title text-left">Categories</h4>
								<ul class="list-unstyled">
									<li><a href="news-details.html">City News<i class="fa-solid fa-chevron-right"></i></a></li>
									<li><a href="news-details.html">Community<i class="fa-solid fa-chevron-right"></i></a></li>
									<li><a href="news-details.html">Culture <i class="fa-solid fa-chevron-right"></i></a></li>
									<li><a href="news-details.html">Devlopement<i class="fa-solid fa-chevron-right"></i></a></li>
									<li><a href="news-details.html">Government<i class="fa-solid fa-chevron-right"></i></a></li>
								</ul><!-- list-unstyled -->
							</div><!-- sidebar-widget-recent-category-box -->
						</div><!-- sidebar-widget-one sidebar-widget-recent-category --> --}}
						{{-- <div class="sidebar-widget sidebar-widget-tag">
							<h4>Tags</h4>
							<div class="sidebar-widget-tag-inner">
								<a href="news-details.html">Culture</a>
								<a href="news-details.html">Government</a>
								<a href="news-details.html">City</a>
								<a href="news-details.html">Development</a>
								<a href="news-details.html">Life</a>
							</div><!-- sidebar-widget-tag-inner -->
						</div><!-- sidebar-widget sidebar-widget-tag --> --}}
					</div><!-- sidebar -->
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!--causes-one-section-->
</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
