<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Folio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("img/favicon.png") }}" rel="icon">
  <link href="{{ asset("img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href='{{asset("vendor/bootstrap/css/bootstrap.min.css")  }}' rel="stylesheet">
  <link href='{{asset("vendor/bootstrap-icons/bootstrap-icons.css")  }}' rel="stylesheet">
  <link href='{{asset("vendor/boxicons/css/boxicons.min.css")  }}' rel="stylesheet">
  <link href='{{asset("vendor/glightbox/css/glightbox.min.css")  }}' rel="stylesheet">
  <link href='{{asset("vendor/swiper/swiper-bundle.min.css")  }}' rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href='{{ asset("css/style.css") }}' rel="stylesheet">

  <!-- =======================================================
  * Template Name: Folio
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


@include("master.header")

@include("master.")


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src='{{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}'></script>
  <script src='{{ asset("vendor/glightbox/js/glightbox.min.js") }}'></script>
  <script src='{{ asset("vendor/isotope-layout/isotope.pkgd.min.js") }}'></script>
  <script src='{{ asset("vendor/swiper/swiper-bundle.min.js") }}'></script>
  <script src='{{ asset("vendor/typed.js/typed.umd.js") }}'></script>
  <script src='{{ asset("vendor/php-email-form/validate.js") }}'></script>

  <!-- Template Main JS File -->
  <script src='{{ asset("js/main.js") }}'></script>

</body>

</html>
