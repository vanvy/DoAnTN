-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 08:47 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tivashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nd_chinh` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id_baiviet`, `id_loai`, `tieude`, `nd_chinh`, `noidung`, `thoigian`, `hinh_anh`, `trangthai`) VALUES
(2, 1, 'HIGHLIGHT CITY COLOR SPOTLIGHT', 'Báº£ng Hight light giÃºp phÃ¡i Ä‘áº¹p sá»Ÿ há»¯u má»™t lÃ n da vá»›i váº» Ä‘áº¹p Ä‘áº§y sá»©c sá»‘ng tá»±a má»—i ngÃ y! ÄÃ¢y lÃ  sáº£n pháº©m khÃ´ng thá»ƒ thiáº¿u trong bá»™ trang Ä‘iá»ƒm cá»§a phÃ¡i Ä‘áº¹p', 'Pháº¥n phá»§ highlight cá»§a City Color táº¡i shop má»¹ pháº©m xÃ¡ch tay ÄÃ  Náºµng Sagi vá»›i cÃ¡c thÃ nh pháº§n khoÃ¡ng tá»± nhiÃªn vÃ´ cÃ¹ng lÃ nh tÃ­nh vÃ  phÃ¹ há»£p vá»›i má»i loáº¡i da Ä‘áº·c biá»‡t lÃ  da dáº§u, má»¥n. Káº¿t cáº¥u háº¡t pháº¥n ráº¥t tÆ¡i, má»‹n vÃ  nháº¹ dá»… dÃ ng tÃ¡n Ä‘á»u trÃªn da. Nhá» mÃ ng báº£o vá»‡ cÃ³ cÃ´ng dá»¥ng pháº£n chiáº¿u Ã¡nh máº·t trá»i tá»« cÃ¡c thÃ nh pháº§n khoÃ¡ng mÃ  sáº£n pháº©m cÃ³ thá»ƒ táº¡o ra má»™t lá»›p pháº¥n hoÃ n háº£o cho toÃ n bá»™ gÆ°Æ¡ng máº·t giÃºp che giáº¥u cÃ¡c khuyáº¿t Ä‘iá»ƒm vÃ  cÃ¢n báº±ng sÃ¡ng cho lÃ n da báº¡n.\r\n\r\nCáº¥u trÃºc nháº¹ nhÃ ng tá»« cÃ¡c thÃ nh pháº§n khoÃ¡ng cá»§a pháº¥n phá»§ khÃ´ng lÃ m dáº§y hay náº·ng máº·t, mÃ  ngÆ°á»£c láº¡i hiá»‡u á»©ng tá»« pháº¥n highlight táº¡i shop má»¹ pháº©m ÄÃ  Náºµng Sagi sáº½ mang láº¡i cho báº¡n lÃ  má»™t lá»›p pháº¥n má»ng, nháº¹, matte, pháº¥n bÃ¡m vÃ o da ráº¥t â€œtháº­tâ€, sÃ¡ng vÃ  trong, vÃ  lÃ n da dÃ¹ cÃ³ pháº¥n nhÆ°ng da váº«n nhÆ° Ä‘ang Ä‘Æ°á»£c â€œthá»Ÿâ€, Ä‘áº¹p má»™t cÃ¡ch tá»± nhiÃªn.\r\nSáº£n pháº©m Ä‘Ã£ Ä‘Æ°á»£c kiá»ƒm nghiá»‡m nÃªn an toÃ n cho da nháº¡y cáº£m nha.', '2017-03-17 01:37:15', '../images/uploaded/2017-03-17-09-40-58_phan-highlight-city-color-spotlight-highlight-tai-sagi-shop.jpg', 'Hoáº¡t Ä‘á»™ng '),
(3, 2, 'NÆ¯á»šC HOA Há»’NG MERLOT NATURAL GRAPE SEED SKIN CARE HYDRATING TONER', 'Merlot Hydrating Toner cÃ³ xuáº¥t xá»© tá»« Má»¹. Vá»›i giÃ¡ bÃ¡n bÃ¬nh dÃ¢n khoáº£ng 11$ cho chai 236ml (cÃ¡c cá»­a hÃ ng xÃ¡ch tay á»Ÿ Viá»‡t Nam cÃ³ giÃ¡ hÆ¡n 300.000VND) sáº£n pháº©m nÃ y Ä‘Ã¡p á»©ng Ä‘á»§ cÃ¡c tiÃªu chÃ­ cháº¥t lÆ°á»£ng cho má»™t loáº¡i toner. Khi sá»­ dá»¥ng, báº¡n cáº§n Ä‘á»• toner ra bÃ´ng táº©y trang vÃ  lau nháº¹ nhÃ ng trÃªn da.', 'LÃ½ do Ä‘áº§u tiÃªn khiáº¿n tÃ´i chá»n mua sáº£n pháº©m nÃ y lÃ  vÃ¬ Æ°ng Ã½ vá»›i báº£ng thÃ nh pháº§n. Trong thÃ nh pháº§n chÃ­nh cÃ³ chiáº¿t xuáº¥t cÃ¢y phá»‰ (witch hazel extract) giÃºp lÃ m sáº¡ch sÃ¢u cho da vÃ  chá»‘ng viÃªm nhiá»…m. NgoÃ i ra cÃ²n cÃ³ vÃ i cháº¥t cÃ³ cÃ´ng dá»¥ng hÃºt áº©m, lÃ m má»m dá»‹u, cung cáº¥p thÃªm dÆ°á»¡ng cháº¥t cho da nhÆ° nÆ°á»›c lÃ´ há»™i, glycerin vÃ  protein yáº¿n máº¡ch. BÃªn cáº¡nh Ä‘Ã³, tÃ´i khÃ´ng thá»ƒ khÃ´ng nháº¯c Ä‘áº¿n chiáº¿t xuáº¥t háº¡t nho. ÄÃ¢y vá»‘n lÃ  linh há»“n cá»§a dÃ²ng sáº£n pháº©m Merlot, lÃ  má»™t cháº¥t chá»‘ng Ã´xi hÃ³a ráº¥t máº¡nh (máº¡nh hÆ¡n gáº§n 25 láº§n so vá»›i vitamin C), giÃºp giá»¯ gÃ¬n sá»± tÆ°Æ¡i tráº» cho da.\r\n\r\nMá»™t Æ°u Ä‘iá»ƒm lá»›n cá»§a toner Merlot lÃ  nÃ³ khÃ´ng chá»©a cá»“n vÃ  cháº¥t táº¡o mÃ¹i nÃªn khÃ¡ dá»‹u nháº¹ vá»›i da nháº¡y cáº£m. Vá»›i má»™t báº£ng thÃ nh pháº§n nhiá»u cháº¥t tá»‘t vÃ  an toÃ n cho da nhÆ° váº­y, tÃ´i cÃ³ thá»ƒ tá»± tin vÃ  an tÃ¢m dÃ¹ng sáº£n pháº©m nÃ y Ä‘á»ƒ chÄƒm sÃ³c da hÃ ng ngÃ y, lÃ¢u dÃ i.', '2017-03-17 09:42:34', '../images/uploaded/2017-03-17-09-42-57_nuoc-hoa-hong-merlot-hydrating-toner-review1.jpg', 'Hoáº¡t Ä‘á»™ng'),
(4, 4, 'Máº¸O LÃ€M Äáº¸P Äáº¾N Tá»ª CÃ€ Rá»T VÃ€ Sá»®A CHUA ', 'CÃ  rá»‘t vÃ  sá»¯a chua má»™t trong nhá»¯ng cÃ´ng thá»©c giÃºp lÃ m Ä‘áº¹p dáº¡ toÃ n diá»‡n, cung cáº¥p ráº¥t nhiá»u vitamin vÃ  dÆ°á»¡ng cháº¥t cho lÃ n da cá»§a báº¡n trá»Ÿ nÃªn khá»e máº¡nh hÆ¡n.', 'CÃ¡c chá»‹ em thÆ°á»ng cÃ³ suy nghÄ© ráº¥t khÃ³ Ä‘á»ƒ sá»Ÿ há»¯u 1 lÃ n da Ä‘áº¹p vÃ  khá»e khoáº¯n. NhÆ°ng vá»›i bÃ i viáº¿t dÆ°á»›i Ä‘Ã¢y báº¡n Ä‘Ã£ cÃ³ thá»ƒ giÃºp lÃ n da cá»§a mÃ¬nh trá»Ÿ nÃªn Ä‘áº¹p ráº¡ng ngá»i, báº¡n sáº½ khÃ´ng cÃ²n pháº£i e tháº¹n vá»›i báº¡n bÃ¨, Ä‘á»“ng nghiá»‡p.\r\nChuáº©n bá»‹ nÆ°á»›c Ã©p cÃ  rá»‘t vÃ  sá»¯a chua theo tá»· lá»‡ 1:1, sau Ä‘Ã³ trá»™n Ä‘á»u vÃ  thoa Ä‘á»u lÃªn da máº·t, mÃ¡t xa nháº¹ da vÃ  giá»¯ nguyÃªn há»—n há»£p chá»«ng 15 phÃºt hÃ£y rá»­a láº¡i vá»›i nÆ°á»›c áº¥m. Váº­y cÃ´ng dá»¥ng cá»§a cÃ´ng thá»©c Ä‘Æ¡n giáº£n nÃ y lÃ  gÃ¬?\r\n\r\nNgÄƒn ngá»«a sá»± oxy hoÃ¡ á»Ÿ da\r\n\r\nVitamin C vÃ  nhá»¯ng dÆ°á»¡ng cháº¥t chá»‘ng oxy hÃ³a lÃ  nhá»¯ng gÃ¬ mÃ  há»—n há»£p nÃ y mang láº¡i cho lÃ n da cá»§a báº¡n, há»—n há»£p cÃ  rá»‘t vÃ  sá»¯a chua sáº½ giÃºp nuÃ´i dÆ°á»¡ng táº¿ bÃ o da cá»§a báº¡n tá»« sÃ¢u bÃªn trong,vÃ¬ váº­y sáº½ mang láº¡i hiá»‡u quáº£ lÃ m Ä‘áº¹p ráº¥t hiá»‡u quáº£.\r\n\r\nMá» sáº¹o, má»¥n trá»©ng cÃ¡\r\n\r\nHá»—n há»£p cÃ  rá»‘t vÃ  sá»¯a chua khÃ´ng chá»‰ lÃ m Ä‘áº¹p da, giÃºp da tÆ°Æ¡i tráº» mÃ  cÃ²n lÃ m má» cÃ¡c váº¿t sáº¹o, cÃ¡c váº¿t thÃ¢m, sáº¹o do má»¥n trá»©ng cÃ¡, má»¥n Ä‘áº­u Ä‘en Ä‘á»ƒ láº¡i.\r\n\r\nÄem láº¡i váº» tÆ°Æ¡i tráº» cho da\r\n\r\nCÃ´ng thá»©c cÃ  rá»‘t vÃ  sá»¯a chua Ä‘áº©y máº¡nh quÃ¡ trÃ¬nh tÃ¡i táº¡o collagen má»™t trong nhá»¯ng dÆ°á»¡ng cháº¥t giÃºp tÄƒng sá»± Ä‘Ã n há»“i cá»§a da, da báº¡n sáº½ khÃ´ng cÃ²n nhá»¯ng náº¿p nhÄƒn, trá»Ÿ nÃªn má»‹n mÃ n hÆ¡n, tÆ°Æ¡i tráº» hÆ¡n. HÃ£y kiÃªn trÃ¬ sá»­ dá»¥ng cÃ´ng thá»©c nÃ y báº¡n sáº½ khÃ´ng cÃ²n lo ngáº¡i vá» náº¿p nhÄƒn trÃªn khuÃ´n máº·t.\r\n\r\nHáº¿t ngay da khÃ´, da ná»©t náº»\r\n\r\nVitamin C chá»©a nhiá»u trong cÃ  rá»‘t khÃ´ng chá»‰ ngÄƒn ngá»«a sá»± oxy hÃ³a mÃ  cÃ²n giÃºp giá»¯ Ä‘á»™ áº©m hiá»‡u quáº£ khÃ´ng há» kÃ©m. VÃ  nhá»¯ng cháº¥t dinh dÆ°á»¡ng cÃ³ trong sá»¯a chua sáº½ giÃºp da trá»Ÿ nÃªn má»m má»‹n hÆ¡n bao giá» háº¿t.\r\n\r\nBáº£o vá»‡ da khá»i tÃ¡c háº¡i cá»§a náº¯ng\r\n\r\nHá»—n há»£p cÃ  rá»‘t vÃ  sá»¯a chua lÃ  táº¡o thÃ nh cÃ´ng thá»©c báº£o vá»‡ da khá»i tÃ¡c háº¡i cá»§a Ã¡nh náº¯ng máº·t trá»i cá»±c ká»³ hiá»‡u quáº£.\r\n\r\n \r\n\r\n \r\n\r\nGiáº£m sá»± phÃ¡t triá»ƒn cá»§a lÃ´ng trÃªn máº·t\r\n\r\nChá»‰ cáº§n â€œbiáº¿n hÃ³aâ€ há»—n há»£p nÃ y má»™t tÃ½ vá»›i bá»™t nghá»‡ thÃªm vÃ o báº¡n Ä‘Ã£ cÃ³ má»™t há»—n há»£p á»©c cháº¿ sá»± phÃ¡t triá»ƒn cá»§a lÃ´ng máº·t cÃ¹ng vá»›i sá»± má»m má»‹n cá»§a lÃ n da.\r\n\r\nChÃºc báº¡n lÃ m Ä‘áº¹p thÃ nh cÃ´ng!', '2017-03-17 09:44:27', '../images/uploaded/2017-03-17-09-44-27_cach-tri-mun-dau-den-bang-ca-rot0.jpg', 'Hoáº¡t Ä‘á»™ng');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethd`
--

CREATE TABLE `chitiethd` (
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chitiethd`
--

