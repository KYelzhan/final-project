-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 16 2016 г., 21:34
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `cat_id` int(20) NOT NULL,
  `category` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'Курьерские услуги'),
(2, 'Бытовой ремонт'),
(3, 'Грузоперевозки'),
(4, 'Уборка и помощь по хозяйству'),
(5, 'Виртуальный помощник'),
(6, 'Компьютерная помощь'),
(7, 'Мероприятия и промо-акции'),
(8, 'Дизайн'),
(9, 'Web-разработка'),
(10, 'Фото- и видео-услуги'),
(11, 'Установка и ремонт техники'),
(12, 'Красота и здоровье'),
(13, 'Ремонт цифровой техники'),
(14, 'Юридическая помощь');

-- --------------------------------------------------------

--
-- Структура таблицы `tblaccount`
--

CREATE TABLE `tblaccount` (
  `accnt_Id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tblaccount`
--

INSERT INTO `tblaccount` (`accnt_Id`, `username`, `password`, `user_Id`) VALUES
(20, 'Yelzhan', '81dc9bdb52d04dc20036dbd8313ed055', 25),
(21, 'Ansar', '81dc9bdb52d04dc20036dbd8313ed055', 26),
(22, 'Biba', '81dc9bdb52d04dc20036dbd8313ed055', 27),
(23, 'Alisher', '81dc9bdb52d04dc20036dbd8313ed055', 28);

-- --------------------------------------------------------

--
-- Структура таблицы `tbladmin`
--

CREATE TABLE `tbladmin` (
  `Id` int(11) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbladmin`
--

INSERT INTO `tbladmin` (`Id`, `uname`, `pwd`) VALUES
(1, 'admin', 'admin'),
(2, 'moderator', 'moderator');

-- --------------------------------------------------------

--
-- Структура таблицы `tblcomment`
--

CREATE TABLE `tblcomment` (
  `comment_Id` int(11) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `post_Id` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `user_Id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tblpost`
--

CREATE TABLE `tblpost` (
  `post_Id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `datetime` datetime DEFAULT NULL,
  `cat_id` int(12) DEFAULT NULL,
  `user_Id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tblpost`
--

INSERT INTO `tblpost` (`post_Id`, `title`, `content`, `datetime`, `cat_id`, `user_Id`) VALUES
(32, 'es jfosiajf oaiesj f', 'io faosjef iase f safhuesihfosa fsaef', '2016-05-09 10:02:40', 2, 25),
(33, 'fsad a fasdf sa fas fd', 'f asd f ds          f               f sda         fafasf', '2016-05-09 10:07:29', 3, 25),
(34, 'qwerty', 'qwerty\r\n                        ', '2016-05-10 12:32:53', 9, 0),
(35, 'fsdff', '                      afe afas faesfse   afasfe            ', '2016-05-15 06:12:47', 1, 25),
(36, 'ssffd a sada  sa', 'a da asf sda f fadaf a                                  ', '2016-05-16 11:16:35', 3, 29);

-- --------------------------------------------------------

--
-- Структура таблицы `tbluser`
--

CREATE TABLE `tbluser` (
  `user_Id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `about` varchar(300) DEFAULT NULL,
  `birthday` varchar(150) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbluser`
--

INSERT INTO `tbluser` (`user_Id`, `fname`, `lname`, `gender`, `email`, `city`, `about`, `birthday`, `avatar`) VALUES
(25, 'Елжан', 'Калмурзаев', 'Мужской', 'kalmurzaev.elzhan@mail.ru', 'Шымкент', 'студент первого курса. Занимаюсь разработкой сайтов. Знаю: HTML5 & CSS3(Bootstrap), PHP, JS. Поддержка и помощь по сайту, Программирование,  Верстка, Разработка приложений и программ.', '1997-08-29', '../avatars/avatarka.jpg'),
(26, 'Ансар', 'Максат', 'Мужской', 'ansarm@mail.ru', 'Семей', 'ateyrutyuh tu fugygi y iuu  jojio  jeo fjaps s ea  sa fhsua hsae ho hai iao h oais  ioha o hao aoh aish  ash si  a seh ui au ua   as s os aho ea fisah ose sh  saiouash ashsao hs ahh aohfoiuhfsuae hushf   as hfoihasfe', '1990-01-01', '../avatars/n7TpJ7uren0.jpg'),
(27, 'Бибарыс', 'Асанхан', 'Мужской', 'biba@vk.ru', 'Астана', 'dtyd u dyd d  dudru d du du  dyyd  dydy  fgds gfds gfsd g fs dg fds gfds fs  sffg fds g dsfg fd ss ffd  s gfds fds gf sd gfsd sfd gfsd gfds gsfd fsd fsd sdf s sfd gsdf gfds gfd fsd gsfd gsfd ', '1990-01-01', '../avatars/5N3F2O74wRk.jpg'),
(28, 'Алишер', 'Толебердыев', 'Мужской', 'alish@vk.ru', 'Семей', 'eiaijfi aef esaf pjea  iajpso  ja as eif  jsaefjapsoj fi  jfsaoi  faj faoisjfopsa fa f', '1990-01-01', '../avatars/bSAf5Y5K3Sk.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Индексы таблицы `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`accnt_Id`),
  ADD KEY `user_Id` (`user_Id`);

--
-- Индексы таблицы `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD PRIMARY KEY (`comment_Id`),
  ADD KEY `user_Id` (`user_Id`),
  ADD KEY `post_Id` (`post_Id`),
  ADD KEY `user_Id_2` (`user_Id`);

--
-- Индексы таблицы `tblpost`
--
ALTER TABLE `tblpost`
  ADD PRIMARY KEY (`post_Id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `user_Id` (`user_Id`);

--
-- Индексы таблицы `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `accnt_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `tblcomment`
--
ALTER TABLE `tblcomment`
  MODIFY `comment_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `tblpost`
--
ALTER TABLE `tblpost`
  MODIFY `post_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT для таблицы `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD CONSTRAINT `tblaccount_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `tbluser` (`user_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD CONSTRAINT `tblcomment_ibfk_1` FOREIGN KEY (`user_Id`) REFERENCES `tbluser` (`user_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblcomment_ibfk_2` FOREIGN KEY (`post_Id`) REFERENCES `tblpost` (`post_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tblpost`
--
ALTER TABLE `tblpost`
  ADD CONSTRAINT `tblpost_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
