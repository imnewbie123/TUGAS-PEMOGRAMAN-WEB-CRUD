<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysqli_query($conn, "UPDATE kasir SET nama_barang='$nama', harga='$harga', jumlah='$jumlah' WHERE id=$id");
header("Location: index.php");
?>