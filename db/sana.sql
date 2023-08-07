-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 06:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sana`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `coust_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `source` varchar(150) NOT NULL,
  `req_from` varchar(200) NOT NULL,
  `req_to` varchar(200) NOT NULL,
  `other` varchar(250) NOT NULL,
  `coordinates` varchar(250) NOT NULL,
  `order_number` int(11) NOT NULL,
  `project_type` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `Name_Category` varchar(100) NOT NULL,
  `Slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `Name_Category`, `Slug`) VALUES
(23, 'Cars', 'cars'),
(25, ' mm', '-mm');

-- --------------------------------------------------------

--
-- Table structure for table `completed_order`
--

CREATE TABLE `completed_order` (
  `id` int(11) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `subr_name` varchar(100) NOT NULL,
  `from` varchar(150) NOT NULL,
  `to` varchar(150) NOT NULL,
  `from_to` varchar(150) NOT NULL,
  `Kilometer` varchar(100) NOT NULL,
  `kerosene_before` varchar(100) NOT NULL,
  `kerosene_after` varchar(100) NOT NULL,
  `kerosene_price` varchar(100) NOT NULL,
  `overnight_expenses` varchar(100) NOT NULL,
  `other_expenses` varchar(100) NOT NULL,
  `total_expenses` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `received_date` varchar(200) NOT NULL,
  `delivery_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_request` varchar(150) NOT NULL,
  `start_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completed_order`
--

INSERT INTO `completed_order` (`id`, `driver_name`, `subr_name`, `from`, `to`, `from_to`, `Kilometer`, `kerosene_before`, `kerosene_after`, `kerosene_price`, `overnight_expenses`, `other_expenses`, `total_expenses`, `file`, `received_date`, `delivery_date`, `date_request`, `start_date`) VALUES
(24, 'مرتضى', 'Ali Ahmed', 'بغداد', 'البصرة', 'بغداد', '122', '12', '12', '12', '12', '12', 36, '6495cdb7a4256_31218.pdf', '2023-06-23 19:46:29', '2023-06-23 16:52:07', '2023-06-23 19:46:00', '2023-05-31T19:52');

-- --------------------------------------------------------

--
-- Table structure for table `completed_order_external`
--

CREATE TABLE `completed_order_external` (
  `id` int(11) NOT NULL,
  `subr_name` varchar(100) NOT NULL DEFAULT 'empty',
  `name_recipient` varchar(150) NOT NULL,
  `from_ex` varchar(100) NOT NULL,
  `to_ex` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `order_number` int(11) NOT NULL,
  `type_mechanism` varchar(150) NOT NULL,
  `file` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `fullname`, `phone`, `password`) VALUES
(3, 'مرتضى', '07725933735', '1234'),
(4, 'علي شاهين', '07746579484', '112112'),
(5, 'سالم علي', '07764849585', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `group_num` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `project` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `desc` longtext NOT NULL,
  `project_statuse` varchar(100) NOT NULL,
  `statues` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `team_id`, `fullname`, `group_num`, `location`, `project`, `category`, `desc`, `project_statuse`, `statues`, `date`) VALUES
(15, 2, 'Murtada Luqman', 'GPMD - 2', 'بغداد', 'sdasdf3', 'Aprovales', 'aSDASFDFSDSGSfsgdfgdfgdfgdfgdfgdfdgdf', 'Stoped', 1, '2023-06-01 20:29:27'),
(16, 2, 'Murtada Luqman', 'GPMD - 3', 'بغداد', 'jhfgmjg', 'Machine Off', 'jyfjfjjyrjyrjyyrjrjyrjyrjyrjyrjyrjyrjyrjyrjyr', 'Stoped', 0, '2023-06-03 19:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `group_message`
--

CREATE TABLE `group_message` (
  `id` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `statues` tinyint(4) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `coust_name` varchar(100) NOT NULL,
  `text_rejection` longtext NOT NULL,
  `sub_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `coust_name`, `text_rejection`, `sub_id`, `date`, `status`) VALUES
