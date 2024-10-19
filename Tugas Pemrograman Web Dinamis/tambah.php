<?php
// Memanggil file koneksi.php
include_once("config.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['Submit'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $negara = $_POST['negara'];
    $alamat = $_POST['alamat'];

    // Syntax untuk menambahkan data ke table mahasiswa
    $result = mysqli_query($conn, "insert into registration (email, nama, institusi, negara, alamat) 
        values('$email', '$nama', '$institusi', '$negara', '$alamat')");

    // Menampilkan pesan jika data berhasil disimpan.
    echo "Data berhasil disimpan. <a href='manage_registration.php'>Lihat peserta seminar</a>";
    exit();
}
?>
<html>

<head>
    <title>Halaman Tambah Peserta</title>
</head>

<body>
    <a href="manage_registration.php">Kembali</a>
    <br /><br />
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Email</td>
                <td><input type="Email" name="email"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Institusi</td>
                <td><input type="text" name="institusi"></td>
            </tr>
            <tr>
                <td>Negara</td>
                <td><input type="text" name="negara"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>