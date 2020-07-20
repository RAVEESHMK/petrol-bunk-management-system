-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 09:18 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sales` (IN `startdate` DATE, IN `enddate` DATE)  select employeeid,machineid,salesdate,amount from sales where salesdate between startdate and enddate order by salesdate$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int(10) NOT NULL,
  `branchname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `branchname`, `email`, `phoneno`, `address`) VALUES
(2, 'rock', 'dpb@gmail.com', 789, 'bsk'),
(3, 'mirji', 'mirji@gmail.com', 852, 'ags'),
(8, 'bnmit', 'bnmit@gmail.com', 7259219339, 'monotype'),
(22, 'rns', 'rns@b.in', 75468953, 'rnsit'),
(56, 'RV', 'RV@GMAIL.COM', 7586941235, 'WHITEFIELD'),
(100, 'sbi', 'sbi@gmail.com', 7894561236, 'tumkur'),
(101, 'canara', '101@gmail.com', 7415286395, 'rr nagar'),
(102, 'syndicate', '102@g.in', 85964758, 'btm'),
(104, 'bms', '104@n.in', 526535, 'bms'),
(105, 'mvj', '105@g.in', 56985, 'mvj'),
(106, 'ksit', '106@g.n', 458569, 'ksit'),
(107, 'dsit', '107@g.in', 4586958, 'dsit'),
(109, 'gokula', '109@d.on', 9696969696, 'dollars colony'),
(110, 'manjunatah', '110@ds.in', 414141414, 'chickpete'),
(111, 'dsu', '111@sd.in', 8585858, 'dsu'),
(112, 'bit', '112@g.in', 525252525, 'bit'),
(113, 'dbit', '113@dbit.in', 45645696, 'dbit');

-- --------------------------------------------------------

--
-- Table structure for table `emplogin`
--

CREATE TABLE `emplogin` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emplogin`
--

INSERT INTO `emplogin` (`userid`, `username`, `time`) VALUES
('', '', '2019-11-10 05:55:57'),
('', '', '2019-11-10 05:55:57'),
('', '', '2019-11-10 05:55:57'),
('', '', '2019-11-10 05:55:57'),
('', '', '2019-11-10 05:55:57');

--
-- Triggers `emplogin`
--
DELIMITER $$
CREATE TRIGGER `session` AFTER INSERT ON `emplogin` FOR EACH ROW insert into emplogin values(userid,username,'inserted',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` varchar(10) NOT NULL,
  `branchid` int(10) NOT NULL,
  `employeename` varchar(25) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `salary` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `branchid`, `employeename`, `gender`, `dob`, `email`, `phoneno`, `address`, `salary`) VALUES
('100', 104, 'rajath', 'm', '01-04-1999', '100@bms.in', 74747474, 'bms', 10101010),
('101', 102, 'rajeev', 'f', '13-01-1992', '101@g.in', 656569, 'tumkur', 5252),
('104', 101, 'prashanth', 'o', '13-01-1999', '104@g.in', 585858, 'canara', 120000),
('105', 107, 'siddiq', 'o', '20-02-1999', '105@g.in', 858585, 'dsit', 252525),
('106', 56, 'suraj', 'm', '10-09-2011', '106@g.in', 699696, 'rv', 5269),
('107', 8, 'reddy', 'm', '09-09-1999', '107@gh.in', 858569, 'bnmit', 82828),
('110', 112, 'preetham', 'o', '09-09-1999', '110@g.in', 569858, 'bit', 25252),
('111', 102, 'prasad', 'm', '19-05-2002', '111@gmail.com', 256955, 'syndicate', 0),
('120', 110, 'shashank', 'm', '05-05-2005', '120@g.in', 6585858, 'mju', 252525),
('125', 101, 'rishabh', 'M', '2000-01-01', 'r@g.im', 858585858, 'rr nagar', 52525),
('131', 8, 'praveen', 'm', '01-01-2000', 'praveen@f.in', 25252525, 'bsk', 69585288),
('56', 8, 'rohit', 'M', '01-08-2001', 'rohit@gmail.com', 7259615332, 'bsk 3rd stage', 200000),
('8', 8, 'raveesh', 'M', '19-04-2000', 'ravi@gmail.com', 8073384010, 'bsk', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `employeelogin`
--

CREATE TABLE `employeelogin` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeelogin`
--

INSERT INTO `employeelogin` (`userid`, `username`, `password`) VALUES
('1', 'raveesh', '1'),
('12', '1', '1'),
('1BG17CS082', 'RAJU', '123'),
('2', '5', '2'),
('7', '7', '7'),
('79', 'RAVEESH', '79'),
('87', 'raju', '420');

--
-- Triggers `employeelogin`
--
DELIMITER $$
CREATE TRIGGER `insertlog` AFTER INSERT ON `employeelogin` FOR EACH ROW insert into logs values(NEW.userid,NEW.username,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`userid`, `username`, `time`) VALUES
('12', '1', '2019-11-10 06:19:38'),
('1BG17CS082', 'RAJU', '2019-11-11 08:08:59'),
('2', '5', '2019-11-10 06:00:11'),
('7', '7', '2019-11-10 06:25:05'),
('79', 'RAVEESH', '2019-11-10 11:39:10'),
('87', 'raju', '2019-11-11 09:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `machineid` int(10) NOT NULL,
  `company` varchar(20) NOT NULL,
  `fueltype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`machineid`, `company`, `fueltype`) VALUES
