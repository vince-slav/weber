
CREATE TABLE users(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(250) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  senha VARCHAR(250) NOT NULL
);


CREATE TABLE categorias(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(250) NOT NULL,
  descr TEXT(60000)
);

CREATE TABLE produtos(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(250) NOT NULL,
  preco FLOAT(5, 2) NOT NULL,
  sit CHAR(1) NOT NULL,
  id_cat INT NOT NULL,
  FOREIGN KEY(id_cat)
  REFERENCES categorias(id)
);