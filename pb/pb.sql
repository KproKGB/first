-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2015 г., 08:08
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `pb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `cvv` blob NOT NULL,
  `video` varchar(255) NOT NULL,
  `role` varchar(32) NOT NULL,
  `workt` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `career`
--

INSERT INTO `career` (`id`, `name`, `surname`, `email`, `phone`, `cvv`, `video`, `role`, `workt`, `date`) VALUES
(1, 'name', 'e8911889a7780cdaf79c3d6ae86834b2', 'admin@admin.com', '2147483647', '', 'http://first/pb/career', 'owner', '1', '2015-11-03 05:04:49'),
(3, 'Вася', 'Пупкин', 'admin@admin.com', '2147483647', '', 'http://first/pb/career', 'owner', 'Вася Пупкин', '2015-11-03 05:25:10'),
(4, 'name', 'surname', 'admin@admin.com', '2147483647', '', 'http://first/pb/career', 'owner', 'sfdf', '2015-11-04 05:08:27'),
(5, 'name', 'surname', 'admin@admin.com', '2147483647', 0x69707461626c65732e646f63, 'http://first/pb/career', 'admin', 'd;sj', '2015-11-05 05:40:54'),
(6, 'name', 'surname', 'admin@admin.com', '2147483647', '', 'http://first/pb/career', 'cvv1', '', '2015-11-05 19:15:42'),
(7, 'name', 'surname', 'admin@admin.com', '2147483647', '', 'http://first/pb/career', 'cvv1', '', '2015-11-05 19:16:03'),
(8, 'name', 'surname', 'admin@admin.com', '2147483647', '', 'http://first/pb/career', 'cvv1', '', '2015-11-05 19:24:22'),
(9, 'name', 'surname', 'admin@admin.com', '2147483647', 0x69707461626c65732e646f63, 'http://first/pb/career', 'cvv2', '', '2015-11-05 19:24:30'),
(10, 'name', 'surname', 'admin@admin.com', '2147483647', 0x69707461626c65732e646f63, 'http://first/pb/career', 'cvv3', '', '2015-11-05 19:50:47'),
(11, 'name', 'surname', 'admin@admin.com', '380501234567', 0x69707461626c65732e646f63, 'http://first/pb/career', 'cvv1', '', '2015-11-05 19:52:27'),
(12, 'name', 'surname', 'admin@admin.com', '380501234567', 0x69707461626c65732e646f63, 'https://youtu.be/Et-mM92HPxQ', 'cvv2', '', '2015-11-12 18:02:38'),
(13, 'name', 'surname', 'admin@admin.com', '380501234567', 0x69707461626c65732e646f63, 'https://youtu.be/Et-mM92HPxQ', 'cvv1', 'workt1', '2015-11-17 05:04:16');

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` enum('default','admin','owner') NOT NULL DEFAULT 'default',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(6, 'jesse', 'a1361cb85be840d6a2d762c68e4910e2', 'admin'),
(7, 'manager', '1d0258c2440a8d19e716292b231e3190', 'owner');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
