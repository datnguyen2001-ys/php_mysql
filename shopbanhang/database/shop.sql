-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2022 lúc 11:12 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img_products`
--

CREATE TABLE `img_products` (
  `id_image` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `img_products`
--

INSERT INTO `img_products` (`id_image`, `product_id`, `image`) VALUES
(15, 19, 'tải xuống (2).jpg'),
(16, 19, 'ao_thun_ha_noi_4.jpg'),
(17, 19, 'tải xuống (4).jpg'),
(18, 19, 'tải xuống (3).jpg'),
(19, 23, 'images (3).jpg'),
(20, 23, 'images (2).jpg'),
(21, 23, 'images (1).jpg'),
(22, 24, 'ao-khoac-bomber-du.jpeg'),
(23, 24, 'ao-kh0ac-bomber2.jpeg'),
(24, 24, 'ao-khoac-du-xanh-navy1.jpeg'),
(25, 25, 'quan jean nu baggy.jpg'),
(26, 25, 'quan jean nu gap gau.jpg'),
(28, 25, 'abe25dd6a2568b6cf6ef16d3d296979e.jpg'),
(29, 25, 'ad0503bba3282fc0b6124aceb5f920b5.jpg'),
(30, 26, 'bst-nhung-mau-vay-dam-mau-trang-dep-2cad72.jpg'),
(31, 26, 'tuyen-tap-nhung-mau-vay-dam-dep-mau-trang-dep-nhat-he-2018-6e7383.jpg'),
(32, 26, 'nhung-mau-vay-dep-nhat-hien-nay.jpg'),
(33, 27, '132a657fec6dae6e35f2f251b801bb63.jpg'),
(34, 27, '711a940356f2ec8d337dd635bc9b8313.jpg'),
(35, 27, '5dea94d955884ab322b1d572ff4445e0.jpg'),
(36, 28, '07fc34405393f6529d12b5dd2928fbbf.jpg'),
(37, 28, 'c2c1d5560918e74ccb49752b331b0e5c.jpg'),
(38, 28, '9db164edfb1354512d2efd0494da3870.jpg'),
(39, 29, '1d248ae8844204f60f00727e05b21288.jpg'),
(40, 29, '501efe15791bbe593b328e3f54950f6d.jpg'),
(41, 29, '29ea2e87c3bc0597115ee0bc2d561ce4.jpg'),
(42, 30, 'ecefbd5d58f0ca49f935445ca157fcbe (1).jpg'),
(43, 30, 'ecefbd5d58f0ca49f935445ca157fcbe.jpg'),
(44, 30, 'ae28839ce09f707ec12ec4b0c989f9d8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`) VALUES
(2, 'LOUIS VUITTON', ' Công ty Louis Vuitton (được biết đến nhiều hơn dưới tên gọi đơn giản là Louis Vuitton) là một công ty và nhãn hiệu thời trang xa xỉ của Pháp, có trụ sở tại Paris, Pháp. Đây là một ban của công ty cổ phần Pháp LVMH Louis Vuitton Moët Hennessy S.A. Công ty được đặt tên theo tên người sáng lập ra hãng là Louis Vuitton (4 tháng 8 năm 1821-27 tháng 2 năm 1892), người đã thiết kế và sản xuất hành lý như một Malletier trong nửa sau của thế kỷ 19.      ', 0),
(3, 'DIOR', 'Christian Dior S.E (tiếng Pháp: [kʁistjɑ̃ djɔʁ]), thường được gọi là Dior, là công ty hàng hóa xa xỉ nổi tiếng của Pháp thuộc quyền kiểm soát và điều hành bởi tỷ phú Bernard Arnault, cũng là người đứng đầu tập đoàn hàng hiệu LVMH lớn nhất thế giới. Dior tự mình nắm giữ 42.36% cổ phần và 59.01% quyền biểu quyết trong LVMH\r\n                    ', 0),
(4, 'DOLCE & GABBANA', ' dolce & Gabbana (ˈdoltʃe ænd gaˈbana) là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce (sinh gần Palermo, Sicilia) và Stefano Gabbana (sinh tại Milano). ', 1),
(5, 'PRADA', 'Prada là một nhãn hiệu thời trang của Ý chuyên về các sản phẩm cao cấp cho nam và nữ (giày dép, túi xách, phụ kiện thời trang…), nhãn hiệu Prada được thành lập bởi Mario Prada năm 1913.\r\n\r\nPrada được xem là một trong những nhà thiết kế có ảnh hưởng nhất trong ngành công nghiệp thời trang. Cũng giống như những thương hiệu thời trang khác, Prada phải đấu tranh chống lại hàng nhái và đảm bảo hàng chính hãng từ các cửa hàng chính thức của hãng trên thế giới cũng như những cửa hàng online trên mạng.\r\n                    ', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_desc`, `category_status`) VALUES
(6, 'thời trang nam', '                    sang trọng và lịch thiệp                    ', 1),
(7, 'thời trang nữ', '                     quý rũ và quý phái giá đẹp                                      ', 1),
(11, 'thời trang trẻ em', 'những bộ sản phẩm bắt mắt và cực kì đáng yêu   ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_title`, `contact_desc`, `contact_address`, `contact_phone`, `contact_email`) VALUES
(1, 'Liên hệ với chúng tôi', 'IVY moda là thương hiệu thời trang Việt Nam với mong muốn đem lại vẻ đẹp hiện đại và sự tự tin cho khách hàng, thông qua các dòng sản phẩm thời trang thể hiện cá tính và xu hướng. Một trong những “tôn chỉ” về thiết kế của IVY moda chính là sự đa dạng, với mong muốn mang đến cho người mặc những sản phẩm phù hợp nhất với ngoại hình và quan trọng hơn cả là cá tính của chính mình.', 'Chợ Mơ\r\n459 Bạch Mai, Trương Định, Hai Bà Trưng, Hà Nội', '+ (84) 24 6662 3434', 'saleadmin@ivy.com.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_method` int(11) NOT NULL,
  `coupon_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_code`, `coupon_quantity`, `coupon_method`, `coupon_number`) VALUES
