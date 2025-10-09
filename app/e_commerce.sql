-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2025 pada 14.32
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `img` varchar(2000) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(11) NOT NULL,
  `category` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama_produk`, `img`, `harga`, `deskripsi`, `stok`, `category`) VALUES
(1, 'Air Jordan 1 Low Travis Scott x Fragment (100% Authentic) - 40.5', 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/5/18/67627f13-cbb6-4df3-8f1d-6c2bb9bb04de.jpg', 1200000, 'Jordan 1 Low Travis Scott x Fragment – Triple Threat Kolaborasi: Travis, Fragment, dan Jordan Brand\r\nKalau ngomongin sneaker kolaborasi yang masuk kategori grail, nama Jordan 1 Low Travis Scott x Fragment udah pasti nongol di urutan atas. Tiga ikon—Travis Scott, Fragment Design, dan Jordan Brand—bergabung dalam satu siluet legendaris buat bikin sesuatu yang benar-benar out of this world.', 12, 'Shoes'),
(2, 'EIGER MIGRATES PACK 15L BACKPACK - Olive', 'https://images.tokopedia.net/img/cache/700/o3syd0/1997/1/1/05743cbb800649cc8abb7e32707d093f~.jpeg', 309000, 'empatkan semua barang-barang bawaan saat beraktivitas dengan Migrates Pack 15L. Backpack pria dari EIGER 1989 ini memiliki kompartemen utama yang dapat diakses dari atas dan memiliki saku dalam di bagian depan dan samping yang dapat digunakan untuk menyimpan barang-barang kecil yang sering digunakan. Material luar tas ini memiliki finishing anti air yang melindunginya sementara dari air atau hujan ringan. Bahan polyester yang dapat didaur ulang digunakan untuk lapisan dalam.', 21, 'backpack'),
(3, 'EIGER MEN\'S ESCRAPMENT XTR LS F1 SHIRT - Brown, 3XL', 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/12/9/c1b34f8a-0540-454d-8bdb-9a8290bea121.jpg', 377000, 'Kemeja lengan panjang multifungsi yang pas untuk dikenakan baik saat menjalani kegiatan outdoor maupun harian. Men\'s Escrapment XTR LS F1 membuat Anda dapat menjelajah dengan bebas berkat bahan katun ripstop nya yang kuat. Dilengkapi dengan fitur banyak saku, kemeja ini memberi Anda ruang untuk menyimpan perlengkapan berukuran saku yang sering Anda gunakan di tempat yang mudah dijangkau.', 201, 'kemeja'),
(4, 'House of Smith T Shirt Badge Tshirt White - Kaos Pria Lengan Pendek', 'https://images.tokopedia.net/img/cache/700/aphluv/1997/1/1/cfda11672e044617b0bde275370d8474~.jpeg', 98000, 'Fitur Utama:\r\n• Bahan: Cotton Combed 24\'s with Sablon Raster, 100% Cotton, menawarkan perpaduan sempurna antara kelembutan dan Kenyamanan.\r\n• Desain: Desain Sablon Raster, simpel dan elegan yang cocok untuk berbagai kesempatan.\r\n• Warna: White, mudah dipadukan dengan berbagai pakaian.\r\n• Kualitas: 180-190 gsm, memberikan kehangatan dan kenyamanan yang substansial.\r\n\r\nDetail Ukuran:\r\n• M: Chest: 52 cm | Length: 70 cm | Sleeve: 22 cm\r\n• L: Chest: 54 cm | Length: 73 cm | Sleeve: 23 cm\r\n• XL: Chest: 56 cm | Length: 76 cm | Sleeve: 25 cm\r\n• 2XL: Chest: 64 cm | Length: 80 cm | Sleeve: 26 cm\r\n• 3XL: Chest: 67 cm | Length: 82 cm | Sleeve: 27 cm\r\n• 4XL: Chest: 69 cm | Length: 84 cm | Sleeve: 28 cm', 282, 'T-shirt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
