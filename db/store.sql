-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-05-13 10:05:26
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `store`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customs`
--

CREATE TABLE `customs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `customs`
--

INSERT INTO `customs` (`id`, `created_time`) VALUES
(1, '2023-05-13 07:59:59'),
(2, '2023-05-13 08:04:09');

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `custom_id` int(10) UNSIGNED NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `custom_id`, `created_time`) VALUES
(1, 1, 1, '2023-05-13 07:59:59'),
(2, 6, 1, '2023-05-13 07:59:59'),
(3, 12, 1, '2023-05-13 07:59:59'),
(4, 5, 2, '2023-05-13 08:04:09'),
(5, 6, 2, '2023-05-13 08:04:09'),
(6, 10, 2, '2023-05-13 08:04:09'),
(7, 11, 2, '2023-05-13 08:04:09');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(12) NOT NULL,
  `price` int(3) UNSIGNED NOT NULL,
  `up` tinyint(1) UNSIGNED NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `up`, `created_time`, `updated_time`) VALUES
(1, '紅茶(小)', 20, 1, '2023-05-13 01:44:54', '2023-05-13 01:59:43'),
(2, '無糠豆漿', 15, 1, '2023-05-13 01:44:54', '2023-05-13 02:02:41'),
(4, '火腿三明治', 25, 1, '2023-05-13 01:44:54', '2023-05-13 01:44:54'),
(5, '紅茶(中)', 20, 1, '2023-05-13 01:48:12', '2023-05-13 01:48:12'),
(6, '肉鬆蛋吐司', 30, 1, '2023-05-13 01:48:12', '2023-05-13 01:48:12'),
(10, '蘿蔔糕', 25, 1, '2023-05-13 01:48:12', '2023-05-13 01:48:12'),
(11, '總匯三明治', 50, 1, '2023-05-13 01:55:08', '2023-05-13 01:55:08'),
(12, '柳澄汁', 50, 1, '2023-05-13 01:55:08', '2023-05-13 01:55:08'),
(13, '漢堡蛋', 35, 1, '2023-05-13 07:15:56', '2023-05-13 07:15:56');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `customs`
--
ALTER TABLE `customs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `customs`
--
ALTER TABLE `customs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
