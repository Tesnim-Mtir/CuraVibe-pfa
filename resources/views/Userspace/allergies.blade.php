
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Curavibe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
          
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                @if(session('success'))
              
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa fa-exclamation-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                     
             
               @endif
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">put Allergy</h6>
                            <form action="/allergy/add" method="post">
                                @csrf
                                <div class="form-floating mb-3">

                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example" name="name" required>
                                        <option selected></option>

                                        @foreach ($allergies  as $allergie)
                                          <option >{{$allergie->name}}</option>
                                        @endforeach
                                      
                                       
                                    </select>
                                   
                                </div>
                              
                              
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                    
               
                
                </div>
            </div>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-3">
                    <h6 class="mb-4">User Allergy</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th> </th>
                                    <th scope="col">Allergy Name</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                     $i = 1;
                                @endphp
                                @foreach  ($allergys as $allergy)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <th> </th>
                                    <td>{{ $allergy}}</td>
                                
                                </tr>
                                @endforeach
                            
                              
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- Form End -->
            <!-- Sale & Revenue End -->






            <!-- Footer Start -->
         
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

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>