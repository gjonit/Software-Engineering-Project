-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 08:25 PM
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
  `ProductID` int(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Manufacturer` varchar(25) NOT NULL,
  `Price` int(10) NOT NULL,
  `Description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `Name`, `Manufacturer`, `Price`, `Description`) VALUES
(1, 'Vitamin C Supplement', 'Nature\'s Bounty', 25, 'The powerful blend of vitamins, nutrients, antioxidant power and electrolytes makes these drinks as beneficial as they are delicious'),
(2, 'Calcium Supplement', 'AlgaeCal', 69, 'Contains all 13 essential minerals including small quantities of strontium'),
(3, 'Tylenol Painkiller', 'Tylenol', 17, '50-count, Pack of 2 of Tylenol Extra Strength Caplets with acetaminophen to provide temporary relief of minor aches and pains and help reduce fever'),
(4, 'Advil Painkiller', 'Advil', 15, 'PAIN RELIEF: Advil Coated Tablets contain 200mg of Ibuprofen. Tough headache, minor arthritis, menstrual cramps, backache, and other pains'),
(5, 'Omeprazole', 'HealthCare Aisle', 7, 'Acid reducer that treats frequent heartburn occurring 2 or more days a week'),
(6, 'Amoxocillin', 'Johnson & Johnson', 35, 'his medication is a penicillin-type antibiotic. It works by stopping the growth of bacteria.This antibiotic treats only bacterial infections'),
(7, 'Lyrica', 'Pfizer', 60, 'Lyrica is prescribed to treat nerve and muscle pain, including fibromyalgia.'),
(8, 'Losartan Potassium', 'Advil', 15, 'Losartan is used to treat high blood pressure (hypertension) and to help protect the kidneys from damage due to diabetes.'),
(9, 'Zoloft', 'Pfizer', 25, 'An inexpensive drug used to treat depression'),
(10, 'Bystolic', 'Bystolic', 150, 'A drug used to treat high blood pressure.'),
(11, 'Aspirin', 'Bayer', 10, 'Genuine Bayer Aspirin provides pain relief from headaches, backaches, muscle pain, toothaches, menstrual pain and minor arthritis pain'),
(12, 'Victoza', 'Victoza', 1000, 'Used to improve blood sugar control in adults with type 2 diabetes.'),
(13, 'Benadryl', 'Johnson & Johnson', 10, 'Benadryl Allergy UltraTabs in 24 offer effective allergy relief from upper respiratory allergy and common cold symptoms in a small tablet size'),
(14, 'Cymbalta', 'Eli LIlly', 50, 'Used to treat depression, anxiety, fibromyalgia, and nerve pain associated with diabetes (diabetic peripheral neuropathy)'),
(15, 'Keppra', 'UCB Pharmaceuticals', 20, 'Used to help control certain types of seizures in the treatment of epilepsy.'),
(16, 'Obexol', 'Saval', 30, 'OBEXOL is indicated for short-term treatment of exogenous obesity together with diet to reduce body weight');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD UNIQUE KEY `Name` (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
