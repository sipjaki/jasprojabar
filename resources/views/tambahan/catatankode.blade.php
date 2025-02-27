PERINTAH UNTUK MENCARI ARTISAN THINKER RELASI TABLE $QA


App\Models\Qa::first();




> $user->statusadmin

   WARNING  Undefined variable $user in D:\01. SIPJAKI KABUPATEN BANDUNG BARATeval()'d code.


   WARNING  Attempt to read property "statusadmin" on null in D:\01. SIPJAKI KABUPATEN BANDUNG BARATeval()'d code.

= null

> $user = App\Models\User::first();
> $bujkkontraktor = App\Models\bujkkontraktor::first();

= App\Models\User {#6182
    id: 1,
    statusadmin_id: 1,
    name: "Sigit Septiadi",
    username: "Sigit",
    phone_number: null,
    email: "sigitseptiadi1@gmail.com",
    avatar: null,
    email_verified_at: null,
    #password: "$2y$12$tataDPkWtGA6tWR0SMWAOOYGV2CNODupe2MgAVwF/15OAzEsklmqC",
    deleted_at: null,
    #remember_token: null,
    created_at: "2024-09-13 02:57:45",
    updated_at: "2024-09-13 02:57:45",
  }

> $user =$user->statusadmin
= App\Models\statusadmin {#6181
    id: 1,
    status: "super_admin",
    deleted_at: null,
    created_at: "2024-09-13 02:57:46",
    updated_at: "2024-09-13 02:57:46",
  }

> $qa = App\Models\qa::first();
= App\Models\qa {#6162
    id: 1,
    qasebagai_id: 2,
    qapertanyaan_id: 8,
    nama_lengkap: "Marina Stanton",
    email: "madaline.nicolas@example.org",
    telepon: "+1 (380) 439-2707",
    deleted_at: null,
    created_at: "2024-09-13 02:57:50",
    updated_at: "2024-09-13 02:57:50",
  }

> $qa->sebagai
= null

> $qa->qasebagai
= App\Models\qasebagai {#6193
    id: 2,
    sebagai: "Pengawas",
    deleted_at: null,
    created_at: "2024-09-13 02:57:50",
    updated_at: "2024-09-13 02:57:50",
  }



  {{-- untuk memilih berdasarkan seelct --}}


                {{-- <div class="form-group">
                    <div class="form-group-inner" style="width:800px;">
                        <label for="status" style="font-size:14px;">
                            <i class="fas fa-file me-2"></i> Status
                        </label>
                        <select id="status" name="status" required class="form-control" style="width: 500px;">
                            <!-- Ensure the value matches the expected status from your data source -->
                            <option value="AKTIF" {{$dataasosiasipengusaha->status}}>{{$dataasosiasipengusaha->status}}</option>
                            <option value="AKTIF">AKTIF</option>
                            <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                        </select>
                    </div>
                </div> --}}



public function createupdatepaketpekerjaan(Request $request, $instansi)
{
    // Validasi input
    $request->validate([
        'instansi' => 'required|string|max:255',
        'jumlah_pagu' => 'required|numeric|min:10000|max:10000000000', // Validasi untuk angka
        'metodepengadaan_id' => 'required|string|max:255',
        'pekerjaan' => 'required|string|max:255',
        'foto_pekerjaan' => 'nullable|file|mimes:jpg,jpeg,png|max:20480',

        // 'progress_fisik' => 'required|numeric|min:0|max:100',
    ]);

    // Cari data paketpekerjaan berdasarkan instansi
    $datapaketpekerjaan = paketpekerjaan::where('instansi', $instansi)->firstOrFail();

    // Path folder penyimpanan
    $storagePath = storage_path('app/public/datajakon/paketpekerjaan');

    // Cek dan buat folder jika tidak ada
    if (!File::exists($storagePath)) {
        File::makeDirectory($storagePath, 0755, true);
    }

    // Simpan file foto_pekerjaan dan ambil path-nya
    $filePath = $datapaketpekerjaan->foto_pekerjaan; // Default ke foto yang ada jika tidak ada file baru
    if ($request->hasFile('foto_pekerjaan')) {
        $file = $request->file('foto_pekerjaan');
        $filePath = $file->store('datajakon/paketpekerjaan', 'public');
    }

    // Ambil dan konversi jumlah_pagu dari request
    $jumlahPagu = $request->input('jumlah_pagu');

    // Hapus karakter non-numeric, misalnya "Rp." atau tanda titik ribuan
    $jumlahPagu = preg_replace('/[^\d]/', '', $jumlahPagu);

    // Konversi ke integer
    $jumlahPagu = (int) $jumlahPagu;

    // Update data paketpekerjaan dengan data dari form
    $datapaketpekerjaan->update([
        'instansi' => $request->input('instansi'),
        'jumlah_pagu' => $jumlahPagu, // Pastikan jumlah_pagu disimpan sebagai integer
        'metodepengadaan_id' => $request->input('metodepengadaan_id'),
        'pekerjaan' => $request->input('pekerjaan'),
        'foto_pekerjaan' => $filePath,

        // 'progress_fisik' => $request->input('progress_fisik'),
    ]);

    // Flash pesan session
    session()->flash('update', 'Data Paket Pekerjaan Berhasil Diupdate!');

    // Redirect ke halaman yang sesuai
    return redirect('/paketpekerjaan'); // Pastikan rute ini ada di web.php
}



