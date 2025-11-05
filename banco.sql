create database industria_alimenticia;
use industria_alimenticia;

create table usuario(
    id int primary key not null AUTO_INCREMENT,
    nome varchar(45) not null,
    email varchar(100) not null unique,
    senha varchar(20) not null
    );

create table tarefa(
    id_tarefa int primary key not null,
    id_usuario int,
    descricao varchar(100) not null,
    nome_setor varchar(100) not null unique,
    prioridade enum ("baixa", "média", "alta"),
    status_tarefa enum("a fazer","fazendo", "pronto") default "a fazer",
    foreign key(id_usuario) references usuario(id)
    );

insert into usuario (nome, email, senha) values ("Eduarda Tomaz", "eduarda_tomaz@gmail.com", "Eduarda@123");