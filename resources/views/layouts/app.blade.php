<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Desa Pampang</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <!-- CSS Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <style>
        .navbar-custom {
            background-color: #FC8F54;
        }
    </style>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid">
    <a class="navbar-brand" href="#" style="padding-left: 15px;"><img src="assets/logo.jpg" alt="Logo" style="height: 30px; width: 30px; border-radius: 50%; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); margin-right: 8px;"> Wisata Desa Pampang </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto"> <!-- Tambahkan kelas ms-auto di sini -->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tentang') }}">About Us</a>
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

@yield('content')


<!-- Footer Start -->
<footer class="text-black text-center py-4" style="background-color: #FDE7BB; width: 100%;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- Section: Map -->
            <div class="col-md-6 mb-0">
                <h5 class="mb-3" style="color: #FC8F54;">Lokasi Wisata Desa Pampang</h5>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.48917412186!2d117.2300917!3d-0.3774807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3Af30e84b529acc826!2sWisata%20Budaya%20Pampang!5e0!3m2!1sen!2sid!4v1699999999999!5m2!1sen!2sid" 
                    width="70%" 
                    height="300" 
                    style="border-radius: 10px; border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>

            <!-- Section: Social Media Icons -->
            <div class="col-md-6 mb-0 d-flex flex-column align-items-center justify-content-center ps-md-5">
                <h5 class="mb-3" style="color: #FC8F54;">Follow Us</h5>
                <div class="d-flex flex-column align-items-start">
                    <a href="https://www.facebook.com/?_rdr" class="text-decoration-none mb-2 social-icon d-flex align-items-center">
                        <i class="fab fa-facebook-f" style="font-size: 18px; color: #FC8F54;" ></i>
                        <span class="ms-2" style="color: #FC8F54;">Facebook</span>
                    </a>
                    <a href="https://x.com/?lang=en" class="text-decoration-none mb-2 social-icon d-flex align-items-center">
                        <i class="fab fa-twitter" style="font-size: 18px; color: #FC8F54;"></i>
                        <span class="ms-2" style="color: #FC8F54;">Twitter</span>
                    </a>
                    <a href="https://www.youtube.com/watch?v=0trdzFuy-QQ" class="text-decoration-none mb-2 social-icon d-flex align-items-center">
                        <i class="fab fa-youtube" style="font-size: 18px; color: #FC8F54;"></i>
                        <span class="ms-2" style="color: #FC8F54;">YouTube</span>
                    </a>
                    <a href="https://www.instagram.com/budayapampang/" class="text-decoration-none mb-2 social-icon d-flex align-items-center">
                        <i class="fab fa-instagram" style="font-size: 18px; color: #FC8F54;"></i>
                        <span class="ms-2" style="color: #FC8F54;">Instagram</span>
                    </a>
                    <a href="https://wa.me/1234567890" class="text-decoration-none mb-2 social-icon d-flex align-items-center">
                        <i class="fab fa-whatsapp" style="font-size: 18px; color: #FC8F54;"></i>
                        <span class="ms-2" style="color: #FC8F54;">WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>

        <hr class="my-3" style="border-top: 1px solid rgba(255, 255, 255, 0.3);">

        <!-- Copyright -->
        <div class="text-center">
            <p class="mb-0">&copy; 2024 <span style="color: #FC8F54;">Kelompok 9</span>. All rights reserved.</p>
        </div>

    </div>
</footer>
<!-- Footer End -->

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

<!-- CSS -->
<style>
    /* Menghilangkan margin dan padding */
    .container-fluid, .row, .col-md-6 {
        margin: 0;
        padding: 0;
    }

    /* Social icon style */
    .social-icon {
        transition: transform 0.3s ease-in-out;
        text-align: left;
    }

    .social-icon:hover {
        transform: scale(1.1);
    }

    .social-icon i {
        transition: color 0.3s ease;
    }

    .social-icon:hover i {
        color: #25d366; /* Custom hover color for WhatsApp */
    }

    footer h5 {
        font-weight: bold;
        font-size: 1.25rem;
        color: #fff;
    }

    hr.my-3 {
        border-top: 1px solid rgba(255, 255, 255, 0.5);
    }

    .ms-2 {
        margin-left: 10px;
    }
</style>


</body>
</html>
