-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2022 at 03:26 AM
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
-- Table structure for table `basic_pricing`
--

CREATE TABLE `basic_pricing` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `price` varchar(60) NOT NULL,
  `btn` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_pricing`
--

INSERT INTO `basic_pricing` (`id`, `title`, `price`, `btn`, `status`) VALUES
(1, 'Lorem rerum modi fac', '605', 'Qui cupiditate nobis', 0),
(3, 'Basic Plan', '99.90', 'Buy Now', 1);

-- --------------------------------------------------------

--
-- Table structure for table `basic_pricing_facility`
--

CREATE TABLE `basic_pricing_facility` (
  `id` int(11) NOT NULL,
  `facility` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_pricing_facility`
--

INSERT INTO `basic_pricing_facility` (`id`, `facility`, `status`) VALUES
(1, 'Molestias minim numq', 0),
(4, 'Atque nobis enim nul', 0),
(6, 'Domain Name', 1),
(7, '3 Websites', 1),
(8, '20 GB SSD', 1),
(9, 'Free CDN', 1),
(10, 'PDF Reports', 1),
(11, '1 Month 24/7 Free Support', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `posted_from` varchar(60) NOT NULL,
  `description` varchar(200) NOT NULL,
  `comment` int(11) NOT NULL,
  `blog_like` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `blog_image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `posted_from`, `description`, `comment`, `blog_like`, `created_at`, `blog_image`, `status`) VALUES
(7, 'Santa Claus is coming to town', '1', 'Its 7 degrees below zero when we step off the Polar Express. Theres a slight breeze that feels almost cryogenic and a loud crunch! as our boots hit the snow. But the real first impression of Santa Vil', 25, 500, '2028-12-21 09:33:37', '7.jpg', 1),
(8, 'Watch With Me on Google TV', '1', 'Movies and TV can make us laugh, cry and even shape who we are. Our watchlists can be surprisingly revealing. Were teaming up with entertainers, artists and cultural icons on a new Watch With Me serie', 62, 2000, '2028-12-21 09:44:44', '8.jpg', 0),
(9, 'A twist in the tale of the Italian Palace', '1', 'The Quirinale Palace in Rome is one of the worlds most renowned heritage sites. Once home to popes it has been the official residence of the President of the Italian Republic since 1946. However, usin', 2, 600, '2028-12-21 09:45:58', '9.jpg', 1),
(10, '12 features we launched — in 2021', '1', 'Pop quiz: How long was 2021? So much happened this year that it seems impossible it was a mere 365 days. Here at Google, we launched the Pixel 6 and Pixel 6 Pro, a new Nest Hub, lots of new Google Pho', 10, 633, '2028-12-21 09:46:49', '10.jpg', 1),
(11, '5 tips to finish your holiday', '1', 'We are coming down to the wire with holiday shopping, and many of us are frantically searching online for last-minute stocking stuffers. Luckily, a few new features are coming to Chrome that will make', 86, 754, '2028-12-21 09:47:48', '11.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_title`
--

CREATE TABLE `blog_title` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_title`
--

INSERT INTO `blog_title` (`id`, `category`, `title`, `description`, `status`) VALUES
(2, 'Et non alias volupta', 'Necessitatibus sapie', 'Velit aliquid labor', 0),
(4, 'Et ut dolor temporib', 'Incididunt cupiditat', 'Enim eos ea sed elit', 0),
(6, 'Our Latest Service', 'Our Blog', 'Were coming down to the wire with holiday shopping, and many of us are frantically searching online for last-minute stocking stuffers', 1);

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
-- Table structure for table `contact_title`
--

CREATE TABLE `contact_title` (
  `id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_title`
--

INSERT INTO `contact_title` (`id`, `category`, `title`, `description`, `status`) VALUES
(2, 'Need Any Help ?', 'CONTACT WITH US', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `address_icon` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mail_icon` varchar(60) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `mobile_icon` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `telephone_icon` varchar(60) NOT NULL,
  `telephone` varchar(60) NOT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `address_icon`, `address`, `mail_icon`, `mail`, `mobile_icon`, `mobile`, `telephone_icon`, `telephone`, `status`) VALUES
