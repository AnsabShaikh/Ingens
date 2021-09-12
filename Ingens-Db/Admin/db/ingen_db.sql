-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 10:20 AM
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
-- Database: `ingens_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(20) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `c_name`, `mail`, `mobile`, `sub`, `msg`) VALUES
(1, 'ansab', 'ansab@gmail.com', '9889098789', 'hello world', 'job application'),
(3, 'aaaaaa', 'aaa', 'sssss', 'aaaaaaaa', 'aaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `contact_1`
--

CREATE TABLE `contact_1` (
  `id` int(20) NOT NULL,
  `text` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `contact_1`
--

INSERT INTO `contact_1` (`id`, `text`, `mobile`) VALUES
(3, 'Fresher ', '9900079073');

-- --------------------------------------------------------

--
-- Table structure for table `contact_2`
--

CREATE TABLE `contact_2` (
  `id` int(20) NOT NULL,
  `text` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `contact_2`
--

INSERT INTO `contact_2` (`id`, `text`, `mobile`) VALUES
(1, 'Business Development Manager:', '9972001537');

-- --------------------------------------------------------

--
-- Table structure for table `con_career`
--

CREATE TABLE `con_career` (
  `id` int(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `con_career`
--

INSERT INTO `con_career` (`id`, `mobile`, `mail`) VALUES
(2, '9513644110', 'humanresource@ingens.in');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(20) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `text`) VALUES
(2, 'Should be a graduate or post graduate');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(20) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `e_name`, `mail`, `mobile`, `msg`) VALUES
(2, 'Jayant', 'jay@gmail.com', '9878675634', 'hello everyone'),
(3, 'ansab', 'ansab@gmail.com', '9890987867', 'enquiry for job'),
(4, 'dgdgd', 'gfxgf', 'bvbgfhf', 'xvxbfhjh'),
(5, 'afsha', 'aaa', 'aaa', 'aaaaaa'),
(6, 'addd', 'sss', 'aaaa', 'ssss'),
(7, 'qqqqqqqqq', 'ssssssss', 'xxxxxxx', 'aaaaaaaaaa'),
(8, 'prashant', 'prashant@gmail.com', '9809897867', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `hiring`
--

CREATE TABLE `hiring` (
  `id` int(20) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `hiring`
--

INSERT INTO `hiring` (`id`, `text`) VALUES
(1, ' Staffing Analyst ( 0 - 1 years experience)'),
(2, ' Senior Staffing Analyst ( 1 - 3 years experience)'),
(4, ' Staffing Specialist ( 3+ years experience)');

-- --------------------------------------------------------

--
-- Table structure for table `home_card`
--

CREATE TABLE `home_card` (
  `id` int(10) NOT NULL,
  `image_file` blob NOT NULL,
  `title_text` varchar(100) NOT NULL,
  `data_text` varchar(200) NOT NULL,
  `more_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `home_card`
--

INSERT INTO `home_card` (`id`, `image_file`, `title_text`, `data_text`, `more_link`) VALUES
(1, 0x7765622e6a7067, 'Website Designing', 'A business without an online presence is like a computer without internet. Go global. Make your presence felt. Be the spider in this magnificent world of web.', 'web.php'),
(2, 0x67616d652e6a7067, 'Gaming Solution', 'The world is getting smarter and better connected by the day. So should your business. Recharge your business and reach your customers', 'gaming.php'),
(3, 0x506179726f6c6c2e6a7067, 'Payroll Services', 'Expand your footprint and aim for the sky. Harness the power of virtual clouds to rejuvenate your business with flexibility, scalability, security, reliability, stability.', 'payroll.php');

-- --------------------------------------------------------

--
-- Table structure for table `hot_job`
--