INSERT INTO `chitiethd` (`id_hd`, `id_sp`, `soluong`, `gia`, `sale`, `thanhtien`) VALUES
(64, 4, 1, 170000, 10, 153000),
(64, 7, 1, 60000, 20, 48000),
(65, 5, 1, 90000, 10, 81000),
(65, 9, 1, 170000, 0, 170000);

-- --------------------------------------------------------

--
-- Table structure for table `dong_sp`
--

CREATE TABLE `dong_sp` (
  `id_dsp` int(11) NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `ten_dsp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dong_sp`
--

INSERT INTO `dong_sp` (`id_dsp`, `id_loaisp`, `ten_dsp`, `mota`, `trangthai`) VALUES
(1, 2, 'Sá»¯a rá»­a máº·t', 'Da máº·t ', 'Hoáº¡t Ä‘á»™ng'),
(2, 2, 'Táº©y trang', 'DÃ¹ng sau khi trang Ä‘iá»ƒm ', 'Hoáº¡t Ä‘á»™ng'),
(3, 2, 'NÆ°á»›c hoa há»“ng', 'Äáº¹p da', 'Hoáº¡t Ä‘á»™ng'),
(4, 6, 'Son', 'Son mÃ´i, son dÆ°á»¡ng', 'Hoáº¡t Ä‘á»™ng'),
(5, 2, 'TÃ¢á»· táº¿ bÃ o cháº¿t', 'Da máº·t', 'Hoáº¡t Ä‘á»™ng'),
(6, 0, 'Kem dÆ°á»¡ng ', 'Kem dÆ°á»¡ng da toÃ n thÃ¢n', 'Hoáº¡t Ä‘á»™ng'),
(7, 5, 'DÆ°á»¡ng tÃ³c', 'DÆ°á»¡ng tÃ³c', 'Hoáº¡t Ä‘á»™ng'),
(8, 6, 'Kem chá»‘ng náº¯ng', 'Má»¹ pháº©n trang Ä‘iá»ƒm, dÆ°á»¡ng da, chá»‘ng náº¯ng', 'Hoáº¡t Ä‘á»™ng'),
(9, 2, 'Máº·t náº¡ cho da máº·t', 'ChÄƒm sÃ³c da máº·t', 'Hoáº¡t Ä‘á»™ng'),
(10, 2, 'DÆ°á»¡ng máº¯t - dÃ i mi', 'ChÄƒm sÃ³c da máº·t', 'Hoáº¡t Ä‘á»™ng'),
(11, 3, 'Sá»¯a táº¯m - Táº©y táº¿ bÃ o cháº¿t', 'LÃ m má»m má»‹n da', 'Hoáº¡t Ä‘á»™ng'),
(12, 3, 'ChÄƒm sÃ³c da tay', 'XÃ  phÃ²ng, kem dÆ°á»¡ng,...', 'Hoáº¡t Ä‘á»™ng'),
(13, 3, 'Kem táº©y lÃ´ng - Wax lÃ´ng', 'LÃ´ng tay, lÃ´ng chÃ¢n, ...', 'Hoáº¡t Ä‘á»™ng'),
(14, 3, 'Äáº·c trá»‹ vÃ¹ng nÃ¡ch', 'DÆ°á»¡ng da, trá»‹ thÃ¢m', 'Hoáº¡t Ä‘á»™ng'),
(15, 5, 'LÃ´ táº¡o kiá»ƒu khÃ´ng nhiá»‡t', 'KhÃ´ng háº¡i cho tÃ³c', 'Hoáº¡t Ä‘á»™ng'),
(16, 5, 'MÃ¡y táº¡o kiá»ƒu tÃ³c', 'MÃ¡y uá»‘n, mÃ¡y káº¹p,...', 'Hoáº¡t Ä‘á»™ng'),
(17, 6, 'Pháº¥n mÃ¡ há»“ng', 'Trang Ä‘iá»ƒm', 'Hoáº¡t Ä‘á»™ng'),
(18, 6, 'Kem ná»n ', 'DÆ°á»¡ng da, hÃºt dáº§u', 'Hoáº¡t Ä‘á»™ng'),
(19, 6, 'Che khuyáº¿t Ä‘iá»ƒm', 'Pháº¥n, bÃºt, ....', 'Hoáº¡t Ä‘á»™ng'),
(20, 6, 'Trang Ä‘iá»ƒm máº¯t', 'Masara, bÃºt váº½,...', 'Hoáº¡t Ä‘á»™ng');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `ngay_lap` int(11) NOT NULL,
  `thang_lap` int(11) NOT NULL,
  `nam_lap` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `id_kh`, `ngay_lap`, `thang_lap`, `nam_lap`, `id_user`, `tongtien`, `status`) VALUES
