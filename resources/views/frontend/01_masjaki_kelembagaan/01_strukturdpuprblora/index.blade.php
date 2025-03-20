@include('frontend.00_approve.01_cssterpisah.header')

<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
	<section class="page-banner" style="background-image: url('/assets/approve/image/bg/page-banner.png')">
		<div class="container">
			<div class="page-banner-title">
				<h3 style="color: black; font-size:30px;">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->

	<section class="portfolio-details">
		<div class="container" style="background-image: url(assets/00_dokmasjaki/03_datajakon/putihbaru.jpg);">
			{{-- <img src="assets/image/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="img-109"> --}}

            @foreach ($data as $item )
            <iframe src="{{ asset('storage/' . $item->peraturan) }}" width="100%" height="750" style="border: none; margin-bottom:25px;"></iframe>
			<div class="portfolio-details-content">
                <div class="portfolio-details-content-title">
                    <h3>{!! $item->judul !!}</h3>
				</div><!-- portfolio-details-content-title -->
				<div class="portfolio-details-content-text">
                    <p style="text-align: justify" >
                {!! $item->keterangan !!}
                    </p>

                    <p style="text-align: justify">
                        {{-- Di bawah pimpinan Kepala Dinas, setiap unit kerja dalam Dinas PUPR memiliki peran yang jelas, mulai dari Sekretariat yang mendukung administrasi hingga berbagai bidang teknis seperti Bidang Bina Marga yang mengelola pembangunan dan pemeliharaan jalan serta jembatan, Bidang Cipta Karya yang berfokus pada pembangunan sarana prasarana publik, hingga Bidang Penataan Ruang yang bertanggung jawab atas pengelolaan tata ruang wilayah. Selain itu, Bidang Sumber Daya Air menangani pengelolaan sumber daya air dan sistem irigasi, sementara Unit Pelaksana Teknis (UPT) bertugas melaksanakan proyek-proyek terkait dan memastikan kelancaran operasional di lapangan. Dengan struktur yang jelas, Dinas PUPR Kabupaten Blora berkomitmen untuk mendukung pembangunan infrastruktur yang berkualitas dan memberikan manfaat maksimal bagi masyarakat. --}}

                    </p >
                </div><!-- portfolio-details-content-text -->
			</div><!-- portfolio-details-content -->
            @endforeach
		</div><!-- container -->
	</section><!-- portfolio-details -->

</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
