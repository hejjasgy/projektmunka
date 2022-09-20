-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Sze 20. 12:57
-- Kiszolgáló verziója: 10.4.20-MariaDB
-- PHP verzió: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webaruhaz`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termek`
--

CREATE TABLE `termek` (
  `id` int(10) UNSIGNED NOT NULL,
  `termek_neve` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `kategoria` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `termek_ara` int(10) UNSIGNED NOT NULL,
  `termek_kepe_nagy` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `ternek_kepe_kicsi` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `mennyiseg` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `termek`
--

INSERT INTO `termek` (`id`, `termek_neve`, `kategoria`, `termek_ara`, `termek_kepe_nagy`, `ternek_kepe_kicsi`, `mennyiseg`) VALUES
(1, 'Hell Classic 250ml', 'Energiaital', 193, 'hell_classic_150.png', 'hell.png', 200),
(2, 'Kobra Energiaital 1500ml', 'Energiaital', 269, 'kobra_energiaital_1500.png', 'kobra.png', 500),
(3, 'Monster Energy 500ml', 'Energiaital', 499, 'monster_energy_500.png', 'monster.png', 215),
(4, 'Red Bull Energiaital 250ml', 'Energiaital', 544, 'red_bull_energy.png', 'red_bull.png', 125),
(5, 'Hell Energy Coffee Cappuccino 250ml', 'Energiaital', 219, 'hell_energy_coffee_cappuccino_250.png', 'hell.png', 156),
(6, 'Bomba! Energiaital 600ml', 'Energiaital', 249, 'bomba_energiaital_650.png', 'bomba.png', 145),
(7, 'Monster Mango Loco 500ml', 'Energiaital', 494, 'monster_mango_loco_500.png', 'monster.png', 421),
(8, 'Monster Espresso 250ml', 'Energiaital', 419, 'monster_espresso_250.png', 'monster.png', 800),
(9, 'Burn Original 250ml', 'Energiaital', 270, 'burn_original_250.png', 'burn.png', 300),
(10, 'Bomba! Energiaital 250ml - dobozos', 'Energiaital', 187, 'bomba_dobozos_250.png', 'bomba.png', 213),
(11, 'Hell Energy Coffee Latte 250ml', 'Energiaital', 219, 'hell_energy_coffee_latte_250.png', 'hell.png', 154),
(12, 'Monster Rehab 500ml', 'Energiaital', 509, 'monster_rehab_500.png', 'monster.png', 144),
(13, 'Monster Absolutely Zero 500ml', 'Energiaital', 491, 'monster_absolutely_zero_500.png', 'monster.png', 45);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `termek`
--
ALTER TABLE `termek`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `termek`
--
ALTER TABLE `termek`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
