create database tccdatabase;

use tccdatabase;

create table users (
    user_id int not null primary key auto_increment,
    user_name varchar(100) not null,
    user_email varchar(100) not null,
    user_password varchar(100) not null,
    terms boolean not null
);

insert into users(user_name, user_email, user_password, terms)
values
("João Mendes", "joao@gmail.com", "1234", 1),
("Maria Tereza", "maria@hotmail.com", "4321", 1),
("Cléber Oliveira", "cleber@outlook.com", "2143", 1),
("José Henrique", "jose@gmail.com", "4312", 1);