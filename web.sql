-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2022 pada 06.36
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anim`
--

CREATE TABLE `tbl_anim` (
  `id_anim` int(10) NOT NULL,
  `foto_anime` mediumblob NOT NULL,
  `nama_anime_ind` varchar(50) NOT NULL,
  `nama_anime_jp` varchar(50) NOT NULL,
  `peringkat` varchar(30) NOT NULL,
  `rating` varchar(30) NOT NULL,
  `episode` varchar(30) NOT NULL,
  `studio` varchar(30) NOT NULL,
  `rilis` varchar(30) NOT NULL,
  `genre_anime` varchar(100) NOT NULL,
  `penilaian` varchar(30) NOT NULL,
  `link_anim` varchar(100) NOT NULL,
  `sinopsis` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_anim`
--

INSERT INTO `tbl_anim` (`id_anim`, `foto_anime`, `nama_anime_ind`, `nama_anime_jp`, `peringkat`, `rating`, `episode`, `studio`, `rilis`, `genre_anime`, `penilaian`, `link_anim`, `sinopsis`) VALUES
(1, 0x53637265656e73686f7420283838292e706e67, 'overlord', 'overlord', '12', '9.12 ', '24 episode', 'mappa ', ' 2020', 'adventure', 'KOSONGIN', ' asc', ''),
(2, 0x53637265656e73686f7420283839292e706e67, '1', '2', '3', '5 ', '6', '7 ', ' 8', '9', '0', ' fads;fkndas;kvbhdsaivbdsav;dsvd;soavubads;vksbvifbvaif;vbivebfhc[VIUSDNVIBSD[VAUSNBVWRBF[SOUBpcvisd', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komen`
--

CREATE TABLE `tbl_komen` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `isi_komentar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pin`
--

CREATE TABLE `tbl_pin` (
  `id_pin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_anime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `foto_profile` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`, `foto_profile`) VALUES
(7, 'admin', '$2y$10$mETjdwU7vCCUcJYg7Ei6Nehu1WTfHIOndl.bhgYrBxa8pgoKNz5/W', 'admin', ''),
(8, 'user', '$2y$10$rN9rAFRHKvzLLp4L1CkjcO9O5INZhlbUVZZNNpQSF0LFI.iKHJ7E.', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_anim`
--
ALTER TABLE `tbl_anim`
  ADD PRIMARY KEY (`id_anim`);

--
-- Indeks untuk tabel `tbl_komen`
--
ALTER TABLE `tbl_komen`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tbl_pin`
--
ALTER TABLE `tbl_pin`
  ADD PRIMARY KEY (`id_pin`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_anim`
--
ALTER TABLE `tbl_anim`
  MODIFY `id_anim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_komen`
--
ALTER TABLE `tbl_komen`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pin`
--
ALTER TABLE `tbl_pin`
  MODIFY `id_pin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
