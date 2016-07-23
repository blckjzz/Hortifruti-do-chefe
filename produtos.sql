-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jun-2016 às 16:43
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
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ncm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor_unidade` double NOT NULL,
  `valor_kg` double NOT NULL,
  `valor_caixa` double NOT NULL,
  `valor_bandeja` double NOT NULL,
  `valor_duzia` double NOT NULL,
  `fk_tipo_produto` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `produtos_fk_tipo_produto_foreign` (`fk_tipo_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=192 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `ncm`, `valor_unidade`, `valor_kg`, `valor_caixa`, `valor_bandeja`, `valor_duzia`, `fk_tipo_produto`, `created_at`, `updated_at`) VALUES
(2, 'Abacate', '8044000.000000', 3.8, 0, 0, 0, 0, 1, NULL, NULL),
(3, 'Abacaxi (und)', '8043000.000000', 5, 0, 0, 0, 0, 1, NULL, NULL),
(4, 'Acerola', '', 0, 0, 0, 0, 0, 1, NULL, NULL),
(5, 'Ameixa rubi', '8094000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(6, 'Amora (BD)', '8102000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(7, 'Banana Dágua', '8030000.000000', 3.5, 0, 0, 0, 0, 1, NULL, NULL),
(8, 'Banana Ouro', '8030000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(9, 'Banana Prata ', '8030000.000000', 3.5, 0, 0, 0, 0, 1, NULL, NULL),
(10, 'Banana da Terra', '8030000.000000', 4.2, 0, 0, 0, 0, 1, NULL, NULL),
(11, 'Blueberry', '', 0, 0, 0, 0, 0, 1, NULL, NULL),
(12, 'Caju', '8109000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(13, 'Caqui ', '8109000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(14, 'Carambola ', '8109000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(15, 'Cereja', '8092000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(16, 'Coco Seco', '8011110.000000', 5.4, 0, 0, 0, 0, 1, NULL, NULL),
(17, 'Coco Verde', '8011900.000000', 3, 0, 0, 0, 0, 1, NULL, NULL),
(18, 'Figo (bandeja)', '8042010.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(19, 'Fruta de Conde und', '8109000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(20, 'framboesa', '8112000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(21, 'Goiaba Vermelha', '8045010.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(22, 'Jaboticaba', '', 0, 0, 0, 0, 0, 1, NULL, NULL),
(23, 'Kiwi', '8109000.000000', 7.5, 0, 0, 0, 0, 1, NULL, NULL),
(24, 'Laranja ', '8051000.000000', 1.5, 0, 0, 0, 0, 1, NULL, NULL),
(25, 'Laranja saco 20kg', '8051000.000000', 0, 0, 0, 27, 0, 1, NULL, NULL),
(26, 'Limao galego', '8055000.000000', 3.9, 0, 0, 0, 0, 1, NULL, NULL),
(27, 'Lima da Percia', '8055000.000000', 5.85, 0, 0, 0, 0, 1, NULL, NULL),
(28, 'Limao 20kg', '8055000.000000', 4.6, 0, 0, 0, 0, 1, NULL, NULL),
(29, 'Limão Siciliano ', '8055000.000000', 6.69, 0, 0, 0, 0, 1, NULL, NULL),
(30, 'Maça verde', '8081000.000000', 8.65, 0, 0, 0, 0, 1, NULL, NULL),
(31, 'Maça fughi', '8081000.000000', 6.2, 0, 0, 0, 0, 1, NULL, NULL),
(32, 'Mamão Formosa(und)', '8072000.000000', 8, 0, 0, 0, 0, 1, NULL, NULL),
(33, 'Mamão Papaya(und)', '8072000.000000', 4.5, 0, 0, 0, 0, 1, NULL, NULL),
(34, 'Maracuja', '8093020.000000', 6.5, 0, 0, 0, 0, 1, NULL, NULL),
(35, 'Melancia G', '8071100.000000', 1.8, 0, 0, 0, 0, 1, NULL, NULL),
(36, 'Malancia und', '8071100.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(37, 'Manga Palmer/Tommy', '8045020.000000', 3, 0, 0, 0, 0, 1, NULL, NULL),
(38, 'Melao amarelo (und)', '8071900.000000', 5.68, 0, 0, 0, 0, 1, NULL, NULL),
(39, 'Morango (bandeja)', '8101000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(40, 'Pêra import.', '8083000.000000', 10, 0, 0, 0, 0, 1, NULL, NULL),
(41, 'Tangerina importado', '8052000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(42, 'Tangerina Pokan', '8052000.000000', 2.48, 0, 0, 0, 0, 1, NULL, NULL),
(43, 'Uva s/ semente', '8061000.000000', 0, 0, 0, 0, 0, 1, NULL, NULL),
(44, 'ovos braco Tipo C', '4070090.0', 0, 0, 0, 0, 0, 2, NULL, NULL),
(45, 'Ovo Branco Tipo A', '4070090.0', 0, 0, 0, 0, 3.71, 2, NULL, NULL),
(46, 'Ovo  caipira ', '4070090.0', 0, 0, 0, 0, 4.9, 2, NULL, NULL),
(47, 'Ovo de Codorna', '4070019.0', 0, 0, 0, 0, 3.25, 2, NULL, NULL),
(48, 'Ovo de Codorna/cons', '4070019.0', 0, 0, 0, 0, 0, 2, NULL, NULL),
(49, 'Abobora branca', '7099090.0', 0, 0, 0, 0, 0, 4, NULL, NULL),
(50, 'Abobora Japonesa', '7099090.0', 0, 3.33, 0, 0, 0, 4, NULL, NULL),
(51, 'Abobora pescoÃ§o', '7099090.0', 0, 0, 0, 0, 0, 4, NULL, NULL),
(52, 'Abobora sergipana', '7099090.0', 0, 3.95, 0, 0, 0, 4, NULL, NULL),
(53, 'Abobrinha ', '7099090.0', 0, 3.1, 0, 0, 0, 4, NULL, NULL),
(54, 'Aipim ', '7149000.0', 0, 1.87, 37, 0, 0, 4, NULL, NULL),
(55, 'Aipim descascado', '', 0, 0, 0, 0, 0, 4, NULL, NULL),
(56, 'Batata maques ', '7019000.0', 0, 0, 0, 0, 0, 4, NULL, NULL),
(57, 'Batata inglesa ', '7019000.0', 0, 4.2, 0, 0, 0, 4, NULL, NULL),
(58, 'Batata Baroa ', '7019000.0', 0, 9.1, 0, 0, 0, 4, NULL, NULL),
(59, 'Batata Hasterix', '7019000.0', 0, 5.2, 0, 0, 0, 4, NULL, NULL),
(60, 'Batata Calabresa', '7019000.0', 0, 4.5, 0, 0, 0, 4, NULL, NULL),
(61, 'Batata Doce ,', '7142000.0', 0, 2.63, 0, 0, 0, 4, NULL, NULL),
(62, 'Berinjela', '7093000.0', 0, 2.9, 0, 0, 0, 4, NULL, NULL),
(63, 'Beterraba', '7069000.0', 0, 2.9, 0, 0, 0, 4, NULL, NULL),
(64, 'Broto De Feijao', '7133990.0', 0, 7.2, 0, 0, 0, 4, NULL, NULL),
(65, 'Cebola Calabreza', '7031019.0', 0, 0, 0, 0, 0, 4, NULL, NULL),
(66, 'Cebola GraÃºda', '7031019.0', 0, 4.85, 0, 0, 0, 4, NULL, NULL),
(67, 'Cebola Roxa', '7031019.0', 0, 6.15, 0, 0, 0, 4, NULL, NULL),
(68, 'Cenoura .', '7061000.0', 0, 1.92, 0, 0, 0, 4, NULL, NULL),
(69, 'Chuchu', '7099090.0', 0, 2.6, 0, 0, 0, 4, NULL, NULL),
(70, 'Ervilha torta (bd)', '7081000.0', 0, 0, 0, 3.1, 0, 4, NULL, NULL),
(71, 'Gengibre', '9101000.0', 0, 4.28, 0, 0, 0, 4, NULL, NULL),
(72, 'Inhame', '7149000.0', 0, 2.88, 0, 0, 0, 4, NULL, NULL),
(73, 'Jiló', '7099090.0', 0, 6.5, 0, 0, 0, 4, NULL, NULL),
(74, 'Maxixe', '7099090.0', 0, 6.85, 0, 0, 0, 4, NULL, NULL),
(75, 'Milho (UND)', '10059090.0', 0, 0, 0, 1.2, 0, 4, NULL, NULL),
(76, 'Nabo japones(comp)', '7061000.0', 0, 0, 0, 3.5, 0, 4, NULL, NULL),
(77, 'Nabo Comum(red)', '7061000.0', 0, 0, 0, 3, 0, 4, NULL, NULL),
(78, 'Pepino Comum', '7070000.0', 0, 2.4, 0, 0, 0, 4, NULL, NULL),
(79, 'Pepino Japones ', '7070000.0', 0, 3.9, 0, 0, 0, 4, NULL, NULL),
(80, 'Pimentão Amarelo', '7096000.0', 0, 11.7, 0, 0, 0, 4, NULL, NULL),
(81, 'Pimentão Vermelho', '7096000.0', 0, 11.7, 0, 0, 0, 4, NULL, NULL),
(82, 'Pimentão Verde', '7096000.0', 0, 3.32, 0, 0, 0, 4, NULL, NULL),
(83, 'Quiabo ', '7099090.0', 0, 6.5, 0, 0, 0, 4, NULL, NULL),
(84, 'Repolho Branco', '7048000.0', 0, 2.57, 0, 0, 0, 4, NULL, NULL),
(85, 'Repolho Roxo', '7048000.0', 0, 3.98, 0, 0, 0, 4, NULL, NULL),
(86, 'Tomate Cereja', '20021000.0', 0, 0, 0, 2.98, 0, 4, NULL, NULL),
(87, 'Tomate Debora', '20021000.0', 0, 3.17, 0, 0, 0, 4, NULL, NULL),
(88, 'Tomate Para Molho', '20021000.0', 0, 0, 32.6, 0, 0, 4, NULL, NULL),
(89, 'Tomate Para Molho', '20021000.0', 0, 0, 32.6, 0, 0, 4, NULL, NULL),
(90, 'Tomate salada', '20021000.0', 0, 2.9, 0, 0, 0, 4, NULL, NULL),
(91, 'Tomate Italiano ', '20021000.0', 0, 3.17, 0, 0, 0, 4, NULL, NULL),
(92, 'vagem manteiga', '7139090.0', 0, 3.93, 0, 0, 0, 4, NULL, NULL),
(93, 'vagem francesa', '7139090.0', 0, 0, 0, 3.9, 0, 4, NULL, NULL),
(94, 'Tomate italiano', '20021000.0', 0, 3.17, 0, 0, 0, 4, NULL, NULL),
(139, 'Acelga', '7049000.0', 3.2, 0, 0, 0, 0, 3, NULL, NULL),
(140, 'AgriÃ£o', '7099090.0', 1.3, 0, 0, 0, 0, 3, NULL, NULL),
(141, 'Aipo', '7094000.0', 3.65, 0, 0, 0, 0, 3, NULL, NULL),
(142, 'Alecrim', '7099090.0', 2.55, 0, 0, 0, 0, 3, NULL, NULL),
(143, 'Alface lisa em falta ', '7051900.0', 0, 0, 0, 0, 0, 3, NULL, NULL),
(144, 'Alface Crespa Comum', '7051900.0', 1.5, 0, 0, 0, 0, 3, NULL, NULL),
(145, 'Alface crespa ORG', '7051900.0', 2.8, 0, 0, 0, 0, 3, NULL, NULL),
(146, 'Alface Crespa HIDP', '7051900.0', 1.8, 0, 0, 0, 0, 3, NULL, NULL),
(147, 'Alface Roxa HIDP', '7051900.0', 1.8, 0, 0, 0, 0, 3, NULL, NULL),
(148, 'Alface Roxa ORG', '7051900.0', 2.5, 0, 0, 0, 0, 3, NULL, NULL),
(149, 'Alface Roxa Comum', '7051900.0', 1.5, 0, 0, 0, 0, 3, NULL, NULL),
(150, 'Alface americana', '7051900.0', 2.25, 0, 0, 0, 0, 3, NULL, NULL),
(151, 'alface romana ', '7051900.0', 2.5, 0, 0, 0, 0, 3, NULL, NULL),
(152, 'Alho', '7032090.0', 21, 210, 0, 0, 0, 3, NULL, NULL),
(153, 'Alho descascado', '7032090.0', 19.8, 0, 0, 0, 0, 3, NULL, NULL),
(154, 'Alho PorÃ³', '7039010.0', 2.58, 0, 0, 0, 0, 3, NULL, NULL),
(155, 'Aspargo verde (ml)', '7092000.0', 0, 0, 0, 0, 0, 3, NULL, NULL),
(156, 'Brócolis Americano', '7041000.0', 5.1, 0, 0, 0, 0, 3, NULL, NULL),
(157, 'Brocolis Comum', '7041000.0', 2.9, 0, 0, 0, 0, 3, NULL, NULL),
(158, 'Carvalho roxo ', '7051900.0', 2.5, 0, 0, 0, 0, 3, NULL, NULL),
(159, 'Carvalho verde', '7051900.0', 2.5, 0, 0, 0, 0, 3, NULL, NULL),
(160, 'Cebolete', '7039090.0', 1.82, 0, 0, 0, 0, 3, NULL, NULL),
(161, 'Cebolinha', '7039090.0', 1.65, 0, 0, 0, 0, 3, NULL, NULL),
(162, 'Capim LimÃ£o', '7039090.0', 2.27, 0, 0, 0, 0, 3, NULL, NULL),
(163, 'Coentro', '7052900.0', 0, 0, 0, 0, 0, 3, NULL, NULL),
(164, 'Cogumelo Paris', '7095100.0', 0, 11, 0, 12, 0, 3, NULL, NULL),
(165, 'Couve - Bruxelas(pct)', '7042000.0', 0, 0, 0, 0, 0, 3, NULL, NULL),
(166, 'Couve Mineira', '7049000.0', 1.5, 0, 0, 0, 0, 3, NULL, NULL),
(167, 'Couve-Flor', '7041000.0', 5, 0, 0, 0, 0, 3, NULL, NULL),
(168, 'Espinafre', '7103000.0', 1.6, 0, 0, 0, 0, 3, NULL, NULL),
(169, 'EstragÃ£o', '0', 2.5, 0, 0, 0, 0, 3, NULL, NULL),
(170, 'Freeze', '7051900.0', 1.6, 0, 0, 0, 0, 3, NULL, NULL),
(171, 'HortelÃ£', '0', 0.9, 0, 0, 0, 0, 3, NULL, NULL),
(172, 'lolo roxo org.', '7051900.0', 2.55, 0, 0, 0, 0, 3, NULL, NULL),
(173, 'Louro c/ 5und', '0', 6, 0, 0, 0, 0, 3, NULL, NULL),
(174, 'ManjericÃ£o Comum', '7099090.0', 2.35, 0, 0, 0, 0, 3, NULL, NULL),
(175, 'Pimenta JalapeÃ±o', '7096000.0', 0, 38, 0, 0, 0, 3, NULL, NULL),
(176, 'Pimenta Dedo de moÃ§a', '7096000.0', 0, 25, 0, 0, 0, 3, NULL, NULL),
(177, 'Pimenta de cheiro', '7096000.0', 0, 25.3, 0, 0, 0, 3, NULL, NULL),
(178, 'Pimenta biquinho', '7096000.0', 0, 35, 0, 0, 0, 3, NULL, NULL),
(179, 'pimenta malagueta', '7096000.0', 0, 40, 0, 0, 0, 3, NULL, NULL),
(180, 'Rabanete', '7069000.0', 3.5, 0, 0, 0, 0, 3, NULL, NULL),
(181, 'RÃºcula selvagem ', '7099090.0', 0, 0, 0, 0, 0, 3, NULL, NULL),
(182, 'RÃºcula HIDRO', '7099090.0', 1.5, 0, 0, 0, 0, 3, NULL, NULL),
(183, 'RÃºcula comum', '7099090.0', 1.5, 0, 0, 0, 0, 3, NULL, NULL),
(184, 'Salvia', '7099090.0', 2.2, 0, 0, 0, 0, 3, NULL, NULL),
(185, 'Shimeji', '7095100.0', 0, 10.5, 0, 12, 0, 3, NULL, NULL),
(186, 'Shitake', '7095100.0', 0, 10.5, 0, 12, 0, 3, NULL, NULL),
(187, 'Tomilho', '7099090.0', 2.35, 0, 0, 0, 0, 3, NULL, NULL),
(188, 'salsa', '7099090.0', 1.8, 0, 0, 0, 0, 3, NULL, NULL),
(189, 'salsa crespa', '7099090.0', 3.1, 0, 0, 0, 0, 3, NULL, NULL),
(190, 'teste produto fruta', '9999999.999999', 99, 99.999, 999.999, 999.999, 9.9, 1, '2016-06-06 20:14:59', '2016-06-06 20:14:59'),
(191, 'Loko abreu', '9999999.999999', 4, 99, 0, 0, 4, 1, '2016-06-08 19:58:55', '2016-06-08 19:59:29');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_fk_tipo_produto_foreign` FOREIGN KEY (`fk_tipo_produto`) REFERENCES `tipo_produto` (`id_tipo_produto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
