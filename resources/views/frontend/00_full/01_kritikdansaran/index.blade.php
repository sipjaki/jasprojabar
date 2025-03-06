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
				<div class="col-lg-4">
					<div class="contact-box">
						<div class="section-tagline">
							WRITE A MESSAGE
						</div><!-- section-tagline -->
						<h1 class="section-title">Always Here to Help you</h1>
							<p>There are certain attributes of a profession and one has to catch hold of them in order to efficiently and grow in that business. I share my experience as an interior designer. </p>
					</div><!-- contact-box -->
				</div><!-- col-lg-4 -->
				<div class="col-lg-8">
					<form  action="assets/inc/sendemail.php" class="contact-form  contact-form-validated" method="post" >
						<div class="row row-gutter-10">
							<div class="col-12 col-lg-6">
								<input type="text" id="name"  class="input-text" placeholder="Your name" name="name" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<input type="email" id="email" class="input-text" placeholder="Email address" name="email" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<input type="text" id="phone" class="input-text" placeholder="Phone number" name="phone" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-6">
								<input type="text" id="subject" class="input-text" placeholder="Subject" name="subject" aria-required="true">
							</div><!-- col-12 col-lg-6 -->
							<div class="col-12 col-lg-12">
								<textarea name="message" placeholder="Write a message" class="input-text" aria-required="true"></textarea>
							</div><!-- col-12 col-lg-12 -->
							<div class="col-12 col-lg-12">
								<button class="btn btn-primary">Send a Message</button>
							</div><!-- col-12 col-lg-12 -->
						</div><!-- row -->
					</form><!-- contact-form -->
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
