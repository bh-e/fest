-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2016 at 09:19 PM
-- Server version: 5.5.36-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inceptra_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `online_status` int(11) NOT NULL DEFAULT '0',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `regid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `email`, `password`, `usertype`, `online_status`, `user_status`, `regid`) VALUES
(1, 'admin', '8dd5d31fcf56a74d44148e05dbd2a0da', 'ADMIN', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matchcatch`
--

CREATE TABLE IF NOT EXISTS `tbl_matchcatch` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `q_code` varchar(300) NOT NULL,
  `value1` varchar(100) NOT NULL,
  `value2` varchar(100) NOT NULL,
  `value3` varchar(100) NOT NULL,
  `value4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_matchcatch`
--

INSERT INTO `tbl_matchcatch` (`q_id`, `question`, `q_code`, `value1`, `value2`, `value3`, `value4`, `answer`) VALUES
(1, 'Write the output of the following program', '<br>void main()<br>{<br>int i=0;<br>char s[20];<br>s="Hai good morning";<br>printf("%c %c",s[i],s[++i]);<br>getch();<br>}<br>', 'Compilation error', 'Runtime error', 'H a', 'a a', 'Compilation error'),
(2, 'Write the output of the following program', '<br>#include&lt;stdio.h&gt;<br>#include&lt;conio.h&gt;<br>void main()<br>{<br>int a=5,b=++a;<br>clrscr();<br>b=-a++;<br>printf("%d %d %d %d",a,b,--b,++a);<br>getch();<br>}<br>', '6 -5 -6 7', '7 -7 6 8', '8  -7  -7  8', '8  -6  7 8', '8  -7  -7  8'),
(3, 'Write the output of the following program', '<br>void main()<br>{<br>int i=10;<br>printf("%d %d %d",i,--i,++i);<br>getch();<br>}<br>', '10  9  10', '10 10 9', '10 9 11', '10 10 11', '10 10 11'),
(4, 'Write the output of the following program', '<br>main()<br>{<br>char not;<br>not=!2;<br>printf("%d",not);<br>getch();<br>}<br>', '0', '-2', '-1', 'compilation error', '0'),
(5, 'Write the output of the following program', '<br>#define FALSE -1<br>#define TRUE 1<br>#define NULL 0<br>main()<br>{<br>if(NULL)<br>puts("NULL");<br>else if(FALSE)<br>puts("TRUE");<br>else<br>puts("FALSE");<br>}<br>', 'FALSE', 'NULL', 'TRUE', 'output is unpredictable', 'TRUE'),
(6, 'Point out the error in the program', '<br>#include<stdio.h><br>#include<conio.h><br>void main()<br>{<br>int a=10;<br>void f();<br>a=f();<br> printf("%d",a);<br>getch();<br>}<br>void f()<br>{<br>printf("hi");<br>}<br>', 'Error: Not allowed assignment', 'Error: Doesn’t print anything ', 'No error', 'None of the above', 'Error: Not allowed assignment'),
(7, 'Point out the error in the program', '<br>#include<stdio.h><br>#include<conio.h><br>void main()<br>{<br>int a[]={10,20,30,40,50};<br>int j;<br>for(j=0;j<5;j++)<br>{<br>printf("%d\\n",a);<br>a++;<br>}<br>getch();<br>}<br>', 'Error: Declaration syntax', 'Error:Expression syntax', 'Error:LValue required', 'Error:Rvalue required', 'Error:LValue required');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_onlinetest`
--

CREATE TABLE IF NOT EXISTS `tbl_onlinetest` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `value1` varchar(100) NOT NULL,
  `value2` varchar(100) NOT NULL,
  `value3` varchar(100) NOT NULL,
  `value4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `examtype` enum('IT','GK') NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_onlinetest`
--

INSERT INTO `tbl_onlinetest` (`q_id`, `question`, `value1`, `value2`, `value3`, `value4`, `answer`, `examtype`) VALUES
(1, 'Who is considered to be the "father" of artificial intelligence?', 'Fisher ada', 'John McCarthy', 'Allen Newell', 'Alan Turning', 'John McCarthy', 'GK'),
(2, 'Android is based on which language?', 'C', 'C++', 'Vc++', 'Java', 'Java', 'IT'),
(3, 'What is Apple’s new compiled programming language for iOS and OS X development called?', 'Pascal', 'Swift', 'Fortran', 'CLEO', 'Swift', 'IT'),
(4, 'Name the very loveable cartoon character whose birthday is officially recognized as June 9, 1934. That’s the day his debut film “The Wise Little Hen” was released.', 'Donald Duck', 'Mickey mouse', 'Homer Simpson', 'Garfield', 'Donald Duck', 'GK'),
(5, 'Which sea’s entrance is guarded by the” Pillars of Hercules”?', 'Red sea', 'Black sea', 'Mediterranean sea', 'Caspian sea', 'Mediterranean sea', 'GK'),
(6, 'To avoid the race condition, the number of processes that may be simultaneously inside their critical section is', '8', '1', '16', '3', '1', 'IT'),
(7, 'Fork is', 'the dispatching of a task', 'the creation of a new job', 'the creation of a new process', 'increasing the priority of a task', 'the creation of a new process', 'IT'),
(8, 'The section of the CPU that selects, interprets and sees to the execution of program instructions', 'Memory', 'Register unit', 'Control unit', 'ALU', 'Control unit', 'IT'),
(9, 'Which is the second most abundant element in the observable universe?', 'Oxygen', 'Helium', 'Hydrogen', 'Lithium', 'Helium', 'GK'),
(10, 'What command is used to reset a MODEM when using the "AT Command Set"? ', 'ATR ', 'ATZ ', 'DTR', 'DCE', 'ATZ ', 'IT'),
(11, '" UNIVAC is"', 'Universal Automatic Computer ', 'Universal Array Computer', 'Unique Automatic Computer', 'Unvalued Automatic Computer', 'Universal Automatic Computer ', 'IT'),
(12, 'Turing Award was first awarded to Alan j. Perlis ;what was his contribution to get awarded ? ', 'advanced computer programming techniques and compiler construction', 'Artificial neural networks principles', 'development of the ALGOL', 'idea of nondeterministic machines', 'advanced computer programming techniques and compiler construction', 'GK'),
(13, 'The phenomenon of having a continuous glow of beam on the screen even after it is removed is called ?', 'Fluorescence', 'Persistence', 'Phosphorescence', 'Incandescence', 'Phosphorescence', 'GK'),
(14, 'After which mythical bird is the most recent spacecraft to land successfully on Mars named?', 'Gandaberunda', 'Phoenix', 'Griffin', 'Roc', 'Phoenix', 'GK'),
(15, 'The unit of speed used for super computer is', 'KELOPS', 'GELOPS', 'MELOPS', 'None of these', 'GELOPS', 'IT'),
(16, 'In communication satellite, multiple repeaters are known as', 'Detector', 'Modulator', 'Stations', 'Transponders', 'Transponders', 'GK'),
(17, 'Black box testing sometimes called ', 'Cluster testing', 'System testing', 'Unit testing', 'Behavioral Testing', 'Behavioral Testing', 'GK'),
(18, 'Who was the only sportsperson to get the Padma Bhushan in 2009', 'Abinav Bindra', 'Sushil kumar', 'Akhil kumar', 'Vijendra singh', 'Abinav Bindra', 'GK'),
(19, 'Founder of  Wikileaks', 'Julian Assange', 'K.Edwards', 'Frank whittle', 'Douglas Engalbart', 'Julian Assange', 'GK'),
(21, 'The element common to all acids is', 'Hydrogen', 'Carbon', 'Sulphur', 'Oxygen', 'Hydrogen', 'GK'),
(22, 'Non stick cooking utensils are coated with', 'Teflon', 'PVC', 'Black paint', 'Polystyrene 	', 'Teflon', 'GK'),
(23, 'In which field, the famous indian player, jude felix established his name', 'Volleyball', 'Tennis', 'Football', 'Hockey', 'Hockey', 'GK'),
(24, 'A computerized self-diagnostic method for a ROM test is:', 'The check-sum method', 'ROM listing ', 'ROM comparisons ', 'a checkerboard test', 'The check-sum method', 'IT'),
(25, 'The Laser Interferometer Gravitational-Wave Observatory(LIGO) detectors are located in which country', 'France', 'United States', 'Germany', 'United Kingdom', 'United States', 'GK'),
(26, 'Entomology is the science that studies:', 'Behaviour of human beings', 'Insects', 'The origin and history of technical and Scientific terms', 'The formation of rocks', 'Insects', 'GK'),
(27, 'Who developed yahoo?', 'Dennis Ritchie & Ken Thompson', 'David Filo & Jerry Yang', 'Vint Cerf & Robert Kahn', 'Steve Case & Jeff Bezos', 'David Filo & Jerry Yang', 'IT'),
(28, 'Who is the CEO of Microsoft?', 'Steve Ballmer', 'Sundar Pichai', 'Bill Gates', 'Sathya Nadella', 'Sathya Nadella', 'IT'),
(29, ' Sixth Sence  wearable gestural interface technology was invented by', 'Pamposh Bhat', 'Abhas Mitra', 'Pranav Mistry', 'Anil Kumar Gain', 'Pranav Mistry', 'IT'),
(30, 'Where is the  Headquarters of Intel located', 'Redmond, Washington', 'Tucson, Arizona', 'Santa Clara, California', 'Richmond, Virginia', 'Santa Clara, California', 'IT'),
(31, 'The sector size of Advanced Hard Disk Drive is', '16 KB', '4 KB', '8 KB', '12 KB', '4 KB', 'IT'),
(32, 'What is the name of first computer network?', 'EXTRANET', 'INTRANET', 'ARPANET', 'DARKNET', 'ARPANET', 'IT'),
(33, 'World''s First  Wireless Worm', 'Cabir', 'Nimda', 'Conficker', 'Melissa', 'Cabir', 'IT'),
(34, 'A process known as  .............. used by large retailers to study trends.', 'Data Mining', 'Data Selection', 'POS', 'Data Convertion', 'Data Mining', 'IT'),
(35, '........... is data that has been organized  or presented in a meanigfull fasion', 'A process', 'Software', 'Storage', 'Information', 'Information', 'IT'),
(36, 'The name for the way that computers manipulate data into information is called', 'Programming ', 'Processing', 'Storing', 'Organizing', 'Processing', 'IT'),
(37, 'The term bit is short for', 'megabyte', 'binary language', 'binary digit', 'binary number', 'binary digit', 'IT'),
(38, 'DSL  is an example of a(n) ................. connection', 'Network', 'Wireless', 'Slow', 'Broadband', 'Broadband', 'IT'),
(39, 'What is the extension type of the excel 2007 files', '.xls', '.xlsx', '.xsl', 'None of the above', '.xlsx', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pickup`
--

