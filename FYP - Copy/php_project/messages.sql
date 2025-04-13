-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2024 at 02:04 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `response` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `response`, `text`) VALUES
(1, 'what is your proplems?', 'yes'),
(4, 'Al-Baha offers a variety of excellent restaurants to suit your preferences. If you\'re looking for a fine dining experience, Five Seasons Restaurant comes highly recommended. However, if you\'re interested in the best restaurant in Al-Baha according to locals, Al-Baik is the perfect choice.', 'What is the best restaurant in Al Baha?'),
(5, 'First, G20 Coffee specializes in offering beautiful décor and a peaceful atmosphere, making it an ideal spot for individuals and families. Additionally, there is 8Oz Coffee, known for offering all types of coffee and having a fantastic view.', 'What is the best cafe in Al-Baha?'),
(6, 'I recommend visiting Raghadan Forest first. It\'s a beautiful area with lush greenery and great mountain views.', 'What is the first place you recommend visiting in Al Baha?'),
(7, 'Raghadan Forest, Dhi Ayn Village. For more details, visit the Places page.', 'What are the most famous landmarks in Al-Baha?'),
(8, 'Summer (May-September).', 'When is the best time to visit Al-Baha?'),
(9, 'Al-Faleh Hotel is an ideal choice.', 'Where can I find good hotels in Al-Baha?'),
(10, 'Hiking, climbing, visiting heritage villages.', 'What activities are available in Al-Baha?'),
(11, 'Yes, such as Al-Baha Heritage Restaurant.', 'Are there restaurants that serve local cuisine?'),
(12, 'Some are free, like Raghadan Forest, while others have a small fee, like Dhi Ayn Archaeological Village.', 'How much does it cost to visit the landmarks?'),
(13, ' Yes, such as the Al-Baha Summer Festival.', 'Are there any festivals in Al-Baha?'),
(14, 'Yes, such as Al-Aqiq Mall, Al-Baha Mall, and traditional markets that showcase the city\'s culture.', 'Are there modern shopping areas in Al-Baha?'),
(15, 'Areekah and Jareesh.', 'What is the most famous local dish to try in Al-Baha?'),
(16, 'Yes, such as Al-Shukran Park and Prince Mishari Park.', 'Are there designated camping areas?'),
(17, 'Yes, there are several hospitals and health centers.', 'Are there medical centers and hospitals in Al-Baha?'),
(18, 'Visiting parks and recreational gardens.', 'What activities are suitable for families in Al-Baha?'),
(19, 'Yes, like the Sarat Mountains and Raghadan Forest trails.', 'Are there places for climbing or nature walks?'),
(20, 'Yes, there are entertainment events and play areas for children in the parks.', 'Are there special activities for children in Al-Baha?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
