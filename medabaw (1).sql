-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2016 at 05:45 AM
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
  `specialization` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `hospital_id`, `name`, `field`, `specialization`, `image`) VALUES
(1, 0, 'kokok', 'kiki', 'kiki', ''),
(2, 0, 'kokokoko', 'thtr', 'rthrt', ''),
(3, 0, 'alex', 'mandaya', 'hotel', ''),
(4, 0, 'ook', 'okok', 'okoko', ''),
(5, 51, 'kim', 'ablter', 'tanga', '');

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
(9, 51, 'bibang', 1479693105, 1479693105);

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
(21, 'Camp Panacan Station Hospital', 'Naval Station Felix Apolonario, Panacan', '082-234-416', '11-28-16-38-l-1', 'Ltc. Ma. Jessica M. Vallangca MC', 1471436600, 1471436600),
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
(34, 'Anda Riverview Medical Center, Inc', 'Barangay 2-A, Magallanes', '082-2210808', '11-340-16-56-H2-2', 'Dr. Cecilio T. Gempesaw-COB Dr. Jeanie E. Himagan', 1471438582, 1471438630);

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
  `field` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `hospital_id`, `service_name`, `types`, `field`, `created_at`, `updated_at`) VALUES
(1, 0, 'ilong', 'ranger', 'dod', 1479268043, 1479268043),
(3, 0, 'catalunn', 'grande', 'ahiaiah', 1479272168, 1479272168),
(4, 51, 'naca', 'haha', 'hihh', 1479693348, 1479693347);

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

