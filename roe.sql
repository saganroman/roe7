-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Час створення: Лип 01 2017 р., 07:58
-- Версія сервера: 10.1.19-MariaDB
-- Версія PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `roe`
--

-- --------------------------------------------------------

--
-- Структура таблиці `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `branch`
--

INSERT INTO `branch` (`id`, `name`) VALUES
(1, 'ВАБ'),
(2, 'СОЕ');

-- --------------------------------------------------------

--
-- Структура таблиці `cartridge`
--

CREATE TABLE `cartridge` (
  `id` int(11) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `roe_number` varchar(10) NOT NULL,
  `state_id` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `cart_change`
--

CREATE TABLE `cart_change` (
  `id` int(11) NOT NULL,
  `date_get` date NOT NULL,
  `number_get` varchar(10) NOT NULL,
  `date_give` date NOT NULL,
  `number_give` varchar(10) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `employee` varchar(20) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(1, 'Новий'),
(2, 'У сервісі'),
(3, 'Списаний');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `cartridge`
--
ALTER TABLE `cartridge`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `cart_change`
--
ALTER TABLE `cart_change`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблиці `cartridge`
--
ALTER TABLE `cartridge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `cart_change`
--
ALTER TABLE `cart_change`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
