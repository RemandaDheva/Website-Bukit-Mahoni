-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2024 pada 11.09
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `kategori`, `images`) VALUES
(1, 'sports', 'archer.jpg'),
(2, 'sports', 'racing.jpg'),
(3, 'sports', 'racing2.jpg'),
(4, 'zoo', 'a.jpg'),
(5, 'zoo', 'b.jpg'),
(6, 'zoo', 'c.jpg'),
(7, 'zoo', 'd.jpg'),
(8, 'zoo', 'e.jpg'),
(9, 'zoo', 'f.jpg'),
(10, 'zoo', 'g.jpg'),
(11, 'zoo', 'h.jpg'),
(12, 'zoo', 'i.jpg'),
(13, 'zoo', 'j.jpg'),
(14, 'zoo', 'k.jpg'),
(15, 'zoo', 'l.jpg'),
(16, 'zoo', 'm.jpg'),
(17, 'zoo', 'n.jpg'),
(18, 'zoo', 'o.jpg'),
(19, 'zoo', 'p.jpg'),
(20, 'zoo', 'q.jpg'),
(21, 'zoo', 'r.jpg'),
(22, 'zoo', 's.jpg'),
(23, 'zoo', 't.jpg'),
(24, 'zoo', 'u.jpg'),
(25, 'zoo', 'v.jpg'),
(26, 'zoo', 'w.jpg'),
(27, 'zoo', 'x.jpg'),
(29, 'mahoni', '1.jpg'),
(30, 'mahoni', '2.jpg'),
(31, 'mahoni', '3.jpg'),
(32, 'mahoni', '4.jpg'),
(33, 'mahoni', '5.jpg'),
(34, 'mahoni', '6.jpg'),
(35, 'mahoni', '7.jpg'),
(36, 'mahoni', '8.jpg'),
(37, 'mahoni', '9.jpg'),
(38, 'mahoni', '10.jpg'),
(39, 'mahoni', '11.jpg'),
(40, 'mahoni', '12.jpg'),
(41, 'mahoni', '13.jpg'),
(42, 'mahoni', '14.jpg'),
(43, 'mahoni', '15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
