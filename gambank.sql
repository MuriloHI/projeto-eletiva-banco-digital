-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2024 às 05:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gambank`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientepf`
--

CREATE TABLE `clientepf` (
  `cpf` int(11) NOT NULL,
  `nomeCompleto` varchar(255) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `senha_confirmacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientepf`
--

INSERT INTO `clientepf` (`cpf`, `nomeCompleto`, `dt_nascimento`, `telefone`, `email`, `senha`, `senha_confirmacao`) VALUES
(12234532, 'Anibal Moreno', '2024-11-01', '12983129873', 'asdoiha@com.com', '$2y$10$7QC32REohO08.rLZ66bVHum29c757XbtKndz6ZpTcgGVRgPHfRlcy', '12345');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientepj`
--

CREATE TABLE `clientepj` (
  `cnpj` varchar(255) NOT NULL,
  `nomeCompleto` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `senha_confirmacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cpf` varchar(255) NOT NULL,
  `nomeCompleto` varchar(255) NOT NULL,
  `dt_nascimento` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `inss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `nomeCompleto`, `dt_nascimento`, `telefone`, `email`, `inss`) VALUES
('1234567890-', 'Jose MAria', '2024-11-08', '09109890', 'asoasjoif@aspijas.com', '2567432'),
('12343254434', 'pocahontas', '2000-02-22', '2145654', 'sfsg@ocm', '23rt43324');

-- --------------------------------------------------------

--
-- Estrutura para tabela `investimento`
--

CREATE TABLE `investimento` (
  `cpf` varchar(255) NOT NULL,
  `nomeCompleto` varchar(255) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tipo_conta` varchar(255) NOT NULL,
  `valor_investimento` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `investimento`
--

INSERT INTO `investimento` (`cpf`, `nomeCompleto`, `dt_nascimento`, `telefone`, `email`, `tipo_conta`, `valor_investimento`) VALUES
('12234532', 'Anibal Moreno', '2024-11-01', '12983129873', 'asdoiha@com.com', 'digital', 1000),
('12234532', 'Anibal Moreno', '2024-11-01', '12983129873', 'asdoiha@com.com', 'digital', 100),
('12234532', 'Anibal Moreno', '2024-11-16', '09109890', '12312@aoasfasf', 'fisica', 12314),
('1234567890-', 'Alceu Valença', '2024-05-15', '615485665', 'aspewoprw@asas.ascom', 'ouro', 1000),
('21425353', 'fdsdvsdfsd', '2024-12-06', '2345364', 'adfsd@saidoa.com', 'diamanete', 1234);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cpf` varchar(255) DEFAULT NULL,
  `cnpj` varchar(255) DEFAULT NULL,
  `nomeCompleto` varchar(255) NOT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `senha_confirmacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
