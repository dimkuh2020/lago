-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 27 2020 г., 00:41
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lago`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `keywords`, `description`) VALUES
(1, 'подставки', '', ''),
(2, 'счёты', '', ''),
(3, 'лейбы', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `theme_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `price` float NOT NULL DEFAULT '0',
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.png',
  `hit` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `new` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sale` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `theme_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`) VALUES
(1, 1, 1, 'Подставка \"Янукович\"', 'Крутая подставка с ликом бывшего лигитимного проффессора', 100.5, NULL, NULL, 'no-image.png', '0', '0', '0'),
(2, 1, 4, 'Подставка \"Тигр\"', 'Почти как настоящий.', 55.5, NULL, NULL, 'tel_tiger.jpg', '0', '0', '0'),
(3, 2, 2, 'Рахывныца', 'Счёты для детей для развития', 5, NULL, NULL, 'count_count.jpg', '0', '0', '0'),
(4, 3, 3, 'Надписи на подарки', 'Маленькие надписи со сроком годности подарков(возврату и обмену не подлежат).', 99.9, NULL, NULL, 'label_items.jpg', '0', '0', '0'),
(7, 1, 4, 'Подставка \"Заяц\"', 'Хороший зайка для мобилки', 59.99, NULL, NULL, 'tel_hare.jpg', '0', '0', '0'),
(8, 1, 2, 'Подставка \"Майнкрафт\"', 'Родители будут рады что их ребёнок теперь не сидит за игрой Майнкрафт, а просто втыкает в деревяшку', 150501, NULL, NULL, 'tel_minecraft.jpg', '0', '0', '0'),
(9, 1, 4, 'Подставка \"Бобёр\"', 'видишь бобра? я тоже не вижу, а он есть ', 1000.1, NULL, NULL, 'no-image.png', '0', '0', '0'),
(10, 3, 4, 'Надписи для животных', 'Можно подписать весь зоопарк', 52.52, NULL, NULL, 'no-image.png', '0', '0', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `theme`
--

INSERT INTO `theme` (`id`, `name`, `keywords`, `description`) VALUES
(1, 'спорт', '', ''),
(2, 'детское', '', ''),
(3, 'новый год', '', ''),
(4, 'животные', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
