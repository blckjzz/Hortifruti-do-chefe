-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jun-2016 às 16:25
-- Versão do servidor: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `base_hortifruti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_verdura`
--

CREATE TABLE IF NOT EXISTS `produtos_verdura` (
  `nome` varchar(255) DEFAULT NULL,
  `ncm` varchar(110) DEFAULT NULL,
  `valor_unidade` float DEFAULT NULL,
  `valor_bandeja` float DEFAULT NULL,
  `valor_kg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos_verdura`
--

INSERT INTO `produtos_verdura` (`nome`, `ncm`, `valor_unidade`, `valor_bandeja`, `valor_kg`) VALUES
('VERDURAS', NULL, NULL, NULL, NULL),
('Acelga', '7049000.0', 3.2, 0, 0),
('Agrião', '7099090.0', 1.3, 0, 0),
('Aipo', '7094000.0', 3.65, 0, 0),
('Alecrim', '7099090.0', 2.55, 0, 0),
('Alface lisa em falta ', '7051900.0', 0, 0, 0),
('Alface Crespa Comum', '7051900.0', 1.5, 0, 0),
('Alface crespa ORG', '7051900.0', 2.8, 0, 0),
('Alface Crespa HIDP', '7051900.0', 1.8, 0, 0),
('Alface Roxa HIDP', '7051900.0', 1.8, 0, 0),
('Alface Roxa ORG', '7051900.0', 2.5, 0, 0),
('Alface Roxa Comum', '7051900.0', 1.5, 0, 0),
('Alface americana', '7051900.0', 2.25, 0, 0),
('alface romana ', '7051900.0', 2.5, 0, 0),
('Alho', '7032090.0', 21, NULL, 210),
('Alho descascado', '7032090.0', 19.8, 0, 0),
('Alho Poró', '7039010.0', 2.58, NULL, 0),
('Aspargo verde (ml)', '7092000.0', NULL, NULL, 0),
('Brócolis Americano', '7041000.0', 5.1, 0, 0),
('Brocolis Comum', '7041000.0', 2.9, 0, 0),
('Carvalho roxo ', '7051900.0', 2.5, 0, 0),
('Carvalho verde', '7051900.0', 2.5, 0, 0),
('Cebolete', '7039090.0', 1.82, 0, 0),
('Cebolinha', '7039090.0', 1.65, 0, 0),
('Capim Limão', '7039090.0', 2.27, 0, 0),
('Coentro', '7052900.0', NULL, 0, 0),
('Cogumelo Paris', '7095100.0', NULL, 12, 11),
('Couve - Bruxelas(pct)', '7042000.0', NULL, NULL, 0),
('Couve Mineira', '7049000.0', 1.5, 0, 0),
('Couve-Flor', '7041000.0', 5, 0, 0),
('Espinafre', '7103000.0', 1.6, 0, 0),
('Estragão', NULL, 2.5, 0, 0),
('Freeze', '7051900.0', 1.6, NULL, NULL),
('Hortelã', NULL, 0.9, 0, 0),
('lolo roxo org.', '7051900.0', 2.55, 0, 0),
('Louro c/ 5und', NULL, 6, 0, 0),
('Manjericão Comum', '7099090.0', 2.35, 0, 0),
('Pimenta Jalapeño', '7096000.0', 0, 0, 38),
('Pimenta Dedo de moça', '7096000.0', 0, 0, 25),
('Pimenta de cheiro', '7096000.0', 0, 0, 25.3),
('Pimenta biquinho', '7096000.0', 0, 0, 35),
('pimenta malagueta', '7096000.0', 0, 0, 40),
('Rabanete', '7069000.0', 3.5, 0, 0),
('Rúcula selvagem ', '7099090.0', NULL, 0, 0),
('Rúcula HIDRO', '7099090.0', 1.5, 0, 0),
('Rúcula comum', '7099090.0', 1.5, 0, 0),
('Salvia', '7099090.0', 2.2, 0, 0),
('Shimeji', '7095100.0', 0, 12, 10.5),
('Shitake', '7095100.0', 0, 12, 10.5),
('Tomilho', '7099090.0', 2.35, 0, 0),
('salsa', '7099090.0', 1.8, NULL, NULL),
('salsa crespa', '7099090.0', 3.1, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
