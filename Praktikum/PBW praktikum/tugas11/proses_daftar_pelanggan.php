<?php
include 'koneksi_db.php'; // Koneksi ke database

// Inisialisasi variabel pencarian
$search_nama  = $_GET['nama'] ?? '';
$search_email = $_GET['email'] ?? '';

// Siapkan query dasar
$query = "SELECT * FROM Pelanggan WHERE 1=1";

// Tambahkan filter jika diperlukan
if (!empty($search_nama)) {
    $nama = $conn->real_escape_string($search_nama);
    $query .= " AND Nama LIKE '%$nama%'";
}

if (!empty($search_email)) {
    $email = $conn->real_escape_string($search_email);
    $query .= " AND Email LIKE '%$email%'";
}

// Eksekusi query
$result = $conn->query($query);

if (!$result) {
    echo "<p>Terjadi kesalahan: " . htmlspecialchars($conn->error) . "</p>";
}
?>