{{-- ----------------- pengeluaran foto --}}

@if(Storage::disk('public')->exists($data->foto_pekerjaan))
<img src="{{ asset('storage/' . $data->foto_pekerjaan) }}" alt="{{ $data->foto_pekerjaan }}" style="width: 100%; min-width: 280px; height: auto; border-radius: 8px;">
@else
<img src="{{ $data->foto_pekerjaan }}" alt="{{ $data->foto_pekerjaan }}" style="width: 100%; min-width: 280px; height: auto; border-radius: 8px;">
@endif




FAKER BAHASA INDONESAI
$faker = FakerFactory::create('id_ID'); // Menggunakan lokal Indonesia


use Faker\Factory as FakerFactory;




public function createstoredokumentasipelatihan(Request $request)
{
    // Validasi input manual
    $errors = [];

    if (!$request->filled('pengawasanlokasi_id') || !is_numeric($request->pengawasanlokasi_id)) {
        $errors['pengawasanlokasi_id'] = 'Lokasi pengawasan harus diisi dan merupakan angka.';
    }

    if (!$request->filled('judul_kegiatan')) {
        $errors['judul_kegiatan'] = 'Judul kegiatan harus diisi.';
    } elseif (strlen($request->judul_kegiatan) > 255) {
        $errors['judul_kegiatan'] = 'Judul kegiatan tidak boleh lebih dari 255 karakter.';
    }

    if (!$request->filled('user_id') || !is_numeric($request->user_id)) {
        $errors['user_id'] = 'User ID harus diisi dan merupakan angka.';
    }

    if (!$request->filled('alamat_kegiatan')) {
        $errors['alamat_kegiatan'] = 'Alamat kegiatan harus diisi.';
    } elseif (strlen($request->alamat_kegiatan) > 255) {
        $errors['alamat_kegiatan'] = 'Alamat kegiatan tidak boleh lebih dari 255 karakter.';
    }

    if (!$request->filled('tanggal') || !strtotime($request->tanggal)) {
        $errors['tanggal'] = 'Tanggal kegiatan harus diisi dan merupakan tanggal yang valid.';
    }

    // Validasi file berita
    for ($i = 1; $i <= 48; $i++) {
        if ($request->hasFile("berita{$i}")) {
            $file = $request->file("berita{$i}");
            if (!$file->isValid()) {
                $errors["berita{$i}"] = "File untuk berita {$i} tidak valid.";
            } elseif (!in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png'])) {
                $errors["berita{$i}"] = "File untuk berita {$i} harus berupa gambar JPG atau PNG.";
            }
        } else {
            $errors["berita{$i}"] = "File untuk berita {$i} harus diisi.";
        }
    }

    // Jika ada error, kembalikan dengan pesan error
    if (!empty($errors)) {
        return redirect()->back()->withErrors($errors)->withInput();
    }

    // Inisialisasi array untuk menyimpan path file
    $beritaPaths = [];

    // Loop untuk menyimpan file dari berita1 hingga berita48
    for ($i = 1; $i <= 48; $i++) {
        if ($request->hasFile("berita{$i}")) {
            // Jika ada file, simpan dan ambil path-nya
            $beritaPaths["berita{$i}"] = $request->file("berita{$i}")->store("dokumentasipelatihan/berita{$i}", 'public');
        } else {
            // Jika file tidak ada, atur nilainya menjadi null
            $beritaPaths["berita{$i}"] = null; // Pastikan kolom di database diizinkan untuk null
        }
    }

    // Buat entri baru di database
    kegiatanjaskon::create(array_merge($request->only([
        'pengawasanlokasi_id',
        'judul_kegiatan',
        'alamat_kegiatan',
        'tanggal',
        'user_id',
    ]), $beritaPaths));

    // Flash message untuk sukses
    session()->flash('create', 'Data Berhasil Ditambahkan!');

    // Redirect ke halaman yang sesuai
    return redirect()->route('dokumentasipelatihan.index'); // Ganti dengan nama route yang sesuai
}



