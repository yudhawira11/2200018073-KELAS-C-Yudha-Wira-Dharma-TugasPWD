<?php
// Memanggil file koneksi.php
include_once("config.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $negara = $_POST['negara'];
    $alamat = $_POST['alamat'];

    // Syntax untuk mengupdate data user berdasarkan id
    $result = mysqli_query($conn, "update registration set nama = 
        '$nama', institusi = '$institusi', negara = '$negara', 
        alamat = '$alamat' where id = '$id'");

    // Redirect ke index.php
    header("Location: manage_registration.php");
}
?>
<?php
// Menampilkan data berdasarkan data yang kita pilih.

// Mengambil id dari url
$id = $_GET['id'];

// Syntax untuk mengambil data berdasarkan id
$result = mysqli_query($conn, "SELECT * FROM registration WHERE id='$id'");
while ($user_data = mysqli_fetch_array($result)) {
    $email = $user_data['email'];
    $nama = $user_data['nama'];
    $institusi = $user_data['institusi'];
    $negara = $user_data['negara'];
    $alamat = $user_data['alamat'];
}
?>
<html>

<head>
    <title>Halaman Edit Peserta</title>
</head>

<body>
    <a href="manage_registration.php">Kembali</a>
    <br /><br />
    <form name="update_mahasiswa" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
            </tr>
            <tr>
                <td>Institusi</td>
                <td><input type="text" name="institusi" value=<?php echo $institusi; ?>></td>
            </tr>
            <tr>
                <td>Negara</td>
                <td><input type="text" name="negara" value=<?php echo $negara; ?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $id ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>