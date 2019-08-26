create table users(
id bigint not null primary key auto_increment,
first_name varchar(50),
last_name varchar(50),
email varchar(255),
password varchar(255),
created_at date,
updated_at date);

create table user(
id bigint not null primary key auto_increment,
first_name varchar(50),
last_name varchar(50),
email varchar(255),
password varchar(255),
created_at date,
updated_at date);

SELECT * FROM users;