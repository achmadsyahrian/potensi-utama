<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Universitas Potensi Utama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('landing/assets/img/Logopotensiutama.png')}}" rel="icon">
  <link href="{{ asset('landing/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('landing/assets/css/main.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  @include('landing.partials.header')
  <!-- End Header -->

  @yield('app')

  <!-- ======= Footer ======= -->
  @include('landing.partials.footer')
  <!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('landing/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('landing/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('landing/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('landing/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('landing/assets/js/main.js')}}"></script>

</body>

</html>