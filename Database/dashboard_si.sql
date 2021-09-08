-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 03:55 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard_si`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `tahun` text NOT NULL,
  `dosen_aktif_penelitian` text NOT NULL,
  `dosen_aktif_pengabdian` text NOT NULL,
  `dosen_aktif_publikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `tahun`, `dosen_aktif_penelitian`, `dosen_aktif_pengabdian`, `dosen_aktif_publikasi`) VALUES
(1, '2017', 'Indah Lestari, S.S.T., M.T.', 'Indah Lestari, S.S.T., M.T.', 'Indah Lestari, S.S.T., M.T.'),
(2, '2017', 'Mutia Sari Zulvi, S.S.T., M.M.S.I.', 'Mutia Sari Zulvi, S.S.T., M.M.S.I.', 'Mutia Sari Zulvi, S.S.T., M.M.S.I.'),
(3, '2017', 'Syefrida Yulina, S.T., M.Sc.', 'Syefrida Yulina, S.T., M.Sc.', 'Syefrida Yulina, S.T., M.Sc.'),
(4, '2017', 'Anggy Trisnadoli, S.S.T., M.T.', 'Anggy Trisnadoli, S.S.T., M.T.', 'Anggy Trisnadoli, S.S.T., M.T.'),
(5, '2017', 'Dr. Dadang Syarif Sihabudin Sahid,S.Si., M.Sc.', 'Dr. Dadang Syarif Sihabudin Sahid,S.Si., M.Sc.', 'Dr. Dadang Syarif Sihabudin Sahid,S.Si., M.Sc.'),
(6, '2017', 'Dini Nurmalasari, S.T., M.T.', 'Dini Nurmalasari, S.T., M.T.', 'Dini Nurmalasari, S.T., M.T.'),
(7, '2017', 'Heni Rachmawati, S.T., M.T.', 'Heni Rachmawati, S.T., M.T.', 'Heni Rachmawati, S.T., M.T.'),
(8, '2017', 'Istianah Muslim, S.T., M.T.', 'Istianah Muslim, S.T., M.T.', 'Istianah Muslim, S.T., M.T.'),
(9, '2017', 'Satria Perdana Arifin, S.T., M.T.I.', 'Satria Perdana Arifin, S.T., M.T.I.', 'Satria Perdana Arifin, S.T., M.T.I.'),
(10, '2017', 'Warnia Nengsih, S.Kom., M.Kom.', 'Warnia Nengsih, S.Kom., M.Kom.', 'Warnia Nengsih, S.Kom., M.Kom.'),
(11, '2017', 'Wawan Yunanto, S.Kom., M.T', 'Wawan Yunanto, S.Kom., M.T', 'Wawan Yunanto, S.Kom., M.T'),
(12, '2017', 'Nina Fadilah Najwa, S.Kom., M.Kom.', 'Nina Fadilah Najwa, S.Kom., M.Kom.', 'Nina Fadilah Najwa, S.Kom., M.Kom.'),
(13, '2017', 'Muhammad Mahrus Zain, S.S.T., M.T.I.', 'Muhammad Mahrus Zain, S.S.T., M.T.I.', 'Muhammad Mahrus Zain, S.S.T., M.T.I.');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(120) NOT NULL,
  `kelas_mahasiswa` varchar(50) NOT NULL,
  `tahun_masuk_mahasiswa` varchar(11) NOT NULL,
  `ipk_mahasiswa` varchar(11) NOT NULL,
  `kompen_mahasiswa` varchar(11) NOT NULL,
  `tak_mahasiswa` varchar(11) NOT NULL,
  `ipk_smt_1_mahasiswa` varchar(11) NOT NULL,
  `ipk_smt_2_mahasiswa` varchar(11) NOT NULL,
  `ipk_smt_3_mahasiswa` varchar(11) NOT NULL,
  `ipk_smt_4_mahasiswa` varchar(11) NOT NULL,
  `ipk_smt_5_mahasiswa` varchar(11) NOT NULL,
  `ipk_smt_6_mahasiswa` varchar(11) NOT NULL,
  `ipk_smt_7_mahasiswa` varchar(11) NOT NULL,
  `ipk_smt_8_mahasiswa` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `kelas_mahasiswa`, `tahun_masuk_mahasiswa`, `ipk_mahasiswa`, `kompen_mahasiswa`, `tak_mahasiswa`, `ipk_smt_1_mahasiswa`, `ipk_smt_2_mahasiswa`, `ipk_smt_3_mahasiswa`, `ipk_smt_4_mahasiswa`, `ipk_smt_5_mahasiswa`, `ipk_smt_6_mahasiswa`, `ipk_smt_7_mahasiswa`, `ipk_smt_8_mahasiswa`) VALUES
