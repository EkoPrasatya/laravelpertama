-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 057.0.0.1
-- Generation Time: Apr 23, 2022 at 05:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!42222 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!42222 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!42222 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!42222 SET NAMES utf8mb4 */;

--
-- Database: `laravelpertama`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `nama`, `no_telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Rio', 0545634753, 'Bandung', '2022-04-23 05:22:40', '2022-04-23 05:22:40'),
(2, 'Rara', 0545673285, 'Cirebon', '2022-04-23 05:22:40', '2022-04-23 05:22:40'),
(3, 'Mimin Sudarja', 0545805628, 'Indramyu', '2022-04-23 05:22:40', '2022-04-23 05:22:40'),
(4, 'Suna Baris', 0545427934, 'Medan', '2022-04-23 05:22:40', '2022-04-23 05:22:40'),
(5, 'Kakang Mardi', 0545832069, 'Majalengka', '2022-04-23 05:22:40', '2022-04-23 05:22:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!42222 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!42222 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!42222 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
