<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn->begin_transaction();

    try {
        $pelanggan_id   = $_POST['pelanggan_id'];
        $tanggal_pesanan = date('Y-m-d');
        $total_harga    = 0;

        // 1. Simpan data ke tabel Pesanan
        $stmt = $conn->prepare("
            INSERT INTO Pesanan (Tanggal_Pesanan, Pelanggan_ID, Total_Harga)
            VALUES (?, ?, ?)
        ");
        $stmt->bind_param("sid", $tanggal_pesanan, $pelanggan_id, $total_harga);
        $stmt->execute();
        $pesanan_id = $conn->insert_id;

        // 2. Proses setiap buku yang dipesan
        foreach ($_POST['buku'] as $buku) {
            $buku_id   = $buku['id'];
            $kuantitas = $buku['kuantitas'];

            // Ambil harga dan stok buku
            $stmt = $conn->prepare("SELECT Harga, Stok FROM Buku WHERE ID = ?");
            $stmt->bind_param("i", $buku_id);
            $stmt->execute();
            $stmt->bind_result($harga_per_satuan, $stok);
            $stmt->fetch();
            $stmt->close();

            if ($stok < $kuantitas) {
                throw new Exception("Stok buku dengan ID $buku_id tidak mencukupi.");
            }

            // Tambahkan ke Detail_Pesanan
            $stmt = $conn->prepare("
                INSERT INTO Detail_Pesanan (Pesanan_ID, Buku_ID, Kuantitas, Harga_Per_Satuan)
                VALUES (?, ?, ?, ?)
            ");
            $stmt->bind_param("iiid", $pesanan_id, $buku_id, $kuantitas, $harga_per_satuan);
            $stmt->execute();

            // Hitung total harga
            $total_harga += $kuantitas * $harga_per_satuan;

            // Update stok buku
            $stmt = $conn->prepare("UPDATE Buku SET Stok = Stok - ? WHERE ID = ?");
            $stmt->bind_param("ii", $kuantitas, $buku_id);
            $stmt->execute();
        }

        // 3. Update total harga di tabel Pesanan
        $stmt = $conn->prepare("UPDATE Pesanan SET Total_Harga = ? WHERE ID = ?");
        $stmt->bind_param("di", $total_harga, $pesanan_id);
        $stmt->execute();

        $conn->commit();

        // Redirect dengan pesan sukses
        header("Location: transaksi.php?message=" . urlencode("Pesanan berhasil dibuat."));
        exit;

    } catch (Exception $e) {
        $conn->rollback();
        // Redirect dengan pesan error
        header("Location: transaksi.php?message=" . urlencode("Gagal membuat pesanan: " . $e->getMessage()));
        exit;
    }
}
?>
