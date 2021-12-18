-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2021 at 08:32 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `original_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin', '123'),
(2, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cno` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `expmonth` int(11) NOT NULL,
  `expyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `payment_id`, `cname`, `cno`, `cvv`, `expmonth`, `expyear`) VALUES
(1, 410489, 'PRV Solutions', '123123123123', '123', 4, 2024),
(2, 321815, 'Naveen', '13212312312', '123', 3, 2023),
(3, 448970, 'PRV Solutions', '123123123123', '123', 3, 2022),
(4, 410489, 'PRV Solutions', '123123123123', '123', 4, 2024),
(5, 410489, 'PRV Solutions', '123123123123', '123', 4, 2024),
(6, 410489, 'PRV Solutions', '123123123123', '123', 4, 2024),
(11, 410489, 'PRV Solutions', '123123123123', '123', 4, 2024),
(12, 410489, 'PRV Solutions', '123123123123', '123', 4, 2024);

--
-- Triggers `card`
--
DELIMITER $$
CREATE TRIGGER `after_payment_details` AFTER INSERT ON `card` FOR EACH ROW BEGIN 
INSERT INTO `payments` (payment_id,amount) VALUES (new.payment_id,100); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `pass`, `status`) VALUES
(1, 'sam', 'sam@gmail.com', '8989898989', '123', 'Active'),
(2, 'Ravi Babu Nadakuditi', 'ravi.nadakuditi@gmail.com', '08790604717', '123', 'Active'),
(3, 'test', 'test@gmail.com', '123', '123', 'Active');

-- --------------------------------------------------------

--
-- Stand-in structure for view `customerorderslist`
-- (See below for the actual view)
--
CREATE TABLE `customerorderslist` (
`oid` int(11)
,`name` varchar(100)
,`email` varchar(100)
,`phone` varchar(12)
,`brand` varchar(100)
,`price` varchar(100)
,`status` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `email`, `name`, `brand`, `price`, `status`, `payment_id`) VALUES
(1, 'sam@gmail.com', 'Macbook pro', 'Apple', '1200', 'Order Placed', 123123),
(2, 'sam@gmail.com', 'Macbook pro', 'Apple', '1200', 'Order Placed', 321245),
(3, 'sai@gmail.com', 'Macbook pro', 'Apple', '1200', 'Order Placed', 423566),
(4, 'sai@gmail.com', 'Dell Gaming Laptop', 'Sony', '2000', 'Order Placed', 562680),
(5, 'sai@gmail.com', 'Sony vio', 'Sony', '300', 'Order Placed', 410489),
(6, 'sai@gmail.com', 'dell', 'Sony', '300', 'Order Placed', 321815),
(7, 'sai@gmail.com', 'Macbook pro', 'Apple', '1200', 'Order Placed', 448970);

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderslist`
-- (See below for the actual view)
--
CREATE TABLE `orderslist` (
`oid` int(11)
,`email` varchar(100)
,`name` varchar(100)
,`brand` varchar(100)
,`price` varchar(100)
,`status` varchar(100)
,`payment_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `paymentdetails`
-- (See below for the actual view)
--
CREATE TABLE `paymentdetails` (
`oid` int(11)
,`email` varchar(100)
,`brand` varchar(100)
,`price` varchar(100)
,`payment_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pid` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pid`, `payment_id`, `amount`) VALUES
(1, 410489, 200),
(2, 410489, 100);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `price`, `pic`) VALUES
(15, 'Dell Gaming Laptop', 'Sony', 2000, 'images/laptop.png'),
(16, 'Macbook pro', 'Apple', 1200, 'images/laptop.png'),
(18, 'Sony vio', 'Sony', 300, 'images/laptop.png'),
(20, 'Imac', 'Apple', 4000, 'images/imac.png'),
(24, 'Dell', 'Dell', 200, 'images/dell.png');

-- --------------------------------------------------------

--
-- Structure for view `customerorderslist`
--
DROP TABLE IF EXISTS `customerorderslist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`pmlb7zt8mr4x`@`localhost` SQL SECURITY DEFINER VIEW `customerorderslist`  AS  select `orders`.`oid` AS `oid`,`customer`.`name` AS `name`,`customer`.`email` AS `email`,`customer`.`phone` AS `phone`,`orders`.`brand` AS `brand`,`orders`.`price` AS `price`,`orders`.`status` AS `status` from (`orders` join `customer` on((`orders`.`email` = `customer`.`email`))) ;

-- --------------------------------------------------------

--
-- Structure for view `orderslist`
--
DROP TABLE IF EXISTS `orderslist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`pmlb7zt8mr4x`@`localhost` SQL SECURITY DEFINER VIEW `orderslist`  AS  select `orders`.`oid` AS `oid`,`orders`.`email` AS `email`,`orders`.`name` AS `name`,`orders`.`brand` AS `brand`,`orders`.`price` AS `price`,`orders`.`status` AS `status`,`orders`.`payment_id` AS `payment_id` from `orders` ;

-- --------------------------------------------------------

--
-- Structure for view `paymentdetails`
--
DROP TABLE IF EXISTS `paymentdetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`pmlb7zt8mr4x`@`localhost` SQL SECURITY DEFINER VIEW `paymentdetails`  AS  select `orders`.`oid` AS `oid`,`orders`.`email` AS `email`,`orders`.`brand` AS `brand`,`orders`.`price` AS `price`,`orders`.`payment_id` AS `payment_id` from (`orders` join `card` on((`orders`.`payment_id` = `card`.`payment_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
