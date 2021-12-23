-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2021 at 10:46 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `repositorio`
--
CREATE DATABASE IF NOT EXISTS `repositorio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `repositorio`;

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `celular` int(11) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `login`, `nome`, `senha`, `celular`) VALUES
(1, '20183012232', 'Katryni', '82889bea66ceff257060b98f4519151d', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(20) NOT NULL,
  `nome` varchar(15) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `descricao`, `nome`) VALUES
(1, 'Conteúdos matemático', 'Matemática 1'),
(2, 'Conteúdo matemático ', 'Matemática 2');

-- --------------------------------------------------------

--
-- Table structure for table `conteudo`
--

CREATE TABLE IF NOT EXISTS `conteudo` (
  `idConteudo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(65) NOT NULL,
  `dataCadastro` date NOT NULL,
  `idAdmin` int(11) NOT NULL,
  `fonte` varchar(200) DEFAULT NULL,
  `idTipo` int(11) NOT NULL,
  `idSecao` int(11) NOT NULL,
  `diretorio` varchar(250) DEFAULT NULL,
  `diretorio_img` mediumblob NOT NULL,
  `pDiscursiva` mediumtext,
  PRIMARY KEY (`idConteudo`),
  KEY `idTipo` (`idTipo`),
  KEY `idSecao` (`idSecao`),
  KEY `idAdmin_fk` (`idAdmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `conteudo`
--

INSERT INTO `conteudo` (`idConteudo`, `descricao`, `dataCadastro`, `idAdmin`, `fonte`, `idTipo`, `idSecao`, `diretorio`, `diretorio_img`, `pDiscursiva`) VALUES
(7, 'FunÃ§Ã£o QuadrÃ¡tica', '2021-12-02', 1, 'teste', 4, 2, 'https://www.youtube.com/watch?v=y4ltLH9iK8E', '', 'teste teste teste'),
(8, 'teste', '2021-12-02', 1, 'teste', 1, 3, 'https://www.canva.com/design/DAEllFdZ7Jo/pJ3tf_GMsiZTTDX0Pp3YdA/edit', '', 'teste'),
(9, 'teste', '2021-12-02', 1, 'teste', 1, 3, 'https://www.canva.com/design/DAEllFdZ7Jo/pJ3tf_GMsiZTTDX0Pp3YdA/edit', '', 'teste'),
(10, 'teste', '1212-12-12', 1, 'teste', 1, 3, 'https://www.canva.com/design/DAEllFdZ7Jo/pJ3tf_GMsiZTTDX0Pp3YdA/edit', '', 'test teste teste'),
(11, 'teste', '1212-12-12', 1, 'teste', 1, 4, 'https://meet.google.com/nvm-cqco-iuv', '', 'teste teste teste');

-- --------------------------------------------------------

--
-- Table structure for table `secao`
--

CREATE TABLE IF NOT EXISTS `secao` (
  `idSecao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`idSecao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `secao`
--

INSERT INTO `secao` (`idSecao`, `descricao`, `nome`, `idCategoria`) VALUES
(1, 'Aritmética', 'Aritmética', 1),
(2, 'Álgebra 1', 'Álgebra 1', 1),
(3, 'Geometria 1', 'Geometria 1', 1),
(4, 'Grandezas e Medidas', 'Grandezas e Medidas', 1),
(5, 'Álgebra 2', 'Ágebra 2', 2),
(6, 'Geometria 2', 'Geometria 2', 2),
(7, 'Probalidade e Estatística', 'Probalidade e Estatí', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`idCategoria`, `nome`) VALUES
(1, 'Vídeo'),
(2, 'Imagem'),
(3, 'Animação'),
(4, 'Texto');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `conteudo`
--
ALTER TABLE `conteudo`
  ADD CONSTRAINT `conteudo_ibfk_2` FOREIGN KEY (`idTipo`) REFERENCES `tipo` (`idCategoria`),
  ADD CONSTRAINT `conteudo_ibfk_3` FOREIGN KEY (`idSecao`) REFERENCES `secao` (`idSecao`),
  ADD CONSTRAINT `conteudo_ibfk_4` FOREIGN KEY (`idAdmin`) REFERENCES `administrador` (`idAdmin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
