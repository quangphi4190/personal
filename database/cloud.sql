/*
 Navicat Premium Data Transfer

 Source Server         : localhost_7
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3309
 Source Schema         : cloud

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 19/12/2022 11:43:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for banners
-- ----------------------------
DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `subTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of banners
-- ----------------------------
INSERT INTO `banners` VALUES (1, 'banners/63944644723bd.png', 'Truyền thanh kỹ thuật số', NULL, '<p>Tối ưu chi phí hiệu quả theo nhu cầu sử dụng với lựa chọn thời gian thanh toán phù hợp. Giúp tiết kiệm tối đa chi phí vận hành cho cá nhân, tổ chức và doanh nghiệp.</p>', '2022-12-10 15:42:11', '2022-12-10 15:42:11');
INSERT INTO `banners` VALUES (2, 'banners/63944644723e5.png', 'Hệ thống truyền thanh trên nền tảng 4.0', NULL, '<p>Hệ thống truyền thanh mới trên nền tảng 4.0, ứng dụng các công nghệ mới với chất lượng tín hiệu vượt trội, thay thế hoàn toàn công nghệ truyền thanh tương tự</p>', '2022-12-10 15:43:00', '2022-12-10 15:43:00');

-- ----------------------------
-- Table structure for categorie_products
-- ----------------------------
DROP TABLE IF EXISTS `categorie_products`;
CREATE TABLE `categorie_products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sort` tinyint NULL DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 - ẩn; 1 - hiển thị',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feature` bigint NULL DEFAULT NULL,
  `status` bigint NULL DEFAULT 1 COMMENT '0: hủy\r\n1: kích hoạt',
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorie_products
-- ----------------------------

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sort` tinyint NULL DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 - ẩn; 1 - hiển thị',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feature` bigint NULL DEFAULT NULL,
  `status` bigint NULL DEFAULT 1 COMMENT '0: hủy\r\n1: kích hoạt',
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Giới thiệu', 'gioi-thieu', 1, 1, '2022-08-02 08:03:32', '2021-08-09 08:03:32', NULL, 1, NULL);
INSERT INTO `categories` VALUES (2, 'Bảng giá', 'bang-gia', 3, 1, '2022-08-02 08:03:32', '2021-08-04 21:33:28', NULL, 1, NULL);
INSERT INTO `categories` VALUES (3, 'Sản phẩm', 'san-pham', 4, 1, '2022-08-02 08:03:32', NULL, NULL, 1, NULL);
INSERT INTO `categories` VALUES (4, 'Tin tức', 'tin-tuc', 5, 1, '2022-08-02 08:03:32', NULL, NULL, 1, NULL);
INSERT INTO `categories` VALUES (5, 'Liên hệ', 'lien-he', 6, 1, '2022-08-02 08:03:32', NULL, NULL, 1, NULL);
INSERT INTO `categories` VALUES (6, 'Giải Pháp', 'giai-phap', 2, 1, '2022-08-02 08:03:32', NULL, NULL, 1, NULL);

-- ----------------------------
-- Table structure for configs
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of configs
-- ----------------------------
INSERT INTO `configs` VALUES (1, 'uudiem_giaipham', 'Ưu điểm Giải pháp', 'Tiêu đề mục ƯU ĐIỂM GIẢI PHÁP');
INSERT INTO `configs` VALUES (2, 'content_gp', 'Chuyển đổi số doanh nghiệp của bạn cùng các giải pháp sáng tạo, hiệu quả và mở rộng hệ thống để đáp ứng cho mọi bài toán gặp phải của doanh nghiệp', 'Content mục Ưu điểm Giải pháp');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` int NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES (1, '', 'nqphi@sdc.udn.vn', 'Nguyễn Quang Phi', 'test', '0909123123', 3, '2021-09-14 23:12:46', '2021-09-14 22:43:30');

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `image_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
  `image_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
  `image_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `text_contact` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tencongty` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES (1, '', '<pre>\r\nGTECH.DN - Giải pháp Công nghệ và Truyền thanh Kỹ thuật số. Hệ thống truyền thanh mới trên nền tảng 4.0, ứng dụng các công nghệ mới với chất lượng tín hiệu vượt trội, thay thế hoàn toàn công nghệ truyền thanh tương tự.</pre>', '6144a4509d6b7.png', '6144a57de72ec.png', '6144a57de84e0.png', '0905.142.449', 'GtechDN - Công ty TNHH MTV Giải pháp công nghệ', '2022-12-16 16:16:06', NULL, 'gtechdn@gmail.com', 'GtechDN - Công ty TNHH MTV Giải pháp công nghệ', 'Số 11 Huỳnh Mẫn Đạt - Hòa Cường Bắc - hải Châu - Đà Nẵng', 'https://www.youtube.com/watch?v=bjfEmEK3u0s', 'https://www.youtube.com/watch?v=bjfEmEK3u0s');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2016_06_01_000001_create_oauth_auth_codes_table', 1);
INSERT INTO `migrations` VALUES (4, '2016_06_01_000002_create_oauth_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2016_06_01_000004_create_oauth_clients_table', 1);
INSERT INTO `migrations` VALUES (7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_12_04_100145_create_roles_table', 1);
INSERT INTO `migrations` VALUES (10, '2019_12_04_100300_create_permissions_table', 1);
INSERT INTO `migrations` VALUES (11, '2019_12_04_100422_create_permission_role_table', 1);
INSERT INTO `migrations` VALUES (12, '2019_12_04_100727_create_role_user_table', 1);
INSERT INTO `migrations` VALUES (13, '2019_12_05_031320_create_wallets_table', 1);
INSERT INTO `migrations` VALUES (14, '2019_12_05_032259_create_transactions_table', 1);
INSERT INTO `migrations` VALUES (15, '2019_12_05_034217_create_categories_table', 1);
INSERT INTO `migrations` VALUES (16, '2019_12_05_034218_create_services_table', 1);
INSERT INTO `migrations` VALUES (17, '2019_12_05_042141_create_reports_table', 1);
INSERT INTO `migrations` VALUES (18, '2019_12_05_043923_create_notifications_table', 1);
INSERT INTO `migrations` VALUES (19, '2019_12_05_045627_create_service_payments_table', 1);
INSERT INTO `migrations` VALUES (20, '2019_12_09_092152_create_networks_table', 1);
INSERT INTO `migrations` VALUES (21, '2019_12_09_095048_create_otps_table', 1);

-- ----------------------------
-- Table structure for new_images
-- ----------------------------
DROP TABLE IF EXISTS `new_images`;
CREATE TABLE `new_images`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `news_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of new_images
-- ----------------------------
INSERT INTO `new_images` VALUES (2, '', '2022-12-11 01:06:08', '2022-12-11 01:06:08', 2);
INSERT INTO `new_images` VALUES (3, '20221211132324-cum thu_web1-5f2a1e5456e8f.png', '2022-12-11 13:23:24', '2022-12-11 13:23:24', 3);
INSERT INTO `new_images` VALUES (5, '1670739820_image_1.png', '2022-12-11 13:23:40', '2022-12-11 13:23:40', 3);
INSERT INTO `new_images` VALUES (6, '20221211132623-258625_84f61db40a7553844f5a4c71ace1f6f0.jpg', '2022-12-11 13:26:23', '2022-12-11 13:26:23', 4);
INSERT INTO `new_images` VALUES (7, '20221211132623-may-phat-thanh-fm.png', '2022-12-11 13:26:23', '2022-12-11 13:26:23', 4);
INSERT INTO `new_images` VALUES (8, '20221211140005-thumb_1000_1597300627_may-phat-thanh-fm-500w.jpg', '2022-12-11 14:00:05', '2022-12-11 14:00:05', 5);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '',
  `category_id` int NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `status` bigint NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `feature` bigint NULL DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '',
  `thuonghieu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `xuatxuthuonghieu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `sanxuattai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `quycachdonggoi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `mau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `cautao` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `gia` decimal(10, 0) NULL DEFAULT NULL,
  `sort` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, 'GTECH - GIẢI PHÁP CÔNG NGHỆ TRUYỀN THANH', 'GTECH - GIẢI PHÁP CÔNG NGHỆ TRUYỀN THANH', 1, '6394bf703175c.jpg', NULL, '2022-12-11 01:02:35', '2022-12-11 01:02:35', 0, '<p>GTECH.DN được thành lập vào 14/04/2020, GIẢI PHÁP CÔNG NGHỆ TRUYỀN THANH</p>\r\n\r\n<p>Mỗi doanh nghiệp luôn có những nỗi đau và vấn đề riêng mà chủ doanh nghiệp luôn đau đáu để tìm ra lời giải tối ưu nhất về mặt chi phí, vận hành, nâng cao chất lượng dịch vụ, trải nghiệm khách hàng, tăng doanh thu.</p>\r\n\r\n<p>Tại CloudFly, chúng tôi không chỉ dừng lại ở việc kiến tạo những nền tảng và sản phẩm công nghệ mà còn chú trọng phát triển, xây dựng những giải pháp công nghệ thiết thực, giải quyết triệt để các bài toán khó khăn của doanh nghiệp trong hành trình chuyển đổi số.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"450\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.418737855079!2d108.2102563152886!3d16.043746144380865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219bfbfb85919%3A0x1047a6f206e6458a!2zMTEgSHXhu7NuaCBN4bqrbiDEkOG6oXQsIEhvw6AgQ8aw4budbmcgQuG6r2MsIEjhuqNpIENow6J1LCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1591456237248!5m2!1svi!2s\" style=\"border:0;\" width=\"100%\"></iframe></p>', 'gtech-giai-phap-cong-nghe-truyen-thanh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `news` VALUES (2, 'Truyền thanh thông minh', 'Giải pháp truyền thanh kỹ thuật số trên nền tảng 4.0', 6, '6394bf70326f4.jpg', NULL, '2022-12-11 01:15:25', '2022-12-11 01:15:25', 0, '<h1>Giải pháp truyền thanh thông minh thế hệ mới</h1>\r\n\r\n<p>Giải pháp Truyền thanh thông minh của MobiFone ra đời nhằm giải quyết bài toán truyền thông thông tin giữa chính quyền và người dân các địa phương, cung cấp thông tin hữu ích về lợi ích, chính sách, thiên tai, hỏa hoạn, tình huống khẩn cấp, v.v. Giải pháp được phát triển dựa trên nền tảng công nghệ 4.0 và triển khai trên hạ tầng điện toán đám mây nhằm thay thế và khắc phục hoàn toàn những nhược điểm của giải pháp truyền thông có dây hay AM/ FM truyền thống như chi phí đầu tư, vận hành cao, không quản lý được thiết bị, phát thanh khó khăn, bất tiện, không lên lịch phát bản tin, nhiễu sóng, chồng chéo sóng FM. Với việc ứng dụng công nghệ IP để truyền, nhận bản tin, công nghệ IoT để quản lý các thiết bị phát thanh, công nghệ AI Text-to-speech để chuyển đổi văn bản thành bản tin phát thanh cùng nhiều công nghệ tiên tiến khác, giờ đây các địa phương có thể dễ dàng phát thanh thông tin tới người dân bằng những thiết bị phổ biến như điện thoại, máy tính bảng, laptop, PC mọi lúc, mọi nơi.</p>\r\n\r\n<p><strong>Lợi ích của giải pháp:</strong></p>\r\n\r\n<ul>\r\n	<li>Phát thanh không dây trên nền tảng data 3G/ 4G/ Internet, đảm bảo mỹ quan đô thị</li>\r\n	<li>Ứng dụng công nghệ IoT quản lý từng thiết bị phát thanh, đảm bảo thông tin luôn được thông suốt</li>\r\n	<li>Khắc phục những nhược điểm của giải pháp truyền thống như: truyền tải thông tin chậm, không đặt được lịch phát, không thu thập được phản hồi 2 chiều, không mở rộng phát triển được theo công nghệ mới, chưa bắt kịp xu thế 4.0.</li>\r\n	<li>Mang chính quyền và người dân đến gần nhau hơn. Phát huy sức mạnh tập thể</li>\r\n	<li>Hỗ trợ khai thác các dịch vụ công trực tuyến</li>\r\n	<li>Tiếp cận các dịch vụ thông minh.</li>\r\n</ul>\r\n\r\n<div class=\"prdBlk prdTemp--feature-1\">\r\n<div class=\"container\">\r\n<div class=\"justify-content-center row\">\r\n<div class=\"col-md-8\">\r\n<div class=\"align--center sectionTitle\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'truyen-thanh-thong-minh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `news` VALUES (3, 'Bộ thu Fm', 'Bộ thu FM chuyên dụng kép', 3, 'Sản phẩm/639576d608f0d.png', NULL, '2022-12-11 13:23:24', '2022-12-11 13:23:24', 0, '<p>Chức năng thu:</p>\r\n\r\n<p>+ Thu tần số thấp dãi tần 54-&nbsp;68MHz hoặc dãi tần cao 88- 108MHz</p>\r\n\r\n<p>1) Công suất ra loa:</p>\r\n\r\n<p>Cụm thu không dây có công suất ra 30-40W&nbsp;x 2 trong dải tần số 54- 68MHz và 88&nbsp;&ndash;&nbsp;108MHz</p>\r\n\r\n<p>2) Độ nhạy:</p>\r\n\r\n<p>Từ 8,6 &ndash; 12dB&mu;V trong dải tần 54- 68MHz<br />\r\nTừ 8 &ndash; 16.5 dB&mu;V trong dải 88-108MHz</p>\r\n\r\n<p>3) Tỷ số tạp âm trên nhiễu (S/N):</p>\r\n\r\n<p>Từ 50 &ndash; 60dB trong dải tần 54- 68MHz và&nbsp;trong dải 88-108MHz</p>\r\n\r\n<p>4) Độ méo:</p>\r\n\r\n<p>Từ 0,33 &ndash; 0,35% trong dải tần 54- 68MHz<br />\r\nTừ 0,33 &ndash; 0,4% trong dải 88-108MHz<br />\r\nĐiện áp sử dụng 220VAC &plusmn; 10%, tần số (50 &ndash;&nbsp;60) Hz</p>\r\n\r\n<p>Các chức năng:</p>\r\n\r\n<p>Dò tần số bằng Phím nhấn Up/Dow<br />\r\nSố kênh giải mã :&nbsp;100 kênh RDS và 10 kênh DAB<br />\r\nCó chức năng dò sóng tự động và bằng tay<br />\r\nTự động tắt khi không thu được tín hiệu từ&nbsp;máy phát trung tâm.<br />\r\nHiển thị: Hiển thị bằng Led 7 đoạn<br />\r\nVỏ: bằng nhôm đúc.<br />\r\nCông suất ra loa: 50W(Max)</p>', 'bo-thu-fm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `news` VALUES (4, 'Máy phát FM', 'Ứng dụng công nghệ điều khiển bằng vi xử lý, hiển thị thông số trên màn hình LCD', 3, 'Sản phẩm/639577d7b6a7c.png', NULL, '2022-12-11 13:53:30', '2022-12-11 13:53:30', 0, '<p>Máy phát thanh đạt hiệu suất và độ tin cậy cao. Bộ công suất được sản xuất bằng linh kiên MOSFET dải rộng, nguồn cung cấp Switching đảm bảo nguồn điện cung cấp cho máy phát ổn định</p>\r\n\r\n<p>Ứng dụng công nghệ điều khiển bằng vi xử lý, hiển thị thông số trên màn hình LCD</p>', 'may-phat-fm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `news` VALUES (5, 'Máy phát thanh FM-500W', 'Máy phát thanh FM-500W, giải nhiệt bằng không khí do Công ty Cổ phần công nghệ điện tử viễn thông TTO Việt Nam sản xuất bằng công nghệ tiên tiến và quy trình sản xuất  tuân theo tiêu chuẩn  quản lý chất lượng ISO 9001:2015.', 3, 'Sản phẩm/63957fd1d73fa.jpg', NULL, '2022-12-11 14:00:05', '2022-12-11 14:00:05', 0, '<p>Máy phát thanh đạt tiêu chuẩn&nbsp;TCVN 6850-1:2001, TCVN 6850-2:2001&nbsp;và phù hợp quy chuẩn kỹ thuật&nbsp;QCVN 30:2011/BTTTT.</p>\r\n\r\n<p>Máy phát thanh&nbsp;có bộ khuếch đại công suất dùng transistor công nghệ LDMOS, đảm bảo mức tuyến tính cao, hiệu suất cao. Nhờ linh kiện dán bề mặt có chất lượng&nbsp; và cấu trúc bền, do vậy máy phát thanh có thể hoạt động dưới điều kiện môi trường xấu nhất với chế độ bảo dưỡng tối thiểu.</p>\r\n\r\n<p>Cấu trúc máy được module hóa thuận tiện trong việc vận hành, bảo dưỡng, sữa chữa hay nâng cấp. Hệ thống khung rack, giá đỡ tiêu chuẩn 19&rdquo;, cấu trúc cơ khí chắc chắn được phun sơn tĩnh điện.</p>', 'may-phat-thanh-fm-500w', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for notifications
-- ----------------------------
DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 - chưa đọc; 1 - đã đọc',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `notifications_user_id_foreign`(`user_id` ASC) USING BTREE,
  CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of notifications
-- ----------------------------

-- ----------------------------
-- Table structure for oauth_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE `oauth_access_tokens`  (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint NULL DEFAULT NULL,
  `client_id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `oauth_access_tokens_user_id_index`(`user_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of oauth_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for oauth_auth_codes
-- ----------------------------
DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE `oauth_auth_codes`  (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint NOT NULL,
  `client_id` int UNSIGNED NOT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of oauth_auth_codes
-- ----------------------------

-- ----------------------------
-- Table structure for oauth_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE `oauth_clients`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint NULL DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `redirect` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `oauth_clients_user_id_index`(`user_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of oauth_clients
-- ----------------------------

-- ----------------------------
-- Table structure for oauth_personal_access_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE `oauth_personal_access_clients`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `oauth_personal_access_clients_client_id_index`(`client_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of oauth_personal_access_clients
-- ----------------------------

-- ----------------------------
-- Table structure for oauth_refresh_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE `oauth_refresh_tokens`  (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `oauth_refresh_tokens_access_token_id_index`(`access_token_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of oauth_refresh_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for otps
-- ----------------------------
DROP TABLE IF EXISTS `otps`;
CREATE TABLE `otps`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_incorrect_attempts` tinyint NULL DEFAULT 0,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `otpable_id` bigint NULL DEFAULT NULL,
  `otpable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of otps
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('a@gmail.com', '$2y$10$bh2i3wR3tC5Zr3XpgRzRg.D70lH86NvU.y7HDPwMdy/4d/f75Rnmm', '2019-12-20 11:57:42');
INSERT INTO `password_resets` VALUES ('admin@gmail.com', '$2y$10$eKrIoEUahm3rweT9PgJGX.Bbnj0MCIu9SePnqN3fFy/XnByZxoFOS', '2020-04-27 21:16:52');
INSERT INTO `password_resets` VALUES ('nqphi@sdc.udn.vn', '$2y$10$7nFkfFadUWYmgfiO/GatWuefPL4i1uf2s14Rr7kUvvRv9Ti.icIlW', '2020-04-27 21:17:31');

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `permission_role_role_id_foreign`(`role_id` ASC) USING BTREE,
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES (1, 7);
INSERT INTO `permission_role` VALUES (2, 9);

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `method` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'Tất cả các quyền', '*', '[]', NULL, '2019-12-31 09:52:45', '2019-12-31 09:52:45', NULL);
INSERT INTO `permissions` VALUES (2, 'Đăng Tin tức', '/tin-tuc', '[]', '/news*\r\n/quan-ly', '2019-12-31 09:54:00', '2020-11-05 21:20:51', NULL);

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `feature` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of photos
-- ----------------------------

-- ----------------------------
-- Table structure for regions
-- ----------------------------
DROP TABLE IF EXISTS `regions`;
CREATE TABLE `regions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of regions
-- ----------------------------

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `user_id`) USING BTREE,
  INDEX `role_user_user_id_foreign`(`user_id` ASC) USING BTREE,
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES (7, 1);
INSERT INTO `role_user` VALUES (7, 32);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `active` bigint NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (7, 'Quản trị hệ thống', '', '2019-12-26 16:06:38', '2019-12-30 10:07:06', NULL, 1);
INSERT INTO `roles` VALUES (9, 'Đăng tin', 'Chỉ có quyền đăng tin tức sự kiện, giới thiệu, Liên hệ', '2019-12-30 09:57:29', '2020-10-26 14:56:54', NULL, 1);
INSERT INTO `roles` VALUES (11, 'Quản ly danh mục', 'Chỉ có chức năng đăng tin Ngoại ngữ - Tin học, Tra cứu và đăng ký trực tuyến, Tuyển sinh, Tra cứu điểm thi', '2019-12-30 10:07:18', '2020-10-26 14:56:19', NULL, 1);
INSERT INTO `roles` VALUES (12, 'Quản lý banner', 'Chức năng đăng tin Thông tin đào tạo(....)', '2020-10-26 14:36:48', '2020-10-26 14:57:34', NULL, 1);

-- ----------------------------
-- Table structure for statistics_content
-- ----------------------------
DROP TABLE IF EXISTS `statistics_content`;
CREATE TABLE `statistics_content`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `total` int NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `order` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of statistics_content
-- ----------------------------
INSERT INTO `statistics_content` VALUES (3, 'Tỉnh thành', 16, 'fa-solid fa-tower-cell', '2022-12-10 23:24:51', '2022-12-10 15:36:03', 1);
INSERT INTO `statistics_content` VALUES (4, 'Thiết bị lắp đặt', 546, 'fa-solid fa-tower-broadcast', '2022-12-10 23:25:38', '2022-12-10 15:36:16', 2);
INSERT INTO `statistics_content` VALUES (5, 'Sản phẩm', 561, 'fa-solid fa-walkie-talkie', '2022-12-10 23:25:48', '2022-12-10 15:36:28', 3);
INSERT INTO `statistics_content` VALUES (6, 'Khách hàng', 150, 'fa-solid fa-users', '2022-12-10 23:26:00', '2022-12-10 15:36:37', 4);

-- ----------------------------
-- Table structure for supports
-- ----------------------------
DROP TABLE IF EXISTS `supports`;
CREATE TABLE `supports`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `order` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of supports
-- ----------------------------
INSERT INTO `supports` VALUES (6, 'Live Chat', '<p>Bạn có câu hỏi? Hãy chat ngay với nhân viên tư vấn để được giải quyết</p>', 'Supports/6395ba9795d16.png', '2022-12-11 18:10:32', '2022-12-11 18:10:32', 3);
INSERT INTO `supports` VALUES (7, 'Gửi Email', '<p>Kênh tiếp nhận yêu cầu hỗ trợ dịch vụ dành cho khách hàng của GTECH</p>', 'Supports/6395ba9795a6a.png', '2022-12-11 18:10:50', '2022-12-11 18:10:50', 2);
INSERT INTO `supports` VALUES (8, 'Hotline (24/7)', '<p><a class=\"font-size-24 text-primary font-weight-bold\" href=\"tel:0905142449\">0905.142.449</a></p>', 'Supports/6395ba589aa2d.png', '2022-12-16 16:16:36', '2022-12-11 18:11:17', 1);

-- ----------------------------
-- Table structure for system_content
-- ----------------------------
DROP TABLE IF EXISTS `system_content`;
CREATE TABLE `system_content`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `order` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of system_content
-- ----------------------------
INSERT INTO `system_content` VALUES (2, 'Thiết bị tự động tích hợp', '<p>Tự động kết nối và điều khiển hệ thống truyền thanh vô tuyến và hữu tuyến. Giảm thiểu chi phí đầu tư mới, tận dụng hệ thống truyền thanh cũ. Hỗ trợ nhiều loại kết nối mạng: WiFi, Ethernet, 3G, 4G.</p>', 'fa-solid fa-camera-retro', '2022-12-10 14:53:33', '2022-12-10 14:53:33', 6);
INSERT INTO `system_content` VALUES (3, 'Ứng dụng trên nền tảng web', '<p>Điều khiển hệ thống mọi lúc mọi nơi trên các trình duyệt phổ biến: Chrome, Firefox, Microsoft Edge, Cốc Cốc,...</p>', 'fa-solid fa-satellite', '2022-12-10 14:53:56', '2022-12-10 14:53:56', 5);
INSERT INTO `system_content` VALUES (4, 'Ứng dụng trên thiết bị di động', '<p>Sẵn sàng trên 2 nền tảng Android/iOS. Hỗ trợ nghe trực tiếp, kiểm soát tất cả các chương trình đang phát và nghe lại các chương trình đã phát. Cấu hình, điều chỉnh, cập nhật thông tin thiết bị.</p>', 'fa-solid fa-hard-drive', '2022-12-10 14:54:09', '2022-12-10 14:54:09', 4);
INSERT INTO `system_content` VALUES (5, 'Hệ thống máy chủ', '<p>Hệ thống máy chủ có cấu hình mạnh, băng thông lớn, được đặt ở các trung tâm dữ liệu chuyên nghiệp của FPT và được bảo vệ bởi nhiều lớp tường lửa.</p>', 'fa-solid fa-ear-listen', '2022-12-10 14:54:19', '2022-12-10 14:54:19', 3);
INSERT INTO `system_content` VALUES (6, 'Phần mềm điều khiển', '<p>Phần mềm điều khiển chạy trên hệ điều hành Windows, giao diện trực quan, bắt mắt, thao tác vận hành nhanh chóng, an toàn.</p>', 'fa-solid fa-microchip', '2022-12-10 14:54:54', '2022-12-10 14:54:54', 2);
INSERT INTO `system_content` VALUES (7, 'Thiết bị truyền thanh số IPS.', '<p>IPS được lắp đặt cùng loa thông báo nhằm hỗ trợ và tăng cường công tác truyền thông giữa chính quyền với người dân qua mạng Internet. Khả năng kết nối đến thiết bị IoT khác. Mở rộng tính năng, cập nhật phần mềm từ xa....</p>', 'fa-solid fa-satellite-dish', '2022-12-10 15:04:16', '2022-12-10 14:55:04', 1);

-- ----------------------------
-- Table structure for system_solution
-- ----------------------------
DROP TABLE IF EXISTS `system_solution`;
CREATE TABLE `system_solution`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `order` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of system_solution
-- ----------------------------
INSERT INTO `system_solution` VALUES (9, 'Chất lượng tín hiệu vượt trội', '<p>Lưu trữ dữ liệu website dễ dàng và đáng tin cậy cho doanh nghiệp, tổ chức hay dự án của bạn</p>', 'fa-sharp fa-solid fa-signal', '2022-12-10 23:19:46', '2022-12-10 15:27:44', 1);
INSERT INTO `system_solution` VALUES (10, 'Tiết kiệm chi phí', '<p>Xây dựng Game Server của bạn trên CloudFly nhanh chóng và dễ dàng với các tùy chọn tính toán linh hoạt</p>', 'fa-solid fa-money-bill-1-wave', '2022-12-10 23:21:05', '2022-12-10 15:27:56', 2);
INSERT INTO `system_solution` VALUES (11, 'Bảo mật hệ thống', '<p>Xây dựng nhanh chóng các máy chủ Frontend/Backend của Web và ứng dụng di động của bạn</p>', 'fa-sharp fa-solid fa-network-wired', '2022-12-10 23:21:15', '2022-12-10 15:28:07', 3);
INSERT INTO `system_solution` VALUES (12, 'Quản lý hiệu quả', '<p>Giải pháp xây dựng hệ thống cung cấp máy chủ ảo sử dụng nền tảng điện toán đám mây OpenStack</p>', 'fa-sharp fa-solid fa-list-check', '2022-12-10 23:21:26', '2022-12-10 15:28:22', 4);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `reward_points` bigint NULL DEFAULT 0,
  `accumulated_points` bigint NULL DEFAULT 0,
  `device_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `fcm_token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_phone_unique`(`phone` ASC) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'admin@gmail.com', '0905353617', '41 Lê Duẩn', 'Đà Nẵng', '6394bf703175c.jpg', 0, 0, NULL, NULL, NULL, '$2y$10$co/0rm.dY0/Y.XLW6ZxFkOQmhVBJ1S.9dEeP9CtL06HdjjJCkFUeq', '2tEsbUsFZ2NOCQBx1WhrhOtSkPcB1QojFzJtqr1mz7sPPFedJy92jY8Pg335', '2019-12-16 10:56:38', '2022-12-11 18:31:03', NULL, 'admin');
INSERT INTO `users` VALUES (32, 'Bác Ba Phi', 'nqphi4190@gmail.com', '0905353618', 'bacbaphi', 'bacbaphi', '', 0, 0, NULL, NULL, NULL, '$2y$10$qKKPxlsQ0BA2qgHZPG/NlOpPanMfsfBVHkxjxMQqF2ZEUFQpANbUC', NULL, '2022-12-11 19:54:55', '2022-12-11 19:54:55', NULL, 'bacbaphi');

SET FOREIGN_KEY_CHECKS = 1;
