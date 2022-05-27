-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Máj 27. 20:09
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `konyvklub`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `konyvek`
--
CREATE DATABASE IF NOT EXISTS `konyvklub` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `konyvklub`;

CREATE TABLE `konyvek` (
  `id` int(11) NOT NULL,
  `szerzo` varchar(45) NOT NULL,
  `cim` varchar(45) NOT NULL,
  `borito` varchar(255) DEFAULT NULL,
  `tartalom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `konyvek`
--

INSERT INTO `konyvek` (`id`, `szerzo`, `cim`, `borito`, `tartalom`) VALUES
(1, 'Fejős Éva', 'Eper reggelire', 'FejosEva.jpg', 'A nagy sikerű Hotel Bali című regényben megismert négy barátnő élete immár végérvényesen összefonódott, de továbbra sem mentes az izgalmaktól. Szilvit drámai próbatétel elé állítja a sors, Gabinak el kell döntenie, mi a fontosabb számára: a karrier vagy a párkapcsolat, Dóra pedig fontolgatja, hogy elhagyja Balit, a földi paradicsomot az igazi boldogság reményében. Helyrehozható-e a múltbeli bűn, amit Judit elkövetett, van-e újrakezdés a barátságban és a szerelemben?'),
(2, 'Paul Auster', 'Timbuktu', 'PaulAuster.jpg', 'Vajon az ebek ugyanabba a mennyországba jutnak, mint a gazdáik? E káprázatos könyv főszereplője Csonti úr, aki, habár négylábú, igazi hős: egy Willy G. Christmas nevezetű hajléktalan bizalmasa és elválaszthatatlan társa. Willy Brooklynban él. Úgy érzi, az egészsége lassan felmondja a szolgálatot, ezért felkerekedik, és útra kel Csonti úrral Baltimore felé, hogy megkeresse egykori irodalomtanárát és új otthont találjon barátjának.'),
(33, 'Patricia Gibney', 'Nincs menedék -Lotti Parker 4.', 'PatriciaGibney.jpg', 'A gyászolók némán állnak Ragmullin temetőjében, amikor éles sikoly töri meg a meghitt csendet. Egy nyitott sírgödörben egy fiatal nő összezúzott, véres holttestét találják, és Lottie Parker nyomozót kérik fel az ügy felderítésére. Mivel a test nem lehetett ott régóta, Lottie azt gyanítja, talán a pár nappal azelőtt eltűnt Elizabeth Bryne-t találták meg. Nagy a nyomás, hogy mielőbb megoldja a rejtélyt, ugyanis új főnöke nyilvánvalóan nem szíveli. Hamarosan újabb két nő tűnik el. Netán egy sorozatgyilkos jár szabadon a város utcáin? Ráadásul az eltűnések körülményei kísértetiesen hasonlítanak egy tíz évvel korábbi, megoldatlan ügyben tapasztaltakhoz... A történelem megismétli önmagát? Újságírók hátráltatják Lottie-t a nyomozásban, aki mindeközben attól tart, hogy a gyilkos újra lecsap, mielőtt ő elkaphatná. Versenyt fut az idővel, ám maga sem sejti, milyen közel van a tettes... Akinek talán éppen ő a következő célpontja.'),
(34, 'Bödőcs Tibor', 'Mulat a Manézs', 'BodocsTibor.jpg', '\"Bödőcs harmadik könyve a legmagasabb rangú művészet. De nem ám holmi tiritarka férfiszerelem dicsőítése! Nem. Bödőcs vaskosan kemény, fagyott pásztorkutya-dákójú, nőimádó művészetet szállít továbbra is, amely úgy csordul le az olvasónak a zsarnokságot kikiáltó okoskodás és picsogás redvás falatkáit folyton nyelni kényszerülő kiszáradt torkán, mint egy tányér ízletes oroszlánfóka-fitymakrémleves.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `nezettseg`
--

CREATE TABLE `nezettseg` (
  `id` int(11) NOT NULL,
  `ajanlo_id` int(11) NOT NULL DEFAULT 0,
  `dt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `nezettseg`
--

INSERT INTO `nezettseg` (`id`, `ajanlo_id`, `dt`) VALUES
(4, 2, '2022-05-23 17:37:34'),
(5, 1, '2022-05-23 17:50:18'),
(6, 1, '2022-05-23 17:50:21'),
(7, 1, '2022-05-23 17:50:23'),
(8, 1, '2022-05-23 17:50:25'),
(9, 2, '2022-05-23 17:55:04'),
(10, 2, '2022-05-23 17:55:06'),
(11, 2, '2022-05-23 17:55:07'),
(12, 2, '2022-05-23 17:55:08'),
(13, 2, '2022-05-23 17:55:08'),
(14, 2, '2022-05-23 17:55:09'),
(15, 1, '2022-05-23 18:10:09'),
(16, 1, '2022-05-23 18:10:12'),
(17, 1, '2022-05-23 18:10:14'),
(18, 33, '2022-05-23 19:00:07'),
(19, 33, '2022-05-23 19:00:12'),
(20, 33, '2022-05-23 19:00:16'),
(21, 33, '2022-05-23 19:00:18'),
(22, 33, '2022-05-23 19:00:21'),
(23, 33, '2022-05-23 19:00:24'),
(24, 33, '2022-05-23 19:00:27'),
(25, 33, '2022-05-23 19:00:30'),
(26, 34, '2022-05-27 17:24:34'),
(27, 34, '2022-05-27 17:24:36'),
(28, 34, '2022-05-27 17:24:39'),
(29, 34, '2022-05-27 17:24:42'),
(30, 34, '2022-05-27 17:24:45'),
(31, 34, '2022-05-27 17:24:49'),
(32, 34, '2022-05-27 17:25:21'),
(33, 34, '2022-05-27 17:25:38'),
(34, 34, '2022-05-27 17:25:41');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `t_users`
--

CREATE TABLE `t_users` (
  `id` int(11) NOT NULL,
  `u_name` varchar(45) DEFAULT NULL,
  `jelszo` varchar(45) DEFAULT NULL,
  `nev` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `konyvek`
--
ALTER TABLE `konyvek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `nezettseg`
--
ALTER TABLE `nezettseg`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_UNIQUE` (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `konyvek`
--
ALTER TABLE `konyvek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT a táblához `nezettseg`
--
ALTER TABLE `nezettseg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT a táblához `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
