-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jan-2021 às 04:14
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
-- Estrutura da tabela `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `email` varchar(40) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `sexo` varchar(3) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `num_pe` int(11) NOT NULL,
  `dt_nasc` varchar(20) NOT NULL,
  `profissao` varchar(100) NOT NULL,
  `uf` varchar(4) NOT NULL,
  `cidade` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id`, `nome`, `email`, `endereco`, `sexo`, `cpf`, `num_pe`, `dt_nasc`, `profissao`, `uf`, `cidade`) VALUES
(12, 'Pedro Medeiros', 'pedromedeiros@hotmail.com', 'Rua do Carmela, 999', 'H', '455667787', 42, '20/11/2001', 'Jornalista', 'SP', 'Guarulhos'),
(13, 'Caio Paiva', 'caiopaiva@gmail.com', 'Rua Rafael dos Santos', 'H', '5556633-18', 45, '19/11/2001', 'Suporte Técnico', 'SP', 'Guarulhos'),
(14, 'Kauan Brandão ', 'kauanbrandao@gmail.com', 'Avenida São Paulo', 'H', '111222333-44', 40, '17/01/2002', 'Estudante', 'SP', 'Sorocaba'),
(16, 'C', 'c@gmail.com', '1', 'H', '1', 1, '1', '1', '1', '1'),
(17, 'SOARES PAIVA', 'a@gmail.com', '1', 'H', '2', 2, '22', '2', '2', '2'),
(18, 'Henrique', 'henri@gmail.com', '1', 'H', '1', 1, '1', '1', '1', '1'),
(19, 'Brenda', 'brenda@gmail.com', '1', 'M', '1', 1, '1', '1', '1', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
