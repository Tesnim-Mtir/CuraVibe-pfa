<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CuraVibe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/1/img/favicon.png" rel="icon">
  <link href="assets/1/img/favicon.png" rel="apple-touch-icon">

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


<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="assets/5/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
<!-- STYLE CSS -->
<link rel="stylesheet" href="assets/5/css/style.css">
</head>

<body>
    @include('home.components.headerdon')

    <div class="wrapper">
        <div class="inner">
            <div class="image-holder">
                <img src="assets/5/images/registration-form-6.jpg" alt="">
            </div>
            <form action="{{ route('donation.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>Ajouter un don  }</h3>
               
                <div class="form-row">
                    <input type="text" class="form-control" name="nom" placeholder="Nom" required>
                    <input type="number" class="form-control" name="quantite" placeholder="Qantité" required>
                   
                </div>
                <div class="form-row">
                    <input type="file" class="form-control" name="image" accept="image/*" required>
                    <select class="form-control" name="etat" required>
                        <option value="" disabled selected>Sélectionner l'état</option>
                        <option value="Neuf">Neuf</option>
                        <option value="Occasion">Occasion</option>
                    </select>
                    
                </div>
                <textarea name="description" placeholder="Description" class="form-control" style="height: 130px;" required></textarea>

                <button type="submit">Ajouter <i class="zmdi zmdi-long-arrow-right"></i></button>
            </form>
        </div>
    </div>
    




 <!-- ======= Footer ======= -->
 @include('home/components.footer')
 <!-- End Footer -->

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
 <script src="assets/5/js/jquery-3.3.1.min.js"></script>
<script src="assets/5/js/main.js"></script>
 <script src="assets/1/js/main.js"></script>
 <link rel="stylesheet" href="assets/5/style.css">

</body>

</html>