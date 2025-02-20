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
  <section class="document-section">
    <div class="container">
      <ul class="nav nav-pills" id="pills-tab" role="tablist">

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Pemerintah</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Presiden</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Menteri</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Keputusan Menteri</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Surat Edaran Menteri</button>
        </li>

        <li class="nav-item" role="presentation" style="margin-top: 5px;">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Referensi</button>
        </li>

        <li class="nav-item" role="presentation" style="margin-top: 5px;">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Daerah</button>
        </li>

        <li class="nav-item" role="presentation" style="margin-top: 5px;">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Gubernur</button>
        </li>

        <li class="nav-item" role="presentation" style="margin-top: 5px;">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Walikota/Bupati</button>
        </li>

        <li class="nav-item" role="presentation" style="margin-top: 5px;">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Surat Keputusan</button>
        </li>

      </ul><!-- nav nav-pills -->
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
          <div class="row row-gutter-30">


@foreach ($data as $item )

<div class="col-xxl-4 col-xl-6">

  </section><!-- document-section  -->



  <section class="service-two-section">
    <div class="container">
        <div class="row row-gutter-y-40">
            <div class="col-12 col-lg-4 col-xl-4">
                <div class="service-two-card">
                    <div class="service-two-imgbox">
                        <div class="service-two-image">
                            <img src="assets/image/services/service-4.jpg" class="img-fluid" alt="img-28">
                            <a href="service-details.html"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>City Visitor Guide</h4>
                        <p>This present moment is perfect simply due to the fact you’re experiencing it.</p>
                        <a href="service-details.html">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Read More</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->
            <div class="col-12 col-lg-4 col-xl-4">
                <div class="service-two-card">
                    <div class="service-two-imgbox">
                        <div class="service-two-image">
                            <img src="assets/image/services/service-5.jpg" class="img-fluid" alt="img-29">
                            <a href="service-details.html"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>Mayor's Priorities</h4>
                        <p>This present moment is perfect simply due to the fact you’re experiencing it.</p>
                        <a href="service-details.html">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Read More</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->
            <div class="col-12 col-lg-4 col-xl-4">
                <div class="service-link-box">
                    <h4 class="section-title">Government <br>Services</h4>
                    <ul>
                        <li><a href="service-details.html">Public Service Identity<i class="fa-solid fa-chevron-right"></i></a></li>
                        <li><a href="service-details.html">Apply for a City Job <i class="fa-solid fa-chevron-right"></i></a></li>
                        <li><a href="service-details.html">Order Birth Certificate <i class="fa-solid fa-chevron-right"></i></a></li>
                        <li><a href="service-details.html">National Planning Framework<i class="fa-solid fa-chevron-right"></i></a></li>
                        <li><a href="service-details.html">Apply for Driving License <i class="fa-solid fa-chevron-right"></i></a></li>
                        <li><a href="service-details.html">Get Parking Permit<i class="fa-solid fa-chevron-right"></i></a></li>
                        <li><a href="service-details.html">Get Hosing Permition <i class="fa-solid fa-chevron-right"></i></a></li>
                    </ul><!-- ul -->
                </div><!--service-link-box-->
            </div><!--col-12 col-lg-4 col-xl-4-->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- service-two-section -->

</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
