create table Clientes (
	id_cliente int auto_increment primary key,
	nome varchar(15),
	sobrenome varchar(15),
	email varchar (50) primary key,
	senha varchar(20),
    credito float(10),
	tipo_usuario int not null
);

create table Prestadores (
	id_prestador int auto_increment primary key,
	nome varchar(15),
	sobrenome varchar(15),
	email varchar (50) primary key,
	senha varchar(20),
    tipo_servico varchar(30),
	tipo_usuario int not null
);

insert into Clientes (nome, sobrenome, email, senha, credito, tipo_usuario) values ("Roberto", "Pacheco", "cliente1@teste.com.br", "senha123", 40.00, 1);
insert into Clientes (nome, sobrenome, email, senha, credito) values ("Pedro", "Landi", "cliente2@teste.com.br", "senha321", 0, 1);

insert into Prestadores (nome, sobrenome, email, senha) values ("Thiago", "Policarpo", "prestador1@teste.com.br", "senha456", "Bombeiro", 2);
insert into Prestadores (nome, sobrenome, email, senha) values ("Jair", "Bolsonaro", "prestador2@teste.com.br", "senha654", "Pescador", 2);