-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2024 pada 13.31
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mie_ayam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contack`
--

CREATE TABLE `contack` (
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contack`
--

INSERT INTO `contack` (`nama`, `email`, `pesan`) VALUES
('qww', 'muhammadalvariezi@gmail.com', 'wdwjdg'),
('qww', 'muhammadalvariezi@gmail.comq', 'sqs'),
('4tt', 'muhammadalvariezi@gmail.com', 'ehfwe'),
('ddw', 'muhammadalvariezi@gmail.com', 'wdwddqqq'),
('taufan', 'muhammadalvariezi@gmail.com', 'gacor'),
('taufan ganteng', 'muhammadalvariezi@gmail.com', 'semoga topan sukses'),
('haikal', 'alparejii12@gmail.com', 'iyahh'),
('roqi', 'roqi47@gmail.com', 'semoga lancar'),
('jamal', 'sangarboy@gmail.com', 'test admin'),
('popo', 'popo@gmail.com', 'test pop up');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'taufan', '123', 'taufan alvariezi'),
(2, 'haikal', '123', 'fikri haikal'),
(3, 'alvariezi', '2006', 'alvariezi'),
(4, 'topan', '1212', 'admin'),
(5, 'muhammad taufan', '6c14da109e294d1e8155be8aa4b1ce8e', 'user'),
(6, 'jamal', 'c6f057b86584942e415435ffb1fa93d4', 'jamal keren');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
