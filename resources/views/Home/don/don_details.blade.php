<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CuraVibe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/1/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/1/img/favicon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/1/vendor/aos/aos.css') }}"rel="stylesheet">
  <link href="{{ asset('assets/1/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/1/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/1/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/1/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/1/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/1/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') }}">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/1/css/style.css') }}" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
 @include('home/components.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Acceuil</a></li>
          <li>Produit</li>
        </ol>
        <h2> Produit</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('assets/1/img/' . $donation->image) }}" alt="{{ $donation->nom }}" width="100" height="700">

                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{ $donation->nom }}</h3>
              <ul>
               
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Description</h2>
              <p>{{ $donation->description }}</p>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('home/components.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/1/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/1/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/1/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/1/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/1/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/1/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/1/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/1/js/main.js') }}"></script>

</body>

</html>