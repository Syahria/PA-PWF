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
                    <img src="{{ asset('assets/Desa.jpg') }}" class="d-block w-100" alt="Wisata Alam">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Wisata Alam</h5>
                        <p>Nikmati keindahan alam sekitar Desa Pampang dengan pemandangan yang memukau.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/kesenian.jpg') }}" class="d-block w-100" alt="Pertunjukan Budaya">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pertunjukan Budaya</h5>
                        <p>Saksikan pertunjukan tari dan musik tradisional yang menarik di pusat desa.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/Desaa.jpg') }}" class="d-block w-100" alt="Kerajinan Tangan">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kerajinan Tangan</h5>
                        <p>Jelajahi berbagai kerajinan tangan unik yang dibuat oleh penduduk setempat.</p>
                    </div>
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
                <!-- Foto 1 -->
                <div class="col-md-4">
                    <div class="card" style="background-color: #FC8F54; border: none; height: 350px;">
                        <img src="{{ asset('assets/nyelemeq.jpg') }}" class="card-img-top" alt="Galeri 1" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <h5 class="card-title" style="color: white;">Nyelamaq Sakai</h5>
                            <p class="card-text" style="color: white;">Tari Dayak Kenyah untuk menyambut tamu dengan gerakan lembut dan musik sampeq.</p>
                        </div>
                    </div>
                </div>
                <!-- Foto 2 -->
                <div class="col-md-4">
                    <div class="card" style="background-color: #FC8F54; border: none; height: 350px;">
                        <img src="{{ asset('assets/enggang.jpg') }}" class="card-img-top" alt="Galeri 2" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <h5 class="card-title" style="color: white;">Enggang Terbang</h5>
                            <p class="card-text" style="color: white;">Tarian ini terinspirasi dari burung enggang, simbol suku Dayak yang sakral.</p>
                        </div>
                    </div>
                </div>
                <!-- Foto 3 -->
                <div class="col-md-4">
                    <div class="card" style="background-color: #FC8F54; border: none; height: 350px;">
                        <img src="{{ asset('assets/tali.jpg') }}" class="card-img-top" alt="Galeri 9" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <h5 class="card-title" style="color: white;">Anyam Tali</h5>
                            <p class="card-text" style="color: white;">Tarian ini melambangkan kebersamaan dan gotong royong dalam menganyam tali. </p>
                        </div>
                    </div>
                </div>
                <!-- Foto 4 -->
                <div class="col-md-4">
                    <div class="card" style="background-color: #FC8F54; border: none; height: 350px;">
                        <img src="{{ asset('assets/datun.jpg') }}" class="card-img-top" alt="Galeri 4" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <h5 class="card-title" style="color: white;">Tari Datun Julut</h5>
                            <p class="card-text" style="color: white;">Tari khas Dayak Kenyah yang ceria dan penuh rasa syukur.</p>
                        </div>
                    </div>
                </div>
                <!-- Foto 5 -->
                <div class="col-md-4">
                    <div class="card" style="background-color: #FC8F54; border: none; height: 350px;">
                        <img src="{{ asset('assets/pamung.jpg') }}" class="card-img-top" alt="Galeri 5" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <h5 class="card-title" style="color: white;">Pemung Tawai</h5>
                            <p class="card-text" style="color: white;">Tarian ritual untuk upacara penyembuhan atau doa kepada leluhur. </p>
                        </div>
                    </div>
                </div>
                <!-- Foto 6 -->
                <div class="col-md-4">
                    <div class="card" style="background-color: #FC8F54; border: none; height: 350px;">
                        <img src="{{ asset('assets/perang.jpg') }}" class="card-img-top" alt="Galeri 6" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <h5 class="card-title" style="color: white;">Tari Perang</h5>
                            <p class="card-text" style="color: white;">Tarian yang menunjukkan keberanian para pejuang Dayak.</p>
                        </div>
                    </div>
                </div>
                <!-- Foto 7 -->
                <div class="col-md-4">
                    <div class="card" style="background-color: #FC8F54; border: none; height: 350px;">
                        <img src="{{ asset('assets/hudoq.jpg') }}" class="card-img-top" alt="Galeri 7" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <h5 class="card-title" style="color: white;">Hudoq Aban</h5>
                            <p class="card-text" style="color: white;">Tarian syukuran setelah panen, dengan penari memakai topeng kayu besar.</p>
                        </div>
                    </div>
                </div>
                <!-- Foto 8 -->
                <div class="col-md-4">
                    <div class="card" style="background-color: #FC8F54; border: none; height: 350px;">
                        <img src="{{ asset('assets/sumpit.jpg') }}" class="card-img-top" alt="Galeri 8" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <h5 class="card-title" style="color: white;">Tari Sumpit</h5>
                            <p class="card-text" style="color: white;">Tarian yang menggambarkan teknik berburu menggunakan sumpit, senjata tradisional Dayak.</p>
                        </div>
                    </div>
                </div>
                <!-- Foto 9 -->
                <div class="col-md-4">
                    <div class="card" style="background-color: #FC8F54; border: none; height: 350px;">
                        <img src="{{ asset('assets/pampaga.jpg') }}" class="card-img-top" alt="Galeri 9" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <h5 class="card-title" style="color: white;">Pampaga</h5>
                            <p class="card-text" style="color: white;">Tarian penuh kegembiraan yang ditampilkan dalam acara adat/festival, diiringi alat musik gong dan gendang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Galeri End -->

        <p class="text-center mb-4 mt-4">
            Dengan berbagai pilihan wisata yang menarik, Desa Pampang menawarkan pengalaman yang tak terlupakan bagi setiap pengunjung. Jangan lewatkan kesempatan untuk menjelajahi keindahan dan keunikan desa ini!
        </p>
    </div>
</div>

@endsection
