-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 10:59 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giribrothers`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_video`
--

CREATE TABLE `about_video` (
  `about_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_video`
--

INSERT INTO `about_video` (`about_id`, `image`, `year`, `month`, `created_on`) VALUES
(1, '9902-VID-20180906-WA0030.mp4', 2019, 4, '2019-04-30 11:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `email`, `password`, `name`, `created_on`) VALUES
(1, 'admin@gmail.com', '123456', 'Admin', '2016-04-21 06:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `donate_form`
--

CREATE TABLE `donate_form` (
  `don_id` int(11) NOT NULL,
  `reservation_name` varchar(100) NOT NULL,
  `reservation_email` varchar(100) NOT NULL,
  `reservation_phone` varchar(100) NOT NULL,
  `person_select` varchar(100) NOT NULL,
  `form_detail` varchar(100) NOT NULL,
  `reservation_pan` varchar(100) NOT NULL,
  `reservation_amount` varchar(100) NOT NULL,
  `date` int(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `f_users`
--

CREATE TABLE `f_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ename` varchar(500) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(12) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1-su,0-staff,3-dm,2-dpt officer',
  `picture` varchar(500) NOT NULL,
  `created_by` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `logon` datetime NOT NULL,
  `sound` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_users`
--

INSERT INTO `f_users` (`id`, `name`, `ename`, `email`, `password`, `phone`, `type`, `picture`, `created_by`, `createdon`, `status`, `logon`, `sound`) VALUES
(1, 'Kartik Infocom', 'Kartik Infocom', 'admin@gmail.com', 'pammi@shiva', '9415001972', 1, '20150820181427-DSC01253.jpg', 1, '2015-09-24 14:49:49', 0, '2016-10-01 14:19:57', 1),
(4, 'CEO - कैम्पा उत्तराखंड ', 'CEO CAMPA UK', 'ceocampa@gmail.com', 'demo', '7536875228', 3, '20150630165945-50x50.JPG', 2, '2015-09-24 14:49:49', 1, '2016-04-19 10:45:37', 1),
(5, 'प्रभागीय वनाधिकारी देहरादून', 'DFO DEHRADOON', 'dfoddn@gmail.com', 'dfoddn@demo', '9458192160', 7, '', 7, '2015-09-24 14:49:49', 0, '2016-10-01 14:07:28', 1),
(72, 'प्रभागीय वनाधिकारी बिनोग वन्य जीव विहार ', 'DFO BINOG WILDLIFE SANCTUARY', 'dfo_mussoorie@rediffmail.com', 'demo', '9411107626', 7, '', 82, '2015-09-24 15:24:12', 0, '2016-03-04 11:14:53', 1),
(73, 'प्रभागीय वनाधिकारी बिनसर वन्य जीव विहार ', 'DFO BINSAR WILDLIFE SANCTUARY', 'csalmdfo@rediffmail.com', 'demo', '9412110251', 7, '', 82, '2015-09-24 15:24:12', 0, '2016-04-16 14:13:44', 1),
(74, 'प्रभागीय वनाधिकारी  गंगोत्री राष्ट्रीय पार्क ', 'DFO GANGOTRI NP', 'ddgangotrinationalpark@gmail.com', 'demo', '9458192182', 7, '', 82, '2015-09-24 15:24:12', 0, '2016-04-05 14:42:51', 1),
(75, 'प्रभागीय वनाधिकारी गोविन्द वन्य जीव विहार ', 'DFO GOWIND WILDLIFE SANCTUARY', 'gwlspurola@gmail.com', 'demo', '9837783999', 7, '', 82, '2015-09-24 15:24:12', 0, '2016-03-22 12:48:37', 1),
(76, 'वन संरक्षक भागीरथी वृत ', 'CF BHAGIRATHI CIRCLE', 'cf_bhagirathi_uta@hotmail.com', 'demo', '9690111222', 6, '', 16, '2015-09-24 15:24:12', 1, '2016-04-12 15:47:10', 1),
(77, 'वन संरक्षक गढवाल वृत ', 'CF GARHWAL CIRCLE', 'cfgarhwal555@gmail.com', 'demo', '9412057475', 6, '', 16, '2015-09-24 15:24:12', 0, '2016-02-01 12:05:21', 1),
(78, 'वन संरक्षक यमुना वृत ', 'CF YAMUNA CIRCLE', 'yamunacircle@gmail.com', 'demo', '9412053093', 6, '', 16, '2015-09-24 15:24:12', 0, '2016-02-02 12:57:16', 1),
(79, 'वन संरक्षक उत्तरी कुमाऊं वृत ', 'CF NORTH KUMAU CIRCLE', 'cfkumaon_north@rediffmail.com', 'demo', '9458192128', 6, '', 15, '2015-09-24 15:24:12', 0, '0000-00-00 00:00:00', 1),
(80, 'वन संरक्षक दक्षिणी कुमाऊं वृत ', 'CF SOUTH KUMAU CIRCLE', 'cf_skumaon@rediffmail.com', 'demo', '9412085187', 6, '', 15, '2015-09-24 15:27:17', 0, '0000-00-00 00:00:00', 1),
(81, 'वन संरक्षक पश्चिमी वृत ', 'CF WESTERN CIRCLE', 'cfwestern49@rediffmail.com', 'demo', '9458162276', 6, '', 15, '2015-09-24 15:27:17', 0, '2016-02-04 15:54:10', 1),
(82, 'मुख्य वन संरक्षक, वन्यजीव ', 'CCF WILDLFIE', 'ccfwlf@gmail.com', 'demo', '9410393913', 6, '', 17, '2015-09-24 15:27:17', 1, '2016-03-15 12:33:01', 1),
(83, 'प्रभागीय वनाधिकारी नैना देवी कंज़र्वेशन रिज़र्व ', 'DFO NAINADEVI CR', 'dfonainadevi@gmail.com', 'demo', '9458160737', 7, '', 82, '2015-09-24 15:27:17', 0, '2016-01-08 12:16:14', 1),
(84, 'प्रभागीय वनाधिकारी पवलगढ़ कंज़र्वेशन रिज़र्व ', 'DFO PAWALGARH CR', 'dfopawalgarh@gmail.com', 'demo', '7579009817', 7, '', 82, '2015-09-24 15:27:17', 1, '2015-10-21 17:13:20', 1),
(85, 'प्रभागीय वनाधिकारी झिलमिल कंज़र्वेशन रिज़र्व ', 'DFO JHILMIL CR', 'dfojhilmil@gmail.com', 'demo', '7534538990', 7, '', 82, '2015-09-24 15:27:17', 0, '2015-12-23 13:58:05', 1),
(86, 'प्रभागीय वनाधिकारी आसन कंज़र्वेशन रिज़र्व ', 'DFO AASAN CR', 'dfoasan@gmail.com', 'demo', '9412988990', 7, '', 82, '2015-09-24 15:27:17', 0, '2015-12-23 13:57:13', 1),
(87, 'testuser', '', 'testuser@gmail.com', 'test', '', 1, '', 0, '2015-09-09 15:20:16', 1, '2016-02-18 17:17:55', 1),
(98, 'मुख्य वन संरक्षक , सतर्कता ', 'CCF INTELLIGENCE', 'ccf_intl@gmail.com', 'demo', '9876543210', 4, '', 4, '2016-01-14 15:38:14', 0, '2016-01-14 17:10:51', 1),
(99, 'निदेशक NDBR', 'DIR NDBR', 'dirnbdr@gmail.com', 'demo', '1234567890', 7, '', 82, '2016-01-15 18:45:26', 1, '2016-03-14 10:54:36', 1),
(103, 'प्रभागीय वनाधिकारी नन्धौर  वन्य जीव विहार', 'DFO NANDHAUR WLS', 'nandhaur@gmail.com', 'campamis@220002', '9876543210', 7, '', 82, '2016-01-22 15:18:33', 0, '2016-03-22 16:31:37', 1),
(104, 'pfa', 'pfa', 'pfa@gmail.com', 'pfa@demo', '', 2, '', 0, '2016-10-01 10:50:45', 0, '0000-00-00 00:00:00', 1),
(2, 'pfa', 'pfa', 'pfa@gmail.com', 'pfa@demo', '', 2, '', 0, '2016-10-01 10:52:59', 0, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gal_id` int(11) NOT NULL,
  `all_pics` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `event_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `party_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gal_id`, `all_pics`, `photo`, `event`, `party`, `title`, `event_title`, `party_title`, `year`, `month`, `created_on`) VALUES
(14, '9106-', '9106-IMG_9549.JPG', '9106-IMG_5047.JPG', '9106-687A0701.JPG', 'Making Pic', 'Price Destubution', 'New Year Party 2018', 2019, 4, '2019-04-30 09:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `media_news`
--

CREATE TABLE `media_news` (
  `med_id` int(11) NOT NULL,
  `med_pic` varchar(100) NOT NULL,
  `med_des` varchar(100) CHARACTER SET utf8 NOT NULL,
  `publish_date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_news`
--

INSERT INTO `media_news` (`med_id`, `med_pic`, `med_des`, `publish_date`, `year`, `month`, `created_on`) VALUES
(3, '5859-IMG-20190429-WA0041.jpg', 'Press Club-Album Launched(Mata Tere Charno Me)', '11/10/2018', 2019, 4, '2019-04-30 06:21:41'),
(4, '549-IMG-20190429-WA0052.jpg', 'GrmyaWarta Press (Mata Tere Charno me)', '11/10/2018', 2019, 4, '2019-04-30 06:35:20'),
(5, '9380-IMG-20190429-WA0059.jpg', 'Giri Brothers Film Launched(Pehli Nazar)', '01/01/2019', 2019, 4, '2019-04-30 06:45:47'),
(6, '5928-IMG-20190429-WA0063.jpg', 'Giri Brothers(New Year Party Celebrate)', '31/12/2018', 2019, 4, '2019-04-30 07:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `mp3songs`
--

CREATE TABLE `mp3songs` (
  `mp3_id` int(11) NOT NULL,
  `tittle` varchar(200) CHARACTER SET utf8 NOT NULL,
  `subtittle` varchar(200) CHARACTER SET utf8 NOT NULL,
  `tittle_two` varchar(200) CHARACTER SET utf8 NOT NULL,
  `subtittle_two` varchar(200) CHARACTER SET utf8 NOT NULL,
  `audiofiles` varchar(500) CHARACTER SET utf8 NOT NULL,
  `audiofile` varchar(500) CHARACTER SET utf8 NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `slid_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonal`
--

CREATE TABLE `testimonal` (
  `slid_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_event`
--

CREATE TABLE `upcoming_event` (
  `event_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `rel_date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `des` varchar(100) CHARACTER SET utf8 NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming_event`
--

INSERT INTO `upcoming_event` (`event_id`, `photo`, `title`, `rel_date`, `des`, `year`, `month`, `created_on`) VALUES
(1, '953-1811-PicsArt_06-15-07.04.06.jpg', 'Pehli Nazar', '01/10/2019', 'Coming Soon', 2019, 5, '2019-05-01 08:39:00'),
(2, '116-bg2.jpg', 'Giri Brothers Films', '04/05/2019', 'Website Launched(Coming Soon)', 2019, 5, '2019-05-01 08:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `vid_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `detail` varchar(100) CHARACTER SET utf8 NOT NULL,
  `publish_date` varchar(50) CHARACTER SET utf8 NOT NULL,
  `images` varchar(100) NOT NULL,
  `details` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pub_date` varchar(50) CHARACTER SET utf8 NOT NULL,
  `video` varchar(100) NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 NOT NULL,
  `publishtdate` varchar(100) CHARACTER SET utf8 NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`vid_id`, `image`, `detail`, `publish_date`, `images`, `details`, `pub_date`, `video`, `description`, `publishtdate`, `year`, `month`, `created_on`) VALUES
(7, '263-687A2018.MOV', 'Pehli Nazar-Making Video', '01/01/2019', '263-687A2024.MOV', 'Pehli Nazar-Making Video', '01/01/2019', '263-687A1999.MOV', 'Pehli Nazar-Making Video', '01/01/2019', 2019, 4, '2019-04-30 10:33:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_video`
--
ALTER TABLE `about_video`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate_form`
--
ALTER TABLE `donate_form`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `f_users`
--
ALTER TABLE `f_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `media_news`
--
ALTER TABLE `media_news`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `mp3songs`
--
ALTER TABLE `mp3songs`
  ADD PRIMARY KEY (`mp3_id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`slid_id`);

--
-- Indexes for table `testimonal`
--
ALTER TABLE `testimonal`
  ADD PRIMARY KEY (`slid_id`);

--
-- Indexes for table `upcoming_event`
--
ALTER TABLE `upcoming_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`vid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_video`
--
ALTER TABLE `about_video`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `donate_form`
--
ALTER TABLE `donate_form`
  MODIFY `don_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `f_users`
--
ALTER TABLE `f_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `media_news`
--
ALTER TABLE `media_news`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mp3songs`
--
ALTER TABLE `mp3songs`
  MODIFY `mp3_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `slid_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimonal`
--
ALTER TABLE `testimonal`
  MODIFY `slid_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `upcoming_event`
--
ALTER TABLE `upcoming_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
