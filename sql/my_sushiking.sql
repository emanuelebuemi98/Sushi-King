-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `my_sushiking`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `composto`
--

CREATE TABLE `composto` (
  `idcomposto` int(11) NOT NULL,
  `idsushi` int(11) DEFAULT NULL,
  `idingrediente` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `composto`
--

INSERT INTO `composto` (`idcomposto`, `idsushi`, `idingrediente`) VALUES
(3, 2, 1),
(4, 2, 2),
(5, 2, 6),
(6, 2, 20),
(7, 2, 3),
(8, 2, 17),
(9, 3, 1),
(10, 3, 2),
(11, 3, 6),
(12, 3, 12),
(13, 3, 3),
(14, 3, 20),
(15, 3, 17),
(16, 3, 11),
(17, 3, 9),
(18, 1, 1),
(19, 1, 2),
(20, 1, 19),
(21, 1, 5),
(22, 1, 9),
(23, 1, 4),
(24, 4, 1),
(25, 4, 2),
(26, 4, 5),
(27, 4, 20),
(28, 4, 9),
(29, 4, 12),
(30, 5, 1),
(31, 5, 2),
(32, 5, 6),
(33, 5, 20),
(34, 5, 3),
(35, 5, 15),
(36, 5, 21),
(37, 6, 1),
(38, 6, 2),
(39, 6, 6),
(40, 6, 13),
(41, 6, 18),
(42, 6, 22),
(43, 7, 1),
(44, 7, 6),
(45, 7, 16),
(46, 7, 14),
(47, 7, 23),
(48, 7, 22),
(49, 8, 6),
(50, 8, 5),
(51, 8, 7),
(52, 8, 8),
(53, 8, 23),
(54, 8, 22),
(55, 8, 24),
(56, 8, 3),
(57, 9, 25),
(58, 10, 25),
(59, 11, 25);

-- --------------------------------------------------------

--
-- Struttura della tabella `compreso`
--

CREATE TABLE `compreso` (
  `idcompreso` int(11) NOT NULL,
  `prezzo` double DEFAULT NULL,
  `quantita` int(20) DEFAULT NULL,
  `idordine` int(11) DEFAULT NULL,
  `idsushi` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `compreso`
--

INSERT INTO `compreso` (`idcompreso`, `prezzo`, `quantita`, `idordine`, `idsushi`) VALUES
(663, 7, 2, 336, 4),
(662, 5, 3, 339, 3),
(653, 5.5, 5, 341, 7),
(652, 6, 3, 342, 1),
(651, 8.5, 2, 335, 6),
(650, 40, 1, 339, 11),
(645, 4.5, 4, 336, 2),
(644, 32, 1, 341, 9),
(669, 6, 1, 345, 1),
(670, 9, 1, 345, 8),
(674, 4.5, 1, 346, 2),
(673, 6, 1, 346, 1),
(675, 8.5, 1, 346, 6),
(676, 35, 1, 347, 10),
(677, 4.5, 1, 347, 2),
(678, 8.5, 1, 347, 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `ingredienti`
--

CREATE TABLE `ingredienti` (
  `idingrediente` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ingredienti`
--

INSERT INTO `ingredienti` (`idingrediente`, `nome`) VALUES
(1, 'riso per sushi,'),
(2, 'alga nori,'),
(3, 'salsa di soia,'),
(4, 'semi di sesano nero,'),
(5, 'filetto di tonno fresco,'),
(6, 'filetto di salmone fresco,'),
(7, 'filetto di branzino fresco,'),
(8, 'filetto di orata fresca,'),
(9, 'cetriolo,'),
(10, 'carota,'),
(11, 'avocado,'),
(12, 'uova di pesce,'),
(13, 'polpa di granchio,'),
(14, 'fagiolini,'),
(15, 'gamberetti,'),
(16, 'riccio di mare,'),
(17, 'zenzero,'),
(18, 'erba cipollina,'),
(19, 'formaggio fresco,'),
(20, 'wasabi,'),
(21, 'sale fino,'),
(22, 'pepe nero,'),
(23, 'olio extravergine d oliva,'),
(24, 'daikon,'),
(25, 'sushi misto');

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE `ordini` (
  `idordine` int(11) NOT NULL,
  `idutente` int(11) DEFAULT NULL,
  `dataordine` datetime DEFAULT NULL,
  `Dataconsegna` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `ordini`
--

INSERT INTO `ordini` (`idordine`, `idutente`, `dataordine`, `Dataconsegna`) VALUES
(336, 28, '2020-02-17 12:11:54', '2021/05/04-22.00'),
(337, 67, '2020-03-21 20:01:51', NULL),
(338, 33, '2020-04-26 17:33:35', '2020-10-05T21:00'),
(339, 68, '2020-05-03 16:36:21', '2021/07/21-22.00'),
(340, 69, '2020-06-19 12:06:36', NULL),
(341, 28, '2020-06-21 15:50:23', '2021/09/11-22.00'),
(342, 28, '2020-07-08 15:50:47', '2021/10/19-22.00'),
(343, 72, '2020-08-22 15:55:58', NULL),
(335, 28, '2020-09-09 12:11:39', '2021/11/07-22.00'),
(344, 73, '2020-09-20 17:07:50', NULL),
(345, 33, '2020-09-24 18:12:28', '2020-10-05T21:00'),
(346, 33, '2020-09-29 15:42:18', '2020-10-05T21:00'),
(347, 33, '2020-09-30 12:49:50', '2020-10-05T21:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `titolo` char(20) DEFAULT NULL,
  `mex` char(100) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `idutente` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `post`
--

INSERT INTO `post` (`idpost`, `titolo`, `mex`, `data`, `idutente`) VALUES
(132, 'Eccellente', 'Ottimo lavoro', '2019-05-13 19:34:23', 33),
(131, 'Buono', 'Discreto sito per ordinare del buon sushi !!!', '2019-05-10 19:22:56', 50),
(121, 'Felice', 'Felice del servizio offerto', '2019-07-02 09:24:24', 44),
(120, 'Soddisfatto', 'Servizio veloce ed efficiente', '2019-10-02 09:23:48', 28),
(119, 'Ottimo', 'Ottimo sushi, fresco e delizioso', '2020-01-02 09:23:18', 30),
(148, 'Carino', 'Servizio soddisfacente', '2020-02-03 16:37:47', 68),
(149, 'Ottimo', 'Grandi, verrò ancora per assaggiare questi buonissimi prodotti', '2020-03-19 12:07:44', 69),
(150, 'Pessimo', 'Che schifo di posto, cibo pessimo!!!', '2020-04-19 12:15:26', 28),
(151, 'Decente', 'Non male anche se pensavo fosse meglio', '2020-06-21 15:16:24', 71),
(152, 'Scarso', 'Sushi di merda', '2020-08-15 17:06:46', 73),
(153, '10', 'ottimo', '2020-09-24 18:14:15', 33),
(154, 'Fenomenale', 'Mai mangiato qualcosa di cosi buono', '2020-09-30 15:31:44', 33);

-- --------------------------------------------------------

--
-- Struttura della tabella `sushi`
--

CREATE TABLE `sushi` (
  `idsushi` int(11) NOT NULL,
  `nome` char(20) DEFAULT NULL,
  `prezzo` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `sushi`
--

INSERT INTO `sushi` (`idsushi`, `nome`, `prezzo`) VALUES
(1, 'Uramaki: 8 pezzi', 6),
(2, 'Hosomaki: 6 pezzi', 4.5),
(3, 'Futomaki: 7 pezzi', 5),
(4, 'Temaki: 4 pezzi', 7),
(5, 'Nigiri: 2 pezzi', 3),
(6, 'Gunkan: 4 pezzi', 8.5),
(7, 'Onigiri: 3 pezzi', 5.5),
(8, 'Sashimi: 5 pezzi', 9),
(9, 'Barca PICCOLA', 32),
(10, 'Barca MEDIA', 35),
(11, 'Barca GRANDE', 40);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `idutente` int(11) NOT NULL,
  `nome` char(20) DEFAULT NULL,
  `cognome` char(20) DEFAULT NULL,
  `userid` char(20) DEFAULT NULL,
  `pass` char(20) DEFAULT NULL,
  `via` char(20) DEFAULT NULL,
  `numerovia` char(11) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `email` char(40) DEFAULT NULL,
  `Citta` char(40) DEFAULT NULL,
  `CAP` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`idutente`, `nome`, `cognome`, `userid`, `pass`, `via`, `numerovia`, `telefono`, `email`, `Citta`, `CAP`) VALUES
(33, 'Giovanni', 'Bellinvia', 'Master02', 'wilsushi', 'Del mare', '58', 2147483647, 'giovannibellinvia9@gmail.com', 'Barcellona P.G.', 98051),
(34, 'Carlo', 'Munafò', 'Carlino', 'finoallafine', 'Copernico', '9', 2147483647, 'carlomuna@hotmail.it', NULL, NULL),
(29, 'Aurora', 'Puliafito', 'auri2003', 'violetta', 'Incanto', '31', 909791664, 'auri_puliaf@tiscali.it', NULL, NULL),
(30, 'Marco', 'Carciofo', 'marcoc', 'marcoc95', 'Dante', '4', 2147483647, 'danteali@live.it', NULL, NULL),
(28, 'Emanuele', 'Buemi', 'emanu', 'forzajuve', 'Torquato Tasso', '17', 2147483647, 'emanu_98@live.it', 'Barcellona P.G.', 98051),
(40, 'Salvatore', 'Coppolino', 'salvocoppolino', 'pasquale97', 'Bellini', '36', 2147483647, 'songoten10@gmail.it', NULL, NULL),
(41, 'Riccardo', 'Genovese', 'rick', 'fantacalcio', 'Cornacchia', '1', 345815485, 'hfyfvhg', 'Palermo', NULL),
(56, 'Fabio', 'Gentile', 'CR7', 'cristiano', 'Studi', '12', 464323333, 'Drt', NULL, NULL),
(45, 'Giacomo', 'Gentile', 'Lasimazzi', 'giacomino95', 'Lorenzo Cutugno', '23', 2147483647, 'Shekiz@yahoo.it', 'Barcellona P. G.', 98051),
(46, 'Daniele', 'Castagnolo', 'danix', 'ilpiubello', 'vespri', '3', 909797847, 'da.nix.95@hotmail.it', 'Catania', NULL),
(48, 'Giuseppe', 'Catania', 'peps', 'burocrazia', 'Delle noci', '35', 978574563, 'tihosempreamata@hotmail.it', NULL, NULL),
(49, 'Vittorio', 'Floramo', 'vit', '1235', 'Della Marmora', '54', 2147483647, 'vit.flr@tiscali.it', NULL, NULL),
(50, 'Francesco', 'Valenti', 'FraAlonso', 'ferrari', 'Marcopolo', '6', 2147483647, 'cicciovale46@live.it', NULL, NULL),
(57, 'Filippo', 'Giambò', 'fili', 'rossi', 'Camparia', '5', 2147483647, 'filjuve@hotmail.it', 'Barcellona P.G.', 98051),
(58, 'Mario', 'Balotelli', 'supermario', '45', 'roma', '86', 3489104710, 'marione@gmail.it', NULL, NULL),
(59, 'Vittoria', 'Calabrò', 'sushi', 'king', 'Boccaccio', '8', 2147483647, 'contessa@live.it', 'Barcellona P.G.', 98051),
(60, 'Tonino', 'Mazzeo', 'tonino', 'tonino', 'medici', '11', 1234567891, 'tony95_juve@hotmail.it', '', 98058),
(61, 'Simone', 'Calvo', 'Misone', 'imani', 'Volturno', '8', 2147483647, 'calvosimone95@gmail.com', 'Carpi', 66051),
(67, 'Sara', 'Gambei', 'dovi', 'power', 'Filontrano', '24', 2147483647, 'dsa@sf.it', '', 56625),
(68, 'Fabiana', 'Impalà', 'Fabius', '12349', 'Basile', '17', 2147483647, 'fabi.imp.96@gmail.com', '', 98044),
(69, 'Davide', 'Faraoni', 'david', 'egitto', 'Cannistrà', '24', 245788442, 'verona@live.it', '', 41542),
(70, 'Alessandro', 'DelPiero', 'alex', 'juventus10', 'Torino', '44', 354444435, 'adp10@outlook.it', '', 65542),
(71, 'Maria', 'Bisignano', 'mariuzza', 'coccolona', 'Trebisonda', '54', 6118654654, 'meri@live.it', 'Trento', 65782),
(72, 'Lionel', 'Messi', 'leo', 'barsa', 'Barselona', '44', 545400004, 'leo10@gmail.it', 'Bueno Aires', 7545),
(73, 'Chiara', 'Castani', 'tucatuca', 'carful', 'jfxd', '54', 90781522, 'chiara.castani@hotmail.it', 'Cagliari', 98051),
(74, 'amministratore', '', 'admin', 'sushiking', '', '', 0, '', '', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `composto`
--
ALTER TABLE `composto`
  ADD PRIMARY KEY (`idcomposto`),
  ADD KEY `idsushi` (`idsushi`),
  ADD KEY `idingrediente` (`idingrediente`);

--
-- Indici per le tabelle `compreso`
--
ALTER TABLE `compreso`
  ADD PRIMARY KEY (`idcompreso`),
  ADD KEY `idordine` (`idordine`),
  ADD KEY `idsushi` (`idsushi`);

--
-- Indici per le tabelle `ingredienti`
--
ALTER TABLE `ingredienti`
  ADD PRIMARY KEY (`idingrediente`);

--
-- Indici per le tabelle `ordini`
--
ALTER TABLE `ordini`
  ADD PRIMARY KEY (`idordine`),
  ADD KEY `idutente` (`idutente`);

--
-- Indici per le tabelle `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `idutente` (`idutente`);

--
-- Indici per le tabelle `sushi`
--
ALTER TABLE `sushi`
  ADD PRIMARY KEY (`idsushi`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`idutente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `composto`
--
ALTER TABLE `composto`
  MODIFY `idcomposto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT per la tabella `compreso`
--
ALTER TABLE `compreso`
  MODIFY `idcompreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=679;

--
-- AUTO_INCREMENT per la tabella `ingredienti`
--
ALTER TABLE `ingredienti`
  MODIFY `idingrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT per la tabella `ordini`
--
ALTER TABLE `ordini`
  MODIFY `idordine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT per la tabella `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT per la tabella `sushi`
--
ALTER TABLE `sushi`
  MODIFY `idsushi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `idutente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;
