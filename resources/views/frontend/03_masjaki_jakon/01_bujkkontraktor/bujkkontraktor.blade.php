@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
	<section class="page-banner">
		<div class="container">
			<div class="page-banner-title">
				<h3 style="color: black;">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->
	<section class="donate-section">
		<div class="container">
			<div class="row row-gutter-30">
				{{-- <div class="col-lg-12">
					<div class="donate-box-content text-center">
						<span>{{$title}}</span>
					</div><!-- donate-box-content -->
				</div><!-- col-lg-12 --> --}}
				<div class="col-xxl-12 col-lg-12">
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
			</div><!-- row -->
		</div><!-- container -->
        @include('frontend.00_approve.01_cssterpisah.paginator')
	</section><!-- donate-section -->


</div><!--page-wrapper-->
@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
