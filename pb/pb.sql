-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 03 2015 г., 08:56
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
  `phone` int(16) NOT NULL,
  `cvv` blob NOT NULL,
  `video` varchar(255) NOT NULL,
  `role` varchar(32) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `career`
--

INSERT INTO `career` (`id`, `name`, `surname`, `email`, `phone`, `cvv`, `video`, `role`, `text`, `date`) VALUES
(1, 'name', 'e8911889a7780cdaf79c3d6ae86834b2', 'admin@admin.com', 2147483647, '', 'http://first/pb/career', 'owner', '1', '2015-11-03 05:04:49'),
(2, 'name', 'e8911889a7780cdaf79c3d6ae86834b2', 'admin@admin.com', 2147483647, '', 'http://first/pb/career', 'admin', '123', '2015-11-03 05:05:33'),
(3, 'Вася', 'Пупкин', 'admin@admin.com', 2147483647, '', 'http://first/pb/career', 'owner', 'Вася Пупкин', '2015-11-03 05:25:10');

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
