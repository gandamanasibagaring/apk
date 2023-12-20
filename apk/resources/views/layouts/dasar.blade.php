<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title')</title>

    <!-- Link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Link ke CSS khusus dashboard (jika ada) -->
    <link rel="stylesheet" href="styles/dashboard.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Percetakan Raju</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('transaksi') }}">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inventaris</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class=" mt-4">
        <div class="row">
            <div class="col-lg-3">
              <!-- Sidebar (jika diperlukan) -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menu</h5>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Beranda</a></li>
                            <li class="list-group-item"><a href="#">Transaksi</a></li>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Penjualan</a></li>
                                <li class="list-group-item"><a href="#">Pembelian</a></li>
                            </ul>
                            <li class="list-group-item"><a href="#">Inventaris</a></li>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Tambah Produk</a></li>
                                <li class="list-group-item"><a href="#">Lihat Stok</a></li>
                            </ul>
                            <li class="list-group-item"><a href="#">Laporan</a></li>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Penjualan Harian</a></li>
                                <li class="list-group-item"><a href="#">Penjualan Bulanan</a></li>
                                <li class="list-group-item"><a href="#">Laporan Produk Terjual</a></li>
                            </ul>
                            <li class="list-group-item"><a href="#">Pengaturan</a></li>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#">Pengelolaan Karyawan</a></li>
                                <li class="list-group-item"><a href="#">Pengaturan Toko</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-9">
                <!-- Konten Utama -->
                <h2>@yield('judul')</h2>
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Link ke Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
