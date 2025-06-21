<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Buku</title>
</head>
<body>
    <?php
    include 'koneksi_db.php'; // Pastikan $conn sudah terdefinisi dengan benar

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        // Siapkan query DELETE dengan prepared statement
        $stmt = $conn->prepare("DELETE FROM Buku WHERE ID = ?");
        $stmt->bind_param("i", $id); // "i" untuk integer

        // Eksekusi query dan tangani hasilnya
        if ($stmt->execute()) {
            echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
        } else {
            $error = addslashes($stmt->error);
            echo "<script>alert('Gagal menghapus data: $error'); window.location='index.php';</script>";
        }

        // Tutup statement
        $stmt->close();
    } else {
        echo "<script>alert('ID tidak valid'); window.location='index.php';</script>";
    }

    // Tutup koneksi
    $conn->close();
    ?>
</body>
</html>
