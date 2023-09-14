<h1 align="center">Landing page 💻</h1>

<p align="center">Landing page com formulário de contato</p>

### 📌 Sobre

Este projeto foi criado com base em uma imagem de uma página landing page, com o objetivo de seguir a estrutura apresentada. No entanto, eu poderia escolher as imagens e texto de minha preferência para a criação do projeto. Além disso, era necessário criar um formulário funcional que se conecta a um banco de dados.

### ✅ Features

- Formulário de contato
- Validações
- Responsividade
- Animações 
- Modo dark e light theme

### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

<div style="display: inline_block">
  <img align="center" alt="html5" src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" />
  <img align="center" alt="css" src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" />
  <img align="center" alt="js" src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
  <img align="center" alt="php" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img align="center" alt="mysql" src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" />
</div><br/>

### 📝 Como executar o projeto
É necessario ter as seguintes ferramentas:
- XAMPP https://www.apachefriends.org/pt_br/download.html
- Visual Studio Code https://code.visualstudio.com/download

Após instalar o XAMPP, É necessário iniciar o servidor Apache e o banco de dados MySql siga as instruções:

Procure esse diretório do xamp que normalmente é esse:
```
C:\xampp\htdocs
```

E mova a pasta do projeto até o diretório apresentado. <br>
Para abrir o projeto no navegador é só acessar esse link
```
localhost/Coloquei aqui o nome da pasta do projeto
```
Depois dentro do o xamp aperte o botão "Admin" do MySql para abrir a página do banco de dados, depois aperte em "Novo" que 
fica localizado no canto superir esquerdo do site, siga e siga as intruções abixo para conectar:<br>

Nome do banco: bdcadastro.<br>
Depois de criar o banco de dados aperte em "SQL" e cole esse código abaixo e depois no final da página clica em continuar que vai criar o banco e já estará funcionado corretamente. Código:

```
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tbcadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `texto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `tbcadastro`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbcadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
```

### ❌ Em caso de erro siga as instruções abaixo:

Crie o banco de dados com o nome bdcadastro em seguinda aperte em importar selecione o arquivo "bdcadastro", que está localizado dentro do arquivo do projeto na pasta "bd" o nome do arquivo é bdcadastro, selecione ele e depois aperte em importa no final da página ai deve da certo.

### 🔗 Link do projeto hospedado e conectado com banco de dados: http://landing-page.wuaze.com/index.php
### 🌐 Imagens do projeto:

<br><br><br>
<h1 align="center">Modo Light ☀️</h1>
<br><br>
<p align="center">
  <img width="500" src="https://user-images.githubusercontent.com/81267688/227668550-24084ab9-6148-4e6f-9986-64310d512664.png" alt="Modo Light">
</p>
<br><br>

<h1 align="center">Modo Dark 🌒</h1>
<br><br>
<p align="center">
  <img width="500" src="https://user-images.githubusercontent.com/81267688/227668591-a6577898-c2f0-43fa-8881-113809186564.png" alt="Modo Dark">
</p>

<br>
<br>
MIT License

Copyright (c) By Vinicius Gomes.



