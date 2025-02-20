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

				<div class="col-xxl-12 col-lg-12">
					<div class="donate-box-inner">


                    </div><!-- donate-box-inner -->
				</div><!-- col-xl-8 col-lg-12 -->
			</div><!-- row -->
		</div><!-- container -->
        @include('frontend.00_approve.01_cssterpisah.paginator')
	</section><!-- donate-section -->


</div><!--page-wrapper-->
@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