// Chart untuk Tahun Bimtek
// var chart4 = new CanvasJS.Chart("bimtekchartContainer", {
//     exportEnabled: true,
//     animationEnabled: true,
//     title: {
//         text: "{{$judultahunbimtek}}",
//         fontFamily: "Roboto",
//         fontSize: 15
//     },
//     legend: {
//         cursor: "pointer",
//         itemclick: explodePie
//     },
//     data: [{
//         type: "pie",
//         showInLegend: true,
//         toolTipContent: "{name}: <strong>{y}%</strong>",
//         indexLabel: "{name} - {y}%",
//         dataPoints: {!! json_encode($data_tahun_bimtek) !!} // Update dataPoints
//     }]
// });
// chart4.render();



<div class="posts">

    <h1 style="color: #09ff00d7">Berita Terakhir</h1>
    @foreach ($databerita->slice(-4) as $item)
    <a href="#">
        <span style="font-size: 9px;">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('j F Y') }}</span>
        {{$item->judul}}
    </a>
@endforeach

</div>


#06f933

KODE WARNA HIJAU :  #00820d



{
    "private": true,
    "type": "module",
    "scripts": {
        "dev": "vite",
        "build": "vite build"
    },
    "devDependencies": {
        "@tailwindcss/forms": "^0.5.2",
        "@vitejs/plugin-vue": "^5.2.1",
        "alpinejs": "^3.4.2",
        "autoprefixer": "^10.4.20",
        "axios": "^1.6.4",
        "laravel-vite-plugin": "^1.0.0",
        "postcss": "^8.5.1",
        "tailwindcss": "^3.4.17",
        "vite": "^5.4.14",
        "vite-plugin-laravel": "^0.3.1"
    }
}


    <!-- ! Start Contact Us -->
    <div class="contact-us" id="contact-us">
        <div class="header" data-aos="fade-up" data-aos-delay="100">
          <div class="title">Contact Us</div>
          <p class="para">Lorem ipsum dolor sit amet</p>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-12" data-aos="fade-up" data-aos-delay="400">
              <div class="address">
                <h5>Address:</h5>
                <p class="text-black-50 fw-normal" style="font-size: 15px; margin-bottom: 30px;">11 West Town<br>PBo
                  12345,
                  United States</p>
              </div>
              <div class="phone">
                <h5>Phone:</h5>
                <p class="text-black-50 fw-normal" style="font-size: 15px; margin-bottom: 30px;">+1 1234 56 780<br>+1
                  1234
                  56 780</p>
              </div>
              <div class="email">
                <h5>Email:</h5>
                <p class="text-black-50 fw-normal" style="font-size: 15px; margin-bottom: 30px;">
                  info@example.com<br>email@example.com</p>
              </div>
            </div>
            <div class="col-lg-8 col-sm-12">
              <form id="contact-form">
                <div class="row">
                  <!-- ! Username Field -->
                  <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="input-group has-validation">
                      <span class="input-group-text">@</span>
                      <div class="form-floating flex-grow-1">
                        <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" required>
                        <label for="floatingInputGroup1">Username</label>
                      </div>
                      <div class="invalid-feedback">
                        Please Enter Your Username.
                      </div>
                    </div>
                  </div>
                  <!-- ! Email Field -->
                  <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="input-group has-validation">
                      <div class="form-floating flex-grow-1">
                        <input type="email" class="form-control" id="floatingInputGroup2" placeholder="Email" required>
                        <label for="floatingInputGroup2">Email</label>
                      </div>
                      <div class="invalid-feedback">
                        Please Enter Your Email.
                      </div>
                    </div>
                  </div>
                  <!-- ! Subject Field -->
                  <div class="form-floating col-lg-12 mb-3 flex-grow-1" data-aos="fade-up" data-aos-delay="800">
                    <input type="text" class="form-control" id="floatingSubject" placeholder="Subject" required>
                    <label for="floatingSubject" class="ps-4">Subject</label>
                  </div>
                  <!-- ! Comments Field -->
                  <div class="col-lg-12 mb-3" data-aos="fade-up" data-aos-delay="1000">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 200px" required></textarea>
                      <label for="floatingTextarea2">Comments</label>
                    </div>
                  </div>
                  <!-- ! Submit Button -->
                  <div class="col-lg-8 col-md-12" data-aos="fade-up" data-aos-delay="1200">
                    <button type="submit" class="btn btn-primary rounded-pill">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- ! End Contact Us -->


      {{-- kode warna hijau  --}}

      #09ff00d7


