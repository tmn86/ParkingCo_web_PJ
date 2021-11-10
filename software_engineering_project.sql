-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 11:10 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software engineering project`
--

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `ParkingLot` varchar(100) NOT NULL,
  `StreetAddress` varchar(100) NOT NULL,
  `Rate` varchar(20) DEFAULT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(25) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `Capacity` int(10) NOT NULL,
  `Price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`ParkingLot`, `StreetAddress`, `Rate`, `City`, `State`, `ZipCode`, `Capacity`, `Price`) VALUES
('ABM Parking Lot', '1305 Market St', 'hourly', 'Philadelphia', 'PA', '19107', 50, '32.00'),
('Icon Parking Systems\r\n', '155 W 36th St', 'hourly', 'New York', 'NY', '10018', 150, '40.00'),
('LAZ Parking Lot', '300 W 31st St', 'monthly', 'New York', 'NY', '10001', 25, '45.00'),
('Meyers Parking', '340 W 31st St', 'monthly', 'New York', 'NY', '10001', 200, '45.00'),
('16 Penn Plaza Garage', '16 Pennsylvania Plaza', 'hourly', 'New York', 'NY', '10001', 50, '30.00'),
('Zipcar', 'One Penn Plaza', 'monthly', 'New York', 'NY', '10119', 20, '32.50'),
('One Parking', '10 Exchange Pl', 'monthly', 'Jersey City', 'NJ', '07302', 330, '10.00'),
('Edison ParkFast', '155 Montgomery St', 'hourly', 'Jersey City', 'NJ', '07302', 80, '15.00'),
('River Market Garage', '20 North Blvd', 'hourly', 'Jersey City', 'NJ', '07310', 150, '41.50'),
('The Convention Center Parking Facility', '8 Arch St', 'monthly', 'Philadelphia', 'PA', '19107', 320, '10.00'),
('Philadelphia parking\r\n', '1845 Walnut St', 'monthly', 'Philadelphia', 'PA', '19103', 25, '8.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
