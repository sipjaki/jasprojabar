@include('frontend.00_approve.01_cssterpisah.header')

<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
	<section class="page-banner" style="background-image: url('/assets/approve/image/bg/page-banner.png')">
		<div class="container">
			<div class="page-banner-title">
				<h3 style="color: black">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->
	<section class="portfolio-details">
		<div class="container">
			{{-- <img src="assets/image/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="img-109"> --}}
            @foreach ($data as $item )
            <iframe src="{{ asset('storage/' . $item->peraturan) }}" width="100%" height="750" style="border: none;"></iframe>
            @endforeach
			{{-- <div class="portfolio-details-info">
				<div class="portfolio-details-info-item">
					<span>Category:</span>
					<p>Business</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item">
					<span>Department:</span>
					<p>Finance and Economy</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item">
					<span>Date:</span>
					<p>20 October, 2022</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item">
					<span>Location:</span>
					<p>New York City</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item portfolio-details-info-socials">
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-facebook"></i></a>
					<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
				</div><!-- portfolio-details-info-socials -->
			</div><!--/.portfolio-details-info--> --}}
			<div class="portfolio-details-content">
				<div class="portfolio-details-content-title">
					<h3>Rencana Strategis DPUPR Pemerintah Kabupaten Blora</h3>
				</div><!-- portfolio-details-content-title -->
				<div class="portfolio-details-content-text">
					<p style="text-align: justify" >
                        Rencana Strategis Dinas Pekerjaan Umum dan Penataan Ruang (DPUPR) Pemerintah Kabupaten Blora dirancang untuk mencapai visi pembangunan infrastruktur yang berkualitas dan berkelanjutan, seiring dengan kebutuhan masyarakat yang terus berkembang. Rencana ini bertujuan untuk meningkatkan efisiensi dan efektivitas dalam pelaksanaan tugas-tugas Dinas PUPR melalui berbagai program yang mencakup pembangunan dan pemeliharaan infrastruktur seperti jalan, jembatan, dan fasilitas umum lainnya. Selain itu, penataan ruang wilayah yang terencana menjadi fokus utama dalam rangka menciptakan keseimbangan antara pembangunan fisik dan pelestarian lingkungan.
                    </p>

                    <p style="text-align: justify">
                        Dalam rencana strategis ini, DPUPR Kabupaten Blora akan memprioritaskan pembangunan yang berbasis pada kebutuhan masyarakat, dengan memperhatikan potensi sumber daya yang ada serta menjamin keberlanjutan pembangunan di masa depan. Program-program unggulan seperti pengelolaan sumber daya air, pengembangan sistem transportasi yang terintegrasi, serta pembangunan infrastruktur yang ramah lingkungan akan dijalankan dengan melibatkan berbagai pihak, baik itu pemerintah pusat, daerah, maupun masyarakat. Dengan landasan tersebut, DPUPR Kabupaten Blora berkomitmen untuk mempercepat pencapaian pembangunan yang merata dan meningkatkan kualitas hidup masyarakat Blora secara keseluruhan.
                    </p >
                </div><!-- portfolio-details-content-text -->
			</div><!-- portfolio-details-content -->
		</div><!-- container -->
	</section><!-- portfolio-details -->

</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