(6, 'Majed', 'المنتجات ذني ممتوفرات عدنا نعتذر', 19, '2023-04-26 18:09:34', 0),
(7, 'Majed', 'تعذرنة حبيبي', 19, '2023-04-26 18:18:59', 0),
(8, 'Majed', 'ابو الكرين مموجود والمواد ممتوفرة حبيبي توكل بالله', 19, '2023-04-27 05:59:33', 0),
(9, 'Majed', 'dfgfdg', 19, '2023-04-27 08:29:48', 0),
(10, 'Majed', 'البضاعة مو كاملة', 19, '2023-04-28 13:01:48', 0),
(11, 'مرتضى', 'الرافعه مابيا بانزين نعتذر حبي', 19, '2023-04-28 14:07:00', 0),
(12, 'مرتضى', 'الرافعه مابيا بانزين نعتذر حبي', 19, '2023-04-28 14:07:35', 0),
(13, 'علي شاهين', 'اعتذر منكم لان عدي بنجر بالدعامية', 19, '2023-04-28 14:50:38', 0),
(14, 'علي شاهين', 'لا يوجد بانزين', 19, '2023-04-28 15:08:45', 0),
(15, 'علي شاهين', 'dtytytyty', 19, '2023-04-28 20:44:14', 0),
(16, 'Majed', 'tuiu', 19, '2023-04-30 08:02:38', 0),
(17, 'Majed', 'نعتذر البو الحب\r\n', 19, '2023-05-15 07:36:16', 0),
(18, 'Ali Ahmed', 'asdfdf', 17, '2023-05-22 07:10:48', 0),
(19, 'مرتضى', 'rtutyutyu', 171, '2023-05-22 07:14:13', 0),
(20, 'Majed', '4545', 19, '2023-05-31 21:52:32', 0),
(21, 'مرتضى', 'dfghfgh', 180, '2023-05-31 22:25:40', 0),
(22, 'مرتضى', 'ghjghjghjghjgh', 190, '2023-06-10 09:42:37', 0),
(23, 'مرتضى', 'tyituiyu', 189, '2023-06-10 09:43:40', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invo` int(11) NOT NULL,
  `invoice_name` varchar(100) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `statues` tinyint(4) NOT NULL DEFAULT 0,
  `inovice_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invo`, `invoice_name`, `sub_id`, `statues`, `inovice_date`) VALUES
(193, 'Ali Ahmed', 17, 2, '2023-06-23 16:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_driver`
--

CREATE TABLE `invoice_driver` (
  `id_driv_invo` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `invoice_name` varchar(100) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `invoice_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `product_name`, `slug`, `cat_id`) VALUES
(12, 'Murtadaa', 'murtadaa', 25),
(13, '23fgn', '23fgn', 23),
(15, '112drkv', '112drkv', 23);

-- --------------------------------------------------------

--
-- Table structure for table `rejection_driver`
--

CREATE TABLE `rejection_driver` (
  `id` int(11) NOT NULL,
  `name_driver` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `text` longtext NOT NULL,
  `resp_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rejection_driver`
--

INSERT INTO `rejection_driver` (`id`, `name_driver`, `phone`, `text`, `resp_id`, `date`) VALUES
(6, 'مرتضى', '07725933735', 'rtutyutyu', 171, '2023-05-22 07:14:13'),
(7, 'مرتضى', '07725933735', 'dfghfgh', 180, '2023-05-31 22:25:40'),
(8, 'مرتضى', '07725933735', 'ghjghjghjghjgh', 190, '2023-06-10 09:42:37'),
(9, 'مرتضى', '07725933735', 'tyituiyu', 189, '2023-06-10 09:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `rejection_request`
--

CREATE TABLE `rejection_request` (
  `id` int(11) NOT NULL,
  `text` longtext NOT NULL,
  `resp_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rejection_request`
--

INSERT INTO `rejection_request` (`id`, `text`, `resp_id`, `date`) VALUES
(15, 'نعتذر البو الحب\r\n', 19, '2023-05-15 07:36:16'),
(16, 'asdfdf', 17, '2023-05-22 07:10:48'),
(17, '4545', 19, '2023-05-31 21:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `coust_id` int(11) NOT NULL,
  `invo_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `source` varchar(150) NOT NULL,
  `req_from` varchar(200) NOT NULL,
  `req_to` varchar(200) NOT NULL,
  `other` varchar(250) NOT NULL,
  `coordinates` varchar(250) NOT NULL,
  `order_number` int(11) NOT NULL,
  `project_type` varchar(50) NOT NULL,
  `statues` tinyint(4) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `customer_name`, `coust_id`, `invo_id`, `category_id`, `product_id`, `quantity`, `source`, `req_from`, `req_to`, `other`, `coordinates`, `order_number`, `project_type`, `statues`, `date`) VALUES
(265, 'Ali Ahmed', 17, 193, 23, 13, 12, 'بغداد', 'البصرة', 'البصرة', 'm,,gf', '45', 4, 'Last Mile', 2, '2023-06-23 19:46:00'),
(266, 'Ali Ahmed', 17, 193, 25, 12, 12, 'الفرات الاوسط', 'البصرة', 'النجف', 'ghgf', '454', 454, 'FTTH', 2, '2023-06-23 19:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `invo_drive_id` int(11) NOT NULL,
  `coust_id` int(11) NOT NULL,
  `invo_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `source` varchar(150) NOT NULL,
  `req_from` varchar(200) NOT NULL,
  `req_to` varchar(200) NOT NULL,
  `other` varchar(250) NOT NULL,
  `coordinates` varchar(250) NOT NULL,
  `order_number` int(11) NOT NULL,
  `project_type` varchar(50) NOT NULL,
  `date_request` varchar(150) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sr_reporting`
--

CREATE TABLE `sr_reporting` (
  `id` int(11) NOT NULL,
  `sr_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `group_num` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `project` varchar(100) NOT NULL,
  `mt` int(100) NOT NULL,
  `db` int(100) NOT NULL,
  `hdd` int(100) NOT NULL,
  `hex` int(100) NOT NULL,
  `total_cost` int(100) NOT NULL,
  `pole` int(100) NOT NULL,
  `bit` int(100) NOT NULL,
  `fuel` int(100) NOT NULL,
  `desc` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sr_reporting`
--

INSERT INTO `sr_reporting` (`id`, `sr_id`, `fullname`, `group_num`, `location`, `project`, `mt`, `db`, `hdd`, `hex`, `total_cost`, `pole`, `bit`, `fuel`, `desc`, `date`) VALUES
(1, 0, 'Murtada', '3', 'ewrwe', 'were', 45, 33, 54, 32, 4543, 345, 345, 435, '34534534545grfgtrrt43terge', '2023-06-04 09:35:27'),
(2, 0, 'Ali', 'er4', 'erter', 'erter', 34, 55, 43, 34, 54, 345, 54, 4543, 'ergtrgtrt', '2023-06-04 09:35:27'),
(3, 2, 'Murtada', 'GPMD - 1', 'بغداد', 'ghj', 56, 56, 54, 45, 65000, 45, 56, 56, 'trhtyutytyuy', '2023-06-04 11:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `sr_visor`
--

CREATE TABLE `sr_visor` (
  `id` int(11) NOT NULL,
  `team_leader_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `direct_manager` varchar(50) NOT NULL,
  `id_hrms` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sr_visor`
--

INSERT INTO `sr_visor` (`id`, `team_leader_name`, `password`, `email`, `phone`, `direct_manager`, `id_hrms`, `created_at`) VALUES
(2, 'Murtada', '1212', 'Murtada@gmail.com', '07905958484', 'dffdf', '4343', '2023-06-04 10:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `fullName` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `HRMS_id` int(11) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` text DEFAULT NULL,
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `fullName`, `password`, `HRMS_id`, `Department`, `status`, `created_at`, `updated_at`, `updated_by`) VALUES
(17, 'Ali Ahmed', '1212', 232344, 'mu', 0, '2023-04-20 04:56:16', NULL, NULL),
(19, 'Majed', '123', 6219, 'Ali', 0, '2023-04-24 09:48:43', NULL, NULL),
(20, 'مرتضى لقمان', '123123', 123432, 'Mohammed', 0, '2023-05-02 05:19:27', NULL, NULL),
(21, 'يوسف ابراهيم', '112255', 23534, 'سيبسي', 0, '2023-05-15 12:00:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team_leaders`
--

CREATE TABLE `team_leaders` (
  `id` int(11) NOT NULL,
  `team_leader_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `direct_manager` varchar(50) NOT NULL,
  `id_hrms` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_leaders`
--

INSERT INTO `team_leaders` (`id`, `team_leader_name`, `password`, `email`, `phone`, `direct_manager`, `id_hrms`, `created_at`) VALUES
(2, 'Murtada Luqman', '1234', 'murtada@gmail.com', '07725904505', 'Murtada', '323434', '2023-05-31 09:39:00'),
(4, 'tiyui', 'uyi', 'yuiyuiyu@lgyly.com', '5565556', 'bvlgg', '21243', '2023-06-04 08:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rols` varchar(100) NOT NULL,
  `state` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `rols`, `state`, `created_at`) VALUES
(1, 'Murtada', 'Murtada@gmail.com', '123', 'admin', 1, '2023-04-18 07:53:36'),
(2, 'Ali', 'ali@gmail.com', '1212', 'editor', 1, '2023-04-18 10:24:16'),
(3, 'Ali Qusay', 'AliQusay@gmail.com', 'Ali22QuAli', 'groups', 1, '2023-06-04 07:16:56'),
(5, 'view', 'view@gmail.com', 'view', 'view', 1, '2023-06-13 06:10:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completed_order`
--
ALTER TABLE `completed_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completed_order_external`
--
ALTER TABLE `completed_order_external`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_message`
--
ALTER TABLE `group_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invo`);

--
-- Indexes for table `invoice_driver`
--
ALTER TABLE `invoice_driver`
  ADD PRIMARY KEY (`id_driv_invo`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `rejection_driver`
--
ALTER TABLE `rejection_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejection_request`
--
ALTER TABLE `rejection_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_reporting`
--
ALTER TABLE `sr_reporting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sr_visor`
--
ALTER TABLE `sr_visor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_leaders`
--
ALTER TABLE `team_leaders`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `completed_order`
--
ALTER TABLE `completed_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `completed_order_external`
--
ALTER TABLE `completed_order_external`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `group_message`
--
ALTER TABLE `group_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `invoice_driver`
--
ALTER TABLE `invoice_driver`
  MODIFY `id_driv_invo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rejection_driver`
--
ALTER TABLE `rejection_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rejection_request`
--
ALTER TABLE `rejection_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `sr_reporting`
--
ALTER TABLE `sr_reporting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sr_visor`
--
ALTER TABLE `sr_visor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `team_leaders`
--
ALTER TABLE `team_leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
