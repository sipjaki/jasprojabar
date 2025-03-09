
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>{{$title}}</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="/assets/login/css/bootstrap-login-form.min.css" />

  <link rel="icon" href="/assets/icon/logokabupatenblora.png"  type="image/x-icon">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body>
  <!-- Start your project here-->

  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    .h-custom {
      height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }

    /* Container utama */
.custom-container {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

/* Row untuk logo dan teks */
.custom-row {
    display: flex;
    flex-direction: row;
    align-items: center;
    text-align: center;
    gap: 20px;
}

/* Logo container */
.custom-logo-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
}

/* Logo responsif */
.custom-logo {
    width: 100px;
}

@media (max-width: 768px) {
    .custom-logo {
        width: 80px;
    }
}

/* Text container */
.custom-text-container {
    text-align: left;
}

@media (max-width: 768px) {
    .custom-text-container {
        text-align: center;
    }
}

/* Header title */
.custom-header-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 2rem;
    font-weight: bold;
    text-align: center;
}

@media (max-width: 768px) {
    .custom-header-title {
        font-size: 1.8rem;
    }
}

/* Warna tulisan */
.custom-title-white {
    font-weight: bold;
    font-style: italic;
    color: black;
}

.custom-title-green {
    font-weight: bold;
    font-style: italic;
    color: #064420;
}

/* Deskripsi */
.custom-header-description {
    font-family: 'Montserrat', sans-serif;
    font-size: 1rem;
    color: black;
    font-weight: bold;
    text-align: center;
}

@media (max-width: 768px) {
    .custom-header-description {
        font-size: 0.9rem;
    }
}

  </style>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="custom-container">
            <div class="custom-row">
                <!-- Logo -->
                <div class="custom-logo-container">
                    <img src="/assets/icon/logokabupatenblora.png" class="custom-logo" alt="Logo Kabupaten Blora" loading="lazy">
                    <img src="/assets/icon/pupr.png" class="custom-logo" alt="Logo PUPR" loading="lazy">
                </div>

                <!-- Teks -->
                <div class="custom-text-container">
                    <h1 class="custom-header-title">
                        <span class="custom-title-white">MASJAKI</span>
                        <span class="custom-title-green">BLORA</span>
                    </h1>
                    <p class="custom-header-description">
                        Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora
                    </p>
                </div>
            </div>
        </div>

        {{-- <h4>Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora Provinsi Jawa Tengah</h4> --}}
       </div>
           <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              {{-- <a href="#!" class="text-body">Forgot password?</a> --}}
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="button" class="btn btn-dark btn-lg"
                  style="background-color: #064420; color: white; padding-left: 2.5rem; padding-right: 2.5rem; border: none;"
                  onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                  onmouseout="this.style.backgroundColor='#064420'; this.style.color='white';">
                  Login
                </button>
                <p class="small fw-bold mt-2 pt-1 mb-0">
                  Don't have an account?
                  <a href="/404" class="link-danger">Register</a>
                </p>
              </div>

          </form>
        </div>
      </div>
    </div>

    <div class="d-flex flex-column text-center justify-content-center py-4 px-4 px-xl-5"
    style="background: rgb(3, 69, 3); display: flex; align-items: center;">

   <!-- Logo -->
   <div class="d-flex justify-content-center align-items-center" style="gap: 15px; margin-bottom: 10px;">
       <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="Logo Kabupaten Blora" width="20" loading="lazy">
       <img src="/assets/icon/pupr.png" class="img-fluid" alt="Logo PUPR" width="20" loading="lazy">
   </div>

   <!-- Copyright -->
   <div class="text-white" style="font-size: 14px; font-weight: 400;">
       © Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora Provinsi Jawa Tengah
   </div>

</div>

</section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="/assets/login/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>
