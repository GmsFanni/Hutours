-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Ápr 19. 20:57
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `zaro`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `foglalas`
--

CREATE TABLE `foglalas` (
  `foglalas_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `idopont_id` int(11) NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `helyek`
--

CREATE TABLE `helyek` (
  `H_id` int(11) NOT NULL,
  `Varosok` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `foto_url` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `city_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `helyek`
--

INSERT INTO `helyek` (`H_id`, `Varosok`, `foto_url`, `city_id`) VALUES
(1, 'Esztergom', 'esztergom.jpg', 3053163),
(2, 'Kecskemét', 'Kecskemet.jpg', 3050434),
(3, 'Pécs', 'pecs.jpg', 3046526),
(4, 'Szilvásvárad', 'szilvasvarad.jpg', 715217),
(5, 'Szeged', 'Szeged.jpg', 715429),
(6, 'Veszprém', 'veszprem.jpg', 3042929),
(7, 'Győr', 'gyor.jpg', 3052009),
(8, 'Miskolc', 'miskolc.jpg', 717582),
(9, 'Szeged', 'szeged.jpg', 715429),
(10, 'Siófok', 'siofok.jpg', 3045332),
(11, 'Zalaegerszeg', 'zalaegerszeg.jpg', 3042638),
(12, 'Hollókő', 'holloko.jpg', 3045804),
(13, 'Kékestető', 'kekesteto.jpg', 719280),
(14, 'Békéscsaba', 'bekescsaba.jpg', 722437),
(15, 'Debrecen', 'debrecen.jpg', 721472),
(16, 'Tatabánya', 'tatabanya.jpg', 3044082),
(17, 'Tihany', 'tihany.jpg', 3043927),
(18, 'Eger', 'eger.jpg', 721239),
(19, 'Keszthely', 'keszthely.jpg', 3050212),
(20, 'Hévíz', 'heviz.jpg', 3051477),
(21, 'Villány', 'villany.jpg', 3042871),
(22, 'Tata', 'tata.jpg', 3044083),
(23, 'Hortobágy', 'hortobagy.jpg', 719895),
(24, 'Aggtelek', 'aggtelek.jpg', 715355),
(25, 'Mohács', 'mohacs.jpg', 3047967),
(26, 'Gödöllő', 'godollo.jpg', 3052236),
(27, 'Pannonhalma', 'pannonhalma.jpg', 3046693),
(28, 'Nyíregyháza', 'nyiregyhaza.jpg', 716935),
(29, 'Sopron', 'sopron.jpg', 3045190),
(30, 'Bükkszék', 'bukkszek.jpg', 3054597);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `idopontok`
--

CREATE TABLE `idopontok` (
  `id` int(11) NOT NULL,
  `hely_id` int(11) NOT NULL,
  `Ido_mikoroda` date NOT NULL,
  `Ido_oda` time NOT NULL,
  `Ido_visszamikor` date NOT NULL,
  `Ido_vissza` time NOT NULL,
  `arak` varchar(11) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `idopontok`
--

INSERT INTO `idopontok` (`id`, `hely_id`, `Ido_mikoroda`, `Ido_oda`, `Ido_visszamikor`, `Ido_vissza`, `arak`) VALUES
(1, 1, '2023-05-01', '06:00:00', '2023-05-01', '20:00:00', '5000 Ft/fő'),
(2, 2, '2023-05-31', '06:00:00', '2023-05-31', '20:00:00', '5000 Ft/fő'),
(3, 3, '2023-05-02', '06:00:00', '2023-05-02', '20:00:00', '5000 Ft/fő'),
(4, 4, '2023-05-03', '06:00:00', '2023-05-03', '20:00:00', '5000 Ft/fő'),
(5, 5, '2023-05-11', '06:00:00', '2023-05-11', '20:00:00', '5000 Ft/fő'),
(6, 6, '2023-05-12', '06:00:00', '2023-05-12', '20:00:00', '5000 Ft/fő'),
(7, 7, '2023-05-16', '06:00:00', '2023-05-16', '20:00:00', '5000 Ft/fő'),
(8, 8, '2023-05-17', '06:00:00', '2023-05-17', '20:00:00', '5000 Ft/fő'),
(9, 9, '2023-05-25', '06:00:00', '2023-05-25', '20:00:00', '5000 Ft/fő'),
(10, 10, '2023-05-25', '06:00:00', '2023-05-25', '20:00:00', '5000 Ft/fő'),
(11, 11, '2023-06-01', '06:00:00', '2023-06-01', '20:00:00', '5000 Ft/fő'),
(12, 12, '2023-06-02', '06:00:00', '2023-06-02', '20:00:00', '5000 Ft/fő'),
(13, 13, '2023-06-05', '06:00:00', '2023-06-05', '20:00:00', '5000 Ft/fő'),
(14, 14, '2023-06-06', '06:00:00', '2023-06-06', '20:00:00', '5000 Ft/fő'),
(15, 15, '2023-06-09', '06:00:00', '2023-06-09', '20:00:00', '5000 Ft/fő'),
(16, 16, '2023-06-10', '06:00:00', '2023-06-10', '20:00:00', '5000 Ft/fő'),
(17, 17, '2023-06-16', '06:00:00', '2023-06-16', '20:00:00', '5000 Ft/fő'),
(18, 18, '2023-06-17', '06:00:00', '2023-06-17', '20:00:00', '5000 Ft/fő'),
(19, 19, '2023-06-23', '06:00:00', '2023-06-23', '20:00:00', '5000 Ft/fő\n'),
(20, 20, '2023-06-24', '06:00:00', '2023-06-24', '20:00:00', '5000 Ft/fő\n'),
(21, 21, '2023-06-30', '06:00:00', '2023-06-30', '20:00:00', '5000 Ft/fő\n'),
(22, 22, '2023-07-01', '06:00:00', '2023-07-01', '20:00:00', '5000 Ft/fő\n'),
(23, 23, '2023-07-07', '06:00:00', '2023-07-07', '20:00:00', '5000 Ft/fő\n'),
(24, 24, '2023-07-08', '06:00:00', '2023-07-08', '20:00:00', '5000 Ft/fő\n'),
(25, 25, '2023-07-14', '06:00:00', '2023-07-14', '20:00:00', '5000 Ft/fő\n'),
(26, 26, '2023-07-15', '06:00:00', '2023-07-15', '20:00:00', '5000 Ft/fő\n'),
(27, 27, '2023-07-21', '06:00:00', '2023-07-21', '20:00:00', '5000 Ft/fő\n'),
(28, 28, '2023-07-22', '06:00:00', '2023-07-22', '20:00:00', '5000 Ft/fő\n'),
(29, 29, '2023-08-04', '06:00:00', '2023-08-04', '20:00:00', '5000 Ft/fő\n'),
(30, 30, '2023-08-04', '06:00:00', '2023-08-04', '20:00:00', '5000 Ft/fő\n'),
(31, 1, '2023-06-14', '06:30:00', '2023-06-16', '20:30:00', '5000 Ft/fő\n'),
(32, 1, '2023-08-09', '07:00:00', '2023-08-12', '20:30:00', '5000 Ft/fő\n'),
(33, 2, '2023-06-21', '06:30:00', '2023-06-23', '20:30:00', '5000 Ft/fő\n'),
(34, 2, '2023-07-23', '07:00:00', '2023-07-27', '21:00:00', '5000 Ft/fő\n'),
(35, 3, '2023-06-05', '06:00:00', '2023-06-07', '20:00:00', '5000 Ft/fő\n'),
(36, 2, '2023-09-03', '06:30:00', '2023-09-05', '20:30:00', '5000 Ft/fő\n'),
(37, 4, '2023-07-25', '06:00:00', '2023-07-27', '20:00:00', '5000 Ft/fő\n'),
(38, 4, '2023-08-25', '06:00:00', '2023-08-27', '20:00:00', '5000 Ft/fő\n'),
(39, 5, '2023-06-04', '07:00:00', '2023-06-07', '20:00:00', '5000 Ft/fő\n'),
(40, 5, '2023-08-29', '07:00:00', '2023-08-30', '20:00:00', '5000 Ft/fő\n'),
(41, 6, '2023-10-10', '06:30:00', '2023-10-10', '20:30:00', '5000 Ft/fő\n'),
(42, 6, '2023-12-06', '06:30:00', '2023-12-07', '20:30:00', '5000 Ft/fő\n'),
(43, 7, '2023-06-11', '06:30:00', '2023-06-13', '20:00:00', '5000 Ft/fő\n'),
(44, 7, '2023-10-01', '07:00:00', '2023-10-01', '20:00:00', '5000 Ft/fő\n'),
(45, 8, '2023-08-17', '06:30:00', '2023-08-19', '20:00:00', '5000 Ft/fő\n'),
(46, 8, '2023-09-20', '06:00:00', '2023-09-23', '21:00:00', '5000 Ft/fő\n'),
(47, 9, '2023-06-15', '06:00:00', '2023-06-17', '20:00:00', '5000 Ft/fő\n'),
(48, 9, '2023-08-15', '07:00:00', '2023-08-19', '20:00:00', '5000 Ft/fő\n'),
(49, 10, '2023-07-16', '06:00:00', '2023-07-22', '21:00:00', '5000 Ft/fő\n'),
(50, 10, '2023-08-01', '06:00:00', '2023-08-05', '21:00:00', '5000 Ft/fő\n');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(10) COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `velemeny`
--

CREATE TABLE `velemeny` (
  `v_id` int(11) NOT NULL,
  `v_nev` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `v_email` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `v_targy` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `v_szoveg` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `v_idopont` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `foglalas`
--
ALTER TABLE `foglalas`
  ADD PRIMARY KEY (`foglalas_id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `idopont_id` (`idopont_id`);

--
-- A tábla indexei `helyek`
--
ALTER TABLE `helyek`
  ADD PRIMARY KEY (`H_id`);

--
-- A tábla indexei `idopontok`
--
ALTER TABLE `idopontok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Ido_id` (`hely_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A tábla indexei `velemeny`
--
ALTER TABLE `velemeny`
  ADD PRIMARY KEY (`v_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `foglalas`
--
ALTER TABLE `foglalas`
  MODIFY `foglalas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT a táblához `helyek`
--
ALTER TABLE `helyek`
  MODIFY `H_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT a táblához `idopontok`
--
ALTER TABLE `idopontok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT a táblához `velemeny`
--
ALTER TABLE `velemeny`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `foglalas`
--
ALTER TABLE `foglalas`
  ADD CONSTRAINT `foglalas_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `foglalas_ibfk_2` FOREIGN KEY (`idopont_id`) REFERENCES `idopontok` (`id`);

--
-- Megkötések a táblához `idopontok`
--
ALTER TABLE `idopontok`
  ADD CONSTRAINT `idopontok_ibfk_1` FOREIGN KEY (`hely_id`) REFERENCES `helyek` (`H_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
