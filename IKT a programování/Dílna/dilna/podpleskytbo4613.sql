-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Počítač: sql6.webzdarma.cz:3306
-- Vytvořeno: Stř 13. kvě 2026, 16:55
-- Verze serveru: 8.0.45-36
-- Verze PHP: 8.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `podpleskytbo4613`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `logs`
--

CREATE TABLE `logs` (
  `log_id` int NOT NULL,
  `user_id` int NOT NULL,
  `machine_id` int NOT NULL,
  `order_id` int NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `part_quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `machines`
--

CREATE TABLE `machines` (
  `machine_id` int NOT NULL,
  `machine_name` varchar(63) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `machine_type` varchar(63) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `status` varchar(63) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `materials`
--

CREATE TABLE `materials` (
  `material_id` int NOT NULL,
  `material_name` varchar(63) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `quantity` int NOT NULL,
  `unit` varchar(63) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `location` varchar(63) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `customer_name` varchar(63) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `part_id` int NOT NULL,
  `part_quantity` int NOT NULL,
  `deadline` date NOT NULL,
  `status` varchar(63) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `parts`
--

CREATE TABLE `parts` (
  `part_id` int NOT NULL,
  `part_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `part_quantity` int NOT NULL,
  `schematic` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `material_id` int NOT NULL,
  `material_need` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `Users`
--

CREATE TABLE `Users` (
  `user_id` int NOT NULL,
  `username` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `surname` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL,
  `role` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `machine_id` (`machine_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexy pro tabulku `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`machine_id`);

--
-- Indexy pro tabulku `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexy pro tabulku `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `part_id` (`part_id`);

--
-- Indexy pro tabulku `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `material_id` (`material_id`);

--
-- Indexy pro tabulku `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `machines`
--
ALTER TABLE `machines`
  MODIFY `machine_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `materials`
--
ALTER TABLE `materials`
  MODIFY `material_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `parts`
--
ALTER TABLE `parts`
  MODIFY `part_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `machine_id` FOREIGN KEY (`machine_id`) REFERENCES `machines` (`machine_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `Users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Omezení pro tabulku `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `part_id` FOREIGN KEY (`part_id`) REFERENCES `parts` (`part_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Omezení pro tabulku `parts`
--
ALTER TABLE `parts`
  ADD CONSTRAINT `material_id` FOREIGN KEY (`material_id`) REFERENCES `materials` (`material_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
