-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 09:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `student_auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `product_id`, `message`, `user_id`, `date`, `time`) VALUES
(1, 2, 'sdfsdfasd', 3, '2018-05-12', '04:21 PM'),
(2, 1, 'dsfafs', 3, '2018-05-12', '04:21 PM'),
(3, 1, 'aDSAD', 5, '2018-05-12', '04:23 PM'),
(4, 1, 'sfsdfasd', 3, '2018-05-12', '04:24 PM'),
(5, 1, 'sfsafsdf', 3, '2018-05-12', '04:24 PM'),
(6, 1, 'sddasada', 3, '2018-05-12', '04:24 PM'),
(7, 1, 'afsdsdf\r\n', 3, '2018-05-12', '06:21 PM'),
(8, 1, 'dfsadfsad', 3, '2018-05-12', '06:24 PM'),
(9, 1, 'i m shahid husen from dhule .  i will take about in 1 laks only', 3, '2018-05-12', '06:34 PM'),
(10, 1, 'ok done dost', 1, '2018-05-12', '06:35 PM'),
(11, 2, '10000 only \r\n', 3, '2018-05-12', '07:51 PM'),
(12, 3, '1000000 only', 3, '2018-05-12', '07:52 PM'),
(13, 1, 'Yes sir', 6, '2021-02-10', '04:46 PM'),
(14, 2, 'yes sir\r\n', 6, '2021-02-10', '04:49 PM'),
(15, 2, '12000', 1, '2021-02-10', '05:02 PM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `subject`, `mobile`, `message`, `date`, `time`) VALUES
(2, 'fasdf', 'sadfas', 'asdf', 'asdf', 'asdf', '', ''),
(3, 'fasdf', 'sadfas', 'asdf', 'asdf', 'asdf', '2018-05-12', '06:48 PM');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `pdate` varchar(10) NOT NULL DEFAULT 'empty',
  `ptime` varchar(10) NOT NULL DEFAULT 'empty',
  `price` float NOT NULL,
  `description` text NOT NULL,
  `seller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `product_name`, `date`, `time`, `pdate`, `ptime`, `price`, `description`, `seller_id`, `user_id`, `img`) VALUES
(1, 'bangla with smarth construction with garden', '2018-05-12', '01:08 PM', 'empty', 'empty', 200000, '\"Features:High Precision Strain Gauge Sensor SystemMax Capacity 180 kgGraduation 100gmLcd Display Size 75*34 MM with White BacklightTwo Ã¢â‚¬Å“AAAÃ¢â‚¬Â Battery IncludedAuto onAuto Zero & Auto offLow Battery IndicationStron ABS Plastic Platform Size 31*31*2.8 CM\"\r\nWhen a bid price on a particular product reaches to the INR 20 then no new manual bidders or new bid boss by the first time bid placing user will be accpeted. Those users who are placing bids from the time before it reaches at 20 Rs. can only continue placing coins. No new user can be able to place any manual coins or book any bidboss in the case.', 1, 0, '2924g2.jpg'),
(2, 'smarth constructed Building with garden', '2018-05-12', '01:33 PM', 'empty', 'empty', 500000, '\"Features:High Precision Strain Gauge Sensor SystemMax Capacity 180 kgGraduation 100gmLcd Display Size 75*34 MM with White BacklightTwo Ã¢â‚¬Å“AAAÃ¢â‚¬Â Battery IncludedAuto onAuto Zero & Auto offLow Battery IndicationStron ABS Plastic Platform Size 31*31*2.8 CM\" When a bid price on a particular product reaches to the INR 20 then no new manual bidders or new bid boss by the first time bid placing user will be accpeted. Those users who are placing bids from the time before it reaches at 20 Rs. can only continue placing coins. No new user can be able to place any manual coins or book any bidboss in the case.	', 1, 0, '8182g5.jpg'),
(3, 'Guest House for good look with garden', '2018-05-12', '01:36 PM', 'empty', 'empty', 1000000, '\"Features:High Precision Strain Gauge Sensor SystemMax Capacity 180 kgGraduation 100gmLcd Display Size 75*34 MM with White BacklightTwo Ã¢â‚¬Å“AAAÃ¢â‚¬Â Battery IncludedAuto onAuto Zero & Auto offLow Battery IndicationStron ABS Plastic Platform Size 31*31*2.8 CM\" When a bid price on a particular product reaches to the INR 20 then no new manual bidders or new bid boss by the first time bid placing user will be accpeted. Those users who are placing bids from the time before it reaches at 20 Rs. can only continue placing coins. No new user can be able to place any manual coins or book any bidboss in the case.	', 1, 0, '9672g6.jpg'),
(5, 'Audi Red Car 2016 Model', '2018-05-12', '07:58 PM', 'empty', 'empty', 20000, 'this car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Modelthis car model is Audi Red Car 2016 Model', 2, 0, '5814audi.jpg'),
(6, 'indica black color 2014 model', '2018-05-12', '07:59 PM', 'empty', 'empty', 3900000, 'indica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 model', 1, 0, '9094car2.jpg'),
(7, 'scarpio silver color 2012 model', '2018-05-12', '08:00 PM', '2021-02-10', '05:37 PM', 766433, 'indica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 modelindica black color 2014 model', 2, 6, '5231scarpio.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `img` varchar(200) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`ID`, `name`, `mobile`, `email`, `city`, `address`, `img`) VALUES
(2, 'arshuddin', '9226926292', 'arshad@gmail.com', 'dhule', 'dhule, dhule', '4456g7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL DEFAULT 'NONE',
  `email` varchar(50) NOT NULL DEFAULT 'None',
  `mobile` varchar(14) NOT NULL DEFAULT 'None',
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'user',
  `img` varchar(100) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `user_name`, `email`, `mobile`, `password`, `type`, `img`) VALUES
(1, 'Auction Admin', 'admin@gmail.com', '9226926292', 'admin', 'admin', 'user.png'),
(3, 'shahid husen', 'logicunion17@gmail.com', '9226926292', '123456', 'user', '8780passport.jpg'),
(4, 'admin', 'logicunion17343@gmail.com', '9226926292', 'admin', 'user', 'user.png'),
(5, 'admin', 'logicunion12347@gmail.com', '9226926292', 'admin', 'user', 'user.png'),
(6, 'Arshad', 'arshuddin.shaikh9898@gmail.com', '8855871113', 'arshuddin', 'user', 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

