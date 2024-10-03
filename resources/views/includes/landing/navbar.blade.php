<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 style="display: flex; align-items: center;">
          <a href="#">
            <img id="logo-sigapnet" src="assets/img/logo_polri.png" class="img-fluid" alt="SIGAPNET Logo" style="margin-right: 15px;">
          </a>
          <div>
            <!-- Ganti warna SIGAPNET dengan efek bayangan -->
            <a href="#" style="text-decoration: none; font-size: 1.2rem; font-weight: bold; color: #edc37b; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);">SIGAPNET</a>
            <br>
            <!-- Ganti warna BID TIK POLDA DIY dengan efek bayangan -->
            <span style="font-size: 0.8rem; color: #edc37b; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);">BID TIK POLDA DIY</span>
          </div>
        </h1>
        
        

        {{-- <style>
          #logo-sigapnet {
            width: 100px;
            height: auto;
          }
        </style> --}}
      
        
        <!-- Uncomment below if you prefer to use an image logo -->
       
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Me</a></li>   
          <div> <a class="border-solid" href="{{ url('login')}}">Login</a></div>
          <div> <a class="border-solid" href="{{ url('register')}}">Register</a></div>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      

    </div>
  </header><!-- End Header -->