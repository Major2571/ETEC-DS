-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Nov-2022 às 01:28
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
-- Banco de dados: `dbglossario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpalavra`
--

DROP TABLE IF EXISTS `tbpalavra`;
CREATE TABLE IF NOT EXISTS `tbpalavra` (
  `idPalavra` int(11) NOT NULL AUTO_INCREMENT,
  `palavra` varchar(50) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `imagem` varchar(500) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idPalavra`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbpalavra`
--

INSERT INTO `tbpalavra` (`idPalavra`, `palavra`, `descricao`, `imagem`, `link`) VALUES
(6, 'Gabinete', 'O gabinete é o componente de hardware usado para alocar a maioria das peças de um computador. É dentro dele que são colocados componentes como CPU, placa-mãe, SSD, placa de vídeo e fonte.', 'gabinete', 'link gabinete'),
(7, 'Mouse', 'É o componente que possibilita ao usuário direcionar o cursor e clicar em locais específicos para executar uma tarefa.', 'mouse', 'link mouse'),
(8, 'teclado', 'É o elemento que permite a digitação, além de também ser usado para comandos em jogos.', 'teclado', 'link teclado'),
(9, 'Monitor', 'É o equipamento que permite a visualização das informações solicitadas pelo usuário.', 'monitor', 'link monitor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin'),
(2, 'maria', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
