-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 年 3 朁E20 日 07:08
-- サーバのバージョン： 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samples`
--
CREATE DATABASE IF NOT EXISTS `samples` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `samples`;

-- --------------------------------------------------------

--
-- テーブルの構造 `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL COMMENT '主キー',
  `category_id` int(11) NOT NULL COMMENT 'カテゴリーID',
  `user_id` int(11) NOT NULL COMMENT 'ユーザーID',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'タイトル',
  `message` text CHARACTER SET utf8 NOT NULL COMMENT '本文',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '登録日',
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新日'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `user_id`, `title`, `message`, `created_at`, `update_at`) VALUES
(2, 0, 0, '?????', '??', '2019-03-10 12:07:51', '2019-03-10 12:07:51'),
(3, 0, 0, 'テスト投稿３', 'データベース登録\r\n編集テスト', '2019-03-10 12:12:28', '2019-03-10 12:12:28'),
(4, 0, 0, '', '', '2019-03-10 12:13:07', '2019-03-10 12:13:07'),
(5, 0, 0, '', '', '2019-03-10 12:13:12', '2019-03-10 12:13:12'),
(6, 0, 0, '', '', '2019-03-10 12:41:49', '2019-03-10 12:41:49'),
(7, 0, 0, '', '', '2019-03-10 12:42:38', '2019-03-10 12:42:38'),
(8, 0, 0, '', '', '2019-03-16 06:58:58', '2019-03-16 06:58:58'),
(9, 0, 0, '', '', '2019-03-16 07:08:10', '2019-03-16 07:08:10'),
(10, 0, 0, '', '', '2019-03-16 07:08:15', '2019-03-16 07:08:15'),
(11, 0, 0, '', '', '2019-03-16 07:09:00', '2019-03-16 07:09:00'),
(12, 0, 0, '', '', '2019-03-17 01:41:10', '2019-03-17 01:41:10'),
(13, 0, 0, '', '', '2019-03-17 01:59:27', '2019-03-17 01:59:27'),
(14, 0, 0, '', '', '2019-03-17 02:00:04', '2019-03-17 02:00:04'),
(15, 0, 0, '', '', '2019-03-19 13:27:23', '2019-03-19 13:27:23'),
(16, 0, 0, '', '', '2019-03-19 14:34:13', '2019-03-19 14:34:13'),
(17, 0, 0, '', '', '2019-03-19 14:36:58', '2019-03-19 14:36:58'),
(18, 0, 0, '', '', '2019-03-19 14:37:05', '2019-03-19 14:37:05'),
(19, 0, 0, '', '', '2019-03-19 14:40:04', '2019-03-19 14:40:04'),
(20, 0, 0, '', '', '2019-03-20 01:14:16', '2019-03-20 01:14:16');

-- --------------------------------------------------------

--
-- テーブルの構造 `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL COMMENT '主キー',
  `blog_id` int(11) NOT NULL COMMENT 'ブログ記事ID',
  `user_id` int(11) NOT NULL COMMENT 'ユーザーID',
  `category_name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'カテゴリー名',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '登録日',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新日'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `category`
--

INSERT INTO `category` (`id`, `blog_id`, `user_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 0, 0, '', '2019-03-19 14:44:36', '2019-03-19 14:44:36'),
(2, 0, 0, '', '2019-03-19 14:45:27', '2019-03-19 14:45:27'),
(3, 0, 0, '', '2019-03-19 14:47:33', '2019-03-19 14:47:33'),
(4, 0, 0, '', '2019-03-19 14:48:48', '2019-03-19 14:48:48'),
(5, 0, 0, 'プログラミング', '2019-03-20 04:24:47', '2019-03-20 04:24:47'),
(6, 0, 0, '日記', '2019-03-20 04:25:04', '2019-03-20 04:25:04');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT '主キー',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'ユーザー名',
  `email` varchar(255) NOT NULL COMMENT 'メールアドレス',
  `password` varchar(255) NOT NULL COMMENT 'パスワード',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '登録日',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新日'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, '', '', '', '2019-02-09 13:03:20', '2019-02-09 13:03:20'),
(3, 'Suzuki Kengo', 'kengo@mail.com', 'kengo123', '2019-02-09 13:03:48', '2019-02-09 13:03:48'),
(4, 'Suzuki Kengo', 'kengo@mail.com', 'kengo123', '2019-02-09 13:04:55', '2019-02-09 13:04:55'),
(5, '', '', '', '2019-02-10 13:32:46', '2019-02-10 13:32:46'),
(6, '', '', '', '2019-02-10 14:23:05', '2019-02-10 14:23:05'),
(7, '', '', '', '2019-02-10 14:23:10', '2019-02-10 14:23:10'),
(8, '', '', '', '2019-02-17 12:25:35', '2019-02-17 12:25:35'),
(9, '', '', '', '2019-02-17 12:26:02', '2019-02-17 12:26:02'),
(10, 'Kaneko Masahiro', 'masahiro@cmail.com', 'masahiro456', '2019-02-20 12:37:45', '2019-02-20 12:37:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主キー', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主キー', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主キー', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
