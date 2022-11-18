CREATE TABLE Usuarios (
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

CREATE TABLE Solicitacoes (
	num_pedido int auto_increment primary key,
	id_usuario_prestador int,
	id_usuario_tomador int,
	condicao varchar(30),
	servico varchar(40),
	tipo_servico varchar(40),
	data_servico varchar(10),
	observacao varchar(120),
	horario varchar(5),
	preco float(4)
);

CREATE TABLE Servicos (
	id_servico int auto_increment primary key,
	nome varchar(50),
	nome_classe varchar(30),
	endereco varchar(50)
);

CREATE TABLE Tipo_Servicos (
	id_tipo_servico int auto_increment primary key,
	id_servico int,
	nome varchar(100),
	preco float(4)
);


INSERT INTO Servicos (nome, nome_classe) VALUES ("Marcenaria", "icon--lime", "marcenaria.php");
INSERT INTO Servicos (nome, nome_classe) VALUES ("Chaveiro", "icon--keychain", "chaveiro.php");
INSERT INTO Servicos (nome, nome_classe) VALUES ("Bombeiro Hidráulico", "icon--pipe", "hidraulico.php");
INSERT INTO Servicos (nome, nome_classe) VALUES ("Eletricista", "icon--circuit", "eletricista.php");
INSERT INTO Servicos (nome, nome_classe) VALUES ("Ar Condicionado", "icon--airconditioning", "arcondicionado.php");

INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (1, "Conserto de móveis de MDF", 69.69);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (1, "Conserto de móveis de madeira", 99.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (1, "Restauração de móveis antigos", 129.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (2, "Arrombamento de porta", 119.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (2, "Cópia de chave", 12.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (2, "Amolar tesoura", 19.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (3, "Roubar água da rua", 29.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (3, "Roubar água do vizinho", 27.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (3, "Reparo de vazamentos", 19.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (4, "Gato de energia", 56.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (4, "Tigre de energia", 89.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (4, "Instalar aterramento", 99.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (5, "Troca de gás", 56.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (5, "Conserto", 89.99);
INSERT INTO Tipo_Servicos (id_servico, nome, preco) VALUES (5, "Limpeza", 99.99);

INSERT INTO Usuarios (nome, sobrenome, email, senha, credito, tipo_usuario) VALUES ("Roberto", "Pacheco", "cliente1@teste.com.br", "senha123", 40.00, 1);
INSERT INTO Usuarios (nome, sobrenome, email, senha, credito, tipo_usuario) VALUES ("Pedro", "Landi", "cliente2@teste.com.br", "senha321", 0, 1);
INSERT INTO Usuarios (nome, sobrenome, email, senha, tipo_servico, tipo_usuario) VALUES ("Thiago", "Policarpo", "prestador1@teste.com.br", "senha456", "Bombeiro Hidráulico", 2);
INSERT INTO Usuarios (nome, sobrenome, email, senha, tipo_servico, tipo_usuario) VALUES ("Jair", "Bolsonaro", "prestador2@teste.com.br", "senha654", "Eletricista", 2);

INSERT INTO Solicitacoes (id_usuario_prestador, id_usuario_tomador, condicao, servico, tipo_servico, data_servico, observacao, horario, preco) VALUES (4, 1, "Execução", "Desentupimento", "Bombeiro Hidráulico", "21/09/2022", "Nenhuma", "14:30", 69.69);
INSERT INTO Solicitacoes (id_usuario_prestador, id_usuario_tomador, condicao, servico, tipo_servico, data_servico, observacao, horario, preco) VALUES (4, 1, "Pendente", "Conserto de Vazamento", "Bombeiro Hidráulico", "29/09/2022", "Nenhuma", "17:30", 89.99);