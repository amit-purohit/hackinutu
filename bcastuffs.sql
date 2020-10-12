-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2020 at 10:41 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcastuffs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

DROP TABLE IF EXISTS `admin_master`;
CREATE TABLE IF NOT EXISTS `admin_master` (
  `admin_id` int(100) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`admin_id`, `admin_email`, `password`) VALUES
(1, 'ram98@gmail.com', 123456),
(2, 'shyam98@gmail.com', 1234567);

-- --------------------------------------------------------

--
-- Table structure for table `book_master`
--

DROP TABLE IF EXISTS `book_master`;
CREATE TABLE IF NOT EXISTS `book_master` (
  `book_id` int(10) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `book_name` varchar(1000) NOT NULL,
  `book_image` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `book` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_master`
--

INSERT INTO `book_master` (`book_id`, `course_id`, `book_name`, `book_image`, `price`, `book`) VALUES
(1, 1, 'Programming in Ansi c', 'c.jpg', 200, 'ansi.pdf'),
(2, 2, 'The C++ Programming Language', 'c++.jpg', 300, 'cplus.pdf'),
(3, 3, 'Java From Beginning', 'java.jpg', 560, 'java.pdf'),
(7, 4, 'Angular ', 'angular.png', 1250, NULL),
(8, 5, 'ASP.NET 3.5 Unleashed', 'aspnet.jpg', 580, NULL),
(9, 6, 'Database Systems - The Complete Book', 'dbms.jpg', 580, NULL),
(10, 7, 'HTML5', 'html5.jpg', 750, NULL),
(11, 8, 'React Quickstart', 'react.jpg', 980, NULL),
(12, 9, 'Bootstrap 4 Quick Start', 'bootsttrap.jpg', 1050, NULL),
(13, 10, 'Visual Basic .NET Programming', 'vb.jpg', 980, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content_master`
--

DROP TABLE IF EXISTS `content_master`;
CREATE TABLE IF NOT EXISTS `content_master` (
  `content_id` int(10) NOT NULL AUTO_INCREMENT,
  `course_id` int(100) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `p1` text NOT NULL,
  `p2` text NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_master`
--

INSERT INTO `content_master` (`content_id`, `course_id`, `topic_id`, `p1`, `p2`) VALUES
(1, 1, 1, '    C programming language was developed in 1972 by Dennis Ritchie at bell laboratories of AT&T (American Telephone & Telegraph), located in the U.S.A.\r\n\r\nDennis Ritchie is known as the founder of the c language.\r\nalsdjfklsajdlkflsadf\r\n\r\nIt was developed to overcome the problems of previous languages such as B, BCPL, etc.\r\n\r\nInitially, C language was developed to be used in UNIX operating system. It inherits many features of previous languages such as B and BCPL.', ' '),
(2, 1, 2, '    The printf() and scanf() functions are used for input and output in C language. Both functions are inbuilt library functions, defined in stdio.h (header file)..', ' printf() function\r\nThe printf() function is used for output. It prints the given statement to the console.\r\nscanf() function\r\nThe scanf() function is used for input. It reads the input data from the console.'),
(3, 1, 3, ' A variable is a name of the memory location. It is used to store data. Its value can be changed, and it can be reused many times.\r\n\r\nIt is a way to represent memory location through symbol so that it can be easily identified.', ' '),
(5, 1, 4, ' A data type specifies the type of data that a variable can store such as integer, floating, character, etc.', ' The basic data types are integer-based and floating-point based. C language supports both signed and unsigned literals.\r\n\r\nThe memory size of the basic data types may change according to 32 or 64-bit operating system.'),
(10, 1, 5, ' A keyword is a reserved word. You cannot use it as a variable name, constant name, etc. There are only 32 reserved words (keywords) in the C language.', ' A list of 32 keywords in the c language is given below:\r\n\r\nauto	break	case	char	const	continue	default	do\r\ndouble	else	enum	extern	float	for	goto	if\r\nint	long	register	return	short	signed	sizeof	static\r\nstruct	switch	typedef	union	unsigned	void	volatile	while'),
(11, 3, 6, ' Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language.\r\n\r\nJava was developed by Sun Microsystems (which is now the subsidiary of Oracle) in the year 1995. James Gosling is known as the father of Java. Before Java, its name was Oak. Since Oak was already a registered company, so James Gosling and his team changed the Oak name to Java.', ' '),
(12, 3, 7, ' A list of most important features of Java language is given below.\r\n\r\nJava Features\r\nSimple\r\nObject-Oriented\r\nPortable\r\nPlatform independent\r\nSecured\r\nRobust\r\nArchitecture neutral\r\nInterpreted\r\nHigh Performance\r\nMultithreaded\r\nDistributed\r\nDynamic', ' '),
(13, 3, 8, ' The path is required to be set for using tools such as javac, java, etc.\r\n\r\nIf you are saving the Java source file inside the JDK/bin directory, the path is not required to be set because all the tools will be available in the current directory.\r\n\r\nHowever, if you have your Java file outside the JDK/bin folder, it is necessary to set the path of JDK.\r\n\r\nThere are two ways to set the path in Java:\r\n\r\nTemporary\r\nPermanent', ' 1) How to set the Temporary Path of JDK in Windows\r\nTo set the temporary path of JDK, you need to follow the following steps:\r\n\r\nOpen the command prompt\r\nCopy the path of the JDK/bin directory\r\nWrite in command prompt: set path=copied_path'),
(14, 3, 9, '(Java Virtual Machine) is an abstract machine. It is called a virtual machine because it doesn\'t physically exist. It is a specification that provides a runtime environment in which Java bytecode can be executed. It can also run those programs which are written in other languages and compiled to Java bytecode. JVMs are available for many hardware and software platforms. JVM, JRE, and JDK are platform dependent because the configuration of each OS is different from each other. However, Java is platfo specification, implementation, and instance. The JVM performs the following main tasks: Loads code Verifies code Executes code Provides runtime environment More Details. JRE JRE is an acronym for Java Runtime Environment. It is also written as Java RTE. The Java Runtime Environment is a set of software tools which are used for developing Java applications', ''),
(15, 11, 10, ' abcdefghijklmnopqrstuvwxyz', ' abcdefghijklmnopqrstuvwxyz');

-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

DROP TABLE IF EXISTS `course_master`;
CREATE TABLE IF NOT EXISTS `course_master` (
  `course_id` int(100) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `fees` int(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_master`
--

INSERT INTO `course_master` (`course_id`, `course_name`, `fees`, `pic`) VALUES
(1, 'The C Programming Language', 800, 'c.png'),
(2, 'C++', 1000, 'c++.png'),
(3, 'Java Programming', 1200, 'java.jpg'),
(4, 'Learn Angular Framework', 3000, 'angular.png'),
(5, 'ASP.net', 1500, 'asp.jpg'),
(6, 'DBMS', 2500, 'dbms.jpg'),
(7, 'HTML5', 900, 'html5.png'),
(8, 'React', 6000, 'react.png'),
(9, 'Bootstrap', 2500, 'bootstrap.jpg'),
(10, 'VB.net', 1299, 'vb.jpg'),
(11, 'Machine Learning', 8000, 'ml.jpg'),
(12, 'AI', 20000, 'ml.jpg'),
(13, 'Machine Learning', 5000, 'angular.png');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_master`
--

DROP TABLE IF EXISTS `enrollment_master`;
CREATE TABLE IF NOT EXISTS `enrollment_master` (
  `enroll_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `enroll_date` date NOT NULL,
  PRIMARY KEY (`enroll_id`),
  KEY `User_id_FK` (`user_id`),
  KEY `Course_id_FK` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment_master`
--

INSERT INTO `enrollment_master` (`enroll_id`, `user_id`, `course_id`, `enroll_date`) VALUES
(102, 2, 10, '2020-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

DROP TABLE IF EXISTS `event_master`;
CREATE TABLE IF NOT EXISTS `event_master` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `event_place` varchar(100) NOT NULL,
  `event_pic` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`event_id`, `event_name`, `event_date`, `event_place`, `event_pic`, `url`) VALUES
(2, 'Education Innovation Conference', '2020-08-28', 'India Habitat Centre, New Delhi, India', 'acf.png', 'https://10times.com/education-conference-delhi'),
(3, 'India Internet Day', '2020-08-07', ' The Leela Ambience Gurugram Hotel & Residences, Gurgaon, India', 'IID.png', 'https://10times.com/india-internet-day'),
(4, 'Global Artificial Intelligence Summit', '2020-10-05', 'Vigyan Bhawan Auditorium, New Delhi, India', 'aisummit.png', 'https://10times.com/global-ai-summit');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

DROP TABLE IF EXISTS `feedback_master`;
CREATE TABLE IF NOT EXISTS `feedback_master` (
  `feedback_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `course_id` int(100) DEFAULT NULL,
  `enroll_id` int(100) DEFAULT NULL,
  `feedback_text` varchar(1000) NOT NULL,
  `rate` int(5) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`feedback_id`, `user_id`, `course_id`, `enroll_id`, `feedback_text`, `rate`) VALUES
(1, 1, NULL, NULL, 'asdfkasdhfkj', NULL),
(2, 1, NULL, NULL, '1178547Purohit Arun B.asdfkasdhfkj', NULL),
(3, 1, NULL, NULL, 'Phone no:.1178547Name: Purohit Arun B.asdfkasdhfkj', NULL),
(4, 1, NULL, NULL, 'Phone no:.1178547<br />Name: Purohit Arun B.<br />asdfkasdhfkj', NULL),
(5, 1, NULL, NULL, 'Phone no:.1178547<br>Name: Purohit Arun B.<br>asdfkasdhfkj', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees_master`
--

DROP TABLE IF EXISTS `fees_master`;
CREATE TABLE IF NOT EXISTS `fees_master` (
  `fees_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`fees_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_master`
--

INSERT INTO `fees_master` (`fees_id`, `user_id`, `course_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 5),
(4, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_master`
--

DROP TABLE IF EXISTS `instructor_master`;
CREATE TABLE IF NOT EXISTS `instructor_master` (
  `instructor_id` int(100) NOT NULL AUTO_INCREMENT,
  `instructor_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `specialized_in` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `pic` text,
  PRIMARY KEY (`instructor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_master`
--

INSERT INTO `instructor_master` (`instructor_id`, `instructor_name`, `email`, `state`, `specialized_in`, `course`, `password`, `pic`) VALUES
(1, 'Virat Kohli', 'Kohli98@gmail.com', 'maharashtra', 'Java', 'java', '123456', '2.jpg'),
(2, 'Daya gada', 'daya34@gmail.com', 'gujarat', 'Angular', 'Angular', '1234567', '4.jpg'),
(3, 'Ravi Patel', 'ravi54@gmail.com', 'maharashtra', 'React', 'React', '77777', '6.jpg'),
(4, 'Sundar Pichai', 'sundar34@gmail.com', 'Goa', 'Javascript', 'Javascript', '78584', 'sachin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `learning_progress`
--

DROP TABLE IF EXISTS `learning_progress`;
CREATE TABLE IF NOT EXISTS `learning_progress` (
  `learning_id` int(100) NOT NULL AUTO_INCREMENT,
  `enroll_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `begin_date` date NOT NULL,
  `completion_date` date NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`learning_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

DROP TABLE IF EXISTS `otp_expiry`;
CREATE TABLE IF NOT EXISTS `otp_expiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `otp` varchar(45) NOT NULL,
  `is_expired` varchar(45) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`id`, `otp`, `is_expired`, `created_at`) VALUES
(1, '51815', '1', '2020-08-06 16:16:00'),
(2, '49013', '0', '2020-08-06 16:18:56'),
(3, '65664', '1', '2020-08-06 16:19:32'),
(4, '11173', '1', '2020-08-06 16:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `que_master`
--

DROP TABLE IF EXISTS `que_master`;
CREATE TABLE IF NOT EXISTS `que_master` (
  `que_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `que` longtext NOT NULL,
  `option1` longtext NOT NULL,
  `option2` longtext NOT NULL,
  `option3` longtext NOT NULL,
  `option4` longtext NOT NULL,
  `answer` longtext NOT NULL,
  PRIMARY KEY (`que_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que_master`
--

INSERT INTO `que_master` (`que_id`, `course_id`, `que`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 1, ' First operating system designed using C programming language.', 'DOS', 'Windows', 'UNIX', 'Mac', 'UNIX'),
(2, 1, 'Which of the following is used in mode string to open the file in binary mode?', 'a', 'b', 'm', 'bin', 'b'),
(3, 1, ' Where to place â€œfâ€ with a double constant 3.14 to specify it as a float?', '(float)(3.14)(f)', '(f)(3.14)', ' 3.14f', '- f(3.14)', ' 3.14f'),
(4, 1, 'â€œStderrâ€ is a standard error.', 'Yes', 'Standard error streams', 'Standard error types', 'Standard error function', 'Standard error streams'),
(5, 1, 'Choose the correct order from given below options for the calling function of the code â€œa = f1(23, 14) * f2(12/4) + f3();â€?', ' f1, f2, f3', 'f3, f2, f1', ' f2, f1, f3', 'Order may vary from one compiler to another', 'Order may vary from one compiler to another'),
(6, 1, ' In the given below statement, what does the â€œarrâ€ indicate?     char *arr[30];', 'arr is a array of function', 'arr is a array of 30 characters', 'arr is a pointer to an array', ' arr is a array of 30 character pointers', ' arr is a array of 30 character pointers'),
(7, 1, 'Who is known as the father of C Language ?', 'James A. Sosling', 'Vjarne Stroustrup', 'Dennis Ritchie', 'Dr. E. F. Codd', 'Dennis Ritchie'),
(8, 1, 'C Language was developed in the year ____', '1998', '1970', '1988', '1987', '1970'),
(9, 1, 'Which one is not a reserve keyword in C Language?', 'auto', 'main', 'case', 'register', 'main'),
(10, 1, 'Prototype of a function means _____', 'Name of Function', 'Output of Function', 'Declaration of Function', 'Input of a Function', 'Declaration of Function'),
(11, 3, 'Who is known as father of Java Programming Language?', 'James Gosling', 'M. P Java', 'Charel Babbage', 'Blais Pascal', 'James Gosling'),
(12, 3, 'In java control statements break, continue, return, try-catch-finally and assert belongs to?', 'Selection statements', 'Loop Statements', 'Transfer statements', 'Pause Statement', 'Transfer statements'),
(13, 3, 'Which provides runtime environment for java byte code to be executed?', 'JDK', 'JVM', 'JRE', 'JAVAC', 'JVM'),
(14, 3, 'What is byte code in Java?', 'Code generated by a Java compiler', 'Code generated by a Java Virtual Machine', 'Name of Java source code file', 'Block of code written inside a class', 'Code generated by a Java compiler '),
(15, 3, 'Which of the following are not Java keywords ?', 'double', 'switch', 'then', 'instanceof', 'then'),
(16, 3, 'Which of these have highest precedence?', '()', '++', '*', '>>', '()'),
(17, 3, 'Data type long literals are appended by _____', 'Uppercase L', 'Lowercase L', 'Long', 'Both A and B', 'Both A and B'),
(19, 3, 'Java language was initially called as ________', 'Sumatra', 'J++', 'Oak', 'Pine', 'Oak'),
(20, 3, 'Which one is a template for creating different objects ?', 'An Array', 'A class', 'Interface', 'Method', 'A class'),
(21, 3, 'Which symbol is used to contain the values of automatically initialized arrays?', 'Brackets', 'Braces', 'Parentheses', 'Comma', 'Braces'),
(22, 12, 'What is fullform of AI?', 'Artifical Intelligence', 'August Interaction', 'Amazing Interaction', 'Artificial Interaction', 'Artifical Intelligence'),
(23, 9, 'safsd', 'sfaasdf', 'asdfas', 'adsfsadasdf', 'jkjk', 'jkjkhk');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_name` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `no_of_questions` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_name`, `course_id`, `no_of_questions`, `status`) VALUES
(1, 'C Quiz', 1, 6, 1),
(2, 'Java Quiz', 3, 5, 0),
(4, 'C Quiz - 2', 1, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `topic_master`
--

DROP TABLE IF EXISTS `topic_master`;
CREATE TABLE IF NOT EXISTS `topic_master` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(100) NOT NULL,
  `topic_name` varchar(100) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic_master`
--

INSERT INTO `topic_master` (`topic_id`, `course_id`, `topic_name`) VALUES
(1, 1, 'History of C Language'),
(2, 1, 'printf() and scanf() in C'),
(3, 1, 'Variables in C'),
(4, 1, 'Data Types in C'),
(5, 1, 'Keywords in C'),
(6, 3, 'What is Java'),
(7, 3, ' Features of Java'),
(8, 3, 'How to set path in Java'),
(9, 3, 'Difference between JDK, JRE, and JVM'),
(10, 11, 'Introduction');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

DROP TABLE IF EXISTS `user_master`;
CREATE TABLE IF NOT EXISTS `user_master` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `user_name`, `email`, `password`) VALUES
(2, 'ramesh', 'ramesh12@gmail.com', '77777'),
(3, 'suresh', 'sureshstudy2@gmail.com', 'suresh@123'),
(4, 'salman', 'salman243@gmail.com', 'Slman@123'),
(5, 'sushant', 'sushant876@gmail.com', 'Arun@123'),
(6, 'Arun purohit', 'rajpurohitarun97@gmail.com', '123456');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment_master`
--
ALTER TABLE `enrollment_master`
  ADD CONSTRAINT `Course_id_FK` FOREIGN KEY (`course_id`) REFERENCES `course_master` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `User_id_FK` FOREIGN KEY (`user_id`) REFERENCES `user_master` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