INSERT INTO `users` (`id`, `username`, `password`, `hospital_name`, `license`, `chief`, `group`, `email`, `contact_number`, `address`, `website`, `image`, `pend`, `toggle`, `role_id`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', '0', '123-123123', 'hliasdf', 100, 'bev@yahoo.com', '0989', 'ererg', 'hwai', '', 'not activate', 1, 3, 1482378565, 'd762b267f0e033c0ab96f90d06ff0984f9a1b497', '', NULL, 1479166992),
(12, 'hospital', 'Fnru/ekSfVTO6EAueDwSzN1HZbqS/8C291ZGmSJBWAQ=', '0', '0-99877-0', 'hohhohhoohoh', 100, 'beverlylosoloso@yahoo.com', 'wwrw', 'rwrwr', 'www.hospitalnamo.com', '', 'not activate', 1, 1, 1475477653, '71f7f20872b5771cc262532efc664fb3c2a72268', '', NULL, 1479167294),
(13, 'Doh', '+ZZmP735/Va0fsne43ziSQPnqWZ47CFRVSHG352lkyM=', '0', '123123', 'asdfasdf', 100, 'beverlylosoloso@yahoo.com', '23424qerq', 'wrwrwer', 'bebang', '', 'activate', 1, 2, 1479640928, '4158f5b422166a9cfef2bef076ad91412f75532d', '', NULL, 1472645933),
(33, 'beverly', 'j4jByBS6jJm2j8Spwv5Tb4Sec6NgSQSAu3pPBg9C14w=', '0', '', '', 100, 'kamot@yahoo.com', '09057116908', 'davao', '', '', 'activate', 1, 1, 1472276723, 'ac72298b40c8f02246bf56d460105eb8407c3672', '', 1472276580, 1473831836),
(34, 'jose', 'kZD9raRlvuiIoHaSBUgdFixt8XADesVEfy/alEalyJ0=', '0', '', '', 100, 'newzbeats2@yahoo.com', '09057116908', 'panacan', '', '', 'activate', 1, 1, 1472282288, '28f0d8f2e8dfda56e8c1a0268a50b9d2fdd25cc9', '', 1472281253, 1472466430),
(35, 'Doh', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', '0', '', '', 100, 'beverlylosoloso@yahoo.com', '09057116908', 'davaocity', '', '', 'activate', 1, 1, 1479640928, '4158f5b422166a9cfef2bef076ad91412f75532d', '', 1472467320, 1472467345),
(36, 'bebs', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', '0', '', '', 100, 'beverlylosoloso@yahoo.com', '09057116908', 'panacan', '', '', 'activate', 1, 1, 1479272535, '3efeed006d7651803e119496339732c1911838f9', '', 1472467850, 1472467873),
(37, 'bubu', 'S4zK2GXR5kgSYU2/UZB0ZB5XRyqijhuuaGq3p4zhXKk=', 'bubu', '09-90', 'bubu', 100, 'beverlylosoloso@yahoo.com', '09057116908', 'bubu', 'bubu', '', 'activate', 1, 1, 1474956412, '9b261601ba07b39bfa742e5b864a110405eee6f7', '', 1472643497, 1472643643),
(38, 'bibang', '/2d7KVwJrP8QNtwOyPahX9I9mhph0EadpXdphwb8rCU=', 'lolo', '0-0-0-0', 'lolol', 100, 'beverlylosoloso@yahoo.com', '09057116908', 'lolo', 'lolol', '', 'activate', 1, 1, 1472646047, '1cc1d53a5b1c5a7b75f2465597201b84ee379554', '', 1472646005, 1472646074),
(39, 'adik', '/2d7KVwJrP8QNtwOyPahX9I9mhph0EadpXdphwb8rCU=', 'hopeer', '23424', 'klasjdlfja', 100, 'beverlylosoloso@yahoo.com', '23423', 'asdfjl', 'adlsjfsdf', '', 'activate', 1, 1, 1472646267, 'aa09aa83ebbae9effc60387cfae3d5ba92da5ea3', '', 1472646143, 1472646299),
(40, 'nono', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', 'dodo', '0-90-90-', 'bobo', 100, 'beverlylosoloso@yahoo.com', '09057116908', 'Barangay 2-A, Magallanes', 'bobo', '', 'not activate', 1, 1, 1472649080, '88e3711b607d823bc7f9c00725ad0fb1bc0c2f47', '', 1472649026, 1474724870),
(41, 'bib', '/2d7KVwJrP8QNtwOyPahX9I9mhph0EadpXdphwb8rCU=', 'bibingisheart', '0-9-9-9', 'bib', 100, 'beverly@yahoo.com', '09057116908', 'bib', 'bibi@jbdjs', '', 'activate', 1, 1, 1472827012, '38e497ba5493180c6cdab917ef2ba844cd6553ef', '', 1472826949, 1472827074),
(42, 'user1', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', 'hospital1', '09-0-98-098-7', 'user1', 100, 'user@yahoo.com', '09057116908', 'panacan', 'www.hospitalnamo.com', '', 'activate', 1, 1, 1472905369, 'd639e13c68fc6ce1b7db472bd273b3407cdd7d57', '', 1472903730, 1472904516),
(43, 'koko', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', 'koko', '0-0-0-0', 'koko', 100, 'kim@yahoo.com', '09057116908', 'koo', 'www.shinshin.com', '', 'activate', 1, 1, 0, '', '', 1472906595, 1472906620),
(44, 'aaaa', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', 'admin', '9-0-0-0', 'admin', 100, 'beth.tinaan@yahoo.com', '09057116908', 'Barangay 2-A, Magallanes', 'www.hospitalnamo.com', '', 'not activate', 1, 1, 0, '', '', 1473238721, 1473859076),
(46, 'oo', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', 'ooo', '0-0-0', 'oo', 100, 'beverlylosoloso@yahoo.com', '09057116908', 'oo', 'www.shinshin.com', '', 'not activate', 1, 1, 0, '', '', 1473241204, 1474724817),
(47, 'acosta', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', 'acosta', '09-90-90', 'si acosta', 100, 'acosta@yahoo.com', '09057116908', 'tibungco', 'www.hospitalnamo.com', '', 'not activate', 1, 1, 1479640544, '861f3dd7da91c749b3a22fee998cbf78ca8e4103', '', 1473831911, 1473859534),
(48, 'losoloso', 'G5/UXQnwf/fdE/Cmt5RgHgewhodUsXWqOEBxxRIH60A=', 'losoloso', '0-0-0-0', 'losoloso', 100, 'lourdeslosoloso@yahoo.com', '09057116908', 'losoloso', 'www.shinshin.com', '', 'not activate', 1, 1, 0, '', '', 1473832159, 1473859300),
(49, 'pp', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', 'pp', '0-0-0', 'pp', 100, 'princesxz.swaggurl@yahoo.com', '09057116908', 'L. Manuel St., Daliao Toril, Dvo. City', 'w', '', 'not activate', 1, 1, 1481257535, '6ef3b91f10f6aeaa7884a84aaa6456613dc8f721', '', 1473858147, 1473858147),
(50, 'abliter', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', 'abliter', '0-9-09-', 'abliter', 100, 'beverlylosoloso@yahoo.com', '09057116908', 'davaocity', 'www.hospitalnamo.com', '', 'not activate', 1, 1, 1473858877, 'a6cdc089799717691256da0035f70fa1814a7c5b', '', 1473858348, 1473859007),
(51, 'override', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', 'popo', '09-097', 'aasdfsdf', 100, 'ppop@yahoo.com', '22839898', 'asdf', 'atchup.com', '5d3a42b10789995ff7ef886f4080b9e9.gif', 'activate', 0, 1, 1481255591, 'e06cc6b4432c6a1cb1ebab6d6453ed3c4d714c39', '', 1479284789, 1481256824),
(52, 'walang', 'YWqmPGH+dOEvOh6pf83a62lzJ1QQLHRMPHhNIaohB3s=', 'lkj', '987928734', 'asdfs', 100, 'walang@yahoo.com', '987987', 'alksjdf', 'mahalaga.com', '6ce1f8e730e1568026d083a96d92bdcf.gif', 'activate', 0, 1, 0, '', '', 1481257132, 1481257132);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pendings`
--
ALTER TABLE `pendings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registereds`
--
ALTER TABLE `registereds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
