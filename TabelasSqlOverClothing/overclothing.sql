-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Jan-2020 às 04:06
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `overclothing`
--
CREATE DATABASE IF NOT EXISTS `overclothing` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `overclothing`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_image`, `product_category`) VALUES
(0, 'DogWifHat4', 100, 'product_image/13bf4e9065d399f1729d3844b03f394778989734_1438785896244995_1498888157002957841_n.jpg', 'Roupa_Mulher'),
(1, 'DogWifHat1', 69, 'product_image/b288e50714460c9905bc48af478761f778760916_501338023837210_5292737767933440406_n.jpg', 'Roupa_Crianca');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
