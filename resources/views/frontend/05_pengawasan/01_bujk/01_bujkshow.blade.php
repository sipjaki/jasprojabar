<style>
    /* Import font Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


    .fl-table th {
    padding: 10px;
    text-align: center;
}

.fl-table i {
    font-size: 20px; /* Adjust icon size */
    margin-right: 8px; /* Add space between icon and text */
}




            .badgekembali {
                background: linear-gradient(to right, green, green);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgekembali:hover {
                background-color: white;
                color: black;
                background: white;
            }

            .green-button {
                background: linear-gradient(to right, navy, navy);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .green-button:hover {
                background-color: white;
                color: black;
                background: white;
            }
</style>


{{-- =========================================================== --}}

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

{{-- -------------------------- --}}


<section class="service-two-section" style="background-image: url('/assets/00_dokmasjaki/03_datajakon/banner1.jpg');">
    <div class="container">
        <div class="row row-gutter-y-40">
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="service-two-card">
                    <div class="service-two-imgbox" >

                        <section class="donate-section">
                            <div class="container">
                                <div class="row row-gutter-30">
                                    <div class="col-lg-12">
                                                                            </div><!-- col-lg-12 -->
                                    <div class="col-xxl-12 col-lg-12">
                                        <div class="donate-box-inner" style="margin-top: -120px;">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                {{-- <img src="/assets/icon/logopupr.png" class="img-fluid" alt="img-25" width="50" style="margin-right: 20px;" loading="lazy"> --}}
                                                <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">
                                                    <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                                    <!-- Tombol dan kolom pencarian di kanan -->
                                                    <div style="display: flex; align-items: center;">

                                                        <a href="/datajakon/bujkkontraktor" style="background: white;">
                                                            <button class="badgekembali" style="border: none; font-size: 12px; cursor: pointer; margin-right: 10px;">
                                                                <i class="fas fa-arrow-circle-left mr-2" style="margin-right: 15px;"></i> KEMBALI
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>

                                                </ul>

                                            <div class="centered-button" style="margin-top: -15px;">
                                                <button class="green-button" style="margin-bottom:10px; text-transform:uppercase">
                                                    <i class="fas fa-file mr-2" style="margin-right:5px;"></i> INFORMASI BUJK KONTRAKTOR : {{$data->namalengkap}}
                                                </button>

                                            </div>
                                            <form action="#" class="contact-form donation" method="post">
                                                <div class="row row-gutter-10">
                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-user mr-2" style="margin-right: 5px;"></i>Nama Pemilik </h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->namalengkap}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-phone-alt mr-2" style="margin-right: 5px;"></i>No Telepon</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->no_telepon}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-3 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-id-card mr-2" style="margin-right: 5px;"></i>Nomor Induk Berusaha</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->nib}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-3 -->

                                                    <div class="col-lg-12">
                                                        <h6><i class="fas fa-map-marker-alt mr-2" style="margin-right: 5px;"></i>Alamat</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->alamat}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-12 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-envelope mr-2" style="margin-right: 5px;"></i>Email</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->email}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-user-tie mr-2" style="margin-right: 5px;"></i>Penanggung Jawab Umum</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->pju}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-file-alt mr-2" style="margin-right: 5px;"></i>No Akte</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->no_akte}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-calendar mr-2" style="margin-right: 5px;"></i>Tanggal</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->tanggal}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-pencil-alt mr-2" style="margin-right: 5px;"></i>Notaris</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->nama_notaris}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-check-circle mr-2" style="margin-right: 5px;"></i>No Pengesahan</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->no_pengesahan}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->
                                                                                </div><!-- row row-gutter-10 -->
                                            </form><!-- contact-form -->
                                        </div><!-- donate-box-inner -->
                                    </div><!-- col-xl-8 col-lg-12 -->

                                </div><!-- row -->
                            </div><!-- container -->
                        </section><!-- donate-section -->



	<section class="department-details-section" style="margin-top: -200px;">
		<div class="container">
			<div class="row">
                {{-- ------------------------------------------------------------------------------------------ --}}
                <div class="col-lg-12">


                        <div class="document-details">
							<div class="document-details-list">
                                <div class="centered-button" style="margin-top: -15px">
                                    <button class="green-button" style="margin-bottom:10px; text-transform:uppercase">
                                        <i class="fas fa-file mr-2" style="margin-right:5px;"></i> SUB KLASIFIKASI LAYANAN : {{$data->namalengkap}}
                                    </button>

                                </div>


                                                        {{-- TABLE DATA  --}}
                                        </head>

                    <body>
                    <div class="table-wrapper">

                  <!-- Add this inside your HTML <head> for FontAwesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<table class="fl-table" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="text-align:center; color: black;">
                <!-- Add your icon here -->
                <i class="fas fa-info-circle"></i>
            </th>
            <th colspan="11" style="text-align:center; color: black;">No</th>
            <td colspan="12" style="text-align:center;">1</td>
        </tr>
        <tr>
            <th style="text-align:center; color: black;">
                <i class="fas fa-user"></i> <!-- Icon for 'Nama Pengurus' -->
            </th>
            <th colspan="11" style="text-align:center; color: black;">Nama Pengurus</th>
            <td colspan="12" style="text-align:center;">{{$data->namaperusahaan}}</td>
        </tr>
        <tr>
            <th style="text-align:center; color: black;">
                <i class="fas fa-user"></i> <!-- Same icon as above -->
            </th>
            <th colspan="11" style="text-align:center; color: black;">Nama Pengurus</th>
            <td colspan="12" style="text-align:center;">{{$data->namaperusahaan}}</td>
        </tr>
    </thead>
</table>

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




                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->


        </div><!-- row -->
    </div><!-- container -->
</section><!-- service-two-section -->


{{-- -------------------------- --}}





                    @include('frontend.00_approve.01_cssterpisah.footer1')
                    @include('frontend.00_approve.01_cssterpisah.footer')
