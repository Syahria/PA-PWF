<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Link CSS Bootstrap dari CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  <!-- Menambahkan SweetAlert2 -->

    <style>
        .navbar {
            z-index: 9999; /* Pastikan navbar berada di atas elemen lainnya */
        }

        /* Styling untuk bagian login */
        .login-container {
            height: 100vh;
        }

        /* Styling untuk gambar */
        .login-image {
            background-image: url('{{ asset('assets/login.webp') }}');
            background-size: cover;
            background-position: center;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        /* Styling card */
        .login-card {
            background: rgba(255, 255, 255, 0.9); /* Transparansi */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 2rem;
        }

        /* Heading style */
        .login-card h2 {
            font-weight: bold;
            color: #333;
        }

        /* Button styling */
        .login-card .btn-primary {
            background-color: #4A90E2;
            border-color: #4A90E2;
        }
        .navbar-custom {
            background-color: #FC8F54;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Wisata Desa Pampang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/tentang') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/wisata') }}">Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
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

    <!-- Konten Halaman Login -->
    <div class="container-fluid login-container d-flex align-items-center justify-content-center">
        <div class="row w-100" style="max-width: 1100px;">
            <!-- Kolom untuk gambar -->
            <div class="col-md-6 login-image d-none d-md-block me-3"></div>

            <!-- Kolom untuk card login -->
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <div class="login-card w-100" style="max-width: 400px;">
                    <h2 class="text-center mb-4">Admin Login</h2>
                    
                    <!-- Notifikasi jika login berhasil -->
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap JS (termasuk JS bundle dengan Popper) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // Menampilkan SweetAlert pop-up dengan ikon centang setelah login berhasil
        document.addEventListener('DOMContentLoaded', function() {

            // Menampilkan SweetAlert pop-up dengan ikon error jika login gagal
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Login Gagal',
                    text: '{{ session('error') }}',
                    confirmButtonText: 'Tutup'
                });
            @endif
        });
    </script>
</body>
</html>
