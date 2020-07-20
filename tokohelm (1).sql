-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 05:12 AM
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
-- Database: `tokohelm`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(30) NOT NULL,
  `nama` text,
  `harga` int(10) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `foto`) VALUES
(1, 'Zeus Z-811 Plasma', 580000, 'gambar/..download1 (1).jpg'),
(2, 'Zeus Z-811 Black-Red', 580000, 'gambar/download1 (2).jpg'),
(3, 'Zeus Z-811 White-Black', 580000, 'gambar/download1 (3).jpg'),
(4, 'Zeus Z-811 Fluo-Yellow', 580000, 'gambar/Zeus_Z811_GP_AL2_Black_Yellow.png'),
(5, 'Zeus Z-811 White', 540000, 'gambar/6981194_76a398f2-0622-4a4a-90b6-790122eb50b1_450_450.jpg'),
(6, 'Zeus Z-811 Black', 540000, 'gambar/14895803_580371ef-8b96-44eb-9d4b-ccb8d34d6c23_450_450.jpg'),
(7, 'Zeus Z-811 Neon-Orange', 580000, 'gambar/Zeus_Z811_Speedster_AL6_Neon_Orange_Black.jpg'),
(8, 'Zeus Z-811 Yamaha-Blue', 580000, 'gambar/zeus_zeus-zs-811-helm-full-face---yamaha-blue-al17-black_full04.jpg'),
(9, 'Zeus Z-806 Black/Red', 540000, 'gambar/Zeus_Z806_ii31_Black_Red.jpg'),
(10, 'Zeus Z-806 Black/Green', 540000, 'gambar/NEW_Zeus_Z806_ii48_Corsa_Green_DISKON_GROSIR_MURAH_BARU_OBRA.png'),
(11, 'Zeus Z-811 Yellow', 580000, 'gambar/6223642_3b4aba38-26b3-43dd-a1d9-cf5ce461bb97_450_450.png'),
(12, 'Visor Iridium Gold', 180000, 'gambar/..zeus_zeus-iridium-zs-811-visor-helm---silver_full02.jpg'),
(13, 'Zeus Half Face 610-Ivory', 435000, 'gambar/..zeus_helm-halfface-zeus-import-zs-610-ivory_full05.jpg'),
(14, 'Zeus Half Face 610-Blue', 435000, 'gambar/..zeus_zeus-zs-helm-half-face---iblue_full05.jpg'),
(15, 'Zeus Half Face 610-Red', 435000, 'gambar/..ZS-610-red.jpg'),
(16, 'Zeus Z-811 GP-Yellow', 580000, 'gambar/..5464725_80dbd7a7_5552_4ec4_a154_614f78149a1e_968_726.jpg'),
(17, 'Zeus Z-811 GP Black', 580000, 'gambar/..14895803_cf82ca8d-82ad-42cb-b675-ce15c1cc86bd_450_450.jpg'),
(18, 'Zeus Half Face 610 Silver', 435000, 'gambar/..zeus_zeus-double-visor-zs-610k-polos-helm-half-face-titanium_full05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(8) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `email_pembeli` varchar(50) NOT NULL,
  `telepon_pembeli` varchar(14) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `kd_pos` int(10) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `email_pembeli`, `telepon_pembeli`, `kota`, `alamat_pembeli`, `kd_pos`, `barang`, `harga`) VALUES
(20, 'ichsan mardani', 'mardani300@gmail.com', '082169687517', 'bekasi', 'pluto', 17136, '0', ''),
(23, 'nandacpt', 'nandacpt@gmail.com', '082122635363', 'jakarta', 'jl nusa indah 7 no 56', 13234, '0', ''),
(24, 'iadsjkdahkajdsh', 'jkadshdaj@gmail.com', '0130128309128', 'adskhaskjdhkjahdkjah', 'khadkjahsdkjadhkajdhkadh', 278234723, 'bar', ''),
(25, 'cobacoba', 'coba@gmail.com', '123456789', 'qwertyuiop', 'asdfxcvqwertsdfghxcvb', 12345678, 'Zeu', ''),
(26, 'akurapopo', 'aku@gmail.com', '92348032498943', 'hadhkdahjdjhda', 'hjdahjadhjdahjadjh', 2147483647, 'Zeus Z-806 Black/Red', ''),
(35, 'aaaaaaaaaa', 'aaaaaaa', '11111111111', 'aaaaaaaaa', 'aaaaaaaa', 11111111, 'Zeus Half Face 610-Blue', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'nanda', 'nputra71@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
