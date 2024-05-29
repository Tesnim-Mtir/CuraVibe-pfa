<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Feedback Form with map</title> 
    <link rel="stylesheet" href="index.css"> 
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="crossorigin="anonymous"referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap" async defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    

    <title>mapformulaire</title>
  , <meta content="" name="description">
    <meta content="" name="keywords">

<!-- Favicons -->
    <link href="assets/1/img/icon.png" rel="icon">
    <link href="assets/1/img/icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="crossorigin=""/>
  
  <link href="assets/1/css/style.css" rel="stylesheet">
</head>

  
<body> 
   
   @include('home.components.header')
   <header id="header" class="fixed-top " style="background-color:#37517e;" >
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto">
        <a href="index.php">
            CuraVibe
        </a>
    </h1>
      <nav id="navbar" class="navbar">
        <ul>
            <ul>
       
            </ul>
          </li>
          <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#about">A Propos</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Recycle</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">Formulaire</a>
								<a class="dropdown-item" href="blog-details.html">Position</a>
							</div>
						</li>
  
         <li><a class="getstarted scrollto" href="inscription">Inscription</a></li>
                  </a></li>
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

</body> 
</html>