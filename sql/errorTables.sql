CREATE TABLE  `faqerrors` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`id_data` INT NOT NULL ,
`header` TEXT NOT NULL ,
`content` TEXT NOT NULL ,
`md5` VARCHAR( 250 ) NOT NULL ,
INDEX (  `id_data` )
) ENGINE = MYISAM ;

ALTER TABLE  `faqdata` CHANGE  `links_state`  `links_state` VARCHAR( 250 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL