-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 déc. 2020 à 08:36
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sinhthoulathcv`
--

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaissance` date NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codepostal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emploi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentation` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `apropos` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `competence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anneeform` int(11) NOT NULL,
  `lieuform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomformation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debutexp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finexp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieuexp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nommetier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionmetier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobbie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionhobbie` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mediahobbie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id`, `nom`, `prenom`, `photo`, `datenaissance`, `adresse`, `codepostal`, `ville`, `pays`, `mail`, `portable`, `fixe`, `titre`, `emploi`, `presentation`, `apropos`, `competence`, `categorie`, `anneeform`, `lieuform`, `nomformation`, `debutexp`, `finexp`, `lieuexp`, `nommetier`, `descriptionmetier`, `hobbie`, `descriptionhobbie`, `mediahobbie`, `section`) VALUES
(1, 'VIENG LOUANG', 'Sinhthoulath', 'profil.jpg', '1988-01-15', '24 rue Christian Gérard', '77176', 'Savigny le Temple', 'France', 'tacovl@hotmail.fr', '0627795306', '0164791849', 'CV Sinhthoulath Vieng Louang', 'Développeur web et mobile junior', '\r\nBonjour et bienvenue sur mon site,\r\nVous y trouverez des informations sur mon parcours, mes projets ainsi que mes centres d’intérêts.\r\nN\'hésitez pas à me contacter, je me ferais un plaisir de vous répondre.\r\nBonne visite', 'Bonjour, Je m\'appelle Sinhthoulath Vieng Louang et j\'ai crée ce site afin de vous faire découvrir et partager mon travail. Développeur web et web mobile junior, je peux vous apporté des conseils et des solutions pour la conception de votre propre site internet ou de votre application mobile. Pourquoi me choisir plus qu\'un autre? Je vous propose de faire un tour sur le site. Si l\'aspect et le contenu vous plaisent, je vous propose de me contacter via les liens qui sont ci-dessous En vous souhaitant une bonne visite, je vous dis peut être à bientôt.', 'HTML, CSS, Bootstrap, Javascript, JQuery, Ajax, UML, Merise, Maquettage Web, Wordpress, GIT, React JS, SQL/MYSQL/MariaDB, PHP, MVC, Symfony, Windows, Linux,\r\nTraitement de texte, Tableur, Power Point', 'Informatique', 2020, 'ALT RH', 'Titre de développeur web et mobile', '2019-01', '2020-04', 'Collège Daniel Fery 94450 Limeil-Brévannes', 'Assistant d\'éducation', 'Encadrement, surveillance, saisie des absences, retards, relation famille', 'Voyage', 'J\'ai eu l\'occasion de commencer à voyager très jeune grace à  mes parents. D\'abord vers leurs terres d\'origine, le Laos, ou à quelque pas comme la Thaïlande ou la Malaisie. Puis en grandissant, cette envie a été toujours présente. En commençant par l\'Europe, Londres, Amsterdam, Bruxelles ou encore Francfort. Pour enfin prendre les ailes et aller voir au delà (États-Unis, Canada, Nouvelle Zélande, Japon, Corée du Sud...). Je ne compte pas m’arrêté en si bon chemin...', 'DSC_0032.jpg', 'content');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201127110516', '2020-11-27 11:06:02', 121),
('DoctrineMigrations\\Version20201127112630', '2020-11-27 11:26:48', 139),
('DoctrineMigrations\\Version20201127112928', '2020-11-27 11:29:39', 171),
('DoctrineMigrations\\Version20201130102557', '2020-11-30 10:26:20', 89);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'aaa@aaa.aaa', '[]', '$argon2id$v=19$m=65536,t=4,p=1$dWhQbkkyWnRDNG5TbVhRWA$pUq47smS1P3u6M0pkP7mpZ4QjLhRgGisEZ8UX2WpVYc');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motdepasse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autorite` int(11) NOT NULL,
  `cv_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1483A5E9CFE419E2` (`cv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `motdepasse`, `autorite`, `cv_id`) VALUES
(2, 'lalala', 'lalala', 'lalala@lalala.lalala', 'lalala', 0, 1),
(3, 'abcd', 'abcd', 'abcd@abcd.abcd', 'abcd', 0, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_1483A5E9CFE419E2` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
