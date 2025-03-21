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
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h2 style="color: black;" class="card-title">Data Sub Klasifikasi Layanan : {{$subdata->namalengkap}} </h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <div style="overflow-x: auto; white-space: nowrap;">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px; text-align:center;">No</th>
                                            <th style="width: 300px; text-align:center;">Nama Pengurus</th>
                                            <th style="width: 300px; text-align:center;">Sub Klasifikasi Layanan</th>
                                            <th style="width: 100px; text-align:center;">Kode</th>
                                            <th style="width: 200px; text-align:center;">Kualifikasi</th>
                                            <th style="width: 200px; text-align:center;">Penerbit</th>
                                            <th style="width: 100px; text-align:center;">Tanggal Terbit</th>
                                            <th style="width: 100px; text-align:center;">Masa Berlaku</th>
                                            <th style="width: 200px; text-align:center;">Nama PSJK</th>
                                            <th style="width: 300px; text-align:center;">Sub Klasifikasi Badan Usaha</th>
                                            <th style="width: 200px; text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr class="align-middle">
                                            <td style="text-align: center;">{{ $loop->iteration }}</td>
                                            {{-- <td style="text-align: center;">{{ $item->nama_pengurus }}</td> --}}
                                            <td style="text-align: center;">{{ $item->sub_klasifikasi_layanan }}</td>
                                            <td style="text-align: center;">{{ $item->kode }}</td>
                                            <td style="text-align: center;">{{ $item->kualifikasi }}</td>
                                            <td style="text-align: center;">{{ $item->penerbit }}</td>
                                            <td style="text-align: center;">{{ $item->tanggal_terbit }}</td>
                                            <td style="text-align: center;">{{ $item->masa_berlaku }}</td>
                                            <td style="text-align: center;">{{ $item->nama_psjk }}</td>
                                            <td style="text-align: center;">{{ $item->sub_kualifikasi_bu }}</td>
                                            <td style="text-align: center;">
                                                <a href="/404" class="btn btn-sm btn-info me-2" title="Show">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a href="/404" class="btn btn-sm btn-warning me-2" title="Update">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete"
                                                   data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                   data-judul="{{ $item->nama_pengurus }}" onclick="setDeleteUrl(this)">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">

                                <a href="/bebujkkonstruksi">
                                    <button
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                                    style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                    <!-- Ikon Kembali -->
                                    <i class="fa fa-arrow-left" style="margin-right: 8px;"></i>
                                    Kembali
                                </button>
                            </a>
                        </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
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
