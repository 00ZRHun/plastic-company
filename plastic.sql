-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019-05-22 16:26:34
-- 服务器版本： 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plastic`
--

-- --------------------------------------------------------

--
-- 表的结构 `about_us`
--

CREATE TABLE `about_us` (
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(277) NOT NULL,
  `logo` varchar(277) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `about_us`
--

INSERT INTO `about_us` (`title`, `content`, `image`, `logo`) VALUES
('Welcome to the XXX', 'asdad', 'Hydrangeas.jpg', 'logo.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `username` varchar(277) NOT NULL,
  `password` varchar(277) NOT NULL,
  `authorize` varchar(277) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`username`, `password`, `authorize`) VALUES
('admin123', 'password123', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(277) NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(277) NOT NULL,
  `product_size` varchar(277) NOT NULL,
  `category_product` varchar(255) NOT NULL,
  `brands` int(255) NOT NULL,
  `description` varchar(277) NOT NULL,
  `model` varchar(277) NOT NULL,
  `packaging` varchar(277) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`product_id`, `product_name`, `product_price`, `product_image`, `product_size`, `category_product`, `brands`, `description`, `model`, `packaging`) VALUES
(1, 'ALUM FOIL LID AL402-S FOR 402/34', 0, '1351270-300x300.jpg', '-', '', 2, 'ALUM FOIL LID #AL402-S FOR 402/34', 'PALRON', '1000â€™S/CTN'),
(2, 'ALUM FOIL LID AL404-PLAIN FOR 404/34', 0, '1351547.jpg', '-', '', 2, 'ALUM FOIL LID #AL404-PLAIN FOR #404/34', 'PALRON', '1000â€™S/CTN'),
(3, 'ALUM FOIL MINI TART CUP 20/14 (122)', 0, '1250252-300x300.jpg', '-', '', 1, 'ALUM FOIL MINI TART CUP #20/14 (122)', 'STARNET', '10000PCS/CTN'),
(4, 'ALUM FOIL OBLONG (LASAGNE) 400/45 (6450/5450)', 0, '1250256-300x300.jpg', '146x121x40/48mm', '', 1, 'ALUM FOIL OBLONG (LASAGNE) #400/45 (6450/5450)', 'STARNET', '1000PCS/CTN'),
(5, 'ALUM FOIL OBLONG 303/24 160X110X25.5MM', 0, '1351544-300x300.jpg', '160X110X25.5MM', '', 2, 'ALUM FOIL OBLONG #303/24 160X110X25.5MM', 'PALRON', '1000â€™S/CTN'),
(6, 'ALUM FOIL OBLONG 402/34', 0, '2220039-300x300.jpg', '-', '', 2, 'ALUM FOIL OBLONG #402/34', 'PALRON', '1000â€™S/CTN'),
(7, 'ALUM FOIL OBLONG PAN 670/45 (5650-G)', 0, '1250062-300x300.jpg', '201x109x48mm', '', 1, 'ALUM FOIL OBLONG PAN #670/45 (5650-G)', 'STARNET', '1000PCS/CTN'),
(8, 'ALUM FOIL OBLONG SIZE 258/36 (5265)', 0, '1250134-300x300.jpg', '136x84x37.5mm', '', 2, 'ALUM FOIL OBLONG SIZE #258/36 (5265)', 'STARNET', '125â€™SX16PKTS/CTN'),
(9, 'ALUM FOIL PAN OBLONG 9580/84 â€“ 1174(WS)', 0, '1250320-300x300.jpg', '-', '', 1, 'ALUM FOIL PAN OBLONG 9580/84 â€“ 1174(WS)', 'PALRON', '50PCS/CTN'),
(10, 'ALUM FOIL PIE TRAY 168/24(1175)', 0, '1250277-300x300.jpg', '-', '', 1, 'ALUM FOIL PIE TRAY #168/24(1175)', 'STARNET', '100â€™S/PKTX2500PCS N 3000PCS/CTN'),
(11, 'ALUM FOIL ROUND 1230 (232/34)', 0, '1250238-300x300.jpg', '111X33.5MM old-232/24 new 1230', '', 1, 'ALUM FOIL ROUND #1230 (#232/34)', 'STARNET', '2000PCS/CTN'),
(12, 'ALUM FOIL ROUND SIZE 212/57', 0, '1250317-300x300.jpg', '-', '', 1, 'ALUM FOIL ROUND SIZE #212/57', 'PALRON', '1400PCS/CTN'),
(13, 'ALUM RECT AIRCRAFT TRAY 404/34', 0, '1351546.jpg', '-', '', 2, 'ALUM RECT AIRCRAFT TRAY #404/34', 'PALRON', '1000â€™S/CTN'),
(14, 'ALUM. FOIL PIE CUP 30/23 (1138)', 0, '1250020-300x300.jpg', '103MMX25MM', '', 1, 'ALUM. FOIL PIE CUP #130/23 (1138)', 'STARNET', '100â€™SX20PKTS/CTN'),
(15, 'ALUM. FOIL ROUND 1425 (426/34)', 0, '1250012-300x300.jpg', '-', '', 1, 'ALUM. FOIL ROUND #1425 (426/34)', 'STARNET', '1000â€™S/CTN'),
(16, 'ALUM. FOIL ROUND PAN 710/34', 0, '1250063-300x300.jpg', '183X37MM', '', 1, 'ALUM. FOIL ROUND PAN #710/34', 'STARNET', '500â€™S/CTN'),
(17, 'ALUM. FOIL ROUND SIZE 151(41/26)(241)(152-G) 5000', 0, '1250128.jpg', '52X24MM', '', 2, 'ALUM. FOIL ROUND SIZE #151(41/26)(241)(152-G) 5000', 'STARNET', '5000PCS/CTN'),
(18, 'ALUM. FOIL SQ PAN 1452/44 (51550)', 0, '1250040-300x300.jpg', '205x205x45mm', '', 1, 'ALUM. FOIL SQ PAN #1452/44 (51550)', 'STARNET', '500PCS/CTN'),
(19, 'ALUM. FOIL TART CUP 53/24 (165)', 0, '1250130-300x300.jpg', '78x23mm', '', 2, 'ALUM. FOIL TART CUP #53/24 (165)', 'STARNET', '100â€™SX50PKTS/CTN'),
(20, 'ALUM. FOIL TRAY 115/34 (1110G)', 0, '1250131-300x300.jpg', '80X35MM', '', 2, 'ALUM. FOIL TRAY 115/34 (1110G)', 'STARNET', '100â€™SX25PKT/CTN'),
(21, 'BROWN MUFFIN CUP 60/60', 0, '1350073-300x300.jpg', '-', '', 2, 'BROWN MUFFIN CUP #60/60', 'WS', '3200PCS/CTN'),
(22, 'DIAMOND FOIL 25SQ. FT- 12â€³', 0, '1250041-300x300.jpg', '25SQ. FT- 12â€³', '', 1, 'DIAMOND FOIL 25SQ. FT- 12â€³', 'DM', '24PKTS/CTN-RN084'),
(23, 'DIAMOND FOIL 37.5SQ. FT- 18â€³', 0, '1250042-300x300.jpg', '37.5SQ. FT- 18â€³', '', 1, 'DIAMOND FOIL 37.5SQ. FT- 18â€³', 'DM', '24PKTS/CTN-RN087'),
(24, 'FOIL ROUND TRAY 60/14(164)', 0, '1250040-300x300.jpg', '-', '', 1, 'FOIL ROUND TRAY #60/14(164)', 'STARNET', '500â€™SX10PKTS/CTN'),
(25, 'LADY JAYNE BOBBY PIN BLACK 100S', 0, '2900021-300x300.jpg', '-', '', 3, 'LADY JAYNE BOBBY PIN BLACK 100\'S', 'LADY JAYNE', '-'),
(26, 'LADY JAYNE BRUSH FORMATION (L)', 0, '2900004-300x300.jpg', '-', '', 3, 'LADY JAYNE BRUSH FORMATION (L)', 'LADY JAYNE', '-'),
(27, 'LADY JAYNE BRUSH FORMATION (S)', 0, '2900006-300x300.jpg', '-', '', 3, 'LADY JAYNE BRUSH FORMATION (S)', 'LADY JAYNE', '-'),
(28, 'LADY JAYNE COMB GENERAL PURPOSE', 0, '2900018-300x300.jpg', '-', '', 3, 'LADY JAYNE COMB GENERAL PURPOSE', 'LADY JAYNE', '-'),
(29, 'LADY JAYNE COMB POCKET 2S', 0, '2900007-300x300.jpg', '-', '', 3, 'LADY JAYNE COMB POCKET 2\'S', 'LADY JAYNE', '-'),
(30, 'LADY JAYNE COMB WET CARE', 0, '2900007-300x300.jpg', '-', '', 3, 'LADY JAYNE COMB WET CARE', 'LADY JAYNE', '-'),
(31, 'LADY JAYNE DETANGLING BRUSH (L)', 0, '2900011-300x300.jpg', '-', '', 3, 'LADY JAYNE DETANGLING BRUSH (L)', 'LADY JAYNE', '-'),
(32, 'LADY JAYNE DETANGLING BRUSH (S)', 0, '2900010-300x300.jpg', '-', '', 3, 'LADY JAYNE DETANGLING BRUSH (S)', 'LADY JAYNE', '-'),
(33, 'LADY JAYNE DETANGLING COMB', 0, '', '-', '', 3, 'LADY JAYNE DETANGLING COMB', 'LADY JAYNE', '-'),
(34, 'LADY JAYNE ELASTIC BLACK 24S', 0, '', '-', '', 3, 'LADY JAYNE ELASTIC BLACK 24’S', 'LADY JAYNE ', '-'),
(35, 'LADY JAYNE HAIR NET DARK BROWN 2S', 0, '', '-', '', 3, 'LADY JAYNE HAIR NET DARK BROWN 2’S', 'LADY JAYNE', '-'),
(36, 'LADY JAYNE IONIC IONIC STYLING BRUSH (L)', 0, '', '-', '', 3, 'LADY JAYNE IONIC IONIC STYLING BRUSH (L)', 'LADY JAYNE', '-'),
(37, 'LADY JAYNE IONIC STYLING BRUSH (S)', 0, '', '-', '', 3, 'LADY JAYNE IONIC STYLING BRUSH (S)', 'LADY JAYNE', '-'),
(38, 'LADY JAYNE ONE TOUCH CLIP BLACK 10S', 0, '', '-', '', 3, 'LADY JAYNE ONE TOUCH CLIP BLACK 10’S', 'LADY JAYNE', '-'),
(39, 'LADY JAYNE ONE TOUCH CLIP MIX COL 10S', 0, '', '-', '', 3, 'LADY JAYNE ONE TOUCH CLIP MIX COL 10’S', 'LADY JAYNE', '-'),
(40, 'LADY JAYNE PAD BRUSH METAL (L)', 0, '', '-', '', 3, 'LADY JAYNE PAD BRUSH METAL (L)', 'LADY JAYNE', '-'),
(41, 'LADY JAYNE PAD BRUSH METAL (S)', 0, '', '-', '', 3, 'LADY JAYNE PAD BRUSH METAL (S)', 'LADY JAYNE', '-'),
(42, 'LADY JAYNE RADIAL BRUSH (M)', 0, '', '-', '', 3, 'LADY JAYNE RADIAL BRUSH (M)', 'LADY JAYNE', '-'),
(43, 'LADY JAYNE SHOWER CAP', 0, '', '-', '', 3, 'LADY JAYNE SHOWER CAP', 'LADY JAYNE', ''),
(44, 'LADY JAYNE SIDE COMB', 0, '', '-', '', 3, 'LADY JAYNE SIDE COMB', 'LADY JAYNE', '-'),
(45, 'LADY JAYNE SIDE COMB SHELL', 0, '', '-', '', 3, 'LADY JAYNE SIDE COMB SHELL', 'LADY JAYNE', '-'),
(46, 'LADY JAYNE SNAGGLES ELASTIC BLACK 50S', 0, '', '-', '', 3, 'LADY JAYNE SNAGGLES ELASTIC BLACK 50’S', 'LADY JAYNE', '-'),
(47, 'LADY JAYNE SNAGGLES ELASTIC MIX COL 18S', 0, '', '-', '', 3, 'LADY JAYNE SNAGGLES ELASTIC MIX COL 18’S', 'LADY JAYNE', '-'),
(48, 'LADY JAYNE SNAGGLES ELASTIC MIX COL 50S', 0, '', '-', '', 3, 'LADY JAYNE SNAGGLES ELASTIC MIX COL 50’S', 'LADY JAYNE', '-'),
(49, 'LADY JAYNE SNAGGLES THICK ELASTIC BROWN 10S', 0, '', '-', '', 3, 'LADY JAYNE SNAGGLES THICK ELASTIC BROWN 10’S', 'LADY JAYNE', '-'),
(50, 'LADY JAYNE SPORT ELASTIC MIX COL 8S', 0, '', '-', '', 3, 'LADY JAYNE SPORT ELASTIC MIX COL 8’S', 'LADY JAYNE', '-'),
(51, 'LADY JAYNE STYLING BRUSH (L)', 0, '', '-', '', 3, 'LADY JAYNE STYLING BRUSH (L)', 'LADY JAYNE', '-'),
(52, 'LADY JAYNE STYLING BRUSH (S)', 0, '', '-', '', 3, 'LADY JAYNE STYLING BRUSH (S)', 'LADY JAYNE', '-'),
(53, 'LADY JAYNE THICK ELASTIC BLACK 12S', 0, '', '-', '', 3, 'LADY JAYNE THICK ELASTIC BLACK 12’S', 'LADY JAYNE ', '-'),
(54, 'LADY JAYNE TINTING BRUSH', 0, '', '-', '', 3, 'LADY JAYNE TINTING BRUSH', 'LADY JAYNE', '-'),
(55, 'LADY JAYNE VOLUMISING COM 2S', 0, '', '-', '', 3, 'LADY JAYNE VOLUMISING COM 2’S', 'LADY JAYNE', '-'),
(56, 'MANICAR CUTICLE SCISSORS STRAIGHT', 0, '', '-', '', 3, 'MANICARE CUTICLE SCISSORS STRAIGHT', 'MANICARE', '-'),
(57, 'MANICARE 3-STEP NAIL BUFFER', 0, '', '-', '', 3, 'MANICARE 3-STEP NAIL BUFFER', 'MANICARE ', '-'),
(58, 'MANICARE 4-WAY BUFFER', 0, '', '-', '', 3, 'MANICARE 4-WAY BUFFER', 'MANICARE', '-'),
(59, 'MANICARE BABY NAIL CLIPPERS', 0, '', '-', '', 3, 'MANICARE BABY NAIL CLIPPERS', 'MANICARE ', '-'),
(60, 'MANICARE BABY SCISSORS', 0, '', '-', '', 3, 'MANICARE BABY SCISSORS', 'MANICARE', '-'),
(61, 'MANICARE CORN BLADES 5S', 0, '', '-', '', 3, 'MANICARE CORN BLADES 5’S', 'MANICARE ', '-'),
(62, 'MANICARE CORN PLANE W/BLADE', 0, '', '-', '', 3, 'MANICARE CORN PLANE W/BLADE', 'MANICARE', '-'),
(63, 'MANICARE CUTICLE SCISSORS CURVED', 0, '', '-', '', 3, 'MANICARE CUTICLE SCISSORS CURVED', 'MANICARE', '-'),
(64, 'MANICARE CUTICLE STICKS 4S', 0, '', '-', '', 3, 'MANICARE CUTICLE STICKS 4’S', 'MANICARE ', '-'),
(65, 'MANICARE FLAT TWEEZER', 0, '', '-', '', 3, 'MANICARE FLAT TWEEZER', 'MANICARE', '-'),
(66, 'MANICARE LOOFAH BATH BRUSH', 0, '', '-', '', 3, 'MANICARE LOOFAH BATH BRUSH', 'MANICARE ', '-'),
(67, 'MANICARE MIRACLE SHINER 2S', 0, '', '-', '', 3, 'MANICARE MIRACLE SHINER 2’S', 'MANICARE', '-'),
(68, 'MANICARE NAIL CLIPPER W/CHAIN', 0, '', '-', '', 3, 'MANICARE NAIL CLIPPER W/CHAIN', 'MANICARE', '-'),
(69, 'MANICARE NAIL CLIPPERS', 0, '', '-', '', 3, 'MANICARE NAIL CLIPPERS', 'MANICARE ', '-'),
(70, 'MANICARE NAIL SCISSORS CURVED', 0, '', '-', '', 3, 'MANICARE NAIL SCISSORS CURVED', 'MANICARE', '-'),
(71, 'MANICARE NAIL SHAPERS 2S', 0, '', '-', '', 3, 'MANICARE NAIL SHAPERS 2’S', 'MANICARE ', '-'),
(72, 'MANICARE NASAL SCISSORS', 0, '', '-', '', 3, 'MANICARE NASAL SCISSORS', 'MANICARE', '-'),
(73, 'MANICARE PEDICURE FILE', 0, '', '-', '', 3, 'MANICARE PEDICURE FILE', 'MANICARE ', '-'),
(74, 'MANICARE PIMPLE/BLKHEAD REMOVER', 0, '', '-', '', 3, 'MANICARE PIMPLE/BLKHEAD REMOVER', 'MANICARE', '-'),
(75, 'MANICARE RETRACTABLE MINI LIP BRUSH', 0, '', '-', '', 3, 'MANICARE RETRACTABLE MINI LIP BRUSH', 'MANICARE ', '-'),
(76, 'MANICARE ROTARY NAIL CLIPPER', 0, '', '-', '', 3, 'MANICARE ROTARY NAIL CLIPPER', 'MANICARE ', '-'),
(77, 'MANICARE SAPPHIRE NAIL FILE', 0, '', '-', '', 3, 'MANICARE SAPPHIRE NAIL FILE', 'MANICARE', '-'),
(78, 'MANICARE SLEEPING MASK', 0, '', '-', '', 3, 'MANICARE SLEEPING MASK', 'MANICARE ', '-'),
(79, 'MANICARE SUPER SHINE NAIL BUFFER', 0, '', '-', '', 3, 'MANICARE SUPER SHINE NAIL BUFFER', 'MANICARE ', '-'),
(80, 'MANICARE TOENAIL CLIPPERS', 0, '', '-', '', 3, 'MANICARE TOENAIL CLIPPERS', 'MANICARE ', '-'),
(81, 'MANICARE TOENAIL CLIPPERS W/CATCHER', 0, '', '-', '', 3, 'MANICARE TOENAIL CLIPPERS W/CATCHER', 'MANICARE ', '-'),
(82, 'MANICARE WOODEN BATH BRUSH', 0, '', '-', '', 3, 'MANICARE WOODEN BATH BRUSH', 'MANICARE', '-'),
(83, 'MULTIX 70292 GREENER ALUM. FOIL', 0, '1250386-300x300.jpg', '10M X 30CM', '', 1, 'MULTIX 70292 GREENER ALUM. FOIL', 'MULTIX', '12ROLLS/CTN'),
(84, 'MULTIX ALUM.FOIL 10MX30CM', 0, '1250383-300x300.jpg', '10MX30CM', '', 1, 'MULTIX ALUM.FOIL 10MX30CM', 'MULTIX', '12PKT/CTN'),
(85, 'MULTIX ALUM.FOIL 20MX30CM', 0, '1250384-300x300.jpg', '20MX30CM', '', 1, 'MULTIX ALUM.FOIL 20MX30CM', 'MULTIX', '12PKT/CTN'),
(86, 'MULTIX ALUM.FOIL ALL PURPOSE', 0, '1250378-300x300.jpg', '150MX44CM', '', 1, 'MULTIX ALUM.FOIL ALL PURPOSE', 'MULTIX', '4ROLL/CTN'),
(87, 'MULTIX ALUM.FOIL â€œBULK PACKâ€', 0, '1250380-300x300.jpg', '150MX30CM', '', 1, 'MULTIX ALUM.FOIL â€œBULK PACKâ€', 'MULTIX', '6ROLL/CTN'),
(88, 'MULTIX ALUM.FOIL EXTRA WIDE 5MX44CM', 0, '1250381-300x300.jpg', '5MX44CM', '', 1, 'MULTIX ALUM.FOIL EXTRA WIDE 5MX44CM', 'MULTIX', '12PKT/CTN'),
(89, 'MULTIX ALUM.FOIL HEAVY DUTY', 0, '1250379-300x300.jpg', '150MX44CM', '', 1, 'MULTIX ALUM.FOIL HEAVY DUTY', 'MULTIX', '4ROLL/CTN'),
(90, 'PLAIN FOIL LINED BAG (320X165X68MM) â€“ CHICKEN FOIL ', 0, '1250010-300x300.jpg', '320X165X68MM', '', 1, 'PLAIN FOIL LINED BAG (320X165X68MM) â€“ CHICKEN FOIL', 'SKP', '1000â€™S/BDL'),
(91, 'PLASTIC CAKE KNIFE 9â€³- PLAIN', 0, '1350185-300x300.jpg', '-', '', 2, 'PLASTIC CAKE KNIFE 9â€³- PLAIN', 'STARNET', '100â€™SX20PKTS/CTN'),
(92, 'PLASTIC CAKE KNIFE 9â€³- STRAIGHT PINK', 0, '1350063-300x300.jpg', '9', '', 2, 'PLASTIC CAKE KNIFE 9â€³- STRAIGHT PINK', 'WS', '100â€™SX20PKTS/CTN'),
(93, 'REYNOLDS ALUM CATERING FOIL 615', 0, '1250020-300x300.jpg', '18â€³X1000FT', '', 1, 'REYNOLDS ALUM CATERING FOIL 615', 'REY', '1000FT'),
(94, 'REYNOLDS FOIL PAN 1149/1150/6132', 0, '1250044-300x300.jpg', '322X260X60/64MM', '', 1, 'REYNOLDS FOIL PAN 1149/1150/6132', 'REY', '100PCS/CTN'),
(95, 'REYNOLDS FOIL PAN 1174/1173/6050XH', 0, '1250045-300x300.jpg', '524.5Ã—326.5Ã—82/86.5mm', '', 1, 'REYNOLDS FOIL PAN 1174/1173/6050XH', 'REY', '40PCS/CTN'),
(96, 'sa', 0, 'Chrysanthemum.jpg', 's', '', 1, 'sa', 'dskj', 's'),
(97, 'SKP ALUM FOIL 18â€³X300M 3ROLLS/CTN', 0, '1250377-300x300.jpg', '18â€³X300M', '', 1, 'SKP ALUM FOIL 18â€³X300M 3ROLLS/CTN', 'SKP', '3ROLLS/CTN'),
(98, 'SKP ALUM FOIL 25SQ. FT HEAVY DUTY', 0, '1250325-300x300.jpg', '-', '', 1, 'SKP ALUM FOIL 25SQ. FT HEAVY DUTY', 'SKP', '24ROLLS/CTN'),
(99, 'SKP ALUM FOIL 37.5SQ. FT HEAVY DUTY', 0, '1250326-300x300.jpg', '-', '', 1, 'SKP ALUM FOIL 37.5SQ. FT HEAVY DUTY', 'SKP', '24ROLLS/CTN'),
(100, 'SLICE CAKE TRAY â€“ MULTI SHAPE (PG/PS)', 0, '1350478.jpg', '-', '', 2, 'SLICE CAKE TRAY â€“ MULTI SHAPE (PG/PS)', 'STARNET', '50â€™S/PKT STRNET 1000â€™S/PKT'),
(101, 'SMARTSKIN FRAGRANCE FREE FACIAL WIPES 25S - 72160', 0, '', '-', '', 3, 'SMARTSKIN FRAGRANCE FREE FACIAL WIPES 25’S – 72160', 'SMARTSKIN ', '48PKT/CTN'),
(102, 'SMARTSKIN SCENTED FACIAL WIPES 25S - 72161', 0, '', '-', '', 3, 'SMARTSKIN SCENTED FACIAL WIPES 25’S – 72161', 'SMARTSKIN ', '48PKT/CTN'),
(104, 'STAR ALUM FOIL HEART TRAY 6302 W/LID', 0, '1250342-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL HEART TRAY #6302 W/LID', 'AKYU', '10â€™SX48PKT/CTN'),
(105, 'STAR ALUM FOIL RECT TRAY 4330 W/LID', 0, '1250360-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL RECT TRAY #4330 W/LID', 'AKYU', '10â€™SX60PKT/CTN'),
(106, 'STAR ALUM FOIL RECT TRAY 4363 W/LID', 0, '1250361-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL RECT TRAY #4363 W/LID', 'AKYU', '5â€™SX50PKT/CTN'),
(107, 'STAR ALUM FOIL RECT TRAY 4369 W/LID', 0, '1250362-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL RECT TRAY #4369 W/LID', 'AKYU', '5â€™SX54PKT/CTN'),
(108, 'STAR ALUM FOIL RECT TRAY 4423 W/LID', 0, '1250363-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL RECT TRAY #4423 W/LID', 'AKYU', '5â€™SX72PKT/CTN'),
(109, 'STAR ALUM FOIL RECT TRAY 4438 W/LID 5â€™S/SET', 0, '1250365-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL RECT TRAY #4438 W/LID 5â€™S/SET', 'AKYU', '5â€™SX25PKT/CTN'),
(110, 'STAR ALUM FOIL RECT TRAY 4504 W/LID 5â€™S/SET', 0, '1250367-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL RECT TRAY #4504 W/LID 5â€™S/SET', 'AKYU', '5â€™SX72PKT/CTN'),
(111, 'STAR ALUM FOIL RECT TRAY 4571 W/LID 5â€™S/SET', 0, '1250368-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL RECT TRAY #4571 W/LID 5â€™S/SET', 'AKYU', '5â€™SX60PKT/CTN'),
(112, 'STAR ALUM FOIL RECT TRAY 4573 W/LID 5â€™S/SET', 0, '1250370-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL RECT TRAY #4573 W/LID 5â€™S/SET', 'AKYU', '5â€™SX64PKT/CTN'),
(113, 'STAR ALUM FOIL RECT TRAY 4618 W/LID', 0, '1250343-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL RECT TRAY #4618 W/LID', 'AKYU', '10â€™SX50PKT/CTN'),
(114, 'STAR ALUM FOIL ROUND TRAY 3202 W/LID', 0, '1250344-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL ROUND TRAY #3202 W/LID', 'AKYU', '20â€™SX75PKT/CTN'),
(115, 'STAR ALUM FOIL ROUND TRAY 3319 W/LID', 0, '1250346-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL ROUND TRAY #3319 W/LID', 'AKYU', '10â€™SX75PKT/CTN'),
(116, 'STAR ALUM FOIL SQUARE TRAY 4483 W/LID 5â€™S/SET', 0, '1250366-300x300.jpg', '-', '', 1, 'STAR ALUM FOIL SQUARE TRAY #4483 W/LID 5â€™S/SET', 'AKYU', '5â€™SX16PKT/CTN'),
(117, 'SWISSPERS COSMETIC SQ PADS 150S', 0, '', '-', '', 3, 'SWISSPERS COSMETIC SQ PADS 150’S', 'SWISSPERS ', '-'),
(118, 'SWISSPERS COSMETIC SQ PADS 80S', 0, '', '-', '', 3, 'SWISSPERS COSMETIC SQ PADS 80’S', 'SWISSPERS ', '-'),
(119, 'SWISSPERS COTTON TIPS 240S', 0, '', '-', '', 3, 'SWISSPERS COTTON TIPS 240’S', 'SWISSPERS', '-'),
(120, 'SWISSPERS CUCUMBER FACIAL WIPES 25S', 0, '', '-', '', 3, 'SWISSPERS CUCUMBER FACIAL WIPES 25’S', 'SWISSPERS', '-'),
(121, 'SWISSPERS DUAL COSMETIC TIPS 100S', 0, '', '-', '', 3, 'SWISSPERS DUAL COSMETIC TIPS 100’S', 'SWISSPERS ', '-'),
(122, 'SWISSPERS MAKE-UP PADS (L) 40S', 0, '', '-', '', 3, 'SWISSPERS MAKE-UP PADS (L) 40’S', 'SWISSPERS', '-'),
(123, 'SWISSPERS MAKE-UP PADS 80S', 0, '', '-', '', 3, 'SWISSPERS MAKE-UP PADS 80’S', 'SWISSPERS ', '-'),
(124, 'SWISSPERS ORIGINAL FACIAL WIPES 25S', 0, '', '-', '', 3, 'SWISSPERS ORIGINAL FACIAL WIPES 25’S', 'SWISSPERS ', '-'),
(125, 'TWIST TIE (GOLD SPOOL)', 0, '1350062-300x300.jpg', '4MMX1200M', '', 1, 'TWIST TIE (GOLD SPOOL)', 'JOSIN', '12ROLLS/CTN'),
(128, 'Testing3', 50, 'Jellyfish.jpg', 's', '1', 17, 's', 'ss', 's'),
(130, 'TestPrice', 30, 'Lighthouse.jpg', 'ss', '1', 1, 'ss', 'ss', 'ss'),
(131, 'new', 800, 'Jellyfish.jpg', '23', '2', 1, 'ss', 'ss', 'SS'),
(132, 'TestProduct', 200, 'Desert.jpg', '(150X150CM\"S)', '1', 1, 'ss', 'ss', 'bb');

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(277) NOT NULL,
  `email` varchar(277) NOT NULL,
  `number` int(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`) VALUES
