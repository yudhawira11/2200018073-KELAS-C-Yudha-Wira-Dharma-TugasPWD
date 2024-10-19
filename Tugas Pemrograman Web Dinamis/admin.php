<?php
session_start();
if (!isset($_SESSION['SES_USERPLG'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin</title>
</head>
<body>
    <h2>Selamat Datang di Halaman Admin</h2>
    <p>Anda berhasil login sebagai <?php echo $_SESSION['SES_USERPLG']; ?></p>
    <a href="manage_registration.php">Kelola Pendaftaran</a><br><br>
    <a href="logout.php">Logout</a>
</body>
</html>