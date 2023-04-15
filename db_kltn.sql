-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 09, 2023 lúc 08:16 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_kltn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyennganh`
--

CREATE TABLE `chuyennganh` (
  `CN_machuyennganh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CN_tenchuyennganh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Khoa_makhoa` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyennganh`
--

INSERT INTO `chuyennganh` (`CN_machuyennganh`, `CN_tenchuyennganh`, `Khoa_makhoa`) VALUES
('HTTT', 'Hệ thống thông tin', 'CNTT'),
('KHMT', 'Khoa học máy tính', 'CNTT'),
('KTPM', 'Kỹ thuật phần mềm', 'CNTT'),
('Marketing', 'Marketing', 'QTKD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detai`
--

CREATE TABLE `detai` (
  `DeTai_madetai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DeTai_tendetai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DeTai_mota` text COLLATE utf8_unicode_ci NOT NULL,
  `DeTai_yeucau` text COLLATE utf8_unicode_ci NOT NULL,
  `DeTai_kienthuccanco` text COLLATE utf8_unicode_ci NOT NULL,
  `Loai_maloai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Gv_id` int(11) UNSIGNED NOT NULL,
  `DeTai_trangthai` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Tbm_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detai`
--

INSERT INTO `detai` (`DeTai_madetai`, `DeTai_tendetai`, `DeTai_mota`, `DeTai_yeucau`, `DeTai_kienthuccanco`, `Loai_maloai`, `Gv_id`, `DeTai_trangthai`, `Tbm_id`) VALUES
('DT1', 'Xây dựng phần mềm quản lý khóa luận tốt nghiệp', 'Xây dựng các phần mềm bằng ngôn ngữ lập trình đã học như:php, java,...', 'Tạo phần mềm quản lý khóa luận ', '- Kỹ năng code\r\n- Kỹ năng thuyết trình\r\n- Kỹ năng viết word', 'XDPM', 1, 'Đã duyệt', 1),
('DT2', 'Nghiên cứu các ứng dụng thực tế ảo có trên thị trường Việt Nam', 'Nghiên cứu các công nghệ thực tế ảo', 'Mô tả được quy trình hoạt động của thực tế ảo', 'Biết tóm tắt tài liệu, Tìm hiểu thông tin từ các nguồn,...', 'TTA', 4, 'Chưa duyệt', 1),
('DT3', 'Tạo một website bán điện thoại di động', 'Tạo được một website cho phép người dùng có thể mua, đặt hàng và người quản trị có thể quản lý nó', '- Hoàn thành các chức năng cơ bản như: Mua, Bán, đặt hàng, quản lý,...', '- Cần có các kiến thức về code và ngôn ngữ lập trình', 'TMDT', 9, 'Đã duyệt', 1),
('DT4', 'Kiểm tra, phân tích về hệ thống ERP của doanh nghiệp đang thực tập', 'Biết được các chức năng cơ bản và quy trình thực hiện của một hệ thống ERP', 'Đã tìm được doanh nghiệp thực tập và có sử dụng ERP vào hệ thống', 'Kiến thức về ERP', 'PTTDCHT', 10, 'Chưa duyệt', 1),
('DT5', 'Tìm hiểu về odoo và thêm các chức năng khác vào odoo', 'Tìm hiểu và phát triển phần mềm odoo', 'Biết về odoo', 'Odoo, kỹ năng lập trình,...', 'HDTNDN', 9, 'Đã duyệt', 1),
('DT6', 'bihwbigawiefgauwebfv', 'ng thể hiện trong thơ tư tưởng nhân sinh mới mẻ, tạo một bước phát triển hơn về tư tưởng nhân văn trong văn học dân tộc. Đó là ý nghĩa và giá trị một đời người không ở chỗ sống dài hay sống ngắn mà ở chất lượng sống mà chất lượng sống cao nhất là tuổi trẻ và tình yêu là phẩm chất, năng lượng của tuổi trẻ.ơ ông là vũ trụ xuân và tình. Thơ ông không lơ lửng ở trên không mà đặt nền móng rất vững, rất sâu trên mảnh đất trần gian.', ' kwda vkj,dwvn, ưdv', 'wdvmnw dvkWV JKwb jvƯ', 'PTTDCHT', 6, 'Đã duyệt', 1),
('DT7', 'tooi là ai đây là đâu trời đất ơi chết tổi ha ho le ta ba name suhyyama erasuka nát nãi ma kaf cong', 'dvaasc', 'svca', 'áv', 'TMDT', 6, 'Đã duyệt', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detai_hoidong`
--

CREATE TABLE `detai_hoidong` (
  `DetaiHoidong_id` int(11) NOT NULL,
  `Hd_mahoidong` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DeTai_madetai` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detai_hoidong`
--

INSERT INTO `detai_hoidong` (`DetaiHoidong_id`, `Hd_mahoidong`, `DeTai_madetai`) VALUES
(1, 'HD1', 'DT1'),
(2, 'HD2', 'DT2'),
(3, 'HD3', 'DT3'),
(4, 'HD4', 'DT4'),
(5, 'HD5', 'DT5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemkhoaluan`
--

CREATE TABLE `diemkhoaluan` (
  `DiemKL_id` int(11) UNSIGNED NOT NULL,
  `DiemKL_diem` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiemKL_ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `Sv_id` int(11) UNSIGNED NOT NULL,
  `Gv_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemthuctap`
--

CREATE TABLE `diemthuctap` (
  `Diemtt_id` int(11) UNSIGNED NOT NULL,
  `Diemtt_diem` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Diemtt_ghichu` text COLLATE utf8_unicode_ci NOT NULL,
  `Sv_id` int(11) UNSIGNED NOT NULL,
  `Gv_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dssv_detai`
--

CREATE TABLE `dssv_detai` (
  `DssvDt_id` int(11) UNSIGNED NOT NULL,
  `DeTai_madetai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Sv_id` int(11) UNSIGNED NOT NULL,
  `Nhom_manhom` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `Gv_id` int(11) UNSIGNED NOT NULL,
  `Gv_hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gv_sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Gv_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gv_gioitinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Gv_ngaysinh` date NOT NULL,
  `Gv_diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CN_machuyennganh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Khoa_makhoa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Tbm_id` int(11) UNSIGNED NOT NULL,
  `users_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`Gv_id`, `Gv_hoten`, `Gv_sdt`, `Gv_email`, `Gv_gioitinh`, `Gv_ngaysinh`, `Gv_diachi`, `CN_machuyennganh`, `Khoa_makhoa`, `Tbm_id`, `users_id`) VALUES
(1, 'Trần Thị Kim Chi', '0348767452', 'kimchi@gmail.com', 'Nữ', '1980-03-01', 'Gò Vấp, TP.HCM', 'HTTT', 'CNTT', 3, 3),
(2, 'Phùng Thanh ', '0945673845', 'phungthanh@gmail.com', 'Nam', '1980-03-13', 'Tân Bình, TP.HCM', 'KHMT', 'CNTT', 1, 7),
(3, 'Phạm Thị Lý', '0445678345', 'thily@gmail.com', 'Nữ', '1976-03-09', 'Quận 10, TP.HCM', 'KTPM', 'CNTT', 1, 8),
(4, 'Trần Đông', '0985576435', 'dong@gmail.com', 'Nam', '1990-03-15', 'Bình Thạnh', 'HTTT', 'CNTT', 1, 9),
(5, 'Lý Thị Đô', '0465748564', 'thido@gmail.com', 'Nữ', '1987-03-22', 'Củ chi, TP.HCM', 'KHMT', 'CNTT', 1, 10),
(6, 'Lý Tịnh', '0348764345', 'tinhly@gmail.com', 'Nam', '1879-03-16', 'Tân Bình, TP.HCM', 'KTPM', 'CNTT', 1, 11),
(7, 'Phạm Thị Thy', '0348769899', 'thythy@gmail.com', 'Nữ', '1879-03-16', 'Quận 1, TP.HCM', 'HTTT', 'CNTT', 1, 12),
(8, 'Phạm Đông Hy', '0348554452', 'donghy@gmail.com', 'Nam', '1988-03-15', 'Gò Vấp, TP.HCM', 'KTPM', 'CNTT', 1, 13),
(9, 'Phạm Thị Nữ', '0998678345', 'nunu@gmail.com', 'Nữ', '1977-03-15', 'Quận 11, TP.HCM', 'KTPM', 'CNTT', 1, 14),
(10, 'Phạm Nam', '0455678345', 'nam@gmail.com', 'Nam', '1890-03-27', 'Quận 5, TP.HCM', 'KHMT', 'CNTT', 1, 15),
(35, 'aaaaa', '09495955', '', 'Nữ', '2023-04-11', 'govap', 'KHMT', 'QTKD', 3, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hedaotao`
--

CREATE TABLE `hedaotao` (
  `Hdt_mahe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Hdt_tenhe` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hedaotao`
--

INSERT INTO `hedaotao` (`Hdt_mahe`, `Hdt_tenhe`) VALUES
('CĐ', 'Cao đẳng'),
('DH', 'Đại học'),
('LT', 'Liên thông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoidong`
--

CREATE TABLE `hoidong` (
  `Hd_mahoidong` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Hd_tenhoidong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gv_id` int(11) UNSIGNED NOT NULL,
  `Hd_thuky` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Hd_uyvien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tbm_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoidong`
--

INSERT INTO `hoidong` (`Hd_mahoidong`, `Hd_tenhoidong`, `Gv_id`, `Hd_thuky`, `Hd_uyvien`, `Tbm_id`) VALUES
('HD1', 'Hội đồng 1', 1, 'Lý Thị Đô', 'Lý Tịnh', 1),
('HD2', 'Hội đồng 2', 10, 'Phạm Thị Lý', 'Phạm Đông Hy', 1),
('HD3', 'Hội đồng 3', 6, 'Phạm Thị Nữ', 'Trần Đông', 1),
('HD4', 'Hội đồng 4', 2, 'Phùng Thanh', 'Phạm Thị Nữ', 1),
('HD5', 'Hội đồng 5', 9, 'Phạm Thị Nữ', 'Trần Đông', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `Khoa_makhoa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Khoa_tenkhoa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Khoa_mota` text COLLATE utf8_unicode_ci NOT NULL,
  `Tbm_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`Khoa_makhoa`, `Khoa_tenkhoa`, `Khoa_mota`, `Tbm_id`) VALUES
('CNTT', 'Công nghệ thông tin', 'Khoa Công Nghệ Thông Tin (CNTT) có tiền thân là khoa Toán – Tin ra đời năm 1997 – cùng thời điểm thành lập trường Đại học Tôn Đức Thắng. Đến ngày 02/03/2012, Khoa được tách ra và đổi tên thành Khoa CNTT đảm nhận vai trò đào tạo nguồn nhân lực chuyên sâu trong lĩnh vực Khoa học Máy tính để đáp ứng nhu cầu cho sự phát triển bền vững của xã hội. Sau khi tốt nghiệp, sinh viên Khoa CNTT không những được trang bị khả năng lập trình tốt mà còn được trang bị các kiến thức về phân tích thiết kế hệ thống, quản trị mạng, thiết kế web, quản trị và phát triển các hệ thống thông tin cho các cơ quan, tổ chức, doanh nghiệp.', 1),
('QTKD', 'Quản trị kinh doanh', 'Quá trình vận hành của một doanh nghiệp rất phức tạp và có thể bị tác động bởi nhiều yếu tố khác nhau. Để một doanh nghiệp có thể tồn tại và phát triển tốt, việc kiểm tra và giám sát quá trình kinh doanh là rất cần thiết. Như một điều tất yếu, ngành Quản trị Kinh doanh đã ra đời. Vậy ngành Quản trị kinh doanh là gì? Cùng Swinburne Vietnam Alliance Program tìm hiểu về ngành học này nhé!', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaidetai`
--

CREATE TABLE `loaidetai` (
  `Loai_maloai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Loai_tenloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Loai_mota` text COLLATE utf8_unicode_ci NOT NULL,
  `Loai_thangchamdiem` text COLLATE utf8_unicode_ci NOT NULL,
  `Loai_tieuchicham` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaidetai`
--

INSERT INTO `loaidetai` (`Loai_maloai`, `Loai_tenloai`, `Loai_mota`, `Loai_thangchamdiem`, `Loai_tieuchicham`) VALUES
('HDTNDN', 'Hoạch định tài nguyên doanh nghiệp', 'Thực hiện đề tài trên nền tảng odoo', '- Chức năng có trong hệ thống đủ hay không\r\n- Mức độ hoàn thành của hệ thống\r\n- Các liên kết với Fb, Zalo,...', '- Sắp sếp, tổ chức các tài liệu\r\n- Trình bày thuyết trình\r\n- Aps dụng các kiến thức đã học\r\n- Giao tiếp với giàng viên'),
('PTTDCHT', 'Phân tích tác động của hệ thống', 'Thực hiện đề tài trên các hệ thống ERP', '- Chức năng có trong hệ thống đủ hay không\r\n- Mức độ hoàn thành của hệ thống\r\n- Các liên kết với Fb, Zalo,...', '- Sắp sếp, tổ chức các tài liệu\r\n- Trình bày thuyết trình\r\n- Áp dụng các kiến thức đã học\r\n- Giao tiếp với giàng viên'),
('TMDT', 'Thương mại điện tử', 'Tạo website quản lý các chức năng có trong đề bài như:tài khoản, khách hàng, sản phẩm,...', '- Chức năng có trong hệ thống đủ hay không\r\n- Mức độ hoàn thành của hệ thống\r\n- Các liên kết với Fb, Zalo,...', '- Sắp sếp, tổ chức các tài liệu\r\n- Trình bày thuyết trình\r\n- Aps dụng các kiến thức đã học\r\n- Giao tiếp với giàng viên'),
('TTA', 'Thực tế ảo', 'Nghiên cứu các công nghệ thực tế ảo', '- Chức năng có trong hệ thống đủ hay không\r\n- Mức độ hoàn thành của hệ thống\r\n- Các liên kết với Fb, Zalo,...', '- Sắp sếp, tổ chức các tài liệu\r\n- Trình bày thuyết trình\r\n- Aps dụng các kiến thức đã học\r\n- Giao tiếp với giàng viên'),
('XDPM', 'Xây dựng phần mềm', 'Xây dựng các phần mềm bằng ngôn ngữ lập trình đã học như:php, java,...', '- Chức năng có trong hệ thống đủ hay không\r\n- Mức độ hoàn thành của hệ thống\r\n- Các liên kết với Fb, Zalo,...', '- Sắp sếp, tổ chức các tài liệu\r\n- Trình bày thuyết trình\r\n- Aps dụng các kiến thức đã học\r\n- Giao tiếp với giàng viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `Lop_malop` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Lop_tenlop` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Hdt_mahe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NK_khoa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CN_machuyennganh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Khoa_makhoa` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`Lop_malop`, `Lop_tenlop`, `Hdt_mahe`, `NK_khoa`, `CN_machuyennganh`, `Khoa_makhoa`) VALUES
('CDHTTT15A', 'CDHTTT15A', 'CĐ', 'Khóa 15', 'HTTT', 'CNTT'),
('CDKTPM13A', 'CDKTPM13A', 'CĐ', 'Khóa 13', 'KTPM', 'CNTT'),
('CDKTPM13B', 'CDKTPM13B', 'CĐ', 'Khóa 13', 'KTPM', 'CNTT'),
('DHHTTT14', 'DHHTTT14', 'DH', 'Khóa 14', 'HTTT', 'CNTT'),
('DHHTTT15A', 'DHHTTT15A', 'DH', 'Khóa 15', 'HTTT', 'CNTT'),
('DHHTTT15B', 'DHHTTT15B', 'DH', 'Khóa 15', 'HTTT', 'CNTT'),
('DHHTTT15BC', 'DHHTTT15B', 'DH', 'Khóa 15', 'HTTT', 'CNTT'),
('DHHTTT16', 'DHHTTT16', 'DH', 'Khóa 16', 'HTTT', 'CNTT'),
('LTCNTT15A', 'LTCNTT15A', 'LT', 'Khóa 15', 'HTTT', 'CNTT'),
('LTKTPM16', 'LTKTPM16', 'LT', 'Khóa 16', 'KTPM', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
--

CREATE TABLE `nhom` (
  `Nhom_manhom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Nhom_sv1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nhom_sv2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DeTai_madetai` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nienkhoa`
--

CREATE TABLE `nienkhoa` (
  `NK_khoa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NK_namhoc` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nienkhoa`
--

INSERT INTO `nienkhoa` (`NK_khoa`, `NK_namhoc`) VALUES
('Khóa 13', '2017-1021'),
('Khóa 14', '2018-1022'),
('Khóa 15', '2019-1023'),
('Khóa 16', '2020-1024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieudangkytt`
--

CREATE TABLE `phieudangkytt` (
  `Phieu_id` int(11) UNSIGNED NOT NULL,
  `Phieu_ngaydangky` datetime NOT NULL,
  `Phieu_ngayketthuc` date NOT NULL,
  `Phieu_vitrithuctap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sv_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `Sv_id` int(11) UNSIGNED NOT NULL,
  `Sv_mssv` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Sv_hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sv_sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Sv_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sv_ngaysinh` date NOT NULL,
  `Sv_gioitinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Sv_diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NK_khoa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Hdt_mahe` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Khoa_makhoa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Lop_malop` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CN_machuyennganh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `users_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`Sv_id`, `Sv_mssv`, `Sv_hoten`, `Sv_sdt`, `Sv_email`, `Sv_ngaysinh`, `Sv_gioitinh`, `Sv_diachi`, `NK_khoa`, `Hdt_mahe`, `Khoa_makhoa`, `Lop_malop`, `CN_machuyennganh`, `users_id`) VALUES
(3, '19508221', 'Phạm Văn Trường', '0347865432', 'vantruong@gmail.com', '2001-03-04', 'nam', 'Gò Vấp, TP.HCM', 'Khóa 15', 'DH', 'CNTT', 'DHHTTT15B', 'HTTT', 5),
(4, '19525211', 'Lê Trần Anh Tiến', '0348765423', 'anhtien@gmail.com', '2001-10-10', 'nam', 'Gò Vấp, TP.HCM', 'Khóa 15', 'DH', 'CNTT', 'DHHTTT15BC', 'HTTT', 4),
(5, '12345678', 'Phạm Anh Vĩnh', '0453678453', 'anhvinh@gmail.com', '2001-03-08', 'nam', 'Quận 12, Tp.HCM', 'Khóa 13', 'DH', 'CNTT', 'DHHTTT15B', 'KTPM', 16),
(6, '12567854', 'Nguyễn Thị Nỡ', '0348765423', 'Thino@gmail.com', '2003-03-17', 'Nữ', 'Quận 11, Tp.HCM', 'Khóa 16', 'DH', 'CNTT', 'DHHTTT15B', 'HTTT', 17),
(7, '11234567', 'Lê Hữu', '0746358374', 'lehuu@gmail.com', '2003-03-15', 'nam', 'Quận 8, Tp.HCM', 'Khóa 16', 'DH', 'CNTT', 'DHHTTT16', 'KHMT', 18),
(8, '12323245', 'Trần Thị Ly', '0986745643', 'lyly@gmail.com', '2002-03-14', 'Nữ', 'Tân Bình, Tp.HCM', 'Khóa 14', 'LT', 'CNTT', 'LTKTPM16', 'KHMT', 19),
(9, '12432456', 'Trận Thị Hoa', '0453678453', 'hoatt@gmail.com', '2003-03-21', 'Nữ', 'Quận 8, Tp.HCM', 'Khóa 16', 'CĐ', 'CNTT', 'CDKTPM13B', 'KHMT', 20),
(10, '21237687', 'Lý Huệ', '0453678453', 'huehue@gmail.com', '2002-03-15', 'Nữ', 'Quận 12, Tp.HCM', 'Khóa 15', 'DH', 'CNTT', 'DHHTTT15A', 'KTPM', 21),
(11, '13436674', 'Phạm Khoa', '0348765423', 'khoapham@gmail.com', '2001-03-04', 'nam', 'Bình Thạnh, Tp.HCM', 'Khóa 15', 'CĐ', 'CNTT', 'DHHTTT15A', 'KHMT', 22),
(12, '11123323', 'Lý Thoa', '0348765423', 'thoa@gmail.com', '2000-03-29', 'Nữ', 'Gò Vấp, TP.HCM', 'Khóa 16', 'LT', 'CNTT', 'DHHTTT15BC', 'KTPM', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truongbomon`
--

CREATE TABLE `truongbomon` (
  `Tbm_id` int(11) UNSIGNED NOT NULL,
  `Tbm_hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tbm_sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Tbm_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `users_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truongbomon`
--

INSERT INTO `truongbomon` (`Tbm_id`, `Tbm_hoten`, `Tbm_sdt`, `Tbm_email`, `users_id`) VALUES
(1, 'Phan Thanh Quan', '0456382645', 'thanhquan@gmail.com', 2),
(3, 'Nguyễn Hữu Hy', '0456382645', 'huuhy@gmail.com', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `users_id` int(11) UNSIGNED NOT NULL,
  `users_username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `users_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `users_createdate` datetime NOT NULL,
  `users_role` enum('admin','truongbomon','giangvien','sinhvien') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`users_id`, `users_username`, `users_password`, `users_createdate`, `users_role`) VALUES
(1, 'admin', '123456', '2023-03-19 05:59:50', 'admin'),
(2, 'truongbomon001', '123456', '2023-03-19 06:03:30', 'truongbomon'),
(3, 'giangvien001', '123456', '2023-03-19 06:06:10', 'giangvien'),
(4, '19525211', '123456', '2023-03-19 06:06:24', 'sinhvien'),
(5, '19508221', '123456', '2023-03-19 06:06:40', 'sinhvien'),
(6, 'truongbomon002', '123456', '2023-03-19 06:29:55', 'truongbomon'),
(7, 'giangvien002', '123456', '2023-03-19 06:35:59', 'giangvien'),
(8, 'giangvien003', '123456', '2023-03-20 14:18:03', 'giangvien'),
(9, 'giangvien004', '123456', '2023-03-20 14:18:18', 'giangvien'),
(10, 'giangvien005', '123456', '2023-03-20 14:18:32', 'giangvien'),
(11, 'giangvien006', '123456', '2023-03-20 14:18:47', 'giangvien'),
(12, 'giangvien007', '123456', '2023-03-20 14:19:00', 'giangvien'),
(13, 'giangvien008', '123456', '2023-03-20 14:19:25', 'giangvien'),
(14, 'giangvien009', '123456', '2023-03-20 14:19:37', 'giangvien'),
(15, 'giangvien010', '123456', '2023-03-20 14:19:48', 'giangvien'),
(16, '12345678', '123456', '2023-03-20 14:20:32', 'sinhvien'),
(17, '12567854', '123456', '2023-03-20 14:21:07', 'sinhvien'),
(18, '11234567', '123456', '2023-03-20 14:21:20', 'sinhvien'),
(19, '12323245', '123456', '2023-03-20 14:21:38', 'sinhvien'),
(20, '12432456', '123456', '2023-03-20 14:21:50', 'sinhvien'),
(21, '21237687', '123456', '2023-03-20 14:22:04', 'sinhvien'),
(22, '13436674', '123456', '2023-03-20 14:22:19', 'sinhvien'),
(23, '11123323', '123456', '2023-03-20 14:23:34', 'sinhvien');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuyennganh`
--
ALTER TABLE `chuyennganh`
  ADD PRIMARY KEY (`CN_machuyennganh`),
  ADD KEY `Khoa_makhoa` (`Khoa_makhoa`);

--
-- Chỉ mục cho bảng `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`DeTai_madetai`),
  ADD KEY `Loai_maloai` (`Loai_maloai`),
  ADD KEY `Hd_mahoidong` (`Gv_id`),
  ADD KEY `Tbm_id` (`Tbm_id`);

--
-- Chỉ mục cho bảng `detai_hoidong`
--
ALTER TABLE `detai_hoidong`
  ADD PRIMARY KEY (`DetaiHoidong_id`),
  ADD KEY `Tbm_id` (`Hd_mahoidong`,`DeTai_madetai`),
  ADD KEY `DeTai_madetai` (`DeTai_madetai`),
  ADD KEY `Tbm_id_2` (`Hd_mahoidong`),
  ADD KEY `Tbm_id_3` (`Hd_mahoidong`),
  ADD KEY `Hd_mahoidong` (`Hd_mahoidong`);

--
-- Chỉ mục cho bảng `diemkhoaluan`
--
ALTER TABLE `diemkhoaluan`
  ADD PRIMARY KEY (`DiemKL_id`),
  ADD KEY `Sv_id` (`Sv_id`,`Gv_id`),
  ADD KEY `Gv_id` (`Gv_id`);

--
-- Chỉ mục cho bảng `diemthuctap`
--
ALTER TABLE `diemthuctap`
  ADD PRIMARY KEY (`Diemtt_id`),
  ADD KEY `Sv_id` (`Sv_id`,`Gv_id`),
  ADD KEY `Gv_id` (`Gv_id`);

--
-- Chỉ mục cho bảng `dssv_detai`
--
ALTER TABLE `dssv_detai`
  ADD PRIMARY KEY (`DssvDt_id`),
  ADD KEY `Sv_id` (`Sv_id`),
  ADD KEY `DeTai_madetai` (`DeTai_madetai`),
  ADD KEY `Nhom_manhom` (`Nhom_manhom`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`Gv_id`),
  ADD KEY `CN_machuyennganh` (`CN_machuyennganh`,`Khoa_makhoa`,`Tbm_id`,`users_id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `Tbm_id` (`Tbm_id`),
  ADD KEY `Khoa_makhoa` (`Khoa_makhoa`);

--
-- Chỉ mục cho bảng `hedaotao`
--
ALTER TABLE `hedaotao`
  ADD PRIMARY KEY (`Hdt_mahe`);

--
-- Chỉ mục cho bảng `hoidong`
--
ALTER TABLE `hoidong`
  ADD PRIMARY KEY (`Hd_mahoidong`),
  ADD KEY `Gv_id` (`Gv_id`,`Tbm_id`),
  ADD KEY `Tbm_id` (`Tbm_id`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`Khoa_makhoa`),
  ADD KEY `Tbm_id` (`Tbm_id`);

--
-- Chỉ mục cho bảng `loaidetai`
--
ALTER TABLE `loaidetai`
  ADD PRIMARY KEY (`Loai_maloai`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`Lop_malop`),
  ADD KEY `Hdt_mahe` (`Hdt_mahe`,`NK_khoa`,`CN_machuyennganh`,`Khoa_makhoa`),
  ADD KEY `NK_khoa` (`NK_khoa`),
  ADD KEY `CN_machuyennganh` (`CN_machuyennganh`),
  ADD KEY `Khoa_makhoa` (`Khoa_makhoa`);

--
-- Chỉ mục cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD PRIMARY KEY (`Nhom_manhom`),
  ADD KEY `DeTai_madetai` (`DeTai_madetai`);

--
-- Chỉ mục cho bảng `nienkhoa`
--
ALTER TABLE `nienkhoa`
  ADD PRIMARY KEY (`NK_khoa`);

--
-- Chỉ mục cho bảng `phieudangkytt`
--
ALTER TABLE `phieudangkytt`
  ADD PRIMARY KEY (`Phieu_id`),
  ADD KEY `Sv_id` (`Sv_id`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`Sv_id`),
  ADD KEY `Nhom_manhom` (`NK_khoa`,`Hdt_mahe`,`Khoa_makhoa`,`Lop_malop`,`CN_machuyennganh`,`users_id`),
  ADD KEY `Hdt_mahe` (`Hdt_mahe`),
  ADD KEY `CN_machuyennganh` (`CN_machuyennganh`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `Khoa_makhoa` (`Khoa_makhoa`),
  ADD KEY `Lop_malop` (`Lop_malop`);

--
-- Chỉ mục cho bảng `truongbomon`
--
ALTER TABLE `truongbomon`
  ADD PRIMARY KEY (`Tbm_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `detai_hoidong`
--
ALTER TABLE `detai_hoidong`
  MODIFY `DetaiHoidong_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `diemkhoaluan`
--
ALTER TABLE `diemkhoaluan`
  MODIFY `DiemKL_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `diemthuctap`
--
ALTER TABLE `diemthuctap`
  MODIFY `Diemtt_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dssv_detai`
--
ALTER TABLE `dssv_detai`
  MODIFY `DssvDt_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `Gv_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `phieudangkytt`
--
ALTER TABLE `phieudangkytt`
  MODIFY `Phieu_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `Sv_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `truongbomon`
--
ALTER TABLE `truongbomon`
  MODIFY `Tbm_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chuyennganh`
--
ALTER TABLE `chuyennganh`
  ADD CONSTRAINT `chuyennganh_ibfk_1` FOREIGN KEY (`Khoa_makhoa`) REFERENCES `khoa` (`Khoa_makhoa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `detai`
--
ALTER TABLE `detai`
  ADD CONSTRAINT `detai_ibfk_1` FOREIGN KEY (`Loai_maloai`) REFERENCES `loaidetai` (`Loai_maloai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detai_ibfk_3` FOREIGN KEY (`Gv_id`) REFERENCES `giangvien` (`Gv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detai_ibfk_4` FOREIGN KEY (`Tbm_id`) REFERENCES `truongbomon` (`Tbm_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `detai_hoidong`
--
ALTER TABLE `detai_hoidong`
  ADD CONSTRAINT `detai_hoidong_ibfk_1` FOREIGN KEY (`DeTai_madetai`) REFERENCES `detai` (`DeTai_madetai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detai_hoidong_ibfk_2` FOREIGN KEY (`Hd_mahoidong`) REFERENCES `hoidong` (`Hd_mahoidong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `diemkhoaluan`
--
ALTER TABLE `diemkhoaluan`
  ADD CONSTRAINT `diemkhoaluan_ibfk_1` FOREIGN KEY (`Gv_id`) REFERENCES `giangvien` (`Gv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diemkhoaluan_ibfk_2` FOREIGN KEY (`Sv_id`) REFERENCES `sinhvien` (`Sv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `diemthuctap`
--
ALTER TABLE `diemthuctap`
  ADD CONSTRAINT `diemthuctap_ibfk_1` FOREIGN KEY (`Gv_id`) REFERENCES `giangvien` (`Gv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diemthuctap_ibfk_2` FOREIGN KEY (`Sv_id`) REFERENCES `sinhvien` (`Sv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dssv_detai`
--
ALTER TABLE `dssv_detai`
  ADD CONSTRAINT `dssv_detai_ibfk_1` FOREIGN KEY (`DeTai_madetai`) REFERENCES `detai` (`DeTai_madetai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dssv_detai_ibfk_2` FOREIGN KEY (`Sv_id`) REFERENCES `sinhvien` (`Sv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dssv_detai_ibfk_3` FOREIGN KEY (`Nhom_manhom`) REFERENCES `nhom` (`Nhom_manhom`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`CN_machuyennganh`) REFERENCES `chuyennganh` (`CN_machuyennganh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giangvien_ibfk_3` FOREIGN KEY (`Tbm_id`) REFERENCES `truongbomon` (`Tbm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giangvien_ibfk_4` FOREIGN KEY (`Khoa_makhoa`) REFERENCES `khoa` (`Khoa_makhoa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoidong`
--
ALTER TABLE `hoidong`
  ADD CONSTRAINT `hoidong_ibfk_1` FOREIGN KEY (`Tbm_id`) REFERENCES `truongbomon` (`Tbm_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoidong_ibfk_2` FOREIGN KEY (`Gv_id`) REFERENCES `giangvien` (`Gv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD CONSTRAINT `khoa_ibfk_1` FOREIGN KEY (`Tbm_id`) REFERENCES `truongbomon` (`Tbm_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`NK_khoa`) REFERENCES `nienkhoa` (`NK_khoa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lop_ibfk_2` FOREIGN KEY (`Hdt_mahe`) REFERENCES `hedaotao` (`Hdt_mahe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lop_ibfk_3` FOREIGN KEY (`CN_machuyennganh`) REFERENCES `chuyennganh` (`CN_machuyennganh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lop_ibfk_4` FOREIGN KEY (`Khoa_makhoa`) REFERENCES `khoa` (`Khoa_makhoa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD CONSTRAINT `nhom_ibfk_1` FOREIGN KEY (`DeTai_madetai`) REFERENCES `detai` (`DeTai_madetai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phieudangkytt`
--
ALTER TABLE `phieudangkytt`
  ADD CONSTRAINT `phieudangkytt_ibfk_1` FOREIGN KEY (`Sv_id`) REFERENCES `sinhvien` (`Sv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`NK_khoa`) REFERENCES `nienkhoa` (`NK_khoa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sinhvien_ibfk_3` FOREIGN KEY (`Hdt_mahe`) REFERENCES `hedaotao` (`Hdt_mahe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sinhvien_ibfk_4` FOREIGN KEY (`CN_machuyennganh`) REFERENCES `chuyennganh` (`CN_machuyennganh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sinhvien_ibfk_5` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sinhvien_ibfk_6` FOREIGN KEY (`Khoa_makhoa`) REFERENCES `khoa` (`Khoa_makhoa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sinhvien_ibfk_7` FOREIGN KEY (`Lop_malop`) REFERENCES `lop` (`Lop_malop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `truongbomon`
--
ALTER TABLE `truongbomon`
  ADD CONSTRAINT `truongbomon_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
