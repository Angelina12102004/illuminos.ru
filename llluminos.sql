-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 22 2023 г., 02:00
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `llluminos`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'comedy'),
(3, 'dramas'),
(5, 'horor');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `user_id`, `number`, `count`, `status`, `reason`, `created_at`, `updated_at`) VALUES
(25, 0, 3, 1792082180, 2, 'Подтверждённый', NULL, '2023-10-01 13:51:34', '2023-10-08 15:18:54'),
(30, 5, 3, NULL, 2, NULL, NULL, '2023-10-02 17:40:52', '2023-10-02 17:41:38'),
(31, 23, 1, NULL, 1, NULL, NULL, '2023-10-08 14:42:41', '2023-10-08 14:42:41'),
(33, 5, 4, NULL, 1, NULL, NULL, '2023-10-08 14:56:05', '2023-10-08 14:56:05'),
(34, 8, 4, NULL, 2, NULL, NULL, '2023-10-08 15:00:03', '2023-10-08 15:06:55'),
(35, 23, 4, NULL, 1, NULL, NULL, '2023-10-08 15:06:19', '2023-10-08 15:06:19'),
(37, 5, 6, NULL, 3, NULL, NULL, '2023-11-19 14:43:25', '2023-11-19 14:59:21'),
(39, 3, 7, NULL, 1, NULL, NULL, '2023-11-19 17:44:46', '2023-11-19 17:44:46'),
(40, 2, 7, NULL, 1, NULL, NULL, '2023-11-21 22:23:05', '2023-11-21 22:23:05');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `country` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `model` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `path` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `country`, `year`, `model`, `category`, `count`, `path`, `created_at`) VALUES
(1, 'Вий', 3, 'Студент-философ Хома Брут должен провести в деревенской церкви три ночи у гроба умершей панночки. Актеры: Евгений Леонов, Георгий Вицин. Похожие фильмы: Бриллиантовая рука', 1967, 'Александр Серый', 'horor', 4, 'images/horror.png', '2022-02-16 06:58:58'),
(2, 'Афоня', 3, 'Слесарь-сантехник ЖЭКа Афанасий Борщев, которого жильцы запросто зовут Афоня, — человек открытой и доброй души.  Актеры: Евгений Леонов, Георгий Вицин. Похожие фильмы: Бриллиантовая рука', 1975, 'Владимир Меньшов', 'comedy', 3, 'images/comedy.png', '2022-02-16 06:58:58'),
(3, 'Джентльмены удачи', 8, 'Заведующему детсадом Трошкину фатально не повезло: он оказался как две капли воды похож на бандита по кличке «Доцент». Актеры: Евгений Леонов, Георгий Вицин. Похожие фильмы: Бриллиантовая рука', 1998, 'Александр Серый', 'comedy', 1998, 'images/1.png', '2022-02-16 06:58:58'),
(4, 'Молодая жена', 7, 'Маня и Володя полюбили друг друга еще в седьмом классе сельской школы, а когда парень ушел в армию, девушка ждала его.  Актеры: Евгений Леонов, Георгий Вицин. Похожие фильмы: Бриллиантовая рука', 1978, 'Владимир Меньшов', 'dramas', 1978, 'images/dramas.png', '2022-02-16 06:58:58'),
(5, ' Летят журавли', 10, 'Рассказ о людях, в чьи судьбы безжалостно вторглась война. Актеры:Татьяна\nСамойлова, Алексей Баталов\nПохожие фильмы: Москва слезам не верит', 1957, 'Александр Серый', 'dramas', 1958, 'images/2.png', '2022-02-16 06:58:58'),
(6, 'Служебный роман', 7, 'Анатолий Ефремович Новосельцев, рядовой служащий одного статистического управления — человек робкий и застенчивый. Актеры: Евгений Леонов, Георгий Вицин. Похожие фильмы: Бриллиантовая рука', 1977, 'Александр Серый', 'dramas', 58815, 'images/3.png', '2022-02-16 06:58:58'),
(7, 'Весна на Заречной улице', 6, 'Лучший сталевар завода Саша Савченко не привык к отказам женщин. Актеры: Евгений Леонов, Георгий Вицин. Похожие фильмы: Бриллиантовая рука', 1956, 'Александр Серый', 'dramas', 647, 'images/4.png', '2022-02-16 06:58:58'),
(8, 'Любовь и голуби', 5, ' Сценарий последнего основан на его же одноимённой пьесе, написанной в 1981 году.   Актеры: Евгений Леонов, Георгий Вицин. Похожие фильмы: Бриллиантовая рука', 1981, 'Владимир Меньшов', 'dramas', 553, 'images/5.png', '2022-02-16 06:58:58'),
(9, 'Свадьба в Малиновке', 3, 'Гражданская война в украинском селе превращается в оперетту. Актеры: Евгений Леонов, Георгий Вицин. Похожие фильмы: Бриллиантовая рука', 1967, 'Владимир Меньшов', 'comedy', 4, 'images/6.png', '2022-02-16 06:58:58'),
(28, 'Господин оформитель', 6, 'Художник-безумец принимает Марию за погибшую натурщицу. Авангардный советский хоррор с музыкой Сергея Курехина. Актеры: Евгений Леонов, Георгий Вицин. Похожие фильмы: Бриллиантовая рука', 1988, 'Владимир Меньшов', 'horor', 4, 'images/19.png', '2022-02-16 06:58:58'),
(29, 'Дикая охота короля Стаха', 3, 'Ученый исследует народные легенды в белорусской глубинке. Редкий образец готического триллера в советском кино\r\nАктеры: Евгений Леонов, Георгий Вицин. Похожие фильмы: Бриллиантовая рука', 1967, 'Александр Серый', 'horor', 4, 'images/20.png', '2022-02-16 06:58:58');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`, `role`) VALUES
(5, 'ангелина', 'зверь', 'апппп', 'Fngrlina', 'a12102004@yandex.ru', '1210Фтп!!', 'client'),
(7, 'ангелина', 'зверь', 'апппп', '12345', 'a12102004@yandex.ru', '12345Ang!!', 'admin\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
