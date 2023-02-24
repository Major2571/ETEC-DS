-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Fev-2023 às 01:26
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbpw3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblab`
--

DROP TABLE IF EXISTS `tblab`;
CREATE TABLE IF NOT EXISTS `tblab` (
  `idLab` int(11) NOT NULL AUTO_INCREMENT,
  `Lab` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLab`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbreclamacao`
--

DROP TABLE IF EXISTS `tbreclamacao`;
CREATE TABLE IF NOT EXISTS `tbreclamacao` (
  `idRec` int(11) NOT NULL AUTO_INCREMENT,
  `idLab` int(11) DEFAULT NULL,
  `pc` int(11) DEFAULT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `descricao` varchar(600) DEFAULT NULL,
  `dtCriacao` date DEFAULT NULL,
  PRIMARY KEY (`idRec`),
  KEY `idLab` (`idLab`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
