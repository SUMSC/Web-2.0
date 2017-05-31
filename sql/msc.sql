drop database if exists `MSC`;

create database `MSC` default character set utf8 COLLATE utf8_general_ci ;

use `MSC`;


/* 
    PF Part
*/

create table pfRepairmen(

	rid int unsigned auto_increment,
	name varchar(32),
	contact varchar(64),
	gender varchar(16),
	free int default '0',

	primary key(rid)
    
)engine=InnoDB default charset=utf8;

create table pfFaq(

	qid int unsigned auto_increment,
	ask varchar(1024),
	question varchar(2048),
	primary key(qid)
	
)engine=InnoDB auto_increment=1 default charset=utf8;


create table pfConsult(

	cid int unsigned auto_increment,
	rid int NOT NULL, 
	consultant varchar(16),
	consultantContact varchar(24),    
	description varchar(1024),
	submitTime datetime,
	primary key(cid)
	
)engine=InnoDB auto_increment=1 default charset=utf8;


/*
        ACT Part
*/

create table actAct(

id varchar(20),
name varchar(32),
dcp varchar(2048),
actime varchar(2048),
actsite varchar(2048),
sponsornm varchar(32),
spemail varchar(64),
sptel varchar(32),
spqq varchar(32),

role int default '0',

primary key(name)
)engine=InnoDB default charset=utf8;

create table actApplicant(

id varchar(20),
appname varchar(32),
appemail varchar(64),
sex varchar(16),
apptel varchar(32),
appqq varchar(32),

role int default '0',

primary key(appname)

)engine=InnoDB default charset=utf8;


/*
    TU Part
*/


create table tuFiles(

	    username varchar(32),  -- 用户名
	    admin varchar(4),  -- 用户对该文件的管理权限
	    filename varchar(64),
	    filedirectory varchar(64),  -- 位置
	    uploadtime DATETIME,  -- 上传时间
	    changetime DATETIME,   -- 更改时间
	    fileid int auto_increment,
	    filetype varchar(5),   -- 文件类型(格式)
	    remarks varchar(128),   -- 标记备注啥的

        primary key(fileid)

)engine=InnoDB default charset=utf8;


/* 
    GT Part

*/
create table gt_index(
	
	name varchar(128),
	href varchar(128),

	primary key(name)

)engine=InnoDB default charset=utf8;
create table gtBook(
	
	name varchar(128),
	href varchar(128),

	primary key(name)

)engine=InnoDB default charset=utf8;

create table gtSoftware(
	
	name varchar(128),
	href varchar(128),

	primary key(name)

)engine=InnoDB default charset=utf8;

create table gtWeb(
	
	name varchar(128),
	href varchar(128),

	primary key(name)
)engine=InnoDB default charset=utf8;

