
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CuraVIbe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/1/img/icon.png" rel="icon">
<link href="assets/1/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  
  <link href="assets/1/css/style.css" rel="stylesheet">

  
</head>

<body>

   <!-- ======= Header ======= -->
   @include('home.components.header')
 <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Acceuil</a></li>
          <li>Cabinet</li>
        </ol>
        <h2>Cabinet</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <!-- ======= Pharmacy nearby Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            @foreach($cliniques as $clinique)
          <div class="section-title">
            <div class="section-title">
                <h2>Les Cabinets médicaux de {{ $selectedRegion }}</h2>
                <p>Cabinets médicaux ouverts à  {{ date("h:i A", strtotime($selectedTime)) }}</p>
            </div></div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img">
                        <img src="{{ asset('assets/1/img/' . $clinique->image) }}" class="img-fluid" alt="{{ $clinique->nom }}">
                    </div>
                    <div class="portfolio-info">
                        <h4>{{ $clinique->nom }}</h4>
                        <p>{{ $clinique->description }}</p>
                        <p>{{ date("h:i A", strtotime($clinique->open_time)) }} - {{ date("h:i A", strtotime($clinique->close_time)) }}</p>
                        <p>Adresse: {{ $selectedRegion }} -{{ $clinique->location }} </p>

{{--                         <a href="{{ route('pharmacy.details', ['id' => $clinique->id]) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
 --}}                    </div>
                </div>
            @endforeach
        </div>
        
        
      </section><!-- End Portfolio Section -->
       <!-- ======= Pharmacies Section ======= -->
<!-- ======= Pharmacies Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="section-title">
      <h2>Cabinets Médicaux</h2>
    </div>
    <div class="main-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="content">
      <h2 style="color: #47b2e4;"> <strong>Trouver des cabinets médicaux à proximité</strong></h2>
            </div>
          </div>
          <div class="col-lg-12">
            <form id="search-form" name="gs" method="POST" action="{{ route('search.cliniques') }}" role="search">
              @csrf
              <div class="row">
                <div class="col-lg-3 align-self-center">
                    <fieldset>
                        <select name="area" class="form-select" aria-label="Area" id="chooseCategory" >
                            <option value="Monastir">Monastir</option>
                            <option value="Sousse">Sousse</option>
                            <option value="Mahdia">Mahdia</option>
                            <option value="Tunis">Tunis</option>
  
                        </select>
                    </fieldset>
                </div>
                <div class="col-lg-3 align-self-center">
                    <fieldset>
                        <input type="time" name="time" class="searchText" placeholder="Enter Prefered Time" autocomplete="on" >
                    </fieldset>
                </div>
                <div class="col-lg-3 align-self-center">
                 
                </div>
                <div class="col-lg-3">                        
                    <fieldset>
                        <button  class="main-button"><i class="fa fa-search"></i>Rechercher maintenant</button>
                    </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- End Portfolio Section -->

      </div>
    </section>

  </main><!-- End #main -->

  @include('home.components.footer')
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/1/vendor/aos/aos.js"></script>
  <script src="assets/1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/1/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/1/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/1/js/main.js"></script>

</body>

</html>