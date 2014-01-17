-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2013 at 03:00 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food_ordering`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_id` int(11) NOT NULL auto_increment,
  `item_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_id`, `item_id`, `cust_id`, `amount`, `total_price`, `status`) VALUES
(1, 1, 1, 1, 350, 0),
(2, 2, 1, 15, 2250, 0),
(3, 4, 1, 5, 2250, 0),
(4, 1, 6, 2, 700, 0),
(5, 1, 6, 2, 700, 0),
(6, 1, 6, 3, 1050, 1),
(7, 2, 6, 1, 150, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `cat_id` int(11) NOT NULL auto_increment,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cat_id`, `cat_name`) VALUES
(1, 'Main Course'),
(2, 'Fast Food'),
(3, 'Pastries/Cakes'),
(4, 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL auto_increment,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phnno` int(11) NOT NULL,
  `cardno` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `entrydate` varchar(20) NOT NULL,
  PRIMARY KEY  (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `firstname`, `lastname`, `gender`, `address`, `phnno`, `cardno`, `emailid`, `username`, `password`, `entrydate`) VALUES
(1, 'Bipasha', 'Chowdhury', 'Female', 'Dhanmondi', 1675784281, 'A-1234', 'bipasha@gmail.com', 'Bipasha', '123', '04/22/2013'),
(2, 'Anannya', 'Tasmiah', 'Female', 'Dhaka', 1918184164, 'B-1234', 'anannya@gmail.com', 'Anannya', '123', '04/23/2013'),
(3, 'Zakia', 'Kadri', 'Female', 'Uttora', 1747979077, 'A-9876', 'sweety@gmail.com', 'zakia', '123', '04/22/2013'),
(4, '', '', '', '', 0, '', 'anannya@g.com', 'manager', '123', ''),
(5, 'manager1', 'managerr1', 'Male', 'qqq', 9097986, 'A-9876', 'swty@gmai.com', 'manager1', '1234', '05/06/2013'),
(6, 'zerin apu', '', 'Female', 'Dhaka', 1747979077, 'A-1234', 'bipasha@gmail.com', 'zerin', '123', '05/05/2013');

-- --------------------------------------------------------

--
-- Table structure for table `itemm`
--

CREATE TABLE `itemm` (
  `item_id` int(11) NOT NULL auto_increment,
  `item_name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `about` varchar(200) NOT NULL,
  `image` blob NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`item_id`),
  UNIQUE KEY `item_name` (`item_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `itemm`
--

INSERT INTO `itemm` (`item_id`, `item_name`, `price`, `catagory`, `about`, `image`, `status`) VALUES
(1, 'CHICKEN BIRIANI', 359, ' Main Course ', 'This is one of the main attraction.   ', 0x70686f746f2f626972616e692e6a7067, 0),
(2, 'cold coffee', 150, ' Drinks ', 'newly arrived, very popular among customers. ', 0x70686f746f2f636f666665652e6a7067, 1),
(3, 'Swarma', 500, ' Fast Food ', 'italian food, really amazing, customers are rating it very high in a very short time.', 0x70686f746f2f73686f726d612e6a7067, 1),
(4, 'four sesons', 450, ' Main Course ', 'italian pizza, delicious, healthy. popular among youngstars.', 0x70686f746f2f70697a7a61342e6a706567, 1),
(5, 'Burger', 230, ' Fast Food ', 'delicious!!!!!!!!!!!!! ', 0x70686f746f2f31322e6a7067, 0),
(6, 'Sandwich', 150, ' Fast Food ', 'delicious ', 0x70686f746f2f31312e6a7067, 0),
(8, 'porota', 120, ' Main Course ', 'hjascik;sjnpc l;nlxkmb ukh', 0x70686f746f2f382e6a7067, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `order_id` int(11) NOT NULL auto_increment,
  `order_date` varchar(20) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `or_status` varchar(15) NOT NULL,
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `orderr`
--

INSERT INTO `orderr` (`order_id`, `order_date`, `item_id`, `cust_id`, `amount`, `total_price`, `or_status`) VALUES
(7, '05/06/2013', 2, 6, 1, 150, 'Delivered'),
(6, '05/06/2013', 1, 6, 3, 1050, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL auto_increment,
  `item_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `client_ip` varchar(30) NOT NULL,
  PRIMARY KEY  (`rating_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `item_id`, `rating`, `client_ip`) VALUES
(1, 1, 4, '127.0.0.1'),
(2, 1, 3, '127.0.0.1'),
(3, 1, 5, '127.0.0.1'),
(12, 2, 5, '127.0.0.1'),
(11, 1, 4, '127.0.0.1'),
(6, 1, 3, '127.0.0.1'),
(7, 1, 4, '127.0.0.1'),
(8, 2, 5, '127.0.0.1'),
(9, 2, 4, '127.0.0.1'),
(10, 2, 4, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserv_id` int(11) NOT NULL auto_increment,
  `cust_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `person` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `res_status` varchar(20) NOT NULL,
  PRIMARY KEY  (`reserv_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserv_id`, `cust_id`, `date`, `time`, `person`, `type`, `res_status`) VALUES
(1, 2, '1/1/1', '12.0', 12, 'asd', 'Pending'),
(2, 3, '12', '22', 22, 'as', 'Pending'),
(3, 1, '11', '11', 11, 'asd', 'Pending'),
(4, 1, '04/23/2013', '2:30am', 12, 'Birthday', 'Pending'),
(5, 1, '04/23/2013', '12:00pm', 2, 'Anniversary', 'Approved'),
(6, 1, '04/30/2013', '2:30am', 2, 'Graduation', 'Rejected'),
(7, 6, '05/07/2013', '1:30am', 12, 'Birthday', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `cmnt_id` int(11) NOT NULL auto_increment,
  `cust_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY  (`cmnt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`cmnt_id`, `cust_id`, `comment`, `status`) VALUES
(1, 1, 'The foods are really mouth watering', 1),
(2, 1, 'I enjoyed the chicken very much', 1),
(3, 2, 'Its too good', 1),
(15, 1, 'this pace is best for hangout', 1),
(14, 1, 'i love this place', 1),
(12, 1, 'asdsads', 1),
(13, 6, 'This is very good restaurant. Their food quality is also awesome.', 2),
(16, 1, 'this is place is horrible', 2),
(17, 1, 'this place is best for dating', 2),
(18, 1, 'This is good one', 0),
(19, 2, 'hello', 1),
(20, 2, 'nice', 1),
(21, 6, 'its good.', 1);
