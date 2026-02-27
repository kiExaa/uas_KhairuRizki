-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Feb 2026 pada 12.29
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_gadget`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(20) NOT NULL,
  `kode_k` varchar(20) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kode_k`, `nama_kategori`) VALUES
(4, 'K01', 'Smartphone'),
(5, 'K02', 'Laptop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id` int(20) NOT NULL,
  `kode_m` varchar(20) NOT NULL,
  `nama_merk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id`, `kode_m`, `nama_merk`) VALUES
(9, 'M01', 'Samsung'),
(10, 'M02', 'Apple'),
(11, 'M03', 'MSI'),
(12, 'M04', 'Asus'),
(13, 'M04', 'Victus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(20) NOT NULL,
  `idk` varchar(20) NOT NULL,
  `idm` varchar(20) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `kategori_id` varchar(250) NOT NULL,
  `merk_id` varchar(250) NOT NULL,
  `foto` varchar(200) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `idk`, `idm`, `nama_produk`, `harga`, `stok`, `kategori_id`, `merk_id`, `foto`) VALUES
(1, 'K01', 'M01', 'SAMSUNG S25', 15000000, 5, '1', '9', 'Copy-of-sm-s938_galaxys25ultra_devicepenbackl30_titaniumgray_241107-scaled.webp'),
(2, '', '', '', 0, 0, '', '', 'Copy-of-sm-s938_galaxys25ultra_devicepenbackl30_titaniumgray_241107-scaled.webp'),
(6, '', '', 'katana 15 ', 50000000, 2, '2', '11', 'download.jpg'),
(7, '', '', '', 0, 0, '', '', 'Copy-of-sm-s938_galaxys25ultra_devicepenbackl30_titaniumgray_241107-scaled.webp'),
(8, '', '', 'SAMSUNG S25', 15000000, 5, '4', '9', 'Copy-of-sm-s938_galaxys25ultra_devicepenbackl30_titaniumgray_241107-scaled.webp'),
(9, '', '', 'katana 15 ', 50000000, 2, '5', '11', 'download.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `pass`) VALUES
(1, 'kiki', 'kiki123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
