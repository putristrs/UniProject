-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 06:28 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siserahas`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `antrian_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `no_polisi` varchar(100) NOT NULL,
  `pemilik` varchar(255) NOT NULL,
  `pkb` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mekanik` varchar(255) NOT NULL,
  `bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `antrian_id`, `status`, `no_polisi`, `pemilik`, `pkb`, `keluhan`, `mulai`, `selesai`, `mekanik`, `bayar`) VALUES
(10, 1, 'proses', 's34', 'Julaiha', '123', 'sw', '2019-05-29', '2019-05-18 02:56:19', 'Rudi', 'Sudah'),
(12, 1, 'proses', 's34', 'Julaiha', 'ssw', 'sw', '2019-05-10', '2019-05-18 03:01:47', 'Rudi', 'Sudah'),
(13, 1, 'Proses', 's34', 'Julaiha', 'ssw', 'sw', '2019-05-10', '2019-05-18 03:04:09', 'Rudi', 'Sudah'),
(14, 1, 'Proses', 's34h', 'Julaihahanma', '123', 'wewe', '2019-05-10', '2019-05-18 03:04:39', 'Rudi', 'Sudah');

-- --------------------------------------------------------

--
-- Table structure for table `daftarkontak`
--

CREATE TABLE `daftarkontak` (
  `id` int(11) NOT NULL,
  `polisi_id` int(11) NOT NULL,
  `nopolisi` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomorhandphone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarkontak`
--

INSERT INTO `daftarkontak` (`id`, `polisi_id`, `nopolisi`, `nama`, `nomorhandphone`) VALUES
(1, 1, 'H12302', 'Compliance', 8888);

-- --------------------------------------------------------

--
-- Table structure for table `pesankeluar`
--

CREATE TABLE `pesankeluar` (
  `id` int(11) NOT NULL,
  `keluar_id` int(11) NOT NULL,
  `tanggaljam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_polisi` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomorhandphone` int(50) NOT NULL,
  `kontenpesan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesankeluar`
--

INSERT INTO `pesankeluar` (`id`, `keluar_id`, `tanggaljam`, `no_polisi`, `nama`, `nomorhandphone`, `kontenpesan`, `status`) VALUES
(1, 3, '0000-00-00 00:00:00', 's34', 'Compliance', 8888, '21', 'Proses'),
(2, 1, '2019-05-09 17:00:00', '123', 'Compliance', 123456, '21', 'Sudahhh');

-- --------------------------------------------------------

--
-- Table structure for table `pesanterkirim`
--

CREATE TABLE `pesanterkirim` (
  `id` int(11) NOT NULL,
  `terkirim_id` int(11) NOT NULL,
  `tanggaljam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_polisi` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomorhandphone` int(50) NOT NULL,
  `kontenpesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanterkirim`
--

INSERT INTO `pesanterkirim` (`id`, `terkirim_id`, `tanggaljam`, `no_polisi`, `nama`, `nomorhandphone`, `kontenpesan`) VALUES
(1, 3, '0000-00-00 00:00:00', 's34', 'Compliance', 8888, 'wsw'),
(2, 1, '2019-05-18 04:21:32', 's34', 'Compliance', 123456, '21'),
(3, 1, '2019-05-18 04:22:43', 's34', 'Compliance', 123456, 'bkbkbk');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `id` int(11) NOT NULL,
  `reminder_id` int(11) NOT NULL,
  `kpb` int(255) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `biaya` varchar(100) NOT NULL,
  `fasilitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`id`, `reminder_id`, `kpb`, `keterangan`, `biaya`, `fasilitas`) VALUES
(1, 3, 1, 'Banyak Bergerak', '123', 'sup'),
(2, 1, 222, 'Banyak Bergerak', '123', 'suppe'),
(3, 1, 122, 'Berfikir sistematis ', '2', 'jusse'),
(4, 1, 222, 'Banyak Bergerak', '123', 'swswsw');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomorhandphone` varchar(255) NOT NULL,
  `level` enum('admin','dosen') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kode_antrian` varchar(255) NOT NULL,
  `kode_reminder` varchar(255) NOT NULL,
  `kode_daftarkontak` varchar(255) NOT NULL,
  `kode_pesankeluar` varchar(255) NOT NULL,
  `kode_pesanterkirim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nomorhandphone`, `level`, `foto`, `kode_antrian`, `kode_reminder`, `kode_daftarkontak`, `kode_pesankeluar`, `kode_pesanterkirim`) VALUES
(1, 'admin', '1234', '123456', 'admin', '29052018171228dfg.png', 'Antrian', 'Reminder', 'Daftar Kontak', 'Pesan Keluar', 'Pesan Terkirim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_id` (`antrian_id`);

--
-- Indexes for table `daftarkontak`
--
ALTER TABLE `daftarkontak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_id` (`polisi_id`);

--
-- Indexes for table `pesankeluar`
--
ALTER TABLE `pesankeluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_id` (`keluar_id`);

--
-- Indexes for table `pesanterkirim`
--
ALTER TABLE `pesanterkirim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_id` (`terkirim_id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_id` (`reminder_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `daftarkontak`
--
ALTER TABLE `daftarkontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesankeluar`
--
ALTER TABLE `pesankeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesanterkirim`
--
ALTER TABLE `pesanterkirim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftarkontak`
--
ALTER TABLE `daftarkontak`
  ADD CONSTRAINT `daftarkontak_ibfk_1` FOREIGN KEY (`polisi_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
