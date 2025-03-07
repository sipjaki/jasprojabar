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
    .header-surat {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 20px;
    }

    .header-surat img {
        width: 100px; /* Perbesar sedikit agar lebih proporsional */
        height: 100px;
        margin-right: 50px; /* Jarak antara logo dan teks */
        margin-bottom: 100px; /* Jarak antara logo dan teks */
    }

    .header-surat-text {
        flex: 1; /* Supaya teks mengisi sisa ruang */
    }

    .header-surat h3, .header-surat h4, .header-surat p {
        margin: 2px 0; /* Supaya tidak ada jarak berlebihan */
        font-size: 20px; /* Sesuaikan ukuran font */
    }

    .header-surat h4 {
        font-size: 14px;
        font-weight: normal;
    }

    /* Tambahkan font Poppins ke seluruh halaman */
    .container-surat {
        font-family: 'times new roman', sans-serif;
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
        font-size: 20px; /* Sesuaikan ukuran teks */
    }

    th {
        background-color: #ddd;
        font-weight: 600; /* Lebih tebal agar judul tabel lebih jelas */
    }
</style>


<div class="container-surat">
    <div class="header-surat">
        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
        <br>
        <div class="header-text">
            <h3>PEMERINTAH KABUPATEN BLORA</h3>
            <h3>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
            <p>Jl. Nusantara No. 62 Telp. (0296) 531004</p>
            <h3>BLORA 58214</h3>
            <p>_____________________________________________________________</p>
            <h3>DAFTAR PESERTA SKK TENAGA KONSTRUKSI</h3>
            <h4>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BLORA</h4>
        </div>
    </div>
    <br>

    <h4>I. IDENTITAS PESERTA</h4>
    <table>

        <tr>
            <td style="width:75px;">1.</td>
            <td style="width:200px;">Nama Lengkap</td>
            <td style="width:50px;">:</td>
            <td style="width:200px;">{{$data->namalengkap}}</td>
            <td style="width:300px;">
                <img src="/assets/00_dokmasjaki/03_datajakon/jabatan.png" alt="" width="200px;">
            </td>
        </tr>

    </table>

    <table>

        <tr>
            <td>2.</td>
            <td>Jabatan Kerja </td>
            <td>:</td>
            <td>{{$data->jabatankerja}}</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Tempat Lahir </td>
            <td>:</td>
            <td>{{$data->tempatlahir}}</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Jenis Kelamin </td>
            <td>:</td>
            <td>{{$data->jeniskelamin}}</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>KTP/KITAS</td>
            <td>:</td>
            <td>{{$data->nik}}</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Alamat</td>
            <td>:</td>
            <td>{{$data->alamat}}</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Telepon</td>
            <td>:</td>
            <td>{{$data->notelepon}}</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Email</td>
            <td>:</td>
            <td>{{$data->email}}</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Jenjang Pendidikan</td>
            <td>:</td>
            <td>{{$data->jenjangpendidikan->jenjangpendidikan}}</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Sekolah/Universitas</td>
            <td>:</td>
            <td>{{$data->namasekolah->namasekolah}}</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Tahun Lulus</td>
            <td>:</td>
            <td>{{$data->tahunlulus}}</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Tahun Bimtek</td>
            <td>:</td>
            <td>{{$data->tahunpilihan->tahunpilihan}}</td>
        </tr>

    </table>

    <table>

        <tr>
            <td style="width:75px;">1.</td>
            <td style="width:200px;">Nama Lengkap</td>
            <td style="width:50px;">:</td>
            <td style="width:200px;">{{$data->namalengkap}}</td>
            <td style="width:300px;">
                <img src="/assets/00_dokmasjaki/03_datajakon/jabatan.png" alt="" width="200px;">
            </td>
        </tr>

    </table>

    <br>

    <h4>II. KELENGKAPAN BERKAS PERSYARATAN PESERTA</h4>
    {{-- <h5>KEPALA DINAS</h5> --}}
    <table>
        <tr>
            <td>KTP/KITAS*</td>
            <td>Foto</td>
            <td>Ijazah</td>
        </tr>
        <tr>
            <td>
                @if($data->uploadktp)
                    <button class="btn btn-navy">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled>BELUM</button>
                @endif
            </td>
            <td>
                @if($data->uploadfoto)
                    <button class="btn btn-navy">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled>BELUM</button>
                @endif
            </td>
            <td>
                @if($data->uploadijazah)
                    <button class="btn btn-navy">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled>BELUM</button>
                @endif
            </td>

        </tr>
        <tr>
            <td>3.</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td> - </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Pangkat / Golongan</td>
            <td>:</td>
            <td> - </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Jabatan</td>
            <td>:</td>
            <td>Plt. Kepala Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Perangkat Daerah</td>
            <td>:</td>
            <td>Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>Strata 1 (S1)</td>
        </tr>
    </table>

    <br>

    <h5>KEPALA BIDANG BANGUNAN GEDUNG</h5>
    <table>
        <tr>
            <td>1.</td>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>MOHAMAD ARIF HIDAYAT, ST</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>NIP</td>
            <td>:</td>
            <td> - </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td> - </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Pangkat / Golongan</td>
            <td>:</td>
            <td> - </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Jabatan</td>
            <td>:</td>
            <td>Kepala Bidang Bangunan Gedung Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Perangkat Daerah</td>
            <td>:</td>
            <td>Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>Strata 1 (S1)</td>
        </tr>
    </table>

    <br>

    <h5>SUBKOORDINATOR BINA JASA KONSTRUKSI</h5>
    <table>
        <tr>
            <td>1.</td>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>ANEX FACHRIAN ST, MT</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>NIP</td>
            <td>:</td>
            <td> - </td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td> - </td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Pangkat/Golongan</td>
            <td>:</td>
            <td> - </td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Jabatan</td>
            <td>:</td>
            <td>Subkoordinator Bina Jasa Konstruksi Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora </td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>Magister (S2) </td>
        </tr>
    </table>
    <br>

    <h4>III. OPD Jakon</h4>
    <table>
        <tr>
            <td></td>
            <td>OPD yang menangani Bina Jasa Konstruksi di DPUPR Kabupaten Blora setara dengan eselon IV,
                dibawah Bidang Bangunan Gedung. Pada Bidang Bangunan Gedung terdapat dua subkoordinator
                yaitu Subkoordinator Bangunan dan Lingkungan serta Subkoordinator Bina Jasa Konstruksi,   hal
                tersebut tertuang dalam Perbup Nomor 66 Tahun 2021 tentang Kedudukan, Susunan Organisasi,
                Tugas dan Fungsi Serta Tata Kerja Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora.</td>
            </tr>
        </table>
        <br>

    <h4>IV. Kontak OPD</h4>
    <table>
        <tr>
            <td>1</td>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td>(0296) 531004 </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Instagram</td>
            <td>:</td>
            <td>'@dpuprblora'</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Tiktok</td>
            <td>:</td>
            <td>'@bangunan.gedung.dpupr'</td>
        </tr>
    </table>

