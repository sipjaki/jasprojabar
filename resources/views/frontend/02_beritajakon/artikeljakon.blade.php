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


	<section class="event-three-section">
		<div class="event-section-outer">
			<div class="container">
				<div class="row row-gutter-y-30">
                    @foreach ($data as  $item)


{{-- ----------------------------------------------------------------------- --}}
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="event-card">
                        <div class="event-card-image">
                            <div class="event-card-image-inner">
                                <a href="#"><img src="/assets/00_dokmasjaki/03_datajakon/konsultannontender.png" class="img-fluid" alt="img-164" width="200px;"></a>
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

        <div class="pagination-wrapper" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; margin-top: 20px;">

            <!-- Info Box -->
            <div class="pagination-info-box" style="padding: 10px; border: 1px solid black; background-color: #f9f9f9; border-radius: 5px; width: auto; margin-bottom: 20px;">
                <div class="pagination-info" style="color: black; font-weight: 500; font-size: 18px;">
                    Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination-container" style="display: flex; justify-content: center; width: 100%;">
                <ul class="pagination-paginate" style="display: flex; padding-left: 0; list-style: none;">
                    <!-- Tombol Previous -->
                    <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 10px;">
                        <a class="page-link" href="{{ $data->previousPageUrl() }}"
                           style="text-decoration: none; padding: 10px 16px; border: 1px solid #007bff; border-radius: 5px; background-color: #007bff; color: white; font-weight: bold;">
                            <i class="fas fa-arrow-left" style="margin-right: 5px;"></i> Previous
                        </a>
                    </li>

                    <!-- Tombol Next -->
                    <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $data->nextPageUrl() }}"
                           style="text-decoration: none; padding: 10px 16px; border: 1px solid #007bff; border-radius: 5px; background-color: #007bff; color: white; font-weight: bold;">
                            Next <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>



	</section><!--event-three-section-->
</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
