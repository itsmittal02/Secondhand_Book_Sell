-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 01:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksell`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE `add_book` (
  `sn` int(11) NOT NULL,
  `code` varchar(60) CHARACTER SET latin1 NOT NULL,
  `email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `book_name` varchar(60) CHARACTER SET latin1 NOT NULL,
  `book_category` varchar(60) CHARACTER SET latin1 NOT NULL,
  `book_author` varchar(60) CHARACTER SET latin1 NOT NULL,
  `book_edition` varchar(60) CHARACTER SET latin1 NOT NULL,
  `book_amount` varchar(60) CHARACTER SET latin1 NOT NULL,
  `book_description` blob NOT NULL,
  `book_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`sn`, `code`, `email`, `book_name`, `book_category`, `book_author`, `book_edition`, `book_amount`, `book_description`, `book_quantity`) VALUES
(2, '73MYu4_2', 'arg1@gmail.com', 'C Language', '', 'Denial Retchie', '2000', '1272', 0x6261736a6164, 1),
(3, 'RnaHtr_3', 'arg1@gmail.com', 'C++', '', 'Ahjvda', '2000', '123', 0x7364667364, 2),
(4, 'p09YdI_4', 'arg1@gmail.com', 'java', '', 'bjsbds', '2223', '122', 0x626a647362, 2),
(6, 'J1MSwO_6', 'naveen12@gmail.com', 'kottlin', '', 'msbc', '233', '122', 0x78626678, 12),
(7, '67VEv8_7', 'naveen12@gmail.com', 'PHP Developer', 'sports', 'R.s Sharma', '2999', '2211', 0x62686169, 23),
(8, '1u4vm5_8', 'arg1@gmail.com', 'Enime', 'science', 'dsd', '2333', '122', 0x73666476, 12),
(9, 'nFEhgT_9', 'arg1@gmail.com', 'shdjd', 'novel', 'JBCdjs', '2333', '122', 0x617361, 15),
(10, 'YSC51D_10', 'naveen12@gmail.com', 'Sociology', 'science', 'A.k', '3455', '122', 0x626a64766b64, 122),
(11, 'gI7upG_11', 'naveen12@gmail.com', 'Human', 'technology', 'vgdhc', '1221', '1222', 0x7376737666, 12),
(12, 'fBS5xU_12', 'naveen12@gmail.com', 'Enieme', 'novel', 'sdsd', '1222', '122', 0x646662646764, 12),
(13, 'mxXjT5_13', 'naveen12@gmail.com', 'operating System', 'science', 'B.S', '1233', '372', 0x73646676, 12),
(14, 'U6BKxm_14', 'arg1@gmail.com', 'C Language', 'technology', 'D.R', '29993', '135', 0x4c6f72656d20697073756d20646f6c6f722073697420616d65742e437261732072757472756d20696163756c697320656e696d2c206e6f6e206d61747469732e, 2),
(15, 'oxvWgQ_15', 'arg1@gmail.com', 'Hunt', 'science', 'Ms. Charly', '2002', '234', 0x5665727920496e666f726d617469766520426f6f6b, 23);

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `sn` int(11) NOT NULL,
  `book_email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `book_code` varchar(60) CHARACTER SET latin1 NOT NULL,
  `user_email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `add_date` varchar(60) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_cart`
--

