-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Mar-2022 às 22:55
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tgp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuciante`
--

CREATE TABLE `anuciante` (
  `AN_ID` int(10) NOT NULL,
  `AN_nome` varchar(20) DEFAULT NULL,
  `AN_RG` int(9) DEFAULT NULL,
  `AN_CPF` int(11) DEFAULT NULL,
  `AN_endereço` varchar(40) DEFAULT NULL,
  `AN_telefone` int(11) DEFAULT NULL,
  `AN_email` varchar(20) DEFAULT NULL,
  `AN_senha` varchar(20) DEFAULT NULL,
  `AN_confsenha` varchar(20) DEFAULT NULL,
  `nomeim` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `dataim` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `anuciante`
--

INSERT INTO `anuciante` (`AN_ID`, `AN_nome`, `AN_RG`, `AN_CPF`, `AN_endereço`, `AN_telefone`, `AN_email`, `AN_senha`, `AN_confsenha`, `nomeim`, `path`, `dataim`) VALUES
(3, 'abraao', 2147483647, 2147483647, 'ave maria', 31435990, 'admin@admin', '12345', '', '', '', '2022-03-15 17:22:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratante`
--

CREATE TABLE `contratante` (
  `CON_ID` int(10) NOT NULL,
  `CON_nome` varchar(20) DEFAULT NULL,
  `CON_RG` int(9) DEFAULT NULL,
  `CON_CPF` int(11) DEFAULT NULL,
  `CON_Endereço` varchar(40) DEFAULT NULL,
  `CON_telefone` int(11) DEFAULT NULL,
  `CON_email` varchar(20) DEFAULT NULL,
  `CON_senha` varchar(20) DEFAULT NULL,
  `CON_confsenha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contratante`
--

INSERT INTO `contratante` (`CON_ID`, `CON_nome`, `CON_RG`, `CON_CPF`, `CON_Endereço`, `CON_telefone`, `CON_email`, `CON_senha`, `CON_confsenha`) VALUES
(1, 'Abraão Lucas Ferreir', 2147483647, 2147483647, 'Avenida Florindo Antico', 2147483647, 'admin@admin', '12345', '12345'),
(2, 'abraao', 471730282, 452545255, 'ave maria', 31435990, 'admin@admin', '12234', '12234'),
(3, 'abraao', 1215451215, 2147483647, 'ave maria', 31435990, 'admin@admin', '12345', '12345'),
(4, 'abraao', 2147483647, 2147483647, 'ave maria', 31435990, 'admin@emp', '12345', '12345'),
(5, 'abraao', 1215451215, 2147483647, 'ave maria', 31435990, 'admin@cont', '12345', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `EM_ID` int(10) NOT NULL,
  `EM_nome` varchar(20) DEFAULT NULL,
  `EM_razao_social` varchar(20) DEFAULT NULL,
  `EM_CNPJ` int(9) DEFAULT NULL,
  `EM_Endereço` varchar(40) DEFAULT NULL,
  `EM_telefone` int(11) DEFAULT NULL,
  `EM_ramo_de_atividade` varchar(40) DEFAULT NULL,
  `EM_email` varchar(20) DEFAULT NULL,
  `EM_senha` varchar(20) DEFAULT NULL,
  `EM_confsenha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`EM_ID`, `EM_nome`, `EM_razao_social`, `EM_CNPJ`, `EM_Endereço`, `EM_telefone`, `EM_ramo_de_atividade`, `EM_email`, `EM_senha`, `EM_confsenha`) VALUES
(0, 'abraao', 'abraao', 2147483647, 'ave maria', 31435990, 'digital', 'admin@admin', '12345', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `anu_email` varchar(20) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anuciante`
--
ALTER TABLE `anuciante`
  ADD PRIMARY KEY (`AN_ID`);

--
-- Índices para tabela `contratante`
--
ALTER TABLE `contratante`
  ADD PRIMARY KEY (`CON_ID`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`EM_ID`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuciante`
--
ALTER TABLE `anuciante`
  MODIFY `AN_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `contratante`
--
ALTER TABLE `contratante`
  MODIFY `CON_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
