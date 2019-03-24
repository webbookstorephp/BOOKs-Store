-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 24, 2019 lúc 09:47 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test123`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(255) NOT NULL,
  `TongTien` decimal(15,4) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `CreatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `GhiChu` varchar(255) DEFAULT NULL,
  `TinhTrang` tinyint(4) NOT NULL,
  `UpdatedDate` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `TongTien`, `idUser`, `CreatedDate`, `GhiChu`, `TinhTrang`, `UpdatedDate`) VALUES
(1, '5400000.0000', 2, NULL, 'abc bắt con dê', 0, NULL),
(2, '13090000.0000', 2, NULL, 'Giao hàng nhanh', 0, NULL),
(3, '5400000.0000', 2, '2018-05-28 16:05:52', 'ádasdsa', 0, '2018-05-28 16:05:52'),
(4, '3960000.0000', 2, '2018-05-28 17:50:41', 'ad', 0, NULL),
(5, '21000000.0000', 3, '2018-05-28 18:07:43', 'sadfasdfas', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` int(11) NOT NULL,
  `TenDM` varchar(50) DEFAULT NULL,
  `thutu` int(4) DEFAULT NULL,
  `anhien` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id`, `TenDM`, `thutu`, `anhien`) VALUES
(1, 'Văn hóa-Văn học', 1, 0),
(2, 'Giải trí', 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(255) NOT NULL,
  `idCTDH` int(255) NOT NULL,
  `idSP` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaBan` decimal(15,2) DEFAULT NULL,
  `CreatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedDate` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `idCTDH`, `idSP`, `SoLuong`, `GiaBan`, `CreatedDate`, `UpdatedDate`) VALUES
(1, 1, 98, 1, '5400000.00', NULL, NULL),
(2, 2, 98, 1, '5400000.00', NULL, NULL),
(3, 2, 97, 1, '3400000.00', NULL, NULL),
(4, 2, 96, 1, '990000.00', NULL, NULL),
(5, 2, 95, 1, '3300000.00', NULL, NULL),
(6, 3, 98, 1, '5400000.00', '2018-05-28 16:05:52', '2018-05-28 16:05:52'),
(7, 4, 96, 4, '990000.00', '2018-05-28 17:50:41', NULL),
(8, 5, 97, 3, '3400000.00', '2018-05-28 18:07:43', NULL),
(9, 5, 98, 2, '5400000.00', '2018-05-28 18:07:43', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `DienThoai` varchar(100) NOT NULL,
  `DiaChi` varchar(500) NOT NULL,
  `NgayDangKy` date NOT NULL,
  `TrangThai` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `MatKhau`, `UserName`, `Email`, `HoTen`, `DienThoai`, `DiaChi`, `NgayDangKy`, `TrangThai`) VALUES
(1, 'e10adc3949ba59abbe56e057f20f883e', 'nguyen', 'vohoangnguyen07@gmail.com', 'Võ Hoàng Nguyên', '0987654321', 'Nguyễn Thái Sơn Gò Vấp HCM', '2018-05-13', 1),
(2, 'e10adc3949ba59abbe56e057f20f883e', 'hotanmy', 'hotanmy@gmail.com', 'Hồ Tấn Mỹ', '0986829823', 'Đường TL 08 Thạnh Lộc Quận 12 HCM', '2018-05-13', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(11) NOT NULL,
  `Alias` varchar(255) DEFAULT NULL,
  `idDM` int(11) NOT NULL,
  `TenLoai` varchar(255) NOT NULL,
  `ThuTu` int(4) NOT NULL,
  `AnHien` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `Alias`, `idDM`, `TenLoai`, `ThuTu`, `AnHien`) VALUES
(1, NULL, 1, 'Văn học nghệ thuật', 1, 1),
(2, NULL, 2, 'Tiểu thuyết\r\n', 2, 1),
(3, NULL, 2, 'Sách thiếu nhi', 3, 1),
(4, NULL, 1, 'Chính trị-Pháp luật\r\n\r\n', 4, 1),
(5, NULL, 1, 'Khoa học-Công nghệ -Kinh tế\r\nthuyết\r\n', 5, 1),
(6, NULL, 1, 'Văn hóa-xã hội-lịch sử\r\n\r\n', 6, 1),
(7, NULL, 2, 'Phiêu lưu - Trinh thám', 7, 1),
(8, NULL, 2, 'Truyện Tiên hiệp', 8, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(255) NOT NULL,
  `idCapCha` int(255) NOT NULL,
  `TieuDe` varchar(300) NOT NULL,
  `ThuTu` int(10) NOT NULL,
  `AnHien` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(11) NOT NULL,
  `TenNcc` varchar(32) NOT NULL DEFAULT '',
  `ThuTu` int(4) NOT NULL,
  `AnHien` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `TenNcc`, `ThuTu`, `AnHien`) VALUES
(1, 'SAMSUNG', 1, 1),
(2, 'INTEL', 2, 1),
(3, 'ASUS', 3, 1),
(4, 'MSI', 4, 1),
(5, 'TOSHIBA', 5, 1),
(6, 'ZOTAC', 6, 1),
(7, 'GIGABYTE', 7, 1),
(9, 'fbfdbvdsv', 9, 1),
(10, 'cdc', 44, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(11) NOT NULL,
  `TenQuyen` varchar(255) NOT NULL,
  `TrangThai` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `TenQuyen`, `TrangThai`) VALUES
(1, 'Khách Hàng', 1),
(2, 'Quản lý', 1),
(3, 'Quản Trị', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `id` int(255) NOT NULL,
  `MoTa` varchar(255) NOT NULL,
  `UrlQC` varchar(400) NOT NULL,
  `UrlHinh` varchar(400) NOT NULL,
  `ViTri` varchar(30) NOT NULL,
  `idMenu` int(255) NOT NULL,
  `SoLanBam` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `idLoai` int(11) NOT NULL,
  `TenSP` varchar(255) NOT NULL,
  `Gia` decimal(15,2) NOT NULL,
  `MoTa` varchar(256) DEFAULT NULL,
  `ChiTiet` text,
  `UrlHinh` varchar(255) NOT NULL,
  `NgayDang` date NOT NULL,
  `TonKho` int(255) NOT NULL DEFAULT '0',
  `SoLanMua` int(255) NOT NULL DEFAULT '0',
  `SoLanXem` int(255) NOT NULL DEFAULT '0',
  `AnHien` tinyint(4) NOT NULL,
  `ThuTu` int(4) NOT NULL,
  `GiaKhuyenMai` decimal(15,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `idLoai`, `TenSP`, `Gia`, `MoTa`, `ChiTiet`, `UrlHinh`, `NgayDang`, `TonKho`, `SoLanMua`, `SoLanXem`, `AnHien`, `ThuTu`, `GiaKhuyenMai`) VALUES
(1, 1, 'Chậm hơn sự dừng lại\r\n', '170000.00', NULL, 'Chậm hơn sự dừng lại là cuộc hành trình của ý nghĩ mà ở đó mọi chuyển động từ siêu khuôn thước (gió, nước, bóng tối, kíức…) đến cái cụ thể (đứa bé, đống củi, thị trấn, con thuyền, ngón chân…) đều đưa tới một kết cục chung nhất “chậm hơn sự dừng lại”. Cái kết cục chung nhất ấy, có phải đang dẫn chúng ta đến một sự vô nghĩa của đời sống, khi tất cả mọi vận động theo tính quy luật, theo chủ quan lẫn khách quan đều “chậm hơn sự dừng lại”. Nhưng nếu mê man theo từng con chữ của Trần Tuấn thì sẽ hiểu được rằng “dừng lại mà không đứng yên” mới là điều anh muốn nói. Và riêng ở điểm này thì chậm hơn sự dừng lại chính là một cách ngôn về nghệ thuật, một chìa khóa để người đọc có thể mở ra, bước vào và khám phá thế giới của thơ anh.\r\n', 'images/sach-1.jpg', '2018-04-02', 50, 0, 0, 1, 1, '100000.00'),
(2, 1, 'Đợi anh về\r\n', '220000.00', NULL, 'Nhân dịp kỷ niệm 100 năm ngày Cách mạng Tháng Mười Nga, Nhà xuất bản Thông tin và Truyền thông phát hành tập thơ Đợi anh về. Tên của sách được lấy theo tên tác phẩm của Konxtantin Ximonov. Bài thơ đã được nhà thơ Tố Hữu dịch sang tiếng Việt từ năm 1947, có ảnh hưởng và ý nghĩa đặc biệt với cuộc kháng chiến chống Pháp của nhân dân Việt Nam. Tập thơ bao gồm 180 bài thơ của 24 nhà thơ tiêu biểu nhất trong nền thơ ca Chiến tranh Vệ quốc như Ximonov, Olga Berggolts, Tvardovxki, Anna Akhmatova, Evtusenko…      Các tác phẩm được chọn trong tập thơ thể hiện chân thực về cuộc chiến, qua đó thể hiện tính cách con người Nga, văn hóa Nga. Cuộc chiến đó có sự tàn khốc, bi thương, nhưng hào hùng và đầy lạc quan, tin tưởng.       Tập thơ ra đời với mong muốn mang lại cho độc giả Việt một hiểu biết, đồng cảm với cuộc chiến tranh giữ nước của nhân dân Liên Xô và của nền văn học Xô viết. Tuyển thơ Đợi anh về được mong đợi sẽ đóng góp như là một chiếc cầu nối giữa Văn học Nga và Văn học Việt Nam.\r\n', 'images/sach-2.jpg', '2018-04-03', 50, 0, 0, 1, 2, '150000.00'),
(110, 1, 'Cánh chim trong gió (Tản mạn về điện ảnh)\r\n', '85000.00', NULL, '“Cánh chim trong gió” là cuốn sách tập hợp 44 bài viết về điện ảnh Việt Nam cũng như thế giới của Lê Hồng Lâm - một nhà báo quen thuộc với những bài báo phê bình điện ảnh, được người trong nghề và giới yêu điện ảnh đánh giá cao.            Cuốn sách được chia thành ba phần: Phần 1 - Góc nhìn của Lê Hồng Lâm về điện ảnh Việt; Phần hai - Điện ảnh quốc tế, về những bộ phim để lại trong anh dấu ấn hướng thiện; Phần 3 - Trong phần cuối cùng của cuốn sách, tác giả đặt các bộ phim vào những vấn đề của đời sống, nhìn nhận chúng dưới góc độ liên hệ mật thiết.            “Nếu bạn là người yêu điện ảnh, đừng bỏ qua cuốn sách này. Lê Hồng Lâm sẽ là người bạn đồng hành đáng tin cậy và dễ mến, sẵn sàng chia sẻ với bạn kiến thức sâu rộng của anh, những cảm xúc và suy tư của anh về cái đẹp, về đạo lý, về phẩm giá con người, về những day dứt tinh thần và ý chí tự do của người nghệ sĩ đích thực…”\r\n', 'images/sach-3.jpg\r\n', '2019-03-24', 25, 0, 0, 1, 110, NULL),
(3, 1, 'Phương ngữ Nam bộ\r\n', '150000.00', NULL, 'Tiếng Việt là một trong những ngôn ngữ cực kỳ phong phú về từ vựng, ngữ nghĩa. Đây không những là niềm tự hào mang tính dân tộc Việt Nam chúng ta mà còn là nhận định chung của các nhà nghiên cứu ngôn ngữ nước ngoài.    Chính vì ý nghĩa và tầm quan trọng của ngôn ngữ Việt Nam nói chung và ngôn ngữ Nam Bộ nói riêng, Chi Bùi Thanh Kiên đã quyết định cho ra đời bộ sách “Phương ngữ Nam bộ - Ghi chép và chú giải” – một công trình mà ông đã dốc cả tâm huyết trong suốt một đời người để thực hiện.    Bộ sách “Phương ngữ Nam bộ - Ghi chép và chú giải” (Gồm 2 tập) ghi chép và chú giải đầy đủ nhất từ trước tới nay về ngôn ngữ của vùng đất Nam Bộ được tác giả dày công nghiên cứu trên nhiều tài liệu, tập hợp và lĩnh hội từ kiến thức thực tế. Với từ vựng phong phú, cách diễn đạt đa dạng, đây là một công trình tuy còn khiêm tốn về quy mô nhưng khá phong phú, độc đáo về nội dung, chất lượng. Không chỉ là một công trình về ngôn ngữ học mà bộ sách còn là một bộ “Bách khoa toàn thư” thu nhỏ về bộ phận cư dân sống ở khu vực phía Nam của Tổ quốc.        Tác giả Nam Chi Bùi Thanh Kiên (SN 1941), quê xã Phú Hưng, TP Bến Tre, có bằng cử nhân văn khoa, cử nhân triết học, từng là giáo viên trường Trung học công lập Kiến Hòa. Ông đã xuất bản truyện thơ lục bát “Đồi mai vùi kiếm” và tập thơ đủ thể loại với nhiều bút danh khác nhau.\r\n', 'images/sach-4.jpg', '2018-04-01', 6, 0, 0, 1, 3, NULL),
(4, 1, 'Hạt giống đỏ\r\n', '130000.00', NULL, '“Cuốn sách Hạt giống đỏ tập hợp nhiều bài viết của nhiều tác giả hoạt động trên các lĩnh vực xã hội khác nhau, với cách thể hiện giản dị, giàu hình ảnh, giàu cảm xúc, những dòng hồi ức chân thành, cảm động của người trong cuộc. Qua từng trang sách, bạn đọc có thể hình dung được một cách rất cụ thể về cuộc sống, sinh hoạt, học tập, rèn luyện và trưởng thành trong muôn vàn khó khăn gian khổ của các Chiến sĩ nhỏ - Thiếu sinh quân trong các thời kỳ.    Bạn đọc sẽ tìm thấy những suy nghĩ sâu sắc và việc làm thiết thực của những nhà lãnh đạo, chỉ huy trong từng hoàn cảnh đặc biệt của những thời kỳ lịch sử khác nhau, qua đó phản ánh đầy đủ tình yêu thương, sự chăm sóc, sự lo toan và tầm nhìn chiến lược của Bác Hồ, của Đảng và Nhà nước đối với sự nghiệp vun trồng “Hạt giống đỏ” cho đất nước, cho giống nòi!      Cũng chính từ những trang viết chân thật đó, đã thể hiện được tấm lòng trân trọng, biết ơn sâu sắc của các thế hệ chiến sĩ nhỏ - Thiếu sinh quân miền Đông Nam bộ đối với Đảng, với Bác Hồ, với các cấp chỉ huy - lãnh đạo, với đồ̀ng bào ruột thịt và các thầy cô vô cùng thân yêu của mình.\r\n', 'images/sach-5.png', '2018-04-03', 7, 0, 0, 1, 4, NULL),
(5, 1, 'Giai thoại và Sấm ký Trạng Trình\r\n', '80000.00', NULL, 'Nhiều người trong chúng ta từ khi con nhỏ đã được nghe những lời đồn đại về Sấm Trạng Trình với một vẻ đầy huyền bí cao siêu.    Vậy trong những câu gọi là Sấm Trạng Trình thì đâu là sự thực? Có đúng là của Trạng viết ra không...?    Về nhà thơ có nhiều đóng góp trong việc xây dựng nền văn thơ chữ Nôm của ta hồi thế kỷ thứ XVI, nhiều tài liệu, sách vở đã được biên soạn, tuy nhiên không chỉ vì đã đỗ Trạng Nguyên lại được phong tước Trình Tuyền hầu, Lại bộ Thượng Thư... mà Nguyễn Bỉnh Khiêm được nhân dân ta yêu mếm gọi là Trạng Trình. Cái tên gọi với hàm ý sâu xa đầy kính phục đó còn là do những lời đoán định tiên tri đặc sắc của các cụ trong cuộc sống thườn nhật cũng như thời cuộc lúc bấy giờ.    Nội dung chính của tác phẩm xoay quanh thân thế sự nghiệp của nhà thơ triết lý, nhà tiên tri Nguyễn Bỉnh Khiêm, phân tích những bài Sấm ký, những giai thoại của dân gian về tài tiên tri của ông và một số tư liệu lịch sử liên quan đến Nguyễn Bỉnh Khiêm. \r\n', 'images/sach-6.jpg', '2018-03-05', 10, 0, 0, 1, 5, NULL),
(6, 1, 'Tháng ngày tôi sống với những người cộng sản\r\n', '60000.00', NULL, '“Tháng ngày tôi sống với những người Cộng sản” có thể coi là tập hồi ký của tác giả Thanh Nghị – cũng là tác giả “Việt Nam tân từ điển” (1954) - ghi lại chân thực cuộc sống và chiến đấu của những người Cộng sản mà tác giả cảm nhận được trong những ngày ông sống trong vùng chiến khu ác liệt của miền Đông Nam bộ. Với gần 400 trang với hàng chục đề mục giống như những trường đoạn trong một cuốn phim tư liệu.    Sách do nhà xuất bản Trẻ phát hành tháng 3-2005, được con cháu ông thực hiện thật có ý nghĩa trong dịp kỷ niệm 30 năm ngày miền Nam hoàn toàn giải phóng, thống nhất đất nước. Rất khách quan trong cách đặt vấn đề và thật có sức lay động trong các “chuyện kể thật hơn sự thật”, về những con người thuộc nhiều thành phần xã hội, lứa tuổi yêu nước. Tác phẩm là tập tư liệu quý, bài học quý của một con người chân chính, một trí thức thực thụ, dấn thân cùng đồng bào, dân tộc, cách mạng và Đảng Cộng sản Việt Nam quang vinh.\r\n', 'images/sach-7.jpg', '2018-03-06', 8, 0, 0, 1, 6, NULL),
(7, 1, 'Tiếng rao đêm\r\n', '25000.00', NULL, '“Tiếng rao đêm” là cuốn tạp bút mới của tác giả Nguyễn Dzoãn Cẩm Vân. Những hồi ức và cảm nhận về ẩm thực Việt đã được bà trải lòng qua từng trang sách. Nổi lên xuyên suốt trong tập tạp bút này chính là nỗi nhớ. Các bài viết trong tập sách là cả một bầu trời ẩm thực Việt. Có những món ăn không cao sang nhưng làm mê hoặc lòng người. Tình yêu dành cho ẩm thực xứ sở đã khiến bà ghi lại những đoạn văn như một kỷ niệm! Đọc sách của bà, người đọc nhận ra dẫu cuộc sống có thay đổi nhưng vẫn cần trân trọng và nâng niu giá trị Việt. Và thật xúc động trước tình cảm của bà dành cho những người kiếm sống giữa đêm khuya.  Với 45 bài viết nhỏ trong hai chương, dường như tác giả đã “giải tỏa” được một phần “ước mơ là làm một cuộc hành trình trải dài từ Bắc vào Nam, và trong hành trình ấy, tôi được thấy, được nghe để rồi ghi lại những điều mình nghe và thấy bằng tất cả cảm xúc của trái tim mình...”. Vâng, chỉ một phần bởi theo bà “cho đến nay ước mơ ấy vẫn chưa thành hiện thực, nó chỉ dừng lại ở một vài nơi tôi đã được đi qua và dừng lại đôi ba ngày...”.  “Tiếng rao đêm” chính là tiếng lòng, nỗi nhớ của một nhà nữ công gia chánh dành cho món ăn, thức uống cùng nếp nhà của người dân Việt bình thường, trọng nghĩa khí!\r\n', 'images/sach-8.jpg', '2018-03-09', 6, 0, 0, 1, 7, NULL),
(8, 1, 'Là bóng hay là hình\r\n', '70000.00', NULL, 'Tác phẩm “Là bóng hay là hình” xuất bản đầu tiên vào năm 1846, được tác giả viết vào thời kỳ đầu của sự nghiệp sáng tác. Bằng sự tài hoa cùng với nghệ thuật miêu tả tâm lý nhân vật, tác phẩm đã phần nào thể hiện được những góc khuất đa dạng trong tâm hồn con người. Ở đó, cuộc chiến tranh giữa “cái tôi cá nhân” và “cái ta” giằng co quyết liệt. Hình ảnh hai nhân vật Golyadkin có danh tính và ngoại hình giống hệt nhau trong truyện chính là ẩn dụ cho “cái tôi” và “cái ta” mà tác giả muốn đề cập.  Dostoevsky đã đi sâu vào tận cùng chốn thâm cùng của tâm hồn con người để thấy ở đó một cuộc chiến không bên nào có thể tiêu diệt hoàn toàn đối thủ của mình. Niềm kiêu hãnh của Dostoevsky giá trị như một lời tiên tri.\r\n', 'images/sach-9.jpg', '2018-03-14', 9, 0, 0, 1, 8, NULL),
(9, 1, 'Miền Ký Ức\r\n', '90000.00', NULL, 'Các bài viết trong Miền Ký Ức chủ yếu là những bút ký, những câu chuyện về gia đình, quê hương nơi chôn nhau cắt rốn; về thầy cô, bạn bè thuở đi học; về các bậc thầy, đàn anh thời đi làm.  Bạn đọc dễ dàng nhận thấy phần lớn bài viết về thầy cô, bạn bè thuộc thời học phổ thông. Có lẽ thời niên thiếu, lớn lên trong hoàn cảnh chiến tranh khốc liệt ở vùng quê nghèo khó, học trong ngôi trường mang tên Chúa Tiên “Nguyễn Hoàng”, người có công đầu trong việc mở cõi phương Nam nên ký ức về những ngày tháng đó hằn sâu trong tâm trí. Ngày quê hương thống nhất, ngôi trường lại bị xóa tên một cách oan nghiệt, đã làm cho bầy chim Nguyễn Hoàng mất tổ ấm; nhưng... càng lạc loài càng gắn bó nhau hơn. Thế nên Miền ký ức về Nguyễn Hoàng lại càng đậm nét!   Vì không phải là hồi ký, Miền Ký Ức tập hợp những bài viết riêng lẻ về những lĩnh vực khác nhau, ở những thời điểm khác nhau nên khó đạt được sự chặt chẽ, chỉn chu trong bố cục. Dù vậy, tác giả vẫn hy vọng rằng qua Miền Ký Ức, bạn đọc có thể phác họa phần nào chân dung và chuyện đời, chuyện nghề của tác giả.\r\n', 'images/sach-10.jpg', '2018-03-14', 11, 0, 0, 1, 9, NULL),
(10, 2, 'Chiến tranh và Hòa bình\r\n', '170000.00', NULL, 'Thêm một cuốn tiểu thuyết của nhà văn Nga Leo Tolstoy xuất hiện trong danh sách này. 5 gia đình, hơn 27 nhân vật là đại diện cho cả xã hội Nga dưới triều đại Nga Hoàng Alexander I, cuộc sống bị đảo lôn do sự xâm lăng của Napoleon. Tuy vậy, chính tác giả tự nhận cuốn sách không thể gọi là một cuốn tiểu thuyết: một số chương của cuốn sách hầu như chỉ luận bàn về triết học và không kể nhiều về cốt truyện.  Vào thời kì mới xuất bản, các nhà phê bình và nhà báo thậm chí không biết nên xếp cuốn sách vào thể loại nào: một tiểu thuyết văn học hay một tiểu thuyết lịch sử. Những cảnh chiến trận được miêu tả với sự thực tế đến mức gay gắt, trong khi câu chuyện lại chuyện hướng ngữ điệu hoàn toàn khác biệt. Có lẽ sự kết hợp của cả hai thể loại là điều đã tạo nên sự vĩ đại của cuốn sách.\r\n', 'images/sach-11.jpg', '2018-04-01', 12, 0, 0, 1, 10, NULL),
(11, 2, 'Lolita\r\n', '220000.00', NULL, 'Cuốn sách gây nhiều tranh cãi khi mới ra đời của Vladimir Nabokov một lần nữa khẳng định vị trí của mình trong hàng ngũ những tuyệt phẩm. Câu chuyện của vị giáo sư văn học rơi vào vòng xoáy cuộc tình với một cô bé mới dậy thì đã thể hiện chiều sâu của nó, hơn chỉ là một cuốn sách gợi dục như bị lầm tưởng ban đầu. Humbert cũng chỉ là một trong số vô vàn những người đàn ông bị thúc đẩy bởi khát khao của chính mình, trong khi Lolita chỉ xuất hiện trong lời kể lại của Humbert, không bao giờ được nhìn nhận như một con người đúng nghĩa. Chính vì vậy mà cô luôn xuất hiện rất mỉa mai, châm biếm. Cô mãi mãi là một người tình trong mơ của Humbert.\r\n', 'images/sach-12.jpg', '2018-03-29', 10, 0, 0, 1, 11, NULL),
(12, 2, 'Những cuộc phiêu lưu của Huckleberry Finn\r\n', '85000.00', NULL, 'Xuất hiện lần đầu tiên trong vai bạn của Tom Sawyer, Huckleberry Finn trở thành một nhân vật bất hủ với thời gian trong cuốn sách duy nhất có mang tên cậu – phần thứ hai trong loạt sách kể về cuộc phiêu lưu giữa hai cậu bé.  Tuy gặp phải nhiều phản ứng từ các phía do sự nhạy cảm của cốt truyện, không thể phủ nhận Mark Twain đã tạo ra kiệt tác “một câu chuyện về những cậu bé dành cho người lớn”: nhân vật sống động, ngây thơ trong sự trăn trở đạo đức về những hành vi bất công do tình trạng phân biệt chủng tộc với người da đen thời bấy giờ ở miền Nam nước Mỹ. Cuối cùng, Huckleberry Finn đã lựa chọn tình bạn, vượt ra khỏi khuôn khổ giáo điều bất công của xã hội. Đây cũng là tác phẩm đi đầu trong việc đưa ngôn ngữ địa phương vào văn học. Mark Twain thực sự đã phá bỏ nhiều rào cản với cuốn sách đột phá này.\r\n', 'images/sach-13.jpg', '2019-04-02', 15, 0, 0, 1, 12, NULL),
(13, 2, 'Hamlet\r\n', '150000.00', NULL, 'Vì đâu vở kịch của Shakespeare về một vị hoàng tử trả thù cho cha lại trở thành kiệt tác của thế giới? Hamlet, ra đời trong khoảng những năm 1600, kể lại sự trăn trở và đấu tranh mạnh mẽ trong tâm trí một vị hoàng tử, giữa đạo đức làm người với sự nhắm mắt làm ngơ, sống an vị qua ngày.  Khi vua cha của mình qua đời, Hamlet đang du học trở về nhà chịu tang và bất ngờ nhận ra người mẹ – hoàng hậu đã tái hôn với chú mình. Trước sự trùng hợp quá thuận lợi, anh không khỏi nghi ngờ và đau lòng từng bước chấp nhận sự thật. Anh quyết trả thù cho vua cha để lập lại công bằng. Trên hành trình của mình, anh nhiều lần bị dằn vặt bởi đạo làm con, cũng như nghi ngờ về tình yêu và tấm lòng người phụ nữ thực sự thủy chung. “To be or not to be” – Tồn tại hay không tồn tại, câu thoại ấn tượng nhất trong cuộc vật lộn dữ dội nhất của Hamlet, đã trở thành câu thoại kinh điển của nền văn học thế giới.\r\n', 'images/sach-14.jpg', '2019-04-02', 21, 0, 0, 1, 13, NULL),
(14, 2, 'Anh em nhà Karamazov\r\n', '130000.00', NULL, 'Anh em nhà Karamazov là tác phẩm cuối cùng của Doxtoevxki. Doxtoevxki thuộc loại thiên tài hiếm hoi mà càng về cuối đời thì sự nghiệp sáng tác càng lên tới đỉnh cao hơn.  Anh em nhà Caramazov là tác phẩm vĩ đại nhất của ông: ở đây hội tụ tất cả những ý tưởng chủ đạo mà nhà văn ấp ủ suốt đời và đã giải bày một phần trong các tác phẩm trước đó đây là sự kết tinh kinh nghiệm sống sóng gió đầy đau khổ của nhà văn và vô vàn quan sát trong thực tế cộng với tay nghề điêu luyện sau bốn chục năm lao động văn học. Thoạt nhìn Anh em nhà Caramazov là cuốn tiểu thuyết về đề tài gia đình về sự tan rã của Gia đình ngẫu hợp tức là loại gia đình ở đó không có những mối quan hệ trong sạch vững chắc không có nền móng đạo lý và tan rã trong hoàn cảnh của một xã hội đang băng hoại. Một ông bố ba người con chính thức và một đứa con kết quả của một lần đi lại như cưỡng hiếp một người phụ nữ điên dại. Trừ người con trai thứ ba – Alecxei – cả gia đình sống trong sự căm thù lẫn nhau mà kết quả là vụ giết bố và một người bị án oan đi tù khổ sai.  Anh em nhà Caramazov là một tác phẩm hiện thực theo nghĩa cao cả nhất có sức tố cáo hết sức lớn đồng thời là tác phẩm rất lôi cuốn khiến người đọc hồi hộp với sự phát triển căng thẳng của cốt truyện hình sự được bố trí rất mực khéo léo nhưng bao trùm tất cả nó là cuốn tiểu thuyết Triết lý tuyến Triết lý chiếm địa vị thống trị.\r\n', 'images/sach-15.jpg', '2019-03-30', 18, 0, 0, 1, 14, NULL),
(15, 2, 'Don Quixote\r\n', '150000.00', NULL, '“Don Quixote khởi đầu như một tỉnh lẻ, trở thành Tây Ban Nha, và cuối cùng như một vũ trụ.”- V. S. Pritchell.  “Có thể nói mọi tiểu thuyết văn xuôi đều là biến tấu trên chủ đề Don Quixote.”- Lionell Trilling.  “Cervantes là người sáng lập Thời Hiện đại… Tiểu thuyết gia không cần trả lời ai ngoài Cervantes. Thực sự không thể hình dung nổi Don Quixote như một con người bằng xương bằng thịt, nhưng trong tâm trí của chúng ta, còn có nhân vật nào sống động hơn?”- Milan Kundera.  Don Quixote, tiểu thuyết hay nhất mọi thời đại, được dịch ra nhiều thứ tiếng nhất và được tái bản nhiều nhất trong lịch sử nhân loại, chỉ sau Kinh Thánh.\r\n', 'images/sach-16.jpg', '2019-04-05', 16, 0, 0, 1, 15, NULL),
(16, 2, 'Đi tìm thời gian đã mất\r\n', '60000.00', NULL, 'Marcel Proust không còn nữa nhưng Đi Tìm Thời Gian Đã Mất đã khiến tên tuổi của ông trở thành bất tử theo đúng ý nghĩa đầy đủ này. Trong hai năm 190 và 1992 một số cơ quan văn hoá văn học, báo chí và truyền thông Pháp tổ chức hai đợt lấy ý kiến các nhà văn, nhà báo, nhà nghiên cứu văn học và đông đảo độc giả để tuyển chọn, đợt 1 10 cuốn sách Pháp hay nhất cho thế hệ những năm 2000 và đợt 2 10 cuốn tiểu thuyết được đánh giá là hay nhất tong lịch sử văn học Pháp. Cả hai lần, Đi tìm thời gian đã mất đều trúng tuyển và trong đợt một, giành vị trí đầu bảng xếp theo thứ hạng (Đợt hai, kết quả xếp theo bảng chữ cái tên tác giả).\r\n', 'images/sach-17.jpg', '2018-04-14', 14, 0, 0, 1, 16, NULL),
(17, 2, 'Tội ác và trừng phạt\r\n', '25000.00', NULL, 'Tội ác và trừng phạt là tác phẩm nổi tiếng của một trong những cây bút tiểu thuyết bậc thầy của nước Nga F. Dostoevsky (1821-1881).  Chuyện kể về chàng sinh viên nghèo Raxkônnikốp vì quá lạc lối mà đã giết chết hai chị em bà lão cầm đồ.  Những ngày sau đó, Raxkônnikốp rơi vào một bi kịch mới, khủng hoảng tinh thần trầm trọng. Anh càng cố gắng che giấu tội lỗi thì càng tỏ ra lúng túng. Tình yêu sâu sắc, sự hy sinh cao cả và tấm lòng nhân hậu của cô gái Xônya cùng sự quan tâm, yêu thương giúp đỡ của mọi người đã thức tỉnh Raxkônnikốp. Chấm dứt những giằng xé nội tâm, anh đưa ra quyết định: thà bị giam cầm về thể xác còn hơn bị tù đày về tâm hồn…Với nội dung tư tưởng sâu sắc, Tội ác và trừng phạt đã được đánh giá là một kiệt tác chứa chan tình yêu thương giữa con người với con người.\r\n', 'images/sach-18.jpg', '2018-04-03', 18, 0, 0, 1, 17, NULL),
(18, 2, 'Chân Dung Dorian Gray\r\n', '70000.00', NULL, 'Tác phẩm Chân Dung Dorian Gray là một bức chân dung được dệt bằng những sợi chỉ tối màu và hoảng loạn. Cuốn sách giúp người đọc nhận ra những bí mật sâu thẳm được giấu kín, những suy nghĩ thầm kín đầy phức tạp và thiêng liêng của thân phận con người.  Lồng trong bối cảnh cuộc tình đồng tính giữa một họa sĩ và chàng người mẫu trẻ Dorian, nhân vật chính của tiểu thuyết, với những khát khao ích kỷ của bản năng và trăn trở của mặc cảm, ngộ nhận; những cám dổ cố hữu của của nhục thể và sự kháng cự quyết liệt của tinh thần, những cú trượt ngã không phanh, những nỗ lực trong tuyệt vọng, và cả sự tự vấn, phản tỉnh… Chân dung Dorian Gray là hành trình đi tìm lương tâm của một chàng trai trẻ. Đây là một hành trình của những cung bậc cảm xúc: tâm tư giằng xé, trượt quan những dằn vặt tàn khốc, giãy giụa vật vã, đối diện với những thử thách cám dỗ dữ dội để tìm cái đẹp, cái thiện.\r\n', 'images/sach-19.jpg', '2018-04-26', 25, 0, 0, 1, 18, NULL),
(19, 2, 'Trăm Năm Cô Đơn\r\n', '90000.00', NULL, 'Cho đến nay Trăm Năm Cô Đơn vẫn là cuốn tiểu thuyết lớn nhất của Gabriel Garcia Márquez, nhà văn Columbia, người được giải Nobel về văn học năm 1982. Trăm Năm Cô Đơn ra đời (1967) đã gây dư luận sôi nổi trên văn đàn Mỹ Latinh và lập tức được cả thế giới hâm mộ. Sau gần hai mươi năm, Trăm Năm Cô Đơn đã được nhiều thế hệ độc giả đón nhận.  Trăm Năm Cô Đơn là lời kêu gọi mọi người hãy sống đúng bản chất người – tổng hòa các mối quan hệ xã hội – của mình, hãy vượt qua mọi định kiến, thành kiến cá nhân, hãy lấp bằng mọi hố ngăn cách cá nhân để cá nhân mình tự hòa đồng với gia đình, với cộng đồng xã hội. Vì lẽ đó Garcia Márquez từng tuyên bố cuốn sách mà ông để cả đời sáng tác là cuốn sách về cái cô đơn và thông qua cái cô đơn ông kêu gọi mọi người đoàn kết, đoàn kết để đấu tranh, đoàn kết để chiến thắng tình trạng chậm phát triển của Mỹ Latinh, đoàn kết để sáng tạo ra một thiên huyền thoại khác hẳn. Một huyền thoại mới, hấp dẫn của cuộc sống, nơi không ai bị kẻ khác định đoạt số phận mình ngay cả cái cách thức chết, nơi tình yêu có lối thoát và hạnh phúc là cái có khả năng thực sự, và nơi những dòng họ bị kết án trăm năm cô đơn cuối cùng và mãi mãi sẽ có vận may lần thứ hai để tái sinh trên mặt đất này.\r\n', 'images/sach-20.jpg', '2018-04-11', 16, 0, 0, 1, 19, NULL),
(20, 3, 'Chuyện con mèo và con chuột bạn thân của nó\r\n', '140000.00', NULL, 'Max và Mix là đôi bạn thân từ thủa thiếu thời, họ chia sẻ cùng nhau mọi vui buồn trong cuộc sống. Chỉ có điều, Max là người còn Mix là mèo! Max lớn lên, thành một chàng thanh niên và dọn ra ở riêng cùng Mix. Mix cũng lớn lên, già đi rồi trở thành một con mèo mù. Cuộc sống có chút cô đơn của Mix những lúc Max vắng nhà vì công việc bỗng nhiên thay đổi khi Mix phát hiện ra trong nhà xuất hiện một con chuột Mexico. Chuột ta, vốn láu lỉnh và mau mồm, đã xin được Max đồng ý cho ăn chỗ vụn ngũ cốc vương trên bàn, rồi lại còn đích thân nhảy lên tủ bếp chòi gói ngũ cốc xuống cho chuột. Và tình bạn lạ kỳ giữa Mix và chú chuột bắt đầu bằng việc Mix đặt tên cho chuột – từ nay được gọi là Mex.  Vượt qua những khác biệt, hai con vật sát cánh bên nhau, Mex trở thành đôi mắt của Mix, còn Mix khiến chú chuột nhát gan trở nên mạnh mẽ hơn. Câu chuyện được kể bằng ngòi bút tài tình của Luis Sepúlveda, mỗi chương lại kết thúc bằng một câu đúc kết dạy con người ta biết cách để trở thành những người bạn thực sự.\r\n', 'images/sch-21.jpg', '2018-04-17', 9, 0, 0, 1, 20, NULL),
(21, 3, 'Con ốc sên \r\n', '30000.00', NULL, 'Đây là câu chuyện về một bầy ốc sên sống tại Quê Hương Bồ Công Anh, dưới tán lá ô rô rậm rạp, vốn vẫn sống một cuộc đời chậm chạp, lặng lẽ, và chỉ gọi nhau đơn giản là “sên”, cho tới khi một con trong số chúng nghĩ rằng thật bất công khi không có một cái tên riêng và nhất là nó muốn biết được lý do tại sao loài sên lại chậm chạp đến thế. Bỏ ngoài tai mọi lời chế giễu của những đồng loại đã quá quen với cuộc sống chậm chạp và lặng lẽ vốn có, kẻ “nổi loạn” quyết chí rời xa gia trang ô rô, lên đường kiếm tìm cho mình một cái tên riêng cùng lời giải đáp cho thắc mắc bấy lâu. Trên hành trình ấy, nó gặp một bác rùa già, người đã đặt cho nó cái tên “Dũng Khí” và chỉ cho nó thấy tận mắt một hiểm họa lớn đối với mọi loài sinh vật của đồng cỏ: con người!  Chú ốc sên nhỏ quyết định quay về báo tin cho đồng loại, cùng với đó là cả nhà kiến, bọ hung, và chuột chũi… mà nó gặp trên đường. Chính nhờ sự chậm chạp và gan dạ, “Dũng Khí” đã giúp nhiều sinh vật thoát khỏi nguy hiểm, đồng thời dẫn dắt các anh em của mình vượt qua chặng đường gian khổ, tìm đến một Quê Hương Bồ Công Anh mới, an toàn và đầy hứa hẹn.\r\n', 'images/sach-22.jpg', '2018-04-23', 18, 0, 0, 1, 21, NULL),
(22, 3, 'Chuyện con mèo dạy hải âu bay\r\n', '100000.00', NULL, 'Thế giới này đầy những nghịch lý và khác biệt, nhưng bỏ qua những khác biệt đó để hướng đến tình yêu thương thì cuộc sống sẽ tốt đẹp hơn.“Chuyện con mèo dạy hải âu bay” của nhà văn Chi Lê nổi tiếng Luis SéPulveda.là một câu chuyện thấm đẫm tình mèo, tình người như thế.  Câu chuyện là cuộc hành trình dài đi thực hiện ba lời hứa của chú mèo mập Zorba: “sẽ không ăn quả trứng”, sẽ “chăm lo cho quả trứng đến khi chú chim non ra đời”, và điều cuối dường như không tưởng là “dạy nó bay”. Những rắc rối liên tiếp ập đến, liệu một bà má rất “xịn” như Zorba có thực hiện đúng được ba lời hứa?\r\n', 'images/sach-23.jpg', '2018-04-09', 19, 0, 0, 1, 22, NULL),
(23, 3, 'Tuổi thơ dữ dội\r\n', '100000.00', NULL, 'Tuổi thơ dữ dội – cuốn truyện xoay quanh cuộc sống chiến đấu và hy sinh của những thiếu niên 13, 14 tuổi trong hàng ngũ Đội thiếu niên trinh sát của trung đoàn Trần Cao Vân. Những Lượm, Mừng, Quỳnh sơn ca, Hòa đen, Bồng da rắn, Vịnh sưa, Tư dát… mỗi người một hoàn cảnh song đều chung quyết tâm, nhiệt huyết và lòng yêu nước, đã tham gia chiến đấu hết mình và hy sinh khi tuổi đời còn rất trẻ.  Đúng như tên truyện, độc giả sẽ bắt gặp ở đó những chi tiết thực sự dữ dội về cuộc đời thiếu niên bất hạnh, về cuộc chiến tranh chống giặc tàn khốc nhưng ẩn sâu bên trong ta vẫn thấy những tâm hồn trong sáng và vô tư, thấy sự can trường, dũng cảm phi thường của nhân vật. Tất cả những ai đã từng đọc tác phẩm này hầu như đều không ngăn được xúc động và những giọt nước mắt cảm thương, cảm phục. Đây thực sự là một tác phẩm quý trong kho tàng văn học Việt Nam. Một câu chuyện khơi dậy trong mỗi người tình yêu đất nước và niềm trân trọng ký ức tuổi thơ…\r\n', 'images/sach-24.jpg', '2018-04-17', 15, 0, 0, 1, 23, NULL),
(24, 3, 'Lũ trẻ đường ray\r\n', '30000.00', NULL, 'Từ buổi tối cha bị hai người lạ mặt đưa đi, cuộc sống của ba chị em Roberta, Peter và Phyllis hoàn toàn đảo lộn. Từ ngôi biệt thự tiện nghi ở London, các em phải cùng mẹ chuyển về nông thôn sống khó khăn vất vả trong một ngôi nhà nhỏ. Tại nơi xa lạ không ai quen biết, lũ trẻ tìm vui bên con đường sắt chạy ngang qua đó. Các em kết bạn với Perks, người bảo vệ nhà ga, học hỏi những kiến thức về tàu hỏa của ông và thực hiện những cuộc phiêu lưu nho nhỏ. Các em còn có niềm vui ngày nào cũng vẫy chào một ông già quý phái đi tàu ngang qua vào một giờ nhất định. Sau khi các em cứu được một đoàn tàu khỏi tai nạn kinh khủng, ông già quý phái ngày càng thân thiết với bọn trẻ hơn và giúp chúng tìm hiểu vì sao cha lại biến mất một cách bí ẩn. Đi suốt tác phẩm, người đọc bị cuốn vào những “phi vụ” liều lĩnh quá tầm lũ trẻ. Chúng đưa người tù nhân Nga khốn khổ trốn chạy sang Anh về nhà chăm sóc, trong khi bao người lớn còn đang giữ thái độ cảnh giác với ông, rồi cuối cùng chúng giúp ông tìm lại được gia đình. Chúng lao vào đám cháy để cứu con ông sà lan mặc dù ông ta vừa la mắng nạt nộ chúng làm chúng rất ghét ông ta. Chúng còn bất chấp nguy hiểm chạy vào đường hầm có tàu chạy qua để cứu cậu thiếu niên bị gãy chân mắc kẹt trong đó…\r\n', 'images/sach-25.jpg', '2018-04-07', 22, 0, 0, 1, 24, NULL),
(25, 3, 'Tiếng gọi nơi hoang dã\r\n', '45000.00', NULL, 'Đến với tiếng gọi nơi hoang dã, Jack London mới thể hiện tất cả sức mạnh của ngòi bút và tư tưởng của mình. Ngược với Nanh trắng, chú chó Buck đã từ thế giới văn minh tìm ngược về nơi hoang dã, đi theo tiếng gọi tự do chân chính của giống nòi. Tuy nhiên, thẳm sâu trong Buck vẫn vương vấn tình cảm với con người duy nhất mà nó yêu thương yêu. Buck tồn tại độc lập với tính cách độc đáo, như một nhân vật không thể bị che lấp. Tình yêu nhiệt thành với cuộc sống đã tạo nên những trang viết đầy sức cuốn hút của Jack London và khiến các tác phẩm của ông được yêu mến trên toàn thế giới.\r\n', 'images/sach-26.jpg', '2018-04-08', 3, 0, 0, 1, 25, NULL),
(26, 3, 'Oscar và Bà áo hồng\r\n', '40000.00', NULL, 'Cuốn sách gồm những bức thư gửi Chúa từ một cậu bé mười tuổi, nhóc Oscar, biệt danh Sọ Trứng, vì cái đầu trọc – hệ quả sau đợt điều trị hóa chất do bệnh máu trắng. Oscar kể với Chúa về những mong ước của mình, về những gì diễn ra trong mười hai ngày có lẽ là cuối cùng của cuộc đời cậu. Những lá thư ấy đã được bà Hoa Hồng, một tình nguyện viên đến chơi với các bệnh nhi, tìm thấy sau khi Oscar mất. Nhờ có bà Hoa Hồng, mười hai ngày ấy đã trở thành huyền thoại.  Chỉ vỏn vẹn hơn 100 trang, Schmitt đã thành công trong việc kể với chúng ta về nỗi đau, nỗi buồn, niềm hy vọng và cái chết với đầy chất thơ, chất hài và cảm xúc. Không phải ngẫu nhiên mà cuốn sách được độc giả Pháp bình chọn trong danh sách “những cuốn sách đã thay đổi cuộc đời tôi” – một điều hiếm thấy của một tác giả còn sống – đưa Oscar và bà áo hồng sánh ngang cùng Ba chàng lính ngự lâm hay Hoàng tử bé.\r\n', 'images/sach-27.jpg', '2018-04-09', 25, 0, 0, 1, 26, NULL),
(27, 3, 'Hoàng tử bé\r\n', '30000.00', NULL, 'Đây là một cuốn truyện đặc biệt mà lời văn cùng nét vẽ hòa quyện vào nhau đến nỗi ở Pháp, người ta không thể sắp xếp lại chữ lần thứ hai mà luôn phải trình bày duy nhất trong mọi lần xuất bản. Câu chuyện kể về một hoàng tử nhỏ cô đơn từ tiểu tinh cầu xa xôi viếng thăm rồi lại lìa xa Trái đất. Hoàng tử bé được xem là tác phẩm thơ mộng nhất của mọi thời đại. Cho đến nay, tác phẩm ra đời vào năm 1943 của nhà văn Saint-Exupéry này đã được dịch sang hơn 160 ngôn ngữ và phát hành hơn 50 triệu bản trên khắp thế giới. Sự giản dị trong sáng tỏa khắp tác phẩm đã khiến nó trở thành một bài thơ bất hủ mà mãi mãi người ta muốn đem làm quà tặng của tình yêu. Cho đến nay, không biết bao nhiêu người đã đọc đi đọc lại tác phẩm này để rồi lần nào cũng lặng đi trong nước mắt.\r\n', 'images/sach-28.jpg', '2018-04-11', 11, 0, 0, 1, 27, NULL),
(28, 3, 'Ba chàng lính ngự lâm\r\n', '70000.00', NULL, 'D’Artagnan là một chàng trai kiêu hãnh và can trường. Chàng luôn có một mong ước: trở thành lính ngự lâm! Và rồi, khi ước mơ trở thành sự thật thì những cuộc phiêu lưu đầy hiểm nguy cùng ba đồng đội Athos, Porthos, Aramis cũng bắt đầu. Qua bao cuộc đụng độ với Hồng y Giáo chủ De Richelieu, hay Nữ bá tước Milady de Winter, bốn chàng trai luôn thể hiện lòng can đảm vô song khi hô vang khẩu hiệu trứ danh: “Một người vì mọi người, mọi người vì một người!”. Hãy cùng khám phá lại những tác phẩm kinh điển vốn đã hết sức quen thuộc trong một diện mạo mới, sống động và hiện đại hơn bao giờ hết, qua những nét vẽ điêu luyện của các họa sĩ tài năng.\r\n', 'images/sach-29.jpg', '2018-04-06', 28, 0, 0, 1, 28, NULL),
(29, 3, 'Pippi tất dài\r\n', '60000.00', NULL, 'Pippi tất dài, một cái tên đã được hàng triệu trẻ em của bao nhiêu thế hệ trên thế giới yêu mến. Cô bé tóc đỏ, mặt đầy tàn nhang tinh quái đó là giấc mơ sống động mà có lẽ chưa từng một ai không ôm ấp khi nghĩ về tuổi thơ, trẻ thơ.Bên sân nhà của hai anh em Thomas và Annika, có một Biệt thự tên là Bát Nháo nhưng chẳng ai ở cả. Chúng mơ ước có hàng xóm với lũ trẻ để chơi cùng biết bao. Và rồi một cô bạn hàng xóm xuất hiện. Cô bé 9 tuổi ấy chỉ đi một mình, với một chú ngựa và một ông khỉ. Chúng đã kết thành bạn thân với nhau.Pippi có một va ly đầy tiền vàng. Cô bé không thích đi học, vì từ nhỏ đã lênh đênh trên biển với bố nên chẳng biết đi học ở đâu. Ước mơ của cô bé là tương lai trở thành tướng cướp. Và cô bé sống hoàn toàn tự do, không chịu được gò bó nào, không ai bắt cô đi ngủ đúng giờ khi đang chơi vui, hay bắt cô vào nhà khi đang dạo mát giữa vườn trong đêm vắng. Pippi sẵn sàng đối đầu với những kẻ bắt nạt, bọn kẻ trộm hay tên hợm hĩnh đòi mua biệt thự Bát nháo. Nhưng cũng chính từ cuộc sống đó, Pippi tự lập hơn mọi đứa trẻ khác. Cô bé tất dài biết sắp xếp lấy nhà cửa, nấu ăn rất ngon, ưa chiêu đãi bạn bè. Pippi có thể tự gội đầu, thích vục cả mặt trong chậu nước; có thể vừa cài khuy sau của áo, vừa tết tóc. Hơn thế, Pippi tất dài có một tình cảm thật khoáng đạt, nồng nàn với mọi người. Cô bé sẵn sàng nhảy lên cửa sổ mua vui cho hai anh em hàng xóm bị ốm phải nằm nhà, cô làm tiệc cùng các bạn chơi thật vui, và vì họ mà cô ở lại biệt thự Bát Nháo, không lên thuyền với cha nữa.Pippi tất dài – một cô bé, một thế giới lung linh đã làm nức lòng độc giả mọi lứa tuổi ở hơn 100 quốc gia trên thế giới. Hình tượng văn học sống động này đã nhiều lần được dựng thành phim.\r\n', 'images/sach-30.jpg', '2018-04-14', 14, 0, 0, 1, 29, NULL),
(30, 4, 'Chính Trị Luận\r\n', '200000.00', NULL, '\"Cuốn sách này được xem là căn bản cho Chính trị học Tây phương và ảnh hưởng sâu rộng tới các tư tưởng gia đời sau như Cicero,St.Augustine, Aquinas, và các lý thuyết gia khác thời Trung Cổ. Các lý thuyết gia hiện đại như Machiavelli, Hobbes, và các nhà tư tưởng thời Khai Sáng đều dựa trên nền tảng này mà phê phán lý thuyết và mô hình chính trị kiểu Aristotle. Nhờ vậy, họ đã phát triển nên các hệ tư tưởng mới. Vì thế, dù chúng ta có đồng ý hay không với lập luận và lý thuyết của Aristotle, hiểu rõ các nguyên lý căn bản mà Aristotle đã đề ra vẫn là điều cần thiết để có thể hiểu được các nhà tư tưởng thời Khai sáng và Hậu hiện đại.\r\n\"\r\n', 'images/sach-31.jpg', '2018-04-06', 6, 0, 0, 1, 30, NULL),
(31, 4, '\"Những Vấn Đề \r\nChính Yếu Trong Lịch\r\nSử Nam Bộ Kháng Chiến (1945 - 1975)\"\r\n', '350000.00', NULL, 'Lịch sử Nam Bộ kháng chiến là một bộ sách có ý nghĩa chính trị, tư tưởng xã hội to lớn và sâu sắc ở nước ta. Bộ sách có số lượng lớn về tư liệu lịch sử, sự kiện, nhân vật, con số...được khái quát trong hàng nghìn trang inkhổ lớn; chứa đựng khối lượng nội dung hết sức phong phú và đa dạng rất nhiều hoạt động về cuộc kháng chiến cứu nước đầy gian khổ, hy sinh anh dũng của đồng bào, đồng chí ở vùng đất Nam Bộ liên tục suốt gần một phần ba thế kỷ (1945 - 1975); phản ánh, khắc ghi khá trung thực những chiến công lừng lẫy của quân dân Thành đồng Tổ quốc đã được cả nước và thế giới ngưỡng mộ, ngợi ca.\r\n', 'images/sach-32.jpg', '2018-04-26', 27, 0, 0, 1, 31, NULL),
(32, 4, 'Luật Xử lý vi phạm hành chính\r\n', '395000.00', NULL, '\"Giới thiệu sách Luật Xử lý vi phạm hành chính 2019, giúp các doanh \r\nnghiệp, đơn vị hành chính sự nghiệp thuộc các ngành và các địa phương trong cả nước, các cơ quan quản lý nhà nước và đông đảo bạn đọc thuận tiện trong việc tìm hiểu xử phạt vi phạm hành chính\"\r\n', 'images/sach-33.jpg', '2018-04-01', 6, 0, 0, 1, 32, NULL),
(33, 4, '\"Đại tướng Võ Nguyên Giáp với cách\r\n mạng Việt Nam\"\r\n', '200000.00', NULL, 'Đại tướng Võ Nguyên Giáp đã được cả thế giới biết đến như một trong những danh tướng của thế giới – một vị tướng huyền thoại của chiến tranh du kích, chiến tranh nhân dân. Ông được tôn vinh trong nhiều công trình nghiên cứu khoa học trong nước và thế giới, đã được ghi danh vào nhiều bộ từ điển Bách khoa và Bách khoa toàn thư của nhiều nước\r\n', 'images/sach-34.jpg', '2018-04-02', 23, 0, 0, 1, 33, NULL),
(34, 4, 'Luật Đất Đai Năm 2013 Và Văn Bản Hướng\r\n Dẫn Thi Hành\r\n\r\n', '135000.00', NULL, 'Nhằm giúp cho mọi người hiểu thêm về chế độ sở hữu đất đai, quyền hạn và trách nhiệm của Nhà nước đại diện chủ sở hữu toàn dân về đất đai và thống nhất quản lý đất đai, chế độ quản lý và sử dụng đất đai, quyền và nghĩa vụ của người sử dụng đất đối với đất đai thuộc lãnh thổ của nước Cộng hòa xã hội chủ nghĩa Việt Nam, tác giả Minh Ngọc đã sưu tầm, tuyển chọn những nội dung liên quan đến Luật Đất Đai năm 2013 và văn bản hướng dẫn thi hành để giới thiệu đến bạn đọc.\r\n', 'images/sach-35.jpg', '2018-04-06', 26, 0, 0, 1, 34, NULL),
(35, 4, 'Pháp Luật Về Môi Giới, Kinh Doanh Bất Động Sản, Nhà Ở Và Đất Đai\r\n', '149000.00', NULL, 'Thị trường đất đai, nhà ở là thị trường có vị trí và vai trò quan trọng đối với nền kinh tế nước ta. Việc xây dựng và ban hành Luật Đất đai năm 2013, Luật Nhà ở, Luật Kinh doanh bất động sản năm 2014 và các văn bản hướng dẫn thi hành của Chính phủ thời gian qua đã có tác dụng tích cực trong việc phát triển và quản lý có hiệu quả thị trường bất động sản, đã góp phần quan trọng vào quá trình thúc đẩy phát triển kinh tế - xã hội, tạo khả năng thu hút các nguồn vốn đầu tư cho phát triển, đóng góp thiết thực vào quá trình phát triển đô thị và nông thôn bền vững theo hướng công nghiệp hoá, hiện đại hóa đất nước.\r\n', 'images/sach-36.jpg', '2018-04-18', 14, 0, 0, 1, 35, NULL),
(36, 4, 'Tuyên Ngôn Của Đảng Cộng Sản Và Công \r\nCuộc Đổi Mới Ở Việt Nam\r\n', '100000.00', NULL, 'Nội dung cuốn sách gồm các phần chính sau:\r\nPhần thứ nhất: Tuyên ngôn của Đảng Cộng Sản\r\nPhần thứ hai: Tuyên ngôn của Đảng Cộng Sản và công cuộc đổi mới ở Việt Nam \r\nPhần thứ ba: Những giá trị bêền vững và ý nghĩa thời đại của “Tuyên Ngôn Của Đảng Cộng Sản”\r\nPhần thứ tư: Cương lĩnh xây dựng đất nước trong thời kỳ quá độ lên Chủ Nghĩa Xã Hội (bổ sung, phát triển năm 2011) và các văn kiện đại hội XII của Đảng Cộng Sản Việt Nam.\r\n', 'images/sach-37.jpg', '2018-04-10', 8, 0, 0, 1, 36, NULL),
(37, 4, 'Tinh thần pháp luật\r\n', '123000.00', NULL, 'Tinh thần Pháp luật là một luận thuyết về học thuyết chính trị được Nam tước de Montesquieu xuất bản dưới dạng ẩn danh vào năm 1748. Đầu tiên nó được xuất bản ẩn danh một phần vì Montesquieu muốn tác phẩm của mình tránh bị kiểm duyệt, sau đó nó nhanh chóng được dịch sang nhiều thứ tiếng khác\r\n', 'images/sach-38.jpg', '2018-03-12', 5, 0, 0, 1, 37, NULL),
(38, 4, 'Chính Sách Thuế quy định mới về thuế \r\nvà hóa đơn chứng từ\r\n', '20000.00', NULL, 'Sách chính trị tài chính giới thiệu cuốn Chính Sách Thuế Quy định mới về thuế và hóa đơn chứng từ (Niên giám thuế và các lưu ý về thuế năm 2019) nội dung cuốn sách hỗ trợ quý doanh nghiệp, cá nhân và các cơ quan thuế có được các văn bản hướng dẫn chính sách thuế mới\r\n\r\n', 'images/sach-39.jpg', '2018-04-24', 9, 0, 0, 1, 38, NULL),
(39, 4, 'Bàn về tự do\r\n', '160000.00', NULL, 'Bàn về tự do là một trong những tác phẩm triết học nổi tiếng nhất của John Stuart Mill, một nhà triết học thực chứng người Anh, đề cập đến một trong những vấn đề được rất nhiều người quan tâm, đó là quyền của các cá nhân trong mối quan hệ của họ với cộng đồng và với xã hội.\r\n', 'images/sach-40.jpg', '2018-04-02', 7, 0, 0, 1, 39, NULL),
(40, 5, 'Kỹ thuật chân không và công nghệ bề mặt\r\n', '125000.00', NULL, 'Kỹ thuật chân không ngày nay gắn liền với lĩnh vực cơ khí và công nghệ bề mặt khi các ứng dụng đã trở thành một bước trong quy trình công nghệ gia công các chi tiết máy và sản phẩm công nghiệp, bao gồm cả cơ khí chính xác và máy công cụ. Năng suất, chất lượng, hiệu quả kinh tế là những yếu tố mà sản xuất cơ khí luôn phấn đấu để đạt được kết quả ngày càng tốt hơn; đặc biệt là khi trình độ sản xuất được tự động hoá ở mức cao và chất lượng sản phẩm ngày càng hoàn hảo, nhất là lĩnh vực quang - cơ điện tử. Cùng với đó là yêu cầu về giảm kích thước sản phẩm với cùng chức năng kỹ thuật là những đòi hỏi cấp thiết có thể tìm thấy những gợi ý hữu ích khi người đọc xem cuốn sách này.\r\n', 'images/sach-41.jpg', '2018-04-10', 11, 0, 0, 1, 40, NULL),
(41, 5, 'Cơ sở công nghệ phần mềm\r\n', '98000.00', NULL, 'Công nghệ phần mềm hay kỹ nghệ phần mềm (tiếng Anh: software engineering) là sự áp dụng một cách tiếp cận có hệ thống, có kỷ luật, và định lượng được cho việc phát triển, sử dụng và bảo trì phần mềm. Ngành học kỹ nghệ phần mềm bao trùm kiến thức, các công cụ, và các phương pháp cho việc định nghĩa yêu cầu phần mềm, và thực hiện các tác vụ thiết kế, xây dựng, kiểm thử (software testing), và bảo trì phần mềm.\r\n', 'images/sach-42.jpg', '2018-04-16', 25, 0, 0, 1, 41, NULL),
(42, 5, 'Công nghệ và chuyển giao công nghệ\r\n', '110000.00', NULL, 'ông Nghệ Và Chuyển Giao Công Nghệ nhằm góp phần cung cấp thêm thông tin và trao đổi ý kiến với những ai quan tâm đến tình hình CGCN trên thế giới, thực trạng và giải pháp CGCN của Việt Nam cho những năm tới.Vấn đề đặt ra được đề cập từ ba trụ cột: chuyển giao công nghệ tiên tiến, hiện đại của nước ngoài vào Việt Nam; chuyển giao các công nghệ ngay từ các kết quả nghiên cứu KH&CN của Việt Nam vào các hoạt động sản xuất, kinh doanh tại Việt Nam; đồng thời có cả CGCN, đầu tư của Việt Nam ra nước ngoài\r\n', 'images/sach-43.jpg', '2018-04-19', 6, 0, 0, 1, 42, NULL),
(43, 5, 'Tế Bào Gốc: Khám Phá Cùng Nhà Khoa Học', '112000.00', NULL, 'Cuốn sách giúp cho bạn đọc có một cái nhìn bao quát đối với tế bào gốc từ lịch sử phát minh, đến cấu trúc tế bào, cơ chế phân tử, đến bộ gene và di truyền ngoài bộ gene (di truyền ngoại mã).Điều đặc biệt ấn tượng là tất cả những kiến thức cơ bản này được diễn giải thật dễ hiểu bằng ngôn ngữ phổ thông, chứ không hàn lâm như trong giới nghiên cứu. Để chuyển tải các khái niệm trừu tượng khó hiểu của thế giới sinh học vi mô đến với người đọc, tác giả đã sử dụng các biện pháp so sánh tương đồng rất tài tình đến nỗi những người có kiến thức trong lĩnh vực, còn thấy hết sức độc đáo thú vị.\r\n', 'images/sach-44.jpg', '2018-04-23', 10, 0, 0, 1, 43, NULL),
(44, 5, 'Cơ Sở Thiết Kế Và Gia Công Cơ Khí\r\n\r\n', '2800000.00', NULL, 'Cuốn sách này được biên soạn theo yêu cầu dạy học chuyên ngành lắp đặt và bảo trì sửa chữa thiết bị cơ điện cùng các chuyên ngành liên quan trong các trường trung cấp nghề hiện nay của Trung Quốc, có tham khảo các quy phạm thẩm định kỹ năng nghề của các ngành nghề liên quan và tiêu chuẩn cấp bậc công nhân kỹ thuật. Cuốn sách này kết hợp với thực tế của các trường trung cấp nghề hiện tại, thống nhất quán triệt ý tưởng dạy nghề là lấy phục vụ làm tôn chỉ, lấy có việc làm làm dẫn hướng, lấy bồi dưỡng kỹ năng cho người học làm mục tiêu.\r\n', 'images/sach-45.jpg', '2018-04-20', 25, 0, 0, 1, 44, NULL),
(45, 5, 'Nhập Môn Kinh Tế Lượng Cách Tiếp Cận Hiện Đại - Introductory EconometricsA Modern Appoach', '380000.00', NULL, '\"Kinh tế lượng (econometrics) là một bộ phận của Kinh tế học, được hiểu theo nghĩa rộng là môn khoa học kinh tế giao thoa với thống kê và toán kinh tế. Hiểu theo nghĩa hẹp, là ứng dụng toán, đặc biệt là các phương pháp thống kế vào kinh tế. Kinh tế lượng lý thuyết nghiên cứu các thuộc tính thống kê của các quy trình kinh tế lượng, ví dụ như: xem xét tính hiệu quả của việc lấy mẫu, của thiết kế thực nghiệm... Kinh tế lượng thực nghiệm bao gồm: (1)ứng dụng các phương pháp kinh tế lượng vào đánh giá các lý thuyết kinh tế (2) phát triển và sử dụng các mô hình kinh tế lượng, tất cả để sử dụng vào nghiên cứu quan sát kinh tế trong quá khứ hay dự đoán tương lai. Thuật ngữ Kinh tế lượng (econometrics) lần đầu tiên được sử dụng vào năm 1910 bởi Paweł Ciompa.\r\n\r\n\"\r\n', 'images/sach-46.jpg', '2018-04-06', 7, 0, 0, 1, 45, '100000.00'),
(46, 5, 'Kinh tế thành viên\r\n', '299000.00', NULL, 'Nền kinh tế thành viên là quyển sách được viết bởi một chuyên gia tư vấn, cuốn sách đột phá này sẽ cho bạn thấy làm thế nào để biến những khách hàng bình thường trở thành các thành viên trọn đời. Trong thế giới kinh doanh ngày nay, phải mất nhiều hơn một trang web để duy trì sự cạnh tranh. Những công ty thông minh nhất, thành công nhất đang sử dụng mô hình thành viên hoàn toàn mới, các định dạng dựa trên đăng ký, và cơ cấu định giá để phát triển cơ sở khách hàng của họ trong sự chuyển đổi đột phá nhất trong kinh doanh kể từ cuộc Cách mạng Công nghiệp.\r\n', 'images/sach-47.jpg', '2018-04-03', 8, 0, 0, 1, 46, NULL),
(47, 5, 'Sách Luật kinh tế chuyên khảo - 780\r\n', '267000.00', NULL, '\"Pháp luật kinh tế được hiểu là một hệ thống nhiều lĩnh vực pháp luật khá rộng, bao gồm Luật kinh tế, Luật lao động, Luật tài chính, Luật Ngân hàng, Luật Đất đai, Luật môi Trường… Khi được hình thành và phát triển ở Việt Nam từ những thập niên 80 của thế kỷ 20, Luật kinh tế được hiểu là một bộ phận của pháp luật kinh tế, là ngành luật độc lập có phạm vi, đối tượng và phương pháp điều chỉnh riêng.\r\n\r\nở Việt Nam, trong lĩnh vực nghiên cứu, khái niệm \"\"Luật Kinh tế\"\" đã dần được thay thế bằng các khái niệm: \"\"Luật thương mại\"\", \"\"Luật kinh doanh\"\" do ảnh hưởng của quá trình thay đổi kinh tế, về cơ chế quản lý kinh tế, dẫn đến những thay đổi căn bản trong điều chỉnh pháp luật đối với các quan hệ kinh tế giữa các tổ chức, cá nhân. Khi chuyển đổi sang nền kinh tế thị trường, chủ thể của Luật Kinh Tế không còn là các tổ chức kinh tế xã hội chủ nghĩa (tổ chức kinh tế nhà nước, tổ chức kinh tế tập thể) với tư cách là các đơn vị thực hiện hoạt động sản xuất theo kế hoạch được giao. Nền kinh tế không còn vận hành theo cơ chế kế hoạch hóa tập trung mà vận hành theo cơ chế thị trường, có sự quản lý của nhà nước, với nền tảng là sự công nhận quyền tự do sở hữu, quyền tự do kinh doanh, đồng thời chịu nhiều tác động tất yếu của quá trình hội nhập quốc tế.\"\r\n', 'images/sach-48.jpg', '2018-04-06', 3, 0, 0, 1, 47, NULL),
(48, 5, 'Sách Em Phải Đến Harvard Học Kinh Tế - 373', '123000.00', NULL, 'Em phải đến Harvard học kinh tế là cuốn sách tường thuật và tổng kết lại những kinh nghiệm nuôi dạy con cái từ lúc lọt lòng cho đến khi thành tài của Lưu Vệ Hoa và Trương Hân Vũ, mẹ và cha dượng của cô bé Lưu Diệc Đình - “cô gái Harvard” - thần tượng học tập của giới trẻ Trung Quốc. Sau khi xuất bản, cuốn cẩm nang này đã giữ ngôi vị best-seller trong suốt 16 tháng liên tục, lượng xuất bản lên tới gần 3 triệu bản, nhận được hưởng ứng tích cực chưa từng thấy từ các bậc phụ huynh. Nhân vật chính của cuốn sách - Lưu Diệc Đình, năm 1996 thi đỗ vào trường trung học ngoại ngữ Thành Đô sau một cuộc cạnh tranh khốc liệt. Sau vô số những nỗ lực tích cực và thành tích xuất sắc, đến năm 1999 đã nhận được giấy báo nhập học và học bổng toàn phần của bốn trường Đại học tại Hoa Kỳ, trong đó có Harvard. Sau đó, cô theo học chuyên ngành Kinh tế học và Toán ứng dụng tại Harvard, tháng 6 năm 2003 tốt nghiệp, vào làm việc trong tập đoàn tư vấn Boston (Boston Consulting Group) nổi tiếng. Hiện cô định cư tại Mỹ.\r\n', 'images/sach-49.jpg', '2018-04-07', 6, 0, 0, 1, 48, NULL),
(50, 5, 'Kinh Tế Học (Tập 1)\r\n\r\n', '149000.00', NULL, 'Kinh tế học là một khoa học động - luôn thay đổi để phản ánh những xu hướng biến chuyển của những vấn đề kinh tếm của môi trường và nền kinh tế thế giới, cũng như của xã hội nói chung. Khi kinh tế học và thế giới rộng lớn hơn xung quanh ta phát triển thì cuốn sách này cũng vậy. Mỗi một chương của nó đều bám sát những thay đổi của những phân tích kinh tế và chính sách kinh tế.\r\n', 'images/sach-50.jpg', '2018-04-14', 34, 0, 0, 1, 50, NULL),
(51, 6, 'Xã hội văn hóa\r\n', '89000.00', NULL, 'Cuốn Xã hội học văn hóa này là kết quả của quá trình học hỏi, nghiên cứu và giảng dạy nhiều năm của các tác giả cho các lớp Cao học Xã hội học ở Cơ sở Đào tạo của Viện Xã hội học, thuộc Viện Khoa học Xã hội Việt Nam, các khoa Xã hội học của các trường Đại học Khoa học Xã hội và Nhân văn, thuộc Đại học Quốc gia Hà Nội và Đại học Quốc gia Tp. Hồ Chí Minh, cũng như ở nhiều trường đại học khác.Tác giả biết rằng nghiên cứu về văn hóa, dù ở bất cứ góc độ nào, đều là việc làm khó khăn, bởi văn hóa là một khái niệm không chỉ có nội dung cực kỳ lớn, mà hình thức thể hiện của nó cũng vô cùng phức tạp, không dễ nắm bắt. Tuy nhiên, qua cuốn sách này, tác giả cũng cố xác định các ranh giớiđể thấy rõ Xã hội học văn hóa không chỉnhư một bộ môn chuyên ngành trong tương quan với các môn chuyên ngành khác của Xã hội học (như Xã hội học gia đình, Xã hội học dân số, Xã hội học nông thôn, Xã hội học đô thị…), mà nó còn có sự khu biệt với các ngành khoa học cơ bản khác cùng nghiên cứu văn hóa (như Nhân học, Dân tộc học, Văn hóa học, Triết học văn hóa…)\r\n', 'images/sach-51.jpg', '2018-04-27', 5, 0, 0, 1, 51, NULL),
(52, 6, 'Hoa văn Đại Việt\r\n', '76000.00', NULL, 'Sách Tô màu Hoa Văn Đại Việt là môt sản phẩm của dự án “Hoa Văn Đại Việt”. Cuốn sách bao gồm hình ảnh của các hoa văn, họa tiết cổ của người Việt, được thể hiện dưới định dạng vector và được ghi chú về nội dung, niên đại hoa văn.\r\n', 'images/sach-52.jpg', '2018-04-08', 2, 0, 0, 1, 52, NULL),
(53, 6, 'Đại Việt sử kí toàn thư\r\n', '120000.00', NULL, 'Đại Việt sử ký toàn thư, đôi khi gọi tắt là Toàn thư, là bộ quốc sử viết bằng văn ngôn của Việt Nam, viết theo thể biên niên, ghi chép lịch sử Việt Nam từ thời đại truyền thuyết Kinh Dương Vương năm 2879 TCN đến năm 1675 đời vua Lê Gia Tông nhà Hậu Lê.\r\n', 'images/sach-53.jpg', '2018-04-04', 7, 0, 0, 1, 53, NULL),
(54, 6, 'Sử ký Tư Mã Thiên\r\n', '95000.00', NULL, 'Sử Ký, hay Thái sử công thư là cuốn sử của Tư Mã Thiên được viết từ năm 109 TCN đến 91 TCN, ghi lại lịch sử Trung Quốc trong hơn 2500 năm từ thời Hoàng Đế thần thoại cho tới thời ông sống\r\n', 'images/sach-54.jpg', '2018-04-07', 8, 0, 0, 1, 54, NULL),
(55, 6, 'Đại Việt sử ký tục biên\r\n', '87000.00', NULL, 'Quốc sử tục biên, thường được biết tới với tên gọi Đại Việt sử ký tục biên là bộ sách sử viết về lịch sử Việt Nam giai đoạn từ năm 1676 đến năm 1789, tức từ thời Lê Hy Tông đến hết thời Lê Chiêu Thống, nối tiếp theo bộ Đại Việt sử ký toàn thư được khắc in năm Chính Hòa thứ 18\r\n', 'images/sach-55.jpg', '2018-04-19', 3, 0, 0, 1, 55, NULL),
(56, 6, 'Ngàn năm áo mũ\r\n', '98000.00', NULL, 'Ngàn năm áo mũ với tiêu đề Lịch sử trang phục Việt Nam giai đoạn 1009 - 1945, là tên một cuốn sách khảo cứu về trang phục của người Việt Nam phát hành năm 2013, dày hơn 400 trang, Nhà xuất bản Thế giới và Công ty Nhã Nam phát hành, là kết quả sau \"ba năm lao động trí óc\" của tác giả Trần Quang Đức.\r\n', 'images/sach-56.jpg', '2018-04-08', 2, 0, 0, 1, 56, NULL),
(57, 6, 'Đại Việt sử ký\r\n', '98000.00', NULL, 'Đại Việt sử ký là bộ quốc sử đầu tiên của nước Việt Nam do Lê Văn Hưu soạn ra, gồm 30 quyển, chép lịch sử Việt Nam từ Triệu Vũ Đế đến Lý Chiêu Hoàng.\r\n', 'images/sach-57.jpg', '2018-04-24', 8, 0, 0, 1, 57, NULL),
(58, 6, 'Tân ngũ đại sử\r\n', '79000.00', NULL, 'Tân Ngũ Đại sử là một sách lịch sử theo thể kỷ truyện trong 24 sách lịch sử Trung Quốc do Âu Dương Tu thời Bắc Tống biên soạn. Tên gốc ban đầu của bộ sách này là Ngũ Đại sử ký, sách hoàn thành vào năm Hoàng Hữu thứ 5.\r\n', 'images/sach-58.jpg', '2018-04-05', 9, 0, 0, 1, 58, NULL),
(59, 6, 'Đất nước Việt Nam qua các đời: nghiên \r\ncứu địa lý học lịch sử Việt Nam\r\n', '79000.00', NULL, 'Nghiên cứu phà̂n địa lý hành chính đẻ̂ nhận định cương vực của nhà nước và vị trí các khu vực hành chính trải qua các đời, rò̂i đé̂n quá trình mở mang lãnh thỏ̂. Nghiên cứu khía cạnh địa lý của những cuộc chié̂n tranh chó̂ng ngoại xâm quan trọng trong thời phong kié̂n\r\n', 'images/sach-59.jpg', '2018-04-10', 4, 0, 0, 1, 59, NULL);
INSERT INTO `sanpham` (`id`, `idLoai`, `TenSP`, `Gia`, `MoTa`, `ChiTiet`, `UrlHinh`, `NgayDang`, `TonKho`, `SoLanMua`, `SoLanXem`, `AnHien`, `ThuTu`, `GiaKhuyenMai`) VALUES
(60, 6, 'Binh pháp Tôn Tử\r\n', '140000.00', NULL, 'Tôn Tử binh pháp trong tiếng Anh nó được gọi là The Art of War và còn được gọi là Binh pháp Ngô Tôn Tử, là sách chiến lược chiến thuật chữ Hán do Tôn Vũ soạn thảo vào năm 512 TCN đời Xuân Thu, không chỉ đặt nền móng cho binh học truyền thống, mà còn sáng tạo nên một hệ thống lý luận quân sự hoàn chỉnh đầu tiên\r\n', 'images/sach-60.jpg', '2018-04-13', 5, 0, 0, 1, 60, NULL),
(107, 3, 'Tuổi Thơ Im Lặng\r\n', '32500.00', NULL, NULL, 'images/sach-update-2.jpg', '2019-03-24', 11, 0, 0, 1, 100, NULL),
(108, 4, 'Bộ Luật Hình Sự năm 2015 sửa đổi năm 2017\r\n', '86000.00', NULL, NULL, 'images/sach-update-3.png', '2019-03-24', 12, 0, 0, 1, 1, NULL),
(112, 6, 'Leonardo Da Vinci\r\n', '473500.00', NULL, NULL, 'images/sach-update-4.jpg\r\n', '2019-03-24', 20, 0, 0, 1, 112, NULL),
(114, 7, '', '0.00', NULL, NULL, '', '0000-00-00', 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `TieuDe` varchar(500) NOT NULL,
  `MoTa` text NOT NULL,
  `Url` text NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '0',
  `AnHien` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `id` int(255) NOT NULL,
  `idLT` int(255) NOT NULL,
  `urlHinh` varchar(150) DEFAULT NULL,
  `TieuDe` varchar(500) NOT NULL,
  `TomTat` text NOT NULL,
  `NoiDung` longtext NOT NULL,
  `AnHien` tinyint(4) NOT NULL DEFAULT '1',
  `NgayDang` date DEFAULT NULL,
  `idKH` int(255) NOT NULL,
  `SoLanXem` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Alias` (`Alias`);

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