CREATE TABLE `hot_job` (
  `id` int(20) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `job` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `hot_job`
--

INSERT INTO `hot_job` (`id`, `a_name`, `mail`, `mobile`, `resume`, `job`) VALUES
(19, 'ansab shaikh', 'ansab@gmail.com', '9890876756', '1 (1).docx', 'Web Developer and Designer'),
(20, 'jayant', 'jay@gmail.com', '9089786756', '1 (2).docx', 'Python Coders');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `id` int(20) NOT NULL,
  `image_file` blob NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`id`, `image_file`, `title`) VALUES
(4, 0x312e6a7067, 'CONSUMER MARKETS'),
(6, 0x342e6a7067, 'RETAIL'),
(7, 0x352e6a7067, 'MARKET RESEARCH'),
(8, 0x362e6a7067, 'BANKING & FINANCIAL SERVICES'),
(11, 0x31352e6a7067, 'SUPPLY  CHAIN & LOGISTICS'),
(13, 0x32302e6a7067, ' POWER & ENERGY'),
(14, 0x392e6a7067, 'INFRASTRUCTURE, REALTY & CONSTRUCTION'),
(15, 0x322e6a7067, 'EDUCATION, NGO & SOCIAL ENTERPRISE'),
(16, 0x372e6a7067, 'LIFE SCIENCES & BIOTECHNOLOGY '),
(17, 0x332e6a7067, 'TRAVEL & HOSPITALITY '),
(18, 0x31302e6a7067, 'GAMING & SPORT'),
(19, 0x31372e6a7067, 'MEDIA & ENTERTAINMENT'),
(20, 0x31322e6a7067, ' MEDICAL DEVICES & DIAGNOSTICS '),
(22, 0x31342e6a7067, 'BUSINESS & PROFESSIONAL SERVICES '),
(23, 0x31362e6a7067, 'INTERNET / DOTCOM / ECOMMERCE ');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(20) NOT NULL,
  `job` varchar(50) NOT NULL,
  `req` varchar(100) NOT NULL,
  `vac` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job`, `req`, `vac`) VALUES
(2, 'Web Developer and Designer', 'Msc(Computer Science),MCA,B.E(Computer Science)', 10),
(3, 'Python Coders', 'Msc(Computer Science),MCA,B.E(Computer Science)', 10),
(4, 'ERP Developer', 'Msc(Computer Science),B.E(Computer Science)', 5),
(5, 'Human Resource	', 'MBA,BBA,M.Com', 20),
(6, '	C Programming Expert', '	Msc(Computer Science),MCA,B.E(Computer Science)', 25),
(7, 'Software Engineer', 'B.E(Computer Science)', 40),
(8, '	Data Analyst', 'Msc(Computer Science),B.E(Computer Science)', 10),
(9, '	Java Programmer', 'Msc(Computer Science),MCA,B.E(Computer Science)', 60);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(8, 0x696d312e6a7067),
(9, 0x696d322e6a706567),
(10, 0x696d332e6a7067),
(11, 0x612e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `text_home`
--

CREATE TABLE `text_home` (
  `id` int(20) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `text_home`
--

INSERT INTO `text_home` (`id`, `text`) VALUES
(2, '<p style=\"text-align: justify;\"><span style=\"font-size: 14pt;\">Ingens Management Services&nbsp; Pvt. Ltd is an emerging HR Outsourcing organisation located in a charming city&nbsp; Pune providing dynamic and right talent for right place !</span></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_1`
--
ALTER TABLE `contact_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_2`
--
ALTER TABLE `contact_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `con_career`
--
ALTER TABLE `con_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiring`
--
ALTER TABLE `hiring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_card`
--
ALTER TABLE `home_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_job`
--
ALTER TABLE `hot_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_home`
--
ALTER TABLE `text_home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_1`
--
ALTER TABLE `contact_1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_2`
--
ALTER TABLE `contact_2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `con_career`
--
ALTER TABLE `con_career`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hiring`
--
ALTER TABLE `hiring`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_card`
--
ALTER TABLE `home_card`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hot_job`
--
ALTER TABLE `hot_job`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `text_home`
--
ALTER TABLE `text_home`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
