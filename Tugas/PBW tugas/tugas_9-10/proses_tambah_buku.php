<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Tambah Buku</title>
</head>
<body>
    <?php
    include 'koneksi_db.php'; // Koneksi ke database

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ambil data dari form
        $judul         = $_POST['judul'];
        $penulis       = $_POST['penulis'];
        $tahun_terbit  = $_POST['tahun_terbit'];
        $harga         = $_POST['harga'];
        $stok          = $_POST['stok'];

        // Siapkan query insert
        $stmt = $conn->prepare("
            INSERT INTO Buku (Judul, Penulis, Tahun_Terbit, Harga, stok)
            VALUES (?, ?, ?, ?, ?)
        ");
        $stmt->bind_param("ssiii", $judul, $penulis, $tahun_terbit, $harga, $stok);

        // Eksekusi dan tampilkan notifikasi
        if ($stmt->execute()) {
            echo "<script>
                alert('Buku berhasil ditambahkan!');
                window.location.href = 'tambah_buku.php';
            </script>";
        } else {
            $error = addslashes($stmt->error);
            echo "<script>
                alert('Gagal menambahkan buku: $error');
                window.location.href = 'tambah_buku.php';
            </script>";
        }

        // Tutup statement dan koneksi (opsional)
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
