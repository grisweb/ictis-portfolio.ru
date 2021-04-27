-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 27 2021 г., 14:58
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ictis`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Веб-сайт'),
(3, 'Интернет-магазин'),
(5, 'Мобильное приложение');

-- --------------------------------------------------------

--
-- Структура таблицы `category_project`
--

CREATE TABLE `category_project` (
  `id` int NOT NULL,
  `id_project` int UNSIGNED NOT NULL,
  `id_category` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category_project`
--

INSERT INTO `category_project` (`id`, `id_project`, `id_category`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `mentors`
--

CREATE TABLE `mentors` (
  `id` int UNSIGNED NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `mentors`
--

INSERT INTO `mentors` (`id`, `surname`, `name`, `patronymic`, `image`) VALUES
(1, 'Стельмах\r\n', 'Олег\r\n', 'Александрович\r\n', 'stelmah.png'),
(2, 'Ищукова\r\n', 'Евгения', 'Александровна', 'ishukova.png'),
(5, 'Плёнкин', 'Антон', 'Павлович', 'c3b2269bbc4ae3feac5af396191c1e00.png'),
(6, 'Балабаев', 'Сергей', 'Леонидович', 'balabaev.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `date`) VALUES
(1, 'Проектная деятельность в условиях распространения вируса COVID-19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'covid.png', '2021-04-12 10:47:09'),
(2, 'Проектная деятельность в условиях распространения вируса COVID-20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'covid.png', '2021-04-12 10:47:15'),
(3, 'Проектная деятельность в условиях распространения вируса COVID-21', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'covid.png', '2021-04-12 10:50:32');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `alias` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `reviews_count` int NOT NULL,
  `rating` double NOT NULL,
  `team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `alias`, `name`, `image`, `description`, `reviews_count`, `rating`, `team`) VALUES
(1, 'nekmarket', 'NekMarket', 'nekweb.png', 'NekMarket - это функционриующая платформа интернет-торговли. Сайт предоставляет лёгкий доступ продавцам для начала работы и прямого осуществления продаж. Достаточно будет лишь зарегистрироваться и заполнить основные данные. При этом для продавцов будут доступен удобный личный кабинет, в котором можно подготавливать информацию о новом товаре и в любой удобный момент публиковать новое предложение на платформе. Также есть возможность отслеживать статистику продаж, производить сравнение аналогов и использовать другие удобные функции.', 12, 4.5, 'NekWeb'),
(2, 'test', 'Test', 'test.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis dolores exercitationem iusto pariatur quasi vero. Aspernatur assumenda consectetur doloribus et eveniet harum illum inventore, optio perspiciatis quod repudiandae veritatis!', 3, 2.5, 'TestTeam');

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `title`) VALUES
(1, 'Статья 1'),
(2, 'Статья 2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_project`
--
ALTER TABLE `category_project`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `category_project`
--
ALTER TABLE `category_project`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
