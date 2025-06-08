<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM kasir WHERE id=$id"));
?>

<h2>Edit Barang</h2>
<form action="update.php" method="POST">
  <input type="hidden" name="id" value="<?= $data['id'] ?>">
  <input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>" required>
  <input type="number" name="harga" value="<?= $data['harga'] ?>" required>
  <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" required>
  <button type="submit">Update</button>
</form>