(64, 68, 12, 6, 2017, 0, 201000, 'Äáº·t hÃ ng'),
(65, 69, 12, 6, 2017, 0, 251000, 'Äáº·t hÃ ng');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(3) UNSIGNED ZEROFILL NOT NULL,
  `ten_kh` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `ten_kh`, `sdt`, `diachi`) VALUES
(067, 'Nguyá»…n VÄƒn Nam', '1234567890', '123 HoÃ ng Diá»‡u'),
(068, 'Nguyá»…n VÄƒn Nam', '1234567890', '123 HoÃ ng Diá»‡u'),
(069, 'Nguyá»…n An', '0987678876', '123 HoÃ ng Hoa ThÃ¡m, ÄN');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loaisp` int(11) NOT NULL,
  `ten_loaisp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `ten_loaisp`, `mota`, `trangthai`, `hinh_anh`) VALUES
(2, 'ChÄƒm sÃ³c da máº·t', 'Da máº·t', 'Hoáº¡t Ä‘á»™ng', '../images/uploaded/2017-03-16-03-29-01_face1.png'),
(3, 'ChÄƒm sÃ³c toÃ n thÃ¢n', 'Da toÃ n thÃ¢n (tay, chÃ¢n,...)', 'Hoáº¡t Ä‘á»™ng', '../images/uploaded/2017-03-16-03-29-23_cream.png'),
(5, 'ChÄƒm sÃ³c tÃ³c', 'TÃ³c', 'Hoáº¡t Ä‘á»™ng', '../images/uploaded/2017-03-16-03-29-30_hair.png'),
(6, 'Má»¹ pháº©m trang Ä‘iá»ƒm', 'Pháº¥n, son,....', 'Hoáº¡t Ä‘á»™ng', '../images/uploaded/2017-03-16-03-28-46_valentines.png');

