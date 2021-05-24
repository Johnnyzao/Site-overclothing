-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Jan-2020 às 04:05
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `multi_login`
--
CREATE DATABASE IF NOT EXISTS `multi_login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `multi_login`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Johnnyzao', 'guigamePT@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'diogo', 'ffff@gmail.com', 'user', 'dbc4d84bfcfe2284ba11beffb853a8c4'),
(3, 'root', 'root@gmail.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'root', 'root@gmail.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'root', 'root@gmail.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'root', 'root@gmail.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
