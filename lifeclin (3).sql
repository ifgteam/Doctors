-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Mar-2019 às 20:12
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

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
  `especialidade` int(11) NOT NULL,
  `especialista` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `paciente` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`idAgenda`, `especialidade`, `especialista`, `data`, `hora`, `paciente`, `status`) VALUES
(1, 5, 9, '2019-02-06', '14:00:00', 7, 1),
(2, 5, 9, '2019-02-07', '14:00:00', 2, 1),
(3, 5, 9, '2019-02-07', '14:00:00', 2, 1),
(4, 5, 9, '2019-02-07', '14:00:00', 2, 1),
(5, 5, 9, '2019-02-07', '14:00:00', 2, 1),
(6, 5, 9, '2019-02-02', '08:30:00', 2, 1),
(7, 5, 9, '2019-02-08', '08:30:00', 2, 1),
(8, 5, 9, '2019-02-08', '08:30:00', 2, 1),
(9, 5, 9, '2019-02-08', '08:30:00', 7, 1),
(10, 5, 9, '2019-02-07', '10:00:00', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_medico`
--

CREATE TABLE `agenda_medico` (
  `idMedico` int(11) NOT NULL,
  `idEsp` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `data_disp` int(11) NOT NULL DEFAULT '1',
  `inicio` time DEFAULT NULL,
  `inicio_almoco` time DEFAULT NULL,
  `fim_almoco` time DEFAULT NULL,
  `fim` time DEFAULT NULL,
  `hora[1]` time DEFAULT NULL,
  `hora_disp[1]` int(11) NOT NULL DEFAULT '0',
  `hora[2]` time DEFAULT NULL,
  `hora_disp[2]` int(11) NOT NULL DEFAULT '0',
  `hora[3]` time DEFAULT NULL,
  `hora_disp[3]` int(11) NOT NULL DEFAULT '0',
  `hora[4]` time DEFAULT NULL,
  `hora_disp[4]` int(11) NOT NULL DEFAULT '0',
  `hora[5]` time DEFAULT NULL,
  `hora_disp[5]` int(11) NOT NULL DEFAULT '0',
  `hora[6]` time DEFAULT NULL,
  `hora_disp[6]` int(11) NOT NULL DEFAULT '0',
  `hora[7]` time DEFAULT NULL,
  `hora_disp[7]` int(11) NOT NULL DEFAULT '0',
  `hora[8]` time DEFAULT NULL,
  `hora_disp[8]` int(11) NOT NULL DEFAULT '0',
  `hora[9]` time DEFAULT NULL,
  `hora_disp[9]` int(11) NOT NULL DEFAULT '0',
  `hora[10]` time DEFAULT NULL,
  `hora_disp[10]` int(11) NOT NULL DEFAULT '0',
  `hora[11]` time DEFAULT NULL,
  `hora_disp[11]` int(11) NOT NULL DEFAULT '0',
  `hora[12]` time DEFAULT NULL,
  `hora_disp[12]` int(11) NOT NULL DEFAULT '0',
  `hora[13]` time DEFAULT NULL,
  `hora_disp[13]` int(11) NOT NULL DEFAULT '0',
  `hora[14]` time DEFAULT NULL,
  `hora_disp[14]` int(11) NOT NULL DEFAULT '0',
  `hora[15]` time DEFAULT NULL,
  `hora_disp[15]` int(11) NOT NULL DEFAULT '0',
  `hora[16]` time DEFAULT NULL,
  `hora_disp[16]` int(11) NOT NULL DEFAULT '0',
  `hora[17]` time DEFAULT NULL,
  `hora_disp[17]` int(11) NOT NULL DEFAULT '0',
  `hora[18]` time DEFAULT NULL,
  `hora_disp[18]` int(11) NOT NULL DEFAULT '0',
  `hora[19]` time DEFAULT NULL,
  `hora_disp[19]` int(11) NOT NULL DEFAULT '0',
  `hora[20]` time DEFAULT NULL,
  `hora_disp[20]` int(11) NOT NULL DEFAULT '0',
  `hora[21]` time DEFAULT NULL,
  `hora_disp[21]` int(11) NOT NULL DEFAULT '0',
  `hora[22]` time DEFAULT NULL,
  `hora_disp[22]` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda_medico`
--

INSERT INTO `agenda_medico` (`idMedico`, `idEsp`, `data`, `data_disp`, `inicio`, `inicio_almoco`, `fim_almoco`, `fim`, `hora[1]`, `hora_disp[1]`, `hora[2]`, `hora_disp[2]`, `hora[3]`, `hora_disp[3]`, `hora[4]`, `hora_disp[4]`, `hora[5]`, `hora_disp[5]`, `hora[6]`, `hora_disp[6]`, `hora[7]`, `hora_disp[7]`, `hora[8]`, `hora_disp[8]`, `hora[9]`, `hora_disp[9]`, `hora[10]`, `hora_disp[10]`, `hora[11]`, `hora_disp[11]`, `hora[12]`, `hora_disp[12]`, `hora[13]`, `hora_disp[13]`, `hora[14]`, `hora_disp[14]`, `hora[15]`, `hora_disp[15]`, `hora[16]`, `hora_disp[16]`, `hora[17]`, `hora_disp[17]`, `hora[18]`, `hora_disp[18]`, `hora[19]`, `hora_disp[19]`, `hora[20]`, `hora_disp[20]`, `hora[21]`, `hora_disp[21]`, `hora[22]`, `hora_disp[22]`) VALUES
(9, NULL, '2019-02-19', 0, '07:00:00', '07:00:00', '08:00:00', '09:00:00', '07:00:00', 0, '07:30:00', 0, '08:00:00', 0, '08:30:00', 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 12, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(9, NULL, '2019-02-02', 0, '08:00:00', '12:40:00', '13:40:00', '17:00:00', '08:00:00', 0, '08:30:00', 1, '09:00:00', 1, '09:30:00', 1, '10:00:00', 1, '10:30:00', 1, '11:00:00', 1, '11:30:00', 1, '12:00:00', 1, '12:30:00', 1, '13:00:00', 1, '13:30:00', 1, '14:00:00', 1, '14:30:00', 1, '15:00:00', 1, '15:30:00', 1, '16:00:00', 1, '16:30:00', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(9, NULL, '2019-02-04', 0, '08:00:00', '12:40:00', '13:40:00', '17:00:00', '08:00:00', 0, '08:30:00', 1, '09:00:00', 1, '09:30:00', 1, '10:00:00', 1, '10:30:00', 1, '11:00:00', 1, '11:30:00', 1, '12:00:00', 1, '12:30:00', 1, '13:00:00', 1, '13:30:00', 1, '14:00:00', 1, '14:30:00', 1, '15:00:00', 1, '15:30:00', 1, '16:00:00', 1, '16:30:00', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(9, NULL, '2019-02-05', 0, '08:00:00', '12:40:00', '13:40:00', '17:00:00', '08:00:00', 0, '08:30:00', 1, '09:00:00', 1, '09:30:00', 1, '10:00:00', 1, '10:30:00', 1, '11:00:00', 1, '11:30:00', 1, '12:00:00', 1, '12:30:00', 1, '13:00:00', 1, '13:30:00', 1, '14:00:00', 1, '14:30:00', 1, '15:00:00', 1, '15:30:00', 1, '16:00:00', 1, '16:30:00', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(9, NULL, '2019-02-06', 0, '08:00:00', '12:40:00', '13:40:00', '17:00:00', '08:00:00', 0, '08:30:00', 1, '09:00:00', 1, '09:30:00', 1, '10:00:00', 1, '10:30:00', 1, '11:00:00', 1, '11:30:00', 1, '12:00:00', 1, '12:30:00', 1, '13:00:00', 1, '13:30:00', 1, '14:00:00', 1, '14:30:00', 1, '15:00:00', 1, '15:30:00', 1, '16:00:00', 1, '16:30:00', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(9, NULL, '2019-02-07', 0, '08:00:00', '12:40:00', '13:40:00', '17:00:00', '08:00:00', 0, '08:30:00', 1, '09:00:00', 1, '09:30:00', 1, '10:00:00', 1, '10:30:00', 1, '11:00:00', 1, '11:30:00', 1, '12:00:00', 1, '12:30:00', 1, '13:00:00', 1, '13:30:00', 1, '14:00:00', 1, '14:30:00', 1, '15:00:00', 1, '15:30:00', 1, '16:00:00', 1, '16:30:00', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0),
(9, NULL, '2019-02-08', 0, '08:00:00', '12:40:00', '13:40:00', '17:00:00', '08:00:00', 0, '08:30:00', 1, '09:00:00', 1, '09:30:00', 1, '10:00:00', 1, '10:30:00', 1, '11:00:00', 1, '11:30:00', 1, '12:00:00', 1, '12:30:00', 1, '13:00:00', 1, '13:30:00', 1, '14:00:00', 1, '14:30:00', 1, '15:00:00', 1, '15:30:00', 1, '16:00:00', 1, '16:30:00', 1, NULL, 0, NULL, 0, NULL, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

CREATE TABLE `especialidades` (
  `idEsp` int(11) NOT NULL,
  `especialidade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidades`
--

INSERT INTO `especialidades` (`idEsp`, `especialidade`) VALUES
(1, 'Psicologia'),
(2, 'Fonoaudiologia'),
(3, 'Nutricionista'),
(4, 'Fisioterapia'),
(5, 'Neuropsicologia'),
(6, 'Psicopedagogia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `acesso` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `senha`, `acesso`) VALUES
(1, 'Administrador', 'and@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(4, 'Renan Lima Alonso Santos aaaaa', 'michaeldo.saopaulino@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(5, 'joca', 'jupa.quim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(6, 'Guilherme', 'gui@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `numeroProfissional` varchar(20) NOT NULL,
  `dataNascimento` date NOT NULL,
  `idEspecialidade` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`idMedico`, `nome`, `numeroProfissional`, `dataNascimento`, `idEspecialidade`) VALUES
(3, 'Daniel', '4234242', '2019-02-13', 1),
(4, 'Cluadia', '4234242', '2019-02-06', 6),
(5, 'Ana Maria', '432423', '2019-02-04', 3),
(6, 'Paula', '43224', '2019-02-12', 4),
(7, 'Sergio', '4234324', '2019-02-06', 4),
(8, 'Gabriela', '433543', '2019-02-04', 2),
(9, 'Alan', '3213123', '2019-02-19', 5);

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
  `observacao` varchar(20) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `nomeResponsavel`, `sexo`, `dataNascimento`, `estadoCivil`, `indicacao`, `cpf`, `celular`, `telefone`, `telefoneAdicional`, `email`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `convenio`, `plano`, `numeroConvenio`, `dataConvenio`, `observacao`, `status`) VALUES
(2, 'Guilherme', 'Ana', 'Masculino', '2000-09-09', 'Namorando', 'Ana', '48977851890', '11997948992', '1124077895', '', 'santanaguisantos@gmail.co', '0713565', 'Rua zona', 234, 'Sesi', 'Jd.Adriana', 'Guarulhos', 'sp', 'Metrus', 'plano', 3432423, '2019-01-23', 'MI LINDA', 1),
(7, 'Jeff', 'Thomas', 'Thomas', '2019-02-01', 'Thomas', 'Thomas', 'Thomas', 'Thomas', 'Thomas', 'Thomas', 'Thomas', '07077065', 'Rua Geraldo Augusto da Silva', 666, 'alo', 'Parque Continental I', 'Guarulhos', 'SP', 'Thomas', 'Thomas', 0, '2019-02-28', 'dsadsada', 1);

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `idStatus` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`idStatus`, `status`) VALUES
(1, 'chegar'),
(2, 'aguardando'),
(3, 'atendimento'),
(4, 'atendido'),
(5, 'ausente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(20) NOT NULL,
  `address` int(20) NOT NULL,
  `created_at` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idAgenda`),
  ADD KEY `especialidade` (`especialidade`),
  ADD KEY `especialista` (`especialista`),
  ADD KEY `paciente` (`paciente`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `agenda_medico`
--
ALTER TABLE `agenda_medico`
  ADD KEY `idMedico` (`idMedico`),
  ADD KEY `idEsp` (`idEsp`);

--
-- Indexes for table `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`idEsp`),
  ADD KEY `idEspecialidade` (`idEsp`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idMedico`),
  ADD KEY `idMedico` (`idMedico`),
  ADD KEY `idEspecialidade` (`idEspecialidade`);

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
  MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agenda_medico`
--
ALTER TABLE `agenda_medico`
  ADD CONSTRAINT `idEsp` FOREIGN KEY (`idEsp`) REFERENCES `especialidades` (`idEsp`),
  ADD CONSTRAINT `idMedico` FOREIGN KEY (`idMedico`) REFERENCES `medico` (`idMedico`);

--
-- Limitadores para a tabela `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `idEspecialidade` FOREIGN KEY (`idEspecialidade`) REFERENCES `especialidades` (`idEsp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
