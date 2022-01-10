@extends('layouts.app')

@section('title')
    Berkah Wangi - Home
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Solusi Terbaik Untuk Bisnis Anda</h1>
          <h2>Kami Berpengalaman lebih dari 5 Tahun dalam penyediaan barang untuk melengkapi kebutuhan bisnis anda</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Yuk Mulai</a>
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/air-freshner.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Dipercaya Oleh: </h2>
        </div>
        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Mengapa <strong>Berkah Wangi ?</strong></h3>
              <p>
                UD Berkah Wangi terlah dipercaya oleh banyak usaha lain untuk menyediakan kebutuhan kantor baik client pemerintahan sampai swasta.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Tersedia Berbagai macam kebutuhan kantor <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    {{-- <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Laravel 8 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
          </div>
      </div>
  </div>
 
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
 
  <table class="table table-bordered">
      <tr>
          <th>No</th>
          <th>Image</th>
          <th>Name</th>
          <th>Kategori</th>
          <th>Satuan</th>
          <th>Details</th>
          <th width="280px">Action</th>
      </tr>
      @foreach ($products as $product)
      <tr>
          <td>{{ ++$i }}</td>
          <td><img src="/image/{{ $product->image }}" width="100px"></td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->detail }}</td>
          <td>{{ $product->kategori }}</td>
          <td>{{ $product->satuan }}</td>
          <td>
              <form action="{{ route('products.destroy',$product->id) }}" method="POST">
 
                  <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
  
                  <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
 
                  @csrf
                  @method('DELETE')
    
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
          </td>
      </tr>
      @endforeach
  </table> --}}

  {{-- {!! $products->links() !!} --}}


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Jasa Kami</h2>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-flag"></i></div>
              <h4><a href="">Pengharum ruangan</a></h4>
              <p>Tersedia berbegai macam pengharum ruangan</p>
              <a href="/pengharum" class="btn-get-started scrollto">Selengkapnya</a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-briefcase"></i></div>
              <h4><a href="">Alat Perkantoran</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              <a href="/kantor" class="btn-get-started scrollto">Selengkapnya</a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-droplet"></i></div>
              <h4><a href="">Tisue</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              <a href="/tisue" class="btn-get-started scrollto">Selengkapnya</a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-donate-heart"></i></div>
              <h4><a href="/kesehatan">Alat Kebersihan</a></h4>
              <p>Tersedia berbagai macam alat kebersiahan mulai dari, hand sanitizer, tempat sampah, sapu, dll</p>
              <a href="/kesehatan" class="btn-get-started scrollto">Selengkapnya</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

  </main>

@endsection