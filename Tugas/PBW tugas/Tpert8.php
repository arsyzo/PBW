<!-- tugas -->
 <?php

    // Latihan praktikum
    // Buat program menggunakan switch untuk menentukan jenis kendaraan berdasarkan jumlah roda.
    // Gunakan for untuk mencetak bilangan genap dari 2 sampai 10.
    // Buat array daftar nama hewan dan tampilkan menggunakan foreach.
    // Gunakan ternary operator untuk menentukan apakah angka adalah genap atau ganjil.
    // Buat untuk setiap jawaban soal no 1 sampai 4 dalam file include dalam navigasi


$roda = 2;

switch ($roda) {
    case 2:
        echo "Jenis kendaraan: Motor<br>";
        break;
    case 4:
        echo "Jenis kendaraan: Mobil<br>";
        break;
    case 6:
        echo "Jenis kendaraan: Truk kecil<br>";
        break;
    default:
        echo "Jenis kendaraan tidak diketahui<br>";
}


?>

<?php
for ($i = 2; $i <= 10; $i += 2) {
    echo "Bilangan genap: $i<br>";
}
?>

<?php
$hewan = ["Kucing", "Anjing", "Kelinci", "Burung", "buaya", "kangguru"];
foreach ($hewan as $nama) {
    echo "Hewan: $nama<br>";
}
?>


<?php
$angka = 7;
$hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
echo "Angka $angka adalah $hasil<br>";
?>



