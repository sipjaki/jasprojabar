<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
    }
    .formbold-mb-3 {
      margin-bottom: 15px;
    }
    .formbold-relative {
      position: relative;
    }
    .formbold-opacity-0 {
      opacity: 0;
    }
    .formbold-stroke-current {
      stroke: currentColor;
    }
    #supportCheckbox:checked ~ div span {
      opacity: 1;
    }

    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }

    .formbold-form-wrapper {
      margin: 0 auto;
      max-width: 570px;
      width: 100%;
      background: white;
      padding: 40px;
    }

    .formbold-img {
      margin-bottom: 45px;
    }

    .formbold-form-title {
      margin-bottom: 30px;
    }
    .formbold-form-title h2 {
      font-weight: 600;
      font-size: 28px;
      line-height: 34px;
      color: #07074d;
    }
    .formbold-form-title p {
      font-size: 16px;
      line-height: 24px;
      color: #536387;
      margin-top: 12px;
    }

    .formbold-input-flex {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }
    .formbold-input-flex > div {
      width: 50%;
    }
    .formbold-form-input {
      text-align: center;
      width: 100%;
      padding: 13px 22px;
      border-radius: 5px;
      border: 1px solid #dde3ec;
      background: #ffffff;
      font-weight: 500;
      font-size: 16px;
      color: #536387;
      outline: none;
      resize: none;
    }
    .formbold-form-input:focus {
      border-color: #6a64f1;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
    .formbold-form-label {
      color: #536387;
      font-size: 14px;
      line-height: 24px;
      display: block;
      margin-bottom: 10px;
    }

    .formbold-checkbox-label {
      display: flex;
      cursor: pointer;
      user-select: none;
      font-size: 16px;
      line-height: 24px;
      color: #536387;
    }
    .formbold-checkbox-label a {
      margin-left: 5px;
      color: #6a64f1;
    }
    .formbold-input-checkbox {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border-width: 0;
    }
    .formbold-checkbox-inner {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 20px;
      height: 20px;
      margin-right: 16px;
      margin-top: 2px;
      border: 0.7px solid #dde3ec;
      border-radius: 3px;
    }

    .formbold-btn {
      font-size: 16px;
      border-radius: 5px;
      padding: 14px 25px;
      border: none;
      font-weight: 500;
      background-color: #6a64f1;
      color: white;
      cursor: pointer;
      margin-top: 25px;
    }
    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
  </style>


{{-- ------------------------------------- --}}

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
					{{-- <li>Document-details</li> --}}
				</ul><!-- list-unstyled -->
			</div><!-- page-breadcrumbs -->
			<div class="page-banner-title">
				<h3 style="color: black; font-size:30px;">{{ $title }}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->

    <section class="service-two-section">
        <div class="container">
            <div class="row row-gutter-y-40">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="service-two-card">
                        <div class="service-two-imgbox">
                                <section class="donate-section">
                                    <div class="container" style="margin-top: -100px;">

                                        <div class="row row-gutter-30">
                                            <div class="col-lg-12">

                                                <div class="centered-button" style="text-align: left;">
                                                    <button class="green-button" style="margin-bottom:10px; text-transform:uppercase">
                                                        <i class="fas fa-file mr-2" style="margin-right:5px;"></i> PAKET PEKERJAAN TENDER: {{$data->jenispekerjaan}}
                                                    </button>

                                                    <button class="navy-button" onclick="window.history.back();">
                                                        <i class="fas fa-arrow-left mr-2" style="margin-right:5px;"></i> Kembali
                                                    </button>
                                                </div>

                                            </div><!-- row -->
                                        </div><!-- row -->
                                    </div><!-- container -->
                                </section><!-- donate-section -->



	<section class="department-details-section" style="margin-top: -200px;">
		<div class="container">
			<div class="row">
                {{-- ------------------------------------------------------------------------------------------ --}}
                <div class="col-lg-12">

                    <style>

                        .centered-button {
                            text-align: left;
                            margin-top: 50px; /* Adjusts vertical position */
                        }

                        .green-button {
                            background-color: #28a745; /* Light green background */
                            color: white; /* White text */
                            padding: 10px 30px; /* Adds padding around the text */
                            font-size: 14px; /* Smaller text size */
                            border: none;
                            border-radius: 5px; /* Rounded corners */
                            display: inline-flex;
                            align-items: center; /* Centers the text and icon vertically */
                            cursor: pointer;
                        }

                        .green-button i {
                            font-size: 16px; /* Icon size */
                        }

                        .green-button:hover {
                            background-color: #929693; /* Darker green on hover */
                        }

                    </style>

                        <div class="document-details">
							<div class="document-details-list">

                                <style>
                                    .navy-button {
                                        background-color: navy;
                                        color: white;
                                        margin-bottom: 10px;
                                        text-transform: uppercase;
                                        border: 2px solid navy;
                                        padding: 10px 20px;
                                        cursor: pointer;
                                        border-radius: 20px;
                                        transition: all 0.3s ease;
                                        font-size: 14px;
                                    }

                                    .navy-button:hover {
                                        background-color: white;
                                        color: black;
                                        border: 2px solid navy;
                                    }
                                </style>

<div class="col-12 col-lg-12 col-xl-12 table-wrapper" >

<form action="https://formbold.com/s/FORM_ID" method="POST">
    <div class="formbold-form-title">
      <h2 class="">INFORMASI PAKET PEKERJAAN TENDER</h2>
      <p>
       Dinas Pekerjaan Umum dan Penataan Ruang Pemerintah Kabupaten Blora
      </p>
    </div>

    <div class="formbold-input-flex">
      <div>
        <label for="firstname" class="formbold-form-label">
          First name
        </label>
        <input
          type="text"
          name="firstname"
          id="firstname"
          class="formbold-form-input"
        />
      </div>
      <div>
        <label for="lastname" class="formbold-form-label"> Last name </label>
        <input
          type="text"
          name="lastname"
          id="lastname"
          class="formbold-form-input"
        />
      </div>
    </div>

    <div class="formbold-input-flex">
      <div>
        <label for="email" class="formbold-form-label"> Email </label>
        <input
          type="email"
          name="email"
          id="email"
          class="formbold-form-input"
        />
      </div>
      <div>
        <label for="phone" class="formbold-form-label"> Phone number </label>
        <input
          type="text"
          name="phone"
          id="phone"
          class="formbold-form-input"
        />
      </div>
    </div>

    <div class="formbold-mb-3">
      <label for="address" class="formbold-form-label">
        Street Address
      </label>
      <input
        type="text"
        name="address"
        id="address"
        class="formbold-form-input"
      />
    </div>

    <div class="formbold-mb-3">
      <label for="address2" class="formbold-form-label">
        Street Address Line 2
      </label>
      <input
        type="text"
        name="address2"
        id="address2"
        class="formbold-form-input"
      />
    </div>

    <div class="formbold-input-flex">
      <div>
        <label for="state" class="formbold-form-label"> State/Prvince </label>
        <input
          type="text"
          name="state"
          id="state"
          class="formbold-form-input"
        />
      </div>
      <div>
        <label for="country" class="formbold-form-label"> Country </label>
        <input
          type="text"
          name="country"
          id="country"
          class="formbold-form-input"
        />
      </div>
    </div>

    <div class="formbold-input-flex">
      <div>
        <label for="post" class="formbold-form-label"> Post/Zip code </label>
        <input
          type="text"
          name="post"
          id="post"
          class="formbold-form-input"
        />
      </div>
      <div>
        <label for="area" class="formbold-form-label"> Area Code </label>
        <input
          type="text"
          name="area"
          id="area"
          class="formbold-form-input"
        />
      </div>
    </div>

    <div class="formbold-checkbox-wrapper">
      <label for="supportCheckbox" class="formbold-checkbox-label">
        <div class="formbold-relative">
          <input
            type="checkbox"
            id="supportCheckbox"
            class="formbold-input-checkbox"
          />
          <div class="formbold-checkbox-inner">
            <span class="formbold-opacity-0">
              <svg
                width="11"
                height="8"
                viewBox="0 0 11 8"
                fill="none"
                class="formbold-stroke-current"
              >
                <path
                  d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                  stroke-width="0.4"
                ></path>
              </svg>
            </span>
          </div>
        </div>
        I agree to the defined
        <a href="#"> terms, conditions, and policies</a>
      </label>
    </div>

    <button class="formbold-btn">Register Now</button>
  </form>





                            </div>
                          </div>


                                                </div><!-- document-details-list -->

                                            </div><!-- document-details -->
                                        </div><!-- document-details-inner -->


                                    </div><!-- col-lg-8 -->
                                </div><!-- row -->
                            </div><!-- container -->
                        </div><!--page-wrapper-->
                    </div><!--page-wrapper-->
                </div><!--page-wrapper-->
            </div><!--page-wrapper-->
        </div><!--page-wrapper-->
    </section><!-- department-details-section -->


                        </div><!-- service-two-imgbox -->
                    </div><!--service-two-card-->
                </div><!--col-12 col-lg-4 col-xl-4-->


            </div><!-- row -->
        </div><!-- container -->
    </section><!-- service-two-section -->


    <section class="service-two-section">
        <div class="container">
            <div class="row row-gutter-y-40">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="service-two-card">
                        <div class="service-two-imgbox">
                                <section class="donate-section">


                                </section><!-- donate-section -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                    @include('frontend.00_approve.01_cssterpisah.footer1')
                    @include('frontend.00_approve.01_cssterpisah.footer')


