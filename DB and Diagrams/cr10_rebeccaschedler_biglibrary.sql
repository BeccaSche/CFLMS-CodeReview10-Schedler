-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 16:45
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_rebeccaschedler_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_rebeccaschedler_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cr10_rebeccaschedler_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) UNSIGNED NOT NULL,
  `media_type` varchar(55) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `genere` varchar(255) NOT NULL,
  `publish_year` int(4) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `availability` int(1) NOT NULL DEFAULT 1,
  `isbn` int(30) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `media_type`, `title`, `author`, `description`, `genere`, `publish_year`, `publisher`, `image`, `availability`, `isbn`) VALUES
(1, 'VHS', 'Groundhog Day', 'Danny Rubin and Harold Ramis', 'A cynical weatherman gets caught in a personal time warp, endlessly repeating the worst day of his life.', 'Fantasy Comedy', 1993, 'Columbia Pictures presents', 'https://images-na.ssl-images-amazon.com/images/I/51JC4SGXK1L._SY445_.jpg', 1, 324234),
(3, 'Book', 'The God of Small Things', 'Arundhati Roy', 'Compared favorably to the works of Faulkner and Dickens, Arundhati Roy’s modern classic is equal parts powerful family saga, forbidden love story, and piercing political drama.', 'Coming of Age Fiction', 1996, 'PERFECTION LEARNING CORP', 'https://images-na.ssl-images-amazon.com/images/I/41iffjvqdQL._SX322_BO1,204,203,200_.jpg', 1, 1606865617),
(5, 'CD', 'Urban Hymns', 'The Verve', 'Things will never be the same again after their super Hit \"Bitter Sweet Symphony\".', 'Indie/Alternative', 1997, 'Virgin (Universal Music)', 'https://images-na.ssl-images-amazon.com/images/I/71UpxJQy0xL._SL1418_.jpg', 1, 2343467000),
(8, 'Book', 'The Things They Carried', 'Tim O’Brien', 'Another Book about the Vietnam war, but it’s frequently heralded as one of the best books ever written about the war. Or is it about story telling and human memory, maybe all of that.', 'War Story Fiction', 1990, 'Mariner Books ', 'https://images-na.ssl-images-amazon.com/images/I/417bchK15BL._SX330_BO1,204,203,200_.jpg', 1, 544309766),
(9, 'VHS', 'Die Truman Show', 'Peter Weir ', 'The film stars Jim Carrey as Truman Burbank who grew up living an ordinary life that unbeknown to him, takes place on a large set populated by actors for a television show about him, until he discovers the truth and decides to escape.', 'Science fiction comedy-drama', 1998, ' Paramount', 'https://images-na.ssl-images-amazon.com/images/I/81sDM9QdppL._SY445_.jpg', 1, 2386479),
(10, 'Movie', 'Clueless', 'Amy Heckerling', 'Pure 90s Chick-Flick with Cher Horowitz, a beautiful, clever and rich high school student who befriends a new student named Tai Frasier and decides to give her a makeover.', 'Coming-of-age Teen Comedy', 1995, 'Paramount Studios', 'https://images-na.ssl-images-amazon.com/images/I/517GCKWG9HL._SY445_.jpg', 1, 4294967295),
(11, 'CD', 'Nevermind', 'Nirvana', 'Smells like Teen spirit... Nirvana 4 ever! ', 'Grunge', 1991, 'DGC', 'https://images-na.ssl-images-amazon.com/images/I/51euXHAyPzL._SY355_.jpg', 1, 2346114667),
(12, 'CD', 'Spice', 'Spice Girls', 'Spice is the debut studio album by English girl group the Spice Girls.', 'Pop', 1996, 'Virgin', 'https://images-na.ssl-images-amazon.com/images/I/412UfSGqGML._SX425_.jpg', 1, 234765789),
(13, 'Book', 'Infinite Jest', 'David Foster Wallace', 'Somewhere in the not-so-distant future the residents of Ennet House, a Boston halfway house for recovering addicts, and students at the nearby Enfield Tennis Academy are ensnared in the search for the master copy of Infinite Jest, a movie said to be so da', 'Absurdist Fiction', 1997, 'Abacus', 'https://images-na.ssl-images-amazon.com/images/I/51fpUXXTBlL._SX327_BO1,204,203,200_.jpg', 1, 349121087),
(14, 'CD', 'Left of the Middle', 'Natalie Imbruglia,', 'Debut studio album with the mega Hit \"Torn\" ', 'pop pop-rock', 1998, 'RCA', 'https://upload.wikimedia.org/wikipedia/en/thumb/3/3d/Natalie_Imbruglia_-_Left_of_the_Middle.png/220px-Natalie_Imbruglia_-_Left_of_the_Middle.png', 1, 457987111),
(16, 'VHS', 'dfsdf', 'dfs', 'ererwre', 'Coming of Age Fiction', 1991, 'ttttttttttt', 'https://images-na.ssl-images-amazon.com/images/I/41iffjvqdQL._SX322_BO1,204,203,200_.jpg', 1, 346786544);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
