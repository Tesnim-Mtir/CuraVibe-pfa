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
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/1/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/1/css/product.css') }}" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  @include('home.components.headerdon')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Acceuil</a></li>
          <li>Produit</li>
        </ol>
        <h2> Produit</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="portfolio-details-slider ">
              <div class=" align-items-center">

                <div class="">
                  <img src="{{ asset('assets/1/img/' . $donation->image) }}" alt="{{ $donation->nom }}" >

                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              
              <p><strong>Nom:</strong> {{ $donation->nom }}</p>
              <p><strong>Etat:</strong> {{ $donation->etat }}</p> <span> </span>
                <p><strong>Quantite:</strong>{{ $donation->quantite }}</p> <span> </span>
             <p><strong>numero télèphone:</strong>+216{{ $donation->numero }}</p>
                



               
            </div>
            <div class="portfolio-description">
              <h2>Description</h2>
              <p>{{ $donation->description }}</p>

            </div>
            <button class="addtocart" onclick="addToCart({{ $donation->id }})">
              <div class="pretext">
                  <i class="fas fa-cart-plus"></i> Ajouter au panier
              </div>
              <div class="pretext done">
                  <div class="posttext"><i class="fas fa-check"></i> Ajouté</div>
              </div>
          </button>
          
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
  <script>
    function addToCart(id) {
        $.ajax({
            url: '/don/' + id,
            type: 'POST',
            dataType: 'json',
            data: {_token: '{{ csrf_token() }}'},
            success: function(response) {
                console.log(response.success); // Log success message
                // Optionally, you can update UI to indicate that the item is added to the cart
                $('.addtocart').addClass('added');
                setTimeout(function() {
                    $('.addtocart').removeClass('added');
                }, 2000); // Remove 'added' class after 2 seconds
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log error message
                // Optionally, you can handle error and show a message to the user
            }
        });
    }
</script>
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/1/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/1/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/1/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/1/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/1/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/1/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/1/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/1/js/main.js') }}"></script>
  <script src="{{ asset('assets/1/js/product.js') }}"></script>

</body>

</html>