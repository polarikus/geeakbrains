-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 02 2020 г., 17:51
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `otziv`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `path`) VALUES
(1, 'icon1.png', 'images/orders/mane'),
(2, 'about1.jpg', 'images/orders/inside'),
(3, 'icon2.png', 'images/orders/mane'),
(4, 'about2.jpg', 'images/orders/inside'),
(5, 'icon3.png', 'images/orders/mane'),
(6, 'about3.jpg', 'images/orders/inside');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_mane` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_inside` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `image_mane`, `image_inside`, `article`, `about`, `order`) VALUES
(1, 'Посох', '1', '2', '1456', 'Это посох с отличными харрактиристиками', 'Polarikus'),
(2, 'Серебрянная накидка', '3', '4', '3634', 'Отлличный для 40+ ЛВЛ', 'Mitrandir'),
(3, 'Посох из огненного дерева', '5', '6', '364574', 'Шикарные статы', 'Olorin');

-- --------------------------------------------------------

--
-- Структура таблицы `otziv`
--

CREATE TABLE `otziv` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `otziv`
--

INSERT INTO `otziv` (`id`, `name`, `content`, `date`) VALUES
(1, 'Наруто', 'Ё собаки, я наруто узумаки.', '2020-01-31 05:47:00'),
(5, 'anonim', 'Хороший магазин, базарю', '2020-01-31 06:08:00'),
(6, 'Тест', 'Тестовый отзыв', '2020-02-01 02:02:00'),
(7, 'Вася', 'Полный отстой ваши эти все', '2020-02-02 03:31:00'),
(8, 'Тест тег', 'Тест тег', '2020-02-02 05:26:00'),
(9, 'Тест капт', 'Капчи тест', '2020-02-02 05:49:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otziv`
--
ALTER TABLE `otziv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `otziv`
--
ALTER TABLE `otziv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
