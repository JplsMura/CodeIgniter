drop database if exists bd_projetocode;

create database bd_projetocode;

use bd_projetocode;

create table tb_usuarios(
id int primary key auto_increment,
nome varchar(200),
email varchar(200),
senha varchar(50)
);

create table tb_produtos (
id int primary key auto_increment,
nome varchar (200),
descricao text,
quantidade int,
preco decimal (8.2),
usuario_id int
);


insert into tb_produtos (nome, descricao, quantidade, preco, usuario_id) values ('Monitor', 'Monitor Legal', 10, 1050.00, 1);
insert into tb_produtos (nome, descricao, quantidade, preco, usuario_id) values ('Mouse', 'Mouse Legal', 20, 50.00, 1);
insert into tb_produtos (nome, descricao, quantidade, preco, usuario_id) values ('Led', 'Led Legal', 100, 30.00, 1);
insert into tb_produtos (nome, descricao, quantidade, preco, usuario_id) values ('Teclado', 'Teclado Legal', 100, 100.00, 1);
insert into tb_produtos (nome, descricao, quantidade, preco, usuario_id) values ('Roteador', 'Roteador Legal', 200, 300.00, 1);
insert into tb_produtos (nome, descricao, quantidade, preco, usuario_id) values ('Telefone', 'Tel Legal', 1000, 90.00, 1);

insert into tb_usuarios (nome, email, senha) values ('joao', 'joao@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');	


select * from tb_produtos;

select * from tb_usuarios;