-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Set-2020 às 00:18
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lanchonete`
--
CREATE DATABASE IF NOT EXISTS `lanchonete` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lanchonete`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acompanhamento`
--

CREATE TABLE IF NOT EXISTS `acompanhamento` (
  `id_acompanhamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`id_acompanhamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebida`
--

CREATE TABLE IF NOT EXISTS `bebida` (
  `id_bebida` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`id_bebida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `combo`
--

CREATE TABLE IF NOT EXISTS `combo` (
  `id_combo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` int(11) NOT NULL,
  `desconto` int(11) NOT NULL,
  `codigo_lanche` int(11) NOT NULL,
  `codigo_bebida` int(11) NOT NULL,
  `codigo_acompanhamento` int(11) NOT NULL,
  PRIMARY KEY (`id_combo`),
  KEY `codigo_lanche` (`codigo_lanche`),
  KEY `codigo_bebida` (`codigo_bebida`),
  KEY `codigo_acompanhamento` (`codigo_acompanhamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lanche`
--

CREATE TABLE IF NOT EXISTS `lanche` (
  `id_lanche` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`id_lanche`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `combo`
--
ALTER TABLE `combo`
  ADD CONSTRAINT `combo_ibfk_1` FOREIGN KEY (`codigo_lanche`) REFERENCES `lanche` (`id_lanche`) ON UPDATE CASCADE,
  ADD CONSTRAINT `combo_ibfk_2` FOREIGN KEY (`codigo_bebida`) REFERENCES `bebida` (`id_bebida`) ON UPDATE CASCADE,
  ADD CONSTRAINT `combo_ibfk_3` FOREIGN KEY (`codigo_acompanhamento`) REFERENCES `acompanhamento` (`id_acompanhamento`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
