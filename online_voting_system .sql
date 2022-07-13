-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 11:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `Award_ID` varchar(30) NOT NULL,
  `Award_name` varchar(30) NOT NULL,
  `A_Description` varchar(500) NOT NULL,
  `Admin_ID` varchar(30) NOT NULL,
  `A_image_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`Award_ID`, `Award_name`, `A_Description`, `Admin_ID`, `A_image_link`) VALUES
('AD20202', 'Most Popular Actor Award', 'This award is presented to winner of the most popular actor voting battle.', 'Vikee99', '../images/actor.jpg'),
('AD20203', 'Most Popular Singer Award', 'This award is presented to winner of the most popular actress voting battle.', 'Vikee99', '../images/singer.jpg'),
('AD20204', 'Most Popular Singer Award', 'This award is presented to winner of the most popular singer voting battle.', 'Vikee99', '../images/singer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `age`, `category_id`, `description`, `image_url`) VALUES
(10, 'Rithu Akarsha', 23, 2, 'Casted Teledramas/Films:\r\nAkadawariya ,\r\nSanda diyawara ,\r\nPoddi.', 'Rithu Akarsha.jpg'),
(12, 'Geethma Bandara', 22, 2, 'Casted Teledramas/Films:\r\nSangeethe ,\r\nNeela Pabalu ,\r\nAhas Maliga.', 'Geethma Bandara.jpg'),
(14, 'Oshadee Hewamaddhuma', 37, 2, 'Casted Teledramas/Films:\r\nPooja ,\r\nAnantha ,\r\nNadi,chathurya.', 'Oshadee Hewamaddhuma.jpg'),
(29, 'Roshel Rogers', 23, 2, 'Casted Teledramas/Films:\r\nDeweni Inima ,\r\nHiru Awidin ,\r\nSakkaran.', 'Roshel Rogers.jpg'),
(31, 'Sanuka Wickramasinghe', 2, 3, 'Top songs:\r\nSansara sihine ,\r\nChao malli ,\r\nTherunado.', 'Sanuka Wickramasinghe.jpg'),
(32, 'Shihan Mihiranga', 32, 3, 'Top songs:\r\nMihiraviye ,\r\nAsa gatena ,\r\nDinaka mage.', 'Shihan Mihiranga.jpg'),
(33, 'Chamara Weerasinghe', 37, 3, 'Top songs:\r\nKumuduliye ,\r\nSayure ,\r\nKiriwehere.', 'Chamara Weerasinghe.jpg'),
(34, 'Nilan Hettiarachchi', 26, 3, 'Top songs:\r\nYanna yanawada ,\r\nMiyanathuru ,\r\nMiyadennm.', 'Nilan Hettiarachchi.jpg'),
(40, 'Tharuka Vanniarachchi', 28, 2, 'Casted teledramas :\r\n                  Sihina\r\n                  Samanal pihatu\r\n                  Aba Yaluwo', 'Tharuka Vanniarachchi.jpg'),
(44, 'Roshan Ranawana', 34, 1, 'Casted Films:Asai man piyabanna\r\n             Hiri poda wassa\r\n             Challengers', 'Roshan Ranawana.jpg'),
(45, 'Ranjan Ramanayaka', 52, 1, 'Casted Films:Parliment Jokes\r\n            Jewithe lassnai\r\n            Maya\r\n            Sinhaya', 'Ranjan Ramanayaka.jpg'),
(46, 'Pubudu Chaturanga', 35, 1, 'Casted Films:Hiri poda wassa\r\n            Challengers\r\n            Maya\r\n            Super SIX', 'Pubudu Chaturanga.jpg'),
(47, 'Thumindu Dodantenna', 37, 1, 'Cast Teledramas : Kuumbiyo\r\n                  Thala', 'Thumindu Dodantenna.jpg'),
(48, 'Hemal Ranasinghe', 30, 1, 'Cast Films :Praveegaya\r\n            Bandanaya\r\n            Adaraneeya kathawak\r\n            Dedunu Akase', 'Hemal Ranasinghe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Best Singer'),
(2, 'Best Actress'),
(3, 'Best Actor');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `F_status` varchar(100) NOT NULL,
  `U_name` varchar(200) NOT NULL,
  `f_subject` varchar(200) NOT NULL,
  `f_message` varchar(2000) NOT NULL,
  `User_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `F_status`, `U_name`, `f_subject`, `f_message`, `User_name`) VALUES
