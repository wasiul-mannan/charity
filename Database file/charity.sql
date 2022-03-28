-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 06:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `topic_id` int(30) DEFAULT NULL,
  `content` text NOT NULL,
  `banner_path` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `topic_id`, `content`, `banner_path`, `date_created`) VALUES
(1, 'Sample 101', 1, 'A blog (a truncation of \"weblog\")[1] is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page. Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, \"multi-author blogs\" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other \"microblogging\" systems helps integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.', 'cover_bg_1.jpg', '2021-08-17 12:56:54'),
(2, 'Sample 102', 1, 'A blog (a truncation of \"weblog\")[1] is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page. Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, \"multi-author blogs\" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other \"microblogging\" systems helps integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.', 'cover_bg_2.jpg', '2021-08-17 13:57:56'),
(5, 'ASDDDD', 1, 'A blog (a truncation of \"weblog\")[1] is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page. Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, \"multi-author blogs\" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other \"microblogging\" systems helps integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.', '1-10.png', '2022-03-16 01:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(30) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `fund_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `trxid` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `volunteer_id`, `fund_id`, `payment_method`, `mobile_number`, `trxid`, `amount`, `date_created`) VALUES
(1, 0, 0, '', '', '', 522, '2021-08-17 16:47:43'),
(2, 0, 0, '', '', '', 1022, '2021-08-17 16:48:56'),
(5, 0, 0, 'Bkash', '1', '2', 42, '2022-03-14 01:08:30'),
(6, 0, 0, 'Bkash', '1', '2', 42, '2022-03-14 01:08:32'),
(7, 0, 0, 'Bkash', '1', '2', 223, '2022-03-14 01:10:24'),
(8, 0, 0, 'Bkash', 'a', 'v', 2034, '2022-03-14 01:13:18'),
(9, 4, 0, 'Bkash', '', '', 42, '2022-03-14 16:30:25'),
(10, 0, 0, 'Nagad', '1', '2', 42, '2022-03-14 16:31:27'),
(11, 4, 0, 'Rocket', '01737420211', 'gfghfgf687678', 5022, '2022-03-14 19:24:30'),
(12, 4, 0, 'Ucash', '01737420211', 'gfghfgf687678', 5022, '2022-03-15 16:23:46'),
(13, 0, 0, 'Rocket', '1', 'gfghfgf687678', 42, '2022-03-15 22:30:45'),
(14, 0, 0, 'Rocket', '1', 'gfghfgf687678', 42, '2022-03-15 22:30:46'),
(15, 4, 0, 'Nagad', '01737420211', 'gfghfgf687678', 223, '2022-03-15 22:37:43'),
(16, 0, 0, 'Nagad', '01737420211', 'gfghfgf687678', 223, '2022-03-15 22:37:43'),
(17, 4, 1, 'Bkash', '01737420211', 'gfghfgf687678', 2012, '2022-03-15 23:09:21'),
(18, 4, 1, 'Bkash', '01737420211', 'gfghfgf687678', 5000, '2022-03-15 23:13:19'),
(19, 0, 0, 'Bkash', '01737420211', 'gfghfgf687678', 20, '2022-03-16 20:58:20'),
(20, 0, 0, 'Bkash', '01737420211', 'gfghfgf687678', 20, '2022-03-16 20:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `schedule` date NOT NULL,
  `img_path` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `schedule`, `img_path`, `date_created`) VALUES
(1, 'Sample Event', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae massa quis tellus ullamcorper auctor at in mi. Vestibulum euismod, nulla sit amet rhoncus iaculis, sapien justo sodales purus, nec finibus massa massa eget ante. Maecenas vitae eros in purus dictum porttitor. Integer arcu dui, dictum ac tellus et, ultricies condimentum est. Maecenas rutrum erat tincidunt dui rutrum fermentum. Nullam pretium molestie gravida. Sed mi justo, porta id justo ac, ornare aliquam est. Cras porta nisi eu eleifend tincidunt. Donec malesuada interdum orci sit amet sollicitudin. Maecenas sed augue condimentum justo vulputate interdum vel in lacus.', '2021-08-23', 'uploads/events/1.jpg', '2021-08-17 15:16:11'),
(3, 'Event 102', 'Sample Only', '2021-08-25', 'uploads/events/3.jpg', '2021-08-17 15:17:52'),
(4, 'Sample Event 3', 'Sample Event only', '2021-08-30', 'uploads/events/4.jpg', '2021-08-17 15:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `id` int(30) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `topic_id` int(30) DEFAULT NULL,
  `content` text NOT NULL,
  `amount` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `banner_path` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`id`, `volunteer_id`, `title`, `topic_id`, `content`, `amount`, `target`, `banner_path`, `date_created`) VALUES
(1, 2, 'ASD', 1, 'A blog (a truncation of \"weblog\")[1] is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page. Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, \"multi-author blogs\" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other \"microblogging\" systems helps integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.', 50000, 0, 'cover_bg_1.jpg', '2022-03-15 22:52:48'),
(2, 0, 'asd', 1, 'A blog (a truncation of \"weblog\")[1] is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page. Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, \"multi-author blogs\" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other \"microblogging\" systems helps integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.', 0, 0, '10-1.jpg', '2022-03-16 01:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Online Charity Management System in PHP'),
(6, 'short_name', 'Sample Charity Web Site'),
(11, 'logo', 'uploads/1629161280_charity_logo.jpg'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1629162000_banner.jpg'),
(15, 'welcome_content', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae massa quis tellus ullamcorper auctor at in mi. Vestibulum euismod, nulla sit amet rhoncus iaculis, sapien justo sodales purus, nec finibus massa massa eget ante. Maecenas vitae eros in purus dictum porttitor. Integer arcu dui, dictum ac tellus et, ultricies condimentum est. Maecenas rutrum erat tincidunt dui rutrum fermentum. Nullam pretium molestie gravida. Sed mi justo, porta id justo ac, ornare aliquam est. Cras porta nisi eu eleifend tincidunt. Donec malesuada interdum orci sit amet sollicitudin. Maecenas sed augue condimentum justo vulputate interdum vel in lacus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Quisque sagittis varius magna ac pharetra. Nunc lobortis sapien nisl, ac fringilla enim pellentesque vitae. Vestibulum congue lorem non sapien lobortis iaculis. Sed commodo sit amet turpis sed porta. Phasellus arcu nulla, facilisis in nulla at, pharetra lobortis ligula. Nullam dignissim, nunc eget consectetur facilisis, tortor felis lacinia diam, a vestibulum magna mauris eget mi. Donec tellus ipsum, euismod at hendrerit a, consequat viverra tellus.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Pellentesque auctor nunc in pulvinar dignissim. Mauris tempus fringilla ligula, ut facilisis felis euismod ut. Quisque nec sollicitudin felis, ac venenatis elit. Suspendisse at tortor ac leo rutrum maximus. Nulla viverra purus quis arcu suscipit, vitae suscipit orci accumsan. Aliquam sodales, justo vel interdum sodales, nibh libero facilisis lorem, in elementum ex odio non sem. Curabitur vitae blandit felis. In auctor velit eget maximus placerat. Donec quis tellus vestibulum, malesuada magna quis, ultrices lorem.</p>'),
(16, 'home_quote', 'We Care <3');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`, `status`, `date_created`, `date_updated`) VALUES
(1, 'Health', 'This is a sample topic only for health category.', 1, '2021-08-17 08:51:41', '2021-08-17 08:52:37'),
(2, 'Test 101', '&lt;p&gt;Sample Only&lt;/p&gt;', 1, '2021-08-17 08:53:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `file_path` text NOT NULL,
  `dir_code` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `user_id`, `file_path`, `dir_code`, `date_created`) VALUES
(1, 1, 'uploads/blog_uploads/gInV4MOSIc/1629172196_1.jpg', 'gInV4MOSIc', '2021-08-17 11:49:56'),
(2, 1, 'uploads/blog_uploads/gInV4MOSIc/1629172196_download.jpg', 'gInV4MOSIc', '2021-08-17 11:49:56'),
(3, 1, 'uploads/blog_uploads/qI8ZJiELzQ/1629172988_1.jpg', 'qI8ZJiELzQ', '2021-08-17 12:03:08'),
(4, 1, 'uploads/blog_uploads/qI8ZJiELzQ/1629172988_download.jpg', 'qI8ZJiELzQ', '2021-08-17 12:03:08'),
(5, 1, 'uploads/blog_uploads/vLLU8CyJZd/1629174024_1.jpg', 'vLLU8CyJZd', '2021-08-17 12:20:24'),
(6, 1, 'uploads/blog_uploads/Zk1pDmHIo2/1629176073_1.jpg', 'Zk1pDmHIo2', '2021-08-17 12:54:33'),
(7, 1, 'uploads/blog_uploads/K1dZZqq4SO/1629176614_warehouse-portrait.jpg', 'K1dZZqq4SO', '2021-08-17 13:03:34'),
(8, 1, 'uploads/blog_uploads/YSzqldklKk/1629176691_warehouse-portrait.jpg', 'YSzqldklKk', '2021-08-17 13:04:51'),
(10, 1, 'uploads/blog_uploads/Zk1pDmHIo2/1629176847_warehouse-portrait.jpg', 'Zk1pDmHIo2', '2021-08-17 13:07:27'),
(11, 1, 'uploads/blog_uploads/causes_uploads/1629190918_dark-bg.jpg', 'causes_uploads', '2021-08-17 17:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', 'Admin', 'admin@admin.com', 'password', 'uploads/1624240500_avatar.png', NULL, 1, '2021-01-20 14:02:37', '2022-03-14 18:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `image_path` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `image_path`, `name`, `mobile`, `email`, `address`, `password`) VALUES
(4, 'download.jfif', 'Wasiul Mannan', '01737420211', 'admin@admin.com', 'Bogura', 'password'),
(5, 'download.jfif', 'Wasiul', '02564654', 'admin@admin.com', 'asdsadasd', '123456'),
(6, 'download.jfif', 'Wasiul', '02564654', 'admin@admin.com', 'asdasd', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `topic_id_2` (`topic_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funds`
--
ALTER TABLE `funds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `funds`
--
ALTER TABLE `funds`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
