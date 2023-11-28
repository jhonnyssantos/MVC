CREATE DATABASE locadora DEFAULT CHARACTER SET utf8;
USE locadora;

CREATE TABLE clientes (
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    flag TINYINT(1)NULL DEFAULT 0, 
    PRIMARY KEY (nome)
); 

CREATE TABLE veiculos (
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    ano varchar(4), 
    cor VARCHAR(20) NOT NULL,
    preco VARCHAR(20) NOT NULL,
    flag TINYINT(1)NULL DEFAULT 0,
    PRIMARY KEY (marca)
);