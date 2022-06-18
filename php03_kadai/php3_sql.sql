-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2021 年 4 月 02 日 15:08
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_db3`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `spotname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `spoturl` text COLLATE utf8_unicode_ci,
  `spotreview` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--

INSERT INTO `gs_bm_table` (`id`, `spotname`, `spoturl`, `spotreview`, `indate`) VALUES;

ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
