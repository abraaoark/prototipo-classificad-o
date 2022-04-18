-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 07:52 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadastro_auto`
--

CREATE TABLE `cadastro_auto` (
  `id_auto` int(200) NOT NULL,
  `nome_auto` varchar(100) NOT NULL,
  `RG` varchar(8) NOT NULL,
  `CPF` int(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadastro_auto`
--

INSERT INTO `cadastro_auto` (`id_auto`, `nome_auto`, `RG`, `CPF`, `endereco`, `telefone`, `email`, `senha`) VALUES
(7, 'ABRAAO LUCAS FERREIRA', '47173282', 2147483647, 'Avenida Floriano Ântico', '12991860895', 'abraaoasplund45@gmail.com', '123456'),
(11, 'ABRAAO LUCAS FERREIRA', '47173282', 2147483647, 'Avenida Floriano Ântico', '12991860895', 'abraaoasplund@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contratante_auto`
--

CREATE TABLE `contratante_auto` (
  `id_contr` int(200) NOT NULL,
  `nome_contr` varchar(200) NOT NULL,
  `RG_contr` varchar(8) NOT NULL,
  `CPF_contr` varchar(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contratante_emp`
--

CREATE TABLE `contratante_emp` (
  `id_emp` int(200) NOT NULL,
  `nomeconte` varchar(50) NOT NULL,
  `nome_emp` varchar(50) NOT NULL,
  `CNPJ` varchar(14) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `ramo_atividade` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `imagem_perfil`
--

CREATE TABLE `imagem_perfil` (
  `img_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imagem_perfil`
--

INSERT INTO `imagem_perfil` (`img_id`, `nome`, `path`, `data_upload`) VALUES
(12, 'reddit-avatar.jpg', 'foto/617ad3b702034.jpg', '2021-10-28 13:45:43'),
(13, 'reddit-avatar.jpg', 'foto/617ad41a23ac8.jpg', '2021-10-28 13:47:22'),
(14, 'reddit-avatar.jpg', 'foto/617ad4d8e242c.jpg', '2021-10-28 13:50:32'),
(15, 'reddit-avatar.jpg', 'foto/617ad5d08b801.jpg', '2021-10-28 13:54:40'),
(16, '247364222_255577916625314_5370607089667868997_n.jpg', 'foto/617ad647207ea.jpg', '2021-10-28 13:56:39'),
(17, '247364222_255577916625314_5370607089667868997_n.jpg', 'foto/617add4ad1240.jpg', '2021-10-28 14:26:34'),
(18, 'reddit-avatar.jpg', 'foto/617ade3ce7352.jpg', '2021-10-28 14:30:36'),
(19, 'reddit-avatar.jpg', 'foto/617ae8ca3c154.jpg', '2021-10-28 15:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `informação_perfil`
--

CREATE TABLE `informação_perfil` (
  `ID_perfil` int(11) NOT NULL,
  `nome_perfil` varchar(200) NOT NULL,
  `email_perfil` varchar(200) NOT NULL,
  `Tell_perfil` varchar(200) NOT NULL,
  `profissao_perfil` varchar(200) NOT NULL,
  `img_per` blob NOT NULL,
  `nome_imgper` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_auto`
--
ALTER TABLE `cadastro_auto`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indexes for table `contratante_auto`
--
ALTER TABLE `contratante_auto`
  ADD PRIMARY KEY (`id_contr`);

--
-- Indexes for table `contratante_emp`
--
ALTER TABLE `contratante_emp`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indexes for table `imagem_perfil`
--
ALTER TABLE `imagem_perfil`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `informação_perfil`
--
ALTER TABLE `informação_perfil`
  ADD PRIMARY KEY (`ID_perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_auto`
--
ALTER TABLE `cadastro_auto`
  MODIFY `id_auto` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contratante_auto`
--
ALTER TABLE `contratante_auto`
  MODIFY `id_contr` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contratante_emp`
--
ALTER TABLE `contratante_emp`
  MODIFY `id_emp` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imagem_perfil`
--
ALTER TABLE `imagem_perfil`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `informação_perfil`
--
ALTER TABLE `informação_perfil`
  MODIFY `ID_perfil` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