-- --------------------------------------------------------

--
-- Table structure for table `loai_baiviet`
--

CREATE TABLE `loai_baiviet` (
  `id_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_baiviet`
--

INSERT INTO `loai_baiviet` (`id_loai`, `ten_loai`, `mota`, `trangthai`) VALUES
(1, 'Tin tá»©c', 'ThÃ´ng tin tin tá»©c cá»§a sáº£n pháº©m', 'Hoáº¡t Ä‘á»™ng'),
(2, 'Táº¡p chÃ­ sáº£n pháº©m ', 'CÃ¡c bÃ i viáº¿t liÃªn quan Ä‘áº¿n sáº£n pháº©m', 'Hoáº¡t Ä‘á»™ng'),
(4, 'Cáº©m nang lÃ m Ä‘áº¹p', 'LÃ m Ä‘áº¹p táº¡i nhÃ  ', 'Hoáº¡t Ä‘á»™ng');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `id_dsp` int(11) NOT NULL,
  `id_th` int(11) NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `ma_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dung_luong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xuat_xu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sale` int(11) DEFAULT '0',
  `trangthai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota_chitiet` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_dsp`, `id_th`, `id_loaisp`, `ma_sp`, `ten_sp`, `gia_sp`, `soluong`, `dung_luong`, `xuat_xu`, `sale`, `trangthai`, `hinh_anh`, `mota_chitiet`) VALUES
(4, 1, 1, 2, 'SRM001', 'Sá»¯a rá»­a máº·t 3W Clinic Brown Rice', 60000, 31, '100ml', 'HÃ n Quá»‘c', 20, 'CÃ²n hÃ ng', '../images/uploaded/2017-03-16-02-16-16_SRM3W.jpg', 'GÆ°Æ¡ng máº·t lÃ  vá»‘n quÃ½ cá»§a má»—i ngÆ°á»i, cáº£ phÃ¡i Ä‘áº¹p láº«n phÃ¡i máº¡nh. Da máº·t láº¡i má»ng vÃ  nháº¡y cáº£m. ChÃ­nh vÃ¬ tháº¿, viá»‡c chÄƒm sÃ³c da máº·t má»—i ngÃ y lÃ  viá»‡c cáº§n thiáº¿t, vÃ  ráº¥t khÃ³ Ä‘á»ƒ cÃ³ Ä‘Æ°á»£c má»™t gÆ°Æ¡ng máº·t Ä‘áº¹p hoÃ n háº£o. Sá»¯a rá»­a máº·t 3W Clinic Ä‘ang Ä‘Æ°á»£c Æ°a chuá»™ng. Chiáº¿t xuáº¥t tá»« thiÃªn nhiÃªn giÃºp lÃ n da trá»Ÿ nÃªn má»‹n mÃ n sau khi sá»­ dá»¥ng.  Brown-Rice-3W-Clinic1'),
(5, 3, 2, 2, 'NHH001', 'NÆ°á»›c hoa há»“ng Benton Aloe BHA Skin Toner', 170000, 55, '200ml', 'HÃ n Quá»‘c', 0, 'CÃ²n hÃ ng', '../images/uploaded/2017-03-16-01-30-41_NHHBENTON.jpg', 'Sau má»™t ngÃ y, lÃ n da cá»§a báº¡n sáº½ bá»‹ bá»¥i báº·m vÃ  bÃ£ nhá»n bÃ­t kÃ­n lá»— chÃ¢n lÃ´ng. Viá»‡c báº¡n cáº§n lÃ m ngay khi vá» nhÃ  lÃ  táº©y trang rá»­a máº·t, vÃ  dÃ¹ng ngay nÆ°á»›c hoa há»“ng Ä‘á»ƒ  lÃ m sáº¡ch bÃ£ nhá»n vÃ  bá»¥i báº©m dÆ°á»›i da  khiáº¿n da trá»Ÿ nÃªn mÆ°á»›t má»‹n vÃ  khá»e máº¡nh.  NÆ°á»›c hoa há»“ng  Benton Aloe BHA Skin Tone lÃ  sáº£n pháº©m Ä‘áº§u tiÃªn cá»§a HÃ n Quá»‘c cÃ³ chá»©a BHA. Tuy lÆ°á»£ng BHA trong sáº£n pháº©m chá»‰ á»Ÿ má»©c ráº¥t nhá» nhÆ°ng cÃ³ liá»u lÆ°á»£ng nháº¹ mÃ  dá»… thÃ­ch nghi vá»›i lÃ n da má»ng manh cá»§a ngÆ°á»i chÃ¢u Ã.'),
(6, 1, 5, 2, 'SRM003', 'Sá»¯a Rá»­a Máº·t Gáº¡o The Face Shop  Rice Water Bright Cleansing Foam Mousse Nettoyante', 140000, 0, '300', 'HÃ n Quá»‘c', 30, 'CÃ²n hÃ ng', '../images/uploaded/2017-03-16-11-11-44_THE-FACE-SHOP-RICE-WATER-BRIGHT-CLEANSING-FOAM-MOUSSE-NETTOYANTE-2-450x600.jpg', 'Má»™t lÃ n da khá»e lÃ  má»™t da sáº¡ch chÃ­nh vÃ¬ tháº¿ hÃ ng ngÃ y chÃºng ta cáº§n pháº£i rá»­a máº·t tháº­t sáº¡ch. NhÆ°ng chá»‰ dÃ¹ng nÆ°á»›c thÃ´i thÃ¬ chÆ°a Ä‘á»§ vÃ¬ ko thá»ƒ lÃ m sáº¡ch sÃ¢u dÆ°á»›i lá»— chÃ¢n lÃ´ng, chÃºng ta nÃªn dÃ¹ng sá»­a rá»­a máº·t Ä‘á»ƒ láº¥y sáº¡ch bá»¥i báº©n vÃ  bÃ£ nhá»n mang láº¡i lÃ n da sáº¡ch vÃ  sÃ¡ng khá»e. Sá»¯a Rá»­a Máº·t Gáº¡o The Face Shop Cleansing Foam Mousse Nettoyante vá»›i káº¿t cáº¥u dáº¡ng kem má»‹n, dá»… táº¡o bá»t, táº¡o cáº£m giÃ¡c trÆ¡n lÃ¡ng, má»m má»‹n sau khi rá»­a máº·t.'),
(7, 4, 6, 6, 'SON01', 'Son liÌ€ daÌ£ng kem Color Lips Fit Etude House', 170000, 6, '10', 'HÃ n Quá»‘c', 10, 'CÃ²n hÃ ng', '../images/uploaded/2017-03-16-11-20-02_sonson.jpg', 'Xu hÆ°á»›ng trang Ä‘iá»ƒm theo cÃ¡c ngÃ´i sao xá»© Kim chi khÃ´ng chá»‰ táº¡o Ä‘Æ°á»£c lÃ n sÃ³ng trong nÆ°á»›c mÃ  cÃ²n lan rá»™ng ra cÃ¡c nÆ°á»›c chÃ¢u Ã, trong Ä‘Ã³ cÃ³ Viá»‡t Nam. Má»¹ pháº©m HÃ n Quá»‘c ngÃ y cÃ ng chiáº¿m Ä‘Æ°á»£c cáº£m tÃ¬nh cá»§a phÃ¡i Ä‘áº¹p. HÃ£ng son Etude House cÅ©ng khÃ´ng nÄƒm ngoÃ i uy tÃ­n Ä‘Ã³, báº±ng viá»‡c tung ra dÃ²ng son lÃ¬ dáº¡ng kem Color Lips â€“ Fit má»™t dÃ²ng son ná»•i trá»™i, uy tÃ­n vÃ  lÃªn mÃ u cá»±c chuáº©n. SaÌ‰n phÃ¢Ì‰m Ä‘Æ°Æ¡Ì£c má»‡nh danh lÃ  â€Magic water lipstickâ€ bá»Ÿi Ä‘á»™ lÃ¬ hoÃ n háº£o láº§n Ä‘áº§u tiÃªn Ä‘Æ°á»£c giá»›i thiá»‡u, taÌ£o caÌ‰m giaÌc vÃ´ cÃ¹ng nháº¹ nhÃ ng vÃ  thoáº£i mÃ¡i nhÆ° khÃ´ng Ä‘Ã¡nh son.'),
(8, 5, 7, 2, 'TBC001', 'Gel táº©y táº¿ bÃ o cháº¿t Arrahan Peeling Gel', 120000, 4, '180', 'HÃ n Quá»‘c', 5, 'CÃ²n hÃ ng', '../images/uploaded/2017-03-16-11-19-27_tay-bao-chet-arrahan-peeling-gel1-450x600.jpg', 'CÃ³ thá»ƒ nÃ³i, táº©y táº¿ bÃ o cháº¿t lÃ  cÃ´ng Ä‘oáº¡n Ä‘áº§u tiÃªn vÃ  quan trá»ng nháº¥t trong viá»‡c chÄƒm sÃ³c da, bá»Ÿi hÆ¡n 80% cháº¥t bá»¥i báº©n bÃ¡m láº¡i trÃªn da táº¡o nÃªn lá»›p táº¿ bÃ o cháº¿t nÃ y. Má»™t lÃ n da tráº¯ng Ä‘áº¹p trÆ°á»›c háº¿t pháº£i lÃ  má»™t lÃ n da sáº¡ch vÃ  khá»e máº¡nh. Táº©y táº¿ bÃ o cháº¿t khÃ´ng chá»‰ giÃºp da tÆ°Æ¡i sÃ¡ng, ráº¡ng rá»¡ hÆ¡n mÃ  cÃ²n kÃ­ch thÃ­ch quÃ¡ trÃ¬nh tuáº§n hoÃ n tÃ¡i táº¡o da, xÃ³a má» cÃ¡c váº¿t thÃ¢m, xá»‰n mÃ u, lÃ m tÄƒng hiá»‡u quáº£ cá»§a quÃ¡ trÃ¬nh dÆ°á»¡ng da, giÃºp cÃ¡c dÆ°á»¡ng cháº¥t tháº¥m sÃ¢u vÃ o da, nuÃ´i dÆ°á»¡ng da tá»« bÃªn trong má»™t cÃ¡ch tá»‘i Æ°u.  HÃ´m nay Sagi Shop giá»›i thiá»‡u Ä‘áº¿n cÃ¡c báº¡n má»™t loáº¡i gel chiáº¿t xuáº¥t tá»« trÃ¡i cÃ¢y thiÃªn nhiÃªn, giÃºp loáº¡i bá» nhá»¯ng lá»›p táº¿ bÃ o cháº¿t trÃªn da, Ä‘Ã³ chÃ­nh lÃ  Arrahan Peeling Gel Ä‘Æ°á»£c chiáº¿t xuáº¥t tá»« hoa quáº£ nhÆ°: TÃ¡o, Chanh, Hoa Äinh hÆ°Æ¡ng, cung cáº¥p vitamin, dÆ°á»¡ng cháº¥t, nháº¹ nhÃ ng loáº¡i bá» cÃ¡c táº¿ bÃ o cháº¿t trÃªn da, lÃ m tráº¯ng da. Mang láº¡i lÃ n da tráº¯ng sÃ¡ng ráº¡ng ngá»i cho báº¡n'),
(9, 6, 1, 3, 'KEM01', 'Kem DÆ°á»¡ng Thá»ƒ VÃ  Tay The Face Shop Hand & Body Shiffon Cream ', 90000, -2, '100ml', 'HÃ n Quá»‘c', 10, 'CÃ²n hÃ ng', '../images/uploaded/2017-03-16-11-13-57_62-450x600.jpg', 'Hand & Body Shiffon Cream â€“ Kem dÆ°á»¡ng thá»ƒ vÃ  tay cÃ³ káº¿t cáº¥u cá»±c má»‹n, dÆ°á»¡ng thá»ƒ vÃ  dÆ°á»¡ng tay, giÃºp báº£o vá»‡ da chá»‘ng lÃ£o hÃ³a vÃ  nuÃ´i dÆ°á»¡ng lÃ n da, cung cáº¥p Ä‘á»™ áº©m hiá»‡u quáº£, lÃ m da má»‹n mÆ°á»£t mÃ  khÃ´ng há» gÃ¢y nhá»n dÃ­nh vá»›i hÆ°Æ¡ng thÆ¡m ngá»t ngÃ o tá»« mÃ¹i hÆ°Æ¡ng trÃ¡i cÃ¢y dá»… chá»‹u vÃ´ cÃ¹ng.'),
(10, 7, 8, 5, 'DT01', 'Dáº§u Gá»™i Avalon Organics Shampoo', 280000, 4, '325 ml', 'Má»¹', 0, 'CÃ²n hÃ ng', '../images/uploaded/2017-03-16-11-52-46_DAU-GOI-DAU-AVALON-ORGANICS-SHAMPOO1-450x600.jpg', 'ThÆ°Æ¡ng hiá»‡u Avalon Organics ra Ä‘á»i vÃ o nÄƒm 1994 vá»›i cáº£m há»©ng tá»« nÃ´ng nghiá»‡p há»¯u cÆ¡ nÃªn sáº£n pháº©m Ä‘Æ°a ra thá»‹ trÆ°á»ng cá»§a Avalon Organics Ä‘á»u 70 % thiÃªn nhiÃªn. HÃ£ng cho ra dáº§u gá»™i Avalon Organics Ä‘á»ƒ giáº£i quyáº¿t váº¥n Ä‘á» nhÆ° tÃ³c rá»¥ng , kÃ­ch thÃ­ch tÃ³c má»c nhanh dÃ y vÃ  dÃ i cá»§a chá»‹ em phá»¥ ná»¯ hay cáº£ cÃ¡nh mÃ y rÃ¢u bá»‹ tÃ¬nh tráº¡ng trÃªn.  Sáº£n pháº©m Ä‘Æ°á»£c rate ráº¥t cao trÃªn cÃ¡c trÃªn web uy tÃ­n, Ä‘áº·c trá»‹ rá»¥ng tÃ³c-kÃ­ch thÃ­ch má»c tÃ³c, bá»• sung dÆ°á»¡ng cháº¥t cho da Ä‘áº§u Ä‘á»ƒ nuÃ´i dÆ°á»¡ng tÃ³c má»m máº¡i, bá»“ng bá»nh cháº¯c khá»e.'),
(12, 8, 5, 6, 'MPTD001', 'Xá»‹t Chá»‘ng Náº¯ng The Face Shop Natural Sun ECO Ice Air Puff Sun SPF50+ PA+++', 320000, 7, '50ml', 'HÃ n Quá»‘c', 0, 'CÃ²n hÃ ng', '../images/uploaded/2017-03-16-01-44-06_kem-chong-nang-the-face-shop-natural-sun-eco-spf50.2-450x600.jpg', 'Sáºµn sÃ ng Ä‘Æ°Æ¡ng Ä‘áº§u náº¯ng, nÃ³ng vá»›i â€ Ã¡o giÃ¡p má»›i, kiÃªm Ä‘iá»u hÃ²a di Ä‘á»™ng â€ tá»« sá»© sá»Ÿ cá»§a cÃ´ng â€œChÃºa Tuyáº¿t  Ice Air Puff Sunâ€ táº¡i vÆ°Æ¡ng quá»‘c The Faceshop nÃ o!!  Natural Sun ECO Ice Air Puff Sun phÃ¡t huy tá»‘i Ä‘a Æ°u Ä‘iá»ƒm chá»‘ng náº¯ng cá»§a 1 loáº¡i kem chá»‘ng náº¯ng vÆ°á»£t trÃ´i, kháº£ nÄƒng chá»‘ng náº¯ng tá»‘i Æ°u chá»‘ng láº¡i cáº£ tia UVA vÃ  UVB,SPF 50+ báº£o vá»‡ da trong liÃªn tá»¥c 12h, chá»‰ sá»‘PA+++ tá»‘i Ä‘a hÆ¡n 90% kháº£ nÄƒng chá»‘ng náº¯ng.'),
(13, 19, 10, 6, 'MPTD002', 'Kem Che Khuyáº¿t Äiá»ƒm, Táº¡o Khá»‘i 6 Ã” Beauty Treats Concealer & Contour Collection', 180000, 77, '17.4g', 'Má»¹', 0, 'CÃ²n hÃ ng', '../images/uploaded/2017-03-16-02-04-10_BEAUTY-TREATS-CONCEALER-CONTOUR-COLLECTION-450x600.jpg', 'Kem lÃ³t (primer) vÃ  kem ná»n (foundation) lÃ  nhá»¯ng yáº¿u tá»‘ cáº§n thiáº¿t cho má»™t lá»›p trang Ä‘iá»ƒm Ä‘áº¹p máº¯t, nhÆ°ng Ä‘á»ƒ cÃ³ lÃ n da sau khi makeup Ä‘áº¡t tá»›i má»©c hoÃ n háº£o thÃ¬ khÃ´ng thá»ƒ khÃ´ng ká»ƒ tá»›i â€œcÃ´ng laoâ€ cá»§a kem che khuyáº¿t Ä‘iá»ƒm (concealer)  Tháº¥u hiá»ƒu Ä‘Æ°á»£c váº¥n Ä‘á» nÃ y, hÃ£ng Beauty Treats Ä‘Ã£ cho ra Ä‘á»i sáº£n pháº©m kem che khuyáº¿t Ä‘iá»ƒm concealer & contour káº¿t há»£p 6 Ã´ Ä‘a nÄƒng Beauty Treats Concealer & Contour Collection, sáº£n pháº©m cÃ³ Ä‘áº§y Ä‘á»§ cÃ¡c Ã´ tá»« che khuyáº¿t Ä‘iá»ƒm, che quáº§ng thÃ¢m máº¯t (Ã´ mÃ u cam, mng hay xem clip cá»§a cÃ¡c chuyÃªn gia makeup cÅ©ng tháº¥y Ä‘Ã¢y lÃ  cÃ¡ch há» dÃ¹ng Ä‘á»ƒ che khuyáº¿t Ä‘iá»ƒm vÃ¹ng thÃ¢m máº¯t cá»±c hiá»‡u quáº£ ), contour táº¡o khá»‘i Ä‘áº­m nháº¡t giÃºp táº¡o nÃ©t cho khuÃ´n máº·t thon gá»n, sá»‘ng mÅ©i cao tháº³ng.');

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
(4, 'Cocoon', '', 'Hoáº¡t Ä‘á»™ng', 'Viá»‡t Nam'),
(5, 'The Face Shop', 'Da máº·t', 'Hoáº¡t Ä‘á»™ng', 'HÃ n Quá»‘c'),
(6, 'Etude House', 'Son', 'Hoáº¡t Ä‘á»™ng', 'HÃ n Quá»‘c'),
(7, 'Arrahan', 'Táº©y táº¿ bÃ o cháº¿t cho da máº·t', 'Hoáº¡t Ä‘á»™ng', 'HÃ n Quá»‘c'),
(8, ' Avalon Organics', 'DÆ°á»¡ng tÃ³c', 'Hoáº¡t Ä‘á»™ng', 'Má»¹'),
(10, 'Beauty Treats', 'má»¹ pháº©m trang Ä‘iá»ƒm', 'Hoáº¡t Ä‘á»™ng', 'Má»¹'),
(11, 'Ponds', 'ChuyÃªn vá» da máº·t', 'Hoáº¡t Ä‘á»™ng', 'Má»¹'),
(12, 'Revlon', 'Trang Ä‘iá»ƒm', 'Hoáº¡t Ä‘á»™ng', 'Má»¹');

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

INSERT INTO `user` (`id_user`, `hoten`, `ngay`, `thang`, `nam`, `dia_chi`, `sdt`, `email`, `pass`, `hinh_dh`, `phanquyen`) VALUES
(0, 'CUSTOMER', 1, 1, 2000, '1', '1', 'email@example.com', '1', '', 'Member'),
(31, 'Nguyen Van B', 11, 8, 1993, '123 abc', '1234567890', 'nguyenB123@gmail.com', '@VEWNpIIXEZ3w', '../images/uploaded/_meo1.jpg', 'Admin'),
(32, 'Kim Hoa', 16, 10, 1986, '120 Nguyá»…n Huy TÆ°á»Ÿng', '1234567890', 'kimhoa123@example.com', '@VEWNpIIXEZ3w', '../images/uploaded/2017-06-10-08-15-37_sun-flower-1497092_960_720.jpg', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Indexes for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`id_hd`,`id_sp`);

--
-- Indexes for table `dong_sp`
--
ALTER TABLE `dong_sp`
  ADD PRIMARY KEY (`id_dsp`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Indexes for table `loai_baiviet`
--
ALTER TABLE `loai_baiviet`
  ADD PRIMARY KEY (`id_loai`);

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
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dong_sp`
--
ALTER TABLE `dong_sp`
  MODIFY `id_dsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `loai_baiviet`
--
ALTER TABLE `loai_baiviet`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `id_th` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
