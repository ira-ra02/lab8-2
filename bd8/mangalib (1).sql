-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 08 2021 р., 16:22
-- Версія сервера: 10.4.22-MariaDB
-- Версія PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `mangalib`
--

-- --------------------------------------------------------

--
-- Структура таблиці `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `password` int(11) NOT NULL,
  `pictures` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `account`
--

INSERT INTO `account` (`id`, `name`, `password`, `pictures`) VALUES
(1, 'Itan', 123123, 207),
(3, 'Іра', 676, 888),
(4, 'IRArara', 234, 234),
(5, 'Ann', 2412, 2002),
(6, 'Nickolas', 2012, 2003);

-- --------------------------------------------------------

--
-- Структура таблиці `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `text` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `chat`
--

INSERT INTO `chat` (`id`, `text`) VALUES
(1, 2),
(3, 3),
(4, 0),
(5, 0),
(6, 123);

-- --------------------------------------------------------

--
-- Структура таблиці `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `comment`
--

INSERT INTO `comment` (`id`, `number`, `likes`) VALUES
(19, 1, 333),
(20, 3, 45),
(21, 4, 555),
(22, 5, 124),
(23, 6, 872);

-- --------------------------------------------------------

--
-- Структура таблиці `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `manga` char(50) DEFAULT NULL,
  `manhva` char(50) DEFAULT NULL,
  `comics` char(50) DEFAULT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `library`
--

INSERT INTO `library` (`id`, `manga`, `manhva`, `comics`, `number`) VALUES
(11, 'убить сталкера', 'елен', 'луна', 1),
(12, 'Айдин', 'Под дубом', 'Крик', 3),
(13, 'Токийский Гуль', 'Сволочь', 'Сова', 4),
(14, 'Тетрадь смерти', 'Любовь и ненависть', 'Мой город', 5),
(15, 'Банк крови', 'мыльце', 'Монстр', 6);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблиці `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблиці `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
