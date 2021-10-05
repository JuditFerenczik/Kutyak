-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Okt 05. 22:43
-- Kiszolgáló verziója: 10.4.19-MariaDB
-- PHP verzió: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `allatok`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kutyik`
--

CREATE TABLE `kutyik` (
  `Id` int(11) NOT NULL,
  `fajta` varchar(20) NOT NULL,
  `testsúly` int(11) NOT NULL,
  `magasság` int(11) NOT NULL,
  `név` varchar(15) NOT NULL,
  `születésnap` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `kutyik`
--

INSERT INTO `kutyik` (`Id`, `fajta`, `testsúly`, `magasság`, `név`, `születésnap`) VALUES
(1, 'beagle', 12, 45, 'Buksi', '2009-07-14'),
(2, 'mopsz', 4, 23, 'Doug', '2017-05-09'),
(3, 'németjuhász', 42, 56, 'Brutusz', '2016-04-03'),
(4, 'bearded collie', 18, 42, 'Kiwi', '2018-08-21'),
(5, 'magyar vizsla', 36, 54, 'Lavina', '2012-07-10'),
(6, 'akita', 52, 70, 'Naru', '2011-03-08'),
(7, 'mopsz', 5, 21, 'Fanni', '2021-03-11'),
(12, 'beagle', 7, 31, 'Chiara', '2021-04-15'),
(19, 'törpe pincser', 5, 15, 'Fanni', '2021-07-08'),
(23, 'tacskó', 14, 12, 'Gömbi', '2021-07-07');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `kutyik`
--
ALTER TABLE `kutyik`
  ADD PRIMARY KEY (`Id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `kutyik`
--
ALTER TABLE `kutyik`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
