-- MySQL dump 8.22
--
-- Host: localhost    Database: elcmr
---------------------------------------------------------
-- Server version	3.23.55-log

--
-- Current Database: elcmr
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ elcmr;

USE elcmr;

--
-- Table structure for table 'groups'
--

DROP TABLE IF EXISTS groups;
CREATE TABLE groups (
  group_id int(11) NOT NULL auto_increment,
  group_name varchar(255) NOT NULL default '',
  PRIMARY KEY  (group_id)
) TYPE=MyISAM;

--
-- Dumping data for table 'groups'
--



--
-- Table structure for table 'modules'
--

DROP TABLE IF EXISTS modules;
CREATE TABLE modules (
  modules_id int(11) NOT NULL auto_increment,
  page_id int(11) NOT NULL default '0',
  modules_name varchar(255) NOT NULL default '',
  modules_path varchar(255) NOT NULL default '',
  PRIMARY KEY  (modules_id),
  UNIQUE KEY page_id (page_id)
) TYPE=MyISAM;

--
-- Dumping data for table 'modules'
--


INSERT INTO modules VALUES (100,0,'Benutzerverwaltung','/users/index.inc.php');
INSERT INTO modules VALUES (200,2,'test','/var/inc/test');

--
-- Table structure for table 'users'
--

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id int(11) NOT NULL auto_increment,
  login varchar(50) NOT NULL default '',
  password varchar(50) NOT NULL default '',
  surname varchar(50) NOT NULL default '',
  forename varchar(50) NOT NULL default '',
  email varchar(255) NOT NULL default '',
  active tinyint(1) NOT NULL default '0',
  lastlogin datetime NOT NULL default '0000-00-00 00:00:00',
  wronglogin tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (id)
) TYPE=MyISAM;

--
-- Dumping data for table 'users'
--


INSERT INTO users VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','Mustermann','Max','',1,'2004-06-05 18:26:20',0);
INSERT INTO users VALUES (2,'test','900150983cd24fb0d6963f7d28e17f72','Kunze','Martin','',0,'0000-00-00 00:00:00',0);

--
-- Table structure for table 'users_group_relationship'
--

DROP TABLE IF EXISTS users_group_relationship;
CREATE TABLE users_group_relationship (
  relation_id int(11) NOT NULL auto_increment,
  users_id int(11) NOT NULL default '0',
  group_id int(11) NOT NULL default '0',
  PRIMARY KEY  (relation_id)
) TYPE=MyISAM;

--
-- Dumping data for table 'users_group_relationship'
--



--
-- Table structure for table 'users_modules_relation'
--

DROP TABLE IF EXISTS users_modules_relation;
CREATE TABLE users_modules_relation (
  id int(11) NOT NULL auto_increment,
  users int(11) NOT NULL default '0',
  modules int(11) NOT NULL default '0',
  PRIMARY KEY  (id)
) TYPE=MyISAM;

--
-- Dumping data for table 'users_modules_relation'
--


INSERT INTO users_modules_relation VALUES (1,1,1);

