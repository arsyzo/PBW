<?php
session_start();

// Kosongkan seluruh session
$_SESSION = [];
session_unset();
session_destroy();

// (Opsional) Hapus cookie session jika ada
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect ke login.php dengan pesan
header("Location: login.php?message=" . urlencode("Anda berhasil logout."));
exit;
?>
