-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 02:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmd`
--

CREATE TABLE `cmd` (
  `ID` int(11) NOT NULL,
  `client` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmd`
--

INSERT INTO `cmd` (`ID`, `client`, `adress`, `tel`, `nom`, `prix`) VALUES
(1, '0', '0', 96578656, '0', 20),
(2, 'kaddi', 'GFFDGF', 615819924, 'pizza', 20),
(3, '', '', 0, 'Best Broccoli Salad', 20),
(4, '', '20 DH', 0, '', 0),
(5, 'kaddi agadir', '20 DH', 615819924, 'kaddi ismail', 0),
(6, 'tinghir', '20 DH', 615819924, 'kaddi ismail', 0),
(7, '', '20 DH', 0, '', 0),
(8, '', '20 DH', 0, '', 0),
(9, 'JKHXWCV', '20 DH', 9080463, 'KJWHXC.XCVXVCV', 0),
(10, '', '20 DH', 0, '', 0),
(11, '', '20 DH', 0, '', 0),
(12, '', '20 DH', 0, '', 0),
(13, 'ismail', 'ismail', 973825675, 'Easy Pasta Salad', 20),
(14, 'hello', 'tinghir', 615819924, 'Easy Pasta Salad', 20),
(15, '', '', 0, 'Easy Pasta Salad', 20),
(16, 'jhkjhqf', 'jhgcjxw', 8789989, 'Easy Pasta Salad', 20),
(17, '', '', 0, 'Easy Pasta Salad', 20),
(18, '', '', 0, 'Easy Pasta Salad', 20),
(19, '', '', 0, 'Easy Pasta Salad', 20),
(20, 'kaddi ismail', 'kjhkjjgjg', 6546476, 'pizza', 20),
(21, 'kaddi ismail', 'agadir', 615819924, 'pizza', 20);

-- --------------------------------------------------------

--
-- Table structure for table `plates`
--

CREATE TABLE `plates` (
  `ID` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `des` varchar(255) NOT NULL,
  `jour` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plates`
--

INSERT INTO `plates` (`ID`, `image`, `nom`, `prix`, `des`, `jour`) VALUES
(1, 'salde1.webp', 'Shredded Brussels Sprout Salad', 20, 'As soon as the temperature starts to dip in the fall, I look forward to making this salad. Made with just 7 ingredients, it’s a breeze to put together, but a bright lemon dressing, Parmesan cheese, pine nuts, and dried cranberries make it zippy, ', '2020-11-20'),
(2, 'salde.webp', 'Best Broccoli Salad', 20, 'You won’t miss the bacon in this lightened-up take on classic broccoli salad. Smoky roasted nuts take its place, adding delectable savory bites. A lightly creamy, sweet & tangy dressing takes the whole thing over the top.', '2020-11-22'),
(4, 'pizza1.jpg', 'pizza', 20, 'Pizza livrée rapidement à domicile pour vous assurer de déguster nos plats à CHAUD. Sushi à domicile. Boissons fraîches. Livraison Rapide. Pizza à domicile. Produits: Sushis, Woks, Pizzas, Hamburgers.\r\n', '2020-11-23'),
(5, 'salde4.jpg', 'Easy Pasta Salad', 20, 'As its name suggests, this one is a breeze to make. Just whisk together the zippy lemon dressing at the bottom of a big bowl, add the other ingredients, ', '2020-11-23'),
(6, 'pizz3.jpg', ' Pizza poulet', 20, 'Pizza livrée rapidement à domicile pour vous assurer de déguster nos plats à CHAUD. Sushi à domicile. Boissons fraîches. Livraison Rapide. Pizza à domicile. Produits: Sushis, Woks, Pizzas, Hamburgers.\r\nCasablanca', '2020-11-23'),
(7, 'meet.jpg', 'meet', 20, 'La viande hachée est tout simplement de la viande finement coupée, à l\'aide d\' un hachoir manuel ou électrique. Elle entre dans la composition de nombreux ...', '2020-11-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmd`
--
ALTER TABLE `cmd`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `plates`
--
ALTER TABLE `plates`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmd`
--
ALTER TABLE `cmd`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `plates`
--
ALTER TABLE `plates`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
