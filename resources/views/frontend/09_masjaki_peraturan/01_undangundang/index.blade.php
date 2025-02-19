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
        <h3 style="color: black;">Undang Undang Jasa Konstruksi</h3>
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
    <div class="service-three-card">
        <div class="service-three-icon">
                            <i class="flaticon-pdf"></i>
                        </div><!-- service-three-icon -->
                        <div class="service-three-card-content">
                            <h3><a href="documentation-details.html">{{$item->judul}}</a></h3>
                            <p>Undang - Undang Jasa Konstruksi</p>
                            <div class="service-three-detail">
                                <a href="documentation-details.html"><span>Downloadn Here</span><i class="fa-solid fa-arrow-right-long"></i></a>
                                <i class="flaticon-pdf"></i>
                            </div><!-- service-three-detail -->
                        </div><!-- service-three-card-content -->
                    </div><!-- service-three-card -->
                </div><!-- col-xxl-4 col-xl-6 -->


@endforeach

          </div><!-- row -->
        </div><!-- tab-pane -->
        <div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">
          <div class="row row-gutter-30">
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Professional Tax Document</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Online Job Acticity</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Garbage Management</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
        <div class="tab-pane fade" id="pills-health" role="tabpanel" aria-labelledby="pills-health-tab">
          <div class="row row-gutter-30">
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Social Activity Form</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Fire Emergency</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
        <div class="tab-pane fade" id="pills-travel" role="tabpanel" aria-labelledby="pills-travel-tab">
          <div class="row row-gutter-30">
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Child Vacination Document</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Red Blood Bank</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Covid 19 Vaccine</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
        <div class="tab-pane fade" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">
          <div class="row row-gutter-30">
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Water Management</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Green Garden Development</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Town Hall Booking</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Property Stamp Dutry</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
        <div class="tab-pane fade" id="pills-transport" role="tabpanel" aria-labelledby="pills-transport-tab">
          <div class="row row-gutter-30">
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Birth & Death Registration</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Town Development Project</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Traffic Options</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Smart Rescard Document</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
        <div class="tab-pane fade" id="pills-culture" role="tabpanel" aria-labelledby="pills-culture-tab">
          <div class="row row-gutter-30">
             <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Roads & Transports Tenders</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
            <div class="col-xxl-4 col-xl-6">
              <div class="service-three-card">
                <div class="service-three-icon">
                  <i class="flaticon-pdf"></i>
                </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                  <h3><a href="documentation-details.html">Public Notice & Document</a></h3>
                  <p>When nothing prevents our being able to we like best every.</p>
                  <div class="service-three-detail">
                    <a href="documentation-details.html"><span>Read More</span><i class="fa-solid fa-arrow-right-long"></i></a>
                    <i class="flaticon-pdf"></i>
                  </div><!-- service-three-detail -->
                </div><!-- service-three-card-content -->
              </div><!-- service-three-card -->
            </div><!-- col-xxl-4 col-xl-6 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
      </div><!-- tab-content -->
    </div><!-- container -->
  </section><!-- document-section  -->
</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
