-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 04:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_photo` varchar(20) NOT NULL,
  `blog_title` varchar(20) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `comment_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_comment` text NOT NULL,
  `comment_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `booked_room`
--

CREATE TABLE `booked_room` (
  `booked_id` int(11) NOT NULL,
  `booked_total` int(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_id` int(20) NOT NULL,
  `booked_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `check_in_id` int(11) NOT NULL,
  `check_in_remaining` int(20) NOT NULL,
  `room_id` int(20) NOT NULL,
  `room_no` int(20) NOT NULL,
  `check_in_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `photo_id` int(20) NOT NULL,
  `photo_name` int(20) NOT NULL,
  `gallery_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_id` int(11) NOT NULL,
  `photo_name` varchar(20) NOT NULL,
  `room_id` int(20) NOT NULL,
  `photo_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `r_fname` varchar(20) NOT NULL,
  `r_lname` varchar(20) NOT NULL,
  `r_contact` int(20) NOT NULL,
  `r_email` varchar(30) NOT NULL,
  `r_date_in` date NOT NULL,
  `r_date_out` date NOT NULL,
  `r_status` tinyint(1) NOT NULL,
  `room_no` int(20) NOT NULL,
  `r_id` int(11) NOT NULL,
  `r_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`r_fname`, `r_lname`, `r_contact`, `r_email`, `r_date_in`, `r_date_out`, `r_status`, `room_no`, `r_id`, `r_timestamp`) VALUES
('adsf', 'adsf', 1234, 'asdf@gmail.com', '2016-12-12', '2016-12-15', 0, 221, 3, '2016-12-12 05:18:30.184913'),
('adsf', 'asdf', 1234, 'adsf@gmail.com', '2016-12-14', '2016-12-17', 0, 221, 4, '2016-12-14 06:26:35.613262');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `room_name` varchar(20) NOT NULL,
  `room_status` tinyint(1) NOT NULL,
  `room_description` text NOT NULL,
  `room_price` int(11) NOT NULL,
  `room_capacity` int(20) NOT NULL,
  `room_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `room_name`, `room_status`, `room_description`, `room_price`, `room_capacity`, `room_timestamp`) VALUES
(1, 'SB', 'Single Bed Room', 0, 'Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 21, 2, '0000-00-00 00:00:00.000000'),
(2, 'DB', 'Double Bed Room', 0, 'Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 41, 4, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `room_total`
--

CREATE TABLE `room_total` (
  `room_no` int(20) NOT NULL,
  `room_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_total`
--

INSERT INTO `room_total` (`room_no`, `room_type`) VALUES
(221, 'SB'),
(222, 'SB'),
(223, 'SB'),
(224, 'SB'),
(225, 'SB'),
(234, 'DB'),
(235, 'DB'),
(236, 'DB');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `t_id` int(11) NOT NULL,
  `t_comment` text NOT NULL,
  `t_photo` varchar(20) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `t_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(10) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_password` varchar(30) NOT NULL,
  `u_email` varchar(25) NOT NULL,
  `u_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `room_total`
--
ALTER TABLE `room_total`
  ADD PRIMARY KEY (`room_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booked_room`
--
ALTER TABLE `booked_room`
  MODIFY `booked_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `check_in`
--
ALTER TABLE `check_in`
  MODIFY `check_in_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
