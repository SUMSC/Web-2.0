drop database if exists `INFORMATION`;

create database INFORMATION default character set utf8 COLLATE utf8_general_ci ;

use INFORMATION;

create table files(

	    uname varchar(32),  -- 用户名
	    admin varchar(4),  -- 用户对该文件的管理权限
	    filename varchar(50),
	    filedir varchar(50),  -- 位置
	    uploadtime DATETIME,  -- 上传时间
	    changetime DATETIME,   -- 更改时间
	    fileid int auto_increment,
	    ftype varchar(5),   -- 文件类型(格式)
	    remarks varchar(100),   -- 标记备注啥的

        primary key(fileid)

)engine=InnoDB default charset=utf8;
