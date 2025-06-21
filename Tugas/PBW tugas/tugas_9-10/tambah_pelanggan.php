<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Tambah Pelanggan</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container mt-4">
   <h2>Tambah Pelanggan Baru</h2>
   <form method="post" action="proses_tambah_pelanggan.php">
       <div class="mb-3">
           <label for="nama" class="form-label">Nama</label>
           <input type="text" class="form-control" id="nama" name="nama" required />
       </div>
       <div class="mb-3">
           <label for="alamat" class="form-label">Alamat</label>
           <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
       </div>
       <div class="mb-3">
           <label for="email" class="form-label">Email</label>
           <input type="email" class="form-control" id="email" name="email" required />
       </div>
       <div class="mb-3">
           <label for="telepon" class="form-label">Telepon</label>
           <input type="tel" class="form-control" id="telepon" name="telepon" required />
       </div>
       <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
   </form>
</div>
</body>
</html>
