@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <style>

        .centered-button {
            text-align: left;
            margin-top: 50px; /* Adjusts vertical position */
        }

        .green-button {
            background-color: #fdba00; /* Light green background */
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

    <section class="donate-section">
		<div class="container">


			<div class="row row-gutter-30">
				<div class="col-lg-12">
                    <div class="col-lg-12" style="display: flex; justify-content: left; padding:20px">
                      <a href="/datajakon/skktenagakerjablora">
                          <button class="btn"
                          style="background-color: #000080;
                                       color: white;
                                       display: flex;
                                       align-items: center;
                                       border: none;
                                       padding: 10px 30px;
                                       border-radius:10px;
                                       transition: all 0.3s ease;
                                       cursor: pointer;"
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
                                onmouseout="this.style.backgroundColor='#000080'; this.style.color='white'; this.querySelector('i').style.color='white';">
                                <i class="fas fa-arrow-left" style="margin-right: 10px; color: white;"></i>Kembali
                            </button>
                        </a>
                    </div><!-- col-lg-12 -->
				</div><!-- col-lg-12 -->
				<div class="col-xxl-12 col-lg-12">
					<div class="donate-box-inner" style="margin-top: -20px;">
                        <div class="centered-button" style="margin-top: -15px;">
                            <button class="green-button" style="margin-bottom:10px; text-transform:uppercase">
                                <i class="fas fa-file mr-2" style="margin-right:5px;"></i> INFORMASI TENAGA AHLI : <span style="font-weight: bold; color: black; margin-left:5px;">{{$data->nama}}</span>
                            </button>

                        </div>
						<form action="#" class="contact-form donation" method="post">
							<div class="row row-gutter-10">

                                <div class="col-lg-6">
                                    <h6><i class="fas fa-user mr-2"></i>Nama Lengkap</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->nama}}" readonly>
                                </div>

                                <div class="col-lg-3">
                                    <h6><i class="fas fa-school mr-2"></i>Sekolah/Universitas</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->namasekolah->namasekolah}}" readonly>
                                </div>

                                <div class="col-lg-3">
                                    <h6><i class="fas fa-graduation-cap mr-2"></i>Jenjang Pendidikan</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->jenjangpendidikan->jenjangpendidikan}}" readonly>
                                </div>

                                <div class="col-lg-12">
                                    <h6><i class="fas fa-map-marker-alt mr-2"></i>Alamat</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->alamat}}" readonly>
                                </div>

                                <div class="col-lg-4">
                                    <h6><i class="fas fa-book mr-2"></i>Jurusan</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->jurusan->jurusan}}" readonly>
                                </div>

                                <div class="col-lg-4">
                                    <h6><i class="fas fa-calendar-check mr-2"></i>Tahun Lulus</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->tahunlulus}}" readonly>
                                </div>

                                <div class="col-lg-4">
                                    <h6><i class="fas fa-briefcase mr-2"></i>Jabatan Kerja</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->jabatankerja->jabatankerja}}" readonly>
                                </div>

                                <div class="col-lg-4">
                                    <h6><i class="fas fa-certificate mr-2"></i>Jenjang Keahlian</h6>
                                    <input type="text" class="input-text" placeholder="Jenjang {{$data->jenjang->jenjang}}" readonly>
                                </div>

                                <div class="col-lg-8">
                                    <h6><i class="fas fa-university mr-2"></i>LPS Penerbit</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->lpspenerbit->lpspenerbit}}" readonly>
                                </div>

                                <div class="col-lg-4">
                                    <h6><i class="fas fa-calendar-day mr-2"></i>Tanggal Terbit</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->tanggalterbit}}" readonly>
                                </div>

                                <div class="col-lg-4">
                                    <h6><i class="fas fa-calendar-alt mr-2"></i>Masa Berlaku</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->tanggalhabis}}" readonly>
                                </div>

                                <div class="col-lg-4">
                                    <h6><i class="fas fa-check-circle mr-2"></i>Status</h6>
                                    <input type="text" class="input-text" placeholder="{{$data->statusterbit}}" readonly>
                                </div>

                        </div><!-- row row-gutter-10 -->
						</form><!-- contact-form -->
					</div><!-- donate-box-inner -->
				</div><!-- col-xl-8 col-lg-12 -->

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- donate-section -->



                    @include('frontend.00_approve.01_cssterpisah.footer1')
                    @include('frontend.00_approve.01_cssterpisah.footer')
