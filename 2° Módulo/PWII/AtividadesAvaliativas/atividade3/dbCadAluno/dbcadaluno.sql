-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Nov-2022 às 19:44
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
-- Banco de dados: `dbcadaluno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbalunos`
--

DROP TABLE IF EXISTS `tbalunos`;
CREATE TABLE IF NOT EXISTS `tbalunos` (
  `idAluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` bigint(11) DEFAULT NULL,
  `aluno` varchar(300) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `cpf` bigint(11) DEFAULT NULL,
  `curso` varchar(200) DEFAULT NULL,
  `modulo` varchar(100) DEFAULT NULL,
  `turno` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idAluno`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbalunos`
--

INSERT INTO `tbalunos` (`idAluno`, `matricula`, `aluno`, `dataNasc`, `cpf`, `curso`, `modulo`, `turno`) VALUES
(1, 71041973039, 'Bruna Sousa Melo', '2010-01-03', 14839087040, 'Nutrição', '2', 'Noite'),
(2, 62596823012, 'Igor Cunha Carvalho', '2010-02-04', 36788586004, 'Finanças', '1', 'Noite'),
(3, 37467741014, 'Luan Castro Oliveira', '2010-03-15', 14057016090, 'Administração', '3', 'Noite'),
(4, 41179461029, 'Guilherme Castro Santos', '2010-04-26', 10317014005, 'Marketing', '1', 'Manhã'),
(5, 69241004002, 'Tiago Melo Gomes', '2010-05-07', 22185611070, 'Nutrição', '2', 'Manhã'),
(6, 99909049015, 'Laura Costa Sousa', '2010-06-08', 42625614021, 'Finanças', '1', 'Manhã'),
(7, 19852425080, 'Carolina Rodrigues Azevedo', '2010-07-14', 36929433004, 'Desenvolvimento de Sistemas', '2', 'Tarde'),
(8, 10332597059, 'Emily Carvalho Almeida', '2010-08-10', 97346806093, 'Desenvolvimento de Sistemas', '2', 'Tarde'),
(9, 87722500030, 'Amanda Azevedo Fernandes', '2010-09-11', 19661542082, 'Administração', '3', 'Tarde'),
(10, 12345678910, 'Tomás Carvalho Barros', '2010-12-04', 78945612308, 'Marketing', '1', 'Noite');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