(5, 'Odit qui esse ut sit', 'Ut sit qui aut sed ', 'Dolore itaque provid', 'Iste laboriosam eli', 'Voluptatibus omnis v', 'Illum obcaecati des', '+1 (577) 458-1244', '+1 (597) 619-1221', 0),
(7, 'fas fa-map-marked', '14/B, Alabdir Teg, Kalibari, Baunia', 'far fa-envelope', 'info@mdabdullah.xyz', 'fas fa-phone-alt', '+8801820072663', 'fas fa-mobile-alt', '09654258963', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_mail`
--

CREATE TABLE `contact_us_mail` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us_mail`
--

INSERT INTO `contact_us_mail` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(4, 'Kenyon Flynn', 'xurodulav@mailinator.com', 'Qui dolor labore tem', 'Sed dolor Nam quia q', '2028-12-21 10:10:58'),
(5, 'Deirdre Gay', 'tyzibunid@mailinator.com', 'Amet facere maiores', 'Quos qui tempora nonQuos qui tempora nonQuos qui tempora non Quos qui tempora non Quos qui tempora non Quos qui tempora non Quos qui tempora non Quos qui tempora non v Quos qui tempora nonQuos qui tempora nonQuos qui tempora nonQuos qui tempora nonQuos qui tempora nonQuos qui tempora nonQuos qui tempora nonQuos qui tempora nonQuos qui tempora non', '2028-12-21 10:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `icon_link` varchar(100) NOT NULL,
  `number` int(60) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `icon_link`, `number`, `description`, `status`) VALUES
(4, 'far fa-address-card', 896, 'Molestiae natus anim', 1),
(6, 'fas fa-ambulance', 428, 'Eiusmod quis quisqua', 1),
(7, 'fab fa-angellist', 442, 'Elit debitis molest', 1),
(9, 'fab fa-apple', 818, 'Id eos deserunt vol', 1);

-- --------------------------------------------------------

--
-- Table structure for table `counter_image`
--

CREATE TABLE `counter_image` (
  `id` int(11) NOT NULL,
  `counter_image` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter_image`
--

INSERT INTO `counter_image` (`id`, `counter_image`, `status`) VALUES
(3, '1640842167.JPG', 0),
(4, '1640842172.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(11) NOT NULL,
  `footer` varchar(100) NOT NULL,
  `sponsor_name` varchar(60) NOT NULL,
  `sponsor_link` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `footer`, `sponsor_name`, `sponsor_link`, `status`) VALUES
(2, 'Maiores deleniti vel', 'asdff', 'Dolor officia fugit', 0),
(3, 'Libero anim tenetur ', 'asdfasdf', 'Rerum maiores conseq', 0),
(4, 'Copyright 2021. All Rights Reserved By,', 'Md Abdullah', 'http://mdabdullah.xyz/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `important_link`
--

CREATE TABLE `important_link` (
  `id` int(11) NOT NULL,
  `link_info` varchar(60) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `important_link`
--

INSERT INTO `important_link` (`id`, `link_info`, `link`, `status`) VALUES
(1, 'Et aut excepteur cul', 'Aliquip dignissimos ', 1),
(2, 'Fuga Accusamus hic ', 'Repellendus Autem d', 0),
(3, 'Occaecat sint repell', 'Minus esse in excep', 1),
(4, 'Anim quis quo ducimu', 'Aut illum aut excep', 1),
(5, 'Culpa quia dolorem ', 'Aut fuga Similique ', 1),
(7, 'Saepe eius possimus', 'Porro ut est provid', 1);

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
(3, 'hakdsflkjsdf@gmail.com', 0),
(4, 'Autem accusamus ipsu', 1),
(5, 'In quisquam aliquip ', 0),
(7, 'In id cupidatat nisi', 0),
(8, 'Repudiandae tempore', 0),
(10, 'Non irure duis natus', 1),
(11, 'Officia nihil nisi n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_image`
--

CREATE TABLE `portfolio_image` (
  `id` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `port_img` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_image`
--

INSERT INTO `portfolio_image` (`id`, `class_name`, `port_img`, `status`) VALUES
(3, 'research', '3.JPG', 1),
(4, 'planning', '4.JPG', 1),
(5, 'planning', '5.JPG', 1),
(6, 'research', '6.JPG', 1),
(7, 'marketing', '7.png', 1),
(8, 'marketing', '8.jpg', 1),
(9, 'research', '9.JPG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_title`
--

CREATE TABLE `portfolio_title` (
  `id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_title`
--

INSERT INTO `portfolio_title` (`id`, `category`, `title`, `description`, `status`) VALUES
(2, 'Sint quia aut quis i', 'Dolore ex omnis ulla', 'Sit est hic ut omni', 0),
(3, 'In quas suscipit mol', 'Eveniet architecto ', 'Voluptas voluptates ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `premium_pricing`
--

CREATE TABLE `premium_pricing` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `price` varchar(20) NOT NULL,
  `btn` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium_pricing`
--

INSERT INTO `premium_pricing` (`id`, `title`, `price`, `btn`, `status`) VALUES
(3, 'Illum consequatur ', '405', 'Quis in sed labore d', 0),
(4, 'Premium Plan', '399.99', 'Buy Now', 1);

-- --------------------------------------------------------

--
-- Table structure for table `premium_pricing_facility`
--

CREATE TABLE `premium_pricing_facility` (
  `id` int(11) NOT NULL,
  `facility` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium_pricing_facility`
--

INSERT INTO `premium_pricing_facility` (`id`, `facility`, `status`) VALUES
(2, 'Domain Name', 1),
(3, '3 Websites', 1),
(4, '50 GB SSD', 1),
(5, 'Free CDN', 1),
(6, 'AutoBackup', 1),
(7, 'Cloud Storage', 1),
(8, 'PDF Reports', 1),
(9, '1 Year 24/7 Free Support', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pricing_title`
--

CREATE TABLE `pricing_title` (
  `id` int(11) NOT NULL,
  `category` varchar(65) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(600) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing_title`
--

INSERT INTO `pricing_title` (`id`, `category`, `title`, `description`, `status`) VALUES
(2, 'Cum quia sapiente re', 'Soluta non in volupt', 'Sed in voluptatem e', 0),
(3, 'OUR BUDGET FRIENDLY PRICING PLAN', 'Choose Best One For You', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. No', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reasons`
--

CREATE TABLE `reasons` (
  `id` int(11) NOT NULL,
  `reasons` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reasons`
--

INSERT INTO `reasons` (`id`, `reasons`, `status`) VALUES
(1, 'Quis inventore digni', 1),
(2, 'Sed dolor culpa volu', 1),
(3, 'Vel repudiandae quam', 1),
(4, 'Velit eos aut accu', 1),
(5, 'Aut quia enim sit ve', 1),
(6, 'Doloremque iure labo', 1),
(7, 'Est voluptas ab min', 1),
(8, 'Unde et iusto incidu', 1),
(9, 'Delectus dolore nec', 0),
(10, 'Repellendus Suscipi', 0),
(12, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(250) NOT NULL,
  `service_image` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `features_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `service_image`, `status`, `features_status`) VALUES
(8, 'Ex culpa ipsum repr', 'Est ut molestias occ Est ut molestias occ Est ut molestias occ Est ut molestias occ Est ut molestias occ Est ut molestias occ ', '8.png', 1, 1),
(9, 'Quis in modi enim ut', 'Quo inventore aliqui', '9.png', 1, 1),
(10, 'Odio nesciunt volup', 'Pariatur Qui sed ma', '10.png', 1, 1),
(11, 'Doloribus cupiditate', 'Sed excepteur libero', '11.png', 1, 0),
(12, 'Quo libero non anim ', 'Sint sed qui volupta', '12.png', 1, 0),
(13, 'Quae et non voluptat', 'Lorem occaecat ea vi', '13.png', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_title`
--

CREATE TABLE `service_title` (
  `id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_title`
--

INSERT INTO `service_title` (`id`, `category`, `name`, `description`, `status`) VALUES
(3, 'Velit distinctio A', 'Sawyer Love', 'Illo corrupti ut cu', 1),
(4, 'Quis sit dicta delec', 'Fiona Lawrence', 'Eligendi sunt recus', 0);

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
-- Table structure for table `standard_pricing`
--

CREATE TABLE `standard_pricing` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `price` varchar(20) NOT NULL,
  `btn` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standard_pricing`
--

INSERT INTO `standard_pricing` (`id`, `title`, `price`, `btn`, `status`) VALUES
(2, 'Aut culpa enim aper', '832', 'Explicabo Reprehend', 0),
(3, 'Ullamco dolore et ex', '13', 'Sint modi consequat', 0),
(4, 'Standard Plan', '199.99', 'Buy Now', 1);

-- --------------------------------------------------------

--
-- Table structure for table `standard_pricing_facility`
--

CREATE TABLE `standard_pricing_facility` (
  `id` int(11) NOT NULL,
  `facility` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standard_pricing_facility`
--

INSERT INTO `standard_pricing_facility` (`id`, `facility`, `status`) VALUES
(2, '3 Websites', 1),
(3, 'Domain Name', 1),
(4, 'Unmetered SSD', 1),
(5, 'Free CDN', 1),
(6, 'AutoBackup', 1),
(7, 'PDF Reports', 1),
(8, '2 Month 24/7 Free Support', 1);

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
(1, 'Md Abdullah', 'Front-End Developer', 'fab fa-facebook-f', 'http://mdabdullah.xyz/', 'fab fa-twitter', 'http://mdabdullah.xyz/', 'fab fa-instagram', 'http://mdabdullah.xyz/', 'fab fa-linkedin-in', 'http://mdabdullah.xyz/', '11640574971.jpg', 1),
(7, 'Md Shobuj', 'PHP Developer', 'fab fa-facebook-f', 'https://www.facebook.com/', 'fab fa-twitter', 'https://twitter.com/', 'fab fa-instagram', 'https://www.pinterest.com/', 'fab fa-pinterest-p', 'https://www.pinterest.com/', '7.jpg', 1),
(8, 'Md Rukon', 'Class Representative', 'fab fa-facebook-f', 'https://www.pinterest.com/', 'fab fa-twitter', 'https://www.pinterest.com/', 'fab fa-instagram', 'https://www.pinterest.com/', 'fab fa-pinterest-p', 'https://www.pinterest.com/', '8.jpg', 1),
(9, 'Md Ashraful', 'Web Developer', 'fab fa-facebook-f', 'https://www.pinterest.com/', 'fab fa-twitter', 'https://www.pinterest.com/', 'fab fa-instagram', 'https://www.pinterest.com/', 'fab fa-pinterest-p', 'https://www.pinterest.com/', '9.jpg', 1);

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
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `post` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `star_rating` varchar(20) NOT NULL,
  `testi_image` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `name`, `post`, `description`, `star_rating`, `testi_image`, `status`) VALUES
(2, 'Lawrence Norman', 'Eius dolore eius cor', 'Et eveniet sit sit ', '4', '2.JPG', 1),
(3, 'Tiger Patrick', 'Inventore nihil volu', 'Veritatis odit iure ', '5', '3.JPG', 1),
(4, 'Dieter Chen', 'Dolore tempora volup', 'Veniam maxime repel', '5', '4.JPG', 1),
(5, 'Deirdre Bauer', 'Eos aliquip repudian', 'Qui labore porro et ', '5', '5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testi_title`
--

CREATE TABLE `testi_title` (
  `id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testi_title`
--

INSERT INTO `testi_title` (`id`, `category`, `title`, `status`) VALUES
(2, 'Et qui sit aliquid e', 'Saepe maxime enim mo', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_title`
--

CREATE TABLE `why_choose_title` (
  `id` int(11) NOT NULL,
  `category` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `why_choose_image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_choose_title`
--

INSERT INTO `why_choose_title` (`id`, `category`, `title`, `description`, `why_choose_image`, `status`) VALUES
(2, 'Totam at cupiditate ', 'Doloribus repudianda', 'Cupidatat delectus ', '2.JPG', 0),
(3, 'Why Choose Our Company', 'We Are Best Service Provider Company Of The Industry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum labore minus dolore ab itaque animi sit, quae non quas architecto quaerat fugit in temporibus sequi laboriosam, repellat tempore consequuntur voluptatem.', '3.JPG', 1);

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
-- Indexes for table `basic_pricing`
--
ALTER TABLE `basic_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_pricing_facility`
--
ALTER TABLE `basic_pricing_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_title`
--
ALTER TABLE `blog_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_now`
--
ALTER TABLE `contact_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_title`
--
ALTER TABLE `contact_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_mail`
--
ALTER TABLE `contact_us_mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_image`
--
ALTER TABLE `counter_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_link`
--
ALTER TABLE `important_link`
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
-- Indexes for table `portfolio_image`
--
ALTER TABLE `portfolio_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_title`
--
ALTER TABLE `portfolio_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium_pricing`
--
ALTER TABLE `premium_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium_pricing_facility`
--
ALTER TABLE `premium_pricing_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_title`
--
ALTER TABLE `pricing_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reasons`
--
ALTER TABLE `reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_title`
--
ALTER TABLE `service_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icon`
--
ALTER TABLE `social_icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard_pricing`
--
ALTER TABLE `standard_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard_pricing_facility`
--
ALTER TABLE `standard_pricing_facility`
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
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi_title`
--
ALTER TABLE `testi_title`
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
-- Indexes for table `why_choose_title`
--
ALTER TABLE `why_choose_title`
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
-- AUTO_INCREMENT for table `basic_pricing`
--
ALTER TABLE `basic_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `basic_pricing_facility`
--
ALTER TABLE `basic_pricing_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_title`
--
ALTER TABLE `blog_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_now`
--
ALTER TABLE `contact_now`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_title`
--
ALTER TABLE `contact_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us_mail`
--
ALTER TABLE `contact_us_mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `counter_image`
--
ALTER TABLE `counter_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `important_link`
--
ALTER TABLE `important_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `portfolio_image`
--
ALTER TABLE `portfolio_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolio_title`
--
ALTER TABLE `portfolio_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `premium_pricing`
--
ALTER TABLE `premium_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `premium_pricing_facility`
--
ALTER TABLE `premium_pricing_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pricing_title`
--
ALTER TABLE `pricing_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reasons`
--
ALTER TABLE `reasons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service_title`
--
ALTER TABLE `service_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_icon`
--
ALTER TABLE `social_icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `standard_pricing`
--
ALTER TABLE `standard_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `standard_pricing_facility`
--
ALTER TABLE `standard_pricing_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teams_title`
--
ALTER TABLE `teams_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testi_title`
--
ALTER TABLE `testi_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- AUTO_INCREMENT for table `why_choose_title`
--
ALTER TABLE `why_choose_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
