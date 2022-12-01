-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 01. pro 2022, 20:07
-- Verze serveru: 10.4.24-MariaDB
-- Verze PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `vibe`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `characters`
--

CREATE TABLE `characters` (
  `char_id` int(144) NOT NULL,
  `char_name` varchar(155) COLLATE utf8mb4_czech_ci NOT NULL,
  `sm_name` varchar(155) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(144) NOT NULL,
  `movie_name` char(155) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `outfits`
--

CREATE TABLE `outfits` (
  `out_id` int(144) NOT NULL,
  `char_name` varchar(155) COLLATE utf8mb4_czech_ci NOT NULL,
  `jacket` varchar(155) COLLATE utf8mb4_czech_ci NOT NULL,
  `shirt` varchar(155) COLLATE utf8mb4_czech_ci NOT NULL,
  `pants` varchar(155) COLLATE utf8mb4_czech_ci NOT NULL,
  `boots` varchar(155) COLLATE utf8mb4_czech_ci NOT NULL,
  `acc` varchar(155) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `series`
--

CREATE TABLE `series` (
  `series_id` int(144) NOT NULL,
  `series_name` char(155) COLLATE utf8mb4_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_czech_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_czech_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_czech_ci NOT NULL,
  `usertype` varchar(10) COLLATE utf8mb4_czech_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `email`, `password`, `usertype`) VALUES
(4, 2147483647, 'admin', 'admin@admin.com', 'admin', 'admin'),
(6, 121, 'test2', 's2@s.cz', '123', 'user');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`char_id`);

--
-- Indexy pro tabulku `movies`
--
ALTER TABLE `movies`
  ADD UNIQUE KEY `movie_id` (`movie_id`);

--
-- Indexy pro tabulku `outfits`
--
ALTER TABLE `outfits`
  ADD PRIMARY KEY (`out_id`);

--
-- Indexy pro tabulku `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`series_id`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `characters`
--
ALTER TABLE `characters`
  MODIFY `char_id` int(144) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(144) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `outfits`
--
ALTER TABLE `outfits`
  MODIFY `out_id` int(144) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `series`
--
ALTER TABLE `series`
  MODIFY `series_id` int(144) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
