ALTER TABLE  `it_image` ADD  `support` INT NOT NULL DEFAULT  '0' AFTER  `image_url`;
ALTER TABLE  `it_image` CHANGE  `create_date`  `create_date` DATETIME NOT NULL;
ALTER TABLE  `it_image` CHANGE  `update_date`  `update_date` DATETIME NOT NULL