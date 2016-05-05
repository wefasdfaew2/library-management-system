-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2016 at 07:34 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `aid` smallint(6) NOT NULL COMMENT 'auto incrementing author id',
  `topic_id` varchar(2) NOT NULL COMMENT 'topic id foreign key',
  `branch_id` varchar(2) NOT NULL COMMENT 'branch id foreign key',
  `author_id` varchar(4) NOT NULL COMMENT 'author id based on branch id ',
  `author_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`aid`, `topic_id`, `branch_id`, `author_id`, `author_name`) VALUES
(1, '01', '01', '0001', 'hjavsi'),
(2, '01', '01', '0002', 'jhsv'),
(3, '01', '01', '0002', 'umang'),
(4, '03', '02', '0003', 'nilesh'),
(5, '01', '01', '0004', 'nilesh'),
(6, '02', '03', '0001', 'iwdjbfw'),
(7, '03', '02', '0002', 'kjbo'),
(8, '08', '02', '0001', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `blood_id` int(3) NOT NULL,
  `blood_name` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`blood_id`, `blood_name`) VALUES
(1, 'A+ve'),
(2, 'A-ve'),
(5, 'AB+ve'),
(6, 'AB-ve'),
(3, 'B+ve'),
(4, 'B-ve'),
(7, 'O+ve'),
(8, 'O-ve');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bk_id` mediumint(9) NOT NULL COMMENT 'auto incrementing bookid',
  `branch_id` varchar(2) NOT NULL COMMENT 'branch_id foreign key',
  `topic_id` varchar(2) NOT NULL COMMENT 'topic_id foreign key',
  `author_id` varchar(4) NOT NULL COMMENT 'author_id foreign key',
  `book_id` varchar(10) NOT NULL COMMENT 'book_id comprising of branch+topic+author+copy_id',
  `publication_id` tinyint(4) NOT NULL COMMENT 'publication_id foreign key',
  `copy` tinyint(2) NOT NULL COMMENT 'copy_id foreign key',
  `book_name` varchar(30) NOT NULL,
  `book_type` varchar(15) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `purchase_date` date NOT NULL COMMENT 'describes purchasing date of book'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bk_id`, `branch_id`, `topic_id`, `author_id`, `book_id`, `publication_id`, `copy`, `book_name`, `book_type`, `cost`, `purchase_date`) VALUES
(1, '01', '02', '0001', '0102000101', 1, 1, 'ok', 'Educational', '1111', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `bookold`
--

CREATE TABLE `bookold` (
  `bkold_id` mediumint(9) NOT NULL COMMENT 'auto incrementing bookoldid',
  `branch_id` varchar(2) NOT NULL COMMENT 'branch_id foreign key',
  `topic_id` varchar(2) NOT NULL COMMENT 'topic_id foreign key',
  `author_id` varchar(4) NOT NULL COMMENT 'author_id foreign key',
  `bookold_id` varchar(8) NOT NULL COMMENT 'book_id comprising of branch+topic+author+copy_id',
  `publication_id` tinyint(4) NOT NULL COMMENT 'publication_id foreign key',
  `copy_id` varchar(2) NOT NULL COMMENT 'copy_id foreign key',
  `bookold_name` varchar(30) NOT NULL,
  `cost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` tinyint(4) NOT NULL COMMENT 'auto incrementing branch id',
  `branch_id` varchar(2) NOT NULL COMMENT 'same b_id with 0 as a prefix',
  `branch_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `branch_id`, `branch_name`) VALUES
(1, '01', 'Computer Engineering'),
(2, '02', 'Electrical Engineering'),
(3, '03', 'Mechanical Engineering'),
(4, '04', 'Electrical Engineering'),
(5, '05', 'Civil Engineering'),
(6, '06', 'Instrumental Engineering'),
(7, '07', 'Electronics and Telecommunications'),
(8, '01', 'Science'),
(9, '09', 'commerce'),
(10, '10', 'arts'),
(11, '11', 'eco');

-- --------------------------------------------------------

--
-- Table structure for table `co-author`
--

