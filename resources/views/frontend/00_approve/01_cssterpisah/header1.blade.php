

<header class="header">
	<div class="topbar">
		<div class="topbar-inner">
			<div class="topbar-left">
				<div class="topbar-socials">
                    <a href="#"><i class="fa-brands fa-tiktok" style="font-size: 18px;"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope" style="font-size: 18px;"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram" style="font-size: 18px;"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp" style="font-size: 18px;"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook" style="font-size: 18px;"></i></a>
				</div><!--topbar-socials-->
				<div class="topbar-info">
					<ul>
						<li>
							{{-- <div class="topbar-a">
								<i class="fa-solid fa-database"></i>
							</div><!-- topbar-icon --> --}}
							<div class="topbar-text" style="margin-right: 20px;
                            border-radius: 20px;
                            background-color: white;
                            color: green;
                            padding: 5px;
                            overflow: hidden;
                            font-size:25px;
                            white-space: nowrap;
                            display: inline-block;
                            animation: scrolling-text 5s linear infinite;
                            width: 100%;">

                            <marquee behavior="scroll" direction="left" style="width: 700px;">
                                <a href="/404" style="color: navy; text-decoration: none;">
                                Selamat Datang di Mas Jaki DPUPR Kab Blora Sistem Informasi Pembina Jasa Konstruksi Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora Provinsi Jawa Tengah
                                </a>
                            </marquee>

                            </div>

                            <div class="topbar-icon">
								<i class="fa-solid fa-envelope"></i>
							</div><!-- topbar-icon -->
							<div class="topbar-text">
								<a href="/404">konstruksi@masjakidpuprblora.co.id</a>
							</div><!-- topbar-text -->
						</li><!-- li -->
						<li>
							<div class="topbar-icon">
								<i class="fa-solid fa-clock"></i>
							</div><!-- topbar-icon -->
							<div class="topbar-text">
								<span>Senin - Jum`at 09.00 - 15.30</span>
							</div><!-- topbar-text -->
						</li><!-- li -->
						<li>

                            <div class="container">
                                {{-- <p>081321455855</p> --}}
                                <div id="clock-container" style="
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 6vh;
                                font-family: Arial, sans-serif;">
                                <p id="jam" style="
                                    font-size: 14px;
                                    background: #2ECC71;
                                    color: #fff;
                                    padding: 20px 10px;
                                    border-radius: 15px;
                                    text-align: center;"></p>
                                         {{-- <p style="color: black"></p> --}}

                                        </div>

                            <script>
                                function updateClock() {
                                    const now = new Date();
                                    const hours = now.getHours().toString().padStart(2, '0');
                                    const minutes = now.getMinutes().toString().padStart(2, '0');
                                    const seconds = now.getSeconds().toString().padStart(2, '0');
                                    const day = now.getDate().toString().padStart(2, '0');
                                    const month = (now.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-based
                                    const year = now.getFullYear();

                                    const timeString = `${hours}:${minutes}:${seconds}`;
                                    const dateString = `${day}/${month}/${year}`;
                                    document.getElementById('jam').textContent = `${dateString} ${timeString}`;
                                }

                                setInterval(updateClock, 1000); // Update every second
                                updateClock(); // Initial call to set the time immediately
                            </script>
                                                </li><!-- li -->

					</ul><!-- ul -->
				</div><!--topbar-info-->
			</div><!-- topbar-left -->
			<div class="topbar-right">
				<ul>
					{{-- <li><a href="/404"><i class="fas fa-phone mr-2"> 0813 2145 5855</i></a></li> --}}
					{{-- <li><a href="department-details.html">Council</a></li>
					<li><a href="departments.html">Government</a></li>
					<li><a href="contact.html">Complaints</a></li> --}}
				</ul><!-- ul -->
			</div><!--topbar-right-->
		</div><!-- topbar-inner -->
	</div><!--topbar-->
	<div class="main-menu sticky-header">
		<div class="main-menu-inner">
			<div class="main-menu-left">
				<div class="main-menu-logo">
					<a href="index.html"><img src="/assets/icon/logokabupatenblora.png" alt="img-145" width="45" style="margin-right: 10px;" loading="lazy"></a>
					<a href="index.html"><img src="/assets/icon/pupr.png" alt="img-145" width="45" loading="lazy"></a>
				</div><!--main-menu-logo-->
				<div class="navigation">
					<ul class="main-menu-list list-unstyled">
                        <li class="active"><a href="/">Beranda</a>

						<li class="active has-dropdown">
							<a href="#">Kelembagaan</a>
							<ul class="list-unstyled">
								<li><a href="/profil/struktur">Struktur DPUPR Kab Blora</a></li>
								<li><a href="/profil/rencanastrategis">Renstra Program Kab Blora</a></li>
								<li><a href="/profil/tupoksi">Tupoksi Program Jasa Konstruksi</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

						<li class="active has-dropdown">
							<a href="#">Berita</a>
							<ul class="list-unstyled">
								<li><a href="/404">Jasa Konstruksi</a></li>
								<li><a href="/404">Dokumen Sertifikasi</a></li>
								<li><a href="/404">Agenda Sertifikasi</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

                        <li class="active has-dropdown">
							<a href="#">Data Jakon</a>
							<ul class="list-unstyled">
								<li><a href="/datajakon/bujk">BUJK Kontraktor dan Konsultan</a></li>
								{{-- <li><a href="/404">BUJK Konsultan</a></li> --}}
								<li><a href="/datajakon/skktenagakerja">Tenaga Kerja Konstruksi</a></li>
								<li><a href="/datajakon/datapaketpekerjaanblora">Profil Paket Pekerjaan Konstruksi & Konsultasi</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

                        <li class="active has-dropdown">
							<a href="#">Pembinaan</a>
							<ul class="list-unstyled">
								<li><a href="/agendapembinaan">Agenda Pembinaan</a></li>
								<li><a href="/404">Pelatihan</a></li>
								<li><a href="/404">Bimbingan Teknis</a></li>
								<li><a href="/404">Workshop</a></li>
								<li><a href="/404">SKK Tenaga Ahli</a></li>
								{{-- <li><a href="/404">Daftar Tenaga Ahli</a></li> --}}
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

                        <li class="active has-dropdown">
							<a href="#">Pengawasan</a>
							<ul class="list-unstyled">
								<li><a href="/pengawasanbujk">Pengawasan BUJK</a></li>
								<li><a href="/kecelakaankerja">Kecelakaan Kerja</a></li>
								<li><a href="/404">Tertib Jasa Konstruksi</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

                        <li class="active has-dropdown">
							<a href="#">Rantai Pasok </a>
							<ul class="list-unstyled">
								<li><a href="/404">Material Bangunan Gedung </a></li>
								<li><a href="/404">Peralatan Konstruksi</a></li>
								<li><a href="/404">Toko Bangunan Kab Blora</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

                        <li class="active has-dropdown">
							<a href="#">AHSP</a>
							<ul class="list-unstyled">
								<li><a href="/404">Harga Satuan Dasar </a></li>
								<li><a href="/404">HSP Konstruksi Umum </a></li>
								<li><a href="/404">SHST Konstruksi</a></li>
								<li><a href="/404">Daftar Material</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

                        <li class="active has-dropdown">
							<a href="#">Peraturan</a>
							<ul class="list-unstyled">
								<li><a href="/peraturan/undangundang">Undang - Undang </a></li>
								<li><a href="/peraturan/pemerintah">Peraturan Pemerintah</a></li>
								<li><a href="/peraturan/presiden">Peraturan Presiden</a></li>
								<li><a href="/peraturan/menteri">Peraturan Menteri</a></li>
								<li><a href="/peraturan/keputusanmenteri">Keputusan Menteri</a></li>
								<li><a href="/peraturan/suratedaranmenteri">Surat Edaran Menteri</a></li>
								<li><a href="/peraturan/referensi">Referensi</a></li>
								<li><a href="/peraturan/daerah">Peraturan Daerah</a></li>
								<li><a href="/peraturan/peraturangubernur">Peraturan Gubernur</a></li>
								<li><a href="/peraturan/walikotadanbupati">Peraturan Walikota/Bupati</a></li>
								<li><a href="/peraturan/suratkeputusan">Surat Keputusan</a></li>
							</ul><!-- list-unstyled -->
						</li><!--has-dropdown-->

					</ul><!-- main-menu-list -->
				</div><!--navigation-->
			</div><!--main-menu-left-->
			<div class="main-menu-right">
				<div class="mobile-menu-button mobile-nav-toggler">
					<span></span>
					<span></span>
					<span></span>
				</div><!-- mobile-menu-button -->
				{{-- <div class="search-box">
					<a href="#" class="search-toggler">
						<i class="flaticon-search-interface-symbol"></i>
					</a><!-- search-toggler -->
				</div><!-- search-box --> --}}
				<div class="main-menu-right-button">
					<a href="/login" class="btn btn-primary">Login</a>
				</div><!-- main-menu-right-button -->
			</div><!--main-menu-right-->
		</div><!--main-menu-inner-->
	</div><!--main-menu-->
</header><!--header-->
