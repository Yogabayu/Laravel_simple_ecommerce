<div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="/">Berkah Wangi</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    {{-- <a href="/" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> --}}

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto {{ Request::segment(1) === '' ? 'active' : null }}" href="/">Home</a></li>
        <li><a class="nav-link scrollto {{ Request::segment(1) === 'profile' ? 'active' : null }}" href="/profile">Profil Usaha</a></li>
        <li><a class="nav-link scrollto" href="/books">Daftar Barang</a></li>
        {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> --}}
        <li><a class="getstarted scrollto" href="#about">Yuk Mulai</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>