-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 03:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccineregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'b', '1234567890', 'b@gmail.com', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `bookedslots`
--

CREATE TABLE `bookedslots` (
  `ID` int(11) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `center_name` varchar(100) NOT NULL,
  `center_address` varchar(100) NOT NULL,
  `center_pin` int(11) NOT NULL,
  `center_district_name` varchar(100) NOT NULL,
  `vaccine_date` date NOT NULL,
  `second_vaccine_date` date NOT NULL DEFAULT current_timestamp(),
  `Proof_type` varchar(100) NOT NULL,
  `Proof_ID_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookedslots`
--

INSERT INTO `bookedslots` (`ID`, `account_name`, `name`, `center_name`, `center_address`, `center_pin`, `center_district_name`, `vaccine_date`, `second_vaccine_date`, `Proof_type`, `Proof_ID_no`) VALUES
(49, 'Mahir', 'Carol', 'UHC2', 'MEMNAGAR', 380003, 'AMC', '2021-12-20', '2021-12-22', 'Voter-id card', '4569'),
(50, 'Mahir', 'Emley', 'UHC1', 'Ghatlodiya', 380004, 'AMC', '2021-12-18', '2021-12-20', 'Aadhar Card', '9874'),
(51, 'Mahir', 'Emley', 'AMC', 'AMBALI', 380003, 'AMC', '2021-12-19', '2021-12-24', 'Aadhar Card', '9874'),
(52, 'Mahir', 'Mahir', 'UHC', 'Bapunagar', 380001, 'Ahmedabad', '2021-12-19', '2021-12-21', 'Aadhar Card', '1234'),
(55, 'Mahir', 'David', 'AMC', 'AMBALI', 380003, 'AMC', '2021-12-20', '2021-12-24', 'Aadhar Card', '6789');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `Proof_type` varchar(100) NOT NULL,
  `Proof_ID_No` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `member_name`, `Proof_type`, `Proof_ID_No`) VALUES
(36, 'a', 'a', 'Aadhar Card', 123),
(37, 'a', 'b', 'Aadhar Card', 123),
(39, 'b', 'z', 'Aadhar Card', 674),
(40, 'b', 'y', 'Aadhar Card', 123),
(41, 'Mahir', 'Mahir', 'Aadhar Card', 1234),
(44, 'Mahir', 'Carol', 'Voter-id card', 4569),
(45, 'Mahir', 'David', 'Aadhar Card', 6789),
(46, 'Mahir', 'Emley', 'Aadhar Card', 9874),
(47, 'Mahir', 'ladjfkd', 'Pan Card', 3);

-- --------------------------------------------------------

--
-- Table structure for table `searchbydistrict`
--

CREATE TABLE `searchbydistrict` (
  `ID` int(11) NOT NULL,
  `District` varchar(100) NOT NULL,
  `CenterName` varchar(100) NOT NULL,
  `CenterAddress` varchar(100) NOT NULL,
  `SlotsAvailable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchbydistrict`
--

INSERT INTO `searchbydistrict` (`ID`, `District`, `CenterName`, `CenterAddress`, `SlotsAvailable`) VALUES
(1, 'a', 'abc', 'abcd', 64),
(2, 'a', 'xyz', 'wxyz', 46);

-- --------------------------------------------------------

--
-- Table structure for table `searchbypin`
--

CREATE TABLE `searchbypin` (
  `ID` int(11) NOT NULL,
  `PIN` int(11) NOT NULL,
  `CenterName` varchar(200) NOT NULL,
  `CenterAddress` varchar(200) NOT NULL,
  `SlotsAvailable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchbypin`
--

INSERT INTO `searchbypin` (`ID`, `PIN`, `CenterName`, `CenterAddress`, `SlotsAvailable`) VALUES
(1, 1, 'abc', 'abcd', 48),
(2, 1, 'xyz', 'wxyz', 65),
(3, 2, 'abc', 'abcd', 65),
(4, 2, 'xyz', 'wxyz', 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `gender`, `email`, `password`) VALUES
(13, 'a', '1234567890', 'male', 'beligin408@leanrights.com', 'a'),
(14, 'Mahir', '1234567890', 'male', 'faret83646@ztymm.com', 'b'),
(15, 'a', '1234567890', 'male', 'a@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinecenters`
--

CREATE TABLE `vaccinecenters` (
  `ID` int(11) NOT NULL,
  `center_name` varchar(500) NOT NULL,
  `center_address` varchar(500) NOT NULL,
  `center_pin` int(11) NOT NULL,
  `center_district_name` varchar(500) NOT NULL,
  `slots_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccinecenters`
--

INSERT INTO `vaccinecenters` (`ID`, `center_name`, `center_address`, `center_pin`, `center_district_name`, `slots_available`) VALUES
(12, 'BalKrishna', 'Maninagar', 380001, 'Ahmedabad', 49),
(13, 'UHC', 'Bapunagar', 380001, 'Ahmedabad', 58),
(14, 'UHC1', 'Dhandhuka', 380002, 'Ahmedabad', 65),
(15, 'PHC', 'Dholera', 380002, 'Ahmedabad', 65),
(16, 'AMC', 'AMBALI', 380003, 'AMC', 78),
(18, 'UHC1 ', 'Ghatlodiya', 380004, 'AMC', 99),
(19, 'GIDC ', 'Kathwada', 380004, 'AMC', 45),
(20, 'UHC', 'Sargasan', 356855, 'Surat', 78),
(22, 'a', 'a', 1, 'AMC', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookedslots`
--
ALTER TABLE `bookedslots`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchbydistrict`
--
ALTER TABLE `searchbydistrict`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `searchbypin`
--
ALTER TABLE `searchbypin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccinecenters`
--
ALTER TABLE `vaccinecenters`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookedslots`
--
ALTER TABLE `bookedslots`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `searchbydistrict`
--
ALTER TABLE `searchbydistrict`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `searchbypin`
--
ALTER TABLE `searchbypin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vaccinecenters`
--
ALTER TABLE `vaccinecenters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
