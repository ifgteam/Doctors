-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Fev-2019 às 00:33
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lifeclin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `idAgenda` int(11) NOT NULL AUTO_INCREMENT,
  `data` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `horario_inicial` time(6) NOT NULL,
  `horario_final` time(6) NOT NULL,
  `idMedico` int(11) NOT NULL,
  `idSecretario` int(11) NOT NULL,
  PRIMARY KEY (`idAgenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_medico`
--

CREATE TABLE IF NOT EXISTS `agenda_medico` (
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

CREATE TABLE IF NOT EXISTS `medico` (
  `idMedico` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `numeroProfissional` varchar(20) NOT NULL,
  `dataNascimento` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `especialidade` varchar(20) NOT NULL,
  PRIMARY KEY (`idMedico`),
  KEY `idMedico` (`idMedico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`idMedico`, `nome`, `numeroProfissional`, `dataNascimento`, `especialidade`) VALUES
(1, 'Daniel', '31241452', '2000-01-31 02:00:00.000000', 'Psicologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `nomeResponsavel` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `dataNascimento` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `estadoCivil` varchar(12) NOT NULL,
  `indicacao` varchar(20) NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `telefoneAdicional` varchar(14) NOT NULL,
  `email` varchar(25) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `numero` int(7) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `convenio` varchar(20) NOT NULL,
  `plano` varchar(20) NOT NULL,
  `numeroConvenio` int(30) NOT NULL,
  `dataConvenio` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000',
  `observacao` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `nomeResponsavel`, `sexo`, `dataNascimento`, `estadoCivil`, `indicacao`, `cpf`, `celular`, `telefone`, `telefoneAdicional`, `email`, `cep`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `convenio`, `plano`, `numeroConvenio`, `dataConvenio`, `observacao`) VALUES
(1, 'Guilherme', 'Ana', 'Masculino', '0000-00-00 00:00:00.000000', 'Namorando', 'Ana', '48977851890', '11997948992', '1124077895', '1124077895', 'santanaguisantos@gmail.co', '0713565', 234, 'Sesi', 'Jd.Adriana', 'Guarulhos', '', 'Metrus', '''''', 3432423, '2019-01-23 02:00:00.000000', 'MI LINDA'),
(2, 'Guilherme', 'Ana', 'Masculino', '0000-00-00 00:00:00.000000', 'Namorando', 'Ana', '48977851890', '11997948992', '1124077895', '1124077895', 'santanaguisantos@gmail.co', '0713565', 234, 'Sesi', 'Jd.Adriana', 'Guarulhos', '', 'Metrus', '''''', 3432423, '2019-01-23 02:00:00.000000', 'MI LINDA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE IF NOT EXISTS `prontuario` (
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

CREATE TABLE IF NOT EXISTS `sala` (
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

CREATE TABLE IF NOT EXISTS `secretario` (
  `idSecretario` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `data_nascimento` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `ctps` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
