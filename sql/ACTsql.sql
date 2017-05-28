drop database if exists `ACTsql`;

create database `ACTsql` default character set utf8 COLLATE utf8_general_ci ;

use `ACTsql`;

create table act(

id varchar(20),
name varchar(32),
dcp varchar(2014),
actime varchar(2014),
actsite varchar(2014),
sponsornm varchar(32),
spemail varchar(64),
sptel varchar(32),
spqq varchar(32),

role int default '0',

primary key(name)
)engine=InnoDB default charset=utf8;

create table applicant(

id varchar(20),
appname varchar(32),
appemail varchar(64),
sex varchar(16),
apptel varchar(32),
appqq varchar(32),

role int default '0',

primary key(appname)

)engine=InnoDB default charset=utf8;





