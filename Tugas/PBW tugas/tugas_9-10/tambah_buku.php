<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Tambah Buku</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
   <div class="container mt-4">
       <h2>Tambah Buku Baru</h2>
       <form method="post" action="proses_tambah_buku.php">
           <div class="mb-3">
               <label for="judul" class="form-label">Judul</label>
               <input type="text" class="form-control" id="judul" name="judul" required />
           </div>
           <div class="mb-3">
               <label for="penulis" class="form-label">Penulis</label>
               <input type="text" class="form-control" id="penulis" name="penulis" required />
           </div>
           <div class="mb-3">
               <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
               <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" required />
           </div>
           <div class="mb-3">
               <label for="harga" class="form-label">Harga</label>
               <input type="number" class="form-control" id="harga" name="harga" step="0.01" required />
           </div>
           <div class="mb-3">
               <label for="stok" class="form-label">Stok</label>
               <input type="number" class="form-control" id="stok" name="stok" required />
           </div>
           <button type="submit" class="btn btn-primary">Tambah Buku</button>
       </form>
   </div>
</body>
</html>
