-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Nov-2022 às 02:40
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
  `endereco` varchar(600) NOT NULL,
  `cep` bigint(8) NOT NULL,
  `bairro` varchar(300) NOT NULL,
  `numero` bigint(10) NOT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `nomeResp` varchar(300) NOT NULL,
  `cpfResp` bigint(11) NOT NULL,
  `dataNascResp` date DEFAULT NULL,
  PRIMARY KEY (`idAluno`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbalunos`
--

INSERT INTO `tbalunos` (`idAluno`, `matricula`, `aluno`, `dataNasc`, `cpf`, `curso`, `modulo`, `turno`, `endereco`, `cep`, `bairro`, `numero`, `complemento`, `nomeResp`, `cpfResp`, `dataNascResp`) VALUES
(30, 99909049015, 'Laura Costa Sousa', '2010-06-08', 42625614021, 'Finanças', '1', 'Manhã', 'Rua Profeta', 25215474, 'Parque Império', 687, '', 'Mário Yuri Moraes', 7400870106, '1993-10-09'),
(29, 62596823012, 'Igor Cunha Carvalho', '2010-02-04', 36788586004, 'Desenvolvimento de Sistemas', '1', 'Noite', 'Rua Lindicelma', 76901376, 'Bosque dos', 755, '', 'Carolina Fernanda Heloise', 34681835188, '1983-07-04'),
(28, 41179461029, 'Guilherme Castro Santos', '2010-04-26', 10317014005, 'Finanças', '1', 'Manhã', 'Rua Paineiras', 27278150, 'Vale Verde', 710, '', 'Elisa Sabrina Eloá', 29472471323, '1986-02-04'),
(27, 10332597059, 'Emily Carvalho Almeida', '2010-08-10', 97346806093, 'Desenvolvimento de Sistemas', '2', 'Tarde', '5ª Travessa', 41211327, 'Arenoso', 117, '', 'Nina Simone Sebastiana', 58211041570, '1993-10-11'),
(26, 41369763050, 'César Raul José Drumond', '2010-12-12', 44420638001, 'Finanças', '3', 'Tarde', 'Rua Quatro', 29131012, 'Jucu', 235, '', 'Simone Márcia Fernandes', 57227749878, '1993-10-21'),
(25, 19852425080, 'Carolina Rodrigues Azevedo', '2010-07-14', 36929433004, 'Desenvolvimento de Sistemas', '2', 'Tarde', 'Rua Jorge', 57052611, 'Gruta de', 476, '', 'Ricardo Ruan Dias', 77607519319, '1993-10-10'),
(23, 87722500030, 'Amanda Azevedo Fernandes', '2010-09-11', 19661542082, 'Administração', '3', 'Tarde', 'Rua Imigrantes', 76961826, 'Jardim Bandeirantes', 146, '', 'Vicente Victor Erick', 23243468345, '1993-10-12'),
(24, 71041973039, 'Bruna Sousa Melo', '2010-01-03', 14839087040, 'Nutrição', '2', 'Noite', 'Travessa Guapeva', 83820010, 'Eucaliptos', 596, '', 'Carlos Eduardo Igor', 65854776936, '1993-10-13'),
(31, 37467741014, 'Luan Castro Oliveira', '2010-03-15', 14057016090, 'Administração', '3', 'Tarde', 'Rua Cantora', 64207090, 'Frei Higino', 133, '', 'César Raul José', 71538429349, '1985-03-04'),
(32, 69241004002, 'Tiago Melo Gomes', '2010-05-07', 22185611070, 'Nutrição', '2', 'Manhã', 'Rua Jurivaldo', 79081738, 'Jardim das', 251, '', 'Calebe Vicente Bruno', 10324913370, '1985-03-05'),
(33, 12345678910, 'Tomás Carvalho Barros', '2010-12-04', 78945612308, 'Finanças', '1', 'Noite', 'Rua Oceano', 58037675, 'Jardim Oceania', 124, '', 'Rita Mirella Cavalcanti', 29726021880, '1993-10-13'),
(34, 42212589000, 'César Raul José', '2010-12-05', 74647414043, 'Administração', '1', 'Manhã', 'Rua Doutor', 63010105, 'Centro', 604, '', 'Jorge Danilo Ricardo', 70247981141, '1993-10-14'),
(35, 44420638001, 'Vicente Victor Erick', '2010-12-06', 99909049015, 'Administração', '2', 'Noite', 'Rua Santa', 77804090, 'Setor Central', 570, '', 'Diogo Leandro Almeida', 64892783080, '1993-10-15'),
(36, 47409687037, 'Jorge Danilo Ricardo', '2010-12-07', 19852425080, 'Desenvolvimento de Sistemas', '3', 'Manhã', 'Rua Abaeté', 76876522, 'Jardim Jorge', 894, '', 'Caio Manuel Paulo', 582750962, '1993-10-16'),
(37, 37868151005, 'Rita Mirella Cavalcanti', '2010-12-08', 10332597059, 'Desenvolvimento de Sistemas', '3', 'Manhã', 'Rua Doutor', 64003635, 'Aeroporto', 868, '', 'Eduardo Nathan Lopes', 65687617299, '1993-10-17'),
(38, 58230216070, 'José Carlos Eduardo', '2010-12-09', 87722500030, 'Finanças', '2', 'Noite', 'Rua Benjamin', 69900064, 'Centro', 816, '', 'José Carlos Eduardo', 84526269832, '1993-10-18'),
(39, 83728921050, 'Nicolas Yago Victor', '2010-12-10', 12345678910, 'Finanças', '3', 'Manhã', 'Quadra G4', 64205636, 'João XXIII', 907, '', 'Nicolas Yago Victor', 40671356704, '1993-10-19'),
(40, 66367329030, 'Renato Tiago Brito', '2010-12-11', 42212589000, 'Finanças', '2', 'Noite', 'Rua Jair', 78118247, 'Cristo Rei', 447, '', 'Renato Tiago Brito', 25503303407, '1993-10-20'),
(41, 79870717063, 'Simone Márcia Fernandes', '2010-12-13', 47409687037, 'Nutrição', '1', 'Tarde', 'Rua Marquês', 55004360, 'Nossa Senhora', 200, '', 'Stella Sandra de', 57032800440, '1993-10-22'),
(42, 79493367061, 'Carlos Eduardo Igor', '2010-12-14', 33655446071, 'Nutrição', '3', 'Tarde', 'Quadra 404', 77006428, 'Plano Diretor', 721, '', 'Lívia Alessandra Melissa', 49159218088, '1993-10-23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
