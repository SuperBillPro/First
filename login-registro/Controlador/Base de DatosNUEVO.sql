CREATE DATABASE IF NOT EXISTS base_de_usuarios;
CREATE TABLE IF NOT EXISTS base_de_usuarios.usuario (
  id INT(11) NOT NULL AUTO_INCREMENT,
  usr_name VARCHAR(100) NOT NULL,
  usr_email VARCHAR(100) UNIQUE NOT NULL,
  usr_pass VARCHAR(100) NOT NULL,
  imagen VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (id)
);
INSERT INTO base_de_usuarios.usuario(usr_name, usr_email, usr_pass) VALUES ('Pepe','pepe@gmail.com','12345678');
select * from base_de_usuarios.usuario;
