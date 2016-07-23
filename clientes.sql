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
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logradouro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ponto_referencia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_tipo_estabelecimento` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `clientes_fk_tipo_estabelecimento_foreign` (`fk_tipo_estabelecimento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `cnpj`, `telefone`, `logradouro`, `numero`, `bairro`, `ponto_referencia`, `fk_tipo_estabelecimento`, `created_at`, `updated_at`) VALUES
(1, 'Restaurante do Seu Zé', '99.999.999/9999-99', '(22) 22222-222', 'RUA TONELERO ', '1799', '', 'próximo a birosca do seu joão', 1, '2016-06-07 19:49:29', '2016-06-07 19:49:29');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_fk_tipo_estabelecimento_foreign` FOREIGN KEY (`fk_tipo_estabelecimento`) REFERENCES `tipo_estabelecimento` (`id_tipo_estabelecimento`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
