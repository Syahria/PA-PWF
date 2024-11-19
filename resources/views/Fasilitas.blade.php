@extends('layouts.app')  <!-- Menggunakan layout utama -->

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Fasilitas di Desa Pampang</h1>
    <p class="text-justify mb-4 text-center">
        Desa Pampang menyediakan berbagai fasilitas untuk mendukung pengalaman wisatawan. Berikut adalah beberapa fasilitas yang dapat dinikmati:
    </p>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow" style="background-color: #FC8F54;">
                <img src="{{ asset('assets/parkir1.jpg') }}" class="card-img-top" alt="Penginapan" />
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: white;">Area Parkir</h5>
                    <p class="card-text" style="color: white;">Area parkir yang aman dan nyaman untuk kendaraan Anda selama berkunjung.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow" style="background-color: #FC8F54;">
                <img src="{{ asset('assets/toilett.jpg') }}" class="card-img-top" alt="Pusat Informasi" />
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: white;">Toilet Umum</h5>
                    <p class="card-text" style="color: white;">Tersedia toilet umum bersih dan terawat untuk kebutuhan pengunjung desa.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow" style="background-color: #FC8F54;">
                <img src="{{ asset('assets/shop.jpg') }}" class="card-img-top" alt="Tempat Parkir" />
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: white;">Warung Makan dan Kios Souvenir</h5>
                    <p class="card-text" style="color: white;">Terdapat warung makan dengan hidangan lokal dan kios souvenir khas Dayak.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow" style="background-color: #FC8F54;">
                <img src="{{ asset('assets/tempatduduk.png') }}" class="card-img-top" alt="Restoran" />
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: white;">Tempat Duduk dan Gazebo</h5>
                    <p class="card-text" style="color: white;">Tempat Duduk dan Gazebo untuk bersantai ataupun untuk menonton pertunjukan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow" style="background-color: #FC8F54;">
                <img src="{{ asset('assets/panggung.jpg') }}" class="card-img-top" alt="Pertunjukan Seni" />
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: white;">Panggung Pertunjukan</h5>
                    <p class="card-text" style="color: white;">Saksikan pertunjukan seni dan budaya yang memukau selama kunjungan Anda.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow" style="background-color: #FC8F54;">
                <img src="{{ asset('assets/foto1.png') }}" class="card-img-top" alt="Jalan Setapak" />
                <div class="card-body text-center">
                    <h5 class="card-title" style="color: white;">Spot Foto dan Selfie Area</h5>
                    <p class="card-text" style="color: white;">Di sini, bisa berfoto bersama penduduk lokal dan mengenakan pakaian adatnya.</p>
                </div>
            </div>
        </div>
    </div>

    <p class="text-justify text-center">
        Dengan fasilitas yang memadai, pengunjung diharapkan dapat menikmati kunjungan mereka dengan nyaman dan menyenangkan. Desa Pampang berkomitmen untuk memberikan pengalaman terbaik bagi setiap tamu yang datang.
    </p>
</div>

@endsection

<!-- Tambahkan CSS tambahan untuk memastikan gambar dalam card memiliki ukuran yang sama -->
@push('styles')
    <style>
        /* Mengatur ukuran gambar card agar memiliki tinggi dan lebar yang konsisten */
        .card-img-top {
            width: 100%; /* Gambar memenuhi lebar card */
            height: 250px; /* Menjaga tinggi gambar tetap sama */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi dan tetap proporsional */
        }
    </style>
@endpush
