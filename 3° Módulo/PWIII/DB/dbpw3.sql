-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Mar-2023 às 01:08
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
-- Estrutura da tabela `tbcontato`
--

DROP TABLE IF EXISTS `tbcontato`;
CREATE TABLE IF NOT EXISTS `tbcontato` (
  `idContato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) DEFAULT NULL,
  `telefone` bigint(15) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcontato`
--

INSERT INTO `tbcontato` (`idContato`, `nome`, `telefone`, `email`) VALUES
(1, 'Carol', 5511923456987, 'admCarol@email.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblaboratorio`
--

DROP TABLE IF EXISTS `tblaboratorio`;
CREATE TABLE IF NOT EXISTS `tblaboratorio` (
  `idLab` int(11) NOT NULL AUTO_INCREMENT,
  `Laboratorio` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idLab`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblaboratorio`
--

INSERT INTO `tblaboratorio` (`idLab`, `Laboratorio`) VALUES
(1, 'Lab01'),
(2, 'Lab02'),
(3, 'Lab03'),
(4, 'Lab04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbquemsomos`
--

DROP TABLE IF EXISTS `tbquemsomos`;
CREATE TABLE IF NOT EXISTS `tbquemsomos` (
  `idQuemSomos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(300) DEFAULT NULL,
  `sobrenome` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`idQuemSomos`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbquemsomos`
--

INSERT INTO `tbquemsomos` (`idQuemSomos`, `nome`, `sobrenome`) VALUES
(1, 'Carol', 'Moura');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbreclamacao`
--

INSERT INTO `tbreclamacao` (`idRec`, `idLab`, `pc`, `titulo`, `descricao`, `dtCriacao`) VALUES
(1, 4, 2, 'Pc não Liga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porttitor vulputate ullamcorper.', '2022-11-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
