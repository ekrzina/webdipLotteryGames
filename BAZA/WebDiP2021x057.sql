-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2022 at 01:42 AM
-- Server version: 5.5.62-0+deb8u1
-- PHP Version: 7.2.25-1+0~20191128.32+debian8~1.gbp108445

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WebDiP2021x057`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dnevnik`
--

CREATE TABLE `Dnevnik` (
  `idDnevnik` int(11) NOT NULL,
  `datumVrijemeRadnje` datetime NOT NULL,
  `radnja` text NOT NULL,
  `upit` text,
  `Korisnik_idKorisnik` int(11) NOT NULL,
  `TipRadnje_idTipRadnje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Dnevnik`
--

INSERT INTO `Dnevnik` (`idDnevnik`, `datumVrijemeRadnje`, `radnja`, `upit`, `Korisnik_idKorisnik`, `TipRadnje_idTipRadnje`) VALUES
(13, '2022-06-10 16:02:31', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(14, '2022-06-10 16:02:31', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(15, '2022-06-10 16:14:36', 'Za korisnika cban broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'cban\'', 12, 2),
(16, '2022-06-10 16:14:36', 'Korisnik cban prijavljuje se.', NULL, 12, 1),
(17, '2022-06-10 16:16:39', 'Za korisnika dantelion broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(18, '2022-06-10 16:16:39', 'Korisnik dantelion prijavljuje se.', NULL, 14, 1),
(19, '2022-06-10 16:16:42', 'Korisnik dantelion se odjavljuje.', NULL, 14, 1),
(20, '2022-06-10 16:41:42', 'Korisnik dantelion upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(22, '2022-06-10 16:47:21', 'Korisnik Klinček upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'Klinček\'', 26, 2),
(23, '2022-06-10 16:47:26', 'Korisnik Klinček upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'Klinček\'', 26, 2),
(24, '2022-06-10 16:48:15', 'Korisnik Klinček upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 3 WHERE korisnickoIme = \'Klinček\'', 26, 2),
(25, '2022-06-10 16:48:15', 'Korisnik Klinček je blokiran.', 'UPDATE Korisnik SET statusKorisnika = 1 WHERE korisnickoIme = \'Klinček\'', 26, 2),
(26, '2022-06-10 16:48:23', 'Korisnik Klinček upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 4 WHERE korisnickoIme = \'Klinček\'', 26, 2),
(27, '2022-06-10 16:48:46', 'Korisnik Klinček upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 5 WHERE korisnickoIme = \'Klinček\'', 26, 2),
(28, '2022-06-10 16:54:08', 'Korisnik cban upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'cban\'', 12, 2),
(44, '2022-06-10 17:16:57', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(45, '2022-06-10 17:16:57', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(46, '2022-06-10 17:20:09', 'Korisnik ekrzina ažurira kolo.', 'UPDATE Kolo SET nazivKolo=\'Kolo 6 EuroJackpot\', datumIsplate = \'2022-06-20 00:00:00\', IgraNaSrecu_idIgraNaSrecu = \'1\' WHERE idKolo = \'6\'', 1, 2),
(47, '2022-06-10 17:29:14', 'Korisnik ekrzina kreira novo kolo.', 'INSERT INTO Kolo (nazivKolo, statusKola, generiraniBrojevi, datumIsplate, IgraNaSrecu_idIgraNaSrecu) VALUES (\'Kolo 17 Kralj Tref\', 0, null, \'2022-06-29 00:00:00\', \'10\')', 1, 2),
(48, '2022-06-10 17:34:19', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(49, '2022-06-10 17:36:09', 'Za korisnika EmaBB broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EmaBB\'', 2, 2),
(50, '2022-06-10 17:36:09', 'Korisnik EmaBB prijavljuje se.', NULL, 2, 1),
(51, '2022-06-10 17:38:00', 'Korisnik EmaBB šalje zahtjev za isplatom.', 'INSERT INTO ZahtjevZaIsplatom (iznosIsplate, potvrdeno, Listic_idListic, Korisnik_idKorisnik) VALUES (\'2500\', null, \'43\', null)', 2, 2),
(52, '2022-06-10 17:39:50', 'Korisnik EmaBB šalje zahtjev za isplatom.', 'INSERT INTO ZahtjevZaIsplatom (iznosIsplate, potvrdeno, Listic_idListic, Korisnik_idKorisnik) VALUES (\'2500\', null, \'44\', null)', 2, 2),
(53, '2022-06-10 17:43:28', 'Korisnik EmaBB potvrđuje zahtjev za isplatom.', 'UPDATE ZahtjevZaIsplatom SET potvrdeno = \'2022-06-10 17:43:28\', Korisnik_idKorisnik = 2 WHERE idZahtjevZaIsplatom = 17', 2, 2),
(54, '2022-06-10 17:45:42', 'Korisnik EmaBB otvara kolo 17.', 'UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = \'17\'', 2, 2),
(57, '2022-06-10 18:02:18', 'Registriran je novi korisnik LavLov.', 'INSERT INTO Korisnik (korisnickoIme, imePrezime, lozinka, lozinkaSha256, datumRegistracije, email, uvjetiKoristenja, brojNeuspjesnihPrijava, statusKorisnika, uloga_idUloga, aktivacijskiKod, vrijemeIstekaKoda) VALUES (\'LavLov\', \'Leopold Leonin\', \'lavica\' , \'b3d3c228094673f10e94d25219ac2f8379e133e3b2776d1baefee8aac089f5d2\', \'2022-06-10 18:02:18\', \'leoleon@gmail.com\', null, 0, 0, 1, \'KlooguZgIb\', \'2022-06-11 01:02:18\')', 46, 2),
(64, '2022-06-10 18:45:23', 'Korisnik EmaBB se odjavljuje.', NULL, 2, 1),
(65, '2022-06-10 18:45:41', 'Za korisnika LavLov broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'LavLov\'', 46, 2),
(66, '2022-06-10 18:45:41', 'Korisnik LavLov prijavljuje se.', NULL, 46, 1),
(67, '2022-06-10 18:48:44', 'Korisnik LavLov postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 99-122-7323\', \'leoleon@gmail.com\', \'Ulica Vladimira Nazora 34\', \'31 59 83 24 92 15\', null, null, \'4\', \'46\', \'3\', \'3\', \'listici/lotto-ticket-illustration-design-over-white-background-48016359.jpg\', \'2022-06-10 18:48:44\')', 46, 2),
(68, '2022-06-10 18:53:11', 'Korisnik LavLov postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 99-102-2466\', \'leoleon@gmail.com\', \'Ulica Vladimira Nazora 34\', \'40 81 77 95 12 92 64 74 34 29 82 54 19 20 4 59 53 75 84 32\', null, null, \'4\', \'46\', \'15\', \'16\', \'listici/1_Lotteryjpeg.jpg\', \'2022-06-10 18:53:11\')', 46, 2),
(69, '2022-06-10 19:10:12', 'Korisnik LavLov se odjavljuje.', NULL, 46, 1),
(70, '2022-06-10 19:10:19', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(71, '2022-06-10 19:10:19', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(72, '2022-06-10 19:10:32', 'Korisnik ekrzina zatvara kolo 15. ', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'8 89 87 75 12 61 1 19 23 85 67 71 74 13 62 81 18 25 98 82\' WHERE idKolo = \'15\'', 1, 2),
(73, '2022-06-10 19:59:06', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(74, '2022-06-10 19:59:06', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(75, '2022-06-10 19:59:18', 'Korisnik ekrzina otvara kolo 16.', 'UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = \'16\'', 1, 2),
(76, '2022-06-10 20:01:41', 'Korisnik ekrzina zatvara kolo 16.', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'75 55 37 39 15 71 44 14 57 47 20 12 1 60 89 59 73 56 54 2\' WHERE idKolo = \'16\'', 1, 2),
(77, '2022-06-10 20:02:09', 'Korisnik ekrzina otvara kolo 16.', 'UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = \'16\'', 1, 2),
(78, '2022-06-10 20:06:44', 'Korisnik ekrzina ažurira igru na sreću 1.', 'UPDATE IgraNaSrecu SET cijenaListicaIgre = \'10\', DatumVrijemePocetka = \'2022-04-11 12:00:00\', nazivIgre = \'EuroJackpot\', brojIzvlacenja = \'12\', fondPoPogodenomBroju = \'7500\', DatumVrijemeZavrsetka = \'2022-06-11 13:00:00\' WHERE idIgraNaSrecu = \'1\'', 1, 2),
(79, '2022-06-10 20:06:54', 'Korisnik ekrzina ažurira igru na sreću 1.', 'UPDATE IgraNaSrecu SET cijenaListicaIgre = \'10\', DatumVrijemePocetka = \'2022-04-11 12:00:00\', nazivIgre = \'EuroJackpot\', brojIzvlacenja = \'10\', fondPoPogodenomBroju = \'7500\', DatumVrijemeZavrsetka = \'2022-06-11 13:00:00\' WHERE idIgraNaSrecu = \'1\'', 1, 2),
(80, '2022-06-10 20:08:38', 'Korisnik ekrzina ažurira igru na sreću 8.', 'UPDATE IgraNaSrecu SET cijenaListicaIgre = \'7.5\', DatumVrijemePocetka = \'2022-05-07 12:20:00\', nazivIgre = \'Toto 13\', brojIzvlacenja = \'13\', fondPoPogodenomBroju = \'1300\', DatumVrijemeZavrsetka = \'2022-06-10 13:10:00\' WHERE idIgraNaSrecu = \'8\'', 1, 2),
(81, '2022-06-10 20:11:07', 'Korisnik ekrzina zatvara kolo 16.', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'60 75 25 76 87 30 50 13 92 20 65 31 61 98 63 1 85 70 66 73\' WHERE idKolo = \'\'', 1, 2),
(82, '2022-06-10 20:11:23', 'Korisnik ekrzina zatvara kolo 16.', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'12 83 35 36 16 3 14 46 19 53 88 89 59 38 9 47 42 76 34 92\' WHERE idKolo = \'\'', 1, 2),
(83, '2022-06-10 20:12:58', 'Korisnik ekrzina zatvara kolo 16', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'70 96 80 41 1 21 92 9 22 62 74 37 19 53 34 7 94 64 93 71\' WHERE idKolo = \'16\'', 1, 2),
(84, '2022-06-10 20:14:08', 'Korisnik ekrzina otvara kolo 15.', 'UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = \'15\'', 1, 2),
(85, '2022-06-10 20:14:22', 'Korisnik ekrzina zatvara kolo 17', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'20 71 75 46 85 97 82 32 6 34\' WHERE idKolo = \'17\'', 1, 2),
(86, '2022-06-10 20:15:40', 'Korisnik ekrzina otvara kolo 17.', 'UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = \'17\'', 1, 2),
(87, '2022-06-10 20:15:47', 'Korisnik ekrzina zatvara kolo 17', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'2 55 8 52 9 92 4 53 6 32\' WHERE idKolo = \'17\'', 1, 2),
(88, '2022-06-10 20:24:07', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(89, '2022-06-10 20:24:23', 'Za korisnika LavLov broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'LavLov\'', 46, 2),
(90, '2022-06-10 20:24:23', 'Korisnik LavLov prijavljuje se.', NULL, 46, 1),
(91, '2022-06-10 20:25:14', 'Korisnik LavLov ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'31 59 83 24 92 15\', telefon = \' 385 99-102-2466\', email = \'leoleon@gmail.com\', adresa = \'Ulica Vladimira Nazora 34\', slikaIspunjenogListica = \'listici/1_Lotteryjpeg.jpg\' WHERE idListic = \'45\'', 46, 2),
(92, '2022-06-10 20:31:34', 'Korisnik LavLov se odjavljuje.', NULL, 46, 1),
(93, '2022-06-10 20:31:57', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(94, '2022-06-10 20:31:57', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(95, '2022-06-10 20:33:36', 'Korisnik Edmund F. kreira igru na sreću. ', 'INSERT INTO IgraNaSrecu (nazivIgre, cijenaListicaIgre, datumVrijemePocetka, datumVrijemeZavrsetka, brojIzvlacenja, fondPoPogodenomBroju) VALUES (\'Lotto Max\', \'7\', \'2022-06-07 12:40:00\', \'2022-06-30 13:10:00\', null, null)', 8, 2),
(96, '2022-06-10 20:33:36', 'Korisnik Edmund F.igru Lotto Max pridružuje lutriji 2.', 'INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES (\'21\', \'2\')', 8, 2),
(97, '2022-06-10 20:41:38', 'Korisnik Edmund F. igru 1 pridružuje lutriji 1.', 'INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES (\'1\', \'1\')', 8, 2),
(98, '2022-06-10 20:45:02', 'Korisnik Edmund F. se odjavljuje.', NULL, 8, 1),
(99, '2022-06-10 20:45:12', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(100, '2022-06-10 20:45:12', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(101, '2022-06-10 20:46:09', 'Korisnik ekrzina mijenja podatke lutrije Favbet.', 'UPDATE Lutrija SET nazivLutrije = \'Favbet\', infoTelefon = \'0800-345-8751\', email = \'favbet@lutrija.hr\', webAdresa = \'https://www.favbet.hr\' WHERE idLutrija = \'10\'', 1, 2),
(102, '2022-06-10 20:48:23', 'Korisnik ekrzina kreira novu lutriju.', 'INSERT INTO Lutrija (nazivLutrije, infoTelefon, email, webAdresa) VALUES (\'Lutz.hr\', \'0800-470-3546\', \'lutz-help@lutrija.hr\', \'https://www.lutz.hr\')', 1, 2),
(103, '2022-06-10 20:50:09', 'Korisnik ekrzina lutriji 12 dodijeljuje novog moderatora 12', 'UPDATE Korisnik SET uloga_idUloga = 3 WHERE idKorisnik = \'12\'', 1, 2),
(104, '2022-06-10 20:53:53', 'Korisnik ekrzina blokira korisnika 3.', 'UPDATE Korisnik SET StatusKorisnika = 1 WHERE idKorisnik = 3', 1, 2),
(105, '2022-06-10 20:54:08', 'Korisnik ekrzina odblokira korisnika 3.', 'UPDATE Korisnik SET StatusKorisnika = 0 WHERE idKorisnik = 3', 1, 2),
(106, '2022-06-10 21:02:48', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(107, '2022-06-10 21:02:58', 'Za korisnika LavLov broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'LavLov\'', 46, 2),
(108, '2022-06-10 21:02:58', 'Korisnik LavLov prijavljuje se.', NULL, 46, 1),
(109, '2022-06-10 21:03:21', 'Korisnik LavLov ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'40 81 77 95 12 92 64 74 34 29 82 54 19 20 4 59 53 75 84 32\', telefon = \' 385 99-102-2466\', email = \'leoleon@gmail.com\', adresa = \'Ulica Vladimira Nazora 30\', slikaIspunjenogListica = \'listici/1596682247133.jpg\' WHERE idListic = \'46\'', 46, 2),
(110, '2022-06-10 21:03:32', 'Korisnik LavLov ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'40 81 77 95 12 92 64 74 34 29 82 54 19 20 4 59 53 75 84 32\', telefon = \' 385 99-102-2466\', email = \'leoleon@gmail.com\', adresa = \'Ulica Vladimira Nazora 30\', slikaIspunjenogListica = \'listici/1596682247133.jpg\' WHERE idListic = \'46\'', 46, 2),
(111, '2022-06-10 21:04:19', 'Korisnik LavLov ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'40 81 77 95 12 92 64 74 34 29 82 54 19 20 4 59 53 75 84 32\', telefon = \' 385 99-102-2466\', email = \'leoleon@gmail.com\', adresa = \'Ulica Vladimira Nazora 30\', slikaIspunjenogListica = \'listici/lotto ticket.jpg\' WHERE idListic = \'46\'', 46, 2),
(112, '2022-06-10 21:05:03', 'Korisnik LavLov ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'40 81 77 95 12 92 64 74 34 29 82 54 19 20 4 59 53 75 84 32\', telefon = \' 385 99-102-2466\', email = \'leoleon@gmail.com\', adresa = \'Ulica Vladimira Nazora 30\', slikaIspunjenogListica = \'listici/lotto ticket.jpg\' WHERE idListic = \'46\'', 46, 2),
(113, '2022-06-10 21:07:38', 'Korisnik LavLov ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'40 81 77 95 12 92 64 74 34 29 82 54 19 20 4 59 53 75 84 32\', telefon = \' 385 99-102-2466\', email = \'leoleon@gmail.com\', adresa = \'Ulica Vladimira Nazora 30\', slikaIspunjenogListica = \'listici/1200x0.jpg\' WHERE idListic = \'46\'', 46, 2),
(114, '2022-06-11 00:13:32', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(115, '2022-06-11 00:13:32', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(116, '2022-06-11 00:49:33', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(117, '2022-06-11 00:49:47', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(118, '2022-06-11 00:49:47', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(119, '2022-06-11 00:50:41', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(120, '2022-06-11 00:50:53', 'Korisnik ekrzina upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(121, '2022-06-11 00:51:00', 'Korisnik ekrzina upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(122, '2022-06-11 00:51:12', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(123, '2022-06-11 00:51:12', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(124, '2022-06-11 01:21:51', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(125, '2022-06-11 01:21:51', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(126, '2022-06-11 01:33:34', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(127, '2022-06-11 12:50:41', 'Registriran je novi korisnik JeanMatt.', 'INSERT INTO Korisnik (korisnickoIme, imePrezime, lozinka, lozinkaSha256, datumRegistracije, email, uvjetiKoristenja, brojNeuspjesnihPrijava, statusKorisnika, uloga_idUloga, aktivacijskiKod, vrijemeIstekaKoda) VALUES (\'JeanMatt\', \'Žan Matotek\', \'12345JM\' , \'e267e77a81332a1a1799a53e467ebb09bf69ea3af0b2e23d96393b4295883dc7\', \'2022-06-11 12:50:41\', \'zanmato@foi.hr\', \'2022-06-11 12:50:41\', 0, 0, 1, \'MSV10Tmm1V\', \'2022-06-11 19:50:41\')', 53, 2),
(129, '2022-06-11 15:15:33', 'Za korisnika JeanMatt broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'JeanMatt\'', 53, 2),
(130, '2022-06-11 15:15:33', 'Korisnik JeanMatt prijavljuje se.', NULL, 53, 1),
(131, '2022-06-11 13:16:59', 'Korisnik JeanMatt postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 98-235-0028\', \'zanmato@foi.hr\', \'Ulica Petra Preradovića 13 Vž\', \'96 5 67 18 23 51 62 95 77 79 3 39 58 35 90 20 11 2 68 16 44 38 74 88 70 54 84 69 7 85 12 87 9 86 89\', null, null, \'4\', \'53\', \'14\', \'5\', \'listici/lottery-ticket-isolated-on-white-background-D3R8N6.jpg\', \'2022-06-11 13:16:59\')', 53, 2),
(132, '2022-06-11 13:26:11', 'Korisnik JeanMatt se odjavljuje.', NULL, 53, 1),
(133, '2022-06-11 13:26:25', 'Korisnik ekrzina upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(134, '2022-06-11 13:26:33', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(135, '2022-06-11 13:26:33', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(136, '2022-06-11 16:26:57', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(137, '2022-06-11 16:54:33', 'Za korisnika JeanMatt broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'JeanMatt\'', 53, 2),
(138, '2022-06-11 16:54:33', 'Korisnik JeanMatt prijavljuje se.', NULL, 53, 1),
(139, '2022-06-11 18:13:19', 'Korisnik JeanMatt se odjavljuje.', NULL, 53, 1),
(140, '2022-06-11 18:36:25', 'Korisnik ekrzina upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(141, '2022-06-11 18:36:41', 'Korisnik ekrzina upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(142, '2022-06-11 18:36:53', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(143, '2022-06-11 18:36:53', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(144, '2022-06-11 18:37:04', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(145, '2022-06-11 19:01:35', 'Za korisnika JeanMatt broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'JeanMatt\'', 53, 2),
(146, '2022-06-11 19:01:35', 'Korisnik JeanMatt prijavljuje se.', NULL, 53, 1),
(147, '2022-06-11 19:05:54', 'Korisnik JeanMatt se odjavljuje.', NULL, 53, 1),
(148, '2022-06-11 19:06:02', 'Za korisnika SunnyBee broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'SunnyBee\'', 33, 2),
(149, '2022-06-11 19:06:02', 'Korisnik SunnyBee prijavljuje se.', NULL, 33, 1),
(150, '2022-06-11 19:06:06', 'Korisnik SunnyBee se odjavljuje.', NULL, 33, 1),
(151, '2022-06-11 19:06:20', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(152, '2022-06-11 19:06:20', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(153, '2022-06-11 19:46:56', 'Korisnik Edmund F. se odjavljuje.', NULL, 8, 1),
(154, '2022-06-11 19:47:04', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(155, '2022-06-11 19:47:04', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(156, '2022-06-11 21:14:32', 'Korisnik ekrzina blokira korisnika 4.', 'UPDATE Korisnik SET StatusKorisnika = 1 WHERE idKorisnik = 4', 1, 2),
(157, '2022-06-11 22:22:47', 'Korisnik ekrzina postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 98-408-7743\', \'ekrzina@foi.hr\', \'Ulica Janka Leskovara 9\', \'67 19 29 89 64 54 30 20 66 70 60 52 82 32 50 25 2 15 96 40\', null, null, \'4\', \'1\', \'15\', \'16\', \'listici/images.jpeg\', \'2022-06-11 22:22:47\')', 1, 2),
(158, '2022-06-11 22:31:31', 'Korisnik ekrzina ažurira igru na sreću 6.', 'UPDATE IgraNaSrecu SET cijenaListicaIgre = \'6.5\', DatumVrijemePocetka = \'2022-04-30 15:00:00\', nazivIgre = \'Keno\', brojIzvlacenja = \'10\', fondPoPogodenomBroju = \'2400\', DatumVrijemeZavrsetka = \'2022-04-30 16:00:00\' WHERE idIgraNaSrecu = \'6\'', 1, 2),
(159, '2022-06-11 22:49:49', 'Korisnik ekrzina zatvara kolo 14', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'45 2 13 19 8 63 62 11 37 24 29 90 20 96 32 83 54 41 26 95 75 71 76 57 92 67 7 84 88 49 70 93 56 82 39\' WHERE idKolo = \'14\'', 1, 2),
(160, '2022-06-11 23:46:07', 'Korisnik SunnyBee upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'SunnyBee\'', 33, 2),
(161, '2022-06-12 00:15:29', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(162, '2022-06-12 00:15:29', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(165, '2022-06-12 00:20:02', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(166, '2022-06-12 00:20:12', 'Za korisnika JeanMatt broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'JeanMatt\'', 53, 2),
(167, '2022-06-12 00:20:12', 'Korisnik JeanMatt prijavljuje se.', NULL, 53, 1),
(168, '2022-06-12 00:20:21', 'Korisnik JeanMatt šalje zahtjev za isplatom.', 'INSERT INTO ZahtjevZaIsplatom (iznosIsplate, potvrdeno, Listic_idListic, Korisnik_idKorisnik) VALUES (\'3507\', null, \'47\', null)', 53, 2),
(169, '2022-06-12 00:20:41', 'Korisnik JeanMatt ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'96 5 67 18 23 51 62 95 77 79 3 39 58 35 90 20 11 2 68 16 44 38 74 88 70 54 84 69 7 85 12 87 9 86 89\', telefon = \' 385 98-235-0028\', email = \'zanmato@foi.hr\', adresa = \'Ulica Petra Preradovića 13 Vž\', slikaIspunjenogListica = \'listici/istockphoto-1291862188-612x612.jpg, datumUpload = \'2022-06-12 00:20:41\' WHERE idListic = \'47\'', 53, 2),
(170, '2022-06-12 00:21:24', 'Korisnik JeanMatt ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'96 5 67 18 23 51 62 95 77 79 3 39 58 35 90 20 11 2 68 16 44 38 74 88 70 54 84 69 7 85 12 87 9 86 89\', telefon = \' 385 98-235-0020\', email = \'zanmato@foi.hr\', adresa = \'Ulica Petra Preradovića 13 Vž\', slikaIspunjenogListica = \'listici/bangkok-thailand-october-antique-lottery-more-than-years-old-price-baht-per-ticket-white-background-isolated-180227220.jpg, datumUpload = \'2022-06-12 00:21:24\' WHERE idListic = \'47\'', 53, 2),
(171, '2022-06-12 00:23:44', 'Korisnik JeanMatt ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'96 5 67 18 23 51 62 95 77 79 3 39 58 35 90 20 11 2 68 16 44 38 74 88 70 54 84 69 7 85 12 87 9 86 89\', telefon = \' 385 98-235-0020\', email = \'zanmato@foi.hr\', adresa = \'Ulica Petra Preradovića 13 Vž\', slikaIspunjenogListica = \'listici/lottery-ticket-icon-cartoon-of-lottery-ticket-vector-icon-for-web-design-isolated-on-white-background-2CCPKP6.jpg\', datumUpload = \'2022-06-12 00:23:44\' WHERE idListic = \'47\'', 53, 2),
(172, '2022-06-12 00:23:56', 'Korisnik JeanMatt se odjavljuje.', NULL, 53, 1),
(177, '2022-06-12 00:29:39', 'Registriran je novi korisnik Eirika.', 'INSERT INTO Korisnik (korisnickoIme, imePrezime, lozinka, lozinkaSha256, datumRegistracije, email, uvjetiKoristenja, brojNeuspjesnihPrijava, statusKorisnika, uloga_idUloga, aktivacijskiKod, vrijemeIstekaKoda) VALUES (\'Eirika\', \'Erika Ezop\', \'eiri23kaEir\' , \'c076669851fe38fc03161b617c679832934a916d6f023f348bc199cd5676040b\', \'2022-06-12 00:29:39\', \'eezop@foi.hr\', null, 0, 0, 1, \'4iJ680XPV\', \'2022-06-12 07:29:39\')', 55, 2),
(178, '2022-06-12 00:30:13', 'Korisnik 55 aktivira račun.', 'UPDATE Korisnik SET uloga_idUloga = 2 WHERE aktivacijskiKod = \'4iJ680XPV\'', 55, 2),
(179, '2022-06-12 00:30:47', 'Za korisnika Eirika broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Eirika\'', 55, 2),
(180, '2022-06-12 00:30:47', 'Korisnik Eirika prijavljuje se.', NULL, 55, 1),
(181, '2022-06-12 00:33:15', 'Korisnik Eirika postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 98-305-2233\', \'eezop@foi.hr\', \'Ulica Davora Rovera 37 Zaprešić\', \'19 93 21 53 40 69 24 10 70 32 43 38\', null, null, \'4\', \'55\', \'13\', \'7\', \'listici/cracow-małopolska-poland-circa-january-polish-scratch-card-lotto-lottery-ticket-off-scratchie-numbers-gambling-addiction-174129466.jpg\', \'2022-06-12 00:33:15\')', 55, 2),
(182, '2022-06-12 00:33:32', 'Korisnik Eirika se odjavljuje.', NULL, 55, 1),
(183, '2022-06-12 00:35:53', 'Registriran je novi korisnik DenideWi.', 'INSERT INTO Korisnik (korisnickoIme, imePrezime, lozinka, lozinkaSha256, datumRegistracije, email, uvjetiKoristenja, brojNeuspjesnihPrijava, statusKorisnika, uloga_idUloga, aktivacijskiKod, vrijemeIstekaKoda) VALUES (\'DenideWi\', \'Denis Dewitte\', \'dolly\' , \'d1747e511120b70cf5b7cf42e3ed53712df0c83732dd6af8f8423a55e59cd142\', \'2022-06-12 00:35:53\', \'denisdewitte@gmail.com\', null, 0, 0, 1, \'niB9fUZwIc\', \'2022-06-12 07:35:53\')', 56, 2),
(184, '2022-06-12 00:36:22', 'Korisnik 56 aktivira račun.', 'UPDATE Korisnik SET uloga_idUloga = 2 WHERE aktivacijskiKod = \'niB9fUZwIc\'', 56, 2),
(185, '2022-06-12 00:36:28', 'Za korisnika DenideWi broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'DenideWi\'', 56, 2),
(186, '2022-06-12 00:36:28', 'Korisnik DenideWi prijavljuje se.', NULL, 56, 1),
(187, '2022-06-12 00:37:00', 'Korisnik DenideWi se odjavljuje.', NULL, 56, 1),
(188, '2022-06-12 00:37:07', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(189, '2022-06-12 00:37:07', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(190, '2022-06-12 01:08:24', 'Korisnik ekrzina potvrđuje zahtjev za isplatom.', 'UPDATE ZahtjevZaIsplatom SET potvrdeno = \'2022-06-12 01:08:24\', Korisnik_idKorisnik = 1 WHERE idZahtjevZaIsplatom = 13', 1, 2),
(191, '2022-06-12 01:10:21', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(192, '2022-06-12 01:10:30', 'Korisnik SunnyBee upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'SunnyBee\'', 33, 2),
(193, '2022-06-12 01:10:36', 'Korisnik SunnyBee upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 3 WHERE korisnickoIme = \'SunnyBee\'', 33, 2),
(194, '2022-06-12 01:10:36', 'Korisnik SunnyBee je blokiran.', 'UPDATE Korisnik SET statusKorisnika = 1 WHERE korisnickoIme = \'SunnyBee\'', 33, 2),
(195, '2022-06-12 01:12:19', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(196, '2022-06-12 01:12:19', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(197, '2022-06-12 01:12:37', 'Korisnik ekrzina odblokira korisnika 33.', 'UPDATE Korisnik SET StatusKorisnika = 0 WHERE idKorisnik = 33', 1, 2),
(198, '2022-06-12 01:13:11', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(199, '2022-06-12 01:13:23', 'Korisnik SunnyBee je blokiran.', 'UPDATE Korisnik SET statusKorisnika = 1 WHERE korisnickoIme = \'SunnyBee\'', 33, 2),
(200, '2022-06-12 01:13:23', 'Za korisnika SunnyBee broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'SunnyBee\'', 33, 2),
(201, '2022-06-12 01:13:23', 'Korisnik SunnyBee prijavljuje se.', NULL, 33, 1),
(202, '2022-06-12 01:42:48', 'Korisnik SunnyBee se odjavljuje.', NULL, 33, 1),
(203, '2022-06-12 01:43:01', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(204, '2022-06-12 01:43:01', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(205, '2022-06-12 01:46:17', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(206, '2022-06-12 01:46:23', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(207, '2022-06-12 01:46:23', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(208, '2022-06-12 01:51:20', 'Korisnik ekrzina zatvara kolo 6', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'42 51 32 52 6 76 8 7 82 97\' WHERE idKolo = \'6\'', 1, 2),
(209, '2022-06-12 01:52:56', 'Korisnik ekrzina kreira novo kolo.', 'INSERT INTO Kolo (nazivKolo, statusKola, generiraniBrojevi, datumIsplate, IgraNaSrecu_idIgraNaSrecu) VALUES (\'Kolo 18 Toto 13\', 0, null, \'2021-07-03 00:00:00\', \'8\')', 1, 2),
(210, '2022-06-12 01:53:02', 'Korisnik ekrzina otvara kolo 18.', 'UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = \'18\'', 1, 2),
(211, '2022-06-12 01:53:24', 'Korisnik ekrzina kreira novo kolo.', 'INSERT INTO Kolo (nazivKolo, statusKola, generiraniBrojevi, datumIsplate, IgraNaSrecu_idIgraNaSrecu) VALUES (\'Kolo 19 Toto 13\', 0, null, \'2022-07-05 00:00:00\', \'8\')', 1, 2),
(212, '2022-06-12 01:53:48', 'Korisnik ekrzina otvara kolo 9.', 'UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = \'9\'', 1, 2),
(213, '2022-06-12 01:54:18', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(214, '2022-06-12 01:54:29', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(215, '2022-06-12 01:54:29', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(216, '2022-06-12 01:55:21', 'Korisnik EuroWinner12 postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 99-102-2466\', \'tihomirgal@gmail.com\', \'Ulica kralja Trpimira 12 Zg\', \'65 71 33 80 46 41 48 13 43 24 20 8 31\', null, null, \'4\', \'10\', \'13\', \'7\', \'listici/xgjgxetuskgljzfjlxt6.jpg\', \'2022-06-12 01:55:21\')', 10, 2),
(217, '2022-06-12 01:57:11', 'Korisnik EuroWinner12 postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 99-102-2466\', \'tih\', \'Ulica kralja Trpimira 12 Zg\', \'13 2 23 57 48 99 14 22 98 32\', null, null, \'4\', \'10\', \'11\', \'1\', \'listici/lotto-ticket-27745929.jpg\', \'2022-06-12 01:57:11\')', 10, 2),
(218, '2022-06-12 01:58:21', 'Korisnik EuroWinner12 postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 99-102-2466\', \'tihomirgal@gmail.com\', \'Ulica kralja Trpimira 12 Zg\', \'79 8 63 64 19 24 37 78 41 70\', null, null, \'4\', \'10\', \'10\', \'2\', \'listici/uk-lottery-ticket-and-2-pound-coins-E4JWE2.jpg\', \'2022-06-12 01:58:21\')', 10, 2),
(219, '2022-06-12 01:58:43', 'Korisnik EuroWinner12 ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'13 2 23 57 48 99 14 22 98 32\', telefon = \' 385 99-102-2466\', email = \'99-102-2466	tihomirgal@gmail.com\', adresa = \'Ulica kralja Trpimira 12 Zg\', slikaIspunjenogListica = \'listici/uk-10th-oct-2015-changes-to-the-national-lottery-lotto-increasing-F3N4GE.jpg\', datumUpload = \'2022-06-12 01:58:43\' WHERE idListic = \'51\'', 10, 2),
(220, '2022-06-12 01:59:10', 'Korisnik EuroWinner12 ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'13 2 23 57 48 99 14 22 98 32\', telefon = \' 385 99-102-2466\', email = \'tihomirgal@gmail.com\', adresa = \'Ulica kralja Trpimira 12 Zg\', slikaIspunjenogListica = \'listici/lottery-ticket-vector-228103.jpg\', datumUpload = \'2022-06-12 01:59:10\' WHERE idListic = \'51\'', 10, 2),
(221, '2022-06-12 02:12:30', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(222, '2022-06-12 02:12:37', 'Za korisnika EmaBB broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EmaBB\'', 2, 2),
(223, '2022-06-12 02:12:37', 'Korisnik EmaBB prijavljuje se.', NULL, 2, 1),
(224, '2022-06-12 02:20:22', 'Korisnik EmaBB šalje zahtjev za isplatom.', 'INSERT INTO ZahtjevZaIsplatom (iznosIsplate, potvrdeno, Listic_idListic, Korisnik_idKorisnik) VALUES (\'5000\', null, \'41\', null)', 2, 2),
(225, '2022-06-12 02:26:27', 'Korisnik EmaBB potvrđuje zahtjev za isplatom.', 'UPDATE ZahtjevZaIsplatom SET potvrdeno = \'2022-06-12 02:26:27\', Korisnik_idKorisnik = 2 WHERE idZahtjevZaIsplatom = 19', 2, 2),
(226, '2022-06-12 02:28:38', 'Korisnik EmaBB se odjavljuje.', NULL, 2, 1),
(227, '2022-06-12 02:28:56', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(228, '2022-06-12 02:28:56', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(229, '2022-06-12 02:29:10', 'Korisnik Edmund F. se odjavljuje.', NULL, 8, 1),
(230, '2022-06-12 02:29:19', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(231, '2022-06-12 02:29:19', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(232, '2022-06-12 02:29:55', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(233, '2022-06-12 02:38:59', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(234, '2022-06-12 02:38:59', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(236, '2022-06-12 15:02:15', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(237, '2022-06-12 15:02:15', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(238, '2022-06-12 13:27:36', 'Registriran je novi korisnik LovroL.', 'INSERT INTO Korisnik (korisnickoIme, imePrezime, lozinka, lozinkaSha256, datumRegistracije, email, uvjetiKoristenja, brojNeuspjesnihPrijava, statusKorisnika, uloga_idUloga, aktivacijskiKod, vrijemeIstekaKoda) VALUES (\'LovroL\', \'Lovro Lunarić\', \'lovriclo\' , \'c516e9b6790b33086f3c52fa9af8a10e5ee06ccfed79f4f8fdb74897c1bf4a10\', \'2022-06-12 13:27:36\', \'ekrzina@foi.hr\', \'2022-06-12 11:23:53\', 0, 0, 1, \'MacwghMQqt\', \'2022-06-12 20:27:36\')', 58, 2),
(239, '2022-06-12 13:28:07', 'Korisnik 58 aktivira račun.', 'UPDATE Korisnik SET uloga_idUloga = 2 WHERE aktivacijskiKod = \'MacwghMQqt\'', 58, 2),
(240, '2022-06-12 13:32:22', 'Za korisnika LovroL broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'LovroL\'', 58, 2),
(241, '2022-06-12 13:32:22', 'Korisnik LovroL prijavljuje se.', NULL, 58, 1),
(242, '2022-06-12 13:35:39', 'Korisnik LovroL postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 99-353-7742\', \'lovrix@gmail.com\', \'Ulica bana Jelačića  30 Vž\', \'2 45 6 42 1 87 36 23 77 5\', null, null, \'4\', \'58\', \'11\', \'1\', \'listici/euro-millions-lottery-ticket-BXR1H4.jpg\', \'2022-06-12 13:35:39\')', 58, 2),
(243, '2022-06-12 13:36:14', 'Korisnik LovroL se odjavljuje.', NULL, 58, 1),
(244, '2022-06-12 13:36:45', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(245, '2022-06-12 13:36:45', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(246, '2022-06-12 13:38:03', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(247, '2022-06-12 13:38:16', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(248, '2022-06-12 13:38:16', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(249, '2022-06-12 13:39:34', 'Korisnik ekrzina kreira novo kolo.', 'INSERT INTO Kolo (nazivKolo, statusKola, generiraniBrojevi, datumIsplate, IgraNaSrecu_idIgraNaSrecu) VALUES (\'Kolo 20 Super sedmica\', 0, null, \'2022-07-03 12:22:11\', \'17\')', 1, 2),
(250, '2022-06-12 16:41:05', 'Korisnik ekrzina igru 21 pridružuje lutriji 11.', 'INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES (\'21\', \'11\')', 1, 2),
(251, '2022-06-12 16:41:20', 'Korisnik ekrzina igru 17 pridružuje lutriji 12.', 'INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES (\'17\', \'12\')', 1, 2),
(252, '2022-06-12 16:42:54', 'Korisnik ekrzina kreira igru na sreću. ', 'INSERT INTO IgraNaSrecu (nazivIgre, cijenaListicaIgre, datumVrijemePocetka, datumVrijemeZavrsetka, brojIzvlacenja, fondPoPogodenomBroju) VALUES (\'Bet5000\', \'5\', \'2022-06-06 00:00:00\', \'2022-08-02 12:20:00\', \'5\', \'1000\')', 1, 2),
(253, '2022-06-12 16:42:54', 'Korisnik ekrzinaigru Bet5000 pridružuje lutriji 11.', 'INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES (\'22\', \'11\')', 1, 2),
(254, '2022-06-12 16:47:36', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(255, '2022-06-12 16:47:48', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(256, '2022-06-12 16:47:48', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(257, '2022-06-12 16:47:51', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(258, '2022-06-12 16:49:40', 'Korisnik dantelion upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(259, '2022-06-12 16:50:07', 'Korisnik dantelion upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 3 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(260, '2022-06-12 16:50:07', 'Korisnik dantelion je blokiran.', 'UPDATE Korisnik SET statusKorisnika = 1 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(261, '2022-06-12 16:50:15', 'Korisnik dantelion upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 4 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(262, '2022-06-12 16:50:43', 'Korisnik dantelion upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(263, '2022-06-12 16:50:48', 'Korisnik dantelion upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(264, '2022-06-12 16:50:55', 'Korisnik dantelion upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 3 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(265, '2022-06-12 16:50:55', 'Korisnik dantelion je blokiran.', 'UPDATE Korisnik SET statusKorisnika = 1 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(266, '2022-06-12 16:55:31', 'Korisnik Gazella upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'Gazella\'', 25, 2),
(267, '2022-06-12 16:55:38', 'Korisnik Gazella upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'Gazella\'', 25, 2),
(268, '2022-06-12 16:55:42', 'Za korisnika Gazella broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Gazella\'', 25, 2),
(269, '2022-06-12 16:55:42', 'Korisnik Gazella prijavljuje se.', NULL, 25, 1),
(270, '2022-06-12 16:59:33', 'Korisnik Gazella se odjavljuje.', NULL, 25, 1),
(271, '2022-06-12 17:00:02', 'Za korisnika LovroL broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'LovroL\'', 58, 2),
(272, '2022-06-12 17:00:02', 'Korisnik LovroL prijavljuje se.', NULL, 58, 1),
(273, '2022-06-12 17:00:04', 'Korisnik LovroL se odjavljuje.', NULL, 58, 1),
(274, '2022-06-12 17:00:12', 'Korisnik LovroL mijenja lozinku.', 'SELECT email FROM Korisnik WHERE korisnickoIme = \'LovroL\'', 58, 2),
(275, '2022-06-12 17:03:36', 'Korisnik LovroL mijenja lozinku.', 'SELECT email FROM Korisnik WHERE korisnickoIme = \'LovroL\'', 58, 2),
(276, '2022-06-12 17:09:09', 'Korisnik LovroL mijenja lozinku.', 'SELECT email FROM Korisnik WHERE korisnickoIme = \'LovroL\'', 58, 2),
(277, '2022-06-12 17:10:29', 'Korisnik LovroL upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'LovroL\'', 58, 2),
(278, '2022-06-12 17:10:34', 'Korisnik LovroL mijenja lozinku.', 'SELECT email FROM Korisnik WHERE korisnickoIme = \'LovroL\'', 58, 2),
(279, '2022-06-12 17:11:02', 'Korisnik LovroL upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'LovroL\'', 58, 2),
(280, '2022-06-12 17:12:49', 'Korisnik LovroL mijenja lozinku.', 'SELECT email FROM Korisnik WHERE korisnickoIme = \'LovroL\'', 58, 2),
(281, '2022-06-12 17:13:22', 'Korisnik LovroL mijenja lozinku.', 'UPDATE Korisnik SET lozinkaSha256= \'34bf6882c5baed9ca4f956d5dda3f7c5468094cc09908d178050f8ac93761604\', lozinka = \'inO2TCfuRUxV\' WHERE korisnickoIme = \'LovroL\'', 58, 2),
(282, '2022-06-12 17:15:17', 'Korisnik LovroL mijenja lozinku.', 'UPDATE Korisnik SET lozinkaSha256= \'aa4a154d3ec5415ee65bb7cc77ab07a0bb1da0aa63cf1513efaf12c7faa0b763\', lozinka = \'fXQv0jjrLm\' WHERE korisnickoIme = \'LovroL\'', 58, 2),
(283, '2022-06-12 17:16:06', 'Za korisnika LovroL broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'LovroL\'', 58, 2),
(284, '2022-06-12 17:16:06', 'Korisnik LovroL prijavljuje se.', NULL, 58, 1),
(285, '2022-06-12 17:18:40', 'Korisnik LovroL se odjavljuje.', NULL, 58, 1),
(286, '2022-06-12 17:19:55', 'Korisnik LovroL mijenja lozinku.', 'UPDATE Korisnik SET lozinkaSha256= \'1f15f366a3f4542975a69e0a28bccb903457177a1c239b8ba96c282afcbfe280\', lozinka = \'sH8jNxSwiXwK\' WHERE korisnickoIme = \'LovroL\'', 58, 2),
(287, '2022-06-12 17:20:39', 'Za korisnika LovroL broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'LovroL\'', 58, 2),
(288, '2022-06-12 17:20:39', 'Korisnik LovroL prijavljuje se.', NULL, 58, 1),
(289, '2022-06-12 17:25:55', 'Korisnik LovroL ažurira svoj listić.', 'UPDATE Listic SET odabraniBrojevi=\'2 45 6 42 1 87 36 23 77 5\', telefon = \' 385 99-353-7042\', email = \'lovrix@gmail.com\', adresa = \'Ulica bana Jelačića  30 Vž\', slikaIspunjenogListica = \'listici/euro-jackpot-lottery-ticket-polish-lotto-pruszcz-gdanski-poland-january-euro-jackpot-lottery-ticket-polish-lotto-168223916.jpg\', datumUpload = \'2022-06-12 17:25:55\' WHERE idListic = \'53\'', 58, 2),
(290, '2022-06-12 17:27:27', 'Korisnik LovroL postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 99-353-7042\', \'lovrix@gmail.com\', \'Ulica bana Jelačića  30 Vž\', \'1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20\', null, null, \'4\', \'58\', \'15\', \'16\', \'listici/pexels-photo-5550130.jpeg\', \'2022-06-12 17:27:27\')', 58, 2),
(291, '2022-06-12 17:27:56', 'Korisnik LovroL se odjavljuje.', NULL, 58, 1),
(292, '2022-06-12 17:28:39', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(293, '2022-06-12 17:28:39', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(294, '2022-06-12 17:47:53', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(295, '2022-06-12 17:48:53', 'Za korisnika SunnyBee broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'SunnyBee\'', 33, 2),
(296, '2022-06-12 17:48:53', 'Korisnik SunnyBee prijavljuje se.', NULL, 33, 1),
(297, '2022-06-12 17:49:04', 'Korisnik SunnyBee se odjavljuje.', NULL, 33, 1),
(298, '2022-06-12 17:49:14', 'Za korisnika EmaBB broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EmaBB\'', 2, 2),
(299, '2022-06-12 17:49:14', 'Korisnik EmaBB prijavljuje se.', NULL, 2, 1),
(300, '2022-06-12 17:49:31', 'Korisnik EmaBB se odjavljuje.', NULL, 2, 1),
(301, '2022-06-12 17:49:44', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(302, '2022-06-12 17:49:44', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(303, '2022-06-12 17:49:51', 'Korisnik EuroWinner12 šalje zahtjev za isplatom.', 'INSERT INTO ZahtjevZaIsplatom (iznosIsplate, potvrdeno, Listic_idListic, Korisnik_idKorisnik) VALUES (\'14000\', null, \'9\', null)', 10, 2),
(304, '2022-06-12 17:50:54', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(305, '2022-06-12 17:51:04', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(306, '2022-06-12 17:51:04', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(307, '2022-06-12 17:51:38', 'Korisnik Edmund F. potvrđuje zahtjev za isplatom.', 'UPDATE ZahtjevZaIsplatom SET potvrdeno = \'2022-06-12 17:51:38\', Korisnik_idKorisnik = 8 WHERE idZahtjevZaIsplatom = 18', 8, 2),
(308, '2022-06-12 17:54:16', 'Korisnik Edmund F. kreira novo kolo.', 'INSERT INTO Kolo (nazivKolo, statusKola, generiraniBrojevi, datumIsplate, IgraNaSrecu_idIgraNaSrecu) VALUES (\'Kolo 21 Bingo\', 0, null, \'2022-07-03 12:22:11\', \'4\')', 8, 2),
(309, '2022-06-12 17:55:03', 'Korisnik Edmund F. otvara kolo 21.', 'UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = \'21\'', 8, 2),
(310, '2022-06-12 17:55:28', 'Korisnik Edmund F. zatvara kolo 9', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'29 27 55 89 94 25 59 30 18 42\' WHERE idKolo = \'9\'', 8, 2),
(311, '2022-06-12 17:59:25', 'Korisnik Edmund F. otvara kolo 9.', 'UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = \'9\'', 8, 2),
(312, '2022-06-12 17:59:35', 'Korisnik Edmund F. zatvara kolo 9', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'96 54 2 78 57 37 97 4 7 86\' WHERE idKolo = \'9\'', 8, 2),
(313, '2022-06-12 18:01:57', 'Korisnik Edmund F. otvara kolo 9.', 'UPDATE Kolo SET statusKola = 1, generiraniBrojevi = null WHERE idKolo = \'9\'', 8, 2),
(314, '2022-06-12 18:05:35', 'Korisnik Edmund F. se odjavljuje.', NULL, 8, 1),
(315, '2022-06-12 18:05:47', 'Za korisnika JeanMatt broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'JeanMatt\'', 53, 2),
(316, '2022-06-12 18:05:47', 'Korisnik JeanMatt prijavljuje se.', NULL, 53, 1),
(317, '2022-06-12 18:07:17', 'Korisnik JeanMatt postavlja listić.', 'INSERT INTO Listic (telefon, email, adresa, odabraniBrojevi, brojPogodenihBrojeva, osvojeniIznos, StatusListica_idStatusListica, Korisnik_idKorisnik, Kolo_idKolo, IgraNaSrecu_idIgraNaSrecu, slikaIspunjenogListica, datumUpload) VALUES (\'+385 99-485-2239\', \'zanmato@foi.hr\', \'Ulica Davora Rovera 37 Zaprešić\', \'40 52 99 10 21 9 50 38 44 32\', null, null, \'4\', \'53\', \'11\', \'1\', \'listici/euro-millions-lottery-ticket-BXR1H4.jpg\', \'2022-06-12 18:07:17\')', 53, 2),
(318, '2022-06-12 18:07:49', 'Korisnik JeanMatt se odjavljuje.', NULL, 53, 1),
(319, '2022-06-12 18:07:59', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(320, '2022-06-12 18:07:59', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(321, '2022-06-12 18:08:08', 'Korisnik Edmund F. zatvara kolo 11', 'UPDATE Kolo SET statusKola = 0, generiraniBrojevi = \'48 35 80 30 66 33 9 18 54 97\' WHERE idKolo = \'11\'', 8, 2),
(322, '2022-06-12 18:08:11', 'Korisnik Edmund F. se odjavljuje.', NULL, 8, 1),
(323, '2022-06-12 18:08:26', 'Za korisnika JeanMatt broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'JeanMatt\'', 53, 2),
(324, '2022-06-12 18:08:26', 'Korisnik JeanMatt prijavljuje se.', NULL, 53, 1),
(325, '2022-06-12 18:09:01', 'Korisnik JeanMatt se odjavljuje.', NULL, 53, 1),
(326, '2022-06-12 18:09:20', 'Za korisnika EmaBB broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EmaBB\'', 2, 2),
(327, '2022-06-12 18:09:20', 'Korisnik EmaBB prijavljuje se.', NULL, 2, 1),
(328, '2022-06-12 18:09:41', 'Korisnik EmaBB se odjavljuje.', NULL, 2, 1);
INSERT INTO `Dnevnik` (`idDnevnik`, `datumVrijemeRadnje`, `radnja`, `upit`, `Korisnik_idKorisnik`, `TipRadnje_idTipRadnje`) VALUES
(329, '2022-06-12 18:09:50', 'Za korisnika SunnyBee broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'SunnyBee\'', 33, 2),
(330, '2022-06-12 18:09:50', 'Korisnik SunnyBee prijavljuje se.', NULL, 33, 1),
(331, '2022-06-12 18:09:58', 'Korisnik SunnyBee se odjavljuje.', NULL, 33, 1),
(332, '2022-06-12 18:10:17', 'Za korisnika JeanMatt broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'JeanMatt\'', 53, 2),
(333, '2022-06-12 18:10:17', 'Korisnik JeanMatt prijavljuje se.', NULL, 53, 1),
(334, '2022-06-12 18:10:28', 'Korisnik JeanMatt šalje zahtjev za isplatom.', 'INSERT INTO ZahtjevZaIsplatom (iznosIsplate, potvrdeno, Listic_idListic, Korisnik_idKorisnik) VALUES (\'7500\', null, \'55\', null)', 53, 2),
(335, '2022-06-12 18:10:30', 'Korisnik JeanMatt se odjavljuje.', NULL, 53, 1),
(336, '2022-06-12 18:10:37', 'Za korisnika EmaBB broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EmaBB\'', 2, 2),
(337, '2022-06-12 18:10:37', 'Korisnik EmaBB prijavljuje se.', NULL, 2, 1),
(338, '2022-06-12 18:10:43', 'Korisnik EmaBB potvrđuje zahtjev za isplatom.', 'UPDATE ZahtjevZaIsplatom SET potvrdeno = \'2022-06-12 18:10:43\', Korisnik_idKorisnik = 2 WHERE idZahtjevZaIsplatom = 21', 2, 2),
(339, '2022-06-12 18:10:47', 'Korisnik EmaBB se odjavljuje.', NULL, 2, 1),
(340, '2022-06-12 18:10:59', 'Za korisnika JeanMatt broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'JeanMatt\'', 53, 2),
(341, '2022-06-12 18:10:59', 'Korisnik JeanMatt prijavljuje se.', NULL, 53, 1),
(342, '2022-06-12 18:11:06', 'Korisnik JeanMatt se odjavljuje.', NULL, 53, 1),
(343, '2022-06-12 18:14:42', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(344, '2022-06-12 18:14:42', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(345, '2022-06-12 18:15:18', 'Korisnik ekrzina ažurira igru na sreću 16.', 'UPDATE IgraNaSrecu SET cijenaListicaIgre = \'8\', DatumVrijemePocetka = \'2022-06-07 12:42:00\', nazivIgre = \'Dame\', brojIzvlacenja = \'20\', fondPoPogodenomBroju = \'255\', DatumVrijemeZavrsetka = \'2022-06-16 14:40:00\' WHERE idIgraNaSrecu = \'16\'', 1, 2),
(346, '2022-06-12 18:16:40', 'Korisnik ekrzina kreira igru na sreću. ', 'INSERT INTO IgraNaSrecu (nazivIgre, cijenaListicaIgre, datumVrijemePocetka, datumVrijemeZavrsetka, brojIzvlacenja, fondPoPogodenomBroju) VALUES (\'Scratch 5\', \'2\', \'2022-06-07 12:40:00\', \'2022-06-30 12:40:00\', \'10\', \'5\')', 1, 2),
(347, '2022-06-12 18:16:40', 'Korisnik ekrzinaigru Scratch 5 pridružuje lutriji 12.', 'INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES (\'23\', \'12\')', 1, 2),
(348, '2022-06-12 18:16:53', 'Korisnik ekrzina ažurira igru na sreću 23.', 'UPDATE IgraNaSrecu SET cijenaListicaIgre = \'2\', DatumVrijemePocetka = \'2022-06-07 12:40:00\', nazivIgre = \'Scratch 5\', brojIzvlacenja = \'10\', fondPoPogodenomBroju = \'20\', DatumVrijemeZavrsetka = \'2022-06-30 12:40:00\' WHERE idIgraNaSrecu = \'23\'', 1, 2),
(349, '2022-06-12 18:17:18', 'Korisnik ekrzina igru 23 pridružuje lutriji 9.', 'INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES (\'23\', \'9\')', 1, 2),
(351, '2022-06-12 18:37:34', 'Korisnik ekrzina igru 1 pridružuje lutriji 2.', 'INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES (\'1\', \'2\')', 1, 2),
(352, '2022-06-12 18:40:40', 'Korisnik ekrzina kreira novu lutriju.', 'INSERT INTO Lutrija (nazivLutrije, infoTelefon, email, webAdresa) VALUES (\'LuteMute\', \'0800-386-3740\', \'lutemute@lutrija.hr\', \'https://lutemute.hr\')', 1, 2),
(353, '2022-06-12 18:41:13', 'Korisnik ekrzina mijenja podatke lutrije LuteMute.', 'UPDATE Lutrija SET nazivLutrije = \'LuteMute\', infoTelefon = \'0800-482-9361\', email = \'lutemute@lutrija.hr\', webAdresa = \'https://www.lutemute.hr\' WHERE idLutrija = \'13\'', 1, 2),
(354, '2022-06-12 18:41:26', 'Korisnik ekrzina lutriji 13 dodijeljuje novog moderatora 12', 'UPDATE Korisnik SET uloga_idUloga = 3 WHERE idKorisnik = \'12\'', 1, 2),
(355, '2022-06-12 18:41:31', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(356, '2022-06-12 18:41:37', 'Za korisnika cban broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'cban\'', 12, 2),
(357, '2022-06-12 18:41:37', 'Korisnik cban prijavljuje se.', NULL, 12, 1),
(358, '2022-06-12 18:42:31', 'Korisnik cban se odjavljuje.', NULL, 12, 1),
(359, '2022-06-12 18:42:43', 'Korisnik ekrzina upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(360, '2022-06-12 18:42:49', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(361, '2022-06-12 18:42:49', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(362, '2022-06-12 18:43:56', 'Korisnik ekrzina odblokira korisnika 4.', 'UPDATE Korisnik SET StatusKorisnika = 0 WHERE idKorisnik = 4', 1, 2),
(363, '2022-06-12 18:44:11', 'Korisnik ekrzina blokira korisnika 4.', 'UPDATE Korisnik SET StatusKorisnika = 1 WHERE idKorisnik = 4', 1, 2),
(364, '2022-06-12 18:45:15', 'Korisnik ekrzina blokira korisnika 25.', 'UPDATE Korisnik SET StatusKorisnika = 1 WHERE idKorisnik = 25', 1, 2),
(365, '2022-06-12 18:45:24', 'Korisnik ekrzina odblokira korisnika 25.', 'UPDATE Korisnik SET StatusKorisnika = 0 WHERE idKorisnik = 25', 1, 2),
(366, '2022-06-12 18:45:41', 'Korisnik ekrzina odblokira korisnika 14.', 'UPDATE Korisnik SET StatusKorisnika = 0 WHERE idKorisnik = 14', 1, 2),
(367, '2022-06-12 18:45:46', 'Korisnik ekrzina odblokira korisnika 26.', 'UPDATE Korisnik SET StatusKorisnika = 0 WHERE idKorisnik = 26', 1, 2),
(368, '2022-06-12 18:45:51', 'Korisnik ekrzina odblokira korisnika 23.', 'UPDATE Korisnik SET StatusKorisnika = 0 WHERE idKorisnik = 23', 1, 2),
(369, '2022-06-12 18:46:49', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(370, '2022-06-12 18:50:21', 'Za korisnika dantelion broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'dantelion\'', 14, 2),
(371, '2022-06-12 18:50:21', 'Korisnik dantelion prijavljuje se.', NULL, 14, 1),
(372, '2022-06-12 20:46:50', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(373, '2022-06-12 20:46:50', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(374, '2022-06-12 20:54:13', 'Korisnik Edmund F. se odjavljuje.', NULL, 8, 1),
(375, '2022-06-12 20:54:31', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(376, '2022-06-12 20:54:31', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(377, '2022-06-12 20:54:55', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(378, '2022-06-12 20:55:05', 'Za korisnika cban broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'cban\'', 12, 2),
(379, '2022-06-12 20:55:05', 'Korisnik cban prijavljuje se.', NULL, 12, 1),
(380, '2022-06-12 21:20:46', 'Korisnik cban se odjavljuje.', NULL, 12, 1),
(381, '2022-06-12 21:21:05', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(382, '2022-06-12 21:21:05', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(383, '2022-06-12 21:21:14', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(384, '2022-06-12 21:21:26', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(385, '2022-06-12 21:21:26', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(386, '2022-06-12 21:36:02', 'Korisnik Edmund F. kreira igru na sreću. ', 'INSERT INTO IgraNaSrecu (nazivIgre, cijenaListicaIgre, datumVrijemePocetka, datumVrijemeZavrsetka, brojIzvlacenja, fondPoPogodenomBroju) VALUES (\'Eurospare\', \'7.5\', \'2022-06-07 12:40:00\', \'2022-06-27 12:40:00\', null, null)', 8, 2),
(387, '2022-06-12 21:36:02', 'Korisnik Edmund F.igru Eurospare pridružuje lutriji 2.', 'INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES (\'24\', \'2\')', 8, 2),
(388, '2022-06-12 21:43:03', 'Korisnik Edmund F. igru 24 pridružuje lutriji 6.', 'INSERT INTO IgreLutrije (IgraNaSrecu_idIgraNaSrecu, Lutrija_idLutrija) VALUES (\'24\', \'6\')', 8, 2),
(389, '2022-06-12 21:47:25', 'Korisnik Edmund F. se odjavljuje.', NULL, 8, 1),
(390, '2022-06-12 21:53:04', 'Za korisnika EmaBB broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EmaBB\'', 2, 2),
(391, '2022-06-12 21:53:04', 'Korisnik EmaBB prijavljuje se.', NULL, 2, 1),
(392, '2022-06-12 21:55:01', 'Korisnik EmaBB se odjavljuje.', NULL, 2, 1),
(393, '2022-06-12 21:56:11', 'Za korisnika EmaBB broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EmaBB\'', 2, 2),
(394, '2022-06-12 21:56:11', 'Korisnik EmaBB prijavljuje se.', NULL, 2, 1),
(395, '2022-06-12 21:56:19', 'Korisnik EmaBB se odjavljuje.', NULL, 2, 1),
(396, '2022-06-12 22:09:01', 'Korisnik cban upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'cban\'', 12, 2),
(397, '2022-06-12 22:10:01', 'Korisnik cban upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'cban\'', 12, 2),
(398, '2022-06-12 22:11:21', 'Korisnik ekrzina upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(399, '2022-06-12 22:32:27', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(400, '2022-06-12 22:32:27', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(401, '2022-06-12 22:33:28', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(402, '2022-06-12 22:33:40', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(403, '2022-06-12 22:33:40', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(404, '2022-06-12 22:34:08', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(405, '2022-06-12 22:34:17', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(406, '2022-06-12 22:34:17', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(407, '2022-06-12 22:35:28', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(408, '2022-06-12 22:48:54', 'Korisnik 61 aktivira račun.', 'UPDATE Korisnik SET uloga_idUloga = 2 WHERE aktivacijskiKod = \'r00VZw9kNa\'', 61, 2),
(409, '2022-06-12 22:49:06', 'Za korisnika OliK24 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(410, '2022-06-12 22:49:06', 'Korisnik OliK24 prijavljuje se.', NULL, 61, 1),
(411, '2022-06-12 23:25:06', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(412, '2022-06-12 23:25:06', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(413, '2022-06-12 23:25:10', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(414, '2022-06-12 23:26:15', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(415, '2022-06-12 23:26:15', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(416, '2022-06-12 23:26:18', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(417, '2022-06-12 23:27:07', 'Korisnik OliK24 se odjavljuje.', NULL, 61, 1),
(418, '2022-06-12 23:27:16', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(419, '2022-06-12 23:27:16', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(420, '2022-06-12 23:27:19', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(421, '2022-06-12 23:31:04', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(422, '2022-06-12 23:31:04', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(423, '2022-06-12 23:31:05', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(424, '2022-06-12 23:31:23', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(425, '2022-06-12 23:31:23', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(426, '2022-06-12 23:31:34', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(427, '2022-06-12 23:32:40', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(428, '2022-06-12 23:32:40', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(429, '2022-06-12 23:32:56', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(430, '2022-06-12 23:36:53', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(431, '2022-06-12 23:36:53', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(432, '2022-06-12 23:36:55', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(433, '2022-06-12 23:37:47', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(434, '2022-06-12 23:37:47', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(435, '2022-06-12 23:37:50', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(436, '2022-06-12 23:38:01', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(437, '2022-06-12 23:38:01', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(438, '2022-06-12 23:38:06', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(439, '2022-06-12 23:40:21', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(440, '2022-06-12 23:40:21', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(441, '2022-06-12 23:40:27', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(442, '2022-06-12 23:44:02', 'Korisnik OliK24 upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(443, '2022-06-12 23:44:14', 'Korisnik OliK24 upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(444, '2022-06-12 23:44:20', 'Korisnik OliK24 upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 3 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(445, '2022-06-12 23:44:20', 'Korisnik OliK24 je blokiran.', 'UPDATE Korisnik SET statusKorisnika = 1 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(446, '2022-06-12 23:45:09', 'Korisnik OliK24 upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(447, '2022-06-12 23:45:14', 'Korisnik OliK24 upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(448, '2022-06-12 23:45:20', 'Korisnik OliK24 upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 3 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(449, '2022-06-12 23:45:20', 'Korisnik OliK24 je blokiran.', 'UPDATE Korisnik SET statusKorisnika = 1 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(450, '2022-06-12 23:47:13', 'Korisnik OliK24 upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 1 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(453, '2022-06-12 23:48:21', 'Korisnik OliK24 upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 2 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(454, '2022-06-12 23:48:59', 'Korisnik OliK24 upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 3 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(455, '2022-06-12 23:48:59', 'Korisnik OliK24 je blokiran.', 'UPDATE Korisnik SET statusKorisnika = 1 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(456, '2022-06-12 23:49:08', 'Korisnik OliK24 upisuje krivu lozinku.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 4 WHERE korisnickoIme = \'OliK24\'', 61, 2),
(457, '2022-06-12 23:50:15', 'Za korisnika ekrzina broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'ekrzina\'', 1, 2),
(458, '2022-06-12 23:50:15', 'Korisnik ekrzina prijavljuje se.', NULL, 1, 1),
(459, '2022-06-12 23:50:53', 'Korisnik ekrzina odblokira korisnika 61.', 'UPDATE Korisnik SET StatusKorisnika = 0 WHERE idKorisnik = 61', 1, 2),
(460, '2022-06-12 23:50:56', 'Korisnik ekrzina blokira korisnika 61.', 'UPDATE Korisnik SET StatusKorisnika = 1 WHERE idKorisnik = 61', 1, 2),
(461, '2022-06-12 21:51:43', 'Korisnik ekrzina se odjavljuje.', NULL, 1, 1),
(462, '2022-06-12 22:22:07', 'Za korisnika EuroWinner12 broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'EuroWinner12\'', 10, 2),
(463, '2022-06-12 22:22:07', 'Korisnik EuroWinner12 prijavljuje se.', NULL, 10, 1),
(464, '2022-06-12 22:26:11', 'Korisnik EuroWinner12 se odjavljuje.', NULL, 10, 1),
(465, '2022-06-12 22:28:09', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(466, '2022-06-12 22:28:09', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(467, '2022-06-13 00:29:44', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(468, '2022-06-13 00:29:44', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(469, '2022-06-13 00:29:46', 'Korisnik Edmund F. se odjavljuje.', NULL, 8, 1),
(470, '2022-06-13 00:31:17', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(471, '2022-06-13 00:31:17', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1),
(472, '2022-06-13 00:32:20', 'Korisnik Edmund F. se odjavljuje.', NULL, 8, 1),
(473, '2022-06-13 00:37:05', 'Za korisnika Edmund F. broj neuspješnih prijava se resetira.', 'UPDATE Korisnik SET brojNeuspjesnihPrijava = 0 WHERE korisnickoIme = \'Edmund F.\'', 8, 2),
(474, '2022-06-13 00:37:05', 'Korisnik Edmund F. prijavljuje se.', NULL, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `DodijeljenModerator`
--

CREATE TABLE `DodijeljenModerator` (
  `Lutrija_idLutrija` int(11) NOT NULL,
  `Korisnik_idKorisnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `DodijeljenModerator`
--

INSERT INTO `DodijeljenModerator` (`Lutrija_idLutrija`, `Korisnik_idKorisnik`) VALUES
(3, 2),
(4, 2),
(5, 2),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(2, 5),
(1, 8),
(2, 8),
(6, 8),
(12, 12),
(13, 12),
(1, 21),
(4, 24),
(5, 24);

-- --------------------------------------------------------

--
-- Table structure for table `IgraNaSrecu`
--

CREATE TABLE `IgraNaSrecu` (
  `idIgraNaSrecu` int(11) NOT NULL,
  `nazivIgre` varchar(45) NOT NULL,
  `brojIzvlacenja` int(11) DEFAULT NULL,
  `fondPoPogodenomBroju` double DEFAULT NULL,
  `cijenaListicaIgre` double NOT NULL,
  `datumVrijemePocetka` datetime NOT NULL,
  `datumVrijemeZavrsetka` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IgraNaSrecu`
--

INSERT INTO `IgraNaSrecu` (`idIgraNaSrecu`, `nazivIgre`, `brojIzvlacenja`, `fondPoPogodenomBroju`, `cijenaListicaIgre`, `datumVrijemePocetka`, `datumVrijemeZavrsetka`) VALUES
(1, 'EuroJackpot', 10, 7500, 10, '2022-04-11 12:00:00', '2022-06-11 13:00:00'),
(2, 'Loto 7', 7, 7000, 7.6, '2022-04-20 13:00:00', '2022-07-20 14:00:00'),
(3, 'Loto 6', 6, 6000, 6.5, '2022-04-21 12:00:00', '2022-04-21 13:00:00'),
(4, 'Bingo', 10, 8000, 10, '2022-04-26 16:30:00', '2022-04-26 17:30:00'),
(5, 'Brzih 35', 35, 250.5, 8.5, '2022-04-27 09:30:00', '2022-04-27 09:50:00'),
(6, 'Keno', 10, 2400, 6.5, '2022-04-30 15:00:00', '2022-04-30 16:00:00'),
(7, 'Joker', 12, 3000, 12, '2022-05-02 12:00:00', '2022-06-05 12:30:00'),
(8, 'Toto 13', 13, 1300, 7.5, '2022-05-07 12:20:00', '2022-06-10 13:10:00'),
(9, 'Dama Karo', 15, 200, 5, '2022-04-13 10:00:00', '2022-06-13 10:00:00'),
(10, 'Kralj Tref', 10, 100, 2, '2022-04-22 10:00:00', '2022-06-22 10:20:00'),
(16, 'Dame', 20, 255, 8, '2022-06-07 12:42:00', '2022-06-16 14:40:00'),
(17, 'Super sedmica', 7, 2756, 9.5, '2022-06-07 12:40:00', '2022-06-30 13:10:00'),
(21, 'Lotto Max', NULL, NULL, 7, '2022-06-07 12:40:00', '2022-06-30 13:10:00'),
(22, 'Bet5000', 5, 1000, 5, '2022-06-06 00:00:00', '2022-08-02 12:20:00'),
(23, 'Scratch 5', 10, 20, 2, '2022-06-07 12:40:00', '2022-06-30 12:40:00'),
(24, 'Eurospare', NULL, NULL, 7.5, '2022-06-07 12:40:00', '2022-06-27 12:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `IgreLutrije`
--

CREATE TABLE `IgreLutrije` (
  `IgraNaSrecu_idIgraNaSrecu` int(11) NOT NULL,
  `Lutrija_idLutrija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `IgreLutrije`
--

INSERT INTO `IgreLutrije` (`IgraNaSrecu_idIgraNaSrecu`, `Lutrija_idLutrija`) VALUES
(1, 1),
(4, 1),
(1, 2),
(6, 2),
(21, 2),
(24, 2),
(1, 3),
(16, 3),
(8, 4),
(16, 4),
(2, 5),
(16, 5),
(17, 5),
(3, 6),
(24, 6),
(9, 7),
(7, 8),
(10, 9),
(23, 9),
(5, 10),
(21, 11),
(22, 11),
(17, 12),
(23, 12);

-- --------------------------------------------------------

--
-- Table structure for table `Kolo`
--

CREATE TABLE `Kolo` (
  `idKolo` int(11) NOT NULL,
  `nazivKolo` varchar(64) NOT NULL DEFAULT 'Kolo',
  `statusKola` tinyint(4) NOT NULL,
  `generiraniBrojevi` text,
  `datumIsplate` datetime NOT NULL DEFAULT '2022-06-21 00:00:00',
  `IgraNaSrecu_idIgraNaSrecu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Kolo`
--

INSERT INTO `Kolo` (`idKolo`, `nazivKolo`, `statusKola`, `generiraniBrojevi`, `datumIsplate`, `IgraNaSrecu_idIgraNaSrecu`) VALUES
(1, 'Kolo 1 EuroJackpot', 0, '36 28 43 73 35 1 79 82 49 21', '2022-06-21 00:00:00', 1),
(2, 'Kolo 2 EuroJackpot', 0, '89 48 27 16 46 1 99 12 7 13', '2022-06-21 00:00:00', 1),
(3, 'Kolo 3 Loto6', 1, '', '2022-06-21 00:00:00', 3),
(4, 'Kolo 4 Loto7', 0, '7 6 56 99 5 45 19', '2022-06-21 00:00:00', 2),
(5, 'Kolo 5 Loto7', 0, '16 25 85 20 17 5 89', '2022-06-21 00:00:00', 2),
(6, 'Kolo 6 EuroJackpot', 0, '42 51 32 52 6 76 8 7 82 97', '2022-06-20 00:00:00', 1),
(7, 'Kolo 7 Loto 7', 0, '47 25 96 4 31 85 36', '2022-06-21 00:00:00', 2),
(8, 'Kolo 8 Keno', 0, '44 79 8 50 5 11 88 95 87 3', '2022-06-06 00:00:00', 6),
(9, 'Kolo 9 Keno', 1, NULL, '2022-06-21 00:00:00', 6),
(10, 'Kolo 10 Loto7', 1, NULL, '2022-06-21 00:00:00', 2),
(11, 'Kolo 11 EuroJackpot', 0, '48 35 80 30 66 33 9 18 54 97', '2022-06-23 12:00:00', 1),
(12, 'Kolo 12 Keno', 0, '23 63 76 49 35 21 31 52 34 28', '2022-06-27 12:00:00', 6),
(13, 'Kolo 13 Joker', 1, NULL, '2022-07-23 12:00:00', 7),
(14, 'Kolo 14 Brzih 35', 0, '45 2 13 19 8 63 62 11 37 24 29 90 20 96 32 83 54 41 26 95 75 71 76 57 92 67 7 84 88 49 70 93 56 82 39', '2022-07-01 00:00:00', 5),
(15, 'Kolo 15 Dame', 1, NULL, '2022-08-01 10:00:00', 16),
(16, 'Kolo 16 Dame', 0, '70 96 80 41 1 21 92 9 22 62 74 37 19 53 34 7 94 64 93 71', '2022-09-01 10:00:00', 16),
(17, 'Kolo 17 Kralj Tref', 0, '2 55 8 52 9 92 4 53 6 32', '2022-06-29 00:00:00', 10),
(18, 'Kolo 18 Toto 13', 1, NULL, '2021-07-03 00:00:00', 8),
(19, 'Kolo 19 Toto 13', 0, NULL, '2022-07-05 00:00:00', 8),
(20, 'Kolo 20 Super sedmica', 0, NULL, '2022-07-03 12:22:11', 17),
(21, 'Kolo 21 Bingo', 1, NULL, '2022-07-03 12:22:11', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Korisnik`
--

CREATE TABLE `Korisnik` (
  `idKorisnik` int(11) NOT NULL,
  `imePrezime` varchar(60) NOT NULL,
  `korisnickoIme` varchar(40) NOT NULL,
  `lozinka` varchar(45) NOT NULL,
  `lozinkaSha256` char(64) NOT NULL,
  `datumRegistracije` datetime NOT NULL,
  `email` varchar(80) NOT NULL,
  `uvjetiKoristenja` datetime DEFAULT NULL,
  `brojNeuspjesnihPrijava` int(11) NOT NULL,
  `statusKorisnika` tinyint(4) DEFAULT NULL,
  `uloga_idUloga` int(11) NOT NULL,
  `aktivacijskiKod` varchar(50) DEFAULT NULL,
  `vrijemeIstekaKoda` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Korisnik`
--

INSERT INTO `Korisnik` (`idKorisnik`, `imePrezime`, `korisnickoIme`, `lozinka`, `lozinkaSha256`, `datumRegistracije`, `email`, `uvjetiKoristenja`, `brojNeuspjesnihPrijava`, `statusKorisnika`, `uloga_idUloga`, `aktivacijskiKod`, `vrijemeIstekaKoda`) VALUES
(1, 'Elena Kržina', 'ekrzina', 'laDa27admin', '16334d0f28504e46076bd0f450e80a8cd340d7b69f5404be7ae2cf8398c15ef7', '2022-04-07 12:32:03', 'ekrzina@foi.hr', '2022-04-07 12:32:03', 0, 0, 4, '659HH1', NULL),
(2, 'Ema Baumgartner', 'EmaBB', 'cvjetic101', '04067dcdfa1c9f015cf225c59de03c3e87196e6879a683d2ca2d93594301f126', '2022-04-10 03:21:10', 'emaMo@gmail.com', '2022-04-10 03:20:23', 0, 0, 3, '3R7KK7', NULL),
(3, 'Ivan Horvat', 'Ivohan707', 'falconGlider', '628ed572ff4ce8875c43dbaad87bb6dcf33623044478430252b4a4b3ce0b8b19', '2022-04-09 10:23:23', 'ivannovac7@gmail.com', '2022-04-09 10:21:00', 0, 0, 3, 'IBA11A', NULL),
(4, 'Karlo Kolarić', 'KarloK', 'nadamsedauspije', 'd8aa834872811243ec67524dfd8d853bc2edb16c3673ca3ae58bf30ccdb78fac', '2022-04-11 12:59:45', 'karlokolaric@gmail.com', '2022-04-11 12:58:30', 0, 1, 2, '398U72', NULL),
(5, 'Tin Oreski', 'Orijaski', 'div10001', 'fd0567bab6378cbca5257e77e5384b9d083750747f53d6f4046345ff4f05f5b7', '2022-04-11 00:02:00', 'tinTonOre@gmail.com', '2022-03-11 23:57:34', 0, 0, 3, 'N012J3', NULL),
(6, 'Klara Kolac', 'KolacKoStolac', 'berni0909', 'ec9cc98ac2f4774162d42ddf91c6604477dcea8ed9b5ff97e10dd6e1fccd85b0', '2022-04-10 20:34:02', 'klaraKolac@gmail.com', '2022-04-10 20:30:02', 4, 1, 2, '575TZ7', NULL),
(7, 'Simon Novak', 'Mr. SIM', 'x5DvR9H11romCM', '15b96a7f6b5f12bf0cc140f7225b9bfb6493c268fefbe754e85c4f50dd2b8abc', '2022-04-11 15:42:12', 'novakSim@gmail.com', '2022-04-11 15:41:00', 0, 1, 2, 'UW9O12', NULL),
(8, 'Edmund Friedrick', 'Edmund F.', 'baskerHound007', 'afbb28e5d5638c0667c5eef67d6ccee73e57cbc70de0979caf1b03bae5e04136', '2022-04-10 23:12:10', 'edmund.friedrick1@gmail.com', '2022-04-10 23:10:21', 0, 0, 3, 'UA0S75', NULL),
(9, 'Dina Dvorak', 'DinaDo', 'dinariDo', 'ef021651d6f6cd87d5339bcef35f61bac5436d3e59a1ea42fba6bfcff89e9530', '2022-04-11 12:23:11', 'dinaDona@outlook.com', '2022-04-11 05:23:00', 0, 0, 2, '9ZA7ST', NULL),
(10, 'Tihomir Galeb', 'EuroWinner12', 'galebklaukavac', '54b0358c59c4ec0b3745299756bbb11394fdd86b1e7517ab6783689782b93f9e', '2022-04-10 12:24:42', 'galeb.tih@gmail.com', '2022-04-10 12:20:00', 0, 0, 2, 'EWI89S', NULL),
(12, 'Emil Ban', 'cban', 'ciciban', 'd1974ad265b7f044397368d6d542472ef6ff7c2ab41066db7fc261a99ff5120e', '2022-06-01 18:45:54', 'eban@foi.hr', '2022-06-01 18:45:54', 2, 0, 3, 'AK087T', NULL),
(14, 'Dante Leonović', 'dantelion', 'maslacak', '2540659ba79b550e30693e2626db2fa0e7693c7358e9c292bc0a41ef3e190d4e', '2022-06-01 18:48:15', 'dleon@gmail.com', '2022-06-01 18:48:15', 0, 0, 2, '6TZ8F1', NULL),
(19, 'Dina Toplek', 'Daisy', 'cvjetic101', '821aec332b62ea031b801aaa584b0ba6441762630e3513d2f62fed5f700f3b5f', '2022-06-01 18:51:06', 'dtoplek@foi.hr', '2022-06-01 18:51:06', 0, 1, 2, 'I88GT4', NULL),
(20, 'Alojzije Merkator', 'Merkat', 'merkati', 'c2070948618dfeb3f3e2b05ff42e4f162978fa5da6c452d6d30d7e98bc431f4a', '2022-06-01 18:55:09', 'alojz@gmail.com', '2022-06-01 18:55:09', 0, 0, 2, '0PO09', NULL),
(21, 'Nana Prezi', 'Kamalija', 'kama23', 'bcc53344fb62fdb70ad185071627f58dd44acc98d599459a48716f10f11a1a07', '2022-06-01 19:32:03', 'nanae@foi.hr', '2022-06-01 19:32:03', 0, 0, 2, 'ZT5ED5', NULL),
(23, 'Nana Banana', 'NanaBanana', 'wewe', 'b99711795dd50ae897d0723241a39fce7db961fadc28ba8a1d68ff9c727166ae', '2022-06-01 20:47:31', 'ban@foi.hr', '2022-06-01 20:47:31', 0, 0, 2, '6TGV51', NULL),
(24, 'Apollo Edmund', 'Apollo11', 'aceattorney', '87a7ee62135bb88716caeac936ee0035e9c415d8c37eab4f4c4255b35aad0147', '2022-06-01 20:48:58', 'apollo.justice11@gmail.com', '2022-06-01 20:48:58', 0, 0, 3, '001IOI', NULL),
(25, 'Gustav Zerno', 'Gazella', 'gazi12', 'd76150f4df583b3d410e21e29635c004560dd6272b9676878bfe98d36640d644', '2022-06-01 20:51:45', 'gzerno@foi.com', '2022-06-01 20:51:45', 0, 0, 2, 'TR52O8', NULL),
(26, 'Katarina Lilek', 'Klinček', 'podoblokom', '75a7413768dd4f12ed269dd257f3b5731b10a6d648c0ba42e2332661b225c100', '2022-06-01 20:52:39', 'klilek@gmail.com', '2022-06-01 20:52:39', 5, 0, 2, '2MX4A1', '2022-06-01 17:55:35'),
(33, 'Snjezana Sklepicaric', 'SunnyBee', 'sunburn', '759b57b12d7e5a5ac6253d3ff8a3ac850202b080c6fe78ea51b8c0d1f4af1e68', '2022-06-04 18:04:59', 'snjeza@gmail.com', NULL, 0, 0, 2, 'FZEfSR', '2022-06-05 01:04:59'),
(46, 'Leopold Leonin', 'LavLov', 'lavica', 'c24e2ff627b8750ee4ec5cc7da4eece1007c998ff1b104498941b09fc7a091f3', '2022-06-10 18:02:18', 'leoleon@gmail.com', NULL, 0, 0, 2, 'KlooguZgIb', '2022-06-11 01:02:18'),
(53, 'Žan Matotek', 'JeanMatt', '12345JM', '03c0d64c0e57dcdba881d98d88fd5eae1d788579abb44b18befe9aa346cdcbd8', '2022-06-11 12:50:41', 'zanmato@foi.hr', '2022-06-11 12:50:41', 0, 0, 2, 'MSV10Tmm1V', '2022-06-11 19:50:41'),
(55, 'Erika Ezop', 'Eirika', 'eiri23ka', 'c076669851fe38fc03161b617c679832934a916d6f023f348bc199cd5676040b', '2022-06-12 00:29:39', 'eezop@foi.hr', NULL, 0, 0, 2, '4iJ680XPV', '2022-06-12 07:29:39'),
(56, 'Denis Dewitte', 'DenideWi', 'dolly', 'd1747e511120b70cf5b7cf42e3ed53712df0c83732dd6af8f8423a55e59cd142', '2022-06-12 00:35:53', 'denisdewitte@gmail.com', NULL, 0, 0, 2, 'niB9fUZwIc', '2022-06-12 07:35:53'),
(58, 'Lovro Lunarić', 'LovroL', 'sH8jNxSwiXwK', '1f15f366a3f4542975a69e0a28bccb903457177a1c239b8ba96c282afcbfe280', '2022-06-12 13:27:36', 'ekrzina@foi.hr', '2022-06-12 11:23:53', 0, 0, 2, 'MacwghMQqt', '2022-06-12 20:27:36'),
(59, 'Novak Novakovič', 'NovakoN', 'lutrija4life', '9a5e413413814498b628164053e8cf5ce781be23d6ec9f051277ebc8042aa16c', '2022-06-12 22:37:56', 'novakno@gmail.com', '2022-06-12 14:23:53', 0, 0, 1, 'p2qkPWT7ZM', '2022-06-13 05:37:56'),
(61, 'Oliver Hajdarović', 'OliK24', 'olialles', '54633fa4899f4927fd26e38c0edcd08173b182d116238e5bd7adc6349ee3c9f1', '2022-06-12 22:47:46', 'olihajdarovic@gmail.com', '2022-06-12 14:23:53', 4, 1, 2, 'r00VZw9kNa', '2022-06-13 05:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `Listic`
--

CREATE TABLE `Listic` (
  `idListic` int(11) NOT NULL,
  `telefon` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `adresa` varchar(60) NOT NULL,
  `odabraniBrojevi` text NOT NULL,
  `brojPogodenihBrojeva` int(11) DEFAULT NULL,
  `osvojeniIznos` double DEFAULT NULL,
  `StatusListica_idStatusListica` int(11) NOT NULL,
  `Korisnik_idKorisnik` int(11) NOT NULL,
  `Kolo_idKolo` int(11) NOT NULL,
  `IgraNaSrecu_idIgraNaSrecu` int(11) NOT NULL,
  `slikaIspunjenogListica` varchar(255) NOT NULL,
  `datumUpload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Listic`
--

INSERT INTO `Listic` (`idListic`, `telefon`, `email`, `adresa`, `odabraniBrojevi`, `brojPogodenihBrojeva`, `osvojeniIznos`, `StatusListica_idStatusListica`, `Korisnik_idKorisnik`, `Kolo_idKolo`, `IgraNaSrecu_idIgraNaSrecu`, `slikaIspunjenogListica`, `datumUpload`) VALUES
(1, '095 328 2331', 'karlokolaric@gmail.com', 'Ulica bana Josipa Jelačića 111 Vž', '4 14 58 21 12 63', 2, 12000, 3, 4, 3, 3, 'listici/images.jpg', '2022-05-17 23:28:29'),
(2, ' 095 328 2331', 'karlokolaric@gmail.com', 'Ulica Franza Predoba 10 Zg', '12 2 34 67 22 97', 0, 0, 2, 4, 3, 3, 'listici/1_Lotteryjpeg.jpg', '2022-05-11 23:14:45'),
(3, '095 328 2331', 'karlokolaric@gmail.com', 'Ulica bana Josipa Jelačića 111 Vž', '1 23 43 45 67 89', 1, 6000, 3, 4, 3, 3, 'listici/21cc2c4cf66fb387ded2cc49bba08418--how-to-win-the-lottery-winning-the-lottery.jpg', '2022-06-01 08:28:45'),
(4, '098 222 3613', 'klaraKolac@gmail.com', 'Trg Frana Krsta Frankopana 14A Osijek', '1 99 77 55 33 88', 1, 6000, 3, 6, 3, 3, 'listici/1200x0.jpg', '2022-05-16 23:21:45'),
(5, '098 222 3613', 'klaraKolac@gmail.com', 'Trg Frana Krsta Frankopana 14A Osijek', '98 37 78 15 14 3', 2, 12000, 3, 6, 3, 3, 'listici/1422 Big Money u.jpg', '2022-06-01 23:28:45'),
(6, '098 222 3613', 'klaraKolac@gmail.com', 'Trg Frana Krsta Frankopana 14A Osijek', '58 25 11 28 4 92', 2, 12000, 3, 6, 3, 3, 'listici/1596682247133.jpg', '2022-06-01 23:28:29'),
(7, '099 662 3372', 'galeb.tih@gmail.com', 'Trg Republike 102 Split', '14 58 37 39 99 3', 3, 18000, 3, 10, 3, 3, 'listici/bangkok-thailand-october-antique-lottery-more-than-years-old-price-baht-per-ticket-white-background-isolated-180227220.jpg', '2022-06-01 23:28:45'),
(8, '099 662 3372', 'galeb.tih@gmail.com', 'Trg Republike 102 Split', '29 39 49 59 69 79 2', 2, 14000, 3, 10, 8, 2, 'listici/close-up-of-national-lottery-lotto-tickets-and-slips-ticket-slip-england-FGD1NG.jpg', '2022-06-01 23:28:22'),
(9, '099 662 3372', 'galeb.tih@gmail.com', 'Trg Republike 102 Split', '26 1 2 3 4 5 6', 2, 14000, 1, 10, 8, 2, 'listici/cracow-małopolska-poland-circa-january-polish-scratch-card-lotto-lottery-ticket-off-scratchie-numbers-gambling-addiction-174129466.jpg', '2022-06-01 23:28:27'),
(10, '095 577 1123', 'edmund.friedrick1@gmail.com', 'Ulica Brijestova 37 Čakovec', '12 59 3 19 5 63 2', 5, 35000, 3, 8, 10, 2, 'listici/images.jpeg', '2022-06-02 08:28:18'),
(11, '098 222 3613', 'klaraKolac@gmail.com', 'Trg Frana Krsta Frankopana 14A Osijek', '19 1 2 56 45 34 21', 1, 7000, 1, 6, 10, 2, 'listici/images.jpg', '2022-06-02 08:22:45'),
(15, '385+95-222-1111', 'eban.foi.hr', 'Ulica Brijestova 58', '25 73 61 92 37 1 2 3 10 82', 0, 0, 2, 12, 10, 1, 'listici/iStock-505887146.jpg', '2022-06-02 05:28:45'),
(16, '385+95-202-1111', 'eban@foi.hr', 'Ulica Brijestova 58', '80 93 94 73 76 50 2 24 74 27', 0, 0, 2, 12, 10, 1, 'listici/iStock-1010630260.jpeg', '2022-06-03 23:20:25'),
(31, '+385 95-222-1111', 'edmund.friedrick1@gmail.com', 'Ulica Brijestova 37 Čakovec', '1 3 5 19 12 90 91', 4, 28000, 3, 8, 10, 2, 'listici/istockphoto-1291862188-612x612.jpg', '2022-06-05 22:53:16'),
(32, ' 385 98-882-1123', 'snjeza@gmail.com', 'Ulica kralja Zvonimira 41 Zagreb', '2 19 20 32 66 41 43', 1, 7000, 3, 33, 10, 2, 'listici/lottery-ticket-icon-cartoon-of-lottery-ticket-vector-icon-for-web-design-isolated-on-white-background-2CCPKP6.jpg', '2022-06-05 23:25:01'),
(34, '+385 98-882-1123', 'snjeza@gmail.com', 'Ulica kralja Zvonimira 41 Zagreb', '79 25 81 99 41 44 39 78 42 90', 0, 0, 2, 33, 10, 1, 'listici/lottery-ticket-isolated-on-white-background-D3R8N6.jpg', '2022-06-05 23:32:53'),
(36, '+385 12-122-7364', 'dinaDona@outlook.com', 'Ulica Stanislava Bosiljka 12', ' 85 78 5 9 29 66 82 1 2 3', 2, 15000, 1, 9, 11, 1, 'listici/lottery-ticket-vector-228103.jpg', '2022-06-08 16:11:23'),
(37, '+385 23-461-3855', 'dleon@gmail.com', 'Zagrebačka ulica 23, Sisak', '36 49 65 50 3 9 23 34 56 11', 1, 7500, 1, 14, 11, 1, 'listici/Lotto.jpg', '2022-06-08 16:13:13'),
(39, ' 385 12-122-1220', 'emaMo@gmail.com', 'Ulica Stanislava Bosiljka 12', '3 5 9 16 23 87 99 98 97 1', 2, 15000, 1, 2, 11, 1, 'listici/lotto ticket.jpg', '2022-06-08 16:48:19'),
(40, '+385 12-122-7364', 'emaMo@gmail.com', 'Ulica Stanislava Bosiljka 12', '2 34 56 29 77 1 35 81 66 21', 3, 7500, 3, 2, 12, 6, 'listici/lotto-ticket-27745929.jpg', '2022-06-08 19:09:14'),
(41, '+385 99-102-2466', 'emaMo@gmail.com', 'Ulica Stanislava Bosiljka 12', '23 78 47 90 27 1 34 40 84 11', 2, 5000, 3, 2, 12, 6, 'listici/lotto-ticket-illustration-design-over-white-background-48016359.jpg', '2022-06-08 20:55:53'),
(42, '+385 99-436-1112', 'apollo.justice11@gmail.com', 'Ulica Zrisnkih 45 Čakovec', '5 2 98 34 76 12 5', NULL, NULL, 4, 24, 10, 2, 'listici/uk-10th-oct-2015-changes-to-the-national-lottery-lotto-increasing-F3N4GE.jpg', '2022-06-09 01:31:15'),
(43, '+385 99-102-2466', 'emaMo@gmail.com', 'Ulica Stanislava Bosiljka 12', '23 78 47 90 27 1 34 99 84 11', 1, 2500, 3, 2, 12, 6, 'listici/uk-lottery-ticket-and-2-pound-coins-E4JWE2.jpg', '2022-06-08 20:55:53'),
(44, '+385 99-102-2466', 'emaMo@gmail.com', 'Ulica Stanislava Bosiljka 12', '98 78 47 90 27 1 34 99 84 11', 1, 2500, 3, 2, 12, 6, 'listici/xgjgxetuskgljzfjlxt6.jpg', '2022-06-08 20:55:53'),
(45, ' 385 99-102-2466', 'leoleon@gmail.com', 'Ulica Vladimira Nazora 34', '31 59 83 24 92 15', NULL, NULL, 4, 46, 3, 3, 'listici/lottery-ticket-vector-209805.jpg', '2022-06-10 18:48:44'),
(46, ' 385 99-102-2466', 'leoleon@gmail.com', 'Ulica Vladimira Nazora 30', '40 81 77 95 12 92 64 74 34 29 82 54 19 20 4 59 53 75 84 32', 6, 1500, 1, 46, 15, 16, 'listici/WRTA2X7RZVCSTC2HFUKXGYHAYQ.jpg', '2022-06-10 18:53:11'),
(47, ' 385 98-235-0020', 'zanmato@foi.hr', 'Ulica Petra Preradovića 13 Vž', '96 5 67 18 23 51 62 95 77 79 3 39 58 35 90 20 11 2 68 16 44 38 74 88 70 54 84 69 7 85 12 87 9 86 89', 14, 3507, 3, 53, 14, 5, 'listici/istockphoto-900363086-1024x1024.jpg', '2022-06-12 00:23:44'),
(48, '+385 98-408-7743', 'ekrzina@foi.hr', 'Ulica Janka Leskovara 9', '67 19 29 89 64 54 30 20 66 70 60 52 82 32 50 25 2 15 96 40', NULL, NULL, 4, 1, 15, 16, 'listici/lottery-ticket-scratch-win-lottey-isolated-white-background-45353019.jpg', '2022-06-11 22:22:47'),
(49, '+385 98-305-2233', 'eezop@foi.hr', 'Ulica Davora Rovera 37 Zaprešić', '19 93 21 53 40 69 24 10 70 32 43 38', NULL, NULL, 4, 55, 13, 7, 'listici/lottery-ticket-8651684.jpg', '2022-06-12 00:33:15'),
(50, '+385 99-102-2466', 'tihomirgal@gmail.com', 'Ulica kralja Trpimira 12 Zg', '65 71 33 80 46 41 48 13 43 24 20 8 31', NULL, NULL, 4, 10, 13, 7, 'listici/euro-millions-and-lotto-lottery-tickets-on-a-white-background-FCNJAK.jpg', '2022-06-12 01:55:21'),
(51, ' 385 99-102-2466', 'tihomirgal@gmail.com', 'Ulica kralja Trpimira 12 Zg', '13 2 23 57 48 99 14 22 98 32', 1, 7500, 1, 10, 11, 1, 'listici/euro-millions-lottery-ticket-on-a-white-background-F8YGF8.jpg', '2022-06-12 01:59:10'),
(52, '+385 99-102-2466', 'tihomirgal@gmail.com', 'Ulica kralja Trpimira 12 Zg', '79 8 63 64 19 24 37 78 41 70', NULL, NULL, 4, 10, 10, 2, 'listici/blank-lottery-ticket-10849116.jpg', '2022-06-12 01:58:21'),
(53, ' 385 99-353-7042', 'lovrix@gmail.com', 'Ulica bana Jelačića  30 Vž', '2 45 6 42 1 87 36 23 77 5', 0, 0, 2, 58, 11, 1, 'listici/euro-jackpot-lottery-ticket-polish-lotto-pruszcz-gdanski-poland-january-euro-jackpot-lottery-ticket-polish-lotto-168223916.jpg', '2022-06-12 17:25:55'),
(54, '+385 99-353-7042', 'lovrix@gmail.com', 'Ulica bana Jelačića  30 Vž', '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20', NULL, NULL, 4, 58, 15, 16, 'listici/pexels-photo-5550130.jpeg', '2022-06-12 17:27:27'),
(55, '+385 99-485-2239', 'zanmato@foi.hr', 'Ulica Davora Rovera 37 Zaprešić', '40 52 99 10 21 9 50 38 44 32', 1, 7500, 3, 53, 11, 1, 'listici/euro-millions-lottery-ticket-BXR1H4.jpg', '2022-06-12 18:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `Lutrija`
--

CREATE TABLE `Lutrija` (
  `idLutrija` int(11) NOT NULL,
  `nazivLutrije` varchar(45) NOT NULL,
  `infoTelefon` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `webAdresa` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Lutrija`
--

INSERT INTO `Lutrija` (`idLutrija`, `nazivLutrije`, `infoTelefon`, `email`, `webAdresa`) VALUES
(1, 'Hrvatska lutrija', '0800-256-2121', 'hrlutrija@lutrija.hr', 'https://www.lutrija.hr'),
(2, 'EuroMillions', '0800-233-112', 'euromillions@lottery.com', 'https://www.euromillions.com'),
(3, 'SuperSport', '0800-220-112', 'supersport@lutrija.hr', 'https://www.supersport.hr'),
(4, 'Mozzart', '0800-028-102', 'mozzart@lutrija.hr', 'https://www.mozzartBet.com'),
(5, 'Germania', '0800-827-119', 'germania@lutrija.hr', 'https://www.germania.hr'),
(6, 'PSK', '0800-948-239', 'pskpodrska@lutrija.hr', 'https://www.psk.com'),
(7, 'Unibet', '0800-557-983', 'unibet@lutrija.hr', 'https://www.unibet.hr'),
(8, 'Rabona', '0800-435-766', 'rabona@lutrija.hr', 'https://www.rabona.hr'),
(9, 'Cro Bet', '0800-826-772', 'croBet@lutrija.hr', 'https://www.croBet.hr'),
(10, 'Favbet', '0800-345-8751', 'favbet@lutrija.hr', 'https://www.favbet.hr'),
(11, 'Bet pro Quo', '0800-100-284', 'betproquo@lutrija.hr', 'https://www.betproquo/dollar.hr'),
(12, 'Lutz.hr', '0800-470-3546', 'lutz-help@lutrija.hr', 'https://www.lutz.hr'),
(13, 'LuteMute', '0800-482-9361', 'lutemute@lutrija.hr', 'https://www.lutemute.hr');

-- --------------------------------------------------------

--
-- Table structure for table `StatusListica`
--

CREATE TABLE `StatusListica` (
  `idStatusListica` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `StatusListica`
--

INSERT INTO `StatusListica` (`idStatusListica`, `status`) VALUES
(1, 'dobitan'),
(2, 'nije dobitan'),
(3, 'isplaćen'),
(4, 'neodređen');

-- --------------------------------------------------------

--
-- Table structure for table `TipRadnje`
--

CREATE TABLE `TipRadnje` (
  `idTipRadnje` int(11) NOT NULL,
  `nazivTipaRadnje` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TipRadnje`
--

INSERT INTO `TipRadnje` (`idTipRadnje`, `nazivTipaRadnje`) VALUES
(1, 'prijava/odjava'),
(2, 'rad s bazom'),
(3, 'ostale radnje');

-- --------------------------------------------------------

--
-- Table structure for table `Uloga`
--

CREATE TABLE `Uloga` (
  `idUloga` int(11) NOT NULL,
  `naziv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Uloga`
--

INSERT INTO `Uloga` (`idUloga`, `naziv`) VALUES
(1, 'Neregistrirani korisnik'),
(2, 'Registrirani korisnik'),
(3, 'Moderator'),
(4, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `ZahtjevZaIsplatom`
--

CREATE TABLE `ZahtjevZaIsplatom` (
  `idZahtjevZaIsplatom` int(11) NOT NULL,
  `iznosIsplate` double NOT NULL,
  `potvrdeno` datetime DEFAULT NULL,
  `Listic_idListic` int(11) NOT NULL,
  `Korisnik_idKorisnik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ZahtjevZaIsplatom`
--

INSERT INTO `ZahtjevZaIsplatom` (`idZahtjevZaIsplatom`, `iznosIsplate`, `potvrdeno`, `Listic_idListic`, `Korisnik_idKorisnik`) VALUES
(1, 12000, '2022-06-05 23:23:23', 1, 2),
(2, 6000, '2022-06-05 23:23:23', 3, 2),
(3, 6000, '2022-06-05 23:23:23', 4, 2),
(4, 12000, '2022-06-05 23:23:23', 5, 8),
(5, 12000, '2022-06-05 23:23:23', 6, 8),
(6, 18000, '2022-06-05 23:23:23', 7, 2),
(7, 14000, '2022-06-05 23:23:23', 8, 8),
(8, 14000, NULL, 9, NULL),
(11, 35000, '2022-06-07 19:15:53', 10, 2),
(12, 28000, '2022-06-07 20:00:46', 31, 8),
(13, 7000, '2022-06-12 01:08:24', 32, 1),
(14, 7500, '2022-06-08 21:13:23', 40, 2),
(16, 2500, '2022-06-10 17:42:27', 43, 2),
(17, 2500, '2022-06-10 17:43:28', 44, 2),
(18, 3507, '2022-06-12 17:51:38', 47, 8),
(19, 5000, '2022-06-12 02:26:27', 41, 2),
(20, 14000, NULL, 9, NULL),
(21, 7500, '2022-06-12 18:10:43', 55, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Dnevnik`
--
ALTER TABLE `Dnevnik`
  ADD PRIMARY KEY (`idDnevnik`),
  ADD KEY `fk_Dnevnik_Korisnik1_idx` (`Korisnik_idKorisnik`),
  ADD KEY `fk_Dnevnik_TipRadnje1_idx` (`TipRadnje_idTipRadnje`);

--
-- Indexes for table `DodijeljenModerator`
--
ALTER TABLE `DodijeljenModerator`
  ADD PRIMARY KEY (`Lutrija_idLutrija`,`Korisnik_idKorisnik`),
  ADD KEY `fk_Lutrija_has_Korisnik_Korisnik1_idx` (`Korisnik_idKorisnik`),
  ADD KEY `fk_Lutrija_has_Korisnik_Lutrija1_idx` (`Lutrija_idLutrija`);

--
-- Indexes for table `IgraNaSrecu`
--
ALTER TABLE `IgraNaSrecu`
  ADD PRIMARY KEY (`idIgraNaSrecu`);

--
-- Indexes for table `IgreLutrije`
--
ALTER TABLE `IgreLutrije`
  ADD PRIMARY KEY (`IgraNaSrecu_idIgraNaSrecu`,`Lutrija_idLutrija`),
  ADD KEY `fk_IgraNaSrecu_has_Lutrija_Lutrija1_idx` (`Lutrija_idLutrija`),
  ADD KEY `fk_IgraNaSrecu_has_Lutrija_IgraNaSrecu1_idx` (`IgraNaSrecu_idIgraNaSrecu`);

--
-- Indexes for table `Kolo`
--
ALTER TABLE `Kolo`
  ADD PRIMARY KEY (`idKolo`),
  ADD KEY `fk_Kolo_IgraNaSrecu1_idx` (`IgraNaSrecu_idIgraNaSrecu`);

--
-- Indexes for table `Korisnik`
--
ALTER TABLE `Korisnik`
  ADD PRIMARY KEY (`idKorisnik`),
  ADD KEY `fk_korisnik_uloga_idx` (`uloga_idUloga`);

--
-- Indexes for table `Listic`
--
ALTER TABLE `Listic`
  ADD PRIMARY KEY (`idListic`),
  ADD KEY `fk_Listic_StatusListica1_idx` (`StatusListica_idStatusListica`),
  ADD KEY `fk_Listic_Korisnik1_idx` (`Korisnik_idKorisnik`),
  ADD KEY `fk_Listic_Kolo1_idx` (`Kolo_idKolo`),
  ADD KEY `fk_Listic_IgraNaSrecu1_idx` (`IgraNaSrecu_idIgraNaSrecu`);

--
-- Indexes for table `Lutrija`
--
ALTER TABLE `Lutrija`
  ADD PRIMARY KEY (`idLutrija`);

--
-- Indexes for table `StatusListica`
--
ALTER TABLE `StatusListica`
  ADD PRIMARY KEY (`idStatusListica`);

--
-- Indexes for table `TipRadnje`
--
ALTER TABLE `TipRadnje`
  ADD PRIMARY KEY (`idTipRadnje`);

--
-- Indexes for table `Uloga`
--
ALTER TABLE `Uloga`
  ADD PRIMARY KEY (`idUloga`);

--
-- Indexes for table `ZahtjevZaIsplatom`
--
ALTER TABLE `ZahtjevZaIsplatom`
  ADD PRIMARY KEY (`idZahtjevZaIsplatom`),
  ADD KEY `fk_ZahtjevZaIsplatom_Listic1_idx` (`Listic_idListic`),
  ADD KEY `fk_ZahtjevZaIsplatom_Korisnik1_idx` (`Korisnik_idKorisnik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Dnevnik`
--
ALTER TABLE `Dnevnik`
  MODIFY `idDnevnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=475;
--
-- AUTO_INCREMENT for table `IgraNaSrecu`
--
ALTER TABLE `IgraNaSrecu`
  MODIFY `idIgraNaSrecu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `Kolo`
--
ALTER TABLE `Kolo`
  MODIFY `idKolo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `Korisnik`
--
ALTER TABLE `Korisnik`
  MODIFY `idKorisnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `Listic`
--
ALTER TABLE `Listic`
  MODIFY `idListic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `Lutrija`
--
ALTER TABLE `Lutrija`
  MODIFY `idLutrija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `StatusListica`
--
ALTER TABLE `StatusListica`
  MODIFY `idStatusListica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `TipRadnje`
--
ALTER TABLE `TipRadnje`
  MODIFY `idTipRadnje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Uloga`
--
ALTER TABLE `Uloga`
  MODIFY `idUloga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ZahtjevZaIsplatom`
--
ALTER TABLE `ZahtjevZaIsplatom`
  MODIFY `idZahtjevZaIsplatom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Dnevnik`
--
ALTER TABLE `Dnevnik`
  ADD CONSTRAINT `fk_Dnevnik_Korisnik1` FOREIGN KEY (`Korisnik_idKorisnik`) REFERENCES `Korisnik` (`idKorisnik`),
  ADD CONSTRAINT `fk_Dnevnik_TipRadnje1` FOREIGN KEY (`TipRadnje_idTipRadnje`) REFERENCES `TipRadnje` (`idTipRadnje`);

--
-- Constraints for table `DodijeljenModerator`
--
ALTER TABLE `DodijeljenModerator`
  ADD CONSTRAINT `fk_Lutrija_has_Korisnik_Korisnik1` FOREIGN KEY (`Korisnik_idKorisnik`) REFERENCES `Korisnik` (`idKorisnik`),
  ADD CONSTRAINT `fk_Lutrija_has_Korisnik_Lutrija1` FOREIGN KEY (`Lutrija_idLutrija`) REFERENCES `Lutrija` (`idLutrija`);

--
-- Constraints for table `IgreLutrije`
--
ALTER TABLE `IgreLutrije`
  ADD CONSTRAINT `fk_IgraNaSrecu_has_Lutrija_IgraNaSrecu1` FOREIGN KEY (`IgraNaSrecu_idIgraNaSrecu`) REFERENCES `IgraNaSrecu` (`idIgraNaSrecu`),
  ADD CONSTRAINT `fk_IgraNaSrecu_has_Lutrija_Lutrija1` FOREIGN KEY (`Lutrija_idLutrija`) REFERENCES `Lutrija` (`idLutrija`);

--
-- Constraints for table `Kolo`
--
ALTER TABLE `Kolo`
  ADD CONSTRAINT `fk_Kolo_IgraNaSrecu1` FOREIGN KEY (`IgraNaSrecu_idIgraNaSrecu`) REFERENCES `IgraNaSrecu` (`idIgraNaSrecu`);

--
-- Constraints for table `Korisnik`
--
ALTER TABLE `Korisnik`
  ADD CONSTRAINT `fk_korisnik_uloga` FOREIGN KEY (`uloga_idUloga`) REFERENCES `Uloga` (`idUloga`);

--
-- Constraints for table `Listic`
--
ALTER TABLE `Listic`
  ADD CONSTRAINT `fk_Listic_IgraNaSrecu1` FOREIGN KEY (`IgraNaSrecu_idIgraNaSrecu`) REFERENCES `IgraNaSrecu` (`idIgraNaSrecu`),
  ADD CONSTRAINT `fk_Listic_Kolo1` FOREIGN KEY (`Kolo_idKolo`) REFERENCES `Kolo` (`idKolo`),
  ADD CONSTRAINT `fk_Listic_Korisnik1` FOREIGN KEY (`Korisnik_idKorisnik`) REFERENCES `Korisnik` (`idKorisnik`),
  ADD CONSTRAINT `fk_Listic_StatusListica1` FOREIGN KEY (`StatusListica_idStatusListica`) REFERENCES `StatusListica` (`idStatusListica`);

--
-- Constraints for table `ZahtjevZaIsplatom`
--
ALTER TABLE `ZahtjevZaIsplatom`
  ADD CONSTRAINT `fk_ZahtjevZaIsplatom_Korisnik1` FOREIGN KEY (`Korisnik_idKorisnik`) REFERENCES `Korisnik` (`idKorisnik`),
  ADD CONSTRAINT `fk_ZahtjevZaIsplatom_Listic1` FOREIGN KEY (`Listic_idListic`) REFERENCES `Listic` (`idListic`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
