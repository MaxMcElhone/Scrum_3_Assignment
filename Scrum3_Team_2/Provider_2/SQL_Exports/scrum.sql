-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2019 at 05:58 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scrum`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `firstName`, `lastName`, `email`, `phone`) VALUES
(1, 'John', 'Rohwer', 'johnrohwer@gmail.com', '712-445-3322'),
(2, 'Maxwell', 'McElhone', 'maxwellMcElhone@gmail.com', '1605-333-2222'),
(3, 'Derrick', 'Olson', 'derrickOlson@gmail.com', '1605-555-4444'),
(4, 'Very', 'CoolGuy', 'veryCoolGuy@gmail.com', '1800-coo-lguy'),
(5, 'Evan', 'Coolerdude', 'evanCoolerdude@gmail.com', '1605-555-8888'),
(6, 'Stonecold', 'Steveaustin', 'texasRattlesnake@gmail.com', '1505-345-5432'),
(7, 'Khal', 'Drogo', 'whatIsEmail@gmail.com', '145-654-7654'),
(8, 'Cousin', 'Skeeter', 'wadapCuz@gmail.com', '1560-456-3456');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `ShippingAddress` varchar(60) NOT NULL,
  `orderDate` date NOT NULL,
  `ExpectedArrivalDate` date NOT NULL,
  `Price` decimal(30,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `ShippingAddress`, `orderDate`, `ExpectedArrivalDate`, `Price`) VALUES
(1, '100 W Street, Sioux Falls SD', '2019-02-03', '2019-02-20', '2000'),
(2, '34 S Ave, Sioux Falls SD', '2018-04-03', '2018-06-20', '2000000'),
(3, '400 50th St, Sioux Falls SD', '2017-03-02', '2017-04-12', '3000000'),
(4, '34 10th St, Sioux Falls SD', '2019-04-02', '2019-05-11', '4000000'),
(5, '140 Kiwanis Ave, Sioux Falls SD', '2017-03-22', '2017-04-11', '5000000'),
(6, '100 Sycamore, Sioux Falls SD', '2016-02-21', '2016-03-01', '3000'),
(7, '104 30th St, Sioux Falls SD', '2014-02-26', '2016-03-07', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `color`, `description`, `price`) VALUES
(1, 'boat', 'green', 'green boat', 1000),
(2, 'car', 'blue', 'blue car', 10000),
(3, 'plane', 'purple', 'purple plane', 1000000),
(4, 'Satellite', 'Grey', 'Grey sattelite', 10000000),
(5, 'Submarine', 'Yellow', 'Yellow submarine', 900000),
(6, 'Subterranean APC', 'Red', 'Red subterreanean APC', 99999999),
(7, 'UFO', 'Green', 'Green UFO', 9990099999);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
