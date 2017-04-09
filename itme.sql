CREATE TABLE IF NOT EXISTS `administrators` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role_id` int(11) unsigned NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flg` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:undelete;1:delete',
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `power` int(11) NOT NULL COMMENT '越小权限越大',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
