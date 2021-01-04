-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2021 at 01:47 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15806218_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_us_id` int(3) NOT NULL,
  `about_us_h1` varchar(255) NOT NULL,
  `about_us_p1` varchar(255) NOT NULL,
  `about_us_image` text NOT NULL,
  `about_us_h2` varchar(255) NOT NULL,
  `about_us_p2` varchar(255) NOT NULL,
  `about_us_p3` varchar(255) NOT NULL,
  `about_us_h3` varchar(255) NOT NULL,
  `about_us_p4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_id`, `about_us_h1`, `about_us_p1`, `about_us_image`, `about_us_h2`, `about_us_p2`, `about_us_p3`, `about_us_h3`, `about_us_p4`) VALUES
(1, 'About us', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis.</p>', 'real-estate-agent-showing-house-family.jpg', 'What is it we do', '<ol><li>r adipisicing elit. Minus minima neque tempora</li><li>reiciendis. Lorem ipsum dolor sit amet consectetur adipisic</li><li>ing elit. Minus minima neque tempora reiciendis. Lorem ipsum dolor sit ame</li></ol>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis. Lorem ipsum dolor sit amet consectetu</p>', 'How we can help you achieve your dreams', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis. Lorem ipsum dolor sit amet consectetu</p>');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agents_id` int(3) NOT NULL,
  `agents_name` varchar(255) NOT NULL,
  `agents_role` varchar(255) NOT NULL,
  `agents_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agents_id`, `agents_name`, `agents_role`, `agents_image`) VALUES
(1, 'Harry shnopper', 'I am gay', 'Real-Estate-Insurance-Australia.jpg'),
(2, 'Holy mary', 'Birth to jesus', 'memeeman.jpg'),
(3, 'Not so holy mary', 'Birth to lebron james', 'maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `carousel_id` int(3) NOT NULL,
  `carousel_price` varchar(255) NOT NULL,
  `carousel_bed` varchar(255) NOT NULL,
  `carousel_bath` varchar(255) NOT NULL,
  `carousel_sqm` varchar(255) NOT NULL,
  `carousel_address` varchar(255) NOT NULL,
  `carousel_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`carousel_id`, `carousel_price`, `carousel_bed`, `carousel_bath`, `carousel_sqm`, `carousel_address`, `carousel_image`) VALUES
(1, '$2500', '4 beds', '3 baths', '360 sqm', 'Saelhundavej 152, esbjerg 6700', 'images/building.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(19, ' fdsasfdsaeee'),
(20, ' fds'),
(21, ' fdsssfsdadfsadfasdf'),
(22, ' fds'),
(23, 'sdaf');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(4, 6, 'asdsad', 'gea@ge.com', 'asdf', 'unapproved', '2020-12-09'),
(5, 15, 'yeeeeet', 'yeaysay@gae.com', 'yeeeeeeeet', 'approved', '2020-12-09'),
(6, 6, 'asdsad', 'gea@ge.com', 'asdf', 'unapproved', '2020-12-09'),
(7, 6, 'asdsad', 'gea@ge.com', 'asdf', 'unnaproved', '2020-12-09'),
(8, 6, 'asdsad', 'gea@ge.com', 'asdf', 'unapproved', '2020-12-09'),
(9, 6, 'asdsad', 'gea@ge.com', 'asdf', 'unapproved', '2020-12-09'),
(10, 6, 'tetete', 'gea@ge.com', 'fsdhsgfdhsgdfhs', 'unapproved', '2020-12-09'),
(11, 6, 'asdsad', 'gea@ge.com', 'asdf', 'approved', '2020-12-08'),
(12, 6, 'tetete', 'dude@gmail.com', 'eteatee', 'unnaproved', '2020-12-09'),
(13, 1, 'tetete', 'gea@ge.com', 'asd', 'unnaproved', '2020-12-09'),
(14, 6, 'tetete', 'aaaaaaaaaaaaaaaaaaa@aaaaaaaa.com', 'fadsfad', 'unnaproved', '2020-12-09'),
(15, 13, 'tetete', 'dude@gmail.com', 'teatae', 'unnaproved', '2020-12-21'),
(16, 13, 'tetete', 'dude@gmail.com', 'teatae', 'approved', '2020-12-21'),
(17, 13, 'tetete', 'dude@gmail.com', 'teatae', 'unnaproved', '2020-12-21'),
(19, 18, 'tetete', 'dude@gmail.com', 'yaeeayaesy', 'approved', '2020-12-25'),
(20, 19, 'Bob', 'bob@bob.bob', 'Its very nice, I like very likey like', 'unnaproved', '2021-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(3) NOT NULL,
  `footer_title` varchar(255) NOT NULL,
  `footer_content` varchar(255) NOT NULL,
  `footer_fb` varchar(255) NOT NULL,
  `footer_ig` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_title`, `footer_content`, `footer_fb`, `footer_ig`) VALUES
