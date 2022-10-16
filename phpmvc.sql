-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 10:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_axcel`
--

CREATE TABLE `db_axcel` (
  `id` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(10) NOT NULL,
  `revenue` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_hotel`
--

CREATE TABLE `m_hotel` (
  `id` int(11) NOT NULL,
  `kode_hotel` int(11) NOT NULL,
  `nama` varchar(110) NOT NULL,
  `alamat` varchar(110) NOT NULL,
  `rate_hotel` int(110) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_hotel`
--

INSERT INTO `m_hotel` (`id`, `kode_hotel`, `nama`, `alamat`, `rate_hotel`, `date_created`, `date_modified`) VALUES
(24, 11, 'Hotel Icon', 'Bogor', 3, 1665737404, 1665737404),
(25, 12, 'Hotel Pangrango', 'Bogor', 3, 1665737404, 1665737404),
(26, 13, 'Hotel Puncak', 'Bogor', 4, 1665737404, 1665737404),
(27, 14, 'Hotel Gunung Geulis', 'Bogor', 5, 1665737404, 1665737404);

-- --------------------------------------------------------

--
-- Table structure for table `m_pendamping`
--

CREATE TABLE `m_pendamping` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `kota` varchar(12) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_pendamping`
--

INSERT INTO `m_pendamping` (`id`, `nik`, `username`, `nama`, `jenis_kelamin`, `kota`, `date_created`, `date_modified`) VALUES
(22, 12345, 'hils', 'Hilmi', 'Laki laki', 'Sukabumi', 1665733671, 1665733671),
(23, 123456, 'Awidz', 'Awidyo', 'Laki laki', 'Madiun', 1665733671, 1665733671),
(24, 1234567, 'Sav', 'Savira', 'Perempuan', 'Madiun', 1665733671, 1665733671),
(25, 12345678, 'Febs', 'Febrian', 'Laki laki', 'Madiun', 1665733671, 1665733671),
(26, 123456789, 'Zidans', 'Zidan', 'Laki laki', 'Jakarta', 1665733671, 1665733671);

-- --------------------------------------------------------

--
-- Table structure for table `m_pengguna`
--

CREATE TABLE `m_pengguna` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `kota` varchar(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_pengguna`
--

INSERT INTO `m_pengguna` (`id`, `nik`, `username`, `nama`, `jenis_kelamin`, `kota`, `date_created`, `date_modified`) VALUES
(61, 303201011, 'veyyaz', 'Muhammad Arya', 'laki laki', 'bogor', 0, 0),
(62, 12345, 'hils', 'Hilmi', 'Laki laki', 'Sukabumi', 1665733336, 1665733336),
(63, 123456, 'Awidz', 'Awidyo', 'Laki laki', 'Madiun', 1665733336, 1665733336),
(64, 1234567, 'Sav', 'Savira', 'Perempuan', 'Madiun', 1665733336, 1665733336),
(65, 12345678, 'Febs', 'Febrian', 'Laki laki', 'Madiun', 1665733336, 1665733336),
(66, 123456789, 'Zidans', 'Zidan', 'Laki laki', 'Jakarta', 1665733336, 1665733336);

-- --------------------------------------------------------

--
-- Table structure for table `m_wisata`
--

CREATE TABLE `m_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kota` varchar(11) NOT NULL,
  `provinsi` varchar(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_wisata`
--

INSERT INTO `m_wisata` (`id`, `nama`, `kota`, `provinsi`, `deskripsi`, `date_created`, `date_modified`) VALUES
(11, 'Pantai Pandawa', 'Bali', 'NTB', 'Keelokan panatai yang indah', 0, 0),
(17, 'Taman Bunga', 'Bogor', 'Jawa Barat', 'Indah', 1665732571, 1665732571),
(18, 'Gunung Pancar', 'Bogor', 'Jawa Barat', 'Sejuk', 1665732571, 1665732571),
(19, 'Bukit senyum', 'Bandung', 'Jawa Barat', 'Indah', 1665732571, 1665732571),
(20, 'Kampung dago', 'Bandung', 'Jawa Barat', 'Sunyi', 1665732571, 1665732571),
(21, 'Water land', 'Cirebon', 'Jawa Barat', 'Ramai', 1665732571, 1665732571);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(12312445, 'muhammadaryarifan17@gmail.com', '202cb962ac59075b964b07152d234b70', 'veyyaz'),
(12312446, 'bapa@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'bapa'),
(12312447, 'veyyaz@gamil.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'veyyaz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_axcel`
--
ALTER TABLE `db_axcel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_hotel`
--
ALTER TABLE `m_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_pendamping`
--
ALTER TABLE `m_pendamping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_wisata`
--
ALTER TABLE `m_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_axcel`
--
ALTER TABLE `db_axcel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_hotel`
--
ALTER TABLE `m_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `m_pendamping`
--
ALTER TABLE `m_pendamping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `m_wisata`
--
ALTER TABLE `m_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12312448;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
