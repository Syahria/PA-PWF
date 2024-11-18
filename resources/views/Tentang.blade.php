@extends('layouts.app')  <!-- Menggunakan layout utama -->

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        <h1 class="mb-4">Desa Pampang</h1>
            <p class="text-justify"> <!-- Tambahkan kelas 'text-justify' untuk meratakan teks -->
                Desa Budaya Pampang merupakan kampung budaya suku Dayak. 
                Desa ini menyimpan sejarah luar biasa sejak berdirinya pada tahun 1991. 
                Berawal dari migrasi suku Dayak Apokayan dan Kenyah pada tahun 1960-an dari wilayah Kutai Barat dan Malinau, 
                mereka memilih menetap di Desa Pampang dengan tekad kuat untuk bergabung dengan Negara Kesatuan Republik Indonesia.
            </p>
            <p class="text-justify"> <!-- Kelas 'text-justify' juga ditambahkan di sini -->
                Di Desa Pampang, kamu bisa menikmati keindahan budaya suku Dayak Kenyah yang penuh warna dan tradisi. 
                Dari tarian adat, rumah-rumah tradisional, hingga kerajinan tangan yang memukau, semuanya ada disini.
            </p>
            <p class="text-justify"> <!-- Kelas 'text-justify' juga ditambahkan di sini -->
            Setiap tahun, acara Pelas Tahun digelar untuk memperingati ulang tahun Desa Pampang, 
            menjadikannya destinasi wisata budaya unggulan.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/desa.jpg') }}" alt="Gambar Desa Pampang" class="img-fluid rounded mb-4" style="margin-top: 40px; margin-left: 20px;" /> 
            <!-- Menambahkan kelas 'mb-4' untuk margin bawah -->
        </div>
    </div>
</div>

<style>
    /* CSS untuk meratakan teks kiri dan kanan */
    .text-justify {
        text-align: justify;  /* Mengatur teks menjadi justify */
        text-justify: inter-word;  /* Memastikan jarak antar kata diatur dengan baik */
    }
    /* Menambahkan warna latar belakang dan teks sesuai dengan yang diminta */

    /* Menambahkan border atau efek lainnya pada gambar jika perlu */
    img {
        border-radius: 10px;  /* Memberikan efek rounded pada gambar */
    }

</style>

@endsection
