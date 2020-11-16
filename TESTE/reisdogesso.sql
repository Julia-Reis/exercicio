CREATE DATABASE reisdogesso;

USE reisdogesso;

CREATE TABLE IF NOT EXISTS USUARIO(
	id_usuario int auto_increment primary key,
    nome varchar(30),
    telefone varchar(30),
    email varchar(40),
    senha varchar(32) -- 32 porque vai ser criptografada   
);

