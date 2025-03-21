-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2024 at 04:20 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xuongphp1_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL COMMENT 'ID',
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Tên',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT 'Trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`) VALUES
(1, 'Kinh doanh', 0),
(2, 'Xã hội', 0),
(3, 'Thế giới', 0),
(4, 'Giải trí', 0),
(5, 'Thể thao', 0),
(6, 'Bất động sản', 0),
(7, 'Giáo dục', 0),
(8, 'Sức khoẻ', 0),
(9, 'An ninh & Pháp luật', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL COMMENT 'ID',
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Tiêu đề',
  `description` text COLLATE utf8mb4_general_ci COMMENT 'Mô tả ngắn',
  `content` text COLLATE utf8mb4_general_ci COMMENT 'Nội dung',
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Ảnh',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT 'Trạng thái',
  `category_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `image`, `status`, `category_id`) VALUES
(1, 'Phó Thủ tướng yêu cầu xử lý nghiêm vụ sinh viên ĐH Bách Khoa Hà Nội phải ăn cơm canh thừa', 'Liên quan đến vụ việc sinh viên ĐH Bách khoa Hà Nội phải ăn cơm canh thừa, có “dị vật”, Phó Thủ tướng Lê Thành Long giao Bộ GD-ĐT chủ trì, khẩn trương chỉ đạo kiểm tra, xử lý nghiêm các sai phạm liên quan.', 'Cụ thể, trong văn bản của Văn phòng Chính phủ gửi Bộ trưởng Bộ GD-ĐT, nêu ngày 7/10, một số phương tiện thông tin đại chúng đưa tin về việc chất lượng bữa ăn không bảo đảm của sinh viên ĐH Bách Khoa Hà Nội trong hai tuần học Giáo dục Quốc phòng - An ninh.Về việc này, Phó Thủ tướng Chính phủ Lê Thành Long giao Bộ GD-ĐT chủ trì, phối hợp với các cơ quan và địa phương có liên quan khẩn trương chỉ đạo kiểm tra, xử lý nghiêm các sai phạm theo quy định.Phó Thủ tướng cũng yêu cầu Bộ GD-ĐT tăng cường chỉ đạo, quản lý, kiểm tra việc thực hiện công tác bảo đảm vệ sinh, an toàn thực phẩm cho học sinh, sinh viên trong các cơ sở giáo dục, bảo đảm chất lượng, an toàn, không để tái diễn trường hợp tương tự.Trước đó, trong sáng ngày 8/10, Thiếu tướng Trần Ngọc Thanh, Vụ trưởng Giáo dục Quốc phòng - An ninh (Bộ GD-ĐT) cùng cơ quan y tế địa phương đã trực tiếp đến kiểm tra các bếp ăn của trường này.Như VietNamNet đã đưa tin, theo phản ánh, các tân sinh viên ĐH Bách khoa Hà Nội phải ăn cơm canh thừa trong thời gian học giáo dục quốc phòng an ninh. Không những vậy, một số sinh viên cho biết nhiều lần đã phát hiện ra dị vật như gián trong thức ăn.Ngay sau khi nắm bắt được thông tin, Ban giám đốc ĐH Bách khoa Hà Nội lên tiếng trực tiếp chịu trách nhiệm, gửi lời xin lỗi và khẳng định sẽ công khai, xử lý nghiêm các tập thể, cá nhân liên quan đảm bảo quyền lợi của người học.“Đây là một sự việc đáng tiếc xảy ra, ĐH Bách khoa Hà Nội xin được gửi lời xin lỗi và mong muốn nhận được sự cảm thông, chia sẻ của các bậc phụ huynh, các em sinh viên. Nhà trường mong muốn luôn nhận được các ý kiến đóng góp của xã hội, người học để các hoạt động của Nhà trường ngày một tốt hơn”, đại diện nhà trường cho biết.', 'anh1.webp', 0, 2),
(19, 'Kết quả bóng đá Bahrain vs Indonesia, vòng loại World Cup 2026', 'Cập nhật kết quả Bahrain vs Indonesia (23h ngày 10/10). Báo Giao thông cập nhật các diễn biến hấp dẫn nhất tại vòng loại thứ ba World Cup 2026.', 'Kết quả Bahrain vs Indonesia:  Xem trực tiếp kết quả tại đây.  Đội hình xuất phát:  Bahrain: Lutfalla; Saeed, Al-Hayyam, Baqer, Adel; Al-Aswad, Haram, Marhoon, Al-Shaikh; Madan, Abduljabbar.  Indonesia: Indonesia: Paes, Verdonk, Mees Hilgers, Idzes, Walsh, Tjoe-A-On, Haye, Witan, Jenner, Oratmangoen, Struick.', '1728590185_tải xuống.jpg', 0, 5),
(21, 'Người đàn ông vỡ òa hạnh phúc, đề nghị Cảnh sát giao thông Công an Hà Nội đặt giúp tên con trai', 'ANTD.VN -Tổ công tác thuộc Đội Cảnh sát giao thông đường bộ số 1 - Phòng CSGT, Công an TP Hà Nội trong quá trình làm nhiệm vụ tuần tra đã kịp thời dùng mô tô chuyên dụng dẫn đường cho xe taxi chở sản phụ đang chuyển dạ đến bệnh viện.', 'Bệnh viện Đại học Y dược TP. Hồ Chí Minh gửi thư cảm ơn Phòng CSGT, Công an TP Hà Nội CSGT đường thuỷ Hà Nội tuần tra xuyên đêm, giúp người dân chống lũ  Các chiến sỹ CSGT dùng xe mô tô chuyên dụng mở đường cho xe taxi chở sản phụ đến bệnh viện  Khoảng 20h ngày 8/10/2024, Tổ công tác của Đội CSGT đường bộ số 1 do Đại uý Lê Đức Phong làm Tổ trưởng thực hiện nhiệm vụ trên tuyến đường Trần Nhật Duật, quận Hoàn Kiếm, khi đến trước nhà số 1, đường Trần Nhật Duật thì nhận được yêu cầu giúp đỡ của tài xế taxi biển kiểm soát 29H - 918.06 về việc nhờ Tổ công tác hỗ trợ mở đường để kịp đưa sản phụ trên xe đang chuyển dạ đến Bệnh viện.  Nhận định tình hình sản phụ N.T.M (SN 2003) trên xe, ngay lập tức Đại uý Lê Đức Phong đã báo cáo Chỉ huy đơn vị để sử dụng mô tô chuyên dụng dẫn đường cho xe chở sản phụ vào Bệnh Viện Đức Giang (quận Long Biên, Hà Nội) theo nguyện vọng của sản phụ. Nhờ kịp thời đưa sản phụ đến bệnh viện, khoảng 30 phút sau, sản phụ M. đã đón bé trai chào đời, mạnh khỏe.  Ngày 9/10, sau khi sản phụ đã ', '1728590305_22-1010-9355.jpg', 0, 3),
(25, 'Israel tiếp tục tấn công tại Lebanon và Gaza khiến hàng trăm người thương vong', 'NDO - Theo Bộ Y tế Lebanon, tối 10/10, Israel đã tiến hành các cuộc không kích dữ dội tại trung tâm thủ đô Beirut, nhắm vào Wafiq Safa - người đứng đầu Đơn vị Liên lạc và Điều phối của phong trào Hezbollah.', 'Sau cuộc không kích, đám cháy lớn và khói dày đặc bốc lên từ một tòa nhà ở al-Noueiri, khu vực đông dân cư ở trung tâm Beirut. Hình ảnh được phát trên kênh truyền hình Al Jadeed của Lebanon cho thấy các xe cứu thương được điều động đến hiện trường và đám đông đã tụ tập gần địa điểm là mục tiêu của vụ tấn công.  Các nguồn tin Lebanon còn cho biết, trong buổi chiều và tối cùng ngày, máy bay chiến đấu của Israel đã tiến hành 16 vụ tấn công ở phía nam và 9 vụ công khác ở phía đông nước này, khiến 21 người thiệt mạng và 41 người bị thương.  Cũng trong ngày 10/10, các thành viên của phong trào Hezbollah đã tấn công một xe tăng của Israel bằng các tên lửa dẫn đường ở miền nam Lebanon. Vụ tấn công xảy ra khi lực lượng bộ binh Israel với sự hỗ trợ của 5 xe tăng đang tiến về trục Ras al-Naqoura.  Trong khi đó, Lực lượng lâm thời của Liên hợp quốc tại Lebanon (UNIFIL) cho biết trong một tuyên bố, hai nhân viên gìn giữ hòa bình của Liên hợp quốc đã bị thương sau khi một xe tăng của Israel bắn vào chòi canh tại trụ sở UNIFIL ở Naqoura, miền nam Lebanon.  Ở mặt trận phía nam, các lực lượng của Israel cùng ngày đã tiến hành một cuộc không kích nhằm vào trường Rafida gần trụ sở của Hiệp hội Trăng lưỡi liềm đỏ Palestine ở Deir al-Balah, một thành phố ở trung tâm Gaza, khiến ít nhất 28 người Palestine thiệt mạng và hơn 54 người khác bị thương.  Trong một tuyên bố, quân đội Israel cho biết đã thực hiện một ', '1728619335_99efc225686a8134d87b.jpg.webp', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Mật khẩu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
