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

              <div class="col-sm-6"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div>



            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>



        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Halaman Pengaturan {{$title}}</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">No</th>
                          <th style="width: 400px">Judul</th>
                          <th style="width: 500px">Gambar/Foto</th>
                          <th style="width: 100px">Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($data as $item )

                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{!!$item->judul!!}}</td>
                            <td>
                                <img src="{{ asset('storage/'. $item->header) }}" alt="Image" width="300">
                            </td>

                            {{-- <td>
                                <div class="progress progress-xs">
                                    <div
                                    class="progress-bar progress-bar-danger"
                                    style="width: 55%"
                                    ></div>
                                </div>
                            </td> --}}
                            <td>
                                <!-- Show Icon -->
                                <a href="/404" class="btn btn-sm btn-info" title="Show">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <!-- Update Icon -->
                                <a href="/404" class="btn btn-sm btn-warning" title="Update">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <!-- Delete Icon -->
                                <a href="/404" class="btn btn-sm btn-danger" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                            {{-- <td><span class="badge text-bg-danger">55%</span></td> --}}
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
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


      @include('backend.00_administrator.00_baganterpisah.02_footer')
