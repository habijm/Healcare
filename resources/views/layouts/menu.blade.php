<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center">
      <img src="{{ asset('landingpage/assets/img/healcare.png')}}" alt="">
      <span>HealCare</span>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="/">Home</a></li>
        <li><a class="nav-link scrollto" href="{{ URL::to('diagnosa')}}">Diagnosa</a></li>
        <!--  <li><a class="nav-link scrollto" href="{{ URL::to('about')}}">About</a></li> -->
        <li><a class="getstarted nav-link scrollto" href="{{ URL::to('login') }}">Login</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->