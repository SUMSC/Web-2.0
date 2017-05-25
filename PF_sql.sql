drop database if exists `Web`;

create database `Web` default character set utf8 COLLATE utf8_general_ci ;

use `Web`;

create table repairmen(

	rid int unsigned auto_increment,
	name varchar(32),
	contact varchar(64),
	gender varchar(16),
	free int default '0',

	primary key(rid)
    
)engine=InnoDB default charset=utf8;

create table faq(

	qid int unsigned auto_increment,
	ask varchar(1024),
	question varchar(2048),
	primary key(qid)
	
)engine=InnoDB auto_increment=1 default charset=utf8;


create table consult(

	cid int unsigned auto_increment,
	rid int NOT NULL, 
	consultant varchar(16),
	consultantContact varchar(24),    
	description varchar(1024),
	submitTime datetime,
	primary key(cid)
	
)engine=InnoDB auto_increment=1 default charset=utf8;

