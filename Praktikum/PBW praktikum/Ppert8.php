<!-- Percabangan Switch Case pada PHP -->
<?php
$hari = "Senin";


switch ($hari) {
   case "Senin":
       echo "Hari pertama kerja!";
       break;
   case "jum'at":
       echo "Solat jumat!";
       break;
   case "Minggu":
       echo "Libur akhir pekan!";
       break;
   default:
       echo "Hari biasa.";
}
?>

<!-- Perulangan For Loop -->
<?php
for ($i = 1; $i <= 5; $i++) {
   echo "Angka ke-”.$i.”<br>";
}

$buah = ["Apel", "Jeruk", "Mangga"];


for ($i = 0; $i < count($buah); $i++) {
   echo $buah[$i] . "<br>";
}
?>

<!-- Perulangan foreach -->
 <?php
$mahasiswa = [
   "10001" => "Andi",
   "10002" => "Budi",
   "10003" => "Citra"
];
foreach ($mahasiswa as $nim => $nama) {
   echo "NIM: ". $nim .", Nama:". $nama."<br>";
}
?>


<!-- ernary Operator di PHP -->
 <?php
 $umur = 18;
$status = ($umur >= 17) ? "Dewasa" : "Anak-anak";


echo $status;
?>


<!-- Fungsi Include dan Require pada PHP -->
 <?php
 include 'nama_file.php';
require 'nama_file.php';?>

<!-- contoh menu.php -->
<?php
echo '<a href="index.php">Beranda</a> | <a href="about.php">Tentang</a> | <a href="contact.php">Kontak</a>';
?>
<!-- header.php -->
<html>
   <body>
       <div class="menu">
           <?php include 'menu.php'; ?>
       </div>
   </body>
</html>