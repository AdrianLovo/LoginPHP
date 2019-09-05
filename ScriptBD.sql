CREATE DATABASE login
GO
USE login
GO
CREATE TABLE IF NOT EXISTS usuario(
    idUsuario INT NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
    usuario VARCHAR(50),
    password VARCHAR(80),
    email VARCHAR(50),
    PRIMARY KEY (idUsuario)
)
GO
CREATE USER 'usuario'@'localhost' IDENTIFIED BY ''
GO
GRANT ALL PRIVILEGES ON * . * TO 'usuario'@'localhost'
GO
SELECT * FROM usuario