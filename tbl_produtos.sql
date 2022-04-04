-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jan-2021 às 04:13
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdsapataria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_produtos`
--

CREATE TABLE `tbl_produtos` (
  `codprod` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `preco` float NOT NULL,
  `marca` varchar(90) NOT NULL,
  `modelo` varchar(90) NOT NULL,
  `cor` varchar(90) NOT NULL,
  `dt_lancamento` varchar(20) NOT NULL,
  `qtd` int(11) NOT NULL,
  `unisex` varchar(1) DEFAULT NULL,
  `descricao` varchar(100) NOT NULL,
  `tamanho` int(11) NOT NULL,
  `prateleira` varchar(20) NOT NULL,
  `imagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_produtos`
--

INSERT INTO `tbl_produtos` (`codprod`, `nome`, `preco`, `marca`, `modelo`, `cor`, `dt_lancamento`, `qtd`, `unisex`, `descricao`, `tamanho`, `prateleira`, `imagem`) VALUES
(3, '1', 1, '1', '1', 'Preto', '10/10/2000', 1, '', '1', 1, '1', 1),
(4, 'Adidas Lite Racer', 200, 'Adidas', 'Lite Racer', 'Branco', '10/10/2020', 230, 'S', 'Tênis de corrida', 42, 'A12', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_produtos`
--
ALTER TABLE `tbl_produtos`
  ADD PRIMARY KEY (`codprod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_produtos`
--
ALTER TABLE `tbl_produtos`
  MODIFY `codprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
