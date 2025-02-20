@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
	<section class="page-banner">
		<div class="container">
			<div class="page-breadcrumbs">
				<ul class="list-unstyled">
					<li><a href="index.html">Home</a></li>
					<li>Donate</li>
				</ul><!-- list-unstyled -->
			</div><!-- page-breadcrumbs -->
			<div class="page-banner-title">
				<h3>Donate</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->
	<section class="donate-section">
		<div class="container">
			<div class="row row-gutter-30">
				<div class="col-lg-12">
					<div class="donate-box-content text-center">
						<span>KNOW MORE DONATE</span>
						<h3>Thank you for supporting !</h3>
						<p>Together we the people achieve more than any single <br>person could ever do alone.</p>
					</div><!-- donate-box-content -->
				</div><!-- col-lg-12 -->
				<div class="col-xxl-8 col-lg-12">
					<div class="donate-box-inner">

						<div class="donate-box-list">
							<ul class="list-unstyled" id="a1">
								<li>
									<button type="button" id="a2">$10.00</button>
									<button type="button" id="a3">$25.00</button>
									<button type="button" id="a4">$50.00</button>
									<button type="button" id="a5">$100.00</button>
									<button type="button" id="a6">$250.00</button>
									<button type="button" id="a7">Custom Amount</button>
								</li><!-- li -->
							</ul><!-- list-unstyled -->
						</div><!-- donate-box-list -->

						<div class="donate-amount">
							<span>$</span>
							<input class="give-amount" type="text" autocomplete="off" id="sd">
						</div><!-- donate-amount -->

						<form action="assets/inc/sendemail.php" class="contact-form donation" method="post">
							<div class="row row-gutter-10">
								<h3>Personal Info</h3>
								<div class="col-lg-6">
									<input type="text" id="fname"  class="input-text" placeholder="First Name*" name="fname" aria-required="true">
								</div><!-- col-lg-6 -->
								<div class="col-lg-6">
									<input type="text" id="lname" class="input-text" placeholder="Last Name" name="lname" aria-required="true">
								</div><!-- col-lg-6 -->
								<div class="col-lg-12">
									<input type="email" id="email" class="input-text" placeholder="Email Address*" name="email" aria-required="true">
								</div><!-- col-lg-12 -->
								<div class="col-lg-12">
									<div class="donate-card">
										<p>To make an offline donation toward this cause, follow these steps:: </p>
										<ol>
											<li>Write a check payable to "City Government & Municipal WordPress Theme"</li>
											<li>On the memo line of the check, indicate that the donation is for "City Government & Municipal WordPress Theme"</li>
											<li>Mail your check to:</li>
										</ol><!-- ol -->
										<p>City Government & Municipal WordPress Theme</p>
										<p>111 Not A Real St.</p>
										<p>Anytown, CA 12345 </p>
										<span>Your tax-deductible donation is greatly appreciated!</span>
									</div><!-- donate-card -->
								</div><!-- col-lg-12 -->
								<div class="col-lg-6">
									<div class="donation-list">
										<span class="donation-total">Donation Total:</span>
										<span class="donation-amount" data-total="100.00">$100.00</span>
									</div>
								</div><!-- col-lg-6 -->
								<div class="col-lg-12">
									<div class="donate-payment-mode">
										<h4>Select Payment Method</h4>
										<input type="radio" id="paypel" name="paypel" value="paypel Donation" checked>
										<label for="paypel">Paypel Donation</label>
										<input type="radio" id="strip" name="paypel" value="strip Donation">
										<label for="strip">Strip Donation</label>
									</div><!-- donate-payment-mode -->
								</div><!-- col-lg-12 -->
								<div class="col-lg-12">
									<button class="btn btn-primary">Donate Now</button>
								</div><!-- col-lg-12 -->
							</div><!-- row row-gutter-10 -->
						</form><!-- contact-form -->
					</div><!-- donate-box-inner -->
				</div><!-- col-xl-8 col-lg-12 -->
				<div class="col-xxl-4 col-lg-12">
					<div class="donate-box-image">
						<img src="assets/image/gallery/about-1.jpg" class="img-fluid" alt="img-176">
					</div><!-- donate-box-image -->
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- donate-section -->
	<section class="causes-section causes-section-two">
		<div class="container">
			<div class="row row-gutter-30">
				<div class="col-xxl-12 col-lg-12">
					<div class="causes-two-box text-center">
						<h3>Raise your funds for a cause <br>that you care</h3>
					</div><!-- causes-two-box -->
				</div><!-- col-xxl-6 col-lg-12 -->
				<div class="col-xxl-4 col-lg-12">
					<div class="causes-card">
						<div class="causes-card-imgbox">
							<img src="assets/image/causes/causes-1.jpg" class="img-fluid" alt="img-117">
						</div><!-- causes-card-imgbox -->
						<div class="causes-content">
							<div class="causes-card-funding">
								<div class="causes-card-progressbar">
									<div class="causes-card-progressbar-inner count-box" data-percentage="36%">
										<div class="causes-card-progressbar-text count-text"></div><!-- causes-card-progressbar-text -->
									</div><!-- causes-card-progressbar-inner -->
								</div><!-- causes-card-progressbar -->
								<div class="causes-card-funding-list">
									<div class="causes-card-funding-item">
										<div class="causes-card-funding-amount">$25,487</div><!-- causes-card-funding-amount -->
										<div class="causes-card-funding-text">Raised</div><!-- causes-card-funding-text -->
									</div><!-- causes-card-funding-item -->
									<div class="causes-card-funding-item">
										<div class="causes-card-funding-amount">$30,000</div><!-- causes-card-funding-amount -->
										<div class="causes-card-funding-text">Goal</div><!-- causes-card-funding-text -->
									</div><!-- causes-card-funding-item -->
								</div><!-- causes-card-funding-list -->
							</div><!-- causes-card-funding -->
							<h4> <a href="cause-details.html">Your little help can heal their pains</a> </h4>
							<p>Aellentesque porttitor lacus quis enim varius sed efficitur...</p>
							<a href="cause-details.html" class="btn btn-primary">Donate Now</a>
						</div><!-- causes-content -->
					</div><!-- causes-card -->
				</div><!-- col-xxl-4 col-lg-12 -->
				<div class="col-xxl-4 col-lg-12">
					<div class="causes-card">
						<div class="causes-card-imgbox">
							<img src="assets/image/causes/causes-2.jpg" class="img-fluid" alt="img-118">
						</div><!-- causes-card-imgbox -->
						<div class="causes-content">
							<div class="causes-card-funding">
								<div class="causes-card-progressbar">
									<div class="causes-card-progressbar-inner count-box" data-percentage="36%">
										<div class="causes-card-progressbar-text count-text"></div><!-- causes-card-progressbar-text -->
									</div><!-- causes-card-progressbar-inner -->
								</div><!-- causes-card-progressbar -->
								<div class="causes-card-funding-list">
									<div class="causes-card-funding-item">
										<div class="causes-card-funding-amount">$25,487</div><!-- causes-card-funding-amount -->
										<div class="causes-card-funding-text">Raised</div><!-- causes-card-funding-text -->
									</div><!-- causes-card-funding-item -->
									<div class="causes-card-funding-item">
										<div class="causes-card-funding-amount">$30,000</div><!-- causes-card-funding-amount -->
										<div class="causes-card-funding-text">Goal</div><!-- causes-card-funding-text -->
									</div><!-- causes-card-funding-item -->
								</div><!-- causes-card-funding-list -->
							</div><!-- causes-card-funding -->
							<h4> <a href="cause-details.html">Your little help can heal their pains</a> </h4>
							<p>Aellentesque porttitor lacus quis enim varius sed efficitur...</p>
							<a href="cause-details.html" class="btn btn-primary">Donate Now</a>
						</div><!-- causes-content -->
					</div><!-- causes-card -->
				</div><!-- col-xxl-4 col-lg-12 -->
				<div class="col-xxl-4 col-lg-12">
					<div class="causes-card">
						<div class="causes-card-imgbox">
							<img src="assets/image/causes/causes-3.jpg" class="img-fluid" alt="img-119">
						</div><!-- causes-card-imgbox -->
						<div class="causes-content">
							<div class="causes-card-funding">
								<div class="causes-card-progressbar">
									<div class="causes-card-progressbar-inner count-box" data-percentage="36%">
										<div class="causes-card-progressbar-text count-text"></div><!-- causes-card-progressbar-text -->
									</div><!-- causes-card-progressbar-inner -->
								</div><!-- causes-card-progressbar -->
								<div class="causes-card-funding-list">
									<div class="causes-card-funding-item">
										<div class="causes-card-funding-amount">$25,487</div><!-- causes-card-funding-amount -->
										<div class="causes-card-funding-text">Raised</div><!-- causes-card-funding-text -->
									</div><!-- causes-card-funding-item -->
									<div class="causes-card-funding-item">
										<div class="causes-card-funding-amount">$30,000</div><!-- causes-card-funding-amount -->
										<div class="causes-card-funding-text">Goal</div><!-- causes-card-funding-text -->
									</div><!-- causes-card-funding-item -->
								</div><!-- causes-card-funding-list -->
							</div><!-- causes-card-funding -->
							<h4> <a href="cause-details.html">Your little help can heal their pains</a> </h4>
							<p>Aellentesque porttitor lacus quis enim varius sed efficitur...</p>
							<a href="cause-details.html" class="btn btn-primary">Donate Now</a>
						</div><!-- causes-content -->
					</div><!-- causes-card -->
				</div><!-- col-xxl-4 col-lg-12 -->
				<div class="col-xl-12 col-lg-12">
					<div class="cause-two-box-button">
						<a href="#" class="btn btn-primary">See all Causes</a>
					</div><!-- cause-two-box-button -->
				</div><!-- col-xxl-6 col-lg-12 -->
			</div><!-- row -->
		</div><!-- container -->

        @include('frontend.00_approve.01_cssterpisah.paginator')

	</section><!-- causes-section-two  -->

</div><!--page-wrapper-->
@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