(3, 'About useee', '<p>yeeeeeet ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>', 'https://www.facebook.com/groups/148121038661114', '');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `hero_id` int(11) NOT NULL,
  `hero_title` varchar(255) NOT NULL,
  `hero_content` varchar(255) NOT NULL,
  `hero_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`hero_id`, `hero_title`, `hero_content`, `hero_image`) VALUES
(1, 'Lorem Ipsum', '<h4><i>Neque porro quisquam est qui dolorem ipsum quia dolor</i></h4>', 'nidvijomist.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_header` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_header`) VALUES
(10, 19, 'Neque porro quisquam est qui dolorem ipsum', 'Barry', '2021-01-03', 'banner_real-estate-news.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at arcu erat. Fusce et tristique orci. Duis nec consequat ligula, quis mollis dui. In finibus pulvinar orci, et euismod lacus iaculis a. Pellentesque dolor dui, laoreet quis purus feugiat, vestibulum convallis velit. Etiam elit enim, dapibus ut placerat a, finibus a nunc. Mauris gravida id arcu nec posuere. Nam tristique suscipit ligula non eleifend.</p><p>Proin ex augue, tincidunt at eros a, ullamcorper lobortis elit. Curabitur efficitur, lorem et malesuada euismod, libero felis venenatis nisl, eu aliquet purus tellus non odio. Sed elementum tempus velit a aliquet. Ut hendrerit finibus lectus, sit amet laoreet magna mollis at. Fusce varius, turpis in molestie varius, metus metus porta eros, ac tempus enim dolor sed magna. Sed commodo imperdiet metus, in fermentum magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vitae tellus molestie erat lacinia tincidunt. Sed ullamcorper ac ipsum quis pharetra. Integer nunc metus, convallis quis consectetur vitae, aliquet eu metus. Mauris quis laoreet ex, sed venenatis nibh. Morbi at dui et nunc elementum rutrum ac nec nisl.</p>', 'yes', 0, 'published', 'varius, metus metus porta eros, ac tempus enim dolor sed magna. Sed commodo imperdiet metus, in fermentum magna. Pellentesque'),
(11, 19, 'felis, at ultricies lorem. Fusce', 'Caroline', '2021-01-03', 'iStock-1010564278-770x527.jpg', '<p>&nbsp; &nbsp; &nbsp; &nbsp; \"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><p>&nbsp;</p><p>&nbsp;</p>', 'yeet', 0, 'published', 'blandit elit quam, in aliquam diam molestie et. Nullam eleifend msurus dolor mollis mi, sed lobortis justo magna non ex.'),
(15, 19, 'justo magna non ex.', 'George', '2021-01-03', 'image.png', '<p>Proin ex augue, tincidunt at eros a, ullamcorper lobortis elit. Curabitur efficitur, lorem et malesuada euismod, libero felis venenatis nisl, eu aliquet purus tellus non odio. Sed elementum tempus velit a aliquet. Ut hendrerit finibus lectus, sit amet laoreet magna mollis at. Fusce varius, turpis in molestie varius, metus metus porta eros, ac tempus enim dolor sed magna.</p><p>&nbsp;Sed commodo imperdiet metus, in fermentum magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis vitae tellus molestie erat lacinia tincidunt. Sed ullamcorper ac ipsum quis pharetra. Integer nunc metus, convallis quis consectetur vitae, aliquet eu metus. Mauris quis laoreet ex, sed venenatis nibh.</p><p>&nbsp;Morbi at dui et nunc elementum rutrum ac nec nisl.</p>', 'adfs', 0, 'published', 'Nam vel sollicitudin felis, at ultricies'),
(17, 19, 'Pellentesque et erat massa. ', 'Lincoln', '2021-01-03', 'unnamed (1).jpg', '<p>yeayaeyeaya aes yaesyaes</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscinci, et euismod lacus t a, finibus a nunc. Mauris gravida id arcu nec posuere. Nam tristique suscipit ligula non eleifend.', 0, 'published', 'Vestibulum pretium nec urna vel consequat. Fusce rutrum varius '),
(18, 19, 'Nam vel sollicitudin felis, at ultricies lorem.', 'Malorum', '2021-01-04', 'Home_prices_concept_with_money_stacks_nopparit_Getty_Images_large.jpg', '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', 'Lorem ipsum dolor sit amet, consect', 0, 'published', 'lit quam, in aliquam diam mole'),
(19, 19, 'erat lacinia tincidunt. Se', 'Long johnson', '2021-01-04', 'download.jfif', '<p>&nbsp; &nbsp; &nbsp;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p><p>&nbsp; &nbsp; &nbsp; To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>', 'But I must explain to you how all this', 0, 'published', 'onec nec quam sed nibh tempus tempus. Duis varius ante sed justo cons');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(5) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `property_bed` varchar(255) NOT NULL,
  `property_size` varchar(255) NOT NULL,
  `property_bath` varchar(255) NOT NULL,
  `property_image` text NOT NULL,
  `property_city` varchar(255) NOT NULL,
  `property_zip` varchar(255) NOT NULL,
  `property_tags` varchar(255) NOT NULL,
  `property_address` varchar(255) NOT NULL,
  `property_google_loc` text NOT NULL,
  `property_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_type`, `property_bed`, `property_size`, `property_bath`, `property_image`, `property_city`, `property_zip`, `property_tags`, `property_address`, `property_google_loc`, `property_price`) VALUES
(2, 'House', '3 beds', '245 sqm', '4 baths', '38d75b985d9d08ce0959201f8198f405.jpg', 'Coppenhagen', '8350', 'Big boi, house, in, the, hood', 'Stormage 20', '', '$443,213,12'),
(3, 'Dungeon', '21 beds', '512 sqm', '7 baths', 'Contemporary-Modern-House-Design-6.1539270983.8601.jpg', 'Aarhus', '7800', 'dungeon goes brrrrrr', 'Kongensgade 43, kl', '', '$62,213,12'),
(4, 'Castle', '521', '6239', '42', 'wp2312538.jpg', 'Romania', '4778', 'spooky castle', 'Scary place 341, 35th 21epilon', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18473.513257185357!2d25.31546244825631!3d54.635887225499395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd957385689bd1%3A0x7881c6e6f3f315d0!2zS3VwcmlvbmnFoWvEl3MsIExpZXR1dmE!5e0!3m2!1slt!2sdk!4v1609284659910!5m2!1slt!2sdk', '$2'),
(7, 'Bigus dickus', '521', '1425', '42', 'unnamed.jpg', 'Aarhus', '7800', 'gay castle', 'Kongensgade 43, kl', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9288.447075452015!2d25.96243624681201!3d54.408002372041885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dc366239c4323f%3A0xe388c56729b59ce!2sPovyazhi%2C%20Baltarusija!5e0!3m2!1slt!2sdk!4v1609284865850!5m2!1slt!2sdk', '$3434,13413,4134,134'),
(8, 'condo', '4 ', '321', '2', '38d75b985d9d08ce0959201f8198f405.jpg', 'vilnius', '5622', 'gay castle', 'bookstore 42, kl 4', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9288.447075452015!2d25.96243624681201!3d54.408002372041885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dc366239c4323f%3A0xe388c56729b59ce!2sPovyazhi%2C%20Baltarusija!5e0!3m2!1slt!2sdk!4v1609284865850!5m2!1slt!2sdk', '$123,432'),
(9, 'House', '521', '1425', '42', 'Margaret-110m2-3D.jpg', 'Romania', '4778', 'house, woods, train', 'Scary place 341, 35th 21epilon', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9288.447075452015!2d25.96243624681201!3d54.408002372041885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dc366239c4323f%3A0xe388c56729b59ce!2sPovyazhi%2C%20Baltarusija!5e0!3m2!1slt!2sdk!4v1609284865850!5m2!1slt!2sdk', '$123,432');

-- --------------------------------------------------------

--
-- Table structure for table `section_1`
--

CREATE TABLE `section_1` (
  `section_1_id` int(11) NOT NULL,
  `section_1_title` varchar(255) NOT NULL,
  `section_1_content` varchar(255) NOT NULL,
  `section_1_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_1`
--

INSERT INTO `section_1` (`section_1_id`, `section_1_title`, `section_1_content`, `section_1_image`) VALUES
(1, 'find it', 'lorearearearase radfonasf gasdf asdf dsaopf asdbnpofgawseubf sdpaifjuasdfupiadfgasdpgibasd', 'fab fa-accessible-icon'),
(2, 'Deez nuts', 'Ya like nuts, booiiii', 'images/home.png');

-- --------------------------------------------------------

--
-- Table structure for table `section_1_head`
--

CREATE TABLE `section_1_head` (
  `section_1_head_id` int(3) NOT NULL,
  `section_1_head` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2a$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(18, 'dori', '$2y$10$TBg5LyFHnQpTjJb2/wQj6uDlzqBjNwgpswNpH0FkNwt9JZ9VyVXKO', 'kaka', 'keke', 'dori@gmail.com', '', 'admin', '$2a$10$iusesomecrazystrings22'),
(19, 'dori', '$2y$10$YZaF4IGQt7viBmXyU/cu2ujHALH/3UgjqtGNqQoRvbIciBjO3hkZC', 'kaka', 'keke', 'dori@gmail.com', '', 'admin', '$2a$10$iusesomecrazystrings22'),
(20, 'emil', '$2y$10$7uqqBAQhdwarrN.RbQHE2uCWHqKXUQIE..U2YJVghjUgmg82UhTA6', 'emil', 'emil', 'emil@gmail.com', '', 'subscriber', '$2a$10$iusesomecrazystrings22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agents_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`hero_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `section_1`
--
ALTER TABLE `section_1`
  ADD PRIMARY KEY (`section_1_id`);

--
-- Indexes for table `section_1_head`
--
ALTER TABLE `section_1_head`
  ADD PRIMARY KEY (`section_1_head_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_us_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agents_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `carousel_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `hero_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section_1`
--
ALTER TABLE `section_1`
  MODIFY `section_1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_1_head`
--
ALTER TABLE `section_1_head`
  MODIFY `section_1_head_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