(1, 'COVID19', 'CV26HM', '26', 1, '35'),
(2, 'tet1/1', 'TE03M6', '12', 2, '1000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_category_id` int(11) NOT NULL,
  `news_status` int(11) NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_desc`, `news_content`, `news_category_id`, `news_status`, `create_at`, `news_image`) VALUES
(5, '“THÂU TÓM” ĐIỂM NHÌN VỚI VÁY ÁO HỞ LƯNG TỪ 5 LOCAL BRAND', '<p>Nếu&nbsp;bạn đang kiếm t&igrave;m một item si&ecirc;u &ldquo;giải nhiệt&rdquo; cho thời trang m&ugrave;a H&egrave;, những thiết kế đầm hoặc &aacute;o hở lưng kh&ocirc;ng chỉ đ&aacute;p ứng y&ecirc;u cầu một c&aacute;ch nhanh gọn, m&agrave; c&ograve;n khoe kh&eacute;o r&atilde;nh lưng quyến rũ.</p>\r\n', '<p>B&ecirc;n cạnh &aacute;o hai d&acirc;y, croptop, hay những lớp vải&nbsp;<a href=\"https://www.elle.vn/xu-huong-thoi-trang/xu-huong-xuyen-thau\">xuy&ecirc;n thấu</a>, m&ugrave;a H&egrave; c&ograve;n l&agrave; m&ugrave;a của những chiếc v&aacute;y, chiếc &aacute;o hở lưng gợi cảm m&agrave; vẫn đầy tinh tế. Từ đường phố đến mạng x&atilde; hội, tr&agrave;o lưu &ldquo;che trước hở sau&rdquo; được c&aacute;c trend-setter như BLACKPINK&nbsp;<a href=\"https://www.elle.vn/sao-style/jennie-blackpink-chanel\">Jennie</a>, Hailey Bieber, Bella Hadid&hellip; lăng x&ecirc; cuồng nhiệt. Kh&ocirc;ng nằm ngo&agrave;i xu hướng, c&aacute;c thương hiệu &ldquo;s&acirc;n nh&agrave;&rdquo; cũng nhanh ch&oacute;ng gia nhập cuộc chơi bằng những thiết kế đột ph&aacute; v&agrave; khơi gợi x&uacute;c cảm.</p>\r\n\r\n<h2>DATT OFFICIAL: &ldquo;CHẤT LIỆU&rdquo; ĐẾN TỪ ĐẠI DƯƠNG XANH</h2>\r\n\r\n<p>DATT mang đến c&aacute;c thiết kế tr&agrave;n ngập &ldquo;hơi thở&rdquo; của đại dương với s&oacute;ng biển, lưới đ&aacute;nh c&aacute; v&agrave; r&aacute;ng chiều mờ ảo. Với chất liệu&nbsp;<a href=\"https://www.elle.vn/xu-huong-phong-cach/ao-lua-xuan-he\">lụa</a>&nbsp;cao cấp, những đường cắt ngẫu hứng nhưng đầy sự sắp đặt, đầm hở lưng mang đến cảm gi&aacute;c nhẹ nh&agrave;ng như bay như lướt tr&ecirc;n da, t&ocirc;n l&ecirc;n tấm lưng trần gợi cảm. Với nỗ lực s&aacute;ng tạo kh&ocirc;ng ngừng nghỉ, những thiết kế của nh&agrave; mốt lu&ocirc;n khiến hội m&ecirc; c&aacute;i đẹp hết l&ograve;ng say đắm v&agrave; mong muốn sở hữu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elle.vn/wp-content/uploads/2022/06/22/483865/dam-ho-lung-hoa-tiet-o-vuong-1024x1279.jpg\" /><img alt=\"\" src=\"https://www.elle.vn/wp-content/uploads/2022/06/22/483865/ao-ho-lung-dan-day-goi-cam-1024x1280.jpg\" /><img alt=\"\" src=\"https://www.elle.vn/wp-content/uploads/2022/06/22/483865/ao-ho-lung-mau-trang-1024x1024.jpg\" /></p>\r\n\r\n<h2>TOR DUCIE: &ldquo;CHIẾN LỢI PHẨM&rdquo; CHO C&Ocirc; N&Agrave;NG THỜI THƯỢNG</h2>\r\n\r\n<p>Với c&aacute;c sắc th&aacute;i trắng,&nbsp;<a href=\"https://www.elle.vn/xu-huong-phong-cach/mau-den-black-on-black\">đen</a>&nbsp;tưởng chừng đơn điệu, thế nhưng những đường cut-out, cắt xẻ độc đ&aacute;o ch&iacute;nh l&agrave; điểm s&aacute;ng khiến thiết kế của Tor Duice được l&ograve;ng những c&ocirc; n&agrave;ng quyến rũ, trẻ trung v&agrave; hiện đại. Cộng hưởng với chất vải&nbsp;<a href=\"https://www.elle.vn/the-gioi-thoi-trang/namita-khade-det-kim\">dệt kim</a>, thun g&acirc;n mềm mại, n&acirc;ng niu đường n&eacute;t cơ thể mảnh mai, v&aacute;y &aacute;o hở lưng ch&iacute;nh l&agrave; &ldquo;vũ kh&iacute;&rdquo; lợi hại n&acirc;ng tầm bộ c&aacute;nh&nbsp;<a href=\"https://www.elle.vn/fashion/phong-cach-toi-gian-them-mau-sac-moi\">tối giản</a>, tạo n&ecirc;n hiệu ứng thị gi&aacute;c cuốn h&uacute;t người đối diện.</p>\r\n', 2, 1, '23/06/2022 - 13:04:47', 'photo-1549062572-544a64fb0c56.avif'),
(6, 'GIỚI TRẺ ĐANG “MÊ MẨN” NHỮNG MÓN TRANG SỨC NÀO?', '<p>Tươi trẻ, l&ocirc;i cuốn m&agrave; kh&ocirc;ng qu&aacute; cầu kỳ, những m&oacute;n trang sức đang được giới trẻ y&ecirc;u th&iacute;ch vẫn tạo n&ecirc;n tuy&ecirc;n ng&ocirc;n ri&ecirc;ng v&agrave; mang lại nguồn năng lượng mới cho thời trang.</p>\r\n', '<h4>NHỮNG MẢNG M&Agrave;U TƯƠI VUI</h4>\r\n\r\n<p>Ở độ tuổi thanh xu&acirc;n kh&ocirc;ng ngại thử th&aacute;ch, những c&ocirc; n&agrave;ng&nbsp;<a href=\"https://www.elle.vn/xu-huong-phong-cach/thoi-trang-gen-z\">Gen Z</a>&nbsp;thể hiện c&aacute; t&iacute;nh qua bảng m&agrave;u tươi tắn tr&ecirc;n trang phục, phụ kiện lẫn trang sức. Thậm ch&iacute;, trang sức của họ c&oacute; thể li&ecirc;n tưởng đến những m&oacute;n đồ chơi với h&igrave;nh d&aacute;ng dễ thương. Ch&uacute;ng trở lại từ những năm 2000 với đa dạng chất liệu v&agrave; c&aacute;ch s&aacute;ng tạo. Chẳng hạn như tr&agrave;o lưu&nbsp;<a href=\"https://www.elle.vn/xu-huong-thoi-trang/vong-hat-nhua-tro-lai\">v&ograve;ng cổ hạt nhựa</a>&nbsp;rộn r&agrave;ng suốt hai năm nay.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elle.vn/wp-content/uploads/2022/06/03/481390/trang-suc-mang-mau-tuoi-vui.jpg\" /></p>\r\n\r\n<h4>D&Acirc;Y CHUYỀN THANH THO&Aacute;T</h4>\r\n\r\n<p>Tr&aacute;i ngược với phong c&aacute;ch&nbsp;<a href=\"https://www.elle.vn/sao-style/street-style-it-girl-fashion-week\">streetwear</a>&nbsp;của những ch&agrave;ng trai xem d&acirc;y x&iacute;ch lớn l&agrave; phụ kiện đặc trưng,&nbsp;<a href=\"https://www.elle.vn/the-gioi-thoi-trang/day-chuyen-du-doan-suc-khoe\">d&acirc;y chuyền</a>&nbsp;của ph&aacute;i đẹp thanh tao hơn với những mắt x&iacute;ch nhỏ bằng kim loại lấp l&aacute;nh. Ngo&agrave;i v&ograve;ng cổ, chuỗi x&iacute;ch mảnh mai c&ograve;n được l&agrave;m th&agrave;nh v&ograve;ng tay,&nbsp;<a href=\"https://www.elle.vn/xu-huong-thoi-trang/phu-kien-lac-chan\">v&ograve;ng cổ ch&acirc;n</a>, thậm ch&iacute; cả d&acirc;y đeo thắt lưng cho những c&ocirc; n&agrave;ng muốn khoe v&ograve;ng hai thon gọn với &aacute;o crop top v&agrave; quần hoặc&nbsp;<a href=\"https://www.elle.vn/xu-huong-thoi-trang/chan-vay-mini-mua-he\">ch&acirc;n v&aacute;y</a>&nbsp;cạp thấp.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elle.vn/wp-content/uploads/2022/06/03/481390/trang-suc-day-chuyen-thanh-thoat.jpg\" /></p>\r\n\r\n<h4>TIẾNG GỌI CỦA BIỂN CẢ</h4>\r\n\r\n<p><a href=\"https://www.elle.vn/the-gioi-thoi-trang/ngoc-trai-vintage\">Ngọc trai</a>&nbsp;thường được gắn với h&igrave;nh tượng sang trọng v&agrave; trưởng th&agrave;nh, nhưng những năm trở lại đ&acirc;y, trang sức ngọc trai đ&atilde; trở th&agrave;nh xu hướng của cả giới trẻ, gần đ&acirc;y nhất c&oacute; tr&agrave;o lưu &ldquo;Coconut girl&rdquo;. Thiết kế đơn giản với chất liệu nh&acirc;n tạo đa dạng, ngọc trai gần như kh&ocirc;ng thể thiếu trong c&aacute;c bản phối thời thượng của c&aacute;c fashionista hiện nay. Bạn c&oacute; thể săn l&ugrave;ng c&aacute;c item vintage nếu muốn sở hữu những thứ độc nhất v&agrave; đầy t&iacute;nh nghệ thuật.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elle.vn/wp-content/uploads/2022/06/03/481390/trang-suc-sang-tao-voi-charm.jpg\" /></p>\r\n', 1, 1, '23/06/2022 - 13:06:56', 'photo-1601121141461-9d6647bca1ed.avif'),
(7, 'MIX N’ MATCH MŨ BÓNG CHÀY NHƯ NHỮNG HOT INSTAGRAMER', '<p>Li&ecirc;n tục c&oacute; mặt tr&ecirc;n trang c&aacute; nh&acirc;n của c&aacute;c &ldquo;trendsetter&rdquo; đ&igrave;nh đ&aacute;m như BLACKPINK Lisa, Dua Lipa, Bella Hadid,&hellip; những chiếc mũ lưỡi trai kh&ocirc;ng c&ograve;n nghi ngờ, ch&iacute;nh l&agrave; item bạn cần th&ecirc;m ngay v&agrave;o bản phối thời trang m&ugrave;a H&egrave;.&nbsp;</p>\r\n', '<p>H&ograve;a m&igrave;nh trong cơn s&oacute;ng&nbsp;<a href=\"https://www.elle.vn/xu-huong-thoi-trang/items-thoi-trang-y2k\">Y2K</a>, mũ b&oacute;ng ch&agrave;y được dự đo&aacute;n l&agrave; item tiếp theo khuấy động m&ugrave;a mốt mới sau sự trở lại của những m&oacute;n đồ &ldquo;hot hit&rdquo; thưở xưa như&nbsp;<a href=\"https://www.elle.vn/xu-huong-phong-cach/quan-jeans-cap-tre-it-girl\">quần&nbsp;cạp trễ</a>&nbsp;hay micro-bags.&nbsp;<a href=\"https://www.elle.vn/sao-style/tui-celine-yeu-thich-cua-lisa\">BLACKPINK Lisa</a>&nbsp;vừa lăng x&ecirc; chiếc mũ C&eacute;line m&agrave;u&nbsp;<a href=\"https://www.elle.vn/xu-huong-phong-cach/cach-phoi-do-voi-trang-phuc-xanh-navy\">xanh navy</a>&nbsp;c&oacute; biểu tượng chữ C tr&ecirc;n khắp c&aacute;c con phố ở Paris. Những ng&ocirc;i sao như&nbsp;<a href=\"https://www.elle.vn/sao-style/thoi-trang-bau-cua-rihanna\">Rihanna</a>, Dua Lipa,&hellip; vốn nổi tiếng l&agrave; &ldquo;người chơi hệ vintage&rdquo; với BST đồ sộ c&aacute;c thiết kế mũ b&oacute;ng ch&agrave;y &ldquo;từ cổ ch&iacute; kim&rdquo;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elle.vn/wp-content/uploads/2022/05/18/479191/280131877_1727781694241174_2801356141841427455_n.jpg\" />Thay v&igrave; xem n&oacute; như một phụ kiện che nắng th&ocirc;ng thường, c&aacute;c t&iacute;n đồ lại thường tận dụng chiếc mũ lưỡi trai để th&ecirc;m ch&uacute;t bụi bặm v&agrave;o bản phối thời trang v&agrave; &ldquo;rủ r&ecirc;&rdquo; con mắt v&agrave;o những cuộc dạo chơi m&ugrave;a H&egrave;. Gần đ&acirc;y nhất, item n&agrave;y cũng để lại dấu ấn đặc biệt tr&ecirc;n &ldquo;đường băng c&aacute;t&rdquo;&nbsp;<a href=\"https://www.elle.vn/bo-suu-tap/chanel-cruise-2023\">CHANEL Cruise 2023</a>&nbsp;c&ugrave;ng c&aacute;c thiết kế lấy cảm hứng từ giải đua F1 v&agrave; bộ m&ocirc;n tennis. &ldquo;Th&ecirc;m v&agrave;o giỏ h&agrave;ng&rdquo;, &ldquo;chớp giật&rdquo; ở cửa h&agrave;ng đồ&nbsp;<a href=\"https://www.elle.vn/the-gioi-thoi-trang/bi-quyet-mua-sam-do-second-hand-hieu-qua\">secondhand</a>&nbsp;hay lục lọi trong tủ đồ của bố&hellip; h&atilde;y sẵn s&agrave;ng tr&ecirc;n tay một chiếc mũ b&oacute;ng ch&agrave;y bất kỳ để thử nghiệm những c&ocirc;ng thức được tin y&ecirc;u nhất bởi c&aacute;c fashionista.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elle.vn/wp-content/uploads/2022/05/18/479191/00001-chanel-resort-2023-monaco-scaled-1.jpg\" /></p>\r\n', 3, 1, '23/06/2022 - 13:08:51', 'photo-1527631746610-bca00a040d60.avif'),
(8, 'XEM “BẢN PHỐI” THỜI TRANG CỰC HÚT TỪ PHƯƠNG ANH PAYO TẠI CÁC ĐỊA ĐIỂM VINTAGE CỦA CHÂU ÂU', '<p>Chuẩn bị &ldquo;tất tần tật&rdquo; cho chuyến đi ch&acirc;u &Acirc;u chỉ trong v&ograve;ng&hellip; 8 tiếng, nhưng Phương Anh Payo vẫn c&oacute; m&agrave;n l&ecirc;n đồ cực ấn tượng tại c&aacute;c địa điểm vintage c&ugrave;ng một phụ kiện đặc biệt.</p>\r\n', '<p>Th&aacute;ng 6 bắt đầu với nắng h&egrave; ch&oacute;i chang, nhưng cũng l&agrave; khi những c&ocirc; g&aacute;i h&agrave;o hứng chuẩn bị cho những chuyến du lịch của m&igrave;nh. Hot reviewer Phương Anh Payo cũng kh&ocirc;ng ngoại lệ, khi mới đ&acirc;y, c&ocirc; n&agrave;ng đ&atilde; chia sẻ h&agrave;ng loạt gợi &yacute; thời trang bằng h&igrave;nh ảnh trong chuyến đi ch&acirc;u &Acirc;u của m&igrave;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elle.vn/wp-content/uploads/2022/06/22/483879/phuong-anh-payo-1-1024x847.jpg\" />Nếu ng&agrave;y thường nữ streamer Phương Anh Payo c&oacute; phong c&aacute;ch&nbsp;<a href=\"https://www.elle.vn/sao-style/street-style-it-girl-fashion-week\">streetstyle</a>&nbsp;năng động, trẻ trung th&igrave; khi đến với xứ trời T&acirc;y, c&ocirc; n&agrave;ng đ&atilde; x&acirc;y dựng h&igrave;nh ảnh của m&igrave;nh với ch&uacute;t &ldquo;gia vị&rdquo; tươi mới khi thể hiện phong c&aacute;ch nữ t&iacute;nh, nhẹ nh&agrave;ng, đơn giản m&agrave; lại v&ocirc; c&ugrave;ng quyến rũ. Đồng thời, c&ocirc; n&agrave;ng c&ograve;n thể hiện tinh thần của một &ldquo;t&iacute;n đồ c&ocirc;ng nghệ&rdquo; thứ thiệt khi lu&ocirc;n mang theo b&ecirc;n m&igrave;nh một phụ kiện si&ecirc;u ph&ugrave; hợp v&agrave; độc đ&aacute;o. Đ&acirc;y cũng l&agrave; một giải ph&aacute;p tiện dụng cho những c&ocirc; n&agrave;ng cần l&agrave;m mới &ldquo;outfit of the day&rdquo; của m&igrave;nh trong mỗi chuyến du lịch dịp h&egrave; n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.elle.vn/wp-content/uploads/2022/06/22/483879/phuong-anh-payo-6-1024x1365.jpg\" />D&ugrave; vậy, sự gấp g&aacute;p trong qu&aacute; tr&igrave;nh chuẩn bị cho chuyến đi lại kh&ocirc;ng hề &ldquo;l&agrave;m kh&oacute;&rdquo; được Phương Anh Payo. C&ocirc; n&agrave;ng cảm thấy may mắn v&igrave; c&oacute; mang theo những chiếc ốp lưng xinh xắn cho điện thoại của m&igrave;nh. Ch&iacute;nh phụ kiện n&agrave;y đ&atilde; trở th&agrave;nh một m&oacute;n &ldquo;trang sức&rdquo; thay thế cho loạt&nbsp;<a href=\"https://www.elle.vn/xu-huong-phong-cach/tui-xach-local-brand\">t&uacute;i x&aacute;ch</a>&nbsp;m&agrave; Phương Anh Payo phải mang theo. Kết hợp kh&eacute;o l&eacute;o giữa thời trang v&agrave; c&ocirc;ng nghệ, Phương Anh Payo đ&atilde; mang đến một bộ h&igrave;nh đ&aacute;ng y&ecirc;u, với trang phục ho&agrave; hợp khung cảnh, c&ograve;n Galaxy Z Flip3 lại l&agrave; điểm nhấn kh&ocirc;ng thể xuất sắc hơn.</p>\r\n', 5, 1, '23/06/2022 - 13:09:32', 'photo-1429962714451-bb934ecdc4ec.avif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news_category`
--

CREATE TABLE `tbl_news_category` (
  `news_category_id` int(11) NOT NULL,
  `news_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_category_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_news_category`
--

INSERT INTO `tbl_news_category` (`news_category_id`, `news_category_name`, `news_category_desc`, `news_category_status`) VALUES
(1, 'thời trang', 'những bộ trang phục thương hiệu đình đám                                                            ', 1),
(2, 'du lịch', 'thời trang du lịch\r\n                    ', 1),
(3, 'picnic', 'cắm trại xuyên đêm\r\n                    ', 1),
(5, 'model', 'model đẹp\r\n                    ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_id` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` int(11) NOT NULL,
  `order_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_code`, `receive_id`, `order_status`, `order_total`, `payment_method`, `order_notes`, `create_at`) VALUES
(32, '74a987', 39, 4, '15455700', 1, 'đơn hàng dễ hỏng hóc', '22/06/2022 21:31:40 PM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_coupon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_code`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `order_coupon`) VALUES
(33, '74a987', 28, 'ÁO SƠ MI LỤA CỔ BẺ 2 VE', 'a53255493de2fab90073e2fd93cc44ef.jpg', '890000', '6', 'CV26HM'),
(34, '74a987', 27, 'ĐẦM CỔ CHÉO XẾP LY', 'ed63422a46b8f4ac64eba7ce59478884.jpg', '1990000', '7', 'CV26HM'),
(35, '74a987', 25, 'quần jean nữ', 'quan jean nu dep.jpg', '196000', '23', 'CV26HM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sold` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_desc`, `product_image`, `brand_id`, `category_id`, `product_price`, `product_quantity`, `product_status`, `product_code`, `product_sold`) VALUES
(18, 'Quần Short Outdoor vải Nylon 7\'\' Co giãn (có túi sau)', '  Nếu bạn đang tìm cho mình một chiếc quần có thể mặc cả ngày, thoải mái tham gia các hoạt động thì bạn không thể bỏ lỡ chiếc Quần Shorts Outdoor vải Nylon 7\" Co giãn mới này nhé! Được nghiên cứu và phát triển bởi Coolmate với quá trình lắng nghe khách hàng để tạo ra sản phẩm tuyệt vời và mang lại trải nghiệm khách hàng tuyệt nhất! Cùng tìm hiểu chiếc quần này có gì đặc biệt nhé!', '780da9da69.jpg', 2, 6, '235000', '43', 1, '780da9', ''),
(19, 'Áo thun cổ tròn Excool', '                                                                                               hàng thoáng mát và cực kì đẹp  \r\n                     \r\n                     \r\n                     \r\n                     \r\n                    ', '5a639e172c.jpg', 2, 6, '328000', '18', 1, '5a639e', ''),
(20, 'Áo thun in Save The Future - màu Đen', '\"Clean Vietnam\" là dự án cộng đồng tâm huyết của Coolmate và đối tác của mình - Nam Anh Fabric và nghệ sĩ Vietmax với mong muốn nâng cao nhận thức về việc hạn chế sử dụng chai nhựa, tăng cường việc tái chế và tái sử dụng đồ nhựa, góp phần vì một Việt Nam thật xanh nói riêng.', '4405b0bbe4.jpg', 5, 6, '285000', '33', 1, '4405b0', ''),
(21, 'OUTLET - Áo thun nam dài tay Prime Henley 3 nút Cotton Compact phiên bản Premium', 'Một chiếc áo vẫn giữ những vẻ thoải mái từ áo thun dài tay với chất kiệu Cotton Compact, chiếc áo vẫn mang cho bạn vẻ thanh lịch, nam tính mà chỉ có thể tìm thấy ở kiểu dáng polo. Và chiếc áo dài tay Prime Henley chính là item Coolmate dành cho bạn bởi Coolmate tin rằng đây nhất định là một chiếc áo bạn phải có trong tủ đồ của mình.\r\n                    ', 'c331985323.jpg', 4, 6, '320000', '43', 1, 'c33198', ''),
(24, ' ÁO KHOÁC DÙ ĐEN', 'Một tấm thân gầy gò, một cơ thể yếu đuối hay một trái tim nguội lạnh dù thế nào cũng đừng showoff. Hãy ngụy tạo cho mình một lớp màng bọc vững chắc không ai có thể phá vỡ. Dù bạn có là một người đàn ông mạnh mẽ hay yếu đuối, chúng tôi - Thương hiệu thời trang Hidanz luôn từng ngày đem đến cho bạn những sản phẩm thời trang nam đẳng cấp, là tấm áo giáp hoàn hảo để bạn thể hiện cá tính trong đó có sản phẩm áo khoác thời trang nam.  Cùng Hidanz khám phá những mẫu áo khoác thời trang đình đám hiện này. \r\n                    \r\n                    \r\n                    ', 'ao-khoac-du-xanh-navy.jpeg', 5, 6, '235000', '33', 1, '8ab369', ''),
(25, 'quần jean nữ', '                   Chắc hẳn bạn đã quen thuộc với những chiếc quần jean nữ cạp cao tôn dáng cực chuẩn. Những chiếc quần cặp cao giúp cho đôi chân thêm thon, dài, kết hợp với áp phông hoặc áo sơ mi đóng thùng đầy lịch sự và trẻ trung. Đây là chiếc quần có hầu hết trong tủ đồ của chị em phái nữ. Trong mọi hoàn cảnh và đối tượng gặp gỡ, chiếc quần jean nữ cặp cao là trang phục cho bạn luôn tự tin và thoải mái nhất. \r\n                    ', 'quan jean nu dep.jpg', 2, 7, '196000', '41', 1, '739680', ''),
(27, 'ĐẦM CỔ CHÉO XẾP LY', 'Đầm lụa trơn, dài qua đầu gối, ngực xếp ly đắp chéo. Eo được nhấn cao, vai áo may chun tạo độ phồng nhẹ cho phần tay. Chân váy 2 lớp dáng suông thướt tha.\r\n                    ', 'ed63422a46b8f4ac64eba7ce59478884.jpg', 3, 7, '1990000', '13', 1, '8eb7de', ''),
(28, 'ÁO SƠ MI LỤA CỔ BẺ 2 VE', 'Áo sơ mi lụa thiết kế cổ bẻ 2 ve, hàng khuy kim loại, áo dáng suông gần như che được hầu hết các khuyết điểm cơ thể, tay áo lỡ có may xếp phồng nhẹ nữ tính.\r\n                    ', 'a53255493de2fab90073e2fd93cc44ef.jpg', 5, 7, '890000', '12', 1, '3694dd', ''),
(29, 'TRENCH COAT - AS AGELESS AS THE SUN', 'Áo khoác thiết kế cổ hai ve bản to, dáng dài cùng màu sắc sang trọng, kiểu dáng vô cùng đẳng cấp. Với chất liệu Tuysi cao cấp bề mặt vải mềm mịn, không gây tích điện và khả năng giữ form cực tốt. Eo sử đụng đai đồng màu kèm hai hàng cúc mặt trước. thân dưới xòe nhẹ giúp người mặc sải bước tự tin khi đi xuống phố, đi làm, hay đi event...\r\n\r\nLấy cảm hứng từ trang phục của quân đội châu Âu, những chiếc áo trench coat từ lâu đã khẳng định sự “thống trị” trong tủ đồ thời trang thu – đông. Thời thượng, thanh lịch nhưng không kém phần cá tính, áo trench coat dễ dàng làm xiêu lòng cả những quý cô, quý ông khó tính nhất\r\n\r\nCùng với sự cách điệu phần vạt áo, lấy nguồn cảm hứng bất tận từ những quý cô người Pháp và sự sáng tạo vượt khuôn khổ, IVY moda đã tạo nên chiếc áo Trench Coat vừa cổ điển vừa hiện đại tinh tế.\r\n                    ', 'af658c574760b114ff1a124287243dd5.jpg', 4, 7, '2093000', '78', 1, '62382d', ''),
(30, 'ÁO KHOÁC DẠ DÁNG NGẮN', 'Áo khoác dạ ép, cổ 2 ve khoét chữ K. Tay dài có 4 khuy. 2 đường dây kéo kim loại 2 bên. 2 khuy cài phía trước. Dáng áo ngắn với độ dài ngang hông. Mặc cùng chân váy đồng bộ MS 31B9061', 'ffae78727bfcf8f13cdfb57398863d97.jpg', 2, 7, '1743000', '56', 1, '1d0b1d', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_receive`
--

CREATE TABLE `tbl_receive` (
  `receive_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `receive_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_receive`
--

INSERT INTO `tbl_receive` (`receive_id`, `user_id`, `receive_name`, `receive_email`, `receive_phone`, `receive_address`) VALUES
(39, 9, 'nguyễn trang linh', 'linh@gmail.com', '056773231', 'hà nội'),
(40, 9, 'nguyễn trang linh', 'linh@gmail.com', '056773231', 'hà nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_image`, `slider_desc`, `slider_status`) VALUES
(4, 'slider2', 'photo-1523464862212-d6631d073194.avif', 'Được ví như một \"cơn sóng thần\" càn quét qua hàng trăm quốc gia trên thế giới, đại dịch COVID-19 đang len lỏi vào từng ngõ ngách kinh tế toàn cầu và ảnh hưởng rõ rệt tới ngành công nghiệp thời trang. Chẳng hạn, doanh số bán hàng đã giảm 70% trên toàn cầu, đơn hàng tại các nước đang phát triển như Bangladesh, Cambodia, Việt Nam… liên tục bị hủy, dẫn đến thiệt hại vô cùng nặng nề.\r\n\r\n\r\n                                        ', 1),
(5, 'slider3', 'photo-1583527825766-771c29a8f1ce.avif', 'Tuy nhiên, từ những khó khăn đó, ngành thời trang trên thế giới đã có những bước ngoặt mang tính lịch sử. Giờ đây, các thương hiệu không chỉ chú trọng đến mẫu mã, xu hướng mà còn phải thực sự quan tâm tới tính bền vững do tất cả đang phải thắt chặt hầu bao vì dịch bệnh. Từ đó, xu hướng thời trang bền vững bắt đầu phát triển mạnh mẽ, đem đến một làn gió mới cho người tiêu dùng.                       ', 1),
(6, 'slider1', 'photo-1531924224004-7beee12117a6.avif', 'Không nằm ngoài xu hướng thời trang thế giới, nhiều thương hiệu nội địa tại Singapore sẵn sàng phát triển các thiết kế thân thiện với môi trường, trong bối cảnh đảo quốc này đang hướng tới tính bền vững trên nhiều lĩnh vực.\r\n                                        ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `usertype`) VALUES
(7, 'trần hưng', 'hung@gmail.com', '87cfe89dd6e63c2ae0a206cecc4c3b64', '03469895654', 1),
(8, 'quỳnh trân', 'tran@gmail.com', '6bb0cb19a2b36a2930bc4f3f881a0818', '4654897895', 0),
(9, 'trang linh', 'linh@gmail.com', '009b35b6a859335651d384702f545a04', '5646541300', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `img_products`
--
ALTER TABLE `img_products`
  ADD PRIMARY KEY (`id_image`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Chỉ mục cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `tbl_news_category`
--
ALTER TABLE `tbl_news_category`
  ADD PRIMARY KEY (`news_category_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_receive`
--
ALTER TABLE `tbl_receive`
  ADD PRIMARY KEY (`receive_id`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `img_products`
--
ALTER TABLE `img_products`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_news_category`
--
ALTER TABLE `tbl_news_category`
  MODIFY `news_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_receive`
--
ALTER TABLE `tbl_receive`
  MODIFY `receive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
