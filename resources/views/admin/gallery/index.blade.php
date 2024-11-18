<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto Desa Pampang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  <!-- Menambahkan SweetAlert2 -->

    <style>
        .navbar-custom {
            background-color: #FC8F54;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dashboard Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">
                    <i class="fas fa-sign-out-alt"></i> LogOut
                </a>
            </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Galeri Foto Desa Pampang</h1>
        <p class="text-center mb-4">
            Temukan keindahan dan kekayaan budaya di Desa Pampang melalui galeri foto berikut.
        </p>

        <!-- Tombol Tambah Galeri di atas tabel -->
        <div class="text-start mb-4">
            <a href="{{ route('gallery.create') }}" class="btn" style="background-color: #FC8F54; color: white;"> 
                <i class="fas fa-plus"></i> Tambah Galeri</a>
        </div>

        <!-- Tabel Galeri Start -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($galleries as $index => $gallery)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $gallery->title }}</td>
                            <td>{{ $gallery->description }}</td>
                            <td><img src="{{ Storage::url($gallery->image_path) }}" class="img-fluid" style="height: 100px; object-fit: cover;">
                            </td>
                            <td>
                                <!-- Tombol Edit dan Hapus -->
                                <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning btn-sm"> <i class="fas fa-pencil-alt"></i> Edit</a>
                                <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus galeri ini?')"> <i class="fas fa-trash"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Tabel Galeri End -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Menampilkan SweetAlert pop-up dengan ikon centang setelah login berhasil
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Login Berhasil',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'Tutup'
                });
            @endif
        });
    </script>
</body>
</html>
