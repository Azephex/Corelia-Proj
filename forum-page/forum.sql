SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `forum`



-- Table structure for table `category`


CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(78) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Dumping data for table `category`


INSERT INTO `category` (`cat_id`, `cat_title`, `cat_description`, `time`) VALUES
(1, 'Composers', 'Talks about composers','2022-01-31 11:16:13'),
(2, 'Music', 'Discussions about music pieces by original composers.', '2022-01-31 11:16:13'),
(3, 'Instruments', 'Discussions about instruments and linked composers', '2022-01-31 11:16:13'),
(4, 'Recordings', 'Finding original recordings by composers.', '2022-01-31 11:16:13'),
(5, 'Corelia', 'Questions and inquiries for website managers.', '2022-01-31 11:16:48');

-- --------------------------------------------------------


-- Table structure for table `comments`


CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_thread_id` int(11) NOT NULL,
  `comment_user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------


-- Table structure for table `threads`


CREATE TABLE `threads` (
  `thread_id` int(11) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_description` text NOT NULL,
  `thread_cat_id` int(11) NOT NULL,
  `thread_user_id` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------


-- Table structure for table `users`


CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_uname` varchar(12) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Indexes for table `category`

ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);


-- Indexes for table `comments`
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);


-- Indexes for table `threads`
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);


-- Indexes for table `users`

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_uname` (`user_uname`),
  ADD UNIQUE KEY `user_email` (`user_email`);


-- AUTO_INCREMENT for table `category`
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


-- AUTO_INCREMENT for table `comments`
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


-- AUTO_INCREMENT for table `threads`
ALTER TABLE `threads`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


-- AUTO_INCREMENT for table `users`
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
