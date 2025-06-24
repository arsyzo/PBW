<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $id      = $_POST['id'];
    $nama    = $_POST['nama'];
    $alamat  = $_POST['alamat'];
    $email   = $_POST['email'];
    $telepon = $_POST['telepon'];

    // Siapkan query update
    $stmt = $conn->prepare("
        UPDATE Pelanggan 
        SET Nama = ?, Alamat = ?, Email = ?, Telepon = ? 
        WHERE ID = ?
    ");
    $stmt->bind_param("ssssi", $nama, $alamat, $email, $telepon, $id);

    // Eksekusi dan beri respon
    if ($stmt->execute()) {
        echo "<script>alert('Data pelanggan berhasil diperbarui'); window.location='daftar_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data pelanggan'); window.location='daftar_pelanggan.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