CREATE TABLE `co-author` (
  `ca_id` smallint(6) NOT NULL COMMENT 'auto incrementing co-author id',
  `topic_id` varchar(2) NOT NULL COMMENT 'topic id foreign key',
  `branch_id` varchar(2) NOT NULL COMMENT 'branch id foreign key',
  `co-author_id` varchar(4) NOT NULL COMMENT 'co-author id based on branch id',
  `co-author_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `college_id` int(3) NOT NULL,
  `college_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`) VALUES
(2, 'K.J Somaiya, Vidyavihar'),
(4, 'TSEC, Bandra'),
(3, 'VESIT, Chembur'),
(1, 'VJTI, Matunga');

-- --------------------------------------------------------

--
-- Table structure for table `copy`
--

CREATE TABLE `copy` (
  `c_id` tinyint(4) NOT NULL,
  `copy_id` varchar(2) NOT NULL,
  `copy_value` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `id` tinyint(4) NOT NULL,
  `magazine_id` varchar(5) NOT NULL,
  `magazine_name` varchar(100) NOT NULL,
  `publication_id` tinyint(4) NOT NULL,
  `author_id` varchar(4) NOT NULL,
  `cost` varchar(15) NOT NULL,
  `purchase_date` date NOT NULL,
  `book_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` smallint(6) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_1` varchar(12) NOT NULL,
  `contact_2` varchar(12) DEFAULT NULL,
  `address_building` varchar(50) NOT NULL,
  `address_street` varchar(50) NOT NULL,
  `address_city` varchar(25) NOT NULL,
  `address_state` int(2) NOT NULL,
  `address_pin` varchar(6) NOT NULL,
  `date_of_joining` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` varchar(10) NOT NULL,
  `college` int(3) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `course` varchar(10) NOT NULL,
  `current_year` smallint(2) DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  `blood_group` int(2) DEFAULT NULL,
  `university` int(3) NOT NULL,
  `year_of_passing` varchar(16) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `domain_of_work` varchar(30) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `branch` tinyint(4) NOT NULL COMMENT 'refers to b_id in branch table'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `email`, `contact_1`, `contact_2`, `address_building`, `address_street`, `address_city`, `address_state`, `address_pin`, `date_of_joining`, `type`, `college`, `company`, `course`, `current_year`, `gender`, `blood_group`, `university`, `year_of_passing`, `designation`, `domain_of_work`, `status`, `branch`) VALUES
(1, 'Nilesh', 'Chander', 'Thadani', '1994-07-19', 'nilesh.thadani@ves.ac.in', '09372111555', '', 'This is my address', 'qwerty', 'Ulhasnagar', 21, '421002', '2015-06-06 11:47:47', 'Student', 3, 'VSM', 'Degree', 4, 'Male', 3, 1, '2016-05', 'Volunteer', 'Web', 1, 1),
(2, 'Nisha', 'Raju', 'Sajnani', '1995-07-09', 'sajnaninisha19@gmail.com', '9022414157', '', 'my building', 'my street', 'ulhasnagar', 21, '421003', '2015-06-06 11:48:36', 'Student', 3, 'VSM', 'Degree', 4, 'Male', 3, 1, '2015-12', '', '', 1, 5),
(3, 'Viraj', 'A', 'Khatavkar', '2015-12-31', 'viraj.2438@gmail.com', '9876543212', '', 'qwerty', 'wertyghj', 'dombivli', 21, '432123', '2015-06-06 11:54:24', 'Student', 3, '', 'Degree', 0, 'Male', 1, 1, '2014-05', '', '', 0, 1),
(4, 'a', 'b', 'c', '2015-12-31', 'qwe@dvs.com', '1234567890', '', 'asdfgy', 'scvbh', 'scvgh', 11, '987654', '2015-06-06 11:55:40', 'Working', 4, 'shjd', 'Diploma', 1, 'Male', 1, 2, '2015-12', 'iv', 'ihv', 0, 1),
(5, 'hv', 'v', 'hv', '2013-12-31', 'hv@jh.ikbj', '1987654333', '', 'hfu', 'uhvv', 'hvh', 1, '654321', '2015-06-06 11:56:55', 'Student', 2, '', 'Degree', 0, 'Male', 3, 1, '2015-12', '', '', 1, 5),
(6, 'nishu', 'm', 'sajnani', '2004-07-15', 'nisha.sajnani@ves.ac.in', '9876543211', '', 'hjvib', 'jhvihv', 'Ulhasnagar', 1, '421002', '2015-06-18 09:41:17', 'Student', 2, '', 'Degree', 2, 'Male', 1, 1, '2019-02', '', '', 1, 1),
(7, 'nisha', 'kjbJKB', 'jb', '2014-09-05', 'ob@iv.com', '1234512123', '', 'ojbgjbi', 'uibiubib', 'Ulhasnagar', 21, '421002', '2015-06-23 18:09:32', 'Student', 2, 'VSM', 'Degree', 0, 'Male', 1, 1, '2014-12', '', '', 1, 2),
(8, 'ihv', 'hvj', 'ihjvij', '2008-05-31', 'jhb@kjb.in', '1234567890', '', 'yfchjb', 'ibib', 'iubibjkb', 1, '432123', '2015-06-23 18:11:06', 'Working', 2, '', 'Degree', 0, 'Female', 2, 1, '2014-12', '', '', 1, 2),
(9, 'Nilesh', 'dbobdbo', 'obob', '2014-11-30', 'kjbd@lb.com', '1234567890', '', 'kjbb', 'ojbob', 'Ulhasnagar', 21, '421002', '2015-06-23 18:29:52', 'Student', 2, '', 'Degree', 2, 'Male', 1, 1, '2014-12', '', '', 1, 1),
(10, 'lknp', 'onion', 'oknon', '2003-11-30', 'linon@onb.com', '1234567890', '', 'khjbvib', 'ibibib', 'ibib', 1, '123456', '2015-06-24 08:41:34', 'Working', 4, '', 'Degree', 1, 'Female', 1, 2, '2014-12', '', '', 1, 2),
(11, 'hema', 'ijb', 'ivb', '2002-12-31', 'dfv@oujb.com', '1234567891', '', 'sdf', 'dfv', 'Ulhasnagar', 21, '421002', '2015-06-24 18:36:34', 'Student', 2, 'VSM', 'Degree', 1, 'Female', 1, 1, '2015-12', '', '', 1, 1),
(12, 'nilesh', 'chander', 'thadani', '2014-12-31', 'milesh@gmail.com', '9372111555', '', 'snow white', 'aman talkies', 'Ulhasnagar', 21, '421003', '2015-06-29 05:59:18', 'Student', 3, 'VSM', 'Degree', 4, 'Male', 3, 1, '2016-06', '', '', 1, 1),
(14, 'Umang', 'Chander', 'Thadani', '2016-04-10', 'umang@gmail.com', '8087041707', '', 'Snow White Society', 'Near Aman Talkies', 'Ulhasnagar', 1, '421002', '2016-04-23 08:32:19', 'Student', 2, '', 'Degree', 2, 'Male', 2, 1, '2016-12', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `novel`
--

CREATE TABLE `novel` (
  `id` tinyint(4) NOT NULL,
  `novel_id` varchar(5) NOT NULL,
  `novel_name` varchar(100) NOT NULL,
  `author_id` varchar(4) NOT NULL,
  `cost` varchar(15) NOT NULL,
  `purchase_date` date NOT NULL,
  `publication_id` tinyint(4) NOT NULL,
  `book_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `p_id` tinyint(4) NOT NULL COMMENT 'foreign key in book relation',
  `publication_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`p_id`, `publication_name`) VALUES
(1, 'abc'),
(2, 'xyz'),
(3, 'nirali'),
(4, 'techmax'),
(5, 'technical');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(3) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Andaman and Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli'),
(9, 'Daman and Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry?'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttar Pradesh'),
(35, 'Uttarakhand'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` tinyint(1) NOT NULL,
  `status_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Active'),
(0, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `tid` smallint(6) NOT NULL COMMENT 'autoincrementing id',
  `topic_id` varchar(2) NOT NULL COMMENT 'topic id based on branch id',
  `branch_id` varchar(2) NOT NULL COMMENT 'branch id foreign key',
  `topic_name` varchar(30) NOT NULL COMMENT 'topic name'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`tid`, `topic_id`, `branch_id`, `topic_name`) VALUES
(1, '01', '01', 'html'),
(2, '02', '01', 'php'),
(3, '03', '03', 'java'),
(4, '04', '04', 'c++4'),
(5, '01', '03', 'comps'),
(6, '01', '01', 'it'),
(7, '01', '01', 'it'),
(8, '01', '01', 'it'),
(9, '01', '01', 'it'),
(10, '01', '01', 'it'),
(11, '03', '03', 'isjbd'),
(12, '08', '01', 'asdfgh'),
(13, '04', '03', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `university_id` int(3) NOT NULL,
  `university_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`university_id`, `university_name`) VALUES
