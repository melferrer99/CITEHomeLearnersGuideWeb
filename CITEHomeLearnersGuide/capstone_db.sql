-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 03:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_1st_01_fb`
--

CREATE TABLE `tbl_1st_01_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_1st_01_fb`
--

INSERT INTO `tbl_1st_01_fb` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(4, '11ASD', 'ASD', 'ASD', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_1st_02_fb`
--

CREATE TABLE `tbl_1st_02_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_1st_02_fb`
--

INSERT INTO `tbl_1st_02_fb` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(4, '22A', 'A', 'A', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_1st_03_fb`
--

CREATE TABLE `tbl_1st_03_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_1st_03_fb`
--

INSERT INTO `tbl_1st_03_fb` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(4, '33ASD', 'AA', 'AASD', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_1st_04_fb`
--

CREATE TABLE `tbl_1st_04_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_1st_04_fb`
--

INSERT INTO `tbl_1st_04_fb` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(3, 'AA', 'AAA', 'A', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_1st_05_fb`
--

CREATE TABLE `tbl_1st_05_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_1st_05_fb`
--

INSERT INTO `tbl_1st_05_fb` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(6, '55DD', 'DD', 'DD', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_1st_06_fb`
--

CREATE TABLE `tbl_1st_06_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_1st_06_fb`
--

INSERT INTO `tbl_1st_06_fb` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(4, 'SSS', 'SS', 'SS', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2nd_01_fb`
--

CREATE TABLE `tbl_2nd_01_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2nd_02_fb`
--

CREATE TABLE `tbl_2nd_02_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2nd_03_fb`
--

CREATE TABLE `tbl_2nd_03_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2nd_04_fb`
--

CREATE TABLE `tbl_2nd_04_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2nd_05_fb`
--

CREATE TABLE `tbl_2nd_05_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2nd_06_fb`
--

CREATE TABLE `tbl_2nd_06_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_3rd_01_fb`
--

CREATE TABLE `tbl_3rd_01_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_3rd_02_fb`
--

CREATE TABLE `tbl_3rd_02_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_3rd_03_fb`
--

CREATE TABLE `tbl_3rd_03_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_3rd_04_fb`
--

CREATE TABLE `tbl_3rd_04_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_3rd_05_fb`
--

CREATE TABLE `tbl_3rd_05_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_3rd_06_fb`
--

CREATE TABLE `tbl_3rd_06_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_4th_01_fb`
--

CREATE TABLE `tbl_4th_01_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_4th_02_fb`
--

CREATE TABLE `tbl_4th_02_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_4th_03_fb`
--

CREATE TABLE `tbl_4th_03_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_4th_04_fb`
--

CREATE TABLE `tbl_4th_04_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_4th_05_fb`
--

CREATE TABLE `tbl_4th_05_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_4th_06_fb`
--

CREATE TABLE `tbl_4th_06_fb` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_1st_01_class`
--

CREATE TABLE `tbl_connect_1st_01_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_connect_1st_01_class`
--

INSERT INTO `tbl_connect_1st_01_class` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(9, 'T1', 'T1', 'T1', '1st Year', 'BSIT-O1'),
(10, 'as', 'asd', 'asdasda', '1st Year', 'BSIT-O1'),
(11, 'iasdads', 'asdasdasd', 'asdasdasdasd', '1st Year', 'BSIT-O1'),
(12, 'ITE301', 'CAPSTONE', 'ASDASDASDASD', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_1st_02_class`
--

CREATE TABLE `tbl_connect_1st_02_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_connect_1st_02_class`
--

INSERT INTO `tbl_connect_1st_02_class` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(4, 'TC2', 'TC2', 'TC2', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_1st_03_class`
--

CREATE TABLE `tbl_connect_1st_03_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_connect_1st_03_class`
--

INSERT INTO `tbl_connect_1st_03_class` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(3, 'T3', 'T3', 'T3', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_1st_04_class`
--

CREATE TABLE `tbl_connect_1st_04_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_connect_1st_04_class`
--

INSERT INTO `tbl_connect_1st_04_class` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(4, 'T4', 'T4', 'T4', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_1st_05_class`
--

CREATE TABLE `tbl_connect_1st_05_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_connect_1st_05_class`
--

INSERT INTO `tbl_connect_1st_05_class` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(3, 'T5', 'T5', 'T5', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_1st_06_class`
--

CREATE TABLE `tbl_connect_1st_06_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_connect_1st_06_class`
--

INSERT INTO `tbl_connect_1st_06_class` (`class_id`, `sub_code`, `sub_name`, `sub_link`, `u_year`, `u_section`) VALUES
(1, 'jake', 'ryan', 'jake', '1st Year', 'BSIT-O1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_2nd_01_class`
--

CREATE TABLE `tbl_connect_2nd_01_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_2nd_02_class`
--

CREATE TABLE `tbl_connect_2nd_02_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_2nd_03_class`
--

CREATE TABLE `tbl_connect_2nd_03_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_2nd_04_class`
--

CREATE TABLE `tbl_connect_2nd_04_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_2nd_05_class`
--

CREATE TABLE `tbl_connect_2nd_05_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_2nd_06_class`
--

CREATE TABLE `tbl_connect_2nd_06_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_3rd_01_class`
--

CREATE TABLE `tbl_connect_3rd_01_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_3rd_02_class`
--

CREATE TABLE `tbl_connect_3rd_02_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_3rd_03_class`
--

CREATE TABLE `tbl_connect_3rd_03_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_3rd_04_class`
--

CREATE TABLE `tbl_connect_3rd_04_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_3rd_05_class`
--

CREATE TABLE `tbl_connect_3rd_05_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_3rd_06_class`
--

CREATE TABLE `tbl_connect_3rd_06_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_4th_01_class`
--

CREATE TABLE `tbl_connect_4th_01_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_4th_02_class`
--

CREATE TABLE `tbl_connect_4th_02_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_4th_03_class`
--

CREATE TABLE `tbl_connect_4th_03_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_4th_04_class`
--

CREATE TABLE `tbl_connect_4th_04_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_4th_05_class`
--

CREATE TABLE `tbl_connect_4th_05_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_connect_4th_06_class`
--

CREATE TABLE `tbl_connect_4th_06_class` (
  `class_id` int(11) NOT NULL,
  `sub_code` varchar(100) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_link` varchar(300) NOT NULL,
  `u_year` varchar(100) NOT NULL,
  `u_section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orientation`
--

CREATE TABLE `tbl_orientation` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `L_system` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orientation`
--

INSERT INTO `tbl_orientation` (`id`, `title`, `content`, `L_system`) VALUES
(12, 'RAD', 'jake ajksd  jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd jake ajksd ja', 'RAD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orientationflex`
--

CREATE TABLE `tbl_orientationflex` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `L_system` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orientationflex`
--

INSERT INTO `tbl_orientationflex` (`id`, `title`, `content`, `L_system`) VALUES
(2, 'FLEX', 'sdasdasd asdasdasdasd asdasdasdas a as a  adas adsdasdasdasda adsdas a asdiajsdaj ijai jiajidsjiajd iajijsdijijiajis djijaisdij ijijasidjais iajsidi iasjdij iajsidji a iajsdijaisjd asda sd sdasdasd asdasdasdasd asdasdasdas a as a  adas adsdasdasdasda adsdas a asdiajsdaj ijai jiajidsjiajd iajijsdijij', 'FLEX');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(11) NOT NULL,
  `u_Fname` varchar(100) NOT NULL,
  `u_Lname` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `u_Fname`, `u_Lname`, `u_email`, `u_password`, `u_type`) VALUES
(26, 'admin', 'admin', 'admin@gmail.com', '$2y$10$jPHQU1pYbs8vqE1k6RFJUujXJ84b3weZ4kAO25FJE0O.dCAv4QdFy', 'Admin'),
(27, 'Juan', 'Dela Cruz', 'a@gmail.com', '$2y$10$rlBFd3x6OQyya2MVX7eUueJpbZ3AAgCBLeUw5Wk1uay.A81pZliLu', 'Teacher'),
(28, 'Jake Ryan ', 'Sison ', 'jake@gmail.com', '$2y$10$O11ejYvklAQPN9thY6taoOrgQBX50/cm6uCEjKNWF3tN.GzKb3cHS', 'Admin'),
(29, 'jake ', 'jake ', 'student@gmail.com', '$2y$10$GeMW8GlBQW5BryxBFVO/Lu8Is/Szu0G9.9KMEa48Ex2UQwxXzZ4QW', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_1st_01_fb`
--
ALTER TABLE `tbl_1st_01_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_1st_02_fb`
--
ALTER TABLE `tbl_1st_02_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_1st_03_fb`
--
ALTER TABLE `tbl_1st_03_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_1st_04_fb`
--
ALTER TABLE `tbl_1st_04_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_1st_05_fb`
--
ALTER TABLE `tbl_1st_05_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_1st_06_fb`
--
ALTER TABLE `tbl_1st_06_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_2nd_01_fb`
--
ALTER TABLE `tbl_2nd_01_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_2nd_02_fb`
--
ALTER TABLE `tbl_2nd_02_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_2nd_03_fb`
--
ALTER TABLE `tbl_2nd_03_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_2nd_04_fb`
--
ALTER TABLE `tbl_2nd_04_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_2nd_05_fb`
--
ALTER TABLE `tbl_2nd_05_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_2nd_06_fb`
--
ALTER TABLE `tbl_2nd_06_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_3rd_01_fb`
--
ALTER TABLE `tbl_3rd_01_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_3rd_02_fb`
--
ALTER TABLE `tbl_3rd_02_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_3rd_03_fb`
--
ALTER TABLE `tbl_3rd_03_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_3rd_04_fb`
--
ALTER TABLE `tbl_3rd_04_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_3rd_05_fb`
--
ALTER TABLE `tbl_3rd_05_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_3rd_06_fb`
--
ALTER TABLE `tbl_3rd_06_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_4th_01_fb`
--
ALTER TABLE `tbl_4th_01_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_4th_02_fb`
--
ALTER TABLE `tbl_4th_02_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_4th_03_fb`
--
ALTER TABLE `tbl_4th_03_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_4th_04_fb`
--
ALTER TABLE `tbl_4th_04_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_4th_05_fb`
--
ALTER TABLE `tbl_4th_05_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_4th_06_fb`
--
ALTER TABLE `tbl_4th_06_fb`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_1st_01_class`
--
ALTER TABLE `tbl_connect_1st_01_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_1st_02_class`
--
ALTER TABLE `tbl_connect_1st_02_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_1st_03_class`
--
ALTER TABLE `tbl_connect_1st_03_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_1st_04_class`
--
ALTER TABLE `tbl_connect_1st_04_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_1st_05_class`
--
ALTER TABLE `tbl_connect_1st_05_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_1st_06_class`
--
ALTER TABLE `tbl_connect_1st_06_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_2nd_01_class`
--
ALTER TABLE `tbl_connect_2nd_01_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_2nd_02_class`
--
ALTER TABLE `tbl_connect_2nd_02_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_2nd_03_class`
--
ALTER TABLE `tbl_connect_2nd_03_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_2nd_04_class`
--
ALTER TABLE `tbl_connect_2nd_04_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_2nd_05_class`
--
ALTER TABLE `tbl_connect_2nd_05_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_2nd_06_class`
--
ALTER TABLE `tbl_connect_2nd_06_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_3rd_01_class`
--
ALTER TABLE `tbl_connect_3rd_01_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_3rd_02_class`
--
ALTER TABLE `tbl_connect_3rd_02_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_3rd_03_class`
--
ALTER TABLE `tbl_connect_3rd_03_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_3rd_04_class`
--
ALTER TABLE `tbl_connect_3rd_04_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_3rd_05_class`
--
ALTER TABLE `tbl_connect_3rd_05_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_3rd_06_class`
--
ALTER TABLE `tbl_connect_3rd_06_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_4th_01_class`
--
ALTER TABLE `tbl_connect_4th_01_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_4th_02_class`
--
ALTER TABLE `tbl_connect_4th_02_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_4th_03_class`
--
ALTER TABLE `tbl_connect_4th_03_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_4th_04_class`
--
ALTER TABLE `tbl_connect_4th_04_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_4th_05_class`
--
ALTER TABLE `tbl_connect_4th_05_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_connect_4th_06_class`
--
ALTER TABLE `tbl_connect_4th_06_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbl_orientation`
--
ALTER TABLE `tbl_orientation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orientationflex`
--
ALTER TABLE `tbl_orientationflex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_1st_01_fb`
--
ALTER TABLE `tbl_1st_01_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_1st_02_fb`
--
ALTER TABLE `tbl_1st_02_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_1st_03_fb`
--
ALTER TABLE `tbl_1st_03_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_1st_04_fb`
--
ALTER TABLE `tbl_1st_04_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_1st_05_fb`
--
ALTER TABLE `tbl_1st_05_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_1st_06_fb`
--
ALTER TABLE `tbl_1st_06_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_2nd_01_fb`
--
ALTER TABLE `tbl_2nd_01_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_2nd_02_fb`
--
ALTER TABLE `tbl_2nd_02_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_2nd_03_fb`
--
ALTER TABLE `tbl_2nd_03_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_2nd_04_fb`
--
ALTER TABLE `tbl_2nd_04_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_2nd_05_fb`
--
ALTER TABLE `tbl_2nd_05_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_2nd_06_fb`
--
ALTER TABLE `tbl_2nd_06_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_3rd_01_fb`
--
ALTER TABLE `tbl_3rd_01_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_3rd_02_fb`
--
ALTER TABLE `tbl_3rd_02_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_3rd_03_fb`
--
ALTER TABLE `tbl_3rd_03_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_3rd_04_fb`
--
ALTER TABLE `tbl_3rd_04_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_3rd_05_fb`
--
ALTER TABLE `tbl_3rd_05_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_3rd_06_fb`
--
ALTER TABLE `tbl_3rd_06_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_4th_01_fb`
--
ALTER TABLE `tbl_4th_01_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_4th_02_fb`
--
ALTER TABLE `tbl_4th_02_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_4th_03_fb`
--
ALTER TABLE `tbl_4th_03_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_4th_04_fb`
--
ALTER TABLE `tbl_4th_04_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_4th_05_fb`
--
ALTER TABLE `tbl_4th_05_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_4th_06_fb`
--
ALTER TABLE `tbl_4th_06_fb`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_connect_1st_01_class`
--
ALTER TABLE `tbl_connect_1st_01_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_connect_1st_02_class`
--
ALTER TABLE `tbl_connect_1st_02_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_connect_1st_03_class`
--
ALTER TABLE `tbl_connect_1st_03_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_connect_1st_04_class`
--
ALTER TABLE `tbl_connect_1st_04_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_connect_1st_05_class`
--
ALTER TABLE `tbl_connect_1st_05_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_connect_1st_06_class`
--
ALTER TABLE `tbl_connect_1st_06_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_connect_2nd_01_class`
--
ALTER TABLE `tbl_connect_2nd_01_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_connect_2nd_02_class`
--
ALTER TABLE `tbl_connect_2nd_02_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_connect_2nd_03_class`
--
ALTER TABLE `tbl_connect_2nd_03_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_connect_2nd_04_class`
--
ALTER TABLE `tbl_connect_2nd_04_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_connect_2nd_05_class`
--
ALTER TABLE `tbl_connect_2nd_05_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_connect_2nd_06_class`
--
ALTER TABLE `tbl_connect_2nd_06_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_connect_3rd_01_class`
--
ALTER TABLE `tbl_connect_3rd_01_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_connect_3rd_02_class`
--
ALTER TABLE `tbl_connect_3rd_02_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_connect_3rd_03_class`
--
ALTER TABLE `tbl_connect_3rd_03_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_connect_3rd_04_class`
--
ALTER TABLE `tbl_connect_3rd_04_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_connect_3rd_05_class`
--
ALTER TABLE `tbl_connect_3rd_05_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_connect_3rd_06_class`
--
ALTER TABLE `tbl_connect_3rd_06_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_connect_4th_01_class`
--
ALTER TABLE `tbl_connect_4th_01_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_connect_4th_02_class`
--
ALTER TABLE `tbl_connect_4th_02_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_connect_4th_03_class`
--
ALTER TABLE `tbl_connect_4th_03_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_connect_4th_04_class`
--
ALTER TABLE `tbl_connect_4th_04_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_connect_4th_05_class`
--
ALTER TABLE `tbl_connect_4th_05_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_connect_4th_06_class`
--
ALTER TABLE `tbl_connect_4th_06_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_orientation`
--
ALTER TABLE `tbl_orientation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_orientationflex`
--
ALTER TABLE `tbl_orientationflex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
