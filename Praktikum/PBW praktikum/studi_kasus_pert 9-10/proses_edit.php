<?php
include 'koneksi_db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id = $_POST['id'];
   $judul = $_POST['judul'];
   $penulis = $_POST['penulis'];
   $tahun = $_POST['tahun_terbit'];
   $harga = $_POST['harga'];
   $stok = $_POST['stok'];


   $stmt = $conn->prepare("UPDATE Buku SET Judul=?, Penulis=?, Tahun_Terbit=?, Harga=?, stok=? WHERE ID=?");
   $stmt->bind_param("ssiiii", $judul, $penulis, $tahun, $harga, $stok, $id);


   if ($stmt->execute()) {
       echo "<script>alert('Data berhasil diperbarui'); window.location='index.php';</script>";
   } else {
       echo "<script>alert('Gagal memperbarui data');
       window.location='index.php';</script>";
   }
}
?>
