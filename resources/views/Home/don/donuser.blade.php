
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Curavibe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<style>
    footer{
        position:fixed;
        bottom: 0%;
        width: 100%;
        margin-right: 5%;
    }
    </style>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    
  <!-- Template Main CSS File -->
  <link href="assets/1/css/style.css" rel="stylesheet">


  <!-- MATERIAL DESIGN ICONIC FONT -->
  <link rel="stylesheet" href="assets/5/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
          
  <!-- STYLE CSS -->
  <link rel="stylesheet" href="assets/5/css/style.css">
</head>

<body>
   
    <div class="container-xxl position-relative bg-white d-flex p-0">
    


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="/ongoing" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class=""></i>Curavibe</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                       
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{Session::get('user')->name}}</h6>
                        
                    </div>
                </div>
                <div class="navbar-nav w-100">
                  
                 
                    <a href="/ongoing" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Ongoing</a>
                    <a href="/history" class="nav-item nav-link"><i class="fas fa-history"></i></i>History</a>
                    <a href="/allergy" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Allergies</a>
                    <a href="/traitment" class="nav-item nav-link"><i class='fas fa-pills'></i>New Traitment</a>
                    <a href="/mypharmacie" class="nav-item nav-link"><i class="fa fa-table me-2"></i>mypharmacie</a>
                    <a href="/adddon" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Ajouter un don</a>
                    <a href="/historydon" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Don history</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
               
                <div class="navbar-nav align-items-center ms-auto">
                   
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                           
                            <span class="d-none d-lg-inline-flex">{{Session::get('user')->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="/profile" class="dropdown-item">My Profile</a>
                       
                            <a href="/signout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="col-12">
                    <div class="wrapper">
                        <div class="inner">
                            <div class="image-holder">
                                <img src="assets/5/images/registration-form-6.jpg" alt="">
                            </div>
                            <form action="{{ route('donation.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h3>Ajouter un don </h3>
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
                                <input type="hidden" name="utilisateur" value="{{ Session::get('user')->id }}">
                                <input type="hidden" name="numero" value="{{ Session::get('user')->phone }}">

                                <button type="submit">Ajouter <i class="zmdi zmdi-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->






            <!-- Footer Start -->
        <footer >
            
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            &copy; <a href="#">Curavibe</a>, All Right Reserved. 

                        </div>
                       
                      
                    </div>
                </div>
            </div>
      
            <!-- Footer End -->
        </footer>
    </div>
    
        <!-- Content End -->


      
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
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
    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>