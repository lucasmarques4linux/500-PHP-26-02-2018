-- MYSQL

CREATE TABLE tb_periodos(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	descricao VARCHAR(255)
);

CREATE TABLE tb_cursos(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(100),
	tipo VARCHAR(50),
	cargaHoraria INT,
	requisitos TEXT
);

CREATE TABLE tb_alunos(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(255),
	email VARCHAR(150),
	senha VARCHAR(100),
	cpf VARCHAR(11),
	rg VARCHAR(20),
	dtNasc DATE
);

CREATE TABLE tb_turmas(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cursoId INT NOT NULL REFERENCES tb_cursos(id),
	periodoId INT NOT NULL REFERENCES tb_periodos(id),
	instrutor VARCHAR(255)
);

CREATE TABLE tb_matricular(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	alunoId INT NOT NULL REFERENCES tb_alunos(id),
	turmaId INT NOT NULL REFERENCES tb_turmas(id),
	prova1 FLOAT,
	prova2 FLOAT,
	recuperacao FLOAT,
	frequencia INT
);