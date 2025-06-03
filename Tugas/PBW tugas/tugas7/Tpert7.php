<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Nilai Mata Kuliah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
        }
        .container {
            background-color: #e9ecef;
            width: 400px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
        }
        input[type="text"], input[type="number"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        h2 {
            color: #0d2c53;
        }
        .result {
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kalkulator Nilai Mata Kuliah</h2>
        <form method="post" action="">
            Nama Mahasiswa:<br>
            <input type="text" name="nama" required><br>
            Mata Kuliah:<br>
            <input type="text" name="matkul" required><br>
            Nilai Angka:<br>
            <input type="number" name="nilai" min="0" max="100" required><br>
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $matkul = $_POST["matkul"];
            $nilai = $_POST["nilai"];
            $predikat = "";
            $status = "";

            // Menentukan predikat berdasarkan rentang
            if ($nilai >= 85 && $nilai <= 100) {
                $predikat = "A";
            } elseif ($nilai >= 75 && $nilai <= 84) {
                $predikat = "B";
            } elseif ($nilai >= 65 && $nilai <= 74) {
                $predikat = "C";
            } elseif ($nilai >= 50 && $nilai <= 64) {
                $predikat = "D";
            } elseif ($nilai >= 0 && $nilai <= 49) {
                $predikat = "E";
            } else {
                $predikat = "Tidak valid";
            }

            // Menentukan status
            if (in_array($predikat, ['A', 'B', 'C'])) {
                $status = "Lulus";
            } elseif (in_array($predikat, ['D', 'E'])) {
                $status = "Tidak Lulus";
            } else {
                $status = "Tidak Diketahui";
            }

            // Tampilkan hasil
            echo "<div class='result'>";
            echo "<h3>Hasil:</h3>";
            echo "Nama : " . htmlspecialchars($nama) . "<br>";
            echo "Mata Kuliah : " . htmlspecialchars($matkul) . "<br>";
            echo "Nilai : " . $nilai . "<br>";
            echo "Predikat : " . $predikat . "<br>";
            echo "Status : " . $status;
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
