-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jan 2023 pada 02.48
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` varchar(100) NOT NULL,
  `bulanlahir` varchar(15) NOT NULL,
  `tahunlahir` int(4) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `fotoktp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id`, `nama`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `bulanlahir`, `tahunlahir`, `nomor`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `fotoktp`) VALUES
(1, 'mashud wahyu', 'laki-laki', 'Way Jepara', '19', 'April', 1998, '082186312272', 'jl.jagalan', 'kutoharjo', 'kaliwungi', 'kendal', 'jawa tengah', 'test.jpg'),
(2, 'mashud', 'laki-Laki', 'Way Jepara', '15', 'agustus', 1945, '082162177128', 'Jl. jagalan', 'kutoharjo', 'kaliwungu', 'kendal', 'jawa tengah', 'test.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
