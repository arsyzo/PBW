<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Pelanggan</title>
</head>
<body>
    <?php
    include 'koneksi_db.php'; // Pastikan $conn sudah terdefinisi dengan benar

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        // Siapkan query DELETE dengan prepared statement
        $stmt = $conn->prepare("DELETE FROM Pelanggan WHERE ID = ?");
        $stmt->bind_param("i", $id); // "i" untuk integer

        // Eksekusi query dan tangani hasilnya
        if ($stmt->execute()) {
            echo "<script>alert('Data pelanggan berhasil dihapus'); window.location='daftar_pelanggan.php';</script>";
        } else {
            $error = addslashes($stmt->error);
            echo "<script>alert('Gagal menghapus data pelanggan: $error'); window.location='daftar_pelanggan.php';</script>";
        }

        // Tutup statement
        $stmt->close();
    } else {
        echo "<script>alert('ID tidak valid'); window.location='daftar_pelanggan.php';</script>";
    }

    // Tutup koneksi
    $conn->close();
    ?>
</body>
</html>
