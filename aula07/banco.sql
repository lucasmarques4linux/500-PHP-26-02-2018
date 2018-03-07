
CREATE DATABASE aula07;

USE aula07;

CREATE TABLE usuarios( id INT NOT NULL AUTO_INCREMENT, usuario VARCHAR(255) NOT NULL, senha VARCHAR(40) NOT NULL, PRIMARY KEY(id) );

CREATE TABLE posts(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,usuario_id INT NOT NULL,post VARCHAR(140) NOT NULL,FOREIGN KEY (usuario_id) REFERENCES usuarios(id));

INSERT INTO usuarios (usuario,senha) VALUES ('lucas','123');

INSERT INTO usuarios (usuario,senha) VALUES ('joao','456');

INSERT INTO usuarios (usuario,senha) VALUES ('jose','789');

SELECT * FROM usuarios;

SELECT * FROM usuarios WHERE id = 2;

UPDATE usuarios SET senha = '123456' WHERE id = 2;

SELECT * FROM usuarios WHERE id = 2;

DELETE FROM usuarios WHERE id = 3;

INSERT INTO posts (usuario_id,post) VALUES (1,"Meu Primeiro Post");
INSERT INTO posts (usuario_id,post) VALUES (2,"Meu Primeiro Post");
INSERT INTO posts (usuario_id,post) VALUES (3,"Meu Primeiro Post");
INSERT INTO posts (usuario_id,post) VALUES (4,"Meu Primeiro Post");
INSERT INTO posts (usuario_id,post) VALUES (1,"Meu Segundo Post");
INSERT INTO posts (usuario_id,post) VALUES (2,"Meu Segundo Post");
INSERT INTO posts (usuario_id,post) VALUES (3,"Escrevendo mais posts");
INSERT INTO posts (usuario_id,post) VALUES (4,"Escrevendo mais posts");

SELECT * FROM posts ORDER BY usuario_id;
SELECT * FROM posts ORDER BY usuario_id LIMIT 2;
SELECT * FROM posts ORDER BY usuario_id LIMIT 2,2;

SELECT * FROM posts INNER JOIN usuarios ON posts.usuario_id = usuarios.id;

SELECT * FROM posts LEFT JOIN usuarios ON posts.usuario_id = usuarios.id;
SELECT * FROM posts RIGHT JOIN usuarios ON posts.usuario_id = usuarios.id;

SELECT * FROM usuarios u LEFT JOIN posts p ON u.id = p.usuario_id;

SELECT u.id ,p.id FROM usuarios u INNER JOIN posts p ON u.id=p.usuario_id;