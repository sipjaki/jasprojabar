@include('frontend.00_approve.01_cssterpisah.header')

<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
	<section class="page-banner" style="background-image: url('/assets/approve/image/bg/page-banner.png')">
		<div class="container">
			<div class="page-banner-title" style="border: none;">
				<h3 style="color: black; font-size:30px; ">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->
	<section class="portfolio-details">
		<div class="container">


{{-- ==================================================== --}}
<style>
    .container-surat {
        width: 80%;
        margin: auto;
        padding: 20px;
        border: 1px solid black;
    }

    /* Styling untuk kop surat */
    .header {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 20px;
    }

    .header img {
        width: 60px; /* Perbesar sedikit agar lebih proporsional */
        height: 60px;
        margin-right: 15px; /* Jarak antara logo dan teks */
    }

    .header-text {
        flex: 1; /* Supaya teks mengisi sisa ruang */
    }

    .header h3, .header h4, .header p {
        margin: 2px 0; /* Supaya tidak ada jarak berlebihan */
        font-size: 16px; /* Sesuaikan ukuran font */
    }

    .header h4 {
        font-size: 14px;
        font-weight: normal;
    }

    /* Tambahkan font Poppins ke seluruh halaman */
    .container-surat {
    font-family: 'Times New Roman', serif;
    }


    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        font-size: 14px; /* Sesuaikan ukuran teks */
    }

    th {
        background-color: #ddd;
        font-weight: 600; /* Lebih tebal agar judul tabel lebih jelas */
    }
</style>


<div class="container-surat">
    <div class="header">
        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
        <div class="header-text">
            <h3>PEMERINTAH KABUPATEN BLORA</h3>
            <h3>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
            <p>Jl. Nusantara No. 62 Telp. (0296) 531004</p>
            <h3>BLORA 58214</h3>
            <h3>PROFIL OPD JASA KONSTRUKSI</h3>
            <h4>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BLORA</h4>
        </div>
    </div>

    <h4>I. IDENTITAS OPD</h4>
    <table>
        <tr>
            <td>1.</td>
            <td>Nama OPD</td>
            <td>: Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Alamat OPD</td>
            <td>: Jl. Nusantara No. 6 2</td>
        </tr>
        <tr>
            <td></td>
            <td>RT / RW</td>
            <td>: -</td>
        </tr>
        <tr>
            <td></td>
            <td>Kode Pos</td>
            <td>: 58214</td>
        </tr>
        <tr>
            <td></td>
            <td>Kelurahan</td>
            <td>: Jetis</td>
        </tr>
        <tr>
            <td></td>
            <td>Kecamatan</td>
            <td>: Blora</td>
        </tr>
        <tr>
            <td></td>
            <td>Kota</td>
            <td>: Blora</td>
        </tr>
        <tr>
            <td></td>
            <td>Provinsi</td>
            <td>: Jawa Tengah</td>
        </tr>
        <tr>
            <td></td>
            <td>Negara</td>
            <td>: Indonesia</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Posisi Geografis</td>
            <td>: -6.976853 Lintang, 111.410894 Bujur</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Tipe Dinas</td>
            <td>: B</td>
        </tr>
    </table>

    <h4>II. PROFIL PIMPINAN OPD</h4>

    <h5>KEPALA DINAS</h5>
    <table>
        <tr>
            <td>1.</td>
            <td>Nama Lengkap</td>
            <td>: NIDZAMUDIN AL HUDDA, ST</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>NIP</td>
            <td>: 19720326 200604 1 005</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>: Sleman, 26 Maret 1972</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Pangkat / Golongan</td>
            <td>: Pembina / IVa</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Jabatan</td>
            <td>: Plt. Kepala Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Perangkat Daerah</td>
            <td>: Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Pendidikan Terakhir</td>
            <td>: Strata 1 (S1)</td>
        </tr>
    </table>

    <h5>KEPALA BIDANG BANGUNAN GEDUNG</h5>
    <table>
        <tr>
            <td>1.</td>
            <td>Nama Lengkap</td>
            <td>: MOHAMAD ARIF HIDAYAT, ST</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>NIP</td>
            <td>: 19710506 199403 1 011</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>: Blora, 06 Mei 1971</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Pangkat / Golongan</td>
            <td>: Pembina / IVa</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Jabatan</td>
            <td>: Kepala Bidang Bangunan Gedung Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Perangkat Daerah</td>
            <td>: Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Pendidikan Terakhir</td>
            <td>: Strata 1 (S1)</td>
        </tr>
    </table>

    <h5>SUBKOORDINATOR BINA JASA KONSTRUKSI</h5>
    <table>
        <tr>
            <td>1.</td>
            <td>Nama Lengkap</td>
            <td>: ANEX FACHRIAN ST, MT</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>NIP</td>
            <td>: 19810728 201012 1 004</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>: Blora, 28 Juli 1981</td>
        </tr>
    </table>

</div>


{{-- ==================================================== --}}

			{{-- <img src="assets/image/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="img-109"> --}}
            {{-- @foreach ($data as $item )
            <iframe src="{{ asset('storage/' . $item->peraturan) }}" width="100%" height="750" style="border: none;"></iframe>
            @endforeach --}}
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
					<h3>Profil Jakon DPUPR Kabupaten BLora </h3>
				</div><!-- portfolio-details-content-title -->
				<div class="portfolio-details-content-text">
					<p style="text-align: justify" >
                        OPD yang menangani Bina Jasa Konstruksi di DPUPR Kab Blora setara dengan Eselon IV di bawah Bidang Bangunan Gedung. Pada Bidang Bangunan Gedung terdapat 2 Sub Koordinator yaitu Sub Koordinator Bangunan dan Lingkungan serta Sub Koordinator Bina Jasa Konstruksi. Hal tersebut tertuang dalam Peraturan Bupati No 66 Tahun 2021 Tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi, Serta Tata Kerja Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora. Sub Koordinator Bina Jasa Konstruksi mempunyai 4 Personil Jabatan Fungsional Bina Jasa Konstruksi
                    </p>

                </div><!-- portfolio-details-content-text -->
			</div><!-- portfolio-details-content -->
		</div><!-- container -->
	</section><!-- portfolio-details -->

</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
