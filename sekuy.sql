-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2024 pada 08.21
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekuy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` enum('makanan','minuman') NOT NULL,
  `stok` int(10) UNSIGNED NOT NULL,
  `harga_beli` int(10) UNSIGNED NOT NULL,
  `harga_jual` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori`, `stok`, `harga_beli`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 'mie', 'makanan', 13, 10000, 11000, '2024-01-23 06:44:34', '2024-02-23 04:20:19'),
(3, 'aqua gelas1', 'minuman', 10, 2000, 3000, '2024-01-23 06:44:34', '2024-01-26 04:30:38'),
(4, 'ale-ale', 'minuman', 10, 1000, 2500, '2024-01-23 06:44:34', NULL),
(5, 'kopi cup', 'minuman', 10, 2000, 3000, '2024-01-23 06:44:34', '2024-01-26 04:28:06'),
(6, 'kacang atom', 'makanan', 8, 1500, 2500, '2024-01-26 04:21:17', '2024-02-16 07:36:06'),
(9, 'gado-gado', 'makanan', 5, 2, 4, '2024-02-16 06:18:59', '2024-02-16 06:19:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `no_telepon`, `created_at`, `updated_at`) VALUES
(1, 'Sari', 'Jl. Hanang No.34', '087677545533', '2024-02-02 07:24:46', '2024-02-15 05:44:08'),
(2, 'Dani', 'Jl. Menari No.23', '082322344431', '2024-02-15 05:05:13', NULL),
(3, 'Beni', 'Jl. Melayang No.32', '083423311123', '2024-02-15 05:05:13', NULL),
(4, 'Conis', 'Jl. Awam No.33', '083345554433', '2024-02-15 05:05:13', NULL),
(5, 'Dadang', 'Jl. Manara No.10', '081112233322', '2024-02-15 05:05:13', NULL),
(7, 'Bardo', 'Jl. Hanang No.18', '083445566554', '2024-02-15 05:35:17', NULL),
(8, 'Dadang', 'jl. Kerapu no.10', '085678788877', '2024-02-16 06:13:39', '2024-02-16 06:13:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pelanggan` int(11) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `total_harga` int(10) UNSIGNED NOT NULL,
  `id_staff` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_pelanggan`, `id_barang`, `jumlah`, `total_harga`, `id_staff`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 11000, 1, '2024-01-23 06:56:00', '2024-02-15 05:06:49'),
(3, 3, 3, 1, 3000, 3, '2024-01-23 06:56:00', '2024-02-15 05:07:50'),
(5, 5, 5, 1, 3000, 5, '2024-01-23 06:56:00', '2024-02-15 05:07:50'),
(30, 1, 1, 2, 22000, 1, '2024-02-16 07:35:22', NULL),
(31, 7, 1, 1, 11000, 1, '2024-02-16 07:35:43', NULL),
(32, 3, 6, 3, 7500, 1, '2024-02-16 07:36:06', NULL),
(33, 1, 1, 2, 22000, 1, '2024-02-23 04:20:19', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','keuangan','logistik') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'yanto', '$2y$10$YDCytvWv.2/M7ii.hV7f/Oe49tEq9SM/.X/MBiFbQ333KE.ajbQB.', 'admin', '2024-01-23 06:40:56', '2024-02-19 07:40:14'),
(2, 'yanti', '$2a$12$dx8oShOiQ4TQ9AdObignU.yK/oxhpPXnYYPvzOz18f7hVnvNASzDO', 'keuangan', '2024-01-23 06:40:56', NULL),
(3, 'yanta', '$2y$10$4wRmUSHa.ZDduC3THwGsdOKkAl1DQj4bu9WH.Bu2jiko4ybFZystm', 'keuangan', '2024-01-23 06:40:56', '2024-01-26 01:41:37'),
(4, 'yantu', '$2a$12$btek0jen4FzYvHUhpNEocOGn8pEXgNxVrHnctuN3YvLfhWrHhWVGC', 'admin', '2024-01-23 06:40:56', NULL),
(5, 'yante', '$2a$12$poVcxFZzo5j9gsyFLe8AIuHWfFl/Wvu7.DE/Z6kUfpW1QNhsaeBtO', 'logistik', '2024-01-23 06:40:56', NULL),
(6, 'yanud', '$2y$10$UHq7n1TeQ40j7nTS4Kg4uOpc8FvPtS/9qaj3IPwoacC9CkuNgk2ee', 'keuangan', '2024-01-26 01:35:20', NULL),
(8, 'okta1', '$2y$10$ZQKf3L5qCZBjSFgRYTrfgu9DPoPE2hoq6Xk/gg9hrRLj.ZPFozFr.', 'admin', '2024-02-19 05:19:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_staff` (`id_staff`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_4` FOREIGN KEY (`id_staff`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
