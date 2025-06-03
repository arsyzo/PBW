<!-- pengenalan from -->
<form action="proses.php" method="post">
     //kode proses php
</form>

<!-- Menangani data dengan method POST dan GET. -->
<?php $var_nama = $_POST['nama'];
$var_email = $_POST['email'];
<!-- get: mengirimkan data dari browser ke server dalam aplikasi web. -->
 <!--  -->
http://localhost/?nama=andre&email=gmail
$var_nama = $_GET['nama'];
?>

<!-- percabangan php -->
<?php
// contoh implementasi satu kondisi
$nilai = 75;
if ($nilai >= 80) {
   echo "Nilai A";
} elseif ($nilai >= 70) {
   echo "Nilai B";
} else {
   echo "Nilai C";
}

// contoh implementasi 2 kondisi
$umur = 20;
$ktp = true;
if ($umur >= 17 && $ktp) {
   echo "Boleh memilih";
}


if (!empty($_POST['nama'])) {
 echo "Nama: " . htmlspecialchars($_POST['nama']);
} else {
 echo "Namma tidak boleh kosong!";
}

?>






