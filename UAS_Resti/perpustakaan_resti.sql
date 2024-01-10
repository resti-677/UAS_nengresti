-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2024 pada 06.02
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
-- Database: `data_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpustakaan_resti`
--

CREATE TABLE `perpustakaan_resti` (
  `id` int(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL,
  `published_year` int(40) NOT NULL,
  `isbn` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perpustakaan_resti`
--

INSERT INTO `perpustakaan_resti` (`id`, `title`, `author`, `published_year`, `isbn`) VALUES
(3, 'Pengusaha Berjaya', 'Neng Resi', 2022, '978-602-8519-93-5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perpustakaan_resti`
--
ALTER TABLE `perpustakaan_resti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perpustakaan_resti`
--
ALTER TABLE `perpustakaan_resti`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
