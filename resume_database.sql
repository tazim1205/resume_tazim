-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 08:16 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(20) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'This NoSQL database oriented to documents (by documents like JSON) combines some of the features from relational databases, easy to use and the multi-platform is the best option for scale up and have fault tolerance, load balancing, map reduce, etc.', '1990316546.png', '2022-12-19 06:42:08', '2022-12-19 06:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `add_topic`
--

CREATE TABLE `add_topic` (
  `id` int(20) NOT NULL,
  `topics` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_topic`
--

INSERT INTO `add_topic` (`id`, `topics`) VALUES
(5, 'Design'),
(6, 'Development'),
(7, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `create_admin`
--

CREATE TABLE `create_admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `adress` text DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `confirm_password` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `admin_type` varchar(100) DEFAULT NULL,
  `password_recover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_admin`
--

INSERT INTO `create_admin` (`id`, `username`, `mail`, `phone`, `adress`, `type`, `password`, `confirm_password`, `image`, `admin_type`, `password_recover`) VALUES
(13, 'Mobinul Islam Tajim', 'tajimislam948@gmail.com', '01988444382', 'feni', 1, '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '13.png', 'developer', '123');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(20) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `degree` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `from`, `to`, `degree`, `description`) VALUES
(3, '2022-12-01', '2022-12-23', 'Master Degree', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>'),
(4, '2022-12-14', '2022-12-27', 'Bachelor Degree', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>'),
(5, '2022-12-01', '2022-12-26', 'Associate Degree', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>'),
(6, '2022-12-01', '2022-12-26', 'High School', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(20) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `from`, `to`, `company`, `location`, `title`, `description`) VALUES
(4, '2022-12-01', '2022-12-26', 'SBIT', 'Feni, Bangladesh', 'Web Developer', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>'),
(5, '2022-12-02', '2022-12-31', 'Samsung', 'Dhaka', 'Web Designer', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>'),
(6, '2022-12-05', '2022-12-29', 'Skill Based IT', 'Dhaka, Bangladesh', 'Project Maneger', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>'),
(7, '2022-12-01', '2023-01-01', 'Information Technology', 'Feni, Bangladesh', 'Digital Marketer', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id` int(100) NOT NULL,
  `sl` int(100) DEFAULT NULL,
  `main_menu_name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `sl`, `main_menu_name`, `icon`, `status`) VALUES
(1, 1, 'Admin Information', 'fa fa-users', 1),
(5, 2, 'Website Info', 'fas fa-info', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(20) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `project_name`, `topic`, `url`, `image`) VALUES
(8, 'SBIT', '5', '#', '1102556934.jpg'),
(9, 'SBIT', '5', '#', '475717295.jpg'),
(10, 'Skill Based IT', '6', '#', '1665323373.jpg'),
(11, 'Skill Based IT', '6', '#', '679801921.jpg'),
(12, 'Skill Based Information Technology', '7', '#', '1761686608.jpg'),
(13, 'Skill Based Information Technology', '7', '#', '540128439.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile_information`
--

CREATE TABLE `profile_information` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `discord` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_information`
--

INSERT INTO `profile_information` (`id`, `title`, `email`, `phone`, `facebook`, `twitter`, `instagram`, `discord`, `linkedin`, `address`, `image`) VALUES
(1, 'Web Designer & Developer', 'tajimislam948@gmail.com', 1988444382, 'https://www.facebook.com/sadman.tajim.7', 'https://twitter.com/Tajim48570565', 'https://www.instagram.com/tazimzz08/', 'https://discord.com/channels/@me/1044270439192608880', 'https://www.linkedin.com/in/tajim-islam-314597257/', 'Feni', '1023913223.png');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `review` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `mail`, `subject`, `review`) VALUES
(9, 'Mobinul Islam Tazim', 'tjm4181@gmail.com', 'Demo', 'Demo');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(20) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `icon`, `title`, `description`) VALUES
(1, 'fa fa-desktop', 'Web Design', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>'),
(2, 'fa fa-laptop', 'Web Development', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>'),
(3, 'fa fa-search', 'SEO', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>'),
(4, 'fa fa-envelope-open-text', 'Digital Marketing', '<p>Lorem ipsum dolor sit amet elit suscipit orci. Donec molestie velit id libero.<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(100) NOT NULL,
  `sl` int(100) DEFAULT NULL,
  `main_menu` int(100) DEFAULT NULL,
  `link_name` varchar(255) DEFAULT NULL,
  `route_name` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `sl`, `main_menu`, `link_name`, `route_name`, `status`) VALUES
(1, 1, 1, 'Create Admin', '../create_admin/create_admin.php', 1),
(2, 2, 1, 'Manage Admin', '../create_admin/view_admin.php', 1),
(4, 3, 5, 'About Us', '../website_info/about_us.php', 1),
(5, 4, 5, 'Profile Information', '../website_info/profile_information.php', 1),
(6, 5, 5, 'Education', '../website_info/education.php', 1),
(7, 6, 5, 'Experience', '../website_info/experience.php', 1),
(8, 7, 5, 'Service', '../website_info/service.php', 1),
(9, 8, 5, 'Topic', '../website_info/topic.php', 1),
(11, 10, 5, 'Portfolio', '../website_info/portfolio.php', 1),
(12, 11, 5, 'Review', '../website_info/review.php', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_topic`
--
ALTER TABLE `add_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_admin`
--
ALTER TABLE `create_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_information`
--
ALTER TABLE `profile_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_topic`
--
ALTER TABLE `add_topic`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `create_admin`
--
ALTER TABLE `create_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profile_information`
--
ALTER TABLE `profile_information`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
