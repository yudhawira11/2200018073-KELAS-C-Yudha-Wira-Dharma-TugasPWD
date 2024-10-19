<?php
// mengambil file koneksi.php
include_once("config.php");

// mengambil id dari url
$id = $_GET['id'];

// Syntax untuk menghapus data berdasarkan id
$result = mysqli_query($conn, "delete from registration where id = '$id'");

// Setelah berhasil dihapus redirect ke index.php
header("Location:manage_registration.php");
