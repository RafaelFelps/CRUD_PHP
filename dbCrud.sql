CREATE DATABASE dbCrud;

USE dbCrud;

CREATE TABLE usuario(
	codUsuario              INT AUTO_INCREMENT PRIMARY KEY                  NOT NULL,
	nome			VARCHAR(50)					NOT NULL,
        dataNascimento          CHAR(10)                                        NOT NULL,	
        endereco		VARCHAR(50)					NOT NULL,
        rg			CHAR(8)                                         NOT NULL,
	telefone		CHAR(11)					NULL,
	

);


-- INSERT INTO ususario (dataNascimento,nome,rg,telefone,endereco) 
-- VALUES ('2018/11/20','Rafael Felipe da Silva',12345678,12345678910,'Rua Tiradentes')
-- SELECT * FROM usuario
    
    
  