<br>
    <h4>V. SK SIPJAKI</h4>
    <table>
        <tr>
            <td></td>
            <td>Nomor</td>
            <td>:</td>
            <td>900/008.A/2024 tanggal 2 Januari 2024</td>
        </tr>
        <tr>
            <td></td>
            <td>Nama Operator SIPJAKI</td>
            <td>:</td>
            <td>Miftahunnuril Anam, SE </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>:</td>
            <td>Muhammad Yusuf Zaqi Efendi, SE</td>
        </tr>
    </table>

<br>
    <h4>VI. SK PERSONIL JABATAN FUNGSIONAL JASA KONSTRUKSI</h4>
    <table>
        <tr>
            <td>1</td>
            <td>Ahli Muda Bina Jasa Konstruksi</td>
            <td>:</td>
            <td>Anex Fachrian, ST, MT</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Ahli Pertama - Jasa Konstruksi</td>
            <td>:</td>
            <td>Miftahunnuril Anam, SE</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Ahli Pertama - Jasa Konstruksi</td>
            <td>:</td>
            <td>Maretha Riantiarni, SE</td>
        </tr>

        <tr>
            <td>4</td>
            <td>Ahli Pertama - Jasa Konstruksi</td>
            <td>:</td>
            <td>Yudha Prasetyowidadi, SE</td>
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
