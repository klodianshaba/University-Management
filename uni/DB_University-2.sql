/*
-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2015 at 07:37 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

-- Licence by RBK
-- all rights reserved
-- instructions :
-- 1.IF you have XAMPP start MYSQL & Apache
-- 2.Open your browser(Chrome,IE,Opera...)
-- 3. Go to http://localhost/phpmyadmin/
-- 7.then go to the SQL section and paste the following code

--!!!!Important!!!!!
--If you want to logged in app try username as username and password as password only for secretary
*/

/*CREATE DB*/

CREATE DATABASE university;
USE university;
/*CREATE TABLES*/

CREATE TABLE IF NOT EXISTS `deget` (
	`Dg_id` int(11) NOT NULL AUTO_INCREMENT,
	`Emri` varchar(100),
	`Prog_studimi` varchar(100),
	`D_id` int(11),
	`vitet` int(11),
	PRIMARY KEY (Dg_id)
);

CREATE TABLE IF NOT EXISTS `departamentet` (
	`D_id` int(11) NOT NULL AUTO_INCREMENT,
	`Emri` varchar(100),
	PRIMARY KEY (D_id)
);

CREATE TABLE IF NOT EXISTS `lendet` (
	`L_id` int(11) NOT NULL AUTO_INCREMENT,
	`Emri` varchar(100),
	`Kredite` int(11),
	`Viti` int(11),
	`L_P_id` int(11),/*profesori i leksioneve*/
	`S_P_id` int(11),/*profesori i seminareve*/
	`Dg_id` int(11),
	PRIMARY KEY (L_id)
);

CREATE TABLE IF NOT EXISTS `njoftimet` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`titulli` varchar(150),
	`pershkrimi` varchar(9000),
	`foto` varchar(150),
	`data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`autori` varchar(50),
	`id_autori` int(20),
	`Dg_id` int(11),
	`viti` int(11),
	PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS `profesoret` (
	`P_id` int(11) NOT NULL AUTO_INCREMENT,
	`Emri` varchar(50),
	`Mbiemri` varchar(50),
	`Status` boolean not null default 0,
	`Datelindja` date,
	`Foto` varchar(150),
	`Email` varchar(150),
	`Type` varchar(50),
	`nrtel` varchar(50),
	`Username` varchar(50),
	`Password` varchar(50),
	`D_id` int(11),
	`Dg_id` int(11),
	PRIMARY KEY (P_id)
);

CREATE TABLE IF NOT EXISTS `sekretaria` (
	`s_id` int(11) NOT NULL AUTO_INCREMENT,
	`emri` varchar(50),
	`mbiemri` varchar(50),
	`username` varchar(50),
	`password` varchar(50),
	`status` boolean not null default 0,
	`datelindja` date,
	`foto` varchar(150),
	`email` varchar(150),
	`type` varchar(50),
	`nrtel` varchar(50),
	PRIMARY KEY (s_id)
);

CREATE TABLE IF NOT EXISTS `student` (
	`ID` int(11) NOT NULL AUTO_INCREMENT,
	`Emri` varchar(50),
	`Mbiemri` varchar(50),
	`Viti` int(11) not null default 1,
	`Status` boolean not null default 0,
	`Datelindja` date,
	`Foto` varchar(150),
	`Email` varchar(150),
	`nrtel` varchar(50),
	`Grupi` varchar(2),
	`Type` varchar(50),
	`Username` varchar(50),
	`Password` varchar(50),
	`Dg_id` int(11),
	PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS `notat` (
	`N_id` int(11) NOT NULL AUTO_INCREMENT,
	`Aktiv` boolean not null default 0,
	`Ngeles` boolean not null default 0,
	`Nota` int(11),
	`ID` int(11),
	`L_id` int(11),
	PRIMARY KEY (N_id)
);

CREATE TABLE IF NOT EXISTS `orari` (
	`O_id` int(11) NOT NULL AUTO_INCREMENT,
	`Dita` varchar(50),
	`Ora` varchar(50),
	`LOS` varchar(50),
	`ID` int(11),
	`L_id` int(11),
	`Dg_id` int(11) NOT NULL,
	`Viti`  int(11) NOT NULL ,
	`Grupi` int(11) NOT NULL ,
	PRIMARY KEY (O_id)
);

 /*ADD FOREING KEY TO THE TABLES*/

/*Shtojm te dhenat e sekretares qe aplikacioni te funksionoj*/
INSERT INTO sekretaria (emri,mbiemri,username,password,email,type,nrtel) VALUES ('your name','last name','username','password','you@example.com','sekretare',1234567890);




/*Now try it!!!!!!*/
ALTER TABLE orari
ADD FOREIGN KEY (L_id)
REFERENCES lendet(L_id);





