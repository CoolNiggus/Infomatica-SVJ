SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `hoop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hoop`;

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `ID` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `adminID` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `groupusers`;
CREATE TABLE IF NOT EXISTS `groupusers` (
  `groupID` int(11) NOT NULL,
  `userID` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `questionanswers`;
CREATE TABLE IF NOT EXISTS `questionanswers` (
  `questionID` int(11) NOT NULL,
  `answerID` int(11) NOT NULL,
  `iscorrect` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `ID` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `testquestions`;
CREATE TABLE IF NOT EXISTS `testquestions` (
  `testID` int(11) NOT NULL,
  `questionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `ID` int(11) NOT NULL,
  `testname` varchar(128) NOT NULL,
  `timer` int(3) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creatorID` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(32) NOT NULL,
  `pwd` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `usertests`;
CREATE TABLE IF NOT EXISTS `usertests` (
  `userID` varchar(32) NOT NULL,
  `testID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `answers`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `groups`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `adminID` (`adminID`);

ALTER TABLE `groupusers`
  ADD PRIMARY KEY (`groupID`,`userID`),
  ADD KEY `userID` (`userID`);

ALTER TABLE `questionanswers`
  ADD PRIMARY KEY (`questionID`,`answerID`),
  ADD KEY `answerID` (`answerID`);

ALTER TABLE `questions`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `testquestions`
  ADD PRIMARY KEY (`testID`,`questionID`),
  ADD KEY `questionID` (`questionID`);

ALTER TABLE `tests`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `creatorID` (`creatorID`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

ALTER TABLE `usertests`
  ADD PRIMARY KEY (`userID`,`testID`),
  ADD KEY `usertests_ibfk_2` (`testID`);


ALTER TABLE `answers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `questions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

ALTER TABLE `groupusers`
  ADD CONSTRAINT `groupusers_ibfk_1` FOREIGN KEY (`groupID`) REFERENCES `groups` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `groupusers_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

ALTER TABLE `questionanswers`
  ADD CONSTRAINT `questionanswers_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `questions` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `questionanswers_ibfk_2` FOREIGN KEY (`answerID`) REFERENCES `answers` (`ID`) ON UPDATE CASCADE;

ALTER TABLE `testquestions`
  ADD CONSTRAINT `testquestions_ibfk_1` FOREIGN KEY (`testID`) REFERENCES `tests` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `testquestions_ibfk_2` FOREIGN KEY (`questionID`) REFERENCES `questions` (`ID`) ON UPDATE CASCADE;

ALTER TABLE `tests`
  ADD CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`creatorID`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

ALTER TABLE `usertests`
  ADD CONSTRAINT `usertests_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`username`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usertests_ibfk_2` FOREIGN KEY (`testID`) REFERENCES `tests` (`ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
