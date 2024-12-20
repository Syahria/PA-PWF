@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Wisata di Desa Pampang</h1>
    <p class="text-center mb-4">
        Temukan keindahan dan kekayaan budaya di Desa Pampang. Berikut adalah beberapa tempat wisata menarik yang harus Anda kunjungi:
    </p>
    <div class="col-md-8 offset-md-2"> 
        <!-- Carousel Start -->
        <div id="wisataCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/atraksi.jpg') }}" class="d-block w-100" alt="Wisata Alam">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/sungai.jpg') }}" class="d-block w-100" alt="Pertunjukan Budaya">
                </div>
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#wisataCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#wisataCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
        <!-- Carousel End -->

        <!-- Galeri Start -->
        <div class="mt-5">
    <h2 class="text-center mb-4">Galeri Foto Desa Pampang</h2>
    <div class="row g-4">
        @foreach($galleries as $gallery)
            <div class="col-md-4">
                <div class="card" style="background-color: #FC8F54; border: none; height: 350px;">
                    <img src="{{ Storage::url($gallery->image_path) }}" class="card-img-top" alt="{{ $gallery->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white;">{{ $gallery->title }}</h5>
                        <p class="card-text" style="color: white;">{{ $gallery->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

        <!-- Galeri End -->

        <p class="text-center mb-4 mt-4">
            Dengan berbagai pilihan wisata yang menarik, Desa Pampang menawarkan pengalaman yang tak terlupakan bagi setiap pengunjung. Jangan lewatkan kesempatan untuk menjelajahi keindahan dan keunikan desa ini!
        </p>
    </div>
</div>

@endsection
