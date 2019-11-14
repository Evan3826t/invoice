-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-14 16:15:41
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `award`
--

CREATE TABLE `award` (
  `id` int(10) NOT NULL,
  `year` int(4) NOT NULL,
  `period` int(2) NOT NULL,
  `sp1` int(8) NOT NULL,
  `sp2` int(8) NOT NULL,
  `jackpot1` int(8) NOT NULL,
  `jackpot2` int(8) NOT NULL,
  `jackpot3` int(8) NOT NULL,
  `six1` int(3) NOT NULL,
  `six2` int(3) NOT NULL,
  `six3` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award`
--

INSERT INTO `award` (`id`, `year`, `period`, `sp1`, `sp2`, `jackpot1`, `jackpot2`, `jackpot3`, `six1`, `six2`, `six3`) VALUES
(2, 2019, 1, 73548843, 5318324, 53143218, 13018132, 20135420, 513, 120, 213);

-- --------------------------------------------------------

--
-- 資料表結構 `deposited`
--

CREATE TABLE `deposited` (
  `id` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `period` int(2) NOT NULL,
  `Enum` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num` int(10) NOT NULL,
  `expend` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `deposited`
--
ALTER TABLE `deposited`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award`
--
ALTER TABLE `award`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `deposited`
--
ALTER TABLE `deposited`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
