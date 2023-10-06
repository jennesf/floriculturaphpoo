create database floricultura;
use floricultura;
create table usuario (
nome varchar(255),
email varchar(255) primary key,
senha varchar(255));
select * from usuario;

create table produtos (
imagem varchar(255),
nome varchar(255) primary key,
preco double not null);
select * from produtos;