<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran UKT</title>
</head>
<body>
    <h2>Form Data Pembayaran Mahasiswa</h2>

    <form method="post" action="">
        NPM: <input type="text" name="npm"><br>
        Nama: <input type="text" name="nama"><br>
        Prodi: <input type="text" name="prodi"><br>
        Semester: <input type="number" name="semester"><br>
        Biaya UKT (Rp): <input type="number" name="ukt"><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $npm = $_POST["npm"];
        $nama = $_POST["nama"];
        $prodi = $_POST["prodi"];
        $semester = $_POST["semester"];
        $ukt = $_POST["ukt"];
        $diskon = 0;

        // Menentukan diskon
        if ($ukt >= 5000000) {
            $diskon = 10;
            if ($semester > 8) {
                $diskon += 5;
            }
        }

        // Hitung total yang harus dibayar
        $potongan = ($diskon / 100) * $ukt;
        $total_bayar = $ukt - $potongan;

        // Tampilkan hasil
        echo "<h3>Luaran yang Diharuskan</h3>";
        echo "NPM : " . htmlspecialchars($npm) . "<br>";
        echo "NAMA : " . htmlspecialchars($nama) . "<br>";
        echo "PRODI : " . htmlspecialchars($prodi) . "<br>";
        echo "SEMESTER : " . htmlspecialchars($semester) . "<br>";
        echo "BIAYA UKT : Rp. " . number_format($ukt, 0, ',', '.') . "<br>";
        echo "DISKON : " . $diskon . "%<br>";
        echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0, ',', '.');
    }
    ?>
</body>
</html>
