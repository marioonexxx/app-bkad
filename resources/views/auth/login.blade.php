<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon"><!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet"><!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/themify.css') }}"><!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start--><!-- Plugins css Ends--><!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/vendors/bootstrap.css') }}"><!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('cuba/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cuba/assets/css/responsive.css') }}">
    <script defer src="{{ asset('cuba/assets/css/color-1.js') }}"></script>
    <script defer src="{{ asset('cuba/assets/css/color-2.js') }}"></script>
    <script defer src="{{ asset('cuba/assets/css/color-3.js') }}"></script>
    <script defer src="{{ asset('cuba/assets/css/color-4.js') }}"></script>
    <script defer src="{{ asset('cuba/assets/css/color-5.js') }}"></script>
    <script defer src="{{ asset('cuba/assets/css/color-6.js') }}"></script>
    <script defer src="{{ asset('cuba/assets/css/responsive.js') }}"></script>
    <script defer src="{{ asset('cuba/assets/css/style.js') }}"></script>
    <link href="{{ asset('cuba/assets/css/color-1.css') }}" rel="stylesheet">
    <link href="{{ asset('cuba/assets/css/color-2.css') }}" rel="stylesheet">
    <link href="{{ asset('cuba/assets/css/color-3.css') }}" rel="stylesheet">
    <link href="{{ asset('cuba/assets/css/color-4.css') }}" rel="stylesheet">
    <link href="{{ asset('cuba/assets/css/color-5.css') }}" rel="stylesheet">
    <link href="{{ asset('cuba/assets/css/color-6.css') }}" rel="stylesheet">
    <link href="{{ asset('cuba/assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('cuba/assets/css/style.css') }}" rel="stylesheet">
</head>

<body><!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 d-none d-xl-block p-0">
                <div class="w-100 h-100"
                    style="
        background-image: url('{{ asset('cuba/assets/images/login/2.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;">
                </div>
            </div>

            <div class="col-xl-5 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div class="text-center">
                            <img src="{{ asset('crafto/images/logo/logo-mbd.png') }}" alt="Logo BPKAD MBD"
                                style="max-height: 60px;" class="mb-2">
                            <h4 class="fw-bold text-dark m-0">e-SPPM ( Sistem Pengarsipan Dokumen Elektronik <br>Surat
                                Perintah Pembayaran dan Surat Perintah Membayar)</h4>
                            <span class="text-secondary">Badan Pengelola Keuangan dan Aset Daerah <br> Kabupaten Maluku
                                Barat Daya</span>
                        </div>


                        <div class="login-main mt-5">
                            <form class="theme-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <h4>Silahkan login</h4>
                                <p>Masukan email dan password anda</p>
                                <div class="form-group"><label class="col-form-label">Email Address</label><input
                                        class="form-control" type="email"  name="email" required="" placeholder="test@gmail.com">
                                </div>
                                <div class="form-group"><label class="col-form-label">Password</label>
                                    <div class="form-input position-relative"><input class="form-control"
                                            type="password" name="password" required=""
                                            placeholder="*********" >
                                        <div class="show-hide"><span class="show"> </span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="form-check"><input class="checkbox-primary form-check-input"
                                            id="checkbox1" type="checkbox"><label class="text-muted form-check-label"
                                            for="checkbox1">Remember password</label></div><button
                                        class="btn btn-primary btn-block w-100 mt-3" type="submit">Sign in</button>
                                </div>

                                <p class="mt-4 mb-0 text-center">Jika OPD Anda belum terdaftar Hubungi Admin BKAD<a class="ms-2"
                                        href="#">Kontak WA</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- latest jquery-->
        <script src="{{ asset('cuba/assets/js/jquery.min.js') }}"></script><!-- Bootstrap js-->
        <script src="{{ asset('cuba/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script><!-- feather icon js-->
        <script src="{{ asset('cuba/assets/js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('cuba/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
        <!-- scrollbar js--><!-- Sidebar jquery-->
        <script src="{{ asset('cuba/assets/js/config.js') }}"></script><!-- Plugins JS start--><!-- Plugins JS Ends--><!-- Theme js-->
        <script src="{{ asset('cuba/assets/js/script.js') }}"></script>
        <script src="{{ asset('cuba/assets/js/script1.js') }}"></script>
    </div>
</body>

</html>
