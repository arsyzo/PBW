<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 7</title>
</head>
<body>

<?php
// Menampilkan teks sederhana
echo "Halo, selamat datang di dunia PHP!<br>";
?>

<?php
// Variabel string dan integer
$nama = "Budi";
$umur = 20;

// Menampilkan nilai variabel
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";
?>

<?php
// Konstanta
define("SITE_NAME", "unsika.ac.id");
define("VERSION", "1.0");

echo "Selamat datang di " . SITE_NAME . "<br>";
echo "Versi Sistem: " . VERSION . "<br>";
?>

<?php
// Contoh output dengan variabel
$nama = "Andi";
echo "Nama saya adalah " . $nama . "<br>";
?>

<?php
// Variabel umur
$umur = 25;
echo "Umur saya " . $umur . " tahun<br>";
?>

<?php
// Variabel float
$berat = 55.5;
echo "Berat badan saya " . $berat . " kg<br>";
?>

<?php
// Variabel boolean
$isLogin = true;
echo "Status login: " . ($isLogin ? "Aktif" : "Tidak aktif") . "<br>";
?>

<?php
// Array
$buah = ["apel", "jeruk", "mangga"];
echo "Buah favorit: " . $buah[1] . "<br>"; // jeruk
?>

<?php
// OOP sederhana
class Mahasiswa {
    public $nama;
    public function sapa() {
        return "Halo, saya " . $this->nama . "<br>";
    }
}
$mhs = new Mahasiswa();
$mhs->nama = "Jeni";
echo $mhs->sapa();
?>

<?php
// Null dan var_dump
$data = null;
echo "Tipe data null: ";
var_dump($data);
echo "<br>";
?>

<?php
// String dengan tanda kutip
$namaBarang = "keyboard";
echo "Nama barang: ";
var_dump($namaBarang);
?>

</body>
</html>
