CREATE TABLE `book_info`
(
  `book_id` int(11) NOT NULL,
    `title` varchar(100) NOT NULL,
    `author` varchar(100) NOT NULL,
    `description` mediumtext,
    `date_added` datetime DEFAULT CURRENT_TIMESTAMP,
    `availability` varchar(1) DEFAULT 'Y'
);

CREATE TABLE `stud_info`
(
  `stud_id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_init` varchar(50),
  `l_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `reserved_book_count` int(3)
);