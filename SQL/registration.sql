-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 03:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(6) UNSIGNED NOT NULL,
  `NAME` varchar(30) DEFAULT NULL,
  `FATHERNAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `NAME`, `FATHERNAME`) VALUES
(1, 'SAM', 'ATUL'),
(2, 'TEST!', 'TEST#$%'),
(3, 'dwnkjqbwdkjqbwkj', 'qdbjqbdkqw'),
(4, 'tesrfwtqdq', 'tdwqtdqwyw'),
(5, 'ytrew', 'ytreti');

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `id` int(6) UNSIGNED NOT NULL,
  `cust_email` varchar(30) DEFAULT NULL,
  `cust_mobile` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`id`, `cust_email`, `cust_mobile`) VALUES
(1, 'gefwygfw@gmail.vomc', '7539548'),
(2, 'biubiwbgibwi', '4892548921');

-- --------------------------------------------------------

--
-- Table structure for table `form4`
--

CREATE TABLE `form4` (
  `id` int(6) UNSIGNED NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `sis_name` varchar(30) DEFAULT NULL,
  `no_fmem` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form4`
--

INSERT INTO `form4` (`id`, `Name`, `sis_name`, `no_fmem`) VALUES
(1, 'sam', 'vinni', '4');

-- --------------------------------------------------------

--
-- Table structure for table `masterform`
--

CREATE TABLE `masterform` (
  `form_id` int(11) NOT NULL,
  `form_name` varchar(255) NOT NULL,
  `form_value` longtext NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterform`
--

INSERT INTO `masterform` (`form_id`, `form_name`, `form_value`, `created_on`) VALUES
(1, 'TEST FORM 1', '<div class=\"form-group\"><label class=\"control-label\">NAME</label><input maxlength=\"22\" minlength=\"2\" name=\"NAME\" placeholder=\"ENTER NAME\" class=\"form-control\" required=\"\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">FNAME</label><input maxlength=\"22\" minlength=\"2\" name=\"FATHERNAME\" placeholder=\"ENTER FATHERS NAME\" class=\"form-control\" required=\"\" type=\"text\"></div>', '2018-06-27 12:00:36'),
(2, 'Customer Form', '<div class=\"form-group\"><label class=\"control-label\">Customer Email</label><input maxlength=\"100\" minlength=\"4\" name=\"cust_email\" placeholder=\"\" class=\"form-control\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">Customer Mobile</label><input maxlength=\"10\" minlength=\"1\" name=\"cust_mobile\" placeholder=\"\" class=\"form-control\" type=\"text\"></div>', '2018-06-27 12:05:22'),
(4, 'testform1', '<div class=\"form-group\"><label class=\"control-label\">Name</label><input maxlength=\"20\" minlength=\"2\" name=\"Name\" placeholder=\"Enter Name\" class=\"form-control\" required=\"\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">Sister Name</label><input maxlength=\"22\" minlength=\"2\" name=\"sis_name\" placeholder=\"Enter Sister name\" class=\"form-control\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">No. of family members</label><input name=\"no_fmem\" placeholder=\"Enter no. of family members\" class=\"form-control\" required=\"\" type=\"number\"></div>', '2018-06-28 09:42:01'),
(5, 'abctest233', '\n<span class=\"got\" style=\"\"><input class=\"age\" value=\"Submit\" type=\"submit\"></span>\n<div class=\"form-group\"><label class=\"control-label\">Name</label><input maxlength=\"20\" minlength=\"2\" name=\"Name\" placeholder=\"Enter Name\" class=\"form-control\" required=\"\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">Sister Name</label><input maxlength=\"22\" minlength=\"2\" name=\"sis_name\" placeholder=\"Enter Sister name\" class=\"form-control\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">No. of family members</label><input name=\"no_fmem\" placeholder=\"Enter no. of family members\" class=\"form-control\" required=\"\" type=\"number\"></div><div class=\"form-group\"><label class=\"control-label\">Customer Email</label><input maxlength=\"100\" minlength=\"4\" name=\"cust_email\" placeholder=\"\" class=\"form-control\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">Customer Mobile</label><input maxlength=\"10\" minlength=\"1\" name=\"cust_mobile\" placeholder=\"\" class=\"form-control\" type=\"text\"></div>', '2018-06-28 13:07:52'),
(6, 'sam1', '\n<span class=\"got\" style=\"\"><input class=\"age\" value=\"Submit\" type=\"submit\"></span>\n<div class=\"form-group\"><label class=\"control-label\">NAME</label><input maxlength=\"22\" minlength=\"2\" name=\"NAME\" placeholder=\"ENTER NAME\" class=\"form-control\" required=\"\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">FNAME</label><input maxlength=\"22\" minlength=\"2\" name=\"FATHERNAME\" placeholder=\"ENTER FATHERS NAME\" class=\"form-control\" required=\"\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">Name</label><input maxlength=\"20\" minlength=\"2\" name=\"Name\" placeholder=\"Enter Name\" class=\"form-control\" required=\"\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">Sister Name</label><input maxlength=\"22\" minlength=\"2\" name=\"sis_name\" placeholder=\"Enter Sister name\" class=\"form-control\" type=\"text\"></div><div class=\"form-group\"><label class=\"control-label\">No. of family members</label><input name=\"no_fmem\" placeholder=\"Enter no. of family members\" class=\"form-control\" required=\"\" type=\"number\"></div>', '2018-06-28 13:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'samk19', 'samk19@gmail.com', '16d7a4fca7442dda3ad93c9a726597e4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form4`
--
ALTER TABLE `form4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterform`
--
ALTER TABLE `masterform`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form4`
--
ALTER TABLE `form4`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `masterform`
--
ALTER TABLE `masterform`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
