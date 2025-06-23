@include('frontend.android.00_fiturmenu.01_header')

<body class="font-poppins text-[#070625] bg-[#F8F8F8]">
  <section id="content" class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col overflow-x-hidden pb-[120px] relative">

    <!-- Header Background -->
    <div class="w-full h-[184px] absolute top-0 bg-cover bg-center z-0" style="background-image: url('/assets/android/iconmenu/jaspro.jpeg');"></div>

    <!-- Top Header Content -->
    <div class="relative z-10 flex flex-col gap-6 mt-[60px]">
      <div class="top-menu flex justify-between items-center px-[18px]">
        <div class="w-[42px] h-[42px]">
          <img src="/assets/android/iconmenu/logojabarpng.png" alt="icon" />
        </div>
        <p class="font-semibold text-white text-center leading-[22px] text-sm">
          Badan Kepegawaian Daerah<br>Pemerintah Provinsi Jawa Barat
        </p>
        <div class="w-[42px] h-[42px]">
          <img src="/assets/android/iconmenu/bkdjabarpng.png" alt="icon" />
        </div>
      </div>

      <!-- Card Title -->
      <form id="Details" class="group result-card-container flex flex-col gap-6">
        <div id="Contact-details" class="bg-white rounded-xl overflow-hidden mx-[18px]">
          <div class="flex p-4 items-center gap-4">
            <div class="w-12 h-12 rounded-full overflow-hidden">
              <img src="/assets/android/menunavigasi/03.png" class="object-cover w-full h-full" alt="photo">
            </div>
            <div class="flex flex-col flex-1">
              <p class="font-semibold">{{ $title }}</p>
            </div>
          </div>

          <!-- TABEL -->
          <div class="flex flex-col px-4 pb-4">
            <div class="relative bg-white rounded-xl shadow-md overflow-hidden">
              <div class="overflow-x-auto relative">
                <!-- Shadow Scroll Kiri -->
                <div class="absolute left-0 top-0 h-full w-6 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
                <!-- Shadow Scroll Kanan -->
                <div class="absolute right-0 top-0 h-full w-6 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>

                <table class="min-w-[1200px] w-full border border-[#dee2e6] text-sm whitespace-nowrap" style="margin-bottom:50px;">
                  <thead class="bg-[#d4eaff] text-[#003366]">
                    <tr>
                      <th class="px-4 py-3 border">No</th>
                      <th class="px-4 py-3 border">Nomor Permohonan</th>
                      <th class="px-4 py-3 border">Tanggal Permohonan</th>
                      <th class="px-4 py-3 border">Instansi</th>
                      {{-- <th class="px-4 py-3 border">Inti Proposal</th>
                      <th class="px-4 py-3 border">Narahubung</th>
                      <th class="px-4 py-3 border">Kontak Person</th>
                      <th class="px-4 py-3 border">Provinsi</th>
                      <th class="px-4 py-3 border">Kabupaten</th> --}}
                      <th class="px-4 py-3 border">Kuota Peserta</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($data as $index => $item)
                      <tr class="hover:bg-[#f0f8ff] transition">
                        <td class="px-4 py-2 border text-center">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 border">{{ $item->nomorproposal ?? '-' }}</td>
                        <td class="px-4 py-2 border">{{ $item->tanggalproposal ? \Carbon\Carbon::parse($item->tanggalproposal)->format('d/m/Y') : '-' }}</td>
                        <td class="px-4 py-2 border">{{ $item->instansi ?? '-' }}</td>
                        {{-- <td class="px-4 py-2 border">{{ $item->intiproposal ?? '-' }}</td>
                        <td class="px-4 py-2 border">{{ $item->narahubung ?? '-' }}</td>
                        <td class="px-4 py-2 border">{{ $item->kontakperson ?? '-' }}</td>
                        <td class="px-4 py-2 border">{{ $item->provinsi ?? '-' }}</td>
                        <td class="px-4 py-2 border">{{ $item->kabupaten ?? '-' }}</td> --}}
                        <td class="px-4 py-2 border text-center">{{ $item->kuotapeserta ?? '-' }}</td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="10" class="text-center px-4 py-4">
                          <div style="
                              font-family: 'Poppins', sans-serif;
                              color: #6c757d;
                              background-color: #f8f9fa;
                              border: 2px dashed #ced4da;
                              padding: 20px;
                              border-radius: 12px;
                              font-size: 16px;
                              animation: fadeIn 0.5s ease-in-out;">
                            <i class="bi bi-folder-x" style="margin-right: 8px; color: #dc3545;"></i>
                            Data Tidak ditemukan
                          </div>
                        </td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </form>

      @include('frontend.android.00_fiturmenu.05_keterangan')
    </div>

    @include('frontend.android.00_fiturmenu.03_android')
  </section>

  @include('frontend.android.00_fiturmenu.02_footer')

  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</body>
