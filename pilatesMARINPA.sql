-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Set-2024 às 02:36
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pilates`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `adm_cod` int(11) NOT NULL,
  `adm_email` varchar(100) NOT NULL,
  `adm_senha` int(11) NOT NULL,
  `cli_cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`adm_cod`, `adm_email`, `adm_senha`, `cli_cod`) VALUES
(1, 'Ronaldo@gmail.com', 12, NULL),
(2, 'Tutra@gmail.com', 123, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cli_cod` int(11) NOT NULL,
  `cli_nome` varchar(70) NOT NULL,
  `cli_telefone` int(11) NOT NULL,
  `cli_cpf` int(11) NOT NULL,
  `cli_endereco` varchar(100) NOT NULL,
  `cli_patologia` varchar(30) NOT NULL,
  `cli_ultimopagamento` int(11) NOT NULL,
  `cli_data` date NOT NULL,
  `cli_totalreais` int(11) NOT NULL,
  `cli_descricao` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cli_cod`, `cli_nome`, `cli_telefone`, `cli_cpf`, `cli_endereco`, `cli_patologia`, `cli_ultimopagamento`, `cli_data`, `cli_totalreais`, `cli_descricao`) VALUES
(9, 'Mauricio', 6576786, 25456465, 'Rua da Mongolia', 'Variola do mamaco', 45, '2024-09-04', 80, 'Coceira no corpo'),
(12, 'Max', 12345, 35363, 'Rua dos Topera', 'Escoliose', 25, '2024-09-26', 70, 'Dores nos gluteos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano`
--

CREATE TABLE `plano` (
  `pla_cod` int(11) NOT NULL,
  `pla_nomeconsulta` varchar(30) NOT NULL,
  `pla_preco` int(11) NOT NULL,
  `cli_cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `plano`
--

INSERT INTO `plano` (`pla_cod`, `pla_nomeconsulta`, `pla_preco`, `cli_cod`) VALUES
(1, 'Pilates', 1000, NULL),
(2, 'Ativacao', 70, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`adm_cod`),
  ADD KEY `cli_cod` (`cli_cod`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_cod`);

--
-- Índices para tabela `plano`
--
ALTER TABLE `plano`
  ADD PRIMARY KEY (`pla_cod`),
  ADD KEY `cli_cod` (`cli_cod`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`cli_cod`) REFERENCES `cliente` (`cli_cod`);

--
-- Limitadores para a tabela `plano`
--
ALTER TABLE `plano`
  ADD CONSTRAINT `plano_ibfk_1` FOREIGN KEY (`cli_cod`) REFERENCES `cliente` (`cli_cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
