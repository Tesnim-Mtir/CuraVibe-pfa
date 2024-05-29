
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
  <!-- sweet alert -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.2/sweetalert2.min.css">
 
 <!-- Template Main CSS File -->
  <link href="assets/1/css/style.css" rel="stylesheet">


      <link rel="stylesheet" href="assets/2/style.css">
    <link rel="stylesheet" href="assets/2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/2/css/animate.css">
    <link rel="stylesheet" href="assets/2/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/2/css/owl.theme.css">
    <link rel="stylesheet" href="assets/2/css/owl.carousel.css">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
    <link href='https fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

<body id="1">

  <!-- ======= Header ======= -->
  @include('Home.components.headerdon')
  <!-- End Header -->

  <!-- REGISTRATION AND LOGIN CONTAINER -->
 <section  >
    <div class="container hi">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
            <img src="assets/2/images/front1.png" alt="Front Image" >
           
            </div>
            <div class="back">
                <img class="backImg" src="assets/2/images/back.png" alt="">
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                @if (Session::has('status')   )
                <div class="alert alert-danger">
                    {{Session::get('status')}}
                </div>
                    
             
                    
                @endif
                <div class="login-form">
                    <div class="title">Log in</div>
                    <form action="login1" method="POST">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name ="password" placeholder="Enter your password" required>
                            </div>
                               

                            <div class="button input-box">
                                <input type="submit" value="Submit">
                            </div>

                            <div class="text sign-up-text">You don't have an account? <br><label for="flip">  Sign up Now</label></div>

                        </div>
                    </form>
                </div>
                <div class="signup-form">
                    <div class="title">Sign up</div>
                    <form action="/signup" method="post">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name" placeholder="Enter your Name" required>
                            </div> 
                          

                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-phone"></i>
                                <input type="text" name="phone" placeholder="Enter your phone" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Repeat password" required>
                            </div>
                            <input type="hidden" name="signupSubmit" value="true">

                            <div class="button input-box">
                                
                                <input type="submit" value="Submit">
                            </div>

                            <div class="text sign-up-text">You have an account<br><label for="flip">Log in </label></div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.2/sweetalert2.all.min.js"></script>

  


</body>
  
</html>