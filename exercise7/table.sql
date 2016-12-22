/*
 *CREATE DATABASE MANUALLY NAME IT guestform
 *
 */

CREATE TABLE guestform(
	`user_id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `complete_name` varchar(255),
    `nickname` varchar(45),
    `Email_Address` varchar(255),
    `Home_Address` varchar(255),
    `gender` varchar(6),
    `cellphone` varchar(11),
    `comment` varchar(500)
    );

CREATE TABLE trivia(
	`ID` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `QUESTION` varchar(500),
	`ANSWER` varchar(500)
    );