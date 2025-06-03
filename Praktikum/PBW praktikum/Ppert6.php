<?php
   echo "Halo, selamat datang di dunia PHP!"; //outputnya
?>

<!-- contoh php yg menggunakan variabel -->
<?php
   $nama = "Budi";
   $umur = 20;


   // Menampilkan nilai variabel
   echo "Nama: " . $nama . "<br>";
   echo "Umur: " . $umur . " tahun<br>";
?>

<!-- konstanta -->
 define("NAMA_KONSTANTA", nilai);
 <!-- contoh penggunaannya -->
<?php
define("SITE_NAME", "unsika.ac.id");
define("VERSION", "1.0");


echo "Selamat datang di " . SITE_NAME . "<br>";
echo "Versi Sistem: " . VERSION . "<br>";
?>


<!-- tipe data -->

<!-- string -->
<?php
   $nama = "Andi";
   echo "Nama saya adalah". $nama;
?>

<!-- integer -->
<?php
   $umur = 25;
   echo "Umur saya”. $umur. “tahun";
?>

<!-- float -->
<?php
   $berat = 55.5;
   echo "Berat badan saya". $berat ."kg";
?>

<!-- bolean -->
<?php
   $isLogin = true;
?>

<!-- array -->
<?php
   $buah = ["apel", "jeruk", "mangga"];
   echo $buah[1];
?>

<!-- object -->
<?php
   class Mahasiswa {
       public $nama;
       public function sapa() {
           return "Halo, saya $this->nama";
       }
   }
   $mhs = new Mahasiswa();
   $mhs->nama = "Jeni";
   echo $mhs->sapa();
?>

<!-- null -->
<?php
   $data = null;
   var_dump($data);
?>