orange
      #fdba00
      #2ECC71 hijau modern

      #ffae00


      BERITA SISTEM INFORMASI


      <section class="portfolio-section" style="margin-top: -100px;">
		<div class="section-title-box text-center">
			<div class="section-tagline">Berita Jasa Konstruksi Dinas Pekerjaan Umum dan Penataan Ruang Pemerintah Kabupaten Blora</div>
			<h2 class="section-title">Sistem Informasi Pembina Jasa Konstruksi</h2>
		</div><!-- section-title-box -->
		<div class="portfolio-content conatainer-fluid">
			<div class="portfolio-carousel owl-carousel owl-theme">

                <div class="item">
					<div class="portfolio-card">
                        <img src="/assets/00_dokmasjaki/01_berita/berita1.JPG" class="img-fluid" alt="img-9" loading="lazy">
                        <div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

                <div class="item">
					<div class="portfolio-card">
						<img src="/assets/00_dokmasjaki/01_berita/berita2.JPG" class="img-fluid" alt="img-10" loading="lazy">
						<div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

                <div class="item">
					<div class="portfolio-card">
						<img src="/assets/00_dokmasjaki/01_berita/berita3.JPG" class="img-fluid" alt="img-10" loading="lazy">
						<div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

                <div class="item">
					<div class="portfolio-card">
						<img src="/assets/00_dokmasjaki/01_berita/berita4.JPG" class="img-fluid" alt="img-10" loading="lazy">
						<div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

                <div class="item">
					<div class="portfolio-card">
						<img src="/assets/00_dokmasjaki/01_berita/berita5.jpg" class="img-fluid" alt="img-10" loading="lazy">
						<div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

                <div class="item">
					<div class="portfolio-card">
						<img src="/assets/00_dokmasjaki/01_berita/berita6.JPG" class="img-fluid" alt="img-10" loading="lazy">
						<div class="portfolio-card-meta">
							<div class="portfolio-card-text"><a href="portfolio-details.html">Jasa Konstruksi</a></div>
							<div class="portfolio-card-title"><a href="portfolio-details.html">Kabupaten Blora</a></div>
						</div><!-- portfolio-card-meta -->
					</div><!--portfolio-card-->
				</div><!-- item -->

			</div><!--portfolio-carousel-->
		</div><!--portfolio-content-->
	</section><!--portfolio-section-->

{{-- ================================================== --}}



# ssh -p 65002 u782898958@153.92.10.241
# SSH SIPJAKI PEMERINTAH KABUPATEN BLORA
# PASSWORD Adminadmin123$$


# JANGAN LUPA UNTUK MERUBAH DATABAS EYANG SUDHA DI RUBAH
# SSH TERBARU UNTUK MASJAKI BLORA ssh -p 65002 u123385283@46.202.138.41
# password SipjakiBlora$$123


#FFD100 kuning emas pupr

background: linear-gradient(to bottom, green, #FFD100, white); border-radius:20px;
