-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2017 at 09:44 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vanvyshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `dong_sp`
--

CREATE TABLE `dong_sp` (
  `id_dsp` int(11) NOT NULL,
  `ten_dsp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dong_sp`
--

INSERT INTO `dong_sp` (`id_dsp`, `ten_dsp`, `mota`, `trangthai`) VALUES
(1, 'Sá»¯a rá»­a máº·t', 'Da máº·t ', 'Hoáº¡t Ä‘á»™ng'),
(2, 'Táº©y trang', 'DÃ¹ng sau khi trang Ä‘iá»ƒm ', 'Hoáº¡t Ä‘á»™ng'),
(3, 'NÆ°á»›c hoa há»“ng', 'Äáº¹p da', 'Hoáº¡t Ä‘á»™ng');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `id_dsp` int(11) NOT NULL,
  `id_th` int(11) NOT NULL,
  `ma_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `dvt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `dung_luong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xuat_xu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota_chitiet` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_dsp`, `id_th`, `ma_sp`, `ten_sp`, `gia_sp`, `dvt`, `soluong`, `dung_luong`, `xuat_xu`, `trangthai`, `hinh_anh`, `mota_chitiet`) VALUES
(4, 1, 1, 'SRM001', 'Sá»¯a rá»­a máº·t 3W Clinic Brown Rice', 60000, 'BÃ¬nh', 4, '100ml', 'HÃ n Quá»‘c', 'CÃ²n hÃ ng', '', 'GÆ°Æ¡ng máº·t lÃ  vá»‘n quÃ½ cá»§a má»—i ngÆ°á»i, cáº£ phÃ¡i Ä‘áº¹p láº«n phÃ¡i máº¡nh. Da máº·t láº¡i má»ng vÃ  nháº¡y cáº£m. ChÃ­nh vÃ¬ tháº¿, viá»‡c chÄƒm sÃ³c da máº·t má»—i ngÃ y lÃ  viá»‡c cáº§n thiáº¿t, vÃ  ráº¥t khÃ³ Ä‘á»ƒ cÃ³ Ä‘Æ°á»£c má»™t gÆ°Æ¡ng máº·t Ä‘áº¹p hoÃ n háº£o. Sá»¯a rá»­a máº·t 3W Clinic Ä‘ang Ä‘Æ°á»£c Æ°a chuá»™ng. Chiáº¿t xuáº¥t tá»« thiÃªn nhiÃªn giÃºp lÃ n da trá»Ÿ nÃªn má»‹n mÃ n sau khi sá»­ dá»¥ng.  Brown-Rice-3W-Clinic1'),
(5, 3, 2, 'NHH001', 'NÆ°á»›c hoa há»“ng Benton Aloe BHA Skin Toner', 170000, 'BÃ¬nh', 5, '200ml', 'HÃ n Quá»‘c', 'CÃ²n hÃ ng', '', 'Sau má»™t ngÃ y, lÃ n da cá»§a báº¡n sáº½ bá»‹ bá»¥i báº·m vÃ  bÃ£ nhá»n bÃ­t kÃ­n lá»— chÃ¢n lÃ´ng. Viá»‡c báº¡n cáº§n lÃ m ngay khi vá» nhÃ  lÃ  táº©y trang rá»­a máº·t, vÃ  dÃ¹ng ngay nÆ°á»›c hoa há»“ng Ä‘á»ƒ  lÃ m sáº¡ch bÃ£ nhá»n vÃ  bá»¥i báº©m dÆ°á»›i da  khiáº¿n da trá»Ÿ nÃªn mÆ°á»›t má»‹n vÃ  khá»e máº¡nh.  NÆ°á»›c hoa há»“ng  Benton Aloe BHA Skin Tone lÃ  sáº£n pháº©m Ä‘áº§u tiÃªn cá»§a HÃ n Quá»‘c cÃ³ chá»©a BHA. Tuy lÆ°á»£ng BHA trong sáº£n pháº©m chá»‰ á»Ÿ má»©c ráº¥t nhá» nhÆ°ng cÃ³ liá»u lÆ°á»£ng nháº¹ mÃ  dá»… thÃ­ch nghi vá»›i lÃ n da má»ng manh cá»§a ngÆ°á»i chÃ¢u Ã.');

-- --------------------------------------------------------

--
-- Table structure for table `thuong_hieu`
--

CREATE TABLE `thuong_hieu` (
  `id_th` int(11) NOT NULL,
  `ten_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xuat_xu` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`id_th`, `ten_th`, `mota`, `trangthai`, `xuat_xu`) VALUES
(1, '3w', '', 'Hoáº¡t Ä‘á»™ng', 'HÃ n Quá»‘c'),
(2, 'Benton', '', 'Hoáº¡t Ä‘á»™ng', 'HÃ n Quá»‘c'),
(3, 'City Color', '', 'Hoáº¡t Ä‘á»™ng', 'Má»¹'),
(4, 'Cocoon', '', 'Hoáº¡t Ä‘á»™ng', 'Viá»‡t Nam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `gioi_tinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_dh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phanquyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `hoten`, `ngay`, `thang`, `nam`, `gioi_tinh`, `dia_chi`, `sdt`, `email`, `pass`, `hinh_dh`, `phanquyen`) VALUES
(1, 'VÄƒn Vy', 4, 3, 1994, 'Ná»¯', '26 Tráº§n Há»¯u Trang - ÄN ', '01219737545', 'vanvy543612@gmail.com', '12345', '', 'Member'),
(2, 'ABC', 4, 2, 1940, 'Nam', '123abc', '124253464576756', 'abs123@gmail.com', '321123', '../images/uploaded/2017-02-11-09-32-48_NHHBENTON.jpg', 'Member'),
(3, 'Nguyen a', 7, 10, 1947, 'Ná»¯', '3412341dfsdvv', '1241413', 'aaa@gmail.com', '456654', '../images/uploaded/2017-02-11-09-43-07_NHHBENTON.jpg', 'Member'),
(8, 'sddfd', 17, 5, 1951, 'Ná»¯', '23bdfbdfb', '1245267347', 'asd@gmail.com', '121231413', '', 'Member'),
(10, 'VÄƒn Vy', 15, 1, 1950, 'Nam', '123bnksjd', '12256475', 'vy@gmail.com', '12345677', '../images/uploaded/2017-02-11-10-32-41_SRM3W.jpg', 'Member'),
(11, 'VÄƒn Vy', 14, 1, 1952, 'Nam', '123dbsfbdf', '1243134134', 'vyvyvy@gmail.com', '121314', '', 'Member'),
(12, 'VÄƒn Vy 12314', 16, 2, 1954, 'Nam', '12 vasb', '01219737545', 'vanvy543612@gmail.com', '3414', '../images/uploaded/_SRMGARNIER.jpg', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dong_sp`
--
ALTER TABLE `dong_sp`
  ADD PRIMARY KEY (`id_dsp`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`id_th`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dong_sp`
--
ALTER TABLE `dong_sp`
  MODIFY `id_dsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `id_th` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
