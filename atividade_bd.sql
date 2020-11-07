CREATE DATABASE atividade_bd;

CREATE TABLE produto(
codigo_produto int NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR (20) NOT NULL,
descrição VARCHAR(150) NOT NULL,
preco DECIMAL (8,2),
imagem VARCHAR (245)
);

ALTER TABLE atividade_bd.produto 
ENGINE = InnoDB;

INSERT INTO produto (codigo_produto, nome, descrição, preco, imagem) 
VALUES (1,'Geladeira', 'Geladeira Frost Free Brastemp Side Iverse 540 litros', '5019.00', 'imagens/geladeira.pngb');

INSERT INTO produto (codigo_produto, nome, descrição, preco, imagem) 
VALUES (2,'Geladeira', 'Geladeira Consul Frost Free Duplex 405 litros cor Inox com Filtro Bem Estar', '2564.05', 'imagens/geladeira2.jpg');

INSERT INTO produto (codigo_produto, nome, descrição, preco, imagem)  
VALUES (3,'fogao', 'Fogão de Piso 4 Bocas Cinza Brastemp Clean BFO4NAR - Bivolt', '1099.00', 'imagens/fogao.jpg');

INSERT INTO produto (codigo_produto, nome, descrição, preco, imagem)  
VALUES (4, 'microondas', 'Micro-ondas Philco 30 Litros PME31', '429.00', 'imagens/microondas2.png');

INSERT INTO produto (codigo_produto, nome, descrição, preco, imagem)  
VALUES (5,'lavalouca', 'Lava-Louças de Piso Brastemp BLF08AS 5 Programas Inox - 220V', '2089.00', 'imagens/lavalouca.jpg');

CREATE TABLE pedidos(
cod_pedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR (20) NOT NULL,
endereço VARCHAR (150) NOT NULL,
telefone varchar (50), 
nome_produto VARCHAR (20) NOT NULL,
valor_unitario DECIMAL(8,2) NOT NULL,
quantidade INT NOT NULL,
valor_total DECIMAL (8,2) NOT NULL
);

ALTER TABLE atividade_bd.pedidos 
ENGINE = InnoDB;

INSERT INTO pedidos (cod_pedido, nome, endereço, telefone, nome_produto, valor_unitario, quantidade, valor_total)
VALUES (1,'Jéssica Prado', 'Rua A, Centro, São Paulo', '2222-2222', 'geladeira', '5019.00', '1', '5019.00');

INSERT INTO pedidos (cod_pedido, nome, endereço, telefone, nome_produto, valor_unitario, quantidade, valor_total)
VALUES (2,'Paulo Ricardo', 'Rua B, Penha, São Paulo', '3333-3333', 'geladeira', '5019.00', '2', '1038.00');

INSERT INTO pedidos (cod_pedido, nome, endereço, telefone, nome_produto, valor_unitario, quantidade, valor_total)
VALUES (3,'Cassia Eller', 'Rua C, Osasco, São Paulo', '4444-4444', 'fogão', '1099.00', '1', '1099.00');

INSERT INTO pedidos (cod_pedido, nome, endereço, telefone, nome_produto, valor_unitario, quantidade, valor_total)
VALUES (4,'Elis Regina', 'Rua D, Niterói, Rio de Janeiro', '5555-5555', 'máquina de lavar', '2850.00', '4', '11400.00');

INSERT INTO pedidos (cod_pedido, nome, endereço, telefone, nome_produto, valor_unitario, quantidade, valor_total)
VALUES (5,'Renato Russo', 'Rua R, Brasilia, Distrito Federal', '6666-6666', 'microondas', '599.00', '4', '599.00');

