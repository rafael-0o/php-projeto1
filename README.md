para informações rodar o projeto:

nome do db:
_projeto_1

o banco de dados foi e deve ser criado pela interface grafica do mySQL.

CREATE TABLE clientes (
id int AUTO_INCREMENT PRIMARY KEY,
cliente VARCHAR(150) NOT NULL,
cidade VARCHAR(100),
estado VARCHAR(50)
)

CREATE TABLE contatos (
id int AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(150) NOT NULL,
numero int,
email VARCHAR(100)
)

o projeto deve ser acessado por:
http://localhost/projeto1
http://localhost/projeto1/admin/?pg=clientes-admin 

o tema escolhido foi a pagina de contatos, o admin vai criar um contato onde ele vai atributos de nome, email, e telefone, assim que criado o cliente que esstiver na pagina normal do site vai poder ver e entrar em contato pelo numero ou email diponibilizado pela página.