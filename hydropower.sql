-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2017 at 06:15 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hydropower`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `comments` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comments`, `date`) VALUES
(84, 'sam', 'This is great!!!', '2017-03-03 18:13:29'),
(85, 'ram', 'I really appreciate this work!', '2017-03-03 18:13:52'),
(86, 'maddy', 'Like the way you treat customer', '2017-03-03 18:14:15');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Firstname` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `phne` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Email`),
  UNIQUE KEY `Email-Id` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Firstname`, `Lastname`, `Address`, `Email`, `phne`, `Password`) VALUES
('Mahesh', 'Parwani', 'dfkdldlfkdlfkdflkdflk asflfsdfkldsfklsdfklkdflk dl', 'asl@qwe.com', '1212121212', '1111111');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `Firstname` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Service` varchar(150) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Date` datetime NOT NULL,
  `Message` int(11) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`Firstname`, `Lastname`, `Address`, `Email`, `Contact`, `Service`, `Description`, `Date`, `Message`) VALUES
('Raj', 'vsdfsd', 'asdjlkjdkc;jeo ertrtopmertpeto erpyiepoymeu ewruit', 'asd@qsfsdf.sdf', '1111111111', 'Tank Cleaning', 'dd fawklj dfgn,mdfg d gkfdng,mn mngm,d,fng, mnf,g', '2016-07-13 15:09:39', 1),
('Raj', 'vsdfsd', 'asdjlkjdkc;jeo ertrtopmertpeto erpyiepoymeu ewruit', 'asd@sfsdf.sdf', '1111111111', 'Tank Cleaning', 'dd fawklj dfgn,mdfg d gkfdng,mn mngm,d,fng, mnf,g', '2016-07-13 15:01:32', 1),
('Mahesh', 'Parwani', 'dfkdldlfkdlfkdflkdflk asflfsdfkldsfklsdfklkdflk dl', 'asl@qwe.com', '1212121212', 'Pump Maintenance & Services , Electrical & Plumbing Contracts', 'I am mahesh', '2017-01-01 14:41:45', 1),
('Rahul', 'Shetty', 'Pitru Chaayya ,Sarvaday Nagar ,Badlapur(w)', 'rahul.shetty@ves.ac.in', '9975671271', 'Borewell Drilling & Installation', '', '2016-07-13 14:47:26', 1),
('Raj', 'Roy', 'asdjlkjdkc;jeo ertrtopmertpeto erpyiepoymeu ewruit', 'raj@gmail.com', '1111111111', 'Tank Cleaning , Rain Water Harvesting', 'dd fawklj dfgn,mdfg d gkfdng,mn mngm,d,fng, mnf,g', '2016-07-13 14:58:47', 1),
('Ravi', 'Yadav', 'aksjf,fhasjdkfhsjdklfhslkjdfhskdf', 'ravi@gmail.com', '1234567890', 'Pump Maintenance & Services , Automatic Level Controller with sensor', 'wehfjkewhlfkjndsfm,nweroyporuewoifjsdlkf;jslkfj', '2016-07-16 16:55:31', 1),
('sam', 'sam', 'sdfjskldfskdfsdfkshdflksg', 'sam@sjds.dff', '1231231231', 'Solar Products', 'askjdhakljfhskjdgkdfjgdfklhkhtrlkyhjlgjkdfngjkldfhkgl', '2016-07-15 21:13:05', 1),
('sam', 'sam', 'saghlkdfghkdsfghlkdhk', 'sd@sd.as', '1212121212', '', 'sajdkjafhdskjlfdshfklsdhfksdf', '2016-07-15 22:15:16', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
