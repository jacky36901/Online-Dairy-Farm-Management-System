-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2020 at 08:58 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairyshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`) VALUES
(8, 'Amul'),
(10, 'MilkMan'),
(9, 'Nestle'),
(11, 'Nido');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `num` int(11) NOT NULL,
  `t_amnt` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `pay_status` varchar(50) NOT NULL,
  `o_date` date NOT NULL,
  `place` varchar(50) NOT NULL,
  `del_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `buyer`, `p_id`, `p_name`, `brand`, `num`, `t_amnt`, `img`, `pay_status`, `o_date`, `place`, `del_status`) VALUES
(240, 'anil@gmail.com', 7, 'Amul butter', 'Amul', 1, 150, '../uploads/amulbuttor.jpg', 'credit', '0000-00-00', 'ernakulam', 'DELIVERED'),
(241, 'anil@gmail.com', 6, 'Amul Milk', 'Amul', 1, 25, '../uploads/amulmilk.jpg', 'cod', '0000-00-00', 'ernakulam', 'DELIVERED'),
(242, 'anil@gmail.com', 7, 'Amul butter', 'Amul', 1, 150, '../uploads/amulbuttor.jpg', 'credit', '0000-00-00', 'ernakulam', 'PENDING'),
(243, 'anil@gmail.com', 7, 'Amul butter', 'Amul', 1, 150, '../uploads/amulbuttor.jpg', 'cod', '0000-00-00', 'ernakulam', 'PENDING'),
(244, 'anil@gmail.com', 8, 'Amul Cheese', 'Amul', 1, 125, '../uploads/amulcheese.jpg', 'credit', '2020-11-11', 'ernakulam', 'PENDING'),
(245, 'anil@gmail.com', 11, 'Amul Milk Powder', 'Amul', 1, 150, '../uploads/mk.jpg', 'credit', '2020-11-18', 'ernakulam', 'PENDING'),
(246, 'anil@gmail.com', 7, 'Amul butter', 'Amul', 1, 150, '../uploads/amulbuttor.jpg', 'credit', '2020-11-10', 'ernakulam', 'PENDING'),
(247, 'anil@gmail.com', 7, 'Amul butter', 'Amul', 1, 150, '../uploads/amulbuttor.jpg', 'credit', '2020-11-04', 'ernakulam', 'PENDING'),
(248, 'anil@gmail.com', 8, 'Amul Cheese', 'Amul', 1, 125, '../uploads/amulcheese.jpg', 'credit', '2020-11-21', 'ernakulam', 'PENDING'),
(249, 'anil@gmail.com', 6, 'Amul Milk', 'Amul', 1, 30, '../uploads/amulmilk.jpg', 'credit', '2020-11-21', 'ernakulam', 'PENDING'),
(250, 'anil@gmail.com', 11, 'Amul Milk Powder', 'Amul', 1, 150, '../uploads/mk.jpg', 'credit', '2020-11-21', 'ernakulam', 'PENDING'),
(251, 'anil@gmail.com', 7, 'Amul butter', 'Amul', 1, 150, '../uploads/amulbuttor.jpg', 'credit', '2020-11-21', 'ernakulam', 'DELIVERED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(50) NOT NULL,
  `cat_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_type`) VALUES
(6, 'Milk'),
(7, 'Butter'),
(8, 'Cheese'),
(9, 'Ghee'),
(10, 'Ice cream');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `ret_id` int(50) NOT NULL,
  `ret_name` varchar(50) NOT NULL,
  `ret_dob` varchar(50) NOT NULL,
  `ret_street` varchar(50) NOT NULL,
  `ret_city` varchar(50) NOT NULL,
  `ret_district` varchar(50) NOT NULL,
  `ret_email` varchar(50) NOT NULL,
  `ret_ph` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`ret_id`, `ret_name`, `ret_dob`, `ret_street`, `ret_city`, `ret_district`, `ret_email`, `ret_ph`) VALUES
(7, 'Anil', '01/10/1980', 'kochin', 'kochin', 'ernakulam', 'anil@gmail.com', '9632587414'),
(8, 'Sweety', '01/01/1980', 'kochi', 'kochi', 'ernakulam', 'sweety@gmail.com', '9632587414');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fb_id` int(50) NOT NULL,
  `ret_name` varchar(50) NOT NULL,
  `fb_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fb_id`, `ret_name`, `fb_desc`) VALUES
(0, 'aa', 'its good'),
(1, 'shafi', 'its good'),
(2, 'Anil', 'good customer friendly');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `usertype`, `status`) VALUES
('aaa@gmail.com', 'Abcd1234', 'staff', '1'),
('admin', 'admin', 'admin', ''),
('anil@gmail.com', 'Anil1234', 'customer', '1'),
('au11@gmail.com', 'Abcd1234', 'staff', '1'),
('au@gmail.com', 'Abcd1234', 'staff', '1'),
('lee@gmail.com', 'Abcd1234', 'staff', '1'),
('sharon@gmail.com', 'staff', 'staff', ''),
('sweety@gmail.com', 'Sweety123', 'customer', '1'),
('tijo@gmail.com', 'Tijo1234', 'staff', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `item_id` int(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `item_img` varchar(50) NOT NULL,
  `item_dtls` varchar(50) NOT NULL,
  `dosage` varchar(50) NOT NULL,
  `amnt` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `vendor_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`item_id`, `item_name`, `brand`, `item_type`, `item_img`, `item_dtls`, `dosage`, `amnt`, `quantity`, `vendor_id`) VALUES
