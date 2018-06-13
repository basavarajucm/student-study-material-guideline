-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2017 at 06:30 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentaccount`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'basu', 'basu44567@gmail.com', 'man', 'qqq'),
(2, 'manu', 'manu@gmail.com', 'man', 'qqqdccslducsdvxjxjkbcksaxjcbxkcfskbdcmdkvckjsbxscskdjcn mxc bjs'),
(3, '', '', '', ''),
(4, 'manu', 'manu@gmail.com', 'man', 'qqqdccslducsdvxjxjkbcksaxjcbxkcfskbdcmdkvckjsbxscskdjcn mxc bjs'),
(5, 'basappa', 'basu44567@gmail.com', 'maths', 'mnadfvgn'),
(6, 'basappa', 'basu44567@gmail.com', 'maths', 'mnadfvgn'),
(7, 'basappa', 'basu44567@gmail.com', 'maths', 'mnadfvgn'),
(8, 'manu', 'basu44567@gmail.com', 'maths', 'mg,,jh'),
(9, 'manu', 'basu44567@gmail.com', 'maths', 'mg,,jh'),
(10, '', '', '', ''),
(11, 'manu', 'nandan@gmail.com', 'web', 'fkdyhcf'),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, 'manu', 'basu44567@gmail.com', 'web', 'sir please upload 3rd unit notes'),
(15, 'dd', 'ddd', 'dddddd', 'dddddddddddddddd'),
(16, 'dd', 'ddd', 'dddddd', 'dddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `usn` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`login_id`),
  KEY `usn` (`usn`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `myuploads`
--

CREATE TABLE IF NOT EXISTS `myuploads` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myuploads`
--


-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `usn` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `cource` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`usn`, `sname`, `fname`, `address`, `sex`, `cource`, `email`, `password`, `mobile`) VALUES
('6', 'manu', 'manjunath', 'chandravadi', 'male', 'MCA', 'manu@gmail.com', 'manu', '9964976363'),
('2', 'basu', 'manjunath', 'chandravadi', 'male', 'MCA', 'basu44567@gmail.com', '1234', '9964976363'),
('1', 'basu', 'manjunath', 'chandravadi', 'male', 'MCA', 'basu44567@gmail.com', '123', '9964976363');

-- --------------------------------------------------------

--
-- Table structure for table `stfregister`
--

CREATE TABLE IF NOT EXISTS `stfregister` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `stfregister`
--

INSERT INTO `stfregister` (`id`, `sname`, `designation`, `email`, `mobile`) VALUES
(14, 'basu', 'lecturer', 'basu44567@gmail.com', '99999'),
(19, 'manu111', 'lecturer', 'basu44567@gmail.com', '9964976363');

-- --------------------------------------------------------

--
-- Table structure for table `stlogin`
--

