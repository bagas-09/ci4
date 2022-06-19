-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2022 pada 11.33
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `informasi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama`, `tanggal`, `informasi`) VALUES
(1, 'Semarang Fest 2022 Volume 1', '2022-08-25', 'Halo, warga Semarang. Akhir\nbulan ini bakalan hadir Bazar Festival di Kota\nSemarang!\nSEMARANG FEST 2022 Volume 1 Collaboration\nwith Semarang Thrift Day\nLokasi : Metropoint Kota Lama.\nYuk, jangan sampai ketinggalan event\nSemarang Fest 2022 Vol. 1 ini ya. Oh iya 100%\nAcara ini GRATIS !!! Catat tanggalnya ya. See\nyou at Semarang Fest 2022 Vol.1'),
(2, 'IS.FEST 2022', '2022-07-13', 'IS.FEST 2022\r\n\"FESTIVAL SENI LINTAS GENERASI\"\r\nWitness our mesmerizing perfomance by_ :\r\n> HEIDY DIANA & OBBIE MESSAKH <\r\nHosted by :\r\n* MEGGY MC *\r\n!! *Don\'t miss out their amazing performance only\r\nat IS.FEST 2022* !!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `nama_pendaftar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `event_id`, `nama_pendaftar`, `email`, `tanggal_lahir`, `alamat`) VALUES
(3, 1, 'Emmanuel Bagas Agustha', 'gadingg@ghmail.com', '2001-09-05', 'Magelang'),
(4, 2, 'Raha oke', 'gading@gmail.com', '2022-06-13', 'okeee'),
(5, 1, 'adscfcd', 'bagasagustha@gmail.com', '2022-06-14', 'asdasf'),
(6, 2, 'dito', 'dito@gmail.com', '2022-06-15', 'fsafasf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'admin@undip.com', '$2y$10$n0L5pPOrA94HDPaa6K1XEuMU935ZHx5bnM0okHpHanAQp108d42oe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
