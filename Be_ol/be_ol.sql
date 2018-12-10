-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 06:12 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be_ol`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga_sevice`
--

CREATE TABLE `harga_sevice` (
  `km` int(5) NOT NULL,
  `harga` int(6) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_sevice`
--

INSERT INTO `harga_sevice` (`km`, `harga`, `deskripsi`) VALUES
(1000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM,  test jalan.'),
(2000, 20000, 'Cek:front fork,absorber,comp stir,lampu,oli mesin,filter udara,roda depan,rem depan,handle gas,busi,isi oli,accu,rem belaang,roda belakang,rantai,aliran oli,rpm,diagnostic tool'),
(4000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(8000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(10000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(12000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(14000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(16000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(18000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(20000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(22000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(24000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(26000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(28000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(30000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(32000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(34000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(36000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(38000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(40000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(42000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(44000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(46000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(48000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(50000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(52000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(54000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(56000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(58000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(60000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(62000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(64000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(66000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(68000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(70000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(72000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(74000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(76000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(78000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(80000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(82000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(84000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(86000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(88000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(90000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(92000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(94000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(96000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(98000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.'),
(100000, 20000, 'Cek: Front fork, absorber, comp stir, lampu-lampu, tap oli mesin, filter udara, roda depan, rem depan, handle gas, busi, isi oli, accu, rem belakang, roda belakag, rantai, diagnostic tool, aliran oli, RPM, test jalan.');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id_info` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` enum('Oli','Sparepart') NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Yusril Fahmi Al Faizi', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dtl_oli`
--

CREATE TABLE `tb_dtl_oli` (
  `id_detail` int(11) NOT NULL,
  `id_oli` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `stok` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dtl_oli`
--

INSERT INTO `tb_dtl_oli` (`id_detail`, `id_oli`, `id_admin`, `tanggal`, `stok`) VALUES
(14, 0, 0, '2018-12-05', 2),
(18, 0, 1, '2018-12-05', 15),
(20, 6, 1, '2018-12-05', 15),
(21, 6, 1, '2018-12-05', 15),
(22, 2, 1, '2018-12-05', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dtl_trans`
--

CREATE TABLE `tb_dtl_trans` (
  `kode_transaksi` int(11) NOT NULL,
  `id_oli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_oli`
--

CREATE TABLE `tb_oli` (
  `id_oli` int(11) NOT NULL,
  `nama_oli` tinytext NOT NULL,
  `harga` int(6) NOT NULL,
  `kategori` enum('bebek','sport','matic') NOT NULL,
  `jml_stok` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_oli`
--

INSERT INTO `tb_oli` (`id_oli`, `nama_oli`, `harga`, `kategori`, `jml_stok`) VALUES
(1, 'AHM', 45000, 'bebek', 2),
(2, 'AHM SPX', 49500, 'sport', 4),
(4, 'AHM SPX-HX', 45000, 'bebek', 6),
(5, 'AHM SPORT', 56000, 'sport', 6),
(6, 'MPX 1 (Maximum Protection Expert)', 49500, 'bebek', 6),
(7, 'AHM Transmisi', 15000, 'matic', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `kode_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_oli` int(11) NOT NULL,
  `model` enum('Matic','Sport','Bebek') NOT NULL,
  `nama_kendaraan` tinytext NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `no_polisi` varchar(13) NOT NULL,
  `km` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` enum('Lunas','Belum Lunas') NOT NULL,
  `bukti_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`kode_transaksi`, `id_user`, `id_oli`, `model`, `nama_kendaraan`, `tahun`, `no_polisi`, `km`, `tgl_transaksi`, `total_harga`, `status`, `bukti_pembayaran`) VALUES
(21, 2, 2, 'Matic', 'Vario 150', '2017', 'P 2980 RD', 38000, '2018-12-09 00:00:00', 69500, 'Belum Lunas', ''),
(22, 2, 6, 'Matic', 'Vario 150', '2017', 'P 2980 RD', 38000, '2018-12-09 00:00:00', 69500, 'Belum Lunas', ''),
(23, 2, 5, 'Sport', 'Vario 150', '2014', 'P 2980 RD', 36000, '2018-12-09 00:00:00', 76000, 'Belum Lunas', ''),
(24, 2, 1, 'Matic', 'Vario 150', '2017', 'P 2980 RD', 8000, '2018-12-09 00:00:00', 65000, 'Belum Lunas', ''),
(26, 2, 1, 'Matic', 'Vario 150', '2017', 'P 2980 RD', 1000, '2018-12-09 00:00:00', 65000, 'Belum Lunas', ''),
(31, 2, 2, 'Matic', 'Vario 150', '2017', 'P 2980 RD', 18000, '2018-12-09 00:00:00', 69500, 'Belum Lunas', ''),
(32, 2, 2, 'Sport', 'Vario 150', '2017', 'P 2980 RD', 10000, '2018-12-09 00:00:00', 69500, 'Belum Lunas', ''),
(36, 2, 1, 'Matic', 'Vario 150', '2018', 'P 2980 RD', 4000, '2018-12-09 00:00:00', 65000, 'Belum Lunas', ''),
(37, 1, 2, 'Matic', 'ads', '2017', 'P 2980 RD', 2000, '2018-12-09 00:00:00', 75000, 'Belum Lunas', ''),
(38, 2, 1, 'Matic', 'Vario 150', '2017', 'P 2980 RD', 10000, '2018-12-09 23:49:03', 65000, 'Belum Lunas', ''),
(39, 2, 2, 'Matic', 'Vario 150', '2018', 'P 2980 RD', 22000, '2018-12-10 09:01:26', 69500, 'Belum Lunas', ''),
(40, 1, 2, 'Matic', 'Vario 150', '2018', 'P 2980 RD', 20000, '2018-12-10 09:52:18', 69500, 'Belum Lunas', ''),
(41, 1, 1, 'Matic', 'Vario 150', '2017', 'P 2980 RD', 34000, '2018-12-10 09:56:01', 65000, 'Belum Lunas', ''),
(42, 1, 1, 'Matic', 'Vario 150', '2018', 'P 2980 RD', 20000, '2018-12-10 09:57:54', 65000, 'Belum Lunas', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` tinytext NOT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telfon` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `jenis_kelamin`, `tgl_lahir`, `no_telfon`, `alamat`, `email`, `password`) VALUES
(1, 'Yusril Fahmi Al Faizi', 'Laki - laki', '1998-09-24', '085839152974', 'Jember', 'yusrilfahmi09@gmail.com', 'fahmi1234'),
(2, 'yusril', 'Laki - laki', '0000-00-00', '081232269220', 'Jember', 'yusrilfahmi832@gmail.com', 'fahmi1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga_sevice`
--
ALTER TABLE `harga_sevice`
  ADD PRIMARY KEY (`km`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_dtl_oli`
--
ALTER TABLE `tb_dtl_oli`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_oli` (`id_oli`);

--
-- Indexes for table `tb_dtl_trans`
--
ALTER TABLE `tb_dtl_trans`
  ADD UNIQUE KEY `id_oli` (`id_oli`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `tb_oli`
--
ALTER TABLE `tb_oli`
  ADD PRIMARY KEY (`id_oli`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD UNIQUE KEY `id_user_2` (`id_oli`,`km`),
  ADD KEY `km` (`km`),
  ADD KEY `id_oli` (`id_oli`),
  ADD KEY `km_2` (`km`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_dtl_oli`
--
ALTER TABLE `tb_dtl_oli`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_oli`
--
ALTER TABLE `tb_oli`
  MODIFY `id_oli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dtl_trans`
--
ALTER TABLE `tb_dtl_trans`
  ADD CONSTRAINT `tb_dtl_trans_ibfk_1` FOREIGN KEY (`id_oli`) REFERENCES `tb_oli` (`id_oli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
