-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 10:17 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecatalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(20) NOT NULL,
  `file` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `file`) VALUES
(2, 'master-slide-04.jpg'),
(3, 'blogH.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(20) NOT NULL,
  `judul_artikel` varchar(50) DEFAULT NULL,
  `vsort` text DEFAULT NULL,
  `vlong` text DEFAULT NULL,
  `vdate` date DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul_artikel`, `vsort`, `vlong`, `vdate`, `file`) VALUES
(8, 'Dakar: Stage I, Awal yang baik', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p><br></p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p><br></p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p><br></p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p><br></p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p><br></p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', '2019-08-02', 'shop-item-09.jpg'),
(9, 'Kehebohan perusahaan motor dalam bla bla', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volupt', '<p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\"><br style=\"margin: 0px; padding: 0px;\"></p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\"><br style=\"margin: 0px; padding: 0px;\"></p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\"><br style=\"margin: 0px; padding: 0px;\"></p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\"><br style=\"margin: 0px; padding: 0px;\"></p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\"><br style=\"margin: 0px; padding: 0px;\"></p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\"><br style=\"margin: 0px; padding: 0px;\"></p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\"><br style=\"margin: 0px; padding: 0px;\"></p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\"><br style=\"margin: 0px; padding: 0px;\"></p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\"><br style=\"margin: 0px; padding: 0px;\"></p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\"><br style=\"margin: 0px; padding: 0px;\"></p><p style=\"text-align: justify; margin-bottom: 0px; padding: 0px; font-family: Montserrat-Regular; font-size: 15px; line-height: 1.7; color: rgb(136, 136, 136);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', '2018-06-02', 'engine-1.png'),
(10, 'Rem yang luar biasa', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p><br></p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p><br></p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p><br></p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p><br></p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><p><br></p><p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', '2019-07-02', 'item-07.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(20) NOT NULL,
  `pembelian` text DEFAULT NULL,
  `penting` text DEFAULT NULL,
  `retur` text DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `pembelian`, `penting`, `retur`, `alamat`) VALUES
(1, 'Untuk informasi pembelian dan pemesanan, dapat menghubungi admin kami:\r\n1. Roma Irama - 0821 **** ****\r\n2. Ona Sutra - 0821 **** ****\r\n3. Iyan Kasela - 0899 **** ****\r\n\r\nPembayaran dapat ditransfer ke:\r\nBRI: ##########\r\nBCA: ##########\r\nMandiri: ##########', 'Nomor rekening yang berlaku adalah yang tertera diatas. Selain dari nomor rekening yang tercantum diatas, dapat kami pastikan PENIPUAN.', 'Kami hanya mengembalikan barang cacat produksi dan jika kesalahan pada terjadi pada saat ekspedisi, tidak menjadi tanggungjawab kami. Karena kami sudah memastikan dan mengecek terlebih dahulu barang tersebut sebelum kami kirim.', 'Jl. Kutilang No. 4\r\nRT 01 / RW 02\r\nPekanbaru, Riau, Indonesia\r\n\r\n(Kami belum membuka cabang di lokasi lain, jika ada yang mengatasnamakan alamat lain, bisa dipastikan PENIPUAN)');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'habibi', 'habibi1234');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(20) NOT NULL,
  `nama_produk` varchar(20) DEFAULT NULL,
  `harga_produk` int(20) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `diskon` int(20) DEFAULT NULL,
  `best_seller` varchar(20) DEFAULT NULL,
  `nama_file` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `kategori`, `diskon`, `best_seller`, `nama_file`) VALUES
(12, 'Diskon Aja', 11000, 'Suspensi', 10, 'No', 'exaust-1.png'),
(13, 'Diskon BEst', 32000, 'Suspensi', 32, 'Yes', 'IMG_20140511_194703.jpg'),
(15, 'Tidak ada', 12345, 'Suspensi', 0, 'No', '1200px-ISO_C++_Logo.svg.png'),
(17, 'Best aja', 10000000, 'Pengereman', 0, 'Yes', 'engine-1.png'),
(18, 'Nge test 1', 1230000000, 'Lainnya', 10, 'Yes', 'item-02.jpg'),
(19, 'Nge Test 2', 43000000, 'Knalpot', 9, 'No', 'exaust-1.png'),
(20, 'Mesin Mewah', 98200000, 'Mesin', 50, 'No', 'engine-1.png'),
(21, 'Ban Mewah', 14500000, 'Lainnya', 0, 'Yes', 'item-05.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
