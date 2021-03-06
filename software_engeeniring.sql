-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 08:43 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software_engeeniring`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `Typenum` int(11) NOT NULL,
  `Links` varchar(55) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`Typenum`, `Links`, `Name`) VALUES
(2, 'edit.php', 'Edit'),
(2, 'delete.php', 'Delete');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `ID` int(11) NOT NULL,
  `Typenum` int(11) NOT NULL,
  `Link` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `ID` int(11) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Specialty` varchar(55) NOT NULL,
  `Address` int(11) NOT NULL,
  `Place` varchar(55) NOT NULL,
  `Category` varchar(55) NOT NULL,
  `WorkingHours` varchar(55) NOT NULL,
  `WorkingDays` varchar(55) NOT NULL,
  `Payment` varchar(55) NOT NULL,
  `isDeleted` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`ID`, `Name`, `Email`, `Mobile`, `Telephone`, `Specialty`, `Address`, `Place`, `Category`, `WorkingHours`, `WorkingDays`, `Payment`, `isDeleted`) VALUES
(5, 'Mark', 'markopoo@somemail.com', 111111111, 2222222, 'Heart', 3, 'Home', 'Kids', '9AM - 9PM', 'Sunday to Thursday', 'Paid', '0'),
(8, 'mark', 'markipoo@mail.com', 3214, 1234, 'heart', 1, 'home', 'kids', '8 to 9', 'sat to sun', 'free', '0'),
(9, 'ffhg', 'fg@k.com', 234, 324, 'f', 0, 'gfh', 'f', 'g', 'ghf', 'gh', '0'),
(10, 'asd', 'asd@asd', 351, 5120, 'sadf', 1, 'asdf', 'asdf', 'fasd', 'fadsf', 'fasd', '0'),
(11, 'asdf', 'asdf@sad', 2134, 1234, 'fdas', 1, 'fas', 'f', 'asfa', 'f', 'afs', '0'),
(12, 'asdf', 'asdf@sad', 2134, 1234, 'fdas', 1, 'fas', 'f', 'asfa', 'f', 'afs', '0'),
(13, 'asdf', 'asdf@sad', 3421, 1234, 'fdas', 1, 'fas', 'f', 'asfa', 'f', 'afs', '0'),
(14, 'ali', 'asd@asdf.com', 2154, 564, 'dsaf', 21, 'fads', 'fasdf', 'fasdf', 'fdasff', 'asdfa', '0');

-- --------------------------------------------------------

--
-- Table structure for table `referred`
--

CREATE TABLE `referred` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referreddetails`
--

CREATE TABLE `referreddetails` (
  `ID` int(11) NOT NULL,
  `ReferredID` int(11) NOT NULL,
  `ReceiverID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Typenum` int(11) NOT NULL,
  `isDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Email`, `Firstname`, `Lastname`, `Age`, `Typenum`, `isDeleted`) VALUES
(2, 'Ali', '123', '0', '', '', 25, 2, 1),
(3, '3ebs', '123', '0', '', '', 25, 2, 1),
(4, 'Abdelsalam', '123', 'test@test', 'mohamed', 'abdelsalam', 25, 2, 0),
(5, '3absalam', '123', '7', 'mark', 'nabil', 25, 2, 0),
(6, 'Tester1', '123', '7', 'mark', 'nabil', 25, 2, 0),
(7, 'mek1', '123', '0', 'aly', 'mek', 21, 2, 0),
(8, 'test2', '123', '123', '123', '123', 25, 2, 0),
(9, '1234', '12312', '123', '123', '123', 132, 2, 0),
(10, 'asdf', '123', 'asdf@asdf', '0123', 'adsf', 123, 2, 0),
(11, 'test', 'test', 'test@test', 'test', 'test', 21, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `Typename` varchar(100) NOT NULL,
  `Typenum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`Typename`, `Typenum`) VALUES
('User', 2),
('Admin', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD KEY `Typenum` (`Typenum`),
  ADD KEY `Links` (`Links`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Link` (`Link`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `referred`
--
ALTER TABLE `referred`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `referreddetails`
--
ALTER TABLE `referreddetails`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ReferredID` (`ReferredID`),
  ADD KEY `ReceiverID` (`ReceiverID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Typenum` (`Typenum`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`Typenum`),
  ADD KEY `Typenum` (`Typenum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `referreddetails`
--
ALTER TABLE `referreddetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`Typenum`) REFERENCES `usertype` (`Typenum`);

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_ibfk_1` FOREIGN KEY (`Link`) REFERENCES `links` (`Links`);

--
-- Constraints for table `referred`
--
ALTER TABLE `referred`
  ADD CONSTRAINT `referred_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `referreddetails`
--
ALTER TABLE `referreddetails`
  ADD CONSTRAINT `referreddetails_ibfk_1` FOREIGN KEY (`ReceiverID`) REFERENCES `receiver` (`ID`),
  ADD CONSTRAINT `referreddetails_ibfk_2` FOREIGN KEY (`ReferredID`) REFERENCES `referred` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Typenum`) REFERENCES `usertype` (`Typenum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
