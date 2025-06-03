<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Total Pembelian (Dengan Array)</title>
</head>
<body>

<?php
// Data barang dalam array
$barang = [
    "nama" => "Keyboard",
    "harga_satuan" => 150000,
    "jumlah_beli" => 2
];

// Menghitung total harga sebelum pajak
$total_harga_sebelum_pajak = $barang["harga_satuan"] * $barang["jumlah_beli"];

// Menghitung pajak 10%
$pajak = $total_harga_sebelum_pajak * 0.1;

// Menghitung total bayar (harga + pajak)
$total_bayar = $total_harga_sebelum_pajak + $pajak;

// Menampilkan hasil perhitungan
echo "<h2>Perhitungan Total Pembelian (Dengan Array)</h2>";
echo "<p>Nama Barang: " . $barang["nama"] . "</p>";
echo "<p>Harga Satuan: Rp " . number_format($barang["harga_satuan"], 0, ',', '.') . "</p>";
echo "<p>Jumlah Beli: " . $barang["jumlah_beli"] . "</p>";
echo "<p>Total Harga (Sebelum Pajak): Rp " . number_format($total_harga_sebelum_pajak, 0, ',', '.') . "</p>";
echo "<p>Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "</p>";
echo "<p>Total Bayar: Rp " . number_format($total_bayar, 0, ',', '.') . "</p>";

?>

</body>
</html>
