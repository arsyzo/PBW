<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Menu Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Toko Buku Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Daftar Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar_pelanggan.php">Daftar Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah_buku.php">Tambah Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah_Pelanggan.php">Tambah Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi.php">Buat Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lihat_transaksi.php">Lihat Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
</body>
</html>
