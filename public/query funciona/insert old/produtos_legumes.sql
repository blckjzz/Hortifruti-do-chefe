-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jun-2016 às 16:18
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
-- Estrutura da tabela `legumes_tabela`
--

CREATE TABLE IF NOT EXISTS `legumes_tabela` (
  `nome` varchar(255) DEFAULT NULL,
  `ncm` varchar(255) DEFAULT NULL,
  `valor_kilo` float DEFAULT NULL,
  `valor_caixa` float DEFAULT NULL,
  `valor_bandeja` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `legumes_tabela`
--

INSERT INTO `legumes_tabela` (`nome`, `ncm`, `valor_kilo`, `valor_caixa`, `valor_bandeja`) VALUES
('Abobora branca', '7099090.0', NULL, 0, 0),
('Abobora Japonesa', '7099090.0', 3.33, 0, 0),
('Abobora pescoço', '7099090.0', NULL, 0, 0),
('Abobora sergipana', '7099090.0', 3.95, 0, 0),
('Abobrinha ', '7099090.0', 3.1, 0, 0),
('Aipim ', '7149000.0', 1.87, 37, 0),
('Aipim descascado', NULL, NULL, 0, 0),
('Batata maques ', '7019000.0', 0, NULL, 0),
('Batata inglesa ', '7019000.0', 4.2, NULL, 0),
('Batata Baroa ', '7019000.0', 9.1, 0, 0),
('Batata Hasterix', '7019000.0', 5.2, NULL, 0),
('Batata Calabresa', '7019000.0', 4.5, 0, 0),
('Batata Doce ,', '7142000.0', 2.63, 0, 0),
('Berinjela', '7093000.0', 2.9, 0, 0),
('Beterraba', '7069000.0', 2.9, 0, 0),
('Broto De Feijao', '7133990.0', 7.2, 0, 0),
('Cebola Calabreza', '7031019.0', NULL, 0, 0),
('Cebola Graúda', '7031019.0', 4.85, 0, 0),
('Cebola Roxa', '7031019.0', 6.15, 0, 0),
('Cenoura .', '7061000.0', 1.92, 0, 0),
('Chuchu', '7099090.0', 2.6, 0, 0),
('Ervilha torta (bd)', '7081000.0', 0, 0, 3.1),
('Gengibre', '9101000.0', 4.28, 0, 0),
('Inhame ,', '7149000.0', 2.88, 0, 0),
('Jiló ', '7099090.0', 6.5, 0, 0),
('Maxixe', '7099090.0', 6.85, 0, 0),
('Milho (UND)', '10059090.0', 0, 0, 1.2),
('Nabo japones(comp)', '7061000.0', 0, 0, 3.5),
('Nabo Comum(red)', '7061000.0', 0, 0, 3),
('Pepino Comum', '7070000.0', 2.4, 0, 0),
('Pepino Japones ', '7070000.0', 3.9, 0, 0),
('Pimentão Amarelo', '7096000.0', 11.7, 0, 0),
('Pimentão Vermelho', '7096000.0', 11.7, 0, 0),
('Pimentão Verde', '7096000.0', 3.32, 0, 0),
('Quiabo ', '7099090.0', 6.5, 0, 0),
('Repolho Branco', '7048000.0', 2.57, 0, 0),
('Repolho Roxo', '7048000.0', 3.98, 0, 0),
('Tomate Cereja', '20021000.0', 0, 0, 2.98),
('Tomate Debora', '20021000.0', 3.17, 0, 0),
('Tomate Para Molho', '20021000.0', 0, 32.6, 0),
('Tomate salada', '20021000.0', 2.9, 0, 0),
('Tomate Italiano ', '20021000.0', 3.17, 0, NULL),
('vagem francesa', '7139090.0', 0, 0, 3.9),
('vagem manteiga', '7139090.0', 3.93, 0, 0),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
