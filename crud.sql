SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE `crud`;

USE  `crud`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `cod` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `products` (`id`, `cod`, `name`, `price`) VALUES
(1, '775237', 'Teclado', 400.00),
(4, '9374929', '', 120000.00);

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id`, `name`, `contact`, `email`, `username`, `password`) VALUES
(1, 'Claudio Nhancale', '82828282', 'clnhancale@gmail.com', 'cnhancale', '12345'),
(7, 'fsgsdz', 'cgsdzcg', 'sdzfvs', 'wdsfsd', 'xzfsdz');
