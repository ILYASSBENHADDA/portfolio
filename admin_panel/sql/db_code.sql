-- Creation of Database
CREATE DATABASE portfolio;

-- Creation of table Admin Key
CREATE TABLE admin_key (
    password varchar(250) not null
);

-- Insert data into table Admin Key
INSERT INTO admin_key (password)
    VALUES (MD5('me.ily#06'));

-- Creation of table infos to Edit Info's
CREATE TABLE infos (
    id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    full_name varchar(50) not null,	
    phone int(50) not null,	
    email varchar(50) not null,
    age int(40) not null,	
    my_location	varchar(100) not null,	
    first_description varchar(800) not null,
    second_description varchar(250) not null,	
    cv_file	varchar(100) not null,	
    github varchar(100) not null,
    facebook varchar(100) not null,	
    twitter	varchar(100) not null,	 
    instagram varchar(100) not null,	
    linkedin varchar(100) not null
);

-- Creation of table Essance devis for one year
CREATE TABLE projects (
    id int(20) not null AUTO_INCREMENT PRIMARY KEY,
	project_title varchar(255) not null,			
	project_description	varchar(500) not null,			
	project_image varchar(100) not null,		
	project_link varchar(100) not null,		
	project_date date not null current_timestamp()
);