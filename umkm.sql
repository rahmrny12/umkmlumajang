-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 05:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `foto_barang` varchar(250) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `wa` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL,
  `harga` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `foto_barang`, `alamat`, `wa`, `Tanggal`, `harga`) VALUES
(44, 'TRN06062004', 'Pawon Simbok (Sambel Elok)', '2.png', 'https://maps.app.goo.gl/iMWkZUveZaKQSHm6A', '', '0000-00-00', NULL),
(74, 'TRN06062004', 'Kerupuk telo mentah 500g', 'PhotoRoom-20231122_105303.png', 'https://maps.app.goo.gl/4zK6ZrJdcEmgfdAk9', '', '0000-00-00', NULL),
(75, 'KUA000001', 'Rengginang mentah 500g (Pawon Sawal)', 'PhotoRoom-20231122_111203.png', 'https://maps.app.goo.gl/4zK6ZrJdcEmgfdAk9', '+6282144851960', '0000-00-00', NULL),
(81, 'TRN06062004', 'Keripik tempe 85g (Pawon Sawal)', '11.png', 'https://maps.app.goo.gl/4zK6ZrJdcEmgfdAk9', '+6285749761525', '0000-00-00', NULL),
(82, 'TRN06062004', 'KKJ Kacang Telur / 200g ', 'PhotoRoom-20231122_120218_(1).jpg', 'https://maps.app.goo.gl/dewAHw72ZmZgnWWD6', '+6285695601440', '0000-00-00', NULL),
(84, 'KUA000001', 'Majdul Kerupuk Gadung / 110g (10k)', 'Desain_tanpa_judul_(1).png', 'https://maps.app.goo.gl/bkbguB45zbi6tTFG8', '+6285259137213', '2023-11-24', NULL),
(85, 'KUL000001', 'Basreng Madani.ID / 100g', '2_(1).png', 'https://maps.app.goo.gl/88hAetth5kTvUnRh9', '+6281339906234', '0000-00-00', NULL),
(86, 'TRN06062004', 'Keripik pisang agung asin / 200g ', 'PhotoRoom-20231122_124823.png', 'https://maps.app.goo.gl/jNo2TMJkTWrV1HbW8?g_st=iw', '+6285236955707', '0000-00-00', NULL),
(87, 'KUA000001', 'Sale pisang ', 'PhotoRoom-20231122_124639.jpg', 'https://maps.app.goo.gl/jNo2TMJkTWrV1HbW8?g_st=iw', '+6285236955707', '0000-00-00', NULL),
(89, 'TRN06062004', 'Sale goreng rajapeni /200g', 'PhotoRoom-20231122_125326.png', 'https://maps.app.goo.gl/jNo2TMJkTWrV1HbW8?g_st=iw', '+62+6285236955707', '0000-00-00', NULL),
(90, 'KUA000001', 'Keripik pisang candi asin /200g', 'PhotoRoom-20231122_124118.jpg', 'https://maps.app.goo.gl/jNo2TMJkTWrV1HbW8?g_st=iw', '+6285236955707', '0000-00-00', NULL),
(91, 'KUA000001', 'Saas keripik sukun / 160g ', 'PhotoRoom-20231122_134721.png', 'https://maps.app.goo.gl/f6DtuoAi8AMakQQr7?g_st=iw', '+6281213096985', '0000-00-00', NULL),
(92, 'TRN06062004', 'Saas keripik pisang / 150g', 'PhotoRoom-20231122_134442.png', 'https://maps.app.goo.gl/f6DtuoAi8AMakQQr7?g_st=iw', '+6281213096985', '0000-00-00', NULL),
(93, 'KUA000001', 'Donat Kentang Thamira / Isi 6  ', 'PhotoRoom-20231122_135221.png', 'https://maps.app.goo.gl/vsUC5LBG4bt7nwJD8', '+6285204924805', '0000-00-00', NULL),
(94, 'KUL000001', 'KERIPIK SALAK SEMERU / 50g ', 'WhatsApp_Image_2023-11-24_at_10_21_54_(1).jpeg', 'https://maps.app.goo.gl/uEbfRuesSKvd4FR46', '+6283111758617', '0000-00-00', NULL),
(95, 'KUA000001', 'Shabrina Keripik Pisang / 150g ', 'PhotoRoom-20231122_142557.png', 'https://maps.app.goo.gl/DDdKpXavWmdVRQxL6', '+6282331116263', '0000-00-00', NULL),
(96, 'KUA000001', 'Roti Fila aneka roti isi ', 'PhotoRoom-20231122_142704.png', 'https://maps.app.goo.gl/DDdKpXavWmdVRQxL6', '+6282331116263', '0000-00-00', NULL),
(97, 'KUA000001', 'Berkah HS Keripik Tempe / 200g ', 'PhotoRoom-20231122_153911.png', 'https://maps.app.goo.gl/m32Y2NA8TzjiUkBW8', '+6281249740801', '0000-00-00', NULL),
(98, 'KUA000001', 'Berkah HS Keripik Pisang Kusuka / 300g ', 'PhotoRoom-20231122_154012.png', 'https://maps.app.goo.gl/m32Y2NA8TzjiUkBW8', '+6281249740801', '0000-00-00', NULL),
(99, 'KUA000001', 'Berkah HS Marning Jagung / 200g ', 'IMG-20231120-WA0121.jpg', 'https://maps.app.goo.gl/m32Y2NA8TzjiUkBW8', '+6281249740801', '0000-00-00', NULL),
(100, 'KUA000001', 'Berkah HS Sale Pisang / 200g ', 'PhotoRoom-20231122_154323.png', 'https://maps.app.goo.gl/m32Y2NA8TzjiUkBW8', '+6281249740801', '0000-00-00', NULL),
(101, 'KUA000001', 'Berkah HS Kerupuk Ikan / 170g', 'PhotoRoom-20231122_154207.png', 'https://maps.app.goo.gl/m32Y2NA8TzjiUkBW8', '+6281249740801', '0000-00-00', NULL),
(102, 'KUA000001', 'Berkah HS Kacang Oven / 270g', 'PhotoRoom-20231122_143534.png', 'https://maps.app.goo.gl/m32Y2NA8TzjiUkBW8', '+6281249740801', '0000-00-00', NULL),
(103, 'TRN06062004', 'Berkah HS Rengginang / 200g ', 'PhotoRoom-20231122_154048.png', 'https://maps.app.goo.gl/m32Y2NA8TzjiUkBW8', '+6281249740801', '0000-00-00', NULL),
(104, 'KUA000001', 'Berkah HS Keripik pisang sale / 200g ', 'PhotoRoom-20231122_143708.png', 'https://maps.app.goo.gl/m32Y2NA8TzjiUkBW8', '+6281249740801', '0000-00-00', NULL),
(105, 'TRN06062004', 'IKE kue Matahari/ 150g ', 'PhotoRoom-20231122_163914.png', 'https://maps.app.goo.gl/PazHuNrPqL2Emomy9', '+628155089807', '0000-00-00', NULL),
(106, 'KUL000001', '99 Keripik Talas / 160g ', 'PhotoRoom-20231122_164943.png', 'https://maps.app.goo.gl/L4V4763YJWiWkh4e9', '+62081336027500', '0000-00-00', NULL),
(107, 'KUL000001', '99 Asinan Buah / 650ml', 'IMG-20231120-WA0154.jpg', 'https://maps.app.goo.gl/L4V4763YJWiWkh4e9', '+6281336027500', '0000-00-00', NULL),
(108, 'KUL000001', '99 Empeng Melinjo / 100g (15k)', 'PhotoRoom-20231122_165039.png', 'https://maps.app.goo.gl/L4V4763YJWiWkh4e9', '+6281336027500', '0000-00-00', NULL),
(109, 'KUL000001', '99 Keripik Tempe / 160g ', 'PhotoRoom-20231122_164620.png', 'https://maps.app.goo.gl/L4V4763YJWiWkh4e9', '+6281336027500', '0000-00-00', NULL),
(110, 'KUL000001', '99 Mente Bawang  / 100g', 'PhotoRoom-20231122_164801.png', 'https://maps.app.goo.gl/L4V4763YJWiWkh4e9', '+6281336027500', '0000-00-00', NULL),
(111, 'KUA000001', '99 Keripik Singkong / 160g ', 'PhotoRoom-20231122_165713.png', 'https://maps.app.goo.gl/L4V4763YJWiWkh4e9', '+6281336027500', '0000-00-00', NULL),
(112, 'TRN06062004', 'KUM Kacang Kriwil / 100g', 'PhotoRoom-20231122_170152.png', 'https://maps.app.goo.gl/3vzJ6LZdFrxiCceg9', '+6282330605501', '0000-00-00', NULL),
(113, 'TRN06062004', 'KUM Kacang Kriwil / 150g ', 'PhotoRoom-20231122_170400.png', 'https://maps.app.goo.gl/3vzJ6LZdFrxiCceg9', '+6282330605501', '0000-00-00', NULL),
(114, 'TRN06062004', 'KUM Keripik Usus / 50g ', 'PhotoRoom-20231122_170934.png', 'https://maps.app.goo.gl/3vzJ6LZdFrxiCceg9', '+6282330605501', '0000-00-00', NULL),
(115, 'KUL000001', 'Nin-nin Bakery Kupingan / 135g ', 'PhotoRoom-20231122_172344.png', 'https://maps.app.goo.gl/fmMMnSh6KrizD8Hr7', '+6282335542604', '0000-00-00', NULL),
(116, 'KUA000001', 'Barokah Kue Kacang / 900g ', 'PhotoRoom-20231122_173045.png', 'https://maps.app.goo.gl/nbTozzMW3BPwR2z79', '+6281943337257', '0000-00-00', NULL),
(117, 'TRN06062004', 'Legendaris Kacang Telur / 270g', 'PhotoRoom-20231122_173536.png', 'https://maps.app.goo.gl/DFMnK52SAMMPNW62A', '+6285232937449', '0000-00-00', NULL),
(119, 'KUL000001', 'Farinda Keripik Singkong / 200g ', 'PhotoRoom-20231123_1404221.png', 'https://maps.app.goo.gl/65sz8n15UoDWzd6s7', '+6285851979514', '0000-00-00', NULL),
(120, 'KUL000001', 'Farinda keripik Talas / 200g ', 'PhotoRoom-20231123_141216_(1).png', 'https://maps.app.goo.gl/65sz8n15UoDWzd6s7', '+6285851979514', '0000-00-00', NULL),
(121, 'KUA000001', 'Pisang Aroma Dua Saudara/200g', 'PhotoRoom-20231123_143643.png', 'https://maps.app.goo.gl/zvnrAZXBAio714DKA', '+6285746693749', '0000-00-00', NULL),
(122, 'TRN06062004', 'Opaknesia / 200g', 'PhotoRoom-20231123_144558.png', 'https://maps.app.goo.gl/DbRczGz5wGA4Go3T7', '+6282332394576', '0000-00-00', NULL),
(123, 'KUL000001', 'Mandiri Agung Keripik Talas / 200g ', 'PhotoRoom-20231123_152214.png', 'https://maps.app.goo.gl/8jvVjP2hoAFHLgnx6', '+6285236342000', '0000-00-00', NULL),
(124, 'TRN06062004', 'Mandiri Agung Carang Mas / 200g', 'PhotoRoom-20231123_151439.png', 'https://maps.app.goo.gl/8jvVjP2hoAFHLgnx6', '+6285236342000', '0000-00-00', NULL),
(126, 'TRN06062004', 'Mandiri Agung Keripik Singkong / 200g', 'PhotoRoom-20231123_151548.png', 'https://maps.app.goo.gl/8jvVjP2hoAFHLgnx6', '+6285236342000', '0000-00-00', NULL),
(127, 'KUA000001', 'Mandiri Agung Keripik Pisang / 150g', 'PhotoRoom-20231123_1519191.png', 'https://maps.app.goo.gl/8jvVjP2hoAFHLgnx6', '+6285236342000', '0000-00-00', NULL),
(128, 'TRN06062004', 'Mandiri Agung Keripik Pisang / 250g ', 'PhotoRoom-20231123_152103.png', 'https://maps.app.goo.gl/8jvVjP2hoAFHLgnx6', '+6285236342000', '0000-00-00', NULL),
(129, 'KUA000001', 'Tahu Fantasi / 10 Potong', 'PhotoRoom-20231123_155507.png', 'https://maps.app.goo.gl/RTJRjVNEDfdJya8k8', '+6285105122848', '0000-00-00', NULL),
(130, 'KUL000001', 'Otak\" Bandeng / 150g ', 'IMG-20231123-WA0077.jpg', 'https://maps.app.goo.gl/B8xwbgBuo8RiDQHW6', '+6287712927474', '0000-00-00', NULL),
(131, 'TRN06062004', 'CBandeng Kurnialana / 150g ( 10.000 )', 'IMG-20231123-WA0076.jpg', 'https://maps.app.goo.gl/B8xwbgBuo8RiDQHW6', '+6287712927474', '0000-00-00', NULL),
(132, 'KUA000001', 'Nuget Bandeng/ 180g ', 'IMG-20231123-WA0073.jpg', 'https://maps.app.goo.gl/B8xwbgBuo8RiDQHW6', '+6287712927474', '0000-00-00', NULL),
(133, 'TRN06062004', 'Lalapan Bandeng Mix ', 'IMG-20231123-WA0072.jpg', 'https://maps.app.goo.gl/B8xwbgBuo8RiDQHW6', '+62087712927474', '0000-00-00', NULL),
(134, 'KUA000001', 'Dendeng Manis / 100g', 'PhotoRoom-20231123_162636.png', 'https://maps.app.goo.gl/B8xwbgBuo8RiDQHW6', '+6287712927474', '0000-00-00', NULL),
(135, 'KUL000001', 'Kripik Pisang Pitulung / 200g', 'PhotoRoom-20231123_164331.png', 'https://maps.app.goo.gl/T7F8ZieYvmyaNXN49', '+62082335438988', '0000-00-00', NULL),
(136, 'KUA000001', 'Dapur Rotita Pukis / biji ', 'PhotoRoom-20231123_165037.png', 'https://maps.app.goo.gl/y2dggcLPQnC3cuig8', '+6285708602040', '0000-00-00', NULL),
(137, 'TRN06062004', 'Dapur ROTITA Kue Lumpur / biji ', 'PhotoRoom-20231123_164753.png', 'https://maps.app.goo.gl/y2dggcLPQnC3cuig8', '+6285708602040', '0000-00-00', NULL),
(138, 'KUL000001', 'KerRen, Keripik Pesantren Rambak Pisang / 100g ', 'PhotoRoom-20231124_105853.png', 'https://maps.app.goo.gl/zYxyS2jpnU1SkCgG8', '+6281237849454', '0000-00-00', NULL),
(139, 'KUL000001', 'KerRen, Keripik Pesantren Tape / 100g', 'PhotoRoom-20231124_105439.png', 'https://maps.app.goo.gl/zYxyS2jpnU1SkCgG8', '+6281237849454', '0000-00-00', NULL),
(140, 'KUL000001', 'KerRen, Keripik Pesantren Salak / 75g', 'PhotoRoom-20231124_105613.png', 'https://maps.app.goo.gl/zYxyS2jpnU1SkCgG8', '+6281237849454', '0000-00-00', NULL),
(141, 'KUL000001', 'KerRen, Keripik Pesantren Nangka / 75g', 'PhotoRoom-20231124_105711.png', 'https://maps.app.goo.gl/zYxyS2jpnU1SkCgG8', '+6281237849454', '0000-00-00', NULL),
(142, 'KUA000001', 'Pangsit Mie Ayam Frozen', 'PhotoRoom-20231124_111304.png', 'https://maps.app.goo.gl/a8jEGBLuox63NWYu5', '+6281232867076', '0000-00-00', NULL),
(143, 'TRN06062004', 'Spesial Nasi Daun Jeruk Purut ', 'PhotoRoom-20231124_154216.png', 'https://maps.app.goo.gl/SH63M7Q2Frn3bfJr8', '+6285852872262', '0000-00-00', NULL),
(144, 'KUL000001', 'Kuping Gajah Ndeso', 'PhotoRoom-20231124_154802.png', 'https://maps.app.goo.gl/26rXDzSwvi55RRvD8', '+6285258033219', '0000-00-00', NULL),
(145, 'KUL000001', 'Akar Klapa Ndeso / 250g ', 'PhotoRoom-20231124_155043.png', 'https://maps.app.goo.gl/26rXDzSwvi55RRvD8', '+6285258033219', '0000-00-00', NULL),
(146, 'KUL000001', 'Kacang Telor Ndeso / 250g ', 'PhotoRoom-20231124_155006.png', 'https://maps.app.goo.gl/26rXDzSwvi55RRvD8', '+6285258033219', '0000-00-00', NULL),
(147, 'KUA000001', 'Larisco Risoles Mayo / 400g', 'PhotoRoom-20231124_155754.png', 'https://maps.app.goo.gl/To8gqWmJbjYhTXrcA', '+62', '0000-00-00', NULL),
(148, 'TRN06062004', 'Pempek MM 12.500 ', 'PhotoRoom-20231124_160339.png', 'https://maps.app.goo.gl/yQwatF2fFj2QKHbo7', '+6282179525259', '0000-00-00', NULL),
(149, 'TRN06062004', 'Bumbu Pecel / 250g', 'PhotoRoom-20231124_161148.png', 'https://maps.app.goo.gl/41HZXXctQd455Gx36', '+6281359309544', '0000-00-00', NULL),
(158, 'PCL', 'yahya', 'Group.png', '', '', '0000-00-00', 10000),
(159, 'KV852963', 'Bandeng', 'IMG-20231123-WA0076.jpg', '', '', '0000-00-00', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(250) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `no_kk` varchar(250) NOT NULL,
  `jk` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `tmp_lhr` varchar(250) NOT NULL,
  `tgl_lhr` varchar(250) NOT NULL,
  `alm_ktp` varchar(250) NOT NULL,
  `prov` varchar(250) NOT NULL,
  `kota` varchar(250) NOT NULL,
  `kec` varchar(250) NOT NULL,
  `kel` varchar(250) NOT NULL,
  `hp` varchar(250) NOT NULL,
  `alamat_dom` varchar(250) NOT NULL,
  `kode_pos` varchar(250) NOT NULL,
  `wa` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `up_ktp` varchar(250) NOT NULL,
  `up_kk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_pemilik`, `nik`, `no_kk`, `jk`, `status`, `tmp_lhr`, `tgl_lhr`, `alm_ktp`, `prov`, `kota`, `kec`, `kel`, `hp`, `alamat_dom`, `kode_pos`, `wa`, `email`, `up_ktp`, `up_kk`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(9, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(10, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(11, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(12, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(13, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(14, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(15, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(16, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(17, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(19, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(20, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id` int(11) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_bank`
--

CREATE TABLE `data_bank` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_bank`
--

INSERT INTO `data_bank` (`id`, `nama`, `logo`) VALUES
(1, 'BRI', 'bri.png'),
(2, 'BNI', 'bni.png'),
(3, 'MANDIRI', 'mandiri.png'),
(4, 'BCA', 'bca.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `nik` char(20) NOT NULL,
  `no_kk` char(20) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `status_nikah` enum('sudah','belum') NOT NULL,
  `tmp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_ktp` varchar(255) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `alamat_domisili` varchar(255) NOT NULL,
  `kode_pos` char(11) NOT NULL,
  `wa` char(13) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `id_user`, `nama_pemilik`, `nik`, `no_kk`, `jenis_kelamin`, `status_nikah`, `tmp_lahir`, `tgl_lahir`, `alamat_ktp`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `alamat_domisili`, `kode_pos`, `wa`, `no_hp`, `email`, `kk`, `ktp`) VALUES
(16, 25, 'tess', '123', '123', 'laki-laki', 'sudah', 'tes', '1212-12-12', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', '1233', '123123', 'tes@g', '7707555dccb8147fb27ad150f9abfafe.jpg', 'e5c1b578f5d0fa39cb684179072ab5f2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_lain`
--

CREATE TABLE `data_lain` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_pirt` char(32) NOT NULL,
  `sektor_usaha_tambahan` varchar(255) NOT NULL,
  `data_usaha_tambahan` varchar(255) NOT NULL,
  `foto_selfie` varchar(255) NOT NULL,
  `upload_npwp_pemilik` varchar(255) NOT NULL,
  `upload_bpom` varchar(255) NOT NULL,
  `upload_sertifikat_halal` varchar(255) NOT NULL,
  `upload_pirt` varchar(255) NOT NULL,
  `upload_npwpd` varchar(255) NOT NULL,
  `upload_npwp_usaha` varchar(255) NOT NULL,
  `npwp_pemilik` varchar(255) NOT NULL,
  `bpom` varchar(255) NOT NULL,
  `sertifikat_halal` varchar(255) NOT NULL,
  `pinjaman_bank` varchar(255) NOT NULL,
  `pinjaman_perorangan` varchar(255) NOT NULL,
  `pinjaman_koperasi` varchar(255) NOT NULL,
  `bantuan_pemerintah` varchar(255) NOT NULL,
  `modal_luar` varchar(255) NOT NULL,
  `npwpd_usaha` varchar(255) NOT NULL,
  `npwp_usaha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_lain`
--

INSERT INTO `data_lain` (`id`, `id_user`, `no_pirt`, `sektor_usaha_tambahan`, `data_usaha_tambahan`, `foto_selfie`, `upload_npwp_pemilik`, `upload_bpom`, `upload_sertifikat_halal`, `upload_pirt`, `upload_npwpd`, `upload_npwp_usaha`, `npwp_pemilik`, `bpom`, `sertifikat_halal`, `pinjaman_bank`, `pinjaman_perorangan`, `pinjaman_koperasi`, `bantuan_pemerintah`, `modal_luar`, `npwpd_usaha`, `npwp_usaha`) VALUES
(4, 25, 'tes', 'tes', 'tes', '1223797fe55b72e0518fe61c677e335b.jpg', 'e6f8ddd9eb1b41fce970960cf9d56959.jpg', 'af7589fc5f36fed0b66e866bf62e301e.jpg', 'bc74e9048a287d5a4dcdb23adec821dc.jpg', 'dc274f65f1b75ecf71c8361a4fc47325.jpg', '1ff93ae8f6f14f671d06270b702a4504.jpg', 'de656ec4a93d51dc7578025b97797464.jpg', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `data_umkm`
--

CREATE TABLE `data_umkm` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_umkm` varchar(255) NOT NULL,
  `nib` varchar(128) NOT NULL,
  `sektor_usaha` varchar(128) NOT NULL,
  `jenis_usaha` varchar(128) NOT NULL,
  `ekonomi_kreatif` enum('ya','tidak') NOT NULL,
  `tanggal_mulai_usaha` date NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `alamat_usaha` varchar(128) NOT NULL,
  `kode_pos_usaha` varchar(128) NOT NULL,
  `jumlah_tenaga_kerja_laki_laki` varchar(128) NOT NULL,
  `jumlah_tenaga_kerja_perempuan` varchar(128) NOT NULL,
  `jumlah_karyawan_laki_laki` varchar(128) NOT NULL,
  `jumlah_karyawan_perempuan` varchar(128) NOT NULL,
  `website` varchar(128) DEFAULT NULL,
  `status_tempat_usaha` varchar(128) NOT NULL,
  `bentuk_usaha` varchar(128) NOT NULL,
  `uraian_usaha` varchar(128) NOT NULL,
  `bahan_bakar_utama` varchar(128) NOT NULL,
  `kapasitas_produksi_harian` varchar(128) NOT NULL,
  `satuan_produksi` varchar(128) NOT NULL,
  `nominal_aset` varchar(128) NOT NULL,
  `modal_sendiri` varchar(128) NOT NULL,
  `foto_nib` varchar(128) NOT NULL,
  `foto_produk` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_umkm`
--

INSERT INTO `data_umkm` (`id`, `id_user`, `nama_umkm`, `nib`, `sektor_usaha`, `jenis_usaha`, `ekonomi_kreatif`, `tanggal_mulai_usaha`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `alamat_usaha`, `kode_pos_usaha`, `jumlah_tenaga_kerja_laki_laki`, `jumlah_tenaga_kerja_perempuan`, `jumlah_karyawan_laki_laki`, `jumlah_karyawan_perempuan`, `website`, `status_tempat_usaha`, `bentuk_usaha`, `uraian_usaha`, `bahan_bakar_utama`, `kapasitas_produksi_harian`, `satuan_produksi`, `nominal_aset`, `modal_sendiri`, `foto_nib`, `foto_produk`) VALUES
(5, 25, 'tes', 'tes', 'tes', 'te', 'ya', '0212-12-31', 'te', 'te', 'te', 'te', 'te', 'te', '12', '12', '12', '12', 'te', 'te', 'te', 'te', 'te', 'te', 'te', '5', 'te', 'ed80842574477efb5216a28e784ee217.jpg', '6474b62b87a7211ca970f20a9014bf39.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `no_transaksi` varchar(32) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `no_transaksi`, `id_barang`, `kuantitas`) VALUES
(1, '20231215', 81, 2),
(2, '20231215', 90, 1),
(3, '20231215-17', 81, 2),
(4, '20231215-17', 90, 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `id_barang`) VALUES
(4, 'PhotoRoom-20231124_155006.png', 28),
(5, 'IMG-20231124-WA0025.jpg', 28),
(6, 'double-check.gif', 64),
(7, 'double-check1.gif', 64),
(8, 'double-check.png', 64),
(9, 'ojn3u2_(3).png', 64),
(10, 'double-check2.gif', 64),
(11, 'wallhaven-jxl31y_1280x720.png', 153),
(12, 'wallhaven-13mmkw_1280x720.png', 153),
(13, 'wallhaven-13mmkw_1280x7201.png', 153),
(14, 'wallhaven-13mmkw_1280x7202.png', 153),
(15, 'wallhaven-jxl31y_1280x7201.png', 153),
(16, 'double-check.png', 157),
(17, 'Group.png', 158),
(18, 'Group1.png', 158),
(19, 'Group2.png', 158),
(20, 'Group3.png', 158),
(21, 'Group4.png', 158),
(22, 'IMG-20231123-WA00761.jpg', 159),
(23, 'IMG-20231123-WA00762.jpg', 159),
(24, 'IMG-20231123-WA00763.jpg', 159),
(25, 'IMG-20231123-WA00764.jpg', 159),
(26, 'IMG-20231123-WA00765.jpg', 159);

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `stok` varchar(250) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id`, `id_barang`, `stok`, `harga`, `date_created`) VALUES
(43, '42', '10', 'Rp. 35.000', '0000-00-00'),
(44, '43', '10', 'Rp. 35.000', '0000-00-00'),
(45, '44', '10', 'Rp. 35.000', '0000-00-00'),
(49, '48', '10', 'Rp. 20.000', '0000-00-00'),
(75, '74', '10', 'Rp. 20.000', '0000-00-00'),
(76, '75', '10', 'Rp. 20000', '0000-00-00'),
(77, '76', '10', 'Rp. 20000', '0000-00-00'),
(78, '77', '10', 'Rp. 20000', '0000-00-00'),
(79, '78', '10', 'Rp. 20000', '0000-00-00'),
(82, '81', '10', 'Rp. 10000', '0000-00-00'),
(83, '82', '10', 'Rp. 15000', '0000-00-00'),
(85, '84', '10', 'Rp. 10000', '0000-00-00'),
(86, '85', '10', 'Rp. 12000', '0000-00-00'),
(87, '86', '10', 'Rp. 17000', '0000-00-00'),
(88, '87', '10', 'Rp. 17000', '0000-00-00'),
(89, '88', '10', 'Rp. 17000', '0000-00-00'),
(90, '89', '10', 'Rp. 10000', '0000-00-00'),
(91, '90', '10', 'Rp. 12000', '0000-00-00'),
(92, '91', '10', 'Rp. 10000', '0000-00-00'),
(93, '92', '10', 'Rp. 15000', '0000-00-00'),
(94, '93', '10', 'Rp. 25000', '0000-00-00'),
(95, '94', '10', 'Rp. 15000', '0000-00-00'),
(96, '95', '10', 'Rp. 17000', '0000-00-00'),
(97, '96', '10', 'Rp. 3500', '0000-00-00'),
(98, '97', '10', 'Rp. 14000', '0000-00-00'),
(99, '98', '10', 'Rp. 17000', '0000-00-00'),
(100, '99', '10', 'Rp. 10000', '0000-00-00'),
(101, '100', '10', 'Rp. 11000', '0000-00-00'),
(102, '101', '10', 'Rp. 14000', '0000-00-00'),
(103, '102', '10', 'Rp. 14000', '0000-00-00'),
(104, '103', '10', 'Rp. 11000', '0000-00-00'),
(105, '104', '10', 'Rp. 11000', '0000-00-00'),
(106, '105', '10', 'Rp. 10000', '0000-00-00'),
(107, '106', '10', 'Rp. 10000', '0000-00-00'),
(108, '107', '10', 'Rp. 10000', '0000-00-00'),
(109, '108', '10', 'Rp. 15000', '0000-00-00'),
(110, '109', '10', 'Rp. 10000', '0000-00-00'),
(111, '110', '10', 'Rp. 20000', '0000-00-00'),
(112, '111', '10', 'Rp. 10000', '0000-00-00'),
(113, '112', '10', 'Rp. 8500', '0000-00-00'),
(114, '113', '10', 'Rp. 14500', '0000-00-00'),
(115, '114', '10', 'Rp. 5000', '0000-00-00'),
(116, '115', '10', 'Rp. 16.000', '0000-00-00'),
(117, '116', '10', 'Rp. 25.000', '0000-00-00'),
(118, '117', '10', 'Rp. 15000', '0000-00-00'),
(119, '118', '10', 'Rp. 14000', '0000-00-00'),
(120, '119', '10', 'Rp. 13000', '0000-00-00'),
(121, '120', '10', 'Rp. 14000', '0000-00-00'),
(122, '121', '10', 'Rp. 12000', '0000-00-00'),
(123, '122', '10', 'Rp. 13000', '0000-00-00'),
(124, '123', '10', 'Rp. 15000', '0000-00-00'),
(125, '124', '10', 'Rp. 12000', '0000-00-00'),
(126, '125', '10', 'Rp. 17000', '0000-00-00'),
(127, '126', '10', 'Rp. 12000', '0000-00-00'),
(128, '127', '10', 'Rp. 12000', '0000-00-00'),
(129, '128', '10', 'Rp. 17000', '0000-00-00'),
(130, '129', '10', 'Rp. 12000', '0000-00-00'),
(131, '130', '10', 'Rp. 15000', '0000-00-00'),
(132, '131', '10', 'Rp. 10000', '0000-00-00'),
(133, '132', '10', 'Rp. 10000', '0000-00-00'),
(134, '133', '10', 'Rp. 12000', '0000-00-00'),
(135, '134', '10', 'Rp. 10000', '0000-00-00'),
(136, '135', '10', 'Rp. 20000', '0000-00-00'),
(137, '136', '10', 'Rp. 2500', '0000-00-00'),
(138, '137', '10', 'Rp. 3000', '0000-00-00'),
(139, '138', '10', 'Rp. 12000', '0000-00-00'),
(140, '139', '10', 'Rp. 12000', '0000-00-00'),
(141, '140', '10', 'Rp. 12000', '0000-00-00'),
(142, '141', '10', 'Rp. 15000', '0000-00-00'),
(143, '142', '10', 'Rp. 19000', '0000-00-00'),
(144, '143', '10', 'Rp. 13000', '0000-00-00'),
(145, '144', '10', 'Rp. 17500', '0000-00-00'),
(146, '145', '10', 'Rp. 17500', '0000-00-00'),
(147, '146', '10', 'Rp. 15000', '0000-00-00'),
(148, '147', '10', 'Rp. 25.000', '0000-00-00'),
(149, '148', '10', 'Rp. 12500', '0000-00-00'),
(150, '149', '10', 'Rp. 16.000', '0000-00-00'),
(156, '158', '10', '10000', '0000-00-00'),
(157, '159', '56', '15000', '0000-00-00'),
(158, '160', '6', '10000', '0000-00-00'),
(159, '161', 'tes', 'tes', '0000-00-00'),
(160, '162', 'tes', 'tes', '0000-00-00'),
(161, '163', '123', '123', '0000-00-00'),
(162, '164', '123', '123', '0000-00-00'),
(163, '165', '1', '10000', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_barang`, `kuantitas`, `id_user`) VALUES
(21, 27, 2, 16),
(22, 36, 1, 16),
(23, 40, 2, 16),
(24, 44, 1, 16),
(25, 0, 0, 27),
(26, 81, 2, 27),
(27, 15985, 1, 27),
(28, 90, 1, 27);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `no_transaksi`, `id_user`, `tanggal`) VALUES
(12, '20231202-1', 0, '2023-12-02 03:27:29'),
(13, '20231202-2', 0, '2023-12-02 03:29:56'),
(16, '20231203-3', 0, '2023-12-03 04:50:50'),
(17, '20231203-4', 0, '2023-12-03 05:23:32'),
(19, '20231203-5', 0, '2023-12-03 14:36:46'),
(20, '20231204-6', 0, '2023-12-04 00:54:14'),
(21, '20231204-7', 0, '2023-12-04 00:56:42'),
(22, '20231204-8', 0, '2023-12-04 01:21:04'),
(23, '20231204-9', 0, '2023-12-04 01:52:33'),
(24, '20231204-10', 0, '2023-12-04 07:04:17'),
(25, '20231204-11', 0, '2023-12-04 08:25:55'),
(26, '20231204-12', 0, '2023-12-04 08:38:12'),
(27, '20231215-13', 0, '2023-12-15 14:09:41'),
(28, '20231215-14', 27, '2023-12-15 14:46:20'),
(29, '20231215-15', 27, '2023-12-15 15:05:19'),
(30, '20231215-16', 27, '2023-12-15 15:05:36'),
(31, '20231215-17', 27, '2023-12-15 15:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `role_id`, `date_created`, `is_active`) VALUES
(16, 'MNI', 'mnirvan104@gmail.com', '$2y$10$wTfbX3Y9Y45iznhcysKNVuIRhlt33VJ.7vENqkGBL1z8RUGTjZi9K', 'default.jpg', 2, 1699944499, 1),
(17, 'MnIrvan', 'mni110804@gmail.com', '$2y$10$upCp7ogAejIvuoIvcvohnedNV6AxMSOpTMMGr9WME/4E8lUxMfJcq', 'default.jpg', 2, 1700387905, 1),
(19, 'Dani', 'sekarrengganis2@gmail.com', '$2y$10$l9OXlQwGGdK44QE5djPDp..DbFi4oudoK6gk4BoFLJL.TnOYHhGFC', 'default.jpg', 2, 1700571489, 1),
(20, 'Devonte Zieme', 'raoul52@goldenmarine.net', '$2y$10$aRlqVOD8L7l9eBQRKQz.Q.lnVCF4MsyrJREJxA8AOoGaViZuCdFtS', 'default.jpg', 2, 1700719300, 1),
(21, 'Dani Ayu', 'werewolfvampire038@gmail.com', '$2y$10$QSkM8ih/UinQOi1wr3URa.2RKAIwmi6qDUabrvFzVT5.a5VyXOTNa', 'default.jpg', 2, 1701410563, 1),
(22, 'Yahya Salamudin', 'yahya@gmail.com', '$2y$10$g.YlZ30EoOpZCL4xcf4mhOjLwywzpb8bLz7ol5dPViVlK6SheMLou', 'default.jpg', 2, 1701413866, 1),
(23, 'Werewolf', 'sekar85@gmail.com', '$2y$10$r1sgMnzjDazNKbZkvFTBJOBxsr4ykIbQmdBHgvpF8xQHr0uxvT5c2', 'default.jpg', 2, 1701444167, 1),
(24, 'rendy', 'rendy@gmail.ocm', '$2y$10$b21bOFXD1di/OZrciSyPiOxQmP1m3ZrA4orVTj95OYGCQ8rFIAZxS', 'default.jpg', 2, 1701482024, 1),
(25, 'Rendy', 'rendy@gmail.com', '$2y$10$jGbkxt.EmfE1S0KqtdjdiecjxmP47nU7/b5iMao5xg5lzIYBth0c2', 'default.jpg', 2, 1701482060, 1),
(26, 'kadis', 'kadis@gmail.com', '$2y$10$.0ePiANdv3LmRcYy.bSCCOvvOgFAJE.ATjpWzJmpjMj121PlBCFZ.', 'default.jpg', 2, 1701685777, 1),
(27, 'tes', 'tes@gmail.com', '$2y$10$jvYjTS27HX5VwqPEfRpm..qK0OFA/KBsC/OelG05uLQy4x5wCK1MO', 'default.jpg', 2, 1702563768, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_bank`
--
ALTER TABLE `data_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_lain`
--
ALTER TABLE `data_lain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_umkm`
--
ALTER TABLE `data_umkm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_bank`
--
ALTER TABLE `data_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_lain`
--
ALTER TABLE `data_lain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_umkm`
--
ALTER TABLE `data_umkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
