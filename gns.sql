-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 23 2015 г., 15:10
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `gns`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Комедия'),
(2, 'Драма'),
(3, 'Боевик');

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` int(11) NOT NULL,
  `nameCity` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `nameCity`) VALUES
(1, 'Kyiv'),
(2, 'Kharkiv'),
(3, 'Lviv');

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE IF NOT EXISTS `films` (
`id` smallint(5) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `year` mediumint(8) unsigned NOT NULL,
  `date` date NOT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `title`, `description`, `photo`, `year`, `date`, `isActive`) VALUES
(1, '9 yards', '«В каждой душе киллера живёт мечта о спокойной жизни. Неосуществимая»', '9Yards.jpg', 2000, '2015-09-02', 0),
(2, 'The Green Mile', '«Пол Эджкомб не верил в чудеса. Пока не столкнулся с одним из них»\r\n«Пол Эджкомб не верил в чудеса. ', 'GreenMile.jpg', 1999, '2015-09-03', 1),
(3, 'Forrest Gump', '«Мир уже никогда не будет прежним, после просмотра фильма Форрест Гамп»', 'ForrestGump.jpg', 1994, '2015-09-03', 1),
(4, 'Rain man', '«A journey through understanding and fellowship A journey through understanding and fellowship A journey through understanding', 'RainMan.jpg', 1988, '2015-09-12', 1),
(5, '1+1', '«Sometimes you have to reach into someone else''s world else''s world else''s world»', '1+1.jpg', 2011, '2015-09-13', 1),
(6, 'The Bucket List', '«Оторвись напоследок»', 'poka_ne_sugral_v_yashik.jpg', 2007, '2015-09-14', 1),
(7, 'Knockin'' on Heaven''s Door', '«Быстрый автомобиль, миллион марок в багажнике...»', 'Knockin'' on Heaven''s Door.jpg', 1997, '2015-09-15', 1),
(9, 'Terminator 2: Judgment Day', 'Теперь у Сары родился сын Джон и время, когда он поведёт за собой...', 'Terminator2.jpg', 1991, '2015-12-20', 1),
(33, 'Hobbit', 'самая ожидаемая премьера декабря которые любят фэнтези', 'hobbit.jpg', 2014, '2015-12-23', 0),
(34, 'Ярость', 'События фильма разворачиваются в конце Второй мировой войны в Германии.', 'rage.jpg', 2014, '2015-12-23', 0),
(35, 'Forsage7', 'Они покорили Токио и Рио, Лос-Анджелес и Лондон.', 'forsage7.jpg', 2015, '2015-12-23', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `filmscategory`
--

CREATE TABLE IF NOT EXISTS `filmscategory` (
  `filmsid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `filmscategory`
--

INSERT INTO `filmscategory` (`filmsid`, `categoryid`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `cityid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Mail`, `password`, `Name`, `cityid`) VALUES
(15, 'deimos3000@ukr.net', '202cb962ac59075b964b07152d234b70', 'zzz xxx', 1),
(16, 'quake3024@ukr.net', 'd41d8cd98f00b204e9800998ecf8427e', 'z', 1),
(18, 'Zenya1@ukr.net', 'c4ca4238a0b923820dcc509a6f75849b', 'Zenya', 3),
(19, 'quake3000@ukr.net', '202cb962ac59075b964b07152d234b70', 'zz', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filmscategory`
--
ALTER TABLE `filmscategory`
 ADD PRIMARY KEY (`filmsid`,`categoryid`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
