<?php
session_start();
include('config.php'); // File koneksi database

if (isset($_POST['TbLogin'])) {
    $TxtUserID = $_POST['TxtUserID'];
    $TxtPassID = $_POST['TxtPassID'];
    $pesan = [];

    // Validasi input
    if (trim($TxtUserID) == "") {
        $pesan[] = "Data User Name kosong";
    }
    if (trim($TxtPassID) == "") {
        $pesan[] = "Data Password kosong";
    }

    if (count($pesan) == 0) {
        // Query untuk memeriksa username dan password
        $query = "SELECT * FROM admin WHERE username='$TxtUserID' AND password='$TxtPassID'";
        $result = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['SES_USERPLG'] = $TxtUserID;
            header("Location: admin.php");
            exit;
        } else {
            // Jika username dan password salah
            header("Location: index.php?error=1");
            exit;
        }
    }

    // Menampilkan pesan kesalahan jika ada
    if (count($pesan) > 0) {
        echo "<br><br>";
        echo "<div align='left'>";
        echo "&nbsp; <b> Kesalahan Input : </b><br>";

        foreach ($pesan as $indeks => $pesan_tampil) {
            echo "<font color='#FF0000'>";
            echo "&nbsp; &nbsp;";
            echo ($indeks + 1) . ". $pesan_tampil<br>";
            echo "</font>";
        }

        echo "</div><br>";
    }
}
?>