CREATE TABLE IF NOT EXISTS `tbl_pickup` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` enum('A','B','C','D') NOT NULL,
  `question` varchar(200) NOT NULL,
  `answers` varchar(500) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `title1` varchar(50) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `title2` varchar(50) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `title3` varchar(50) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `title4` varchar(50) NOT NULL,
  `image5` varchar(100) NOT NULL,
  `title5` varchar(50) NOT NULL,
  `image6` varchar(100) NOT NULL,
  `title6` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_pickup`
--

INSERT INTO `tbl_pickup` (`p_id`, `category`, `question`, `answers`, `image1`, `title1`, `image2`, `title2`, `image3`, `title3`, `image4`, `title4`, `image5`, `title5`, `image6`, `title6`) VALUES
(1, 'A', 'Identify the flags of Asian countries', 'B,C,E', '0bbad-1.4.jpg', 'A', '5d470-1.1.jpg', 'B', '7bd48-1.2.jpg', 'C', '66d95-1.5.jpg', 'D', '49416-1.3.jpg', 'E', '381c2-1.6.jpg', 'F'),
(2, 'A', 'Identify the Nobel prize winners for Chemistry', 'A,E,F', 'f12cb-2.1.jpg', 'A', '99d93-2.4.jpg', 'B', '527b6-2.5.jpg', 'C', 'b284a-2.6.jpg', 'D', '5426b-2.2.jpg', 'E', 'ab8f3-2.3.jpg', 'F'),
(3, 'A', 'Identify FIFA Ballon d''Or award winners', 'A,B,C', '257d1-4.4.jpg', 'E', 'f0dbd-4.6.jpg', 'F', '04282-4.2.jpg', 'A', 'b7128-4.1.jpg', 'B', 'cc16a-4.5.jpg', 'D', '7ca7b-4.3.jpg', 'C'),
(4, 'A', 'Identify the companies owned by Google', 'B,D,E', 'ee6d2-3.4.jpg', 'A', '05417-3.1.jpg', 'B', '919ff-3.5.jpg', 'C', '8ff58-3.2.jpg', 'D', 'e7c18-3.3.jpg', 'E', 'acf75-3.6.jpg', 'F'),
(5, 'B', 'Identifythe flags of  North America', 'A,C,E', 'e1cfc-5.1.jpg', 'B', '523ce-5.4.jpg', 'A', '8ce36-5.3.jpg', 'D', '195e2-5.5.jpg', 'C', 'ccd06-5.6.jpg', 'E', '1ecb3-5.2.jpg', 'F'),
(6, 'B', 'Identify the Nobel prize winners for Physics', 'B,C,D', 'b067b-6.4.jpg', 'A', '570c7-6.1.jpg', 'B', '04e86-6.2.jpg', 'C', '5bdf0-6.3.jpg', 'D', '85052-6.5.jpg', 'E', 'c3560-6.6.jpg', 'F'),
(7, 'B', 'Identify the companies owned by Microsoft ', 'C,E.F', 'b6567-7.5.jpg', 'A', '4f79c-7.6.jpg', 'B', '72f03-7.1.jpg', 'C', '1aaea-7.4.jpg', 'D', '14f4d-7.2.jpg', 'E', '2ee81-7.3.jpg', 'F'),
(8, 'B', 'Identify the paintings of  Leonardo da Vinci', 'A,D,F', '61a7c-8.1.jpg', 'A', 'b345d-8.4.jpg', 'B', '0048d-8.5.jpg', 'C', 'acfb6-8.2.jpg', 'D', '6ad70-8.6.jpg', 'E', '0df83-8.3.jpg', 'F'),
(9, 'C', 'Identyfy the flags of European countries ', 'C,D,F', 'b0cbd-9.4.jpg', 'A', 'bbff6-9.5.jpg', 'B', '38dd9-9.1.jpg', 'C', '2574e-9.2.jpg', 'D', '5742c-9.6.jpg', 'E', '1388a-9.3.jpg', 'F'),
(10, 'C', 'Identify Nobel prize  winners for Peace', 'A,B,F', 'a41b0-10.1.jpg', 'A', '64f53-10.2.jpg', 'B', '35aa5-10.4.jpg', 'C', '981ab-10.5.jpg', 'D', '26844-10.6.jpg', 'E', 'ad369-10.3.jpg', 'F'),
(11, 'C', 'Identify the Turing award winners', 'B,C,E', '79e50-11.4.jpg', 'A', 'af818-11.1.jpg', 'B', 'b4ac9-11.2.jpg', 'C', '5526e-11.5.jpg', 'D', '5775f-11.3.jpg', 'E', '4e6ee-11.6.jpg', 'F'),
(12, 'C', 'Identify the  Academy award for Best film', 'A,B,D', '90d91-12.1..jpg', 'A', 'a3ff2-12.2.jpg', 'B', 'd8197-12.6.jpg', 'C', 'e4b99-12.3.jpg', 'D', '37941-12.4.jpg', 'E', '97b5f-12.5.jpg', 'F'),
(13, 'D', 'Identify the flags of African countries', 'C,D,E', 'f2a5b-13.1.jpg', 'A', '7cade-13.3.jpg', 'B', 'd6771-13.2.jpg', 'C', 'edf14-13.6.jpg', 'D', 'bb959-13.4.jpg', 'E', '664ad-13.5.jpg', 'F'),
(14, 'D', 'Identify Nobel prize winners for Literature', 'A,B,D', 'aa82b-14.1.jpg', 'A', 'b6dc9-14.2.jpg', 'B', '93f73-14.4.jpg', 'C', '1eed2-14.3.jpg', 'D', '059b5-14.5.jpg', 'E', '0f16c-14.6.jpg', 'F'),
(15, 'D', 'Identify the CEO’s of  IT companies', 'A,C,F', '857a9-15.1.jpg', 'A', '777d0-15.4.jpg', 'B', 'cd02d-15.2.jpg', 'C', '318b8-15.5.jpg', 'D', '79dff-15.6.jpg', 'E', '75459-15.3.jpg', 'F'),
(16, 'D', 'Identify the paintings by Michelangelo', 'B,C,D', 'a6296-16.4.jpg', 'A', '56a4c-16.1.jpg', 'B', '9b56d-16.3.jpg', 'C', '214bc-16.2.jpg', 'D', '1f224-16.5.jpg', 'E', '24b21-16.6.jpg', 'F');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
