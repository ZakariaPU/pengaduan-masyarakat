<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1>
          <a href="index.html">
            <img id="logo-sigapnet" src="assets/img/logo_sigapnet.png" class="img-fluid" alt="SIGAPNET Logo">
          </a>
          <a href="index.html"></a>
        </h1>

        <style>

          #logo-sigapnet {
            width: 80px;
            height: auto;
          }

        </style>
      
        
        <!-- Uncomment below if you prefer to use an image logo -->
       
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
          <li><a class="nav-link scrollto" href="#about">ABOUT ME</a></li>   
          <div> <a class="border-solid" href="{{ url('login')}}">LOGIN</a></div>
          <div> <a class="border-solid" href="{{ url('register')}}">REGISTER</a></div>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->