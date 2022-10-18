-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 jan. 2022 à 15:14
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `volontariat`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

DROP TABLE IF EXISTS `activites`;
CREATE TABLE IF NOT EXISTS `activites` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `date_cloture` datetime NOT NULL,
  `nbre_volontaire` int NOT NULL,
  `organisation_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lieu` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activites_organisation_id_foreign` (`organisation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `libelle`, `date_debut`, `date_fin`, `date_cloture`, `nbre_volontaire`, `organisation_id`, `created_at`, `updated_at`, `lieu`, `description`) VALUES
(1, 'Activité1', '2021-12-29 13:30:00', '2021-12-31 16:30:00', '2021-12-28 17:30:00', 45, 1, '2021-12-16 12:30:00', NULL, 'Le lieu', 'La description de l\'activité');

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_telephone_unique` (`telephone`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `prenom`, `telephone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Chaibou Maikibi', 'Nafissatou', 97503545, 'admin@gmail.com', NULL, '$2y$10$x1u5jqaD1XX67eln1VQT1esYNesbhNnQyAFPLQgKyhHImikccv1sy', NULL, '2021-12-17 11:53:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_19_185836_create_admins_table', 1),
(6, '2021_11_19_201200_create_role', 1),
(7, '2021_11_19_203213_create_users_role', 2),
(8, '2021_12_13_082117_create_organisations_table', 2),
(9, '2021_12_15_141421_statut', 3),
(10, '2021_12_15_142521_status', 4),
(11, '2021_12_15_144202_add_statut_to_organisation', 5),
(13, '2021_12_16_110423_create_activites_table', 6),
(17, '2021_12_28_095842_ajout_lieu_desc', 7),
(18, '2021_12_29_150030_ajout_logo', 7),
(19, '2021_12_29_150536_create_participers_table', 7);

-- --------------------------------------------------------

--
-- Structure de la table `organisations`
--

DROP TABLE IF EXISTS `organisations`;
CREATE TABLE IF NOT EXISTS `organisations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `telephone` int NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `statut` int NOT NULL DEFAULT '1',
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `organisations_telephone_unique` (`telephone`),
  UNIQUE KEY `organisations_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `organisations`
--

INSERT INTO `organisations` (`id`, `name`, `domaine`, `telephone`, `adresse`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `statut`, `logo`) VALUES
(1, 'Mon organisation', 'Son domaine', 12365478, 'Ny', 'orga@gmail.com', NULL, '$2y$10$x1u5jqaD1XX67eln1VQT1esYNesbhNnQyAFPLQgKyhHImikccv1sy', NULL, '2021-12-15 15:15:32', '2021-12-15 15:15:32', 2, ''),
(2, 'Organisation2', 'domaine2', 45669871, 'ny', 'orga2@gmail.com', NULL, '$2y$10$x1u5jqaD1XX67eln1VQT1esYNesbhNnQyAFPLQgKyhHImikccv1sy', NULL, '2021-12-16 08:45:02', '2021-12-16 08:45:02', 2, '');

-- --------------------------------------------------------

--
-- Structure de la table `participers`
--

DROP TABLE IF EXISTS `participers`;
CREATE TABLE IF NOT EXISTS `participers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `activite_id` bigint UNSIGNED NOT NULL,
  `volontaire_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `participers_activite_id_foreign` (`activite_id`),
  KEY `participers_volontaire_id_foreign` (`volontaire_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` int NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_telephone_unique` (`telephone`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `prenom`, `telephone`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maikibi', 'Nafissatou', 97503545, 'Admin', 'test@gmail.com', NULL, '$2y$10$x1u5jqaD1XX67eln1VQT1esYNesbhNnQyAFPLQgKyhHImikccv1sy', NULL, '2021-11-19 19:44:41', '2021-11-19 19:44:41'),
(2, 'Biga', 'Abdoul Fataou', 98663310, 'user', 'fat@gmail.com', NULL, '$2y$10$TmzKwoXKKLmUSxxW9qmAfOyXdPKj.J/UpvdYGD/0a1y8Vq2O0ns5W', NULL, '2021-11-19 20:01:29', '2021-11-19 20:01:29'),
(3, 'ladji', 'Maikibi', 995, 'Info', 'ladji@lll.com', NULL, '$2y$10$TpknzDfJ6k5XMGeZWie7qu2PM1qexNbDc2ez1ce1yZltBdiswCFOW', NULL, '2021-12-11 18:17:22', '2021-12-11 18:17:22'),
(4, 'Chaibou Maikibi', 'Ramatou', 98847430, 'Sage Femme', 'rama@gmail.com', NULL, '$2y$10$StiOAuhhed7esRhFii8TGO9kF6tMSWMMQCZo62A34d6TfgxkrqtlG', NULL, '2022-01-05 09:56:50', '2022-01-05 09:56:50');

-- --------------------------------------------------------

--
-- Structure de la table `users_role`
--

DROP TABLE IF EXISTS `users_role`;
CREATE TABLE IF NOT EXISTS `users_role` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
