-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2017 at 02:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `caradd`
--

CREATE TABLE `caradd` (
  `seller_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `ccompany` varchar(250) NOT NULL,
  `cmodel` varchar(250) NOT NULL,
  `cfeul` varchar(250) NOT NULL,
  `ccondition` varchar(250) NOT NULL,
  `ctype` varchar(250) NOT NULL,
  `cseats` varchar(250) NOT NULL,
  `cyears` varchar(250) NOT NULL,
  `ccolor` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `cimage` varchar(250) NOT NULL,
  `price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caradd`
--

INSERT INTO `caradd` (`seller_id`, `car_id`, `cname`, `ccompany`, `cmodel`, `cfeul`, `ccondition`, `ctype`, `cseats`, `cyears`, `ccolor`, `status`, `cimage`, `price`) VALUES
(2, 11, 'mehran22', 'no', 'nn', 'nn', 'nnn', 'nnn', '5', '2017-12', '#563d7c', 'Approved', 'mehran22.jpg', 200),
(1, 12, 'mehran1', 'Toyata', 'New', 'Old', 'Good', 'bad ', '6', '2016-12', '#563d7c', 'Approved', 'mehran1.jpg', 300),
(1, 13, 'mehran3', 'toyata', 'new model', 'old', 'best', 'new', '5', '2016-12', '#563d7c', 'Approved', 'mehran3.jpg', 150),
(1, 14, 'mehran4', 'Toyata', 'Model2015', 'Good', 'Nice', 'bad', '5', '2017-12', '#563d7c', 'Approved', 'mehran4.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `company` text NOT NULL,
  `fuel_type` text NOT NULL,
  `capacity` int(11) NOT NULL,
  `chasis_no` int(11) NOT NULL,
  `ins_no` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `mileage` int(11) NOT NULL,
  `air_bag` tinyint(1) NOT NULL,
  `gps` tinyint(1) NOT NULL,
  `reg_no` text NOT NULL,
  `expiry_month` text NOT NULL,
  `expiry_year` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `manu_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `company`, `fuel_type`, `capacity`, `chasis_no`, `ins_no`, `hire_cost`, `mileage`, `air_bag`, `gps`, `reg_no`, `expiry_month`, `expiry_year`, `status`, `seller_id`, `manu_year`) VALUES
(1, 'Mercedes Benz', '', '', 5, 0, '', 20000, 0, 0, 0, '', '', '', 'Available', 0, 0),
(2, 'Range Rover', '', '', 6, 0, '', 30000, 0, 0, 0, '', '', '', 'Available', 0, 0),
(3, 'Harrier', '', '', 6, 0, '', 20000, 0, 0, 0, '', '', '', 'Available', 0, 0),
(5, 'LandCruiser V8', '', '', 5, 0, '', 20000, 0, 0, 0, '', '', '', 'Available', 0, 0),
(6, 'Security Vehicles', '', '', 8, 0, '', 30000, 0, 0, 0, '', '', '', 'Available', 0, 0),
(7, 'Wedding Limousine', '', '', 10, 0, '', 50000, 0, 0, 0, '', '', '', 'Available', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `car_bookin`
--

CREATE TABLE `car_bookin` (
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `payment` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_bookin`
--

INSERT INTO `car_bookin` (`client_id`, `car_id`, `status`, `payment`) VALUES
(2, 11, 'Approved', 'paid'),
(7, 13, 'Pending', 'not'),
(10, 7, 'Approved', 'not'),
(10, 11, 'Approved', 'paid'),
(10, 12, 'Approved', 'paid'),
(10, 13, 'Pending', 'not');

-- --------------------------------------------------------

--
-- Table structure for table `car_images`
--

CREATE TABLE `car_images` (
  `car_id` int(11) NOT NULL,
  `car_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` text NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `pwd`, `phone`, `city`, `gender`, `nic`) VALUES
(2, 'felix kiamba', 'kiambafelix@yahoo.com', '30073147', 705053484, 'nairobi', 'Male', ''),
(3, 'concepter', 'concybogita@gmail.com', '27695131', 707403614, 'kisii', 'Female', ''),
(4, 'enock bosire', 'enock@gmail.com', '1234567', 717056766, 'narok', 'Male', ''),
(5, 'pawan', 'k142173@nu.edu.pk', '22', 0, 'karachi', 'Male', ''),
(6, 'kumar', 'khatri.catten22@gmail.com', '12345', 2147483647, 'karachi', 'Male', ''),
(7, 'pawan', 'pawan@pawan.com', '12', 2147483647, 'karachi', 'Male', ''),
(8, 'nothing', 'nothing@nu.edu.pk', '12', 0, 'aads', 'Male', ''),
(9, 'karan', 'karan@nu.edu.pk', '12', 2147483647, 'abtabad', 'Male', ''),
(10, 'buyer1', 'buyer@nu.edu.pk', '12', 2147483647, 'karachi', 'Male', ''),
(11, 'ff', 'ddd', 'ddd', 1234, 'fdfd', 'male', 'dd'),
(12, 'zilehuda', 'zilehuda.tariq@gmail.com', '12345', 123456, 'karachi', 'Male', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `client_id`, `message`, `status`, `time`) VALUES
(3, 0, 'Thanks for that..OK?', 'Unread', '0000-00-00 00:00:00'),
(5, 0, 'I love this. It worked the way i want...', 'Unread', '2015-08-04 21:45:33'),
(6, 0, 'i have alot of issues with it', 'Unread', '2017-05-23 12:57:36'),
(7, 0, 'asdsad', 'Unread', '2017-05-23 13:02:54'),
(8, 0, 'i can live with this car', 'Unread', '2017-05-24 03:34:06'),
(9, 0, 'so whjatas sdsd', 'Unread', '2017-05-24 03:36:48'),
(10, 2, 'so whjatas sdsd', 'Unread', '2017-05-24 03:38:52'),
(11, 2, 'asdad adss ada d', 'Unread', '2017-05-24 03:39:13'),
(12, 2, 'hello dears frim sekker', 'Unread', '2017-05-24 03:58:31'),
(13, 10, 'asdasdad asdsa', 'Unread', '2017-05-24 04:23:56'),
(14, 10, 'i am buyer', 'Unread', '2017-05-24 04:24:56'),
(15, 10, 'kkadnakd akd akd ', 'Unread', '2017-05-24 04:46:07'),
(16, 1, 'i am best seller', 'Unread', '2017-05-24 04:48:25'),
(17, 1, 'approve my cars', 'Unread', '2017-05-24 04:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `car_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `price` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`car_id`, `client_id`, `price`) VALUES
(11, 2, 200);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `reply` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`msg_id`, `client_id`, `reply`) VALUES
(11, 2, 'yes we will do it for u'),
(14, 10, 'hello dear will u help me'),
(15, 10, 'ajdnaksd ad ad'),
(16, 1, 'yes you are'),
(17, 1, 'ok i will ');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` text NOT NULL,
  `nic` text NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `fname`, `gender`, `email`, `phone`, `city`, `nic`, `pwd`) VALUES
(1, 'pawan', 'Male', 'khatri.pawan22@yahoo.com', 2147483647, '', '', ''),
(2, 'nothing', 'Male', 'noth@nu.edu.pk', 2147483647, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `caradd`
--
ALTER TABLE `caradd`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `car_bookin`
--
ALTER TABLE `car_bookin`
  ADD PRIMARY KEY (`client_id`,`car_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`car_id`,`client_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`msg_id`,`client_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `caradd`
--
ALTER TABLE `caradd`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