(6, 'Amul Milk', 'Amul', 'Milk', '../uploads/amulmilk.jpg', 'Amul Milk Thick in form ', '500g', '30', '45', '6'),
(7, 'Amul butter', 'Amul', 'Butter', '../uploads/amulbuttor.jpg', 'Amul butter Thick in form ', '500g', '150', '42', '6'),
(8, 'Amul Cheese', 'Amul', 'Cheese', '../uploads/amulcheese.jpg', 'Amul cheeseThick in form ', '500g', '125', '48', '6'),
(9, 'Amul ghee', 'Amul', 'Ghee', '../uploads/amulghee.jpg', 'Amul Yogurt Thick in form ', '500g', '150', '50', '6'),
(10, 'Amul Yogurt', 'Amul', 'Yogurt', '../uploads/amulyogurt.jpg', 'Amul Yogurt Thick in form ', '500g', '150', '50', '6'),
(11, 'Amul Milk Powder', 'Amul', 'Milk', '../uploads/mk.jpg', 'vvs', '500g', '150', '50', '1'),
(12, 'dfg', 'Amul', 'Milk', '../uploads/amul1.jpg', 'dfghd', 'dgfxdg', '120', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_child`
--

CREATE TABLE `tbl_purchase_child` (
  `pur_id` int(11) NOT NULL,
  `vendor_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_purchase_child`
--

INSERT INTO `tbl_purchase_child` (`pur_id`, `vendor_id`, `product_id`, `quantity`, `price`) VALUES
(3, '1', '11', '51', '150'),
(4, '1', '12', '10', '120');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_master`
--

CREATE TABLE `tbl_purchase_master` (
  `pur_id` int(50) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `vendor_cmpny` varchar(50) NOT NULL,
  `v_street` varchar(50) NOT NULL,
  `v_city` varchar(50) NOT NULL,
  `v_district` varchar(50) NOT NULL,
  `vendor_ph` bigint(10) NOT NULL,
  `vendor_email` varchar(50) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `jdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_purchase_master`
--

INSERT INTO `tbl_purchase_master` (`pur_id`, `vendor_name`, `vendor_cmpny`, `v_street`, `v_city`, `v_district`, `vendor_ph`, `vendor_email`, `pincode`, `jdate`) VALUES
(1, 'Manu Thomas', 'Amul', 'Palarivattom', 'kochin', 'Ernakulam', 9874757777, 'manu@gmail.com', '123456', '2020-11-21'),
(2, 'Keerthana  ', 'Nestle', 'Palarivattom', 'kochin', 'Ernakulam', 9874756121, 'keerthana@gmail.com', '123456', '2020-11-19'),
(3, 'Ramamurthy', 'MilkMan', 'Palarivattom', 'kochin', 'Ernakulam', 9874757777, 'milkman@gmail.com', '123456', '2020-11-19'),
(4, 'Manila Lal', 'Nido', 'Kochi', 'Kochi', 'Erankulam', 9847365889, 'manila@gmail.com', '546574', '2020-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(50) NOT NULL,
  `staff_fname` varchar(50) NOT NULL,
  `staff_lname` varchar(50) NOT NULL,
  `staff_dob` varchar(50) NOT NULL,
  `staff_doj` date NOT NULL,
  `staff_street` varchar(50) NOT NULL,
  `staff_city` varchar(50) NOT NULL,
  `staff_district` varchar(50) NOT NULL,
  `staff_gender` varchar(50) NOT NULL,
  `staff_ph` varchar(12) NOT NULL,
  `staff_email` varchar(50) NOT NULL,
  `housename` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_fname`, `staff_lname`, `staff_dob`, `staff_doj`, `staff_street`, `staff_city`, `staff_district`, `staff_gender`, `staff_ph`, `staff_email`, `housename`, `pincode`) VALUES
(2, 'sharon', 'jerald', '1997-02-04', '2019-08-16', 'kalamasery', 'kalamasery', 'ernakulam', '', '9865432180', 'sharon@gmail.com', '', ''),
(3, 'seetha', 'ram', '12/10/1995', '2020-11-23', 'kochin', 'kochin', 'ernakulam', 'female', '9847658745', 'seetha@gmail.com', '', ''),
(4, 'Tijo', 'Thomas', '04/10/1995', '2020-11-23', 'kochin', 'kochin', 'ernakulam', 'male', '9847658747', 'tijo@gmail.com', '', ''),
(7, 'leena', 'kia', '2006-01-02', '2020-11-25', 'Kochin ', 'Kochin ', 'ernakulam', 'female', '9856453449', 'lee@gmail.com', 'Kuthedeth', '546572');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD UNIQUE KEY `brand_name` (`brand_name`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`ret_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_purchase_child`
--
ALTER TABLE `tbl_purchase_child`
  ADD PRIMARY KEY (`pur_id`);

--
-- Indexes for table `tbl_purchase_master`
--
ALTER TABLE `tbl_purchase_master`
  ADD PRIMARY KEY (`pur_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `staff_id_3` (`staff_id`),
  ADD UNIQUE KEY `staff_email` (`staff_email`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `staff_id_2` (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `ret_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_purchase_child`
--
ALTER TABLE `tbl_purchase_child`
  MODIFY `pur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
