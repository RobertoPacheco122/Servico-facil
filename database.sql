create table Usuarios (
	id_usuario int auto_increment,
	nome varchar(20),
	sobrenome varchar(20),
	email varchar(45),
	senha varchar(25),
	credito float(10),
	tipo_servico varchar(25),
	tipo_usuario int,
	primary key (id_usuario, email)
);

/*
create table Solicitacoes (
	num_pedido int auto_increment primary key,
	id_usuario_prestador int,
	id_usuario_tomador int,
	condicao varchar(30),
	servico varchar(40),
	tipo_servico varchar(40),
	data_servico varchar(10),
	observacao varchar(120),
	horario varchar(5),
	preco float(10)
)
*/

insert into Usuarios (nome, sobrenome, email, senha, credito, tipo_usuario) values ("Roberto", "Pacheco", "cliente1@teste.com.br", "senha123", 40.00, 1);
insert into Usuarios (nome, sobrenome, email, senha, credito, tipo_usuario) values ("Pedro", "Landi", "cliente2@teste.com.br", "senha321", 0, 1);
insert into Usuarios (nome, sobrenome, email, senha, tipo_servico, tipo_usuario) values ("Thiago", "Policarpo", "prestador1@teste.com.br", "senha456", "Bombeiro Hidráulico", 2);
insert into Usuarios (nome, sobrenome, email, senha, tipo_servico, tipo_usuario) values ("Jair", "Bolsonaro", "prestador2@teste.com.br", "senha654", "Eletricista", 2);