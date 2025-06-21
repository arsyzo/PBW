<?php
include 'koneksi_db.php'; // Pastikan koneksi ke database telah diatur

// Periksa apakah ID telah diterima dari parameter URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data buku berdasarkan ID untuk konfirmasi sebelum menghapus
    $stmt = $conn->prepare("SELECT Judul FROM Buku WHERE ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($judul);
    $stmt->fetch();
    $stmt->close();

    if (!$judul) {
        echo "<script>alert('Buku tidak ditemukan'); window.location='index.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('ID tidak valid'); window.location='index.php';</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Query DELETE dengan prepared statement
    $stmt = $conn->prepare("DELETE FROM Buku WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Buku \"$judul\" berhasil dihapus'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus buku: " . addslashes($stmt->error) . "'); window.location='index.php';</script>";
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Konfirmasi Hapus Buku</h2>
        <p>Apakah Anda yakin ingin menghapus buku <strong><?= htmlspecialchars($judul) ?></strong>?</p>
        <form method="post">
            <button type="submit" class="btn btn-danger">Hapus</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
