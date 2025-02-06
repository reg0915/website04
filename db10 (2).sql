-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-02-06 09:31:46
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db10`
--

-- --------------------------------------------------------

--
-- 資料表結構 `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `abouts`
--

INSERT INTO `abouts` (`id`, `text`, `sh`) VALUES
(12, '【SPC石塑地板 限時優惠  最低5折起！】\r\n想要高質感又耐磨的地板？SPC地板是您的最佳選擇！\r\n✅ 防水防潮，浴室、廚房也OK\r\n✅ 超耐刮耐磨，寵物友善無憂\r\n✅ 低甲醛、無毒環保，給家人健康守護\r\n現在購買全系列SPC地板，滿20坪再享額外95折！\r\n活動期間：即日起至XX/XX，快來搶購！', 0),
(13, '【開春裝潢大放送！SPC地板買一送一】\r\n新年新氣象，換個地板讓家更美！\r\n✨ 現在選購指定款SPC地板，享受買一送一超值優惠！\r\n 適用坪數：滿15坪即可參加\r\n 加碼好禮：消費滿30坪再送品牌踢腳線！\r\n 活動期間：XX/XX - XX/XX，數量有限，換新趁現在！', 0),
(15, '【預算有限？SPC地板超值方案幫你省！】\r\n不必花大錢，也能擁有質感居家！\r\n SPC地板優惠方案：\r\n 經濟款：每坪只要$XXXX，輕鬆換新\r\n 豪華款：滿20坪送防潮墊+專業施工折扣\r\n 適用範圍：客廳、臥室、廚房、辦公室，全屋適用！\r\n 快來預約免費丈量，讓專業團隊幫你打造夢想空間！', 0),
(16, '【SPC地板年度清倉 指定花色6折起！】\r\n 最後一波！年度清倉優惠，這次不搶就沒了！\r\n 指定SPC地板最低6折！限量款式，售完即止！\r\n 滿30坪再送品牌膠條+免費施工諮詢\r\n 銷售數量有限，來店選購更有驚喜折扣！\r\n 活動時間：XX/XX - XX/XX', 0),
(17, '                           地匠工坊專注於提供高品質的坐地板產品，無論是住宅、商業空間還是特殊場合，我們的坐地板都能為您的環境帶來舒適與美觀。我們以精湛的工藝和優質的材料為基礎，致力於創造出適合各種風格與需求的坐地板，並結合傳統手工藝與現代設計元素，為顧客提供個性化、耐用且具有藝術感的地板選擇。\r\n\r\n                            地匠工坊的坐地板系列，擁有多種款式與顏色選擇，無論是自然木紋還是現代化的簡約風，都能與您的空間完美融合。專業的安裝團隊確保每一塊地板都精確無誤地鋪設，並提供長期的保養與售後服務，讓您的每一次使用都感受到質感與舒適。\r\n\r\n                            選擇地匠工坊，就是選擇一個專業且用心的夥伴，為您的居家或商業空間打造一個溫馨且具設計感的環境。我們相信，地板不僅是空間的基礎，更是舒適生活的一部分，讓我們一起為您的空間帶來更多可能！', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 資料表結構 `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `ads`
--

INSERT INTO `ads` (`id`, `text`, `sh`) VALUES
(1, 'rererewrwer', 0),
(2, 'rererer', 1),
(3, ' 英國原裝進口｜系列櫥櫃 Belsay 靜謐灰【ON SALE】7折起', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(1) UNSIGNED NOT NULL,
  `bottom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '文藝裝潢設計公司');

-- --------------------------------------------------------

--
-- 資料表結構 `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1,
  `type` int(12) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `images`
--

INSERT INTO `images` (`id`, `img`, `sh`, `type`, `text`) VALUES
(28, '國王金杉Ⅱ.png', 1, 1, '卡拉卡塔金5555555'),
(29, '格蘭雲天.jpg', 1, 2, ''),
(35, '加州金木Ⅱ.png', 1, 3, '加州金木Ⅱ'),
(36, '庭園小屋Ⅱ.png', 1, 4, '庭園小屋Ⅱ'),
(37, '格蘭雲天.jpg', 1, 5, '格蘭雲天'),
(38, '國王金杉Ⅱ.png', 1, 6, '國王金杉Ⅱ'),
(39, '曼陀林.png', 1, 7, '曼陀林'),
(40, '蝴蝶米杉Ⅱ.png', 1, 8, '蝴蝶米杉Ⅱ'),
(41, '蝴蝶杉Ⅱ.png', 1, 9, '蝴蝶杉Ⅱ'),
(42, '藍色寶石.jpg', 1, 10, '藍色寶石'),
(43, '大利雲石灰.jpeg', 1, 11, '義大利雲石灰'),
(44, 'pexels-karolina-grabowska-4709524.jpg', 1, 12, '奶油白');

-- --------------------------------------------------------

--
-- 資料表結構 `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `href` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0,
  `main_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `menus`
--

INSERT INTO `menus` (`id`, `href`, `text`, `sh`, `main_id`) VALUES
(3, '?do=login', '管理主選單', 1, 0),
(4, 'index.php', '網站首頁', 1, 0),
(5, ' ?do=question', '問卷調查', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `mvims`
--

CREATE TABLE `mvims` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `mvims`
--

INSERT INTO `mvims` (`id`, `img`, `sh`) VALUES
(9, '裝潢1.png', 1),
(10, '裝潢3.jpg', 1),
(11, '裝潢3.png', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `mail` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `questions`
--

INSERT INTO `questions` (`id`, `name`, `mail`, `content`) VALUES
(1, 'Array', 'Array', '123'),
(2, 'Array', 'Array', 'qqweqwe'),
(3, 'qwewq', 'wqeq', 'wqewqe');

-- --------------------------------------------------------

--
-- 資料表結構 `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `titles`
--

INSERT INTO `titles` (`id`, `img`, `text`, `sh`) VALUES
(31, 'title.jpg', '文藝', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(1) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 105);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mvims`
--
ALTER TABLE `mvims`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mvims`
--
ALTER TABLE `mvims`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
