-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 03:29 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `placeorder`
--

CREATE TABLE `placeorder` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placeorder`
--

INSERT INTO `placeorder` (`id`, `product_name`, `product_id`, `qty`, `price`, `image`, `userId`) VALUES
(48, 'Draped Top', 2, 1, 499, './images/product2.jpg', 1),
(49, 'Floral Crop T-shirt', 3, 1, 195, './images/product3.jpg', 1),
(53, 'Floral Crop T-shirt', 3, 1, 195, './images/product3.jpg', 1),
(54, 'Floral Crop T-shirt', 3, 1, 195, './images/product3.jpg', 2),
(55, 'Terranova', 4, 1, 295, './images/product4.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `price`, `quantity`, `image`) VALUES
(1, 'Long-Sleeved Shirt', 'Fitted top in soft cotton jersey with a V-neck, gathered seam at the front and long sleeves', 499, 100, './images/product1.jpg'),
(2, 'Draped Top', 'Cropped top in jersey with a sheen. Narrow, adjustable shoulder straps and pleats over bust for a draped effect.', 499, 100, './images/product2.jpg'),
(3, 'Floral Crop T-shirt', 'Floral off-the-shoulder crop t-shirt', 195, 50, './images/product3.jpg'),
(4, 'Terranova', 'Polka-dot body with gathered shoulder straps', 295, 50, './images/product4.jpg'),
(5, 'Dress', 'Short dress in softly draping satin with a sweetheart neckline and bust with shaped, lined cups. Smocked back and 3/4-length puff sleeves with narrow elastication and a small frill trim over the shoul', 899, 20, './images/product5.jpg'),
(6, 'Tee Dress', 'Short, straight cut dress in cotton jersey with ribbing around the neckline, short sleeves and dropped shoulder seams. Unlined.', 599, 50, './images/product6.jpg'),
(7, 'Vans', '- Rubber outsole', 1000, 50, './images/product11.jpg'),
(8, 'Vans', 'Kick it Old School with these cool VANS sneakers. Featuring the classic monochrome colours, this lace-up wonder features the brand\'s signature silhouette steeped in casual, laid-back manner.\r\n', 1000, 50, './images/product12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shoeusers`
--

CREATE TABLE `shoeusers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `secret` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `secret` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `address`, `contact`, `email`, `password`, `secret`, `role`) VALUES
(6, 'Admin', 'Bacolod City', '09956296451', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placeorder`
--
ALTER TABLE `placeorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoeusers`
--
ALTER TABLE `shoeusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `placeorder`
--
ALTER TABLE `placeorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shoeusers`
--
ALTER TABLE `shoeusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
