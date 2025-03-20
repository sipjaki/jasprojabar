<style>
    /* Default height for small devices (mobile phones) */
    /* Adjust height for tablets and up (medium screens) */
    @media (min-width: 576px) {
        .vh-custom {
            height: 80vh;
        }
    }

    /* Adjust height for laptops and large screens */
    @media (min-width: 992px) {
        .vh-custom {
            height: 80vh;
        }
    }

    /* Responsive typography and spacing */
    @media (max-width: 576px) {
        .header-title {
            font-size: 1.8rem; /* Adjusted font size */
        }

        .header-description {
            font-size: 0.9rem;
        }

        .container-fluid {
            padding: 20px;
        }
    }

    @media (max-width: 360px) {
        .header-title {
            font-size: 1.5rem;
        }

        .header-description {
            font-size: 0.8rem;
        }
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Silahkan Login !</title>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />


</head>

<body>
  <!-- Start your project here-->
  <section style="height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0; padding: 0; overflow: hidden; width: 100%;">
    <div class="container-fluid h-custom" style="height: auto;">
        <div class="row d-flex justify-content-center align-items-center">
            <!-- Large screen layout: Image + Text on the left, Form on the right -->
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center flex-column text-center text-md-left" style="gap: 15px;">

                <!-- Images will resize based on screen size -->
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="Logo Kabupaten Blora" width="125" loading="lazy">
                    <img src="/assets/icon/pupr.png" class="img-fluid" alt="Logo PUPR" width="125" loading="lazy">
                </div>

                <!-- Header text and description -->
                <div class="header-text">
                    <h1 class="header-title" style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: bold;">
                        <span class="header-title-white" style="font-weight: bold; font-style: italic; color: black;">MASJAKI</span>
                        <span class="header-title-green" style="font-weight: bold; font-style: italic; color: #064420;">BLORA</span>
                    </h1>
                    <p class="header-description" style="font-family: 'Montserrat', sans-serif; font-size: 1rem; color: black; font-weight: bold;">
                        Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora
                    </p>
                </div>
            </div>

            <!-- Form login section (right side for large screens) -->
            <div class="col-12 col-md-4">
                <form action="/login" method="post">
                    @csrf

                    <!-- Email input -->
                    <div class="mb-4">
                        <input type="text" name="email" class="form-control rounded-full @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}" style="padding: 10px 15px;" />
                        <label class="form-label" for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control rounded-full @error('password') is-invalid @enderror" id="password" placeholder="Password" style="padding: 10px 15px;" />
                        <label class="form-label" for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- General login error message -->
                    @if($errors->has('pesanlogin'))
                        <div class="alert alert-danger mb-2">{{ $errors->first('pesanlogin') }}</div>
                    @endif

                    <!-- Submit Button -->
                    <div class="text-center text-lg-start mt-4 pt-2">
                       <!-- Login Button with Modern Icon -->
                                <button
                                type="submit"
                                class="btn btn-dark btn-lg"
                                style="background-color: #064420; color: white; padding-left: 2.5rem; padding-right: 2.5rem; border: none;"
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                onmouseout="this.style.backgroundColor='#064420'; this.style.color='white';"
                                >
                                <i class="fas fa-sign-in-alt me-2"></i> <!-- Font Awesome Login Icon -->
                                Login
                                </button>

                        <p class="small fw-bold mt-2 pt-1 mb-0">
                            Belum Punya Akun? <a href="/404" class="link-danger">Daftar</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="d-flex flex-column text-center justify-content-center py-4 px-4 px-xl-5" style="background: rgb(3, 69, 3); display: flex; align-items: center;">
        <div class="d-flex justify-content-center align-items-center" style="gap: 15px; margin-bottom: 5px;">
            <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="Logo Kabupaten Blora" width="20" loading="lazy">
            <img src="/assets/icon/pupr.png" class="img-fluid" alt="Logo PUPR" width="20" loading="lazy">
        </div>

        <div class="text-white" style="font-size: 14px; font-weight: 400;">
            © Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora Provinsi Jawa Tengah
        </div>
    </div>
</section>

  <!-- MDB -->
  <script type="text/javascript" src="/assets/login/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>
