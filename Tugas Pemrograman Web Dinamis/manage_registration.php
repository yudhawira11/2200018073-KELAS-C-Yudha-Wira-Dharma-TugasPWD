<?php
// Memanggil file koneksi.php
include_once("config.php");

// Syntax untuk mengambil semua data dari table mahasiswa
$result = mysqli_query($conn, "select * from registration");
?>
<html>

<head>
    <title>Halaman Kelola Pendaftaran</title>
</head>

<body>
    <a href="admin.php">Kembali</a><br><br>
    <a href="tambah.php">Tambah Data Baru</a><br /><br />
    <h1 style="text-align: center; font-size: 20px;">Registrasi Peserta Seminar</h1><br>
    <table width='80%' border=1>
        <tr>
            <th>Email</th>
            <th>Nama</th>
            <th>Institusi</th>
            <th>Negara</th>
            <th>Alamat</th>
            <th>Update</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['institusi'] . "</td>";
            echo "<td>" . $user_data['negara'] . "</td>";
            echo "<td>" . $user_data['alamat'] . "</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>