-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2017 at 05:25 PM
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
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(2, 'admin', '$2y$10$dT1hQ5wSB4vHP1vbh0SX/O4AA3duWd1Bj/D1cyCdFnZP/KHEkoCzm');

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
  `capacity` text NOT NULL,
  `ins_no` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `mileage` text NOT NULL,
  `air_bag` text NOT NULL,
  `gps` text NOT NULL,
  `reg_no` text NOT NULL,
  `expiry_month` text NOT NULL,
  `expiry_year` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `manu_year` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `company`, `fuel_type`, `capacity`, `ins_no`, `hire_cost`, `mileage`, `air_bag`, `gps`, `reg_no`, `expiry_month`, `expiry_year`, `status`, `seller_id`, `manu_year`, `image`) VALUES
(1, 'Mercedes Benz', '', '', '5', '', 20000, '0', '0', '0', '', '', '', 'Available', 0, '0', 'uploads/1512748242.jpg'),
(2, 'Range Rover', '', '', '6', '', 30000, '0', '0', '0', '', '', '', 'Available', 0, '0', NULL),
(3, 'Harrier', '', '', '6', '', 20000, '0', '0', '0', '', '', '', 'Available', 0, '0', NULL),
(5, 'LandCruiser V8', '', '', '5', '', 20000, '0', '0', '0', '', '', '', 'Available', 0, '0', NULL),
(6, 'Security Vehicles', '', '', '8', '', 30000, '0', '0', '0', '', '', '', 'Available', 0, '0', NULL),
(7, 'Wedding Limousine', '', '', '10', '', 50000, '0', '0', '0', '', '', '', 'Available', 0, '0', NULL),
(8, 'kk', '22', 'gas', 'k', 'kkk', 33, '33', 'yes', 'yes', '3222', 'jan', '2005', 'available', 3, '22lkll', NULL),
(9, 'k', '1', 'gas', 'kk', 'kk', 22, '222', 'yes', 'yes', '33', 'jan', '2005', 'no', 3, 'kk', NULL),
(10, 'mehran', 'suzuki', 'cng', '1234', '22222', 12345, '234', 'yes', 'yes', '3333', 'jan', '2005', 'available', 3, '2014', NULL),
(11, 'j', 'trej', 'gas', 'j', 'jj', 333, '0000', 'yes', 'yes', '09999', 'jan', '2005', 'available', 3, 'j', '1512749153.jpg'),
(12, 'k', 'kkk', 'gas', 'k', 'kk', 0, '00', 'yes', 'yes', '0', 'jan', '2005', 'available', 3, 'kk', 'uploads/1512749603.jpg'),
(13, 'k', 'kkk', 'gas', 'k', 'kk', 0, '00', 'yes', 'yes', '0', 'jan', '2005', 'available', 3, 'kk', 'uploads/1512749603.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `car_bookin`
--

CREATE TABLE `car_bookin` (
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `payment` varchar(10) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_bookin`
--

INSERT INTO `car_bookin` (`client_id`, `car_id`, `status`, `payment`, `hire_date`, `end_date`) VALUES
(1, 5, 'pending', 'not', NULL, NULL),
(2, 11, 'Approved', 'paid', NULL, NULL),
(7, 13, 'Pending', 'not', NULL, NULL),
(10, 7, 'Approved', 'not', NULL, NULL),
(10, 11, 'Approved', 'paid', NULL, NULL),
(10, 12, 'Approved', 'paid', NULL, NULL),
(10, 13, 'Pending', 'not', NULL, NULL),
(15, 2, 'approved', 'not', '2017-12-08', '2017-12-16');

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
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nic` text NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `fname`, `email`, `password`, `phone`, `city`, `gender`, `nic`, `remember_token`) VALUES
(2, 'felix kiamba', 'kiambafelix@yahoo.com', '30073147', '705053484', 'nairobi', 'Male', '', NULL),
(3, 'concepter', 'concybogita@gmail.com', '27695131', '707403614', 'kisii', 'Female', '', NULL),
(4, 'enock bosire', 'enock@gmail.com', '1234567', '717056766', 'narok', 'Male', '', NULL),
(5, 'pawan', 'k142173@nu.edu.pk', '22', '0', 'karachi', 'Male', '', NULL),
(6, 'kumar', 'khatri.catten22@gmail.com', '12345', '2147483647', 'karachi', 'Male', '', NULL),
(7, 'pawan', 'pawan@pawan.com', '12', '2147483647', 'karachi', 'Male', '', NULL),
(8, 'nothing', 'nothing@nu.edu.pk', '12', '0', 'aads', 'Male', '', NULL),
(9, 'karan', 'karan@nu.edu.pk', '12', '2147483647', 'abtabad', 'Male', '', NULL),
(10, 'buyer1', 'buyer@nu.edu.pk', '12', '2147483647', 'karachi', 'Male', '', NULL),
(11, 'ff', 'ddd', 'ddd', '1234', 'fdfd', 'male', 'dd', NULL),
(13, 'shayan', 'shayan@shayan.com', '$2y$10$DjcjnztbQqQqtaNXKKcIjutGtJFtQQAlXtNyvvPGcBEz0crIfQoSa', '3434', 'karachi', 'Male', '123456', NULL),
(14, 'taha', 'taha@taha.com', '$2y$10$y.q1fzVkwJf.x4z/vCM7m.HtJSBB23adoK3IkPuO32IMLHe/PfXTC', '1235', 'karahci', 'Male', '124', NULL),
(15, 'zilehuda', 'zilehuda@gmail.com', '$2y$10$mmQeA8fKtHnS4IwEgOM6r.Y6MqImtsQAmH.wmYef6M7GGdvApaZX.', '12345', 'karachi', 'male', '12345', 'qTGDyJiHMGqzxz6Uf0XTteT5TcHyBKNTHTWoscdWOtC9IOpjht6z1ojpG9gD'),
(22, 'umer', 'umer@umer.com', '$2y$10$dVkfm96.0jfalXhKBfz2vuv1BbuARO2slsR3.jnPKW2PIsGErh.j.', '12345675432', 'karachi', 'Male', '11111111111112', NULL);

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
  `phone` text NOT NULL,
  `city` text NOT NULL,
  `nic` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `fname`, `gender`, `email`, `phone`, `city`, `nic`, `password`) VALUES
(1, 'pawan', 'Male', 'khatri.pawan22@yahoo.com', '2147483647', '', '', ''),
(2, 'nothing', 'Male', 'noth@nu.edu.pk', '2147483647', '', '', ''),
(3, 'zilehuda', 'male', 'zilehuda@gmail.com', '12345', 'karachi', '12345', '$2y$10$BBHB31MjL93SMs1PC1Yo8OU0T67LJAG63noq9G3mf4IUGHxqXQbL.'),
(5, 'ffkk', 'Male', 'zilehuda@gmail.com', '45454', 'karachi', '45454', '$2y$10$1S5yIs..tUkLXYIxuQbjOO/Kt.cNuj6gtYYlz1Oe4ydZ.jyI2OEM.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `caradd`
--
ALTER TABLE `caradd`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
