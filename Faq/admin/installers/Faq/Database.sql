-- ----------------------------
-- Table structure for `faqs`
-- ----------------------------
CREATE TABLE `faqs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` longtext NOT NULL,
  `order` int(10) unsigned NOT NULL,
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
