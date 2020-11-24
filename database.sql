SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `param` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `configs` (`id`, `title`, `param`) VALUES
(1, 'site', '{\"template\": \"eterna\"}');

DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int NOT NULL,
  `publish` tinyint(1) NOT NULL COMMENT '0 = unpublish , 1 = publish',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `images` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'gambar', '0fedbe6e901564fb03d3e4ff57902ab2.png', '2020-11-19 04:37:14', '2020-11-19 04:37:14'),
(2, 'ok', '2e15c0c1c314940bfa78134763625fb7.png', '2020-11-19 04:51:26', '2020-11-19 04:51:26'),
(3, 'ubuntu', '8ff35376774a83f4ba4225ad9149b925.png', '2020-11-19 04:57:08', '2020-11-19 04:57:08'),
(4, 'test', '36361cc860f55ab668519762daf1666a.png', '2020-11-20 08:40:14', '2020-11-20 08:40:14'),
(5, 'dfa', 'http://localhost:8080/images/upload/0fedbe6e901564fb03d3e4ff57902ab2.png', '2020-11-20 08:48:40', '2020-11-20 08:48:40'),
(6, 'fsfa', 'http://localhost:8080/images/upload/36361cc860f55ab668519762daf1666a.png', '2020-11-20 08:56:03', '2020-11-20 08:56:03');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `level` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `roles` (`id`, `title`, `description`, `level`) VALUES
(1, 'root', 'super user account', 1);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'esoftgreat', 'esoftgreat@gmail.com', '$2y$10$AofCdgGn.of/0M0OpweiXO3HnCoGb4Xi6DGZNPrsuTsXE4SZQ.tmC', 1, '2020-11-19 11:29:22', NULL);


ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);


ALTER TABLE `configs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `contents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
