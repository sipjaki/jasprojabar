<style>
    /* Menambahkan hover effect */
.info-box:hover {
    background-color: white;  /* Mengubah latar belakang menjadi putih */
    color: black;  /* Mengubah warna teks menjadi hitam */
}

/* Menambahkan hover effect pada ikon di dalam info-box */
.info-box:hover .info-box-icon {
    color: black;  /* Mengubah warna ikon menjadi hitam saat hover */
}

/* Menambahkan hover effect pada progress bar agar tetap terlihat dengan baik */
.info-box:hover .progress-bar {
    background-color: #28a745;  /* Mengubah warna progress bar saat hover (sesuaikan warna jika perlu) */
}

/* Untuk memastikan teks di dalam info-box-content tetap hitam */
.info-box:hover .info-box-content .info-box-text {
    color: black;  /* Teks 'Informasi OPD' menjadi hitam saat hover */
}

.info-box:hover .info-box-content .progress-description {
    color: black;  /* Teks 'Pengaturan' menjadi hitam saat hover */
}

</style>

@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
{{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">

              <div class="col-sm-12"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div>

            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <br>

        <!-- Menampilkan pesan sukses -->

        {{-- ======================================================= --}}
        {{-- ALERT --}}

        @include('backend.00_administrator.00_baganterpisah.06_alert')

        {{-- ======================================================= --}}

        <div class="container-fluid">
            <!--begin::Row-->
  <!-- =========================================================== -->
  {{-- <h5 class="mt-4 mb-2">Info Box With <code>bg-*</code></h5> --}}
  <!--begin::Row-->

            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <a href="/">
                        <div class="info-box text-bg-success">
                            <span class="info-box-icon"> <img src="/assets/icon/pupr.png" alt="" width="40"></i> </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Informasi OPD</span>
                                {{-- <span class="info-box-number">41,410</span> --}}
                                <div class="progress"><div class="progress-bar" style="width: 70%"></div></div>
                                <span class="progress-description"> Pengaturan </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>

                </div>
                <!-- /.col -->
            </div>

  {{-- ================================================================================== --}}
            <!-- /.col -->
        </div>
        <!--end::Row-->
        </div>
                  <!--end::Container-->
        <!--end::App Content Header-->
        <!--begin::App Content-->
          <!--end::App Content-->
      </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
