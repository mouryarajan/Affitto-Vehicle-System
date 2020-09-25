-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2019 at 10:12 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE IF NOT EXISTS `tbl_booking` (
  `BookingId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `SelectedDates` varchar(1000) NOT NULL,
  `Days` int(20) NOT NULL,
  `VehicleId` int(11) NOT NULL,
  `TotalPayment` int(11) NOT NULL,
  `BookingDate` datetime NOT NULL,
  `AccidentalAmt` int(20) NOT NULL,
  `TheftAmt` int(20) NOT NULL,
  `IsVerify` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `IsPay` varchar(10) NOT NULL,
  `WalletAmount` varchar(11) DEFAULT NULL,
  `TranscationNo` varchar(100) NOT NULL,
  PRIMARY KEY (`BookingId`),
  KEY `Userid` (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`BookingId`, `UserId`, `SelectedDates`, `Days`, `VehicleId`, `TotalPayment`, `BookingDate`, `AccidentalAmt`, `TheftAmt`, `IsVerify`, `Status`, `IsPay`, `WalletAmount`, `TranscationNo`) VALUES
(21, 57, '2019-04-19  2019-04-20', 2, 31, 9950, '2019-04-04 00:00:00', 500, 500, 'Verified', 'Approved', 'Yes', NULL, '17e1b737300b804416c5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `CityId` int(20) NOT NULL AUTO_INCREMENT,
  `CityName` varchar(20) NOT NULL,
  `CityImg` varchar(20) NOT NULL,
  `StateId` int(20) NOT NULL,
  PRIMARY KEY (`CityId`),
  KEY `Stateid` (`StateId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`CityId`, `CityName`, `CityImg`, `StateId`) VALUES
(7, 'Surat', 'City_31499_7_.jpg', 50),
(8, 'Ahemdabad', 'City_50273_8_.jpg', 50),
(9, 'Vadodra', 'City_95296_9_.jpg', 50),
(10, 'Vapi', 'City_95776_10_.png', 50),
(11, 'GandhiNagar', 'City_46723_11_.jpg', 50),
(12, 'Rajkot', 'City_92971_12_.png', 50),
(13, 'ShriNagar', 'City_88210_13_.jpg', 48),
(14, 'LolKatta', 'City_97875_14_.jpg', 51),
(15, 'Siliguri', 'City_67247_15_.png', 51),
(16, 'Habra', 'City_66208_16_.jpg', 51),
(17, 'Medinipur', 'City_96017_17_.jpg', 51),
(18, 'Pune', 'City_93872_18_.jpg', 52),
(19, 'Pune', 'City_36376_19_.jpg', 52),
(20, 'Dhule', 'City_18020_20_.jpg', 52),
(21, 'JalGav', 'City_93532_21_.png', 52),
(22, 'Surat', '', 48),
(23, 'vapi', 'City_72393_23_.jpg', 50),
(24, 'ABC', 'City_27037_24_.jpg', 53);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `CompanyId` int(20) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `CompanyLogo` varchar(30) NOT NULL,
  `TypeId` int(20) NOT NULL,
  PRIMARY KEY (`CompanyId`),
  KEY `TypeId` (`TypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`CompanyId`, `CompanyName`, `CompanyLogo`, `TypeId`) VALUES
(46, 'B_M_W', 'Company_40828_46_.jpg', 1),
(48, 'Audi', 'Company_56773_48_.jpg', 1),
(50, 'Mini_Cooper', 'Company_19037_50_.jpg', 1),
(51, 'Hyundai', 'Company_72469_51_.jpg', 1),
(52, 'Ford', 'Company_17339_52_.jpg', 1),
(53, 'Royal_Enfield', 'Company_33523_53_.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE IF NOT EXISTS `tbl_faq` (
  `FaqId` int(20) NOT NULL AUTO_INCREMENT,
  `FaqCatId` int(20) NOT NULL,
  `Question` varchar(200) NOT NULL,
  `Answer` varchar(500) NOT NULL,
  PRIMARY KEY (`FaqId`),
  KEY `Faqcatid` (`FaqCatId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`FaqId`, `FaqCatId`, `Question`, `Answer`) VALUES
