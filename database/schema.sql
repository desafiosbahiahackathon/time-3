USE `redesigned-couscous`;

--
-- Table structure for table `aggressor`
--

DROP TABLE IF EXISTS `aggressor`;
CREATE TABLE `aggressor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `victim_relationship` varchar(45) NOT NULL,
  `violence_type` varchar(45) NOT NULL,
  `relapse` tinyint(4) NOT NULL,
  `work_address` varchar(45) DEFAULT NULL,
  `ethnicity` varchar(45) NOT NULL,
  `relationship_time` varchar(45) NOT NULL,
  `violence_habits` tinyint(4) NOT NULL,
  `age` int(11) NOT NULL,
  `enrollment` varchar(45) NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gh` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `password_UNIQUE` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `visit`
--

DROP TABLE IF EXISTS `visit`;
CREATE TABLE `visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `hour` time(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `occurrence_type` int(11) NOT NULL,
  `woman_id` int(11) NOT NULL,
  `aggressor_id` int(11) NOT NULL,
  `referrals` text,
  `comments` text,
  `woman_comments` text,
  `aggressor_comments` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `women`
--

DROP TABLE IF EXISTS `women`;
CREATE TABLE `women` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `home_address` int(11) NOT NULL,
  `home_reference_point` int(11) NOT NULL,
  `home_neighborhood` int(11) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `meeting_address` int(11) NOT NULL,
  `meeting_reference_point` int(11) NOT NULL,
  `meeting_neighborhood` int(11) NOT NULL,
  `best_meeting_time` varchar(45) NOT NULL,
  `marital_status` varchar(45) NOT NULL,
  `children_amount` int(11) NOT NULL,
  `children_with_aggressor` int(11) NOT NULL,
  `enrollment` varchar(45) NOT NULL,
  `ethnicity` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `religion` varchar(45) NOT NULL,
  `work` varchar(45) NOT NULL,
  `last_work` varchar(45) NOT NULL,
  `work_active` tinyint(4) NOT NULL,
  `work_place` varchar(45) NOT NULL,
  `income` varchar(45) NOT NULL,
  `main_income_family` varchar(45) NOT NULL,
  `social_government_program` varchar(45) NOT NULL,
  `mpu_number` int(11) NOT NULL,
  `request_origin` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mpu_number_UNIQUE` (`mpu_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
