<style>
.badgekembali {
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
            .badgekembali:hover {
                background-color: white;
                color: black;
                background: white;
</style>


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

    <h5>I. IDENTITAS PESERTA</h4>
    <table>

        <tr>
            <td style="width:75px;">1.</td>
            <td style="width:200px;">Nama Lengkap</td>
            <td style="width:50px;">:</td>
            <td style="width:200px;">{{ ucwords(strtolower($data->namalengkap)) }}</td>
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

    <br>

    <h5>II. KELENGKAPAN BERKAS PERSYARATAN PESERTA</h4>
    {{-- <h5>KEPALA DINAS</h5> --}}
    <table>
        <tr>
            <td style="text-align: center;">KTP/KITAS*</td>
            <td style="text-align: center;">Foto</td>
            <td style="text-align: center;">Ijazah</td>
        </tr>
        <tr>
            <td style="text-align: center;">
                @if($data->uploadktp)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->uploadfoto)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->uploadijazah)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>

        </tr>

        <tr>
            <td style="text-align: center;">Pengalaman Kerja</td>
            <td style="text-align: center;">NPWP</td>
            <td style="text-align: center;">Daftar Riwayat Hidup</td>
        </tr>
        <tr>
            <td style="text-align: center;">
                @if($data->uploadpengalaman)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->uploadnpwp)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->uploaddaftarriwayathidup)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>

        </tr>

    </table>
<br>
    <h5>II. NAMA ASOSIASI DAN KESEDIAAN MENGIKUTI BIMBINGAN TEKNIS</h4>
    {{-- <h5>KEPALA DINAS</h5> --}}
    <table>
        <tr>
            <td style="text-align: center;">Nama Asosiasi</td>
            <td style="text-align: center;">{{$data->namaasosiasi}}</td>
        </tr>
    </table>

    <table>
        <tr>
            <td style="text-align: center;">MEMPUNYAI SKK ?</td>
            <td style="text-align: center;">MEMPUNYAI AKUN SIKI/ E-SIMPAN ?</td>
            <td style="text-align: center;">BERSEDIA MEMATUHI PERATURAN</td>
        </tr>
        <tr>
            <td style="text-align: center;">
                @if($data->punyaskk)
                    <button class="badge-kembali" style="text-align: center;">PUNYA</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">TIDAK PUNYA</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->punyasiki)
                    <button class="badge-kembali" style="text-align: center;">YA</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">TIDAK</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->siappatuh)
                    <button class="badge-kembali" style="text-align: center;">BERSEDIA</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">TIDAK BERSEDIA</button>
                @endif
            </td>

        </tr>

    </table>

    <br>

    <table style="border-collapse: collapse; border: none;">

        <tr>
            <td style="width: 40%;"></td>
            <td style="width: 50%;">DI TETAPKAN DI KABUPATEN BLORA</td>
        </tr>

        <tr>
            <td style="width: 40%;"></td>
            <td style="width: 60%;">PADA TANGGAL _____________</td>
        </tr>
        <br>
        <tr>
            <td style="width: 40%;"></td>
            <td style="width: 60%;">DINAS PEKERJAAN UMUM DAN PENAATAAN RUANG <br> SUB KOORDINATOR BIDANG BANGUNAN GEDUNG </td>
        </tr>

        <br><br>
        <tr>
            <td style="width: 40%;"></td>
            <td style="width: 60%;"></td>
        </tr>
        <tr>
            <td style="width: 40%;"></td>
            <td style="width: 60%;"></td>
        </tr>
        <tr>
            <td style="width: 40%;"></td>
            <td style="width: 60%;"></td>
        </tr>
            <tr>
                <td style="width: 40%;"></td>
                <td style="width: 60%; border-bottom: 2px solid black; text-align: center;">
                    ANEX FACHRIAN, S.T., M.T
                </td>
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
		</div><!-- container -->
	</section><!-- portfolio-details -->

</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
