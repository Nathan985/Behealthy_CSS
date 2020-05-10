create database behealthy;

use behealthy;

create table tbl_user(

	idUser int primary key auto_increment,
    nome varchar(30) not null,
    email varchar(60) unique not null,
    senha varchar(20) not null,
    nickname varchar(60) not null unique,
    cargo varchar(10) not null default 'cliente',
    cpf varchar(20) not null unique,
    telefone varchar(20) not null,
    ativo varchar(10) not null default 'ativo',
    arquivo varchar(40) default 'default_user.png'

);

insert into tbl_user (nome, email, senha, nickname, cpf, telefone, arquivo) 
value ('Marcelinho', 'javaeruim@gmail.com', '123456', 'Marcelo', '987456213', '1199999', '00ace9bd31add90bc48868d7ab4d6e76.png');

insert into tbl_user (nome, email, senha, nickname, cpf, telefone, arquivo) 
value ('Nath', 'nathan.rodrigu3s@gmail.com', '123456', 'Nathan', '11111111', '985946110', '0254121eb4bb92462dfbd113be077e64.png');