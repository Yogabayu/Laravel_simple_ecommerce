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
              <img src="/image/{{ $product->image }}">
              <h4><a href="">{{ $product->name }}</a></h4>
              <p><b>Detail:</b> {{ $product->detail }}</p>
              <p><b>Harga Satuan:</b> Rp.{{ $product->satuan }}</p> 
              <p><b>Stok Barang:</b> {{ $product->tersedia }}</p>                  
              <a href="https://wa.me/6285131666675?text=Saya Mau pesan *{{ $product->name }}*, apakah masih tersedia ??" class="btn-get-started scrollto">Pesan Sekarang</a>              
            </div>
        </div>
        
       @endforeach

      </div>
     </div>
    </section><!-- End Services Section -->
@endsection