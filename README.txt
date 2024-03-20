Create table in the mysql
create database jbj_food_court;

//contactus_table

create table contactus_table (Name varchar(25),Email varchar(25),Mobile
Number int(11),Message varchar(100));

//signup_table

create table signup_table(Username varchar(20),Password varchar(10),
confirm_password varchar(10));

//menu_list

create table menu_list (menu_id int(11),menu_name varchar(20));

//food_details

create table food_details (food_id int not null AUTO_INCREMENT PRIMARY KEY,menu_id int,food_name varchar(50),food_price int, 
                           FOREIGN KEY(menu_id) REFERENCES menu_list(menu_id) );
