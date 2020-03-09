-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 10 2020 г., 00:53
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
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `keywords`, `description`, `img`) VALUES
(1, 'Подставки', '', '', 'tel_minecraft.jpg'),
(2, 'Детское развитие', '', '', 'count_count.jpg'),
(3, 'Ярлычки', '', '', 'label_items.jpg'),
(4, 'Товары для дома', '', '', 'no-image.png'),
(5, 'Игры', '', '', 'no-image.png'),
(6, 'Подарки', '', '', 'no-image.png'),
(7, 'Коммерция', '', '', 'no-image.png'),
(8, 'Заготовки для изделий', '', '', 'no-image.png');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(10) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `qty`, `sum`, `status`, `name`, `surname`, `email`, `phone`, `address`) VALUES
(1, '2020-02-27 13:46:07', '2020-02-27 13:46:07', 1, 55.5, '0', 'Дима', 'Пупкин', 'dimkuh1985@gmail.com', '+38(011)646-54-56', ''),
(2, '2020-02-27 15:56:04', '2020-02-27 15:56:04', 1, 55.5, '0', 'Дима', 'Пупкин', 'dimkuh1985@gmail.com', '+38(045)454-54-44', 'adressssss');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(11) NOT NULL,
  `sum_item` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `price`, `qty_item`, `sum_item`) VALUES
(1, 2, 2, 'Подставка \"Тигр\"', 55.5, 1, 55.5);

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
  `price` decimal(10,2) UNSIGNED NOT NULL DEFAULT '0.00',
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
(1, 1, 1, 'Подставка \"Янукович\"', 'Крутая подставка с ликом бывшего лигитимного проффессора', '100.50', NULL, NULL, 'no-image.png', '0', '0', '0'),
(2, 1, 4, 'Подставка \"Тигр\"', 'Почти как настоящий.', '55.50', NULL, NULL, 'tel_tiger.jpg', '0', '0', '0'),
(3, 2, 2, 'Рахывныца', 'Счёты для детей для развития', '5.00', NULL, NULL, 'count_count.jpg', '0', '0', '0'),
(4, 3, 3, 'Надписи на подарки', 'Маленькие надписи со сроком годности подарков(возврату и обмену не подлежат).', '99.90', NULL, NULL, 'label_items.jpg', '0', '0', '0'),
(7, 1, 4, 'Подставка \"Заяц\"', 'Хороший зайка для мобилки', '59.99', NULL, NULL, 'tel_hare.jpg', '0', '0', '0'),
(8, 1, 2, 'Подставка \"Майнкрафт\"', 'Родители будут рады что их ребёнок теперь не сидит за игрой Майнкрафт, а просто втыкает в деревяшку', '150501.00', NULL, NULL, 'tel_minecraft.jpg', '0', '0', '0'),
(9, 1, 4, 'Подставка \"Бобёр\"', 'видишь бобра? я тоже не вижу, а он есть ', '1000.10', NULL, NULL, 'no-image.png', '0', '0', '0'),
(10, 3, 4, 'Надписи для животных', 'Можно подписать весь зоопарк', '52.52', NULL, NULL, 'no-image.png', '0', '0', '0'),
(11, 6, 8, 'Коробка с любовью', '...возможно сопутствующие сюрпризы', '500.00', NULL, NULL, 'pres_lovekorobka.jpg', '0', '1', '0'),
(12, 1, 5, 'Подставка \"Цветочек\"', 'не вянет, радует глаз, можно в топку если холодно.', '120.50', NULL, NULL, 'tel_flower.jpg', '1', '0', '0');

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
(1, 'Спорт', '', ''),
(2, 'Детское', '', ''),
(3, 'Новый год', '', ''),
(4, 'Животные', '', ''),
(5, 'Природа', '', ''),
(6, 'Символика', '', ''),
(7, 'Знаменитости', '', ''),
(8, 'Праздничные', '', ''),
(9, 'Разное', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `password`, `phone`, `email`, `auth_key`, `access_token`) VALUES
(1, 'Василий', NULL, '$2y$13$KiGpmRLtjTE5jBOkXLgjfeBWiBDiqcWaHXw/l/k1C35EIBIyVpdJy', '+38(012)345-67-89', 'vasilPuo@pupkin.com', NULL, NULL),
(2, 'Василий', NULL, '$2y$13$36fk1LOuIgNsR246qndOy.3uLjOlnJFQIEJbTgb2/cZmBLib.pdbK', '+38(084)784-84-84', 'vasilPuo@xn--pupkin-jtf.com', NULL, NULL),
(3, 'ффф', 'Пупкин', '$2y$13$0rWP.ZmTGVUzB2tNasga0u1dBQDTlGJGPN4FexedlUeVsTXlVR.3O', '+38(056)566-46-46', 'vasi@pupkin.com', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
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
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
