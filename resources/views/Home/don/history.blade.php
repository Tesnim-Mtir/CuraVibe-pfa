
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

  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/4/css/style.css">
</head>

<body>

   <!-- ======= Header ======= -->
   @include('home.components.header')
 <!-- End Header -->

  <main id="main">
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Don</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>Nom</th>
						      <th>Description</th>
						      <th>Status</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
                            @foreach($donations as $donation)

						    <tr class="alert" role="alert">
						    
						      <td class="d-flex align-items-center">
						      	<div class="pl-3 email">
                                    <span>ajouté : {{ $donation->created_at->format('d/m/Y') }}</span>
                                </div>
						      </td>
                              <td>{{ $donation->nom }}</td>
                              <td>{{ $donation->description }}</td>

                              <td class="status">
                                <span class="active">
                                    @if(empty($donation->status))
                                    Libre
                                    @else
                                        réservé
                                    @endif
                                </span>
                            </td>
                                                          <td>
                        <form action="{{ route('don.destroy', $donation->id) }}" method="POST">
                                      @csrf
                                    @method('DELETE')
                                 <button type="submit" class="close" aria-label="Close" onclick="return confirm('Are you sure you want to delete this donation?')">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                 </button>
                             </form>
				        	</td>
						    </tr>
						 
                            @endforeach

						  </tbody>
						</table>
				</div>
			</div>
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


  <script src="assets/4/js/jquery.min.js"></script>
  <script src="assets/4/js/popper.js"></script>
  <script src="assets/4/js/bootstrap.min.js"></script>
  <script src="assets/4/js/main.js"></script>

</body>

</html>