-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Fev-2019 às 12:40
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeclin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `idAgenda` int(11) NOT NULL,
  `data` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `horario_inicial` time(6) NOT NULL,
  `horario_final` time(6) NOT NULL,
  `idMedico` int(11) NOT NULL,
  `idSecretario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_medico`
--

CREATE TABLE `agenda_medico` (
  `id_medico` int(11) NOT NULL,
  `data` date NOT NULL,
  `horario_inicio` time DEFAULT NULL,
  `almoco_inicio` time NOT NULL,
  `almoco_fim` time NOT NULL,
  `horario_fim` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda_medico`
--

INSERT INTO `agenda_medico` (`id_medico`, `data`, `horario_inicio`, `almoco_inicio`, `almoco_fim`, `horario_fim`) VALUES
(1, '0000-00-00', '08:00:00', '12:00:00', '13:00:00', '19:00:00'),
(1, '0000-00-00', '08:00:00', '12:00:00', '13:00:00', '18:00:00'),
(1, '0000-00-00', '08:00:00', '12:00:00', '13:00:00', '18:00:00'),
(1, '0000-00-00', '20:00:00', '20:00:00', '20:00:00', '20:00:00'),
(1, '0000-00-00', '20:00:00', '20:00:00', '20:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `numeroProfissional` varchar(20) NOT NULL,
  `dataNascimento` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `especialidade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`idMedico`, `nome`, `numeroProfissional`, `dataNascimento`, `especialidade`) VALUES
(1, 'Daniel', '31241452', '2000-01-31 02:00:00.000000', 'Psicologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `nomeResponsavel` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `dataNascimento` date NOT NULL,
  `estadoCivil` varchar(12) NOT NULL,
  `indicacao` varchar(20) NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `telefoneAdicional` varchar(14) NOT NULL,
  `email` varchar(25) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(7) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `convenio` varchar(20) NOT NULL,
  `plano` varchar(20) NOT NULL,
  `numeroConvenio` int(30) NOT NULL,
  `dataConvenio` date NOT NULL,
  `observacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `nomeResponsavel`, `sexo`, `dataNascimento`, `estadoCivil`, `indicacao`, `cpf`, `celular`, `telefone`, `telefoneAdicional`, `email`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `convenio`, `plano`, `numeroConvenio`, `dataConvenio`, `observacao`) VALUES
(5, 'teste', '', '', '2019-02-06', '', '', '', '', '', '', 'teste@teste.com', '', '', 0, '', '', '', '', '', '', 0, '0000-00-00', ''),
(6, 'teste', 'teste', 's', '0000-00-00', 's', 's', 's', 's', 's', 's', 'teste@teste.com', '07077065', 'Rua Geraldo Augusto da Silva', 631, 'as', 'Parque Continental I', 'Guarulhos', 'SP', 'asas', 'asa', 4545, '0000-00-00', 'sasa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `idPaciente` int(11) NOT NULL,
  `anotacoes` varchar(250) NOT NULL,
  `problemas` varchar(250) NOT NULL,
  `resumo` varchar(250) NOT NULL,
  `medicacoes` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `sala` int(11) NOT NULL,
  `idmedico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`sala`, `idmedico`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretario`
--

CREATE TABLE `secretario` (
  `idSecretario` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `data_nascimento` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `ctps` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idAgenda`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idMedico`),
  ADD KEY `idMedico` (`idMedico`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
