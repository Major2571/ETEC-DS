create database projetojava;

use projetojava;

CREATE TABLE usuario (
id BIGINT(10) AUTO_INCREMENT,
nome VARCHAR(255),
cpf VARCHAR(255),
rg VARCHAR(200),
email VARCHAR(255),
telefone VARCHAR(255),
endereco  VARCHAR(255),
cep  VARCHAR(255),
bairro  VARCHAR(255),
login  VARCHAR(255),
senha  VARCHAR(255),
PRIMARY KEY (id)
)

select * from usuario;