-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2025 at 03:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u555614675_realestateprop`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(10, 'About Us', '<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p>Property Gatewaw, a Unit of Croprerty real estate consultancy based in Gurugram. While Property Gateway is a recently established ventu-re, it is backed by Mr. Mohinder Papreja - Managing Director, who ca rries encomprmanty established recently. It is backed by the credibi-lity and strong foundation of Property Solution, an experienced company established 7-8 years ago.</p>\r\n<h4><strong>OUR VISION</strong></h4>\r\n<p>To be recognized as a trusted property partner, helping people find the right property, secure the best deal, and settle with peace of mind</p>\r\n<h4><strong>OUR MISSION</strong></h4>\r\n<ul>\r\n<li>Provide end-to-end property solutions</li>\r\n<li>Ensure honesty, transparency and trust in every deal</li>\r\n<li>Deliver a customer-first app-roach in real estate services</li>\r\n</ul>\r\n<h4><strong>WHY CHOOSE PROPERTY GATEWAY?</strong></h4>\r\n<ul>\r\n<li>Backed by 7-8 years established company - Property Solution</li>\r\n<li>Professional and transparent process</li>\r\n<li>Strong local knowledge and wide property network</li>\r\n<li>Hassle-free documentation</li>\r\n</ul>\r\n<h4>WHAT WE DO</h4>\r\n<ul>\r\n<li>Residential - Plots. Villas, Floors, and Apartments</li>\r\n<li>Commercial - Office Spaces. Shops. Showrooms. Warehouses</li>\r\n<li>Luxury - Premium properties &amp; exclusive developments</li>\r\n<li>Investments - Builder floors. land parcels &amp; growth projects</li>\r\n</ul>\r\n<h4>CORE VALUES</h4>\r\n<ul>\r\n<li>Integrity-Transparency in every transa</li>\r\n<li>Commitment - Client satisfaction is. our priority</li>\r\n<li>Innovation - Smart, modem solutions for property needs</li>\r\n<li>Trust - Long-term relationships</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'b5cxgez_1756703184_641159913_optOrig.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
