<?php
    session_start();

    $_SESSION = array();

    session_destroy();

    header("Location: login.php?message=" . urlencode("Anda telah berhasil logout."));
    exit;
?>