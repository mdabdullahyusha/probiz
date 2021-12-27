-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 03:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `probizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `about_image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `category`, `title`, `description`, `about_image`, `status`) VALUES
(1, 'Fuga Nemo vero qui ', 'Ad dicta in elit qu', 'Voluptatem Esse do', '1.jpg', 0),
(3, 'Iure dolor qui dolor', 'Neque autem quas vel', 'Adipisci quis minima', '3.jpg', 0),
(4, 'Who We Actually Are...', 'We Are Creative Developers', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.', '4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `btn_1` varchar(50) NOT NULL,
  `btn_1_link` varchar(60) NOT NULL,
  `btn_2` varchar(50) NOT NULL,
  `btn_2_link` varchar(60) NOT NULL,
  `bg_image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `btn_1`, `btn_1_link`, `btn_2`, `btn_2_link`, `bg_image`, `status`) VALUES
(1, 'Hi,I Am MD Abdullah', 'Hi,I Am MD Abdullah Who is Front End Web Developer with 4+ years experience working with Software Companies in Dhaka, Bangladesh and abroad. As a Designer, I Am working regularly on Freelancing & Local Marketplace With Awesome Clients.', 'About Me', 'http://mdabdullah.xyz/#about-part', 'Contact With Me', 'http://mdabdullah.xyz/#contact-part', '11640571068.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_now`
--

CREATE TABLE `contact_now` (
  `id` int(11) NOT NULL,
  `title_01` varchar(100) NOT NULL,
  `title_02` varchar(100) NOT NULL,
  `contact_now_image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_now`
--

INSERT INTO `contact_now` (`id`, `title_01`, `title_02`, `contact_now_image`, `status`) VALUES
(1, 'Eum pariatur Aute m', 'Vel veniam voluptas', '1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `logo_name` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo_name`, `status`) VALUES
(2, '1640483445.png', 0),
(3, '1640483449.png', 0),
(4, '1640485918.png', 0),
(5, '1640487322.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `link`, `status`) VALUES
(1, 'Amelia', 'http://saifullsworld.com/', 1),
(2, 'Grant', 'http://saifullsworld.com/', 1),
(3, 'Church', 'http://saifullsworld.com/', 1),
(4, 'Henry', 'https://saifullsworld.com/', 1),
(5, 'Kasimir', 'https://saifullsworld.com/', 1),
(7, 'Aiko', 'https://saifullsworld.com/', 1),
(8, 'Dawn Giles', 'https://www.pexels.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `category`, `title`, `description`, `status`) VALUES
(2, 'Ullam iusto culpa de', 'Dolor molestiae volu', 'Et quam incidunt nu', 1),
(4, 'Sit velit consequa', 'Harum assumenda mole', 'Vitae nihil officia ', 0),
(5, 'Et incididunt enim f', 'Aliquip ipsa ex fug', 'Reprehenderit at asp', 0),
(6, 'Incididunt et quibus', 'Ea praesentium eveni', 'Hic hic aliquam comm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_mail`
--

CREATE TABLE `newsletter_mail` (
  `id` int(11) NOT NULL,
  `newsletter_mail` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter_mail`
--

INSERT INTO `newsletter_mail` (`id`, `newsletter_mail`, `status`) VALUES
(2, 'Facere dolorum ad ni', 1),
(3, 'hakdsflkjsdf@gmail.com', 0),
(4, 'Autem accusamus ipsu', 0),
(5, 'In quisquam aliquip ', 0),
(6, 'Voluptas est provide', 0),
(7, 'In id cupidatat nisi', 0),
(8, 'Repudiandae tempore', 0),
(9, 'Tempora ab enim quia', 0),
(10, 'Non irure duis natus', 0),
(11, 'Officia nihil nisi n', 0),
(12, 'Pariatur Est illo e', 0),
(13, 'Pariatur Consequunt', 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_icon`
--

CREATE TABLE `social_icon` (
  `id` int(11) NOT NULL,
  `social_icon` varchar(50) NOT NULL,
  `link` varchar(60) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_icon`
--

INSERT INTO `social_icon` (`id`, `social_icon`, `link`, `status`) VALUES
(1, 'fab fa-facebook-f', 'https://www.facebook.com/', 1),
(2, 'fab fa-twitter', 'https://twitter.com/', 1),
(3, 'fab fa-instagram', 'https://www.instagram.com/', 1),
(4, 'fab fa-youtube', 'https://youtube.com/', 1),
(5, 'fas fa-adjust', 'https://www.saveeditonline.com/', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `job_post` varchar(60) NOT NULL,
  `icon_01` varchar(60) NOT NULL,
  `icon_01_link` varchar(200) NOT NULL,
  `icon_02` varchar(60) NOT NULL,
  `icon_02_link` varchar(200) NOT NULL,
  `icon_03` varchar(60) NOT NULL,
  `icon_03_link` varchar(200) NOT NULL,
  `icon_04` varchar(60) NOT NULL,
  `icon_04_link` varchar(200) NOT NULL,
  `profile_image` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `job_post`, `icon_01`, `icon_01_link`, `icon_02`, `icon_02_link`, `icon_03`, `icon_03_link`, `icon_04`, `icon_04_link`, `profile_image`, `status`) VALUES
(1, 'Phelan Fletcher', 'Doloribus expedita q', 'Totam vero qui eiusm', 'Quia eveniet accusa', 'Dolore necessitatibu', 'Aut saepe ad omnis m', 'Neque ut est eaque a', 'Quidem labore eius c', 'Expedita voluptas te', 'Hic incidunt iste s', '1.jpg', 1),
(3, 'Charissa Rodriguez', 'Eos corporis tempori', 'Deserunt autem volup', 'Doloremque aut quide', 'Enim recusandae Dol', 'Dolor vitae doloremq', 'Ut eligendi facilis ', 'Dolore sequi cillum ', 'Quo omnis deleniti a', 'Quaerat corrupti no', '3.JPG', 1),
(4, 'Lydia Bullock', 'Est nisi reiciendis ', 'Voluptas sapiente su', 'Consequuntur laborum', 'Veniam debitis enim', 'Anim ratione nihil l', 'Reiciendis quod omni', 'Modi ex excepteur fu', 'Ad alias molestiae n', 'Omnis aut non deseru', '4.JPG', 1),
(5, 'Alfreda Hammond', 'Cupiditate id natus ', 'Eligendi eligendi la', 'Voluptatibus est ut ', 'Necessitatibus expli', 'Voluptate iure recus', 'At consectetur est e', 'Distinctio Id sapie', 'Sequi quia nesciunt', 'Harum anim qui Nam i', '5.JPG', 1),
(6, 'Allistair Scott', 'Esse ea odit volupt', 'Quam omnis illo culp', 'Expedita hic necessi', 'Quis proident aut i', 'Laudantium dolorem ', 'Qui eligendi accusan', 'Cum assumenda irure ', 'Cupiditate deserunt ', 'Aut exercitationem s', '6.JPG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teams_title`
--

CREATE TABLE `teams_title` (
  `id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams_title`
--

INSERT INTO `teams_title` (`id`, `category`, `title`, `description`, `status`) VALUES
(1, 'Consequatur Sed arc', 'Elit id in mollitia', 'Minim consequatur cu', 0),
(2, 'Anim veritatis autem', 'Dolores ad tempora h', 'Ut rerum repellendus', 1),
(3, 'Et quis voluptatibus', 'Dolore aliquid amet', 'Expedita tempora cum', 0);

-- --------------------------------------------------------

--
-- Table structure for table `top_contact`
--

CREATE TABLE `top_contact` (
  `id` int(11) NOT NULL,
  `phone_icon` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email_icon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_contact`
--

INSERT INTO `top_contact` (`id`, `phone_icon`, `phone_number`, `email_icon`, `email`) VALUES
(1, 'fas fa-mobile-alt', '+8801820072663', 'far fa-envelope', 'emonyusha14@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `profile_image` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_image`, `created_at`) VALUES
(1, 'Md Abdullah Yusha', 'abdullah@gmail.com', '$2y$10$Kok9OerzXZ53x9k.JQLvyeYBWtYfnIRdF1HBsTAAjilaa8Sa5psP.', '11640415672.jpg', '2021-12-21 09:46:30'),
(3, 'Chava Miller', 'jujafylap@mailinator.com', '$2y$10$MQ8EkJw2eB6uKOHTzKi0iOsybnyAYZ7nXe5tvdbtHQ33HS.T6yjM2', '3.jpg', '2025-12-21 01:04:21'),
(4, 'Odessa Jacobson', 'dybybuk@mailinator.com', '$2y$10$Dc3pEVyL3y3YVIhsGJGiI.LkMSt4uI3MKs.LKgc1zKA5kJNp3Irme', '4.jpg', '2025-12-21 02:07:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_now`
--
ALTER TABLE `contact_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_mail`
--
ALTER TABLE `newsletter_mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icon`
--
ALTER TABLE `social_icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams_title`
--
ALTER TABLE `teams_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_contact`
--
ALTER TABLE `top_contact`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_now`
--
ALTER TABLE `contact_now`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newsletter_mail`
--
ALTER TABLE `newsletter_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `social_icon`
--
ALTER TABLE `social_icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams_title`
--
ALTER TABLE `teams_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `top_contact`
--
ALTER TABLE `top_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
