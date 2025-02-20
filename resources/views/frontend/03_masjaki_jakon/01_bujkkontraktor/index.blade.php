@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

<div class="page-wrapper">
  <section class="page-banner" style="background-image: url('/assets/approve/image/bg/page-banner.png')">
    <div class="container">
      <div class="page-breadcrumbs">
        <ul class="list-unstyled">
          {{-- <li><a href="index.html">Home</a></li> --}}
          <li>Documents</li>
        </ul><!-- list-unstyled -->
      </div><!-- page-breadcrumbs -->
      <div class="page-banner-title">
        <h3 style="color: black;">{{$title}}</h3>
      </div><!-- page-banner-title -->
    </div><!-- container -->
  </section><!--page-banner-->


  <section class="service-two-section">
    <div class="container">
        <div class="row row-gutter-y-40">
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="service-two-card">
                    <div class="service-two-imgbox">
                        <div class="service-two-image">
                            <img src="/assets/03_datajakon/bujkkontraktor.jpg" class="img-fluid" alt="img-28" loading="lazy">
                            <a href="/datajakon/bujkkontraktor"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>BUJK Kontraktor</h4>
                        <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p>
                        <a href="/datajakon/bujkkontraktor">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Read More</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="service-two-card">
                    <div class="service-two-imgbox">
                        <div class="service-two-image">
                            <img src="/assets/03_datajakon/bujkkonsultan.jpg" class="img-fluid" alt="img-29"  loading="lazy">
                            <a href="/datajakon/bujkkontraktor"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>BUJK Konsultan</h4>
                        <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p>
                        <a href="/datajakon/bujkkontraktor">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Read More</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->


        </div><!-- row -->
    </div><!-- container -->
</section><!-- service-two-section -->


</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