INSERT INTO `add_cart` (`sn`, `book_email`, `book_code`, `user_email`, `add_date`) VALUES
(7, 'naveen12@gmail.com', 'J1MSwO_6', 'arg1@gmail.com', '2022-07-31'),
(9, 'naveen12@gmail.com', 'dlOZ6c_5', 'arg1@gmail.com', '2022-07-31'),
(10, 'naveen12@gmail.com', 'dlOZ6c_5', 'arg1@gmail.com', '2022-08-03'),
(11, 'naveen12@gmail.com', 'fBS5xU_12', 'arg1@gmail.com', '2022-09-03'),
(12, 'arg1@gmail.com', 'p09YdI_4', 'arg1@gmail.com', '2022-09-03'),
(13, 'naveen12@gmail.com', 'J1MSwO_6', 'arg1@gmail.com', '2022-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('sm12@gmail.com', '1234'),
('rs1@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admin_dashboard`
--

CREATE TABLE `admin_dashboard` (
  `sn` int(11) NOT NULL,
  `code` varchar(60) CHARACTER SET latin1 NOT NULL,
  `email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `book_category` varchar(60) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_dashboard`
--

INSERT INTO `admin_dashboard` (`sn`, `code`, `email`, `book_category`) VALUES
(3, 'jA6C2x_3', 'sm12@gmail.com', 'Technologiest  Books'),
(5, 'FaXCJR_5', 'sm12@gmail.com', 'Adventure Book'),
(10, 'axgJAG_10', 'sm12@gmail.com', 'Science Books');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sn` int(11) NOT NULL,
  `code` varchar(60) CHARACTER SET latin1 NOT NULL,
  `to_email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `to_code` varchar(60) CHARACTER SET latin1 NOT NULL,
  `from_email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `from_code` varchar(60) CHARACTER SET latin1 NOT NULL,
  `msg` blob NOT NULL,
  `dt` varchar(60) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sn`, `code`, `to_email`, `to_code`, `from_email`, `from_code`, `msg`, `dt`) VALUES
(0, '', '', '', '', '', 0x6a6b6473, ''),
(0, '', '', '', '', '', 0x6a6b6473626a6866, ''),
(0, '', '', '', '', '', 0x6a6b736764, ''),
(5, 'BJLQVj_5', 'arg1@gmail.com', '73MYu4_2', 'vans12@gmail.com', '', 0x697573666772737569, '2022-07-30'),
(9, 'CTZctw_9', 'naveen12@gmail.com', 'dlOZ6c_5', 'arg1@gmail.com', 'nFEhgT_9', 0x776879, '2022-07-31'),
(10, 'LPRekx_10', 'naveen12@gmail.com', 'dlOZ6c_5', 'naveen12@gmail.com', '67VEv8_7', 0x68676768, '2022-07-31'),
(11, 'FKTXlp_11', 'naveen12@gmail.com', '67VEv8_7', 'naveen12@gmail.com', '67VEv8_7', 0x6e766d782c, '2022-07-31'),
(13, 'Hbdu13_13', 'naveen12@gmail.com', 'dlOZ6c_5', 'arg1@gmail.com', 'U6BKxm_14', 0x776865666277, '2022-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `sent`
--

CREATE TABLE `sent` (
  `sn` int(11) NOT NULL,
  `code` varchar(60) CHARACTER SET latin1 NOT NULL,
  `to_email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `to_code` varchar(60) CHARACTER SET latin1 NOT NULL,
  `from_email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `from_code` varchar(60) CHARACTER SET latin1 NOT NULL,
  `msg` blob NOT NULL,
  `reply_date` varchar(60) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sent`
--

INSERT INTO `sent` (`sn`, `code`, `to_email`, `to_code`, `from_email`, `from_code`, `msg`, `reply_date`) VALUES
(1, 'CDJetu_1', 'arg1@gmail.com', '1u4vm5_8', 'naveen12@gmail.com', 'LPRekx_10', 0x686a61636a61, '2022-07-31'),
(2, 'ELRkn0_2', 'arg1@gmail.com', 'nFEhgT_9', 'naveen12@gmail.com', 'dlOZ6c_5', 0x4d722e6b687572616e61, '2022-07-31'),
(3, 'DFLUfq_3', 'arg1@gmail.com', '1u4vm5_8', 'naveen12@gmail.com', 'dlOZ6c_5', 0x76687663686a63, '2022-07-31'),
(4, 'AKUkp9_4', 'arg1@gmail.com', '1u4vm5_8', 'naveen12@gmail.com', 'dlOZ6c_5', 0x73767376, '2022-07-31'),
(5, 'FXaow1_5', 'naveen12@gmail.com', '67VEv8_7', 'naveen12@gmail.com', 'dlOZ6c_5', 0x616476636a616376616a637661, '2022-07-31'),
(6, 'CVqsy0_6', 'arg1@gmail.com', 'nFEhgT_9', 'naveen12@gmail.com', '1u4vm5_8', 0x72677265, '2022-08-01'),
(7, 'BJLZdy_7', 'naveen12@gmail.com', 'J1MSwO_6', 'arg1@gmail.com', 'dlOZ6c_5', 0x6e7362, '2022-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(60) CHARACTER SET latin1 NOT NULL,
  `lname` varchar(60) CHARACTER SET latin1 NOT NULL,
  `email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(11) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `phone`, `status`) VALUES
('Priyal', 'Singhal', 'priyal12@gmail.com', '1234', '9087234561', 0),
('Priyal', 'Singhal', 'priyal12@gmail.com', '1234', '9087234561', 0),
('Namn', 'Singhal', 'naveen12@gmail.com', '1234', '9093389392', 0),
('Ramesh', 'Singh', 'ramesh12@gmail.com', '1234', '4322453323', 0),
('Aarohi', 'Gupta', 'arg1@gmail.com', '1234', '9876543212', 0),
('vanshika ', 'Agrawal', 'vans12@gmail.com', '1234', '78244294292', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
