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
					<h3>Tupoksi DPUPR Pemerintah Kabupaten Blora</h3>
				</div><!-- portfolio-details-content-title -->
				<div class="portfolio-details-content-text">
					<p style="text-align: justify" >
                        Dinas Pekerjaan Umum dan Penataan Ruang (DPUPR) Kabupaten Blora memiliki peran penting dalam perencanaan, pelaksanaan, dan pengendalian pembangunan infrastruktur di wilayah Kabupaten Blora. Tupoksi DPUPR mencakup berbagai kegiatan seperti pengelolaan jalan, jembatan, sumber daya air, dan jaringan air bersih, serta penataan ruang wilayah untuk memastikan pembangunan yang terstruktur dan berkelanjutan. DPUPR bertugas merumuskan kebijakan teknis, menyediakan standar dan pedoman pembangunan, serta melakukan evaluasi terhadap setiap program yang dijalankan.
                    </p>

                    <p style="text-align: justify">
                        Selain itu, DPUPR Kabupaten Blora juga berperan dalam mendukung tercapainya kesejahteraan masyarakat melalui penyediaan fasilitas publik yang memadai. Dinas ini memastikan agar setiap kegiatan pembangunan sesuai dengan peraturan yang berlaku dan memperhatikan prinsip-prinsip keberlanjutan serta keamanan. DPUPR terus berkomitmen dalam meningkatkan kualitas infrastruktur dan tata ruang yang dapat menunjang pertumbuhan ekonomi serta meningkatkan kualitas hidup masyarakat Blora.
                    </p >
                </div><!-- portfolio-details-content-text -->
			</div><!-- portfolio-details-content -->
		</div><!-- container -->
	</section><!-- portfolio-details -->

</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
