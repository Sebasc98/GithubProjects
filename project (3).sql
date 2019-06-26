-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 11:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `activationcode`
--

CREATE TABLE `activationcode` (
  `Activationcodeid` int(11) NOT NULL,
  `Code` varchar(11) NOT NULL,
  `Organisationid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activationcode`
--

INSERT INTO `activationcode` (`Activationcodeid`, `Code`, `Organisationid`) VALUES
(1, '12345678', 1),
(2, '11112222', 2);

-- --------------------------------------------------------

--
-- Table structure for table `adres`
--

CREATE TABLE `adres` (
  `Addressid` int(11) NOT NULL,
  `Street` varchar(200) NOT NULL,
  `Housenumber` int(11) NOT NULL,
  `Zipcode` varchar(45) NOT NULL,
  `CITY` varchar(100) NOT NULL,
  `User_Userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adres`
--

INSERT INTO `adres` (`Addressid`, `Street`, `Housenumber`, `Zipcode`, `CITY`, `User_Userid`) VALUES
(1, 'Pepermuntstraat', 22, '3544XX', 'Utrecht', 1),
(2, 'Korianderstraat', 11, '3544XX', 'Utrecht', 2),
(3, 'Winterkerststraat', 44, '3544XX', 'Utrecht', 3),
(22, 'Voorstraat', 32, '3555 JK', 'Utrecht', 18);

-- --------------------------------------------------------

--
-- Table structure for table `bestand`
--

CREATE TABLE `bestand` (
  `Fileid` int(11) NOT NULL,
  `Filename` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `User_Userid` int(11) NOT NULL,
  `User_Client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bestand`
--

INSERT INTO `bestand` (`Fileid`, `Filename`, `Description`, `User_Userid`, `User_Client`) VALUES
(1, 'Sebas', 'Bestand over de misdaden van sebas', 3, 1),
(2, 'SebasInkomen', 'Dit gaat over de inkomens van sebas', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inlog`
--

CREATE TABLE `inlog` (
  `Loginid` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Wachtwoord` varchar(100) NOT NULL,
  `Activationcode_Activationcodeid` int(11) DEFAULT NULL,
  `Userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inlog`
--

INSERT INTO `inlog` (`Loginid`, `Username`, `Wachtwoord`, `Activationcode_Activationcodeid`, `Userid`) VALUES
(1, 'SebasC98', 'Password!', 1, 1),
(2, 'Bass', 'Ikhebhonger', 2, 2),
(3, 'DirkK', 'DirkK!', 2, 3),
(12, 'BigBen', 'Imbig', 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `joboffer`
--

CREATE TABLE `joboffer` (
  `Jobofferid` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Createdate` date NOT NULL,
  `User_Userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `Organisationid` int(11) NOT NULL,
  `Organisationname` varchar(250) NOT NULL,
  `Sector` varchar(250) DEFAULT NULL,
  `Email` varchar(250) NOT NULL,
  `Phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`Organisationid`, `Organisationname`, `Sector`, `Email`, `Phone`) VALUES
(1, 'Exodus', 'Zorg', 'Exodus@hotmail.com', '0678905432'),
(2, 'Gemeente Utrecht', 'Justitie', 'Gu@hotmail.com', '0654323456');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE `relationship` (
  `Relationshipid` int(11) NOT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `User_Userid1` int(11) NOT NULL,
  `User_Userid2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `relationship`
--

INSERT INTO `relationship` (`Relationshipid`, `Type`, `User_Userid1`, `User_Userid2`) VALUES
(1, 'Coach', 2, 1),
(2, 'Client', 1, 2),
(3, 'Colleague', 2, 3),
(4, 'Colleague', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Statusid` int(11) NOT NULL,
  `ID` tinyint(4) NOT NULL,
  `Housing` tinyint(4) NOT NULL,
  `Income` tinyint(4) NOT NULL,
  `Healthcare` tinyint(4) NOT NULL,
  `Debtcontrol` tinyint(4) NOT NULL,
  `User_Userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Statusid`, `ID`, `Housing`, `Income`, `Healthcare`, `Debtcontrol`, `User_Userid`) VALUES
(1, 1, 1, 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Ticketid` int(11) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `ReceiverID` int(11) NOT NULL,
  `Priority` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Created at` date DEFAULT NULL,
  `Updated at` date DEFAULT NULL,
  `User_Userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`Ticketid`, `Subject`, `Message`, `ReceiverID`, `Priority`, `Status`, `Created at`, `Updated at`, `User_Userid`) VALUES
(1, 'Test', 'Dit is een test', 2, 'High', 'Open', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Userid` int(11) NOT NULL,
  `Firstname` varchar(200) NOT NULL,
  `Lastname` varchar(200) NOT NULL,
  `Tussenvoegsel` varchar(100) DEFAULT NULL,
  `Initialen` varchar(100) DEFAULT NULL,
  `DateOfBirth` date NOT NULL,
  `Email` varchar(250) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `Access` enum('Client','Coach','Reclassering','Overig') NOT NULL,
  `Business_reg_num` int(11) DEFAULT NULL,
  `Job duties` varchar(250) DEFAULT NULL,
  `Department` varchar(250) DEFAULT NULL,
  `Notitie` varchar(250) DEFAULT NULL,
  `IDcard` int(11) DEFAULT NULL,
  `Expiredate` date DEFAULT NULL,
  `Captive` tinyint(4) DEFAULT NULL,
  `Organisation_Organisationid` int(11) DEFAULT NULL,
  `Risk` enum('Very low','Low','Medium','High','Very high') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `Firstname`, `Lastname`, `Tussenvoegsel`, `Initialen`, `DateOfBirth`, `Email`, `phone`, `Access`, `Business_reg_num`, `Job duties`, `Department`, `Notitie`, `IDcard`, `Expiredate`, `Captive`, `Organisation_Organisationid`, `Risk`) VALUES
(1, 'Sebastiaan', 'Cales', NULL, NULL, '1998-09-12', 's.t.cales@students.uu.nl', '0646760391', 'Coach', NULL, NULL, NULL, NULL, 1234, '2019-09-12', 0, NULL, 'Very high'),
(2, 'Bas', 'Vink', NULL, NULL, '1988-06-06', 'random@live.nl', '0612345678', 'Client', NULL, 'Begeleiding', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(3, 'Dirk', 'Koek', NULL, NULL, '1960-07-14', 'DirkK@hotmail.com', '0644445555', 'Reclassering', NULL, 'Registratie', 'Administratie', '3 jaar', NULL, NULL, NULL, NULL, NULL),
(18, 'Ben', 'Ko', '', 'B', '1965-07-12', 'Ben@live.nl', '0674843219', 'Reclassering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activationcode`
--
ALTER TABLE `activationcode`
  ADD PRIMARY KEY (`Activationcodeid`),
  ADD UNIQUE KEY `Code_UNIQUE` (`Code`),
  ADD KEY `Organisationid` (`Organisationid`);

--
-- Indexes for table `adres`
--
ALTER TABLE `adres`
  ADD PRIMARY KEY (`Addressid`,`User_Userid`),
  ADD KEY `fk_Address_User1_idx` (`User_Userid`);

--
-- Indexes for table `bestand`
--
ALTER TABLE `bestand`
  ADD PRIMARY KEY (`Fileid`,`User_Userid`,`User_Client`),
  ADD KEY `fk_File_User1_idx` (`User_Userid`),
  ADD KEY `fk_File_User2_idx` (`User_Client`);

--
-- Indexes for table `inlog`
--
ALTER TABLE `inlog`
  ADD PRIMARY KEY (`Loginid`) USING BTREE,
  ADD UNIQUE KEY `Username_UNIQUE` (`Username`),
  ADD KEY `fk_Login_Activationcode_idx` (`Activationcode_Activationcodeid`),
  ADD KEY `fk_Login_User1_idx` (`Userid`);

--
-- Indexes for table `joboffer`
--
ALTER TABLE `joboffer`
  ADD PRIMARY KEY (`Jobofferid`,`User_Userid`),
  ADD KEY `fk_Joboffer_User1_idx` (`User_Userid`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`Organisationid`);

--
-- Indexes for table `relationship`
--
ALTER TABLE `relationship`
  ADD PRIMARY KEY (`Relationshipid`,`User_Userid1`,`User_Userid2`),
  ADD KEY `fk_Relationship_User1_idx` (`User_Userid1`),
  ADD KEY `fk_Relationship_User2_idx` (`User_Userid2`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Statusid`),
  ADD KEY `fk_Status_User1_idx` (`User_Userid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Ticketid`,`User_Userid`),
  ADD KEY `fk_Ticket_User1_idx` (`User_Userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`),
  ADD UNIQUE KEY `Phone_UNIQUE` (`phone`),
  ADD UNIQUE KEY `IDcard_UNIQUE` (`IDcard`),
  ADD KEY `fk_User_Organisation1_idx` (`Organisation_Organisationid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activationcode`
--
ALTER TABLE `activationcode`
  MODIFY `Activationcodeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adres`
--
ALTER TABLE `adres`
  MODIFY `Addressid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `bestand`
--
ALTER TABLE `bestand`
  MODIFY `Fileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inlog`
--
ALTER TABLE `inlog`
  MODIFY `Loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `joboffer`
--
ALTER TABLE `joboffer`
  MODIFY `Jobofferid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `Organisationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `relationship`
--
ALTER TABLE `relationship`
  MODIFY `Relationshipid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Ticketid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adres`
--
ALTER TABLE `adres`
  ADD CONSTRAINT `fk_Address_User1` FOREIGN KEY (`User_Userid`) REFERENCES `user` (`Userid`);

--
-- Constraints for table `bestand`
--
ALTER TABLE `bestand`
  ADD CONSTRAINT `fk_File_User1` FOREIGN KEY (`User_Userid`) REFERENCES `user` (`Userid`),
  ADD CONSTRAINT `fk_File_User2` FOREIGN KEY (`User_Client`) REFERENCES `user` (`Userid`);

--
-- Constraints for table `inlog`
--
ALTER TABLE `inlog`
  ADD CONSTRAINT `fk_Login_Activationcode` FOREIGN KEY (`Activationcode_Activationcodeid`) REFERENCES `activationcode` (`Activationcodeid`);

--
-- Constraints for table `joboffer`
--
ALTER TABLE `joboffer`
  ADD CONSTRAINT `fk_Joboffer_User1` FOREIGN KEY (`User_Userid`) REFERENCES `user` (`Userid`);

--
-- Constraints for table `relationship`
--
ALTER TABLE `relationship`
  ADD CONSTRAINT `fk_Relationship_User1` FOREIGN KEY (`User_Userid1`) REFERENCES `user` (`Userid`),
  ADD CONSTRAINT `fk_Relationship_User2` FOREIGN KEY (`User_Userid2`) REFERENCES `user` (`Userid`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `fk_Status_User1` FOREIGN KEY (`User_Userid`) REFERENCES `user` (`Userid`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_Ticket_User1` FOREIGN KEY (`User_Userid`) REFERENCES `user` (`Userid`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_Organisation1` FOREIGN KEY (`Organisation_Organisationid`) REFERENCES `organisation` (`Organisationid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