(1, 'Mumbai University'),
(2, 'Pune University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `aid` (`aid`),
  ADD KEY `topic_id` (`topic_id`,`branch_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `author_name` (`author_name`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`blood_id`),
  ADD KEY `blood_name` (`blood_name`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bk_id`),
  ADD UNIQUE KEY `bk_id` (`bk_id`),
  ADD KEY `branch_id` (`branch_id`,`topic_id`,`author_id`,`publication_id`,`copy`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publication_id` (`publication_id`),
  ADD KEY `copy_id` (`copy`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `bookold`
--
ALTER TABLE `bookold`
  ADD PRIMARY KEY (`bkold_id`),
  ADD UNIQUE KEY `bk_id` (`bkold_id`),
  ADD KEY `branch_id` (`branch_id`,`topic_id`,`author_id`,`publication_id`,`copy_id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publication_id` (`publication_id`),
  ADD KEY `copy_id` (`copy_id`),
  ADD KEY `bookold_id` (`bookold_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `b_id` (`b_id`),
  ADD KEY `branch_name` (`branch_name`),
  ADD KEY `branch_name_2` (`branch_name`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `co-author`
--
ALTER TABLE `co-author`
  ADD PRIMARY KEY (`ca_id`),
  ADD UNIQUE KEY `ca_id` (`ca_id`),
  ADD KEY `topic_id` (`topic_id`,`branch_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `co-author_name` (`co-author_name`),
  ADD KEY `co-author_id` (`co-author_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`college_id`),
  ADD KEY `college_name` (`college_name`);

--
-- Indexes for table `copy`
--
ALTER TABLE `copy`
  ADD PRIMARY KEY (`copy_id`),
  ADD UNIQUE KEY `c_id` (`c_id`);

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `magazineid` (`magazine_id`),
  ADD KEY `publicationid` (`publication_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `member_email` (`email`),
  ADD KEY `member_bloodgroup` (`blood_group`,`university`,`branch`),
  ADD KEY `member_branch` (`branch`),
  ADD KEY `member_university` (`university`),
  ADD KEY `blood_group` (`blood_group`),
  ADD KEY `college` (`college`),
  ADD KEY `address_state` (`address_state`),
  ADD KEY `type_id` (`type`),
  ADD KEY `type` (`type`),
  ADD KEY `status` (`status`),
  ADD KEY `status_2` (`status`);

--
-- Indexes for table `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authorid` (`author_id`),
  ADD KEY `publication_id` (`publication_id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `state_name` (`state_name`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `status_name` (`status_name`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`tid`),
  ADD UNIQUE KEY `tid` (`tid`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`university_id`),
  ADD KEY `university_name` (`university_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `aid` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing author id', AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `blood_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bk_id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing bookid', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bookold`
--
ALTER TABLE `bookold`
  MODIFY `bkold_id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing bookoldid';
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `b_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing branch id', AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `co-author`
--
ALTER TABLE `co-author`
  MODIFY `ca_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing co-author id';
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `college_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `copy`
--
ALTER TABLE `copy`
  MODIFY `c_id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `novel`
--
ALTER TABLE `novel`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `p_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'foreign key in book relation', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `tid` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'autoincrementing id', AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `university_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`topic_id`),
  ADD CONSTRAINT `author_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`topic_id`),
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `book_ibfk_4` FOREIGN KEY (`publication_id`) REFERENCES `publication` (`p_id`);

--
-- Constraints for table `bookold`
--
ALTER TABLE `bookold`
  ADD CONSTRAINT `bookold_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `bookold_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`topic_id`),
  ADD CONSTRAINT `bookold_ibfk_3` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `bookold_ibfk_4` FOREIGN KEY (`publication_id`) REFERENCES `publication` (`p_id`),
  ADD CONSTRAINT `bookold_ibfk_5` FOREIGN KEY (`copy_id`) REFERENCES `copy` (`copy_id`);

--
-- Constraints for table `co-author`
--
ALTER TABLE `co-author`
  ADD CONSTRAINT `co@002dauthor_ibfk_1` FOREIGN KEY (`ca_id`) REFERENCES `author` (`aid`),
  ADD CONSTRAINT `co@002dauthor_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`topic_id`),
  ADD CONSTRAINT `co@002dauthor_ibfk_3` FOREIGN KEY (`co-author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `co@002dauthor_ibfk_4` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `co@002dauthor_ibfk_5` FOREIGN KEY (`co-author_name`) REFERENCES `author` (`author_name`);

--
-- Constraints for table `magazine`
--
ALTER TABLE `magazine`
  ADD CONSTRAINT `magazine_ibfk_1` FOREIGN KEY (`publication_id`) REFERENCES `publication` (`p_id`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`address_state`) REFERENCES `state` (`state_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_3` FOREIGN KEY (`university`) REFERENCES `university` (`university_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_5` FOREIGN KEY (`college`) REFERENCES `college` (`college_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_6` FOREIGN KEY (`blood_group`) REFERENCES `bloodgroup` (`blood_id`),
  ADD CONSTRAINT `member_ibfk_7` FOREIGN KEY (`status`) REFERENCES `status` (`status_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_8` FOREIGN KEY (`branch`) REFERENCES `branch` (`b_id`);

--
-- Constraints for table `novel`
--
ALTER TABLE `novel`
  ADD CONSTRAINT `novel_ibfk_1` FOREIGN KEY (`publication_id`) REFERENCES `publication` (`p_id`);

--
-- Constraints for table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
