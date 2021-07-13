-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jul-2020 às 23:09
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `consigadm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `operacional`
--

CREATE TABLE IF NOT EXISTS `operacional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `emissor` varchar(50) NOT NULL,
  `expedicao` varchar(50) NOT NULL,
  `nascimento` varchar(50) NOT NULL,
  `civil` enum('Solteiro(a)','Casado(a)','Divorciado(a)','Viúvo(a)') NOT NULL,
  `profissao` varchar(50) NOT NULL,
  `orgao` varchar(50) NOT NULL,
  `upag` varchar(50) NOT NULL,
  `situacao` enum('Ativo','Inativo','Aposentado') NOT NULL,
  `equipe` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fone1` varchar(50) DEFAULT NULL,
  `fone2` varchar(50) DEFAULT NULL,
  `fixo` varchar(50) DEFAULT NULL,
  `mae` varchar(50) DEFAULT NULL,
  `pai` varchar(50) DEFAULT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `naturalidade` varchar(50) DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `operacao` varchar(50) DEFAULT NULL,
  `margem` varchar(50) DEFAULT NULL,
  `parcela` varchar(50) DEFAULT NULL,
  `fator` varchar(50) DEFAULT NULL,
  `liquido` varchar(50) DEFAULT NULL,
  `banco` varchar(50) DEFAULT NULL,
  `prazo` varchar(50) DEFAULT NULL,
  `arquivorg` varchar(50) NOT NULL,
  `arquivocpf` varchar(50) NOT NULL,
  `contrato` varchar(50) NOT NULL,
  `cc` varchar(50) NOT NULL,
  `res` varchar(50) NOT NULL,
  `intencionamento` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
