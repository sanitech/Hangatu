-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 05:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hangatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `now` varchar(255) NOT NULL,
  `question` longtext NOT NULL,
  `phone` varchar(15) NOT NULL,
  `ntype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `now`, `question`, `phone`, `ntype`) VALUES
(1, 'name', 'know', 'bjbjnjnjnj', '+251973303667', ''),
(2, 'husni zeynu yusuf', 'know', 'name nnnkn nnn nnnmm nnm nnm', '0962018602', ''),
(3, 'husni zeynu yusuf', '10', 'ናመም ማምስ ምውው ሥፍ', '0962018602', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `nid` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `news` longtext NOT NULL,
  `ntype` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `title`, `news`, `ntype`, `date`, `image`) VALUES
(12, 'የሃንጋቱ ወረዳ የህንጻ ልማት እቅስቃሴ', 'ሃንጋቱ ወረዳ እየሰራ ካለባቸው የልማት ተግባራቶች መካከለ በዋነኝነት የሚጠቀሰው ሁለገብ የሆነው G+4 ህንጻ አንዱ ነው። ይህ ህንጻ በ 2016 የተጀመረ ሲሆን በ 2 አመት ውስጥ ይጠናቀቃል ተብሎ ይገመታል። ህንጻው የወረዳውን አጠቃላይ ስራዎችን በአንድ ህንጻ ላይ ለመስራት የሚያስችል ሲሆን እንደ ሃገር የተጀመረውን ልማታዊ እቅድም በተፋጠነ መንገድ እንዲሄድ ያግዛል።', 'amh', '0000-00-00 00:00:00', '../news/imageshangatu.jpg'),
(13, 'Solchi Misoma Anaa Hangatu', 'Gochalee misoomaa  anaan hangatu hojeechaa jiru kessaa isaaa guddaandhan k,an herramu kkkkkkk G+4   isaa tokkoodhaa. <br/>\r\nGammoon kun baraa 2016ttii kan egalamee yoo ta’uu waggaa lama kessatii kan xumuramu ni ta’a jedhamee ni tilmaamamaa. <br/>\r\nHojiilllee waligaalaa anichaa gomoo tokkoo irraatii hojachuun kan dandamuu yoo ta’uu misoomni akka biyyalessatii egalamee kaaraa safisaan akkaa demuu nu gargara <br/>', 'oro', '0000-00-00 00:00:00', '../news/imageshangatu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` longtext NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `lastlogin`) VALUES
(1, 'admin', '1341215dbe9acab4361fd6417b2b11bc', '2024-02-28 04:35:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
