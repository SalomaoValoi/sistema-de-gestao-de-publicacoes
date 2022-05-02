use preparacao_pwa2022;

create table autor(
id int primary key auto_increment,
email varchar(100) unique not null,
nome varchar(100) not null,
username varchar(50) unique not null,
password varchar(64) not null);

create table categoria(
id int primary key auto_increment,
nome varchar(100) unique not null);

create table artigo(
id int primary key auto_increment,
titulo varchar(400) not null,
texto text not null,
categoria int,
autor int,
data_publicacao timestamp not null default now(),
data_actualizacao timestamp not null default now(),
constraint foreign key(categoria) references categoria(id) on update cascade,
constraint foreign key(autor) references autor(id) on update cascade);

select* from autor;
select * from artigo order by id desc;