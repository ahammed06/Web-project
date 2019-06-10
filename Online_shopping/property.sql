-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 09:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(300) NOT NULL,
  `size` varchar(20000) NOT NULL,
  `u_id` int(100) NOT NULL,
  `stats` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `url`, `size`, `u_id`, `stats`) VALUES
(1, 'dgr', 'dgdfgdf@ghf.fg', 'dgfdgs  ssrggs ', 0, ''),
(43, 'weregs', 'srhgs@fhsthsth', 'dyjdyjfyjf', 0, ''),
(44, 'sggase fa', 'rgsg@thdd', 'sgthdtrhhdh  rthhrhrh', 0, ''),
(45, 'fsgreggsfds', 'trgdhd@fbrbr', 'fgrthyttyh yh tyhtytht y t ht htyhtyhthth', 0, '1'),
(46, 'fgwrgtgth', 'trgdhd@fbrbr', 'rgrtgrtgr', 9, '1'),
(47, 'affe', 'addv@ffdv', 'fvfbrfr rtg rgr grgtrg rg', 1, '1'),
(48, 'azad', 'mdakazad0@gmail.com', 'good quality your product', 10, '1'),
(49, 'sabbir', 'fdwfd@gwdhgd.com', 'hoe are you?', 9, '1');

-- --------------------------------------------------------

--
-- Table structure for table `dev`
--

