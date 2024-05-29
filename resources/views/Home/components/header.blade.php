
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">CuraVibe</a></h1>
    
      <nav id="navbar" class="navbar">
        <ul>
       
          <li><a class="nav-link scrollto " href="/">Acceuil</a></li>
          <li><a class="nav-link scrollto " href="don">Don</a></li>

        
          </a></li>
          <li>  @if (Session::has('user'))
            <li>
                <a class="nav-link scrollto" href="/ongoing">Compte: {{ Session::get('user')->name }}</a>
            </li>
        @else
            
              <li><a class="getstarted scrollto" href="/register">Inscription</a></li>
            </a></li>
            
        @endif</li>   </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->






