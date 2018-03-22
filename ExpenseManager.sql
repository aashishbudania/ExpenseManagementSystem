-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2018 at 11:28 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ExpenseManager`
--

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE IF NOT EXISTS `exp` (
  `tp` varchar(255) NOT NULL,
  `dt` date NOT NULL,
  `des` varchar(255) NOT NULL,
  `amt` float NOT NULL,
  `m` varchar(255) NOT NULL,
  KEY `m` (`m`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`tp`, `dt`, `des`, `amt`, `m`) VALUES
('food', '2018-03-01', 'Ate Lunch and Dinner in Ocean Pearl', 345, 'Cash'),
('food', '2018-03-03', 'ate pizza in mangalore', 254, 'Cash'),
('transportation', '2018-03-01', 'Went to Noida', 259, 'Card'),
('transportation', '2018-03-08', 'Went to Delhi', 1234, 'Card'),
('utilities', '2018-03-03', 'Bought a bike', 50000, 'NetBanking'),
('utilities', '2018-03-09', 'Bought amazon kindle', 9189, 'NetBanking'),
('activities', '2018-03-06', 'went for a trip', 4895, 'NetBanking'),
('activities', '2018-03-06', 'went for movie', 645, 'PhonePay'),
('loan', '2018-03-06', 'paid education loan', 45000, 'NetBanking'),
('other', '2018-03-07', 'gave to mumma', 500, 'Paytm'),
('transportation', '2018-03-08', 'went to bangalore', 3500, 'Card'),
('other', '2018-03-09', 'Lost Money', 230, 'Others'),
('utilities', '2018-03-21', 'Laundry', 150, 'Cash'),
('activities', '2018-03-01', 'trip to hubly', 2000, 'Cash'),
('others', '2018-03-02', 'gave to saurabh', 123, 'NetBanking'),
('others', '2018-03-02', 'gave to saurabh', 123, 'NetBanking'),
('loan', '2018-03-04', 'paid loan ', 1234, 'PhonePay'),
('others', '2018-03-15', 'juice', 40, 'Paytm'),
('others', '2018-03-14', 'bike repairing', 3500, 'Paytm');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE IF NOT EXISTS `pay` (
  `m` varchar(255) NOT NULL,
  `bal` float NOT NULL,
  PRIMARY KEY (`m`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This is table to store the income or available balance of the user';

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`m`, `bal`) VALUES
('card', 249889),
('cash', 249694),
('netbanking', 252444),
('others', 22346),
('paytm', 95960),
('phonepay', 2098);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exp`
--
ALTER TABLE `exp`
  ADD CONSTRAINT `exp_ibfk_1` FOREIGN KEY (`m`) REFERENCES `pay` (`m`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
