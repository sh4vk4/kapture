-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 05, 2022 at 09:32 PM
-- Server version: 8.0.24
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapture.`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int NOT NULL,
  `Purchases` int NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Featured` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `Type`, `Description`, `Price`, `Purchases`, `Photo`, `Featured`) VALUES
(1, 'Olympus Tough TG-6', 'камера', 'TG-6 обеспечивает отличную четкость изображения и качественные фотографии в широком диапазоне ISO, а также скоростную серийную съемку, 4K30p видео и Full HD 1080p на 120 к/с.', 38149, 1000, 'camera_1.png', NULL),
(2, 'HD 18MP 2,7\" TFT', 'камера', 'Мини-цифровая камера с 8-кратным увеличением, экраном 2,7 дюйма и системой защиты от повреждений. Идеально подходит для записи вашей жизни.Анти- функция встряхивания. Распознавание лиц. Захват улыбки. Продолжить съемку.', 2540, 1200, 'camera_2.png', NULL),
(3, '4\" IPS 4K Full HD', 'камера', 'Эта цифровая камера может поддерживать разрешение видео 4K (интерполяция) и 1080P, а также разрешение изображения 24MP. Так что качество видео и фотографий очень хорошее. Также очень легко передавать файлы с камеры на компьютер.', 5920, 1100, 'camera_3.png', 1),
(4, '7Artisans 50mm F0.95 Sony', 'объектив', 'Объектив 7artisans Photoelectric 50mm f / 0.95 отличается ярким дизайном и представляет собой портретный объектив с постоянным фокусным расстоянием для камер Sony с байонетом E.', 18009, 700, 'lens_1.png', NULL),
(5, '7Artisans 7.5mm F2.8 mark ii', 'объектив', 'Вторая генерация полностью мануального фишай-объектив с ультра-широким углом обзора, созданный для беззеркальных камер. Данный «рыбий глаз» является линейным, то есть изображение покрывает всю площадь матрицы.', 13239, 800, 'lens_2.png', NULL),
(6, 'Nikon 50mm f/1.8D AF Nikkor', 'объектив', 'Компактный фикс со стандартным фокусным расстоянием АФ НИККОР 50мм f/1.8Д от Никон – это простой и универсальный объектив для повседневной съемки и путешествий. Максимальная диафрагма f/1.8 подходит для работы в различных условиях освещения.', 10854, 800, 'lens_3.png', NULL),
(7, '7Artisans 35mm F1.2 mark ii Nikon', 'объектив', 'Компактный универсальный объектив 35мм f/1.2 от бренда 7artisans это полностью мануальный объектив, который подойдёт для портретной, репортажной и повседневной съемки при естественном поле зрения.', 11649, 800, 'lens_4.png', NULL),
(8, 'Fujifilm Instax Mini 11 White', 'камера', 'Объектив с двумя компонентами, мгновенный переход между режимами съемки, мощная вспышка, автоматические настройки — все это новая камера моментальной печати Фуджифильм.', 7409, 1200, 'camera_4.png', 1),
(9, 'Клетка Smallrig 3241', 'аксессуар', 'Многофункциональная клетка для камер Sony Alpha 1 и Alpha 7S III. Фиксируется на камере при помощи одного винта 1/4\" снизу и винта М2.5 сбоку, благодаря чему обеспечивается превосходная фиксация.', 6561, 1000, 'accessory_1.png', NULL),
(10, 'Карта баланса белого JJC', 'аксессуар', 'Комплект состоит из одной карты черного цвета, одной белой и одной 18% нейтрального серого.', 928, 600, 'accessory_2.png', NULL),
(11, 'Lowepro Rezo 170 AW', 'аксессуар', 'Прочная и изящная сумка разработана специально для цифровых фотоаппаратов и видеокамер. Не смотря на то, что эта сумка разработана для ношения в суровых условиях, она выглядит довольно изящно и отвечает требованиям самых пристрастных фотографов.', 2438, 700, 'accessory_3.png', NULL),
(12, 'Lowepro Vail 10', 'аксессуар', 'Lowepro Vail сконструирован из прочного, но при этом мягкого неопрена. Внутренняя подкладка так же сделана из мягкого материала для защиты жидкокристаллического монитора от пыли и царапин, а так же служит дополнительной защитой от ударов.', 534, 1000, 'accessory_4.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
