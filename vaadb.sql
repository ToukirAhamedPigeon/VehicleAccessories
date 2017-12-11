-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 02:55 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `closedate` varchar(20) DEFAULT NULL,
  `paid` varchar(100) DEFAULT NULL,
  `rate` varchar(20) NOT NULL DEFAULT '0',
  `totalrated` int(11) DEFAULT NULL,
  `about` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `fileid` int(11) NOT NULL,
  `fileholder` int(11) NOT NULL,
  `filestatus` varchar(20) DEFAULT NULL,
  `filepath` varchar(100) NOT NULL,
  `holdertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`fileid`, `fileholder`, `filestatus`, `filepath`, `holdertype`) VALUES
(1, 1, 'profile', 'assets/files/profile/733toukirahamed20171022064034', 'user'),
(2, 2, 'profile', 'assets/files/profile/539toukirahamedpigeon20171022', 'user'),
(3, 3, 'profile', 'assets/files/profile/452pigeon120171029105546pm.pn', 'user'),
(4, 4, 'profile', 'assets/files/profile/341toukir120171029110043pm.pn', 'user'),
(5, 5, 'profile', 'assets/files/profile/499Mony20171029110543pm.png', 'user'),
(6, 6, 'profile', 'assets/files/profile/929mony120171029111324pm.png', 'user'),
(7, 7, 'profile', 'assets/files/profile/449Season20171030122414am.png', 'user'),
(8, 8, 'profile', 'assets/files/profile/999hijk20171114111835pm.jpg', 'user'),
(9, 9, 'profile', 'assets/files/profile/511atik20171114113818pm.jpg', 'user'),
(10, 10, 'profile', 'assets/files/profile/949mnop20171116080922am.jpg', 'user'),
(11, 11, 'profile', 'assets/files/profile/530akash20171127115855pm.jpg', 'user'),
(12, 12, 'profile', 'assets/files/profile/297sfdgfhfg20171128112732pm.j', 'user'),
(13, 13, 'profile', 'assets/files/profile/735nirjon20171202023748pm.jpg', 'user'),
(14, 14, 'profile', 'assets/files/profile/642Dolar20171205014928am.JPG', 'user'),
(15, 15, 'profile', 'assets/files/profile/378real20171203113249pm.JPG', 'user'),
(16, 10, 'logo', 'assets/files/organization/', 'organization'),
(17, 11, 'logo', 'assets/files/organization/911xyz20171208091108pmlogo.png', 'organization'),
(18, 11, 'image', 'assets/files/organization/911xyz20171208091108pmlogo.jpg', 'organization'),
(19, 12, 'logo', 'assets/files/organization/317abcdsd20171208093755pmlogo.jpg', 'organization'),
(20, 12, 'image', 'assets/files/organization/317abcdsd20171208093755pmlogo.jpg', 'organization'),
(21, 12, 'image', 'assets/files/organization/317abcdsd20171208093755pmlogo.jpg', 'organization'),
(22, 13, 'logo', 'assets/files/organization/josiah-weiss-435592.jpg', 'organization'),
(23, 13, 'image', 'assets/files/organization/ishan-seefromthesky-118580.jpg', 'organization'),
(24, 13, 'image', 'assets/files/organization/denys-nevozhai-351730.jpg', 'organization'),
(25, 14, 'logo', 'assets/files/organization/andre-benz-248744.jpg', 'organization'),
(26, 14, 'image', 'assets/files/organization/ishan-seefromthesky-118580.jpg', 'organization'),
(27, 14, 'image', 'assets/files/organization/hedi-alija-393665.jpg', 'organization'),
(28, 15, 'logo', 'assets/files/organization/947xcgh20171208103545pmlogo.jpg', 'organization'),
(29, 15, 'image', 'assets/files/organization/173xcgh20171208103545pmimage1.jpg', 'organization'),
(30, 15, 'image', 'assets/files/organization/652xcgh20171208103545pmimage3.jpg', 'organization'),
(31, 16, 'logo', 'assets/files/organization/322adfdsg20171209120131amlogo.jpg', 'organization'),
(32, 16, 'image', 'assets/files/organization/649adfdsg20171209120131amimage1.jpg', 'organization'),
(33, 16, 'image', 'assets/files/organization/927adfdsg20171209120131amimage2.jpg', 'organization'),
(34, 16, 'image', 'assets/files/organization/657adfdsg20171209120131amimage3.jpg', 'organization'),
(35, 16, 'image', 'assets/files/organization/148adfdsg20171209120132amimage4.jpg', 'organization'),
(36, 2, 'logo', 'assets/files/product/449mobil1320171209030412amlogo.jpg', 'product'),
(37, 2, 'image', 'assets/files/product/976mobil1320171209030412amimage1.jpg', 'product'),
(38, 2, 'image', 'assets/files/product/102mobil1320171209030412amimage2.jpg', 'product'),
(39, 3, 'logo', 'assets/files/product/924petrol1320171209030816amlogo.jpg', 'product'),
(40, 3, 'image', 'assets/files/product/680petrol1320171209030816amimage1.jpg', 'product'),
(41, 3, 'image', 'assets/files/product/521petrol1320171209030816amimage2.jpg', 'product'),
(42, 3, 'image', 'assets/files/product/523petrol1320171209030816amimage3.jpg', 'product'),
(43, 3, 'image', 'assets/files/product/455petrol1320171209030816amimage4.jpg', 'product'),
(44, 4, 'logo', 'assets/files/product/269range1320171209031945amlogo.jpg', 'product'),
(45, 4, 'image', 'assets/files/product/947range1320171209031945amimage2.jpg', 'product'),
(46, 5, 'logo', 'assets/files/product/541asdd1320171209032221amlogo.jpg', 'product'),
(47, 5, 'image', 'assets/files/product/222asdd1320171209032221amimage1.jpg', 'product'),
(48, 6, 'logo', 'assets/files/product/727asdfghj1320171209032639amlogo.jpg', 'product'),
(49, 6, 'image', 'assets/files/product/700asdfghj1320171209032639amimage1.jpg', 'product'),
(50, 6, 'image', 'assets/files/product/849asdfghj1320171209032639amimage2.jpg', 'product'),
(51, 7, 'logo', 'assets/files/product/995zxcvbnm1320171209032945amlogo.jpg', 'product'),
(52, 7, 'image', 'assets/files/product/555zxcvbnm1320171209032945amimage1.jpg', 'product'),
(53, 7, 'image', 'assets/files/product/589zxcvbnm1320171209032945amimage2.jpg', 'product'),
(54, 8, 'logo', 'assets/files/product/269fcdsfgdhgjh1320171209033134amlogo.jpg', 'product'),
(55, 8, 'image', 'assets/files/product/275fcdsfgdhgjh1320171209033134amimage1.jpg', 'product'),
(56, 8, 'image', 'assets/files/product/147fcdsfgdhgjh1320171209033134amimage2.jpg', 'product'),
(57, 17, 'logo', 'assets/files/organization/787season20171209063744pmlogo.jpg', 'organization'),
(58, 17, 'image', 'assets/files/organization/655season20171209063744pmimage1.jpg', 'organization'),
(59, 17, 'image', 'assets/files/organization/425season20171209063744pmimage2.jpg', 'organization');

-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE `lookup` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `value` varchar(20) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`id`, `name`, `value`, `type`, `parent`) VALUES
(1, 'Bangladesh', 'Bangladesh', 'country', NULL),
(3, 'India', 'India', 'country', NULL),
(4, 'Pakistan', 'Pakistan', 'country', NULL),
(5, 'Dhaka', 'Dhaka', 'Division', 1),
(6, 'Mymensingh', 'Mymensingh', 'Division', 1),
(7, 'Rangpur', 'Rangpur', 'Division', 1),
(8, 'Rajshahi', 'Rajshahi', 'Division', 1),
(9, 'Chittagong', 'Chittagong', 'Division', 1),
(10, 'Barishal', 'Barishal', 'Division', 1),
(11, 'Sylhet', 'Sylhet', 'Division', 1),
(12, 'Khulna', 'Khulna', 'Division', 1),
(13, 'Maharastra', 'Maharastra', 'Division', 3),
(14, 'West Bengal', 'West Bengal', 'Division', 3),
(15, 'Tamilnadu', 'Tamilnadu', 'Division', 3),
(16, 'Punjab', 'Punjab', 'Division', 4),
(17, 'Beluchistan', 'Beluchistan', 'Division', 4),
(18, ' Tangail', 'Tangail', 'District', 5),
(19, 'Kishoregonj', 'Kishoregonj', 'District', 5),
(20, 'Faridpur', 'Faridpur', 'District', 5),
(21, 'Manikgonj', 'Manikgonj', 'District', 5),
(22, 'Munshigonj', 'Munshigonj', 'District', 5),
(23, 'Mymensingh', 'Mymensingh', 'District', 6),
(24, 'Sherpur', 'Sherpur', 'District', 6),
(25, 'Jamalpur', 'Jamalpur', 'District', 6),
(26, 'Netrokona', 'Netrokona', 'District', 6),
(27, 'Rangpur', 'Rangpur', 'District', 7),
(28, 'Nilphamari', 'Nilphamari', 'District', 7),
(29, 'Rajshahi', 'Rajshahi', 'District', 8),
(30, 'Bogra', 'Bogra', 'District', 8),
(31, 'Joypurhat', 'Joypurhat', 'District', 8),
(32, 'Naogaon', 'Naogaon', 'District', 8),
(33, 'Chapainawabgonj', 'Chapainawabgonj', 'District', 8),
(34, 'Chittagong', 'Chittagong', 'District', 9),
(35, 'Coxsbazar', 'Coxsbazar', 'District', 9),
(36, 'Barishal', 'Barishal', 'District', 10),
(37, 'Jhalkathi', 'Jhalkathi', 'District', 10),
(38, 'Sylhet', 'Sylhet', 'District', 11),
(39, 'Sunamgonj', 'Sunamgonj', 'District', 11),
(40, 'Khulna', 'Khulna', 'District', 12),
(41, 'Narail', 'Narail', 'District', 12),
(42, 'Tangail', 'Tangail', 'Upazilla', 18),
(43, 'Ghatail', 'Ghatail', 'Upazilla', 18),
(44, 'Kishoregonj', 'Kishoregonj', 'Upazilla', 19),
(45, 'Bajitpur', 'Bajitpur', 'Upazilla', 19),
(46, 'Faridpur', 'Faridpur', 'Upazilla', 20),
(47, 'Vanga', 'Vanga', 'Upazilla', 20),
(48, 'Dhaka', 'Dhaka', 'District', 5),
(49, 'Dhaka', 'Dhaka', 'Upazilla', 48),
(50, 'Gulshan', 'Gulshan', 'Upazilla', 48),
(51, 'Banani', 'Banani', 'Upazilla', 48),
(52, 'Khilkhet', 'Khilkhet', 'Upazilla', 48),
(53, 'Uttara', 'Uttara', 'Upazilla', 48),
(54, 'Ramna', 'Ramna', 'Upazilla', 48),
(55, 'Dhanmondi', 'Dhanmondi', 'Upazilla', 48),
(56, 'Mirpur', 'Mirpur', 'Upazilla', 48),
(57, 'Jatrabari', 'Jatrabari', 'Upazilla', 48),
(58, 'Mohammadpur', 'Mohammadpur', 'Upazilla', 48),
(59, 'Manikgonj', 'Manikgonj', 'Upazilla', 21),
(60, 'Singair', 'Singair', 'Upazilla', 21),
(61, 'Munshigonj', 'Munshigonj', 'Upazilla', 22),
(62, 'Sirajdikhan', 'Sirajdikhan', 'Upazilla', 22),
(63, 'Mymensingh', 'Mymensingh', 'Upazilla', 23),
(64, 'Muktagacha', 'Muktagacha', 'Upazilla', 23),
(65, 'Valuka', 'Valuka', 'Upazilla', 23),
(66, 'Dhobaura', 'Dhobaura', 'Upazilla', 23),
(67, 'Fulbaria', 'Fulbaria', 'Upazilla', 23),
(68, 'Sherpur', 'Sherpur', 'Upazilla', 24),
(69, 'Nalitabari', 'Nalitabari', 'Upazilla', 24),
(70, 'Jamalpur', 'Jamalpur', 'Upazilla', 25),
(71, 'Islampur', 'Islampur', 'Upazilla', 25),
(72, 'Netrokona', 'Netrokona', 'Upazilla', 26),
(73, 'Modon', 'Modon', 'Upazilla', 26),
(74, 'Rangpur', 'Rangpur', 'Upazilla', 27),
(75, 'Pirganj', 'Pirganj', 'Upazilla', 27),
(76, 'Nilphamari', 'Nilphamari', 'Upazilla', 28),
(77, 'Saidpur', 'Saidpur', 'Upazilla', 28),
(78, 'Rajshahi', 'Rajshahi', 'Upazilla', 29),
(79, 'Boalia', 'Boalia', 'Upazilla', 29),
(80, 'Bogra', 'Bogra', 'Upazilla', 30),
(81, 'Adamdighi', 'Adamndighi', 'Upazilla', 30),
(82, 'Joypurhat', 'Joypurhat', 'Upazilla', 31),
(83, 'Akkelpur', 'Akkelpur', 'Upazilla', 31),
(84, 'Naogaon', 'Naogaon', 'Upazilla', 32),
(85, 'Atrai', 'Atrai', 'Upazilla', 32),
(86, 'Mr', 'Mr', 'Title', NULL),
(87, 'Miss', 'Miss', 'Title', NULL),
(88, 'Mrs', 'Mrs', 'Title', NULL),
(89, 'Dhaka', 'Dhaka', 'City', 1),
(90, 'Chittagong', 'Chittagong', 'City', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `messageto` int(11) NOT NULL,
  `messagefrom` int(11) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `content` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `datetime` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ownerid` int(11) NOT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `about` text,
  `rules` text,
  `phone` varchar(15) NOT NULL,
  `street` varchar(20) NOT NULL,
  `thana` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `startdate` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `closedate` varchar(30) DEFAULT NULL,
  `paid` double DEFAULT NULL,
  `rate` double NOT NULL DEFAULT '0',
  `totalrated` int(11) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `ownerid`, `latitude`, `longitude`, `about`, `rules`, `phone`, `street`, `thana`, `city`, `district`, `division`, `country`, `email`, `startdate`, `status`, `closedate`, `paid`, `rate`, `totalrated`, `website`) VALUES
