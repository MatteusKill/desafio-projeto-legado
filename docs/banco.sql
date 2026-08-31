CREATE DATABASE desafio_senac;

USE desafio_senac;

CREATE TABLE usuarios (
	id INT PRIMARY KEY auto_increment,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) not null
);

ALTER TABLE usuarios ADD COLUMN senha VARCHAR(255) NOT NULL;

CREATE TABLE roles_access (
	id INT PRIMARY KEY auto_increment,
    nome VARCHAR(15) NOT NULL,
    id_usuario INT NOT NULL,
    
    CONSTRAINT FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

INSERT INTO usuarios (nome,email, senha) VALUES ("Admin", "admin@teste.senac", "admin123");

INSERT INTO roles_access (nome, id_usuario) VALUES ("administrador", 1);

DROP table roles_access;

DESC usuarios;

SELECT * FROM usuarios;

SELECT * FROM roles_access;

SHOW TABLES;