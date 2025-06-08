<?php
include 'koneksi.php';
$nama = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($conn, "INSERT INTO kasir (nama_barang, harga, jumlah) VALUES ('$nama', '$harga', '$jumlah')");
header("Location: index.php");
?>