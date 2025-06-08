-- Membuat database
CREATE DATABASE IF NOT EXISTS kasir_db;
USE kasir_db;

-- Membuat tabel kasir
CREATE TABLE IF NOT EXISTS kasir (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_barang VARCHAR(100) NOT NULL,
  harga INT NOT NULL,
  jumlah INT NOT NULL
);

-- Contoh data awal
INSERT INTO kasir (nama_barang, harga, jumlah) VALUES
('Pensil', 2000, 10),
('Buku Tulis', 5000, 5),
('Penghapus', 1500, 7);
