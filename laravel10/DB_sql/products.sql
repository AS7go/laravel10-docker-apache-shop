-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: mysqldb
-- Время создания: Апр 21 2024 г., 23:39
-- Версия сервера: 8.0.36
-- Версия PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ale1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `in_stock` tinyint(1) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `new_price` int DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `in_stock`, `description`, `created_at`, `updated_at`, `new_price`, `category_id`) VALUES
(1, 'Product 1', 216, 1, 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.', NULL, NULL, 200, 1),
(2, 'Product 2', 654, 1, 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.', NULL, NULL, NULL, 2),
(3, 'Product 3', 1014, 0, 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.', NULL, NULL, NULL, 3),
(4, 'Product 4', 930, 1, 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.', NULL, NULL, NULL, 1),
(5, 'Product 5', 974, 1, 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.', NULL, NULL, NULL, 2),
(6, 'Product 6', 793, 1, 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.', NULL, NULL, NULL, 3),
(7, 'Product 7', 824, 1, 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.', NULL, NULL, NULL, 1),
(8, 'Product 8', 569, 1, 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.', NULL, NULL, NULL, 2),
(9, 'Product 9', 1340, 1, 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.', NULL, NULL, NULL, 3),
(10, 'Product 10', 1071, 1, 'Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum был стандартным текстом-пустышкой в ​​отрасли с 1500-х годов, когда неизвестный типограф взял гранку шрифтов и переделал ее, чтобы сделать книгу образцов шрифтов.', NULL, NULL, NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