(4, 'Ll', 'GAS'),
(100, 'hp', 'PETROL'),
(101, 'dell', 'DIESEL'),
(103, 'lenovo', 'PETROL');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `employeeid` varchar(20) NOT NULL,
  `machineid` int(20) NOT NULL,
  `salesdate` date NOT NULL,
  `startreading` bigint(10) NOT NULL,
  `endreading` bigint(10) NOT NULL,
  `amount` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`employeeid`, `machineid`, `salesdate`, `startreading`, `endreading`, `amount`) VALUES
('101', 101, '2019-11-01', 100, 200, 1000),
('104', 101, '2019-11-05', 200, 300, 1000),
('105', 101, '2019-11-03', 200, 300, 2050);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierid`, `name`, `email`, `phoneno`, `address`) VALUES
(1, 'ROCK', 'ROCKY@GMAIL.COM', 7894561236, 'BSK'),
(2, 'RAVI', 'RAVI@GMAIL.COM', 852963741, 'MONOTYPE'),
(100, 'abc', 'abc@g.in', 85857477, 'abc'),
(102, 'def', 'def@g.in', 85896985, 'dfe'),
(103, 'ghe', 'ghe@g.in', 465955, 'ghe'),
(105, 'rhi', 'rhi@g.in', 2698, 'rhi'),
(110, 'kgf', '110@d.in', 569, 'kgf');

-- --------------------------------------------------------

--
-- Table structure for table `tanker`
--

CREATE TABLE `tanker` (
  `supplierid` int(10) NOT NULL,
  `vehicleno` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `tankercapacity` int(5) NOT NULL,
  `fueltype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanker`
--

INSERT INTO `tanker` (`supplierid`, `vehicleno`, `date`, `tankercapacity`, `fueltype`) VALUES
(102, 'KA062000', '2019-11-01', 200000, 'DIESEL'),
(103, 'KA011000', '2019-10-17', 6000, 'GAS'),
(103, 'KA062999', '2019-09-12', 5000, 'PETROL');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`userid`, `username`, `password`) VALUES
('1', 'RAVEESH.m.k', '123'),
('2', 'RAJU', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`),
  ADD KEY `branchid` (`branchid`);

--
-- Indexes for table `employeelogin`
--
ALTER TABLE `employeelogin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`machineid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`employeeid`),
  ADD KEY `machineid` (`machineid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierid`);

--
-- Indexes for table `tanker`
--
ALTER TABLE `tanker`
  ADD PRIMARY KEY (`supplierid`,`vehicleno`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`branchid`) REFERENCES `branch` (`branchid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`machineid`) REFERENCES `machine` (`machineid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`employeeid`) REFERENCES `employee` (`employeeid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tanker`
--
ALTER TABLE `tanker`
  ADD CONSTRAINT `tanker_ibfk_1` FOREIGN KEY (`supplierid`) REFERENCES `supplier` (`supplierid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
