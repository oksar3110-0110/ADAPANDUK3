-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Nov 2017 pada 04.41
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adapandu`
--
CREATE DATABASE IF NOT EXISTS `adapandu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `adapandu`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `balita`
--

CREATE TABLE `balita` (
  `id_balita` int(5) NOT NULL,
  `nm_balita` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nm_ayah` varchar(30) NOT NULL,
  `nm_ibu` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `id_pos` int(5) NOT NULL,
  `id_login` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik`
--

CREATE TABLE `kritik` (
  `id_kritik` int(5) NOT NULL,
  `id_balita` int(5) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporankegiatanpos`
--

CREATE TABLE `laporankegiatanpos` (
  `id_lapo` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pos` int(5) NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `rahasia` varchar(50) NOT NULL,
  `jwb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `user`, `pass`, `type`, `rahasia`, `jwb`) VALUES
(1, 'abah', 'abah', 'ortu', 'ok', 'oka'),
(2, 'rein', 'a', 'ortu', 'ok', 'qqqq'),
(3, 'bahrain', '123', 'ortu', 'tau?', 'petis'),
(5, 'admin', 'admin', 'admin', 'admin', 'admin'),
(6, 'abah', 'abah', 'ortu', 'abah', 'abah'),
(7, 'halimah', '123', 'ortu', 'abc', 'abc'),
(8, 'dahlia1', 'dahllia1', 'pet', 'pet', 'pet'),
(9, 'abah123', 'abah', 'ortu', 'oksa', 'okokok'),
(10, '', '', 'ortu', '', ''),
(11, 'bahrainsyah', '123', 'ortu', 'jauh', 'jauh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkembangan`
--

CREATE TABLE `perkembangan` (
  `id_per` int(11) NOT NULL,
  `id_balita` int(11) NOT NULL,
  `tagl` date NOT NULL,
  `berat` int(11) NOT NULL,
  `DPT_1` int(11) NOT NULL,
  `DPT_2` int(11) NOT NULL,
  `DPT_3` int(11) NOT NULL,
  `DPT_4` int(11) NOT NULL,
  `POLIO_1` int(11) NOT NULL,
  `POLIO_2` int(11) NOT NULL,
  `POLIO_3` int(11) NOT NULL,
  `POLIO_4` int(11) NOT NULL,
  `CAMPAK` int(11) NOT NULL,
  `KET` int(11) NOT NULL,
  `CAT_TAMBAHAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(5) NOT NULL,
  `nm_pet` varchar(25) NOT NULL,
  `alamat_pet` varchar(25) NOT NULL,
  `id_login` int(5) NOT NULL,
  `id_pos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nm_pet`, `alamat_pet`, `id_login`, `id_pos`) VALUES
(1, 'warkonah', 'RT02', 8, 1),
(2, 'sarijem', 'RT01', 1, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos`
--

CREATE TABLE `pos` (
  `id_pos` int(5) NOT NULL,
  `nm_pos` varchar(25) NOT NULL,
  `alamat_pos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pos`
--

INSERT INTO `pos` (`id_pos`, `nm_pos`, `alamat_pos`) VALUES
(1, 'DAHLIA1', 'RT01-RT05'),
(2, 'DAHLIA 2', 'RT06-RT07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`id_balita`),
  ADD KEY `id_balita` (`id_balita`),
  ADD KEY `id_pos` (`id_pos`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id_kritik`),
  ADD KEY `id_kritik` (`id_kritik`),
  ADD KEY `id_balita` (`id_balita`);

--
-- Indexes for table `laporankegiatanpos`
--
ALTER TABLE `laporankegiatanpos`
  ADD PRIMARY KEY (`id_lapo`),
  ADD KEY `id_lapo` (`id_lapo`),
  ADD KEY `id_pos` (`id_pos`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `perkembangan`
--
ALTER TABLE `perkembangan`
  ADD PRIMARY KEY (`id_per`),
  ADD KEY `id_per` (`id_per`),
  ADD KEY `id_balita` (`id_balita`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_login` (`id_login`),
  ADD KEY `id_pos` (`id_pos`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id_pos`),
  ADD KEY `id_pos` (`id_pos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balita`
--
ALTER TABLE `balita`
  MODIFY `id_balita` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id_kritik` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laporankegiatanpos`
--
ALTER TABLE `laporankegiatanpos`
  MODIFY `id_lapo` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `perkembangan`
--
ALTER TABLE `perkembangan`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `id_pos` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `balita`
--
ALTER TABLE `balita`
  ADD CONSTRAINT `balita_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`),
  ADD CONSTRAINT `balita_ibfk_2` FOREIGN KEY (`id_pos`) REFERENCES `pos` (`id_pos`);

--
-- Ketidakleluasaan untuk tabel `kritik`
--
ALTER TABLE `kritik`
  ADD CONSTRAINT `kritik_ibfk_1` FOREIGN KEY (`id_balita`) REFERENCES `balita` (`id_balita`);

--
-- Ketidakleluasaan untuk tabel `laporankegiatanpos`
--
ALTER TABLE `laporankegiatanpos`
  ADD CONSTRAINT `laporankegiatanpos_ibfk_1` FOREIGN KEY (`id_pos`) REFERENCES `pos` (`id_pos`);

--
-- Ketidakleluasaan untuk tabel `perkembangan`
--
ALTER TABLE `perkembangan`
  ADD CONSTRAINT `perkembangan_ibfk_1` FOREIGN KEY (`id_balita`) REFERENCES `balita` (`id_balita`);

--
-- Ketidakleluasaan untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `login` (`id_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
