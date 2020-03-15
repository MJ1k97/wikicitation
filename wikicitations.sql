-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2020 at 02:15 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wikicitations`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(10) COLLATE utf8_roman_ci DEFAULT NULL,
  `passwd` varchar(50) COLLATE utf8_roman_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_roman_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `login`, `passwd`, `email`) VALUES
(1, 'Admin', 'WIKI@Admin2020', 'dmaximjordan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `citations`
--

CREATE TABLE IF NOT EXISTS `citations` (
  `id_citation` int(11) NOT NULL AUTO_INCREMENT,
  `texte` varchar(1000) COLLATE utf8_roman_ci NOT NULL,
  `nomauteur` varchar(40) COLLATE utf8_roman_ci NOT NULL DEFAULT 'unknown',
  `bioauteur` varchar(2000) COLLATE utf8_roman_ci DEFAULT 'Indisponible',
  `statut` tinyint(1) NOT NULL,
  `siecle` int(2) DEFAULT '20',
  `theme` varchar(1000) COLLATE utf8_roman_ci DEFAULT 'Indisponible',
  PRIMARY KEY (`id_citation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_roman_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `citations`
--

INSERT INTO `citations` (`id_citation`, `texte`, `nomauteur`, `bioauteur`, `statut`, `siecle`, `theme`) VALUES
(1, 'L''education est l''arme la plus puissante que l''on puisse utiliser pour changer le monde.', 'Nelson Mandela', 'Ex president de l''Afrique du Sud, mort en 2016.', 1, 21, 'education'),
(2, 'Le seul engagement possible pour l''Ã©crivain c''est la littÃ©rature.', 'Alain Robbe-Grillet', '', 1, 0, ''),
(3, 'La simplicitÃ© possÃ¨de des dimensions qui vont au-delÃ  du purement esthÃ©tique : elle peut Ãªtre le reflet de qualitÃ© innÃ©e, intÃ©rieure, ou la quÃªte d''une comprÃ©hension philosophique ou littÃ©raire de l''harmonie, de la raison et de la vÃ©ritÃ©.', 'John Pawson', '', 1, 0, ''),
(4, 'La politique dans une oeuvre littÃ©raire, c''est un coup de pistolet au milieu d''un concert.', 'Stendhal', 'Artiste, Ã©crivain (1783 - 1842)', 1, 19, 'litterature'),
(5, 'Il nous vient souvent l''envie de changer notre famille naturelle contre une famille littÃ©raire de notre choix, afin de pouvoir dire Ã  tel auteur d''une page touchante : "frÃ¨re".', 'Jules Renard', 'Artiste, Ã©crivain (1864 - 1910)', 1, 20, 'litterature'),
(6, 'La parole donnÃ©e, est un engagement Ã  respecter.', 'dicton', '', 1, 0, ''),
(7, 'La rÃ©volution n''est pas un dÃ®ner de gala ; elle ne se fait pas comme une oeuvre littÃ©raire, un dessin ou une broderie.', 'Mao TsÃ©-Toung', '', 1, 0, ''),
(8, 'L''oeuvre littÃ©raire sert de miroir au public. L''auteur s''y reflÃ¨te et le lecteur y trouve son image.', 'Jiang Zilong', '', 1, 0, ''),
(9, 'La Bible est une oeuvre littÃ©raire et non pas un dogme.', 'George Santayana', '', 1, 0, ''),
(10, 'La rÃ©volution littÃ©raire et la rÃ©volution politique ont fait en moi leur jonction.', 'Victor Hugo', 'Artiste, Ã©crivain, PoÃ¨te, Romancier (1802 - 1885)', 1, 19, ''),
(11, 'Le sens de la crÃ©ation littÃ©raire : dÃ©peindre des objets ordinaires tels que leur reflet apparaÃ®trait dans des miroirs magiques.', 'Vladimir Nabokov', 'Artiste, Critique, Ã©crivain, Journaliste, PoÃ¨te, Romancier, Traducteur (1899 - 1977)', 1, 20, ''),
(12, 'L''invention picturale ou la fantasmagorie littÃ©raire permettent de supporter le rÃ©el dÃ©solÃ© en apportant des compensations magiques.', 'Boris Cyrulnik', 'MÃ©decin, Psychanalyste, Psychiatre, Scientifique (1937 - )', 1, 20, ''),
(13, 'Je crois que pour en faire une oeuvre littÃ©raire, il faut tout simplement rÃªver sa vie - un rÃªve oÃ¹ la mÃ©moire et l''imagination se confondent.', 'Patrick Modiano', 'Artiste, Ã©crivain (1945 - )', 1, 0, ''),
(14, 'Plagiat. CoÃ¯ncidence littÃ©raire composÃ©e d''une primautÃ© remise en doute et d''une honorable postÃ©rioritÃ©.', 'Ambrose Bierce', 'Artiste, Ã©crivain, Journaliste (1842 - 1914)\r\n', 1, 0, ''),
(15, 'Le succÃ¨s d''une oeuvre littÃ©raire ne confirme pas toujours sa valeur.', 'Oleh Oljytch', '', 1, 0, ''),
(16, 'Je suis un paria du monde littÃ©raire japonais. Critiques, Ã©crivains: nombreux sont ceux qui ne m''aiment pas.', 'Haruki Murakami', 'Artiste, Ã©crivain, Essayiste, Journaliste, Romancier, Traducteur (1949 - )', 1, 20, ''),
(17, 'Toute proposition littÃ©raire est fondÃ©e sur des malhonnÃªtetÃ©s intermÃ©diaires : la mÃ©moire, la culture, le dÃ©sir, le langage.', 'Manuel Vazquez Montalban', '', 1, 0, ''),
(18, 'Est littÃ©raire une oeuvre qui possÃ¨de une aptitude Ã  la trahison.', 'Robert Escarpit', 'Artiste, Ã©crivain, Enseignant, Journaliste, Romancier, Scientifique, Sociologue (1918 - 2000)', 1, 21, ''),
(19, 'La rentrÃ©e littÃ©raire est une maladie franÃ§aise qu''il ne faut surtout pas soigner.', 'FrÃ©dÃ©ric Beigbeder', 'Artiste, Critique, Ã©crivain, Journaliste (1965 - )', 1, 0, ''),
(20, 'Exige beaucoup de toi-mÃªme et attends peu des autres. Ainsi beaucoup d''ennuis te seront Ã©pargnÃ©s.', 'Confucius', 'Philosophe', 1, 0, ''),
(21, 'La vie est un mystÃ¨re qu''il faut vivre, et non un problÃ¨me Ã  rÃ©soudre.', 'Gandhi', 'Homme politique, Philosophe, RÃ©volutionnaire (1869 - 1948)', 1, 0, ''),
(22, 'On passe une moitiÃ© de sa vie Ã  attendre ceux qu''on aimera et l''autre moitiÃ© Ã  quitter ceux qu''on aime.', 'Victor Hugo', 'Artiste, Ã©crivain, PoÃ¨te, Romancier (1802 - 1885)', 1, 0, ''),
(23, 'La vie, c''est comme une bicyclette, il faut avancer pour ne pas perdre l''Ã©quilibre.', 'Albert Einstein', 'MathÃ©maticien, Physicien, Scientifique (1879 - 1955)', 1, 0, ''),
(24, 'Pour critiquer les gens il faut les connaÃ®tre, et pour les connaÃ®tre, il faut les aimer.', 'Coluche', 'Artiste, Comique (1944 - 1986)', 1, 0, ''),
(25, 'La rÃ¨gle d''or de la conduite est la tolÃ©rance mutuelle, car nous ne penserons jamais tous de la mÃªme faÃ§on, nous ne verrons qu''une partie de la vÃ©ritÃ© et sous des angles diffÃ©rents.', 'Gandhi', 'Homme politique, Philosophe, RÃ©volutionnaire (1869 - 1948)', 1, 0, ''),
(26, 'Choisissez un travail que vous aimez et vous n''aurez pas Ã  travailler un seul jour de votre vie.', 'Confucius', 'Philosophe\r\n', 1, 0, ''),
(27, 'Le travail Ã©loigne de nous trois grands maux : l''ennui, le vice et le besoin.', 'Voltaire', 'Artiste, Auteur d''ouvrages philosophiques, Auteur de contes, Dramaturge, Ã©crivain, Philosophe, PoÃ¨te (1694 - 1778)', 1, 0, ''),
(28, 'Le domaine de la libertÃ© commence lÃ  oÃ¹ s''arrÃªte le travail dÃ©terminÃ© par la nÃ©cessitÃ©.', 'Karl Marx', 'Artiste, Communiste, Ã©conomiste, Ã©crivain, Essayiste, Homme politique, Journaliste, Philosophe, Scientifique, Socialiste, Sociologue (1818 - 1883)', 1, 0, 'le travail'),
(29, 'La jalousie gouverne le monde. Sans elle, il n''y aurait ni amour, ni argent, ni sociÃ©tÃ©. Personne ne lÃ¨verait le petit doigt. Les jaloux sont le sel de la terre.', 'FrÃ©dÃ©ric Beigbeder', 'Artiste, Critique, Ã©crivain, Journaliste (1965 - )', 1, 0, 'jalousie'),
(30, 'L''engagement d''un poÃ¨te est de veiller Ã  garder amarrer l''humanitÃ© entre les hommes.', 'Josiane Coeijmans', 'PoÃ©tesse, Ã‰crivaine, Belgique, 1966  ', 1, 21, 'engagement'),
(31, 'Un roman est comme un archet, la caisse du violon qui rend les sons, c''est l''Ã¢me du lecteur', 'Stendhal', '', 1, 0, ''),
(32, 'nous autres romanciers, nous sommes les juges d''instruction des hommes et de leurs passions', 'Emile Zola', '', 1, 0, ''),
(33, 'Le roman est une machine inventÃ©e par l''homme pour l''apprÃ©hension du rÃ©el dans sa complexitÃ© ', 'Aragon', '', 1, 0, ''),
(42, 'test', 'test', 'test', 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
