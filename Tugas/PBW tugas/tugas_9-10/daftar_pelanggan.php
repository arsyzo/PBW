<?php include 'proses_daftar_pelanggan.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-4">
        <h2>Daftar Pelanggan</h2>

        <!-- Form Pencarian -->
        <form method="get" class="row g-3 mb-4">
            <div class="col-md-5">
                <label for="nama" class="form-label">Cari Berdasarkan Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama pelanggan" value="<?= htmlspecialchars($search_nama) ?>">
            </div>
            <div class="col-md-5">
                <label for="email" class="form-label">Cari Berdasarkan Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email" value="<?= htmlspecialchars($search_email) ?>">
            </div>
            <div class="col-md-1 align-self-end">
                <button type="submit" class="btn btn-primary w-100">Cari</button>
            </div>
            <div class="col-md-1 align-self-end">
                <a href="daftar_pelanggan.php" class="btn btn-secondary w-100">Reset</a>
            </div>
        </form>

        <!-- Tabel Daftar Pelanggan -->
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['ID'] ?></td>
                            <td><?= htmlspecialchars($row['Nama']) ?></td>
                            <td><?= htmlspecialchars($row['Alamat']) ?></td>
                            <td><?= htmlspecialchars($row['Email']) ?></td>
                            <td><?= htmlspecialchars($row['Telepon']) ?></td>
                            <td>
                                <a href="form_edit_pelanggan.php?id=<?= $row['ID'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="proses_hapus_pelanggan.php?id=<?= $row['ID'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Data tidak ditemukan</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
