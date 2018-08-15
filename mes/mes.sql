-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2013 at 07:28 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mes`
--

-- --------------------------------------------------------

--
-- Table structure for table `ache`
--

CREATE TABLE IF NOT EXISTS `ache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ache` text NOT NULL,
  `diagnosis` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ache`
--

INSERT INTO `ache` (`id`, `ache`, `diagnosis`) VALUES
(1, 'Headache', 'Paracetamol'),
(2, 'Backache', 'Diclofenac'),
(3, 'Running nose', 'Piriton'),
(4, 'Heartburn', 'Actal'),
(5, 'Eye Discharge', 'Tetracycline'),
(6, 'Muscle pain', 'Bascopan'),
(7, 'Sorethroat', 'Ampiclox and cloxaciline'),
(8, 'Athletes foot', 'Clotrimazole cream'),
(9, 'Toothache', 'Brufen, flagyl and amoxilin'),
(10, 'Cough', 'Coughrid or erythromycin'),
(11, 'Acne', 'Neomedral cream and benzyl peroxide soap'),
(12, 'Dandruff', 'Ketoconazole cream'),
(13, 'Ear discharge', 'Clindamcycine gel and amoxyln tablets'),
(14, 'Select', '');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE IF NOT EXISTS `diagnosis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disease` text NOT NULL,
  `drug` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`id`, `disease`, `drug`) VALUES
(1, 'Malaria', 'Coartem,\r\nParacetamol'),
(3, 'Malaria', 'Duocotexin,\r\nBrufen\r\n'),
(4, 'Malaria', 'Metakelfin, \r\nparacetamol\r\n'),
(5, 'Typhoid', 'Ciprofloxacin,\r\nParacetamol\r\n'),
(6, 'Typhoid', 'Ceftriaxone injection\r\nbrufen\r\n'),
(7, 'Pneumonia', 'Amoxyln,\r\nBrufen  \r\n'),
(8, 'Pneumonia', 'Azithromycin,\r\nDiclofenac\r\n'),
(9, 'Anemia', 'Folic acid tablets\r\nFerrous sulphate tablets\r\n'),
(10, 'Menengitis', 'Fluconazole,\r\nDiclofenac,\r\nseptrin\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE IF NOT EXISTS `diseases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disease` text NOT NULL,
  `symptom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `disease`, `symptom`) VALUES
(1, 'Typhoid', 'Stomache'),
(2, 'Typhoid', 'Diarrhea'),
(3, 'Typhoid', 'Headache'),
(4, 'Typhoid', 'Fever'),
(5, 'Typhoid', 'Fatige'),
(6, 'Typhoid', 'Loss of appetite'),
(7, 'Typhoid', 'Abdominal discomfort'),
(8, 'Typhoid', 'Bodyaches'),
(9, 'Anemia', 'Headache'),
(10, 'Anemia', 'Dizziness'),
(11, 'Anemia', 'General body weakness'),
(12, 'Anemia', 'Paleness of body'),
(13, 'Anemia', 'Fast heartbeat'),
(14, 'Menengitis', 'Stiff neck'),
(15, 'Menengitis', 'Headache'),
(16, 'Menengitis', 'Vomiting'),
(17, 'Menengitis', 'Seizures'),
(18, 'Menengitis', 'Fever'),
(19, 'Menengitis', 'Painful neck'),
(20, 'Pneumonia', 'Fever'),
(21, 'Pneumonia', 'Cough'),
(22, 'Pneumonia', 'Chestpain'),
(23, 'Pneumonia', 'Shortness of breath'),
(24, 'Pneumonia', 'Chills'),
(25, 'Pneumonia', 'Excessive  sweating'),
(26, 'Pneumonia', 'Headache'),
(27, 'Pneumonia', 'Chest congestion'),
(28, 'Malaria', 'Headache'),
(29, 'Malaria', 'Fever'),
(30, 'Malaria', 'Joint pains'),
(31, 'Malaria', 'Nausea'),
(32, 'Malaria', 'Vomiting'),
(33, 'Malaria', 'Loss of appetite'),
(34, 'Malaria', 'Chills'),
(35, 'Malaria', 'Dizziness'),
(36, '', 'Select');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `date`, `address`, `email`, `pass`) VALUES
(1, 'David Kirui', '2013-04-09', 'dasfs', 'davekirui@gmail.com', 'dave7020'),
(2, 'Jay Jay', '2013-04-16', '65,Mumias', 'jay@jay.com', 'mumias'),
(3, 'Jay Jay', '2013-04-01', 'gaha', 'jay@jay.com', 'jay7020'),
(4, 'dafad', '2013-04-01', 'adad', 'jay@jay.com', 'jay7020'),
(5, 'dafad', '2013-04-01', 'adad', 'jay@jay.com', 'jay7020'),
(6, 'dafad', '2013-04-01', 'adad', 'jay@jay.com', 'jay7020'),
(7, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(8, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(9, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(10, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(11, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(12, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(13, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(14, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(15, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(16, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(17, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(18, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(19, 'DAD', '2013-04-07', 'ADAD', 'jay@jay.com', 'jay7020'),
(20, 'beckie', '01/01/2000', '87 busia', 'blessbeckie@yahoo.com', 'banana'),
(21, 'Dale Thurston', '01/01/1990', '46 mumias', 'domusebe@yahoo.com', 'moneys');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
