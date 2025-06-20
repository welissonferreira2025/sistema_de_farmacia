CREATE DATABASE farmacia;
USE farmacia;

CREATE TABLE usuarios(
	id_usuarios INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL UNIQUE,
    cpf CHAR(11) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    telefone VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE administradores(
	id_administradores INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL UNIQUE,
    cpf CHAR(11) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    telefone VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE remedios(
	id_remedios INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL UNIQUE,
    comprimido_gota VARCHAR(255) NOT NULL UNIQUE,
    originalidade VARCHAR(255) NOT NULL UNIQUE,
    tamanho VARCHAR(255) NOT NULL UNIQUE,
    preco DECIMAL NOT NULL UNIQUE
);

CREATE TABLE produtos_de_higiene(
	id_produtos_de_higiene INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL UNIQUE,
    marca VARCHAR(255) NOT NULL UNIQUE,
    tamanho VARCHAR(255) UNIQUE,
    preco DECIMAL NOT NULL UNIQUE
);

INSERT INTO administradores (nome, cpf, email, telefone, senha)
VALUES ("Welisson", "00000000000", "teste@teste.com", "88981403260", "12345");