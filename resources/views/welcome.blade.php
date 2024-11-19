<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Pampang</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .hero {
            background-image: url('{{ asset('assets/bg.jpg') }}'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-top: 100px; /* Menyesuaikan jarak vertikal */
            flex-direction: column;
        }
        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
            max-width: 800px;
            width: 100%;
        }
        .btn-selengkapnya {
            margin-top: 50px; /* Menambahkan margin untuk menurunkan posisi tombol */
            background-color: transparent; /* Membuat background tombol transparan */
            color: white; /* Warna teks tombol */
            border: 2px solid white; /* Border putih agar tombol terlihat */
        }
        .btn-selengkapnya:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Efek hover dengan sedikit transparansi */
            color: white;
        }

        .navbar-custom {
            background-color: #FC8F54;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid">
    <a class="navbar-brand" href="#" style="padding-left: 15px;"><img src="assets/logo.jpg" alt="Logo" style="height: 30px; width: 30px; border-radius: 50%; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); margin-right: 8px;"> Wisata Desa Pampang </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/tentang')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/wisata') }}">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/fasilitas') }}">Fasilitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
<a href="{{ url('/tentang') }}" class="btn btn-light btn-selengkapnya">Selengkapnya</a>  <!-- Tambahkan kelas untuk styling -->
</section>

<script src="{{ asset('assets/popper.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap.min.js') }}"></script>
</body>
</html>
