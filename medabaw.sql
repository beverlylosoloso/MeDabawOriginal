-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 01:39 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medabaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `field` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `hospital_id`, `name`, `field`, `specialization`) VALUES
(1, 0, 'kokok', 'kiki', 'kiki'),
(2, 0, 'kokokoko', 'thtr', 'rthrt'),
(3, 0, 'alex', 'mandaya', 'hotel'),
(4, 51, 'ook', 'okok', 'okoko'),
(5, 51, 'kim', 'ablter', 'tanga'),
(6, 61, 'erwer', 'erewr', 'werwer'),
(7, 64, 'fhfgt', 'sfsdf', 'sfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_name`, `website`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'asf', 'bebang.com', 17, 1468673790, 0);

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `insurance_name` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `hospital_id`, `insurance_name`, `created_at`, `updated_at`) VALUES
(5, 0, 'kim', 1472098695, 1472098695),
(6, 0, 'phil. health', 1475319485, 1475319485),
(7, 0, 'nono', 1475461939, 1475461939),
(8, 0, 'lplplplplpl', 1475498876, 1475498876),
(9, 51, 'bibang', 1479693105, 1479693105),
(11, 61, 'weqweqwewe', 1484059297, 1484059297),
(12, 65, 'phil. health', 1485521400, 1485521400);

-- --------------------------------------------------------

--
-- Table structure for table `medabaws`
--

CREATE TABLE `medabaws` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `license` varchar(100) NOT NULL,
  `chief` varchar(50) NOT NULL,
  `group` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `pend` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`type`, `name`, `migration`) VALUES
('app', 'default', '001_create_users'),
('app', 'default', '002_create_categories'),
('app', 'default', '003_create_registered_hospitals_clinics'),
('app', 'default', '004_create_pendings'),
('app', 'default', '005_create_hospitals'),
('app', 'default', '006_create_hospitals_2'),
('app', 'default', '007_create_signups'),
('app', 'default', '008_create_signups_2'),
('app', 'default', '009_create_signings');

-- --------------------------------------------------------

--
-- Table structure for table `pendings`
--

