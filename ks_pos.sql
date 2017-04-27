-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 08:15 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ks_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `cat_note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(100) NOT NULL,
  `emp_start_in` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_gender` varchar(10) NOT NULL,
  `emp_phone` varchar(100) NOT NULL,
  `emp_address` varchar(200) NOT NULL,
  `posi_id` int(11) NOT NULL,
  `emp_note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `ex_id` int(100) NOT NULL,
  `ex_rate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `tran_id` int(100) NOT NULL,
  `inv_no` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `deposit` varchar(100) NOT NULL,
  `sell_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `posi_id` int(100) NOT NULL,
  `posi_name` varchar(100) NOT NULL,
  `posi_note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(100) NOT NULL,
  `pro_code` varchar(200) DEFAULT NULL,
  `cat_id` int(100) DEFAULT NULL,
  `pro_name` varchar(200) NOT NULL,
  `pro_ref` varchar(200) NOT NULL,
  `pro_price` decimal(10,2) NOT NULL,
  `pro_cost` decimal(10,2) NOT NULL,
  `unit_id` int(100) NOT NULL,
  `pro_photo` varchar(200) DEFAULT NULL,
  `pro_note` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_in`
--

CREATE TABLE `stock_in` (
  `st_id` int(100) NOT NULL,
  `pro_id` int(100) NOT NULL,
  `st_amount` int(100) NOT NULL,
  `sup_id` int(100) NOT NULL,
  `emp_id` int(100) NOT NULL,
  `st_date` varchar(100) NOT NULL,
  `st_note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_minus`
--

CREATE TABLE `stock_minus` (
  `sm_id` int(100) NOT NULL,
  `code` varchar(150) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `old_qty` varchar(100) NOT NULL,
  `minus` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `emp_no` int(100) NOT NULL,
  `sup_id` int(100) NOT NULL,
  `sp_note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_out`
--

CREATE TABLE `stock_out` (
  `so_id` int(100) NOT NULL,
  `inv_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_plus`
--

CREATE TABLE `stock_plus` (
  `sp_id` int(100) NOT NULL,
  `code` varchar(150) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `old_qty` varchar(100) NOT NULL,
  `add_more` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `emp_no` int(100) NOT NULL,
  `sup_id` int(100) NOT NULL,
  `sp_note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(100) NOT NULL,
  `sup_name` varchar(200) DEFAULT NULL,
  `sup_contact` varchar(200) NOT NULL,
  `sup_phone` varchar(100) NOT NULL,
  `sup_address` varchar(100) NOT NULL,
  `sup_note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(100) NOT NULL,
  `unit_name` varchar(200) DEFAULT NULL,
  `unit_note` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `posi_id` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`posi_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `stock_in`
--
ALTER TABLE `stock_in`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `sup_id` (`sup_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD PRIMARY KEY (`so_id`),
  ADD KEY `inv_no` (`inv_no`);

--
-- Indexes for table `stock_plus`
--
ALTER TABLE `stock_plus`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `emp_no` (`emp_no`),
  ADD KEY `sup_id` (`sup_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `posi_id` (`posi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exchange`
--
ALTER TABLE `exchange`
  MODIFY `ex_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `tran_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `posi_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_in`
--
ALTER TABLE `stock_in`
  MODIFY `st_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_out`
--
ALTER TABLE `stock_out`
  MODIFY `so_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock_plus`
--
ALTER TABLE `stock_plus`
  MODIFY `sp_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
