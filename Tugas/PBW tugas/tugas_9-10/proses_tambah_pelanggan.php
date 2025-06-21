<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Tambah Pelanggan</title>
</head>
<body>
<?php
    include 'koneksi_db.php'; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama    = $_POST['nama'];
        $alamat  = $_POST['alamat'];
        $email   = $_POST['email'];
        $telepon = $_POST['telepon'];

        $stmt = $conn->prepare("
            INSERT INTO Pelanggan (Nama, Alamat, Email, Telepon)
            VALUES (?, ?, ?, ?)
        ");
        $stmt->bind_param("ssss", $nama, $alamat, $email, $telepon);

        if ($stmt->execute()) {
            echo "<script>
                alert('Pelanggan berhasil ditambahkan!');
                window.location.href = 'tambah_pelanggan.php';
            </script>";
        } else {
            $error = addslashes($stmt->error);
            echo "<script>
                alert('Gagal menambahkan pelanggan: $error');
                window.location.href = 'tambah_pelanggan.php';
            </script>";
        }

        $stmt->close();
        $conn->close();
    }
?>
</body>
</html>
