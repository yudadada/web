-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 12:58 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(11) NOT NULL,
  `judul_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `judul_kategori`) VALUES
(1, 'html'),
(2, 'css'),
(3, 'php');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` tinyint(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reset` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `fullname`, `password`, `level`, `email`, `reset`) VALUES
(1, 'admin', 'yuda nugraha', '$2y$10$S2Zf3zkuE20X.Rf8NJDc8./bQlo.hCW.os3cLHkKe5cjtepbag3je', 1, 'ayudanugraha1@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_artikel`
--

CREATE TABLE `t_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `kode_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_artikel`
--

INSERT INTO `t_artikel` (`id_artikel`, `judul`, `penulis`, `gambar`, `status`, `tanggal`, `isi`, `kode_kategori`) VALUES
(8, 'Tutorial insert data Part 1 ( Membuat Koneksi Database & Form )', 'Yuda Nugraha 2014140563', 'gambar1511442380.png', 1, '2017-11-20', 'Pertama buatlah sebuah database dengan nama insert. dan table dengan nama data field nya sebagai berikut\r\n\r\n*id int(11) ,nama varchar(35),*alamat varchar(35),*sekolah varchar(35)\r\n Selanjutnya buatlah sebuah folder di htdoc dengan nama tes_insert, dan di dalam folder buatlah sebuah file koneksi dengan nama db.php, script nya bisa di lihat di gambar<br> setelah itu buatlah sebuah file dengan nama form.php dan di dalam form tuliskan script seperti berikut', 3),
(10, 'Tutorial Membuat Form Html Sederhana Dengan Sedikit Css', 'Ferdi Andre Kurniawan', 'gambar1511325179.png', 1, '2017-11-23', 'Kali Ini Saya Akan Membagian Sedikit Tips, Bagaimana Cara Membuat Tambilan Form Lebih Rapi Dengan Sedikit Css\r\nOke Langsung Saja Kalian Coba Tulis Script Di Gaambar , Lalu Kalian Jalankan\r\n', 1),
(11, 'Tutorial sederhana Membuat Form Dengan Boostrap', 'Nawawi Adrian Supandi', 'gambar1511326146.png', 1, '2017-11-24', 'Pertama kalian Download terlebih dahulu file boostrap di web resminya.\r\nsetelah terdoownload dan extract file tersebut dan buat sebuah file nama coba_boostrap.php.\r\n\r\nlalu kalian arahkan download script CDN nya.( kalian bisa ketik sendiri hanya susunan HTML saja) ..setelah itu copy kan script seperti gambar di samping di bawah tag pembuka body,\r\nlalu kalian jalankan dan lihat hasilnya..tampak lebih Cantik dengan bantuan boostrap....selamat mencoba ', 2),
(12, 'Tutorial Insert Data Part 2', 'Farezal Hakim', 'gambar1511327910.png', 1, '2017-11-23', 'Melanjutkan Turorial Yang Pertama Kini Saatnya Membuat Script Untuk Insert Data Sederhana  Kalian Bisa Menulis Dari Gambar Di Samping.. ', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `t_artikel`
--
ALTER TABLE `t_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_artikel`
--
ALTER TABLE `t_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
