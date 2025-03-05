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
							<a href="news-details.html" class="news-details-box-date">28 SEP</a>
						</div><!-- news-details-box-image-inner -->
					</div><!-- news-details-box-image -->
					<div class="news-details-meta-box">
						<div class="news-details-meta-box-inner">
							<span class="author">
								by<a href="news-details.html">Admin</a>
							</span><!-- author -->
							<span class="comment">
								<a href="news-details.html">02 Comments</a>
							</span><!-- comment -->
						</div><!-- news-details-meta-box-inner -->
					</div><!-- news-details-meta-box -->
					<div class="news-details-content-box">
						<h4>Supporting local business to bounce back</h4>
						<p>Tliq is notm hendr erit a augue insu image pellen tes que id erat quis sollicitud. Lorem ipsum dolor sit amet, consectetur adipiscing ullam blandit hendrerit faucibus suspendisse. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum ley of type and scrambled it to make a type specimen book.</p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including version.</p>
					</div><!-- /.news-details-content-box -->
					<div class="news-details-share-box">
						<div class="news-details-inner">
							<div class="news-details-list">
								<div class="news-details-list-title">
									<h4>Tags</h4>
								</div><!-- news-details-list-title -->
								<div class="news-details-list-button">
									<a href="news-details.html" class="btn btn-primary">Culture</a>
									<a href="news-details.html" class="btn btn-primary">Government</a>
								</div><!-- news-details-list-button -->
							</div><!--news-details-list-->
							<div class="news-details-list">
								<div class="news-details-socials">
									<a href="#"><i class="fa-brands fa-twitter"></i></a>
									<a href="#"><i class="fa-brands fa-facebook"></i></a>
									<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
									<a href="#"><i class="fa-brands fa-instagram"></i></a>
								</div><!-- news-details-socials -->
							</div><!-- news-details-list -->
						</div><!-- news-details-inner -->
					</div><!-- news-details-share-box -->
					<div class="news-details-author-box">
						<div class="news-details-author-image">
							<img src="assets/image/blog/blog-details-5.jpg" alt="img-194">
						</div><!-- news-details-author-image -->
						<div class="news-details-author-content">
							<h4>Jessica Brown</h4>
							<p>Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum lightly believable. If you are going to use a of you need to be sure there isn't anything embarrassing.</p>
						</div><!-- news-details-author-content -->
					</div><!--news-details-author-box -->
					<div class="news-details-comment-list-box">
						<h3>02 Comments</h3>
						<div class="news-details-comment-image">
							<img src="assets/image/blog/blog-details-6.jpg" alt="195">
							<div class="news-details-comment-content">
								<div class="news-details-meta">
									<div class="news-details-meta-number">
										<h5>Kevin Martin</h5>
									</div><!-- news-details-meta-number -->
									<div class="news-details-meta-date">
										<span>20 Oct, 2022</span>
									</div><!-- news-details-meta-date -->
								</div><!-- news-details-meta-->
								<div class="news-details-comment-text">
									<p>Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum lightly believable. If you are going to use a of you need to be sure there isn't anything embarrassing.</p>
								</div><!-- news-details-comment-text -->
							</div><!--news-details-comment-content -->
							<div class="news-details-comment-button">
								<a href="news-details.html" class="btn btn-primary">Reply</a>
							</div><!-- news-details-comment-button -->
						</div><!-- news-details-comment-image -->
						<div class="news-details-comment-image">
							<img src="assets/image/blog/blog-details-7.jpg" alt="196">
							<div class="news-details-comment-content">
								<div class="news-details-meta">
									<div class="news-details-meta-number">
										<h5>Sarah Albert</h5>
									</div><!-- news-details-meta-number -->
									<div class="news-details-meta-date">
										<span>20 Oct, 2022</span>
									</div><!-- news-details-meta-date -->
								</div><!-- news-details-meta-->
								<div class="news-details-comment-text">
									<p>Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum lightly believable. If you are going to use a of you need to be sure there isn't anything embarrassing.</p>
								</div><!-- news-details-comment-text -->
							</div><!--news-details-comment-content -->
							<div class="news-details-comment-button">
								<a href="news-details.html" class="btn btn-primary">Reply</a>
							</div><!-- news-details-comment-button -->
						</div><!-- news-details-comment-image -->
					</div><!-- news-details-comment-list-box -->
					<div class="news-details-comment-form">
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
					</div><!-- news-details-comment-form -->
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
							<h4>Recent Posts</h4>
							<div class="sidebar-recent-post">
								<div class="sidebar-recent-post-img">
									<img src="assets/image/blog/blog-details-2.jpg" alt="img-197">
								</div><!-- sidebar-recent-post-img -->
								<div class="sidebar-recent-post-content">
									<div class="sidebar-meta">
										<div class="sidebar-meta-item">
											<div class="sidebar-meta-icon">
												<span class="author">
													by<a href="news-details.html">Admin</a>
												</span><!-- author -->
											</div><!-- sidebar-meta-icon -->
										</div><!-- sidebar-meta-item -->
										<div class="sidebar-post-title">
											<h5><a href="#">Learn how access to municipal council</a></h5>
										</div><!-- sidebar-post-title -->
									</div><!-- sidebar-meta -->
								</div><!-- sidebar-recent-post-content -->
							</div><!-- sidebar-recent-post -->
							<div class="sidebar-recent-post">
								<div class="sidebar-recent-post-img">
									<img src="assets/image/blog/blog-details-3.jpg" alt="img-198">
								</div><!-- sidebar-recent-post-img -->
								<div class="sidebar-recent-post-content">
									<div class="sidebar-meta">
										<div class="sidebar-meta-item">
											<div class="sidebar-meta-icon">
												<span class="author">
													by<a href="news-details.html">Admin</a>
												</span><!-- author -->
											</div><!-- sidebar-meta-icon -->
										</div><!-- sidebar-meta-item -->
										<div class="sidebar-post-title">
											<h5><a href="#">Learn how access to municipal council</a></h5>
										</div><!-- sidebar-post-title -->
									</div><!-- sidebar-meta -->
								</div><!-- sidebar-recent-post-content -->
							</div><!-- sidebar-recent-post -->
							<div class="sidebar-recent-post">
								<div class="sidebar-recent-post-img">
									<img src="assets/image/blog/blog-details-4.jpg" alt="img-199">
								</div><!-- sidebar-recent-post-img -->
								<div class="sidebar-recent-post-content">
									<div class="sidebar-meta">
										<div class="sidebar-meta-item">
											<div class="sidebar-meta-icon">
												<span class="author">
													by<a href="news-details.html">Admin</a>
												</span><!-- author -->
											</div><!-- sidebar-meta-icon -->
										</div><!-- sidebar-meta-item -->
										<div class="sidebar-post-title">
											<h5><a href="#">Learn how access to municipal council</a></h5>
										</div><!-- sidebar-post-title -->
									</div><!-- sidebar-meta -->
								</div><!-- sidebar-recent-post-content -->
							</div><!-- sidebar-recent-post -->
						</div><!-- sidebar-widget sidebar-widget-recent-post -->
						<div class="sidebar-widget sidebar-widget-recent-category">
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
						</div><!-- sidebar-widget-one sidebar-widget-recent-category -->
						<div class="sidebar-widget sidebar-widget-tag">
							<h4>Tags</h4>
							<div class="sidebar-widget-tag-inner">
								<a href="news-details.html">Culture</a>
								<a href="news-details.html">Government</a>
								<a href="news-details.html">City</a>
								<a href="news-details.html">Development</a>
								<a href="news-details.html">Life</a>
							</div><!-- sidebar-widget-tag-inner -->
						</div><!-- sidebar-widget sidebar-widget-tag -->
					</div><!-- sidebar -->
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!--causes-one-section-->
</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
