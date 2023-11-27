-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2023 at 09:53 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopeedata`
--
CREATE DATABASE IF NOT EXISTS `shopeedata` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `shopeedata`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taikhoan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `roleaccount` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `taikhoan`, `matkhau`, `roleaccount`) VALUES
(1, 'thanhtri', '123', 0),
(16, 'thanhtri89', '123', 1),
(17, 'thanhtri23079', '456', 1),
(18, 'minhthuan', '123', 1),
(19, 'trongnghia', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `idbanner` int(11) NOT NULL AUTO_INCREMENT,
  `tenbanner` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhbanner` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idbanner`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`idbanner`, `tenbanner`, `hinhanhbanner`) VALUES
(1, 'highland', 'banner1.jpg'),
(2, 'xe', 'banner2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `idcart` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` int(10) DEFAULT NULL,
  `idaccount` int(11) NOT NULL,
  `ngaytaogiohang` int(11) NOT NULL,
  `ngaycapnhat` int(11) NOT NULL,
  PRIMARY KEY (`idcart`),
  KEY `idcart-idaccount` (`idaccount`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idcart`, `hoten`, `sdt`, `diachi`, `tongtien`, `idaccount`, `ngaytaogiohang`, `ngaycapnhat`) VALUES
(23, 'ThanhTrí', 907203732, '84ttranđĩnhu, phường cô giang quận 1', 12340000, 1, 1687422340, 1687422340),
(24, 'ThanhTrí', 3358, 'dsadsad', 16660000, 1, 1687422744, 1687422744),
(25, 'Võ Chánh Hải', 399254422, 'Nhà Bè', 8915000, 16, 1687490164, 1687490164),
(26, 'ThanhTrí', 3358, 'dsadsad', 3450000, 18, 1687521018, 1687521018),
(27, 'ThanhTrí', 3358, 'ádasd', 5150000, 18, 1687521064, 1687521064),
(28, 'dá', 54040, 'DSADSA', 105000, 19, 1687527994, 1687527994),
(29, 'ThanhTrí', 123, '123', 160000, 16, 1688607032, 1688607032);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT,
  `tendanhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhdanhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`iddanhmuc`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `tendanhmuc`, `hinhanhdanhmuc`) VALUES
(1, 'Thời Trang Nam', 'danhmuc1.png'),
(2, 'Điện Thoại & Phụ Kiện', 'danhmuc2.png'),
(3, 'Thiết Bị Điện Tử', 'danhmuc3.png'),
(4, 'Máy Tính & Laptop', 'danhmuc4.png'),
(5, 'Máy Ảnh & Máy Quay Phim', 'danhmuc5.png'),
(6, 'Đồng Hồ', 'danhmuc6.png'),
(7, 'Giày Dép Nam', 'danhmuc61.png'),
(8, 'Thiết Bị Điện Gia Dụng', 'danhmuc7.png'),
(9, 'Thể Thao & Du Lịch', 'danhmuc18.png'),
(10, 'Ô tô & Xe Máy & Xe Đạp', 'danhmuc8.png'),
(11, 'Thời Trang Nữ', 'danhmuc16.png'),
(12, 'Mẹ & Bé', 'danhmuc10.png'),
(13, 'Nhà Cửa & Đời Sống', 'danhmuc19.png'),
(14, 'Sắc Đẹp', 'danhmuc12.png'),
(15, 'Sức Khỏe', 'danhmuc13.png'),
(16, 'Giày Dép Nữ', 'danhmuc14.png'),
(17, 'Túi Ví Nữ', 'danhmuc15.png'),
(18, 'Phụ Kiện & Thời Trang', 'danhmuc18.png'),
(19, 'Bách Hóa Online', 'danhmuc19.png'),
(20, 'Nhà Sách Online', 'danhmuc13.png');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

