CREATE DATABASE IF NOT EXISTS base_usuarios;
CREATE TABLE IF NOT EXISTS base_usuarios.usuario (
  id INT(11) NOT NULL AUTO_INCREMENT,
  user VARCHAR(100) NOT NULL,
  correo VARCHAR(100) UNIQUE NOT NULL,
  pass VARCHAR(100) NOT NULL,
  imagen VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (correo)
);
INSERT INTO base_usuarios.usuario(user, correo, pass) VALUES ('Pepe','pepe@gmail.com','12345678');
