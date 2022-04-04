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
-- Estrutura da tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `nomeusuario` varchar(90) NOT NULL,
  `perfil` varchar(30) NOT NULL,
  `dt_nascimento` varchar(20) NOT NULL,
  `cpf` varchar(60) NOT NULL,
  `salario` float NOT NULL,
  `setor` varchar(60) NOT NULL,
  `cargo` varchar(90) NOT NULL,
  `dt_admissao` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `usuario`, `senha`, `nomeusuario`, `perfil`, `dt_nascimento`, `cpf`, `salario`, `setor`, `cargo`, `dt_admissao`) VALUES
(1, 'caio', '202cb962ac59075b964b07152d234b70', 'Caio Soares Paiva', 'adm', '19/11/2001', '1112223345', 1000, 'TI', 'Suporte', '01/09/2020'),
(3, 'professor', '123', 'Professor Anselmo', 'adm', 'XX/XX/XXXX', '33344455566', 10, 'Faculdade', 'Professor', 'XX/XX/XXXX'),
(5, 'henri', '1234', 'Henrique Costa', 'user', '10/10/2020', '11122233344', 1000, 'Vendas', 'Gerente', '23/11/2019');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
