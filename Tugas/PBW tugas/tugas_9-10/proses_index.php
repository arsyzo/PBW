<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembaharuan Proses Pencarian Buku</title>
</head>
<body>
    <?php
    include 'koneksi_db.php'; // Koneksi ke database

    // Inisialisasi variabel pencarian
    $search_judul = $_GET['judul'] ?? '';
    $search_tahun = $_GET['tahun_terbit'] ?? '';

    // Siapkan query dasar
    $query = "SELECT * FROM Buku WHERE 1=1";

    // Tambahkan filter jika diperlukan
    if (!empty($search_judul)) {
        $judul = $conn->real_escape_string($search_judul);
        $query .= " AND Judul LIKE '%$judul%'";
    }

    if (!empty($search_tahun)) {
        $tahun = (int) $search_tahun;
        $query .= " AND Tahun_Terbit = $tahun";
    }

    // Eksekusi query
    $result = $conn->query($query);

    if (!$result) {
        echo "<p>Terjadi kesalahan: " . htmlspecialchars($conn->error) . "</p>";
    }
    ?>
</body>
</html>