DROP TABLE IF EXISTS `dichvu`;
CREATE TABLE IF NOT EXISTS `dichvu` (
  `iddichvu` int(11) NOT NULL AUTO_INCREMENT,
  `tendichvu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`iddichvu`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`iddichvu`, `tendichvu`, `hinhanh`) VALUES
(1, 'Khung Giờ Săn Sale', 'icon1.png'),
(2, 'Gì Cũng Rẻ - Mua Là Freeship', 'icon2.png'),
(3, 'Mã Giảm Giá', 'icon3.png'),
(4, 'Miễn Phí Vận Chuyển', 'icon4.png'),
(5, 'Bắt Trend - Giá Sốc', 'icon5.png'),
(6, 'Voucher Giảm Đến 200.000Đ', 'icon6.png'),
(7, 'Hàng Hiệu Giá Tốt', 'icon7.png'),
(8, 'Hàng Quốc Tế', 'icon8.png'),
(9, 'Nạp Điện Thoại & Thẻ Game', 'icon9.png');

-- --------------------------------------------------------

--
-- Table structure for table `footerlink`
--

DROP TABLE IF EXISTS `footerlink`;
CREATE TABLE IF NOT EXISTS `footerlink` (
  `idlink` int(11) NOT NULL AUTO_INCREMENT,
  `tenlink` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idlink`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footerlink`
--

INSERT INTO `footerlink` (`idlink`, `tenlink`, `trangthai`) VALUES
(1, 'Trung Tâm Trợ Giúp', 'footer'),
(2, 'Shopee Blog', 'footer'),
(3, 'Shopee Mall', 'footer'),
(4, 'Hướng Dẫn Mua Hàng', 'footer'),
(5, 'Hướng Dẫn Bán Hàng', 'footer'),
(6, 'Thanh Toán', 'footer'),
(7, 'Vận Chuyển', 'footer'),
(8, 'Trả Hàng & Hoàn Tiền', 'footer'),
(9, 'Chăm Sóc Khách Hàng', 'footer'),
(10, 'Chính Sách Bảo Hành', 'footer'),
(11, 'Giới Thiệu Về Shopee Việt Nam', 'footer'),
(12, 'Tuyển Dụng', 'footer'),
(13, 'Điều Khoản Shopee', 'footer'),
(14, 'Chính Sách Bảo Mật', 'footer'),
(15, 'Chính Hãng', 'footer'),
(16, 'Kênh Người Bán', 'footer'),
(17, 'Flash Sales', 'footer'),
(18, 'Chương Trình Tiếp Thị Liên Kết Shopee', 'footer'),
(19, 'Liên Hệ Với Truyền Thông', 'footer'),
(20, 'Advert1', 'Advertise'),
(21, 'Advert2', 'Advertise'),
(22, 'Advert3', 'Advertise');

-- --------------------------------------------------------

--
-- Table structure for table `hotitem`
--

DROP TABLE IF EXISTS `hotitem`;
CREATE TABLE IF NOT EXISTS `hotitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idhotitem` int(11) NOT NULL,
  `daban` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idhotitem` (`idhotitem`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotitem`
--

INSERT INTO `hotitem` (`id`, `idhotitem`, `daban`) VALUES
(2, 13, '10k'),
(3, 8, '5k'),
(4, 17, '10k'),
(5, 16, '10k'),
(6, 11, '2k'),
(7, 8, '10k'),
(8, 11, '10k');

-- --------------------------------------------------------

--
-- Table structure for table `mall`
--

DROP TABLE IF EXISTS `mall`;
CREATE TABLE IF NOT EXISTS `mall` (
  `idmall` int(11) NOT NULL AUTO_INCREMENT,
  `tenmall` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhmall` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idmall`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mall`
--

INSERT INTO `mall` (`idmall`, `tenmall`, `hinhanhmall`) VALUES
(1, 'Tecno Spark', 'brandimage8.jpg'),
(2, 'Nội Y Sabina 9k', 'brandiamge1.png'),
(3, 'Sale chào hè 50%', 'brandiamge3.png'),
(4, 'Siêu ưu đãi độc', 'brandiamge4.png'),
(5, 'Giảm đến 43%', 'brandiamge5.png'),
(6, 'Mua là có quà', 'brandiamge6.png'),
(7, 'Mua là có quà', 'brandiamge2.png'),
(8, 'Ưu đãi đến 40%', 'brandiamge7.png');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

DROP TABLE IF EXISTS `navbar`;
CREATE TABLE IF NOT EXISTS `navbar` (
  `idnavbar` int(11) NOT NULL AUTO_INCREMENT,
  `tennavbar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idnavbar`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`idnavbar`, `tennavbar`) VALUES
(1, 'Đồ dùng '),
(2, ' Card Blackpink'),
(3, 'Dép'),
(4, 'Diều Sáo'),
(5, 'Vợt Cầu Lông'),
(6, ' Áo Đá Bóng'),
(7, ' NU Tam That'),
(8, 'Quạt Mini'),
(9, 'Váy');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE IF NOT EXISTS `orderdetail` (
  `iddetail` int(11) NOT NULL AUTO_INCREMENT,
  `idproduct` int(11) NOT NULL,
  `idcart` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `ngaydat` int(11) NOT NULL,
  `ngaycapnhat` int(11) NOT NULL,
  PRIMARY KEY (`iddetail`),
  KEY `idsanpham` (`idproduct`),
  KEY `orderdetail_ibfk_1` (`idcart`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`iddetail`, `idproduct`, `idcart`, `soluong`, `price`, `ngaydat`, `ngaycapnhat`) VALUES
(18, 5, 23, 2, 60000, 1687422340, 1687422340),
(19, 6, 23, 6, 90000, 1687422340, 1687422340),
(20, 7, 23, 1, 8000000, 1687422340, 1687422340),
(21, 16, 23, 16, 230000, 1687422340, 1687422340),
(22, 5, 24, 2, 60000, 1687422744, 1687422744),
(23, 6, 24, 6, 90000, 1687422744, 1687422744),
(24, 7, 24, 2, 8000000, 1687422744, 1687422744),
(26, 6, 25, 1, 90000, 1687490164, 1687490164),
(27, 7, 25, 1, 8000000, 1687490164, 1687490164),
(28, 8, 25, 1, 45000, 1687490164, 1687490164),
(29, 12, 25, 12, 65000, 1687490164, 1687490164),
(30, 16, 26, 15, 230000, 1687521019, 1687521019),
(31, 10, 27, 58, 50000, 1687521064, 1687521064),
(32, 15, 27, 15, 150000, 1687521064, 1687521064),
(33, 9, 28, 1, 35000, 1687527994, 1687527994),
(34, 11, 28, 1, 70000, 1687527994, 1687527994),
(35, 1, 29, 2, 80000, 1688607032, 1688607032);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `idsanpham` int(11) NOT NULL AUTO_INCREMENT,
  `tensanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(7) NOT NULL,
  `soluongban` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhsanpham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `danhmucsanpham` int(11) NOT NULL,
  PRIMARY KEY (`idsanpham`),
  KEY `sanpham_ibfk_1` (`danhmucsanpham`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `tensanpham`, `gia`, `soluongban`, `hinhanhsanpham`, `danhmucsanpham`) VALUES
(1, 'Áo Thun Junisex', 80000, 'Đã bán được 5k+', 'aoJunisex.jpg', 1),
(2, 'Áo Polo Nam', 80000, 'Đã bán được 10k', 'aopolonam.jpg', 2),
(3, 'Áo Thun Nữ', 10000, 'Đã bán hơn 5k', 'aothunnu.jpg', 8),
(4, 'Áo Thun Xanh', 120000, 'Đã bán hơn 10k', 'aothunnuxanh.jpg', 3),
(5, 'Dép Nữ Xinh ', 60000, 'Đã bán hơn 9k', 'depnu.jpg', 8),
(6, 'Dép Quai Sesa', 90000, 'Đã bán 10k', 'DepS.jpg', 4),
(7, 'Điện thoại rog', 8000000, 'Đã bán hơn 5k', 'dienthoairog.jpg', 5),
(8, 'Hình Xăm Dán', 45000, 'Đã bán hơn 3k', 'hinhxamdan.jpg', 6),
(9, 'Giấy Ăn', 35000, 'Đã bán hơn 10k', 'Khangiay.jpg', 7),
(10, 'Khẩu Trang Y tế', 50000, 'Đã bán hơn 25k', 'khautrang.jpg', 3),
(11, 'Ốp Lưng siêu cute', 70000, 'Đã bán hơn 4k', 'oplungcute.jpg', 4),
(12, 'Ố Lưng Điện Thoại', 65000, 'Đã bán hơn 1k', 'oplungdienthoai.jpg', 2),
(13, 'Kính Cường Lực', 65000, 'Đã bán hơn 5k', 'oplungip.jpg', 2),
(14, 'Quần Jean Nữ', 120000, 'Đã bán hơn 15K', 'quanjeannu.jpg', 3),
(15, 'Serum Dưỡng Ẩm Da', 150000, 'Đã bán hơn 20k', 'serumduongam.jpg', 5),
(16, 'Tai Nghe i12', 230000, 'Đã bán hơn 15k', 'tainghei12bt.jpg', 5),
(17, 'Tinh Dầu Bưởi', 75000, 'Đã bán hơn 15k', 'tinhdaubuoi.jpg', 9),
(18, 'Túi Xách Nữ', 65000, 'Đã bán hơn 15k', 'tuixachnu.jpg', 9),
(19, 'Ví Da Nữ', 130000, 'Đã bán hơn 15k', 'vinu.jpg', 6),
(20, 'Vòng Tay Nữ', 65000, 'Đã bán hơn 15k', 'vongtay.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `idslider` int(11) NOT NULL AUTO_INCREMENT,
  `tenslide` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhslide` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idslider`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`idslider`, `tenslide`, `hinhanhslide`) VALUES
(1, 'Sale 15 giữa tháng 4', 'slider2.jpg'),
(5, 'Flashsale', 'slider1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slidermall`
--

DROP TABLE IF EXISTS `slidermall`;
CREATE TABLE IF NOT EXISTS `slidermall` (
  `idmall` int(11) NOT NULL AUTO_INCREMENT,
  `tenslide` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idmall`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slidermall`
--

INSERT INTO `slidermall` (`idmall`, `tenslide`, `hinhanh`) VALUES
(1, 'bannerlamdep', 'bannermall1.jpg'),
(2, 'banner?', 'bannermall2.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `idcart-idaccount` FOREIGN KEY (`idaccount`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotitem`
--
ALTER TABLE `hotitem`
  ADD CONSTRAINT `hotitem_ibfk_1` FOREIGN KEY (`idhotitem`) REFERENCES `sanpham` (`idsanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`idcart`) REFERENCES `cart` (`idcart`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`idproduct`) REFERENCES `sanpham` (`idsanpham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`danhmucsanpham`) REFERENCES `danhmuc` (`iddanhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