(2, 20, 'What Your Website Provide An Insurence Service ', 'Yes we provide a Insurence service '),
(3, 19, 'When I receive my order', 'On Given Time Interval');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqcat`
--

CREATE TABLE IF NOT EXISTS `tbl_faqcat` (
  `FaqCatId` int(20) NOT NULL AUTO_INCREMENT,
  `FaqCatName` varchar(20) NOT NULL,
  PRIMARY KEY (`FaqCatId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_faqcat`
--

INSERT INTO `tbl_faqcat` (`FaqCatId`, `FaqCatName`) VALUES
(18, 'Payment'),
(19, 'Order'),
(20, 'Insurence'),
(21, 'Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `FeedBackId` int(20) NOT NULL AUTO_INCREMENT,
  `FeedBackText` varchar(50) NOT NULL,
  `Date` varchar(20) NOT NULL,
  PRIMARY KEY (`FeedBackId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE IF NOT EXISTS `tbl_log` (
  `UserId` int(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`UserId`, `Name`, `Contact`, `UserName`, `Password`) VALUES
(1, 'Rahul', '7990932674', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `NewsId` int(20) NOT NULL AUTO_INCREMENT,
  `NewsTitle` varchar(20) NOT NULL,
  `NewsDiscripation` varchar(1000) NOT NULL,
  `NewsImg` varchar(20) NOT NULL,
  `IsDisplay` varchar(20) NOT NULL,
  `NewsDate` varchar(20) NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`NewsId`, `NewsTitle`, `NewsDiscripation`, `NewsImg`, `IsDisplay`, `NewsDate`) VALUES
(3, 'Times', 'ABC', 'News_16758_3_.jpg', 'Yes', '2019-02-25'),
(4, 'Holi Bunanza', 'Get 50% Off On Your  First Booking', 'News_76380_4_.jpg', 'Yes', '2019-03-15'),
(5, 'Dhulety Bunanza Offe', 'Get 10% Off On Your Second Booking', 'News_63156_5_.jpg', 'Yes', '2019-03-15'),
(6, 'Royal Enfield', 'Enfield diversified into motor cycles, 1901 and motor cars, 1902. The motor department was put into a separate subsidiary, Enfield Autocar Company Limited incorporated in 1906 and established in new works at Hunt End, Redditch.[10] However Enfield Autocar after just 19 months reported a substantial loss and, aside from Eadie himself, shareholders were unwilling to provide more capital so in early 1907 Eadie sold his control of Eadie Manufacturing to BSA. Albert Eadie and Robert Walker Smith had been appointed directors of BSA before the proposed sale had been put to shareholders. The new combined BSA and Eadie business manufactured "military and sporting rifles, (pedal) cycle and cycle components, motor-cars etc."[11] "BSA and Eadie cycle specialities".[12] But there were still minority Eadie shareholders alongside BSA in 1957.\r\n\r\nThe business of Enfield Autocar, that is to say the plant and stock, was sold to Birmingham''s Alldays & Onions Pneumatic Engineering.[13] Enfield Cycle Compa', 'News_12426_6_.jpg', 'Yes', '2019-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE IF NOT EXISTS `tbl_rating` (
  `Rating_Id` int(11) NOT NULL AUTO_INCREMENT,
  `BookingId` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Rating` int(2) DEFAULT NULL,
  `ReviewText` varchar(500) DEFAULT NULL,
  `ReviewDateTime` datetime NOT NULL,
  `IsDisplay` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Rating_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`Rating_Id`, `BookingId`, `User_Id`, `Rating`, `ReviewText`, `ReviewDateTime`, `IsDisplay`) VALUES
(1, 20, 46, 5, 'Maaal', '2019-04-04 00:00:00', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `StateId` int(20) NOT NULL AUTO_INCREMENT,
  `StateName` varchar(20) NOT NULL,
  `StateImg` varchar(20) DEFAULT NULL,
  KEY `Stateid` (`StateId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`StateId`, `StateName`, `StateImg`) VALUES
(48, 'Kashmira', 'State_74989_48_.jpg'),
(50, 'Gujarat', 'State_44311_50_.jpg'),
(51, 'West Bengal', 'State_62345_51_.jpg'),
(52, 'Maharastra', 'State_52745_52_.jpg'),
(53, 'XYZ', 'State_27642_53_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
  `StatusId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(20) NOT NULL,
  `BookingId` int(20) NOT NULL,
  `Remark` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `LogDate` datetime NOT NULL,
  PRIMARY KEY (`StatusId`),
  KEY `Userid` (`UserId`),
  KEY `UserId_2` (`UserId`),
  KEY `BookingId` (`BookingId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`StatusId`, `UserId`, `BookingId`, `Remark`, `Status`, `LogDate`) VALUES
(34, 57, 21, 'Status is Approved', 'New', '2019-04-04 15:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE IF NOT EXISTS `tbl_type` (
  `TypeId` int(20) NOT NULL AUTO_INCREMENT,
  `TypeName` varchar(20) NOT NULL,
  PRIMARY KEY (`TypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`TypeId`, `TypeName`) VALUES
(1, 'Car'),
(2, 'Bike'),
(3, 'Cycle'),
(4, 'Auto');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userdetails`
--

CREATE TABLE IF NOT EXISTS `tbl_userdetails` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `PhoneNumber` bigint(20) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `RegistrationDate` date DEFAULT NULL,
  `OtpCode` int(11) DEFAULT NULL,
  `IsVerify` varchar(10) DEFAULT NULL,
  `CityId` int(11) DEFAULT NULL,
  `UserType` varchar(100) DEFAULT NULL,
  `AgencyName` varchar(100) DEFAULT NULL,
  `AgencyAddress` varchar(100) DEFAULT NULL,
  `LandMark` varchar(100) DEFAULT NULL,
  `PinCode` int(20) DEFAULT NULL,
  `GstNo` varchar(20) DEFAULT NULL,
  `AgencyPhoneNumber` int(10) DEFAULT NULL,
  `AgencyEmailId` varchar(100) DEFAULT NULL,
  `CertificateImage` varchar(100) DEFAULT NULL,
  `PersonalImage` varchar(100) DEFAULT NULL,
  `SignatureImage` varchar(100) DEFAULT NULL,
  `Latitude` varchar(50) DEFAULT NULL,
  `Longitude` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`UserId`),
  KEY `AgencyName` (`AgencyName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `tbl_userdetails`
--

INSERT INTO `tbl_userdetails` (`UserId`, `FirstName`, `LastName`, `PhoneNumber`, `EmailId`, `Password`, `RegistrationDate`, `OtpCode`, `IsVerify`, `CityId`, `UserType`, `AgencyName`, `AgencyAddress`, `LandMark`, `PinCode`, `GstNo`, `AgencyPhoneNumber`, `AgencyEmailId`, `CertificateImage`, `PersonalImage`, `SignatureImage`, `Latitude`, `Longitude`) VALUES
(55, 'Rajan', 'Maurya', 8980957789, 'rajanmourya70@gmail.com', '123', '2019-04-04', 3823, NULL, 7, 'Normal', NULL, '(B-86),Hira Nagar Socity, Parvat Patiya', NULL, 395010, NULL, NULL, NULL, NULL, 'Profile_16134_55_.jpg', NULL, '21.17313909459827', '72.83433888629793'),
(57, 'Seema', 'Pandey', 6353470335, 'pandeyseema193@gmail.com', '123', '2019-04-04', 1997, NULL, 7, 'Normal', NULL, 'Pata Nahi', NULL, 395010, NULL, NULL, NULL, NULL, NULL, NULL, '21.10535940853266', '72.85596934331306');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE IF NOT EXISTS `tbl_vehicle` (
  `VehicleId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(20) NOT NULL,
  `VersionId` int(20) NOT NULL,
  `Seats` int(11) DEFAULT NULL,
  `Transmission` varchar(20) DEFAULT NULL,
  `Doors` int(11) DEFAULT NULL,
  `AC` varchar(10) DEFAULT NULL,
  `Descripation` varchar(100) NOT NULL,
  `VehicleImg` varchar(100) NOT NULL,
  `RCNo` int(11) NOT NULL,
  `RCImg` varchar(100) NOT NULL,
  `PucImg` varchar(100) DEFAULT NULL,
  `InsuranceImg` varchar(100) DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `TypeId` int(11) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`VehicleId`),
  KEY `Typeid` (`TypeId`),
  KEY `Userid` (`UserId`),
  KEY `TypeId_2` (`TypeId`),
  KEY `TypeId_3` (`TypeId`),
  KEY `VersionId` (`VersionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tbl_vehicle`
--

INSERT INTO `tbl_vehicle` (`VehicleId`, `UserId`, `VersionId`, `Seats`, `Transmission`, `Doors`, `AC`, `Descripation`, `VehicleImg`, `RCNo`, `RCImg`, `PucImg`, `InsuranceImg`, `Price`, `TypeId`, `Status`) VALUES
(31, 55, 45, 4, 'Gear/Auto', 5, 'Ac', 'Powering the Mini 3-door Cooper S and the Convertible Cooper S is a 2.0 litre, 4 cylinder, twin powe', 'Vehicle_97406_31_.jpg', 987654321, 'Vehicle_67483_31_.jpg', 'Vehicle_93321_31_.JPG', 'Vehicle_91631_31_.jpg', 5000, 1, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicleimage`
--

CREATE TABLE IF NOT EXISTS `tbl_vehicleimage` (
  `ImageId` int(11) NOT NULL AUTO_INCREMENT,
  `VehicleId` int(11) NOT NULL,
  `ImageUrl` varchar(40) NOT NULL,
  PRIMARY KEY (`ImageId`),
  KEY `VehicleId` (`VehicleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_vehicleimage`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_version`
--

CREATE TABLE IF NOT EXISTS `tbl_version` (
  `VersionId` int(20) NOT NULL AUTO_INCREMENT,
  `CompanyId` int(20) NOT NULL,
  `VersionName` varchar(20) NOT NULL,
  PRIMARY KEY (`VersionId`),
  KEY `Companyid` (`CompanyId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `tbl_version`
--

INSERT INTO `tbl_version` (`VersionId`, `CompanyId`, `VersionName`) VALUES
(11, 52, 'EcoSport'),
(12, 52, 'Figo'),
(13, 52, 'Endeavour'),
(14, 52, 'Freestyle'),
(15, 52, 'Mustang'),
(16, 52, 'Aspire'),
(17, 46, 'X1'),
(18, 46, 'B M W 3 Series'),
(19, 46, 'B M W X5'),
(20, 46, 'B M W 5 Series'),
(21, 46, 'B M W X3'),
(22, 46, 'B M W 7 Series'),
(23, 46, 'B M W X4'),
(24, 46, 'B M W X6'),
(25, 46, 'B M W 6 Series '),
(26, 46, 'B M W M Series'),
(27, 46, 'B M W M2'),
(28, 46, 'B M W 3 Series GT'),
(29, 48, 'Audi Q3'),
(30, 48, 'Audi A3'),
(31, 48, 'Audi A4'),
(32, 48, 'Audi Q7'),
(33, 48, 'Audi A6'),
(34, 48, 'Audi R8'),
(35, 48, 'Audi A8'),
(36, 48, 'Audi Q5'),
(37, 48, 'Audi S5'),
(38, 48, 'Audi A5'),
(39, 48, 'Audi A3 Cabriolet'),
(40, 48, 'Audi RS7'),
(41, 48, 'Audi RS5'),
(42, 50, 'Mini Cooper Converti'),
(43, 50, 'Mini Cooper Countrym'),
(44, 50, 'Mini Clubman'),
(45, 50, 'Mini Cooper 5 DOOR'),
(46, 50, 'Mini Cooper 3 DOOR'),
(47, 51, 'Creta'),
(48, 51, 'Hyundai Creta'),
(49, 51, 'Hyundai Elite i20'),
(50, 51, 'Hyundai Grand i10'),
(51, 51, 'Hyundai Verna'),
(52, 51, 'Hyundai Santro'),
(53, 51, 'Hyundai EON'),
(54, 51, 'Hyundai Xcent'),
(55, 51, 'Hyundai Elantra'),
(56, 51, 'Hyundai Tucson'),
(57, 51, 'Hyundai i20 Active'),
(58, 53, 'Clasic 350');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wallet`
--

CREATE TABLE IF NOT EXISTS `tbl_wallet` (
  `WalletId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Amount` int(11) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Remark` varchar(100) NOT NULL,
  PRIMARY KEY (`WalletId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tbl_wallet`
--

INSERT INTO `tbl_wallet` (`WalletId`, `UserId`, `Type`, `Amount`, `DateTime`, `Remark`) VALUES
(5, 45, 'Credit', 50, '2019-03-29 09:21:04', 'New User'),
(8, 45, 'Credit', 3500, '2019-03-31 03:34:31', 'Vehicle Submited'),
(9, 45, 'Credit', 50000, '2019-03-31 12:14:37', 'Vehicle Submited'),
(10, 45, 'Credit', 50, '2019-03-31 12:15:08', 'Vehicle Submited'),
(11, 46, 'Credit', 50, '2019-04-01 04:22:07', 'Vehicle Submited'),
(12, 47, 'Credit', 50, '2019-04-01 04:23:37', 'New User'),
(13, 48, 'Credit', 50, '2019-04-02 06:15:48', 'New User'),
(19, 49, 'Credit', 50, '2019-04-03 09:44:42', 'New User'),
(20, 50, 'Credit', 50, '2019-04-03 09:45:29', 'New User'),
(21, 51, 'Credit', 50, '2019-04-03 15:44:20', 'New User'),
(22, 52, 'Credit', 50, '2019-04-03 15:46:57', 'New User'),
(23, 53, 'Credit', 50, '2019-04-03 15:50:06', 'New User'),
(24, 45, 'Credit', 16000, '2019-04-03 16:09:44', 'Vehicle Submited'),
(25, 47, 'Credit', 50, '2019-04-04 05:18:14', 'New User'),
(26, 48, 'Credit', 50, '2019-04-04 05:20:19', 'New User'),
(27, 49, 'Credit', 50, '2019-04-04 05:22:28', 'New User'),
(28, 50, 'Credit', 50, '2019-04-04 05:38:53', 'New User'),
(29, 51, 'Credit', 50, '2019-04-04 05:40:15', 'New User'),
(30, 52, 'Credit', 50, '2019-04-04 09:26:38', 'New User'),
(31, 53, 'Credit', 50, '2019-04-04 09:27:27', 'New User'),
(32, 54, 'Credit', 50, '2019-04-04 09:29:11', 'New User'),
(33, 55, 'Credit', 50, '2019-04-04 13:53:54', 'New User'),
(34, 56, 'Credit', 50, '2019-04-04 15:01:09', 'New User'),
(35, 57, 'Credit', 50, '2019-04-04 15:02:55', 'New User');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `tbl_booking_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `tbl_userdetails` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD CONSTRAINT `tbl_company_ibfk_1` FOREIGN KEY (`TypeId`) REFERENCES `tbl_type` (`TypeId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD CONSTRAINT `tbl_faq_ibfk_1` FOREIGN KEY (`FaqCatId`) REFERENCES `tbl_faqcat` (`FaqCatId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD CONSTRAINT `tbl_status_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `tbl_userdetails` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_status_ibfk_2` FOREIGN KEY (`BookingId`) REFERENCES `tbl_booking` (`BookingId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  ADD CONSTRAINT `tbl_vehicle_ibfk_1` FOREIGN KEY (`TypeId`) REFERENCES `tbl_type` (`TypeId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_vehicle_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `tbl_userdetails` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_vehicle_ibfk_4` FOREIGN KEY (`VersionId`) REFERENCES `tbl_version` (`VersionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_vehicleimage`
--
ALTER TABLE `tbl_vehicleimage`
  ADD CONSTRAINT `tbl_vehicleimage_ibfk_1` FOREIGN KEY (`VehicleId`) REFERENCES `tbl_vehicle` (`VehicleId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_version`
--
ALTER TABLE `tbl_version`
  ADD CONSTRAINT `tbl_version_ibfk_1` FOREIGN KEY (`CompanyId`) REFERENCES `tbl_company` (`CompanyId`) ON DELETE CASCADE ON UPDATE CASCADE;