(1, 'oilpump', 13, '', '', '', '', '01735717779', 'abcd road', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'oilpump@gmail.com', '2017/12/08 07:29:50pm', 'not approved', '', 0, 0, 0, ''),
(2, 'garaje', 13, '', '', '', '', '01735717779', 'abcd road', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'oilpump@gmail.com', '2017/12/08 08:09:19pm', 'not approved', '', 0, 0, 0, ''),
(3, 'abcd', 13, '', '', '', '', '01735717779', 'abcd road', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'abcd@gmail.com', '2017/12/08 08:18:12pm', 'not approved', '', 0, 0, 0, ''),
(4, 'asdf', 13, '', '', '', '', '01735717779', 'dfgfhfgh', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'asdf@gmail.com', '2017/12/08 08:20:16pm', 'not approved', '', 0, 0, 0, ''),
(5, 'asdfg', 13, '', '', '', '', '01735717779', 'asdfg', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/08 08:23:43pm', 'not approved', '', 0, 0, 0, ''),
(6, 'qwert', 13, '', '', '', '', '01735717779', 'sdffgghg', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/08 08:29:26pm', 'not approved', '', 0, 0, 0, ''),
(7, 'zxcv', 13, '', '', '', '', '01735717779', 'asdf', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/08 08:31:50pm', 'not approved', '', 0, 0, 0, ''),
(8, 'zxcvs', 13, '', '', '', '', '01735717779', 'asdf', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/08 08:34:07pm', 'not approved', '', 0, 0, 0, ''),
(9, 'zxcvsd', 13, '', '', '', '', '01735717779', 'asdf', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/08 08:49:48pm', 'not approved', '', 0, 0, 0, ''),
(10, 'zxcvse', 13, '', '', '', '', '01735717779', 'asdf', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/08 08:56:05pm', 'not approved', '', 0, 0, 0, ''),
(11, 'xyz', 13, '', '', '', '', '01735717779', 'xdffgh', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/08 09:11:07pm', 'not approved', '', 0, 0, 0, ''),
(12, 'abcdsd', 13, '', '', '', '', '01735717779', 'abcd road', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'abcd@gmail.com', '2017/12/08 09:37:55pm', 'not approved', '', 0, 0, 0, ''),
(13, 'pigeon', 13, '', '', '', '', '01735717779', 'abcd road', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/08 10:30:10pm', 'not approved', '', 0, 0, 0, ''),
(14, 'asdfx', 13, '', '', '', '', '01735717779', 'asdfg', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/08 10:33:18pm', 'not approved', '', 0, 0, 0, ''),
(15, 'xcgh', 13, '', '', '', '', '01735717779', 'fcgjhgkj', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/08 10:35:45pm', 'not approved', '', 0, 0, 0, ''),
(16, 'adfdsg', 13, '', '', '', '', '01735717779', 'dcfmhj', 'Khilkhet', 'Dhaka', 'Dhaka', 'Dhaka', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/09 12:01:31am', 'not approved', '', 0, 0, 0, ''),
(17, 'season', 13, '', '', '', '', '01735717779', 'santahar', 'Adamdeghi', 'Bogra', 'Bogra', 'Rajshahi', 'Bangladesh', 'toukir.ahamed.pigeon@gmail.com', '2017/12/09 06:37:44pm', 'not approved', '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `organizationid` int(11) NOT NULL,
  `brand` varchar(30) DEFAULT NULL,
  `price` varchar(100) NOT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `specification` text,
  `rate` varchar(20) NOT NULL DEFAULT '0',
  `rated` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `dateadded` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `organizationid`, `brand`, `price`, `unit`, `specification`, `rate`, `rated`, `status`, `dateadded`) VALUES
(1, 'mobil', 'oil', 13, 'No Brand', '100', 'kg', '', '0', NULL, 'valid', '2017/12/09 03:01:34am'),
(2, 'mobil', 'oil', 13, 'No Brand', '110', 'litre', '', '0', NULL, 'valid', '2017/12/09 03:04:12am'),
(3, 'petrol', 'oil', 13, 'No Brand', '130', 'litre', '', '0', NULL, 'valid', '2017/12/09 03:08:16am'),
(4, 'range', 'parts', 13, 'No Brand', '200', 'piece', '', '0', NULL, 'valid', '2017/12/09 03:19:45am'),
(5, 'asdd', 'oil', 13, 'No Brand', '100', 'kg', '', '0', NULL, 'valid', '2017/12/09 03:22:21am'),
(6, 'asdfghj', 'oil', 13, 'No Brand', '200', 'kg', '', '0', NULL, 'valid', '2017/12/09 03:26:39am'),
(7, 'zxcvbnm', 'oil', 13, 'No Brand', '2000', 'kg', '', '0', NULL, 'valid', '2017/12/09 03:29:45am'),
(8, 'fcdsfgdhgjh', 'oil', 13, 'No Brand', '110', 'kg', '', '0', NULL, 'valid', '2017/12/09 03:31:34am');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'normal',
  `status` varchar(20) DEFAULT 'active',
  `email` varchar(50) DEFAULT NULL,
  `nid` int(40) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `about` text,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `thana` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `title`, `firstname`, `lastname`, `type`, `status`, `email`, `nid`, `username`, `password`, `phone`, `about`, `street`, `city`, `thana`, `district`, `division`, `country`) VALUES
(1, 'Mr', 'Toukir', 'Pigeon', 'admin', 'active', 'toukir.ahamed.pigeon@gmail.com', 2147483647, 'toukirahamed', 'asdfg12345', '01735717779', 'Sing long her way size. Waited end mutual missed myself the little sister one. So in pointed or chicken cheered neither spirits invited. Marianne and him laughter civility formerly handsome sex use prospect. Hence we doors is given rapid scale above am. Difficult ye mr delivered behaviour by an. If their woman could do wound on. You folly taste hoped their above are and but. ', 'assfdsdgf', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(2, 'Mr', 'Toukir', 'Pigeon', 'normal', 'active', 'toukir.ahamed.pigeon@hotmail.com', 12334456, 'toukirahamedpigeon', 'asdfg12345', '01735717779', 'aeddtguyhtgu', 'asfdsfhgfkj', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(3, 'Mr', 'Toukir', 'Ahamed', 'normal', 'active', 'toukir.ahamed.pigeon@hotmail.com', 121345395, 'pigeon1', 'asdfg12345', '01735717779', 'it is a good day.', 'abcdroad', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(4, 'Mr', 'Toukir', 'Pigeon', 'normal', 'active', 'toukir.ahamed.pigeon@hotmail.com', 2147483647, 'toukir1', 'asdfg12345', '01735717779', 'hello world', 'abcdroad', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(5, 'Miss', 'Fahmida', 'Ahamed', 'normal', 'active', 'toukir.ahamed.pigeon@hotmail.com', 121345395, 'Mony', 'asdfg12345', '01735717779', '<p>a good day</p>\r\n', 'abcdroad', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(6, 'Mr', 'Fahmida', 'Ahamed', 'normal', 'active', 'toukir.ahamed.pigeon@gmail.com', 121345395, 'mony1', 'asdfg12345', '01735717779', 'it''s a  good day', 'abcdroad', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(7, 'Mr', 'Touhid', 'Ahamed', 'normal', 'active', 'toukir.ahamed.pigeon@gmail.com', 121345395, 'Season', 'asdfg12345', '01735717779', 'Hello world', 'abcdroad', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(8, 'Mr', 'abcd', 'efgh', 'normal', 'active', 'toukir.ahamed.pigeon@gmail.com', 2147483647, 'hijk', 'asdfg12345', '01735717779', 'dgfhgjkgkljhkl', 'hgvjhkjml.kjl;', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(9, 'Mr', 'atik', 'fahad', 'normal', 'active', 'toukir.ahamed.pigeon@gmail.com', 2147483647, 'atik', 'asdfg12345', '01735717779', '', 'cghjnhkjl', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(10, 'Mr', 'asdfg', 'hijkl', 'normal', 'active', 'toukir.ahamed.pigeon@gmail.com', 2147483647, 'mnop', 'asdfg12345', '01735717779', 'asdfg', 'assfdsdgf', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(11, 'Mr', 'Akash', 'Rahman', 'normal', 'active', 'akash@gmail.com', 2147483647, 'akash', 'abcd1234', '01735717779', 'as always', 'dchggjhkjkl', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(12, 'Mr', 'sadfsgf', 'sdghfjhg', 'normal', 'active', 'sdgfjhgj@gmail.com', 2147483647, 'sfdgfhfg', 'asdfg12345', '01735717779', 'ssdgfhjkl', 'sfgdfhgfjh', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(13, 'Mr', 'Tousif', 'Ahamed', 'normal', 'active', 'nirjon@gmail.com', 2147483647, 'nirjon', 'asdfg12345', '01735717779', 'He is a good boy.', 'abcdroad', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(14, 'Mr', 'Nafiut', 'Jaman', 'normal', 'active', 'dolar@gmail.com', 2147483647, 'Dolar', '123456', '01735717779', '<h3><strong>Hi, This is Nafiut Jaman Talukdar. I&#39;m a very good man.</strong></h3>\r\n', 'akkelpur, joypurhat', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh'),
(15, 'Mr', 'Saklain', 'Mostakim', 'normal', 'active', 'real@gmail.com', 2147483647, 'real', 'asdfg12345', '01735717779', '<h1>He is a very bad boy.</h1>\r\n\r\n<p>But,he is my brother.</p>\r\n', 'abcdroad', 'Dhaka', 'Khilkhet', 'Dhaka', 'Dhaka', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `contentid` int(11) NOT NULL,
  `contenttype` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `lookup`
--
ALTER TABLE `lookup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `fileid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `lookup`
--
ALTER TABLE `lookup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
