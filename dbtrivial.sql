create database trivial;

use trivial;

create table preguntas (
	id int primary key auto_increment,
    question varchar(500) not null,
    answerOk varchar(50) not null,
    badAnswer1 varchar(50) not null,
    badAnswer2 varchar(50) not null,
    badAnswer3 varchar(50) not null,
    imagen varchar(100) not null,
    dificultad varchar(20) not null
);

create table alumnos (
	id int primary key auto_increment,
    nombre varchar(50) not null,
    puntuacion int not null
);