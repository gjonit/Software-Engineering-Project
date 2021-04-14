-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 10:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` varchar(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Manufacturer` varchar(25) NOT NULL,
  `Price` int(10) NOT NULL,
  `Description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `Name`, `Manufacturer`, `Price`, `Description`) VALUES
('1', 'Vitamin C Supplement', 'Nature\'s Bounty', 25, 'The powerful blend of vitamins, nutrients, antioxidant power and electrolytes makes these drinks as beneficial as they are delicious'),
('10', 'Bystolic', 'Bystolic', 150, 'A drug used to treat high blood pressure.'),
('2', 'Calcium Supplement', 'AlgaeCal', 69, 'Contains all 13 essential minerals including small quantities of strontium'),
('3', 'Tylenol Painkiller', 'Tylenol', 17, '50-count, Pack of 2 of Tylenol Extra Strength Caplets with acetaminophen to provide temporary relief of minor aches and pains and help reduce fever'),
('4', 'Advil Painkiller', 'Advil', 15, 'PAIN RELIEF: Advil Coated Tablets contain 200mg of Ibuprofen. Tough headache, minor arthritis, menstrual cramps, backache, and other pains'),
('5', 'Omeprazole', 'HealthCare Aisle', 7, 'Acid reducer that treats frequent heartburn occurring 2 or more days a week'),
('6', 'Amoxocillin', 'Johnson & Johnson', 35, 'his medication is a penicillin-type antibiotic. It works by stopping the growth of bacteria.This antibiotic treats only bacterial infections'),
('7', 'Lyrica', 'Pfizer', 60, 'Lyrica is prescribed to treat nerve and muscle pain, including fibromyalgia.'),
('8', 'Losartan Potassium', 'Advil', 15, 'Losartan is used to treat high blood pressure (hypertension) and to help protect the kidneys from damage due to diabetes.'),
('9', 'Zoloft', 'Pfizer', 25, 'An inexpensive drug used to treat depression');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
