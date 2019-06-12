-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019 年 6 月 13 日 01:31
-- サーバのバージョン： 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs_kdi_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `indate`, `kanri_flg`, `life_flg`) VALUES
(1, 'ラララ管理者', 'lalala', 'lalala', '0000-00-00 00:00:00', 1, 0),
(2, 'マツシタ', 'matsu', 'matsu', '0000-00-00 00:00:00', 0, 0),
(3, 'キヨシ', 'kiyo', 'kiyo', '0000-00-00 00:00:00', 0, 0),
(4, 'マツキヨ', 'mtky', 'mtky', '2019-06-12 06:25:11', 0, 0),
(5, 'ドラえもん', 'dora', 'dora', '2019-06-13 08:18:47', 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `Mission08_bookmark_table`
--

CREATE TABLE `Mission08_bookmark_table` (
  `id` int(12) NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `bookname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `bookurl` text COLLATE utf8_unicode_ci NOT NULL,
  `bookcomment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `Mission08_bookmark_table`
--

INSERT INTO `Mission08_bookmark_table` (`id`, `lid`, `bookname`, `bookurl`, `bookcomment`, `indate`) VALUES
(1, 'lalala', '三国志', 'www.sanngoku.com', '面白い', '2019-05-30 06:40:15'),
(2, 'matsu', '空母いぶき⑴', 'https://www.shogakukan.co.jp/books/09187210', '祝映画化', '2019-05-30 06:42:04'),
(3, 'kiyo', '新・魔法のコンパス', 'https://www.amazon.co.jp/%E6%96%B0%E3%83%BB%E9%AD%94%E6%B3%95%E3%81%AE%E3%82%B3%E3%83%B3%E3%83%91%E3%82%B9-%E8%A7%92%E5%B7%9D%E6%96%87%E5%BA%AB-%E8%A5%BF%E9%87%8E-%E4%BA%AE%E5%BB%A3/dp/4048964550/ref=zg_bs_4852944051_1?_encoding=UTF8&psc=1&refRID=B115W0VEPF5RJWQ0N3NT', '昨日の常識が今日、非常識になる。そんな時代の思考法と生き方\r\n', '2019-05-30 06:44:39'),
(4, 'lalala', '新・日本列島から日本人が消える日(上巻)', 'https://www.amazon.co.jp/%E6%96%B0%E3%83%BB%E6%97%A5%E6%9C%AC%E5%88%97%E5%B3%B6%E3%81%8B%E3%82%89%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%8C%E6%B6%88%E3%81%88%E3%82%8B%E6%97%A5-%E4%B8%8A%E5%B7%BB-%E3%83%9F%E3%83%8A%E3%83%9FA%E3%82%A2%E3%82%B7%E3%83%A5%E3%82%BF%E3%83%BC%E3%83%AB/dp/4910000003/ref=zg_bs_4852944051_2?_encoding=UTF8&psc=1&refRID=B115W0VEPF5RJWQ0N3NT', 'あなたが幸せを手に入れるための 破・常識な歴史が、今解き明かされる! 真実なの? SFなの? 決めるのは、あなたです。 消えるとは? 身体を持って次の次元へ行くこと。', '2019-05-30 06:45:46'),
(5, 'matsu', '罪の声 ', 'https://www.amazon.co.jp/%E7%BD%AA%E3%81%AE%E5%A3%B0-%E8%AC%9B%E8%AB%87%E7%A4%BE%E6%96%87%E5%BA%AB-%E5%A1%A9%E7%94%B0-%E6%AD%A6%E5%A3%AB/dp/4065148251/ref=zg_bs_4852944051_9?_encoding=UTF8&psc=1&refRID=B115W0VEPF5RJWQ0N3NT', '圧倒的リアリティで衝撃の「真実」を捉えた傑作。\r\naaa', '2019-05-30 06:47:38'),
(6, 'kiyo', 'パラレルワールド・ラブストーリー', 'https://www.amazon.co.jp/%E3%83%91%E3%83%A9%E3%83%AC%E3%83%AB%E3%83%AF%E3%83%BC%E3%83%AB%E3%83%89%E3%83%BB%E3%83%A9%E3%83%96%E3%82%B9%E3%83%88%E3%83%BC%E3%83%AA%E3%83%BC-%E8%AC%9B%E8%AB%87%E7%A4%BE%E6%96%87%E5%BA%AB-%E6%9D%B1%E9%87%8E-%E5%9C%AD%E5%90%BE/dp/4062637251/ref=zg_bs_4852944051_10?_encoding=UTF8&psc=1&refRID=XG0PZMNGARKF2YA390DJ', 'どちらが現実なのか? ――存在する二つの「世界」と、消えない二つの「記憶」。交わることのない世界の中で、恋と友情は翻弄されていく。\r\n', '2019-05-30 06:49:37'),
(7, 'mtky', '俺か、俺以外か。ローランドという生き方', 'https://www.amazon.co.jp/%E4%BF%BA%E3%81%8B%E3%80%81%E4%BF%BA%E4%BB%A5%E5%A4%96%E3%81%8B%E3%80%82-%E3%83%AD%E3%83%BC%E3%83%A9%E3%83%B3%E3%83%89%E3%81%A8%E3%81%84%E3%81%86%E7%94%9F%E3%81%8D%E6%96%B9-ROLAND/dp/4046041374/ref=zg_bs_4852944051_13?_encoding=UTF8&psc=1&refRID=XG0PZMNGARKF2YA390DJ', '発する言葉のすべてが「名言」となるホスト界の帝王・ローランド初の自著!\r\n「世の中には二種類の本しかない。ローランドの本か、それ以外か」\r\n', '2019-05-30 06:51:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Mission08_bookmark_table`
--
ALTER TABLE `Mission08_bookmark_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Mission08_bookmark_table`
--
ALTER TABLE `Mission08_bookmark_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
