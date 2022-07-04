-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jul-2022 às 03:34
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

CREATE DATABASE sys_web_funeraria;
USE DATABASE sys_web_funeraria;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sys_web_funeraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(128) NOT NULL,
  `nascimento` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `servico` varchar(128) NOT NULL,
  `pagamento` varchar(128) NOT NULL,
  `usuario` varchar(128) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `adm` tinyint(1) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome_completo`, `nascimento`, `cpf`, `email`, `servico`, `pagamento`, `usuario`, `senha`, `adm`, `data_cadastro`) VALUES
(2, 'admin', '0000-00-00', 'admin@admin', 'admin', 'admin', 'admin', 'admin', 'admin', 1, '2022-07-02 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
