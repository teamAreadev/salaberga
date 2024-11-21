-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Dez-2023 às 14:36
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
-- Banco de dados: `selecao_2023`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `id_candidato` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `id_curso1_fk` int(11) DEFAULT NULL,
  `id_curso2_fk` int(11) DEFAULT NULL,
  `data_nascimento` varchar(10) DEFAULT NULL,
  `bairro` char(1) DEFAULT NULL,
  `situacao` int(1) NOT NULL,
  `classificado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome_curso`) VALUES
(1, 'Enfermagem'),
(2, 'Informatica'),
(3, 'Meio Ambiente'),
(4, 'Edificacoes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `l_portuguesa` decimal(6,4) DEFAULT NULL,
  `arte` decimal(6,4) DEFAULT NULL,
  `educacao_fisica` decimal(6,4) DEFAULT NULL,
  `l_inglesa` decimal(6,4) DEFAULT NULL,
  `matematica` decimal(6,4) DEFAULT NULL,
  `ciencias` decimal(6,4) DEFAULT NULL,
  `geografia` decimal(6,4) DEFAULT NULL,
  `historia` decimal(6,4) DEFAULT NULL,
  `religiao` decimal(6,4) DEFAULT NULL,
  `candidato_id_candidato` int(11) NOT NULL,
  `publica` int(1) DEFAULT NULL,
  `media` decimal(6,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(120) NOT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email`, `senha`, `status`) VALUES
('psc', 'presidentelula', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id_candidato`),
  ADD UNIQUE KEY `id_candidato_UNIQUE` (`id_candidato`),
  ADD KEY `id_curso1_fk` (`id_curso1_fk`),
  ADD KEY `id_curso2_fk` (`id_curso2_fk`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices para tabela `nota`
--
ALTER TABLE `nota`
  ADD KEY `fk_nota_candidato1_idx` (`candidato_id_candidato`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id_candidato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `candidato_ibfk_1` FOREIGN KEY (`id_curso1_fk`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `candidato_ibfk_2` FOREIGN KEY (`id_curso2_fk`) REFERENCES `curso` (`id_curso`);

--
-- Limitadores para a tabela `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_nota_candidato1` FOREIGN KEY (`candidato_id_candidato`) REFERENCES `candidato` (`id_candidato`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
