<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Kasir</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Aplikasi Kasir</h1>
    <form id="form" action="add.php" method="POST">
      <input type="text" name="nama_barang" placeholder="Nama Barang" required>
      <input type="number" name="harga" placeholder="Harga" required>
      <input type="number" name="jumlah" placeholder="Jumlah" required>
      <button type="submit">Tambah</button>
    </form>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Total</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';
        $result = mysqli_query($conn, "SELECT * FROM kasir");
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_barang'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['jumlah'] ?></td>
            <td><?= $row['harga'] * $row['jumlah'] ?></td>
            <td>
              <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
              <a href="delete.php?id=<?= $row['id'] ?>" class="hapus-link">Hapus</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

  <script src="script.js"></script>
</body>
</html>