(1, 'Siti Nurhaliza ', '1 SI A', '2020', '2.57', '0 jam', '10', '2.57', '2.9', '3', '2.45', '2.87', '2.89', '3.67', '2.89'),
(2, 'Sahat Maruli ', '1 SI A ', '2020', '2.3', '0 jam', '20', '3', '3.87', '2.76', '2.47', '3.56', '3', '3', '2.9'),
(3, 'Agnes Monica ', '1 SI A ', '2020', '2.5', '0 jam', '5', '2.5', '3.76', '3.89', '2.89', '2.5', '2.78', '4', '2.87'),
(4, 'Desi  ', '1 SI A ', '2020', '2.75', '0 jam', '2', '2.89', '3.56', '3.76', '2.87', '3.89', '2.89', '2.6', '3.67'),
(5, 'Lala Dwi Ananda ', '1 SI A ', '2020', '3.54', '5 jam ', '10', '2.98', '3.57', '2.5', '2.65', '3.67', '3', '3.55', '3.89'),
(6, 'Maylani Dwi Sari ', '1 SI A ', '2020', '2.8', '2 jam ', '10', '3', '3.87', '2.67', '2.67', '3.8', '4', '2.56', '2.79'),
(7, 'Reni Deswanti ', '1 SI B ', '2020', '3.8', '7 jam ', '20', '3', '3', '2.7', '2.67', '3.54', '3.9', '2.65', '2.74'),
(8, 'Intan Cahyani', '1 SI B ', '2020', '2.75', '0 jam', '15', '3', '2.89', '3.89', '3', '2.56', '2.45', '2.87', '2.89'),
(9, 'Lusi Permata Sari', '1 SI B ', '2020', '2.68', '10 jam ', '18', '2.89', '2.9', '4', '4', '2.7', '3', '3.56', '3.67'),
(10, 'Desma Deswanti ', '1 SI B ', '2020', '2.5', '0 jam', '15', '2.35', '2.87', '2.55', '3.9', '2.45', '3.89', '2.5', '3.9'),
(11, 'Nelly Permata ', '1 SI B ', '2020', '3.46', '0 jam', '20', '2.45', '3.67', '2.67', '4', '3', '2.76', '3.89', '3'),
(12, 'Indah Berliana ', '1 SI B ', '2020', '3.7', '2 jam ', '10', '3.56', '3.89', '2.56', '3.89', '3.8', '2.55', '3.67', '2.75'),
(13, 'Fitri ', '1 SI B ', '2020', '3', '8 jam ', '5', '3.67', '2.79', '2.89', '3.67', '3.76', '2.54', '3.8', '3.65'),
(14, 'Sinta Nurhalizah ', '2 SI A ', '2019', '2.76', '12 jam ', '10', '2.78', '2.74', '3.78', '3', '3.89', '2.8', '3.54', '3.54'),
(15, 'Novia Silalhi ', '2 SI A ', '2019', '3.78', '0 jam', '15', '2.6', '2.89', '3.87', '4', '2.87', '2.87', '2.56', '3.56'),
(16, 'Ikke Permata ', '2 SI A ', '2019', '3.3', '0 jam', '20', '3.55', '3.67', '2.89', '2.6', '2.76', '3', '2.7', '2.67'),
(17, 'Septia Silalahi ', '2 SI A ', '2019', '2.8', '5 jam ', '10', '2.56', '3.9', '3.77', '3.55', '2.56', '3.89', '2.45', '2.75'),
(18, 'Juliati Manurung ', '2 SI A ', '2019', '3.7', '2 jam ', '7', '2.65', '3', '2.67', '2.56', '3.56', '3.45', '3', '2.54'),
(19, 'Christina ', '2 SI A ', '2019', '3.55', '10 jam ', '20', '2.87', '2.75', '3.89', '2.65', '2.7', '3.76', '3.8', '3.67'),
(20, ' Vega Kharisma ', '2 SI A ', '2019', '2.56', '8 jam ', '15', '3.56', '3.65', '4', '2.87', '2.75', '2.78', '3.76', '3.54'),
(21, 'Dwi Kurniawan', '2 SI B ', '2019', '2.65', '9 jam ', '25', '2.5', '3.54', '4', '3.56', '2.78', '2.8', '3.89', '3.75'),
(22, 'Ajeng ', '2 SI B ', '2019', '2.87', '0 jam', '20', '3.89', '3.56', '4', '2.5', '2.8', '2.76', '2.87', '2.55'),
(23, 'Camelia Permata ', '2 SI B ', '2019', '3', '10 jam ', '15', '3.67', '2.67', '2.9', '3.89', '3', '3', '2.76', '2.75'),
(24, 'Sihol Marito ', '2 SI B ', '2019', '2.75', '12 jam ', '10', '3.8', '2.75', '3.76', '3.67', '4', '2.89', '2.56', '2.4'),
(25, 'Samue Fresli ', '2 SI B ', '2019', '3.65', '0 jam', '7', '3.54', '2.54', '3.76', '3.8', '3.67', '3', '3.56', '2.65'),
(26, 'Jimmy Sihotang ', '2 SI B ', '2019', '3.54', '0 jam', '25', '2.56', '3.67', '2.88', '3.54', '2.87', '2.87', '2.7', '3.45'),
(27, 'Imelia ', '2 SI B ', '2019', '3.56', '4 jam ', '30', '2.7', '3.54', '2.65', '2.56', '2.54', '3', '2.75', '2.79'),
(28, 'Thalia Putri ', '2 SI C ', '2019', '2.67', '0 jam', '40', '2.45', '3.75', '2.34', '2.7', '2.89', '4', '2.78', '2.87'),
(29, 'Ela Putri ', '2 SI C ', '2019', '2.75', '10 jam ', '20', '3', '2.55', '4', '2.45', '2.9', '2.98', '2.8', '3.75'),
(30, 'Wiwik intan ', '2 SI C ', '2019', '2.54', '15 jam ', '29', '3.8', '2.75', '2.9', '3', '3.87', '3.87', '3', '2.69'),
(31, 'Libra ', '2 SI C ', '2019', '3.67', '0 jam', '35', '3.76', '2.4', '3.89', '3.8', '3.76', '3.87', '4', '2.87'),
(32, 'Fitra Kurnia ', '2 SI C', '2019', '3.54', '10 jam ', '40', '3.89', '2.65', '3.9', '3.76', '3.56', '2.76', '3.67', '3.56'),
(33, 'Asnan ', '2 SI C ', '2019', '3.75', '8 jam ', '33', '2.87', '3.45', '3.76', '3.89', '3.57', '2.87', '2.87', '3'),
(34, 'Reza Agung ', '3 SI A ', '2018', '2.55', '0 jam', '35', '2.76', '2.79', '4', '2.87', '3.87', '3.77', '2.54', '2.89'),
(35, 'Yosafri ', '3 SI A ', '2018', '2.75', '10  jam ', '20', '2.56', '2.87', '3.9', '2.76', '3', '3.76', '2.89', '2.9'),
(36, 'Ega Handayani ', '3 SI A ', '2018', '2.4', '8 jam ', '10', '3.56', '3.75', '3.89', '2.56', '2.89', '2.87', '2.9', '2.87'),
(37, 'Aulia Mayang ', '3 SI A ', '2018', '2.65', '5 jam ', '40', '2.7', '2.69', '2.89', '3.56', '2.9', '2.67', '3.87', '3.67'),
(38, 'Isra noviolin ', '3 SI A ', '2018', '3.45', '0 jam', '25', '2.75', '2.87', '2.65', '2.7', '2.87', '2.87', '3.76', '3.89'),
(39, 'wiwin Kristiani ', '3 SI A', '2018', '2.79', ' 7 jam ', '50', '2.78', '3.56', '2.98', '2.75', '3.67', '3', '2.8', '2.79'),
(40, 'Lidia Maysofa ', '3 SI A', '2018', '2.87', '10 jam ', '20', '2.8', '3', '3.9', '2.78', '3.89', '4', '3.8', '2.57'),
(41, 'Elsa Rantika ', '3 SI A ', '2018', '3.75', '25 jam  ', '27', '3', '2.89', '3.8', '2.8', '2.79', '3.99', '2.75', '2.3'),
(42, 'Dwipra Fitrah ', '3 SI B ', '2018', '2.69', '16  jam ', '28', '4', '2.9', '2.4', '3', '2.74', '3.87', '2.68', '2.5'),
(43, 'Nanda Gustia ', '3 SI B ', '2018', '2.87', '19 jam ', '29', '3.67', '2.87', '2.67', '4', '2.89', '3', '2.5', '2.75'),
(44, 'Aina Zahra ', '3 SI B ', '2018', '3.56', '10 jam ', '27', '2.87', '3.67', '2.89', '3.67', '3.67', '2.9', '3.46', '3.54'),
(45, 'Halida Deamoria ', '3 SI B ', '2018', '3', '5 jam ', '38', '2.54', '3.89', '3', '2.87', '3.9', '3.98', '3.7', '2.8'),
(46, 'Risma Uli Simalango ', '3 SI B ', '2018', '2.89', '4 jam ', '45', '2.89', '2.79', '2.9', '2.54', '2.75', '3.87', '3', '2.89'),
(47, 'Firdaus Ali Tanjung ', '3 SI B ', '2018', '2.9', '8 jam ', '60', '2.9', '2.57', '3.9', '2.89', '3.54', '2.45', '2.76', '2.9'),
(48, 'Panji Anggradana ', '3 SI B ', '2018', '2.87', '0 jam', '75', '3.87', '2.3', '3', '2.9', '2.8', '2.75', '3.78', '3.87'),
(49, 'Bidiana ', '4 SI A ', '2017', '3.67', '0 jam', '50', '3.76', '2.5', '2.45', '3.87', '3.8', '2.87', '3.89', '3.76'),
(50, 'Desi Purna Sari ', '4 SI A ', '2017', '3.89', '0 jam', '75', '3.56', '2.75', '2.47', '3.76', '2.75', '2.76', '3.67', '2.8'),
(51, 'Mutia Oktalida ', '4 SI A ', '2017', '2.79', '0 jam', '40', '3.57', '3.54', '2.89', '2.8', '2.68', '2.89', '3', '3.8'),
(52, 'Nurzikriah ', '4 SI A ', '2017', '2.74', '20  jam ', '30', '3.87', '2.8', '2.87', '3.8', '2.5', '3', '3.8', '2.75'),
(53, 'Hanifatun nisa ', '4 SI A ', '2017', '2.89', '16 jam ', '75', '3', '3.8', '2.65', '2.75', '3.46', '3.26', '2.75', '2.68'),
(54, 'Abi Mahruf ', '4 SI A ', '2017', '3.67', '0 jam', '30', '2.89', '2.75', '2.67', '2.68', '3.7', '2.67', '2.68', '2.5'),
(55, 'Uun Patrio ', '4 SI A', '2017', '3.9', '0 jam', '75', '2.9', '2.68', '2.67', '2.5', '3', '3.85', '2.5', '3.46'),
(56, 'Hotma Taruli  Silaen ', '4 SI B ', '2017', '3.79', '0 jam', '70', '2.87', '2.5', '3', '3.46', '2.76', '3.22', '3.46', '3.7'),
(57, 'Rozha Novtricya ', '4 SI B ', '2017', '2.89', '0 jam', '75', '3.67', '3.46', '4', '3.7', '3.78', '2.85', '3.7', '3'),
(58, 'Putri Dinda ', '4 SI B ', '2017', '2.9', '0 jam', '75', '3.89', '3.7', '3.9', '3', '3.3', '3.55', '3', '2.76'),
(59, 'Medira Javania ', '4 SI B ', '2017', '3.87', '4 jam ', '75', '2.79', '3', '4', '2.76', '2.8', '3.56', '2.76', '3.78'),
(60, 'yumico Catteryne', '4 SI B ', '2017', '3.76', '0 jam', '75', '2.74', '2.76', '3.89', '3.78', '3', '2.78', '3.78', '3.89'),
(61, 'zulhilmi ali ', '4 SI B ', '2017', '3.56', '0 jam', '70', '2.89', '3.78', '3.67', '3.89', '2.76', '2.65', '3.89', '3.67'),
(62, 'Melva Cindy ', '4 SI B ', '2017', '3.57', '2 jam ', '65', '3.67', '3.3', '3', '3.67', '3.78', '2.54', '3.67', '3'),
(63, 'Vivian ', '4 SI B ', '2017', '3.87', '2 jam ', '55', '3.9', '2.8', '4', '3', '3.3', '2.34', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('administrator','yayasan','pegawai','pimpinan','keuangan') COLLATE utf8_unicode_ci DEFAULT NULL,
  `block_status` int(3) NOT NULL,
  `online_status` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time_online` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `time_offline` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `role`, `block_status`, `online_status`, `time_online`, `time_offline`) VALUES
(54, 'Administrator', '', 'administrator', '200ceb26807d6bf99fd6f4f0d1ca54d4', '', 'administrator', 0, 'online', '2021-09-03 01:42:06', '2021-09-03 01:42:06'),
(56, 'Pimpinan', '', 'pimpinan', '90973652b88fe07d05a4304f0a945de8', '', 'pimpinan', 0, 'offline', '2021-08-09 15:05:57', '2021-08-09 15:05:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
