create database clinica;
use clinica;

create table veterinario(
codigo int not null auto_increment primary key,
nome varchar(250) not null,
telefone varchar(20) not null,
salario decimal(10,2) not null,
endereco varchar(250) not null
) engine = InnoDB;

select * from veterinario;