(176, 'Negative', 'Wageesha', 'Not satisfied', 'This voting system needs a better internet connection. I really disappointed ', 'Wagiya99'),
(177, 'Positive', 'Tharushi', 'Powerfull security', 'Security is very good because even registration is also very secure. I really love this system.', 'Tharu99'),
(178, 'Positive', 'Tharindu', 'Excellent customer support', 'Customer service is very good and friendly. quick responses are also excellent', 'Tharindu99'),
(179, 'Positive', 'Nirmani99', 'User friendly website', 'Anyone can submit vote beacuse of the simpleness of this system.', 'Nirmani99'),
(182, 'Positive', 'sanjula', 'Good concept', 'This online voting system is very important for situations like these days. people can vote from home.', 'Sanjula99');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`First_name`, `Last_name`, `User_name`, `Email`, `Phone`, `Password`, `Status`, `Gender`) VALUES
('Dasun', 'Tharuka', 'Dasun99', 'Dasunthr@gmail.com', '0718887543', '$2y$10$ThHGf6iWT07BebMW256s2OHuRQuzBogxR94joGLI9mj.tnml0cTcO', 'genaral', 'Male'),
('Dulanjana', 'Lakshan', 'Dula99', 'Dulalakz@gmail.com', '0775555671', '$2y$10$vkNJPLMnLJhr8woN13TaG.mu.uhwKMvy9Q/ZC7rUfHlvZlkprYTxu', 'genaral', 'Male'),
('Nirmani', 'Liyanagolla', 'Nirmani99', 'Nirmanil@gmail.com', '0715252543', '$2y$10$cIEzrw14EhHhg/QA1QVjtuMtS28ZB5mk0ZTEUELDIZFuzJO8DtpPm', 'genaral', 'Female'),
('Sanjula', 'Dulshan', 'Sanjula99', 'sanjulad@gmail.com', '0773745671', '$2y$10$iB2NXVcWN/SZ8gzRez8HI.LZbSpgO3YqmbS4usllMS2Y2.JzYhbjO', 'genaral', 'Male'),
('Piumika', 'Saranga', 'Saranga99', 'piumikasaranga@gmail.com', '0765857245', '$2y$10$znhfgXAbEwuzojyrM8YSM.zOVqQ.vCqUtOJyvzkOgecsLWkhi3TwK', 'admin', 'Male'),
('Tharindu', 'Danushka', 'Tharindu99', 'Tharindud@gmail.com', '0715787543', '$2y$10$veD8rXExC2Ug4fqJ52MfKO3WANEORmvzlNY7GoC6H3Dx6SFu16NBy', 'genaral', 'Male'),
('Tharushi', 'Dissanayake', 'Tharu99', 'TharuV@gmail.com', '0715252671', '$2y$10$YgDI7fcGLxz6xLAO8.Mwyezx6R.pLHxobKgZzCrXVkFEO4VGyLzQO', 'genaral', 'Female'),
('Pathiranage', 'Vishwa', 'Vikee99', 'vikeegampaha@gmail.com', '0714255902', '$2y$10$EHilGlCaVv287X5a558cw.wbeBc.qhvH6tl28W7fPT/0APMUtgCvq', 'admin', 'Male'),
('Wageesha', 'Sandeepa', 'Wagiya99', 'wagee99@gmail.com', '0718557543', '$2y$10$mecV88MEInOibS4OmSqXIOdBUBEh1cTLUA2RDRaCU2dHG13CQi2zS', 'genaral', 'Male'),
('Ravindu', 'Yasith', 'Yasith99', 'ravinduyasithgtx@gmail.com', '0765523003', '$2y$10$NDdhn.ZdPypxmE8gjhpIiO7UX6FYhKiFD8Urb0pYYQbbxCWDxbhli', 'admin', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `vote` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `name`, `vote`) VALUES
(1, 'Roshan_Ranawana', 38),
(2, 'Hemal_Ranasinghe', 53),
(3, 'Thumindu_Dodatenna', 15),
(4, 'Ranjan_Ramanayaka', 20),
(5, 'Pubudu_Chathuranga', 17),
(6, 'Oshadhi_Hewamadduma', 18),
(7, 'Rithu_Akarsha', 23),
(8, 'Tharuka_Wanniarachchi', 34),
(9, 'Geethma_Bandara', 53),
(10, 'Roshel_Rogers', 65),
(11, 'Sanuka_Wikcramasinghe', 74),
(12, 'Chamara_Weerasinghe', 83),
(13, 'Nadeemal_Perera', 45),
(14, 'Shihan_Mihiranga', 34),
(15, 'Nilan_Hettiacrachchi', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`Award_ID`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_name`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