CREATE TABLE `pendings` (
  `id` int(11) UNSIGNED NOT NULL,
  `hos_name` varchar(255) NOT NULL,
  `hos_address` varchar(255) NOT NULL,
  `hos_website` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hos_contact` varchar(20) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendings`
--

INSERT INTO `pendings` (`id`, `hos_name`, `hos_address`, `hos_website`, `email`, `hos_contact`, `created_at`, `updated_at`) VALUES
(1, 'huhuhuhhuhuhu', 'sfsfgfss', 'sfsff', 'dsfs@yahoo.com', '1234567890', 1471430567, 1471913903);

-- --------------------------------------------------------

--
-- Table structure for table `registereds`
--

CREATE TABLE `registereds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `license` varchar(50) NOT NULL,
  `chief` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registereds`
--

INSERT INTO `registereds` (`id`, `name`, `address`, `contact`, `license`, `chief`, `created_at`, `updated_at`) VALUES
(21, 'Camp Panacan Station Hospital ', 'Naval Station Felix Apolonario, Panacan', '082-234-416', '11-28-16-38-l-1', 'Ltc. Ma. Jessica M. Vallangca MC', 1471436600, 1485337851),
(22, 'Camp Quintin M Merecido', 'Camp Quintin M Merecido, Catitipan', '082-234-173', '11-60-16-18-I-1', 'Psupt. Michael Angelo L Mallari', 1471436724, 1471436724),
(23, 'Dela Cerna Medical Clinic', '238-A Mandug, Davao City', '082-3000223', '11-54-16-14-I-2', 'Dr. Jose Luisito M. dela Cerna', 1471436828, 1471436828),
(24, 'Mend Now Health Services', 'Blk2 Lot 33-34 Holy Trinity Brgy.Cabantian', '9177202268', '11-14-16-12-I-2', 'Dr. Mary Lee R. Lim', 1471436898, 1471436898),
(25, 'Buda Comm. Health Care Center', 'Buda, Marilog Dist., Dvo. City', '9177184126', '11-18-16-18-I-2', 'Dr. Rachel P. Alegata', 1471437014, 1471437014),
(26, 'Carlos P. Acosta Clinic & Hospital', 'L. Manuel St., Daliao Toril, Dvo. City', '291-1107', '11-07-16-18-I-2', 'Dr. Bella Corazon L. Acosta', 1471437155, 1471437155),
(27, 'Clinica E. V. Feliciano', 'Unno, R. Magsaysay Ave., Calinan', '295-0070', '11-46-16-18-I-2', 'Dr. Eucaristia V. Feliciano', 1471437431, 1471437431),
(28, 'Clinica Isaguirre', 'Magsaysay St., Calinan, Davao City', '295-0055', '11-17-16-18-I-2', 'Dr. Edgar Manuel Q. Isaguirre', 1471437592, 1471437592),
(29, 'Dr. Lorenzo B. Principe Clinic & Drugstore, Inc.', '10 Villafuerte St., Calinan, Davao City', '082-295-023', '11-08-16-12-I-2', 'Dr. Lucia Cecilia P. Villanueva', 1471437728, 1471437815),
(30, 'Ernesto Guadalupe Comm. Hospital', 'Jasmin St., Nicolas, Daliao, Toril, DC', '082-2911305', '11-35-16-24-I2', 'Dr. Ernesto S. Guadalupe, Jr.', 1471438019, 1471438041),
(31, 'Malate Medical Clinic & Laboratory', 'Saypon, Toril, Davao City', '082-2910383', '11-57-16-18-I-2', 'Dr. Leonila P. Malate', 1471438198, 1471438198),
(32, 'St. Felix Medical Hospital', 'Bago Aplaya, Talomo, Dvo City', '297-4256', '11-13-16-18-I-2', 'Dr. Maricar Lim', 1471438336, 1471438336),
(33, 'Tibungco Doctors Hospital', 'Nat''l. Highway, Tibungco, DC', '238-0774', '11-43-16-18-I-2', 'Dr. Noel A. Acosta', 1471438451, 1471438451),
(34, 'Anda Riverview Medical Center, Inc', 'Barangay 2-A, Magallanes', '082-2210808', '11-340-16-56-H2-2', 'Dr. Cecilio T. Gempesaw-COB Dr. Jeanie E. Himagan', 1471438582, 1471438630),
(35, 'kokoko', 'ipipi', '099099', '09-009-90', 'ljjljl', 1484054145, 1484054163),
(36, 'loo', 'sds', '09057116908', '098-098', 'kjnjnn', 1484983022, 1484983022);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_description`) VALUES
(1, 'hospital'),
(2, 'DOH'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `hospital_id`, `service_name`, `types`, `doctor`, `created_at`, `updated_at`) VALUES
(1, 0, 'ilong', 'ranger', 'dod', 1479268043, 1479268043),
(3, 51, 'catalunn', 'grande', 'ahiaiah', 1479272168, 1479272168),
(4, 51, 'naca', 'haha', 'hihh', 1479693348, 1479693347),
(5, 61, 'ljjjljljl', 'jljljljljljl', 'jljljljljl', 1484059447, 1484059447),
(6, 65, 'nose', 'okko', 'kok', 1485521424, 1485521424);

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` int(11) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `specialization`) VALUES
(1, 'loving'),
(2, 'tender'),
(3, 'atchup');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `license` varchar(100) NOT NULL,
  `chief` varchar(100) NOT NULL,
  `group` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `hospital_latitude` varchar(255) NOT NULL,
  `hospital_longitude` varchar(255) NOT NULL,
  `website` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pend` varchar(70) NOT NULL,
  `toggle` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `hospital_name`, `license`, `chief`, `group`, `email`, `contact_number`, `address`, `hospital_latitude`, `hospital_longitude`, `website`, `image`, `pend`, `toggle`, `role_id`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', '0', '123-123123', 'hliasdf', 100, 'bev@yahoo.com', '0989', 'ererg', '', '', 'hwai', '', 'not activate', 1, 3, 1485780011, 'b0a87d57b05251f53ef42d0b246dce8ff54b8efa', '', NULL, 1479166992),
(12, 'hospital', 'Fnru/ekSfVTO6EAueDwSzN1HZbqS/8C291ZGmSJBWAQ=', '0', '0-99877-0', 'hohhohhoohoh', 100, 'beverlylosoloso@yahoo.com', 'wwrw', 'rwrwr', '', '', 'www.hospitalnamo.com', '', 'not activate', 1, 1, 1475477653, '71f7f20872b5771cc262532efc664fb3c2a72268', '', NULL, 1479167294),
(13, 'Department of Health', 'GOL8Ixcw+5rP2IOyY3Q5W1RSrwsaZWzFwVtFNNijOB8=', '0', '123123', 'asdfasdf', 100, 'beverly.losoloso@jmc.edu.ph', '09057116908', '', '', '', 'Department of Health', '', 'activate', 1, 2, 1485950634, '2285475fbebfb53acf1e5ed3c86b1bcdc525f712', '', NULL, 1485393172),
(35, 'Department of Health', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', '0', '', '', 100, 'beverlylosoloso@yahoo.com', '09057116908', 'davaocity', '', '', '', '', 'activate', 1, 2, 1485950634, '2285475fbebfb53acf1e5ed3c86b1bcdc525f712', '', 1472467320, 1472467345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendings`
--
ALTER TABLE `pendings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registereds`
--
ALTER TABLE `registereds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
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
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pendings`
--
ALTER TABLE `pendings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registereds`
--
ALTER TABLE `registereds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
