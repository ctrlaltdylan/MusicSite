-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2013 at 02:24 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `MusicSite`
--

-- --------------------------------------------------------

--
-- Table structure for table `Advance`
--

CREATE TABLE `Advance` (
  `Advance_ID` int(20) NOT NULL AUTO_INCREMENT,
  `advanceHotel` varchar(20) NOT NULL,
  `advanceFlight` varchar(20) NOT NULL,
  `advanceTransport` varchar(20) NOT NULL,
  PRIMARY KEY (`Advance_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Advance`
--

INSERT INTO `Advance` (`Advance_ID`, `advanceHotel`, `advanceFlight`, `advanceTransport`) VALUES
(0, 'Milton', 'Flight #45684', 'Van');

-- --------------------------------------------------------

--
-- Table structure for table `Agent`
--

CREATE TABLE `Agent` (
  `Agent_ID` int(20) NOT NULL AUTO_INCREMENT,
  `agentName` varchar(20) NOT NULL,
  `agentCompany` varchar(20) NOT NULL,
  `agentEmail` varchar(20) NOT NULL,
  `agentPassword_hash` varchar(80) NOT NULL,
  PRIMARY KEY (`Agent_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `Agent`
--

INSERT INTO `Agent` (`Agent_ID`, `agentName`, `agentCompany`, `agentEmail`, `agentPassword_hash`) VALUES
(0, 'Aaron Agentman', 'Agency Company 1', 'agent@agency.com', ''),
(7, 'Amber', '', 'amber@agency.com', '$2y$10$gbSwRZMla6qKBgAm3DouO.X'),
(8, 'Aaron', '', 'aaron@agency.com', '$2y$10$xgaYvURIiZxcMFdLFLJhZeH'),
(9, 'Anthony', '', 'anthony@agent.com', '$2y$10$61.AFxLt/BBTYNz1oRhp/.H'),
(10, 'Pierce', '', 'dylanpierce@agency.c', '$2y$10$8pFmlDDlStWSPPGwRwgJIuh'),
(11, 'test', '', 'test@agency.com', '$2y$10$ilNJhEx/a7kzCwWVo1.auO8'),
(12, 'test1', '', 'test@agency.com', '$2y$10$XKpTi8XDSnUfqU./hK7OEeG3tzqRtx9REvKx2woBqO.1n6gCVKyUm');

-- --------------------------------------------------------

--
-- Table structure for table `Artist`
--

CREATE TABLE `Artist` (
  `Artist_ID` int(10) NOT NULL,
  `artistName` varchar(30) NOT NULL,
  `Agent_ID` int(20) NOT NULL,
  PRIMARY KEY (`Artist_ID`),
  KEY `Name` (`artistName`),
  KEY `Agent_ID` (`Agent_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Artist`
--

INSERT INTO `Artist` (`Artist_ID`, `artistName`, `Agent_ID`) VALUES
(0, 'Zac Brown Band', 0),
(1, 'Modest Mouse', 0),
(2, 'DeadMau5', 0),
(3, 'Danny Brown', 0),
(4, 'Above & Beyond', 0),
(5, 'Matt Zo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Contract`
--

CREATE TABLE `Contract` (
  `Contract_ID` int(25) NOT NULL,
  `offerStatus` varchar(10) NOT NULL,
  PRIMARY KEY (`Contract_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contract`
--

INSERT INTO `Contract` (`Contract_ID`, `offerStatus`) VALUES
(0, ''),
(1, ''),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE `Event` (
  `Event_ID` int(20) NOT NULL,
  `EveName` varchar(30) NOT NULL,
  `Venue_ID` int(20) NOT NULL,
  `Contract_ID` int(20) NOT NULL,
  `EventArtist_ID` int(20) NOT NULL,
  PRIMARY KEY (`Event_ID`),
  KEY `EventName` (`EveName`),
  KEY `Venue_ID` (`Venue_ID`),
  KEY `Contract_ID` (`Contract_ID`),
  KEY `EventArtist_ID` (`EventArtist_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Event`
--

INSERT INTO `Event` (`Event_ID`, `EveName`, `Venue_ID`, `Contract_ID`, `EventArtist_ID`) VALUES
(0, 'Mad Decent Block Party', 0, 0, 0),
(1, 'Identity Fest', 1, 1, 0),
(2, 'Trance Fest ''13', 2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `EventArtist`
--

CREATE TABLE `EventArtist` (
  `EventArtist_ID` int(20) NOT NULL,
  `Event_ID` int(20) NOT NULL,
  `Artist_ID` int(20) NOT NULL,
  PRIMARY KEY (`EventArtist_ID`),
  KEY `Event_ID` (`Event_ID`),
  KEY `Artist_ID` (`Artist_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EventArtist`
--

INSERT INTO `EventArtist` (`EventArtist_ID`, `Event_ID`, `Artist_ID`) VALUES
(0, 1, 1),
(1, 0, 0),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Offer`
--

CREATE TABLE `Offer` (
  `Offer_ID` int(20) NOT NULL AUTO_INCREMENT,
  `offerStatus` varchar(10) NOT NULL,
  `Artist_ID` int(20) NOT NULL,
  `Promoter_ID` int(20) NOT NULL,
  `Advance_ID` int(20) NOT NULL,
  `Venue_ID` int(20) NOT NULL,
  `offerDate` varchar(30) NOT NULL,
  `offerGuarantee` varchar(20) NOT NULL,
  `offerBonus` varchar(20) NOT NULL,
  `offerHotel` varchar(20) NOT NULL,
  `offerTechnical` varchar(20) NOT NULL,
  `offerMediaSupport` varchar(20) NOT NULL,
  `offerSellableCap` varchar(20) NOT NULL,
  `offerAgeLimit` int(11) NOT NULL,
  `offerEventType` varchar(20) NOT NULL,
  `offerGATicket1` varchar(20) NOT NULL,
  `offerGATicket2` varchar(20) NOT NULL,
  `offerLoadIn` varchar(20) NOT NULL,
  `offerDoors` varchar(20) NOT NULL,
  `offerSetTime` varchar(20) NOT NULL,
  `offerSetLength` varchar(20) NOT NULL,
  `offerCurfew` varchar(20) NOT NULL,
  PRIMARY KEY (`Offer_ID`),
  KEY `Promoter_ID` (`Promoter_ID`),
  KEY `Advance_ID` (`Advance_ID`),
  KEY `Advance_ID_2` (`Advance_ID`),
  KEY `Venue_ID` (`Venue_ID`),
  KEY `Artist_ID` (`Artist_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `Offer`
--

INSERT INTO `Offer` (`Offer_ID`, `offerStatus`, `Artist_ID`, `Promoter_ID`, `Advance_ID`, `Venue_ID`, `offerDate`, `offerGuarantee`, `offerBonus`, `offerHotel`, `offerTechnical`, `offerMediaSupport`, `offerSellableCap`, `offerAgeLimit`, `offerEventType`, `offerGATicket1`, `offerGATicket2`, `offerLoadIn`, `offerDoors`, `offerSetTime`, `offerSetLength`, `offerCurfew`) VALUES
(2, '', 0, 0, 0, 1, '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(3, '', 0, 0, 0, 1, '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(4, '', 2, 0, 0, 2, '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(5, '', 2, 0, 0, 2, '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(6, '', 2, 0, 0, 2, '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(7, '', 2, 0, 0, 2, '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(8, '', 0, 0, 0, 1, '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(9, '', 3, 0, 0, 2, '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(10, '', 2, 0, 0, 2, '2013-07-06', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(11, 'Pending', 2, 0, 0, 2, '2013-11-15', 'offerGuarantee', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(12, 'Pending', 0, 0, 0, 1, '2013-11-15', 'Guaratuneed', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(13, '', 1, 0, 0, 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(14, 'Pending', 2, 0, 0, 1, '2013-10-17', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(15, 'Pending', 3, 0, 0, 1, '2013-11-08', 'Kinda', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(16, 'Pending', 4, 0, 0, 0, '2013-11-08', 'Kinda', 'Bonus', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(17, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(18, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', '', '', 0, '', '', '', '', '', '', '', ''),
(19, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', '', '', 0, '', '', '', '', '', '', '', ''),
(20, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', 'Supportin', 'Cap to sell', 15, '', '', '', '', '', '', '', ''),
(21, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', 'Supportin', 'Cap to sell', 15, '', '', '', '', '', '', '', ''),
(22, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', 'Supportin', 'Cap to sell', 15, 'Concert', '', '', '', '', '', '', ''),
(23, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', 'Supportin', 'Cap to sell', 15, 'Concert', 'Ticket 1', '', '', '', '', '', ''),
(24, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', 'Supportin', 'Cap to sell', 15, 'Concert', 'Ticket 1', 'Ticket 2', '', '', '', '', ''),
(25, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', 'Supportin', 'Cap to sell', 15, 'Concert', 'Ticket 1', 'Ticket 2', 'Loaded', '', '', '', ''),
(26, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', 'Supportin', 'Cap to sell', 15, 'Concert', 'Ticket 1', 'Ticket 2', 'Loaded', 'Doorknob', '', '', ''),
(27, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', 'Supportin', 'Cap to sell', 15, 'Concert', 'Ticket 1', 'Ticket 2', 'Loaded', 'Doorknob', '9:00', '', ''),
(28, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', 'Supportin', 'Cap to sell', 15, 'Concert', 'Ticket 1', 'Ticket 2', 'Loaded', 'Doorknob', '9:00', '3 hours', ''),
(29, 'Pending', 3, 0, 0, 0, '2013-10-05', 'Kinda', 'Bonus', 'Merriot', 'to be frank', 'Supportin', 'Cap to sell', 15, 'Concert', 'Ticket 1', 'Ticket 2', 'Loaded', 'Doorknob', '9:00', '3 hours', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `Promoter`
--

CREATE TABLE `Promoter` (
  `Promoter_ID` int(20) NOT NULL AUTO_INCREMENT,
  `promoterName` varchar(20) NOT NULL,
  `promoterCompany` varchar(20) NOT NULL,
  `promoterEmail` varchar(30) NOT NULL,
  `promoterPassword_hash` varchar(30) NOT NULL,
  PRIMARY KEY (`Promoter_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `Promoter`
--

INSERT INTO `Promoter` (`Promoter_ID`, `promoterName`, `promoterCompany`, `promoterEmail`, `promoterPassword_hash`) VALUES
(0, 'PiercePromoter', 'Promo Company 1', 'pierce@promotion.com', '$2y$10$YqJ4JGFnaYARSo80/scGRex'),
(12, 'Phyills', 'Promotion Company 2', 'Phyills@promotion.com', '$2y$10$bE2d8PP/rNylReqCthG44uS'),
(13, 'Dylan', '', 'dylanpierce@promotion.com', '$2y$10$0oAh2PvWxNM/xgX0n1qwXOV');

-- --------------------------------------------------------

--
-- Table structure for table `PromoterAgentOffer`
--

CREATE TABLE `PromoterAgentOffer` (
  `PromoterAgentOffer_ID` int(20) NOT NULL,
  `Promoter_ID` int(20) NOT NULL,
  `Agent_ID` int(20) NOT NULL,
  `Offer_ID` int(20) NOT NULL,
  PRIMARY KEY (`PromoterAgentOffer_ID`),
  KEY `Promoter_ID` (`Promoter_ID`),
  KEY `Agent_ID` (`Agent_ID`),
  KEY `Offer_ID` (`Offer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Venue`
--

CREATE TABLE `Venue` (
  `Venue_ID` int(20) NOT NULL,
  `venueName` varchar(30) NOT NULL,
  `venueLocation` varchar(20) NOT NULL,
  PRIMARY KEY (`Venue_ID`),
  KEY `VenEmpName` (`venueName`),
  KEY `Venue_ID` (`Venue_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Venue`
--

INSERT INTO `Venue` (`Venue_ID`, `venueName`, `venueLocation`) VALUES
(0, 'Electric Factory', 'Philadelphia'),
(1, 'Blossom Music Center', 'Cleveland'),
(2, 'Chicago Speedway', 'Chicago');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Artist`
--
ALTER TABLE `Artist`
  ADD CONSTRAINT `Artist_ibfk_1` FOREIGN KEY (`Agent_ID`) REFERENCES `Agent` (`Agent_ID`);

--
-- Constraints for table `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `Event_ibfk_1` FOREIGN KEY (`Venue_ID`) REFERENCES `Venue` (`Venue_ID`),
  ADD CONSTRAINT `Event_ibfk_2` FOREIGN KEY (`Contract_ID`) REFERENCES `Contract` (`Contract_ID`),
  ADD CONSTRAINT `Event_ibfk_3` FOREIGN KEY (`EventArtist_ID`) REFERENCES `EventArtist` (`EventArtist_ID`);

--
-- Constraints for table `EventArtist`
--
ALTER TABLE `EventArtist`
  ADD CONSTRAINT `EventArtist_ibfk_1` FOREIGN KEY (`Event_ID`) REFERENCES `Event` (`Event_ID`),
  ADD CONSTRAINT `EventArtist_ibfk_2` FOREIGN KEY (`Artist_ID`) REFERENCES `Artist` (`Artist_ID`);

--
-- Constraints for table `Offer`
--
ALTER TABLE `Offer`
  ADD CONSTRAINT `Offer_ibfk_1` FOREIGN KEY (`Promoter_ID`) REFERENCES `Promoter` (`Promoter_ID`),
  ADD CONSTRAINT `Offer_ibfk_3` FOREIGN KEY (`Advance_ID`) REFERENCES `Advance` (`Advance_ID`),
  ADD CONSTRAINT `Offer_ibfk_4` FOREIGN KEY (`Venue_ID`) REFERENCES `Venue` (`Venue_ID`),
  ADD CONSTRAINT `Offer_ibfk_5` FOREIGN KEY (`Artist_ID`) REFERENCES `Artist` (`Artist_ID`);