CREATE TABLE `dev` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dev`
--

INSERT INTO `dev` (`ID`, `name`, `position`, `image`) VALUES
(1, 'Sabbir Ahammed', 'Director', 'dev1.jpg'),
(2, 'Rasel Hossain', 'Superviser', 'dev2.jpg'),
(3, 'AK Azad', 'Manager', 'dev3.jpg'),
(4, 'RV Rifat', 'Developer', 'dev4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `catagory` varchar(200) NOT NULL,
  `u_id` int(100) NOT NULL,
  `stats` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `catagory`, `u_id`, `stats`) VALUES
(3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00, '', 0, '2'),
(4, 'XP 1155 Intel Core Laptop', 'LPN45', 'product-images/laptop.jpg', 800.00, '', 0, '2'),
(9, 'Tata Salt', 'fdfrgr', '1.png', 20.99, 'grocery', 1, '1'),
(10, 'Fortune-sunflower', 'thehe', '2.png', 35.99, 'grocery', 1, '1'),
(11, 'Aashirvaad-atta', 'dghnhd', '3.png', 40.99, 'grocery', 1, '1'),
(12, 'Sampann-toor-dal', 'yjtjmg', '4.png', 60.00, 'grocery', 1, '1'),
(13, 'Parryss-sugar', 'tehtg', '5.png', 80.00, 'grocery', 1, '1'),
(14, 'Saffola-gold', 'fhnhn', '6.png', 60.00, 'grocery', 1, '1'),
(15, 'Fried-gram', 'sfsff', '7.png', 40.00, 'grocery', 1, '1'),
(16, 'Navaratan-dal', 'sfdfg', '8.png', 35.00, 'grocery', 1, '1'),
(17, 'White-peasmatar', 'ghg', '9.png', 40.00, 'grocery', 1, '1'),
(18, 'Channa-dal', 'hggf', '10.png', 30.00, 'grocery', 1, '1'),
(19, 'Fry Pan', 'fgtnntn', '11.png', 35.99, 'household', 1, '1'),
(20, 'Cookware', 'jyhynh', '12.png', 120.00, 'household', 1, '1'),
(21, 'Dosa Tawa', 'gfjhf', '13.png', 80.99, 'household', 1, '1'),
(22, 'Flask', 'gjgkk', '14.png', 35.99, 'household', 1, '1'),
(23, 'Kadai Idly', 'vbgnt', '15.png', 80.00, 'household', 1, '1'),
(24, 'Breakfast Pan', 'fgbff', '16.png', 105.00, 'household', 1, '1'),
(25, 'Elite Set', 'fdsfer', '17.png', 55.00, 'household', 1, '1'),
(26, 'Coated Pan', 'fhyjt', '18.png', 45.00, 'household', 1, '1'),
(27, 'Tadka Pan', 'gfbbct', '19.png', 105.00, 'household', 1, '1'),
(28, 'Baby Lotion', 'hjkuk', '20.png', 35.00, 'personal-care', 1, '1'),
(29, 'Rash Cream', 'hgjgj', '21.png', 30.00, 'personal-care', 1, '1'),
(30, 'Brush', 'sddv', '22.png', 80.00, 'personal-care', 1, '1'),
(31, 'Rash Cream', 'ghngn', '23.png', 35.99, 'personal-care', 1, '1'),
(32, 'Baby Lotion', 'fdfbg', '24.png', 30.00, 'personal-care', 1, '1'),
(33, 'Wipes Gentle', 'fdfbgfb', '25.png', 30.00, 'personal-care', 1, '1'),
(34, 'Parryss-sugar', 'hghn', '26.png', 30.00, 'packaged-foods', 1, '1'),
(35, 'Cake', 'bfgr', '27.png', 50.00, 'packaged-foods', 1, '1'),
(36, 'Delux', 'ghnb', '28.png', 40.00, 'packaged-foods', 1, '1'),
(37, 'Frooti', 'bfdvd', '29.png', 30.00, 'drinks', 1, '1'),
(38, 'Tropicana', 'efddg', '30.png', 35.99, 'drinks', 1, '1'),
(39, 'Coca Cola', 'xcvdfv', '31.png', 30.00, 'drinks', 1, '1'),
(40, 'Coca Cola', 'vdfb', '32.png', 35.00, 'drinks', 1, '1'),
(41, 'Red Bull', 'ngthr', '33.png', 30.00, 'drinks', 1, '1'),
(42, 'Minute Maid', 'dfd', '34.png', 80.00, 'drinks', 1, '1'),
(43, 'Water', 'jhgd', '35.png', 20.99, 'drinks', 1, '1'),
(44, 'Camera', 'addvdv', '36.jpg', 20000.00, 'electronics', 1, '1'),
(45, 'External Hard Drive', 'bgfbb', '37.jpg', 5000.00, 'electronics', 1, '1'),
(46, 'Laptop', 'njmjf', '38.jpg', 45000.00, 'electronics', 1, '1'),
(47, 'Watch', 'jhgnf', '39.jpg', 500.00, 'electronics', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `u_info`
--

CREATE TABLE `u_info` (
  `id` int(11) NOT NULL,
  `u_first` varchar(100) NOT NULL,
  `u_last` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `u_gnd` int(100) NOT NULL,
  `u_mob` varchar(100) NOT NULL,
  `u_comp` varchar(100) NOT NULL,
  `u_finance` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_info`
--

INSERT INTO `u_info` (`id`, `u_first`, `u_last`, `u_email`, `u_pass`, `u_gnd`, `u_mob`, `u_comp`, `u_finance`) VALUES
(1, 'Sabbir', 'Ahammed', 'admin@gmail.com', 'admin', 1, '01677280324', 'private', 99986999),
(9, 'sabbir', 'Ahammed', 'alahammed@gmail.com', '25800852', 1, '01927656460', 'private-organization', 999998499),
(10, 'Md AK', 'Azad', 'mdakzado123@gmail.com', '1234', 1, '012544444555', 'private', 29500),
(11, 'inzamamul', 'Haque', 'inzamamulhaque@gmail.com', '1234', 1, '01619007878', 'private', 19999500),
(13, 'Fokir', 'shaon', 'fokir@gmail.com', '1234', 1, '019487779997', 'private', 200000),
(14, 'Rasel', 'Hossain', 'ras@gmail.com', '1234', 1, '01679002024', 'private', 4500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dev`
--
ALTER TABLE `dev`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `u_info`
--
ALTER TABLE `u_info`
  ADD PRIMARY KEY (`id`,`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `dev`
--
ALTER TABLE `dev`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `u_info`
--
ALTER TABLE `u_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
