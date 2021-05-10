-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Out-2016 às 13:22
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `codaluno` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `ra` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`codaluno`, `nome`, `rg`, `ra`, `endereco`, `cidade`, `email`, `telefone`) VALUES
(1, 'Antonio JosÃ© da Silva', '05874521', '258956999', 'Rua das Flores, 234', 'Monte Belo', 'antoniojs@gmail.com', '19 9999912219');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `codfuncionario` int(3) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rg` varchar(30) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`codfuncionario`, `nome`, `rg`, `cpf`, `endereco`, `cidade`, `email`, `telefone`) VALUES
(1, 'JoÃ£o Paulo da Silva', '44.888.878-9', '35356039867', 'Natal Cominato', 'SÃ£o Paulo', 'jps@terra.com.br', '11 1111-9999'),
(2, 'JoÃ£o Paulo da Silva', '525252525', '144445444454', 'Rua JoÃ£o de Barros', 'Monte Santo', 'jpsilva@terra.com', '19 366655555');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `codprof` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rg` varchar(30) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`codprof`, `nome`, `rg`, `cpf`, `endereco`, `cidade`, `email`, `telefone`) VALUES
(2, 'PEDRO RAMIRES DA SILVA AMALFI COSTA', '44.000.147-9', '333.336.654.85', 'Ursulina Alborgheti Brito, N 135, Ype 5', 'Mogi GuaÃ§u', 'pedrorsac@gmail.com', '19991318129');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `codturma` int(3) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`codturma`, `nome`) VALUES
(2, '2Âº ETIM INF 2016');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmaaluno`
--

CREATE TABLE `turmaaluno` (
  `codigo` int(10) NOT NULL,
  `codturma` int(3) NOT NULL,
  `codaluno` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turmaaluno`
--

INSERT INTO `turmaaluno` (`codigo`, `codturma`, `codaluno`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmaprofessor`
--

CREATE TABLE `turmaprofessor` (
  `codigo` int(10) NOT NULL,
  `codturma` int(3) NOT NULL,
  `codprofessor` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turmaprofessor`
--

INSERT INTO `turmaprofessor` (`codigo`, `codturma`, `codprofessor`) VALUES
(1, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`codaluno`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`codfuncionario`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`codprof`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`codturma`);

--
-- Indexes for table `turmaaluno`
--
ALTER TABLE `turmaaluno`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fkaluno` (`codaluno`),
  ADD KEY `fkturma` (`codturma`);

--
-- Indexes for table `turmaprofessor`
--
ALTER TABLE `turmaprofessor`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fkturmaprof` (`codturma`),
  ADD KEY `fkprofessor` (`codprofessor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `codaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `codfuncionario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `codprof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `codturma` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `turmaaluno`
--
ALTER TABLE `turmaaluno`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `turmaprofessor`
--
ALTER TABLE `turmaprofessor`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `turmaaluno`
--
ALTER TABLE `turmaaluno`
  ADD CONSTRAINT `fkaluno` FOREIGN KEY (`codaluno`) REFERENCES `aluno` (`codaluno`),
  ADD CONSTRAINT `fkturma` FOREIGN KEY (`codturma`) REFERENCES `turma` (`codturma`);

--
-- Limitadores para a tabela `turmaprofessor`
--
ALTER TABLE `turmaprofessor`
  ADD CONSTRAINT `fkprofessor` FOREIGN KEY (`codprofessor`) REFERENCES `professor` (`codprof`),
  ADD CONSTRAINT `fkturmaprof` FOREIGN KEY (`codturma`) REFERENCES `turma` (`codturma`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
