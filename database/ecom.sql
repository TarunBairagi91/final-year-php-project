-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 06:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `admin_password` varchar(8) NOT NULL,
  `add_data_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`admin_id`, `username`, `email`, `mobile`, `admin_password`, `add_data_time`) VALUES
(9, 'admin', 'admin@gmail.com', '1234567890', '$2y$10$F', '2024-03-01 17:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_category`
--

CREATE TABLE `ecom_category` (
  `cat_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `url` varchar(150) NOT NULL,
  `add_data_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ecom_category`
--

INSERT INTO `ecom_category` (`cat_id`, `title`, `description`, `image`, `url`, `add_data_time`) VALUES
(11, 'Leptops', 'What is a laptop computer? A laptop is a personal computer that can be easily moved and used in a variety of locations. Most laptops are designed to have all of the functionality of a desktop computer, which means they can generally run the same software and open the same types of files.', 'upload_images/hp_elitebook.jpg', 'leptops', '2024-02-25 13:03:48'),
(12, 'Mobiles', 'mobile telephone, portable device for connecting to a telecommunications network in order to transmit and receive voice, video, or other data. Mobile phones typically connect to the public switched telephone network (PSTN) through one of two categories: cellular telephone systems or global satellite-based telephony.', 'upload_images/mobiles.jpeg', 'mobiles', '2024-02-25 13:06:17'),
(13, 'T-Shirts For Men', 'A T-shirt (also spelled tee shirt, or tee for short) is a style of fabric shirt named after the T shape of its body and sleeves. Traditionally, it has short sleeves and a round neckline, known as a crew neck, which lacks a collar. T-shirts are generally made of stretchy, light, and inexpensive fabric and are easy to clean. The T-shirt evolved from undergarments used in the 19th century and, in the mid-20th century, transitioned from undergarments to general-use casual clothing. ', 'upload_images/t-shirt.jpg', 'T-Shirts_For_Men', '2024-02-25 13:10:05'),
(14, 'Women Shoes', 'A shoe is an item of footwear intended to protect and comfort the human foot. Though the human foot can adapt to varied terrains and climate conditions, it is vulnerable, and shoes provide protection. Form was originally tied to function, but over time, shoes also became fashion items.', 'upload_images/women_shoes.jpg', 'Women_Shoes', '2024-02-25 13:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_post`
--

CREATE TABLE `ecom_post` (
  `post_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ecom_post`
--

INSERT INTO `ecom_post` (`post_id`, `cat_id`, `title`, `content`, `price`, `url`, `image`) VALUES
(11, 14, 'Leather Plain Women Casual Shallow Mouth Shoe Pointed Toe Shoe Working Flat Shoes', 'Leather Plain Women Casual Shallow Mouth Shoe Pointed Toe Shoe Working Flat Shoes for girls and better using this shoes', '800', 'Leather_Plain_Women ', 'upload_post_images/women1.jpg'),
(12, 14, 'Leather Plain Women Casual Shallow Mouth Shoe Pointed Toe', 'Leather Plain Women Casual Shallow Mouth Shoe Pointed Toe for a girls', '750', 'women_shoe', 'upload_post_images/women.jpg'),
(13, 11, 'HP 15-fc0026AU Standard Laptop (AMD Ryzen 3 7320U/8 GB/512 GB SSD/AMD Radeon Graphics/Windows 11 Home)', 'Processor: AMD Ryzen 3 7320U,RAM: 8 GB,Internal Storage: 512 GB,Storage Type: SSD,Operating System: Windows 11 Home,Microsoft Office included: Yes and more in the HP 15-fc0026AU Standard Laptop (AMD Ryzen 3 7320U/8 GB/512 GB SSD/AMD Radeon Graphics/Windows 11 Home/MSO/FHD), 39.6cm (15.6 inch)\r\nHP 15-fc0026AU Standard Laptop (AMD Ryzen 3 7320U/8 GB/512 GB SSD/AMD Radeon Graphics/Windows 11 Home)', '35999', 'HP-15-fc0026AU', 'upload_post_images/hp_leptop.jpg'),
(14, 11, 'Asus EJ327WS Vivobook X515 Laptop (11th Gen Intel Core i3-1115G4/ 8GB/512GB SSD/Win 11 Home/MSO/FHD)', 'Windows 11 Home, 15.6-inch (39.62 cm) FHD (1920 x 1080) LED Backlit Anti-glare display, 11th Generation Core i3 Prcoessor, 8GB DDR4 on board, 512GB M.2 NVMe PCIe 3.0 SSD, Intel UHD Graphics, Built-in speaker,,Windows 11 Home, 15.6-inch (39.62 cm) FHD (1920 x 1080) LED Backlit Anti-glare display, 11th Generation Core i3 Prcoessor, 8GB DDR4 on board, 512GB M.2 NVMe PCIe 3.0 SSD, Intel UHD Graphics, Built-in speaker,\r\n\r\nAsus EJ327WS Vivobook X515 Laptop (11th Gen Intel Core i3-1115G4/ 8GB/512GB SSD/Win 11 Home/MSO/FHD)', '34999', 'Asus-EJ327WS-Vivobook ', 'upload_post_images/asus_vivobook.jpg'),
(15, 11, 'Apple M3 Pro chip with 12‑core CPU, 18‑core GPU and 16‑core Neural Engine', 'Apple M3 Pro chip with 12‑core CPU, 18‑core GPU and 16‑core Neural Engine 18GB unified memory 512GB SSD storage 41.05 cm (16.2\") Liquid Retina XDR display² 140W USB-C Power Adapter Three Thunderbolt 4 ports, HDMI port, SDXC card slot, headphone jack, MagSafe 3 port Backlit Magic Keyboard with Touch ID - US English', '249900', 'Apple-M3-Pro ', 'upload_post_images/mac_book.jpeg'),
(16, 14, 'Sports Shoes For Ladies', 'Sports Shoes For Ladies best shoes for new style', '750', 'women_shoes', 'upload_post_images/women3.jpg'),
(17, 13, 'Marvel T-shirt', 'Marvel T-shirt\r\nFit Type: Regular Fit ? not too tight, not too loose.\r\nGSM: 180 GSM Premium Bio-Washed T-Shirt and Pre-Shrunk\r\nMaterial: 100% Cotton Super Combed 25’s Yarn (Wrinkle-free and Smooth)\r\nNeck Type: Round Neck\r\nSleeve: Half', '349', 'Marvel_T-shirt', 'upload_post_images/t-shirt.jpg'),
(18, 13, 'RRR Logo Minimal Yellow T-Shirt', 'Product Information:\r\n\r\nColour: Yellow\r\nMaterial: 100% Cotton, 180 GSM\r\n\r\nStyle: Standard Fit, Round Neck, Short Sleeves\r\n\r\nWash Care: Machine wash. Wash in cold water, use a mild detergent. Dry in shade, do not iron directly or scrub on print.\r\nColour may vary slightly from the image displayed.', '699', 'rrr-t-shirt', 'upload_post_images/t-shirt1.webp'),
(19, 13, 'Long Regular Fit T-shirt', 'EYTYS x H&M. T-shirt in sturdy jersey with a lightly brushed finish in a relaxed, slightly shorter fit with dropped shoulders. Discreet logo on one sleeve. The T-shirt is unisex but the sizes are based on men’s sizes.\r\nSize:\r\nXXS/L: Width: 96.4 cm, Length: 66.5 cm\r\nXS/L: Width: 1.04 m, Length: 68 cm\r\nS/L: Width: 1.11 m, Length: 70 cm\r\nM/L: Width: 1.18 m, Length: 71 cm\r\nL/L: Width: 1.25 m, Length: 73 cm\r\nXL/L: Width: 1.32 m, Length: 74 cm\r\nSleeve Length: Short sleeve\r\nDescription: Black', '749', 'Black-T-shirt', 'upload_post_images/t-shirt2.jpeg'),
(20, 12, 'SAMSUNG Galaxy S24 Ultra 5G (Titanium Gray, 512 GB)  (12 GB RAM)', 'SAMSUNG Galaxy S24 Ultra 5G\r\n12 GB RAM | 512 GB ROM\r\n17.27 cm (6.8 inch) Quad HD+ Display\r\n200MP + 50MP + 12MP + 10MP | 12MP Front Camera\r\n5000 mAh Battery\r\nSnapdragon 8 Gen 3 Processor', '139999', 'SAMSUNG_Galaxy_S24', 'upload_post_images/samsungs.webp'),
(21, 12, 'Apple iPhone 15 (white,128 GB)', 'Apple iPhone 15 (Blue, 128 GB)128 GB ROM15.49 cm (6.1 inch) Super Retina XDR Display48MP + 12MP | 12MP Front CameraA16 Bionic Chip, 6 Core Processor Processor', '70999', 'Apple-iPhone-15', 'upload_post_images/mobil.jpeg'),
(22, 12, 'SAMSUNG Galaxy S22 Ultra 5G (Titanium Gray, 512 GB)  (12 GB RAM)', 'SAMSUNG Galaxy S22 Ultra 5G (Titanium Gray, 512 GB)  (12 GB RAM)\r\n\r\n12 GB RAM | 512 GB ROM\r\n17.27 cm (6.8 inch) Quad HD+ Display\r\n180MP + 50MP + 12MP + 10MP | 12MP Front Camera\r\n5000 mAh Battery\r\nSnapdragon 8 Gen 2.6 Processor', '136999', 'SAMSUNG_Galaxy_S22', 'upload_post_images/samsung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `email`, `mobile`, `password`, `resettoken`, `resettokenexpire`) VALUES
(6, 'test', 'test@gmail.com', '1234567890', '$2y$10$Ydh', ' Y7\Z?3?|@_Su??T', '2024-03-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ecom_category`
--
ALTER TABLE `ecom_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `ecom_post`
--
ALTER TABLE `ecom_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ecom_category`
--
ALTER TABLE `ecom_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ecom_post`
--
ALTER TABLE `ecom_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ecom_post`
--
ALTER TABLE `ecom_post`
  ADD CONSTRAINT `ecom_post_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `ecom_category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
