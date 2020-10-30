-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 08:23 AM
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
-- Database: `practical14`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `rname` varchar(255) NOT NULL,
  `remail` varchar(255) NOT NULL,
  `rpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`rname`, `remail`, `rpassword`) VALUES
('Meet Shah', 'mshah5225@gmail.com', '123'),
('Meet shah ', 'mshah5225@gmail.com', 'hjk'),
('dharmayu', 'abc@gmail.com', '123'),
('nilesh shah ', 'abc@gmail.com', 'nilesh'),
('NIlesh shah', 'abc@gmail.com', '567');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title` varchar(255) NOT NULL,
  `data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title`, `data`) VALUES
('PM Says Property Cards Scheme \"Historical Move To Transform Rural India\"', 'New Delhi: Prime Minister Narendra Modi on Sunday launched the physical distribution of property cards under the \'\'SVAMITVA\'\' (ownership) scheme via video conferencing and asserted that it is a \"historic move\" set to transform rural India.\r\nThe move will pave the way for villagers to use the property as a financial asset for taking loans and other financial benefits.\r\n\r\nThe Prime Minister\'s Office (PMO) has said the launch will enable around one lakh property holders to download their property cards through an SMS link sent on their mobile phones, and this would be followed by the physical distribution of property cards by respective state governments.'),
('PM Modi, Nitish Kumar changed political course in Bihar: BJP chief JP Nadda at election rally in Gaya', 'In his first address during the election campaign in poll-bound Bihar, Bharatiya Janata Party (BJP) national president JP Nadda said on Sunday said Prime Minister Narendra Modi and chief minister Nitish Kumar have changed the policial course of the state.\r\n\r\n\r\nApplauding Modi for bringing in progressive change in sectors such as health & welfare, farming and education, Nadda said, “Modi hai toh mumkeen hai, Nitish (Kumar) hai toh pradesh aage badhega. (Modi makes it possible and Nitish’s leadership will take the state forward).”\r\n\r\n“Leadership of India is secured in hands of PM Modi,” he said.\r\n\r\nNadda also hailed Bihar chief minister for the combat strategy used against coronavirus (Covid-19) crisis. “Chief minister Nitish Kumar took care of people during Covid-19 crisis. His government also provided financial assistance to those outside Bihar,” the BJP leader said at Gaya rally. Nadda also assured people of Bihar that NDA will form the government in state with Nitish Kumar as the chief minister.\r\n\r\nDuring his address, the BJP chief took a shot at Congress and blamed the party of doing caste and religion based politics in the state.\r\n\r\n\r\n“Congress used to do politics on the basis of caste and religion. But Modi ji brought change. He said ‘Go to people with report card of your work, show them the work that has been done’. In the last five years, Modi government has done a lot of work in the fields of education, skill development, farmers’ welfare and health,” Nadda added.\r\n\r\nThe BJP leader was addressing an election rally in Gaya. This was the first public meeting by a senior BJP leader in Bihar ahead of the upcoming assembly elections. Accompanied by Bihar deputy chief minister Sushil Modi, Nadda first visited Patna’s Mahavir temple upon his arrival to seek blessings and offer prayer ahead of assembly election.\r\n\r\n'),
('Google Meet rolls out ‘Breakout Group’ feature, to allow 100 breakout rooms at once', 'The Breakout room feature enables teachers and educators to divide the participants on a group video call in different rooms for smooth and hassle-free communication. Moreover, it will also help in a seamless teaching-learning process while distributing project work to the students. Currently, the option of the Breakout room will enable teachers to make as many as 100 breakout groups in a single call.\r\n\r\nFurthermore, on the commencement of the meeting, Goggle would automatically divide participants into different breakout groups randomly. In addition, the moderator will have access to the feature of adding people into various groups manually as per his/her choice. Besides that, other G Suite applications and Google Workspace are rumoured to receive the update later this year.\r\n\r\n\r\nThis feature was touted to be one of the highly requested features by educators who want to increase the participation and engagement of their students in the class through discussions. As a result, moderators are now allowed to engage themselves in any conversation based in any group while admins will have the control pertaining to the creation of breakout groups along with shuffling them in the control panel.\r\n\r\nAlthough, Breakout Groups feature is available on the web but anyone can join them irrespective of the device being used for the purpose.\r\n\r\n\r\n\r\nAnother famous video-calling platform, Zoom has such features of Breakout rooms for many years, but Google has only brought it now to its applications. Unlike Google Meet, Zoom provides the facility of creating only 50 Breakout rooms in a single call. Last Month, Zoom further enhanced this feature by providing a self-select option to the users to choose the group according to their preference.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
