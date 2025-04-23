@extends('layouts.main')
@section('container')

<!-- Header atau gambar-->

<div id="petshopCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active"
      style="height: 75vh; background-image: url({{ asset('images/pet1.jpg') }}); background-size: cover; background-position: center;">
      <div class="carousel-caption d-flex align-items-center justify-content-center" style="position: absolute; bottom: 300px; left: 50%; transform: translateX(-50%); text-align: center; padding: 10px; border-radius: 8px; color: white; width: 80%; max-width: 1200px;">
        <h4>Perawatan untuk Peliharaan yang Anda Cintai</h4>
    </div>
    
    </div>
    <!-- Slide 2 -->
    <div class="carousel-item"
      style="height: 75vh; background-image: url({{ asset('images/pet2.jpg') }}); background-size: cover; background-position: center;">
      <div class="carousel-caption d-flex align-items-center justify-content-center" style="position: absolute; bottom: 300px; left: 50%; transform: translateX(-50%); text-align: center; padding: 10px; border-radius: 8px; color: white; width: 80%; max-width: 1200px;">
        <h4>Layanan Terjangkau dan Terpercaya</h4>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="carousel-item"
      style="height: 75vh; background-image: url({{ asset('images/pet3.jpg') }}); background-size: cover; background-position: center;">
      <div class="carousel-caption d-flex align-items-center justify-content-center" style="position: absolute; bottom: 300px; left: 50%; transform: translateX(-50%); text-align: center; padding: 10px; border-radius: 8px; color: white; width: 80%; max-width: 1200px;">
        <h4>Kebahagiaan Hewan Peliharaan Anda, Prioritas Kami</h4>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#petshopCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#petshopCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container-fluid box">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col mx-auto" style="max-width: 190px;">
      <a href="/makanan" style="text-decoration: none;">
        <div class="card cards h-100">
          <img src="/images/51205.jpg" class="card-img-top " alt="...">
          <div class="card-body">
            <h6 class="card-title">Makanan</h6>
          </div>
        </div>
      </a>
    </div>
    <div class="col mx-auto" style="max-width: 190px;">
      <a href="/alat" style="text-decoration: none;">
        <div class="card cards h-100 card2">
          <img src="/images/peralatan.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Peralatan Hewan</h6>
          </div>
        </div>
      </a>
    </div>
    <div class="col mx-auto" style="max-width: 190px;">
      <a href="/adopsi" style="text-decoration: none;">
        <div class="card cards h-100 card2">
          <img src="/images/adopsi_hewan.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Adopsi</h6>
          </div>
        </div>
      </a>
    </div>
    <div class="col mx-auto" style="max-width: 190px;">
      @if (Route::has('login'))
      @auth
      <a href="/formpenitipan" style="text-decoration: none;">
        <div class="card cards h-100 card2">
          <img src="/images/penitipan_kucing.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Penitipan Hewan</h6>
          </div>
        </div>
      </a>
      @else
      <a href="{{ route('login') }}" style="text-decoration: none;">
        <div class="card cards h-100 card2">
          <img src="/images/penitipan_kucing.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Penitipan Hewan</h6>
          </div>
        </div>
      </a>
      @endauth
      @endif
    </div>
  </div>
</div>


{{-- <!-- Bagian untuk Hewan -->
<div class="container-fluid box2">
  <h2 style="padding-top: 60px">Hewan</h2>
  <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 50px;">
    @foreach($dataHewan as $item)
    <div class="col">
      <a href="/detail-hewan/{{ $item->ID_Barang }}" style="text-decoration: none;">
        <div class="card cards h-100">
          <img src="{{ asset('berkas_ujis/' . $item->gambar) }}" class="card-img-top img-bordered" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item->Nama_Hewan }}</h5>
            <p class="card-text">{{ $item->deskripsi }}</p>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>


<!-- Bagian untuk Makanan -->
<div class="container-fluid box2">
  <h2>Makanan</h2>
  <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 50px;">
    @foreach($dataMakanan as $item)
    <div class="col">
      <a href="/detail-barang/{{ $item->ID_Barang }}" style="text-decoration: none;">
        <div class="card cards h-100">
          <img src="{{ asset('berkas_ujis/' . $item->gambar) }}" class="card-img-top img-bordered" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item->Nama_Barang }}</h5>
            <p class="card-text">{{ $item->deskripsi }}</p>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>

<div class="container-fluid box2">
  <h2>Alat</h2>
  <div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 50px;">
    @foreach($dataAlat as $item)
    <div class="col">
      <a href="/detail-barang/{{ $item->ID_Barang}}" style="text-decoration: none;">
        <div class="card cards h-100">
          <img src="{{ asset('berkas_ujis/' . $item->gambar) }}" class="card-img-top img-bordered" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $item->Nama_Barang }}</h5>
            <p class="card-text">{{ $item->deskripsi }}</p>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div><br> --}}




<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/css/js/bootstrap.min.js') }}"></script>
@endsection
