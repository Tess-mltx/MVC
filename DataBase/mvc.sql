-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 fév. 2024 à 14:34
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `publish_date` datetime NOT NULL,
  `author` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `publish_date`, `author`) VALUES
(1, 'Le cadeau mystérieux', 'Un matin ensoleillé, Emma trouve une boîte soigneusement enveloppée de ruban rouge devant sa porte. Curieuse, elle ouvre la boîte pour y découvrir une vieille clé et un message énigmatique : \"La clé du bonheur se cache où les chemins se croisent.\" Intriguée, Emma se lance dans une quête pour découvrir la serrure correspondante. Au fil de ses aventures, elle rencontre des personnes surprenantes et traverse des lieux inattendus. Finalement, la clé ouvre une porte symbolique, révélant une surprise qui change sa perspective sur la vie.\r\n\r\n', '2024-02-22 10:32:34', 'Tess'),
(2, 'L\'ombre du passé', 'En fouillant le grenier de sa grand-mère, Liam découvre un vieux journal intime datant du début du XXe siècle. Les pages révèlent une histoire d\'amour passionnée interrompue par la guerre. Captivé par l\'histoire, Liam entreprend un voyage pour suivre les traces de l\'auteur du journal. En traversant les lieux mentionnés dans le récit, il découvre des reliques du passé et décide de rendre hommage à cette romance oubliée d\'une manière touchante.', '2024-02-22 10:32:34', 'Robin'),
(3, 'La danse des lucioles', 'Chaque soir, le jardin de Maria s\'illumine d\'une danse mystérieuse de lucioles. Intriguée par ce phénomène, elle décide de les suivre à travers la forêt environnante. Guidée par la lueur scintillante, Maria découvre un endroit magique où les lucioles forment un spectacle éblouissant. Elle apprend que chaque luciole représente un rêve et doit choisir son vœu avec sagesse. La décision de Maria change non seulement sa vie, mais aussi le destin de ceux qui l\'entourent.', '2024-02-22 10:43:48', 'Maoro'),
(4, 'Le musicien des rues', 'Chaque jour, Sarah est captivée par la mélodie envoûtante d\'un musicien de rue près de sa fenêtre. Intriguée par le mystère entourant cet artiste, elle décide de le rencontrer. Ensemble, ils explorent les rues de la ville, découvrant la magie de la musique pour guérir les cœurs brisés et rapprocher les âmes perdues. Le musicien, avec son histoire intrigante, enseigne à Sarah des leçons précieuses sur l\'amour, la passion et la persévérance.', '2024-02-22 10:43:48', 'Denis'),
(5, 'La porte du temps', 'En parcourant une bibliothèque abandonnée, Alex découvre un livre ancien avec une carte menant à une mystérieuse porte du temps. Intrigué, il décide de l\'ouvrir et se retrouve transporté dans une époque révolue. Au cours de son voyage temporel, Alex découvre des événements historiques, rencontre des personnalités du passé et apprend des leçons importantes sur la vie. Maintenant, avec une nouvelle perspective, il doit trouver un moyen de retourner dans son époque tout en préservant les enseignements du passé.', '2024-02-22 10:48:24', 'Tess');

-- --------------------------------------------------------

--
-- Structure de la table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `authors`
--

INSERT INTO `authors` (`id`, `name`, `description`) VALUES
(1, 'Tess', 'Un renard arc-en-ciel sur un fond dark-blue.'),
(2, 'Robin', 'J\'ai gagné au loto et je ne m\'en suis pas rendu compte.'),
(6, 'Denis', 'Notre sauveur à tous.'),
(5, 'Maoro', 'J\'ai zero inspi aujourd\'hui mais je dois remplir la DB !');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
