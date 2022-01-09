@extends('layouts.app')

@section('title')
    Berkah Wangi - Home
@endsection

@section('content')
   <!-- ======= Services Section ======= -->
   <section id="services" class="services section-bg" style="margin-top: 50px">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Daftar Barang</h2>
      </div>

      <div class="row">
        @foreach ($products as $product)
        <div style="margin: 20px" class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <img src="/image/{{ $product->image }}" width="100px">
              <h4><a href="">{{ $product->name }}</a></h4>
              <p>Detail: {{ $product->detail }}</p>
              <p>Harga Satuan: {{ $product->satuan }}</p>
              <a href="/" class="btn-get-started scrollto">Pesan Sekarang</a>
            </div>
          </div>
       @endforeach

      </div>

    </div>
  </section><!-- End Services Section -->
@endsection