(2, 'Vong Nyuk Soon', 'vongnyuksoon2000@gmail.com', 149250544, 'asdasd');

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `name` varchar(277) NOT NULL,
  `company_name` varchar(277) NOT NULL,
  `ordered_product` varchar(277) NOT NULL,
  `ordered_quantity` int(255) NOT NULL,
  `email` varchar(277) NOT NULL,
  `number` varchar(277) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`id`, `name`, `company_name`, `ordered_product`, `ordered_quantity`, `email`, `number`, `messages`) VALUES
(2, 'Vong Nyuk Soon', 'Apple', 'TestPrice', 44, 'vongnyuksoon2000@gmail.com', '149250544', '44');

-- --------------------------------------------------------

--
-- 表的结构 `footer`
--

CREATE TABLE `footer` (
  `address` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `whatsapp` varchar(30) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `footer`
--

INSERT INTO `footer` (`address`, `phone`, `email`, `whatsapp`, `url`) VALUES
('66,Jalan height\r\n8/7, Taman height\r\n81550,Johor', '+6016-7653800', ' enquiry@dolphinplastic.com', '+60167653800', 'Http://www.dolphinplastic.com'),
('66,Jalan height\r\n8/7, Taman height\r\n81550,Johor', '+6016-7653800', ' enquiry@dolphinplastic.com', '+60167653800', 'Http://www.dolphinplastic.com'),
('66,Jalan height\r\n8/7, Taman height\r\n81550,Johor', '+6016-7653800', ' enquiry@dolphinplastic.com', '+60167653800', 'Http://www.dolphinplastic.com');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`) VALUES
(1, 'Industrial'),
(2, 'Foods');

-- --------------------------------------------------------

--
-- 表的结构 `product_category`
--

CREATE TABLE `product_category` (
  `id` int(255) NOT NULL,
  `product_type` varchar(277) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `product_category`
--

INSERT INTO `product_category` (`id`, `product_type`) VALUES
(1, 'Aluminium'),
(2, 'Bakery'),
(3, 'Cosmetic'),
(4, 'Equipment'),
(5, 'Foam'),
(6, 'Grocery'),
(7, 'Homecare'),
(8, 'Household'),
(9, 'Microwave'),
(10, 'Misc'),
(11, 'Paper'),
(12, 'Party'),
(13, 'Plastic'),
(14, 'Plcont'),
(15, 'Stationary'),
(16, 'Wooden'),
(17, 'Test'),
(18, 'TestEdit'),
(20, 'NewBrandEdit3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- 使用表AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
