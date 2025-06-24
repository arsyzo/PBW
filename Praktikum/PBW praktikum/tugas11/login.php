<?php
session_start();
// Jika sudah login, langsung redirect ke halaman dashboard
if (isset($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Masuk ke dalam sistem</h2>

  <?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger">
      <?= htmlspecialchars($_GET['error']) ?>
    </div>
  <?php endif; ?>

  <form method="post" action="proses_login.php" class="mt-3">
    <div class="mb-3">
      <label for="username" class="form-label">Nama pengguna:</label>
      <input type="text" id="username" name="username" 
             class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Kata sandi:</label>
      <input type="password" id="password" name="password" 
             class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</body>
</html>
