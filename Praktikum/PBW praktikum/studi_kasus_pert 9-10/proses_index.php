<?php
   include 'koneksi_db.php'; // Koneksi database


   // Inisialisasi variabel pencarian
   $search_judul = isset($_GET['judul']) ? $_GET['judul'] : '';
   $search_tahun = isset($_GET['tahun_terbit']) ? $_GET['tahun_terbit'] : '';


   // Query untuk menampilkan daftar buku dengan filter pencarian
   $query = "SELECT * FROM buku WHERE 1=1";
   if (!empty($search_judul)) {
       $query .= " AND Judul LIKE '%" . $conn->real_escape_string($search_judul) . "%'";
   }
   if (!empty($search_tahun)) {
       $query .= " AND Tahun_Terbit = " . $conn->real_escape_string($search_tahun);
   }

    $result = $conn->query($query);
?>
