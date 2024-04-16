

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CuraVibe</title>
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
         <li><a class="nav-link   scrollto" href="#portfolio">Don</a></li>
         <li><a class="nav-link   scrollto" href="/ongoing">Account: {{Session::get('user')->name}}</a></li>
  
         <li><a class="getstarted scrollto" href="register">Inscription</a></li>
                  </a></li>
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- =======  Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>"Votre pharmacie à domicile"</h1>
          <h2>Simplifiez votre parcours santé avec CuraVibe, votre compagnon numérique pour gérer médicaments, produits de santé, et bien plus encore.
          </h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Commencer</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/1/img/logo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End  -->
  <main id="main">

     
     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>À propos de nous</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            Bienvenue sur CuraVibe ! Notre objectif est de renforcer votre bien-être en un clic en fournissant :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Organiser.</li>
              <li><i class="ri-check-double-line"></i> suivre.</li>
              <li><i class="ri-check-double-line"></i> rendant la gestion des soins de santé facile.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Chez CuraVibe, nous comprenons l'importance d'un accès fluide aux essentiels de soins de santé, notamment en ce qui concerne la gestion des médicaments, des produits parapharmaceutiques et du matériel médical. Notre plateforme intuitive est soigneusement élaborée pour autonomiser les utilisateurs, facilitant le suivi rapide et efficace des médicaments, des produits et des ressources de santé.

            </p>
            <a href="#services" class="btn-learn-more">En savoir plus</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

     <!-- ======= Services Section ======= -->
     <section id="services" class="why-us section-bg">
      <div class="section-title">
        <h2>Services</h2>
      </div>
      <div class="container-fluid" data-aos="fade-up">


        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Connectivité en Santé : <strong> Autonomisez-vous</strong></h3>
              <p>
              Organisez, suivez et partagez vos essentiels de santé de manière transparente, simplifiant la gestion des soins de santé.
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> 
Gestion des stocks de médicaments :

<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                     Les utilisateurs peuvent facilement saisir, mettre à jour et suivre leur inventaire de médicaments sur le site.
                    </p>
                    <p>
                    Recevez des rappels opportuns pour les renouvellements de médicaments, les ajustements de dosage et les dates d'expiration.                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Suivi des produits de santé :
                    <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Permettez aux utilisateurs de gérer et de surveiller les produits parapharmaceutiques et le matériel médical en leur possession.                      </p>
                  <p>
                    Permettez aux utilisateurs de recevoir des alertes pour les rappels de produits ou les mises à jour liées à leurs articles de santé.                       </p>
               </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Recyclage des médicaments et don d'équipement :

 <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Mettez en place une fonctionnalité permettant aux utilisateurs de recycler de manière écologique les médicaments inutilisés ou périmés.                     </p>
                    <p>
                    Facilitez le don d'équipements médicaux excédentaires à des particuliers ou des organisations dans le besoin.                     </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/1/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

  

 

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Inscrivez-vous maintenant</h3>
            <p> Découvrez une nouvelle manière d'accéder aux soins de santé.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Inscrivez-vous</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
 <!-- ======= Don Section ======= -->
 <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Don</h2>
          <p>Les utilisateurs peuvent généreusement offrir des équipements médicaux excédentaires pour répondre aux besoins de ceux qui en ont le plus besoin.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/1/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/1/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/1/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/1/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/1/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/1/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/1/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/1/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/1/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/1/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/1/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/1/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/1/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/1/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/1/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/1/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->



 
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
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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