CREATE TABLE IF NOT EXISTS `stlogin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `stlogin`
--


-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `sem` int(10) NOT NULL,
  `file` varchar(50) NOT NULL,
  `path` varchar(500) NOT NULL,
  `about` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `username`, `sub`, `sem`, `file`, `path`, `about`) VALUES
(75, 'basu', 'as', 1, '2Certificate.docx', 'upload/2Certificate.docx', ''),
(77, 'nandan', 'web', 1, '2Certificate.docx', 'upload/2Certificate.docx', ''),
(74, 'basu', 'gh', 1, 'demo.java', 'upload/demo.java', ''),
(76, 'nandan', 'web', 4, 'hello.pdf', 'upload/hello.pdf', ''),
(72, '', 'mca', 1, 'img994.jpg', 'upload/img994.jpg', ''),
(69, 'basu', 'man', 1, '1rn15mca2ndsem.pdf', 'upload/1rn15mca2ndsem.pdf', ''),
(70, 'basu', 'man', 1, '1rn15mca2ndsem.pdf', 'upload/1rn15mca2ndsem.pdf', ''),
(78, 'suma', 'java', 4, 'cg proje txbasu resume.doc', 'upload/cg proje txbasu resume.doc', ''),
(79, 'suma', 'java', 4, 'Unit02-JSP-2.pptx', 'upload/Unit02-JSP-2.pptx', ''),
(80, 'nandan', 'web', 4, '1rn15mca2ndsem.pdf', 'upload/1rn15mca2ndsem.pdf', ''),
(96, 'basu', 'j2ee', 4, 'Welcome to VTU.pdf', 'C:wampwwwPhpProject1uploadsWelcome to VTU.pdf', ''),
(95, 'nandan', 'j2ee', 8, 'Welcome to VTU.pdf', 'C:wampwwwPhpProject1uploadsWelcome to VTU.pdf', ''),
(94, 'nandan', 'j2ee', 4, 'Lab_manual_CN_III sem A & B(CN).doc', 'uploads/Lab_manual_CN_III sem A & B(CN).doc', '4th unit'),
(93, 'naga', 'j2ee', 4, '1rn15mca13.doc', 'uploads/1rn15mca13.doc', 'maaaaa'),
(92, 'naga', 'j2ee', 4, '1rn15mca2ndsem(2).pdf', 'uploads/1rn15mca2ndsem(2).pdf', 'maaaaa'),
(91, 'naga', 'j2ee', 4, 'ADHR.jpg', 'uploads/ADHR.jpg', 'maaaaa'),
(90, 'naga', 'j2ee', 4, 'UNIT III-MA-RN.ppt', 'uploads/UNIT III-MA-RN.ppt', 'maaaaa'),
(97, 'basu', 'j2ee', 4, 'Welcome to VTU.pdf', 'C:wampwwwPhpProject1uploadsWelcome to VTU.pdf', ''),
(98, 'basu', 'j2ee', 4, 'Welcome to VTU.pdf', 'C:wampwwwPhpProject1uploadsWelcome to VTU.pdf', ''),
(99, '', '', 0, '', 'upload/', ''),
(100, '', '', 0, '', 'upload/', ''),
(101, '', '', 0, '', 'upload/', ''),
(102, '', '', 0, '', 'upload/', ''),
(103, 'basu', 'java', 1, 'basu resume.doc', 'upload/basu resume.doc', ''),
(104, '', '', 0, '', 'upload/', ''),
(105, 'nandan', 'man', 4, 'basu_resume.doc', 'upload/basu_resume.doc', 'sjkucdsx'),
(106, 'suma', 'j2ee', 4, 'dhanya_resume.doc', 'upload/dhanya_resume.doc', '4th unit'),
(107, 'prajwal ', 'cg', 2, 'CG_july-2008.pdf', 'upload/CG_july-2008.pdf', 'cg'),
(108, 'basappa', 'maths', 4, 'CG-Lab_manual.pdf', 'upload/CG-Lab_manual.pdf', 'mothing'),
(109, 'basappa', 'maths', 4, 'CG-Lab_manual.pdf', 'upload/CG-Lab_manual.pdf', 'mothing'),
(110, 'basu', 'maths', 1, 'CG-jan-2010.pdf', 'upload/CG-jan-2010.pdf', 'ssss'),
(111, 'basuu', 'dddddd', 1, 'CG_Practice_Lab_Programs.doc', 'upload/CG_Practice_Lab_Programs.doc', 'ssss'),
(112, 'basuu', 'dddddd', 1, 'CG_Practice_Lab_Programs.doc', 'upload/CG_Practice_Lab_Programs.doc', 'ssss'),
(113, 'basuu', 'dddddd', 1, 'CG_Practice_Lab_Programs.doc', 'upload/CG_Practice_Lab_Programs.doc', 'ssss'),
(114, 'basu', 'as', 1, 'CG_jan-2007.pdf', 'upload/CG_jan-2007.pdf', 'ljhsds');
