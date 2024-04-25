
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

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
     

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>Curavibe@CuraVibe.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Numéro:</h4>
              <p>+216 74 512 486</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51805.742951773944!2d10.810439599999999!3d35.75427185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130212b61d744f59%3A0xf284743e1d3e40ef!2sMonastir!5e0!3m2!1sfr!2stn!4v1703721373753!5m2!1sfr!2stn" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      
      <form method="POST" action="{{ route('contact.submit') }}"role="form" class="php-email-form">
          @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Votre Nom</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Votre Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Objet</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Chargement</div>
              <div class="error-message"></div>
              <div class="sent-message">Votre message a été envoyé. Merci !</div>
            </div>
            <div class="text-center"><button type="submit">Envoyer le message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

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