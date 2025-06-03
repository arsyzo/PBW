<!-- percobaan studikasus -->
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pemrograman_web_contoh';

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>


<!-- membuat tabel -->
<?php
include 'koneksi.php';

$sql = "
CREATE DATABASE IF NOT EXISTS pemrograman_web_contoh;
USE pemrograman_web_contoh;

CREATE TABLE IF NOT EXISTS buku (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Judul VARCHAR(255) NOT NULL,
    Penulis VARCHAR(255) NOT NULL,
    Tahun_Terbit INT NOT NULL,
    Harga DECIMAL(10,2) NOT NULL,
    Stok INT NOT NULL
);

CREATE TABLE IF NOT EXISTS pelanggan (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(255) NOT NULL,
    Alamat VARCHAR(255),
    Email VARCHAR(255),
    Telepon VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS pesanan (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Tanggal_Pesanan DATE NOT NULL,
    Pelanggan_ID INT NOT NULL,
    Total_Harga DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (Pelanggan_ID) REFERENCES pelanggan(ID)
);

CREATE TABLE IF NOT EXISTS detail_pesanan (
    Pesanan_ID INT NOT NULL,
    Buku_ID INT NOT NULL,
    Kuantitas INT NOT NULL,
    Harga_Per_Satuan DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (Pesanan_ID, Buku_ID),
    FOREIGN KEY (Pesanan_ID) REFERENCES pesanan(ID),
    FOREIGN KEY (Buku_ID) REFERENCES buku(ID)
);
";

// Eksekusi query
if ($conn->multi_query($sql)) {
    echo "Database dan tabel berhasil dibuat!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>


<!-- menambah data buku -->
<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $stmt = $conn->prepare("INSERT INTO buku (Judul, Penulis, Tahun_Terbit, Harga, Stok) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiii", $judul, $penulis, $tahun_terbit, $harga, $stok);

    if ($stmt->execute()) {
        echo "Buku berhasil ditambahkan!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!-- menampilkan daftar buku -->
<?php
include 'koneksi.php';

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['ID'] . " - " . $row['Judul'] . " - " . $row['Penulis'] . " - " . $row['Tahun_Terbit'] . " - Rp" . number_format($row['Harga'], 2) . "<br>";
}

$conn->close();
?>
