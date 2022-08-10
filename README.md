CODE DE CONCEPTION DE LA BASE DE DONNÉE:

create database blog;

create table users(idu int primary key auto_increment,image varchar(255) not null,nom varchar(50) not null,prenom varchar(50) not null,email varchar(255) not null,password varchar(60));

 create table post(idp int primary key auto_increment,title varchar(50) not null,description text not null,image_name varchar(255) not null,date
varchar(50) not null,idU int not null,constraint foreign key(idu) references users(idu));# blog
