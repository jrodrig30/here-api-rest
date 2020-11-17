-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Jun-2015 às 20:21
-- Versão do servidor: 5.6.24
-- versão do PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `project_here`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `start_date` varchar(45) NOT NULL,
  `end_date` varchar(45) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `event_attendances`
--

CREATE TABLE IF NOT EXISTS `event_attendances` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `person_id` int(10) unsigned NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_event_attendances_1_idx` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `event_meetings`
--

CREATE TABLE IF NOT EXISTS `event_meetings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned NOT NULL,
  `date` varchar(45) NOT NULL,
  `start_time` varchar(45) NOT NULL,
  `end_time` varchar(45) NOT NULL,
  `details` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_event_meetings_1_idx` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `registration_number` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `persons`
--

INSERT INTO `persons` (`id`, `name`, `registration_number`, `email`, `photo`, `created`, `updated`) VALUES
(1, 'JosÃ© Rodrigo R Flores', '201568723', 'jose@onehost.com.br', 'teste.jpg', '2015-06-06 19:45:04', '2015-06-06 19:45:04');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `event_attendances`
--
ALTER TABLE `event_attendances`
  ADD CONSTRAINT `fk_event_attendances_1` FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `event_meetings`
--
ALTER TABLE `event_meetings`
  ADD CONSTRAINT `fk_event_meetings_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
