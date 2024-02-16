-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 16 2024 г., 14:42
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ls6laravel`
--
CREATE DATABASE IF NOT EXISTS `ls6laravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ls6laravel`;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`, `description`, `url`) VALUES
(1, '2024-02-14 07:46:06', '2024-02-14 07:46:06', 'Action', 'Action category', '/catalog/category/1'),
(2, '2024-02-14 07:46:06', '2024-02-14 07:46:06', 'RPG', 'RPG category', '/catalog/category/2'),
(3, '2024-02-14 07:46:06', '2024-02-14 07:46:06', 'Квесты', 'Квесты category', '/catalog/category/3'),
(4, '2024-02-14 07:46:06', '2024-02-14 07:46:06', 'Онлайн-игры', 'Онлайн-игры category', '/catalog/category/4'),
(5, '2024-02-14 07:46:06', '2024-02-14 07:46:06', 'Стратегии', 'Стратегии category', '/catalog/category/5');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2024_02_12_132000_create_categories_table', 1),
(17, '2024_02_12_134423_create_goods_table', 1),
(18, '2024_02_12_135516_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `products_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `name`, `email`, `products_id`) VALUES
(1, '2024-02-15 08:33:42', '2024-02-15 08:33:42', 'andrey', 'andrey@mail.ru', 1),
(2, '2024-02-16 03:59:23', '2024-02-16 03:59:23', 'andrey', 'andrey@mail.ru', 2),
(3, '2024-02-16 04:03:53', '2024-02-16 04:03:53', 'andrey', 'andrey@mail.ru', 2),
(4, '2024-02-16 04:05:20', '2024-02-16 04:05:20', 'andrey', 'andrey@mail.ru', 2),
(5, '2024-02-16 04:06:17', '2024-02-16 04:06:17', 'andrey', 'andrey@mail.ru', 1),
(6, '2024-02-16 04:10:07', '2024-02-16 04:10:07', 'andrey', 'andrey@mail.ru', 2),
(7, '2024-02-16 04:10:40', '2024-02-16 04:10:40', 'andrey', 'andrey@mail.ru', 2),
(8, '2024-02-16 04:12:08', '2024-02-16 04:12:08', 'andrey', 'andrey@mail.ru', 2),
(9, '2024-02-16 06:09:20', '2024-02-16 06:09:20', 'andrey', 'andrey@mail.ru', 6),
(10, '2024-02-16 07:35:17', '2024-02-16 07:35:17', 'andrey', 'andrey@mail.ru', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `category_id`, `price`, `foto`, `description`, `url`) VALUES
(1, '2024-02-14 08:15:21', '2024-02-14 08:15:21', 'The Witcher 3: Wild Hunt', 1, 400.00, '/img/cover/game-1.jpg', 'The Witcher 3: Wild Hunt DESCRITION', '/catalog/product/1'),
(2, '2024-02-14 08:15:21', '2024-02-14 08:15:21', 'Overwatch', 2, 300.00, '/img/cover/game-2.jpg', 'Overwatch DESCRITION', '/catalog/product/2'),
(3, '2024-02-14 08:15:22', '2024-02-14 08:15:22', 'Deus Ex: Mankind Divided', 3, 500.00, '/img/cover/game-3.jpg', 'Deus Ex: Mankind Divided DESCRITION', '/catalog/product/3'),
(4, '2024-02-14 08:15:22', '2024-02-14 08:15:22', 'Bla Bla bla', 4, 500.00, '/img/cover/game-4.jpg', 'Bla Bla bla', '/catalog/product/4'),
(5, '2024-02-14 08:15:22', '2024-02-14 08:15:22', 'New new new', 5, 500.00, '/img/cover/game-5.jpg', 'New new new', '/catalog/product/5'),
(6, '2024-02-14 08:15:22', '2024-02-14 08:15:22', 'Foo foo foo', 3, 500.00, '/img/cover/game-6.jpg', 'Foo foo foo', '/catalog/product/6'),
(7, '2024-02-14 08:15:22', '2024-02-14 08:15:22', 'Gogogogogogogog', 2, 100.00, '/img/cover/game-7.jpg', 'Gogogogogogogog', '/catalog/product/7'),
(8, '2024-02-14 08:15:22', '2024-02-14 08:15:22', 'Sport spoer', 2, 100.00, '/img/cover/game-8.jpg', 'Sport spoer', '/catalog/product/8'),
(9, '2024-02-14 08:15:22', '2024-02-14 08:15:22', 'Car car car', 2, 100.00, '/img/cover/game-9.jpg', 'Car car car', '/catalog/product/9');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `isAdmin` tinyint(4) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `isAdmin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'andrey', 0, 'andrey@mail.ru', NULL, '$2y$12$HLzCtrHM5zjZfOhlMzp6WOr5f96xbZQSYpmZpfNveWGwmHWG3HS2W', NULL, '2024-02-14 03:06:57', '2024-02-14 03:06:57'),
(2, 'boris', 0, 'boris@mail.ru', NULL, '$2y$12$qyKJk3QO05axHhXRF.6BMeaN8sQ5widDiW.XFoCVfszAqOgUOYzzC', NULL, '2024-02-14 08:21:51', '2024-02-14 08:21:51');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_goods_id_foreign` (`products_id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_goods_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
