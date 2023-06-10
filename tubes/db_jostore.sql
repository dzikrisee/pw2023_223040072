-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Jun 2023 pada 19.38
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jostore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(9, 'Baju'),
(10, 'Celana'),
(11, 'Sepatu'),
(12, 'Laptop'),
(15, 'Smartphone'),
(19, 'Jam Tangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text,
  `ketersediaan_stok` enum('habis','tersedia') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`) VALUES
(12, 11, 'Adidas NMD R1', '2.300.000', 'hG00DME55EWv5NWQkVLD.jpg', 'SEPATU RAJUT ELASTIS UNTUK BERGERAK BERSAMA ANDA, DIBUAT SEBAGIAN DENGAN BAHAN DAUR ULANG.\r\n\r\nUntuk setiap putaran, putaran, pivot, dan jeda, sepatu adidas ini tahu bahwa mereka memiliki satu tugas: merespons. Kesesuaian yang pas seperti kaus kaki dimulai dengan bagian atas rajutan elastis yang dibuat dengan benang berperforma tinggi yang lentur dengan kaki Anda. Bantalan BOOST mengembalikan energi berdasarkan langkah Anda, dan lapisan lembut memungkinkan Anda melewatkan kaus kaki jika Anda mau. Tambalan tumit ikonis memamerkan gaya khas NMD untuk tampilan progresif yang tampil sehari-hari dengan mudah.                                                                                ', 'tersedia'),
(16, 12, 'ASUS ROG Strix G15', '21.000.000', '9KMOz69ejFnMP2VWDmeu.jpg', 'AMD Ryzen™ 7 6800H NVIDIA® GeForce RTX™ 3050 8GB 512GB M.2 NVMe™ PCIe® 4.0 SSD Windows 11 Home', 'tersedia'),
(17, 15, 'Iphone 14 Pro Max', '24.999.999', 'yzo4cRlaov1T8cxTdfpB.jpg', '[Ini Contoh. \nini contoh]', 'tersedia'),
(19, 9, 'Flanel Uniqlo', '500.000', 'YNcIO1R9MSCe7YNpGvgZ.jpg', '100% katun flannel yang lebih tebal.\r\nBrushed di kedua sisi untuk tekstur yang hangat dan lembut.\r\nTerlihat cocok dengan sendirinya atau sebagai lapisan luar.\r\nRegular dan loose fit yang serbaguna.         ', 'tersedia'),
(20, 19, 'Apple Watch Series 8', '7.200.000', 'c3UZJixUIZmKbNfhDQsf.png', 'br1\r\nbr2\r\nbr3\r\n                                                ', 'tersedia'),
(22, 11, 'Adidas Sense Boost', '1.200.000', 'bx36HmOoc5zrgC4UNZAq.jpg', '[Ini Contoh. \nini contoh]', 'tersedia'),
(24, 12, 'Asus Tuf Gaming F15', '19.000.000', 'Gb3rwT3vbiYwNlxrLg0N.jpg', '[Ini Contoh. \nini contoh]', 'tersedia'),
(25, 15, 'Iphone 13 - Blue', '12.000.000', '6tLvAPNaQCizuXB1i0hZ.jpg', '[Ini Contoh. \nini contoh]', 'tersedia'),
(26, 9, 'Flanel Uniqlo - Cream', '500.000', 'VHH7VH1ZvYGfJmb6wGJ0.png', '100% katun flannel yang lebih tebal.\r\nBrushed di kedua sisi untuk tekstur yang hangat dan lembut.\r\nTerlihat cocok dengan sendirinya atau sebagai lapisan luar.\r\nRegular dan loose fit yang serbaguna.   ', 'tersedia'),
(27, 19, 'Samsung Galaxy Watch 5', '2.800.000', 'yAe9IwssR6Q5cSUuF5R6.png', '[Ini Contoh. \nini contoh]', 'tersedia'),
(29, 10, 'Uniqlo Jeans Slimfit', '600.000', 'THJBkCyxdDsQ0ZSoX7IJ.jpg', 'Celana denim selvedge Pria yang terlihat semakin bagus ketika Anda sering memakainya. Bergaya &#039;&#039;red ear&#039;&#039; yang memiliki karakter tersendiri.\r\n', 'tersedia'),
(31, 10, 'Bikers Jeans', '500.000', 'XYDs4rxF4YDoXmaTCNAV.png', '98% cotton\r\n2% elastane\r\nSkinny fit', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `role` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(2, 'nisa2', '$2y$10$R7.pu3pxlzxWb4xmRmdDieP7sl3shZlv8R2vWnFaiRPuw9G8EnCoG', 'admin'),
(5, 'z', '$2y$10$Lwhq5p/ilROoZbFoUgGGUeX9w0zpwPNhIbFby1HioFtaTjjtwbxri', 'user'),
(17, 'admin', '$2y$10$XafabJt.Ft4Bf32F/D3P1u4m9M0V0iPh4UKjS4DjBNobT2pqkzhAu', 'admin'),
(38, 'a', '$2y$10$9JTQiXU0465cx.5FIGWvGu7FhY7Kf26brauYrb7XE6ozK7nEPU79i', 'admin'),
(39, 'masjo', '$2y$10$B0vD5aE.3Op/9nW/PFnH9utFzuQ8wUIq7iMv.cKRG3pTnKliKPANm', 'user'),
(40, 'dezikse', '$2y$10$0cOW8zXKG3cdvA6H.X3a7eD29rJJW8NMt69wTR3IGzxt/hDACeYUO', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
