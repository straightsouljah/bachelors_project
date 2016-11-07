-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 05, 2012 at 12:26 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `datawarehouse`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `hall`
-- 

CREATE TABLE `hall` (
  `hall_id` int(11) NOT NULL auto_increment,
  `hall_name` varchar(45) NOT NULL,
  `no_of_rooms` int(11) NOT NULL,
  `date` varchar(45) NOT NULL,
  PRIMARY KEY  (`hall_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `hall`
-- 

INSERT INTO `hall` (`hall_id`, `hall_name`, `no_of_rooms`, `date`) VALUES 
(1, 'Aki Bua', 200, '2012-11-19 17:04:10'),
(2, 'Kakungulu', 300, '2012-11-20 08:22:12'),
(3, 'Lady Irene', 300, '2012-11-20 10:47:28'),
(4, 'Mitchel', 250, '2012-12-05 11:38:14');

-- --------------------------------------------------------

-- 
-- Table structure for table `name`
-- 

CREATE TABLE `name` (
  `name_id` int(11) NOT NULL auto_increment,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`name_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

-- 
-- Dumping data for table `name`
-- 

INSERT INTO `name` (`name_id`, `fname`, `lname`, `date`) VALUES 
(11, 'Mujurizi', 'Coleb', '2012-12-05 11:05:13'),
(12, 'Rukaaka', 'Alfred', '2012-12-05 11:05:13'),
(13, 'Nahabwe', 'Patience', '2012-12-05 11:05:13'),
(14, 'Amone', 'Emmanuel', '2012-12-05 11:05:13'),
(15, 'Ssewanyana', 'Ham', '2012-12-05 11:05:13'),
(16, 'Munyana', 'Christine', '2012-12-05 11:35:24'),
(17, 'Munyana', 'Christine', '2012-12-05 12:09:36'),
(18, 'Akong', 'Diana', '2012-12-05 12:10:12'),
(19, 'Nahabwe', 'Patience', '2012-12-05 12:11:09'),
(20, 'Nabaasa', 'Carolyn', '2012-12-05 12:11:57'),
(21, 'Atim', 'Peace', '2012-12-05 12:12:59'),
(22, 'Asio', 'Esther', '2012-12-05 12:13:37'),
(23, 'Agwang', 'Damalie', '2012-12-05 12:14:24');

-- --------------------------------------------------------

-- 
-- Table structure for table `room`
-- 

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL auto_increment,
  `room_no` varchar(45) NOT NULL,
  `capacity` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `hall_id` int(11) NOT NULL,
  PRIMARY KEY  (`room_id`,`hall_id`),
  KEY `fk_room_hall1` (`hall_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `room`
-- 

INSERT INTO `room` (`room_id`, `room_no`, `capacity`, `date`, `hall_id`) VALUES 
(1, 'A001', '4', '2012-11-19 17:04:31', 1),
(2, 'K001', '4', '2012-11-20 08:22:56', 2),
(3, 'A002', '4', '2012-11-20 10:48:17', 3),
(4, 'A02', '4', '2012-12-05 11:33:19', 1),
(5, 'M001', '4', '2012-12-05 11:38:58', 4),
(6, 'L004', '4', '2012-12-05 12:08:31', 3),
(7, 'L003', '4', '2012-12-05 12:08:53', 3);

-- --------------------------------------------------------

-- 
-- Table structure for table `student`
-- 

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL auto_increment,
  `photo` varchar(45) NOT NULL,
  `reg_no` varchar(45) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `name_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY  (`student_id`,`name_id`,`room_id`),
  KEY `fk_student_name1` (`name_id`),
  KEY `fk_student_room1` (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `student`
-- 

INSERT INTO `student` (`student_id`, `photo`, `reg_no`, `date`, `name_id`, `room_id`) VALUES 
(4, 'IMAG0379.jpg', '10/2/306/E/032', '2012-12-05 11:11:45', 11, 1),
(5, 'DSCF2528.jpg', '10/2/306/E/022', '2012-12-05 11:11:45', 12, 1),
(7, 'Desert.jpg', '10/2/306/D/002', '2012-12-05 11:11:45', 14, 2),
(8, 'Tulips.jpg', '10/2/306/W/035', '2012-12-05 11:54:29', 15, 4),
(10, 'Tulips.jpg', '12/2/D/234/021', '2012-12-05 12:09:36', 17, 7),
(11, 'Koala.jpg', '12/2/W/234/022', '2012-12-05 12:10:12', 18, 6),
(12, 'Penguins.jpg', '10/2/D/204/021', '2012-12-05 12:11:09', 19, 6),
(13, 'Desert.jpg', '09/3/234/E/002', '2012-12-05 12:11:57', 20, 7);

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL auto_increment,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `account_type` varchar(45) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`users_id`, `fname`, `lname`, `user_name`, `password`, `account_type`, `date`) VALUES 
(1, 'Mujurizi', 'Coleb', 'mujurizi', 'ishebo', 'admin', '2012-12-05 11:32:30'),
(2, 'Rukaaka', 'Alfred', 'rukaaka', '1234', 'admin', '2012-12-05 11:32:30'),
(3, 'Ekanya', 'Felix', 'custodian1', '1234', 'admin', '2012-12-05 11:36:31');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `room`
-- 
ALTER TABLE `room`
  ADD CONSTRAINT `fk_room_hall1` FOREIGN KEY (`hall_id`) REFERENCES `hall` (`hall_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

-- 
-- Constraints for table `student`
-- 
ALTER TABLE `student`
  ADD CONSTRAINT `fk_student_name1` FOREIGN KEY (`name_id`) REFERENCES `name` (`name_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_student_room1` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
